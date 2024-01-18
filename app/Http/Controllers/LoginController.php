<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



class LoginController extends Controller
{
    public function auth(Request $request){
        $credential = $request->validate([
            'akun' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt([
            'username' => $request->akun,
            'password' => $request->password

        ]) or Auth::attempt([
            'email' => $request->akun,
            'password' => $request->password
        ])) {

            if(Auth::user()->level == "admin"){
                return redirect('/home');
            }else{
                return redirect('/operator');
            }
        }

        return redirect()->back();
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
