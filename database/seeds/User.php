<?php

use Illuminate\Database\Seeder;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table("users")->insert(
        [
          "name" => "Usuario",
          "surname" => "Administrador",
          "username" => "admin",
          "telephone" => 221221221,
          "rol" => "admin",
          "email" => "admin@entrediagonales.com",
          "password" => "entrediagonales2020"
        ]
      );
    }
}
