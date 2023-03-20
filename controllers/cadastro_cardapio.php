<?php
require_once '../templates/cabecalho_user.php';
require_once '../models/cardapio.php';

/*
if (isset($_SESSION['usuario'])) {
    header('location: erro.html');
}*/

try{

    $cadastro = new Cardapio();

    $nome_prato             = htmlspecialchars($_POST['aaa']);
    $dias_da_semana         = htmlspecialchars($_POST['bbb']);
    $valor_produto          = htmlspecialchars($_POST['ccc']);
    $composicao_alimentar   = htmlspecialchars($_POST['ddd']);
    $valor_total_dia        = htmlspecialchars($_POST['eee']);

    $cadastro->nome_prato               = $nome_prato;
    $cadastro->dias_da_semana           = $dias_da_semana;
    $cadastro->valor_produto            = $valor_produto;
    $cadastro->composicao_alimentar     = $composicao_alimentar;
    $cadastro->valor_total_dia          = $valor_total_dia;

    $cadastro->cadastro_cardapio();
    clearstatcache();
    header('Location: ../views/index.php');

}catch(Exception $e){
    echo $e->getMessage();
}