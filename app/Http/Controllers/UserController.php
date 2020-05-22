<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use App\Rules\MatchOldPassword;


class UserController extends Controller
{
    public function admin($id){
      $admin=User::find($id);
      if ($admin->rol == 'admin') {
        return view('admin' , compact('admin'));
      }
      else {
        return('home');
      }
    }

    public function miPerfil($id){
      $user=User::find($id);
      return view('miPerfil', compact('user'));
    }

    public function cargarAvatar(Request $form){
      $id=$form["id"];
      $user=User::find($id);
      $ruta=$form->file("imagenPerfil")->store('public/usuarios');
      $imagen=basename($ruta);
      $user->imagenPerfil=$imagen;
      $user->save();
      return view('miPerfil', compact('id','user'));
    }

    public function editarInformacion($id){
      $user=User::find($id);
      return view('userEdit', compact('user'));
    }

    public function udpateInfo(Request $form){

      // $rule=[
      //  'name'=>'string | min:2 | required ',
      //  'sub'=>'string',
      //  'valor'=>'numeric',
      //  'descripcion'=>'string',
      //  'categoria_id'=>'numeric | filled'
      // ];
      //
      // $messajes=[
      //  'string'=>'El campo :attribute debe ser de texto',
      //  'min'=>'El :attribute debe ser de al menos :min caracteres',
      //  'numeric'=>'El campo :attribute debe ser numérico',
      //  'categoria_id.filled'=>'El campo categoría está vacío'
      // ];
      //
      // $this->validate($form, $rule, $messajes);

      $id=$form["id"];
      $user=User::find($id);

      $user->name=$form['name'];
      $user->surname=$form['surname'];
      $user->username=$form['username'];
      $user->telephone=$form['telephone'];
      $user->email=$form['email'];
      $user->password=Hash::make($form->get('password'));

      $user->save();


      return view('miPerfil', compact('id' , 'user'));
    }


}
