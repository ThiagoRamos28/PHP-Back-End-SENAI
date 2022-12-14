<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Dados</title>

    <!-- CSS Externo -->
    <link href="../css/estilos.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
    <?php
        // Declaração de Váriáveis
        $nome           = $_POST['nome'];
        $sobrenome      = $_POST['sobrenome'];
        $email          = $_POST['email'];
        $genero         = $_POST['genero'];
        $escolaridade   = $_POST['escolaridade'];
        $nota           = $_POST['nota'];

        // Output
        echo '<div class="container">';
        echo '<h1>Dados do Usuário</h1><hr>';
        echo '<b>Nome Completo:</b> ' . $nome . ' ' . $sobrenome . '<br />';
        echo '<b>E-mail:</b> ' . $email . '<br />';
        echo '<b>Gênero:</b> ' . $genero . '<br />';
        echo '<b>Escolaridade:</b> ' . $escolaridade . '<br />';
        echo '<b>Índice de Satisfação:</b> ' . $nota . '<br />';
        echo '<a href="../index.html">Voltar</a>';
        echo '</div>';
    ?>
</body>