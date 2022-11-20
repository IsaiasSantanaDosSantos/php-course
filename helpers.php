<?php
/**
 * Contar o tempo de uma data
 * @param string $data
 * @return string
 */
function contarTempo(string $data): string
{
    $agora = strtotime(date('Y-m-d H:i:s'));
    
    $tempo = strtotime($data);
    
    $diferenca = $agora - $tempo;
    
    $segundos = $diferenca;
    $minutos = round($diferenca / 60); 
    $horas = round($diferenca / 3600); 
    $dias = round($diferenca / 86400); 
    $semanas = round($diferenca / 604800);
    $meses = round($diferenca / 2419200); 
    $anos = round($diferenca / 29030400); 
    
   if($segundos <= 60){
       return 'agora';
   } elseif ($minutos <= 60) {
       return $minutos == 1 ? 'há 1 minuto' : 'há '.$minutos.' minutos';
} elseif ($horas <= 24) {
    return $horas == 1 ? 'há 1 hora' : 'há '.$horas.' horas';
} elseif ($dias <= 7) {
    return $dias == 1 ? 'há 1 dia' : 'há '.$horas.' dias';
}elseif ($semanas <= 4) {
    return $segundos == 1 ? 'há 1 semana' : 'há '.$semanas.' semanas';
} elseif ($meses <= 12) {
    return $meses == 1 ? 'há 1 mês' : 'há '.$meses.' meses';
} else {
    return $anos == 1 ? 'há 1 ano' : 'há '.$anos.' anos';
}
    
}

/**
 * Formata um valor com ponto e vírgula
 * @param float $valor
 * @return string
 */
function  formatarValor(float $valor = null): string
{
    return number_format (($valor ? $valor : 10), 2,',','.');
}

/**
 * Formata um número com pontos
 * @param int $numero
 * @return string
 */

function formatarNumero(int $numero = null ): string
{
    return number_format($numero ? : 50, 0,'.','.');
}










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
