<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Datatables;
use Validator;
use Fpdf;
use DomPDF;


use App\PenggunaModel;
use App\InboxModel;
use App\OutboxFirstModel;
use App\OutboxSecondModel;
use App\OutboxFaxModel;
use App\DisposisiModel;
use App\PetunjukModel;
use App\SifatModel;
class SekreController extends Controller
{
    public function dashboard(){
        $surat_keluar = OutboxFirstModel::count() + OutboxFaxModel::count() + OutboxSecondModel::count();
        $data = array(
            'last_login'=>session('last_login'),
            'surat_masuk'=>InboxModel::count(),
            'surat_keluar'=>$surat_keluar
        );
        return view('sekreView.dashboard',$data);
    }
    public function account(){
        $data = array(
            'id_pengguna'=>session('id_pengguna'),
            'last_login'=>session('last_login'),
            'username'=>session('username')
        );
        return view('sekreView.account',$data);
    }
    public function inbox(){
        return view('sekreView.inbox');
    }
    public function outbox(){
        return view('sekreView.outbox');
    }
    public function chart(){

    }
    public function updateSec(Request $request){
        if($request->ajax()){
            $data = $request->all();
            $message = array(
                'id_pengguna.required'=>'ID Pengguna Harus Di Isi',
                'id_pengguna.numeric'=>'ID Pengguna Harus Berupa Angka, Dilarang Merubah Value Dalam InputBox',
                'password_lama.required'=>'Password Lama Harus Di Isi',
                'password_baru.required'=>'Password Baru Harus Di Isi',
                'password_baru.min'=>'Password Anda Tidak Valid, Atau Kurang Dari 5 Karakter',
                'password_baru.max'=>'Password Baru Maksimal 30 Karakter',
                'password_baru.confirmed'=>'Input Password Baru Harus Sama'
            );
            Validator::make($data,[
                'id_pengguna'=>['required','numeric'],
                'password_lama'=>['required'],
                'password_baru'=>['required','min:5','max:30','confirmed']
            ],$message)->validate();
            $check = PenggunaModel::where('id_pengguna',$data['id_pengguna'])->get();
            $rows = $check->count();
            if($rows>0){
                if(password_verify($data['password_lama'],$check[0]['password'])){
                    $dataUpdate = array(
                        'password'=>bcrypt($data['password_baru'])
                    );
                    $dataAcc = PenggunaModel::find($data['id_pengguna']);
                    $dataAcc->update($dataUpdate);
                    $response = array(
                        'message'=>'Data Akun Sudah Terupdate',
                        'status'=>'info'
                    );
                    return response()->json($response);
                }else{
                    $response = array(
                        'message'=>'Anda Salah Menginput Password Lama',
                        'status'=>'error'
                    );
                    return response()->json($response);
                }
            }else{
                $response = array(
                    'message'=>'ID Anggota Anda TIdak Terdaftar',
                    'status'=>'error'
                );
                return response()->json($response);
            }
        }else{
            exit('Not An Ajax Request!');
        }
    }
    public function storeInbox(Request $request){
        $getData = $request->all();
        $message = array(
            'tanggal_terima.required'=>'Tanggal Terima Harus Di Isi',
            'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
            'nomor_surat.required'=>'Nomor Surat Harus Di Isi',
            'nomor_surat.max'=>'Nomor Surat Maksimal 100 Karakter',
            'asal_surat.required'=>'Asal Surat Harus Di Isi',
            'asal_surat.max'=>'Asal Surat Maksimal 100 Karakter',
            'perihal.required'=>'Perihal Harus Di Isi',
            'perihal.max'=>'Perihal Maksimal 500 Karakter'
        );
        Validator::make($getData,[
                'tanggal_terima'=>['required'],
                'tanggal_surat' => ['required'],
                'nomor_surat'=>['required','max:100'],
                'asal_surat'=>['required','max:150'],
                'perihal'=>['required','max:500']
        ],$message)->validate();
        $data['tanggal_terima'] = Carbon::parse($getData['tanggal_terima'])->format('Y-m-d');
        $data['tanggal_surat'] = Carbon::parse($getData['tanggal_surat'])->format('Y-m-d');
        $data['nomor_surat'] = $getData['nomor_surat'];
        $data['asal_surat'] = $getData['asal_surat'];
        $data['perihal'] = $getData['perihal'];
        $getId = InboxModel::create($data)->id_surat;
        
        $dataSifat = array(
            'id_surat'=>$getId,
            'sangat_rahasia'=>"0",
            'rahasia'=>"0",
            'sangat_segera'=>"0",
            'segera'=>"0",
            'biasa'=>"0",
            'sifat_lainnya'=>null
        );

        $dataDisposisi = array(
            'id_surat'=>$getId,
            'kasi_adm_bimbingan'=>"0",
            'kasi_bim_penagihan'=>"0",
            'kasi_intelijen'=>"0",
            'kasi_adm_bukti'=>"0",
            'ketua_kelompok_satu'=>"0",
            'ketua_kelompok_dua'=>"0",
            'disposisi_lainnya'=>null
        );
        $dataPetunjuk = array(
            'id_surat'=>$getId,
            'diproses'=>"0",
            'ditindaklanjuti'=>"0",
            'dimanfaatkan'=>"0",
            'diadministrasikan'=>"0",
            'dipantau'=>"0",
            'diedarkan'=>"0",
            'dipelajari'=>"0",
            'dicatat'=>"0",
            'arsip'=>"0",
            'petunjuk_lainnya'=>null
        );
        
        PetunjukModel::create($dataPetunjuk);
        DisposisiModel::create($dataDisposisi);
        SifatModel::create($dataSifat);
        $response = array(
            'message'=>'Surat Masuk Berhasil Di Simpan',
            'status'=>'success'
        );
        return response()->json($response);
    }
    public function deleteInbox(Request $request){
        if($request->ajax()){
            $req = $request->all();
            $id = $req['id'];
            InboxModel::destroy($id);
            $response = array(
                'message'=>'Data Surat Masuk Berhasil Di Hapus',
                'status'=>'success'
            );
            return json_encode($response);
        }else{
            exit("Not an Ajax Request!");
        }
    }
    public function storeDisposisi(Request $request){
        $getData = $request->all();
        $message = array(
            'id_surat.required'=>'ID Surat Harus Di Isi',
            'id_surat.numeric'=>'ID Surat Harus Berbentuk Angka, Di Larang Merubah Value Dalam InputBox',
            'tanggal_terima.required'=>'Tanggal Terima Harus Di Isi',
            'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
            'nomor_surat.required'=>'Nomor Surat Harus Di Isi',
            'asal_surat.required'=>'Asal Surat Harus Di Isi',
            'asal_surat.max'=>'Asal Surat Maksimal 150 Karakter',
            'perihal.required'=>'Perihal Harus Di Isi',
            'perihal.max'=>'Perihal Maksimal 500 Karakter',
            'disposisi_lainnya.max'=>'Maksimal Karakter 60 Untuk Disposisi Lainnya',
            'sifat_lainnya.max'=>'Maksimal Karakter 60 Untuk Sifat Lainnya',
            'petunjuk_lainnya'=>'Maksimal Karakter 60 Untuk Petunjuk Lainnya'
        );
        Validator::make($getData,[
            'id_surat'=>['required','numeric'],
            'tanggal_terima' => ['required'],
            'tanggal_surat'=>['required'],
            'nomor_surat'=>['required'],
            'asal_surat'=>['required','max:150'],
            'perihal'=>['required','max:500'],
            'disposisi_lainnya'=>['max:60'],
            'sifat_lainnya'=>['max:60'],
            'petunjuk_lainnya'=>['max:60']
        ],$message)->validate();

        $id = $getData['id_surat'];
        $inbox = InboxModel::find($id);
        $disposisi = DisposisiModel::find($id);
        $sifat = SifatModel::find($id);
        $petunjuk = PetunjukModel::find($id);
        
        $inbox->update($getData);
        $disposisi->update($getData);
        $sifat->update($getData);
        $petunjuk->update($getData);
        $response = array(
            'message'=>'Data Disposisi Surat Berhasil Diupdate',
            'status'=>'success'
        );
        return json_encode($response);
    }
    public function dataInbox(Request $request){
        if($request->ajax()){
            $inbox =  DB::table('tbl_inbox')->get();
            return Datatables::of($inbox)->make(true);
        }else{
            exit('Not An Ajax Request!');
        }
    }
    public function dataDisposisi(Request $request){
        if($request->ajax()){
            $data =  DB::table('tbl_inbox')
                    ->join('tbl_disposisi','tbl_disposisi.id_surat','=','tbl_inbox.id_surat')
                    ->join('tbl_petunjuk','tbl_petunjuk.id_surat','=','tbl_inbox.id_surat')
                    ->join('tbl_sifat','tbl_sifat.id_surat','=','tbl_inbox.id_surat')
                    ->get();
            return Datatables::of($data)->make(true);
        }else{
            exit('Not An Ajax Request');
        }
    }
    public function detailDisposisi(Request $request){
        if($request->ajax()){
            $req = $request->all();
            $id = $req['id'];
            $data =  DB::table('tbl_inbox')
                        ->where('tbl_inbox.id_surat',$id)
                        ->join('tbl_disposisi','tbl_disposisi.id_surat','=','tbl_inbox.id_surat')
                        ->join('tbl_petunjuk','tbl_petunjuk.id_surat','=','tbl_inbox.id_surat')
                        ->join('tbl_sifat','tbl_sifat.id_surat','=','tbl_inbox.id_surat')
                        ->get();
            return json_encode($data);
        }else{
            exit("Not an Ajax Request!");
        }
    }
    public function nextInbox(Request $request){
        if($request->ajax()){

            $req = $request->all();
            $id = $req['id'];
            $data =  DB::table('tbl_inbox')
                        ->where('tbl_inbox.id_surat','>',$id)
                        ->join('tbl_disposisi','tbl_disposisi.id_surat','=','tbl_inbox.id_surat')
                        ->join('tbl_petunjuk','tbl_petunjuk.id_surat','=','tbl_inbox.id_surat')
                        ->join('tbl_sifat','tbl_sifat.id_surat','=','tbl_inbox.id_surat')
                        ->limit(1)
                        ->get();
            return json_encode($data);
        }else{
            exit("Not an Ajax Request!");
        }
    }
    public function prevInbox(Request $request){
        if($request->ajax()){
            $req = $request->all();
            $id = $req['id'];
            $data =  DB::table('tbl_inbox')
                        ->where('tbl_inbox.id_surat','<',$id)
                        ->join('tbl_disposisi','tbl_disposisi.id_surat','=','tbl_inbox.id_surat')
                        ->join('tbl_petunjuk','tbl_petunjuk.id_surat','=','tbl_inbox.id_surat')
                        ->join('tbl_sifat','tbl_sifat.id_surat','=','tbl_inbox.id_surat')
                        ->limit(1)
                        ->orderBy('tbl_inbox.id_surat', 'desc')
                        ->get();
            return json_encode($data);
        }else{
            exit("Not an Ajax Request!");
        }

    }
    public function printBatch(Request $request){
        if(count($request['id_surat_print'])>0){
            $data = $request['id_surat_print'];
            foreach($data as $row){
                $dt =  DB::table('tbl_inbox')
                        ->where('tbl_inbox.id_surat',$row)
                        ->join('tbl_disposisi','tbl_disposisi.id_surat','=','tbl_inbox.id_surat')
                        ->join('tbl_petunjuk','tbl_petunjuk.id_surat','=','tbl_inbox.id_surat')
                        ->join('tbl_sifat','tbl_sifat.id_surat','=','tbl_inbox.id_surat')
                        ->first();
                
                setlocale(LC_TIME, 'ind');
                Fpdf::SetTitle('Print Lembar Disposisi');
                Fpdf::SetMargins(20,10,20);
                Fpdf::AddPage('P','A4');
                Fpdf::Image(asset('assets/img/logo.jpg'),30,20,25,25);
                Fpdf::SetFont('Arial', 'B', 10);
                Fpdf::Cell(0,7,'','',2,'C');

                Fpdf::Cell(35,7,'','',0,'C');
                Fpdf::SetFont('Arial','', 13);
                Fpdf::Cell(0,5,'KEMENTERIAN KEUANGAN REPUBLIK INDONESIA','',2,'C');
                Fpdf::SetFont('Arial','', 9);
                Fpdf::Cell(0,5,'DIREKTORAT JENDERAL PAJAK','',2,'C');
                Fpdf::SetFont('Arial','', 13);
                Fpdf::Cell(0,5,'KANWIL DJP KALIMANTAN TIMUR DAN UTARA','',2,'C');
                Fpdf::SetFont('Arial','', 6);
                Fpdf::Cell(0,3,'','',2,'C');
                Fpdf::Cell(0,3,'JALAN RUHUI RAHAYU NOMOR 1 RING ROAD, BALIKPAPAN 76114 KOTAK POS 336','',2,'C');
                Fpdf::Cell(0,3,'TELEPON (0542) 8860721, 8860723 FAKSIMILE: (0542) 2260722 SITUS: www.pajak.go.id','',2,'C');
                Fpdf::Cell(0,3,'LAYANAN INFORMASI DAN PENGADUAN KRING PAJAK: (021) 150020','',2,'C');
                Fpdf::Cell(0,3,'EMAIL: pengaduan@pajak.go.id, informasi@pajak.go.id','',1,'C');
                Fpdf::Cell(0,2,'','',1,'C');
                Fpdf::SetFont('Arial','B', 10);
                Fpdf::Cell(0,4.5,'LEMBAR DISPOSISI BIDANG PEMERIKSAAN, PENAGIHAN, INTELIJEN DAN PENYIDIKAN','1LRDT',1,'C');
                Fpdf::SetFont('Arial','', 8);
                Fpdf::Cell(0,4.5,'PERHATIAN: Dilarang Memisahkan Sehelai Suratpun yang Tergabung dalam Berkas Ini','1LRDT',2,'C');
                Fpdf::Cell(0,6,'','',2,'C');
                //=============================HEADER===============================//
                Fpdf::SetFont('Arial','', 9);
                Fpdf::Cell(40,4.5,'Agenda Bidang','',0,'');
                Fpdf::Cell(3,4.5,': ','',0,'');
                Fpdf::Cell(0,4.5,$dt->id_surat,'',1,'');

                Fpdf::SetFont('Arial','B', 9);
                Fpdf::Cell(40,4.5,'Tanggal Terima','',0,'');
                Fpdf::Cell(3,4.5,': ','',0,'');
                Fpdf::Cell(0,4.5,Carbon::parse($dt->tanggal_terima)->formatLocalized('%A, %d %B %Y'),'',1,'');

                Fpdf::SetFont('Arial','', 9);
                Fpdf::Cell(40,4.5,'Tanggal Surat','',0,'');
                Fpdf::Cell(3,4.5,': ','',0,'');
                Fpdf::Cell(0,4.5,Carbon::parse($dt->tanggal_surat)->formatLocalized('%A, %d %B %Y'),'',1,'');

                Fpdf::Cell(40,4.5,'Nomor Surat','',0,'');
                Fpdf::Cell(3,4.5,': ','',0,'');
                Fpdf::Cell(0,4.5,$dt->nomor_surat,'',1,'');

                Fpdf::Cell(40,4.5,'Asal Surat','',0,'');
                Fpdf::Cell(3,4.5,': ','',0,'');
                Fpdf::MultiCell(0,4.5,$dt->asal_surat,'',1,'');
                Fpdf::Cell(40,4.5,'Perihal','',0,'');
                Fpdf::Cell(3,4.5,': ','',0,'');
                Fpdf::MultiCell(0,4.5,$dt->perihal,'',1,'');
                Fpdf::Cell(0,6,'','',2,'C');
                //========================DATA SURAT==============================//
                Fpdf::SetFont('Arial','B', 9);
                Fpdf::Cell(0,4.5,'SIFAT SURAT:','',1,'');
                Fpdf::SetFont('Arial','', 9);
                
                Fpdf::Cell(10,4.5,($dt->sangat_rahasia=='1'? Fpdf::Image(asset('assets/img/chk.png'),Fpdf::GetX()+3.5,Fpdf::GetY(),4,4) : Fpdf::Image(asset('assets/img/unchk.png'),Fpdf::GetX()+3.5,Fpdf::GetY(),4,4)),'',0,'');
                Fpdf::Cell(80,4.5,'Sangat Rahasia','',0,'');

                Fpdf::Cell(10,4.5,($dt->segera=='1'? Fpdf::Image(asset('assets/img/chk.png'),Fpdf::GetX()+3.5,Fpdf::GetY(),4,4) : Fpdf::Image(asset('assets/img/unchk.png'),Fpdf::GetX()+3.5,Fpdf::GetY(),4,4)),'',0,'');
                Fpdf::Cell(0,4.5,'Segera','',1,'');

                Fpdf::Cell(10,4.5,($dt->rahasia=='1'? Fpdf::Image(asset('assets/img/chk.png'),Fpdf::GetX()+3.5,Fpdf::GetY(),4,4) : Fpdf::Image(asset('assets/img/unchk.png'),Fpdf::GetX()+3.5,Fpdf::GetY(),4,4)),'',0,'');
                Fpdf::Cell(80,4.5,'Rahasia','',0,'');

                Fpdf::Cell(10,4.5,($dt->biasa=='1'? Fpdf::Image(asset('assets/img/chk.png'),Fpdf::GetX()+3.5,Fpdf::GetY(),4,4) : Fpdf::Image(asset('assets/img/unchk.png'),Fpdf::GetX()+3.5,Fpdf::GetY(),4,4)),'',0,'');
                Fpdf::Cell(0,4.5,'Biasa','',1,'');
                
                Fpdf::Cell(10,4.5,($dt->sangat_segera=='1'? Fpdf::Image(asset('assets/img/chk.png'),Fpdf::GetX()+3.5,Fpdf::GetY(),4,4) : Fpdf::Image(asset('assets/img/unchk.png'),Fpdf::GetX()+3.5,Fpdf::GetY(),4,4)),'',0,'');
                Fpdf::Cell(80,4.5,'Sangat Segera','',0,'');
                
                Fpdf::Cell(10,4.5,($dt->sifat_lainnya!==null? Fpdf::Image(asset('assets/img/chk.png'),Fpdf::GetX()+3.5,Fpdf::GetY(),4,4) : Fpdf::Image(asset('assets/img/unchk.png'),Fpdf::GetX()+3.5,Fpdf::GetY(),4,4)),'',0,'');
                ($dt->sifat_lainnya!==null? Fpdf::MultiCell(0,4.5,$dt->sifat_lainnya,'',1,'') : Fpdf::Cell(0,4.5,'..................................................................','',1,''));
                
                Fpdf::Cell(0,6,'','',1,'C');
                //=====================CHECKBOX SIFAT==============================//
                Fpdf::SetFont('Arial','B', 9);
                Fpdf::Cell(0,4.5,'DISPOSISI KEPALA BIDANG KEPADA:','',1,'');
                Fpdf::SetFont('Arial','', 9);

                Fpdf::Cell(10,4.5,($dt->kasi_adm_bimbingan=='1'? Fpdf::Image(asset('assets/img/chk.png'),Fpdf::GetX()+3.5,Fpdf::GetY(),4,4) : Fpdf::Image(asset('assets/img/unchk.png'),Fpdf::GetX()+3.5,Fpdf::GetY(),4,4)),'',0,'');
                Fpdf::Cell(80,4.5,'Kasi Administrasi dan Bimbingan Pemeriksaan','',0,'');

                Fpdf::Cell(10,4.5,($dt->kasi_ketua_kelompok_satu=='1'? Fpdf::Image(asset('assets/img/chk.png'),Fpdf::GetX()+3.5,Fpdf::GetY(),4,4) : Fpdf::Image(asset('assets/img/unchk.png'),Fpdf::GetX()+3.5,Fpdf::GetY(),4,4)),'',0,'');
                Fpdf::Cell(0,4.5,'Ketua Kelompok I','',1,'');

                Fpdf::Cell(10,4.5,($dt->kasi_bim_penagihan=='1'? Fpdf::Image(asset('assets/img/chk.png'),Fpdf::GetX()+3.5,Fpdf::GetY(),4,4) : Fpdf::Image(asset('assets/img/unchk.png'),Fpdf::GetX()+3.5,Fpdf::GetY(),4,4)),'',0,'');
                Fpdf::Cell(80,4.5,'Kasi Bimbingan Penagihan','',0,'');

                Fpdf::Cell(10,4.5,($dt->kasi_ketua_kelompok_dua=='1'? Fpdf::Image(asset('assets/img/chk.png'),Fpdf::GetX()+3.5,Fpdf::GetY(),4,4) : Fpdf::Image(asset('assets/img/unchk.png'),Fpdf::GetX()+3.5,Fpdf::GetY(),4,4)),'',0,'');
                Fpdf::Cell(0,4.5,'Ketua Kelompok II','',1,'');

                Fpdf::Cell(10,4.5,($dt->kasi_intelijen=='1'? Fpdf::Image(asset('assets/img/chk.png'),Fpdf::GetX()+3.5,Fpdf::GetY(),4,4) : Fpdf::Image(asset('assets/img/unchk.png'),Fpdf::GetX()+3.5,Fpdf::GetY(),4,4)),'',0,'');
                Fpdf::Cell(80,4.5,'Kasi Intelijen','',0,'');

                Fpdf::Cell(10,4.5,($dt->disposisi_lainnya!==null ? Fpdf::Image(asset('assets/img/chk.png'),Fpdf::GetX()+3.5,Fpdf::GetY(),4,4) : Fpdf::Image(asset('assets/img/unchk.png'),Fpdf::GetX()+3.5,Fpdf::GetY(),4,4)),'',0,'');
                ($dt->disposisi_lainnya!==null? Fpdf::MultiCell(0,4.5,$dt->disposisi_lainnya,'',1,'') : Fpdf::Cell(0,4.5,'..................................................................','',1,''));
                

                Fpdf::Cell(10,4.5,($dt->kasi_adm_bukti=='1'? Fpdf::Image(asset('assets/img/chk.png'),Fpdf::GetX()+3.5,Fpdf::GetY(),4,4) : Fpdf::Image(asset('assets/img/unchk.png'),Fpdf::GetX()+3.5,Fpdf::GetY(),4,4)),'',0,'');
                Fpdf::Cell(80,4.5,'Kasi Administrasi Bukti Permulaan dan Penyidikan','',1,'');
                
                Fpdf::Cell(0,6,'','',1,'C');
                //=====================CHECKBOX SIFAT==============================//
                Fpdf::SetFont('Arial','B', 9);
                Fpdf::Cell(40,4.5,'PETUNJUK:','',1,'');
                Fpdf::SetFont('Arial','', 9);

                Fpdf::Cell(10,4.5,($dt->diproses=='1'? Fpdf::Image(asset('assets/img/chk.png'),Fpdf::GetX()+3.5,Fpdf::GetY(),4,4) : Fpdf::Image(asset('assets/img/unchk.png'),Fpdf::GetX()+3.5,Fpdf::GetY(),4,4)),'',0,'');
                Fpdf::Cell(80,4.5,'Diproses','',0,'');

                Fpdf::Cell(10,4.5,($dt->diedarkan=='1'? Fpdf::Image(asset('assets/img/chk.png'),Fpdf::GetX()+3.5,Fpdf::GetY(),4,4) : Fpdf::Image(asset('assets/img/unchk.png'),Fpdf::GetX()+3.5,Fpdf::GetY(),4,4)),'',0,'');
                Fpdf::Cell(0,4.5,'Diedarkan/diketahui','',1,'');

                Fpdf::Cell(10,4.5,($dt->ditindaklanjuti=='1'? Fpdf::Image(asset('assets/img/chk.png'),Fpdf::GetX()+3.5,Fpdf::GetY(),4,4) : Fpdf::Image(asset('assets/img/unchk.png'),Fpdf::GetX()+3.5,Fpdf::GetY(),4,4)),'',0,'');
                Fpdf::Cell(80,4.5,'Ditindaklanjuti','',0,'');

                Fpdf::Cell(10,4.5,($dt->dipelajari=='1'? Fpdf::Image(asset('assets/img/chk.png'),Fpdf::GetX()+3.5,Fpdf::GetY(),4,4) : Fpdf::Image(asset('assets/img/unchk.png'),Fpdf::GetX()+3.5,Fpdf::GetY(),4,4)),'',0,'');
                Fpdf::Cell(0,4.5,'Dipelajari/dipedomani','',1,'');

                Fpdf::Cell(10,4.5,($dt->dimanfaatkan=='1'? Fpdf::Image(asset('assets/img/chk.png'),Fpdf::GetX()+3.5,Fpdf::GetY(),4,4) : Fpdf::Image(asset('assets/img/unchk.png'),Fpdf::GetX()+3.5,Fpdf::GetY(),4,4)),'',0,'');
                Fpdf::Cell(80,4.5,'Dimanfaatkan','',0,'');

                Fpdf::Cell(10,4.5,($dt->dicatat=='1'? Fpdf::Image(asset('assets/img/chk.png'),Fpdf::GetX()+3.5,Fpdf::GetY(),4,4) : Fpdf::Image(asset('assets/img/unchk.png'),Fpdf::GetX()+3.5,Fpdf::GetY(),4,4)),'',0,'');
                Fpdf::Cell(0,4.5,'Catat dan Kembali ke Kabid','',1,'');

                Fpdf::Cell(10,4.5,($dt->diadministrasikan=='1'? Fpdf::Image(asset('assets/img/chk.png'),Fpdf::GetX()+3.5,Fpdf::GetY(),4,4) : Fpdf::Image(asset('assets/img/unchk.png'),Fpdf::GetX()+3.5,Fpdf::GetY(),4,4)),'',0,'');
                Fpdf::Cell(80,4.5,'Diadministrasikan (TU)','',0,'');

                Fpdf::Cell(10,4.5,($dt->arsip=='1'? Fpdf::Image(asset('assets/img/chk.png'),Fpdf::GetX()+3.5,Fpdf::GetY(),4,4) : Fpdf::Image(asset('assets/img/unchk.png'),Fpdf::GetX()+3.5,Fpdf::GetY(),4,4)),'',0,'');
                Fpdf::Cell(0,4.5,'Arsip/File','',1,'');
                
                Fpdf::Cell(10,4.5,($dt->dipantau=='1'? Fpdf::Image(asset('assets/img/chk.png'),Fpdf::GetX()+3.5,Fpdf::GetY(),4,4) : Fpdf::Image(asset('assets/img/unchk.png'),Fpdf::GetX()+3.5,Fpdf::GetY(),4,4)),'',0,'');
                Fpdf::Cell(80,4.5,'Dipantau Pelaksanaannya','',0,'');

                Fpdf::Cell(10,4.5,($dt->petunjuk_lainnya!==null ? Fpdf::Image(asset('assets/img/chk.png'),Fpdf::GetX()+3.5,Fpdf::GetY(),4,4) : Fpdf::Image(asset('assets/img/unchk.png'),Fpdf::GetX()+3.5,Fpdf::GetY(),4,4)),'',0,'');
                ($dt->petunjuk_lainnya!==null ? Fpdf::MultiCell(0,4.5,$dt->petunjuk_lainnya,'',1,'') : Fpdf::Cell(0,4.5,'..................................................................','',1,''));
                
                
                Fpdf::Cell(0,6,'','',1,'C');
                //=====================CHECKBOX PETUNJUK============================//
                Fpdf::SetFont('Arial','B', 9);
                Fpdf::Cell(0,4.5,'CATATAN KEPALA BIDANG:','',1,'');
                Fpdf::SetFont('Arial','', 9);
                if($dt->catatan!==null){
                    Fpdf::MultiCell(0,4.5,$dt->catatan,'',1,'');
                }
                //===================CATATAN KEPALA BIDANG==========================//
            }
            return response(Fpdf::Output('I','Print','UTF-8'))->header('Content-Type','application/pdf');
        }else{
            return redirect('kasi/inbox');
        }
    }
}
