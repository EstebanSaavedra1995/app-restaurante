<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\Mesa;
use App\Models\Turno;
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
        
        //Menu::factory(50)->create();
        //Mesa::factory(25)->create();
        $this->turnos();

    }

    public function turnos()
    {
        $turno = new Turno();
        $turno->inicio = '19:00:00';
        $turno->fin = '21:00:00';
        $turno->save();


        $turno1 = new Turno();
        $turno1->inicio = '19:30:00';
        $turno1->fin = '21:30:00';
        $turno1->save();

        $turno = new Turno();
        $turno->inicio = '20:00:00';
        $turno->fin = '22:00:00';
        $turno->save();

        $turno = new Turno();
        $turno->inicio = '20:30:00';
        $turno->fin = '22:30:00';
        $turno->save();

        $turno = new Turno();
        $turno->inicio = '21:00:00';
        $turno->fin = '23:00:00';
        $turno->save();

        $turno = new Turno();
        $turno->inicio = '21:30:00';
        $turno->fin = '23:30:00';
        $turno->save();

        $turno = new Turno();
        $turno->inicio = '22:00:00';
        $turno->fin = '00:00:00';
        $turno->save();

        $turno = new Turno();
        $turno->inicio = '22:30:00';
        $turno->fin = '00:30:00';
        $turno->save();

        $turno = new Turno();
        $turno->inicio = '23:00:00';
        $turno->fin = '01:00:00';
        $turno->save();

        $turno = new Turno();
        $turno->inicio = '23:30:00';
        $turno->fin = '01:30:00';
        $turno->save();

        $turno = new Turno();
        $turno->inicio = '00:00:00';
        $turno->fin = '02:00:00';
        $turno->save();

    }
}
