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

    echo "Finalizando o arquivo<BR>"

?>
    
</body>
</html>