<?php
$titulo = "Lista Usuários";
include __DIR__ . '/header.php';
?>

<div class="container">

    <h1>Lista Usuários</h1>
    <table class="table">
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
                    <td><button onclick="excluirUsuario(<?php echo $usuario['id_usu']; ?>);" class="btn btn-danger">Excluir</button>

                        <button onclick="editarUsuario();" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editar_usuario">Editar</button>
                    </td>
                </tr>
            <?php endforeach; ?>
    </table>
</div>


<!-- Modal -->
<div class="modal fade" id="editar_usuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script>
    function excluirUsuario(idUsu) {
        if (confirm('Deseja realmente excluir este usuário?')) {
            fetch('<?php echo URL_BASE; ?>api.php?acao=excluir&idUsu=' + idUsu)
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    if (data) {
                        alert('Usuário excluído com sucesso!');
                        window.location.reload();
                    } else {
                        alert('Erro ao excluir usuário!');
                    }
                });
        }
    }
</script>

<?php
include __DIR__ . '/footer.php';
?>