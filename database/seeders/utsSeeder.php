<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class utsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('program_studis')->insert([
            [   //1
                'Nama'=>'Sistem Informasi',
                'Deskripsi'=>'Belajar Sistem Informasi'
            ],
            [   //2
                'Nama'=>'Teknik Informasi',
                'Deskripsi'=>'Belajar Teknik Informasi'
            ],
            [   //3
                'Nama'=>'Hospitality',
                'Deskripsi'=>'Belajar Hospitality'
            ],
            [   //4
                'Nama'=>'Akuntansi',
                'Deskripsi'=>'Belajar Akuntansi'
            ],
            [   //5
                'Nama'=>'Hukum',
                'Deskripsi'=>'Belajar Hukum'
            ]
        ]);

        DB::table('pembayarans')->insert([
            [   //1
                'studentID'=>'03081190015',
                'Amount'=> 3500,
                'Payment_date'=>'2023-01-12',
                'Payment_method'=>'Cash'
            ],
            [   //2
                'studentID'=>'03081190016',
                'Amount'=> 5000,
                'Payment_date'=>'2023-02-15',
                'Payment_method'=>'Debit'
            ],
            [   //3
                'studentID'=>'03081190017',
                'Amount'=> 3500,
                'Payment_date'=>'2023-08-06',
                'Payment_method'=>'Cash'
            ],
            [   //4
                'studentID'=>'03081190018',
                'Amount'=> 2000,
                'Payment_date'=>'2023-04-21',
                'Payment_method'=>'Kredit'
            ],
            [   //5
                'studentID'=>'03081190019',
                'Amount'=> 1000,
                'Payment_date'=>'2023-11-22',
                'Payment_method'=>'Kredit'
            ]
        ]);

        DB::table('jadwal_kuliahs')->insert([
            [   //1
                'Kode_matakuliah'=>'MK001',
                'Kode_term'=>'TM001',
                'Kode_dosen'=>'DN001',
                'day'=>'Senin',
                'Jam_mulai'=>'17:30:00',
                'Jam_selesai'=>'21:00:00',
                'Ruangan'=>'AD101'
            ],
            [   //2
                'Kode_matakuliah'=>'MK002',
                'Kode_term'=>'TM001',
                'Kode_dosen'=>'DN003',
                'day'=>'Selasa',
                'Jam_mulai'=>'17:30:00',
                'Jam_selesai'=>'21:00:00',
                'Ruangan'=>'AD103'
            ],
            [   //3
                'Kode_matakuliah'=>'MK003',
                'Kode_term'=>'TM002',
                'Kode_dosen'=>'DN002',
                'day'=>'Rabu',
                'Jam_mulai'=>'09:00:00',
                'Jam_selesai'=>'12:30:00',
                'Ruangan'=>'AD105'
            ],
            [   //4
                'Kode_matakuliah'=>'MK004',
                'Kode_term'=>'TM001',
                'Kode_dosen'=>'DN006',
                'day'=>'Kamis',
                'Jam_mulai'=>'17:30:00',
                'Jam_selesai'=>'20:00:00',
                'Ruangan'=>'LP505'
            ],
            [   //5
                'Kode_matakuliah'=>'MK005',
                'Kode_term'=>'TM004',
                'Kode_dosen'=>'DN002',
                'day'=>'Jumat',
                'Jam_mulai'=>'09:00:00',
                'Jam_selesai'=>'11:50:00',
                'Ruangan'=>'AD109'
            ]
        ]);

        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 15; $i++){

            // insert data ke table users menggunakan
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $faker->password,
            ]);
        }



    }
}
