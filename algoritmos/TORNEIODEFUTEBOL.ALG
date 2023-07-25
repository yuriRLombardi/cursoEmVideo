algoritmo "TorneioDeFutebol"
var
  c,i: Inteiro
  p: vetor [1..3] de Caractere
inicio
 Escreval("Campeonato De Futebol")
 Escreval("---------------------")
 Para c <- 1 ate 3 faca
      Escreva("Nome do ",c,"o time:  ")
      Leia(p[c])
 FimPara
 
 LimpaTela
 Escreval("------------------")
 Escreval("Tabela De Partidas")
 Escreval("------------------")
 Para i <- 1 ate 3 faca
      Para c <- 1 ate 3 faca
         Se (i <> c) entao
            EscrevaL(p[i]:12, " [ ] x [ ] ", p[c]:12)
         FimSe
      FimPara
   FimPara
fimalgoritmo