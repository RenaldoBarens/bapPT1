<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('mata_kuliah_renaldos')->insert([
            [
                'kode_matakuliah'=>'MK001',
                'nama_matakuliah'=>'Pemrograman Aplikasi Bisnis',
                'sks'=>4
            ],
            [
                'kode_matakuliah'=>'MK002',
                'nama_matakuliah'=>'Digital Marketing',
                'sks'=>3
            ],
            [
                'kode_matakuliah'=>'MK003',
                'nama_matakuliah'=>'Matematika',
                'sks'=>4
            ],
            [
                'kode_matakuliah'=>'MK004',
                'nama_matakuliah'=>'Manajemen Strategis',
                'sks'=>3
            ],
            [
                'kode_matakuliah'=>'MK005',
                'nama_matakuliah'=>'Agama Dunia',
                'sks'=>4
            ]
        ]);
    }
}
