<?php

function saudacao(): string
{
   echo $hora = date('H:i:s');

    if($hora >= 0 AND $hora <= 5){
        $saudacao = 'Boa madrugada';
    } elseif($hora >=6 AND $hora <=12){
        $saudacao = "Bom dia";
    } elseif($hora >= 13 AND $hora <=18) {
        $saudacao = "Boa tarde";
    } else {
        $saudacao = "Boa noite";
    }
   

    return $saudacao;
};

/**
 * Resume um texto
 * 
 * @param string $texto texto para resumir
 * @param int $limite quantidade de caracteres
 * @param string $continue opcional - o que deve ser exibido ao final do resumo
 * @return string texto resumido
 */
function resumirTexto(string $texto, int $limite, string $continue = '...'): string
{
    $textoLimpo = trim(strip_tags($texto));
    if(mb_strlen($textoLimpo) <= $limite){
        return $textoLimpo;
    }

    $resumirTexto = mb_substr($textoLimpo, 0, mb_strrpos(mb_substr($textoLimpo, 0, $limite), ''));


    return $resumirTexto.$continue;
};
