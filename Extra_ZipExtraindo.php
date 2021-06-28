<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zip: Extraindo</title>
</head>
<body>

<?php

$filename = "Extra_ZipExemplo.zip";

$meuZip = new ZipArchive();

if($meuZip->open($filename) === TRUE)
{
    $meuZip->extractTo("./Extra_ZipExtracted/");
    $meuZip->close();

    echo "Arquivos descompactados com sucesso!";

}
else
{
    echo "Falha na abertura do arquivo!";
}


?>
    
</body>
</html>