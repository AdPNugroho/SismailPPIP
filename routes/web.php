<?php
use Illuminate\Http\Response;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('template');
// });
Route::group(['middleware'=>'loginCheck'],function(){
    Route::get('/', function () {
        return view('auth.index');
    });
});
// Route Auth
Route::post('/auth/login','AuthController@login');
Route::get('/auth/logout','AuthController@logout');
// ================================================================== // 

Route::resource('surat_masuk', 'InboxController');

Route::get('surat_masuk/print/{id}','InboxController@print');

Route::group(['middleware'=>'adminCheck'],function(){
    // Route Admin
    Route::get('/adm','AdminController@index');
    Route::get('/adm/dashboard','AdminController@index');
    Route::get('/adm/control','AdminController@admin_panel');
    Route::get('/adm/user','AdminController@user_panel');
    Route::get('/adm/inbox','AdminController@inbox_panel');
    Route::get('/adm/outbox','AdminController@outbox_panel');
    Route::get('/adm/logout','AuthController@logout');

    //Route Admin Data Process
    Route::post('/adm/control','AdminController@storeAdm');
    Route::post('/adm/user','AdminController@storeUser');

    // Route Admin Data Ajax
    Route::get('/adm/dataControl','AdminController@dataAdm');
    Route::get('/adm/dataUser','AdminController@dataUser');
    Route::get('/adm/dataInbox','AdminController@dataInbox');
    Route::get('/adm/dataDisposisi','AdminController@dataDisposisi');

    Route::post('/adm/getAdmin','AdminController@getAdmin');
    Route::post('/adm/deleteAdmin','AdminController@deleteAdmin');
    Route::post('/adm/updateAdmin','AdminController@updateAdmin');

    Route::post('/adm/getUser','AdminController@getUser');
    Route::post('/adm/deleteUser','AdminController@deleteUser');
    Route::post('/adm/updateUser','AdminController@updateUser');

    //Route Admin Data Process Save
    Route::post('/adm/inbox','AdminController@storeInbox');
    Route::post('/adm/disposisi','AdminController@storeDisposisi');

    //Route Admin Data Process Delete
    Route::post('/adm/deleteInbox','AdminController@deleteInbox');
    //Route Admin Data Process Get Data
    Route::post('/adm/detailInbox','AdminController@detailInbox');
    Route::post('/adm/detailDisposisi','AdminController@detailDisposisi');
    Route::post('/adm/detailDisposisiNext','AdminController@detailDisposisiNext');
    Route::post('/adm/detailDisposisiPrev','AdminController@detailDisposisiPrev');

    //Route Admin Data Process Print Batch
    Route::post('/adm/print','AdminController@printBatch');
});

Route::group(['middleware'=>'sekreCheck'],function(){
    // Route Sekre
    Route::get('/sec','SekreController@index');
    Route::get('/sec/dashboard','SekreController@index');
    Route::get('/sec/inbox','SekreController@inbox');
    Route::get('/sec/print','SekreController@print');
    Route::get('/sec/profile','SekreController@profile');
    Route::get('/sec/logout','AuthController@logout');

    Route::post('/sec/disposisi','SekreController@storeDisposisi');
    //Route Sekre DataTables
    Route::get('/sec/dataSurat','SekreController@dataSurat');
    Route::get('/sec/dataDisposisi','SekreController@dataDisposisi');

    //Route Sekre Data Process Save
    Route::post('/sec/inbox','SekreController@storeInbox');
    Route::post('/sec/disposisi','SekreController@storeDisposisi');
    //Route Sekre Data Process Update
    
    //Route Sekre Data Process Delete
    Route::post('/sec/deleteInbox','SekreController@deleteInbox');
    //Route Sekre Data Process Get Data
    Route::post('/sec/detailInbox','SekreController@detailInbox');
    Route::post('/sec/detailDisposisi','SekreController@detailDisposisi');
    Route::post('/sec/detailDisposisiNext','SekreController@detailDisposisiNext');
    Route::post('/sec/detailDisposisiPrev','SekreController@detailDisposisiPrev');
    Route::get('/sec/print/{id}','SekreController@printView');

    //Route Sekre Data Process Print Batch
    Route::post('/sec/print','SekreController@printBatch');
});

Route::group(['middleware'=>'kasiCheck'],function(){
    //Route Kasi
    Route::get('/kasi','KasiController@index');
    Route::get('/kasi/dashboard','KasiController@index');
    Route::get('/kasi/acc','KasiController@account');
    Route::get('/kasi/inbox','KasiController@inbox');
    Route::get('/kasi/outbox','KasiController@outbox');
    Route::get('/kasi/chart','KasiController@chart');
    Route::get('/kasi/logout','AuthController@logout');

    //Route Kasi Data Process
    Route::post('/kasi/updUsr','KasiController@updateUser');
    Route::get('/kasi/dataInbox','KasiController@dataInbox');
    Route::get('/kasi/dataDisposisi','KasiController@dataDisposisi');
    Route::post('/kasi/detailInbox','KasiController@detailInbox');
    Route::post('/kasi/next','KasiController@nextInbox');
    Route::post('/kasi/prev','KasiController@prevInbox');
    Route::post('/kasi/print','KasiController@printBatch');
});

//DATA tbl_outbox_first
Route::get('/data/ba_ta','DataController@dataBaTA');
Route::get('/data/ta','DataController@dataTA');
Route::get('/data/s','DataController@dataS');
Route::get('/data/ket','DataController@dataKET');
Route::get('/data/nd','DataController@dataND');
Route::get('/data/spr','DataController@dataSPR');
Route::get('/data/ndr','DataController@dataNDR');
Route::get('/data/sp','DataController@dataSP');
Route::get('/data/sr','DataController@dataSR');
Route::get('/data/s_riksis','DataController@dataSRiksis');
Route::get('/data/si','DataController@dataSI');
Route::get('/data/wpj','DataController@dataWPJ');
Route::get('/data/und','DataController@dataUND');
Route::get('/data/st','DataController@dataST');
Route::get('/data/lhppu','DataController@dataLHPPU');
Route::get('/data/lap','DataController@dataLAP');
Route::get('/data/lat','DataController@dataLAT');
Route::get('/data/ba','DataController@dataBA');
Route::get('/data/ba_pen','DataController@dataBaPen');
Route::get('/data/print_bp','DataController@dataPrinBP');
Route::get('/data/sppbp_p','DataController@dataSppbpP');
Route::get('/data/spemb_bp','DataController@dataSpembBP');
Route::get('/data/pemb_bp','DataController@dataPembBP');
Route::get('/data/lk_dik','DataController@dataLkDik');
Route::get('/data/prin_dik','DataController@dataPrinDik');
Route::get('/data/lhps','DataController@dataLhps');
Route::get('/data/pang_bp','DataController@dataPangBp');
Route::get('/data/lpbp','DataController@dataLpbp');
Route::get('/data/dupak','DataController@dataDupak');
Route::get('/data/kepkakanwil','DataController@dataKEPKakanwil');
Route::get('/data/print_mat','DataController@dataPrintMat');
Route::get('/data/ins_mat','DataController@dataInsMat');
Route::get('/data/lap_mat','DataController@dataLapMat');
Route::get('/data/lhip','DataController@dataLhip');
Route::get('/data/lap_atensi','DataController@dataLapAtensi');

//DATA tbl_outbox_second
Route::get('/data/lii','DataController@dataLII');
Route::get('/data/lapju_idlp','DataController@dataLapjuIDLP');
Route::get('/data/lhpa_idlp','DataController@dataLhpaIDLP');
Route::get('/data/lia_idlp','DataController@dataLiaIDLP');
Route::get('/data/ba_pen_idlp','DataController@dataBaPenIDLP');
Route::get('/data/lapju_penyidikan','DataController@dataLapjuPenyidikan');

//DATA tbl_outbox_fax
Route::get('/data/fax','DataController@dataFax');


Route::post('/post/outbox','DataController@dataOutboxPost');

Route::post('/post/detail','DataController@dataOutboxDetail');

Route::post('/outbox/delete','DataController@dataOutboxDelete');