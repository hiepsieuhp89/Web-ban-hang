<?php

use Illuminate\Database\Seeder;

class type_products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_products')->insert([
        	[
        		'name' => 'Điện thoại thông minh',
        		'description' => 'Một loại điện thoại với nhiều tính năng hỗ trợ tiên tiến,hiện đại về điện toán và kết nối ,và nó thông minh hơn hẳn so với những chiếc điện thoại thông thường. ',
        		'image' => 'https://bacdau.vn/wp-content/uploads/2020/04/UGZtxgGoYfvEW2ppteWkti-1200x675.jpg'
        	]
        	[	
        		'name' => 'Máy tính bảng',
        		'description' => 'Máy tính bảng là thiết bị giống như chiếc điện thoại thông minh cỡ lớn với màn hình lớn và có thể chạy các phần mềm ứng dụng. Máy tính bảng cũng giống như máy vi tính, nhưng thay vì điều khiển bằng chuột vi tính và bàn phím, quý vị điều khiển bằng cách chạm ngón tay vào các phần trên màn hình.',
        		'image' => 'https://fptshop.com.vn/uploads/images/tin-tuc/108875/Originals/ipad-pro-2020-01.jpg'
        	]
        ]);
    }
}
