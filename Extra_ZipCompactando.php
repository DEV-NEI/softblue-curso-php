<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zip: Compactando</title>
</head>
<body>

<?php

    $meuZip = new ZipArchive();
    $filename = "Extra_ZipExemplo.zip";

    if($meuZip->open($filename, ZIPARCHIVE::CREATE) !== TRUE)
    {
        echo "Falha na abertura e/ou criação do arquivo " .$filename;
    }
    else
    {
        // Compactando um arquivo(Qa tipo de arquivo)
        $meuZip->addFile("Extra_ZipArquivoExemplo.txt");

        // Criar um arquivo diretamente dentro do arquivo zip(somente arquivos textos)
        $meuZip->addFromString("Teste.txt", "Conteúdo de teste.txt");
        $meuZip->addEmptyDir("Diretorio");
        $meuZip->addFromString("Diretorio/Teste2.txt", "Conteúdo 2");

        $meuZip->close();

        echo "Arquivo zip gerado com sucesso.";
    }



?>
    
</body>
</html>