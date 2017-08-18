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
use App\DisposisiModel;
use App\PetunjukModel;
use App\SifatModel;
class KasiController extends Controller
{
    public function index(){
        $data = array(
             'surat'=>InboxModel::count(),
             'last_login'=>session('last_login')
        );
        return view('kasiView.dashboard',$data);
    }
    public function inbox(){
        return view('kasiView.inbox');
    }
    public function outbox(){
        return view('kasiView.outbox');
    }
    public function chart(){
        return view('kasiView.chart');
    }
    public function account(){
        $data = array(
            'id_pengguna'=>session('id_pengguna'),
            'last_login'=>session('last_login'),
            'username'=>session('username')
        );
        return view('kasiView.account',$data);
    }
    public function updateUser(Request $request){
        $data = $request->all();
        $message = array(
            'id_pengguna.required'=>'ID Pengguna Harus Di Isi',
            'id_pengguna.numeric'=>'ID Pengguna Harus Berupa Angka, Dilarang Merubah Value Dalam InputBox',
            'password_lama.required'=>'Password Lama Harus Di Isi',
            'password_baru.required'=>'Password Baru Harus Di Isi',
            'password_baru.min'=>'Password Baru Minimal 5 Karakter',
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
                'message'=>'ID Anggota Anda Tidak Terdaftar',
                'status'=>'error'
            );
            return response()->json($response);
        }
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
    public function detailInbox(Request $request){
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
