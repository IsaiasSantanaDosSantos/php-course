<?php
//Arquivo index responsável pela inicialização do sistema.
//include → Inclui o que estiver no arquivo
//require → Só funciona se estiver tudo corrreto com o arquivo "requerido"
//require_once → requer apenas uma vez o arquivo solicitado
// declare(strict_types = 1);

require_once 'sistema/configuracao.php';
include_once 'helpers.php';
//echo formatarValor();

//echo contarTempo('2020-11-11 18:01:10');
/*
if(validarEmail('teste@gmail.com')){
    echo 'Endereço de e-mail válido';
} else {
    echo 'E-mail invalido.';
}
*/
var_dump(validarUrl('https://teste.com'));





/**
 * Próxima aula 29:
 * 
 * https://www.youtube.com/watch?v=iTXf4cS4upk&list=PL0N5TAOhX5E9eJ9Ix6YUIgEw3lNmaIEE9&index=28
 * 
 * 
 * 
 */