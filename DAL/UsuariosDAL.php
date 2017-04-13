<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/barcast/Objects/include.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/barcast/DAL/BD/BaseDatos.php');

  /**
   * Clase que representa los usuarios de la plataforma
   */
  class UsuariosDAL
  {

    function __construct()
    {
      # code...
    }
    /**
     * Funcion que se encarga de buscar un usuario por su unique key que es el email
     * @param  [string] $email [email que se pretende buscar]
     * @return [usuarios]        [regresa el usuario si es que lo encontro]
     */
    public static function selectUsuarios($email)
    {
      Barcast::open();
      $result =   mysqli_query(Barcast::$dbh,"SELECT * FROM usuarios
                                              WHERE email = '$email'");
      Barcast::close();

      if ($result)
      {
         $rowcount=mysqli_num_rows($result);


         $usuario = new usuarios();
         if ($rowcount > 0)
         {

            $us = mysqli_fetch_object($result);
            $usuario->setidUsuarios($us->idUsuarios);
            $usuario->setnombre($us->$nombre);
            $usuario->setemail($us->$email);
            $usuario->setcontrasena($us->$contraseña);
            $usuario->setidTipoUsuario($us->$idTipoUsuario);
            $usuario->setactivo($us->$activo);
         }
         else {
           $usuario = NULL;
         }

         return $usuario;
      }

    }

    public static function insertUsuarios($name,$lastname,$email,$pass)
    {
      $response='';
      Barcast::open();
      $result =   mysqli_query(Barcast::$dbh,"INSERT INTO usuarios (nombre,email,contraseña,idTipoUsuario)
                                              VALUES('$name.$lastname','$email','$pass',4)"); // ira por defaul el tipo de usuario basico

      Barcast::close();
      if ($result)
      {
        $response = 'OK';
      }
      else
      {
        $response = 'ERROR';
      }
      return $response;
    }

  }


 ?>
