<?php


class BaseData{

    public static $instance=null;

    public static function crearInstancia(){
        if(!isset(self::$instance)){
            $options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$instance = new PDO('pgsql:host=localhost;dbname=campus_db', "postgres", "123456", $options); 
            echo "Conectado...";
        }

      return self::$instance;  
    }
}

?>