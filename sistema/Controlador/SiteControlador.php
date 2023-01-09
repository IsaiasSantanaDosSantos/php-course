<?php 

namespace sistema\Controlador;

use sistema\Nucleo\Controlador;

class SiteControlador  extends Controlador
{
    public function __construct()
    {
        parent::__construct('templates/site/views');
    }

    public function index ():void 
    {
        echo $this->template->renderizar('index.html', [
            // 'titulo'=> 'Página inicial',
            // 'subtitulo' => 'teste de subtitulo'
        ]);
    }

    public function sobre ():void 
    {
        echo $this->template->renderizar('sobre.html', [
            'titulo'=> 'Sobre nós',
            'subtitulo' => 'teste de subtitulo'
        ]);
    }
}