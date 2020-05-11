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
          "imagenPerfil"=>"default.png",
          "email" => "admin@entrediagonales.com",
          "password" => "entrediagonales2020"
        ]
      );
      DB::table("users")->insert(
        [
          "name" => "Usuario",
          "surname" => "Comprador",
          "username" => "user",
          "telephone" => 221221221,
          "rol" => "null",
          "imagenPerfil"=>"default.png",
          "email" => "user@entrediagonales.com",
          "password" => "entrediagonales2020"
        ]
      );
    }
}
