<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book_categories') -> insert(
            [
                'book_category_id' => 'BC001',
                'book_id' => 'BK002',
                'category_id' => 'CA001'
            ]);
        DB::table('book_categories') -> insert(    
            [
                'book_category_id' => 'BC002',
                'book_id' => 'BK001',
                'category_id' => 'CA003'
            ]);
        DB::table('book_categories') -> insert(    
            [
                'book_category_id' => 'BC003',
                'book_id' => 'BK002',
                'category_id' => 'CA002'
            ]);
        DB::table('book_categories') -> insert(    
            [
                'book_category_id' => 'BC004',
                'book_id' => 'BK003',
                'category_id' => 'CA002'
            ]);
        DB::table('book_categories') -> insert(    
            [
                'book_category_id' => 'BC005',
                'book_id' => 'BK003',
                'category_id' => 'CA004'
            ]);
        DB::table('book_categories') -> insert(    
            [
                'book_category_id' => 'BC006',
                'book_id' => 'BK004',
                'category_id' => 'CA005'
            ]);
        DB::table('book_categories') -> insert(    
            [
                'book_category_id' => 'BC007',
                'book_id' => 'BK005',
                'category_id' => 'CA001'
            ]);
        DB::table('book_categories') -> insert(    
            [
                'book_category_id' => 'BC008',
                'book_id' => 'BK006',
                'category_id' => 'CA005'
            ]);
        DB::table('book_categories') -> insert(    
            [
                'book_category_id' => 'BC009',
                'book_id' => 'BK007',
                'category_id' => 'CA003'
            ]);
        DB::table('book_categories') -> insert(    
            [
                'book_category_id' => 'BC010',
                'book_id' => 'BK007',
                'category_id' => 'CA004'
            ]);
        DB::table('book_categories') -> insert(    
            [
                'book_category_id' => 'BC011',
                'book_id' => 'BK008',
                'category_id' => 'CA005'
            ]);
        DB::table('book_categories') -> insert(    
            [
                'book_category_id' => 'BC012',
                'book_id' => 'BK009',
                'category_id' => 'CA005'
            ]);
        DB::table('book_categories') -> insert(    
            [
                'book_category_id' => 'BC013',
                'book_id' => 'BK010',
                'category_id' => 'CA005'
            ]);
        DB::table('book_categories') -> insert(    
            [
                'book_category_id' => 'BC014',
                'book_id' => 'BK011',
                'category_id' => 'CA005'
            ]);
        DB::table('book_categories') -> insert(    
            [
                'book_category_id' => 'BC015',
                'book_id' => 'BK012',
                'category_id' => 'CA004'
            ]);
        DB::table('book_categories') -> insert(    
            [
                'book_category_id' => 'BC016',
                'book_id' => 'BK013',
                'category_id' => 'CA004'
            ]);
        DB::table('book_categories') -> insert(    
            [
                'book_category_id' => 'BC017',
                'book_id' => 'BK014',
                'category_id' => 'CA001'
            ]);
        DB::table('book_categories') -> insert(    
            [
                'book_category_id' => 'BC018',
                'book_id' => 'BK015',
                'category_id' => 'CA001'
            ]);
        DB::table('book_categories') -> insert(    
            [
                'book_category_id' => 'BC019',
                'book_id' => 'BK016',
                'category_id' => 'CA001'
            ]);
        DB::table('book_categories') -> insert(    
            [
                'book_category_id' => 'BC020',
                'book_id' => 'BK017',
                'category_id' => 'CA002'
            ]);
        DB::table('book_categories') -> insert(    
            [
                'book_category_id' => 'BC021',
                'book_id' => 'BK018',
                'category_id' => 'CA002'
            ]);
        DB::table('book_categories') -> insert(    
            [
                'book_category_id' => 'BC022',
                'book_id' => 'BK009',
                'category_id' => 'CA002'
            ]);
        DB::table('book_categories') -> insert(    
            [
                'book_category_id' => 'BC023',
                'book_id' => 'BK015',
                'category_id' => 'CA003'
            ]);
    }
}
