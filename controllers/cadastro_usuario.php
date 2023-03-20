<?php
require_once '../templates/cabecalho_user.php';
require_once '../models/usuario.php';

/*
if (isset($_SESSION['usuario'])) {
    header('location: erro.html');
}*/

try {

    $cadastro = new Usuario();

    $matricula_          = htmlspecialchars($_POST['aaa']);
    $user_nome_          = htmlspecialchars($_POST['bbb']);
    $user_senha_         = htmlspecialchars($_POST['ccc']);
    $situacao_           = htmlspecialchars($_POST['ddd']);
    $nivel_acesso_       = htmlspecialchars($_POST['eee']);
    $horario_refeicao_   = htmlspecialchars($_POST['fff']);
    $data_refeicao_      = htmlspecialchars($_POST['ggg']);

    $cadastro->matricula        = $matricula_;
    $cadastro->user_nome        = $user_nome_;
    $cadastro->user_senha       = $user_senha_;
    $cadastro->situacao         = $situacao_;
    $cadastro->nivel_acesso     = $nivel_acesso_;
    $cadastro->horario_refeicao = $horario_refeicao_;
    $cadastro->data_refeicao    = $data_refeicao_;

    $cadastro->criar();
    clearstatcache();
    header('Location: ../views/index.php');
} catch (Exception $e) {
    echo $e->getMessage();
}