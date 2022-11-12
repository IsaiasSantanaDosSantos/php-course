<?php
//Arquivo index responsável pela inicialização do sistema.
//include → Inclui o que estiver no arquivo
//require → Só funciona se estiver tudo corrreto com o arquivo "requerido"
//require_once → requer apenas uma vez o arquivo solicitado
// declare(strict_types = 1);

require_once 'sistema/configuracao.php';
include_once 'helpers.php';

$texto = 'texto para resumir';

$string = 'texto';
$inti = 10;
$float = 12.25;
$bool = true;
$nulo = null;

var_dump($string);
echo '<hr>';
echo saudacao();
echo '<hr>';
echo resumirTexto($texto, 100, 'continue');



/**
 * Próxima aula 16:
 * 
 * https://www.youtube.com/watch?v=8SwPVFUh6P4&list=PL0N5TAOhX5E9eJ9Ix6YUIgEw3lNmaIEE9&index=15
 * 
 * 
 * 
 */