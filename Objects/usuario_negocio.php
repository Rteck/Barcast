<?php

  /**
   * Clase para definir la tabla usuario_negocio de la base de datos
   */
  class usuario_negocio
  {
    private $idUsuarioNegocio;
    private $idNegocio;
    private $idUsuario;
    private $idTipoUsuario;

    //Que onda con el constructor
    function __construct()
    {
    
    }

//Getters

    public function getidUsuarioNegocio()
    {
      return $this->idUsuarioNegocio;
    }

    public function getidNegocio()
    {
      return $this->idNegocio;
    }

    public function getidUsuario()
    {
      return $this->idUsuario;
    }

    public function getidTipoUsuario()
    {
      return $this->idTipoUsuario;
    }

    //setters

    public function setidUsuarioNegocio($idUsuarioNegocio)
    {
      $this->idUsuarioNegocio = $idUsuarioNegocio;
    }

    public function setidNegocio($idNegocio)
    {
      $this->idNegocio = $idNegocio;
    }

    public function setidUsuario($idUsuario)
    {
      $this->idUsuario = $idUsuario;
    }

    public function setidTipoUsuario($idTipoUsuario)
    {
      $this->idTipoUsuario = $idTipoUsuario;
    }

  }

 ?>
