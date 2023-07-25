algoritmo "AvaliadorDeJogos"
var
   B,M,diferenca: Inteiro
inicio
      Escreval("Bangu x Madureira")
      Escreval("-----------------")
      Escreval("Quntos gols Bangu fez?:")
      Leia(B)
      Escreval("Quntos gols Mandureira fez?:")
      Leia(M)
      diferenca <- M-B
      Escolha diferenca
              Caso 0
                   Escreval("Empate")
              Caso 3
                   Escreval("Normal")
              Caso 5
                   Escreval("Golasso")
      FimEscolha
fimalgoritmo