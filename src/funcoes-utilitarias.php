<?php

// function calcularMedia(float $nota1, float $nota2):string{
//     $media = ( $nota1 +  $nota2) / 2;
//     return number_format($media,2);
// }

function situacaoAluno(float $notaFinal):string{
    if($notaFinal >= 7){
        return "Aprovado";
    }elseif($notaFinal >= 5){
        return "Recuperação";
    }else{
        return "Reprovado";
    }
}

function situacaoCor(float $notaFinal){
    if($notaFinal >= 7){
        return "green";
    }elseif($notaFinal >= 5){
        return "blue";
    }else{
        return "red";
    }
}

?>