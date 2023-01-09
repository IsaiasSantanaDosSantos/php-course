
<?php
require 'vendor/autoload.php';

// require 'rotas.php';
use sistema\Modelo\PostModelo;

$posts = (new PostModelo())->ler();

foreach($posts as $posts){
    echo $posts->titulo.'<br>';
}

    
// echo SITE_NOME;

// echo sistema\Nucleo\Helpers::saudacao();


//next video: https://www.youtube.com/watch?v=wxTr8R6_LqA&list=PL0N5TAOhX5E9eJ9Ix6YUIgEw3lNmaIEE9&index=56





