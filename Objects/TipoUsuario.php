<?php

  /**
   * Clase para definir la tabla tipousuario de la base de datos
   */
  class TipoUsuario
  {
    private $idTipoUsuario;
    private $descripcion;
    private $fechaAlta;
    private $fechaModificacion;
    private $activo;
    private $permisos;

    function __construct()
    {
      $this->permisos =  array();
    }

//Getters
    public function getIdTipoUsuario()
    {
      return $this->idTipoUsuario;
    }

    public function getDescripcion()
    {
      return $this->descripcion;
    }

    public function getFechaAlta()
    {
      return $this->fechaAlta;
    }

    public function getFechaModificacion()
    {
      return  $this->fechaModificacion;
    }

    public function getActivo()
    {
      return $this->activo;
    }

    public function getPermisos()
    {
      return $this->permisos;
    }

    //setters

    public function setIdTipoUsuario($idTipoUsuario)
    {
      $this->idTipoUsuario = $idTipoUsuario;
    }

    public function setDescripcion($descripcion)
    {
      $this->descripcion = $descripcion;
    }

    public function setFechaAlta($fechaAlta)
    {
      $this->fechaAlta = $fechaAlta;
    }

    public function setFechaModificacion($fechaModificacion)
    {
      $this->fechaModificacion = $fechaModificacion;
    }

    public function setActivo($activo)
    {
      $this->activo = $activo;
    }

    public function setPermisos($permisos)
    {
      $this->permisos = $permisos;
    }

  }


 ?>
