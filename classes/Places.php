<?php

class Places {

  private $name;
  private $address;
  private $schedule;
  private $price;
  private $image;
  private $descrip1;
  private $descrip2;

  public function __construct($datos){
    $this->name=$datos["name"];
    $this->address=$datos["address"];
    $this->schedule=$datos["schedule"];
    $this->price=$datos["price"];
    $this->image=$datos["image"];
    $this->descrip1=$datos["descrip1"];
    $this->descrip2=$datos["descrip2"];

  }

  public function getName(){
    return $this->name;
  }

  public function getAddress(){
    return $this->address;
  }

  public function getSchedule(){
    return $this->schedule;
  }

  public function getPrice(){
    return $this->price;
  }

  public function getImage(){
    return $this->image;
  }

  public function getDescrip1(){
    return $this->descrip1;
  }

  public function getDescrip2(){
    return $this->descrip2;
  }

} // fin de clase Places







 ?>
