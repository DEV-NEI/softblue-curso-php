<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OO: Classes e Objetos 2</title>
</head>
<body>


<?php

class Usuario
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
    	echo "Seu nome é " . $this->nome . " idade " . $this->idade . " anos.";
    
    }
    
    }
    
    $usuario = new Usuario("André", 40);
    $usuario->apresentar();

?>

</body>
</html>
