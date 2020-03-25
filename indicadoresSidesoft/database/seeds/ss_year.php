<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ss_year extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ss_year')->insert([
            'name' => 2020,
            'value' => 2020,
            'isactive' => true,
            'description' => 'Año del 2020',
        ]);
    }
}
