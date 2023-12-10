<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lansia;

class LansiaController extends Controller
{
    public function store(Request $request)
    {
    // Mengecek apakah sudah ada data Lansia di database
    $existingLansiaCount = Lansia::count();

    // Jika sudah ada satu atau lebih entitas Lansia
    if ($existingLansiaCount >= 1) {
        return redirect()->route('lansiaadmin')->with('error', 'Hanya boleh satu data Lansia dalam database.');
    }

    // Jika belum ada entitas Lansia, simpan data baru
    $lansia = new Lansia();
    $lansia->pria = $request->pria;
    $lansia->wanita = $request->wanita;
    $lansia->total = $request->total;
    $lansia->save();

    return redirect()->route('lansiaadmin')->with('success', 'Data Lansia berhasil disimpan!');
    }

    public function create()
    {
        return view('lansia');
    }

    public function index()
    {
        $lansiaData = Lansia::all();
        return view('lansiaadmin', compact('lansiaData'));
    }

    public function edit($id)
    {
        $lansia = Lansia::findOrFail($id);
        return view('lansiaedit', compact('lansia'));
    }

    public function update(Request $request, $id)
    {
        $lansia = Lansia::findOrFail($id);
        $lansia->pria = $request->pria;
        $lansia->wanita = $request->wanita;
        $lansia->total = $request->total;
        $lansia->save();

        return redirect('/lansiaadmin')->with('success', 'Data Lansia berhasil diupdate!');
    }

    public function destroy($id)
    {
        $lansia = Lansia::findOrFail($id);
        $lansia->delete();

        return redirect('/lansiaadmin')->with('success', 'Data Lansia berhasil dihapus!');
    }

}
