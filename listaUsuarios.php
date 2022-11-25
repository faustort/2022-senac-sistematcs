<?php
$titulo = "Lista Usuários";
include __DIR__ . '/header.php';
?>

<div class="container">

    <h1>Lista Usuários</h1>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM usuarios";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($usuarios as $usuario) :
            ?>
                <tr>
                    <td><?php echo $usuario['nome']; ?></td>
                    <td><?php echo $usuario['email']; ?></td>
                    <td></td>
                </tr>
            <?php endforeach; ?>
    </table>
</div>

<?php
include __DIR__ . '/footer.php';
?>