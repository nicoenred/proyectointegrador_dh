<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
  protected $table = 'categoria';

  public $timestamps = false;

  protected $primaryKey = 'idCategoria';

  protected $guarded = [];

  public function excursiones() {
       return $this->hasMany('App\Excursion', 'categoria_id');
   }
}
}
