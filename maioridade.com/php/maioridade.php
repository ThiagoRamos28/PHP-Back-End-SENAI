<?php
    // Declaração de Variáveis
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    // Algorítimo
    if ($idade >= 18) {
        echo '<h1>' . $nome . ' tem '. $idade . ' anos, e é maior de idade</h1>';
    }
    else {
        echo '<h1>' . $nome . ' tem '. $idade . ' anos, e é menor de idade</h1>';
    }

    echo '<a href="../index.html">Voltar</a>';
?>