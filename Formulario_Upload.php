<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Upload</title>
</head>
<body>

<?php

if(isset($_REQUEST["envio"]) && $_REQUEST["envio"] == "true")
{
    $erro = 0;
    if(isset($_FILES["campoArquivo"]))
    {
        $arquivoNome = $_FILES["campoArquivo"]["name"];
        $arquivoTipo = $_FILES["campoArquivo"]["type"];
        $arquivoTamanho = $_FILES["campoArquivo"]["size"];
        $arquivoNomeTemp = $_FILES["campoArquivo"]["tmp_name"];
        $erro = $_FILES["campoArquivo"]["error"];

        if($erro == 0)
        {   
            if(is_uploaded_file($arquivoNomeTemp))
            {
                if(move_uploaded_file($arquivoNomeTemp, "uploads/".$arquivoNome))
                {
                    echo "Sucesso!<BR>" ;

                    echo "Nome original: " . $arquivoNome . "<BR>";
                    echo "Tipo: " . $arquivoTipo . "<BR>";
                    echo "Nome original: " . $arquivoNome . "<BR>";
                    echo "Tamanho: " . $arquivoTamanho . "<BR>";
                    echo "Nome temporário: " . $arquivoNomeTemp . "<BR>";
                }
                else
                {
                    $erro = "Falha ao mover o arquivo (pasta não exista, permissão de acesso, caminho inválido, disco cheio...)";
                }

            }
            else
            {
                $erro = "Erro no envio: arquivo não recebido com sucesso.";
            }


        }
        else
        {
            $erro = "Erro no envio: " . $erro;
        }

    }
    else
    {
        $erro = "Arquivo enviado não encontrado.";
    }

    if($erro !== 0)
    {
        echo $erro;
    }
}


?>

<FORM enctype="multipart/form-data" method=POST action="Formulario_Upload.php?envio=true">
    Arquivo:
    <INPUT type=FILE name=campoArquivo><BR>
    <INPUT type=SUBMIT value='Enviar'>
</FORM>
    
</body>
</html>