<?php

use Illuminate\Database\Seeder;
use App\Brand;
class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->delete();

         Brand::create(array(
         	'brand_name' => 'iPhone'
         	));

         Brand::create(array(
         	'brand_name' => 'SamSung'
         	));

         Brand::create(array(
         	'brand_name' => 'Sony'
         	));

         Brand::create(array(
         	'brand_name' => 'Oppo'
         	));

         Brand::create(array(
         	'brand_name' => 'Nokia'
         	));
    }
}
