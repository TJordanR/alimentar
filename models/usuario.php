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
 */

 class Usuario {
    public $id_usuario;
    public $matricula;
    public $nome;
    public $senha;
    public $status;
    public $nivel;

    public function __construct($id_usuario = false)
    {
        if($id_usuario) {
            $this->id_usuario = $id_usuario;
            $this->carregar();
        }
    }

    public function checagem

 }