<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 04</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 04</h1>
    <hr>

<?php
require_once "src/Situacao.php"; // Enum
require_once "src/Cliente.php"; // Superclasse
require_once "src/PessoaFisica.php"; // Subclasse
require_once "src/PessoaJuridica.php"; // Subclasse

$clientePF = new PessoaFisica("Sunoo", "ddeonu@cute.com", 21, "571.931.358-30");
$clientePJ = new PessoaJuridica("Taehyun", "terry@kwai.com", "32.789.5555/000-1", 2019, "Pretty Eyes Corp.")


?>

<pre><?=var_dump($clientePF, $clientePJ)?></pre>

    
</body>
</html>