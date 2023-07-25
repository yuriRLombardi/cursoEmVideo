algoritmo "semnome"
var
  I: Inteiro
  N, Pesado: Caractere
  P, Mai: Real
Procedimento Teste()
inicio
     LimpaTela
     EscrevaL("------------------------------------")
     EscrevaL(" D E T E C T O R   DE   P E S A D O ")
     EscrevaL(" Maior Peso ate agora: ", Mai, "Kg")
     EscrevaL("------------------------------------")

FimProcedimento
inicio
LimpaTela
  Teste()
  Para I <- 1 ate 5 faca
     Escreva("Digite o nome: ")
     Leia(N)
     Escreva("Digite o peso de ", N, ": ")
     leia(P)
     Se (P>Mai) entao
        MAI <- P
        Pesado <- N
     FimSe
Teste()
  FimPara
Teste()
EscrevaL("A pessoa mais pesada foi ", Pesado, ", com ", Mai, " quilos.")
fimalgoritmo