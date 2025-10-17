<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class ProfileController extends Controller
{
    public function profile($nama = "Barra", $npm = "2057051025", $kelas = "A") {
        $data = [
            'nama' => $nama,
            'npm' => $npm,
            'kelas' => $kelas
        ];
        
        return view('profile', $data);  
    }
}

