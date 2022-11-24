<?php
class Triangulo extends Shape{

    public $sup ;

   /*public function __construct($lado, $alto){

        Shape::__construct ($lado,$alto);
        //$this->sup = $sup;
    }*/
    
    public function area(){
        //global $lado, $alto;
        $this -> sup =  $this -> lado * $this -> alto /2;
        echo $this -> sup;
    }
    
}
?>