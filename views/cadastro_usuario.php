<?php
require_once '../templates/cabecalho_user.php';

?>

<form action="../controllers/cadastro_usuario.php" method="POST" enctype="multipart/form-data">

    <br>
        <label for="aaa">Matricula</label>
        <input type="text" name="aaa" id="aaa" placeholder="Nome do Usuario">
    <br>
        <label for="bbb">Nome de acesso</label>
        <input type="text" name="bbb" id="bbb" placeholder="Senha do Usuario">
    <br>
        <label for="ccc">Senha de acesso</label>
        <input type="text" name="ccc" id="ccc" placeholder="Nome do Usuario">
    <br>
        <label for="ddd">Situacoa</label>
        <input type="text" name="ddd" id="ddd" placeholder="Senha do Usuario">
    <br>
        <label for="eee">Nivel de acesso</label>
        <input type="text" name="eee" id="eee" placeholder="Nome do Usuario">
    <br>
        <label for="fff">Horario da Refeicao</label>
        <input type="text" name="fff" id="fff" placeholder="Senha do Usuario">
    <br>
        <label for="ggg">Data da Refeicao</label>
        <input type="text" name="ggg" id="ggg" placeholder="Senha do Usuario">
    <br>

    <button type="submit">Cadastrar</button>
</form>