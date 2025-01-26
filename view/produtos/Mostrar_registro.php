<?php 
include "../../core/Conexao.php";

$pdo = Conexao::conectar();

$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
$sql = $pdo->query("SELECT * FROM produtos WHERE id ='$id'");
$linha = $sql->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Produto</title>
    <link rel="stylesheet" href="../../assets/registro.css">
</head>

<body>
    <h1><a href="../../view/home/Homepage.php">Barber2Men</a></h1>
    <p><b>Nome:</b> <?php echo $linha['nome']?></p>
    <p><b>Valor:</b> <?php echo $linha['valor']?></p>
    <p><b>Marca:</b> <?php echo $linha['marca']?></p>
    <p><b>Categoria:</b> <?php echo $linha['categoria']?></p>
</body>
</html>