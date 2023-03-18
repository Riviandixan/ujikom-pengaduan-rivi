<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            if(Auth::user()->role == 'admin'){
                return redirect()->intended('/dashboard');
            }elseif(Auth::user()->role == 'petugas'){
                return redirect()->intended('/dashboard');
            }elseif(Auth::user()->role == 'masyarakat'){
                return redirect()->intended('/pengaduan');
            }

            $log['created_at'] = date("Y-m-d h:m:s");
            $log['status'] = 'Login';

            Log::create($log);
        }

        return redirect('/')->with('error', 'Login Gagal Silahkan coba lagi!');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
