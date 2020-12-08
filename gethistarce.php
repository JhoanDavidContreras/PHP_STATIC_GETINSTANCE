<?php


class Humano{  
    public static $humano;
    public $saludar;
    public function __construct($argc){
      $this->saludar = $argc;

    }
    public static function gestinstamce($argc=null){
        if(!(self::$humano instanceof self)){
            self::$humano = new Humano($argc);
        }
        return self::$humano;
        
    }
    public function saludar(){
        return $this->saludar;
    }
    public function Hablar(){
        return "Jhoan";
    }

    
 }
echo Humano::gestinstamce("hola")->saludar();   
 ?>