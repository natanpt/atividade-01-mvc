<?php
require_once(__DIR__."../../core/Conexao.php");

    $metodo = $_GET['metodo'];
    $controllerInstance = new AgendamentosModel();

    if (method_exists($controllerInstance, $metodo)) {
        $controllerInstance->$metodo();
    }

class AgendamentosModel {
    public function edit() {
        $pdo = Conexao::conectar();

        $id = filter_var($_GET['id']);
        $data = filter_var($_POST['data']);
        $horario = filter_var($_POST['horario']);
        $duracao = filter_var($_POST['duracao']);
        $status = filter_var($_POST['status']);
        
        $sql = "UPDATE agendamentos SET data = :data, horario = :horario, duracao = :duracao, 
            status = :status WHERE id = '$id'";
        $update = $pdo->prepare($sql);

        $update->bindParam(':data', $data);
        $update->bindParam(':horario', $horario);
        $update->bindParam(':duracao', $duracao);
        $update->bindParam(':status', $status);
        $update->execute();
        header("Location: ../view/home/Homepage.php");
    }

    public function create() {
        $pdo = Conexao::conectar();

        $id = filter_var($_GET['id']);
        $data = filter_var($_POST['data']);
        $horario = filter_var($_POST['horario']);
        $duracao = filter_var($_POST['duracao']);
        $status = filter_var($_POST['status']);

        $sql = "INSERT INTO agendamentos (data, horario, duracao, status)
            VALUES (:data, :horario, :duracao, :status)";
        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':data', $data);
        $stmt->bindParam(':horario', $horario);
        $stmt->bindParam(':duracao', $duracao);
        $stmt->bindParam(':status', $status);
        $stmt->execute();
        header("Location: ../view/home/Homepage.php");
    }
}
?>