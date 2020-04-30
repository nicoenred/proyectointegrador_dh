<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Excursion;
use App\Categoria;

class ExcursionController extends Controller
{
    public function directory(){
      $excursion=Excursion::orderby('valor','desc')->paginate(4);
      return view('excursiones', compact('excursion'));
    }

    public function show($id){
      $excursion=Excursion::find($id);
      return view('excursion', compact('excursion'));
    }

    public function crear(){
      $excursion=Excursion::all();
      $categorias=Categoria::all();
      return view('excursionadd',compact('excursion', 'categorias'));
    }

    public function almacenar(Request $form){
      $rule=[
        'name'=>'string | min:2 | required ',
        'sub'=>'string',
        'valor'=>'numeric | nullable',
        'descripcion'=>'string',
        'categoria_id'=>'nullable'
      ];

      $messajes=[
        'string'=>'El campo :attribute debe ser de texto',
        'min'=>'El :attribute debe ser de al menos :min caracteres',
        'numeric'=>'El campo :attribute debe ser numérico'
      ];

      $this->validate($form, $rule, $messajes);

      $nuevaExcursion=new Excursion();
      $nuevaExcursion->name=$form['name'];
      $nuevaExcursion->sub=$form['sub'];
      $nuevaExcursion->descripcion=$form['descripcion'];
      $nuevaExcursion->valor=$form['valor'];
      $nuevaExcursion->imagen="null";
      $nuevaExcursion->categoria_id=$form['categoria'];
      $nuevaExcursion->save();
      return redirect('excursiones');
    }



}
