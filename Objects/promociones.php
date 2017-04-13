<?php

  /**
   * Clase para definir la tabla promociones de la base de datos
   */
  class promociones
  {
    private $idPromociones;
    private $fotos;
    private $idDia;
    private $fecha_Inicio;
    private $fecha_fin;
    private $activo;
    private $idNegocio;

    //Que onda con el constructor
    function __construct()
    {
    
    }

//Getters

    public function getidPromociones()
    {
      return $this->idPromociones;
    }

    public function getfotos()
    {
      return $this->fotos;
    }

    public function getidDia()
    {
      return $this->idDia;
    }

    public function getfecha_Inicio()
    {
      return $this->fecha_Inicio;
    }

    public function getfecha_fin()
    {
      return $this->fecha_fin;
    }

    public function getactivo()
    {
      return $this->activo;
    }

    public function getidNegocio()
    {
      return $this->idNegocio;
    }

    //setters

    public function setidPromociones($idPromociones)
    {
      $this->idPromociones = $idPromociones;
    }

    public function setfotos($fotos)
    {
      $this->fotos = $fotos;
    }

    public function setidDia($idDia)
    {
      $this->idDia = $idDia;
    }

    public function setfecha_Inicio($fecha_Inicio)
    {
      $this->fecha_Inicio = $fecha_Inicio;
    }

    public function setfecha_Inicio($fecha_fin)
    {
      $this->fecha_Inicio = $fecha_fin;
    }

    public function setactivo($activo)
    {
      $this->activo = $activo;
    }

    public function setidNegocio($idNegocio)
    {
      $this->idNegocio = $idNegocio;
    }

  }

 ?>
