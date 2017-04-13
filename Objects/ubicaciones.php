<?php

  /**
   * Clase para definir la tabla ubicaciones de la base de datos
   */
  class ubicaciones
  {
    private $idUbicaciones;
    private $calle;
    private $numero;
    private $colonia;
    private $cp;
    private $telefono;
    private $horario;
    private $fecha_Alta;
    private $fecha_Modificacion;

    //Que onda con el constructor
    function __construct()
    {
      
    }

//Getters

    public function getidUbicaciones()
    {
      return $this->idUbicaciones;
    }

    public function getcalle()
    {
      return $this->calle;
    }

    public function getnumero()
    {
      return $this->numero;
    }

    public function getfecha_Alta()
    {
      return $this->fecha_Alta;
    }

    public function getfecha_Modificacion()
    {
      return $this->fecha_Modificacion;
    }

    public function getcolonia()
    {
      return $this->colonia;
    }

    public function getcp()
    {
      return $this->cp;
    }

    public function gettelefono()
    {
      return $this->telefono;
    }

    public function gethorario()
    {
      return $this->horario;
    }

    //setters

    public function setidUbicaciones($idUbicaciones)
    {
      $this->idUbicaciones = $idUbicaciones;
    }

    public function setcalle($calle)
    {
      $this->calle = $calle;
    }

    public function setnumero($numero)
    {
      $this->numero = $numero;
    }

    public function setcolonia($colonia)
    {
      $this->colonia = $colonia;
    }

    public function setcp($cp)
    {
      $this->cp = $cp;
    }

    public function settelefono($telefono)
    {
      $this->telefono = $telefono;
    }

    public function sethorario($horario)
    {
      $this->horario = $horario;
    }

    public function setfecha_Modificacion($fecha_Modificacion)
    {
      $this->fecha_Modificacion = $fecha_Modificacion;
    }

    public function setfecha_Alta($fecha_Alta)
    {
      $this->fecha_Alta = $fecha_Alta;
    }

  }

 ?>
