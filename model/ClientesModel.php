<?php
include "../../core/Conexao.php";
include "../../view/home/Homepage.php";

    $metodo = $_GET['metodo'];
    $controllerInstance = new ClientesModel();
    $controllerInstance->$metodo();

class ClientesModel {
    public function edit() {
        $pdo = Conexao::conectar();

        $id = filter_var($_GET['id']);
        $nome = filter_var($_POST['nome']);
        $cpf = filter_var($_POST['cpf']);
        $dt_nasc = filter_var($_POST['dt_nasc']);
        $whatsapp = filter_var($_POST['whatsapp']);
        $logradouro = filter_var($_POST['logradouro']);
        $num = filter_var($_POST['num']);
        $bairro = filter_var($_POST['bairro']);
        
        $sql = "UPDATE clientes SET nome = :nome, cpf = :cpf, dt_nasc = :dt_nasc, 
            whatsapp = :whatsapp, logradouro = :logradouro, num = :num, bairro = :bairro WHERE id = '$id'";
        $update = $pdo->prepare($sql);

        $update->bindParam(':nome', $nome);
        $update->bindParam(':cpf', $cpf);
        $update->bindParam(':dt_nasc', $dt_nasc);
        $update->bindParam(':whatsapp', $whatsapp);
        $update->bindParam(':logradouro', $logradouro);
        $update->bindParam(':num', $num);
        $update->bindParam(':bairro', $bairro);
        $update->execute();
        header("Location: ../../view/home/Homepage.php");
    }

    public function create() {
        $pdo = Conexao::conectar();

        $id = filter_var($_GET['id']);
        $nome = filter_var($_POST['nome']);
        $cpf = filter_var($_POST['cpf']);
        $dt_nasc = filter_var($_POST['dt_nasc']);
        $whatsapp = filter_var($_POST['whatsapp']);
        $logradouro = filter_var($_POST['logradouro']);
        $num = filter_var($_POST['num']);
        $bairro = filter_var($_POST['bairro']);

        $sql = "INSERT INTO clientes (nome, cpf, dt_nasc, whatsapp, logradouro, num, bairro)
            VALUES (:nome, :cpf, :dt_nasc, :whatsapp, :logradouro, :num, :bairro)";
        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':dt_nasc', $dt_nasc);
        $stmt->bindParam(':whatsapp', $whatsapp);
        $stmt->bindParam(':logradouro', $logradouro);
        $stmt->bindParam(':num', $num);
        $stmt->bindParam(':bairro', $bairro);
        $stmt->execute();
        header("Location: ../../view/home/Homepage.php");
    }
}
?>