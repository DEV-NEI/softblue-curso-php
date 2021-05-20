<!DOCTYPE html>
<html>
<body>

<?php

// Datas e Funções Especiais

// valor do timestamp
$agora = time();
echo $agora;
echo "<BR><BR>";
echo date("Y-m-d H:i:s", time());
echo "<BR><BR>";
echo date("Y-m-d", 1621549216);
echo "<BR><BR>";
echo date("D-d-M-Y");

// Operações com data e hora

// strtotime 

echo strtotime("+1 day", time());
echo "<BR>";
echo date("d/m/Y", strtotime("+1 year"));
echo "<BR>";
echo strtotime("+1 day");
echo "<BR>";
echo date("Y-m-d H:i:s", strtotime("+1 day"));
echo "<BR>";
echo date("d/m/Y", strtotime("+7 day"));
echo "<BR>";
echo date("d/m/Y", strtotime("next monday"));
echo "<BR>";
echo date("d/m/Y", strtotime("last monday"));
echo "<BR>";
echo date("d/m/Y", strtotime("+ 1 month"));
echo "<BR>";
echo date("d/m/Y", strtotime("+ 1 week"));
echo "<BR>";
echo date("d/m/Y", strtotime("+ 48 hour"));
echo "<BR>";
echo date("d/m/Y", strtotime("+ 1 year"));
echo "<BR>";


?>

</body>
</html>
