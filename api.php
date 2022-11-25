<?php
include __DIR__ . '/lib/config.php';

$idUsu = $_GET['idUsu'];

// query idUsu from database and return a json object
$sql = "SELECT * FROM usuarios WHERE id_usu = :idUsu ";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':idUsu', $idUsu);
$stmt->execute();
$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

// echo a json object
echo json_encode($usuario);
