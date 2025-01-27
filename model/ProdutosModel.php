<?php
include "../../core/Conexao.php";
include "../../view/home/Homepage.php";

    $metodo = $_GET['metodo'];
    $controllerInstance = new ProdutosModel();

    if (method_exists($controllerInstance, $metodo)) {
        $controllerInstance->$metodo();
    } else {
        $homeController = new HomeController();
        $homeController->index();
    }

class ProdutosModel {
    public function edit() {
        $pdo = Conexao::conectar();

        $id = filter_var($_GET['id']);
        $nome = filter_var($_POST['nome']);
        $valor = filter_var($_POST['valor']);
        $marca = filter_var($_POST['marca']);
        $categoria = filter_var($_POST['categoria']);
        
        $sql = "UPDATE produtos SET nome = :nome, valor = :valor, marca = :marca, 
            categoria = :categoria WHERE id = '$id'";
        $update = $pdo->prepare($sql);

        $update->bindParam(':nome', $nome);
        $update->bindParam(':valor', $valor);
        $update->bindParam(':marca', $marca);
        $update->bindParam(':categoria', $categoria);
        $update->execute();
        header("Location: ../../view/home/Homepage.php");
    }

    public function create() {
        $pdo = Conexao::conectar();

        $id = filter_var($_GET['id']);
        $nome = filter_var($_POST['nome']);
        $valor = filter_var($_POST['valor']);
        $marca = filter_var($_POST['marca']);
        $categoria = filter_var($_POST['categoria']);

        $sql = "INSERT INTO produtos (nome, valor, marca, categoria)
            VALUES (:nome, :valor, :marca, :categoria)";
        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':valor', $valor);
        $stmt->bindParam(':marca', $marca);
        $stmt->bindParam(':categoria', $categoria);
        $stmt->execute();
        header("Location: ../../view/home/Homepage.php");
    }
}
?>