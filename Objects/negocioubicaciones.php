<?php

  /**
   * Clase para definir la tabla negocioubicaciones de la base de datos
   */
  class negocioubicaciones
  {
    private $idNegocioUbicaciones;
    private $idNegocio;
    private $idUbicaciones;

    //Que onda con el constructor
    function __construct()
    {
      
    }

//Getters

    public function getidNegocioUbicaciones()
    {
      return $this->idNegocioUbicaciones;
    }

    public function getidNegocio()
    {
      return $this->idNegocio;
    }

    public function getidUbicaciones()
    {
      return $this->idUbicaciones;
    }

    //setters

    public function setidNegocio($idNegocioUbicaciones)
    {
      $this->idNegocioUbicaciones = $idNegocioUbicaciones;
    }

    public function setidNegocio($idNegocio)
    {
      $this->idNegocio = $idNegocio;
    }

    public function setidUbicaciones($idUbicaciones)
    {
      $this->idUbicaciones = $idUbicaciones;
    }

  }


 ?>
