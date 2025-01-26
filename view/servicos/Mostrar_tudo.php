<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Serviços</title>
    <link rel="stylesheet" href="../../assets/informacoes.css">
</head>

<body>
    <h1><a href="../../view/home/Homepage.php">Barber2Men</a></h1>
</body>
</html>

<?php 
include "../../core/Conexao.php";

$pdo = Conexao::conectar();
$sql = $pdo->query("SELECT * FROM servicos");

echo "<table class='tabela' border = '1'>
                <tr class='titulo'><td>Nome</td>
                    <td>Valor</td>
                    <td>Descrição</td></tr>";

    while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr><td>$linha[nome]</td>
        <td>$linha[valor]</td>
        <td>$linha[descricao]</td></tr>";
    }
?>