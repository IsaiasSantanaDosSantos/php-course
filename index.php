<?php
//Arquivo index responsável pela inicialização do sistema.
//include → Inclui o que estiver no arquivo
//require → Só funciona se estiver tudo corrreto com o arquivo "requerido"
//require_once → requer apenas uma vez o arquivo solicitado
// declare(strict_types = 1);

require_once 'sistema/configuracao.php';
include_once 'helpers.php';

$texto = 'texto para resumir';

// echo $total = mb_strlen(trim($texto));
// echo '<hr>';
// echo $resumo = mb_substr($texto, 1, 3);
// echo '<hr>';

// echo $ocorrencia = mb_strrpos($texto, 'o');



//var_dump($string);
//echo '<hr>';
//echo saudacao();
//echo '<hr>';
echo resumirTexto($texto, 15);



/**
 * Próxima aula 22:
 * 
 * https://www.youtube.com/watch?v=jcasYy_g4lg&list=PL0N5TAOhX5E9eJ9Ix6YUIgEw3lNmaIEE9&index=21
 * 
 * 
 * 
 */