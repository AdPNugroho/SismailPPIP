<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Datatables;
use Validator;

use App\OutboxFirstModel;
use App\OutboxSecondModel;
use App\OutboxFaxModel;
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
                        'perihal.required'=>'Perihal Harus Di Isi',
                        'kode_seksi.required'=>'Kode Seksi Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required'],
                        'kode_seksi'=>['required']
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
                        $nomor_surat = 'BA.TA-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        $nomor_surat = 'BA.TA-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        'status'=>'success'
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
                        'status'=>'success'
                    );
                    return response()->json($response);
                    break;
                case '3':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi',
                        'kode_seksi.required'=>'Kode Seksi Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required'],
                        'kode_seksi'=>['required']
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
                        $nomor_surat = 'S-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        $nomor_surat = 'S-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        'status'=>'success'
                    );
                    return response()->json($response);
                    break;
                case '4':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi',
                        'kode_seksi.required'=>'Kode Seksi Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required'],
                        'kode_seksi'=>['required']
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
                        $nomor_surat = 'KET-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        $nomor_surat = 'KET-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        'status'=>'success'
                    );
                    return response()->json($response);
                    break;
                case '5':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi',
                        'kode_seksi.required'=>'Kode Seksi Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required'],
                        'kode_seksi'=>['required']
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
                        $nomor_surat = 'ND-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        $nomor_surat = 'ND-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        'status'=>'success'
                    );
                    return response()->json($response);
                    break;
                case '6':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi',
                        'kode_seksi.required'=>'Kode Seksi Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required'],
                        'kode_seksi'=>['required']
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
                        $nomor_surat = 'SPR-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        $nomor_surat = 'SPR-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        'status'=>'success'
                    );
                    return response()->json($response);
                    break;
                case '7':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi',
                        'kode_seksi.required'=>'Kode Seksi Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required'],
                        'kode_seksi'=>['required']
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
                        $nomor_surat = 'NDR-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        $nomor_surat = 'NDR-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        'status'=>'success'
                    );
                    return response()->json($response);
                    break;
                case '8':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi',
                        'kode_seksi.required'=>'Kode Seksi Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required'],
                        'kode_seksi'=>['required']
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
                        $nomor_surat = 'SP-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        $nomor_surat = 'SP-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        'status'=>'success'
                    );
                    return response()->json($response);
                    break;
                case '9':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi',
                        'kode_seksi.required'=>'Kode Seksi Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required'],
                        'kode_seksi'=>['required']
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
                        $nomor_surat = 'SR-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        $nomor_surat = 'SR-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        'status'=>'success'
                    );
                    return response()->json($response);
                    break;
                case '10':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi',
                        'kode_seksi.required'=>'Kode Seksi Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required'],
                        'kode_seksi'=>['required']
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
                        $nomor_surat = 'S.RIKSIS-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        $nomor_surat = 'S.RIKSIS-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        'status'=>'success'
                    );
                    return response()->json($response);
                    break;
                case '11':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi',
                        'kode_seksi.required'=>'Kode Seksi Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required'],
                        'kode_seksi'=>['required']
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
                        $nomor_surat = 'SI-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        $nomor_surat = 'SI-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        'status'=>'success'
                    );
                    return response()->json($response);
                    break;
                case '12':
                    //WPJ.14 Belum Jelas
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
                        'status'=>'success'
                    );
                    return response()->json($response);
                    break;
                case '14':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi',
                        'kode_seksi.required'=>'Kode Seksi Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required'],
                        'kode_seksi'=>['required']
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
                        $nomor_surat = 'ST-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        $nomor_surat = 'ST-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        'status'=>'success'
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
                        'status'=>'success'
                    );
                    return response()->json($response);
                    break;
                case '16':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi',
                        'kode_seksi.required'=>'Kode Seksi Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required'],
                        'kode_seksi'=>['required']
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
                        $nomor_surat = 'LHPPU-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        $nomor_surat = 'LHPPU-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        'status'=>'success'
                    );
                    return response()->json($response);
                    break;
                case '17':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi',
                        'kode_seksi.required'=>'Kode Seksi Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required'],
                        'kode_seksi'=>['required']
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
                        $nomor_surat = 'LAP-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        $nomor_surat = 'LAP-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        'status'=>'success'
                    );
                    return response()->json($response);
                    break;
                case '18':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi',
                        'kode_seksi.required'=>'Kode Seksi Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required'],
                        'kode_seksi'=>['required']
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
                        $nomor_surat = 'LAT-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        $nomor_surat = 'LAT-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        'status'=>'success'
                    );
                    return response()->json($response);
                    break;
                case '19':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi',
                        'kode_seksi.required'=>'Kode Seksi Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required'],
                        'kode_seksi'=>['required']
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
                        $nomor_surat = 'BA-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        $nomor_surat = 'BA-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        'status'=>'success'
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
                        'status'=>'success'
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
                        'status'=>'success'
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
                        'status'=>'success'
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
                        'status'=>'success'
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
                        'status'=>'success'
                    );
                    return response()->json($response);
                    break;
                case '25':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan Harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi',
                        'kode_seksi'=>'Kode Seksi Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required'],
                        'kode_seksi'=>['required']
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
                        $nomor_surat = 'BA.PEN-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        $nomor_surat = 'BA.PEN-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        'status'=>'success'
                    );
                    return response()->json($response);
                    break;
                case '26':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan Harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi',
                        'kode_seksi'=>'Kode Seksi Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required'],
                        'kode_seksi'=>['required']
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
                        $nomor_surat = 'PRIN.BP-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        $nomor_surat = 'PRIN.BP-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        'status'=>'success'
                    );
                    return response()->json($response);
                    break;
                case '27':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan Harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi',
                        'kode_seksi'=>'Kode Seksi Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required'],
                        'kode_seksi'=>['required']
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
                        $nomor_surat = 'SPPBP.P-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        $nomor_surat = 'SPPBP.P-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        'status'=>'success'
                    );
                    return response()->json($response);
                    break;
                case '28':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan Harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi',
                        'kode_seksi'=>'Kode Seksi Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required'],
                        'kode_seksi'=>['required']
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
                        $nomor_surat = 'SPEMB.BP-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        $nomor_surat = 'SPEMB.BP-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        'status'=>'success'
                    );
                    return response()->json($response);
                    break;
                case '29':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan Harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi',
                        'kode_seksi'=>'Kode Seksi Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required'],
                        'kode_seksi'=>['required']
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
                        $nomor_surat = 'PEMB.BP-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        $nomor_surat = 'PEMB.BP-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        'status'=>'success'
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
                        'status'=>'success'
                    );
                    return response()->json($response);
                    break;
                case '31':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan Harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi',
                        'kode_seksi'=>'Kode Seksi Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required'],
                        'kode_seksi'=>['required']
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
                        $nomor_surat = 'LK.DIK-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        $nomor_surat = 'LK.DIK-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        'status'=>'success'
                    );
                    return response()->json($response);
                    break;
                case '32':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan Harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi',
                        'kode_seksi'=>'Kode Seksi Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required'],
                        'kode_seksi'=>['required']
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
                        $nomor_surat = 'PRIN.DIK-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        $nomor_surat = 'PRIN.DIK-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        'status'=>'success'
                    );
                    return response()->json($response);
                    break;
                case '33':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan Harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi',
                        'kode_seksi'=>'Kode Seksi Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required'],
                        'kode_seksi'=>['required']
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
                        $nomor_surat = 'LHPS-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        $nomor_surat = 'LHPS-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        'status'=>'success'
                    );
                    return response()->json($response);
                    break;
                case '34':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan Harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi',
                        'kode_seksi'=>'Kode Seksi Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required'],
                        'kode_seksi'=>['required']
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
                        $nomor_surat = 'PANG.BP-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        $nomor_surat = 'PANG.BP-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        'status'=>'success'
                    );
                    return response()->json($response);
                    break;
                case '35':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan Harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi',
                        'kode_seksi'=>'Kode Seksi Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required'],
                        'kode_seksi'=>['required']
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
                        $nomor_surat = 'LPBP-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        $nomor_surat = 'LPBP-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        'status'=>'success'
                    );
                    return response()->json($response);
                    break;
                case '36':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan Harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi',
                        'kode_seksi'=>'Kode Seksi Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required'],
                        'kode_seksi'=>['required']
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
                        $nomor_surat = 'DUPAK-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        $nomor_surat = 'DUPAK-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        'status'=>'success'
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
                        'status'=>'success'
                    );
                    return response()->json($response);
                    break;
                case '38':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan Harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi',
                        'kode_seksi'=>'Kode Seksi Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required'],
                        'kode_seksi'=>['required']
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
                        $nomor_surat = 'PRIN.MAT-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        $nomor_surat = 'PRIN.MAT-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        'status'=>'success'
                    );
                    return response()->json($response);
                    break;
                case '39':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan Harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi',
                        'kode_seksi'=>'Kode Seksi Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required'],
                        'kode_seksi'=>['required']
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
                        $nomor_surat = 'INS.MAT-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        $nomor_surat = 'INS.MAT-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        'status'=>'success'
                    );
                    return response()->json($response);
                    break;
                case '40':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan Harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi',
                        'kode_seksi'=>'Kode Seksi Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required'],
                        'kode_seksi'=>['required']
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
                        $nomor_surat = 'LAP.MAT-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        $nomor_surat = 'LAP.MAT-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        'status'=>'success'
                    );
                    return response()->json($response);
                    break;
                case '41':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan Harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi',
                        'kode_seksi'=>'Kode Seksi Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required'],
                        'kode_seksi'=>['required']
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
                        $nomor_surat = 'LHIP-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        $nomor_surat = 'LHIP-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        'status'=>'success'
                    );
                    return response()->json($response);
                    break;
                case '42':
                    $message = array(
                        'tanggal_surat.required'=>'Tanggal Surat Harus Di Isi',
                        'tujuan.required'=>'Tujuan Harus Di Isi',
                        'perihal.required'=>'Perihal Harus Di Isi',
                        'kode_seksi'=>'Kode Seksi Harus Di Isi'
                    );
                    Validator::make($data,[
                        'tanggal_surat'=>['required'],
                        'tujuan'=>['required'],
                        'perihal'=>['required'],
                        'kode_seksi'=>['required']
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
                        $nomor_surat = 'LA-'.$c.'/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        $nomor_surat = 'LA-01/WPJ.14/'.strtoupper($data['kode_seksi']).'/'.$tanggalInsert;
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
                        'status'=>'success'
                    );
                    return response()->json($response);
                    break;
            }
        }else{
            exit("Not an Ajax Request!");
        }
    }

    public function dataOutboxDetail(Request $request){
        
    }

    public function dataOutboxDelete(Request $request){
        $data = $request->all();
        $type = $data['type'];
        $id = $data['id'];
        if($type=='1'){
            OutboxFirstModel::destroy($id);
        }else if($type=='2'){
            OutboxFaxModel::destroy($id);
        }else if($type=='3'){
            OutboxSecondModel::destroy($id);
        }
        $response = array(
            'message'=>'Data Surat Berhasil Di Hapus',
            'status'=>'success'
        );
        return response()->json($response);
    }
}
