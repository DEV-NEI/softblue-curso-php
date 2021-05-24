<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de Arquivos</title>
</head>
<body>

<?php

$filepath = "C:/Temp/teste.txt";

/*
$meuArquivo = fopen($filepath, "a+");
fwrite($meuArquivo, "Softblue");
fwrite($meuArquivo, " - Cursos online");
fwrite($meuArquivo, "\r\n");
fclose($meuArquivo);


if(is_file($filepath))
{
    echo "O arquivo existe!<BR>";

}
else{
    echo "O arquivo não existe!<BR>";

}
*/

//Leitura do arquivo

$meuArquivo = fopen($filepath, "r");
$buffer = fread($meuArquivo, 10);
echo $buffer . "<BR>";
$buffer = fread($meuArquivo, 10);
echo $buffer . "<BR>";
$buffer = fread($meuArquivo, 10);
echo $buffer . "<BR>";
fclose($meuArquivo);

//leitura do arquivo interiro
echo "<BR><BR>";
$meuArquivo = fopen($filepath, "r");
$buffer = fread($meuArquivo, filesize($filepath));
echo $buffer . "<BR>";
fclose($meuArquivo);

echo "<BR><BR>";



$meuArray = file($filepath);
foreach($meuArray as $elemento)
{
    echo "Linha do arquivo: " . $elemento . "<BR>";
}

















?>
    
</body>
</html>