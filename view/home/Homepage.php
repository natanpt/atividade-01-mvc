<?php 
include "../../core/Conexao.php";

$pdo = Conexao::conectar();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
} else {
    $id = 1;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="../../assets/style2.css">
</head>

<body>
    <h1 class='sem-estilo'><a href="../../view/home/Homepage.php">Barber2Men</a></h1>
    <ul>
        <li>Agendamentos</li>
            <ul>
                <li><a href="../agendamentos/Editar.php?id=<?php echo$id?>">Editar registro</a></li>
                <li><a href="../agendamentos/Mostrar_registro.php?id=<?php echo$id?>">Mostrar registro</a></li>
                <li><a href="../agendamentos/Mostrar_tudo.php">Mostrar todos os registros</a></li>
                <li><a href="../agendamentos/Novo.php">Criar novo registro</a></li>
            </ul>
        <li>Clientes</li>
            <ul>
                <li><a href="../clientes/Editar.php?id=<?php echo$id?>">Editar registro</a></li>
                <li><a href="../clientes/Mostrar_registro.php?id=<?php echo$id?>">Mostrar registro</a></li>
                <li><a href="../clientes/Mostrar_tudo.php">Mostrar todos os registros</a></li>
                <li><a href="../clientes/Novo.php">Criar novo registro</a></li>
            </ul>
        <li>Compras</li>
            <ul>
                <li><a href="../compras/Editar.php?id=<?php echo$id?>">Editar registro</a></li>
                <li><a href="../compras/Mostrar_registro.php?id=<?php echo$id?>">Mostrar registro</a></li>
                <li><a href="../compras/Mostrar_tudo.php">Mostrar todos os registros</a></li>
                <li><a href="../compras/Novo.php">Criar novo registro</a></li>
            </ul>
        <li>Produtos</li>
            <ul>
                <li><a href="../produtos/Editar.php?id=<?php echo$id?>">Editar registro</a></li>
                <li><a href="../produtos/Mostrar_registro.php?id=<?php echo$id?>">Mostrar registro</a></li>
                <li><a href="../produtos/Mostrar_tudo.php">Mostrar todos os registros</a></li>
                <li><a href="../produtos/Novo.php">Criar novo registro</a></li>
            </ul>
        <li>Serviços</li>
            <ul>
                <li><a href="../servicos/Editar.php?id=<?php echo$id?>">Editar registro</a></li>
                <li><a href="../servicos/Mostrar_registro.php?id=<?php echo$id?>">Mostrar registro</a></li>
                <li><a href="../servicos/Mostrar_tudo.php">Mostrar todos os registros</a></li>
                <li><a href="../servicos/Novo.php">Criar novo registro</a></li>
            </ul>
    </ul>
</body>
</html>