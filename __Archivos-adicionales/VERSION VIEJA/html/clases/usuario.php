<?php

/**
 *
 */
include_once("excursion.php");
Class User {
  private $nombre;
  private $username;
  private $email;
  private $password;
  private $carrito;

  public function __construct(string $email, string $password, string $username){
    $this->email=$email;
    $this->password=$password;
    $this->username=$username;
  }

  public function getNombre(){
    return $this->nombre;
  }
  public function setNombre($nombre){
    $this->nombre=$nombre;
  }

  public function getUsername(){
    return $this->userame;
  }
  public function setUsername($userame){
    $this->userame=$userame;
  }

  public function getEmail(){
    return $this->email;
  }
  public function setEmail($email){
    $this->email=$email;
  }

  public function getPass(){
    return $this->password;
  }
  public function setPass($password){
    $this->password=$password;
  }

  public function getCarrito(){
    return $this->carrito;
  }
  public function setCarrito($carrito){
    $this->carrito=$carrito;
  }

  public function agregarACarrito(Excursion $excursion){
    $carrito[]=$excursion;
  }



}




 ?>
