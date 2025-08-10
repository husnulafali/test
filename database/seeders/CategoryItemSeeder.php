<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_items = [
            [
                'master_category_id' => 3,
                'master_item_id' => 1,
            ],
            [
                'master_category_id' => 3,
                'master_item_id' => 2,
            ],
            [
                'master_category_id' => 1,
                'master_item_id' => 3,
            ],
        ];

        DB::table('category_items')->insert(
            $category_items
        );
    }
}
