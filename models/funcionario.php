<?php

/**
 * Funcionario é onde o colaborador vai fazer a autenticacao do codigo de matricula
 * par registrar o consumo de uma refeicao do dia
 * 
 * requer parametros de verificao de hora, quando o colaborador é cadastrado para 
 * fazer a refeicao em um determinado horario 
 * 
 * sua autenticacao é feita inserindo em um primeiro momento o numero da matricula
 * em seguida o colaborador inseri o numero de validacao ou senha pass par autenticar
 * seu consumo no dia e hora programada.
 * 
 * 
 * 
 */

 class funcionario {
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
 }
