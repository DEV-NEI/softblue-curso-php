<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OO: Sobrescrevendo métodos</title>
</head>
<body>

<?php
    
    class Mamifero
    {
        public function andar()
        {
            echo "andar(mamifero) <BR>";
        }
    }


    class Homem extends Mamifero
    {
        public function andar()
        {   echo "andar(homem) <BR>";


        }
    }

    $m = new Mamifero();
    $m->andar();

    $h= new Homem();
    $h->andar();

?>
    
</body>
</html>