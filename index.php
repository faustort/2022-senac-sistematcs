<?php
$title = "Este é o index";
include 'header.php';
?>
<div class="container">
    <div class="grid col-2">
        <div>
            <?php
            $consulta = $pdo->query("SELECT * from usuarios");
            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                echo $linha['nome'] . "<br>";
            }
            ?>
        </div>
        <div>Direita</div>
    </div>
    <div class="grid col-3">
        <div>Esquerda</div>
        <div>Centro</div>
        <div>Direita</div>
    </div>
    <div class="grid col-3-sidebar">
        <div>Sidebar</div>
        <div>Esquerda</div>
        <div>Direita</div>
    </div>
</div>
<?php
include 'footer.php';
?>