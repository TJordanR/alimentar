<?php
require_once '../templates/cabecalho_user.php';
?>

<form action="../controllers/cadastro_cardapio.php" method="POST" enctype="multipart/form-data">

    <br>
        <label for="aaa">Nome do Prato</label>
        <input type="text" name="aaa" id="aaa" placeholder="Nome do Usuario">
    <br>
        <label for="bbb">Dias da Semana</label>
        <input type="text" name="bbb" id="bbb" placeholder="Senha do Usuario">
    <br>
        <label for="ccc">Valor do Produto</label>
        <input type="text" name="ccc" id="ccc" placeholder="Nome do Usuario">
    <br>
        <label for="ddd">Composicao do Produto</label>
        <input type="text" name="ddd" id="ddd" placeholder="Senha do Usuario">
    <br>
        <label for="eee">Valor Total</label>
        <input type="text" name="eee" id="eee" placeholder="Nome do Usuario">
    <br>
        
    <button type="submit">Cadastrar</button>
</form>