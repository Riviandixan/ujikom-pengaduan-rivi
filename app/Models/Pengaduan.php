<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_nik',
        'user_id', 
        'isi_laporan', 
        'tgl_pengaduan', 
        'foto', 
        'status'
    ];

    public function users(){
        return $this->belongsTo(User::class, 'id', 'id');
    }

    public function details(){
        return $this->hasMany(Pengaduan::class, 'id', 'id');
    }
}
