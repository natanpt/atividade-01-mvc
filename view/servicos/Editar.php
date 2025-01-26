<?php 
include "../../core/Conexao.php";

$pdo = Conexao::conectar();

$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
$sql = $pdo->query("SELECT * FROM servicos WHERE id ='$id'");
$linha = $sql->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Serviço</title>
    <link rel="stylesheet" href="../../assets/editar.css">
</head>

<body>
    <h1><a href="../../view/home/Homepage.php">Barber2Men</a></h1>
    <form action="./model/ServicosModel.php" method="POST">
        Nome: <input type="text" name="nome" value="<?php echo $linha['nome']?>" id="nome"><br><br>
        Valor: <input type="text" name="valor" value="<?php echo $linha['valor']?>" id="valor"><br><br>
        Descrição: <input type="text" name="descricao" value="<?php echo $linha['descricao']?>" id="descricao"><br><br>
        <input type="hidden" name="id" value="<?php echo $linha['id'] ?>">
        <input type="submit" value="Alterar">
    </form>
</body>
</html>