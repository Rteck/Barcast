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
    public static function selectUsuarios($correo)
    {
      Barcast::open();
      $result =   mysqli_query(Barcast::$dbh,"SELECT * FROM usuarios
                                              WHERE email = '$correo'");
      Barcast::close();

      if ($result)
      {
         $rowcount=mysqli_num_rows($result);


         $usuario = new usuarios();
         if ($rowcount > 0)
         {

            $us = mysqli_fetch_object($result);
            $usuario->setidUsuarios($us->idUsuarios);
            $usuario->setemail($us->email);
            $usuario->setpassword($us->password);
            $usuario->setidTipoUsuario($us->idTipoUsuario);
            $usuario->setactivo($us->activo);
            $usuario->setnombre($us->nombre);

         }
         else {
           $usuario = NULL;
         }

         return $usuario;
      }

    }
    /**
     * [función para insertar usuarios nuevos en barcast]
     * @param  [type] $name     [nombre del usuario]
     * @param  [type] $lastname [apellido del usuario]
     * @param  [type] $email    [correo del usuario]
     * @param  [type] $pass     [contraseña del usuario]
     * @return [type]           [respuesta de la inserción]
     */
    public static function insertUsuarios($name,$lastname,$email,$pass)
    {
      $response='';
      $nombre = $name.' '.$lastname;
      Barcast::open();
      $result =   mysqli_query(Barcast::$dbh,"INSERT INTO usuarios (nombre,email,password,idTipoUsuario)
                                              VALUES('$nombre','$email','$pass',4)"); // ira por defaul el tipo de usuario basico

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
