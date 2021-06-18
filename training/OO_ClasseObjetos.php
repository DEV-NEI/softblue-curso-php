<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OO: Classes e Objetos</title>
</head>
<body>

<?php

class Carro
{
    private $velocidade;
    private $cor;

    public function __construct($cor)
    {
        $this->setCor($cor);
        $this->setVelocidade(0);
    }

    public function getVelocidade()
    {
        return $this->velocidade;

    }

    public function getCor()
    {
        return $this->cor;
    }

    private function setVelocidade($velocidade)
    {
        if($velocidade > 110 || $velocidade < 0)
        {
            echo "Velocidade não permitida. <BR>";
        }
        else{
           $this->velocidade = $velocidade;
    }
    }

    public function setCor($cor)
    {
        $this->velocidade = $cor;
    }

    public function acelerar()
    {
        $this->setVelocidade($this->getVelocidade() +1);
    }

    public function frear()
    {
        $this->setVelocidade($this->getVelocidade() -1);
    }

}


//$meuCarro = new Carro();
// $meuCarro->cor = "preta";
// $meuCarro->velocidade = 50;
//echo "O carrro de cor " . $meuCarro->cor . " está andando " . $meuCarro->velocidade;
//echo "<BR>";

$meuCarro = new Carro("Vermelha");

$meuCarro->acelerar();
$meuCarro->acelerar();
$meuCarro->acelerar();
$meuCarro->acelerar();
$meuCarro->acelerar();
$meuCarro->frear();
$meuCarro->frear();

echo "O carrro de cor " . $meuCarro->getCor() . " está andando " . $meuCarro->getVelocidade();
echo "<BR>";

//$meuCarro->setVelocidade (70);
//echo "O carrro de cor " . $meuCarro->getCor() . " está andando " . $meuCarro->getVelocidade();
//echo "<BR>";

//$meuCarro->setVelocidade (130);
//echo "O carrro de cor " . $meuCarro->getCor() . " está andando " . $meuCarro->getVelocidade();
//echo "<BR>";

//$meuCarro->setVelocidade (-200);
//echo "O carrro de cor " . $meuCarro->getCor() . " está andando " . $meuCarro->getVelocidade();
//echo "<BR>";



//$meuCarro->cor = "Amarela";
//$meuCarro->velocidade = -220;

//echo "O carrro de cor " . $meuCarro->cor . " está andando " . $meuCarro->velocidade;
//echo "<BR>";









?>
    
</body>
</html>