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
use Excel;

use App\OutboxFirstModel;
use App\OutboxSecondModel;
use App\OutboxFaxModel;
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
            'surat_masuk'=>InboxModel::count(),
            'surat_keluar'=> OutboxFirstModel::count() + OutboxSecondModel::count() + OutboxFaxModel::count()
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
    public function chart()
    {
        return view('adminView.chart');
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
            'username.min'=>'Username Anda Tidak Valid Atau Kurang Dari 5 Karakter',
            'username.unique'=>'Username Sudah Terdaftar',
            'password.required'=>'Password Harus Di Isi',
            'password.confirmed'=>'Password Harus Sama',
            'password.max'=>'Password Maksimal 30 Karakter',
            'password.min'=>'Password Anda Tidak Valid Atau Kurang Dari 5 Karakter',
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
            $data = PenggunaModel::where('status','1')->where('id_pengguna','!=','')->get();
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
            $id_pengguna = session('id_pengguna');
            $id = $req['id'];
            if($id_pengguna==$id){
                $response = array(
                    'message'=>'Anda Tidak Boleh Menghapus Akun Anda Sendiri',
                    'status'=>'error'
                );
            }else{
                PenggunaModel::destroy($id);
                $response = array(
                    'message'=>'Admin Berhasil Di Hapus',
                    'status'=>'success'
                );                    
            }
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
            if($req['password_update']!==null || $req['password_update_confirmation']!==null){
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
            }else{
                $message = array(
                    'id_pengguna.required'=>'ID Pengguna Harus Di Isi, DiLarang Merubah Value Dari TextBox',
                    'id_pengguna.numeric'=>'ID Pengguna Harus Berupa Angka',
                    'username_update.required'=>'Username Harus Di Isi',
                    'username_update.min'=>'Username Minimal 5 Karakter',
                    'username_update.max'=>'Username Maksimal 30 Karakter',
                );
                Validator::make($req, [
                    'id_pengguna'=>['required','numeric'],
                    'username_update' => ['required',Rule::unique('tbl_pengguna','username')->ignore($id,'id_pengguna'),'min:5','max:30']
                ],$message)->validate();
                $dataUpdate = array(
                    'username'=>$req['username_update']
                );
                $dataPengguna = PenggunaModel::find($id);
                $dataPengguna->update($dataUpdate);
            }
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
            if($req['password_update']!==null||$req['password_update_confirmation']!==null){
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
            }else{
                $message = array(
                    'id_pengguna.required'=>'ID Pengguna Harus Di Isi',
                    'id_pengguna.numeric'=>'ID Pengguna Harus Berupa Angka, DiLarang Merubah Value Dari TextBox',
                    'username_update.required'=>'Username Harus Di Isi',
                    'username_update.unique'=>'Username Sudah Terdaftar',
                    'username_update.min'=>'Username Minimal 5 Karakter',
                    'username_update.max'=>'Username Maksimal 30 Karakter',
                    'status_update.required'=>'Status Harus Di Isi',
                    'status_update.numeric'=>'Status Harus Berupa Angka, DiLarang Merubah Value Dari Combobox'
                );
                Validator::make($req,[
                    'id_pengguna'=>['required','numeric'],
                    'username_update' => ['required',Rule::unique('tbl_pengguna','username')->ignore($id,'id_pengguna'),'min:5','max:30'],
                    'status_update'=>['required','numeric']
                ],$message)->validate();
                $dataUpdate = array(
                    'username'=>$req['username_update'],
                    'status'=>$req['status_update']
                );
                $dataPengguna = PenggunaModel::find($id);
                $dataPengguna->update($dataUpdate);
            }
            $response = array(
                'message'=>'User Berhasil Di Update',
                'status'=>'success'
            );
            return response()->json($response);
        }else{
            exit("Not an Ajax Request");
        }
    }
    public function storeInbox(Request $request)
    {
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

    public function storeDisposisi(Request $request)
    {
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
            return redirect('adm/inbox');
        }
    }
    public function exportXls(Request $request){
        $type = $request['type'];
        setlocale(LC_TIME, 'ind');
        if($type==1){
            $arr =  DB::table('tbl_inbox')
                    ->join('tbl_disposisi','tbl_disposisi.id_surat','=','tbl_inbox.id_surat')
                    ->join('tbl_petunjuk','tbl_petunjuk.id_surat','=','tbl_inbox.id_surat')
                    ->join('tbl_sifat','tbl_sifat.id_surat','=','tbl_inbox.id_surat')
                    ->get();
            $data = json_decode(json_encode($arr), True);
            Excel::create('Data Surat Masuk',function($excel) use($data){
                $excel->setTitle('Data Surat Masuk PPIP');
                $excel->setCreator('PPIP');
                $excel->setCompany('DJP Kanwil Kaltimtara');
                $excel->setDescription('Data Surat Masuk Dalam Excel');
                $excel->sheet('Sheet 1',function($sheet) use($data){
                    $sheet->setAutoSize(false);
                    $sheet->setWidth(array(
                        'A'=>10,
                        'B'=>15,
                        'C'=>15,
                        'D'=>40,
                        'E'=>40,
                        'F'=>60,
                        'G'=>30,
                        'H'=>6.5,
                        'I'=>6.5,
                        'J'=>6.5,
                        'K'=>6.5,
                        'L'=>6.5,
                        'M'=>6.5,
                        'N'=>6.5,
                        'O'=>15,
                        'P'=>40,
                        'Q'=>40
                    ));
                    $sheet->setFreeze('A1');
                    $sheet->setStyle(array(
                        'font' => array(
                            'name'      =>  'Arial',
                            'size'      =>  11,
                            'bold'      =>  false
                        )
                    ));
                    $last_rows = count($data)+1;
                    for ($z=0; $z < count($data) ; $z++) { 
                        $no = $z + 1;
                        $sheet->getStyle('E'.$no.':'.'G'.$no)->getAlignment()->setWrapText(true);
                        $sheet->getStyle('O'.$no.':'.'Q'.$no)->getAlignment()->setWrapText(true);

                        $id_surat = $data[$z]['id_surat'];
                        $tanggal_terima = $data[$z]['tanggal_terima'];
                        $tanggal_surat = $data[$z]['tanggal_surat'];
                        $nomor_surat = $data[$z]['nomor_surat'];
                        $asal_surat = $data[$z]['asal_surat'];
                        $perihal = $data[$z]['perihal'];
                        $petunjuk = "";
                        if($data[$z]['diproses']==1){
                            $petunjuk .= "Diproses";
                        }
                        if($data[$z]['ditindaklanjuti']==1){
                            if($petunjuk==""){
                                $petunjuk .= "Ditindaklanjuti";
                            }else{
                                $petunjuk .= ", Ditindaklanjuti";
                            }
                        }
                        if($data[$z]['dimanfaatkan']==1){
                            if($petunjuk==""){
                                $petunjuk .= "Dimanfaatkan";
                            }else{
                                $petunjuk .= ", Dimanfaatkan";
                            }
                        }
                        if($data[$z]['diadministrasikan']==1){
                            if($petunjuk==""){
                                $petunjuk .= "Diadministrasikan";
                            }else{
                                $petunjuk .= ", Diadministrasikan";
                            }
                        }
                        if($data[$z]['dipantau']==1){
                            if($petunjuk==""){
                                $petunjuk .= "Dipantau";
                            }else{
                                $petunjuk .= ", Dipantau";
                            }
                        }
                        if($data[$z]['diedarkan']==1){
                            if($petunjuk==""){
                                $petunjuk .= "Diedarkan";
                            }else{
                                $petunjuk .= ", Diedarkan";
                            }
                        }
                        if($data[$z]['dipelajari']==1){
                            if($petunjuk==""){
                                $petunjuk .= "Dipelajari";
                            }else{
                                $petunjuk .= ", Dipelajari";
                            }
                        }
                        if($data[$z]['dicatat']==1){
                            if($petunjuk==""){
                                $petunjuk .= "Dicatat";
                            }else{
                                $petunjuk .= ", Dicatat";
                            }
                        }
                        if($data[$z]['arsip']==1){
                            if($petunjuk==""){
                                $petunjuk .= "Arsip";
                            }else{
                                $petunjuk .= ", Arsip";
                            }
                        }
                        if($data[$z]['petunjuk_lainnya']!==null){
                            if($petunjuk==""){
                                $petunjuk .= $data[$z]['petunjuk_lainnya'];
                            }else{
                                $petunjuk .= ", ";
                                $petunjuk .= $data[$z]['petunjuk_lainnya'];
                            }
                        }
                        $bd401 = ($data[$z]['kasi_adm_bimbingan']==1 ? 'x' : '' );
                        $bd402 = ($data[$z]['kasi_bim_penagihan']==1 ? 'x' : '' );
                        $bd403 = ($data[$z]['kasi_intelijen']==1 ? 'x' : '' );
                        $bd404 = ($data[$z]['kasi_adm_bukti']==1 ? 'x' : '' );
                        $bd701 = ($data[$z]['kasi_ketua_kelompok_satu']==1 ? 'x' : '' );
                        $bd702 = ($data[$z]['kasi_ketua_kelompok_dua']==1 ? 'x' : '' );
                        $sekre = ($data[$z]['arsip']==1 ? 'x' : '');
                        $disposisi_lainnya = ($data[$z]['disposisi_lainnya']!==null ? $data[$z]['disposisi_lainnya'] : '' );
                        $catatan = $data[$z]['catatan'];
                        $sheet->row($no,array(
                            $id_surat,Carbon::parse($tanggal_terima)->formatLocalized('%d %B %Y'),
                            Carbon::parse($tanggal_surat)->formatLocalized('%d %B %Y'),$nomor_surat,$asal_surat,$perihal,$petunjuk,
                            $bd401,$bd402,$bd403,$bd404,$bd701,$bd702,$sekre,$disposisi_lainnya,$catatan
                        ));
                    }
                    $sheet->prependRow(1,array(
                        'No','Tanggal Terima','Tanggal Surat','Nomor Surat','Asal Surat','Perihal','Disposisi Kabid',
                        'BD 0401','BD 0402','BD 0403','BD 0404','BD 0701','BD 0702','Sekre/Arsip','Lainnya',
                        'Catatan Kakanwil','Catatan Kabid'
                    ));
                    $sheet->getStyle('H1:N1')->getAlignment()->setWrapText(true);
                    $sheet->cells('A1:Q1', function($cells) {
                        $cells->setAlignment('center'); 
                        $cells->setValignment('center');
                        $cells->setBackground('#b7b7b7');
                    });
                    $sheet->cells('A2:Q'.$last_rows, function($cells) {
                        $cells->setValignment('center');
                    });
                    $sheet->cells('A2:C'.$last_rows, function($cells) {
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('H2:N'.$last_rows, function($cells) {
                        $cells->setAlignment('center'); 
                    });
                    $sheet->setBorder('A1:Q'.$last_rows, 'thin');
                });
            })->export('xls');
        }else if($type==2){
            Excel::create('Data Surat Keluar 2017', function($excel) {     
                $excel->getDefaultStyle()->getFont()->setName('Arial')->setSize(11);           
                $outboxBATA = json_decode(json_encode(DB::table('tbl_outbox_first')->where('kode_jenis','1')->get()),True);
                $outboxTA = json_decode(json_encode(DB::table('tbl_outbox_first')->where('kode_jenis','2')->get()),True);
                $outboxS = json_decode(json_encode(DB::table('tbl_outbox_first')->where('kode_jenis','3')->get()),True);
                $outboxKET = json_decode(json_encode(DB::table('tbl_outbox_first')->where('kode_jenis','4')->get()),True);
                $outboxND = json_decode(json_encode(DB::table('tbl_outbox_first')->where('kode_jenis','5')->get()),True);
                $outboxSPR = json_decode(json_encode(DB::table('tbl_outbox_first')->where('kode_jenis','6')->get()),True);
                $outboxNDR = json_decode(json_encode(DB::table('tbl_outbox_first')->where('kode_jenis','7')->get()),True);
                $outboxSP =  json_decode(json_encode(DB::table('tbl_outbox_first')->where('kode_jenis','8')->get()),True);
                $outboxSR =  json_decode(json_encode(DB::table('tbl_outbox_first')->where('kode_jenis','9')->get()),True);
                $outboxSRIKSIS =  json_decode(json_encode(DB::table('tbl_outbox_first')->where('kode_jenis','10')->get()),True);
                $outboxSI =  json_decode(json_encode(DB::table('tbl_outbox_first')->where('kode_jenis','11')->get()),True);
                $outboxWPJ =  json_decode(json_encode(DB::table('tbl_outbox_first')->where('kode_jenis','12')->get()),True);
                $outboxUND =  json_decode(json_encode(DB::table('tbl_outbox_first')->where('kode_jenis','13')->get()),True);
                $outboxST =  json_decode(json_encode(DB::table('tbl_outbox_first')->where('kode_jenis','14')->get()),True);
                $outboxLHPPU =  json_decode(json_encode(DB::table('tbl_outbox_first')->where('kode_jenis','15')->get()),True);
                $outboxLAP =  json_decode(json_encode(DB::table('tbl_outbox_first')->where('kode_jenis','16')->get()),True);
                $outboxLAT =  json_decode(json_encode(DB::table('tbl_outbox_first')->where('kode_jenis','17')->get()),True);
                $outboxBA =  json_decode(json_encode(DB::table('tbl_outbox_first')->where('kode_jenis','18')->get()),True);
                $outboxBaPen =  json_decode(json_encode(DB::table('tbl_outbox_first')->where('kode_jenis','19')->get()),True);
                $outboxPrinBP =  json_decode(json_encode(DB::table('tbl_outbox_first')->where('kode_jenis','20')->get()),True);
                $outboxSPPBPP =  json_decode(json_encode(DB::table('tbl_outbox_first')->where('kode_jenis','21')->get()),True);
                $outboxSpembBP =  json_decode(json_encode(DB::table('tbl_outbox_first')->where('kode_jenis','22')->get()),True);
                $outboxPembBP=  json_decode(json_encode(DB::table('tbl_outbox_first')->where('kode_jenis','23')->get()),True);
                $outboxLkDIK =  json_decode(json_encode(DB::table('tbl_outbox_first')->where('kode_jenis','24')->get()),True);
                $outboxPrinDIK =  json_decode(json_encode(DB::table('tbl_outbox_first')->where('kode_jenis','25')->get()),True);
                $outboxLHPS =  json_decode(json_encode(DB::table('tbl_outbox_first')->where('kode_jenis','26')->get()),True);
                $outboxPangBP =  json_decode(json_encode(DB::table('tbl_outbox_first')->where('kode_jenis','27')->get()),True);
                $outboxLPBP =  json_decode(json_encode(DB::table('tbl_outbox_first')->where('kode_jenis','28')->get()),True);
                $outboxDUPAK =  json_decode(json_encode(DB::table('tbl_outbox_first')->where('kode_jenis','29')->get()),True);
                $outboxKEPKan =  json_decode(json_encode(DB::table('tbl_outbox_first')->where('kode_jenis','30')->get()),True);
                $outboxPrinMAT =  json_decode(json_encode(DB::table('tbl_outbox_first')->where('kode_jenis','31')->get()),True);
                $outboxInsMAT =  json_decode(json_encode(DB::table('tbl_outbox_first')->where('kode_jenis','32')->get()),True);
                $outboxLapMAT =  json_decode(json_encode(DB::table('tbl_outbox_first')->where('kode_jenis','33')->get()),True);
                $outboxLHIP =  json_decode(json_encode(DB::table('tbl_outbox_first')->where('kode_jenis','34')->get()),True);
                $outboxLA =  json_decode(json_encode(DB::table('tbl_outbox_first')->where('kode_jenis','35')->get()),True);
                $outboxLII = json_decode(json_encode(DB::table('tbl_outbox_second')->where('kode_jenis','1')->get()),True);
                $outboxLapjuIDLP = json_decode(json_encode(DB::table('tbl_outbox_second')->where('kode_jenis','2')->get()),True);
                $outboxLhpaIDLP = json_decode(json_encode(DB::table('tbl_outbox_second')->where('kode_jenis','3')->get()),True);
                $outboxLiaIDLP = json_decode(json_encode(DB::table('tbl_outbox_second')->where('kode_jenis','4')->get()),True);
                $outboxLapjuPenyidikan = json_decode(json_encode(DB::table('tbl_outbox_second')->where('kode_jenis','5')->get()),True);
                $outboxBaPenIDLP = json_decode(json_encode(DB::table('tbl_outbox_second')->where('kode_jenis','6')->get()),True);
                $outboxFax = json_decode(json_encode(DB::table('tbl_outbox_fax')->get()),True);
                
                $excel->sheet('BA.TA', function($sheet) use($outboxBATA) {
                    $sheet->setAutoSize(false);
                    $sheet->setWidth(array(
                        'A'=>9,
                        'B'=>35,
                        'C'=>25,
                        'D'=>35,
                        'E'=>40,
                        'F'=>25,
                        'G'=>30,
                        'H'=>12
                    ));
                    $sheet->setFreeze('A1');
                    for ($i=0; $i < count($outboxBATA); $i++) { 
                        $no = $i+1;
                        $sheet->getStyle('D'.$no)->getAlignment()->setWrapText(true);
                        $sheet->getStyle('E'.$no)->getAlignment()->setWrapText(true);
                        $sheet->getStyle('F'.$no)->getAlignment()->setWrapText(true);
                        $sheet->getStyle('G'.$no)->getAlignment()->setWrapText(true);
                        $nomor_urut = $outboxBATA[$i]['nomor_urut'];
                        $nomor_surat = $outboxBATA[$i]['nomor_surat'];
                        $tanggal_surat = $outboxBATA[$i]['tanggal_surat'];
                        $tujuan = $outboxBATA[$i]['tujuan'];
                        $perihal_surat = $outboxBATA[$i]['perihal_surat'];
                        $tembusan = $outboxBATA[$i]['tembusan'];
                        $menjawab = $outboxBATA[$i]['menjawab'];
                        $kode = $outboxBATA[$i]['kode_seksi_pembuat'];
                        $sheet->row($no, array(
                            $nomor_urut,$nomor_surat,Carbon::parse($tanggal_surat)->formatLocalized('%d %B %Y'),$tujuan,$perihal_surat,$tembusan,$menjawab,$kode
                        ));
                    }
                    $sheet->prependRow(1,array(
                        'No','Nomor Surat','Tanggal Surat','Tujuan','Perihal Surat','Tembusan','Menjawab Surat / Sehubungan Dengan Surat','Kode Seksi Pembuat Surat'
                    ));
                    $last_rows = count($outboxBATA)+1;
                    $sheet->cells('A1:H1',function($cells){ 
                        $cells->setAlignment('center');
                        $cells->setBackground('#b7b7b7');
                    });
                    $sheet->cells('A1:H'.$last_rows,function($cells){ 
                        $cells->setValignment('center');
                    });
                    $sheet->cells('A2:A'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('C2:C'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('H2:H'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->setBorder('A1:H'.$last_rows, 'thin');
                    $sheet->getStyle('A1:H1')->getAlignment()->setWrapText(true);
                    $sheet->getStyle('D2:G'.$last_rows)->getAlignment()->setWrapText(true);
                });
                $excel->sheet('TA', function($sheet) use($outboxTA) {
                    $sheet->setAutoSize(false);
                    $sheet->setWidth(array(
                        'A'=>9,
                        'B'=>35,
                        'C'=>25,
                        'D'=>35,
                        'E'=>40,
                        'F'=>25,
                        'G'=>30,
                        'H'=>12
                    ));
                    $sheet->setFreeze('A1');
                    for ($i=0; $i < count($outboxTA); $i++) { 
                        $no = $i+1;
                        $sheet->row($no,array(
                            $outboxTA[$i]['nomor_urut'],
                            $outboxTA[$i]['nomor_surat'],
                            Carbon::parse($outboxTA[$i]['tanggal_surat'])->formatLocalized('%d %B %Y'),
                            $outboxTA[$i]['tujuan'],
                            $outboxTA[$i]['perihal_surat'],
                            $outboxTA[$i]['tembusan'],
                            $outboxTA[$i]['menjawab'],
                            $outboxTA[$i]['kode_seksi_pembuat']
                        ));
                    }
                    $last_rows = count($outboxTA)+1;
                    $sheet->prependRow(1,array(
                        'No','Nomor Surat','Tanggal Surat','Tujuan','Perihal Surat',
                        'Tembusan','Menjawab Surat / Sehubungan Dengan Surat','Kode Seksi Pembuat Surat'
                    ));
                    $sheet->cells('A1:H1',function($cells){ 
                        $cells->setAlignment('center');
                        $cells->setBackground('#b7b7b7');
                    });
                    $sheet->cells('A1:H'.$last_rows,function($cells){ 
                        $cells->setValignment('center');
                    });
                    $sheet->cells('A2:A'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('C2:C'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('H2:H'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->setBorder('A1:H'.$last_rows, 'thin');
                    $sheet->getStyle('A1:H1')->getAlignment()->setWrapText(true);
                    $sheet->getStyle('D2:G'.$last_rows)->getAlignment()->setWrapText(true);
                });
                $excel->sheet('S',function($sheet) use($outboxS){
                    $sheet->setAutoSize(false);
                    $sheet->setWidth(array(
                        'A'=>9,
                        'B'=>35,
                        'C'=>25,
                        'D'=>35,
                        'E'=>40,
                        'F'=>25,
                        'G'=>30,
                        'H'=>12
                    ));
                    $sheet->setFreeze('A1');
                    for ($i=0; $i < count($outboxS); $i++) { 
                        $no = $i+1;
                        $sheet->row($no,array(
                            $outboxS[$i]['nomor_urut'],
                            $outboxS[$i]['nomor_surat'],
                            Carbon::parse($outboxS[$i]['tanggal_surat'])->formatLocalized('%d %B %Y'),
                            $outboxS[$i]['tujuan'],
                            $outboxS[$i]['perihal_surat'],
                            $outboxS[$i]['tembusan'],
                            $outboxS[$i]['menjawab'],
                            $outboxS[$i]['kode_seksi_pembuat']
                        ));
                    }
                    $last_rows = count($outboxS)+1;
                    $sheet->prependRow(1,array(
                        'No','Nomor Surat','Tanggal Surat','Tujuan','Perihal Surat',
                        'Tembusan','Menjawab Surat / Sehubungan Dengan Surat','Kode Seksi Pembuat Surat'
                    ));
                    $sheet->cells('A1:H1',function($cells){ 
                        $cells->setAlignment('center');
                        $cells->setBackground('#b7b7b7');
                    });
                    $sheet->cells('A1:H'.$last_rows,function($cells){ 
                        $cells->setValignment('center');
                    });
                    $sheet->cells('A2:A'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('C2:C'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('H2:H'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->setBorder('A1:H'.$last_rows, 'thin');
                    $sheet->getStyle('A1:H1')->getAlignment()->setWrapText(true);
                    $sheet->getStyle('D2:G'.$last_rows)->getAlignment()->setWrapText(true);
                });
                $excel->sheet('KET',function($sheet) use($outboxKET){
                    $sheet->setAutoSize(false);
                    $sheet->setWidth(array(
                        'A'=>9,
                        'B'=>35,
                        'C'=>25,
                        'D'=>35,
                        'E'=>40,
                        'F'=>25,
                        'G'=>30,
                        'H'=>12
                    ));
                    $sheet->setFreeze('A1');
                    for ($i=0; $i < count($outboxKET); $i++) { 
                        $no = $i+1;
                        $sheet->row($no,array(
                            $outboxKET[$i]['nomor_urut'],
                            $outboxKET[$i]['nomor_surat'],
                            Carbon::parse($outboxKET[$i]['tanggal_surat'])->formatLocalized('%d %B %Y'),
                            $outboxKET[$i]['tujuan'],
                            $outboxKET[$i]['perihal_surat'],
                            $outboxKET[$i]['tembusan'],
                            $outboxKET[$i]['menjawab'],
                            $outboxKET[$i]['kode_seksi_pembuat']
                        ));
                    }
                    $last_rows = count($outboxKET)+1;
                    $sheet->prependRow(1,array(
                        'No','Nomor Surat','Tanggal Surat','Tujuan','Perihal Surat',
                        'Tembusan','Menjawab Surat / Sehubungan Dengan Surat','Kode Seksi Pembuat Surat'
                    ));
                    $sheet->cells('A1:H1',function($cells){ 
                        $cells->setAlignment('center');
                        $cells->setBackground('#b7b7b7');
                    });
                    $sheet->cells('A1:H'.$last_rows,function($cells){ 
                        $cells->setValignment('center');
                    });
                    $sheet->cells('A2:A'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('C2:C'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('H2:H'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->setBorder('A1:H'.$last_rows, 'thin');
                    $sheet->getStyle('A1:H1')->getAlignment()->setWrapText(true);
                    $sheet->getStyle('D2:G'.$last_rows)->getAlignment()->setWrapText(true);
                });
                $excel->sheet('ND',function($sheet) use($outboxND){
                    $sheet->setAutoSize(false);
                    $sheet->setWidth(array(
                        'A'=>9,
                        'B'=>35,
                        'C'=>25,
                        'D'=>35,
                        'E'=>40,
                        'F'=>25,
                        'G'=>30,
                        'H'=>12
                    ));
                    $sheet->setFreeze('A1');
                    for ($i=0; $i < count($outboxND); $i++) { 
                        $no = $i+1;
                        $sheet->row($no,array(
                            $outboxND[$i]['nomor_urut'],
                            $outboxND[$i]['nomor_surat'],
                            Carbon::parse($outboxND[$i]['tanggal_surat'])->formatLocalized('%d %B %Y'),
                            $outboxND[$i]['tujuan'],
                            $outboxND[$i]['perihal_surat'],
                            $outboxND[$i]['tembusan'],
                            $outboxND[$i]['menjawab'],
                            $outboxND[$i]['kode_seksi_pembuat']
                        ));
                    }
                    $last_rows = count($outboxND)+1;
                    $sheet->prependRow(1,array(
                        'No','Nomor Surat','Tanggal Surat','Tujuan','Perihal Surat',
                        'Tembusan','Menjawab Surat / Sehubungan Dengan Surat','Kode Seksi Pembuat Surat'
                    ));
                    $sheet->cells('A1:H1',function($cells){ 
                        $cells->setAlignment('center');
                        $cells->setBackground('#b7b7b7');
                    });
                    $sheet->cells('A1:H'.$last_rows,function($cells){ 
                        $cells->setValignment('center');
                    });
                    $sheet->cells('A2:A'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('C2:C'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('H2:H'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->setBorder('A1:H'.$last_rows, 'thin');
                    $sheet->getStyle('A1:H1')->getAlignment()->setWrapText(true);
                    $sheet->getStyle('D2:G'.$last_rows)->getAlignment()->setWrapText(true);
                });
                $excel->sheet('SPR',function($sheet) use($outboxSPR){
                    $sheet->setAutoSize(false);
                    $sheet->setWidth(array(
                        'A'=>9,
                        'B'=>35,
                        'C'=>25,
                        'D'=>35,
                        'E'=>40,
                        'F'=>25,
                        'G'=>30,
                        'H'=>12
                    ));
                    $sheet->setFreeze('A1');
                    for ($i=0; $i < count($outboxSPR); $i++) { 
                        $no = $i+1;
                        $sheet->row($no,array(
                            $outboxSPR[$i]['nomor_urut'],
                            $outboxSPR[$i]['nomor_surat'],
                            Carbon::parse($outboxSPR[$i]['tanggal_surat'])->formatLocalized('%d %B %Y'),
                            $outboxSPR[$i]['tujuan'],
                            $outboxSPR[$i]['perihal_surat'],
                            $outboxSPR[$i]['tembusan'],
                            $outboxSPR[$i]['menjawab'],
                            $outboxSPR[$i]['kode_seksi_pembuat']
                        ));
                    }
                    $last_rows = count($outboxSPR)+1;
                    $sheet->prependRow(1,array(
                        'No','Nomor Surat','Tanggal Surat','Tujuan','Perihal Surat',
                        'Tembusan','Menjawab Surat / Sehubungan Dengan Surat','Kode Seksi Pembuat Surat'
                    ));
                    $sheet->cells('A1:H1',function($cells){ 
                        $cells->setAlignment('center');
                        $cells->setBackground('#b7b7b7');
                    });
                    $sheet->cells('A1:H'.$last_rows,function($cells){ 
                        $cells->setValignment('center');
                    });
                    $sheet->cells('A2:A'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('C2:C'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('H2:H'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->setBorder('A1:H'.$last_rows, 'thin');
                    $sheet->getStyle('A1:H1')->getAlignment()->setWrapText(true);
                    $sheet->getStyle('D2:G'.$last_rows)->getAlignment()->setWrapText(true);
                });
                $excel->sheet('NDR',function($sheet) use($outboxNDR){
                    $sheet->setAutoSize(false);
                    $sheet->setWidth(array(
                        'A'=>9,
                        'B'=>35,
                        'C'=>25,
                        'D'=>35,
                        'E'=>40,
                        'F'=>25,
                        'G'=>30,
                        'H'=>12
                    ));
                    $sheet->setFreeze('A1');
                    for ($i=0; $i < count($outboxNDR); $i++) { 
                        $no = $i+1;
                        $sheet->row($no,array(
                            $outboxNDR[$i]['nomor_urut'],
                            $outboxNDR[$i]['nomor_surat'],
                            Carbon::parse($outboxNDR[$i]['tanggal_surat'])->formatLocalized('%d %B %Y'),
                            $outboxNDR[$i]['tujuan'],
                            $outboxNDR[$i]['perihal_surat'],
                            $outboxNDR[$i]['tembusan'],
                            $outboxNDR[$i]['menjawab'],
                            $outboxNDR[$i]['kode_seksi_pembuat']
                        ));
                    }
                    $last_rows = count($outboxNDR)+1;
                    $sheet->prependRow(1,array(
                        'No','Nomor Surat','Tanggal Surat','Tujuan','Perihal Surat',
                        'Tembusan','Menjawab Surat / Sehubungan Dengan Surat','Kode Seksi Pembuat Surat'
                    ));
                    $sheet->cells('A1:H1',function($cells){ 
                        $cells->setAlignment('center');
                        $cells->setBackground('#b7b7b7');
                    });
                    $sheet->cells('A1:H'.$last_rows,function($cells){ 
                        $cells->setValignment('center');
                    });
                    $sheet->cells('A2:A'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('C2:C'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('H2:H'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->setBorder('A1:H'.$last_rows, 'thin');
                    $sheet->getStyle('A1:H1')->getAlignment()->setWrapText(true);
                    $sheet->getStyle('D2:G'.$last_rows)->getAlignment()->setWrapText(true);
                });
                $excel->sheet('SP',function($sheet) use($outboxSP){
                    $sheet->setAutoSize(false);
                    $sheet->setWidth(array(
                        'A'=>9,
                        'B'=>35,
                        'C'=>25,
                        'D'=>35,
                        'E'=>40,
                        'F'=>25,
                        'G'=>30,
                        'H'=>12
                    ));
                    $sheet->setFreeze('A1');
                    for ($i=0; $i < count($outboxSP); $i++) { 
                        $no = $i+1;
                        $sheet->row($no,array(
                            $outboxSP[$i]['nomor_urut'],
                            $outboxSP[$i]['nomor_surat'],
                            Carbon::parse($outboxSP[$i]['tanggal_surat'])->formatLocalized('%d %B %Y'),
                            $outboxSP[$i]['tujuan'],
                            $outboxSP[$i]['perihal_surat'],
                            $outboxSP[$i]['tembusan'],
                            $outboxSP[$i]['menjawab'],
                            $outboxSP[$i]['kode_seksi_pembuat']
                        ));
                    }
                    $last_rows = count($outboxSP)+1;
                    $sheet->prependRow(1,array(
                        'No','Nomor Surat','Tanggal Surat','Tujuan','Perihal Surat',
                        'Tembusan','Menjawab Surat / Sehubungan Dengan Surat','Kode Seksi Pembuat Surat'
                    ));
                    $sheet->cells('A1:H1',function($cells){ 
                        $cells->setAlignment('center');
                        $cells->setBackground('#b7b7b7');
                    });
                    $sheet->cells('A1:H'.$last_rows,function($cells){ 
                        $cells->setValignment('center');
                    });
                    $sheet->cells('A2:A'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('C2:C'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('H2:H'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->setBorder('A1:H'.$last_rows, 'thin');
                    $sheet->getStyle('A1:H1')->getAlignment()->setWrapText(true);
                    $sheet->getStyle('D2:G'.$last_rows)->getAlignment()->setWrapText(true);
                });
                $excel->sheet('SR',function($sheet) use($outboxSR){
                    $sheet->setAutoSize(false);
                    $sheet->setWidth(array(
                        'A'=>9,
                        'B'=>35,
                        'C'=>25,
                        'D'=>35,
                        'E'=>40,
                        'F'=>25,
                        'G'=>30,
                        'H'=>12
                    ));
                    $sheet->setFreeze('A1');
                    for ($i=0; $i < count($outboxSR); $i++) { 
                        $no = $i+1;
                        $sheet->row($no,array(
                            $outboxSR[$i]['nomor_urut'],
                            $outboxSR[$i]['nomor_surat'],
                            Carbon::parse($outboxSR[$i]['tanggal_surat'])->formatLocalized('%d %B %Y'),
                            $outboxSR[$i]['tujuan'],
                            $outboxSR[$i]['perihal_surat'],
                            $outboxSR[$i]['tembusan'],
                            $outboxSR[$i]['menjawab'],
                            $outboxSR[$i]['kode_seksi_pembuat']
                        ));
                    }
                    $last_rows = count($outboxSR)+1;
                    $sheet->prependRow(1,array(
                        'No','Nomor Surat','Tanggal Surat','Tujuan','Perihal Surat',
                        'Tembusan','Menjawab Surat / Sehubungan Dengan Surat','Kode Seksi Pembuat Surat'
                    ));
                    $sheet->cells('A1:H1',function($cells){ 
                        $cells->setAlignment('center');
                        $cells->setBackground('#b7b7b7');
                    });
                    $sheet->cells('A1:H'.$last_rows,function($cells){ 
                        $cells->setValignment('center');
                    });
                    $sheet->cells('A2:A'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('C2:C'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('H2:H'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->setBorder('A1:H'.$last_rows, 'thin');
                    $sheet->getStyle('A1:H1')->getAlignment()->setWrapText(true);
                    $sheet->getStyle('D2:G'.$last_rows)->getAlignment()->setWrapText(true);
                });
                $excel->sheet('S-RIKSIS',function($sheet) use($outboxSRIKSIS){
                    $sheet->setAutoSize(false);
                    $sheet->setWidth(array(
                        'A'=>9,
                        'B'=>35,
                        'C'=>25,
                        'D'=>35,
                        'E'=>40,
                        'F'=>25,
                        'G'=>30,
                        'H'=>12
                    ));
                    $sheet->setFreeze('A1');
                    for ($i=0; $i < count($outboxSRIKSIS); $i++) { 
                        $no = $i+1;
                        $sheet->row($no,array(
                            $outboxSRIKSIS[$i]['nomor_urut'],
                            $outboxSRIKSIS[$i]['nomor_surat'],
                            Carbon::parse($outboxSRIKSIS[$i]['tanggal_surat'])->formatLocalized('%d %B %Y'),
                            $outboxSRIKSIS[$i]['tujuan'],
                            $outboxSRIKSIS[$i]['perihal_surat'],
                            $outboxSRIKSIS[$i]['tembusan'],
                            $outboxSRIKSIS[$i]['menjawab'],
                            $outboxSRIKSIS[$i]['kode_seksi_pembuat']
                        ));
                    }
                    $last_rows = count($outboxSRIKSIS)+1;
                    $sheet->prependRow(1,array(
                        'No','Nomor Surat','Tanggal Surat','Tujuan','Perihal Surat',
                        'Tembusan','Menjawab Surat / Sehubungan Dengan Surat','Kode Seksi Pembuat Surat'
                    ));
                    $sheet->cells('A1:H1',function($cells){ 
                        $cells->setAlignment('center');
                        $cells->setBackground('#b7b7b7');
                    });
                    $sheet->cells('A1:H'.$last_rows,function($cells){ 
                        $cells->setValignment('center');
                    });
                    $sheet->cells('A2:A'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('C2:C'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('H2:H'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->setBorder('A1:H'.$last_rows, 'thin');
                    $sheet->getStyle('A1:H1')->getAlignment()->setWrapText(true);
                    $sheet->getStyle('D2:G'.$last_rows)->getAlignment()->setWrapText(true);
                });
                $excel->sheet('SI',function($sheet) use($outboxSI){
                    $sheet->setAutoSize(false);
                    $sheet->setWidth(array(
                        'A'=>9,
                        'B'=>35,
                        'C'=>25,
                        'D'=>35,
                        'E'=>40,
                        'F'=>25,
                        'G'=>30,
                        'H'=>12
                    ));
                    $sheet->setFreeze('A1');
                    for ($i=0; $i < count($outboxSI); $i++) { 
                        $no = $i+1;
                        $sheet->row($no,array(
                            $outboxSI[$i]['nomor_urut'],
                            $outboxSI[$i]['nomor_surat'],
                            Carbon::parse($outboxSI[$i]['tanggal_surat'])->formatLocalized('%d %B %Y'),
                            $outboxSI[$i]['tujuan'],
                            $outboxSI[$i]['perihal_surat'],
                            $outboxSI[$i]['tembusan'],
                            $outboxSI[$i]['menjawab'],
                            $outboxSI[$i]['kode_seksi_pembuat']
                        ));
                    }
                    $last_rows = count($outboxSI)+1;
                    $sheet->prependRow(1,array(
                        'No','Nomor Surat','Tanggal Surat','Tujuan','Perihal Surat',
                        'Tembusan','Menjawab Surat / Sehubungan Dengan Surat','Kode Seksi Pembuat Surat'
                    ));
                    $sheet->cells('A1:H1',function($cells){ 
                        $cells->setAlignment('center');
                        $cells->setBackground('#b7b7b7');
                    });
                    $sheet->cells('A1:H'.$last_rows,function($cells){ 
                        $cells->setValignment('center');
                    });
                    $sheet->cells('A2:A'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('C2:C'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('H2:H'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->setBorder('A1:H'.$last_rows, 'thin');
                    $sheet->getStyle('A1:H1')->getAlignment()->setWrapText(true);
                    $sheet->getStyle('D2:G'.$last_rows)->getAlignment()->setWrapText(true);
                });
                $excel->sheet('WPJ.14',function($sheet) use($outboxWPJ){
                    $sheet->setAutoSize(false);
                    $sheet->setWidth(array(
                        'A'=>9,
                        'B'=>35,
                        'C'=>25,
                        'D'=>35,
                        'E'=>40,
                        'F'=>25,
                        'G'=>30,
                        'H'=>12
                    ));
                    $last_rows = count($outboxWPJ)+1;
                    $sheet->setFreeze('A1');
                    $sheet->prependRow(1,array(
                        'No','Nomor Surat','Tanggal Surat','Tujuan','Perihal Surat',
                        'Tembusan','Menjawab Surat / Sehubungan Dengan Surat','Kode Seksi Pembuat Surat'
                    ));
                    $sheet->cells('A1:H1',function($cells){ 
                        $cells->setAlignment('center');
                        $cells->setBackground('#b7b7b7');
                    });
                    $sheet->cells('A1:H'.$last_rows,function($cells){ 
                        $cells->setValignment('center');
                    });
                    $sheet->cells('A2:A'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('C2:C'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('H2:H'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->setBorder('A1:H'.$last_rows, 'thin');
                    $sheet->getStyle('A1:H1')->getAlignment()->setWrapText(true);
                    $sheet->getStyle('D2:G'.$last_rows)->getAlignment()->setWrapText(true);
                });
                $excel->sheet('UND',function($sheet) use($outboxUND){
                    $sheet->setAutoSize(false);
                    $sheet->setWidth(array(
                        'A'=>9,
                        'B'=>35,
                        'C'=>25,
                        'D'=>35,
                        'E'=>40,
                        'F'=>25,
                        'G'=>30,
                        'H'=>12
                    ));
                    $sheet->setFreeze('A1');
                    for ($i=0; $i < count($outboxUND); $i++) { 
                        $no = $i+1;
                        $sheet->row($no,array(
                            $outboxUND[$i]['nomor_urut'],
                            $outboxUND[$i]['nomor_surat'],
                            Carbon::parse($outboxUND[$i]['tanggal_surat'])->formatLocalized('%d %B %Y'),
                            $outboxUND[$i]['tujuan'],
                            $outboxUND[$i]['perihal_surat'],
                            $outboxUND[$i]['tembusan'],
                            $outboxUND[$i]['menjawab'],
                            $outboxUND[$i]['kode_seksi_pembuat']
                        ));
                    }
                    $last_rows = count($outboxUND)+1;
                    $sheet->prependRow(1,array(
                        'No','Nomor Surat','Tanggal Surat','Tujuan','Perihal Surat',
                        'Tembusan','Menjawab Surat / Sehubungan Dengan Surat','Kode Seksi Pembuat Surat'
                    ));
                    $sheet->cells('A1:H1',function($cells){ 
                        $cells->setAlignment('center');
                        $cells->setBackground('#b7b7b7');
                    });
                    $sheet->cells('A1:H'.$last_rows,function($cells){ 
                        $cells->setValignment('center');
                    });
                    $sheet->cells('A2:A'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('C2:C'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('H2:H'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->setBorder('A1:H'.$last_rows, 'thin');
                    $sheet->getStyle('A1:H1')->getAlignment()->setWrapText(true);
                    $sheet->getStyle('D2:G'.$last_rows)->getAlignment()->setWrapText(true);
                });
                $excel->sheet('ST',function($sheet) use($outboxST){
                    $sheet->setAutoSize(false);
                    $sheet->setWidth(array(
                        'A'=>9,
                        'B'=>35,
                        'C'=>25,
                        'D'=>35,
                        'E'=>40,
                        'F'=>25,
                        'G'=>30,
                        'H'=>12
                    ));
                    $sheet->setFreeze('A1');
                    for ($i=0; $i < count($outboxST); $i++) { 
                        $no = $i+1;
                        $sheet->row($no,array(
                            $outboxST[$i]['nomor_urut'],
                            $outboxST[$i]['nomor_surat'],
                            Carbon::parse($outboxST[$i]['tanggal_surat'])->formatLocalized('%d %B %Y'),
                            $outboxST[$i]['tujuan'],
                            $outboxST[$i]['perihal_surat'],
                            $outboxST[$i]['tembusan'],
                            $outboxST[$i]['menjawab'],
                            $outboxST[$i]['kode_seksi_pembuat']
                        ));
                    }
                    $last_rows = count($outboxST)+1;
                    $sheet->prependRow(1,array(
                        'No','Nomor Surat','Tanggal Surat','Tujuan','Perihal Surat',
                        'Tembusan','Menjawab Surat / Sehubungan Dengan Surat','Kode Seksi Pembuat Surat'
                    ));
                    $sheet->cells('A1:H1',function($cells){ 
                        $cells->setAlignment('center');
                        $cells->setBackground('#b7b7b7');
                    });
                    $sheet->cells('A1:H'.$last_rows,function($cells){ 
                        $cells->setValignment('center');
                    });
                    $sheet->cells('A2:A'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('C2:C'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('H2:H'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->setBorder('A1:H'.$last_rows, 'thin');
                    $sheet->getStyle('A1:H1')->getAlignment()->setWrapText(true);
                    $sheet->getStyle('D2:G'.$last_rows)->getAlignment()->setWrapText(true);
                });
                $excel->sheet('Fax',function($sheet) use($outboxFax){
                    $sheet->setAutoSize(false);
                    $sheet->setWidth(array(
                        'A'=>18,
                        'B'=>8,
                        'C'=>25,
                        'D'=>13.5,
                        'E'=>18,
                        'F'=>30,
                        'G'=>20,
                        'H'=>25,
                        'I'=>25,
                        'J'=>20,
                        'K'=>25,
                        'L'=>25,
                        'M'=>25
                    ));
                    $sheet->setFreeze('A1');
                    for ($i=0; $i < count($outboxFax); $i++) { 
                        $no = $i+1;
                        $sheet->row($no,array(
                            Carbon::parse($outboxFax[$i]['tanggal_berita_fax'])->formatLocalized('%d %B %Y'),
                            $outboxFax[$i]['nomor_fax'],
                            $outboxFax[$i]['tujuan'],
                            $outboxFax[$i]['jumlah_hal'],
                            Carbon::parse($outboxFax[$i]['tanggal_kirim'])->formatLocalized('%d %B %Y'),
                            $outboxFax[$i]['hal'],
                            $outboxFax[$i]['tembusan'],
                            $outboxFax[$i]['nama_petugas'],
                            $outboxFax[$i]['nip'],
                            $outboxFax[$i]['jabatan_petugas'],
                            $outboxFax[$i]['penandatangan'],
                            $outboxFax[$i]['nama_kasi'],
                            $outboxFax[$i]['nip_kasi']
                        ));
                    }
                    $last_rows = count($outboxFax)+1;
                    $sheet->prependRow(1,array(
                        'Tanggal Berita Fax','Nomor Urut','Tujuan','Jumlah Hal','Tanggal Kirim',
                        'Hal','Tembusan','Nama Petugas','NIP','Jab Petugas','Penanda Tangan','Nama Kasi','NIP Kasi'
                    ));
                    $sheet->cells('A1:M'.$last_rows,function($cells){ 
                        $cells->setValignment('center');
                    });
                    $sheet->cells('A1:M1',function($cells){ 
                        $cells->setAlignment('center');
                        $cells->setBackground('#b7b7b7');
                    });
                    $sheet->cells('A1:B'.$last_rows,function($cells){ 
                        $cells->setAlignment('center');
                    });
                    $sheet->cells('D1:E'.$last_rows,function($cells){ 
                        $cells->setAlignment('center');
                    });
                    $sheet->setBorder('A1:M'.$last_rows, 'thin');
                    $sheet->getStyle('A1:M1')->getAlignment()->setWrapText(true);
                    $sheet->getStyle('C1:C'.$last_rows)->getAlignment()->setWrapText(true);
                    $sheet->getStyle('F1:F'.$last_rows)->getAlignment()->setWrapText(true);
                });
                $excel->sheet('LHPPU',function($sheet) use($outboxLHPPU){
                    $sheet->setAutoSize(false);
                    $sheet->setWidth(array(
                        'A'=>9,
                        'B'=>35,
                        'C'=>25,
                        'D'=>35,
                        'E'=>40,
                        'F'=>25,
                        'G'=>30,
                        'H'=>12
                    ));
                    $sheet->setFreeze('A1');
                    for ($i=0; $i < count($outboxLHPPU); $i++) { 
                        $no = $i+1;
                        $sheet->row($no,array(
                            $outboxLHPPU[$i]['nomor_urut'],
                            $outboxLHPPU[$i]['nomor_surat'],
                            Carbon::parse($outboxLHPPU[$i]['tanggal_surat'])->formatLocalized('%d %B %Y'),
                            $outboxLHPPU[$i]['tujuan'],
                            $outboxLHPPU[$i]['perihal_surat'],
                            $outboxLHPPU[$i]['tembusan'],
                            $outboxLHPPU[$i]['menjawab'],
                            $outboxLHPPU[$i]['kode_seksi_pembuat']
                        ));
                    }
                    $last_rows = count($outboxLHPPU)+1;
                    $sheet->prependRow(1,array(
                        'No','Nomor Surat','Tanggal Surat','Tujuan','Perihal Surat',
                        'Tembusan','Menjawab Surat / Sehubungan Dengan Surat','Kode Seksi Pembuat Surat'
                    ));
                    $sheet->cells('A1:H1',function($cells){ 
                        $cells->setAlignment('center');
                        $cells->setBackground('#b7b7b7');
                    });
                    $sheet->cells('A1:H'.$last_rows,function($cells){ 
                        $cells->setValignment('center');
                    });
                    $sheet->cells('A2:A'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('C2:C'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('H2:H'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->setBorder('A1:H'.$last_rows, 'thin');
                    $sheet->getStyle('A1:H1')->getAlignment()->setWrapText(true);
                    $sheet->getStyle('D2:G'.$last_rows)->getAlignment()->setWrapText(true);
                });
                $excel->sheet('LAP',function($sheet) use($outboxLAP){
                    $sheet->setAutoSize(false);
                    $sheet->setWidth(array(
                        'A'=>9,
                        'B'=>35,
                        'C'=>25,
                        'D'=>35,
                        'E'=>40,
                        'F'=>25,
                        'G'=>30,
                        'H'=>12
                    ));
                    $sheet->setFreeze('A1');
                    for ($i=0; $i < count($outboxLAP); $i++) { 
                        $no = $i+1;
                        $sheet->row($no,array(
                            $outboxLAP[$i]['nomor_urut'],
                            $outboxLAP[$i]['nomor_surat'],
                            Carbon::parse($outboxLAP[$i]['tanggal_surat'])->formatLocalized('%d %B %Y'),
                            $outboxLAP[$i]['tujuan'],
                            $outboxLAP[$i]['perihal_surat'],
                            $outboxLAP[$i]['tembusan'],
                            $outboxLAP[$i]['menjawab'],
                            $outboxLAP[$i]['kode_seksi_pembuat']
                        ));
                    }
                    $last_rows = count($outboxLAP)+1;
                    $sheet->prependRow(1,array(
                        'No','Nomor Surat','Tanggal Surat','Tujuan','Perihal Surat',
                        'Tembusan','Menjawab Surat / Sehubungan Dengan Surat','Kode Seksi Pembuat Surat'
                    ));
                    $sheet->cells('A1:H1',function($cells){ 
                        $cells->setAlignment('center');
                        $cells->setBackground('#b7b7b7');
                    });
                    $sheet->cells('A1:H'.$last_rows,function($cells){ 
                        $cells->setValignment('center');
                    });
                    $sheet->cells('A2:A'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('C2:C'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('H2:H'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->setBorder('A1:H'.$last_rows, 'thin');
                    $sheet->getStyle('A1:H1')->getAlignment()->setWrapText(true);
                    $sheet->getStyle('D2:G'.$last_rows)->getAlignment()->setWrapText(true);
                });
                $excel->sheet('LAT',function($sheet) use($outboxLAT){
                    $sheet->setAutoSize(false);
                    $sheet->setWidth(array(
                        'A'=>9,
                        'B'=>35,
                        'C'=>25,
                        'D'=>35,
                        'E'=>40,
                        'F'=>25,
                        'G'=>30,
                        'H'=>12
                    ));
                    $sheet->setFreeze('A1');
                    for ($i=0; $i < count($outboxLAT); $i++) { 
                        $no = $i+1;
                        $sheet->row($no,array(
                            $outboxLAT[$i]['nomor_urut'],
                            $outboxLAT[$i]['nomor_surat'],
                            Carbon::parse($outboxLAT[$i]['tanggal_surat'])->formatLocalized('%d %B %Y'),
                            $outboxLAT[$i]['tujuan'],
                            $outboxLAT[$i]['perihal_surat'],
                            $outboxLAT[$i]['tembusan'],
                            $outboxLAT[$i]['menjawab'],
                            $outboxLAT[$i]['kode_seksi_pembuat']
                        ));
                    }
                    $last_rows = count($outboxLAT)+1;
                    $sheet->prependRow(1,array(
                        'No','Nomor Surat','Tanggal Surat','Tujuan','Perihal Surat',
                        'Tembusan','Menjawab Surat / Sehubungan Dengan Surat','Kode Seksi Pembuat Surat'
                    ));
                    $sheet->cells('A1:H1',function($cells){ 
                        $cells->setAlignment('center');
                        $cells->setBackground('#b7b7b7');
                    });
                    $sheet->cells('A1:H'.$last_rows,function($cells){ 
                        $cells->setValignment('center');
                    });
                    $sheet->cells('A2:A'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('C2:C'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('H2:H'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->setBorder('A1:H'.$last_rows, 'thin');
                    $sheet->getStyle('A1:H1')->getAlignment()->setWrapText(true);
                    $sheet->getStyle('D2:G'.$last_rows)->getAlignment()->setWrapText(true);
                });
                $excel->sheet('BA',function($sheet) use($outboxBA){
                    $sheet->setAutoSize(false);
                    $sheet->setWidth(array(
                        'A'=>9,
                        'B'=>35,
                        'C'=>25,
                        'D'=>35,
                        'E'=>40,
                        'F'=>25,
                        'G'=>30,
                        'H'=>12
                    ));
                    $sheet->setFreeze('A1');
                    for ($i=0; $i < count($outboxBA); $i++) { 
                        $no = $i+1;
                        $sheet->row($no,array(
                            $outboxBA[$i]['nomor_urut'],
                            $outboxBA[$i]['nomor_surat'],
                            Carbon::parse($outboxBA[$i]['tanggal_surat'])->formatLocalized('%d %B %Y'),
                            $outboxBA[$i]['tujuan'],
                            $outboxBA[$i]['perihal_surat'],
                            $outboxBA[$i]['tembusan'],
                            $outboxBA[$i]['menjawab'],
                            $outboxBA[$i]['kode_seksi_pembuat']
                        ));
                    }
                    $last_rows = count($outboxBA)+1;
                    $sheet->prependRow(1,array(
                        'No','Nomor Surat','Tanggal Surat','Tujuan','Perihal Surat',
                        'Tembusan','Menjawab Surat / Sehubungan Dengan Surat','Kode Seksi Pembuat Surat'
                    ));
                    $sheet->cells('A1:H1',function($cells){ 
                        $cells->setAlignment('center');
                        $cells->setBackground('#b7b7b7');
                    });
                    $sheet->cells('A1:H'.$last_rows,function($cells){ 
                        $cells->setValignment('center');
                    });
                    $sheet->cells('A2:A'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('C2:C'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('H2:H'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->setBorder('A1:H'.$last_rows, 'thin');
                    $sheet->getStyle('A1:H1')->getAlignment()->setWrapText(true);
                    $sheet->getStyle('D2:G'.$last_rows)->getAlignment()->setWrapText(true);
                });
                $excel->sheet('LII',function($sheet) use($outboxLII){
                    $sheet->setAutoSize(false);
                    $sheet->setWidth(array(
                        'A'=>9,
                        'B'=>30,
                        'C'=>20,
                        'D'=>35,
                        'E'=>40,
                        'F'=>20,
                        'G'=>20
                    ));
                    $sheet->setFreeze('A1');
                    for ($i=0; $i < count($outboxLII); $i++) { 
                        $no = $i+1;
                        $sheet->row($no,array(
                            $outboxLII[$i]['nomor_urut'],
                            $outboxLII[$i]['nomor_surat'],
                            Carbon::parse($outboxLII[$i]['tanggal'])->formatLocalized('%d %B %Y'),
                            $outboxLII[$i]['nama_wp'],
                            $outboxLII[$i]['npwp'],
                            $outboxLII[$i]['tahun_pajak'],
                            $outboxLII[$i]['analis']
                        ));
                    }
                    $last_rows = count($outboxLII)+1;
                    $sheet->prependRow(1,array(
                        'No','Nomor LII','Tanggal','Nama WP','NPWP','Tahun Pajak','Analis'
                    ));
                    $sheet->cells('A1:G1',function($cells){ 
                        $cells->setAlignment('center');
                        $cells->setBackground('#b7b7b7');
                    });
                    $sheet->cells('A1:G'.$last_rows,function($cells){ 
                        $cells->setValignment('center');
                    });
                    $sheet->cells('A2:A'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('C2:C'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('E2:F'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->setBorder('A1:G'.$last_rows, 'thin');
                    $sheet->getStyle('A1:G1')->getAlignment()->setWrapText(true);
                });
                $excel->sheet('LAPJU.IDLP',function($sheet) use($outboxLapjuIDLP){
                    $sheet->setAutoSize(false);
                    $sheet->setWidth(array(
                        'A'=>9,
                        'B'=>40,
                        'C'=>25,
                        'D'=>35,
                        'E'=>30,
                        'F'=>20,
                        'G'=>30,
                        'H'=>50
                    ));
                    $sheet->setFreeze('A1');
                    for ($i=0; $i < count($outboxLapjuIDLP); $i++) { 
                        $no = $i+1;
                        $sheet->row($no,array(
                            $outboxLapjuIDLP[$i]['nomor_urut'],
                            $outboxLapjuIDLP[$i]['nomor_surat'],
                            Carbon::parse($outboxLapjuIDLP[$i]['tanggal'])->formatLocalized('%d %B %Y'),
                            $outboxLapjuIDLP[$i]['nama_wp'],
                            $outboxLapjuIDLP[$i]['npwp'],
                            $outboxLapjuIDLP[$i]['tahun_pajak'],
                            $outboxLapjuIDLP[$i]['analis'],
                            $outboxLapjuIDLP[$i]['tindak_lanjut'],
                        ));
                    }
                    $last_rows = count($outboxLapjuIDLP)+1;
                    $sheet->prependRow(1,array(
                        'No','Nomor LAPJU.IDLP','Tanggal','Nama WP','NPWP','Tahun Pajak','Analis','Tindak Lanjut'
                    ));
                    $sheet->cells('A1:H1',function($cells){ 
                        $cells->setAlignment('center');
                        $cells->setBackground('#b7b7b7');
                    });
                    $sheet->cells('A1:H'.$last_rows,function($cells){ 
                        $cells->setValignment('center');
                    });
                    $sheet->cells('A2:A'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('C2:C'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('E2:G'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->setBorder('A1:H'.$last_rows, 'thin');
                    $sheet->getStyle('A1:H'.$last_rows)->getAlignment()->setWrapText(true);
                });
                $excel->sheet('LHPA.IDLP',function($sheet) use($outboxLhpaIDLP){
                    $sheet->setAutoSize(false);
                    $sheet->setWidth(array(
                        'A'=>9,
                        'B'=>35,
                        'C'=>20,
                        'D'=>35,
                        'E'=>25,
                        'F'=>15,
                        'G'=>30
                    ));
                    $sheet->setFreeze('A1');
                    for ($i=0; $i < count($outboxLhpaIDLP); $i++) { 
                        $no = $i+1;
                        $sheet->row($no,array(
                            $outboxLhpaIDLP[$i]['nomor_urut'],
                            $outboxLhpaIDLP[$i]['nomor_surat'],
                            Carbon::parse($outboxLhpaIDLP[$i]['tanggal'])->formatLocalized('%d %B %Y'),
                            $outboxLhpaIDLP[$i]['nama_wp'],
                            $outboxLhpaIDLP[$i]['npwp'],
                            $outboxLhpaIDLP[$i]['tahun_pajak'],
                            $outboxLhpaIDLP[$i]['tindak_lanjut'],
                        ));
                    }
                    $last_rows = count($outboxLhpaIDLP)+1;
                    $sheet->prependRow(1,array(
                        'No','Nomor LHPA','Tanggal','Nama WP','NPWP','Tahun Pajak','Tindak Lanjut'
                    ));
                    $sheet->cells('A1:G1',function($cells){ 
                        $cells->setAlignment('center');
                        $cells->setBackground('#b7b7b7');
                    });
                    $sheet->cells('A1:G'.$last_rows,function($cells){ 
                        $cells->setValignment('center');
                    });
                    $sheet->cells('A2:A'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('C2:C'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('E2:F'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->setBorder('A1:G'.$last_rows, 'thin');
                    $sheet->getStyle('A1:G1')->getAlignment()->setWrapText(true);
                });
                $excel->sheet('LIA.IDLP',function($sheet) use($outboxLiaIDLP){
                    $sheet->setAutoSize(false);
                    $sheet->setWidth(array(
                        'A'=>9,
                        'B'=>35,
                        'C'=>25,
                        'D'=>35,
                        'E'=>30,
                        'F'=>20,
                        'G'=>30,
                        'H'=>50
                    ));
                    $sheet->setFreeze('A1');
                    for ($i=0; $i < count($outboxLiaIDLP); $i++) { 
                        $no = $i+1;
                        $sheet->row($no,array(
                            $outboxLiaIDLP[$i]['nomor_urut'],
                            $outboxLiaIDLP[$i]['nomor_surat'],
                            Carbon::parse($outboxLiaIDLP[$i]['tanggal'])->formatLocalized('%d %B %Y'),
                            $outboxLiaIDLP[$i]['nama_wp'],
                            $outboxLiaIDLP[$i]['npwp'],
                            $outboxLiaIDLP[$i]['tahun_pajak'],
                            $outboxLiaIDLP[$i]['analis'],
                            $outboxLiaIDLP[$i]['tindak_lanjut'],
                        ));
                    }
                    $last_rows = count($outboxLiaIDLP)+1;
                    $sheet->prependRow(1,array(
                        'No','Nomor LII','Tanggal','Nama WP','NPWP','Tahun Pajak','Analis','Tindak Lanjut'
                    ));
                    $sheet->cells('A1:H1',function($cells){ 
                        $cells->setAlignment('center');
                        $cells->setBackground('#b7b7b7');
                    });
                    $sheet->cells('A1:H'.$last_rows,function($cells){ 
                        $cells->setValignment('center');
                    });
                    $sheet->cells('A2:A'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('C2:C'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('E2:F'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->setBorder('A1:H'.$last_rows, 'thin');
                    $sheet->getStyle('A1:H1')->getAlignment()->setWrapText(true);
                });
                $excel->sheet('BA.PEN.IDLP',function($sheet) use($outboxBaPenIDLP){
                    $sheet->setAutoSize(false);
                    $sheet->setWidth(array(
                        'A'=>9,
                        'B'=>35,
                        'C'=>25,
                        'D'=>48,
                        'E'=>20,
                        'F'=>30
                    ));
                    $sheet->setFreeze('A1');
                    for ($i=0; $i < count($outboxBaPenIDLP); $i++) { 
                        $no = $i+1;
                        $sheet->row($no,array(
                            $outboxBaPenIDLP[$i]['nomor_urut'],
                            $outboxBaPenIDLP[$i]['nomor_surat'],
                            Carbon::parse($outboxBaPenIDLP[$i]['tanggal'])->formatLocalized('%d %B %Y'),
                            $outboxBaPenIDLP[$i]['perihal_surat'],
                            $outboxBaPenIDLP[$i]['tahun_pajak'],
                            $outboxBaPenIDLP[$i]['kesimpulan']
                        ));
                    }
                    $last_rows = count($outboxBaPenIDLP)+1;
                    $sheet->prependRow(1,array(
                        'Nomor Urut','Nomor Surat','Tanggal Surat','Perihal Surat','Tahun Pajak','Kesimpulan'                        
                    ));
                    $sheet->cells('A1:F1',function($cells){ 
                        $cells->setAlignment('center');
                        $cells->setBackground('#b7b7b7');
                    });
                    $sheet->cells('A1:F'.$last_rows,function($cells){ 
                        $cells->setValignment('center');
                    });
                    $sheet->cells('A2:A'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('C2:C'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('E2:E'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->setBorder('A1:F'.$last_rows, 'thin');
                    $sheet->getStyle('A1:F1')->getAlignment()->setWrapText(true);
                    $sheet->getStyle('D2:D'.$last_rows)->getAlignment()->setWrapText(true);
                    $sheet->getStyle('B2:B'.$last_rows)->getAlignment()->setWrapText(true);
                    $sheet->getStyle('F2:F'.$last_rows)->getAlignment()->setWrapText(true);
                });
                $excel->sheet('BA.PEN',function($sheet) use($outboxBaPen){
                    $sheet->setAutoSize(false);
                    $sheet->setWidth(array(
                        'A'=>8,
                        'B'=>35,
                        'C'=>30,
                        'D'=>40,
                        'E'=>50,
                        'F'=>25,
                        'G'=>25,
                        'H'=>10
                    ));
                    $last_rows = count($outboxBaPen)+1;
                    $sheet->setFreeze('A1');
                    for ($i=0; $i < count($outboxBaPen); $i++) { 
                        $no = $i+1;
                        $sheet->row($no,array(
                            $outboxBaPen[$i]['nomor_urut'],
                            $outboxBaPen[$i]['nomor_surat'],
                            Carbon::parse($outboxBaPen[$i]['tanggal_surat'])->formatLocalized('%d %B %Y'),
                            $outboxBaPen[$i]['tujuan'],
                            $outboxBaPen[$i]['perihal_surat'],
                            $outboxBaPen[$i]['tembusan'],
                            $outboxBaPen[$i]['menjawab'],
                            $outboxBaPen[$i]['kode_seksi_pembuat']
                        ));
                    }
                    $sheet->prependRow(1,array(
                        'Nomor Urut','Nomor Surat','Tanggal Surat','Tujuan','Perihal Surat','Tembusan','Menjawab Surat/ Sehubungan dengan Surat','Kode Seksi Pembuat Surat'
                    ));
                    $sheet->cells('A1:H1',function($cells){ 
                        $cells->setAlignment('center'); 
                        $cells->setBackground('#b7b7b7');
                    });
                    $sheet->cells('A1:H'.$last_rows,function($cells){ 
                        $cells->setValignment('center'); 
                    });
                    $sheet->cells('A2:A'.$last_rows,function($cells){ 
                        $cells->setAlignment('center');
                    });
                    $sheet->cells('C2:C'.$last_rows,function($cells){ 
                        $cells->setAlignment('center');
                    });
                    $sheet->cells('H2:H'.$last_rows,function($cells){ 
                        $cells->setAlignment('center');
                    });
                    $sheet->setBorder('A1:H'.$last_rows, 'thin');
                    $sheet->getStyle('A1:H'.$last_rows)->getAlignment()->setWrapText(true);
                });
                $excel->sheet('PRIN.BP',function($sheet) use($outboxPrinBP){
                    $sheet->setAutoSize(false);
                    $sheet->setWidth(array(
                        'A'=>8,
                        'B'=>35,
                        'C'=>30,
                        'D'=>40,
                        'E'=>50,
                        'F'=>25,
                        'G'=>25,
                        'H'=>10
                    ));
                    $sheet->setFreeze('A1');
                    for ($i=0; $i < count($outboxPrinBP); $i++) { 
                        $no = $i+1;
                        $sheet->row($no,array(
                            $outboxPrinBP[$i]['nomor_urut'],
                            $outboxPrinBP[$i]['nomor_surat'],
                            Carbon::parse($outboxPrinBP[$i]['tanggal_surat'])->formatLocalized('%d %B %Y'),
                            $outboxPrinBP[$i]['tujuan'],
                            $outboxPrinBP[$i]['perihal_surat'],
                            $outboxPrinBP[$i]['tembusan'],
                            $outboxPrinBP[$i]['menjawab'],
                            $outboxPrinBP[$i]['kode_seksi_pembuat']
                        ));
                    }
                    $last_rows = count($outboxPrinBP)+1;
                    $sheet->prependRow(1,array(
                        'Nomor Urut','Nomor Surat','Tanggal Surat','Tujuan','Perihal Surat','Tembusan','Menjawab Surat/ Sehubungan dengan Surat','Kode Seksi Pembuat Surat'
                    ));
                    $sheet->cells('A1:H1',function($cells){ 
                        $cells->setAlignment('center'); 
                        $cells->setBackground('#b7b7b7');
                    });
                    $sheet->cells('A1:H'.$last_rows,function($cells){ 
                        $cells->setValignment('center'); 
                    });
                    $sheet->cells('A2:A'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('C2:C'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('H2:H'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->setBorder('A1:H'.$last_rows, 'thin');
                    $sheet->getStyle('A1:H'.$last_rows)->getAlignment()->setWrapText(true);
                });
                $excel->sheet('SPPBP.P',function($sheet) use($outboxSPPBPP){
                    $sheet->setAutoSize(false);
                    $sheet->setWidth(array(
                        'A'=>8,
                        'B'=>35,
                        'C'=>30,
                        'D'=>40,
                        'E'=>50,
                        'F'=>25,
                        'G'=>25,
                        'H'=>10
                    ));
                    $sheet->setFreeze('A1');
                    $last_rows = count($outboxSPPBPP)+1;
                    for ($i=0; $i < count($outboxSPPBPP); $i++) { 
                        $no = $i+1;
                        $sheet->row($no,array(
                            $outboxSPPBPP[$i]['nomor_urut'],
                            $outboxSPPBPP[$i]['nomor_surat'],
                            Carbon::parse($outboxSPPBPP[$i]['tanggal_surat'])->formatLocalized('%d %B %Y'),
                            $outboxSPPBPP[$i]['tujuan'],
                            $outboxSPPBPP[$i]['perihal_surat'],
                            $outboxSPPBPP[$i]['tembusan'],
                            $outboxSPPBPP[$i]['menjawab'],
                            $outboxSPPBPP[$i]['kode_seksi_pembuat']
                        ));
                    }
                    $sheet->prependRow(1,array(
                        'Nomor Urut','Nomor Surat','Tanggal Surat','Tujuan','Perihal Surat','Tembusan','Menjawab Surat/ Sehubungan dengan Surat','Kode Seksi Pembuat Surat'
                    ));
                    $sheet->cells('A1:H1',function($cells){ 
                        $cells->setAlignment('center');
                        $cells->setBackground('#b7b7b7');
                    });
                    $sheet->setBorder('A1:H'.$last_rows, 'thin');
                    $sheet->cells('A1:H'.$last_rows,function($cells){
                        $cells->setValignment('center');
                    });
                    $sheet->cells('A2:A'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('C2:C'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('H2:H'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->setBorder('A1:H'.$last_rows, 'thin');
                    $sheet->getStyle('A1:H'.$last_rows)->getAlignment()->setWrapText(true);
                });
                $excel->sheet('SPEMB.BP',function($sheet) use($outboxSpembBP){
                    $sheet->setAutoSize(false);
                    $sheet->setWidth(array(
                        'A'=>8,
                        'B'=>35,
                        'C'=>30,
                        'D'=>40,
                        'E'=>50,
                        'F'=>25,
                        'G'=>25,
                        'H'=>10
                    ));
                    $sheet->setFreeze('A1');
                    $last_rows = count($outboxSpembBP)+1;
                    for ($i=0; $i < count($outboxSpembBP); $i++) { 
                        $no = $i+1;
                        $sheet->row($no,array(
                            $outboxSpembBP[$i]['nomor_urut'],
                            $outboxSpembBP[$i]['nomor_surat'],
                            Carbon::parse($outboxSpembBP[$i]['tanggal_surat'])->formatLocalized('%d %B %Y'),
                            $outboxSpembBP[$i]['tujuan'],
                            $outboxSpembBP[$i]['perihal_surat'],
                            $outboxSpembBP[$i]['tembusan'],
                            $outboxSpembBP[$i]['menjawab'],
                            $outboxSpembBP[$i]['kode_seksi_pembuat']
                        ));
                    }
                    $sheet->prependRow(1,array(
                        'Nomor Urut','Nomor Surat','Tanggal Surat','Tujuan','Perihal Surat','Tembusan','Menjawab Surat/ Sehubungan dengan Surat','Kode Seksi Pembuat Surat'
                    ));
                    $sheet->cells('A1:H1',function($cells){ 
                        $cells->setAlignment('center'); 
                        $cells->setBackground('#b7b7b7');
                    });
                    $sheet->cells('A1:H'.$last_rows,function($cells){
                        $cells->setValignment('center'); 
                    });
                    $sheet->cells('A2:A'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('C2:C'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('H2:H'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->setBorder('A1:H'.$last_rows, 'thin');
                    $sheet->getStyle('A1:H'.$last_rows)->getAlignment()->setWrapText(true);
                });
                $excel->sheet('PEMB.BP',function($sheet) use($outboxPembBP){
                    $sheet->setAutoSize(false);
                    $sheet->setWidth(array(
                        'A'=>8,
                        'B'=>35,
                        'C'=>30,
                        'D'=>40,
                        'E'=>50,
                        'F'=>25,
                        'G'=>25,
                        'H'=>10
                    ));
                    $sheet->setFreeze('A1');
                    $last_rows = count($outboxPembBP)+1;
                    for ($i=0; $i < count($outboxPembBP); $i++) { 
                        $no = $i+1;
                        $sheet->row($no,array(
                            $outboxPembBP[$i]['nomor_urut'],
                            $outboxPembBP[$i]['nomor_surat'],
                            Carbon::parse($outboxPembBP[$i]['tanggal_surat'])->formatLocalized('%d %B %Y'),
                            $outboxPembBP[$i]['tujuan'],
                            $outboxPembBP[$i]['perihal_surat'],
                            $outboxPembBP[$i]['tembusan'],
                            $outboxPembBP[$i]['menjawab'],
                            $outboxPembBP[$i]['kode_seksi_pembuat']
                        ));
                    }
                    $sheet->prependRow(1,array(
                        'Nomor Urut','Nomor Surat','Tanggal Surat','Tujuan','Perihal Surat','Tembusan','Menjawab Surat/ Sehubungan dengan Surat','Kode Seksi Pembuat Surat'
                    ));
                    $sheet->cells('A1:H1',function($cells){ 
                        $cells->setAlignment('center'); 
                        $cells->setBackground('#b7b7b7');
                    });
                    $sheet->cells('A1:H'.$last_rows,function($cells){ 
                        $cells->setValignment('center'); 
                    });
                    $sheet->cells('A2:A'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('C2:C'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('H2:H'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->setBorder('A1:H'.$last_rows, 'thin');
                    $sheet->getStyle('A1:H'.$last_rows)->getAlignment()->setWrapText(true);
                });
                $excel->sheet('LAPJU.Penyidikan',function($sheet) use($outboxLapjuPenyidikan){
                    $sheet->setAutoSize(false);
                    $sheet->setWidth(array(
                        'A'=>10,
                        'B'=>35,
                        'C'=>28,
                        'D'=>40,
                        'E'=>30,
                        'F'=>20,
                        'G'=>25,
                        'H'=>60
                    ));
                    $sheet->setFreeze('A1');
                    $last_rows = count($outboxLapjuPenyidikan)+1;
                    for ($i=0; $i < count($outboxLapjuPenyidikan); $i++) { 
                        $no = $i+1;
                        $sheet->row($no,array(
                            $outboxLapjuPenyidikan[$i]['nomor_urut'],
                            $outboxLapjuPenyidikan[$i]['nomor_surat'],
                            Carbon::parse($outboxLapjuPenyidikan[$i]['tanggal'])->formatLocalized('%d %B %Y'),
                            $outboxLapjuPenyidikan[$i]['nama_wp'],
                            $outboxLapjuPenyidikan[$i]['npwp'],
                            $outboxLapjuPenyidikan[$i]['tahun_pajak'],
                            $outboxLapjuPenyidikan[$i]['analis'],
                            $outboxLapjuPenyidikan[$i]['tindak_lanjut']
                        ));
                    }
                    $sheet->prependRow(1,array(
                        'No.Urut','Nomor Surat','Tanggal','Nama WP','NPWP','Tahun Pajak','Analis','Menindaklanjuti'
                    ));
                    $sheet->cells('A1:H1',function($cells){ 
                        $cells->setAlignment('center'); 
                        $cells->setBackground('#b7b7b7');
                    });
                    $sheet->cells('A1:H'.$last_rows,function($cells){ 
                        $cells->setValignment('center'); 
                    });
                    $sheet->cells('A1:A'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('C1:C'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('F1:G'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->setBorder('A1:H'.$last_rows, 'thin');
                    $sheet->getStyle('A1:H'.$last_rows)->getAlignment()->setWrapText(true);
                });
                $excel->sheet('LK.DIK',function($sheet) use($outboxLkDIK){
                    $sheet->setAutoSize(false);
                    $sheet->setFreeze('A1');
                    $sheet->setWidth(array(
                        'A'=>8,
                        'B'=>35,
                        'C'=>30,
                        'D'=>40,
                        'E'=>50,
                        'F'=>25,
                        'G'=>25,
                        'H'=>10
                    ));
                    $last_rows = count($outboxLkDIK)+1;
                    for ($i=0; $i < count($outboxLkDIK); $i++) { 
                        $no = $i+1;
                        $sheet->row($no,array(
                            $outboxLkDIK[$i]['nomor_urut'],
                            $outboxLkDIK[$i]['nomor_surat'],
                            Carbon::parse($outboxLkDIK[$i]['tanggal_surat'])->formatLocalized('%d %B %Y'),
                            $outboxLkDIK[$i]['tujuan'],
                            $outboxLkDIK[$i]['perihal_surat'],
                            $outboxLkDIK[$i]['tembusan'],
                            $outboxLkDIK[$i]['menjawab'],
                            $outboxLkDIK[$i]['kode_seksi_pembuat']
                        ));
                    }
                    $sheet->prependRow(1,array(
                        'Nomor Urut','Nomor Surat','Tanggal Surat','Tujuan','Perihal Surat','Tembusan','Menjawab Surat/ Sehubungan dengan Surat','Kode Seksi Pembuat Surat'
                    ));
                    $sheet->cells('A1:H1',function($cells){ 
                        $cells->setAlignment('center'); 
                        $cells->setBackground('#b7b7b7');
                    });
                    $sheet->cells('A1:H'.$last_rows,function($cells){ 
                        $cells->setValignment('center'); 
                    });
                    $sheet->cells('A1:A'.$last_rows,function($cells){ 
                        $cells->setAlignment('center');
                    });
                    $sheet->cells('C1:C'.$last_rows,function($cells){ 
                        $cells->setAlignment('center');
                    });
                    $sheet->cells('H1:H'.$last_rows,function($cells){ 
                        $cells->setAlignment('center');
                    });
                    $sheet->setBorder('A1:H'.$last_rows, 'thin');
                    $sheet->getStyle('A1:H'.$last_rows)->getAlignment()->setWrapText(true);
                });
                $excel->sheet('PRIN.DIK',function($sheet) use($outboxPrinDIK){
                    $sheet->setAutoSize(false);
                    $sheet->setFreeze('A1');
                    $sheet->setWidth(array(
                        'A'=>8,
                        'B'=>35,
                        'C'=>30,
                        'D'=>40,
                        'E'=>50,
                        'F'=>25,
                        'G'=>25,
                        'H'=>10
                    ));
                    $last_rows = count($outboxPrinDIK)+1;
                    for ($i=0; $i < count($outboxPrinDIK); $i++) { 
                        $no = $i+1;
                        $sheet->row($no,array(
                            $outboxPrinDIK[$i]['nomor_urut'],
                            $outboxPrinDIK[$i]['nomor_surat'],
                            Carbon::parse($outboxPrinDIK[$i]['tanggal_surat'])->formatLocalized('%d %B %Y'),
                            $outboxPrinDIK[$i]['tujuan'],
                            $outboxPrinDIK[$i]['perihal_surat'],
                            $outboxPrinDIK[$i]['tembusan'],
                            $outboxPrinDIK[$i]['menjawab'],
                            $outboxPrinDIK[$i]['kode_seksi_pembuat']
                        ));
                    }
                    $sheet->prependRow(1,array(
                        'Nomor Urut','Nomor Surat','Tanggal Surat','Tujuan','Perihal Surat','Tembusan','Menjawab Surat/ Sehubungan dengan Surat','Kode Seksi Pembuat Surat'
                    ));
                    $sheet->cells('A1:H1',function($cells){ 
                        $cells->setAlignment('center'); 
                        $cells->setBackground('#b7b7b7');
                    });
                    $sheet->cells('A1:H'.$last_rows,function($cells){ 
                        $cells->setValignment('center'); 
                    });
                    $sheet->cells('A1:A'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('C1:C'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('H1:H'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->setBorder('A1:H'.$last_rows, 'thin');
                    $sheet->getStyle('A1:H'.$last_rows)->getAlignment()->setWrapText(true);
                });
                $excel->sheet('LHPS',function($sheet) use($outboxLHPS){
                    $sheet->setAutoSize(false);
                    $sheet->setFreeze('A1');
                    $sheet->setWidth(array(
                        'A'=>8,
                        'B'=>35,
                        'C'=>30,
                        'D'=>40,
                        'E'=>50,
                        'F'=>25,
                        'G'=>25,
                        'H'=>10
                    ));
                    $last_rows = count($outboxLHPS)+1;
                    for ($i=0; $i < count($outboxLHPS); $i++) { 
                        $no = $i+1;
                        $sheet->row($no,array(
                            $outboxLHPS[$i]['nomor_urut'],
                            $outboxLHPS[$i]['nomor_surat'],
                            Carbon::parse($outboxLHPS[$i]['tanggal_surat'])->formatLocalized('%d %B %Y'),
                            $outboxLHPS[$i]['tujuan'],
                            $outboxLHPS[$i]['perihal_surat'],
                            $outboxLHPS[$i]['tembusan'],
                            $outboxLHPS[$i]['menjawab'],
                            $outboxLHPS[$i]['kode_seksi_pembuat']
                        ));
                    }
                    $sheet->prependRow(1,array(
                        'Nomor Urut','Nomor Surat','Tanggal Surat','Tujuan','Perihal Surat','Tembusan','Menjawab Surat/ Sehubungan dengan Surat','Kode Seksi Pembuat Surat'
                    ));
                    $sheet->cells('A1:H1',function($cells){ 
                        $cells->setAlignment('center'); 
                        $cells->setBackground('#b7b7b7');
                    });
                    $sheet->cells('A1:H'.$last_rows,function($cells){ 
                        $cells->setValignment('center'); 
                    });
                    $sheet->cells('A2:A'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('C2:C'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('H2:H'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->setBorder('A1:H'.$last_rows, 'thin');
                    $sheet->getStyle('A1:H'.$last_rows)->getAlignment()->setWrapText(true);
                });
                $excel->sheet('PANG.BP',function($sheet) use($outboxPangBP){
                    $sheet->setAutoSize(false);
                    $sheet->setFreeze('A1');
                    $sheet->setWidth(array(
                        'A'=>8,
                        'B'=>35,
                        'C'=>30,
                        'D'=>40,
                        'E'=>50,
                        'F'=>25,
                        'G'=>25,
                        'H'=>10
                    ));
                    $last_rows = count($outboxPangBP)+1;
                    for ($i=0; $i < count($outboxPangBP); $i++) { 
                        $no = $i+1;
                        $sheet->row($no,array(
                            $outboxPangBP[$i]['nomor_urut'],
                            $outboxPangBP[$i]['nomor_surat'],
                            Carbon::parse($outboxPangBP[$i]['tanggal_surat'])->formatLocalized('%d %B %Y'),
                            $outboxPangBP[$i]['tujuan'],
                            $outboxPangBP[$i]['perihal_surat'],
                            $outboxPangBP[$i]['tembusan'],
                            $outboxPangBP[$i]['menjawab'],
                            $outboxPangBP[$i]['kode_seksi_pembuat']
                        ));
                    }
                    $sheet->prependRow(1,array(
                        'Nomor Urut','Nomor Surat','Tanggal Surat','Tujuan','Perihal Surat','Tembusan','Menjawab Surat/ Sehubungan dengan Surat','Kode Seksi Pembuat Surat'
                    ));
                    $sheet->cells('A1:H1',function($cells){ 
                        $cells->setAlignment('center'); 
                        $cells->setBackground('#b7b7b7');
                    });
                    $sheet->cells('A1:H'.$last_rows,function($cells){ 
                        $cells->setValignment('center'); 
                    });
                    $sheet->cells('A2:A'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('C2:C'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('H2:H'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->setBorder('A1:H'.$last_rows, 'thin');
                    $sheet->getStyle('A1:H'.$last_rows)->getAlignment()->setWrapText(true);
                });
                $excel->sheet('LPBP',function($sheet) use($outboxLPBP){
                    $sheet->setAutoSize(false);
                    $sheet->setFreeze('A1');
                    $sheet->setWidth(array(
                        'A'=>8,
                        'B'=>35,
                        'C'=>30,
                        'D'=>40,
                        'E'=>50,
                        'F'=>25,
                        'G'=>25,
                        'H'=>10
                    ));
                    $last_rows = count($outboxLPBP)+1;
                    for ($i=0; $i < count($outboxLPBP); $i++) { 
                        $no = $i+1;
                        $sheet->row($no,array(
                            $outboxLPBP[$i]['nomor_urut'],
                            $outboxLPBP[$i]['nomor_surat'],
                            Carbon::parse($outboxLPBP[$i]['tanggal_surat'])->formatLocalized('%d %B %Y'),
                            $outboxLPBP[$i]['tujuan'],
                            $outboxLPBP[$i]['perihal_surat'],
                            $outboxLPBP[$i]['tembusan'],
                            $outboxLPBP[$i]['menjawab'],
                            $outboxLPBP[$i]['kode_seksi_pembuat']
                        ));
                    }
                    $sheet->prependRow(1,array(
                        'Nomor Urut','Nomor Surat','Tanggal Surat','Tujuan','Perihal Surat','Tembusan','Menjawab Surat/ Sehubungan dengan Surat','Kode Seksi Pembuat Surat'
                    ));
                    $sheet->cells('A1:H1',function($cells){ 
                        $cells->setAlignment('center'); 
                        $cells->setBackground('#b7b7b7');
                    });
                    $sheet->cells('A1:H'.$last_rows,function($cells){ 
                        $cells->setValignment('center'); 
                    });
                    $sheet->cells('A2:A'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('C2:C'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('H2:H'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->setBorder('A1:H'.$last_rows, 'thin');
                    $sheet->getStyle('A1:H'.$last_rows)->getAlignment()->setWrapText(true);
                });
                $excel->sheet('DUPAK',function($sheet) use($outboxDUPAK){
                    $sheet->setAutoSize(false);
                    $sheet->setFreeze('A1');
                    $sheet->setWidth(array(
                        'A'=>8,
                        'B'=>35,
                        'C'=>30,
                        'D'=>40,
                        'E'=>50,
                        'F'=>25,
                        'G'=>25,
                        'H'=>10
                    ));
                    $last_rows = count($outboxDUPAK)+1;
                    for ($i=0; $i < count($outboxDUPAK); $i++) { 
                        $no = $i+1;
                        $sheet->row($no,array(
                            $outboxDUPAK[$i]['nomor_urut'],
                            $outboxDUPAK[$i]['nomor_surat'],
                            Carbon::parse($outboxDUPAK[$i]['tanggal_surat'])->formatLocalized('%d %B %Y'),
                            $outboxDUPAK[$i]['tujuan'],
                            $outboxDUPAK[$i]['perihal_surat'],
                            $outboxDUPAK[$i]['tembusan'],
                            $outboxDUPAK[$i]['menjawab'],
                            $outboxDUPAK[$i]['kode_seksi_pembuat']
                        ));
                    }
                    $sheet->prependRow(1,array(
                        'Nomor Urut','Nomor Surat','Tanggal Surat','Tujuan','Perihal Surat','Tembusan','Menjawab Surat/ Sehubungan dengan Surat','Kode Seksi Pembuat Surat'
                    ));
                    $sheet->cells('A1:H1',function($cells){ 
                        $cells->setAlignment('center'); 
                        $cells->setBackground('#b7b7b7');
                    });
                    $sheet->cells('A1:H'.$last_rows,function($cells){ 
                        $cells->setValignment('center'); 
                    });
                    $sheet->cells('A2:A'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('C2:C'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('H2:H'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->setBorder('A1:H'.$last_rows, 'thin');
                    $sheet->getStyle('A1:H'.$last_rows)->getAlignment()->setWrapText(true);
                });
                $excel->sheet('KEPKakanwil',function($sheet) use($outboxKEPKan){
                    $sheet->setAutoSize(false);
                    $sheet->setFreeze('A1');
                    $sheet->setWidth(array(
                        'A'=>8,
                        'B'=>40,
                        'C'=>25,
                        'D'=>40,
                        'E'=>50,
                        'F'=>10
                    ));
                    $last_rows = count($outboxKEPKan)+1;
                    for ($i=0; $i < count($outboxKEPKan); $i++) { 
                        $no = $i+1;
                        $sheet->row($no,array(
                            $outboxKEPKan[$i]['nomor_urut'],
                            $outboxKEPKan[$i]['nomor_surat'],
                            Carbon::parse($outboxKEPKan[$i]['tanggal_surat'])->formatLocalized('%d %B %Y'),
                            $outboxKEPKan[$i]['tujuan'],
                            $outboxKEPKan[$i]['perihal_surat'],
                            $outboxKEPKan[$i]['kode_seksi_pembuat']
                        ));
                    }
                    $sheet->prependRow(1,array(
                        'Nomor Urut','Nomor Surat','Tanggal Surat','Tujuan','Perihal Surat','Kode Seksi Pembuat Surat'
                    ));
                    $sheet->cells('A1:F1',function($cells){ 
                        $cells->setAlignment('center'); 
                        $cells->setBackground('#b7b7b7');
                    });
                    $sheet->cells('A1:F'.$last_rows,function($cells){ 
                        $cells->setValignment('center'); 
                    });
                    $sheet->cells('A2:A'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('C2:C'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('F2:F'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->setBorder('A1:F'.$last_rows, 'thin');
                    $sheet->getStyle('A1:F'.$last_rows)->getAlignment()->setWrapText(true);
                });
                $excel->sheet('PRINT.MAT',function($sheet) use($outboxPrinMAT){
                        $sheet->setAutoSize(false);
                        $sheet->setFreeze('A1');
                        $sheet->setWidth(array(
                            'A'=>8,
                            'B'=>35,
                            'C'=>30,
                            'D'=>40,
                            'E'=>50,
                            'F'=>25,
                            'G'=>25,
                            'H'=>10
                        ));
                        $last_rows = count($outboxPrinMAT)+1;
                        for ($i=0; $i < count($outboxPrinMAT); $i++) { 
                            $no = $i+1;
                            $sheet->row($no,array(
                                $outboxPrinMAT[$i]['nomor_urut'],
                                $outboxPrinMAT[$i]['nomor_surat'],
                                Carbon::parse($outboxPrinMAT[$i]['tanggal_surat'])->formatLocalized('%d %B %Y'),
                                $outboxPrinMAT[$i]['tujuan'],
                                $outboxPrinMAT[$i]['perihal_surat'],
                                $outboxPrinMAT[$i]['tembusan'],
                                $outboxPrinMAT[$i]['menjawab'],
                                $outboxPrinMAT[$i]['kode_seksi_pembuat']
                            ));
                        }
                        $sheet->prependRow(1,array(
                            'Nomor Urut','Nomor Surat','Tanggal Surat','Tujuan','Perihal Surat','Tembusan','Menjawab Surat/ Sehubungan dengan Surat','Kode Seksi Pembuat Surat'
                        ));
                        $sheet->cells('A1:H1',function($cells){ 
                            $cells->setAlignment('center'); 
                            $cells->setBackground('#b7b7b7');
                        });
                        $sheet->cells('A1:H'.$last_rows,function($cells){ 
                            $cells->setValignment('center'); 
                        });
                        $sheet->cells('A2:A'.$last_rows,function($cells){ 
                            $cells->setAlignment('center'); 
                        });
                        $sheet->cells('C2:C'.$last_rows,function($cells){ 
                            $cells->setAlignment('center'); 
                        });
                        $sheet->cells('H2:H'.$last_rows,function($cells){ 
                            $cells->setAlignment('center'); 
                        });
                        $sheet->setBorder('A1:H'.$last_rows, 'thin');
                        $sheet->getStyle('A1:H'.$last_rows)->getAlignment()->setWrapText(true);
                });
                $excel->sheet('INS.MAT',function($sheet) use($outboxInsMAT){
                    $sheet->setAutoSize(false);
                    $sheet->setFreeze('A1');
                    $sheet->setWidth(array(
                        'A'=>8,
                        'B'=>35,
                        'C'=>30,
                        'D'=>40,
                        'E'=>50,
                        'F'=>25,
                        'G'=>25,
                        'H'=>10
                    ));
                    $last_rows = count($outboxInsMAT)+1;
                    for ($i=0; $i < count($outboxInsMAT); $i++) { 
                        $no = $i+1;
                        $sheet->row($no,array(
                            $outboxInsMAT[$i]['nomor_urut'],
                            $outboxInsMAT[$i]['nomor_surat'],
                            Carbon::parse($outboxInsMAT[$i]['tanggal_surat'])->formatLocalized('%d %B %Y'),
                            $outboxInsMAT[$i]['tujuan'],
                            $outboxInsMAT[$i]['perihal_surat'],
                            $outboxInsMAT[$i]['tembusan'],
                            $outboxInsMAT[$i]['menjawab'],
                            $outboxInsMAT[$i]['kode_seksi_pembuat']
                        ));
                    }
                    $sheet->prependRow(1,array(
                        'Nomor Urut','Nomor Surat','Tanggal Surat','Tujuan','Perihal Surat','Tembusan','Menjawab Surat/ Sehubungan dengan Surat','Kode Seksi Pembuat Surat'
                    ));
                    $sheet->cells('A1:H1',function($cells){ 
                        $cells->setAlignment('center'); 
                        $cells->setBackground('#b7b7b7');
                    });
                    $sheet->cells('A1:H'.$last_rows,function($cells){ 
                        $cells->setValignment('center'); 
                    });
                    $sheet->cells('A2:A'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('C2:C'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('H2:H'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->setBorder('A1:H'.$last_rows, 'thin');
                    $sheet->getStyle('A1:H'.$last_rows)->getAlignment()->setWrapText(true);
                });
                $excel->sheet('LAP.MAT',function($sheet) use($outboxLapMAT){
                    $sheet->setAutoSize(false);
                    $sheet->setFreeze('A1');
                    $sheet->setWidth(array(
                        'A'=>8,
                        'B'=>35,
                        'C'=>30,
                        'D'=>40,
                        'E'=>50,
                        'F'=>25,
                        'G'=>25,
                        'H'=>10
                    ));
                    $last_rows = count($outboxLapMAT)+1;
                    for ($i=0; $i < count($outboxLapMAT); $i++) { 
                        $no = $i+1;
                        $sheet->row($no,array(
                            $outboxLapMAT[$i]['nomor_urut'],
                            $outboxLapMAT[$i]['nomor_surat'],
                            Carbon::parse($outboxLapMAT[$i]['tanggal_surat'])->formatLocalized('%d %B %Y'),
                            $outboxLapMAT[$i]['tujuan'],
                            $outboxLapMAT[$i]['perihal_surat'],
                            $outboxLapMAT[$i]['tembusan'],
                            $outboxLapMAT[$i]['menjawab'],
                            $outboxLapMAT[$i]['kode_seksi_pembuat']
                        ));
                    }
                    $sheet->prependRow(1,array(
                        'Nomor Urut','Nomor Surat','Tanggal Surat','Tujuan','Perihal Surat','Tembusan','Menjawab Surat/ Sehubungan dengan Surat','Kode Seksi Pembuat Surat'
                    ));
                    $sheet->cells('A1:H1',function($cells){ 
                        $cells->setAlignment('center'); 
                        $cells->setBackground('#b7b7b7');
                    });
                    $sheet->cells('A1:H'.$last_rows,function($cells){ 
                        $cells->setValignment('center'); 
                    });
                    $sheet->cells('A1:A'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('C1:C'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('H1:H'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->setBorder('A1:H'.$last_rows, 'thin');
                    $sheet->getStyle('A1:H'.$last_rows)->getAlignment()->setWrapText(true);
                });
                $excel->sheet('LHIP',function($sheet) use($outboxLHIP){
                    $sheet->setAutoSize(false);
                    $sheet->setFreeze('A1');
                    $sheet->setWidth(array(
                        'A'=>8,
                        'B'=>35,
                        'C'=>30,
                        'D'=>40,
                        'E'=>50,
                        'F'=>25,
                        'G'=>25,
                        'H'=>10
                    ));
                    $last_rows = count($outboxLHIP)+1;
                    for ($i=0; $i < count($outboxLHIP); $i++) { 
                        $no = $i+1;
                        $sheet->row($no,array(
                            $outboxLHIP[$i]['nomor_urut'],
                            $outboxLHIP[$i]['nomor_surat'],
                            Carbon::parse($outboxLHIP[$i]['tanggal_surat'])->formatLocalized('%d %B %Y'),
                            $outboxLHIP[$i]['tujuan'],
                            $outboxLHIP[$i]['perihal_surat'],
                            $outboxLHIP[$i]['tembusan'],
                            $outboxLHIP[$i]['menjawab'],
                            $outboxLHIP[$i]['kode_seksi_pembuat']
                        ));
                    }
                    $sheet->prependRow(1,array(
                        'Nomor Urut','Nomor Surat','Tanggal Surat','Tujuan','Perihal Surat','Tembusan','Menjawab Surat/ Sehubungan dengan Surat','Kode Seksi Pembuat Surat'
                    ));
                    $sheet->cells('A1:H1',function($cells){ 
                        $cells->setAlignment('center'); 
                        $cells->setBackground('#b7b7b7'); 
                    });
                    $sheet->cells('A1:H'.$last_rows,function($cells){ 
                        $cells->setValignment('center');
                    });
                    $sheet->cells('A1:A'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('C1:C'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('H1:H'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->setBorder('A1:H'.$last_rows, 'thin');
                    $sheet->getStyle('A1:H'.$last_rows)->getAlignment()->setWrapText(true);
                });
                $excel->sheet('LAP.ATENSI',function($sheet) use($outboxLA){
                    $sheet->setAutoSize(false);
                    $sheet->setFreeze('A1');
                    $sheet->setWidth(array(
                        'A'=>8,
                        'B'=>35,
                        'C'=>30,
                        'D'=>40,
                        'E'=>50,
                        'F'=>25,
                        'G'=>25,
                        'H'=>10
                    ));
                    $last_rows = count($outboxLA)+1;
                    for ($i=0; $i < count($outboxLA); $i++) { 
                        $no = $i+1;
                        $sheet->row($no,array(
                            $outboxLA[$i]['nomor_urut'],
                            $outboxLA[$i]['nomor_surat'],
                            Carbon::parse($outboxLA[$i]['tanggal_surat'])->formatLocalized('%d %B %Y'),
                            $outboxLA[$i]['tujuan'],
                            $outboxLA[$i]['perihal_surat'],
                            $outboxLA[$i]['tembusan'],
                            $outboxLA[$i]['menjawab'],
                            $outboxLA[$i]['kode_seksi_pembuat']
                        ));
                    }
                    $sheet->prependRow(1,array(
                        'Nomor Urut','Nomor Surat','Tanggal Surat','Tujuan','Perihal Surat','Tembusan','Menjawab Surat/ Sehubungan dengan Surat','Kode Seksi Pembuat Surat'
                    ));
                    $sheet->cells('A1:H1',function($cells){ 
                        $cells->setAlignment('center'); 
                        $cells->setBackground('#b7b7b7');
                    });
                    $sheet->cells('A1:H'.$last_rows,function($cells){ 
                        $cells->setValignment('center'); 
                    });
                    $sheet->cells('A1:A'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('C1:C'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->cells('H1:H'.$last_rows,function($cells){ 
                        $cells->setAlignment('center'); 
                    });
                    $sheet->setBorder('A1:H'.$last_rows, 'thin');
                    $sheet->getStyle('A1:H'.$last_rows)->getAlignment()->setWrapText(true);
                });
            })->export('xls');

        }else{
            exit('Request Invalid');
        }
    }
    public function testData(){
        return view('adminView.dataTable');
    }
    public function a(){
        
    }
}
