<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ss_backlog extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1 al 52
        for ($i=01; $i < 53; $i++) { 
            DB::table('ss_backlog')->insert([
                'name' => 'Backlog '.' '.$i,
                'value' => 1,
                'isactive' => true,
                'description' => 'Backlogs',
            ]); 
        } 
    }
}
