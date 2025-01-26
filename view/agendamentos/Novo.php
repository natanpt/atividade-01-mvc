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
    <title>Criar Agendamento</title>
    <link rel="stylesheet" href="../../assets/novo.css">
</head>

<body>
    <h1><a href="../../view/home/Homepage.php">Barber2Men</a></h1>
    <form action="./model/AgendamentosModel.php" method="POST">
        Data: <input type="text" name="data" id="data" placeholder="Digite a data do agendamento" required><br><br>
        Horário: <input type="text" name="horario" id="horario" placeholder="Digite o horário do agendamento" required><br><br>
        Duração: <input type="text" name="duracao" id="duracao" placeholder="Digite a duração do agendamento" required><br><br>
        Status: <input type="text" name="status" id="status" placeholder="Digite o status do agendamento" required><br><br>
        <input type="submit" value="Criar">
    </form>
</body>
</html>