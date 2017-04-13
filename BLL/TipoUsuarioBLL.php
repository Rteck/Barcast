<?php
    include_once($_SERVER['DOCUMENT_ROOT'].'/barcast/DAL/include.php');


    /**
     * Clase que se encarga de conectar la capa de presentacion con la de datos y hacer render con los datos
     */
    class TipoUsuarioBLL
    {

      function __construct()
      {

      }

      public static function getTableAllTipoUsuarios()
      {
          $tabla = '  <table class="striped">
          <thead>
            <tr>
                <th>Descripcion</th>
                <th>Fecha Alta</th>
                <th>Fecha Modificacion</th>
                <th>Editar</th>
                <th>Activo</th>
            </tr>
          </thead>

          <tbody>';
          $tipoUsuarioArray = TipoUsuarioDAL::getAllTipoUsuario();
          foreach ($tipoUsuarioArray as $item)
          {
            $activo='error';
            if($item->getActivo())
            {
                $activo='done_all';
            }
            $tabla .= ' <tr>
                          <td>'.$item->getDescripcion().'</td>
                          <td>'.$item->getFechaAlta().'</td>
                          <td>'.$item->getFechaModificacion().'</td>
                          <td><a class="waves-effect waves-light btn" href="javascript:openEditarTipoUsuario('.$item->getIdTipoUsuario().')"><i class="material-icons center">mode_edit</i></a></td>
                          <td><a class="waves-effect waves-light btn" href="javascript:activoTipoUsuario('.$item->getIdTipoUsuario().','.$item->getActivo().')"><i class="material-icons center">'.$activo.'</i></a></td>
                        </tr>';
          }

          $tabla.=' </tbody>
        </table>';

        return $tabla;
      }

      public static function getTipoUsuario($id)
      {
        $tipoUsuario = TipoUsuarioDAL::getTipoUsuario($id);
        return $tipoUsuario;
      }

      public static function editTipoUsuario($description,$id)
      {
        TipoUsuarioDAL::editTipoUsuario($description,$id);
      }

      public static function addTipoUsuario($description)
      {
        TipoUsuarioDAL::addTipoUsuario($description);
      }

      public static function activoTipoUsuario($id,$active)
      {
        TipoUsuarioDAL::activoTipoUsuario($id,$active);
      }

      public static function getAllSelectItemsTipoUsuarios()
      {
        $select = '';
        $tipoUsuarioArray = TipoUsuarioDAL::getAllTipoUsuario();
        foreach ($tipoUsuarioArray as $item)
        {
            $select.='<option class="selTU" value="'.$item->getIdTipoUsuario().'">'.$item->getDescripcion().'</option>';
        }

        return $select;
      }

    }

?>
