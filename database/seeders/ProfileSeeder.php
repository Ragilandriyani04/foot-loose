<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    public function run()
    {
        Profile::create([
            'name' => 'Ragil Andriyani',
            'nim' => 'SSI202303489',
            'class' => 'C3.4 Sistem Informasi',
            'univ' => 'STMIK Widya Utama 2023/2024',
            'email' => 'ragilandriyani6@gmail.com',
            'photo' => 'https://pbs.twimg.com/media/FjU2lkcWYAgNG6d.jpg',
        ]);
    }
}
