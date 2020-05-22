<?php

use Faker\Provider\Lorem;
use Illuminate\Database\Seeder;

class Excursion extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    DB::table("excursion")->insert(
      [
        "name" => "Conocé La Plata",
        "sub" => 'Un paseo por la ciudad de las diagonales',
        "descripcion" => 'Es una ciudad planificada conocida por sus avenidas diagonales características. En su centro, la extensión abierta de la Plaza Moreno está coronada por la gran Catedral de La Plata, de estilo neogótico. También en la plaza está el Palacio Municipal, construido en estilo renacentista alemán.',
        "valor" => 200,
        "imagen"=>"01.jpg",
      ]
    );
    DB::table("excursion")->insert(
      [
        "name" => "La República de los Niños",
        "sub" => 'Conocé la ciudad pensada para los más chicos',
        "descripcion" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam facere unde quis aliquid tempore non! Deleniti labore eveniet quos itaque a id ex perferendis, hic porro! Asperiores unde quis non?',
        "valor" => 300,
        "imagen"=>"02.jpg",
      ]
    );
    DB::table("excursion")->insert(
      [
        "name" => "Noche entre digonales",
        "sub" => 'Conocé la primera ciudad con luz eléctrica',
        "descripcion" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam facere unde quis aliquid tempore non! Deleniti labore eveniet quos itaque a id ex perferendis, hic porro! Asperiores unde quis non?',
        "valor" => 1000,
        "imagen"=>"04.jpg",
      ]
    );
    DB::table("excursion")->insert(
      [
        "name" => "La Plata desde el aire",
        "sub" => 'Un paseo inolvidable desde el aire',
        "descripcion" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam facere unde quis aliquid tempore non! Deleniti labore eveniet quos itaque a id ex perferendis, hic porro! Asperiores unde quis non?',
        "valor" => 1500,
        "imagen"=>"03.jpg",
      ]
    );
    DB::table("excursion")->insert(
        [
          "name" => "Conocé La Plata",
          "sub" => 'Un paseo por la ciudad de las diagonales',
          "descripcion" => 'Es una ciudad planificada conocida por sus avenidas diagonales características. En su centro, la extensión abierta de la Plaza Moreno está coronada por la gran Catedral de La Plata, de estilo neogótico. También en la plaza está el Palacio Municipal, construido en estilo renacentista alemán.',
          "valor" => 200,
          "imagen"=>"01.jpg",
        ]
      );
      DB::table("excursion")->insert(
        [
          "name" => "La República de los Niños",
          "sub" => 'Conocé la ciudad pensada para los más chicos',
          "descripcion" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam facere unde quis aliquid tempore non! Deleniti labore eveniet quos itaque a id ex perferendis, hic porro! Asperiores unde quis non?',
          "valor" => 300,
          "imagen"=>"02.jpg",
        ]
      );
      DB::table("excursion")->insert(
        [
          "name" => "Noche entre digonales",
          "sub" => 'Conocé la primera ciudad con luz eléctrica',
          "descripcion" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam facere unde quis aliquid tempore non! Deleniti labore eveniet quos itaque a id ex perferendis, hic porro! Asperiores unde quis non?',
          "valor" => 1000,
          "imagen"=>"04.jpg",
        ]
      );
      DB::table("excursion")->insert(
        [
          "name" => "La Plata desde el aire",
          "sub" => 'Un paseo inolvidable desde el aire',
          "descripcion" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam facere unde quis aliquid tempore non! Deleniti labore eveniet quos itaque a id ex perferendis, hic porro! Asperiores unde quis non?',
          "valor" => 1500,
          "imagen"=>"03.jpg",
        ]
      );
      DB::table("excursion")->insert(
        [
          "name" => "Conocé La Plata",
          "sub" => 'Un paseo por la ciudad de las diagonales',
          "descripcion" => 'Es una ciudad planificada conocida por sus avenidas diagonales características. En su centro, la extensión abierta de la Plaza Moreno está coronada por la gran Catedral de La Plata, de estilo neogótico. También en la plaza está el Palacio Municipal, construido en estilo renacentista alemán.',
          "valor" => 200,
          "imagen"=>"01.jpg",
        ]
      );
      DB::table("excursion")->insert(
        [
          "name" => "La República de los Niños",
          "sub" => 'Conocé la ciudad pensada para los más chicos',
          "descripcion" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam facere unde quis aliquid tempore non! Deleniti labore eveniet quos itaque a id ex perferendis, hic porro! Asperiores unde quis non?',
          "valor" => 300,
          "imagen"=>"02.jpg",
        ]
      );
      DB::table("excursion")->insert(
        [
          "name" => "Noche entre digonales",
          "sub" => 'Conocé la primera ciudad con luz eléctrica',
          "descripcion" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam facere unde quis aliquid tempore non! Deleniti labore eveniet quos itaque a id ex perferendis, hic porro! Asperiores unde quis non?',
          "valor" => 1000,
          "imagen"=>"04.jpg",
        ]
      );
      DB::table("excursion")->insert(
        [
          "name" => "La Plata desde el aire",
          "sub" => 'Un paseo inolvidable desde el aire',
          "descripcion" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam facere unde quis aliquid tempore non! Deleniti labore eveniet quos itaque a id ex perferendis, hic porro! Asperiores unde quis non?',
          "valor" => 1500,
          "imagen"=>"03.jpg",
        ]
      );
  }
}
