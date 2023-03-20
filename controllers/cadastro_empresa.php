<?php
require_once '../templates/cabecalho_user.php';
require_once '../models/empresa.php';

/*
if (isset($_SESSION['usuario'])) {
    header('location: erro.html');
}*/

try{

    $cadastro = new Empresa();

    $razao_social   = htmlspecialchars($_POST['aaa']);
    $nome_fantasia  = htmlspecialchars($_POST['bbb']);
    $cnpj           = htmlspecialchars($_POST['ccc']);


    $cadastro->razao_social    = $razao_social;
    $cadastro->nome_fantasia   = $nome_fantasia;
    $cadastro->cnpj            = $cnpj;

    $cadastro->cadastro_empresa();
    clearstatcache();
    header('Location: ../views/index.php');

}catch(Exception $e){
    echo $e->getMessage();
}



    

 
