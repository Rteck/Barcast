<?php
    /**
     *
     */
    class BarcastHelper
    {
      private static $DominiosValidos = array(
                                        'hotmail.com' ,
                                        'gmail.com'   ,
                                        'yahoo.com.mx',
                                        'live.com.mx' ,
                                        'yahoo.com'   ,
                                       'hotmail.es'   ,
                                       'live.com'     ,
                                       'hotmail.com.mx',
                                       'prodigy.net.mx',
                                       'msn.com'       ,
                                       'outlook.com'
                                     );

      function __construct()
      {

      }

      public static function getDominios()
      {
        return self::$DominiosValidos;
      }
    }

?>
