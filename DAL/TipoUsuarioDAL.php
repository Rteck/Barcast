<?php
    include_once($_SERVER['DOCUMENT_ROOT'].'/barcast/Objects/include.php');
    include_once($_SERVER['DOCUMENT_ROOT'].'/barcast/DAL/BD/BaseDatos.php');
    /**
     * Clase para hacer las consultas hacia la base de datos de la tabla tipousuario
     */
    class TipoUsuarioDAL
    {

      function __construct()
      {

      }

    /**
     * [getAllTipoUsuario description]
     * @return [type] [description]
     */
      public static function getAllTipoUsuario()
      {

          Barcast::open();
          $result =   mysqli_query(Barcast::$dbh,"SELECT * FROM tipousuario");
          $tipoUsuarioArray =  array();
          if ($result)
          {
            while($tipoUsuario   =   mysqli_fetch_object($result))
            {
              $item = new TipoUsuario();

              $item->setIdTipoUsuario($tipoUsuario->idTipoUsuario);
              $item->setDescripcion($tipoUsuario->descripcion);
              $item->setFechaAlta($tipoUsuario->fechaAlta);
              $item->setFechaModificacion($tipoUsuario->fechaModificacion);
              $item->setActivo($tipoUsuario->activo);

              array_push($tipoUsuarioArray,$item);
            }
          }
          Barcast::close();

          return $tipoUsuarioArray;



      }
      /**
       * [getTipoUsuario description]
       * @param  [int] $id [id del Usuario]
       * @return [array]     [arreglo de usuarios]
       */
      public static function getTipoUsuario($id)
      {
          Barcast::open();
          $result =   mysqli_query(Barcast::$dbh,"SELECT * FROM tipousuario WHERE idTipoUsuario = $id");

          if ($result)
          {
            $tipoUsuario   =   mysqli_fetch_object($result);
            $permisos =  array();
            $item = new TipoUsuario();

            $item->setIdTipoUsuario($tipoUsuario->idTipoUsuario);
            $item->setDescripcion($tipoUsuario->descripcion);
            $item->setFechaAlta($tipoUsuario->fechaAlta);
            $item->setFechaModificacion($tipoUsuario->fechaModificacion);
            $item->setActivo($tipoUsuario->activo);

            $result2 =   mysqli_query(Barcast::$dbh,"SELECT * FROM barcast.permisos WHERE idTipoUsuario = $id");

            if ($result2)
            {

              while ($permiso  = mysqli_fetch_object($result2))
              {
                $item2 = new Permisos();
                $item2->setIdPermisos($permiso->idPermiso);
                $item2->setDescripcion($permiso->descripcion);
                $item2->setFechaAlta($permiso->fechaAlta);
                $item2->setFechaModificacion($permiso->fechaModificacion);
                $item2->setActivo($permiso->activo);
                $item2->setIdTipoUsuario($permiso->idTipoUsuario);
                array_push($permisos,$item2);
              }
            }

            $item->setPermisos($permisos);



          }
          Barcast::close();

          return $item;
      }


      public function editTipoUsuario($description,$id)
      {
          Barcast::open();
          $result =   mysqli_query(Barcast::$dbh,"UPDATE tipousuario
                                                  SET
                                                  descripcion = '$description',
                                                  fechaModificacion= curdate()
                                                  WHERE idTipoUsuario = $id");

          Barcast::close();

      }

      public static function addTipoUsuario($description)
      {
          Barcast::open();
          $result =   mysqli_query(Barcast::$dbh,"INSERT INTO tipousuario
                                                  (
                                                  	 descripcion,
                                                      fechaAlta,
                                                      fechaModificacion
                                                  )
                                                  VALUES
                                                  (
                                                  	'$description',
                                                      curdate(),
                                                      curdate()
                                                  )
                                                  ");

          Barcast::close();
      }

      public static function activoTipoUsuario($id,$active)
      {
        if ($active)
        {
          $active = 0;
        }
        else
        {
          $active = 1;
        }
          Barcast::open();
          $result =   mysqli_query(Barcast::$dbh,"UPDATE tipousuario
                                                  SET
                                                  activo = $active
                                                  WHERE idTipoUsuario = $id
                                                  ");

          Barcast::close();
      }

    }


?>
