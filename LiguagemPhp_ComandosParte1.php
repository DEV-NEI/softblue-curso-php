<!DOCTYPE html>
<html>
<body>

<style>
	body{
    	background-color: #d0d0d0;
        margin: 20px;        
    }
</style>

<?php

	echo "Linguagem PHP <BR>";

	$var1 = "PHP";
	$variavelValor = 50.15;
	echo $var1 . "<BR>";
	echo $variavelValor . "<BR>";
    
    define("PI", 3.14);
    $resultado = 3 * PI;
    echo $resultado ."<BR>";
    
    define("NOME_EMPRESA", "Softblue");
    echo "Nome da Empresa: " . NOME_EMPRESA . "<BR>";

	$x = 3 + 5;
    $x = 3 - 5;
    $x = 3 * 5;
    $x = 3 / 5;
    $x = 16 % 5;
    
    $x = 3;
    // $x++;
    ++$x;    
    echo $x . "<BR>";
    
    $x = 3;
    $y = 1 + $x++;
    echo "x = " . $x . " y = " . $y . "<BR>";  
    
    $x = 3;
    $y = 1 + ++$x;
    echo "x = " . $x . " y = " . $y . "<BR>";
    
    $x = 3;
    $x +=5;
    echo $x . "<BR>";
    
    // Arredondamentos
    
    echo round(5.5, 0, PHP_ROUND_HALF_DOWN) . "<BR>";
    echo round(5.5, 0, PHP_ROUND_HALF_UP) . "<BR>";
    echo round(5.5, 0, PHP_ROUND_HALF_EVEN) . "<BR>";
    echo round(5.5, 0, PHP_ROUND_HALF_ODD) . "<BR>";

	echo round(5.55, 1, PHP_ROUND_HALF_DOWN) . "<BR>";
    echo round(5.55, 1, PHP_ROUND_HALF_UP) . "<BR>";
    echo round(5.55, 1, PHP_ROUND_HALF_EVEN) . "<BR>"; //par
    echo round(5.55, 1, PHP_ROUND_HALF_ODD) . "<BR>";  //ímpar
	
    // Operadores Condicionais
    
    /*
    if("Softblue" == "Soft" . "blue")
    
    {
    	echo "Condição do comando IF foi aceita. <BR>";
    }
    else
    {
    	echo "NEGADO <BR>";
    }
    
    */
    
    // Operador && é esperto 
	$x = 5;
    
    if($x < 5 && ++$x < 4)
    {
    	echo "Condição do comando IF foi aceita. <BR>";
    }
    else
    {
    	echo "NEGADO <BR>";
    }
    echo $x . "<BR>";
    
    //short if
    
     if(10 /2 == 5)
    {
    	$x = "É cinco.<BR>";
    }
    else
    {
    	$x = "Não é cinco.<BR>";
    }
    echo $x . "<BR>";
    
    //short if
    //condição e valor caso se condicao for aceita ou não
    $x = 10 /2 == 5 ? "É cinco.<BR>" : "Não é cinco. <BR>";
    echo $x . "<BR>";
    
    $y = 14;
    $x = $y%2 == 0 ? "É par.<BR>" : "É ímpar.<BR>";
    echo $x . "<BR>";

    // Operações que omitem chaves

    if (2 == 1)
        echo "Operação 1 <BR>";    // 1.a operação que e colocada automaticamente pelo Php
        echo "Operação 1.5 <BR>";

        echo "Operação 2 <BR>";

    
    //Tomadas de Decições
    
    $i = 1;
    switch($i)
    {
    	case 0:
        	echo "O valor de i é 0 <BR>";
            break;
    	case 1:
        	echo "O valor de i é 1 <BR>";
            break;
        case 2:
        	echo "O valor de i é 2 <BR>";
            break;
         default:
         	echo "Nenhum <BR>";
            break;
    }
   
   
   // Laços de Repetição
   
   for ($i = 0; $i < 10; $i++)   
   {
   	
    
   if($i == 5)
   {
   	 // break;
     //	exit();  // Cancelamento do código, interrompe a execução do arquivo PHP como o tudo.
     continue;     
   }
   echo $i . " "; 
   }
   echo "Sequencia do códigoo funcionando ...<BR>";
   
   // Laço de Repetição while (testa apenas uma condição)
   
   $i = 0;
   while($i < 10)
   {
   	
    $i++;
   }
   echo "<BR>";
   
   
   // Outro teste
   
   $i = 0;
   while($i < 10)
   {
   	$i++;
   	if($i == 5)
    {
    	continue;
    }
    echo $i . " ";
   }
   echo "<BR>";
   
   // do while
   //Avalia condição no final do código
   //Executa pelo menos 1x.
   
   $i = 0;
   do 
   {
   	 echo $i . " ";
     $i++;   
   }while($i < 10);
   echo "<BR><BR>";
   
    //GoTo   (Não é uma boa prática usado em Orientado a Objeto)
   echo "Código iniciando...<BR>";
   goto saindo;
   
   echo "Código executando...<BR>";
   
   saindo:
   echo "Código finalizando...<BR>";
   
   //Super varáveis PHP
   
   echo $_SERVER["SERVER_ADDR"] . "<BR>";
   echo $_SERVER["SERVER_NAME"] . "<BR>";
   echo $_SERVER["HTTP_USER_AGENT"] . "<BR>";
   echo $_SERVER["REMOTE_ADDR"] . "<BR>"; 
   
    

?>

</body>
</html>
