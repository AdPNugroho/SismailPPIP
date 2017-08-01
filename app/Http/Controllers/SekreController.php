<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Datatables;
use Validator;

use App\InboxModel;
use App\DisposisiModel;
use App\PetunjukModel;
use App\SifatModel;
class SekreController extends Controller
{
    public function index(){
        $data = array(
            'inbox'=>DB::table('tbl_inbox')->select('id_surat')->count()
        );

        return view('sekreView.dashboard',$data);
    }

    public function inbox(){
        return view('sekreView.inbox');
    }
    
    public function print(){
        return view('sekreView.print');
    }
    
    public function profile(){
        return view('sekreView.profile');
    }

    public function storeInbox(Request $request){
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

    public function storeDisposisi(Request $request){
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
    public function printView($id){
        $data =  DB::table('tbl_inbox')
        ->where('tbl_inbox.id_surat',$id)
        ->join('tbl_disposisi','tbl_disposisi.id_surat','=','tbl_inbox.id_surat')
        ->join('tbl_petunjuk','tbl_petunjuk.id_surat','=','tbl_inbox.id_surat')
        ->join('tbl_sifat','tbl_sifat.id_surat','=','tbl_inbox.id_surat')
        ->get();
        return $data;
    }
    public function printBatch(Request $request){
        $getData = $request->all();
        for($x=0;$x<count($getData['id_surat_print']);$x++){
            $data =  DB::table('tbl_inbox')
                ->where('tbl_inbox.id_surat',$getData['id_surat_print'][$x])
                ->join('tbl_disposisi','tbl_disposisi.id_surat','=','tbl_inbox.id_surat')
                ->join('tbl_petunjuk','tbl_petunjuk.id_surat','=','tbl_inbox.id_surat')
                ->join('tbl_sifat','tbl_sifat.id_surat','=','tbl_inbox.id_surat')
                ->get();
            echo json_encode($data);
            //TODO PRINT EACH PAGE ACCORDING TO ID SURAT
        }
    }
    public function dataSurat(Request $request){
        if($request->ajax()){
            $inbox =  DB::table('tbl_inbox')->get();
            return Datatables::of($inbox)->make(true);
        }else{
            exit("Not an AJAX request");
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
            exit("Not an AJAX request");
        }
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

    public function detailDisposisiNext(Request $request){
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

    public function detailDisposisiPrev(Request $request){
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
}
