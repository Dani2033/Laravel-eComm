<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'YZ mobile',
                'price'=>'450',
                'category'=>'mobile',
                'description'=>'This a sample description of an item YZ',
                'gallery'=>'https://sc04.alicdn.com/kf/Hcff80174591c4848bbd764dd1fc18b0aT.jpg'
            ],
            [
                'name'=>'Old tv',
                'price'=>'50',
                'category'=>'tv',
                'description'=>'This a sample description of an old tv',
                'gallery'=>'https://static.turbosquid.com/Preview/2019/05/07__14_24_00/Retro_TV_Showa_Dirt_00.jpgDD92FD2F-8E7F-4427-8210-CCCEA527746DLarge.jpg'
            ],
            [
                'name'=>'Cristal tv',
                'price'=>'666',
                'category'=>'tv',
                'description'=>'This a sample description of a modern tv',
                'gallery'=>'https://images.samsung.com/is/image/samsung/p6pim/es/ue43au7105kxxc/gallery/es-uhd-4k-tv-ue43au7105kxxc-front-gray-417880096?$720_576_PNG$'
            ],
            [
                'name'=>'Huge fridge',
                'price'=>'888',
                'category'=>'fridge',
                'description'=>'This a sample description of a fridge',
                'gallery'=>'https://www.tradeinn.com/f/13810/138106126/samsung-rs65r5441m9-american-fridge.jpg'
            ],
        ]);
    }
}
