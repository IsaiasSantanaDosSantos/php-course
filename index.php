<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<?php



//Arquivo index responsável pela inicialização do sistema.
//include → Inclui o que estiver no arquivo
//require → Só funciona se estiver tudo corrreto com o arquivo "requerido"
//require_once → requer apenas uma vez o arquivo solicitado
// declare(strict_types = 1);



require_once 'sistema/configuracao.php';
include_once 'helpers.php';
include './sistema/Nucleo/Mensagem.php';

use sistema\Nucleo\Mensagem;

echo (new Mensagem())->alerta('Texto de alerta!');

// $msg = new Mensagem();

// echo $msg->erro('Mensagem de erro!')->renderizar();
// echo '<br/>';

// var_dump($msg);

// echo (new Mensagem())->erro("Mensagem de erro!")->renderizar();


echo '<br/>';