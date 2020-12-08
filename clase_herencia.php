<?php
class Tipo_de_Animal{
    protected $Lista_Animales =array(
        "Leon" => array(),
        "Agila"=> array(),
        "Ballena"=> array()
    );
    public function estremidades($arg){ 
     return $this->Lista_Animales;
    }
}
class Animal extends Tipo_de_Animal{
    public $patas;
    public $pelaje; 
    public function Datos_de_los_animales($arg){ 

        $this->patas = $this->Estremidades($arg);
    }  

 }

 $obj = new Animal();
 $obj ->Datos_de_los_animales("Leon");
 Var_dump($obj->patas);
 ?>
