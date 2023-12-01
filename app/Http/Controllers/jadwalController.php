<?php

namespace App\Http\Controllers;

use App\Models\jadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class jadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        
        $katakunci = $request->katakunci;
        $jumlahbaris = 5;
        if(strlen($katakunci)){
            $data = jadwal::where('nama', 'like', "%$katakunci%")
            // ->orWhere('alamat', 'like', "%$katakunci%")
                ->paginate($jumlahbaris);
        }else{
            $data = jadwal::paginate($jumlahbaris);
        }
        return view('jadwaldokter.jadwal')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jadwaldokter.createjadwal');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('nama',$request->nama);
        Session::flash('jam',$request->jam);
        Session::flash('tanggal', $request->tanggal);
        Session::flash('alamat',$request->alamat);
        Session::flash('nomortelp',$request->nomortelp);

        $request->validate([
            'nama'=>'required',
            'jam'=>'required',
            'tanggal' => 'required|date', 
            'alamat'=>'required',
            'nomortelp'=>'required',
        ],[
            'nama.required'=>'Nama wajib diisi!',
            'jam.required'=>'Jam wajib diisi!',
            'tanggal.required' => 'Tanggal wajib diisi!',
            'alamat.required'=>'Alamat wajib diisi!',
            'nomortelp.required'=>'Nomor Telepon wajib diisi!',
        ]);
        $data = [
            'nama'=>$request->nama,
            'jam'=>$request->jam,
            'tanggal' => $request->tanggal,
            'alamat'=>$request->alamat,
            'nomortelp'=>$request->nomortelp,

        ];
        jadwal::create($data);
        return redirect()->to('jadwaldokter')->with('success', 'Berhasil menambahkan data!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $nama)
    {
        $data = jadwal::where('nama',$nama)->first();
        return view('jadwaldokter.editjadwal')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $nama)
    {
        $request->validate([
            'jam'=>'required',
            'tanggal' => 'required|date',
            'alamat'=>'required',
            'nomortelp'=>'required',
        ],[
            'jam.required'=>'Jam wajib diisi!',
            'tanggal.required' => 'Tanggal wajib diisi!',
            'alamat.required'=>'Alamat wajib diisi!',
            'nomortelp.required'=>'Nomor Telepon wajib diisi!',
        ]);
        $data = [
            'jam'=>$request->jam,
            'tanggal' => $request->tanggal,
            'alamat'=>$request->alamat,
            'nomortelp'=>$request->nomortelp,

        ];
        jadwal::where('nama', $nama)->update($data);
        return redirect()->to('jadwaldokter')->with('Success!', 'Data Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $nama)
    {
        jadwal::where('nama', $nama)->delete();
        return redirect()->to('jadwaldokter')->with('Success!', 'Data Deleted Successfully!');
    }

    public function showForPublic()
        {
    $data = Jadwal::paginate(5); // Sesuaikan jumlah paginasi yang diinginkan
    return view('jadwal_masyarakat')->with('data', $data);
    }
}
