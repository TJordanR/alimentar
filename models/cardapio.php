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


 class Cardapio {

    public $id_produto;
    public $nome_prato;
    public $dias_da_semana;
    public $valor_produto;
    public $composicao_alimentar; 
    public $valor_total_dia;

    /*public function __construct($id_usuario = false)
    {
        if($id_usuario) {
            $this->id_usuario = $id_usuario;
            //$this->carregar_checagem();
        }
    }*/

    public function cadastro_cardapio() {
        $query = "INSERT INTO cardapio (nome_prato, dias_da_semana, valor_produto, composicao_alimentar, valor_total_dia) 
        VALUES (:nome_prato, :dias_da_semana, :valor_produto, :composicao_alimentar, :valor_total_dia)";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':nome_prato',             $this->nome_prato);
        $stmt->bindValue(':dias_da_semana',         $this->dias_da_semana);
        $stmt->bindValue(':valor_produto',          $this->valor_produto);
        $stmt->bindValue(':composicao_alimentar',   $this->composicao_alimentar);
        $stmt->bindValue(':valor_total_dia',        $this->valor_total_dia);
        $stmt->execute();
    }

 }