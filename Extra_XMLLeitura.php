<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lendo um XML</title>
</head>
<body>

<?php

    $dom = new DOMDocument();
    $dom->load("Extra_XML.xml");

    $estados = $dom->getElementsByTagName("OBJECT");
    

    foreach($estados as $estado)
    {
        echo $estado->getElementsByTagName("ID")->item(0)->nodeValue . "<BR>";
        echo $estado->getElementsByTagName("ID")->item(0)->getAttribute("Sul") . "<BR>";
        echo $estado->getElementsByTagName("DESCRIPTION")->item(0)->nodeValue . "<BR>";
        echo "<BR>";
    }


?>
    
</body>
</html>