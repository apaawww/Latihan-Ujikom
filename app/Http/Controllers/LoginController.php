<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



class LoginController extends Controller
{
    public function auth(Request $request){
        $credential = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if(Auth::attempt($credential)){
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
