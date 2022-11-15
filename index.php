<?php
//Arquivo index responsável pela inicialização do sistema.
//include → Inclui o que estiver no arquivo
//require → Só funciona se estiver tudo corrreto com o arquivo "requerido"
//require_once → requer apenas uma vez o arquivo solicitado
// declare(strict_types = 1);

require_once 'sistema/configuracao.php';
include_once 'helpers.php';

$texto = '<h1>texto</h1> <p>para</p> resumir';


echo resumirTexto($texto, 50);



/**
 * Próxima aula 22:
 * 
 * https://www.youtube.com/watch?v=jcasYy_g4lg&list=PL0N5TAOhX5E9eJ9Ix6YUIgEw3lNmaIEE9&index=21
 * 
 * 
 * 
 */