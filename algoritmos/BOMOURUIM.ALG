algoritmo "TrianguloSimOuNaoEQueTipo"
// Algoritmo que calcula três segmentos para ver se ta para formar um triangulo
// e ver se ele é escaleno,isóceles ou equilátero
//Professor: Gustavo Guanapara
//Feito por: Yuri
var
seg1,seg2,seg3,soma: Real
opcao: Caractere
Procedimento TipoDeTriangulo(A,B,C:Real)
inicio
             Se (A = B) e (A = C) e (B = C) entao
                Escreval("O triangulo e equilatero")
             senao
                  Se (A = B) e (A <> C) e(B <> C) entao
                     Escreval("O triangulo e isoceles")
                  senao
                       Escreval("O triangulo e escaleno")
                  FimSe
             FimSe
FimProcedimento
inicio
Repita
      Repita
            Escreva ("Digite o tamanho do primeiro segmento: ")
              Leia(seg1)
                Escreva("Digite o tamanho do segundo segmento: ")
                      Leia(seg2)
                Escreva("Digite o tamanho do terceiro segmento: ")
                      Leia(seg3)
                soma <- seg1+seg2
           Se (seg1 < soma) e (seg2 < soma) e (seg3 < soma) entao
               Escreval("Ta para formar um triangulo")
         senao
           Escreval("nao ta para formar um triangulo")
         FimSe
      Ate (seg1 < soma) e (seg2 < soma) e (seg3 < soma)
      Escreval()
      TipoDeTriangulo(seg1,seg2,seg3)
      Escreval("Voce quer continuar? [S/N]")
      Leia(opcao)
      LimpaTela
Ate (opcao = "N")
Escreval("Encerrando o programa...")
fimalgoritmo