<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OO: Abstracao e Interface</title>
</head>
<body>

<?php
     //não vai ser instanciada , servindo como base para outras classes
    abstract class InstrumentoMusical
    {
        public $volume;
        public abstract function tocar(); //apenas uma assinatura do metodo      
    }

    interface Transportavel
    {
        public function transportar();
    
    }

    class Guitarra extends InstrumentoMusical implements Transportavel
    {
        public function tocar()
        {
            echo "Tocando guitarra<BR>";
        }

        public function transportar()
        {
            echo "Transporte de guitarra: entrar em contato com a loja de musica <BR>";
        }
    }

    class Computador implements Transportavel
    {
        public function transportar()
        {
            echo "Transporte de computador: chame a Softblue! <BR>";
        }

    }
    
    $guitarra = new Guitarra();
    $guitarra->tocar();
    $guitarra->transportar();

    $computador = new Computador();
    $computador->transportar();


?>
    
</body>
</html>