<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dosens')->insert([
            [
                'nidn' => 'DN01',
                'nama' => 'Budi Santoso',
                'tmp_lahir' => 'Jakarta',
                'tgl_lahir' => '1990-01-01',
                'jk' => 'L',
                'prodi_id' => '1',
            ],
            [
                'nidn' => 'DN02',
                'nama' => 'Agas Randa',
                'tmp_lahir' => 'Malang',
                'tgl_lahir' => '1990-01-01',
                'jk' => 'L',
                'prodi_id' => '2',
            ],
            [
                'nidn' => 'DN03',
                'nama' => 'Nurmayati',
                'tmp_lahir' => 'Jakarta',
                'tgl_lahir' => '1990-01-01',
                'jk' => 'P',
                'prodi_id' => '3',
            ],
        ]);
    }
}
