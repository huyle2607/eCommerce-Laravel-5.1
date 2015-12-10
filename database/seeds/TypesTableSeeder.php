<?php

use Illuminate\Database\Seeder;
use App\Type;
class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->delete();

        Type::create(array(
        	'type_name' => 'Mobile phone'
        	));

        Type::create(array(
        	'type_name' => 'Desktop'
        	));

        Type::create(array(
        	'type_name' => 'Laptop'
        	));

        Type::create(array(
        	'type_name' => 'Camera'
        	));

        Type::create(array(
        	'type_name' => 'Television'
        	));
    }
}
