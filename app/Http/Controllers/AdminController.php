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
class AdminController extends Controller
{
    public function index()
    {
        $data = array(
            'admin'=>PenggunaModel::where('status','=','1')->count(),
            'user'=>PenggunaModel::where('status','!=','1')->count(),
            'surat'=>InboxModel::count()
        );
        // return $data;
        return view('adminView.dashboard',$data);
    }

    public function admin_panel()
    {
        return view('adminView.admin');
    }

    public function user_panel()
    {
        return view('adminView.user');
    }

    public function inbox_panel()
    {
        return view('adminView.inbox');
    }

    public function outbox_panel()
    {
        return view('adminView.outbox');
    }

    public function logout()
    {
        $data = PenggunaModel::where('status','!=','1')->get();
        return $data;
    }

    public function storeAdm(Request $request)
    {
        $data = $request->all();
        $message = array(
            'username.required'=>'Username Harus Di Isi',
            'password.required'=>'Password Harus Di Isi',
            'username.unique'=>'Username Sudah Terdaftar',
            'username.max'=>'Username Maksimal 30 Karakter',
            'username.min'=>'Username Minimal 5 Karakter',
            'password.confirmed'=>'Password Harus Sama',
            'password.max'=>'Password Maksimal 30 Karakter',
            'password.min'=>'Password Minimal 5 Karakter'            
        );
        Validator::make($data,[
            'username'=>['required','unique:tbl_pengguna','max:30','min:5'],
            'password'=>['required','confirmed','max:30','min:5']
        ],$message)->validate();
        $data = $request->all();
        $date = Carbon::now();
        $now = Carbon::createFromFormat('Y-m-d H:i:s',$date,'UTC');
        $now->setTimezone('Asia/Singapore');
        $insert = array(
            'username'=>$data['username'],
            'password'=>bcrypt($data['password']),
            'status'=>'1',
            'last_login'=> $now
        );
        // return $insert;
        PenggunaModel::create($insert);
        $arrResponse = array(
            'status'=>'success',
            'message'=>'Berhasil Menambah Admin'
        );
        return json_encode($arrResponse);
    }

    public function storeUser(Request $request)
    {
        $data = $request->all();
        $message = array(
            'username.required'=>'Username Harus Di Isi',
            'username.max'=>'Username Maksimal 30 Karakter',
            'username.min'=>'Username Minimal 5 Karakter',
            'username.unique'=>'Username Sudah Terdaftar',
            'password.required'=>'Password Harus Di Isi',
            'password.confirmed'=>'Password Harus Sama',
            'password.max'=>'Password Maksimal 30 Karakter',
            'password.min'=>'Password Minimal 5 Karakter',
            'password_confirmation.required'=>'Ulangi Password',
            'status.numeric'=>'Status Harus Berupa Angka, DiLarang Merubah Value Dari Combobox',
            'status.required'=>'Status Harus Di Isi'
        );
        Validator::make($data,[
            'username'=>['required','unique:tbl_pengguna','max:30','min:5'],
            'password'=>['required','confirmed','max:30','min:5'],
            'password_confirmation'=>['required'],
            'status'=>['required','numeric']
        ],$message)->validate();
        $date = Carbon::now();
        $now = Carbon::createFromFormat('Y-m-d H:i:s',$date,'UTC');
        $now->setTimezone('Asia/Singapore');
        $insert = array(
            'username'=>$data['username'],
            'password'=>bcrypt($data['password']),
            'status'=>$data['status'],
            'last_login'=> $now
        );
        // return $insert;
        PenggunaModel::create($insert);
        $arrResponse = array(
            'status'=>'success',
            'message'=>'Berhasil Menambah User'
        );
        return json_encode($arrResponse);
    }

    public function dataAdm(Request $request)
    {
        if($request->ajax()){
            $data = PenggunaModel::where('status','1')->get();
            return Datatables::of($data)->make(true);
        }else{
            exit("Not an AJAX request!");
        }
    }

    public function dataUser(Request $request)
    {
        if($request->ajax()){
            $data = PenggunaModel::where('status','!=','1')->get();
            return Datatables::of($data)->make(true);
        }else{
            exit("Not an AJAX request!");
        }
    }

    public function dataInbox(Request $request)
    {
        if($request->ajax()){
            $inbox =  DB::table('tbl_inbox')->get();
            return Datatables::of($inbox)->make(true);
        }else{
            exit("Not an AJAX request");
        }
    }
    public function dataDisposisi(Request $request)
    {
        if($request->ajax()){
            $data =  DB::table('tbl_inbox')
                    ->join('tbl_disposisi','tbl_disposisi.id_surat','=','tbl_inbox.id_surat')
                    ->join('tbl_petunjuk','tbl_petunjuk.id_surat','=','tbl_inbox.id_surat')
                    ->join('tbl_sifat','tbl_sifat.id_surat','=','tbl_inbox.id_surat')
                    ->get();
            return Datatables::of($data)->make(true);
        }else{
            exit("Not an AJAX request");
        }
    }
    public function getAdmin(Request $request)
    {
        if($request->ajax()){
            $req = $request->all();
            $data = PenggunaModel::find($req['id']);
            return json_encode($data);
        }else{
            exit("Not an AJAX Request!");
        }
    }

    public function deleteAdmin(Request $request)
    {
        if($request->ajax()){
            $req = $request->all();
            $id = $req['id'];
            PenggunaModel::destroy($id);
            $response = array(
                'message'=>'Admin Berhasil Di Hapus',
                'status'=>'success'
            );
            return json_encode($response);
        }else{
            exit("Not an Ajax Request!");
        }
    }

    public function updateAdmin(Request $request)
    {
        if($request->ajax()){
            $req = $request->all();
            $id = $req['id_pengguna'];
            $message = array(
                'id_pengguna.required'=>'ID Pengguna Harus Di Isi, DiLarang Merubah Value Dari TextBox',
                'id_pengguna.numeric'=>'ID Pengguna Harus Berupa Angka',
                'username_update.required'=>'Username Harus Di Isi',
                'username_update.min'=>'Username Minimal 5 Karakter',
                'username_update.max'=>'Username Maksimal 30 Karakter',
                'username_update.unique'=>'Username Sudah Terdaftar',
                'password_update.min'=>'Password Minimal 5 Karakter',
                'password_update.max'=>'Password Maksimal 30 Karakter',
                'password_update.required'=>'Password Harus Di Isi',
                'password_update.confirmed'=>'Password Harus Sama',
                'password_update_confirmation.required'=>'Ulangi Password'
            );
            Validator::make($req, [
                'id_pengguna'=>['required','numeric'],
                'username_update' => ['required',Rule::unique('tbl_pengguna','username')->ignore($id,'id_pengguna'),'min:5','max:30'],
                'password_update'=>['required','confirmed','min:5','max:30'],
                'password_update_confirmation'=>['required']
            ],$message)->validate();
            $dataUpdate = array(
                'username'=>$req['username_update'],
                'password'=>bcrypt($req['password_update'])
            );
            $dataPengguna = PenggunaModel::find($id);
            $dataPengguna->update($dataUpdate);
            $response = array(
                'message'=>'Admin Berhasil Di Update',
                'status'=>'success'
            );
            return response()->json($response);
        }else{
            exit("Not an Ajax Request");
        }
    }

    public function getUser(Request $request)
    {
        if($request->ajax()){
            $req = $request->all();
            $data = PenggunaModel::find($req['id']);
            return response()->json($data);
        }else{
            exit("Not an Ajax Request!!");
        }
    }

    public function deleteUser(Request $request)
    {
        if($request->ajax()){
            $req = $request->all();
            $id = $req['id'];
            PenggunaModel::destroy($id);
            $response = array(
                'message'=>'User Berhasil Di Hapus',
                'status'=>'success'
            );
            return response()->json($response);
        }else{
            exit("Not an Ajax ");
        }
    }

    public function updateUser(Request $request)
    {
        if($request->ajax()){
            $req = $request->all();
            $id=$req['id_pengguna'];
            $message = array(
                'id_pengguna.required'=>'ID Pengguna Harus Di Isi',
                'id_pengguna.numeric'=>'ID Pengguna Harus Berupa Angka, DiLarang Merubah Value Dari TextBox',
                'username_update.required'=>'Username Harus Di Isi',
                'username_update.unique'=>'Username Sudah Terdaftar',
                'username_update.min'=>'Username Minimal 5 Karakter',
                'username_update.max'=>'Username Maksimal 30 Karakter',
                'password_update.required'=>'Password Harus Di Isi',
                'password_update.confirmed'=>'Password Harus Sama',
                'password_update.min'=>'Password Minimal 5 Karakter',
                'password_update.max'=>'Password Maksimal 30 Karakter',
                'password_update_confirmation.required'=>'Ulangi Password',
                'status_update.required'=>'Status Harus Di Isi',
                'status_update.numeric'=>'Status Harus Berupa Angka, DiLarang Merubah Value Dari Combobox'
            );
            Validator::make($req,[
                'id_pengguna'=>['required','numeric'],
                'username_update' => ['required',Rule::unique('tbl_pengguna','username')->ignore($id,'id_pengguna'),'min:5','max:30'],
                'password_update'=>['required','confirmed','min:5','max:30'],
                'password_update_confirmation'=>['required'],
                'status_update'=>['required','numeric']
            ],$message)->validate();
            $dataUpdate = array(
                'username'=>$req['username_update'],
                'password'=>bcrypt($req['password_update']),
                'status'=>$req['status_update']
            );
            $dataPengguna = PenggunaModel::find($id);
            $dataPengguna->update($dataUpdate);
            $response = array(
                'message'=>'User Berhasil Di Update',
                'status'=>'success'
            );
            return response()->json($response);
        }else{
            exit("Not an Ajax Request");
        }
    }

    public function storeInboxB(Request $request)
    {
        $getData = $request->all();
        $no = 0;
        
        for($no;$no<count($getData['tanggalTerima']);$no++){
            Validator::make($getData,[
                'tanggalTerima.*'=>['required'],
                'tanggalSurat.*' => ['required'],
                'nomorSurat.*'=>['required'],
                'asalSurat.*'=>['required'],
                'perihal.*'=>['required']
            ])->validate();
            $data['tanggal_terima'] = Carbon::parse($getData['tanggalTerima'][$no])->format('Y-m-d');
            $data['tanggal_surat'] = Carbon::parse($getData['tanggalSurat'][$no])->format('Y-m-d');
            $data['nomor_surat'] = $getData['nomorSurat'][$no];
            $data['asal_surat'] = $getData['asalSurat'][$no];
            $data['perihal'] = $getData['perihal'][$no];
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
        }

        $response = array(
            'message'=>'Surat Masuk Berhasil Di Simpan',
            'status'=>'success'
        );
        return response()->json($response);
    }
    public function storeInbox(Request $request)
    {
        $getData = $request->all();
        $message = array(
            'tanggal_terima.required'=>'Tanggal Terima Harus Di Isi',
            'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
            'nomor_surat.required'=>'Nomor Surat Harus Di Isi',
            'asal_surat.required'=>'Asal Surat Harus Di Isi',
            'asal_surat.max'=>'Asal Surat Maksimal 100 Karakter',
            'perihal.required'=>'Perihal Harus Di Isi',
            'perihal.max'=>'Perihal Maksimal 255 Karakter'
        );
        Validator::make($getData,[
                'tanggal_terima'=>['required'],
                'tanggal_surat' => ['required'],
                'nomor_surat'=>['required'],
                'asal_surat'=>['required','max:100'],
                'perihal'=>['required','max:255']
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

    public function storeDisposisi(Request $request)
    {
        $getData = $request->all();
        Validator::make($getData,[
            'id_surat'=>['required'],
            'tanggal_terima' => ['required'],
            'tanggal_surat'=>['required'],
            'nomor_surat'=>['required'],
            'asal_surat'=>['required'],
            'perihal'=>['required']
        ])->validate();

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
    public function deleteInbox(Request $request)
    {
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
    public function detailInbox(Request $request)
    {
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
    public function detailDisposisi(Request $request)
    {
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
    public function detailDisposisiNext(Request $request)
    {   
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
    public function detailDisposisiPrev(Request $request)
    {
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
    public function printPreview($id)
    {

    }
    public function printBatch(Request $request)
    {
        if(count($request['id_surat_print'])>0){
            $data = $request['id_surat_print'];
            foreach($data as $row){
                $dt =  DB::table('tbl_inbox')
                        ->where('tbl_inbox.id_surat',$row)
                        ->join('tbl_disposisi','tbl_disposisi.id_surat','=','tbl_inbox.id_surat')
                        ->join('tbl_petunjuk','tbl_petunjuk.id_surat','=','tbl_inbox.id_surat')
                        ->join('tbl_sifat','tbl_sifat.id_surat','=','tbl_inbox.id_surat')
                        ->first();
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
                Fpdf::SetFont('Arial','', 10);
                Fpdf::Cell(0,5,'KANWIL DJP KALIMANTAN TIMUR DAN UTARA','',2,'C');
                Fpdf::SetFont('Arial','', 6);
                Fpdf::Cell(0,3,'','',2,'C');
                Fpdf::Cell(0,3,'JALAN RUHUI RAHAYU NOMOR 1 RING ROAD, BALIKPAPAN 76114 KOTAK POS 336','',2,'C');
                Fpdf::Cell(0,3,'TELEPON (0542) 8860721 FAKSIMILE: (0542) 2260722 SITUS: www.pajak.go.id','',2,'C');
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
                Fpdf::Cell(0,4.5,$dt->tanggal_terima,'',1,'');

                Fpdf::SetFont('Arial','', 9);
                Fpdf::Cell(40,4.5,'Tanggal Surat','',0,'');
                Fpdf::Cell(3,4.5,': ','',0,'');
                Fpdf::Cell(0,4.5,$dt->tanggal_surat,'',1,'');

                Fpdf::Cell(40,4.5,'Nomor Surat','',0,'');
                Fpdf::Cell(3,4.5,': ','',0,'');
                Fpdf::Cell(0,4.5,$dt->nomor_surat,'',1,'');

                Fpdf::Cell(40,4.5,'Asal Surat','',0,'');
                Fpdf::Cell(3,4.5,': ','',0,'');
                Fpdf::Cell(0,4.5,$dt->asal_surat,'',1,'');
                Fpdf::Cell(40,4.5,'Perihal','',0,'');
                Fpdf::Cell(3,4.5,': ','',0,'');
                Fpdf::MultiCell(0,4.5,$dt->perihal,'',1,'');
                Fpdf::Cell(0,6,'','',2,'C');
                //========================DATA SURAT==============================//
                Fpdf::SetFont('Arial','B', 9);
                Fpdf::Cell(0,4.5,'SIFAT SURAT:','',1,'');
                Fpdf::SetFont('Arial','', 9);
                
                ($dt->sangat_rahasia=='1'? Fpdf::Image(asset('assets/img/chk.png'),23,101.5,4,4) : Fpdf::Image(asset('assets/img/unchk.png'),23,101.5,4,4));
                Fpdf::Cell(10,4.5,'','',0,'');
                Fpdf::Cell(80,4.5,'Sangat Rahasia','',0,'');

                ($dt->segera=='1'? Fpdf::Image(asset('assets/img/chk.png'),113,101.5,4,4) : Fpdf::Image(asset('assets/img/unchk.png'),113,101.5,4,4));
                Fpdf::Cell(10,4.5,'','',0,'');
                Fpdf::Cell(0,4.5,'Segera','',1,'');

                ($dt->rahasia=='1'? Fpdf::Image(asset('assets/img/chk.png'),23,105.9,4,4) : Fpdf::Image(asset('assets/img/unchk.png'),23,105.9,4,4));
                Fpdf::Cell(10,4.5,'','',0,'');
                Fpdf::Cell(80,4.5,'Rahasia','',0,'');

                ($dt->biasa=='1'? Fpdf::Image(asset('assets/img/chk.png'),113,105.9,4,4) : Fpdf::Image(asset('assets/img/unchk.png'),113,105.9,4,4));
                Fpdf::Cell(10,4.5,'','',0,'');
                Fpdf::Cell(0,4.5,'Biasa','',1,'');
                
                ($dt->sangat_segera=='1'? Fpdf::Image(asset('assets/img/chk.png'),23,110.5,4,4) : Fpdf::Image(asset('assets/img/unchk.png'),23,110.5,4,4));
                Fpdf::Cell(10,4.5,'','',0,'');
                Fpdf::Cell(80,4.5,'Sangat Segera','',0,'');
                
                ($dt->sifat_lainnya!==null? Fpdf::Image(asset('assets/img/chk.png'),113,110.5,4,4) : Fpdf::Image(asset('assets/img/unchk.png'),113,110.5,4,4));
                Fpdf::Cell(10,4.5,'','',0,'');
                ($dt->sifat_lainnya!==null? Fpdf::Cell(0,4.5,$dt->sifat_lainnya,'',1,'') : Fpdf::Cell(0,4.5,'..................................................................','',1,''));
                
                Fpdf::Cell(0,6,'','',1,'C');
                //=====================CHECKBOX SIFAT==============================//
                Fpdf::SetFont('Arial','B', 9);
                Fpdf::Cell(0,4.5,'DISPOSISI KEPALA BIDANG KEPADA:','',1,'');
                Fpdf::SetFont('Arial','', 9);

                ($dt->kasi_adm_bimbingan=='1'? Fpdf::Image(asset('assets/img/chk.png'),23,125.5,4,4) : Fpdf::Image(asset('assets/img/unchk.png'),23,125.5,4,4));
                Fpdf::Cell(10,4.5,'','',0,'');
                Fpdf::Cell(80,4.5,'Kasi Administrasi dan Bimbingan Pemeriksaan','',0,'');

                ($dt->kasi_ketua_kelompok_satu=='1'? Fpdf::Image(asset('assets/img/chk.png'),113,125.5,4,4) : Fpdf::Image(asset('assets/img/unchk.png'),113,125.5,4,4));
                Fpdf::Cell(10,4.5,'','',0,'');
                Fpdf::Cell(0,4.5,'Ketua Kelompok I','',1,'');

                ($dt->kasi_bim_penagihan=='1'? Fpdf::Image(asset('assets/img/chk.png'),23,130,4,4) : Fpdf::Image(asset('assets/img/unchk.png'),23,130,4,4));
                Fpdf::Cell(10,4.5,'','',0,'');
                Fpdf::Cell(80,4.5,'Kasi Bimbingan Penagihan','',0,'');

                ($dt->kasi_ketua_kelompok_dua=='1'? Fpdf::Image(asset('assets/img/chk.png'),113,130,4,4) : Fpdf::Image(asset('assets/img/unchk.png'),113,130,4,4));
                Fpdf::Cell(10,4.5,'','',0,'');
                Fpdf::Cell(0,4.5,'Ketua Kelompok II','',1,'');

                ($dt->kasi_intelijen=='1'? Fpdf::Image(asset('assets/img/chk.png'),23,134.5,4,4) : Fpdf::Image(asset('assets/img/unchk.png'),23,134.5,4,4));
                Fpdf::Cell(10,4.5,'','',0,'');
                Fpdf::Cell(80,4.5,'Kasi Intelijen','',0,'');

                ($dt->disposisi_lainnya!==null ? Fpdf::Image(asset('assets/img/chk.png'),113,134.5,4,4) : Fpdf::Image(asset('assets/img/unchk.png'),113,134.5,4,4));
                Fpdf::Cell(10,4.5,'','',0,'');
                ($dt->disposisi_lainnya!==null? Fpdf::Cell(0,4.5,$dt->disposisi_lainnya,'',1,'') : Fpdf::Cell(0,4.5,'..................................................................','',1,''));
                

                ($dt->kasi_adm_bukti=='1'? Fpdf::Image(asset('assets/img/chk.png'),23,139,4,4) : Fpdf::Image(asset('assets/img/unchk.png'),23,139,4,4));            
                Fpdf::Cell(10,4.5,'','',0,'');
                Fpdf::Cell(80,4.5,'Kasi Administrasi Bukti Permulaan dan Penyidikan','',1,'');
                
                Fpdf::Cell(0,6,'','',1,'C');
                //=====================CHECKBOX SIFAT==============================//
                Fpdf::SetFont('Arial','B', 9);
                Fpdf::Cell(40,4.5,'PETUNJUK:','',1,'');
                Fpdf::SetFont('Arial','', 9);
                ($dt->diproses=='1'? Fpdf::Image(asset('assets/img/chk.png'),23,154,4,4) : Fpdf::Image(asset('assets/img/unchk.png'),23,154,4,4));    
                Fpdf::Cell(10,4.5,'','',0,'');
                Fpdf::Cell(80,4.5,'Diproses','',0,'');

                ($dt->diedarkan=='1'? Fpdf::Image(asset('assets/img/chk.png'),113,154,4,4) : Fpdf::Image(asset('assets/img/unchk.png'),113,154,4,4));   
                Fpdf::Cell(10,4.5,'','',0,'');
                Fpdf::Cell(0,4.5,'Diedarkan/diketahui','',1,'');

                ($dt->ditindaklanjuti=='1'? Fpdf::Image(asset('assets/img/chk.png'),23,158.5,4,4) : Fpdf::Image(asset('assets/img/unchk.png'),23,158.5,4,4));    
                Fpdf::Cell(10,4.5,'','',0,'');
                Fpdf::Cell(80,4.5,'Ditindaklanjuti','',0,'');

                ($dt->dipelajari=='1'? Fpdf::Image(asset('assets/img/chk.png'),113,158.5,4,4) : Fpdf::Image(asset('assets/img/unchk.png'),113,158.5,4,4));  
                Fpdf::Cell(10,4.5,'','',0,'');
                Fpdf::Cell(0,4.5,'Dipelajari/dipedomani','',1,'');

                ($dt->dimanfaatkan=='1'? Fpdf::Image(asset('assets/img/chk.png'),23,163,4,4) : Fpdf::Image(asset('assets/img/unchk.png'),23,163,4,4));
                Fpdf::Cell(10,4.5,'','',0,'');
                Fpdf::Cell(80,4.5,'Dimanfaatkan','',0,'');

                ($dt->dicatat=='1'? Fpdf::Image(asset('assets/img/chk.png'),113,163,4,4) : Fpdf::Image(asset('assets/img/unchk.png'),113,163,4,4));  
                Fpdf::Cell(10,4.5,'','',0,'');
                Fpdf::Cell(0,4.5,'Catat dan Kembali ke Kabid','',1,'');

                ($dt->diadministrasikan=='1'? Fpdf::Image(asset('assets/img/chk.png'),23,167.5,4,4) : Fpdf::Image(asset('assets/img/unchk.png'),23,167.5,4,4));
                Fpdf::Cell(10,4.5,'','',0,'');
                Fpdf::Cell(80,4.5,'Diadministrasikan (TU)','',0,'');

                ($dt->arsip=='1'? Fpdf::Image(asset('assets/img/chk.png'),113,167.5,4,4) : Fpdf::Image(asset('assets/img/unchk.png'),113,167.5,4,4));  
                Fpdf::Cell(10,4.5,'','',0,'');
                Fpdf::Cell(0,4.5,'Arsip/File','',1,'');
                
                ($dt->dipantau=='1'? Fpdf::Image(asset('assets/img/chk.png'),23,172,4,4) : Fpdf::Image(asset('assets/img/unchk.png'),23,172,4,4));
                Fpdf::Cell(10,4.5,'','',0,'');
                Fpdf::Cell(80,4.5,'Dipantau Pelaksanaannya','',0,'');

                ($dt->petunjuk_lainnya!==null ? Fpdf::Image(asset('assets/img/chk.png'),113,172,4,4) : Fpdf::Image(asset('assets/img/unchk.png'),113,172,4,4));
                Fpdf::Cell(10,4.5,'','',0,'');
                ($dt->petunjuk_lainnya!==null ? Fpdf::Cell(0,4.5,$dt->petunjuk_lainnya,'',1,'') : Fpdf::Cell(0,4.5,'..................................................................','',1,''));
                
                
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
            return redirect('adm/inbox');
        }
    }

    public function printBatchBckA(Request $request)
    {
        $data = $request['id_surat_print'];
        foreach($data as $row){
            $dt =  DB::table('tbl_inbox')
                    ->where('tbl_inbox.id_surat',$row)
                    ->join('tbl_disposisi','tbl_disposisi.id_surat','=','tbl_inbox.id_surat')
                    ->join('tbl_petunjuk','tbl_petunjuk.id_surat','=','tbl_inbox.id_surat')
                    ->join('tbl_sifat','tbl_sifat.id_surat','=','tbl_inbox.id_surat')
                    ->get();
                    
            Fpdf::AddPage();
            Fpdf::SetLeftMargin(1);
            Fpdf::SetLeftMargin(1);
            Fpdf::Image(asset('assets/img/logo.jpg'),25,20,30,30);
            Fpdf::SetFont('Arial', 'B', 10);
            Fpdf::MultiCell(190,5,'LEMBAR DISPOSISI BIDANG PEMERIKSAAN, PENAGIHAN, INTELIJEN DAN PENYIDIKAN',1,'C');
            Fpdf::SetFont('Arial', '', 10);
            Fpdf::MultiCell(190,5,'PERHATIAN : Dilarang Memisahkan Sehelai Suratpun yang Tergabung dalam Berkas Ini',1,'C');
        }
        return response(Fpdf::Output('I','Print','UTF-8'))->header('Content-Type','application/pdf');
    }
}
