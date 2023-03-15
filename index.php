<?php
/// padrao para usuario comum
require_once 'templates/cabecalho_user.php';

try {
    $lista = usuario::teste_tab();
} catch(Exception $retorno){
    echo $retorno->getMassage();
}
?>

    <p>
        <a href="controllers/login.php"></a>
    </p>

    <div class="container_cards">
        <?php foreach ($lista as $usuario) : ?>
            <h1><?= $usuario['id_usuario'] ?></h1>
        <?php endforeach; ?>
    </div>


<?php
require_once 'templates/rodape.php';
?>