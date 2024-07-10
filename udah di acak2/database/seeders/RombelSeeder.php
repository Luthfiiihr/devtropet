<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RombelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rombongan_belajars')->insert([
            [
                'id' => '001',
                'kode' => 'RB01',
                'thn_masuk' => '2021',
                'dosen_pa' => 'Budi Santoso',
            ],
            [
                'id' => '002',
                'kode' => 'RB02',
                'thn_masuk' => '2021',
                'dosen_pa' => 'Agas Randa',
            ],
            [
                'id' => '003',
                'kode' => 'RB03',
                'thn_masuk' => '2021',
                'dosen_pa' => 'Nurmayati',
            ],
            [
                'id' => '021',
                'kode' => 'RB21',
                'thn_masuk' => '2022',
                'dosen_pa' => 'Budi Santoso',
            ],
            [
                'id' => '022',
                'kode' => 'RB22',
                'thn_masuk' => '2022',
                'dosen_pa' => 'Agas Randa',
            ],
            [
                'id' => '023',
                'kode' => 'RB23',
                'thn_masuk' => '2022',
                'dosen_pa' => 'Nurmayati',
            ],
            [
                'id' => '031',
                'kode' => 'RB31',
                'thn_masuk' => '2023',
                'dosen_pa' => 'Budi Santoso',
            ],
            [
                'id' => '032',
                'kode' => 'RB32',
                'thn_masuk' => '2023',
                'dosen_pa' => 'Agas Randa',
            ],
            [
                'id' => '033',
                'kode' => 'RB33',
                'thn_masuk' => '2023',
                'dosen_pa' => 'Nurmayati',
            ],
        ]);
    }
}
