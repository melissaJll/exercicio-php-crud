// const primeira = document.querySelector('.primeira');
// const segunda = document.querySelector('.segunda');
// const media = document.querySelector('.media');
const situacao = document.querySelector('.situacao');

primeira.oninput = showValue;
segunda.oninput = showValue;

    function showValue(){
        media.value = ((parseFloat(primeira.value) + parseFloat(segunda.value))/2).toFixed(2);
    }
const med = media.value
    
media.onChange = function(){
    if(med >=7){
        situacao.value = "Aprovado";
    }else if (med >=5){
        situacao.value = "Recuperação";
    }else{
        situacao.value = "Reprovado";
    }
}

