<?php

namespace Database\Seeders;

use App\Models\siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class XII_PH_2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelas = [
            [
                'nisn' => 123123123,
                'nama' => 'Maulana Zidan E. S.',
                'kelas_id' => 4,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Vicky Ambarwati',
                'kelas_id' => 4,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'perempuan',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Nathania',
                'kelas_id' => 4,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'perempuan',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Nabilah Fauziyah N',
                'kelas_id' => 4,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'perempuan',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Natasha Aurellya Sisya. A',
                'kelas_id' => 4,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'perempuan',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Mohammad Ferdy F.',
                'kelas_id' => 4,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
            ],
        ];

        siswa::insert($kelas);
    }
}
