<?php

namespace Database\Seeders;

use App\Models\Rol;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Rol::factory(5)->create();
        //DB::table('users')->delete();
        //$this->call(AnimalSeeder::class);

        DB::table('users')->delete();
        $this->call(UsersSeeder::class);
        User::factory(5)->create();

        //DB::table('revisiones')->delete();
        //$this->call(RevisionSeeder::class);
    }
}
