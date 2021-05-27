<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de Dados: Lista</title>
</head>
<body>

<TABLE border=1>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Idade</th>
            <th>Sexo</th>
            <th>Estado Civil</th>
            <th>Humanas</th>
            <th>Exatas</th>
            <th>Biológicas</th>
            <th>Hash da senha</th>
            <th>Ações</th>
        </tr>

<?php

    try
    {
        $connection = new PDO("mysql:host=localhost;dbname=cursophp", "root", "123456");
        $connection->exec("set names utf8");
    }
    catch(PDOException $e)
    {
        echo "Falha: " . $e->getMessage();
        exit();
    }

    if(isset($_REQUEST["excluir"]) && $_REQUEST["excluir"] == true)
    {
        $stmt = $connection->prepare("DELETE FROM usuarios WHERE id = ?");
        $stmt->bindParam(1, $_REQUEST["id"]);
        $stmt->execute();

        if($stmt->errorCode() != "00000") 
        {
            echo "Erro código " . $stmt->errorCode() . ": ";
            echo implode(", ", $stmt->errorInfo());
        }
        else
        {
            echo "Sucesso: usuário removido com sucesso<BR>";
        }

    }



    $rs = $connection->prepare("SELECT * FROM usuarios");
    
    if($rs->execute())
    {
       while ($registro = $rs->fetch(PDO::FETCH_OBJ))
       {
           echo "<TR>";
        
            echo "<TD>" . $registro->nome . "</TD>";
            echo "<TD>" . $registro->email . "</TD>";
            echo "<TD>" . $registro->idade . "</TD>";
            echo "<TD>" . $registro->sexo . "</TD>";
            echo "<TD>" . $registro->estado_civil . "</TD>";
            echo "<TD>" . $registro->humanas . "</TD>";
            echo "<TD>" . $registro->exatas . "</TD>";
            echo "<TD>" . $registro->biologicas . "</TD>";
            echo "<TD>" . $registro->senha . "</TD>";
            
            echo "<TD>" ;
            echo "<A href='?excluir=true&id=" . $registro->id . "'>(exclusão)</A>";
            echo "<A href='BancoDeDados_Aterar.php?id=" . $registro->id . "'>(alteração)</A>";
            echo "<A href='BancoDedados_Senha.php?id=" . $registro->id . "'>(alteração de senha)</A>";
            echo "<TD>" ;       
            

           echo "</TR>";
       }
    }
    else
    {
        echo "Falha na seleção de usuários<BR>";
    }

?>

</TABLE>

<BR>
<a href="BancoDeDados_Cadastro.php">Criar um novo registro</a>
    
</body>
</html>