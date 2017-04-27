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
        $dominio = explode("@",$email);
        $arroba = FALSE;
        if (count($dominio) > 1)
        {
          $arroba = TRUE;
        }

        if ($arroba)
        {
          if (self::verifyEmail($dominio[1]))
          {
            $usuario = UsuariosDAL::selectUsuarios($email);

            if (is_null($usuario))
            {
              $response = UsuariosDAL::insertUsuarios($name,$lastname,$email,$pass);
            }
            else {
              $response = 'EMAIL';
            }
          }
          else
          {
            $response = 'EMAIL';
          }

        }
        else
        {
            $response = 'EMAIL';
        }


        return $response;
    }

    public static function verifyEmail($dominio)
    {
      $dominiosValidos = BarcastHelper::getDominios();
      $valido = FALSE;
      if (in_array($dominio,$dominiosValidos))
      {
        $valido =  TRUE;
      }
      return $valido;
    }
  }

 ?>
