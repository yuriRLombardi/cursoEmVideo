algoritmo "TotalPares"
// =============================================================
// Algoritmo para preencher um vetor e mostrar os que sao pares.
//
// AUTOR: Gustavo Guanabara
// Curso COMPLETO disponivel GRATIS no site www.cursoemvideo.com
// =============================================================
var
  n: vetor[1..7] de Inteiro
  i, TotPar: Inteiro
inicio
   Para i <- 1 ate 7 faca
      Escreva("Digite o ", i, "o. valor: ")
      Leia(n[i])
   FimPara



   Para i <- 1 ate 7 faca
      Se (n[i] % 2 = 0) entao
         TotPar <- TotPar + 1
         EscrevaL("Valor PAR na posicao", i)
      FimSe
   FimPara
   Escreva("O Total de valores PARES foi ",TotPar)
fimalgoritmo
