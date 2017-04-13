<?php
header('Content-Type: application/json');
include_once($_SERVER['DOCUMENT_ROOT'].'/barcast/BLL/include.php');

function selectItemsTipoUsuario()
{
    $response           = array('status' => 'ERROR');
    try
    {
        $response['select'] =   TipoUsuarioBLL::getAllSelectItemsTipoUsuarios();
        $response['status'] = "OK";
    }
    catch (Exception $e)
    {
        $response['status'] = $e->message;
    }
    return json_encode($response);
}


function registerUsuario($name,$lastname,$email,$pass)
{
    $response           = array('status' => 'ERROR');
    try
    {
        $response['status'] =   UsuariosBLL::registerUsuarios($name,$lastname,$email,$pass);
    }
    catch (Exception $e)
    {
        $response['status'] = $e->message;
    }
    return json_encode($response);
}

switch ($_POST['func']) {
  case 1:
    echo selectItemsTipoUsuario();
    break;

  case 2:
    echo registerUsuario($_POST['f_nombre'],$_POST['f_apell'],$_POST['f_email'],$_POST['f_password']);
    break;

  default:

    break;
}

 ?>
