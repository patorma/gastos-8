<?php

namespace Database\Seeders;

use App\Models\Gasto;
use App\Models\Local;
use App\Models\Note;
use App\Models\TipoGasto;
use App\Models\User;
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
        User::factory(5)->create();
        Note::factory(30)->create();
        TipoGasto::factory(3)->create();
        Local::factory(15)->create();
        Gasto::factory(30)->create();
        
    }
}
