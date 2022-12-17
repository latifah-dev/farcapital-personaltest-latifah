<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Hash;

class PenggunaController extends Controller
{
    function login (Request $request) {
        if($request->method()=="GET") {
            return view('login');
        }
        $email = $request ->input('email');
        $password = $request ->input("password");
        $pengguna = Pengguna::query()->where("email",$email)->first();
        if($pengguna == null) {
            return redirect()->back()->withErrors(["msg"=>"email tidak ditemukan"]);
        }
        if(!Hash::check($password,  $pengguna->password)) {
            return redirect()->back()->withErrors(["msg"=>"password salah !"]);
        }
        if(!session()->isStarted()) session()->start();
        session()->put("logged", true);
        session()->put("isPengguna", $pengguna->id);
        return redirect('/');
    }
    function logout() {
        session()->flush();
        return redirect()->route("login");
    }
}
