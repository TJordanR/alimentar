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

    public function __construct($id_usuario = false)
    {
        if($id_usuario) {
            $this->id_usuario = $id_usuario;
            $this->carregar_checagem();
        }
    }

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
        $estrutura->bindValue(':matricula'. $this->matricula;);
        $estrutura->execute();

        $checagem = $estrutura->fetch();

        $this-> $id_usuario       = $id_usuario['id_usuario'];
        $this-> $matricula        = $matricula['matricula'];
        $this-> $user_nome        = $user_nome['user_nome'];
        $this-> $user_senha       = $user_senha['user_senha'];
        $this-> $situacao         = $situacao['situacao'];
        $this-> $nivel_acesso     = $nivel_acesso['nivel_acesso'];
        $this-> $horario_refeicao = $horario_refeicao['horario_refeicao'];
    }   */

    public static function teste_tab() 
    {
        $query_mysql = "SELECT * FROM usuarios";
        $conexao = conexao::conectar();
        $estrutura = $conexao->query($query_mysql);
        $lista = $estrutura->fetchAll();
        return $lista;
    }

 }

