<?php
/**
 * Class para chamada da conexao com o banco de dados
 * passando os paramentros do arquivo de configuracao
 * 
 * 
 *  Contatos
 *   tiagojordan@outlook.com
 *   salespintorafael@gmail.com
 * 
 * 
 */
require_once '../config/config.php';

class Conexao {
    public static function conectar(){
        $conexao = new PDO(DB_MYSQL . ":host=" . IP_SERVE . ";dbname=" . DB_NOME, DB_USER, DB_PASS);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conexao;
    }
}

