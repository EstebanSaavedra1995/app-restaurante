<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\Mesa;
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
        
        Menu::factory(50)->create();
        Mesa::factory(25)->create();

    }
}
