<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10:: Exercicios Propostos 01</title>
</head>
<body>

<?php

abstract class FormaGeometria
{
    public abstract function calculoDaArea();

}

class Quadrado extends FormaGeometria
{
    private $comprimento;
    private $altura;

    public function __construct($comprimento, $altura)
    {
        $this->comprimento = $comprimento;
        $this->altura = $altura;
    }

    public function calculoDaArea()
    {
        echo $this->comprimento * $this->altura;
    }

}

class Circulo extends FormaGeometria
{
	private $raio;
    
    public function __construct($raio)
    {
    	$this->raio = $raio;
    }
    
    public function calculoDaArea()
    {
    	echo (3.14*($this->raio * $this->raio));
    }
    


}

class Losangulo extends FormaGeometria
{
    private $diagonalMaior;
    private $diagonalMenor;

    public function __construct($diagonalMaior, $diagonalMenor)
    {
        $this->diagonalMaior = $diagonalMaior;
        $this->diagonalMenor = $diagonalMenor;
    }

    public function calculoDaArea()
    {
        echo ($this->diagonalMaior * $this->diagonalMenor)/2;
    }

}

$q = new Quadrado(2, 2);
$q->calculoDaArea();
echo "<BR><BR>";

$c = new Circulo(4, 2);
$c->calculoDaArea();
echo "<BR><BR>";

$l = new Losangulo(10, 5);
$l->calculoDaArea();


?>
    
</body>
</html>