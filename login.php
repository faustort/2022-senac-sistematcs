<?php
$titulo = "Login";
include 'header.php';

$aviso = false;

if (isset($_POST['campo_email']) && isset($_POST['campo_senha'])) {
    // echo '<div class="container alert alert-success my-5">Seu cadastro foi realizado com sucesso!</div>';

    $sql = "select * from usuarios where email = :email and senha = :senha";
    $stmt = $pdo->prepare($sql);
    $senha = $_POST['campo_senha'];
    $senha = md5(KEY . $senha);
    $stmt->bindParam(':email', $_POST['campo_email']);
    $stmt->bindParam(':senha', $senha);
    $stmt->execute();

    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario) {
        $aviso =  'Você logou com sucesso!!!';
    } else {
        $aviso =  'Usuário ou senha não encontrado';
    }
} else {
    // echo 'Usuário ou senha não encontrado';
}


?>

<div class="container py-5">
    <?php

    if ($aviso) {
        echo '<div class="alert alert-success mb-5">' . $aviso . '</div>';
    }
    ?>

    <form method="post">
        <div class="mb-3">
            <label for="input_email" class="form-label">Digite seu e-mail</label>
            <input type="email" name="campo_email" class="form-control" id="input_email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Digite seu e-mail para o cadastro, não compartilhamos dados pessoais.</div>
        </div>
        <div class="mb-3">
            <label for="input_senha" class="form-label">Digite sua Senha</label>
            <input type="password" name="campo_senha" class="form-control" id="input_senha">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>
<?php
include 'footer.php';
?>