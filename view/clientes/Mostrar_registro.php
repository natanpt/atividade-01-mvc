<?php 
include "../../core/Conexao.php";

$pdo = Conexao::conectar();

$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
$sql = $pdo->query("SELECT * FROM clientes WHERE id ='$id'");
$linha = $sql->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Cliente</title>
    <link rel="stylesheet" href="../../assets/registro.css">
</head>

<body>
    <h1><a href="../../view/home/Homepage.php">Barber2Men</a></h1>
    <p><b>Nome:</b> <?php echo $linha['nome']?></p>
    <p><b>CPF:</b> <?php echo $linha['cpf']?></p>
    <p><b>Data de nascimento:</b> <?php echo $linha['dt_nasc']?></p>
    <p><b>Whatsapp:</b> <?php echo $linha['whatsapp']?></p>
    <p><b>Logradouro:</b> <?php echo $linha['logradouro']?></p>
    <p><b>Número:</b> <?php echo $linha['num']?></p>
    <p><b>Bairro:</b> <?php echo $linha['bairro']?></p>
</body>
</html>