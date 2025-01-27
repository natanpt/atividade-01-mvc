<?php
include "../../core/Conexao.php";
include "../../view/home/Homepage.php";

    $metodo = $_GET['metodo'];
    $controllerInstance = new ComprasModel();

    if (method_exists($controllerInstance, $metodo)) {
        $controllerInstance->$metodo();
    } else {
        $homeController = new HomeController();
        $homeController->index();
    }

class ComprasModel {
    public function edit() {
        $pdo = Conexao::conectar();

        $id = filter_var($_GET['id']);
        $data = filter_var($_POST['data']);
        $horario = filter_var($_POST['horario']);
        $qtd = filter_var($_POST['qtd']);
        
        $sql = "UPDATE compras SET data = :data, horario = :horario, qtd = :qtd WHERE id = '$id'";
        $update = $pdo->prepare($sql);

        $update->bindParam(':data', $data);
        $update->bindParam(':horario', $horario);
        $update->bindParam(':qtd', $qtd);
        $update->execute();
        header("Location: ../../view/home/Homepage.php");
    }

    public function create() {
        $pdo = Conexao::conectar();

        $id = filter_var($_GET['id']);
        $data = filter_var($_POST['data']);
        $horario = filter_var($_POST['horario']);
        $qtd = filter_var($_POST['qtd']);

        $sql = "INSERT INTO compras (data, horario, qtd)
            VALUES (:data, :horario, :qtd)";
        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':data', $data);
        $stmt->bindParam(':horario', $horario);
        $stmt->bindParam(':qtd', $qtd);
        $stmt->execute();
        header("Location: ../../view/home/Homepage.php");
    }
}
?>