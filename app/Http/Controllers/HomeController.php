<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Klinik;
use App\Models\Posyandu;
use App\Models\Lansia;
use App\Models\Hamil;

class HomeController extends Controller
{
    public function index()
    {
        $klinikData = Klinik::latest()->first();
        $posyanduData = Posyandu::latest()->first();
        $lansiaData = Lansia::latest()->first();
        $hamilData = Hamil::latest()->first();

        return view('homepage', [
            'klinikData' => $klinikData,
            'posyanduData' => $posyanduData,
            'lansiaData' => $lansiaData,
            'hamilData' => $hamilData
        ]);
    }
}
