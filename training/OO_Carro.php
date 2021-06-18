<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OO: Carro</title>
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
        $this->velocidade = $velocidade;
    }

    public function setCor($cor)
    {
        $this->cor = $cor;
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

$meuCarro = new Carro("Prata");
$meuCarro->acelerar();
$meuCarro->acelerar();
$meuCarro->acelerar();
$meuCarro->acelerar();
$meuCarro->acelerar();
$meuCarro->frear();
$meuCarro->frear();

echo "O carro de cor " . $meuCarro->getCor() . " velocidade " . $meuCarro->getVelocidade();


?>
    
</body>
</html>