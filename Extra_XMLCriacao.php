<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando um XML</title>
</head>
<body>

<?php

    $states = array("PR","RS","SC","SP", "RJ");
    $statesSouth = array("PR", "RS", "SC");

    $dom = new DOMDocument("1.0", "UTF-8");
    $dom->preserveWhiteSpace = FALSE;
    $dom->formatOutput = TRUE;

    $root = $dom->createElement("OBJECTS");
    $idFicticio = 1;

    foreach($states as $state)
    {
        $estadoElemento = $dom->createElement("OBJECT");
        $sulAtributo = $dom->createAttribute("Sul");

        if(in_array($state, $statesSouth))
        {
            $sulAtributo->value = "Sim";

        }
        else
        {
            $sulAtributo->value = "Não";

        }

        $idElemento = $dom->createElement("ID", $idFicticio);
        $idElemento->appendChild($sulAtributo);
        $idFicticio++;

        $descricaoElemento = $dom->createElement("DESCRIPTION", $state);
        
        $estadoElemento->appendChild($idElemento);
        $estadoElemento->appendChild($descricaoElemento);

        $root->appendChild($estadoElemento);

    }

    $dom->appendChild($root);
    $dom->save("Extra_XML.xml");




?>
    
</body>
</html>