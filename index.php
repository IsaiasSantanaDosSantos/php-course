<?php
//Arquivo index responsável pela inicialização do sistema.
//include → Inclui o que estiver no arquivo
//require → Só funciona se estiver tudo corrreto com o arquivo "requerido"
//require_once → requer apenas uma vez o arquivo solicitado
// declare(strict_types = 1);

require_once 'sistema/configuracao.php';
include_once 'helpers.php';

echo saudacao().' hoje é '.dataAtual();










// //var_dump(localhoste());
// $mese = ['j'=>'Janeiro', 'f'=>'Fevereiro', 'm'=>'Março', 'a'=>'Abril'];
// // $mese = array();
// echo '<hr>';

// foreach($mese as $chave => $valor){
//     echo $chave.' => '.$valor.', ';
// }
// echo '<hr>';

// var_dump($mese);

// echo '<hr>';

// echo $mese[2];

// echo '<hr>';
// echo $_SERVER['PHP_SELF'];

// echo '<hr>';

// var_dump($_SERVER);

/**
 * Próxima aula 29:
 * 
 * https://www.youtube.com/watch?v=iTXf4cS4upk&list=PL0N5TAOhX5E9eJ9Ix6YUIgEw3lNmaIEE9&index=28
 * 
 * 
 * 
 */