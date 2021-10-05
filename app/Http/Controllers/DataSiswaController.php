<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataSiswaController extends Controller
{
    public function datasiswa()
    {
        $nama = 'Azhar';
        return $nama;
    }
    public function datasiswi()
    {
        $nama = 'Aulia';
        return $nama;
    }
    public function nama($nama = null)
    {
        return 'Nama Anda : '.$nama;
    }
}