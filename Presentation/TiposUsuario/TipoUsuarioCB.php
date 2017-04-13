<?php
  header('Content-Type: application/json');
  include_once($_SERVER['DOCUMENT_ROOT'].'/barcast/BLL/include.php');

  function getTable()
  {
    $response           = array('status' => 'ERROR');
    try
    {
        $response['table'] =   TipoUsuarioBLL::getTableAllTipoUsuarios();
        $response['status'] = "OK";
    }
    catch (Exception $e)
    {
        $response['status'] = $e->message;
    }

    return json_encode($response);
  }


  function getTipoU($id)
  {
    $response                 = array('status' => 'ERROR');

    try
    {
        $TipoUsuario              = TipoUsuarioBLL::getTipoUsuario($id);

        $response['Descripcion']  = $TipoUsuario->getDescripcion();

        $response['status'] = "OK";
    } catch (Exception $e)
    {
      $response['status'] = $e->message;
    }

    return json_encode($response);

  }


  function editTipoU($description,$id)
  {
      $response                 = array('status' => 'ERROR');

      try
      {
          TipoUsuarioBLL::editTipoUsuario($description,$id);

          $response['status'] = "OK";
      } catch (Exception $e)
      {
        $response['status'] = $e->message;
      }

      return json_encode($response);
  }


  function addTipoUsuario($description)
  {
      $response                 = array('status' => 'ERROR');

      try
      {
          TipoUsuarioBLL::addTipoUsuario($description);

          $response['status'] = "OK";
      } catch (Exception $e)
      {
        $response['status'] = $e->message;
      }

      return json_encode($response);
  }

  function activoTipoUsuario($id,$active)
  {
      $response                 = array('status' => 'ERROR');

      try
      {
          TipoUsuarioBLL::activoTipoUsuario($id,$active);

          $response['status'] = "OK";
      } catch (Exception $e)
      {
        $response['status'] = $e->message;
      }

      return json_encode($response);
  }

  switch ($_POST['func'])
  {
    case 1:
        echo getTable();
      break;

    case 2:
      echo getTipoU($_POST['id']);
      break;

    case 3:
      echo editTipoU($_POST['description'],$_POST['id']);
      break;

    case 4:
        echo addTipoUsuario($_POST['description']);
      break;

    case 5:
        echo activoTipoUsuario($_POST['id'],$_POST['active']);
      break;

    default:
      break;
  }



 ?>
