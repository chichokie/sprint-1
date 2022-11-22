<?php
class Person
{
    public $nom = 'John';
    public $sou = 'Doe';
   
    public function __construct($nom, $sou)
    {
        $this->nom = $nom;
        $this->sou = $sou;
    }
    public function getNom(){
		return $this->edad;
	}
	public function getSou(){
		return $this->peso;
	}
	//setters
	public function setNom($value){
		$this->nom=$value;
	}

	public function setSou($value){
		$this->sou=$value;
	}
    
    public function initialize($nom, $sou)
    {
        return "{$this->nom} {$this->sou}";
    }
    public function print()
    {
        echo $nom;
        if ($sou > 600){
        echo "Has de pagar impuestos";
        else{
        echo "No has de pagar impuestos";
        }
        }
    }
}
?>