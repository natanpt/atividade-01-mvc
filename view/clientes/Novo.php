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
    <title>Criar Cliente</title>
    <link rel="stylesheet" href="../../assets/novo.css">
</head>

<body>
    <h1><a href="../../view/home/Homepage.php">Barber2Men</a></h1>
    <form action="./model/ClientesModel.php" method="POST">
        Nome: <input type="text" name="nome" id="nome" placeholder="Digite seu nome" required><br><br>
        CPF: <input type="text" name="cpf" id="cpf" placeholder="Digite seu CPF" required><br><br>
        Data de nascimento: <input type="text" name="dt_nasc" id="dt_nasc" placeholder="Digite sua data de nascimento" required><br><br>
        Whatsapp: <input type="text" name="whatsapp" id="whatsapp" placeholder="Digite seu whatsapp" required><br><br>
        Logradouro: <input type="text" name="logradouro" id="logradouro" placeholder="Digite seu logradouro" required><br><br>
        Número: <input type="text" name="num" id="num" placeholder="Digite o número de sua casa" required><br><br>
        Bairro: <input type="text" name="bairro" id="bairro" placeholder="Digite seu bairro" required><br><br>
        <input type="submit" value="Criar">
    </form>
</body>
</html>