<?php

  /**
   * Clase para definir la tabla usuarios de la base de datos
   */
  class usuarios
  {
    private $idUsuarios;
    private $nombre;
    private $email;
    // considerar cambiar nombre a pass
    private $contraseña;
    private $idTipoUsuario;
    private $activo;

    //Que onda con el constructor
    function __construct()
    {

    }

//Getters

    public function getidUsuarios()
    {
      return $this->idUsuarios;
    }

    public function getnombre()
    {
      return $this->nombre;
    }

    public function getemail()
    {
      return $this->email;
    }

    // No acepta la ñ
    public function getcontrasena()
    {
      return $this->contraseña;
    }

    public function getidTipoUsuario()
    {
      return $this->idTipoUsuario;
    }


    public function getactivo()
    {
      return $this->activo;
    }

    //setters

    public function setidUsuarios($idUsuarios)
    {
      $this->idUsuarios = $idUsuarios;
    }

    public function setnombre($nombre)
    {
      $this->nombre = $nombre;
    }

    public function setemail($email)
    {
      $this->email = $email;
    }

    public function setcontrasena($contraseña)
    {
      $this->contraseña = $contraseña;
    }

    public function setidTipoUsuario($idTipoUsuario)
    {
      $this->idTipoUsuario = $idTipoUsuario;
    }


    public function setactivo($activo)
    {
      $this->activo = $activo;
    }

  }

 ?>
