<!DOCTYPE html>
<html>
<body>

<?php

  class Geral
{
	public $nome;
    public $idade;
    
    public function __construct($nome, $idade)
    {
    	$this->nome = $nome;
        $this->idade = $idade;
    }
    
    public function apresentar()
    { 
    	echo "Nome: " . $this->nome . "<BR>";
        echo "Idade: " . $this->idade . "<BR>";
     }

}

interface Animal
{
	     
    public function Comportamento();   

}

class Cachorro extends Geral implements Animal
{
	public function Comportamento(){
    	echo "au , au , au. . <BR><BR>";
    }

}

class Gato extends Geral implements Animal
{
	public function Comportamento(){
    	echo "miau , miau , miau. . <BR><BR>";
    }

}


class Pato extends Geral implements Animal
{
	public function Comportamento(){
    	echo "piu , piu.. . <BR><BR>";
    }    
   
}


$cachorro = new Cachorro("Toby", 13);
$cachorro->apresentar();
$cachorro->Comportamento();

$gato = new Gato("Mila", 4);
$gato->apresentar();
$gato->comportamento();

$pato = new Pato("Shi", 2);
$pato->apresentar();
$pato->comportamento();


?>

</body>
</html>
