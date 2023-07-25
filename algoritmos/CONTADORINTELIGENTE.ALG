algoritmo "ContadorInteligente"
var
   contador,iniciar,fim: Inteiro
Procedimento contagem(A,B: Inteiro)
inicio
   Se (A < B) entao
      Enquanto (A <= B) faca
               Escreva(A,"...")
               A <- A + 1
      FimEnquanto
   senao
        Enquanto (A >= B ) faca
                 Escreva(A,"...")
                 A <- A - 1
        FimEnquanto
   FimSe
FimProcedimento
inicio
   Escreval("Contador Inteligente")
   Escreval("--------------------")
   Escreva("Inicio:")
   Leia(iniciar)
   Escreva("Final:")
   Leia(fim)
   Escreval("---------------------")
   Escreval("       Contando      ")
   Escreval("---------------------")
   contagem(iniciar,fim)

fimalgoritmo