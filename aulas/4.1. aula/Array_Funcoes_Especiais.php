<!DOCTYPE html>
<html>
<body>

<?php

$arrayExemplo = array(5, "A", "Softblue");
echo $arrayExemplo[2]. "<BR>";
$arrayExemplo[2] = "Web";
echo $arrayExemplo[2] . "<BR>" ;
echo $arrayExemplo[1] . "<BR>";

//Criação e acesso com índices próprios
$arrayExemplo = array(alfa =>5, nome => "A", empresa=> "Softblue");
echo $arrayExemplo[empresa]  . "<BR>";
echo $arrayExemplo[alfa]  . "<BR>";
echo $arrayExemplo[nome]  . "<BR>";

// Multidimensinais
// Funcionalidade que permite armazenar array dentro de arrays
$arrayExemplo = array(5, array("andre", "milani"));
echo $arrayExemplo[0]  . "<BR>";
echo $arrayExemplo[1][0]  . "<BR>";



/*
* Funções Especiais print_r(impressão de valores)
* Comandos de array
* UNSET - excluindo posicao
* COUNT e SIZEOF -(tamanho do array)
* FOREAH - (navegação de array)
* ARRAY_PUSH e ARRAY_POP -(Trabalhando com pilhas) Adiciona e Remove
* ARRAY_SHIFT e ARRAY_UNSHIFT (Trabalhando com filas) Remove o primeiro elemento do array / Adiciona elemento no array na primeira posição
* ARRAY_MAP (executa a função em todo array)
* 
*/


//Criando um array
//Sintaxe (array) array();  (array) array(valores);



$meuArray = array();
echo $meuArray[1] . "<BR>";

$meuArray = array("Maça", "Melão", "Uva");
echo $meuArray[1]  . "<BR>";

$meuArray[1] = "Laranja";
echo $meuArray[1]  . "<BR>";

 $arrayExemplo = array ("PHP", "SQL", 100, "Assembler");
 print_r ($arrayExemplo). "<BR>";
 
 unset($arrayExemplo[1]);
 print_r ($arrayExemplo) . "<BR>";
 
 $arrayExemplo = array ("PHP", "SQL", 100, "Assembler");
 echo count($arrayExemplo) . "<BR>";
 
 echo(sizeof($arrayExemplo)) . "<BR>";
 
foreach($arrayExemplo as $posicoes) {
	echo "Tem no array: " . $posicoes . "," . "<BR>";
}

array_push($arrayExemplo, "André");
print_r($arrayExemplo. "<BR>");

$x = array_pop($arrayExemplo);
echo($x);
print_r($arrayExemplo) ;

echo count($arrayExemplo. "<BR>");
echo($x. "<BR>") ;

$x = array_shift($arrayExemplo);
echo ($x . "<BR>");
print_r($arrayExemplo);


array_unshift($arrayExemplo, "Urgente");
print_r($arrayExemplo) . "<BR>";

function insereMoeda($valor){
return "R$ ". $valor;
}

$arrayExemplo = array_map("insereMoeda", $arrayExemplo);
print_r($arrayExemplo) . "<BR>";

$arrayExemplo = array ("PHP", "SQL", 100, "Assembler");
print_r($arrayExemplo) . "<BR>";

// Verificando ocorrência
$arrayExemplo = array("Linguagem1"=> "Php", "Linguagem2"=> "SQL", "Linguagem3"=> 100, "Linguagem4"=> "Assembler" );
print_r($arrayExemplo) . "<BR>";


echo array_key_exists("Linguagem2", $arrayExemplo);
echo array_key_exists("Linguagem7", $arrayExemplo);

$keys = array_keys($arrayExemplo);
foreach($keys as $key) { echo $key. " ";}

$key = array_search("Php", $arrayExemplo);
echo($key) . "<BR>";

$key = in_array("SQL", $arrayExemplo);
echo($key);

$key = in_array("NOSQL", $arrayExemplo);
echo($key);

// Ordenação de array
// Embaralhar a orderm
 shuffle($arrayExemplo);
 print_r($arrayExemplo) . "<BR>";
 print_r($arrayExemplo) . "<BR>";
 


$arrayExemplo = array("Linguagem1"=>"Php", "Linguagem2"=>"SQL", "Linguagem3"=>100, "Linguagem4"=>"Assembler");

sort($arrayExemplo);
print_r($arrayExemplo);

rsort($arrayExemplo);
print_r($arrayExemplo);

//Transformação entre string e array

$stringExemplo = "var1=natacao&var2=basquete&teste=futebol";
parse_str($stringExemplo, $arrayResultado);
print_r($arrayResultado);

$stringExemplo = "Aluno do curso de PHP";
$arrayResultado = explode(" ", $stringExemplo);
print_r($arrayResultado);


$arrayExemplo = array("Maçã", "Laranja", "Mamão", "Uva");
$stringResultado = implode("-", $arrayExemplo);
print_r($stringResultado);

?>
</body>
</html>
