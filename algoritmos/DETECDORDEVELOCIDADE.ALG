Algoritmo   "DetecdorDeVelocidade"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Gustavo Ganabara
// Descrição   : Calcula e mostra se a pessoa passou da velocidade média em 80Km/h
// e mostra a multa que irá pagar de acordo com o que o usuario digitou
// Autor(a)    : Yuri
// Data atual  : 14/07/2023
Var
V,multa: Real
opcao: Caractere

Inicio
Repita
      Escreva("Qual a velocidade do carro em Km/h ?: ")
      Leia(V)
      Se (V > 80) então
         multa <- (V - 80)*5
         Escreval("O veiculo ultrapassou a velocidade permitida")
         Escreval("Com essa velocidade tera que pagar uma multa de ",multa,"R$")
      FimSe
      Escreva("Quer continuar [S/N]")
      Leia(opcao)
Ate (opcao = "N")
Fimalgoritmo