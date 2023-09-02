// const primeira = document.querySelector('.primeira');
// const segunda = document.querySelector('.segunda');
// const media = document.querySelector('.media');
// const situacao = document.querySelector('.situacao');

primeira.oninput = showValue;
segunda.oninput = showValue;

    function showValue(){
        media.value = ((parseFloat(primeira.value) + parseFloat(segunda.value))/2).toFixed(2);
    }

    
let a = "Aprovado";
let b = "Recuperação";
let c = "Reprovado";
 
media.oninput  = function(){
    if(this.value >=7){
        addTosituacao(a);
    }else if (media.value >=5){
        addTosituacao(b);
    }else{
        addTosituacao(c);
    }
}

