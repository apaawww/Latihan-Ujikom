<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absensi;

class AbsensiController extends Controller
{
    public function index(){
        $data['absensi'] = Absensi::all();
        // $data['absensi'] = Absensi::join('users', 'users.id', '=', 'absensis.id_user')->get();
        return view('absensi', $data);
    }
}
