<?php
include_once __DIR__ . "/lib/config.php";
$titulo = (isset($title)) ? $title : "Titulo padrão";
?>
<!DOCTYPE html>
<html>

<head>
    <title><?php echo $titulo; ?></title>

    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo URL_BASE; ?>assets/css/estilo.css" />


</head>

<body>
    <?php
    include 'nav.php';
    ?>