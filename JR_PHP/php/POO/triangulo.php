<?php
class Triangulo extends {

    public $anxo ;
    public $alto ;
   
   /public function __construct($anxo, $alto)
    {
        $this->anxo = $anxo;
        $this->alto = $alto;
    }
    /*
    public function getanxo(){
		return $this -> anxo;
	}
	public function getalto(){
		return $this -> alto;
	}
	//setters
	public function setanxo($anxo){
		$this->anxo=$anxo;
	}

	public function setalto($alto){
		$this->alto=$anxo;
	}*/

    public function initialize($anxo,$alto){  
       
        $this->anxo = $anxo;
        $this->alto = $alto;
    }   

    public function print(){
        global $anxo, $alto;
        if ($alto > 600){
        echo $anxo."Has";
        }
        else{
        echo $anxo."No ";
        }
    }
}
?>