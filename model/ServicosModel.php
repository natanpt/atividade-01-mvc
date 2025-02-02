<?php
require_once(__DIR__."../../core/Conexao.php");

    $metodo = $_GET['metodo'];
    $controllerInstance = new ServicosModel();

    if (method_exists($controllerInstance, $metodo)) {
        $controllerInstance->$metodo();
    }

class ServicosModel {
    public function edit() {
        $pdo = Conexao::conectar();

        $id = filter_var($_GET['id']);
        $nome = filter_var($_POST['nome']);
        $valor = filter_var($_POST['valor']);
        $descricao = filter_var($_POST['descricao']);
        
        $sql = "UPDATE servicos SET nome = :nome, valor = :valor, descricao = :descricao WHERE id = '$id'";
        $update = $pdo->prepare($sql);

        $update->bindParam(':nome', $nome);
        $update->bindParam(':valor', $valor);
        $update->bindParam(':descricao', $descricao);
        $update->execute();
        header("Location: ../view/home/Homepage.php");
    }

    public function create() {
        $pdo = Conexao::conectar();

        $id = filter_var($_GET['id']);
        $nome = filter_var($_POST['nome']);
        $valor = filter_var($_POST['valor']);
        $descricao = filter_var($_POST['descricao']);

        $sql = "INSERT INTO servicos (nome, valor, descricao)
            VALUES (:nome, :valor, :descricao)";
        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':valor', $valor);
        $stmt->bindParam(':descricao', $descricao);
        $stmt->execute();
        header("Location: ../view/home/Homepage.php");
    }
}
?>