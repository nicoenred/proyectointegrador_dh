<?php

class Excursion {
  private $nombre;
  private $id;
  private $valor;
  private $descripcion;
  private $imagen;

  public function __construct(string $id){
    $this->id=$id;
  }

  public function getNombre(){
    return $this->nombre;
  }
  public function setNombre(string $nombre){
    $this->nombre=$nombre;
  }

  public function getId(){
    return $this->id;
  }
  public function setId(string $id){
    $this->id=$id;
  }

  public function getValor(){
    return $this->valor;
  }
  public function setValor(int $valor){
    $this->valor=$valor;
  }

  public function getDescripcion(){
    return $this->descripcion;
  }
  public function setDescripcion(string $descripcion){
    $this->descripcion=$descripcion;
  }

  public function getImagen(){
    return $this->imagen;
  }
  public function setImagen(string $imagen){
    $this->imagen=$imagen;
  }


}

 ?>
