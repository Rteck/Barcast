<?php

  class Barcast
  {
    const host="localhost";
    const usuario="root";// cambiar cuando se pase al servidor
    const password="";// cambiar cuando se pase al servidor
    const dbase="barcast";
    const tipoMBD="MySQL";
    static $dbh;

    public static function open()
    {
        self::$dbh= mysqli_connect (self::host, self::usuario, self::password) or die ('No se puede conectar al servidor del iMat :O');
        mysqli_select_db (self::$dbh,self::dbase) or die('No se puede seleccionar la base de datos porque: ' . mysqli_error());
    }

    public static function close()
    {
         mysqli_close(self::$dbh);
    }
  }


 ?>
