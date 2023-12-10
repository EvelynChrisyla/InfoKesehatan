<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hamil;

class HamilController extends Controller
{
    public function store(Request $request)
    {
    // Mengecek apakah sudah ada data hamil di database
    $existingHamilCount = Hamil::count();

    // Jika sudah ada satu atau lebih entitas hamil
    if ($existingHamilCount >= 1) {
        return redirect()->route('hamiladmin')->with('error', 'Hanya boleh satu data hamil dalam database.');
    }

    // Jika belum ada entitas hamil, simpan data baru
    $hamil = new Hamil();
    $hamil->totalhamil = $request->totalhamil;
    $hamil->keguguran = $request->keguguran;
    $hamil->melahirkan = $request->melahirkan;
    $hamil->save();

    return redirect()->route('hamiladmin')->with('success', 'Data hamil berhasil disimpan!');
    }

    public function create()
    {
        return view('hamil');
    }

    public function index()
    {
        $hamilData = Hamil::all();
        return view('hamiladmin', compact('hamilData'));
    }

    public function edit($id)
    {
        $hamil = Hamil::findOrFail($id);
        return view('hamiledit', compact('hamil'));
    }

    public function update(Request $request, $id)
    {
        $hamil = Hamil::findOrFail($id);
        $hamil->totalhamil = $request->totalhamil;
        $hamil->keguguran = $request->keguguran;
        $hamil->melahirkan = $request->melahirkan;
        $hamil->save();

        return redirect('/hamiladmin')->with('success', 'Data hamil berhasil diupdate!');
    }

    public function destroy($id)
    {
        $hamil = Hamil::findOrFail($id);
        $hamil->delete();

        return redirect('/hamiladmin')->with('success', 'Data hamil berhasil dihapus!');
    }

    public function getData()
    {
        $hamilData = Hamil::latest()->first(); // Fetch the latest hamil data
        return view('homepage', ['hamilData' => $hamilData]); // Pass data to the homepage view
    }
}
