$(document).ready(function() {

});


function getAllTipoUsuario() {

  $('.selTU').remove();
  $.ajax({
          url: 'FormularioRegistroCB.php', //se manda llamar el archivo php que se usara para comunicar con el servidor
          type: 'POST',// tipo de dato que recibira el archivo php
          data: {
                  'func':1
                }, // variables que se mandaran al php
          dataType: 'json', // tipo de dato que regresara el archivo php al cliente
          success: function(data) // funcion que es llamada cuando se realizo con exito el archivo php
          {
              // aqui va todo el codigo para manipular los datos en el cliente

              if (data.status == "OK") // bandera que se manda desde el php para indicar que todo salio bien
              {
                  $('#sel_tipo').prepend(data.select);
                  $('select').material_select();
                  //$('#Ajax').hide();
              }
              else
              {
                  alert(data.status);
                  //$('#Ajax').hide();
              }
          },
          error:function()
          {
              alert("Error en ajax/FormularioRegistroCB.php"); // el error estaria en el archivo php
              $('#Ajax').hide();

          }
  });
}

function registrar() {
  $.ajax({
          url: 'FormularioRegistroCB.php', //se manda llamar el archivo php que se usara para comunicar con el servidor
          type: 'POST',// tipo de dato que recibira el archivo php
          data: {
                  'func':2,
                  'f_nombre':$('#f_nombre').val(),
                  'f_apell':$('#f_apell').val(),
                  'f_email':$('#f_email').val(),
                  'f_password':$('#f_password').val()
                }, // variables que se mandaran al php
          dataType: 'json', // tipo de dato que regresara el archivo php al cliente
          success: function(data) // funcion que es llamada cuando se realizo con exito el archivo php
          {
              // aqui va todo el codigo para manipular los datos en el cliente

              if (data.status == "OK") // bandera que se manda desde el php para indicar que todo salio bien
              {
                  $('#sel_tipo').prepend(data.select);
                  $('select').material_select();
                  //$('#Ajax').hide();
              }
              else
              {
                  alert(data.status);
                  //$('#Ajax').hide();
              }
          },
          error:function()
          {
              alert("Error en ajax/FormularioRegistroCB.php"); // el error estaria en el archivo php
              $('#Ajax').hide();

          }
  });
}
