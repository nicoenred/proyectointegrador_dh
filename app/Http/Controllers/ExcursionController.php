<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Excursion;

class ExcursionController extends Controller
{
    public function directory(){
      $excursion=Excursion::orderby('precio','desc')->paginate(4);
      return view('excursiones', compact('excursion'));
    }

    public function show($id){
      $excursion=Excursion::find($id);
      return view('excursion', compact('excursion'));
    }

    public function crear(){
      $excursion=Excursion::all();
      return view('excursionadd',compact('excursion'));
    }

    public function almacenar(Request $form){
      $rule=[
        'nombre'=>'string | min:2 | required ',
        'subtitulo'=>'string | min:140',
        'precio'=>'numeric | nullable',
        'descripcion'=>'string | min:140',
        'categoria'=>'nullable'
      ];

      $messajes=[
        'string'=>'El campo :attribute debe ser de texto',
        'min'=>'El :attribute debe ser de al menos :min caracteres',
        'numeric'=>'El campo :attribute debe ser numérico'
      ];

      $this->validate($form, $rule, $messajes);

      $nuevaExcursion=new Excursion();
      $nuevaExcursion->titulo=$form['nombre'];
      $nuevaExcursion->subtitulo=$form['subtitulo'];
      $nuevaExcursion->precio=$form['precio'];
      $nuevaExcursion->descripcion=$form['descripcion'];
      $nuevaExcursion->tag=$form['categoria'];
      $nuevaExcursion->imagen_principal=null;
      $nuevaExcursion->save();
      return redirect('excursiones');
    }

    

}
