<!DOCTYPE html>
<html>
<title>OO: Construtores hierárquicos(Operador parent)</title>
<body>

<?php
class Mamifero
{
	public $idade;
    public $peso;
    
    public function __construct($idade, $peso)
    {
    	$this->idade = $idade;
        $this->peso = $peso;
    }
    
    public function andar() 
    {
    	echo "andar. <BR>";
    }
}

class Homem extends Mamifero
{
public $cpf;

public function __construct($idade, $peso, $cpf)
{
	parent::__construct($idade, $peso);
    
    $this->cpf = $cpf;
}

public function dirigir()
{
	echo "dirigir. <BR>";
}

public function apresentar()
{
	echo "Idade: " . $this->idade . " anos <BR>";
    echo "Peso: " . $this->peso . " Kg <BR>";
    echo "CPF: " . $this->cpf . "<BR>";
}

}

$m = new Mamifero(4, 4.6);
echo "Mamífero <BR>";
$m->andar();
echo "<BR>";

$h = new Homem(41, 60.3, 267544);
echo "Homem <BR>";
$h->andar();
$h->dirigir();
$h->apresentar();
 

?>

</body>
</html>

