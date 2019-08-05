<?php

class Users {

  private $name;
  private $password;
  private $avatar;
  private $email;

  public function __construct($datos,$avatar){
    $this->name=$datos["name"];
    $this->password=$datos["password"];
    $this->email=$datos["email"];
    $this->avatar = $avatar;
    $this->priority=1;
  }

  public function getName(){
    return $this->name;
  }

  public function getPassword(){
    return $this->password;
  }

  public function getEmail(){
    return $this->email;
  }

  public function getPriority(){
    return $this->priority;
  }

  public function getAvatar(){
    return $this->avatar;
  }

  public function setUpdates($datos){


  }


}



 ?>
