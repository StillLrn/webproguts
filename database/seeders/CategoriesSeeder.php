<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories') -> insert(
            [
                'category_id' => 'CA001',
                'category_name' => 'Romance'
            ]);
        DB::table('categories') -> insert(
            [
                'category_id' => 'CA002',
                'category_name' => 'Action'
            ]);
        DB::table('categories') -> insert(
            [
                'category_id' => 'CA003',
                'category_name' => 'School'
            ]);
        DB::table('categories') -> insert(
            [
                'category_id' => 'CA004',
                'category_name' => 'Sport'
            ]);
        DB::table('categories') -> insert(
            [
                'category_id' => 'CA005',
                'category_name' => 'Horror'
            ]);
    }
}
