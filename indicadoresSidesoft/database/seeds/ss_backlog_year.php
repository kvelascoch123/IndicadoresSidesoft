<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ss_backlog_year extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usersRegistrados = array(1 =>80 ,2=>88 ,3=>23);
        
        foreach ($usersRegistrados as $id => $promedio) {
                DB::table('ss_backlog_year')->insert([
                    'ss_backlog_id' =>  1,
                    'ss_year_id' => 2,// 1 = 2019       2 = 2020
                    'ss_user_id' => $id,
                    'qualification' => $promedio,
                    'isactive' => true,
                    'description' => 'Promedios backlog 2019',
    
                ]); 
        
        }
 
        }
    
}
