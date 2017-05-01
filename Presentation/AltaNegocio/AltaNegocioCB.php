<?php
  header('Content-Type: application/json');
  include_once($_SERVER['DOCUMENT_ROOT'].'/barcast/BLL/include.php');



  switch ($_POST['func'])
  {
    case 1:
        echo getTable();
      break;
    default:
      break;
  }



 ?>
