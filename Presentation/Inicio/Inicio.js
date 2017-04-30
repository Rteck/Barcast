$( document ).ready(function() {
    // con esto nos referimos a un elemeto de pagina.php por medio del id "$('#Ajax')"

});

function getAllTipoUsuario()
{
  //$('#Ajax').show();

  $.ajax({
          url: 'TipoUsuarioCB.php', //se manda llamar el archivo php que se usara para comunicar con el servidor
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
                  $('#tb_tipos').html(data.table);
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
              alert("Error en ajax/consulta.php"); // el error estaria en el archivo php
              $('#Ajax').hide();

          }
  });
}
