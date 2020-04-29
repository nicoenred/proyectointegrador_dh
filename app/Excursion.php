<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Excursion extends Model
{
  protected $table = 'producto';

  public $timestamps = false;

  protected $primaryKey = 'idProducto';

  protected $guarded = [];

}
