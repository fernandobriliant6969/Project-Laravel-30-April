<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $fillable = [
        "namaProdi",
        "singkatan",
        "kaprodi",
        "Fakultas_id"
    ];

    public function fakultas(){
        return $this->belongsto(Fakultas::class, 'Fakultas_id');
    }
}
