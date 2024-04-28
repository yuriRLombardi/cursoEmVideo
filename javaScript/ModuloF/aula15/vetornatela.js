/*
Feito por Yuri
Data: 26/04/24
*/
let valores = [8,1,7,4,2,9]
valores.sort()
//Exibição de vetor sem uma formatação(padrão)
//console.log(valores)

//Exibição de vetor de forma pouco inteligente
/*console.log(valores[0])
console.log(valores[1])
console.log(valores[2])
console.log(valores[3])
console.log(valores[4])
console.log(valores[5])


//Exibição de vetor de forma inteligente
for(let pos = 0; pos < valores.length; pos++){
    console.log(`A posição ${pos} tem o valor ${valores[pos]}`)
}
*/

//Forma simplificada para array e objetos
for(let pos in valores /* Para cada posição em valores faça: */){
    console.log(`A posição ${pos} tem o valor ${valores[pos]}`)
}