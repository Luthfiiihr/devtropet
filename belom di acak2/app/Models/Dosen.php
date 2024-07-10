<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $table = 'dosens';

    // Kolom yang dapat diisi
    protected $fillable = [
        'nidn',
        'nama',
        'tmp_lahir',
        'tgl_lahir',
        'jk',
        'prodi_id',
    ];
    public $timestamps = false;
}
