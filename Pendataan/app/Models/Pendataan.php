<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendataan extends Model
{
    protected $table = 'pendataans';
    protected $fillable = ['name', 'product'] ;
}
