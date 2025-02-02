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
    <title>Editar Cliente</title>
    <link rel="stylesheet" href="../../assets/editar.css">
</head>

<body>
    <h1><a href="../../view/home/Homepage.php">Barber2Men</a></h1>  
    <form action="../../model/ClientesModel.php?metodo=edit&id=<?php echo$linha['id'] ?>" method="POST">
        Nome: <input type="text" name="nome" value="<?php echo $linha['nome']?>" id="nome"><br><br>
        CPF: <input type="text" name="cpf" value="<?php echo $linha['cpf']?>" id="cpf"><br><br>
        Data de nascimento: <input type="text" name="dt_nasc" value="<?php echo $linha['dt_nasc']?>" id="dt_nasc"><br><br>
        Whatsapp: <input type="text" name="whatsapp" value="<?php echo $linha['whatsapp']?>" id="whatsapp"><br><br>
        Logradouro: <input type="text" name="logradouro" value="<?php echo $linha['logradouro']?>" id="logradouro"><br><br>
        Número: <input type="text" name="num" value="<?php echo $linha['num']?>" id="num"><br><br>
        Bairro: <input type="text" name="bairro" value="<?php echo $linha['bairro']?>" id="bairro"><br><br>
        <input type="hidden" name="id" value="<?php echo $linha['id'] ?>">
        <input type="submit" value="Alterar">
    </form>
</body>
</html>