<?php

namespace Database\Seeders;

use App\Models\Moderador;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $u = new User();

        $u->nombre_usuario = "Juanjo";
        $u->email = "juanjose.levaelvira@iesmiguelherrero.com";
        $u->password = bcrypt("hola");
        $u->rol = "usuario";

        $u2 = new User();

        $u2->nombre_usuario = "admin";
        $u2->email = "admin@iesmiguelherrero.com";
        $u2->password = bcrypt("adios");
        $u2->rol = "moderador";

        $u->save();
        $u2->save();

        $u->moderadores()->attach([
            Moderador::all()->random()->id
        ]);

        $u2->moderadores()->attach([
            Moderador::all()->random()->id
        ]);

        $this->command->info("Se han añadido dos usuarios predeterminados y 5 aleatorios");
    }
}
