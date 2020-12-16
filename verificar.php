<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificando Senha</title>
</head>
<body>
    <?php
        $nome = $_POST['nome'];
        $pass = $_POST['senha'];
        $criptografada = md5($pass);
    ?>
    <p>Olá, <?php echo $nome; ?></p>
    <p>Confirme a senha cadastrada:</p>
    <form action="confirmar.php" method="POST">
        <input type="password" name="confSenha" placeholder="Digite a senha">
        <input type="hidden" name="senha" value="<?php echo $criptografada; ?>">
        <input type="submit" value="Confirmar">
    </form>
</body>
</html>