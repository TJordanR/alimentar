<?php
require_once '../templates/cabecalho_user.php';

try {
    $cod = $_POST['aaa'];
    $lista = usuario::teste_tab2($cod);
} catch(Exception $erro){
    $erro->getMessage();
}
?>
    <?  if($cod <=0){?>
        <h1>Pesquisa de Usuario:</h1>
        <br>
        <h1>Matricula: <?= $lista->matricula ?></h1>
        <h1>Nome: <?= $lista->user_nome ?></h1>
        <form action="" method="POST" enctype="multipart/form-data">
    <? }?>
    <br>
        <label for="aaa">ID Usuario</label>
        <input type="text" name="aaa" id="aaa" placeholder="Autenticar Usuario">
    <br>
    <button type="submit">Pesquisar</button>

    <h4><?= $lista->id_usuario ?></h4>
    <h4><?= $lista->matricula ?></h4>
    <h4><?= $lista->user_nome ?></h4>
    <h4><?= $lista->user_senha ?></h4>
    <h4><?= $lista->situacao ?></h4>
    <h4><?= $lista->nivel_acesso ?></h4>
    <h4><?= $lista->horario_refeicao ?></h4>

