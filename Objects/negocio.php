<?php

  /**
   * Clase para definir la tabla negocio de la base de datos
   */
  class negocio
  {
    private $idNegocio;
    private $nombre;
    private $descripcion;
    private $fecha_Alta;
    private $fecha_Modificacion;

    //Que onda con el constructor
    function __construct()
    {
      
    }

//Getters
    public function getidNegocio()
    {
      return $this->idNegocio;
    }

    public function getnombre()
    {
      return $this->nombre;
    }

    public function getdescripcion()
    {
      return $this->descripcion;
    }

    public function getfecha_Alta()
    {
      return $this->fecha_Alta;
    }

    public function getfecha_Modificacion()
    {
      return  $this->fecha_Modificacion;
    }

    //setters

    public function setidNegocio($idNegocio)
    {
      $this->idNegocio = $idNegocio;
    }

    public function setdescripcion($descripcion)
    {
      $this->descripcion = $descripcion;
    }

    public function setfecha_Alta($fecha_Alta)
    {
      $this->fecha_Alta = $fecha_Alta;
    }

    public function setfecha_Modificacion($fecha_Modificacion)
    {
      $this->fecha_Modificacion = $fecha_Modificacion;
    }

  }


 ?>
