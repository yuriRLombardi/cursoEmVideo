algoritmo "AproveitamentoDeUmAluno"
var
   n1,n2,media: Real
inicio
    Escreval("-------------")
    Escreval("Escola Javali")
    Escreval("-------------")
    Escreval("Digite a primeira nota:")
    Leia(n1)
    Escreval("Digite a segunda  nota:")
    Leia(n2)
    media <- (n1+n2)/2
    Escreval("--------------")
    Escreval("Sua média é:",media:5:1)
    Se (media<5) entao
       Escreval("Classe F")
    senao
         Se (media >= 5) e (media <6 ) entao
            Escreval("Classe E")
         senao
              Se (media >=6) e (media <7 ) entao
                 Escreval("Classe D")
              senão
                   Se (media >= 7) e (media <8 ) entao
                      Escreval("Classe C")
                   senao
                        Se (media >= 8) e (media <9 ) entao
                           Escreval("Classe B")
                        senao
                           Escreval("Classe A")
                   FimSe
              FimSe
         FimSe
    FimSe
FimSe
fimalgoritmo
