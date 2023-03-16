/*  PROJETO ALIMENTAR */
/*--------------------------------------------------------------*/
/* CRIANDO A O BANCO DE DADOS */
CREATE DATABASE `alimentar`

/**
*   ELEMENTOS DA TABELA USUARIOS
*   id_usuario
*   matricula
*   user_nome
*   user_senha
*   situacao
*   nivel_acesso
*   horario_refeicao
*/


/* CRIANDO A TABELA USUARIOS */
CREATE TABLE `alimentar`.`usuarios`(
    `id_usuario` INT(3) NOT NULL AUTO_INCREMENT,
    `matricula` INT(6) NOT NULL,
    `user_nome` VARCHAR(60) NOT NULL,
    `user_senha` VARCHAR(8) NOT NULL,
    `situacao` VARCHAR(20) NOT NULL,
    `nivel_acesso` INT(1) NOT NULL,
    `horario_refeicao` TIME NOT NULL,
    `data_refeicao` DATE NOT NULL,
    PRIMARY KEY(`id_usuario`)
) ENGINE = InnoDB;

/* POVOANDO A TABELA USUARIOS */
INSERT INTO `usuarios`(
    `matricula`,
    `user_nome`,
    `user_senha`,
    `situacao`,
    `nivel_acesso`,
    `horario_refeicao`,
    `data_refeicao`
)
VALUES(
    '123456',
    'TIAGO JORDAN RODRIGUES DA SILVA',
    '102030',
    'ativo',
    '1',
    '12:00',
    '2023/03/15'
)
