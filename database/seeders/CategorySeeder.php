<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'kode' => '00001',
                'nama' => "Obat",
            ],
            [
                'kode' => '00002',
                'nama' => "Alkes",
            ],
            [
                'kode' => '00003',
                'nama' => "ATK",
            ],
        ];

        DB::table('master_categories')->insert(
            $categories
        );
    }
}
