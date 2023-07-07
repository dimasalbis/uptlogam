<?php

namespace App\Http\Controllers;

use App\Models\Pendataan;
use Illuminate\Http\Request;

class PendataanController extends Controller
{
    public function index()
    {
        return view('pendataans.index', [
            'pendataans' => Pendataan::get(),
        ]); 
    }

    public function create()
    {
        return view('pendataans.create', [
            'pendataans' => Pendataan::get(),
        ]); 
    }

    public function store(Request $request)         
    {
        
        $this->validate($request, [
            'name' => ['required', 'min:3'],
            'penanggung_jawab' => ['required', 'min:3'],
            'address' => ['required', 'min:10'],
            'phone_number' => ['required', 'numeric'],
            'product' => ['required'],
            'lokasi_lahan' => ['required'],
            'luas_lahan' => ['required'],
            'nilai_sewa' => ['required'],
            'photo'=>['image']
        ], [
            'name.required' => 'Nama Harus Di Isi',
            'penanggung_jawab.required' => 'jangan Lupa Memasukkan Penanggung Jawab',
            'address.required' => 'Alamat Minimal 10 Kata',
            'Phone_number.required' => 'Nomer Harus Di Isi',
            'product.required' => 'Product Harus Di Isi',
            'lokasi_lahan.required' => 'Lokasi Lahan Harus Di Isi',
            'luas_lahan.required' => 'Luas Lahan Harus Di Isi',
            'nilai_sewa.required' => 'Nilai Sewa Harus Di Isi',
        ]);

        $photo = null;

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo')->store('/photos');
        }

        $pendataan = new Pendataan();

        $pendataan->name = $request->name;
        $pendataan->penanggung_jawab = $request->penanggung_jawab;
        $pendataan->address = $request->address;
        $pendataan->phone_number = $request->phone_number;
        $pendataan->product = $request->product;
        $pendataan->lokasi_lahan = $request->lokasi_lahan;
        $pendataan->luas_lahan = $request->luas_lahan;
        $pendataan->nilai_sewa = $request->nilai_sewa;
        $pendataan->photo = $photo;

        $pendataan->save();

        //session()->flash('success', 'Data Berhasil Ditambahkan');

        return redirect()->route('pendataans.index')->withInfo( 'Data Di Tambah');
    }

    public function edit($id)
    {
        $pendataan = Pendataan::find($id);
        return view('pendataans.edit', [
            'pendataan' => $pendataan,
        ]);
    }

    public function update(Request $request, $id)         
    {
        $this->validate($request, [
            'name' => ['required', 'min:3'],
            'penanggung_jawab' => ['required', 'min:3'],
            'address' => ['required', 'min:10'],
            'phone_number' => ['required', 'numeric'],
            'product' => ['required'],
            'lokasi_lahan' => ['required'],
            'luas_lahan' => ['required'],
            'nilai_sewa' => ['required'],
        ], [
            'name.required' => 'Nama Harus Di Isi',
            'penanggung_jawab.required' => 'jangan Lupa Memasukkan Penanggung Jawab',
            'address.required' => 'Alamat Minimal 10 Kata',
            'Phone_number.required' => 'Nomer Harus Di Isi',
            'product.required' => 'Product Harus Di Isi',
            'lokasi_lahan.required' => 'Lokasi Lahan Harus Di Isi',
            'luas_lahan.required' => 'Luas Lahan Harus Di Isi',
            'nilai_sewa.required' => 'Nilai Sewa Harus Di Isi',
        ]);
        
        $pendataan = Pendataan::find($id);

        $pendataan->name = $request->name;
        $pendataan->penanggung_jawab = $request->penanggung_jawab;
        $pendataan->address = $request->address;
        $pendataan->phone_number = $request->phone_number;
        $pendataan->product = $request->product;
        $pendataan->lokasi_lahan = $request->lokasi_lahan;
        $pendataan->luas_lahan = $request->luas_lahan;
        $pendataan->nilai_sewa = $request->nilai_sewa;

        $pendataan->save();
       // session()->flash('success', 'Data Berhasil Di Perbarui');
        return redirect()->route('pendataans.index')->withInfo( 'Data Di Edit');
    }

    public function destroy($id)
    {
        $pendataan = Pendataan::find($id);
        
        $pendataan->delete();

        //session()->flash('success', 'Data Berhasil Di Hapus');

        return redirect()->route('pendataans.index')->withInfo( 'Data Di Hapus');
    
    }
}

