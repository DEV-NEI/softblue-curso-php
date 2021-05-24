<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Simples: Form</title>
</head>
<body>

    <form method="POST"action="Formularios_SimplesTratamento.php">

        Nome:
        <INPUT type=TEXT name=nome><BR>

        Sobrenome:
        <INPUT type=TEXT name=sobrenome><BR>

        Estado civil:
        <SELECT name=estadocivil>
            <OPTION>Solteiro</OPTION>
            <OPTION>Casado</OPTION>
            <OPTION>Divorciado</OPTION>
            <OPTION>Viúvo</OPTION>        
        </SELECT>

        <INPUT type=RESET value = "Limpar" >
        <INPUT type=SUBMIT value= "Enviar">

    
    </form>

    
</body>
</html>