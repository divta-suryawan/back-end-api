<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i=0; $i < 20; $i++) {
            $data = [
                'kategori' => $faker->name,
                'keterangan' => $faker->text,
            ];
            Kategori::create($data);
        }
       
       
    }
}
