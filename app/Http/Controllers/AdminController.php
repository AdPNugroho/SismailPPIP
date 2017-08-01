<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Datatables;
use Validator;

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
        $this->validate($request,[
            'username'=>'required|unique:tbl_pengguna',
            'password'=>'required|confirmed',
        ]);
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
        $this->validate($request,[
            'username'=>'required|unique:tbl_pengguna',
            'password'=>'required|confirmed',
            'password_confirmation'=>'required',
            'status'=>'numeric'
        ]);
        $data = $request->all();
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
            Validator::make($req, [
                'id_pengguna'=>['required','numeric'],
                'username_update' => ['required',Rule::unique('tbl_pengguna','username')->ignore($id,'id_pengguna')],
                'password_update'=>['required','confirmed'],
                'password_update_confirmation'=>['required']
            ])->validate();
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
            Validator::make($req,[
                'id_pengguna'=>['required','numeric'],
                'username_update' => ['required',Rule::unique('tbl_pengguna','username')->ignore($id,'id_pengguna')],
                'password_update'=>['required','confirmed'],
                'password_update_confirmation'=>['required'],
                'status_update'=>['numeric']
            ])->validate();
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

    public function storeInbox(Request $request)
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

    }
}
