<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            [
            'nim' => '0110223087',
            'nama' => 'Muhammad Yanwar',
            'tmp_lahir' => 'Bogor',
            'tgl_lahir' => '2005-09-18',
            'ipk' => '3.89',
            'prodi_id' => '1',
            'rombel_id' => '3',
            ],
            [
                'nim' => '0110223088',
                'nama' => 'Andre',
                'tmp_lahir' => 'Jakarta',
                'tgl_lahir' => '2005-07-07',
                'ipk' => '3.5',
                'prodi_id' => '2',
                'rombel_id' => '2',
            ],
            [
                'nim' => '0110223089',
                'nama' => 'Muhammad Putu Gede',
                'tmp_lahir' => 'Bali',
                'tgl_lahir' => '2005-01-18',
                'ipk' => '4.00',
                'prodi_id' => '3',
                'rombel_id' => '1',
            ],
        ]);
    }
}
