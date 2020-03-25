<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ss_area extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $areas = array("Consultoria", "Tecnica", "Soporte");
        foreach ($areas as &$nombre) {
            DB::table('ss_area')->insert([
                'name' => $nombre,
                'value' =>  10,
                'isactive' => true,
                'description' => 'Area de '.' '.$nombre,
            ]); 
        }
    }
}
