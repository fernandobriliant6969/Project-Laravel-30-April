<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Prodi;

class Mahasiswa extends Model
{
    protected $fillable = [
        "nama",
        "npm",
        "idProdi",
        "foto"
    ];

    public function prodi(){
        return $this->belongsTo(Prodi::class, 'idProdi');
    }
}
