<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        return view('dashboard.index', [
            'proses' => Pengaduan::where('status', 'proses')->count(),
            'selesai' => Pengaduan::where('status', 'selesai')->count(),
            'petugas' => User::where('role', '=', 'petugas')->count(),
            'masyarakat' => User::where('role', '=', 'masyarakat')->count(),
        ]);
    }
}
