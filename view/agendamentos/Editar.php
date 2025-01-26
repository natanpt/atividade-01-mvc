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
    <title>Editar Agendamento</title>
    <link rel="stylesheet" href="../../assets/editar.css">
</head>

<body>
    <h1><a href="../../view/home/Homepage.php">Barber2Men</a></h1>
    <form action="./model/AgendamentosModel.php" method="POST">
        Data: <input type="text" name="data" value="<?php echo $linha['data']?>" id="data"><br><br>
        Horário: <input type="text" name="horario" value="<?php echo $linha['horario']?>" id="horario"><br><br>
        Duração: <input type="text" name="duracao" value="<?php echo $linha['duracao']?>" id="duracao"><br><br>
        Status: <input type="text" name="status" value="<?php echo $linha['status']?>" id="status"><br><br>
        <input type="hidden" name="id" value="<?php echo $linha['id'] ?>">
        <input type="submit" value="Alterar">
    </form>
</body>
</html>