<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesin extends Model
{
    protected $table = 'mesin';
    protected $fillable = [ 'gambar_mesin', 'nama_mesin', 'no_seri', 'nama_penyewa', 'alamat', 'no_hp', 'foto', 'tanggal_sewa', 'tanggal_kembali', 'nilai_sewa', 'mesin_id'];
}
