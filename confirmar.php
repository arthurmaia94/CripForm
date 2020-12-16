<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmando Autenticidade</title>
</head>
<body>
    <?php
        $hash = $_POST['senha'];
        $confSenha = $_POST['confSenha'];
        $criptografada = md5($confSenha);

        if($hash == $criptografada){
            echo "Senha Confirmada";
        } else {
            echo "As senhas não coincidem";
        }
        //Referencia: http://www.linhadecodigo.com.br/artigo/1749/tutorial-criptografando-senhas-em-php.aspx
    ?>
</body>
</html>