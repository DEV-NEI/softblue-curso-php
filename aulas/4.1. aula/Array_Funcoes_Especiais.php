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



//Funções Especiais print_r(impressão de valores)
// Comandos de array
//unset - excluindo posicao
// count e sizeof (tamanho do array)
//foreach (navegação de array)


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
print_r($arrayExemplo);











 
 


















?>
</body>
</html>
