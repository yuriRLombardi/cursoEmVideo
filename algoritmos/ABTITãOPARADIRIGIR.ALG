algoritmo "Calculo de aprovação"
var
   nota1,nota2,media: Real
   opcao: Caractere
Procedimento aprovacao (A,B,C:Real)
inicio
C <-(A+B)/2
Escreval("Sua media e",C:5:1)
Se ( C >= 7) entao
    Escreval("Voce foi aprovado")
senão
      Escreval("Voce foi reprovado")
Fimse

FimProcedimento
inicio
Repita
   Escreval("Digite a primeira nota:")
   Leia(nota1)
   Escreval("Digite a segunda nota:")
   Leia(nota2)
   aprovacao(nota1,nota2,media)
   Escreval("Quer continuar?[S/N]")
   Leia(opcao)
   LimpaTela
Ate (opcao = "N")
fimalgoritmo