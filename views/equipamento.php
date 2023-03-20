<?php

/**
 * AUTENCICACAO E VALIDACAO DE EQUIPAMENTO 
 * Funcao de ferificao de seguranca para 
 * registros de abertura do dia.
 * 
 * Essa funcao tem como base a validacao do
 * equipamento via ip ou enderaco mac para 
 * insercao das vendas das refeicoes feitas
 * durante o dia.
 */

  $mac_equipamento;
  $ip_statico;
  $valid_shash;