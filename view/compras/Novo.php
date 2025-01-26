<?php 
include "../../core/Conexao.php";

$pdo = Conexao::conectar();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Compra</title>
    <link rel="stylesheet" href="../../assets/novo.css">
</head>

<body>
    <h1><a href="../../view/home/Homepage.php">Barber2Men</a></h1>
    <form action="./model/ComprasModel.php" method="POST">
        Data: <input type="text" name="data" id="data" placeholder="Digite a data da compra" required><br><br>
        Horário: <input type="text" name="horario" id="horario" placeholder="Digite o horário da compra" required><br><br>
        Quantidade: <input type="text" name="qtd" id="qtd" placeholder="Digite a quantidade" required><br><br>
        <input type="submit" value="Criar">
    </form>
</body>
</html>