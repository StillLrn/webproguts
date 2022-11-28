<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublishersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publishers') -> insert(
            [
                'publisher_id' => 'PB001',
                'publisher_name' => 'Grasindo',
                'address' => 'Jalan Moekmin Raeda, No.58, Sumatera Barat',
                'phone' => '089544567781',
                'email' => 'grasindo@gmail.com',
                'publisher_image' => 'https://octacintabuku.files.wordpress.com/2013/04/grasindologo.jpg'
            ]);
        DB::table('publishers') -> insert(
            [
                'publisher_id' => 'PB002',
                'publisher_name' => 'Erlangga',
                'address' => 'Jalan Peak Avenues, No.2B, Jakarta Utara',
                'phone' => '082175663421',
                'email' => 'er.gans@erlangga.com',
                'publisher_image' => 'http://emir.co.id/wp-content/uploads/2016/11/logo-erlangga-png.png'
            ]);
        DB::table('publishers') -> insert(
            [
                'publisher_id' => 'PB003',
                'publisher_name' => 'Gradien Mediatama',
                'address' => 'Jalan Kijang Ghala, No.32M, Bali',
                'phone' => '08966788432',
                'email' => 'gradien_mediatama@gmail.com',
                'publisher_image' => 'https://pbs.twimg.com/profile_images/1267705812446830596/wxjbyPij_400x400.jpg'
            ]);
        DB::table('publishers') -> insert(
            [
                'publisher_id' => 'PB004',
                'publisher_name' => 'Gramedia',
                'address' => 'Jalan Pegangsaan Senin, No.8, Surakarta',
                'phone' => '081233453321',
                'email' => 'gramedia@kompas.com',
                'publisher_image' => 'https://pbs.twimg.com/media/FVSdDwtUsAY-JP3.jpg'
            ]);
        DB::table('publishers') -> insert(
            [
                'publisher_id' => 'PB005',
                'publisher_name' => 'Falcon Publishing',
                'address' => 'Jalan Gondala Restu, No.112C, Jawa Timur',
                'phone' => '082134564410',
                'email' => 'falcon.pub@gmail.com',
                'publisher_image' => 'https://cf.shopee.co.id/file/487a4a323ab41ef883d15902b7d5842d'
            ]);
    }
}
