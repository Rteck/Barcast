<?php
session_start();
  if (!isset($_SESSION['idUsuario']))
  {
    header("Location: ../Login/login.php");
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tipos de Usuarios</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="../css/materialize/css/materialize.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="../comunes/barcast.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../css/materialize/js/materialize.js"></script>
    <script type="text/javascript" src="Inicio.js"></script>
      <?php include('../comunes/menuUsuario.php') ?>
      <?php include('../comunes/adminBar.php') ?>
    <main class="mainBarcas">

        <div class="row">
          <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <div class="row">
                      <div class="col s6">
                          <h4>Mis Negocios</h4>
                      </div>
                        <div class="col s3 offset-s3" style="text-align: right;">
                            <a class="waves-effect waves-light btn" href="javascript:openAddTipoUsuario()"><i class="material-icons">add</i></a>
                        </div>
                    </div>
                    <div class="row">
                          <!--Pantilla para mostrar los negocios a los que se esta relacionado -->
                          <div class="col s12 m4">
                            <div class="card">
                              <div class="card-image">
                                <img src="https://scontent-lax3-2.xx.fbcdn.net/v/t1.0-9/10264539_1753907001499951_5708647369719386316_n.jpg?oh=1362ae13488430cec0cbe051b0a58df6&oe=59869117">
                              </div>
                              <div class="card-content">
                                <div>
                                  <h5>La Chula</h5>
                                </div>
                              </div>
                              <div class="card-action">
                                <a href="#">Ver más</a>
                              </div>
                            </div>
                          </div>
                          <!-- -->

                    </div>
                </div>
            </div>
          </div>





        </div>
    </main>







  </body>
</html>
