/*
Feito por: Yuri
Data: 19/04/24
Atualizado: 22/04/24
*/
function tabuada() {
    var tabuada = document.querySelector('input#tabuada')
    var tab = document.querySelector('select#seltab')
    var res = document.getElementById('res')
    if (tabuada.value.length == 0) {
        alert('Por favor, digite um número!')
    }
    else{
        var tabuadaNum = Number(tabuada.value)
        var multi
        tab.innerHTML = '' 
        for(var c = 1;c<=10;c++){
                var item = document.createElement('option')
                multi = tabuadaNum * c
                item.text += `${tabuadaNum} X ${c} = ${multi}`
                item.value = `tab${c}`// adiciona valores aos 'options'
                tab.appendChild(item)
        }
    }
}