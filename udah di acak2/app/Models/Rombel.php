<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rombel extends Model
{
    use HasFactory;
    protected $table = 'rombongan_belajars';

    // Kolom yang dapat diisi
    protected $fillable = [
        'id',
        'kode',
        'thn_masuk',
        'dosen_pa',
    ];
    public $timestamps = false;

}
