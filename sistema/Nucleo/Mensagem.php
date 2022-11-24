<?php
/**
 * @author Isaias <isaiassantanadossantos@hotmail.com>
 */
class Mensagem 
{
    private $texto;
    private $css;

    /**
     * Metódo responsável pela renderização
     *
     * @return string
     */
    public function renderizar () : string
    {
        return  $this->texto = $this->filtrar('<h1>mensagem de teste');
    }

    private function filtrar (string $mensagem) : string
    {
        return filter_var($mensagem, FILTER_SANITIZE_SPECIAL_CHARS);
    }

}