<?php 
include "../../core/Conexao.php";

$pdo = Conexao::conectar();

$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
$sql = $pdo->query("SELECT * FROM agendamentos WHERE id ='$id'");
$linha = $sql->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar registro</title>
    <link rel="stylesheet" href="../../assets/registro.css">
</head>

<body>
    <h1><a href="../../view/home/Homepage.php">Barber2Men</a></h1>
    <p><b>Data:</b> <?php echo $linha['data']?></p>
    <p><b>Horário:</b> <?php echo $linha['horario']?></p>
    <p><b>Duração:</b> <?php echo $linha['duracao']?></p>
    <p><b>Status:</b> <?php echo $linha['status']?></p>
</body>
</html>