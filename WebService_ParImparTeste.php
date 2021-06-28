<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebService: Consumindo</title>
</head>
<body>

<?php

    $numero = 20;

    //Conexao ao WebService
    $xml = simplexml_load_file("http://localhost/softblue-curso-php/WebService_ParImparService.php?numero=" . $numero);

    if(isset($xml->informacao))
    {
        if($xml->informacao == "PAR")
        {
            echo "O número é par.";
        }
        else if ($xml->informacao == "ÍMPAR")
        {
            echo "O número é ímpar.";
        }
        else{
            echo "Retorno inválido.";
        }
    }
    else{
        echo "Falha na comunicação com o web service.";
    }

?>
    
</body>
</html>