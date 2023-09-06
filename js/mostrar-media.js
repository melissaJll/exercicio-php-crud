
// const formulario = document.querySelector('form');
// const inputPrimeira = formulario.querySelector('#primeira');
// const inputSegunda = formulario.querySelector('#segunda');
// const inputMedia = formulario.querySelector('#media');
// const inputSituacao = formulario.querySelector('#situacao');

// let situacao, primeira, segunda, media;

primeira.oninput = showValue;
segunda.oninput = showValue;

function showValue(){
    media.value = ((parseFloat(primeira.value) + parseFloat(segunda.value))/2).toFixed(2);
}


// CORREÇÃO
// function atualizarMedia(nota1, nota2){
//     return(nota1 + nota2)/2;
// }


// function mudancaStatus(){
//     if(media.value >=7){
//         situacao.value = "Aprovado";
//     }else if (media.value >=5){
//         situacao.value = "Recuperação";
//     }else{
//         situacao.value = "Reprovad";
//     }
// }


// CORREÇÃO
// function mudancaStatus(resultadoMedia){
//     if(resultadoMedia >=7){
//         situacao = "Aprovado";
//     }else if (resultadoMedia >=5){
//         situacao = "Recuperaçã";
//     }else{
//         situacao = "Reprovado";
//     } return situacao;
// }


// CORREÇÃO
// inputPrimeira.addEventListener("input", function(){
//     primeira = parseFloat(this.value);
//     media = atualizarMedia(primeira, parseFloat(inputSegunda.values));
//     inputMedia.value = media.toFixed(2);
//     inputSituacao.value = atualizarSituacao(media);
// });

// inputSegunda.addEventListener("input", function(){
//     primeira = parseFloat(this.value);
//     media = atualizarMedia(segunda, parseFloat(inputPrimeira.values));
//     inputMedia.value = media.toFixed(2);
//     inputSituacao.value = atualizarSituacao(media);
// });