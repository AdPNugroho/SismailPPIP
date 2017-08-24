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
class DataController extends Controller
{
    public function dataBaTa(Request $request){        
        if($request->ajax()){
            $data = DB::table('tbl_outbox_first')
            ->where('kode_jenis','1')
            ->get();
            return Datatables::of($data)->make(true);
        }else{
            exit("Not an Ajax Request!");
        }
    }
    public function dataTA(Request $request){
        if($request->ajax()){
            $data = DB::table('tbl_outbox_first')
            ->where('kode_jenis','2')
            ->get();
            return Datatables::of($data)->make(true);
        }else{
            exit("Not an Ajax Request!");
        }
    }
    public function dataS(Request $request){
        if($request->ajax()){
            $data = DB::table('tbl_outbox_first')
            ->where('kode_jenis','3')
            ->get();
            return Datatables::of($data)->make(true);
        }else{
            exit("Not an Ajax Request!");
        }
    }
    public function dataKET(Request $request){
        if($request->ajax()){
            $data = DB::table('tbl_outbox_first')
            ->where('kode_jenis','4')
            ->get();
            return Datatables::of($data)->make(true);
        }else{
            exit("Not an Ajax Request!");
        }
    }
    public function dataND(Request $request){
        if($request->ajax()){
            $data = DB::table('tbl_outbox_first')
            ->where('kode_jenis','5')
            ->get();
            return Datatables::of($data)->make(true);
        }else{
            exit("Not an Ajax Request!");
        }
    }
    public function dataSPR(Request $request){
        if($request->ajax()){
            $data = DB::table('tbl_outbox_first')
            ->where('kode_jenis','6')
            ->get();
            return Datatables::of($data)->make(true);
        }else{
            exit("Not an Ajax Request!");
        }
    }
    public function dataNDR(Request $request){
        if($request->ajax()){
            $data = DB::table('tbl_outbox_first')
            ->where('kode_jenis','7')
            ->get();
            return Datatables::of($data)->make(true);
        }else{
            exit("Not an Ajax Request!");
        }
    }
    public function dataSP(Request $request){
        if($request->ajax()){
            $data = DB::table('tbl_outbox_first')
            ->where('kode_jenis','8')
            ->get();
            return Datatables::of($data)->make(true);
        }else{
            exit("Not an Ajax Request!");
        }
    }
    public function dataSR(Request $request){
        if($request->ajax()){
            $data = DB::table('tbl_outbox_first')
            ->where('kode_jenis','9')
            ->get();
            return Datatables::of($data)->make(true);
        }else{
            exit("Not an Ajax Request!");
        }
    }
    public function dataSRiksis(Request $request){
        if($request->ajax()){
            $data = DB::table('tbl_outbox_first')
            ->where('kode_jenis','10')
            ->get();
            return Datatables::of($data)->make(true);
        }else{
            exit("Not an Ajax Request!");
        }
    }
    public function dataSI(Request $request){
        if($request->ajax()){
            $data = DB::table('tbl_outbox_first')
            ->where('kode_jenis','11')
            ->get();
            return Datatables::of($data)->make(true);
        }else{
            exit("Not an Ajax Request!");
        }
    }
    public function dataWPJ(Request $request){
        if($request->ajax()){
            $data = DB::table('tbl_outbox_first')
            ->where('kode_jenis','12')
            ->get();
            return Datatables::of($data)->make(true);
        }else{
            exit("Not an Ajax Request!");
        }
    }
    public function dataUND(Request $request){
        if($request->ajax()){
            $data = DB::table('tbl_outbox_first')
            ->where('kode_jenis','13')
            ->get();
            return Datatables::of($data)->make(true);
        }else{
            exit("Not an Ajax Request!");
        }
    }
    public function dataST(Request $request){
        if($request->ajax()){
            $data = DB::table('tbl_outbox_first')
            ->where('kode_jenis','14')
            ->get();
            return Datatables::of($data)->make(true);
        }else{
            exit("Not an Ajax Request!");
        }
    }
    public function dataLHPPU(Request $request){
        if($request->ajax()){
            $data = DB::table('tbl_outbox_first')
            ->where('kode_jenis','15')
            ->get();
            return Datatables::of($data)->make(true);
        }else{
            exit("Not an Ajax Request!");
        }
    }
    public function dataLAP(Request $request){
        if($request->ajax()){
            $data = DB::table('tbl_outbox_first')
            ->where('kode_jenis','16')
            ->get();
            return Datatables::of($data)->make(true);
        }else{
            exit("Not an Ajax Request!");
        }
    }
    public function dataLAT(Request $request){
        if($request->ajax()){
            $data = DB::table('tbl_outbox_first')
            ->where('kode_jenis','17')
            ->get();
            return Datatables::of($data)->make(true);
        }else{
            exit("Not an Ajax Request!");
        }
    }
    public function dataBA(Request $request){
        if($request->ajax()){
            $data = DB::table('tbl_outbox_first')
            ->where('kode_jenis','18')
            ->get();
            return Datatables::of($data)->make(true);
        }else{
            exit("Not an Ajax Request!");
        }
    }
    public function dataBaPen(Request $request){
        if($request->ajax()){
            $data = DB::table('tbl_outbox_first')
            ->where('kode_jenis','19')
            ->get();
            return Datatables::of($data)->make(true);
        }else{
            exit("Not an Ajax Request!");
        }
    }
    public function dataPrinBP(Request $request){
        if($request->ajax()){
            $data = DB::table('tbl_outbox_first')
            ->where('kode_jenis','20')
            ->get();
            return Datatables::of($data)->make(true);
        }else{
            exit("Not an Ajax Request!");
        }
    }
    public function dataSppbpP(Request $request){
        if($request->ajax()){
            $data = DB::table('tbl_outbox_first')
            ->where('kode_jenis','21')
            ->get();
            return Datatables::of($data)->make(true);
        }else{
            exit("Not an Ajax Request!");
        }
    }
    public function dataSpembBP(Request $request){
        if($request->ajax()){
            $data = DB::table('tbl_outbox_first')
            ->where('kode_jenis','22')
            ->get();
            return Datatables::of($data)->make(true);
        }else{
            exit("Not an Ajax Request!");
        }
    }
    public function dataPembBP(Request $request){
        if($request->ajax()){
            $data = DB::table('tbl_outbox_first')
            ->where('kode_jenis','23')
            ->get();
            return Datatables::of($data)->make(true);
        }else{
            exit("Not an Ajax Request!");
        }
    } 
    public function dataLkDik(Request $request){
        if($request->ajax()){
            $data = DB::table('tbl_outbox_first')
            ->where('kode_jenis','24')
            ->get();
            return Datatables::of($data)->make(true);
        }else{
            exit("Not an Ajax Request!");
        }
    }
    public function dataPrinDik(Request $request){
        if($request->ajax()){
            $data = DB::table('tbl_outbox_first')
            ->where('kode_jenis','25')
            ->get();
            return Datatables::of($data)->make(true);
        }else{
            exit("Not an Ajax Request!");
        }
    }
    public function dataLhps(Request $request){
        if($request->ajax()){
            $data = DB::table('tbl_outbox_first')
            ->where('kode_jenis','26')
            ->get();
            return Datatables::of($data)->make(true);
        }else{
            exit("Not an Ajax Request!");
        }
    }
    public function dataPangBp(Request $request){
        if($request->ajax()){
            $data = DB::table('tbl_outbox_first')
            ->where('kode_jenis','27')
            ->get();
            return Datatables::of($data)->make(true);
        }else{
            exit("Not an Ajax Request!");
        }
    }
    public function dataLpbp(Request $request){
        if($request->ajax()){
            $data = DB::table('tbl_outbox_first')
            ->where('kode_jenis','28')
            ->get();
            return Datatables::of($data)->make(true);
        }else{
            exit("Not an Ajax Request!");
        }
    }
    public function dataDupak(Request $request){
        if($request->ajax()){
            $data = DB::table('tbl_outbox_first')
            ->where('kode_jenis','29')
            ->get();
            return Datatables::of($data)->make(true);
        }else{
            exit("Not an Ajax Request!");
        }
    }
    public function dataKEPKakanwil(Request $request){
        if($request->ajax()){
            $data = DB::table('tbl_outbox_first')
            ->where('kode_jenis','30')
            ->get();
            return Datatables::of($data)->make(true);
        }else{
            exit("Not an Ajax Request!");
        }
    }
    public function dataPrintMat(Request $request){
        if($request->ajax()){
            $data = DB::table('tbl_outbox_first')
            ->where('kode_jenis','31')
            ->get();
            return Datatables::of($data)->make(true);
        }else{
            exit("Not an Ajax Request!");
        }
    }
    public function dataInsMat(Request $request){
        if($request->ajax()){
            $data = DB::table('tbl_outbox_first')
            ->where('kode_jenis','32')
            ->get();
            return Datatables::of($data)->make(true);
        }else{
            exit("Not an Ajax Request!");
        }
    }
    public function dataLapMat(Request $request){
        if($request->ajax()){
            $data = DB::table('tbl_outbox_first')
            ->where('kode_jenis','33')
            ->get();
            return Datatables::of($data)->make(true);
        }else{
            exit("Not an Ajax Request!");
        }
    }
    public function dataLhip(Request $request){
        if($request->ajax()){
            $data = DB::table('tbl_outbox_first')
            ->where('kode_jenis','34')
            ->get();
            return Datatables::of($data)->make(true);
        }else{
            exit("Not an Ajax Request!");
        }
    }
    public function dataLapAtensi(Request $request){
        if($request->ajax()){
            $data = DB::table('tbl_outbox_first')
            ->where('kode_jenis','35')
            ->get();
            return Datatables::of($data)->make(true);
        }else{
            exit("Not an Ajax Request!");
        }
    }
    public function dataFax(Request $request){
        if($request->ajax()){
            $data = DB::table('tbl_outbox_fax')->get();
            return Datatables::of($data)->make(true);
        }else{
            exit("Not an Ajax Request!");
        }
    }
    public function dataLII(Request $request){
        if($request->ajax()){
            $data = DB::table('tbl_outbox_second')
            ->where('kode_jenis','1')
            ->get();
            return Datatables::of($data)->make(true);
        }else{
            exit("Not an Ajax Request!");
        }
    }
    public function dataLapjuIDLP(Request $request){
        if($request->ajax()){
            $data = DB::table('tbl_outbox_second')
            ->where('kode_jenis','2')
            ->get();
            return Datatables::of($data)->make(true);
        }else{
            exit("Not an Ajax Request!");
        }
    }
    public function dataLhpaIDLP(Request $request){
        if($request->ajax()){
            $data = DB::table('tbl_outbox_second')
            ->where('kode_jenis','3')
            ->get();
            return Datatables::of($data)->make(true);
        }else{
            exit("Not an Ajax Request!");
        }
    }
    public function dataLiaIDLP(Request $request){
        if($request->ajax()){
            $data = DB::table('tbl_outbox_second')
            ->where('kode_jenis','4')
            ->get();
            return Datatables::of($data)->make(true);
        }else{
            exit("Not an Ajax Request!");
        }
    }
    public function dataLapjuPenyidikan(Request $request){
        if($request->ajax()){
            $data = DB::table('tbl_outbox_second')
            ->where('kode_jenis','5')
            ->get();
            return Datatables::of($data)->make(true);
        }else{
            exit("Not an Ajax Request!");
        }
    }
    public function dataBaPenIDLP(Request $request){
        if($request->ajax()){
            $data = DB::table('tbl_outbox_second')
            ->where('kode_jenis','6')
            ->get();
            return Datatables::of($data)->make(true);
        }else{
            exit("Not an Ajax Request!");
        }
    }
    public function dataOutboxPost(Request $request){
        if($request->ajax()){
            $data = $request->all();
            $jenis = $data['jenis_surat'];
            switch ($jenis) {
                case '1':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required','max:255'],
                        'perihal'=>['required']
                    ],$message)->validate();
                    $explodeTanggal = explode('/',$data['tanggal_surat']);
                    $tanggalInsert = $explodeTanggal[2];
                    $valueBefore = OutboxFirstModel::select('nomor_surat')
                                    ->where('kode_jenis','1')
                                    ->orderBy('nomor_urut', 'desc')
                                    ->limit('1')
                                    ->get();
                    if(count($valueBefore)>0){
                        $a = explode('/',$valueBefore[0]['nomor_surat']);
                        $b = explode('-',$a[0]);
                        $c = (int)$b[1] + 1;
                        if(strlen($c)<2){
                            $c = sprintf('%02d',$c);
                        }
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'BA.TA-'.$c.'/WPJ.14/'.$tanggalInsert;
                            $kode_seksi = $data['kode_seksi'];
                        }else{
                            $nomor_surat = 'BA.TA-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                            $kode_seksi = strtoupper($data['kode_seksi']);
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>(int)$b[1] + 1,
                            'nomor_surat'=>$nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'1'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }else{
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'BA.TA-01/WPJ.14/'.$tanggalInsert;
                            $kode_seksi = $data['kode_seksi'];
                        }else{
                            $nomor_surat = 'BA.TA-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                            $kode_seksi = strtoupper($data['kode_seksi']);
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>'1',
                            'nomor_surat'=> $nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'1'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }
                    $response = array(
                        'message'=>'Surat Keluar Berhasil Di Tambahkan dengan Nomor <br>'.$nomor_surat,
                        'status'=>'info'
                    );
                    return response()->json($response);
                    break;
                case '2':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required']
                    ],$message)->validate();
                    $explodeTanggal = explode('/',$data['tanggal_surat']);
                    $tanggalInsert = $explodeTanggal[2];
                    $valueBefore = OutboxFirstModel::select('nomor_surat')
                                    ->where('kode_jenis','2')
                                    ->orderBy('nomor_urut', 'desc')
                                    ->limit('1')
                                    ->get();
                    if(count($valueBefore)>0){
                        $a = explode('/',$valueBefore[0]['nomor_surat']);
                        $b = explode('-',$a[0]);
                        $c = (int)$b[1] + 1;
                        if(strlen($c)<2){
                            $c = sprintf('%02d',$c);
                        }
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'S-'.$c.'.TA/WPJ.14/'.$tanggalInsert;
                            $kode_seksi = $data['kode_seksi'];
                        }else{
                            $nomor_surat = 'S-'.$c.'.TA/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                            $kode_seksi = strtoupper($data['kode_seksi']);
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>(int)$b[1] + 1,
                            'nomor_surat'=>$nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>$kode_seksi,
                            'kode_jenis'=>'2'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }else{
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'S-01.TA/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'S-01.TA/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>'1',
                            'nomor_surat'=>$nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'2'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }
                    $response = array(
                        'message'=>'Surat Keluar Berhasil Di Tambahkan dengan Nomor <br>'.$nomor_surat,
                        'status'=>'info'
                    );
                    return response()->json($response);
                    break;
                case '3':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required']
                    ],$message)->validate();
                    $explodeTanggal = explode('/',$data['tanggal_surat']);
                    $tanggalInsert = $explodeTanggal[2];
                    $valueBefore = OutboxFirstModel::select('nomor_surat')
                                    ->where('kode_jenis','3')
                                    ->orderBy('nomor_urut', 'desc')
                                    ->limit('1')
                                    ->get();
                    if(count($valueBefore)>0){
                        $a = explode('/',$valueBefore[0]['nomor_surat']);
                        $b = explode('-',$a[0]);
                        $c = (int)$b[1] + 1;
                        if(strlen($c)<2){
                            $c = sprintf('%02d',$c);
                        }
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'S-'.$c.'/WPJ.14/'.$tanggalInsert;
                            $kode_seksi = $data['kode_seksi'];
                        }else{
                            $nomor_surat = 'S-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                            $kode_seksi = strtoupper($data['kode_seksi']);
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>(int)$b[1] + 1,
                            'nomor_surat'=>$nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'3'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }else{
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'S-01/WPJ.14/'.$tanggalInsert;
                            $kode_seksi = $data['kode_seksi'];
                        }else{
                            $nomor_surat = 'S-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                            $kode_seksi = strtoupper($data['kode_seksi']);
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>'1',
                            'nomor_surat'=> $nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'3'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }
                    $response = array(
                        'message'=>'Surat Keluar Berhasil Di Tambahkan dengan Nomor <br>'.$nomor_surat,
                        'status'=>'info'
                    );
                    return response()->json($response);
                    break;
                case '4':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required']
                    ],$message)->validate();
                    $explodeTanggal = explode('/',$data['tanggal_surat']);
                    $tanggalInsert = $explodeTanggal[2];
                    $valueBefore = OutboxFirstModel::select('nomor_surat')
                                    ->where('kode_jenis','4')
                                    ->orderBy('nomor_urut', 'desc')
                                    ->limit('1')
                                    ->get();
                    if(count($valueBefore)>0){
                        $a = explode('/',$valueBefore[0]['nomor_surat']);
                        $b = explode('-',$a[0]);
                        $c = (int)$b[1] + 1;
                        if(strlen($c)<2){
                            $c = sprintf('%02d',$c);
                        }
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'KET-'.$c.'/WPJ.14/'.$tanggalInsert;
                            $kode_seksi = $data['kode_seksi'];
                        }else{
                            $nomor_surat = 'KET-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                            $kode_seksi = strtoupper($data['kode_seksi']);
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>(int)$b[1] + 1,
                            'nomor_surat'=>$nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'4'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }else{
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'KET-01/WPJ.14/'.$tanggalInsert;
                            $kode_seksi = $data['kode_seksi'];
                        }else{
                            $nomor_surat = 'KET-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                            $kode_seksi = strtoupper($data['kode_seksi']);
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>'1',
                            'nomor_surat'=> $nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'4'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }
                    $response = array(
                        'message'=>'Surat Keluar Berhasil Di Tambahkan dengan Nomor <br>'.$nomor_surat,
                        'status'=>'info'
                    );
                    return response()->json($response);
                    break;
                case '5':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required']
                    ],$message)->validate();
                    $explodeTanggal = explode('/',$data['tanggal_surat']);
                    $tanggalInsert = $explodeTanggal[2];
                    $valueBefore = OutboxFirstModel::select('nomor_surat')
                                    ->where('kode_jenis','5')
                                    ->orderBy('nomor_urut', 'desc')
                                    ->limit('1')
                                    ->get();
                    if(count($valueBefore)>0){
                        $a = explode('/',$valueBefore[0]['nomor_surat']);
                        $b = explode('-',$a[0]);
                        $c = (int)$b[1] + 1;
                        if(strlen($c)<2){
                            $c = sprintf('%02d',$c);
                        }
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'ND-'.$c.'/WPJ.14/'.$tanggalInsert;
                            $kode_seksi = $data['kode_seksi'];
                        }else{
                            $nomor_surat = 'ND-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                            $kode_seksi = strtoupper($data['kode_seksi']);
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>(int)$b[1] + 1,
                            'nomor_surat'=>$nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'5'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }else{
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'ND-01/WPJ.14/WPJ.14/'.$tanggalInsert;
                            $kode_seksi = $data['kode_seksi'];
                        }else{
                            $nomor_surat = 'ND-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                            $kode_seksi = strtoupper($data['kode_seksi']);
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>'1',
                            'nomor_surat'=> $nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'5'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }
                    $response = array(
                        'message'=>'Surat Keluar Berhasil Di Tambahkan dengan Nomor <br>'.$nomor_surat,
                        'status'=>'info'
                    );
                    return response()->json($response);
                    break;
                case '6':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required']
                    ],$message)->validate();
                    $explodeTanggal = explode('/',$data['tanggal_surat']);
                    $tanggalInsert = $explodeTanggal[2];
                    $valueBefore = OutboxFirstModel::select('nomor_surat')
                                    ->where('kode_jenis','6')
                                    ->orderBy('nomor_urut', 'desc')
                                    ->limit('1')
                                    ->get();
                    if(count($valueBefore)>0){
                        $a = explode('/',$valueBefore[0]['nomor_surat']);
                        $b = explode('-',$a[0]);
                        $c = (int)$b[1] + 1;
                        if(strlen($c)<2){
                            $c = sprintf('%02d',$c);
                        }
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'SPR-'.$c.'/WPJ.14/'.$tanggalInsert;
                            $kode_seksi = $data['kode_seksi'];
                        }else{
                            $nomor_surat = 'SPR-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                            $kode_seksi = strtoupper($data['kode_seksi']);
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>(int)$b[1] + 1,
                            'nomor_surat'=>$nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'6'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }else{
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'SPR-01/WPJ.14/'.$tanggalInsert;
                            $kode_seksi = $data['kode_seksi'];
                        }else{
                            $nomor_surat = 'SPR-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                            $kode_seksi = strtoupper($data['kode_seksi']);
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>'1',
                            'nomor_surat'=> $nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'6'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }
                    $response = array(
                        'message'=>'Surat Keluar Berhasil Di Tambahkan dengan Nomor <br>'.$nomor_surat,
                        'status'=>'info'
                    );
                    return response()->json($response);
                    break;
                case '7':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required']
                    ],$message)->validate();
                    $explodeTanggal = explode('/',$data['tanggal_surat']);
                    $tanggalInsert = $explodeTanggal[2];
                    $valueBefore = OutboxFirstModel::select('nomor_surat')
                                    ->where('kode_jenis','7')
                                    ->orderBy('nomor_urut', 'desc')
                                    ->limit('1')
                                    ->get();
                    if(count($valueBefore)>0){
                        $a = explode('/',$valueBefore[0]['nomor_surat']);
                        $b = explode('-',$a[0]);
                        $c = (int)$b[1] + 1;
                        if(strlen($c)<2){
                            $c = sprintf('%02d',$c);
                        }
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'NDR-'.$c.'/WPJ.14/'.$tanggalInsert;
                            $kode_seksi = $data['kode_seksi'];
                        }else{
                            $nomor_surat = 'NDR-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                            $kode_seksi = strtoupper($data['kode_seksi']);
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>(int)$b[1] + 1,
                            'nomor_surat'=>$nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'7'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }else{
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'NDR-01/WPJ.14/'.$tanggalInsert;
                            $kode_seksi = $data['kode_seksi'];
                        }else{
                            $nomor_surat = 'NDR-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                            $kode_seksi = strtoupper($data['kode_seksi']);
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>'1',
                            'nomor_surat'=> $nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'7'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }
                    $response = array(
                        'message'=>'Surat Keluar Berhasil Di Tambahkan dengan Nomor <br>'.$nomor_surat,
                        'status'=>'info'
                    );
                    return response()->json($response);
                    break;
                case '8':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required']
                    ],$message)->validate();
                    $explodeTanggal = explode('/',$data['tanggal_surat']);
                    $tanggalInsert = $explodeTanggal[2];
                    $valueBefore = OutboxFirstModel::select('nomor_surat')
                                    ->where('kode_jenis','8')
                                    ->orderBy('nomor_urut', 'desc')
                                    ->limit('1')
                                    ->get();
                    if(count($valueBefore)>0){
                        $a = explode('/',$valueBefore[0]['nomor_surat']);
                        $b = explode('-',$a[0]);
                        $c = (int)$b[1] + 1;
                        if(strlen($c)<2){
                            $c = sprintf('%02d',$c);
                        }
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'SP-'.$c.'/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'SP-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>(int)$b[1] + 1,
                            'nomor_surat'=>$nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'8'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }else{
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'SP-01/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'SP-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>'1',
                            'nomor_surat'=> $nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'8'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }
                    $response = array(
                        'message'=>'Surat Keluar Berhasil Di Tambahkan dengan Nomor <br>'.$nomor_surat,
                        'status'=>'info'
                    );
                    return response()->json($response);
                    break;
                case '9':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required']
                    ],$message)->validate();
                    $explodeTanggal = explode('/',$data['tanggal_surat']);
                    $tanggalInsert = $explodeTanggal[2];
                    $valueBefore = OutboxFirstModel::select('nomor_surat')
                                    ->where('kode_jenis','9')
                                    ->orderBy('nomor_urut', 'desc')
                                    ->limit('1')
                                    ->get();
                    if(count($valueBefore)>0){
                        $a = explode('/',$valueBefore[0]['nomor_surat']);
                        $b = explode('-',$a[0]);
                        $c = (int)$b[1] + 1;
                        if(strlen($c)<2){
                            $c = sprintf('%02d',$c);
                        }
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'SR-'.$c.'/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'SR-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>(int)$b[1] + 1,
                            'nomor_surat'=>$nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'9'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }else{
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'SR-01/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'SR-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>'1',
                            'nomor_surat'=> $nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'9'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }
                    $response = array(
                        'message'=>'Surat Keluar Berhasil Di Tambahkan dengan Nomor <br>'.$nomor_surat,
                        'status'=>'info'
                    );
                    return response()->json($response);
                    break;
                case '10':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required']
                    ],$message)->validate();
                    $explodeTanggal = explode('/',$data['tanggal_surat']);
                    $tanggalInsert = $explodeTanggal[2];
                    $valueBefore = OutboxFirstModel::select('nomor_surat')
                                    ->where('kode_jenis','10')
                                    ->orderBy('nomor_urut', 'desc')
                                    ->limit('1')
                                    ->get();
                    if(count($valueBefore)>0){
                        $a = explode('/',$valueBefore[0]['nomor_surat']);
                        $b = explode('-',$a[0]);
                        $c = (int)$b[1] + 1;
                        if(strlen($c)<2){
                            $c = sprintf('%02d',$c);
                        }
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'S-'.$c.'/WPJ.14/RIK.SIS/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'S-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/RIK.SIS/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>(int)$b[1] + 1,
                            'nomor_surat'=>$nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'10'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }else{
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'S-01/WPJ.14/RIK.SIS/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'S-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/RIK.SIS/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>'1',
                            'nomor_surat'=> $nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'10'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }
                    $response = array(
                        'message'=>'Surat Keluar Berhasil Di Tambahkan dengan Nomor <br>'.$nomor_surat,
                        'status'=>'info'
                    );
                    return response()->json($response);
                    break;
                case '11':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required']
                    ],$message)->validate();
                    $explodeTanggal = explode('/',$data['tanggal_surat']);
                    $tanggalInsert = $explodeTanggal[2];
                    $valueBefore = OutboxFirstModel::select('nomor_surat')
                                    ->where('kode_jenis','11')
                                    ->orderBy('nomor_urut', 'desc')
                                    ->limit('1')
                                    ->get();
                    if(count($valueBefore)>0){
                        $a = explode('/',$valueBefore[0]['nomor_surat']);
                        $b = explode('-',$a[0]);
                        $c = (int)$b[1] + 1;
                        if(strlen($c)<2){
                            $c = sprintf('%02d',$c);
                        }
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'SI-'.$c.'/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'SI-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>(int)$b[1] + 1,
                            'nomor_surat'=>$nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'11'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }else{
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'SI-01/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'SI-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>'1',
                            'nomor_surat'=> $nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'11'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }
                    $response = array(
                        'message'=>'Surat Keluar Berhasil Di Tambahkan dengan Nomor <br>'.$nomor_surat,
                        'status'=>'info'
                    );
                    return response()->json($response);
                    break;
                case '12':
                    //WPJ.14 Belum Jelas
                    $response = array(
                        'message'=>'Fungsi Input Surat WPJ.14 Belum Berjalan',
                        'status'=>'error'
                    );
                    return response()->json($response);
                    break;
                case '13':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required']
                    ],$message)->validate();$explodeTanggal = explode('/',$data['tanggal_surat']);
                    $tanggalInsert = $explodeTanggal[2];
                    $valueBefore = OutboxFirstModel::select('nomor_surat')
                                    ->where('kode_jenis','13')
                                    ->orderBy('nomor_urut', 'desc')
                                    ->limit('1')
                                    ->get();
                    if(count($valueBefore)>0){
                        $a = explode('/',$valueBefore[0]['nomor_surat']);
                        $b = explode('-',$a[0]);
                        $c = (int)$b[1] + 1;
                        if(strlen($c)<2){
                            $c = sprintf('%02d',$c);
                        }
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'UND-'.$c.'/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'UND-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>(int)$b[1] + 1,
                            'nomor_surat'=>$nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'13'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }else{
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'UND-01/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'UND-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>'1',
                            'nomor_surat'=> $nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'13'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }
                    $response = array(
                        'message'=>'Surat Keluar Berhasil Di Tambahkan dengan Nomor <br>'.$nomor_surat,
                        'status'=>'info'
                    );
                    return response()->json($response);
                    break;
                case '14':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required']
                    ],$message)->validate();
                    $explodeTanggal = explode('/',$data['tanggal_surat']);
                    $tanggalInsert = $explodeTanggal[2];
                    $valueBefore = OutboxFirstModel::select('nomor_surat')
                                    ->where('kode_jenis','14')
                                    ->orderBy('nomor_urut', 'desc')
                                    ->limit('1')
                                    ->get();
                    if(count($valueBefore)>0){
                        $a = explode('/',$valueBefore[0]['nomor_surat']);
                        $b = explode('-',$a[0]);
                        $c = (int)$b[1] + 1;
                        if(strlen($c)<2){
                            $c = sprintf('%02d',$c);
                        }
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'ST-'.$c.'/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'ST-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>(int)$b[1] + 1,
                            'nomor_surat'=>$nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'14'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }else{
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'ST-01/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'ST-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>'1',
                            'nomor_surat'=> $nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'14'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }
                    $response = array(
                        'message'=>'Surat Keluar Berhasil Di Tambahkan dengan Nomor <br>'.$nomor_surat,
                        'status'=>'info'
                    );
                    return response()->json($response);
                    break;
                case '15':
                    $message = array(
                        'tanggal_berita_fax.required'=>'Tanggal Berita Harus Di Isi',
                        'tujuan.required'=>'Tujuan Harus Di Isi',
                        'jumlah_hal.required'=>'Jumlah Hal Harus Di Isi',
                        'tanggal_kirim.required'=>'Tanggal Kirim Harus Di Isi',
                        'hal.required'=>'Hal Harus Di Isi',
                        'nama_petugas.required'=>'Nama Petugas Harus Di Isi',
                        'nip.required'=>'NIP Harus Di Isi',
                        'jabatan_petugas.required'=>'Jabatan Petugas Harus Di Isi',
                        'penandatangan.required'=>'Penanda Tangan Harus Di Isi',
                        'nama_kasi.required'=>'Nama Kasi Harus Di Isi',
                        'nip_kasi.required'=>'NIP Kasi Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_berita_fax'=>['required'],
                        'tujuan'=>['required'],
                        'jumlah_hal'=>['required'],
                        'tanggal_kirim'=>['required'],
                        'hal'=>['required'],
                        'nama_petugas'=>['required'],
                        'nip'=>['required'],
                        'jabatan_petugas'=>['required'],
                        'penandatangan'=>['required'],
                        'nama_kasi'=>['required'],
                        'nip_kasi'=>['required']
                    ],$message)->validate();
                    $valueBefore = OutboxFaxModel::orderBy('nomor_fax', 'desc')
                                    ->limit('1')
                                    ->get();
                    if(count($valueBefore)>0){
                        $nomor_fax = $valueBefore[0]['nomor_fax'] + 1;
                    }else{
                        $nomor_fax = 1;
                    }
                    $arrayInsert = array(
                        'nomor_fax'=>$nomor_fax,
                        'tanggal_berita_fax'=>Carbon::parse($data['tanggal_berita_fax'])->format('Y-m-d'),
                        'tujuan'=>$data['tujuan'],
                        'jumlah_hal'=>$data['jumlah_hal'],
                        'tanggal_kirim'=>Carbon::parse($data['tanggal_kirim'])->format('Y-m-d'),
                        'hal'=>$data['hal'],
                        'tembusan'=>$data['tembusan'],
                        'nama_petugas'=>$data['nama_petugas'],
                        'nip'=>$data['nip'],
                        'jabatan_petugas'=>$data['jabatan_petugas'],
                        'penandatangan'=>$data['penandatangan'],
                        'nama_kasi'=>$data['nama_kasi'],
                        'nip_kasi'=>$data['nip_kasi']
                    );
                    OutboxFaxModel::create($arrayInsert);
                    $response = array(
                        'message'=>'Data Surat Keluar Fax Berhasil Di Tambahkan',
                        'status'=>'info'
                    );
                    return response()->json($response);
                    break;
                case '16':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required']
                    ],$message)->validate();
                    $explodeTanggal = explode('/',$data['tanggal_surat']);
                    $tanggalInsert = $explodeTanggal[2];
                    $valueBefore = OutboxFirstModel::select('nomor_surat')
                                    ->where('kode_jenis','15')
                                    ->orderBy('nomor_urut', 'desc')
                                    ->limit('1')
                                    ->get();
                    if(count($valueBefore)>0){
                        $a = explode('/',$valueBefore[0]['nomor_surat']);
                        $b = explode('-',$a[0]);
                        $c = (int)$b[1] + 1;
                        if(strlen($c)<2){
                            $c = sprintf('%02d',$c);
                        }
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'LHPPU-'.$c.'/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'LHPPU-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>(int)$b[1] + 1,
                            'nomor_surat'=>$nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'15'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }else{
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'LHPPU-01/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'LHPPU-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>'1',
                            'nomor_surat'=> $nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'15'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }
                    $response = array(
                        'message'=>'Surat Keluar Berhasil Di Tambahkan dengan Nomor <br>'.$nomor_surat,
                        'status'=>'info'
                    );
                    return response()->json($response);
                    break;
                case '17':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required']
                    ],$message)->validate();
                    $explodeTanggal = explode('/',$data['tanggal_surat']);
                    $tanggalInsert = $explodeTanggal[2];
                    $valueBefore = OutboxFirstModel::select('nomor_surat')
                                    ->where('kode_jenis','16')
                                    ->orderBy('nomor_urut', 'desc')
                                    ->limit('1')
                                    ->get();
                    if(count($valueBefore)>0){
                        $a = explode('/',$valueBefore[0]['nomor_surat']);
                        $b = explode('-',$a[0]);
                        $c = (int)$b[1] + 1;
                        if(strlen($c)<2){
                            $c = sprintf('%02d',$c);
                        }
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'LAP-'.$c.'/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'LAP-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>(int)$b[1] + 1,
                            'nomor_surat'=>$nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'16'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }else{
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'LAP-01/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'LAP-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>'1',
                            'nomor_surat'=> $nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'16'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }
                    $response = array(
                        'message'=>'Surat Keluar Berhasil Di Tambahkan dengan Nomor <br>'.$nomor_surat,
                        'status'=>'info'
                    );
                    return response()->json($response);
                    break;
                case '18':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required']
                    ],$message)->validate();
                    $explodeTanggal = explode('/',$data['tanggal_surat']);
                    $tanggalInsert = $explodeTanggal[2];
                    $valueBefore = OutboxFirstModel::select('nomor_surat')
                                    ->where('kode_jenis','17')
                                    ->orderBy('nomor_urut', 'desc')
                                    ->limit('1')
                                    ->get();
                    if(count($valueBefore)>0){
                        $a = explode('/',$valueBefore[0]['nomor_surat']);
                        $b = explode('-',$a[0]);
                        $c = (int)$b[1] + 1;
                        if(strlen($c)<2){
                            $c = sprintf('%02d',$c);
                        }
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'LAT-'.$c.'/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'LAT-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>(int)$b[1] + 1,
                            'nomor_surat'=>$nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'17'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }else{
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'LAT-01/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'LAT-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>'1',
                            'nomor_surat'=> $nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'17'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }
                    $response = array(
                        'message'=>'Surat Keluar Berhasil Di Tambahkan dengan Nomor <br>'.$nomor_surat,
                        'status'=>'info'
                    );
                    return response()->json($response);
                    break;
                case '19':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required']
                    ],$message)->validate();
                    $explodeTanggal = explode('/',$data['tanggal_surat']);
                    $tanggalInsert = $explodeTanggal[2];
                    $valueBefore = OutboxFirstModel::select('nomor_surat')
                                    ->where('kode_jenis','18')
                                    ->orderBy('nomor_urut', 'desc')
                                    ->limit('1')
                                    ->get();
                    if(count($valueBefore)>0){
                        $a = explode('/',$valueBefore[0]['nomor_surat']);
                        $b = explode('-',$a[0]);
                        $c = (int)$b[1] + 1;
                        if(strlen($c)<2){
                            $c = sprintf('%02d',$c);
                        }
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'BA-'.$c.'/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'BA-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>(int)$b[1] + 1,
                            'nomor_surat'=>$nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'18'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }else{
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'BA-01/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'BA-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>'1',
                            'nomor_surat'=> $nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'18'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }
                    $response = array(
                        'message'=>'Surat Keluar Berhasil Di Tambahkan dengan Nomor <br>'.$nomor_surat,
                        'status'=>'info'
                    );
                    return response()->json($response);
                    break;
                case '20':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'nama_wp.required'=>'Nama WP Harus Di Isi',
                        'npwp.required'=>'NPWP Harus Di Isi',
                        'tahun_pajak.required'=>'Tahun Pajak Harus Di Isi',
                        'analis.required'=>'Analis Harus Di Isi',
                        'jenis_surat.required'=>'Jenis Surat Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'nama_wp'=>['required'],
                        'npwp'=>['required'],
                        'tahun_pajak'=>['required'],
                        'analis'=>['required'],
                        'jenis_surat'=>['required']
                    ],$message)->validate();
                    $explodeTanggal = explode('/',$data['tanggal_surat']);
                    $tanggalInsert = $explodeTanggal[2];
                    $valueBefore = OutboxSecondModel::select('nomor_surat')
                                    ->where('kode_jenis','1')
                                    ->orderBy('nomor_urut', 'desc')
                                    ->limit('1')
                                    ->get();
                    if(count($valueBefore)>0){
                        $a = explode('/',$valueBefore[0]['nomor_surat']);
                        $b = explode('-',$a[0]);
                        $c = (int)$b[1] + 1;
                        if(strlen($c)<2){
                            $c = sprintf('%02d',$c);
                        }
                        $nomor_surat = 'LII-'.$c.'/WPJ.14/BD.0403/'.$tanggalInsert;
                        $arrayInsert = array(
                            'nomor_urut'=>(int)$b[1] + 1,
                            'nomor_surat'=>$nomor_surat,
                            'tanggal'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'nama_wp'=>$data['nama_wp'],
                            'npwp'=>$data['npwp'],
                            'tahun_pajak'=>$data['tahun_pajak'],
                            'analis'=>$data['analis'],
                            'kode_jenis'=>'1',
                            'tindak_lanjut'=>null,
                            'kesimpulan'=>null,
                            'perihal_surat'=>null,
                        );
                        OutboxSecondModel::create($arrayInsert);
                    }else{
                        $nomor_surat = 'LII-01/WPJ.14/BD.0403/'.$tanggalInsert;
                        $arrayInsert = array(
                            'nomor_urut'=>'1',
                            'nomor_surat'=>$nomor_surat,
                            'tanggal'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'nama_wp'=>$data['nama_wp'],
                            'npwp'=>$data['npwp'],
                            'tahun_pajak'=>$data['tahun_pajak'],
                            'analis'=>$data['analis'],
                            'kode_jenis'=>'1',
                            'tindak_lanjut'=>null,
                            'kesimpulan'=>null,
                            'perihal_surat'=>null,
                        );
                        OutboxSecondModel::create($arrayInsert);
                    }
                    $response = array(
                        'message'=>'Surat Keluar Berhasil Di Tambahkan dengan Nomor <br>'.$nomor_surat,
                        'status'=>'info'
                    );
                    return response()->json($response);
                    break;
                case '21':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'nama_wp.required'=>'Nama WP Harus Di Isi',
                        'npwp.required'=>'NPWP Harus Di Isi',
                        'tahun_pajak.required'=>'Tahun Pajak Harus Di Isi',
                        'analis.required'=>'Analis Harus Di Isi',
                        'jenis_surat.required'=>'Jenis Surat Harus Di Isi',
                        'tindak_lanjut.required'=>'Tindak Lanjut Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'nama_wp'=>['required'],
                        'npwp'=>['required'],
                        'tahun_pajak'=>['required'],
                        'analis'=>['required'],
                        'jenis_surat'=>['required'],
                        'tindak_lanjut'=>['required']
                    ],$message)->validate();
                    $explodeTanggal = explode('/',$data['tanggal_surat']);
                    $tanggalInsert = $explodeTanggal[2];
                    $valueBefore = OutboxSecondModel::select('nomor_surat')
                                    ->where('kode_jenis','2')
                                    ->orderBy('nomor_urut', 'desc')
                                    ->limit('1')
                                    ->get();
                    if(count($valueBefore)>0){
                        $a = explode('/',$valueBefore[0]['nomor_surat']);
                        $b = explode('-',$a[0]);
                        $c = (int)$b[1] + 1;
                        if(strlen($c)<2){
                            $c = sprintf('%02d',$c);
                        }
                        $nomor_surat = 'LAPJU.IDLP-'.$c.'/WPJ.14/BD.0403/'.$tanggalInsert;
                        $arrayInsert = array(
                            'nomor_urut'=>(int)$b[1] + 1,
                            'nomor_surat'=>$nomor_surat,
                            'tanggal'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'nama_wp'=>$data['nama_wp'],
                            'npwp'=>$data['npwp'],
                            'tahun_pajak'=>$data['tahun_pajak'],
                            'analis'=>$data['analis'],
                            'kode_jenis'=>'2',
                            'tindak_lanjut'=>$data['tindak_lanjut'],
                            'kesimpulan'=>null,
                            'perihal_surat'=>null,
                        );
                        OutboxSecondModel::create($arrayInsert);
                    }else{
                        $nomor_surat = 'LAPJU.IDLP-01/WPJ.14/BD.0403/'.$tanggalInsert;
                        $arrayInsert = array(
                            'nomor_urut'=>'1',
                            'nomor_surat'=>$nomor_surat,
                            'tanggal'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'nama_wp'=>$data['nama_wp'],
                            'npwp'=>$data['npwp'],
                            'tahun_pajak'=>$data['tahun_pajak'],
                            'analis'=>$data['analis'],
                            'kode_jenis'=>'2',
                            'tindak_lanjut'=>$data['tindak_lanjut'],
                            'kesimpulan'=>null,
                            'perihal_surat'=>null,
                        );
                        OutboxSecondModel::create($arrayInsert);
                    }
                    $response = array(
                        'message'=>'Surat Keluar Berhasil Di Tambahkan dengan Nomor <br>'.$nomor_surat,
                        'status'=>'info'
                    );
                    return response()->json($response);
                    break;
                case '22':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'nama_wp.required'=>'Nama WP Harus Di Isi',
                        'npwp.required'=>'NPWP Harus Di Isi',
                        'tahun_pajak.required'=>'Tahun Pajak Harus Di Isi',
                        'jenis_surat.required'=>'Jenis Surat Harus Di Isi',
                        'tindak_lanjut.required'=>'Tindak Lanjut Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'nama_wp'=>['required'],
                        'npwp'=>['required'],
                        'tahun_pajak'=>['required'],
                        'jenis_surat'=>['required'],
                        'tindak_lanjut'=>['required']
                    ],$message)->validate();
                    $explodeTanggal = explode('/',$data['tanggal_surat']);
                    $tanggalInsert = $explodeTanggal[2];
                    $valueBefore = OutboxSecondModel::select('nomor_surat')
                                    ->where('kode_jenis','3')
                                    ->orderBy('nomor_urut', 'desc')
                                    ->limit('1')
                                    ->get();
                    if(count($valueBefore)>0){
                        $a = explode('/',$valueBefore[0]['nomor_surat']);
                        $b = explode('-',$a[0]);
                        $c = (int)$b[1] + 1;
                        if(strlen($c)<2){
                            $c = sprintf('%02d',$c);
                        }
                        $nomor_surat = 'LHPA.IDLP-'.$c.'/WPJ.14/BD.0403/'.$tanggalInsert;
                        $arrayInsert = array(
                            'nomor_urut'=>(int)$b[1] + 1,
                            'nomor_surat'=>$nomor_surat,
                            'tanggal'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'nama_wp'=>$data['nama_wp'],
                            'npwp'=>$data['npwp'],
                            'tahun_pajak'=>$data['tahun_pajak'],
                            'analis'=>null,
                            'jenis_surat'=>strtoupper($data['jenis_surat']),
                            'kode_jenis'=>'3',
                            'tindak_lanjut'=>$data['tindak_lanjut'],
                            'kesimpulan'=>null,
                            'perihal_surat'=>null,
                        );
                        OutboxSecondModel::create($arrayInsert);
                    }else{
                        $nomor_surat = 'LHPA.IDLP-01/WPJ.14/BD.0403/'.$tanggalInsert;
                        $arrayInsert = array(
                            'nomor_urut'=>'1',
                            'nomor_surat'=>$nomor_surat,
                            'tanggal'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'nama_wp'=>$data['nama_wp'],
                            'npwp'=>$data['npwp'],
                            'tahun_pajak'=>$data['tahun_pajak'],
                            'analis'=>null,
                            'jenis_surat'=>strtoupper($data['jenis_surat']),
                            'kode_jenis'=>'3',
                            'tindak_lanjut'=>$data['tindak_lanjut'],
                            'kesimpulan'=>null,
                            'perihal_surat'=>null,
                        );
                        OutboxSecondModel::create($arrayInsert);
                    }
                    $response = array(
                        'message'=>'Surat Keluar Berhasil Di Tambahkan dengan Nomor <br>'.$nomor_surat,
                        'status'=>'info'
                    );
                    return response()->json($response);
                    break;
                case '23':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'nama_wp.required'=>'Nama WP Harus Di Isi',
                        'npwp.required'=>'NPWP Harus Di Isi',
                        'tahun_pajak.required'=>'Tahun Pajak Harus Di Isi',
                        'analis.required'=>'Analis Harus Di Isi',
                        'jenis_surat.required'=>'Jenis Surat Harus Di Isi',
                        'tindak_lanjut.required'=>'Tindak Lanjut Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'nama_wp'=>['required'],
                        'npwp'=>['required'],
                        'tahun_pajak'=>['required'],
                        'analis'=>['required'],
                        'jenis_surat'=>['required'],
                        'tindak_lanjut'=>['required']
                    ],$message)->validate();
                    $explodeTanggal = explode('/',$data['tanggal_surat']);
                    $tanggalInsert = $explodeTanggal[2];
                    $valueBefore = OutboxSecondModel::select('nomor_surat')
                                    ->where('kode_jenis','4')
                                    ->orderBy('nomor_urut', 'desc')
                                    ->limit('1')
                                    ->get();
                    if(count($valueBefore)>0){
                        $a = explode('/',$valueBefore[0]['nomor_surat']);
                        $b = explode('-',$a[0]);
                        $c = (int)$b[1] + 1;
                        if(strlen($c)<2){
                            $c = sprintf('%02d',$c);
                        }
                        $nomor_surat = 'LIA.IDLP-'.$c.'/WPJ.14/BD.0403/'.$tanggalInsert;
                        $arrayInsert = array(
                            'nomor_urut'=>(int)$b[1] + 1,
                            'nomor_surat'=>$nomor_surat,
                            'tanggal'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'nama_wp'=>$data['nama_wp'],
                            'npwp'=>$data['npwp'],
                            'tahun_pajak'=>$data['tahun_pajak'],
                            'analis'=>$data['analis'],
                            'kode_jenis'=>'4',
                            'tindak_lanjut'=>$data['tindak_lanjut'],
                            'kesimpulan'=>null,
                            'perihal_surat'=>null,
                        );
                        OutboxSecondModel::create($arrayInsert);
                    }else{
                        $nomor_surat = 'LIA.IDLP-01/WPJ.14/BD.0403/'.$tanggalInsert;
                        $arrayInsert = array(
                            'nomor_urut'=>'1',
                            'nomor_surat'=>$nomor_surat,
                            'tanggal'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'nama_wp'=>$data['nama_wp'],
                            'npwp'=>$data['npwp'],
                            'tahun_pajak'=>$data['tahun_pajak'],
                            'analis'=>$data['analis'],
                            'kode_jenis'=>'4',
                            'tindak_lanjut'=>$data['tindak_lanjut'],
                            'kesimpulan'=>null,
                            'perihal_surat'=>null,
                        );
                        OutboxSecondModel::create($arrayInsert);
                    }
                    $response = array(
                        'message'=>'Surat Keluar Berhasil Di Tambahkan dengan Nomor <br>'.$nomor_surat,
                        'status'=>'info'
                    );
                    return response()->json($response);
                    break;
                case '24':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'perihal_surat.required'=>'Perihal Harus Di Isi',
                        'tahun_pajak.required'=>'Tahun Pajak Harus Di Isi',
                        'kesimpulan.required'=>'Kesimpulan Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'perihal_surat'=>['required'],
                        'tahun_pajak'=>['required'],
                        'kesimpulan'=>['required']
                    ],$message)->validate();
                    $explodeTanggal = explode('/',$data['tanggal_surat']);
                    $tanggalInsert = $explodeTanggal[2];
                    $valueBefore = OutboxSecondModel::select('nomor_surat')
                                    ->where('kode_jenis','6')
                                    ->orderBy('nomor_urut', 'desc')
                                    ->limit('1')
                                    ->get();
                    if(count($valueBefore)>0){
                        $a = explode('/',$valueBefore[0]['nomor_surat']);
                        $b = explode('-',$a[0]);
                        $c = (int)$b[1] + 1;
                        if(strlen($c)<2){
                            $c = sprintf('%02d',$c);
                        }
                        $nomor_surat = 'BA.PEN.IDLP-'.$c.'/WPJ.14/BD.0403/'.$tanggalInsert;
                        $arrayInsert = array(
                            'nomor_urut'=>(int)$b[1] + 1,
                            'nomor_surat'=>$nomor_surat,
                            'tanggal'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'nama_wp'=>null,
                            'npwp'=>null,
                            'tahun_pajak'=>$data['tahun_pajak'],
                            'analis'=>null,
                            'kode_jenis'=>'6',
                            'tindak_lanjut'=>null,
                            'kesimpulan'=>$data['kesimpulan'],
                            'perihal_surat'=>$data['perihal_surat']
                        );
                        OutboxSecondModel::create($arrayInsert);
                    }else{
                        $nomor_surat = 'BA.PEN.IDLP-01/WPJ.14/BD.0403/'.$tanggalInsert;
                        $arrayInsert = array(
                            'nomor_urut'=>'1',
                            'nomor_surat'=>$nomor_surat,
                            'tanggal'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'nama_wp'=>null,
                            'npwp'=>null,
                            'tahun_pajak'=>$data['tahun_pajak'],
                            'analis'=>null,
                            'kode_jenis'=>'6',
                            'tindak_lanjut'=>null,
                            'kesimpulan'=>$data['kesimpulan'],
                            'perihal_surat'=>$data['perihal_surat']
                        );
                        OutboxSecondModel::create($arrayInsert);
                    }
                    $response = array(
                        'message'=>'Surat Keluar Berhasil Di Tambahkan dengan Nomor <br>'.$nomor_surat,
                        'status'=>'info'
                    );
                    return response()->json($response);
                    break;
                case '25':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan Harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required']
                    ],$message)->validate();
                    $explodeTanggal = explode('/',$data['tanggal_surat']);
                    $tanggalInsert = $explodeTanggal[2];
                    $valueBefore = OutboxFirstModel::select('nomor_surat')
                                    ->where('kode_jenis','19')
                                    ->orderBy('nomor_urut', 'desc')
                                    ->limit('1')
                                    ->get();
                    if(count($valueBefore)>0){
                        $a = explode('/',$valueBefore[0]['nomor_surat']);
                        $b = explode('-',$a[0]);
                        $c = (int)$b[1] + 1;
                        if(strlen($c)<2){
                            $c = sprintf('%02d',$c);
                        }
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'BA.PEN-'.$c.'/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'BA.PEN-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>(int)$b[1] + 1,
                            'nomor_surat'=>$nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'19'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }else{
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'BA.PEN-01/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'BA.PEN-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>'1',
                            'nomor_surat'=> $nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'19'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }
                    $response = array(
                        'message'=>'Surat Keluar Berhasil Di Tambahkan dengan Nomor <br>'.$nomor_surat,
                        'status'=>'info'
                    );
                    return response()->json($response);
                    break;
                case '26':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan Harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required']
                    ],$message)->validate();
                    $explodeTanggal = explode('/',$data['tanggal_surat']);
                    $tanggalInsert = $explodeTanggal[2];
                    $valueBefore = OutboxFirstModel::select('nomor_surat')
                                    ->where('kode_jenis','20')
                                    ->orderBy('nomor_urut', 'desc')
                                    ->limit('1')
                                    ->get();
                    if(count($valueBefore)>0){
                        $a = explode('/',$valueBefore[0]['nomor_surat']);
                        $b = explode('-',$a[0]);
                        $c = (int)$b[1] + 1;
                        if(strlen($c)<2){
                            $c = sprintf('%02d',$c);
                        }
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'PRIN.BP-'.$c.'/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'PRIN.BP-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>(int)$b[1] + 1,
                            'nomor_surat'=>$nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'20'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }else{
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'PRIN.BP-01/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'PRIN.BP-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>'1',
                            'nomor_surat'=> $nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'20'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }
                    $response = array(
                        'message'=>'Surat Keluar Berhasil Di Tambahkan dengan Nomor <br>'.$nomor_surat,
                        'status'=>'info'
                    );
                    return response()->json($response);
                    break;
                case '27':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan Harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required']
                    ],$message)->validate();
                    $explodeTanggal = explode('/',$data['tanggal_surat']);
                    $tanggalInsert = $explodeTanggal[2];
                    $valueBefore = OutboxFirstModel::select('nomor_surat')
                                    ->where('kode_jenis','21')
                                    ->orderBy('nomor_urut', 'desc')
                                    ->limit('1')
                                    ->get();
                    if(count($valueBefore)>0){
                        $a = explode('/',$valueBefore[0]['nomor_surat']);
                        $b = explode('-',$a[0]);
                        $c = (int)$b[1] + 1;
                        if(strlen($c)<2){
                            $c = sprintf('%02d',$c);
                        }
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'SPPBP.P-'.$c.'/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'SPPBP.P-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>(int)$b[1] + 1,
                            'nomor_surat'=>$nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'21'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }else{
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'SPPBP.P-01/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'SPPBP.P-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>'1',
                            'nomor_surat'=> $nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'21'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }
                    $response = array(
                        'message'=>'Surat Keluar Berhasil Di Tambahkan dengan Nomor <br>'.$nomor_surat,
                        'status'=>'info'
                    );
                    return response()->json($response);
                    break;
                case '28':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan Harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required']
                    ],$message)->validate();
                    $explodeTanggal = explode('/',$data['tanggal_surat']);
                    $tanggalInsert = $explodeTanggal[2];
                    $valueBefore = OutboxFirstModel::select('nomor_surat')
                                    ->where('kode_jenis','22')
                                    ->orderBy('nomor_urut', 'desc')
                                    ->limit('1')
                                    ->get();
                    if(count($valueBefore)>0){
                        $a = explode('/',$valueBefore[0]['nomor_surat']);
                        $b = explode('-',$a[0]);
                        $c = (int)$b[1] + 1;
                        if(strlen($c)<2){
                            $c = sprintf('%02d',$c);
                        }
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'SPEMB.BP-'.$c.'/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'SPEMB.BP-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>(int)$b[1] + 1,
                            'nomor_surat'=>$nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'22'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }else{
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'SPEMB.BP-01/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'SPEMB.BP-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>'1',
                            'nomor_surat'=> $nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'22'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }
                    $response = array(
                        'message'=>'Surat Keluar Berhasil Di Tambahkan dengan Nomor <br>'.$nomor_surat,
                        'status'=>'info'
                    );
                    return response()->json($response);
                    break;
                case '29':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan Harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required']
                    ],$message)->validate();
                    $explodeTanggal = explode('/',$data['tanggal_surat']);
                    $tanggalInsert = $explodeTanggal[2];
                    $valueBefore = OutboxFirstModel::select('nomor_surat')
                                    ->where('kode_jenis','23')
                                    ->orderBy('nomor_urut', 'desc')
                                    ->limit('1')
                                    ->get();
                    if(count($valueBefore)>0){
                        $a = explode('/',$valueBefore[0]['nomor_surat']);
                        $b = explode('-',$a[0]);
                        $c = (int)$b[1] + 1;
                        if(strlen($c)<2){
                            $c = sprintf('%02d',$c);
                        }
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'PEMB.BP-'.$c.'/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'PEMB.BP-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>(int)$b[1] + 1,
                            'nomor_surat'=>$nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'23'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }else{
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'PEMB.BP-01/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'PEMB.BP-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>'1',
                            'nomor_surat'=> $nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'23'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }
                    $response = array(
                        'message'=>'Surat Keluar Berhasil Di Tambahkan dengan Nomor <br>'.$nomor_surat,
                        'status'=>'info'
                    );
                    return response()->json($response);
                    break;
                case '30':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat harus Di Isi',
                        'nama_wp.required'=>'Nama WP Harus Di Isi',
                        'NPWP.required'=>'NPWP Harus Di Isi',
                        'tahun_pajak.required'=>'Tahun Pajak Harus Di Isi',
                        'analis.required'=>'Analis Harus Di Isi',
                        'jenis_surat.required'=>'Jenis Surat Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'nama_wp'=>['required'],
                        'npwp'=>['required'],
                        'tahun_pajak'=>['required'],
                        'analis'=>['required'],
                        'jenis_surat'=>['required']
                    ],$message)->validate();
                    $explodeTanggal = explode('/',$data['tanggal_surat']);
                    $tanggalInsert = $explodeTanggal[2];
                    $valueBefore = OutboxSecondModel::select('nomor_surat')
                                    ->where('kode_jenis','5')
                                    ->orderBy('nomor_urut', 'desc')
                                    ->limit('1')
                                    ->get();
                    if(count($valueBefore)>0){
                        $a = explode('/',$valueBefore[0]['nomor_surat']);
                        $b = explode('-',$a[0]);
                        $c = (int)$b[1] + 1;
                        if(strlen($c)<2){
                            $c = sprintf('%02d',$c);
                        }
                        $nomor_surat = 'LAPJU.Penyidikan-'.$c.'/WPJ.14/BD.0403/'.$tanggalInsert;
                        $arrayInsert = array(
                            'nomor_urut'=>(int)$b[1] + 1,
                            'nomor_surat'=>$nomor_surat,
                            'tanggal'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'nama_wp'=>$data['nama_wp'],
                            'npwp'=>$data['npwp'],
                            'tahun_pajak'=>$data['tahun_pajak'],
                            'analis'=>$data['analis'],
                            'kode_jenis'=>'5',
                            'tindak_lanjut'=>null,
                            'kesimpulan'=>null,
                            'perihal_surat'=>null,
                        );
                        OutboxSecondModel::create($arrayInsert);
                    }else{
                        $nomor_surat = 'LAPJU.Penyidikan-01/WPJ.14/BD.0403/'.$tanggalInsert;
                        $arrayInsert = array(
                            'nomor_urut'=>'1',
                            'nomor_surat'=>$nomor_surat,
                            'tanggal'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'nama_wp'=>$data['nama_wp'],
                            'npwp'=>$data['npwp'],
                            'tahun_pajak'=>$data['tahun_pajak'],
                            'analis'=>$data['analis'],
                            'kode_jenis'=>'5',
                            'tindak_lanjut'=>null,
                            'kesimpulan'=>null,
                            'perihal_surat'=>null,
                        );
                        OutboxSecondModel::create($arrayInsert);
                    }
                    $response = array(
                        'message'=>'Surat Keluar Berhasil Di Tambahkan dengan Nomor <br>'.$nomor_surat,
                        'status'=>'info'
                    );
                    return response()->json($response);
                    break;
                case '31':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan Harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required']
                    ],$message)->validate();
                    $explodeTanggal = explode('/',$data['tanggal_surat']);
                    $tanggalInsert = $explodeTanggal[2];
                    $valueBefore = OutboxFirstModel::select('nomor_surat')
                                    ->where('kode_jenis','24')
                                    ->orderBy('nomor_urut', 'desc')
                                    ->limit('1')
                                    ->get();
                    if(count($valueBefore)>0){
                        $a = explode('/',$valueBefore[0]['nomor_surat']);
                        $b = explode('-',$a[0]);
                        $c = (int)$b[1] + 1;
                        if(strlen($c)<2){
                            $c = sprintf('%02d',$c);
                        }
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'LK.DIK-'.$c.'/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'LK.DIK-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>(int)$b[1] + 1,
                            'nomor_surat'=>$nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'24'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }else{
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'LK.DIK-01/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'LK.DIK-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>'1',
                            'nomor_surat'=> $nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'24'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }
                    $response = array(
                        'message'=>'Surat Keluar Berhasil Di Tambahkan dengan Nomor <br>'.$nomor_surat,
                        'status'=>'info'
                    );
                    return response()->json($response);
                    break;
                case '32':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan Harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required']
                    ],$message)->validate();
                    $explodeTanggal = explode('/',$data['tanggal_surat']);
                    $tanggalInsert = $explodeTanggal[2];
                    $valueBefore = OutboxFirstModel::select('nomor_surat')
                                    ->where('kode_jenis','25')
                                    ->orderBy('nomor_urut', 'desc')
                                    ->limit('1')
                                    ->get();
                    if(count($valueBefore)>0){
                        $a = explode('/',$valueBefore[0]['nomor_surat']);
                        $b = explode('-',$a[0]);
                        $c = (int)$b[1] + 1;
                        if(strlen($c)<2){
                            $c = sprintf('%02d',$c);
                        }
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'PRIN.DIK-'.$c.'/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'PRIN.DIK-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>(int)$b[1] + 1,
                            'nomor_surat'=>$nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'25'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }else{
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'PRIN.DIK-01/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'PRIN.DIK-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>'1',
                            'nomor_surat'=> $nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'25'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }
                    $response = array(
                        'message'=>'Surat Keluar Berhasil Di Tambahkan dengan Nomor <br>'.$nomor_surat,
                        'status'=>'info'
                    );
                    return response()->json($response);
                    break;
                case '33':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan Harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required']
                    ],$message)->validate();
                    $explodeTanggal = explode('/',$data['tanggal_surat']);
                    $tanggalInsert = $explodeTanggal[2];
                    $valueBefore = OutboxFirstModel::select('nomor_surat')
                                    ->where('kode_jenis','26')
                                    ->orderBy('nomor_urut', 'desc')
                                    ->limit('1')
                                    ->get();
                    if(count($valueBefore)>0){
                        $a = explode('/',$valueBefore[0]['nomor_surat']);
                        $b = explode('-',$a[0]);
                        $c = (int)$b[1] + 1;
                        if(strlen($c)<2){
                            $c = sprintf('%02d',$c);
                        }
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'LHPS-'.$c.'/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'LHPS-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>(int)$b[1] + 1,
                            'nomor_surat'=>$nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'26'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }else{
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'LHPS-01/WPJ.14/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'LHPS-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>'1',
                            'nomor_surat'=> $nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'26'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }
                    $response = array(
                        'message'=>'Surat Keluar Berhasil Di Tambahkan dengan Nomor <br>'.$nomor_surat,
                        'status'=>'info'
                    );
                    return response()->json($response);
                    break;
                case '34':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan Harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required']
                    ],$message)->validate();
                    $explodeTanggal = explode('/',$data['tanggal_surat']);
                    $tanggalInsert = $explodeTanggal[2];
                    $valueBefore = OutboxFirstModel::select('nomor_surat')
                                    ->where('kode_jenis','27')
                                    ->orderBy('nomor_urut', 'desc')
                                    ->limit('1')
                                    ->get();
                    if(count($valueBefore)>0){
                        $a = explode('/',$valueBefore[0]['nomor_surat']);
                        $b = explode('-',$a[0]);
                        $c = (int)$b[1] + 1;
                        if(strlen($c)<2){
                            $c = sprintf('%02d',$c);
                        }
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'PANG.BP-'.$c.'/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'PANG.BP-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>(int)$b[1] + 1,
                            'nomor_surat'=>$nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'27'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }else{
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'PANG.BP-01/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'PANG.BP-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>'1',
                            'nomor_surat'=> $nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'27'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }
                    $response = array(
                        'message'=>'Surat Keluar Berhasil Di Tambahkan dengan Nomor <br>'.$nomor_surat,
                        'status'=>'info'
                    );
                    return response()->json($response);
                    break;
                case '35':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan Harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required']
                    ],$message)->validate();
                    $explodeTanggal = explode('/',$data['tanggal_surat']);
                    $tanggalInsert = $explodeTanggal[2];
                    $valueBefore = OutboxFirstModel::select('nomor_surat')
                                    ->where('kode_jenis','28')
                                    ->orderBy('nomor_urut', 'desc')
                                    ->limit('1')
                                    ->get();
                    if(count($valueBefore)>0){
                        $a = explode('/',$valueBefore[0]['nomor_surat']);
                        $b = explode('-',$a[0]);
                        $c = (int)$b[1] + 1;
                        if(strlen($c)<2){
                            $c = sprintf('%02d',$c);
                        }
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'LPBP-'.$c.'/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'LPBP-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>(int)$b[1] + 1,
                            'nomor_surat'=>$nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'28'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }else{
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'LPBP-01/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'LPBP-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>'1',
                            'nomor_surat'=> $nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'28'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }
                    $response = array(
                        'message'=>'Surat Keluar Berhasil Di Tambahkan dengan Nomor <br>'.$nomor_surat,
                        'status'=>'info'
                    );
                    return response()->json($response);
                    break;
                case '36':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan Harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required']
                    ],$message)->validate();
                    $explodeTanggal = explode('/',$data['tanggal_surat']);
                    $tanggalInsert = $explodeTanggal[2];
                    $valueBefore = OutboxFirstModel::select('nomor_surat')
                                    ->where('kode_jenis','29')
                                    ->orderBy('nomor_urut', 'desc')
                                    ->limit('1')
                                    ->get();
                    if(count($valueBefore)>0){
                        $a = explode('/',$valueBefore[0]['nomor_surat']);
                        $b = explode('-',$a[0]);
                        $c = (int)$b[1] + 1;
                        if(strlen($c)<2){
                            $c = sprintf('%02d',$c);
                        }
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'DUPAK-'.$c.'/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'DUPAK-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>(int)$b[1] + 1,
                            'nomor_surat'=>$nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'29'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }else{
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'DUPAK-01/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'DUPAK-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>'1',
                            'nomor_surat'=> $nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'29'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }
                    $response = array(
                        'message'=>'Surat Keluar Berhasil Di Tambahkan dengan Nomor <br>'.$nomor_surat,
                        'status'=>'info'
                    );
                    return response()->json($response);
                    break;
                case '37':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan Harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required']
                    ],$message)->validate();
                    $explodeTanggal = explode('/',$data['tanggal_surat']);
                    $tanggalInsert = $explodeTanggal[2];
                    $valueBefore = OutboxFirstModel::select('nomor_surat')
                                    ->where('kode_jenis',30)
                                    ->orderBy('nomor_urut','desc')
                                    ->limit('1')
                                    ->get();
                    if(count($valueBefore)>0){
                        $a = explode('/',$valueBefore[0]['nomor_surat']);
                        $b = explode('-',$a[0]);
                        $c = (int)$b[1] + 1;
                        if(strlen($c)<2){
                            $c = sprintf('%02d',$c);
                        }
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'KEPKakanwil-'.$c.'/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'KEPKakanwil-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>(int)$b[1] + 1,
                            'nomor_surat'=> $nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>null,
                            'menjawab'=>null,
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'30'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }else{
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'KEPKakanwil-01/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'KEPKakanwil-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>'1',
                            'nomor_surat'=> $nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>null,
                            'menjawab'=>null,
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'30'
                        );
                        OutboxFirstModel::create($arrayInsert);                        
                    }
                    $response = array(
                        'message'=>'Surat Keluar Berhasil Di Tambahkan dengan Nomor <br>'.$nomor_surat,
                        'status'=>'info'
                    );
                    return response()->json($response);
                    break;
                case '38':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan Harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required']
                    ],$message)->validate();
                    $explodeTanggal = explode('/',$data['tanggal_surat']);
                    $tanggalInsert = $explodeTanggal[2];
                    $valueBefore = OutboxFirstModel::select('nomor_surat')
                                    ->where('kode_jenis','31')
                                    ->orderBy('nomor_urut', 'desc')
                                    ->limit('1')
                                    ->get();
                    if(count($valueBefore)>0){
                        $a = explode('/',$valueBefore[0]['nomor_surat']);
                        $b = explode('-',$a[0]);
                        $c = (int)$b[1] + 1;
                        if(strlen($c)<2){
                            $c = sprintf('%02d',$c);
                        }
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'PRIN.MAT-'.$c.'/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'PRIN.MAT-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>(int)$b[1] + 1,
                            'nomor_surat'=>$nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'31'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }else{
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'PRIN.MAT-01/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'PRIN.MAT-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>'1',
                            'nomor_surat'=> $nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'31'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }
                    $response = array(
                        'message'=>'Surat Keluar Berhasil Di Tambahkan dengan Nomor <br>'.$nomor_surat,
                        'status'=>'info'
                    );
                    return response()->json($response);
                    break;
                case '39':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan Harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required']
                    ],$message)->validate();
                    $explodeTanggal = explode('/',$data['tanggal_surat']);
                    $tanggalInsert = $explodeTanggal[2];
                    $valueBefore = OutboxFirstModel::select('nomor_surat')
                                    ->where('kode_jenis','32')
                                    ->orderBy('nomor_urut', 'desc')
                                    ->limit('1')
                                    ->get();
                    if(count($valueBefore)>0){
                        $a = explode('/',$valueBefore[0]['nomor_surat']);
                        $b = explode('-',$a[0]);
                        $c = (int)$b[1] + 1;
                        if(strlen($c)<2){
                            $c = sprintf('%02d',$c);
                        }
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'INS.MAT-'.$c.'/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'INS.MAT-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>(int)$b[1] + 1,
                            'nomor_surat'=>$nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'32'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }else{
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'INS.MAT-01/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'INS.MAT-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>'1',
                            'nomor_surat'=> $nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'32'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }
                    $response = array(
                        'message'=>'Surat Keluar Berhasil Di Tambahkan dengan Nomor <br>'.$nomor_surat,
                        'status'=>'info'
                    );
                    return response()->json($response);
                    break;
                case '40':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan Harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required']
                    ],$message)->validate();
                    $explodeTanggal = explode('/',$data['tanggal_surat']);
                    $tanggalInsert = $explodeTanggal[2];
                    $valueBefore = OutboxFirstModel::select('nomor_surat')
                                    ->where('kode_jenis','33')
                                    ->orderBy('nomor_urut', 'desc')
                                    ->limit('1')
                                    ->get();
                    if(count($valueBefore)>0){
                        $a = explode('/',$valueBefore[0]['nomor_surat']);
                        $b = explode('-',$a[0]);
                        $c = (int)$b[1] + 1;
                        if(strlen($c)<2){
                            $c = sprintf('%02d',$c);
                        }
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'LAP.MAT-'.$c.'/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'LAP.MAT-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>(int)$b[1] + 1,
                            'nomor_surat'=>$nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'33'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }else{
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'LAP.MAT-01/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'LAP.MAT-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>'1',
                            'nomor_surat'=> $nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'33'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }
                    $response = array(
                        'message'=>'Surat Keluar Berhasil Di Tambahkan dengan Nomor <br>'.$nomor_surat,
                        'status'=>'info'
                    );
                    return response()->json($response);
                    break;
                case '41':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan Harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required']
                    ],$message)->validate();
                    $explodeTanggal = explode('/',$data['tanggal_surat']);
                    $tanggalInsert = $explodeTanggal[2];
                    $valueBefore = OutboxFirstModel::select('nomor_surat')
                                    ->where('kode_jenis','34')
                                    ->orderBy('nomor_urut', 'desc')
                                    ->limit('1')
                                    ->get();
                    if(count($valueBefore)>0){
                        $a = explode('/',$valueBefore[0]['nomor_surat']);
                        $b = explode('-',$a[0]);
                        $c = (int)$b[1] + 1;
                        if(strlen($c)<2){
                            $c = sprintf('%02d',$c);
                        }
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'LHIP-'.$c.'/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'LHIP-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>(int)$b[1] + 1,
                            'nomor_surat'=>$nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'34'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }else{
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'LHIP-01/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'LHIP-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>'1',
                            'nomor_surat'=> $nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'34'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }
                    $response = array(
                        'message'=>'Surat Keluar Berhasil Di Tambahkan dengan Nomor <br>'.$nomor_surat,
                        'status'=>'info'
                    );
                    return response()->json($response);
                    break;
                case '42':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan Harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required']
                    ],$message)->validate();
                    $explodeTanggal = explode('/',$data['tanggal_surat']);
                    $tanggalInsert = $explodeTanggal[2];
                    $valueBefore = OutboxFirstModel::select('nomor_surat')
                                    ->where('kode_jenis','35')
                                    ->orderBy('nomor_urut', 'desc')
                                    ->limit('1')
                                    ->get();
                    if(count($valueBefore)>0){
                        $a = explode('/',$valueBefore[0]['nomor_surat']);
                        $b = explode('-',$a[0]);
                        $c = (int)$b[1] + 1;
                        if(strlen($c)<2){
                            $c = sprintf('%02d',$c);
                        }
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'LA-'.$c.'/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'LA-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>(int)$b[1] + 1,
                            'nomor_surat'=>$nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'35'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }else{
                        if($data['kode_seksi']===null){
                            $nomor_surat = 'LA-01/WPJ.14/'.$tanggalInsert;
                        }else{
                            $nomor_surat = 'LA-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
                        }
                        $arrayInsert = array(
                            'nomor_urut'=>'1',
                            'nomor_surat'=> $nomor_surat,
                            'tanggal_surat'=>Carbon::parse($data['tanggal_surat'])->format('Y-m-d'),
                            'tujuan'=>$data['tujuan'],
                            'perihal_surat'=>$data['perihal'],
                            'tembusan'=>$data['tembusan'],
                            'menjawab'=>$data['sehubungan'],
                            'kode_seksi_pembuat'=>strtoupper($data['kode_seksi']),
                            'kode_jenis'=>'35'
                        );
                        OutboxFirstModel::create($arrayInsert);
                    }
                    $response = array(
                        'message'=>'Surat Keluar Berhasil Di Tambahkan dengan Nomor <br>'.$nomor_surat,
                        'status'=>'info'
                    );
                    return response()->json($response);
                    break;
            }
        }else{
            exit("Not an Ajax Request!");
        }
    }
    public function dataOutboxDelete(Request $request){
        $data = $request->all();
        $type = $data['type'];
        $id = $data['id'];
        if($type=='1'){
            OutboxFirstModel::destroy($id);
        }else if($type=='2'){
            OutboxSecondModel::destroy($id);
        }else if($type=='3'){
            OutboxFaxModel::destroy($id);
        }
        $response = array(
            'message'=>'Data Surat Berhasil Di Hapus',
            'status'=>'info'
        );
        return response()->json($response);
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
}
