<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Inseridos</title>
</head>
<body>
    <?php
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $mensagem = $_POST["mensagem"];

        echo "<h1>Dados Inseridos:</h1>";
        echo "<p><b>Nome:</b> $nome</p>";
        echo "<p><b>E-mail:</b> $email</p>";
        echo "<p><b>Mensagem:</b> $mensagem</p>";

    ?>
</body>
</html>