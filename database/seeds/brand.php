<?php

use Illuminate\Database\Seeder;

class brand extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brand')->insert([
        	[
        		'name' => 'samsung',
        		'image' => 'https://cdn.tgdd.vn/Brand/1/Samsung42-b_25.jpg',
        	],
        	[
        		'name' => 'apple',
        		'image' => 'https://cdn.tgdd.vn/Brand/1/iPhone-(Apple)42-b_16.jpg',
        	],
        	[
        		'name' => 'xiaomi',
        		'image' => 'https://cdn.tgdd.vn/Brand/1/Xiaomi42-b_45.jpg',
        	],
        	[
        		'name' => 'huawei',
        		'image' => 'https://cdn.tgdd.vn/Brand/1/Huawei42-b_30.jpg',
        	],
        	[
        		'name' => 'oppo',
        		'image' => 'https://cdn.tgdd.vn/Brand/1/OPPO42-b_9.png',
        	],
        ]);
    }
}
