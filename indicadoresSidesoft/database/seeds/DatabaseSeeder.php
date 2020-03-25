<?php

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
        // $this->call(UsersTableSeeder::class);
     /*  $this->call(ss_area::class);
        $this->call(ss_user::class);
        $this->call(ss_year::class);
   
        $this->call(ss_user::class);  */
        $this->call(ss_backlog::class);  // NECESARIO PRIMERA VEZ  
        $this->call(ss_year::class);// NECESARIO PRIMERA VEZ  
        $this->call(ss_area::class);// NECESARIO PRIMERA VEZ 
        $this->call(ss_politics::class);// NECESARIO PRIMERA VEZ 
         
      //  $this->call(ss_backlog_year::class);

        
}

}
