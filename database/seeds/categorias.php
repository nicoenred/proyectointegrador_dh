<?php

use Illuminate\Database\Seeder;

class categorias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('categoria')->insert([
        "name" => "Centro",
      ]);
      DB::table('categoria')->insert([
        "name" => "Zona Norte",
      ]);
      DB::table('categoria')->insert([
        "name" => "Zona Oeste",
      ]);
      DB::table('categoria')->insert([
        "name" => "Bosque",
      ]);
      DB::table('categoria')->insert([
        "name" => "Corredor Gastronomico",
      ]);

    }
}
