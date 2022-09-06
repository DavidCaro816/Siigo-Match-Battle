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
        $name = ['RONALDO', 'LIONEL MESSI', 'KARIM BENZEMA', 'BRUYNE', 'COMAN',
            'COURTOIS', 'JONG', 'DEMBÉLÉ', 'HAALAND'
            , 'KANTE', 'KIMMINCH', 'LAPORTE', 'LEWANDOSKY', 'DIAZ', 'MÁNE',
            'MBAPPE', 'MODRIC', 'NEUER', 'NEYMAR','RAMOS','RASHFORD','SALAH','STERLING','STEGEN','WALKER',''];
        $age = [''];
        $avg = [''];
        $speed = [''];
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
