<?php
class Rectangulo extends Shape{

    public $sup ;

    public function area(){
        //global $lado, $alto;
        $this -> sup =  $this ->lado * $this -> alto;
        echo $this -> sup;
    }
    /*
    public function getlado(){
		return $this -> lado;
	}
	public function getalto(){
		return $this -> alto;
	}
	//setters
	public function setlado($lado){
		$this->lado=$lado;
	}

	public function setalto($alto){
		$this->alto=$lado;
	}

    public function initialize($lado,$alto){  
       
        $this->lado = $lado;
        $this->alto = $alto;
    }   */
}
?>