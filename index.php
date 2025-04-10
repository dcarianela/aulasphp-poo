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
require_once "src/Cliente.php";

$clienteA = new Cliente();
$clienteB = new Cliente();

$clienteA->setNome("Sunoo");
$clienteA->setIdade(21);
$clienteA->setEmail("ddeonu@cute.com");

$clienteB->setNome("Ri-ki");
$clienteB->setIdade(20);
$clienteB->setEmail("nishimura@gmail.com");

?>
    <h2>Acessando/lendo os dados dos objetos</h2>
    
    <ul>
        <li><b>Idade: </b><?=$clienteA->idade?></li>
        <li><b>Email: </b><?=$clienteA->email?></li>
    </ul>

    
    <ul>
        <li><b>Idade: </b><?=$clienteB->idade?></li>
        <li><b>Email: </b><?=$clienteB->email?></li>
    </ul>

    <h2>Testes de acesso aos recursos da classe através do objeto</h2>

    <pre><?=var_dump($clienteA, $clienteB)?></pre>

    
</body>
</html>