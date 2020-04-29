<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $primaryKey = 'idCliente';

    protected $fillable = [
        'username', 'email', 'password', 'nombre', 'apellido', 'telefono'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getNombreCompleto(){
      return $this->nombre." ".apellido;
    }

    public function admin(){
      $role=$this->role;
      return $role;
    }
}
