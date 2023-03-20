<?php

/**
 * Classe usuario 
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

 class Usuario {
    /**
     * Variaveis de controle de acesso do usuario
     */
    public $id_usuario;
    public $matricula;
    public $user_nome;
    public $user_senha;
    public $situacao;
    public $nivel_acesso;
    public $horario_refeicao;
    public $data_refeicao;

    /*public function __construct($id_usuario = false)
    {
        if($id_usuario) {
            $this->id_usuario = $id_usuario;
            $this->carregar_checagem();
        }
    }*/

    /*public function carregar_checagem() {
        / **
         * Query de consulta no banco de dados da tabela 
         * tab_usuario com chama secundaria matricula
         * 
         * Prepara a conexao seleciona os dados e viencula 
         * os dados nas variaveis de retorno
         * /
        $query_mysql = "SELECT id_usuario, matricula, user_nome, user_senha, situacao,  
        nivel_acesso, horario_refeicao FROM tab_usuario WHERE matricula = :matricula";
        $conexao = conexao::conectar();
        $estrutura = $conexao->prepare($query_mysql);
        $estrutura->bindValue(':matricula'. $this->matricula);
        $estrutura->execute();

        $checagem = $estrutura->fetch();

        $this-> $id_usuario       = $id_usuario['id_usuario'];
        $this-> $matricula        = $matricula['matricula'];
        $this-> $user_nome        = $user_nome['user_nome'];
        $this-> $user_senha       = $user_senha['user_senha'];
        $this-> $situacao         = $situacao['situacao'];
        $this-> $nivel_acesso     = $nivel_acesso['nivel_acesso'];
        $this-> $horario_refeicao = $horario_refeicao['horario_refeicao'];
    }  */ 

    public static function teste_tab() 
    {
        $query_mysql = "SELECT * FROM usuarios";
        $conexao = conexao::conectar();
        $estrutura = $conexao->query($query_mysql);
        $lista = $estrutura->fetchAll();
        return $lista;
    }

    public static function teste_tab2($id_usuario) 
    {
        $query_mysql = "SELECT * FROM usuarios WHERE id_usuario = :id_usuario";
        $conexao = conexao::conectar();
        
        $stmt = $conexao->prepare($query_mysql);
        $stmt->bindValue(":id_usuario", $id_usuario);
        $stmt->execute();
        $lista = $stmt->fetchObject('Usuario');
        return $lista;
    }

    public function carregar()
    {
        $query = "SELECT matricula, user_nome, user_senha, situacao, nivel_acesso, horario_refeicao, data_refeicao FROM usuario WHERE id_usuario = :id_usuario";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id_usuario', $this->id_usuario);
        $stmt->execute();

        $lista = $stmt->fetch();

        $this->matricula        = $lista['matricula'];
        $this->user_nome        = $lista['user_nome'];
        $this->user_senha       = $lista['user_senha'];
        $this->situacao         = $lista['situacao'];
        $this->nivel_acesso     = $lista['nivel_acesso'];
        $this->horario_refeicao = $lista['horario_refeicao'];
        $this->data_refeicao    = $lista['data_refeicao'];
    }

    public function criar()
    {

        $query = "INSERT INTO usuarios (matricula, user_nome, user_senha, situacao, nivel_acesso, horario_refeicao, data_refeicao) 
        VALUES (:matricula, :user_nome, :user_senha, :situacao, :nivel_acesso, :horario_refeicao, :data_refeicao)";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':matricula',      $this->matricula);
        $stmt->bindValue(':user_nome',      $this->user_nome);
        $stmt->bindValue(':user_senha',     $this->user_senha);
        $stmt->bindValue(':situacao',       $this->situacao);
        $stmt->bindValue(':nivel_acesso',   $this->nivel_acesso);
        $stmt->bindValue(':horario_refeicao', $this->horario_refeicao);
        $stmt->bindValue(':data_refeicao',  $this->data_refeicao);
        $stmt->execute();
    }

 }

