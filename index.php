<?php
//Arquivo index responsável pela inicialização do sistema.
//include → Inclui o que estiver no arquivo
//require → Só funciona se estiver tudo corrreto com o arquivo "requerido"
//require_once → requer apenas uma vez o arquivo solicitado
// declare(strict_types = 1);

require_once 'sistema/configuracao.php';
include_once 'helpers.php';
include './sistema/Nucleo/Mensagem.php';

$msg = new Mensagem();

echo $msg->renderizar();
echo '<br/>';

var_dump($msg);