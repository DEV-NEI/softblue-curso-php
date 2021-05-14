<?php
    ob_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Linguagem Php</title>
</head>
<body>

<?php

    echo "Iniciando <BR>";

   // include("LinguagemPhp_ArquivoAuxiliar.php");
   // include("LinguagemPhp_ArquivoAuxiliar.php");  // Se tiver 2 chamadas irá exibir as duas.

        
    // include_once("LinguagemPhp_ArquivoAuxiliar.php");  //Se impor 2x ou mais aparece somente uma vez.
    // include_once("LinguagemPhp_ArquivoAuxiliar.php");


   // require("LinguagemPhp_ArquivoAuxiliar.php");
   // require_once("LinguagemPhp_ArquivoAuxiliar.php");
   // require_once("LinguagemPhp_ArquivoAuxiliar.php");

    echo "Finalizando <BR>";

    // header("Location: http://www.google.com.br");

    //Função em Php

    function minhaFuncaoDobro(float $valor): float
    {
        // $valor = $valor * 2;
        $valor *=2;
        return $valor;
    }

    $x = minhaFuncaoDobro(5);
    echo $x . "<BR>";


    function minhaSoma(int $valor1, int $valor2): int
    {
        return $valor1 + $valor2;
    }

    $x = minhaSoma(5, 8);
    echo $x . "<BR>"


    
?>
    
</body>
</html>

<?php
    ob_flush();
?>
