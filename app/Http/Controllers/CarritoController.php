<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Excursion;
use Session;
use Auth;


class CarritoController extends Controller
{
    public function _construct(){
        if (! session()->exist('carro')) {
            session('carro', array());
         }
    }

    public function mostrarCarro(){
      $carro=session('carro', array());
      $total=$this->total();
      return view('/carrito', compact('carro','total'));
    }

    public function addItem($id){
      $excursion=Excursion::find($id);
      $item=[
        "id"=> $excursion->idExcursion,
        "name" => $excursion->name,
        "valor" => $excursion->valor,
        "cantidad"=>1
      ];
      if (Auth::check()) {
        session()->push('carro' , $item);
        return redirect()->route('carrito');
      }
      else {
        session()->push('carro' , $item);
        return redirect()->route('login');
      }
    }

    public function deleteItem(Request $request, $id){
      $carro=$request->session()->get('carro');
      foreach ($carro as $key => $item) {
        if ($key == $id) {
          unset($carro[$key]);
          session()->put('carro', $carro);
        }
      }
      return redirect()->route('carrito');
    }

    private function total(){
        $total=0;
        $carro=session()->get('carro');
        if (isset($carro)) {
            foreach ($carro as $key => $item) {
                $total += $item["valor"] * $item["cantidad"];
            }
        }
        return $total;
    }

}
