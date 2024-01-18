<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function index(){
        $data['users'] = User::orderBy('name', 'desc')->get();
        // $data['users'] = User::orderBy('name', 'desc')->groupBy('level')->get();
        $data['total_users'] = User::count();
        $data['total_admin'] = User::where('level','admin')->count(); 
        $data['total_operator'] = User::where('level','operator')->count();  

        return view ('user', $data);
    }

    public function search(Request $request){
        $data['users'] = User::where('name', $request->cari)->orWhere('email', $request->cari)->get();
        $data['total_users'] = $data['users']->count();  
        Return view('user', $data);
    }
    public function create(){
        return view('create-users');
    }
    public function add(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => ['required','email'],
            'username' => 'required',
            'password' => ['required','min:6'],
            'level' => 'required'
        ]);
        // User::create($data);
        $akun = User::where('email', $request->email)->orWhere('username', $request->username)->first();
        if(!$akun){
            $simpan = User::create($data);
            if($simpan){
                Session::flash('pesan', 'Data berhasil disimpan');
            }else{
                Session::flash('pesan', 'Data gagal disimpan');
            }
        }else{
            Session::flash('pesan', 'Email atau username sudah digunakan!');
        }

        return redirect('/users');
    }
}
