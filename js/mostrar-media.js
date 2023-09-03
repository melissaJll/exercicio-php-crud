// const primeira = document.querySelector('.primeira');
// const segunda = document.querySelector('.segunda');
const media = document.querySelector('.media');
const situacao = document.querySelector('.situacao');

primeira.oninput = showValue;
segunda.oninput = showValue;

    function showValue(){
        media.value = ((parseFloat(primeira.value) + parseFloat(segunda.value))/2).toFixed(2);
    }


function mudancaStatus(){
    if(media.value >=7){
        situacao.value = "Aprovad";
    }else if (media.value >=5){
        situacao.value = "Recuperaçã";
    }else{
        situacao.value = "Reprovad";
    }
}

