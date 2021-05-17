<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings e Funcções Especiais</title>
</head>
<body>

<?php
    $strExemplo = "Frase composta de exemplo para aula.";

    echo($strExemplo . "<BR>");
    echo $strExemplo . "<BR>";
    print ($strExemplo . "<BR>");
    print $strExemplo . "<BR>";

    // strlen conta bytes não caracters (acentos considerado)
    $x = strlen($strExemplo);
    echo $x . "<BR>";

    // Acentos e caracteres especiais: utilize o utf8_decode
    $x = strlen(utf8_decode ($strExemplo));
    echo $x . "<BR>";

    $x = strpos($strExemplo, "a");
    echo $x . "<BR>";

    $x = strpos($strExemplo, "a", 3);
    echo $x . "<BR>";

    $posicao = strpos($strExemplo, "a");
    while($posicao !== FALSE)
    {
        echo "Posicao: " . $posicao . "<BR>";
        $posicao = strpos($strExemplo, "a", $posicao+1);
    }

    $x = strchr($strExemplo, " ");
    echo $x. "<BR>";

    $x = strchr($strExemplo, "de");
    echo $x. "<BR>";

    // Busca de tráz para frente
    $x = strrchr($strExemplo, " ");
    echo $x. "<BR>";

    $x = strrchr($strExemplo, "de");
    echo $x. "<BR>";

    $x = substr($strExemplo, 4);
    echo $x . "<BR>";
    // Quando utilizar um comando precisa atribuir o seu retorno.

    $x = substr($strExemplo, 4, 10);
    echo $x . "<BR>";

    $x = str_replace("composta", "criada", $strExemplo);
    echo $x . "<BR>";

    $x = chr(65);
    echo $x . "<BR>";

    $x = 65;
    echo $x . "<BR>";

    $x = strtolower($strExemplo);
    echo $x . "<BR>";

    $x = strtoupper($strExemplo);
    echo $x . "<BR>";

    $strExemplo = "frase composta de exemplo para aula.";

    // Pega apenas a primeira letra
    $x = ucfirst($strExemplo);
    echo $x . "<BR>";

    // Pega primeira letra de cada palavra
    $x = ucwords($strExemplo);
    echo $x . "<BR>";

    $x = strrev($strExemplo);
    echo $x . "<BR>";

    $strExemplo = " Frase composta de   exemplo para aula.  ";

    $x = $strExemplo;
    $x = str_replace(" ", "_", $strExemplo);
    echo $x . "<BR>";

    // trim remover espaco em branco
    $x = trim($strExemplo);
    $x = str_replace(" ", "_", $x);
    echo $x . "<BR>";

    $x = ltrim($strExemplo);
    $x = str_replace(" ", "_", $x);
    echo $x . "<BR>";

    $x = rtrim($strExemplo);
    $x = str_replace(" ", "_", $x);
    echo $x . "<BR>";

    // Removendo todos espaco em branco
    $x = trim($strExemplo);
    $x = str_replace("  ", "_", $x);
    echo $x . "<BR>";
    
    $strExemplo = "Frase composta de   exemplo para aula.";

    $x = str_split($strExemplo, 5);
    echo $x[0] . "<BR>";
    echo $x[1] . "<BR>";
    echo $x[2] . "<BR>";
    echo $x[3] . "<BR>";
    echo $x[4] . "<BR>";
    echo $x[5] . "<BR>";
    echo $x[6] . "<BR>";
    echo $x[7] . "<BR>";

    $x = explode(" ", $strExemplo);
    echo $x[0] . "<BR>";
    echo $x[1] . "<BR>";
    echo $x[2] . "<BR>";
    echo $x[3] . "<BR>";
    echo $x[4] . "<BR>";
    echo $x[5] . "<BR>";
    

    // Senha para o usuário com protecao codigo hash
    $x = sha1($strExemplo);
    echo $x . "<BR>";

    $x = md5($strExemplo);
    echo $x . "<BR>";

    $x = crypt($strExemplo, "teste123");
    echo $x . "<BR>";



    $strExemplo = "123456";    

    // Desta forma consigo fazer a descriptacao da chave através e sites(com senhas puras).
    $x = sha1($strExemplo);
    echo $x . "<BR>";

    $x = md5($strExemplo);
    echo $x . "<BR>";

    $x = crypt($strExemplo, "teste123");
    echo $x . "<BR>";

    // Preciso utilizar uma semente , token para deixar mais seguro(não tenho como fazer o caminho inverso) , sites não conseguem quebrar a senha.

    $x = sha1($strExemplo);
    echo $x . "<BR>";

    $x = md5($strExemplo . "123123123asdasdafTesteTokenSeguroabac123");
    echo $x . "<BR>";

    $x = crypt($strExemplo, "teste123TesteMuitoMaisSeguroabc123");
    echo $x . "<BR>";


    
    


























































    


    


?>
    
</body>
</html>