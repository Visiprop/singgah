<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        // $this->call(CartTableSeeder::class);
        $this->call(ProductTableSeeder::class);        
        $this->call(SliderTableSeeder::class);
        $this->call(NotifTypeTableSeeder::class);        
    }
}
