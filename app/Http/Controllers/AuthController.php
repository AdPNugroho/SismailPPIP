<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PenggunaModel;
use Carbon\Carbon;
class AuthController extends Controller
{
    public function login(Request $request){
        $req = $request->all();
        $check = PenggunaModel::where('username',$req['username'])->get();
        $data = $check->count();
        if($data>0){
            if(password_verify($req['password'],$check[0]['password'])){
                $dataLogin = PenggunaModel::find($check[0]['id_pengguna']);
                session(['last_login'=>$check[0]['last_login']]);
                session(['id_pengguna'=>$check[0]['id_pengguna']]);
                $date = Carbon::now();
                $now = Carbon::createFromFormat('Y-m-d H:i:s',$date,'UTC');
                $now->setTimezone('Asia/Singapore');
                $data = array(
                    'last_login' => $now
                );
                $dataLogin->update($data);
                if($check[0]['status']=="1"){
                    //Session Admin
                    session(['level'=>"admin"]);
                    session(['username'=>$check[0]['username']]);
                    $response = array(
                        'message'=>'Anda Berhasil Login Sebagai Admin<br>Mohon Tunggu Sebentar',
                        'status'=>'success',
                        'level'=>1
                    );
                    return response()->json($response);
                }else if($check[0]['status']=="2"){
                    //Session Sekre
                    session(['level'=>"sekre"]);
                    session(['username'=>$check[0]['username']]);
                    $response = array(
                        'message'=>'Anda Berhasil Login Sebagai Sekre<br>Mohon Tunggu Sebentar',
                        'status'=>'success',
                        'level'=>2
                    );
                    return response()->json($response);
                }else if($check[0]['status']=="3"){
                    //Session Kasi
                    session(['level'=>"kasi"]);
                    session(['username'=>$check[0]['username']]);
                    $response = array(
                        'message'=>'Anda Berhasil Login Sebagai Kasi<br>Mohon Tunggu Sebentar',
                        'status'=>'success',
                        'level'=>3
                    );
                    return response()->json($response);
                }
            }else{
                $response = array(
                    'message'=>'Login Gagal, Cek Kembali Akun SIPAMA Anda',
                    'status'=>'error'
                );
                return response()->json($response);
            }
        }else{
            $response = array(
                'message'=>'Login Gagal, Cek Kembali Akun SIPAMA Anda',
                'status'=>'error'
            );
            return response()->json($response);
        }
    }

    public function logout(Request $req){
        $req->session()->regenerate();
        $req->session()->flush();
        return view('auth.logout');
    }

}
