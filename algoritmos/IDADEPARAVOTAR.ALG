Algoritmo   "IdadeParaVotar"
// Disciplina   : [Linguagem e L�gica de Programa��o]
// Professor   : Gustavo Ganabara
// Descri��o   : Calcula e mostra se uma pessoa pode votar de acordo com seu nascimento
// e ano atual
// Autor(a)    : Yuri
// Data atual  : 14/07/2023
Var
DN,DA,idade: Inteiro
opcao: Caractere
Inicio
Repita
      Escreva("Digite o ano de nascimento: ")
      Leia(DN)
      Escreva("Digite o ano atual: ")
      Leia(DA)
      idade <- DA - DN
      Se (idade >= 18 ) ent�o
         Escreval("Sua idade e ",idade)
         Escreval("Voce pode votar")
      senao
           Escreval("Sua idade e ",idade)
           Escreval("Voce nao pode votar")
      FimSe
      Escreva("Quer continuar [S/N]")
      Leia(opcao)
      LimpaTela
Ate (opcao = "N")
Fimalgoritmo