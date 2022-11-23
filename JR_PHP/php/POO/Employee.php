<?php
class Employee{

    public $nom ;
    public $sou ;

    public function initialize($nom,$sou){  
        //return "{$this->nom} {$this->sou}";
        $this->nom = $nom;
        $this->sou = $sou;
    }   
    public function muestra(){
        //global $nom, $sou;
        if ($this -> sou > 600){
        echo $this -> nom."Has de pagar impuestos";
        }
        else{
        echo $this ->nom."No has de pagar impuestos";
        }
    }
}
/* public function __construct($nom, $sou)
    {
        $this->nom = $nom;
        $this->sou = $sou;
    }
    public function getNom(){
		return $this -> nom;
	}
	public function getSou(){
		return $this -> sou;
	}
	//setters
	public function setNom($nom){
		$this->nom=$nom;
	}

	public function setSou($sou){
		$this->sou=$nom;
	}*/
?>
