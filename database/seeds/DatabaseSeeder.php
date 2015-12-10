<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UserTableSeeder::class);
        $this->command->info('Users table seeded!');
        $this->call(TypesTableSeeder::class);
        $this->command->info('Types table seeded!');
        $this->call(BrandsTableSeeder::class);
        $this->command->info('Brands table seeded!');

        Model::reguard();
    }
}
