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
    <script type="text/javascript" src="AltaNegocio.js"></script>
      <?php include('../comunes/menuUsuario.php') ?>
      <?php include('../comunes/adminBar.php') ?>
    <main class="mainBarcas">

        <div class="row">
          <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <div class="row" style="border-bottom: 1px solid #ccc">
                      <div class="col s6">
                          <h4>Informacion General</h4>
                      </div>
                    </div>
                    <div class="row">
                          <!--Formulario de registro del negocio -->
                            <form class="col s12">

                              <div class="row">
                                <div class="input-field col s12">
                                  <input  id="N_nombre" type="text" class="validate">
                                  <label for="N_nombre">Nombre:</label>
                                </div>
                              </div>

                              <div class="row">
                                <div class="input-field col s12">
                                  <textarea id="N_desc" class="materialize-textarea"></textarea>
                                  <label for="textarea1">Descripcion del negocio:</label>
                                </div>
                              </div>
                                <!--Sección de ubicación -->


                                <div class="row" style="border-bottom: 1px solid #ccc">
                                  <div class="col s6">
                                      <h4>Ubicación</h4>
                                  </div>
                                </div>


                              <div class="row">
                                <div class="input-field col s12">
                                  <div id="N_tel" class="chips chips-initial"></div>
                                  <label for="N_tel">Telefono(s):</label>
                                </div>
                              </div>

                              <div class="row">
                                <div class="input-field col s12">
                                  <textarea id="N_horario" class="materialize-textarea"></textarea>
                                  <label for="N_horario">Horarios:</label>
                                </div>
                              </div>
                              <div class="row">

                                <div class="input-field col s12">
                                  <input  id="U_calle" type="text" class="validate">
                                  <label for="U_calle">Calle:</label>
                                </div>
                              </div>
                              <div class="row">

                                <div class="input-field col s12">
                                  <input  id="U_colonia" type="text" class="validate">
                                  <label for="U_colonia">Colonia:</label>
                                </div>

                                <div class="input-field col s12">
                                  <input  id="U_Numero" type="text" class="validate">
                                  <label for="U_Numero">Número:</label>
                                </div>

                                <div class="input-field col s12">
                                  <input  id="U_CP" type="text" class="validate">
                                  <label for="U_CP">C.P:</label>
                                </div>
                              </div>



                            </form>
                          <!-- -->

                    </div>
                </div>
            </div>
          </div>
        </div>




    </main>







  </body>
</html>
