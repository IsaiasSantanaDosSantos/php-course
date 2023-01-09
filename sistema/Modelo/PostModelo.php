<?php 

namespace sistema\Modelo;

use sistema\Nucleo\Conexao;

/**
 * Classe PostModelo
 * 
 * @author Ronaldo Aries/Isaias <isaiassantanadossantos@hotmail.com>
 */
class PostModelo 
{
    public function ler(): array
    {
        $query = 'SELECT * FROM posts';
        $stmt = Conexao::getInstancia()->query($query);
        $resultado = $stmt->fetchAll();
       
        return $resultado;
    }
}