<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OO: Herança e Elementos Estáticos</title>
</head>
<body>

<?php

class InstrumentoMusical
{
    public $isPercussao;
    public $volume;

    public function __construct($isPercussao, $volume)
    {
    $this->isPercussao = $isPercussao;
    $this->volume = $volume;
    
    }

    // poderia ser 'final' , impedindo sobreescrita
    public function tocar()
    {
        echo "Tocando no volume: " . $this->volume . " decibéis. <BR>";
    }

}


class Guitarra extends InstrumentoMusical
{
    public function tocar()  
    {
        echo "Amplificador ligado em " . $this->volume . " decibéis. <BR>";
    }

    public function tocarGuitarra()
    {
        $this->tocar();
        parent::tocar(); 
    }

}


// Public
$instrumentoMusical = new InstrumentoMusical(TRUE, 80);
if($instrumentoMusical->isPercussao)
{
    echo "Instrumento de percussao, volume: " . $instrumentoMusical->volume . "<BR>";
}
else
{
    echo "Instrumento não de percussao, volume: ". $instrumentoMusical->volume . "<BR>";
}

$instrumentoMusical->tocar();


$guitarra= new Guitarra(FALSE, 40);
if($guitarra->isPercussao)
{
    echo "Instrumento de percussao, volume: " . $guitarra->volume . "<BR>";
}
else
{
    echo "Instrumento não de percussao, volume: ". $guitarra->volume . "<BR>";
}
$guitarra->tocar();
echo "<BR><BR>";

$guitarra->tocarGuitarra();
echo "<BR><BR>";


//valor que não vai mudar deve criar como 'static' para não usar recurso de memória - não precisa instaciar objetos.
class EscalaMusical
{
    public static $escalaDoMaior = "C D E F G A B C" ;
    public $vezesQueFoiUtilizada;

    public static function calculaDecibeis($watts)
    {
            return $watts / 10;

    }
}

echo EscalaMusical::$escalaDoMaior . "<BR>";
echo EscalaMusical::calculaDecibeis(123) . "<BR>";

$emC = new EscalaMusical();
$emC-> vezesQueFoiUtilizada = 3;
echo "Foi utilizada: " . $emC->vezesQueFoiUtilizada . "<BR>";



$emD = new EscalaMusical();
$emD-> vezesQueFoiUtilizada = 5;
echo "Foi utilizada: " . $emD->vezesQueFoiUtilizada . "<BR>";

// Acesso a um objeto instaciado
echo $emD::$escalaDoMaior;

?>
    
</body>
</html>