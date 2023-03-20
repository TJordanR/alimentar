<?php

/**
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 */


 class Empresa {

    public $id_empresa;
    public $razao_social;
    public $nome_fantasia;
    public $cnpj;

    /*public function __construct($id_usuario = false)
    {
        if($id_usuario) {
            $this->id_usuario = $id_usuario;
            //$this->carregar_checagem();
        }
    }*/

    public function cadastro_empresa() {
        $query = "INSERT INTO empresa (razao_social, nome_fantasia, cnpj) 
        VALUES (:razao_social, :nome_fantasia, :cnpj)";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':razao_social',   $this->razao_social);
        $stmt->bindValue(':nome_fantasia',  $this->nome_fantasia);
        $stmt->bindValue(':cnpj',           $this->cnpj);
        $stmt->execute();
    }

 }