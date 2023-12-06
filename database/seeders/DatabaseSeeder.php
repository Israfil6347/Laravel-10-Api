<?php

namespace Database\Seeders;
use Database\Seeders\MenuSeeder;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {

        $this->call([
            MenuSeeder::class
        ]);
       
    }
}
