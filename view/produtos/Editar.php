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
    <title>Editar Produto</title>
    <link rel="stylesheet" href="../../assets/editar.css">
</head>

<body>
    <h1><a href="../../view/home/Homepage.php">Barber2Men</a></h1>
    <form action="./model/ProdutosModel.php" method="POST">
        Nome: <input type="text" name="nome" value="<?php echo $linha['nome']?>" id="nome"><br><br>
        Valor: <input type="text" name="valor" value="<?php echo $linha['valor']?>" id="valor"><br><br>
        Marca: <input type="text" name="marca" value="<?php echo $linha['marca']?>" id="marca"><br><br>
        Categoria: <input type="text" name="categoria" value="<?php echo $linha['categoria']?>" id="categoria"><br><br>
        <input type="hidden" name="id" value="<?php echo $linha['id'] ?>">
        <input type="submit" value="Alterar">
    </form>
</body>
</html>