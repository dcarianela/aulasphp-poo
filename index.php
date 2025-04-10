<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 02</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 02</h1>
    <hr>

<?php
// Carregando/importando a classe
require_once "src/Cliente.php";

// Criando objeto/instância da classe
$clienteA = new Cliente();
$clienteB = new Cliente();

$clienteA->nome = "Sunoo";
$clienteA->idade = 21;
$clienteA->email = "ddeonu@cute.com";

$clienteB->nome = "Ri-ki";
$clienteB->idade = 20;
$clienteB->email = "nishimura@gmail.com";

?>
    <h2>Acessando/lendo os dados dos objetos</h2>
    <h3>Cliente A</h3>
    <div>
        <?php
        $clienteA->exibirDados();
        ?>
    </div>
    <ul>
        <li><b>Idade: </b><?=$clienteA->idade?></li>
        <li><b>Email: </b><?=$clienteA->email?></li>
    </ul>

    <h3>Cliente B</h3>
    <div>
        <?php
        $clienteB->exibirDados();
        ?>
    </div>
    <ul>
        <li><b>Idade: </b><?=$clienteB->idade?></li>
        <li><b>Email: </b><?=$clienteB->email?></li>
    </ul>

    <h2>Testes de acesso aos recursos da classe através do objeto</h2>

    <pre><?=var_dump($clienteA, $clienteB)?></pre>

    
</body>
</html>