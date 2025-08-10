<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'kode' => '00001',
                'nama' => "Bulpen",
                'harga_beli' => 100000,
                'laba'=>10,
                'supplier'=>"Tokopaedi",
                'jenis'=>"ATK"
            ],
            [
                'kode' => '00002',
                'nama' => "Pensil",
                'harga_beli' => 100000,
                'laba'=>10,
                'supplier'=>"Tokopaedi",
                'jenis'=>"ATK"
            ],
            [
                'kode' => '00003',
                'nama' => "Bodrex",
                'harga_beli' => 10000,
                'laba'=>10,
                'supplier'=>"Tokopaedi",
                'jenis'=>"Obat"
            ],
        ];

        DB::table('master_items')->insert(
            $items
        );
    }
}
