<?php
header('Content-Type: application/json');
include_once($_SERVER['DOCUMENT_ROOT'].'/barcast/BLL/include.php');

function login($email,$pass)
{
    $response           = array('status' => 'ERROR');
    try
    {
        $response['status'] =   UsuariosBLL::login($email,$pass);
    }
    catch (Exception $e)
    {
        $response['status'] = $e->message;
    }
    return json_encode($response);
}

switch ($_POST['func']) {

  case 2:
    echo login($_POST['f_email'],$_POST['f_password']);
    break;

  default:

    break;
}

 ?>
