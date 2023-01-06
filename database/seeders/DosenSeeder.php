<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DosenModel;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $in['nama_dosen'] = 'Pak Andri';
        $in['nip'] = '33.34.12';
        $in['foto_dosen'] = 'Foto';
        DosenModel::create($in);
    }
}
