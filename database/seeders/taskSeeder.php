<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class taskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('matakuliahs')->insert([
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

        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 50; $i++){

            // insert data ke table pegawai menggunakan
            DB::table('mahasiswas')->insert([
                'studentID' => '03000811' & $i,
                'nama' => $faker->name,
                'tahunMasuk' => '2021',
                'jurusan' => $faker->address()
            ]);
        }

        DB::table('khs')->insert([
            ['kodeKhs'=>'KHS001',
             'mahasiswa'=>'Andi',
             'keterangan'=>'2021',
             'keteranganSingkat'=>'2021',
             'term'=>'2021'
            ],
            ['kodeKhs'=>'KHS002',
             'mahasiswa'=>'Budi',
             'keterangan'=>'2022',
             'keteranganSingkat'=>'2022',
             'term'=>'2022'
            ],
            ['kodeKhs'=>'KHS003',
             'mahasiswa'=>'Cedi',
             'keterangan'=>'2023',
             'keteranganSingkat'=>'2023',
             'term'=>'2023'
             ]
        ]);

        DB::table('khs_details')->insert([
            ['kodeKhs'=>'KHS001',
             'kodeKhsDetail'=>'DET001',
             'mataKuliah'=>'BAP',
             'nilai'=>'100',
            ],
            ['kodeKhs'=>'KHS002',
             'kodeKhsDetail'=>'DET002',
             'mataKuliah'=>'Agama',
             'nilai'=>'80'
            ],
            ['kodeKhs'=>'KHS003',
             'kodeKhsDetail'=>'DET003',
             'mataKuliah'=>'Mate',
             'nilai'=>'95'
            ]
        ]);
        


    }
}
