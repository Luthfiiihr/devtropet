<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('prodis')->insert([
            [
                'id' => '1',
                'kode' => '01',
                'nama' => 'Teknik Informatika',
            ],
            [
                'id' => '2',
                'kode' => '02',
                'nama' => 'Sistem Informasi',
            ],
            [
                'id' => '3',
                'kode' => '03',
                'nama' => 'Bisnis Digital',
            ],
        ]);
    }
}
