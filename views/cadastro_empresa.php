<?php
require_once '../templates/cabecalho_user.php';
?>

<form action="../controllers/cadastro_empresa.php" method="POST" enctype="multipart/form-data">

    <br>
        <label for="aaa">Razao Social</label>
        <input type="text" name="aaa" id="aaa" placeholder="Razao Social">
    <br>
        <label for="bbb">Nome Fantasia</label>
        <input type="text" name="bbb" id="bbb" placeholder="Nome Fantasia">
    <br>
        <label for="ccc">CNPJ</label>
        <input type="text" name="ccc" id="ccc" placeholder="CNPJ">
    <br>
        
    <button type="submit">Cadastrar</button>
</form>