<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays e Funções Especiais</title>
</head>
<body>

<?php

        $arrayExemplo = array("Php", "SQL", 100, "Java");
        $arrayExemplo = array(0 => "Php", 1 => "SQL", 5 => 100, "Curso" => "Java");

        print_r($arrayExemplo);
        echo "<BR><BR>";

        echo "Posicao 0: " . $arrayExemplo[0] . "<BR>";
        echo "Posicao 1: " . $arrayExemplo[1] . "<BR>";
        echo "Posicao 2: " . $arrayExemplo[5] . "<BR>";
        echo "Posicao 'Curso': " . $arrayExemplo['Curso'] . "<BR><BR>";

        // remove elemento do array
        unset($arrayExemplo["Curso"]);

        // remove todo array
        // unset($arrayExemplo);
        print_r($arrayExemplo);
        echo "<BR><BR>";

        echo count($arrayExemplo) . " elemento";
        echo "<BR><BR>";

        echo sizeof($arrayExemplo);
        echo "<BR><BR>";


        foreach($arrayExemplo as $elemento)
        {
            echo "Tem no array: " . $elemento . ", "  . "<BR>";
        }
        echo "<BR><BR>";


        //Pilhas e Filias

        //Funcionamento de Pilhas
        //Adicionar um elemento no final do array
        array_push($arrayExemplo, "André");
        print_r($arrayExemplo);
        echo "<BR><BR>";

        //Elemento capturado e removido do array
        $x = array_pop($arrayExemplo);
        echo $x .  "<BR>";
        print_r($arrayExemplo);
        echo "<BR><BR>";

        //Filas
        //O primeiro que chega é o primeiro a ser tratado

        // Remove o primeiro array
        $x = array_shift($arrayExemplo);
        echo $x .  "<BR>";
        print_r($arrayExemplo);
        echo "<BR><BR>";

        // Inserir para o primeiro da fila(com indíce 0)
        array_unshift($arrayExemplo, "Milani");
        print_r($arrayExemplo);
        echo "<BR><BR>";

        $arrayExemplo = array( 140.1, 200, 215.05, 550 );
        print_r($arrayExemplo);
        echo "<BR><BR>";

        function insereMoeda($valor)
        {
            $valor = "R$ " . $valor;
            return $valor;
        }

        $arrayExemplo = array_map("insereMoeda", $arrayExemplo);
        print_r($arrayExemplo);
        echo "<BR><BR>";

        $arrayExemplo = array("Linguagem1" => "Php",
                             "Linguagem2" => "SQL",
                             "Linguagem3" => 100,
                             "Linguagem4" => "Java");

            print_r($arrayExemplo);
            echo "<BR><BR>";
        
            //Verificar a existencia de indice de um array        
        if(array_key_exists("Linguagem2", $arrayExemplo))
        {
                echo "Existe 'Linguage2' no array <BR><BR>";

        }else
        {
            echo "Não Existe 'Linguage2' no array <BR><BR>";

        }


        if(array_key_exists("Linguagem70", $arrayExemplo))
        {
                echo "Existe 'Linguage70' no array <BR><BR>";

        }else
        {
            echo "Não Existe 'Linguage70' no array <BR><BR>";

        }

        //Lista dos indices
        $keys = array_keys($arrayExemplo);
        foreach($keys as $key)
        {
            echo $key . ", ";
        }
        echo "<BR><BR>";

        //Buscar um indíce de um elemento no Php
        $key = array_search("Php", $arrayExemplo);
        echo "Chave do elemento 'Php' é: " . $key;
        echo "<BR><BR>";

        $isIn = in_array("Php", $arrayExemplo);
        if($isIn)
        {
            echo "Elemento existe no array!";

        }else
        {
            echo "Elemento não existe no array!";

        }
        echo "<BR><BR>";

        // Outros comandos 

        //Embaralhar perde as informações do indice(novo arranjo)

        print_r($arrayExemplo);
        echo "<BR><BR>";
        shuffle($arrayExemplo);
        print_r($arrayExemplo);
        echo "<BR><BR>";

        //ordenar o array A-z

        sort($arrayExemplo);
        print_r($arrayExemplo);
        echo "<BR><BR>";

        //ordenar o array Z-a
        rsort($arrayExemplo);
        print_r($arrayExemplo);
        echo "<BR><BR>";


        // Comando Explode

        $stringExemplo = "10;20;30;40;50";
        $arrayExemplo = explode(";", $stringExemplo);
        print_r($arrayExemplo);
        echo "<BR><BR>";


        $arrayExemplo = array("a", "b", "c", "d", "e");
        $stringExemplo = implode(";", $arrayExemplo);
        echo $stringExemplo;
        echo "<BR><BR>";



        $stringExemplo = "chave=valor&chave2=valor2&var1=Php";
        parse_str($stringExemplo, $arrayExemplo);
        print_r($arrayExemplo);
        echo "<BR><BR>";   

?>
    
</body>
</html>