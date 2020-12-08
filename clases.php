<?php
class Humano{
    public $cabello = "Negro";
    public $Vocabulario;
    public function saludar(){
        return "Hola como estas";
    }
public function Hablar(){
    return $this->saludar();
    }
    public function Lenguaje(){
        $this->vocabulario - "Español";
    }
}
$obj = new Humano();
echo $obj->saludar();