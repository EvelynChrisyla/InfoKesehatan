<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Klinik;

class KlinikController extends Controller
{
    public function store(Request $request)
    {
    // Mengecek apakah sudah ada data Klinik di database
    $existingKlinikCount = Klinik::count();

    // Jika sudah ada satu atau lebih entitas Klinik
    if ($existingKlinikCount >= 1) {
        return redirect()->route('klinikadmin')->with('error', 'Hanya boleh satu data Klinik dalam database.');
    }

    // Jika belum ada entitas Klinik, simpan data baru
    $klinik = new Klinik();
    $klinik->diabetes = $request->diabetes;
    $klinik->dbd = $request->dbd;
    $klinik->covid = $request->covid;
    $klinik->tbc = $request->tbc;
    $klinik->save();

    return redirect()->route('klinikadmin')->with('success', 'Data Klinik berhasil disimpan!');
    }

    public function create()
    {
        return view('klinik');
    }

    public function index()
    {
        $klinikData = Klinik::all();
        return view('klinikadmin', compact('klinikData'));
    }

    public function edit($id)
    {
        $klinik = Klinik::findOrFail($id);
        return view('klinikedit', compact('klinik'));
    }

    public function update(Request $request, $id)
    {
        $klinik = Klinik::findOrFail($id);
        $klinik->diabetes = $request->diabetes;
        $klinik->dbd = $request->dbd;
        $klinik->covid = $request->covid;
        $klinik->tbc = $request->tbc;
        $klinik->save();

        return redirect('/klinikadmin')->with('success', 'Data Klinik berhasil diupdate!');
    }

    public function destroy($id)
    {
        $klinik = Klinik::findOrFail($id);
        $klinik->delete();

        return redirect('/klinikadmin')->with('success', 'Data Klinik berhasil dihapus!');
    }

    // public function getData()
    // {
    //     $klinikData = Klinik::latest()->first(); 
    //     return view('homepage', ['klinikData' => $klinikData]); 
    // }


}
