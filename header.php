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
    <link rel="stylesheet" href="<?php echo URL_BASE; ?>assets/css/estilo.css" />
</head>

<body>
    <?php
    include 'nav.php';
    ?>