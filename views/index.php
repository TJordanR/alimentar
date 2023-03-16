<?php
require_once '../templates/cabecalho_user.php';
require_once '../models/erro.php';
try {
    $lista = usuario::teste_tab();
    $erro = Erro::erro_class();
} catch(Exception $erro){
    $erro->getMessage();
}

?>
    <h4><?= $erro ?></h4>
    <p>
        <a href="login.php">fazer login com usuario</a>
    </p>

    <div class="container_cards">
        <?php foreach ($lista as $usuario) : ?>
            <h4><?= $usuario['id_usuario'] ?></h4>
            <h4><?= $usuario['matricula'] ?></h4>
            <h4><?= $usuario['user_nome'] ?></h4>
            <h4><?= $usuario['user_senha'] ?></h4>
            <h4><?= $usuario['situacao'] ?></h4>
            <h4><?= $usuario['nivel_acesso'] ?></h4>
            <h4><?= $usuario['horario_refeicao'] ?></h4>
        <?php endforeach; ?>
    </div>


<?php
require_once '../templates/rodape.php';
?>