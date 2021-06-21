<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OO: Restrigindo acesso</title>
</head>
<body>

<div>
    <p>Restrigindo acesso</p>
</div>
<p>Operador <b>protected</b></p>
<p>Restringe o acesso aos atributos e aos métodos definidos para somente as subclasses</p>   
<BR><BR>

<code>Resultado da Aplicação:</code>
<BR><BR>
<?php
    class Mamifero
    {
        protected function andar()
        {
            echo "andar(mamifero)";
        }
    }

    class Homem extends Mamifero
    {
        public function algumMetodo()
        {
            parent::andar();
        }
    }

    $h = new Homem();
    $h->algumMetodo();

    $m = new Mamifero();
    $m->andar();  // Não irá funcionar, Ristringe o acesso pelo uso do protected.
?>

</body>
</html>