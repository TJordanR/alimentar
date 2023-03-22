/*  PROJETO ALIMENTAR */
/*--------------------------------------------------------------*/

/* DELETANDO BANCO DE DADOS */
DROP DATABASE `alimentar`

/* CRIANDO A O BANCO DE DADOS */
CREATE DATABASE `alimentar`

/**
*   ELEMENTOS DA TABELA USUARIOS
*   id_usuario
*   user_nome
*   user_email
*   user_senha
*   nivel_acesso
*
*/

/* CRIANDO A TABELA USUARIOS */
CREATE TABLE `alimentar`.`usuarios`(
    `id_usuario`        INT(3) NOT NULL AUTO_INCREMENT,
    `user_nome`         VARCHAR(60) NOT NULL,
    `user_email`        VARCHAR(60) NOT NULL,
    `user_senha`        VARCHAR(60) NOT NULL,
    `nivel_acesso`      ENUM('admin', 'cadastro', 'operador') NOT NULL DEFAULT 'operador',
    PRIMARY KEY(`id_usuario`)
) ENGINE = InnoDB;

/* POVOANDO A TABELA USUARIOS */
INSERT INTO `usuarios`(
    `id_usuario`,
    `user_nome`,
    `user_email`,
    `user_senha`,
    `nivel_acesso`
)
VALUES(
    '0',
    'user',
    'user@mail.com',
    '102030',
    'admin'
)


/**
*   ELEMENTOS DA TABELA CARDAPIO
*   id_produto
*   nome_prato
*   dias_da_semana
*   valor_produto
*   composicao_alimentar
*   
*/

/* CRIANDO A TABELA CARDAPIO */
CREATE TABLE `alimentar`.`cardapio`(
    `id_produto`            INT(3)        NOT NULL AUTO_INCREMENT,
    `nome_prato`            VARCHAR(255)  NOT NULL,
    `dias_da_semana`        ENUM('seguanda', 'terça', 'quarta', 'quinta', 'sexta', 'sabado', 'domingo' ) NOT NULL DEFAULT 'seguanda',
    `valor_produto`         DECIMAL(10,2) NOT NULL,
    `composicao_alimentar`  VARCHAR(255)  NOT NULL,
    PRIMARY KEY(`id_produto`)
) ENGINE = InnoDB;

/* POVOANDO A TABELA CARDAPIO */
INSERT INTO `cardapio`(
    `id_produto`,
    `nome_prato`,
    `dias_da_semana`,
    `valor_produto`,
    `composicao_alimentar`
)
VALUES(
    '0',
    'Mocoto',
    'sexta',
    '15,99',
    'arroz, feijao, macarrao, salada tradicional, carne desfiada, farrofa, batata frita, sobrimesa'
)


/**
*   ELEMENTOS DA TABELA EMPRESA
*   id_empresa
*   razao_social
*   nome_fantasia
*   cnpj
*
*/

/* CRIANDO A TABELA EMPRESA */
CREATE TABLE `alimentar`.`empresa`(
    `id_empresa`    INT(3) NOT NULL AUTO_INCREMENT,
    `razao_social`  VARCHAR(60) NOT NULL,
    `nome_fantasia` VARCHAR(60) NOT NULL,
    `cnpj`          VARCHAR(16)  NOT NULL,
    PRIMARY KEY(`id_empresa`)
) ENGINE = InnoDB;

/* POVOANDO A TABELA EMPRESA */
INSERT INTO `empresa`(
    `id_empresa`,
    `razao_social`,
    `nome_fantasia`,
    `cnpj`
)
VALUES(
    '0',
    'RIO GRANDE COMERCIO DE CARNE LTDA',
    'FRIBAL RIO GRANDE',
    '071850555000151'
)


/* CRIANDO A TABELA DEPARTAMENTO */
CREATE TABLE `alimentar`.`departamento`(
    `id_departamento`       INT(3)      NOT NULL AUTO_INCREMENT,
    `id_empresa` 			INT 		NOT NULL,	
    `nome`                  VARCHAR(60) NOT NULL,
    FOREIGN KEY (id_empresa)	REFERENCES empresa(id_empresa),
    PRIMARY KEY(`id_departamento`)
) ENGINE = InnoDB;

/* POVOANDO A TABELA DEPARTAMENTO */
INSERT INTO `departamento`(
    `id_departamento`,
    `id_empresa`,
    `nome`
)
VALUES(
    '0',
    '1',
    'GESTAO DE GENTE'
)


/* CRIANDO A TABELA FUNCIONARIO */
CREATE TABLE `alimentar`.`funcionario`(
    `id_funcionario`        INT(3) 		NOT NULL AUTO_INCREMENT,
    `id_empresa` 			INT 		NOT NULL,	/*TABELA EMPRESA*/
    `id_departamento` 		INT 		NOT NULL,	/*TABELA DEPARTAMENTO*/
    `matricula`         	INT(6) 		NOT NULL,
    `nome`         			VARCHAR(200) NOT NULL,
    `imagem` 				LONGBLOB, 
    `data_criacao` 			TIMESTAMP	DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `situacao` enum('ativo', 'inativo') NOT NULL DEFAULT 'ativo',
    `data_refeicao`         DATE NOT NULL DEFAULT '2023-03-22',
    PRIMARY KEY(`id_funcionario`),
    FOREIGN KEY (id_empresa)	    REFERENCES empresa(id_empresa),
    FOREIGN KEY (id_departamento)	REFERENCES departamento(id_departamento)
) ENGINE = InnoDB;


/* POVOANDO A TABELA FUNCIONARIO */
INSERT INTO `funcionario`(
    `id_funcionario`,
    `id_empresa`,
    `id_departamento`,
    `matricula`,
    `nome`,
    `imagem`,
    `data_criacao`,
    `situacao`,
    `data_refeicao`
)
VALUES(
    '0',
    '1',
    '1',
    '123456',
    'VALERY LEGASOV',
    'fasdfasdgdgfasfdasfasdfga',
    '01/01/23',
    'ativo',
    '01/01/23'
)



