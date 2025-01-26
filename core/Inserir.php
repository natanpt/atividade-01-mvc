<?php

include "Conexao.php";

$pdo = Conexao::conectar();

$data = '1927-07-24';
$horario = '12:04:32';
$duracao = '100';
$status = 'OK';

$sql = "INSERT INTO agendamentos (data, horario, duracao, status)
        VALUES (:data, :horario, :duracao, :status)";
$stmt = $pdo->prepare($sql);

$stmt->bindParam(':data', $data);
$stmt->bindParam(':horario', $horario);
$stmt->bindParam(':duracao', $duracao);
$stmt->bindParam(':status', $status);

if ($stmt->execute()) {
    echo "<h1>Dados inseridos com sucesso!</h1>";
} else {
    echo "Erro ao inserir dados.";
}

$data = '2022-05-03';
$horario = '23:07:53';
$duracao = '21';
$status = 'NOT OK';

$sql = "INSERT INTO agendamentos (data, horario, duracao, status)
        VALUES (:data, :horario, :duracao, :status)";
$stmt = $pdo->prepare($sql);

$stmt->bindParam(':data', $data);
$stmt->bindParam(':horario', $horario);
$stmt->bindParam(':duracao', $duracao);
$stmt->bindParam(':status', $status);

if ($stmt->execute()) {
    echo "<h1>Dados inseridos com sucesso!</h1>";
} else {
    echo "Erro ao inserir dados.";
}

$data = '1840-10-18';
$horario = '09:42:00';
$duracao = '324';
$status = 'OK';

$sql = "INSERT INTO agendamentos (data, horario, duracao, status)
        VALUES (:data, :horario, :duracao, :status)";
$stmt = $pdo->prepare($sql);

$stmt->bindParam(':data', $data);
$stmt->bindParam(':horario', $horario);
$stmt->bindParam(':duracao', $duracao);
$stmt->bindParam(':status', $status);

if ($stmt->execute()) {
    echo "<h1>Dados inseridos com sucesso!</h1>";
} else {
    echo "Erro ao inserir dados.";
}

////////////////////////////////////////////////////////////////////////////////////////////////

$nome = 'Paulo';
$cpf = '3246579843';
$dt_nasc = '1943-04-05';
$whatsapp = '87876934093';
$logradouro = 'Rua José Manco'; 
$num = '54';
$bairro = 'Franciso Oco';

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

if ($stmt->execute()) {
    echo "<h1>Dados inseridos com sucesso!</h1>";
} else {
    echo "Erro ao inserir dados.";
}

$nome = 'Pelé';
$cpf = '48237498723';
$dt_nasc = '20-12-1949';
$whatsapp = '234324234234';
$logradouro = 'Rua Pelé'; 
$num = '04';
$bairro = 'Monstequieu';

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

if ($stmt->execute()) {
    echo "<h1>Dados inseridos com sucesso!</h1>";
} else {
    echo "Erro ao inserir dados.";
}

$nome = 'José';
$cpf = '34234324324';
$dt_nasc = '10-01-2000';
$whatsapp = '54645645643';
$logradouro = 'Rua C'; 
$num = '67';
$bairro = 'John Locke';

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

if ($stmt->execute()) {
    echo "<h1>Dados inseridos com sucesso!</h1>";
} else {
    echo "Erro ao inserir dados.";
}

////////////////////////////////////////////////////////////////////////////////////////////////

$data = '20-09-1943';
$horario = '08:09';
$qtd = '5';

$sql = "INSERT INTO compras (data, horario, qtd)
        VALUES (:data, :horario, :qtd)";
$stmt = $pdo->prepare($sql);

$stmt->bindParam(':data', $data);
$stmt->bindParam(':horario', $horario);
$stmt->bindParam(':qtd', $qtd);

if ($stmt->execute()) {
    echo "<h1>Dados inseridos com sucesso!</h1>";
} else {
    echo "Erro ao inserir dados.";
}

$data = '09-12-1840';
$horario = '09:42';
$qtd = '10';

$sql = "INSERT INTO compras (data, horario, qtd)
        VALUES (:data, :horario, :qtd)";
$stmt = $pdo->prepare($sql);

$stmt->bindParam(':data', $data);
$stmt->bindParam(':horario', $horario);
$stmt->bindParam(':qtd', $qtd);

if ($stmt->execute()) {
    echo "<h1>Dados inseridos com sucesso!</h1>";
} else {
    echo "Erro ao inserir dados.";
}

$data = '10-05-2000';
$horario = '20:01';
$qtd = '2';

$sql = "INSERT INTO compras (data, horario, qtd)
        VALUES (:data, :horario, :qtd)";
$stmt = $pdo->prepare($sql);

$stmt->bindParam(':data', $data);
$stmt->bindParam(':horario', $horario);
$stmt->bindParam(':qtd', $qtd);

if ($stmt->execute()) {
    echo "<h1>Dados inseridos com sucesso!</h1>";
} else {
    echo "Erro ao inserir dados.";
}

////////////////////////////////////////////////////////////////////////////////////////////////

$nome = 'Caixa';
$valor = '20.00';
$marca = 'Gucci';
$categoria = 'Papelão';

$sql = "INSERT INTO produtos (nome, valor, marca, categoria)
        VALUES (:nome, :valor, :marca, :categoria)";
$stmt = $pdo->prepare($sql);

$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':valor', $valor);
$stmt->bindParam(':marca', $marca);
$stmt->bindParam(':categoria', $categoria);

if ($stmt->execute()) {
    echo "<h1>Dados inseridos com sucesso!</h1>";
} else {
    echo "Erro ao inserir dados.";
}

$nome = 'Cadeira';
$valor = '50.00';
$marca = 'Armani';
$categoria = 'Madeira';

$sql = "INSERT INTO produtos (nome, valor, marca, categoria)
        VALUES (:nome, :valor, :marca, :categoria)";
$stmt = $pdo->prepare($sql);

$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':valor', $valor);
$stmt->bindParam(':marca', $marca);
$stmt->bindParam(':categoria', $categoria);

if ($stmt->execute()) {
    echo "<h1>Dados inseridos com sucesso!</h1>";
} else {
    echo "Erro ao inserir dados.";
}

$nome = 'Mesa';
$valor = '100.00';
$marca = 'Du';
$categoria = 'Prata';

$sql = "INSERT INTO produtos (nome, valor, marca, categoria)
        VALUES (:nome, :valor, :marca, :categoria)";
$stmt = $pdo->prepare($sql);

$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':valor', $valor);
$stmt->bindParam(':marca', $marca);
$stmt->bindParam(':categoria', $categoria);

if ($stmt->execute()) {
    echo "<h1>Dados inseridos com sucesso!</h1>";
} else {
    echo "Erro ao inserir dados.";
}

////////////////////////////////////////////////////////////////////////////////////////////////

$nome = 'Pelé';
$valor = '20.00';
$descricao = 'OK';

$sql = "INSERT INTO servicos (nome, valor, descricao)
        VALUES (:nome, :valor, :descricao)";
$stmt = $pdo->prepare($sql);

$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':valor', $valor);
$stmt->bindParam(':descricao', $descricao);

if ($stmt->execute()) {
    echo "<h1>Dados inseridos com sucesso!</h1>";
} else {
    echo "Erro ao inserir dados.";
}

$nome = 'Cleiton';
$valor = '45.00';
$descricao = 'OK';

$sql = "INSERT INTO servicos (nome, valor, descricao)
        VALUES (:nome, :valor, :descricao)";
$stmt = $pdo->prepare($sql);

$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':valor', $valor);
$stmt->bindParam(':descricao', $descricao);

if ($stmt->execute()) {
    echo "<h1>Dados inseridos com sucesso!</h1>";
} else {
    echo "Erro ao inserir dados.";
}

$nome = 'Jeff';
$valor = '50.00';
$descricao = 'OK';

$sql = "INSERT INTO servicos (nome, valor, descricao)
        VALUES (:nome, :valor, :descricao)";
$stmt = $pdo->prepare($sql);

$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':valor', $valor);
$stmt->bindParam(':descricao', $descricao);

if ($stmt->execute()) {
    echo "<h1>Dados inseridos com sucesso!</h1>";
} else {
    echo "Erro ao inserir dados.";
}

?>