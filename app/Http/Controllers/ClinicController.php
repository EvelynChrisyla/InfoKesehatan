<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clinic;

class ClinicController extends Controller
{
    public function store(Request $request)
    {
        // Validasi inputan jika diperlukan

        $clinic = new Clinic();
        $clinic->nama = $request->nama;
        $clinic->alamat = $request->alamat;
        $clinic->foto = $request->foto;
        $clinic->nomor_telepon = $request->nomor_telepon;
        $clinic->jam_buka = $request->jam_buka;
        $clinic->link_alamat = $request->link_alamat; // Tambahkan link alamat
        $clinic->save();
    

        return redirect('/admin/maps')->with('success', 'Klinik berhasil ditambahkan!');
    }

    public function show()
    {
        // Ambil semua data klinik
        $clinics = Clinic::all();
        
        // Tampilkan view clinics.blade.php dengan data klinik yang diambil
        return view('clinics', compact('clinics'));
    }

    public function edit($id)
    {
        $clinic = Clinic::find($id);
        return view('editclinic', compact('clinic'));
    }

    // Fungsi untuk melakukan update pada klinik yang diedit
    public function update(Request $request, $id)
    {
        $clinic = Clinic::find($id);
        // Lakukan validasi inputan jika diperlukan

        // Lakukan update data klinik
        $clinic->nama = $request->nama;
        $clinic->alamat = $request->alamat;
        $clinic->foto = $request->foto;
        $clinic->nomor_telepon = $request->nomor_telepon;
        $clinic->jam_buka = $request->jam_buka;
        $clinic->link_alamat = $request->link_alamat;
        // Tambahkan field lain yang perlu diupdate

        $clinic->save();

        return redirect()->route('admin.maps')->with('success', 'Klinik berhasil diupdate!');
    }

    // Fungsi untuk menghapus klinik
    public function destroy($id)
    {
        $clinic = Clinic::find($id);
        $clinic->delete();

        return redirect()->route('admin.maps')->with('success', 'Klinik berhasil dihapus!');
    }

    public function create()
    {
        return view('createclinic');
    }

    public function index(Request $request)
{
    $katakunci = $request->input('katakunci');
    $clinics = Clinic::query()
        ->when($katakunci, function ($query) use ($katakunci) {
            return $query->where('nama', 'like', '%' . $katakunci . '%');
        })
        ->get();

    return view('adminmaps', compact('clinics'));
}

public function showKlinikCards() {
    $clinics = Clinic::all();
    return view('KlinikCard', compact('clinics'));
}
}
