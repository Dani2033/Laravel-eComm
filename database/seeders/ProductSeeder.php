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
                'gallery'=>'https://consumer.huawei.com/content/dam/huawei-cbg-site/common/mkt/pdp/phones/nova9/imgs/huawei-nova-9-product-highlights-3.webp'
            ],
            [
                'name'=>'Old tv',
                'price'=>'50',
                'category'=>'tv',
                'description'=>'This a sample description of an old tv',
                'gallery'=>'https://p.turbosquid.com/ts-thumb/8Q/BNZPkf/nr/_r1_/jpg/1615402953/600x600/fit_q87/809fcce40c2617ac1020dfa1b665865410192f71/_r1_.jpg'
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
