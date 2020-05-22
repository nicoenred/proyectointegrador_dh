<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Excursion;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     *
    *public function __construct()
    *{
    *    $this->middleware('auth');
    *}
    */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
      $excursion=Excursion::orderby('valor','desc')->paginate(3);
      return view('home', compact('excursion'));
    }


    public function admin(){
      return view('admin');
    }

}
