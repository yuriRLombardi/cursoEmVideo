/*
    Feito por: Yuri
    Data: 19/04/24
    Validações:
    -Se o inicio estiver vazio,mostre a mensagem
    impossível contar
    -Se o passo for igual a zero, mostre um alerta que o 
    passo é invalido e que vai considerar como passo 1
    Atualizado: 22/04/24
*/
function contador() {
    var início = document.querySelector('input#inicio')
    var fim = document.querySelector('input#fim')
    var passo = document.querySelector('input#passo')
    var res = document.querySelector('div#res')
    var inícioNum = Number(início.value)
    var fimNum = Number(fim.value)
    var passoNum = Number(passo.value)
    //Verificação das caixas de texto
    if (início.value.length == 0 || fim.value.length == 0 || passo.value.length == 0) {
        res.innerHTML = '<p>Impossível de contar</p>'
        //alert('[ERRO] Faltam dados!')
    }
    else{
        if (passoNum <= 0) {
            passoNum = 1
            alert('Passo inválido!Considerando PASSO 1')
        }
        res.innerHTML = 'Contando:<br>' 
        //Contagem regresiva
        if (inícioNum > fimNum) {
            for(inícioNum;inícioNum>=fimNum;inícioNum -= passoNum){
                res.innerHTML += `${inícioNum} \u{1F449}`
            }   
        }
        else{
            //Contagem cresente
            for(inícioNum;inícioNum<=fimNum;inícioNum += passoNum){
                res.innerHTML += `${inícioNum} \u{1F449}`
            }   
        }
        res.innerHTML += `\u{1F3C1}`
    }

}
