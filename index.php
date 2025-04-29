<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 07</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 07</h1>
    <hr>

<?php
/* Sempre que trabalharmos com namespaces, será necessário especificar através do 'use' quais classes/enums/funções serão usadas. */

use MeuProjeto\Calculadora;
use MeuProjeto\Models\PessoaFisica;
use MeuProjeto\Models\PessoaJuridica;

/* Substituimos TODOS OS REQUIRES anteriores, por um ÚNICO REQUIRE apontando para o autoload */
require_once "vendor/autoload.php";

$clientePF = new PessoaFisica("Sunoo", "ddeonu@cute.com", 21, "571.931.358-30");
$clientePJ = new PessoaJuridica("Taehyun", "terry@kwai.com", "32.789.5555/000-1", 2019, "Pretty Eyes Corp.");

/* Acessando um método estático (ou seja, sem passar por um objeto) */
$total = Calculadora::somar(10, 5);
echo $total;

?>
    <h2>Relatórios</h2>

    <h3>PF</h3>
    <?=$clientePF->relatorio()?>

    <h3>PJ</h3>
    <?=$clientePJ->relatorio()?>
    
</body>
</html>