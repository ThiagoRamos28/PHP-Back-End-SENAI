<?php
    // Declaração de variáveis
    $nome   = $_POST['nome'];
    $idade  = $_POST['idade'];
    $filme  = $_POST['filme'];

    //Algoritmo
    switch ($filme) {
        case 'Matrix':
            if ($idade >= 12)
                echo 'Ingresso comprado com sucesso. Bom Filme!';
            else
                echo 'Entrada não permitida!';
            break;
        case 'Toy Story':
            echo 'Ingresso comprado com sucesso. Bom Filme';
            break;
        case 'Sexta Feira 13':
            if ($idade >= 16)
                echo 'Ingresso comprado com sucesso. Bom Filme!';
            else
                echo 'Entrada não permitida!';
            break;
        case 'Top Gun':
            if ($idade >= 14)
                echo 'Ingresso comprado com sucesso. Bom Filme!';
            else
                echo 'Entrada não permitida!';
            break;
        case 'Instinto Selvagem':
            if ($idade >= 18)
                echo 'Ingresso comprado com sucesso. Bom Filme!';
            else
                echo 'Entrada não permitida!';
            break;
        case 'Piratas do Vale do Silício':
            if ($idade >= 12)
                echo 'Ingresso comprado com sucesso. Bom Filme!';
            else
                echo 'Entrada não permitida!';
            break;
        case 'Akira':
            if ($idade >= 18)
                echo 'Ingresso comprado com sucesso. Bom Filme!';
            else
                echo 'Entrada não permitida!';
            break;
        case 'Minority Report':
            if ($idade >= 14)
                echo 'Ingresso comprado com sucesso. Bom Filme!';
            else
                echo 'Entrada não permitida!';
            break;
        case 'O Rei Leão':
            echo 'Ingresso comprado com sucesso. Bom Filme!';
            break;
        case 'Terrifier':
            if ($idade >= 18)
                echo 'Ingresso comprado com sucesso. Bom Filme!';
            else
                echo 'Entrada não permitida!';
            break;
        default:
            echo 'Opção Invállida!';
            break;
    }

    echo '<br /><br /><a href=" ../index.html"><button>Voltar</button></a>';
?>