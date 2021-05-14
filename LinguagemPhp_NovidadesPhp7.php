<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algumas Novidades Php 7</title>
</head>
<body>

<?php
    echo "Iniciando o arquivo<BR>";

    try
    {            
        mysql_connect("localhost");
    }

    catch(Error $e)
    {
        echo "Houve uma falha: " . $e->getMessage(). "<BR>";
    }

    echo "Finalizando o arquivo<BR>";

    // Operador spaceship <=>
    $x = "b" <=> "a";
    echo $x . "<BR>";

    $x = "b" <=> "b";
    echo $x . "<BR>";

    $x = "b" <=> "c";
    echo $x . "<BR>";

    switch($x)
    {
        case -1:
            echo "É menor/anterior<BR>";
            break;
        case 0:
            echo "É maior/anterior<BR>";
            break;
        case 1:
            break;
    }

    // Operador ??

    $x = null;

    if(isset($x) == TRUE) 
    {
        $y = $x;
    }
    else{
        $y = "Valor alternativo";

    }
    echo $y . "<BR>";


    // x com valor "teste"
    $x = "teste";

    if(isset($x) == TRUE) 
    {
        $y = $x;
    }
    else{
        $y = "Valor alternativo";

    }
    echo $y . "<BR>";

    // Com novo operador ??

    $z = $x ?? "Valor alternativo";
    echo $z . "<BR>";

?>
    
</body>
</html>