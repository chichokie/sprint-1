<?php
class Shape{

    public $lado ;
    public $alto ;
   
   public function __construct($lado, $alto)
    {
        $this->lado = $lado;
        $this->alto = $alto;
    }
    public function area(){
        
        /*$ap = ($lado/2)/tan(360/$num_lados/2)
        $sup = ($lado * $ap)/2 * $num_tri;
        $sup = $lado * $num_lados * $ap /2;*/
      
    }
    /*
    public function getanxo(){
		return $this -> lado;
	}
	public function getalto(){
		return $this -> alto;
	}
	//setters
	public function setanxo($lado){
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