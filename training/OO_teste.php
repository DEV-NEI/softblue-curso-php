<!DOCTYPE html>
<html>
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
    
    private function setvelocidade($velocidade)
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


class Moto extends Carro
{
	public $iscapacete;
    
	public function __construct($velocidade, $cor, $iscapacete)
    {
    	parent::__construct($velocidade, $cor);
        $this->iscapacete = $iscapacete;
    }
    
    public function getisCapacete()
    {
    	return $this->iscapacete;
    }
    
    public function setCapacete($iscapacete)
    {
    	$this->capacete = $iscapacete;
    }
    

	

}




$meuCarro = new Carro("preta");
//$meuCarro->setVelocidade = 50;

$meuCarro->acelerar();
$meuCarro->acelerar();
$meuCarro->acelerar();
$meuCarro->acelerar();
$meuCarro->acelerar();
$meuCarro->frear();
$meuCarro->frear();

echo "Meu carro de cor " . $meuCarro->getCor() . " andando com " . $meuCarro->getVelocidade();
echo "<BR><BR>";

$moto = new Moto("azul", 2, FALSE);

    if($moto->iscapacete)
    {
       echo "Esta usando capacete <BR>";
    }
    else
    {
   	   echo "Não está usando capacete <BR>";
    } 


$moto->acelerar();
$moto->acelerar();
$moto->acelerar();
$moto->acelerar();
$moto->acelerar();

$moto->frear();
$moto->frear();



echo "Moto de cor " . $moto->getCor() . " andando à " . $moto->getVelocidade() . "<BR>";



?>

</body>
</html>
