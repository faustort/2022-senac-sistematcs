<?php
include __DIR__ . '/lib/config.php';


$acao = $_GET['acao'];


if ($acao == 'editar') {
    $idUsu = $_GET['idUsu'];
    $nome = $_GET['nome'];
    $email = $_GET['email'];

    // update database
    $sql = "UPDATE usuarios SET nome = :nome, email = :email WHERE id_usu = :idUsu";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':idUsu', $idUsu);
    $stmt->execute();

    echo json_encode(true);
}

// mais informações no arquivo listaUsuarios.php
if ($acao == 'excluir') {
    $idUsu = $_GET['idUsu'];
    $sql = "DELETE FROM usuarios WHERE id_usu = :idUsu";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':idUsu', $idUsu);
    $stmt->execute();
    echo json_encode(true);
}

// mais informações no arquivo modal.php
if ($acao == 'retorna') {
    $idUsu = $_GET['idUsu'];
    $sql = "SELECT * FROM usuarios WHERE id_usu = :idUsu ";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':idUsu', $idUsu);
    $stmt->execute();
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
    echo json_encode($usuario);
}
