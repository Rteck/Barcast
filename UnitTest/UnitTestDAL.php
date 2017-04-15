<?php
  include_once($_SERVER['DOCUMENT_ROOT'].'/barcast/DAL/include.php');
$email='gerardo.monreal.imt@gmail.com';
UsuariosDAL::selectUsuarios($email);
  //TipoUsuarioDAL::getTipoUsuario(1);


 ?>
