<?php

function calcularMedia(float $nota1, float $nota2){
    $media = ( $nota1 +  $nota2) / 2;
    return number_format($media,2);
}

?>