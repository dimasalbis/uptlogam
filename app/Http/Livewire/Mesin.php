<?php

namespace App\Http\Livewire;

use App\Models\Mesin as ModelsMesin;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;



class Mesin extends Component
{
    use WithPagination;
    use WithFileUploads;


    protected $paginationTheme = 'bootstrap';

    public $create, $edit, $delete, $destroy, $gambar_mesin,  $nama_mesin, $no_seri, $foto, $nama_penyewa, $alamat, $no_hp, $tanggal_sewa, $tanggal_kembali,  $nilai_sewa, $mesin_id, $search;
    protected $rules = [
        'gambar_mesin' => 'required',
        'nama_mesin' => 'required|min:3',
        'no_seri' => 'required|numeric',
        'foto' => 'required',
        'nama_penyewa' => 'required|min:5',
        'nilai_sewa' => 'required|numeric',
        'tanggal_sewa' => 'required|date|after_or_equal:today',
        'tanggal_kembali' => 'required',
        'alamat' => 'required',
        'no_hp' => 'required|numeric'




    ];

    public function create(){

        $this->create = true;
        //dd($this->create);
    }

    public function store(){

        $this->validate();


        //dd($this->nama_mesin);

        ModelsMesin::create([

            'gambar_mesin' => $this->gambar_mesin->store('gambar_mesin', 'public'),
            'nama_mesin' => $this->nama_mesin,
            'no_seri' => $this->no_seri,
            'nama_penyewa' => $this->nama_penyewa,
            'alamat' => $this->alamat,
            'no_hp' => $this->no_hp,
            'foto' => $this->foto->store('foto', 'public'),
            'nilai_sewa' => $this->nilai_sewa,
            'tanggal_sewa' => $this->tanggal_sewa,
            'tanggal_kembali' => $this->tanggal_kembali
        ]);

        session()->flash('sukses', 'Data Berhasil Ditambahkan');

        $this->format();

    }

   public function edit(ModelsMesin $mesin)
   {
        //dd($mesin->id);
        $this->edit = true;

        $this->gambar_mesin = $mesin->gambar_mesin;
        $this->nama_mesin = $mesin->nama_mesin;
        $this->no_seri = $mesin->no_seri;
        $this->nama_penyewa = $mesin->nama_penyewa;
        $this->alamat = $mesin->alamat;
        $this->no_hp = $mesin->no_hp;
        $this->tanggal_sewa = $mesin->tanggal_sewa;
        $this->tanggal_kembali = $mesin->tanggal_kembali;
        $this->nilai_sewa = $mesin->nilai_sewa;
        $this->mesin_id = $mesin->id;
}

    public function update(ModelsMesin $mesin)
    {
        $this->validate();

        $mesin->update([

            'gambar_mesin' => $this->gambar_mesin->store('gambar_mesin', 'public'),
            'nama_mesin' => $this->nama_mesin,
            'no_seri' => $this->no_seri,
            'foto' => $this->foto->store('foto', 'public'),
            'nama_penyewa' => $this->nama_penyewa,
            'alamat' => $this->alamat,
            'no_hp' => $this->no_hp,
            'tanggal_sewa' => $this->tanggal_sewa,
            'tanggal_kembali' => $this->tanggal_kembali,
            'nilai_sewa' => $this->nilai_sewa

        ]);

        session()->flash('sukses', 'Data Berhasil Diubah');

        $this->format();
    }

    public function delete($id)
    {
        //dd($id);
        $this->delete = true;
        $this->mesin_id = $id;

        //$this->format();
    }

    public function destroy(ModelsMesin $mesin)
    {
       $mesin->delete();

       session()->flash('sukses', 'Data Berhasil Dihapus');

        $this->format();

    }






    public function render()
    {

        if ($this->search) {
            $mesin = ModelsMesin::latest()->where('nama_penyewa', 'like', '%'. $this->search .'%')->paginate(10);
            $mesin = ModelsMesin::latest()->where('alamat', 'like', '%'. $this->search .'%')->paginate(10);
            //$siswa = ModelsSiswa::latest()->where('nis', 'like', '%'. $this->search .'%')->paginate(3);
           // $siswa = ModelsSiswa::latest()->where('nisn', 'like', '%'. $this->search .'%')->paginate(3);
        }
        else {

            $mesin = ModelsMesin::latest()->paginate(10);
        }





        return view('livewire.mesin', compact('mesin'));
    }

    public function format(){
        unset($this->nama_mesin);
        unset($this->create);
        unset($this->edit);
        unset($this->no_seri);
        unset($this->nama_penyewa);
        unset($this->tanggal_sewa);
        unset($this->tanggal_kembali);
        unset($this->nilai_sewa);
        unset($this->no_hp);
        unset($this->alamat);
        unset($this->delete);
        //unset($this->mesin_id);
    }
}
