algoritmo "SuperContador"
var
   opcao,contador: Inteiro
inicio
   Repita
      Escreval("")
      Escreval("=================")
      Escreval("|     MENU      |")
      Escreval("=================")
      Escreval("| [1] De 1 a 10 |")
      Escreval("| [2] De 10 a 1 |")
      Escreval("| [3] Sair      |")
      Escreval("=================")
      Leia(opcao)
      Escolha opcao
      caso 1
         contador <- 1
         Repita
            Escreva(contador,"..")
            contador <- contador + 1
         Ate (contador > 10)
      Caso 2
          contador <- 10
          Repita
            Escreva(contador,"..")
            contador <- contador - 1
         Ate (contador < 1)
      caso 3
           Escreval ("Saindo....")
      outroCaso
           Escreval ("Invalido")
      FimEscolha
      Ate (opcao = 3)
fimalgoritmo