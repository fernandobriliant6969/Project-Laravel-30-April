<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $grafikmhs = DB::select("SELECT prodis.namaProdi, 
                                COUNT(*) as jumlah_mhs 
                                FROM mahasiswas
                                JOIN prodis 
                                ON mahasiswas.idProdi = prodis.id
                                GROUP BY prodis.namaProdi");

        $grafikmhspertahun = DB::select("SELECT LEFT(mahasiswas.npm,2) as tahun_angkatan, 
                                COUNT(*) as jumlah_mhs 
                                FROM mahasiswas
                                JOIN prodis ON mahasiswas.idProdi = prodis.id
                                GROUP BY LEFT(mahasiswas.npm,2)");
        
        $grafiktrenmahasiswa = DB::select('SELECT prodis.namaProdi, 
            SUM(CASE WHEN LEFT(mahasiswas.npm,2) = 23 THEN 1 ELSE 0 END) as jmhs_2023, 
            SUM(CASE WHEN LEFT(mahasiswas.npm,2) = 24 THEN 1 ELSE 0 END) as jmhs_2024,
            SUM(CASE WHEN LEFT(mahasiswas.npm,2) = 25 THEN 1 ELSE 0 END) as jmhs_2025
            FROM mahasiswas
            JOIN prodis ON mahasiswas.idProdi = prodis.id
            GROUP BY prodis.namaProdi');

        return view('dashboard', compact('grafikmhs','grafikmhspertahun', 'grafiktrenmahasiswa'));
    }
}
