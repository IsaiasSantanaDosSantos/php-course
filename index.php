<?php
//Arquivo index responsável pela inicialização do sistema.
//include → Inclui o que estiver no arquivo
//require → Só funciona se estiver tudo corrreto com o arquivo "requerido"
//require_once → requer apenas uma vez o arquivo solicitado

require_once 'sistema/configuracao.php';
include_once 'helpers.php';

echo saudacao();
echo '<br/>';
echo saudacao();
echo '<br/>';
echo resumirTexto();



/**
 * Próxima aula 16:
 * 
 * https://www.youtube.com/watch?v=8SwPVFUh6P4&list=PL0N5TAOhX5E9eJ9Ix6YUIgEw3lNmaIEE9&index=15
 * 
 * 
 * 
 */