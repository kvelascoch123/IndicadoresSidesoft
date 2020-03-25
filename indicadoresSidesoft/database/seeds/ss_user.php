<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ss_user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuarios = array("Andres Montenegro", "Luis Mosquera", "Fabio Paredes");
        foreach ($usuarios as &$nombre) {
            DB::table('ss_user')->insert([
                'name' =>  $nombre,
                'email' => $nombre.'email.com',
                'tax_id' => 1,

                //foreings
                'ss_area_id' =>  1,
                'value' =>  3,
                'isactive' => true,
                'description' => 'usuario',
            ]); 
        }

    }
}
