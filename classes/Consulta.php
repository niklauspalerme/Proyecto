<?php

class Consulta {

  static public function MostrarPreguntas ($baseDatos, $tabla)
  {

    $sql="SELECT * FROM  $tabla";
    $query= $baseDatos-> prepare($sql);
    $query->execute();
    $preguntas= $query->fetchAll(PDO::FETCH_ASSOC);
    return $preguntas;

  }

  static public function guardarUsuario($pdo,$usuario,$tabla){
    $sql = "insert into $tabla (name,email,avatar,priority,password) values (:name,:email,:avatar,:priority,:password)";
    $query = $pdo->prepare($sql);
    $query->bindValue(':name',$usuario->getName());
    $query->bindValue(':email',$usuario->getEmail());
    $query->bindValue('avatar',$usuario->getAvatar());
    $query->bindValue('priority',$usuario->getPriority());
    $query->bindValue(':password',$usuario->getPassword());


    $query->execute();

    }

  static public function buscarUsuario($pdo,$tabla,$email){

      $sql="select  $tabla.id, $tabla.name,  $tabla.mobile,  $tabla.telephone,  $tabla.email,  $tabla.avatar,  $tabla.priority,  $tabla.password from $tabla where  $tabla.email = '$email'";

      $query=$pdo->prepare($sql);

      $query->execute();

      $usuario= $query->fetch(PDO::FETCH_ASSOC);

      return $usuario;

    }

    static public function buscarLugar($pdo,$tabla){

        $sql="select  $tabla.id, $tabla.name,  $tabla.address,  $tabla.schedule,  $tabla.price,  $tabla.image,  $tabla.descrip1,  $tabla.descrip2 from $tabla";

        $query=$pdo->prepare($sql);

        $query->execute();

        $usuario= $query->fetchAll(PDO::FETCH_ASSOC);

        return $usuario;

      }

  static public function updateUsuario ($pdo,$usuario,$tabla,$id){

    $sql= "update $tabla set name='$usuario[name]', telephone='$usuario[telephone]', mobile='$usuario[mobile]', email='$usuario[email]', password='$usuario[password]' where id=$id";

    //mobile='11-6552-3592', email='nico@hotmail.com' where id=1;

    $query = $pdo->prepare($sql);
    $query->execute();
    return $usuario;


    }

    static public function insertarLugar($pdo,$lugar,$tabla){

      $sql = "insert into $tabla (name,address,schedule,price,image,descrip1,descrip2) values (:name,:address,:schedule,:price,:image,:descrip1,:descrip2)";
      $query = $pdo->prepare($sql);
      $query->bindValue(':name',$lugar->getName());
      $query->bindValue(':address', $lugar->getAddress());
      $query->bindValue(':schedule',$lugar->getSchedule());
      $query->bindValue(':price',$lugar->getPrice());
      $query->bindValue(':image',$lugar->getImage());
      $query->bindValue(':descrip1',$lugar->getDescrip1());
      $query->bindValue(':descrip2',$lugar->getDescrip2());
      $query->execute();


    }

  static public function buscaUnLugar($pdo,$id,$tabla){

    $sql="select * from $tabla where  $tabla.id = '$id'";
    $query= $pdo-> prepare($sql);
    $query->execute();
    $lugar= $query->fetch(PDO::FETCH_ASSOC);
    return $lugar;


  }

  static public function buscarUsuarioLugar($pdo,$tabla1,$tabla2,$id){

    $sql="select $tabla1.*, $tabla2.id as ids  from $tabla1
    left join $tabla2 on $tabla2.id_$tabla1 = $tabla1.id
    left join users on users.id=$tabla2.id_users
    where $tabla2.id_users = $id";
    $query= $pdo-> prepare($sql);
    $query->execute();
    $lugar= $query->fetchAll(PDO::FETCH_ASSOC);
    return $lugar;
  }

  static public function AgregarUsuarioActividades($pdo,$tabla,$id,$idUser){

    $sql = "insert into $tabla (id_users, id_activities) values (:id_usuario,:id_activities)";
    $query = $pdo->prepare($sql);
    $query->bindValue(':id_usuario',$idUser);
    $query->bindValue(':id_activities', $id);
    $query->execute();

  }

  static public function AgregarUsuarioGastronomia($pdo,$tabla,$id,$idUser){

    $sql = "insert into $tabla (id_users, id_foods) values (:id_usuario,:id_foods)";
    $query = $pdo->prepare($sql);
    $query->bindValue(':id_usuario',$idUser);
    $query->bindValue(':id_foods', $id);
    $query->execute();

  }

  static public function AgregarUsuarioHoteles($pdo,$tabla,$id,$idUser){

    $sql = "insert into $tabla (id_users, id_hotels) values (:id_usuario,:id_hotels)";
    $query = $pdo->prepare($sql);
    $query->bindValue(':id_usuario',$idUser);
    $query->bindValue(':id_hotels', $id);
    $query->execute();

  }

  static public function AgregarUsuarioLugares($pdo,$tabla,$id,$idUser){

    $sql = "insert into $tabla (id_users, id_places) values (:id_usuario,:id_places)";
    $query = $pdo->prepare($sql);
    $query->bindValue(':id_usuario',$idUser);
    $query->bindValue(':id_places', $id);
    $query->execute();

  }

static public function EliminarGuardadoFavoritos($pdo,$tabla,$id){

  $sql="delete from $tabla where $tabla.id=$id";
  $query = $pdo->prepare($sql);
  $query->execute();


}








}// Fin de class consulta
