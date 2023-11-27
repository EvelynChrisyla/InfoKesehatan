<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homepagecontroller extends Controller
{
    public function cidera()
    {
        return view('cidera');
    }

    public function lukaringan()
    {
        return view('lukaringan');
    }

    public function bisaular()
    {
        return view('bisaular');
    }

    public function penyakitmenular()
    {
        return view('penyakitmenular');
    }

    public function beranda()
    {
        return view('homepage');
    }

    public function tentang()
    {
        return view('tentang');
    }

    public function kontak()
    {
        return view('kontak');
    }
}