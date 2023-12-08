<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posyandu;

class PosyanduController extends Controller
{
    public function store(Request $request)
    {
    // Mengecek apakah sudah ada data Posyandu di database
    $existingPosyanduCount = Posyandu::count();

    // Jika sudah ada satu atau lebih entitas Posyandu
    if ($existingPosyanduCount >= 1) {
        return redirect()->route('puskesmasadmin')->with('error', 'Hanya boleh satu data Posyandu dalam database.');
    }

    // Jika belum ada entitas Posyandu, simpan data baru
    $posyandu = new Posyandu();
    $posyandu->laki_laki = $request->laki_laki;
    $posyandu->perempuan = $request->perempuan;
    $posyandu->stunting = $request->stunting;
    $posyandu->normal = $request->normal;
    $posyandu->save();

    return redirect()->route('puskesmasadmin')->with('success', 'Data Posyandu berhasil disimpan!');
    }

    public function create()
    {
        return view('posyandu');
    }

    public function index()
    {
        $posyanduData = Posyandu::all();
        return view('posyanduadmin', compact('posyanduData'));
    }

    public function edit($id)
    {
        $posyandu = Posyandu::findOrFail($id);
        return view('posyanduedit', compact('posyandu'));
    }

    public function update(Request $request, $id)
    {
        $posyandu = Posyandu::findOrFail($id);
        $posyandu->laki_laki = $request->laki_laki;
        $posyandu->perempuan = $request->perempuan;
        $posyandu->stunting = $request->stunting;
        $posyandu->normal = $request->normal;
        $posyandu->save();

        return redirect('/puskesmasadmin')->with('success', 'Data Posyandu berhasil diupdate!');
    }

    public function destroy($id)
    {
        $posyandu = Posyandu::findOrFail($id);
        $posyandu->delete();

        return redirect('/puskesmasadmin')->with('success', 'Data Posyandu berhasil dihapus!');
    }

    public function getData()
    {
        $posyanduData = Posyandu::latest()->first(); // Fetch the latest Posyandu data
        return view('homepage', ['posyanduData' => $posyanduData]); // Pass data to the homepage view
    }


}
