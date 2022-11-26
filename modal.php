<?php
include __DIR__ . "./header.php";
?>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="buscaDados(14)">
    Info dados Ana
</button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div>Nome: <span id="nome"></span></div>
                <div>E-mail: <span id="email"></span></div>
            </div>
        </div>
    </div>
</div>
<script>
    function buscaDados(idUsu) {
        fetch('<?php echo URL_BASE; ?>api.php?acao=retorna&idUsu=' + idUsu)
            .then((response) => response.json())
            .then((data) => {
                console.log(data)
                document.getElementById('nome').innerHTML = data.nome;
                document.getElementById('email').innerHTML = data.email;
            });

    }
</script>
<?php
include __DIR__ . "./footer.php";
?>