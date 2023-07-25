Algoritmo   "AntecessorSucessor"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Gustavo Ganabara
// Descrição   : Calcula e mostra o dobro e a terça parte de um numero que o usuario digitou
// Autor(a)    : Yuri
// Data atual  : 14/07/2023
Var
V,D,T: Real
opcao: Caractere

Inicio
Repita
      Escreva("Digite um numero:  ")
      Leia(V)
      D <- V * 2
      T <- V / 3
      Escreval("O dobro de  ",V," e",D)
      Escreval("A terça parte de",V," e",T)
      Escreval("Deseja continuar? [S/N]")
      Leia(opcao)
Ate (opcao = "N")

Fimalgoritmo