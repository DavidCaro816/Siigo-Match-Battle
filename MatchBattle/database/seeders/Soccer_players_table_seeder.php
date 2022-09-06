<?php

namespace Database\Seeders;

use App\Models\Soccer_player;
use Illuminate\Database\Seeder;

class Soccer_players_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $array = ['RONALDO', 'MESSI', 'BENZEMA', 'BRUYNE', 'COMAN',
            'COURTOIS', 'JONG', 'DEMBÉLÉ', 'HAALAND'
            , 'KANTE', 'KIMMINCH', 'LAPORTE', 'LEWANDOSKY', 'DIAZ', 'MÁNE',
            'MBAPPE', 'MODRIC', 'NEUER', 'NEYMAR','RAMOS','RASHFORD','SALAH','STERLING',
            'STEGEN','VIDAL','WALKER','SANCHÉZ','IBRAHIMOVICH','DAVIES','CUADRADO','GRIEZMANN','SANÉ'];
        $age = [37,35,34, 31, 26, 30, 25, 25, 22, 31, 27, 28, 34, 25, 30, 23, 36, 36, 30, 36, 24, 30, 27, 30, 35, 32,
            33, 40, 21, 34, 31, 26];
        $avg = [''];
        $speed = [86,80,74,77,82,65,75,83,89,90,82,80,75,85,85,90,75,65,80,78,82,81,83,84,62,74,79,75,70,80,79,80,86];
        $endurance = [''];
        $skill = [''];
        $defending = [''];
        $strong = [''];
        $img = [''];
        $position_id = [''];

        $soccer_player = Soccer_player::create([

            'name' => '',
            'age' => '',
            'avg' => '',
            'speed' => '',
            'endurance' => '',
            'skill' => '',
            'defending' => '',
            'strong' => '',
            'shoot' => '',
            'img' => '',
            'position_id' => '',
        ]);
    }
}
