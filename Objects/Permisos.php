<?php

  /**
   * Clase para definir la tabla permisos de la base de datos
   */
  class permisos
  {
    private $idPermisos;
    private $descripcion;
    private $fecha_alta;
    private $fecha_modificacion;
    private $activo;
    private $idTipoUsuario;

    //Que onda con el constructor
    function __construct()
    {
      
    }

//Getters

    public function getidPermisos()
    {
      return $this->idPermisos;
    }

    public function getdescripcion()
    {
      return $this->descripcion;
    }

    public function getfecha_alta()
    {
      return $this->fecha_alta;
    }

    public function getfecha_modificacion()
    {
      return $this->fecha_modificacion;
    }

    public function getactivo()
    {
      return $this->activo;
    }

    public function getidTipoUsuario()
    {
      return $this->idTipoUsuario;
    }

    //setters

    public function setidPermisos($idPermisos)
    {
      $this->idPermisos = $idPermisos;
    }

    public function setdescripcion($descripcion)
    {
      $this->descripcion = $descripcion;
    }

    public function setfecha_alta($fecha_alta)
    {
      $this->fecha_alta = $fecha_alta;
    }

    public function setfecha_modificacion($fecha_modificacion)
    {
      $this->fecha_modificacion = $fecha_modificacion;
    }

    public function setactivo($activo)
    {
      $this->activo = $activo;
    }

    public function setidTipoUsuario($idTipoUsuario)
    {
      $this->idTipoUsuario = $idTipoUsuario;
    }

  }

 ?>
