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
        $this->call(Categoria::class);
        $this->call(Excursion::class);
        $this->call(User::class);
    }
}
