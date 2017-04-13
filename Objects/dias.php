<?php

  /**
   * Clase para definir la tabla dias de la base de datos
   */
  class dias
  {
    private $idDias;
    private $descripcion;

    // Que onda con el constructor?
    function __construct()
    {
      
    }

//Getters
    public function getidDias()
    {
      return $this->idDias;
    }

    public function getdescripcion()
    {
      return $this->descripcion;
    }

    //setters

    public function setidDias($idDias)
    {
      $this->idDias = $idDias;
    }

    public function setdescripcion($descripcion)
    {
      $this->descripcion = $descripcion;
    }

  }


 ?>
