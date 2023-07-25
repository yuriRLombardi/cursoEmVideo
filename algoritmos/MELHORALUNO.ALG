algoritmo "MelhorAluno"
var
  alunos,contador: Inteiro
  nome,melhorAluno: Caractere
  nota,maiorNota: Real
inicio
      contador <- 1
      Escreval("----------------------")
      Escreval("Escola Santa Paciencia")
      Escreval("----------------------")
      Escreva("Quantos alunos a turma tem?")
      Leia(alunos)
      Escreval("----------------------")
      Enquanto (contador <= alunos) faca
               Escreval("ALUNO",contador)
               Escreva("Nome do aluno: ")
               Leia(nome)
               Escreva("Nota de ",nome,":")
               Leia(nota)
               Escreval("----------------------")
               Se (nota > maiornota) entao
            maiorNota <- nota
            melhorAluno <- nome
         FimSe
         contador <- contador + 1
      FimEnquanto
      Escreval("-------------------")
      Escreval("O melhor aproveitamento foi de ", melhorAluno, " com a nota ", maiorNota:3:1)
fimalgoritmo