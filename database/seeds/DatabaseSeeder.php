<?php

use App\User;
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
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // User::truncate();
        User::truncate();

        factory(User::class, 1)->create();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    
    }
}
