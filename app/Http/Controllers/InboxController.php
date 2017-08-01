<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Fpdf;
use Yajra\Datatables\Facades\Datatables;
use Carbon\Carbon;
use App\InboxModel;
use DateTime;
class InboxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['inbox'] = InboxModel::all();
        // return $data;
        return view('suratMasuk.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Datatables::collection(InboxModel::all())->make(true);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = array();
        $getData = $request->all();
        // return $getData;
        $data['tanggal_terima'] = Carbon::parse($getData['tanggal_terima'])->format('Y-m-d');
        $data['tanggal_surat'] = Carbon::parse($getData['tanggal_surat'])->format('Y-m-d');
        $data['nomor_surat'] = $getData['nomor_surat'];
        $data['asal_surat'] = $getData['asal_surat'];
        $data['perihal'] = $getData['perihal'];
        
        if(isset($getData['petunjuk'])){
            $textDisposisiKabid = "";    
            for($x=0;$x<count($getData['petunjuk']);$x++){
                $textDisposisiKabid .= $getData['petunjuk'][$x];
                if($x<count($getData['petunjuk'])-1){
                    $textDisposisiKabid .=",";
                }
            }
        }else{
            $textDisposisiKabid = null;
        }
        $data['disposisi_kabid'] = $textDisposisiKabid;

        if(isset($getData['disposisi_kanwil'])){
            $textDisposisiKanwil = "";
            for($x=0;$x<count($getData['disposisi_kanwil']);$x++){
                $textDisposisiKanwil .= $getData['disposisi_kanwil'][$x];
                if($x<count($getData['disposisi_kanwil'])-1){
                    $textDisposisiKanwil .=",";
                }
            }
        }else{
            $textDisposisiKanwil = null;
        }
        $data['disposisi_kanwil'] = $textDisposisiKanwil;
        $data['disposisi_lainnya'] = $getData['disposisi_lainnya'];
        $data['catatan_kakanwil'] = $getData['catatan_kakanwil'];
        $data['catatan_kabid'] = $getData['catatan_kabid'];
        InboxModel::create($data);
        return redirect('surat_masuk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    public function print($id){
        $data = InboxModel::find($id);
        Fpdf::AddPage();
        Fpdf::SetFont('Arial', 'B', 18);
        // Fpdf::Cell(50, 25, $data['tanggal_surat']);
        Fpdf::SetFont('Arial', 'B', 10);
        Fpdf::MultiCell(190,5,'LEMBAR DISPOSISI BIDANG PEMERIKSAAN, PENAGIHAN, INTELIJEN DAN PENYIDIKAN',1,'C');
        Fpdf::SetFont('Arial', '', 8);
        Fpdf::MultiCell(190,5,'PERHATIAN : Dilarang Memisahkan Sehelai Suratpun yang Tergabung dalam Berkas Ini',1,'C');
        // Fpdf::Cell(50, 25, $data['tanggal_surat']);
        // Fpdf::Image(asset('img/logo.jpg'),25,20,30,30);
        // return Fpdf::GetPageWidth()." - ".Fpdf::GetPageHeight();
        return response(Fpdf::Output())->header('Content-Type','application/pdf');
    }
}
