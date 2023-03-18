<?php

namespace App\Http\Controllers;

use App\Helpers\LogActivity;
use Illuminate\Http\Request;

class LogActivityController extends Controller
{
    public function myTestAddToLog()
    {
        //bisa melakukan apapun 
        //seperti create, read, update dan delete sebelum fungsi log di bawah ini dijalankan
        LogActivity::addToLog('Login Admin');
        LogActivity::addToLog('Login Petugas');
        LogActivity::addToLog('Login Masyarakat');
        LogActivity::addToLog('Create pengaduan');
        LogActivity::addToLog('Create Tanggapan');
        LogActivity::addToLog('Create Petugas');
        LogActivity::addToLog('Read Masyarakat');
          dd('log insert successfully.');
    }

    public function logActivity()
    {

        // bisa melakukan apapun 
        //seperti create, read, update dan delete sebelum fungsi log di bawah ini dijalankan
        
        $logs = LogActivity::logActivityLists();
        return view('log_activity', compact('logs'));
    }
}
