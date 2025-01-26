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
    <title>Criar Serviço</title>
    <link rel="stylesheet" href="../../assets/novo.css">
</head>

<body>
    <h1><a href="../../view/home/Homepage.php">Barber2Men</a></h1>
    <form action="./model/ServicosModel.php" method="POST">
        Nome: <input type="text" name="nome" id="nome" placeholder="Digite o nome do serviço" required><br><br>
        Valor: <input type="text" name="valor" id="valor" placeholder="Digite o valor do serviço" required><br><br>
        Descrição: <input type="text" name="descricao" id="descricao" placeholder="Digite a descrição do serviço" required><br><br>
        <input type="submit" value="Criar">
    </form>
</body>
</html>