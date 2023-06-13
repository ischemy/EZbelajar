<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\BankSoal;
use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BankSoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bank_soal = [
            [
                'title' => 'Matematika Diskrit Relasi dan Fungsi',
                'description' =>'Relasi dapat diartikan sebagai hubungan. Hubungan yang dimaksud yaitu hubungan antara daerah asal (domain) dan daerah kawan (kodomain).',
                'filePath' => 'public/assets/BankSoal/1.pdf',
                'user_id'=>1,
                'is_active'=>1,
                'created_at'=>date('Y-m-d h:i:s'),
                'updated_at'=>date('Y-m-d h:i:s'),
            ],
            [
                'title' => 'Computer Network',
                'description' =>'Jaringan komputer adalah sebuah sistem yang terdiri dari dua atau lebih komputer yang saling terhubung satu sama lain melalui media transmisi dan media komunikasi sehingga dapat saling berbagi data aplikasi maupun berbagi perangkat keras komputer.',
                'filePath' => 'public/assets/BankSoal/2.pdf',
                'user_id'=>1,
                'is_active'=>1,
                'created_at'=>date('Y-m-d h:i:s'),
                'updated_at'=>date('Y-m-d h:i:s'),
            ],
            [
                'title' => 'Algoritma dan Pemrograman',
                'description' =>'Algoritma adalah langkah-langkah menyelesaikan masalah, sedangkan program adalah realisasi algoritma dalam bahasa pemrograman. Program ditulis dalam salah satu bahasa pemrograman dan kegiatan membuat program disebut pemrograman (programming).',
                'filePath' => 'public/assets/BankSoal/3.pdf',
                'user_id'=>1,
                'is_active'=>1,
                'created_at'=>date('Y-m-d h:i:s'),
                'updated_at'=>date('Y-m-d h:i:s'),
            ],
            [
                'title' => 'Database',
                'description' =>'Database adalah sekumpulan data atau informasi yang tersimpan secara sistematis. Basis data ini dibutuhkan ketika mengakses perangkat lunak.',
                'filePath' => 'public/assets/BankSoal/4.pdf',
                'user_id'=>1,
                'is_active'=>1,
                'created_at'=>date('Y-m-d h:i:s'),
                'updated_at'=>date('Y-m-d h:i:s'),
            ],
        ];

        foreach ($bank_soal as $key => $value )
        {
            BankSoal::create($value);
        }
    }
}
