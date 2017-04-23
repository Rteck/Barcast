<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario Registro</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="../css/materialize/css/materialize.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="../comunes/barcast.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../css/materialize/js/materialize.js"></script>
    <script type="text/javascript" src="FormularioRegistro.js"></script>

      <?php include('../comunes/adminBar.php') ?>
    <main>

        <div class="row">
          <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <div class="row">
                      <h4>Información General</h4>
                    </div>
                    <div class="row">

                        <form class="col s12">
                              <div class="row">
                                <div class="input-field col s6">
                                  <input id="f_nombre" type="text">
                                  <label for="f_nombre">Nombre</label>
                                </div>
                                <div class="input-field col s6">
                                  <input id="f_apell" type="text">
                                  <label for="f_apell">Apellidos</label>
                                </div>
                              </div>

                              <div class="row">
                                <div class="input-field col s12">
                                  <input id="f_email" type="email" class="validate">
                                  <label for="f_email">Email</label>
                                </div>
                              </div>

                              <div class="row">
                                <div class="input-field col s12">
                                  <input id="f_password" type="password">
                                  <label for="f_password">Password</label>
                                </div>
                              </div>

                              <div class="row">
                                <div style="text-align:center">
                                  <a class="waves-effect waves-light btn" onclick="javascript:registrar()">Registrar</a>

                                </div>
                              </div>

                            </form>
                        </div>
                </div>
            </div>
          </div>
        </div>
    </main>







  </body>
</html>
