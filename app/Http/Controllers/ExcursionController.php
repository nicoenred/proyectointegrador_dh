<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Excursion;
use App\Categoria;
use App\User;

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

      $ruta=$form->file("imagen")->store('public/excursiones');
      $imagen=basename($ruta);

      $nuevaExcursion=new Excursion();
      $nuevaExcursion->name=$form['name'];
      $nuevaExcursion->sub=$form['sub'];
      $nuevaExcursion->descripcion=$form['descripcion'];
      $nuevaExcursion->valor=$form['valor'];
      $nuevaExcursion->imagen=$imagen;
      $nuevaExcursion->categoria_id=$form['categoria'];
      $nuevaExcursion->save();
      return redirect('excursiones');
    }

    public function edit($id){
      $excursion=Excursion::find($id);
      $categorias=Categoria::all();
      return view('excursionedit',compact('excursion','categorias'));
    }

    public function update(Request $form){
      $rule=[
        'name'=>'string | min:2 | required ',
        'sub'=>'string',
        'valor'=>'numeric',
        'descripcion'=>'string',
        'categoria_id'=>'numeric | filled'
      ];

      $messajes=[
        'string'=>'El campo :attribute debe ser de texto',
        'min'=>'El :attribute debe ser de al menos :min caracteres',
        'numeric'=>'El campo :attribute debe ser numérico',
        'categoria_id.filled'=>'El campo categoría está vacío'
      ];

      $this->validate($form, $rule, $messajes);

      $id=$form["id"];
      $excursion=Excursion::find($id);

      $ruta=$form->file("imagen")->store('public/excursiones');
      $imagen=basename($ruta);

      $excursion->name=$form['name'];
      $excursion->sub=$form['sub'];
      $excursion->descripcion=$form['descripcion'];
      $excursion->valor=$form['valor'];
      $excursion->imagen=$imagen;
      $excursion->categoria_id=$form['categoria'];

      $excursion->save();
      return view('excursion', compact('id','excursion'));
    }

    public function destroy(Request $form){
      $excursion=Excursion::find($form["id"]);
      $excursion->delete();
      return redirect('/excursiones');
    }

    public function shopping($id){
      $excursion=Excursion::find($id);
      return View('shopExcursion', compact('excursion'));
    }

    public function DirectoryShop(){
      $excursiones=Excursion::get();
      return view('shopExcursiones', compact('excursiones'));
    }

}
