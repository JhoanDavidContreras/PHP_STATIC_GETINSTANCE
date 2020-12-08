<?php
class Tipo_de_Animal{
    protected static $Lista_Animales = array(
        "Leon"  => array()
        "Agila" => array()
        "Ballena" => array()
    );
  protected static function Estremidades($arg){
      array_push(self::$Lista_Animales){$arg} "4");
      return self::$Lista_Animales;{         
      }
  }
  class Animal extends Tipo_de_Animal{
      public static $patas;
      public $pelaje;
      public static function Datos_de_los_animales($arg);
            self::$patas = self::Estremidades($arg);
        }       
    }
    Animal:: Datos_de_los_animales("Leon");
    var_dump(Animal::$patas)
 ?>