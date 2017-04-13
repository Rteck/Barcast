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
    <script type="text/javascript" src="TipoUsuario.js"></script>
      <?php include('../comunes/menuUsuario.php') ?>
      <?php include('../comunes/adminBar.php') ?>
    <main class="mainBarcas">

        <div class="row">
          <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <div class="row">
                        <div class="col s3 offset-s9" style="text-align: right;">
                            <a class="waves-effect waves-light btn" href="javascript:openAddTipoUsuario()"><i class="material-icons">add</i></a>
                        </div>
                    </div>
                    <div id="tb_tipos"></div>
                </div>
            </div>
          </div>


          <?php include('modals/TipoUsuarioModal.php') ?>


        </div>
    </main>







  </body>
</html>
