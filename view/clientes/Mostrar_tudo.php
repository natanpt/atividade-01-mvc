<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Clientes</title>
    <link rel="stylesheet" href="../../assets/informacoes.css">
</head>

<body>
    <h1><a href="../../view/home/Homepage.php">Barber2Men</a></h1>
</body>
</html>

<?php

include "../../core/Conexao.php";

$pdo = Conexao::conectar();
$sql = $pdo->query("SELECT * FROM clientes");

echo "<table class='tabela' border = '1'>
                <tr class='titulo'><td>Nome</td>
                    <td>CPF</td>
                    <td>Data de nascimento</td>
                    <td>Whatsapp</td>
                    <td>Logradouro</td>
                    <td>Número</td>
                    <td>Bairro</td></tr>";

    while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr><td>$linha[nome]</td>
        <td>$linha[cpf]</td>
        <td>$linha[dt_nasc]</td>
        <td>$linha[whatsapp]</td>
        <td>$linha[logradouro]</td>
        <td>$linha[num]</td>
        <td>$linha[bairro]</td></tr>";
    }
?>