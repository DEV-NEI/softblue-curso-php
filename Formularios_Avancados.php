<?php 

$erro = null;
$valido = false;

if(isset($_REQUEST["validar"]) && $_REQUEST["validar"] == true)

{
    if(strlen($_POST["nome"]) < 5)
    {   
        $erro = "Preencha o campo corretamentoe(5 ou mais caracteres";
    }
    else if(strlen($_POST["email"]) < 6)
        {
            $erro = "E-mail inválido, preecha corretamente";
        }
    else if(is_numeric($_POST["idade"]) == false)
    {
        $erro = "Campo idade deve ser numérico";
    }
    else if($_POST["Sexo"] != "M" && $_POST["Sexo"] != "F")
    {
        $erro = "Selecione o campo sexo corretamente";
    }
    else if ($_POST["estadocivil"] != "Solteiro(a)" &&
             $_POST["estadocivil"] != "Casado(a)" &&
             $_POST["estadaocivil"] != "Divorciado(a)" &&
             $_POST["estadocivil"] != "Viúvo(a)")
    {
        $erro = "Selecione o campo de estado civil corretamente!";
    }
    else
    {
        $valido = true;
    }
} 

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários: Avançado</title>
</head>
<body>
    <?php
        if(isset($erro))
        {
            echo $erro . "<BR><BR>";
        }

    ?>

        <FORM method=POST action="?validar=true">
            Nome:
            <INPUT type=TEXT name=nome><BR>

            E-mail:
            <INPUT type=TEXT name=email><BR>
            
            Idade:
            <INPUT type=TEXT name=idade><BR>

            Sexo:
            <INPUT type=RADIO name=sexo value="M">Masculino
            <INPUT type=RADIO name=sexo value="F">Feminino
            <BR>

            Interesses:
            <INPUT type=CHECKBOX name="humalnas">Ciências Humanas
            <INPUT type=CHECKBOX name="exatas">Ciências Exatas
            <INPUT type=CHECKBOX name="biologicas">Ciências Biológicas
            <BR>

            Estado civil:
            <SELECT name="estadocivil">
                <OPTION>Selecione...</OPTION>
                <OPTION>Solteiro(a)</OPTION>
                <OPTION>Casado(a)</OPTION>
                <OPTION>Divorciado(a)</OPTION>
                <OPTION>Viúvo(a)</OPTION>                
            </SELECT>
            <BR>     

            Senha:
            <INPUT type=PASSWORD name="senha"><BR>
            <INPUT type=SUBMIT value="Enviar">
            
        
        </FORM>
    
</body>
</html>