<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OO: Exercicios Propostos 02</title>
</head>
<body>

<?php

abstract class Pessoa{
    protected $nome;
    protected $telefone;
    protected $endereco;

    public function __construct($nome, $telefone, $endereco){
        $this->nome = $nome;
        $this->telefone;
        $this->endereco;
    }

    public function getNome() {
        return $this->nome;
    }

    abstract function showInfoPessoa();
}

class Usuario extends Pessoa {
    private $numeroDeLocacoes = 0;

    public function getNumeroDeLocacoes(){
        return $this->numeroDeLocacoes;
    }

    public function setNumeroDeLocacoes($numeroDeLocacoes){
        $this->numeroDeLocacoes = $numeroDeLocacoes;
    }

    public function showInfoPessoa(){
        echo "Informações de pessoa: ";
        echo $this->nome . " ";
        echo $this->telefone . " ";
        echo $this->endereco . " ";
        echo $this->numeroDeLocacoes . "<BR>";
    }

}


class Funcionario extends Pessoa{
    private $salario;

    public function __construct($nome, $telefone, $endereco, $salario){
        parent::__construct($nome, $telefone, $endereco);
        $this->salario = $salario;
    }

    public function showInfoPessoa() {
        echo "Informações de funcionario: ";
        echo $this->nome . " ";
        echo $this->telefone . " ";
        echo $this->endereco . " ";
        echo $this->salario . "<BR>";

    }
}

abstract class Produto {
    protected $estilo;
    protected $codigo;

    public function __construct($estilo, $codigo){
        $this->estilo = $estilo;
        $this->codigo = $codigo;
    }

public function getCodigo(){
    return $this->codigo;
    }

    abstract function showInfoProduto();
}


class CD extends Produto{
    private $artista;
    private $album;

    public function __construct($estilo, $codigo, $artista, $album){
        parent::__construct($estilo, $codigo);
        $this->artista = $artista;
        $this->album = $album;
    }

    public function showInfoProduto(){
        echo "Informações de CD: ";
        echo $this->estilo . " ";
        echo $this->codigo . " ";
        echo $this->artista . " ";
        echo $this->album . "<BR>";
    }
}

class DVD extends Produto{
    private $titulo;

    public function __construct($estilo, $codigo, $titulo){
        parent::__construct($estilo, $codigo);
        $this->titulo = $titulo;
    }

    public function showInfoProduto(){
        echo "Informações de DVD: ";
        echo $this->estilo . " ";
        echo $this->codigo . " ";
        echo $this->titulo . "<BR>";
    }
}

class Bluray extends Produto{
    private $titulo;
    private $resolucao;

    public function __construct($estilo, $codigo, $titulo, $resolucao){
        parent::__construct($estilo, $codigo);
        $this->titulo = $titulo;
        $this->resolucao = $resolucao;
    }

    public function showInfoProduto(){
        echo "informações de Bluray: ";
        echo $this->estilo . " ";
        echo $this->codigo . " ";
        echo $this->titulo . " ";
        echo $this->resolucao . "<BR>";
    }
}

class Locacao{
    private $funcionario;
    private $usuario;
    private $produto;

    public function __construct($funcionario, $usuario, $produto){
        $this->funcionario = $funcionario;
        $this->usuario = $usuario;
        $this->produto = $produto;

        $locacaoDoUsuario = $this->usuario->getNumeroDeLocacoes();
        $this->usuario->setNumeroDeLocacoes($locacaoDoUsuario + 1);
    }

    public function showInfoLocacao() {
        echo "LOCACAO realizada por: ";
        $this->usuario->showInfoPessoa();

        echo "LOCAÇÃO atendida por: ";
        $this->funcionario->showInfoPessoa();

        echo "LOCACAO do produto: ";
        $this->produto->showInfoProduto();

        echo "<BR>";
    }
}

class Locadora{
    private $funcionarios = array();
    private $usuarios = array();
    private $produtos = array();
    private $locacoes = array();

    public function criarFuncionario($nome, $telefone, $endereco, $salario){
        $funcionario = new Funcionario($nome, $telefone, $endereco, $salario);
        array_push($this->funcionarios, $funcionario);
    }

    public  function criarUsuario($nome, $telefone, $endereco) {
        $usuario = new Usuario($nome, $telefone, $endereco);
        array_push($this->usuarios, $usuario);
    }

    public function criarCD($estilo, $codigo, $artista, $album){
        $produto = new CD($estilo, $codigo, $artista, $album);
        array_push($this->produtos, $produto);
    }

    public function criarDVD($estilo, $codigo, $titulo) {
        $produto = new DVD($estilo, $codigo, $titulo);
        array_push($this->produtos, $produto);
    }

    public function criarBluray($estilo, $codigo, $titulo, $resolucao){
        $produto = new Bluray($estilo, $codigo, $titulo, $resolucao);
        array_push($this->produtos, $produto);
    }

    public function criarLocacao($funcionario, $usuario, $produto){
        $locacao = new Locacao($funcionario, $usuario, $produto);
        array_push($this->locacoes, $locacao);
    }

    public function listaUsuarios(){
        echo "<BR> LISTA DE USUÁRIOS: <BR>";

        foreach($this->usuarios as $usuario){
            $usuario->showInfoPessoa();
        }
    }

    public function listaFuncionarios(){
        echo "<BR> LISTA DE FUNCIONÁRIOS: <BR> ";

        foreach($this->funcionarios as $funcionario) {
            $funcionario->showInfoPessoa();
        }
    }

    public function listaProdutos() {
        echo "<BR> LISTA DE PRODUTOS: <BR>";

        foreach($this->produtos as $produto){
            $produto->showInfoProduto();
        }
    }

    public function listaLocacoes(){
        echo "<BR> LISTA DE LOCAÇÕES: <BR>";

        foreach($this->locacoes as $locacao){
            $locacao->showInfoLocacao();
        }
    }

    public function getUsuarioPeloNome($nome){
        foreach($this->usuarios as $usuario){
            if($usuario->getNome() == $nome)
                return $usuario;
        }

        return null;
    }

    public function getFuncionarioPeloNome($nome) {
        foreach($this->funcionarios as $funcionario) {
            if($funcionario->getNome() == $nome)
                return $funcionario;
        } 
        
        return null;
     }


    public function getProdutoPeloCodigo($codigo){
        foreach($this->produtos as $produto){
            if($produto->getCodigo() == $codigo)
                return $produto;
        }
        return null;
    }
    
}

    //Criando a locadora

    $locadora = new Locadora();

    //Inserindo funcionários

    $locadora->criarFuncionario("André", "9999-9999", "Rua da Softblue", 1000);
    $locadora->criarFuncionario("Carlos", "9999-9998", "Rua da Softblue", 1000);


    // Listando funcionarios:
    $locadora->listaFuncionarios();

    //Inserindo usuários
    $locadora->criarUsuario("Fernando", "9999-9997", "Rua Brasil");
    $locadora->criarUsuario("Samuel", "9999-9996", "Rua México");

    //Listando usuários
    $locadora->listaUsuarios();

    // Inserindo produtos
    $locadora->criarCD("Rock", 1, "U2", "Zooropa");
    $locadora->criarDVD("Suspense", 2, "A Noite Chuvosa");
    $locadora->criarBluray("Ação", 3, "O Tesouro", "FullHD");


    //Listando produtos

    $locadora->listaProdutos();

    // Criando locações: observe que é necessário capturar os objetos pelos seus
// nomes ou códigos, neste exemplo, para utilizá-los na criação da locação
    $funcionario = $locadora->getFuncionarioPeloNome("André");
    $usuario = $locadora->getUsuarioPeloNome("Samuel");
    $produto = $locadora->getProdutoPeloCodigo(1);
    $locadora->criarLocacao($funcionario, $usuario, $produto);

    $funcionario = $locadora->getFuncionarioPeloNome("Carlos");
    $usuario = $locadora->getUsuarioPeloNome("Fernando");
    $produto = $locadora->getProdutoPeloCodigo(2);
    $locadora->criarLocacao($funcionario, $usuario, $produto);

    $funcionario = $locadora->getFuncionarioPeloNome("André");
    $usuario = $locadora->getUsuarioPeloNome("Samuel");
    $produto = $locadora->getProdutoPeloCodigo(3);
    $locadora->criarLocacao($funcionario, $usuario, $produto);

// Listando locações
$locadora->listaLocacoes();




?>
    
</body>
</html>