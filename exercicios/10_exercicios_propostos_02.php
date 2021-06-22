<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10: Exercicios Propostos 02</title>
</head>
<body>
<h1>Locadora</h1>

<?php

abstract class Cadastro
{
    public $nome;
    public $telefone;
    public $endereco;

    public function __construct($nome, $telefone, $endereco)
    {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
    }

    public abstract function apresentar ();

}


class Usuario extends Cadastro
{
    private $vezesQueLocou;

    public function __construct($nome, $telefone, $endereco, $vezesQueLocou)
    {
        parent:: __construct($nome, $telefone, $endereco);
        
        $this->vezesQueLocou = $vezesQueLocou;
    }

    public function apresentar()
    {
        echo "Nome: " . $this->nome . "<BR>";
        echo "Telefone: " . $this->telefone . "<BR>";
        echo "Endereco: " . $this->endereco . "<BR>";
        echo "Número de filmes que locou: " . $this->vezesQueLocou . "<BR>";

    }

}

class Funcionario extends Cadastro
{
	private $salario;
    
    public function __construct($nome, $telefone, $endereco, $salario)
    {
    	parent:: __construct($nome, $telefone, $endereco);
        
        $this->salario = $salario;
    
    }
    
    public function apresentar()
    {
    	echo "Nome: " . $this->nome . "<BR>";
        echo "Telefone: " . $this->telefone . "<BR>" ;
        echo "Endereço: " . $this->endereco . "<BR>";
        echo "Salário: " . $this->salario . "<BR>";    
    
    }   

}

abstract class Produto 
{
        public $titulo;
        public $estilo;
        

        public function __construct($titulo, $estilo)
        {
            $this->titulo = $titulo;
            $this->estilo = $estilo;            
        }

        public abstract function exibir();     
       
      
}


class CD extends Produto
{
	public $nomeDoArtista;
    
    public function __construct($nomeDoArtista, $titulo, $estilo)
    {
    	parent:: __construct($titulo, $estilo);
        
    	$this->nomeDoArtista = $nomeDoArtista;
    }
    
    public function exibir()
    {
        echo "Nome do Artista: " . $this->nomeDoArtista . "<BR>";
        echo "Nome do Álbum: " . $this->titulo . "<BR>";
        echo "Estilo: " . $this->estilo . "<BR>";
    }    
}

class DVD extends Produto
{
    public function exibir()
    {        
        echo "Título do Álbum: " . $this->titulo . "<BR>";
        echo "Estilo: " . $this->estilo . "<BR>";
    }    
}


class Bluray extends Produto
{
	public $resolucao;
    
    public function __construct($titulo, $estilo, $resolucao)
    {
    	parent:: __construct($titulo, $estilo);
        
        $this->resulucao = $resolucao;
    }
    
    public function exibir()
    {
    	echo "Título do Bluray: " . $this->titulo . "<BR>";
        echo "Estilo: " . $this->estilo . "<BR>";
        echo "Resolução(HD/FHD): " . $this->resolucao . "<BR>" ;
    }

}




echo "Cliente: <BR>";
$usuario = new Usuario("André Milani", "(11)2236-1790", "Rua, XYZ", 3);
$usuario->apresentar();

echo "<BR><BR>";
echo "Funcionário(a): <BR>";
$funcionario = new Funcionario("Fulano de Tal", "(12)2134-0000", "Rua, ABC", 2500);
$funcionario->apresentar();

echo "<BR><BR>";
echo "CD <BR>";
$cd = new CD("Coldplay", "Kaleidoscope(Epack)", "Rock");
$cd->exibir();


echo "<BR><BR>";
echo "DVD <BR>";
$dvd = new DVD("Live Experience", "axé");
$dvd->exibir();

echo "<BR><BR>";
echo "Bluray <BR>";
$bluray = new Bluray("Leonardo Acústico", "Sertanejo", "HD");
$bluray->exibir();





?>
    
</body>
</html>