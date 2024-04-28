/*
    Feito por: Yuri
    Data: 17/04/24
    Atualização: 27/04/24
*/
let txtn = document.getElementById('txtn')
let res = document.querySelector('div#res')
let info = document.querySelector('select#info')
let vetor = []

function vNumero(n) {
    if (Number(n) >= 1 && Number(n) <= 100) {
        return true
    }
    else{
        return false
    }
}

function vLista(n, l){
    if (l.indexOf(Number(n)) != -1) {
        return true
    } else {
        return false
    }
}
function mostrar1(n) {
    let opção = document.createElement('option')
    opção.text = `Valor ${n} adicionado`
    info.appendChild(opção)
    txtn.value = ''
    txtn.focus()//Faz o cursor voltar a piscar
}
function adicionar(){
    
    if (!vNumero(txtn.value) || vLista(txtn.value,vetor)) {
       alert('Valor inválido ou já encontrado na lista')
    }else{
        let num = Number(txtn.value)
        vetor.push(num)
        mostrar1(num) 
    }
    res.innerHTML = ""
}
function mostrar2(qtd,maior,menor,soma) {
        let paragrafo = []
        for(let c = 0; c<5;c++){
            paragrafo[c] = document.createElement('p')
        }
        paragrafo[0].innerHTML = `Ao todo, temos ${qtd} números cadastrados`
        paragrafo[1].innerHTML = `O maior valor informado foi ${maior} números cadastrados` 
        paragrafo[2].innerHTML = `O menor valor informado foi ${menor} números cadastrados` 
        paragrafo[3].innerHTML = `Somando todos os valores temos ${soma}`
        paragrafo[4].innerHTML = `A média dos valores digitados foram ${soma/qtd}`
        for(let c = 0; c<5;c++){
            res.appendChild(paragrafo[c])
        }
}

function finalizar() {
    if(vetor.length == 0){
        alert('Adicione os valores antes de finalizar')
    }
    else{
        res.innerHTML = ""
        let qtdNum = vetor.length
        let maior = vetor[0]
        let menor = vetor[0]
        let soma = 0
        for(let c in vetor){
            soma += vetor[c]
            if (vetor[c] > maior) {
                maior = vetor[c]
            }
            if (vetor[c] < menor) {
                menor = vetor[c]
            }
        }
        mostrar2(qtdNum,maior,menor,soma)
    }
    
}
