<!DOCTYPE html>
<html>

<style>

  .imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
  }

  img.avatar {
    width: 40%;
    border-radius: 50%;
  }
</style>

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
    <script type="text/javascript" src="Login.js"></script>

      <?php include('../comunes/adminBar.php') ?>
    <main>

      <div class="row">
        <div class="col s12">
          <div class="card">
              <div class="card-content">

                <div class="imgcontainer">
                  <img src="https://archives.relevantmagazine.com/sites/default/themes/relevant/img/avatar.png" alt="Avatar" class="avatar">
                </div>

                  <div class="row">

                      <form class="col s12">

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
                                <a class="waves-effect waves-light btn" onclick="javascript:iniciar_sesion()">Iniciar Sesion</a>

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
