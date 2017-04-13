$( document ).ready(function() {
    // con esto nos referimos a un elemeto de pagina.php por medio del id "$('#Ajax')"

    //$('#Ajax').hide();
    //$(".button-collapse").sideNav();
    //$('select').material_select();
    //Materialize.updateTextFields();
    //myCourses();
    $('.modal').modal();
    getAllTipoUsuario();
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

function openEditarTipoUsuario(id)
{
  $('#desc_tipo').val('');
  $.ajax({
          url: 'TipoUsuarioCB.php', //se manda llamar el archivo php que se usara para comunicar con el servidor
          type: 'POST',// tipo de dato que recibira el archivo php
          data: {
                  'func':2,
                  'id'  :id
                }, // variables que se mandaran al php
          dataType: 'json', // tipo de dato que regresara el archivo php al cliente
          success: function(data) // funcion que es llamada cuando se realizo con exito el archivo php
          {
              // aqui va todo el codigo para manipular los datos en el cliente

              if (data.status == "OK") // bandera que se manda desde el php para indicar que todo salio bien
              {
                $('#btn_edit').html('<a href="javascript:editarTipoUsuario('+id+')" class=" modal-action modal-close waves-effect waves-red btn-flat">Editar</a>');
                $('#desc_tipo').val(data.Descripcion);
                $('#modal1').modal('open');
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

function editarTipoUsuario(id)
{
  var description = $('#desc_tipo').val();
  $.ajax({
          url: 'TipoUsuarioCB.php', //se manda llamar el archivo php que se usara para comunicar con el servidor
          type: 'POST',// tipo de dato que recibira el archivo php
          data: {
                  'func':3,
                  'id'  :id,
                  'description':description
                }, // variables que se mandaran al php
          dataType: 'json', // tipo de dato que regresara el archivo php al cliente
          success: function(data) // funcion que es llamada cuando se realizo con exito el archivo php
          {
              // aqui va todo el codigo para manipular los datos en el cliente

              if (data.status == "OK") // bandera que se manda desde el php para indicar que todo salio bien
              {
                  getAllTipoUsuario();
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

function openAddTipoUsuario()
{
    $('#desc_tipo').val('');
    $('#btn_edit').html('<a href="javascript:addTipoUsuario()" class=" modal-action modal-close waves-effect waves-red btn-flat">Agregar</a>');
    $('#modal1').modal('open');
}

function addTipoUsuario()
{
    var description = $('#desc_tipo').val();
    $.ajax({
            url: 'TipoUsuarioCB.php', //se manda llamar el archivo php que se usara para comunicar con el servidor
            type: 'POST',// tipo de dato que recibira el archivo php
            data: {
                    'func':4,
                    'description':description
                  }, // variables que se mandaran al php
            dataType: 'json', // tipo de dato que regresara el archivo php al cliente
            success: function(data) // funcion que es llamada cuando se realizo con exito el archivo php
            {
                // aqui va todo el codigo para manipular los datos en el cliente

                if (data.status == "OK") // bandera que se manda desde el php para indicar que todo salio bien
                {
                    getAllTipoUsuario();
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

function activoTipoUsuario(id,active)
{
    $.ajax({
            url: 'TipoUsuarioCB.php', //se manda llamar el archivo php que se usara para comunicar con el servidor
            type: 'POST',// tipo de dato que recibira el archivo php
            data: {
                    'func':5,
                    'id':id,
                    'active':active
                  }, // variables que se mandaran al php
            dataType: 'json', // tipo de dato que regresara el archivo php al cliente
            success: function(data) // funcion que es llamada cuando se realizo con exito el archivo php
            {
                // aqui va todo el codigo para manipular los datos en el cliente

                if (data.status == "OK") // bandera que se manda desde el php para indicar que todo salio bien
                {
                    getAllTipoUsuario();
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
