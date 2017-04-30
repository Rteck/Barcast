var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
$(document).ready(function() {

});

function iniciar_sesion()
{
  if (isEmail($('#f_email').val()))
  {
    $.ajax({
            url: 'LoginCB.php', //se manda llamar el archivo php que se usara para comunicar con el servidor
            type: 'POST',// tipo de dato que recibira el archivo php
            data: {
                    'func':2,
                    'f_email':$('#f_email').val(),
                    'f_password':$('#f_password').val()
                  }, // variables que se mandaran al php
            dataType: 'json', // tipo de dato que regresara el archivo php al cliente
            success: function(data) // funcion que es llamada cuando se realizo con exito el archivo php
            {

                switch (data.status)
                {
                  case "OK":
                    Materialize.toast('Sesion Iniciada', 3000, 'rounded');
                    break;
                    case "EMAIL":
                        Materialize.toast('El Email o el Password es incorrecto, intente de nuevo por favor', 3000, 'rounded');
                      break;
                  default:
                  break;

                }
            },
            error:function()
            {
                alert("Error en ajax/LoginCB.php"); // el error estaria en el archivo php

            }
    });
  }
  else
  {
    Materialize.toast('Este email no es valido, asegurate que este escrito correctamente', 3000, 'rounded');
    $('#f_email').val('');
    $('#f_email').focus();
  }
}

function isEmail(email)
{
  return regex.test(email);
}
