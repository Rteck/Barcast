<?php
  include_once($_SERVER['DOCUMENT_ROOT'].'/barcast/DAL/include.php');

  /**
   * Clase donde se hara toda regla de negocio de los usuarios
   */
  class UsuariosBLL
  {

    function __construct()
    {

    }

    public static function registerUsuarios($name,$lastname,$email,$pass)
    {

        $response='';

        $usuario = UsuariosDAL::selectUsuarios($email);

        if (is_null($usuario))
        {
          $response = UsuariosDAL::insertUsuarios($name,$lastname,$email,$pass);
        }
        else {
          $response = 'EMAIL';
        }

        return $response;
    }
  }

 ?>
