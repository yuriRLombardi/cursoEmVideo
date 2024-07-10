/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package atividadeaula02;

/**
 *
 * Feito pór: Yuri
 * Data: 13/06/24
 */
public class TarefaEscolar {
    String prazo;
    String tipoTarefa;
    String tempoTarefa;
    boolean entrega;
    float nota;
    String materiaTarefa;
    boolean recebeNota;
    boolean tarefaFeita;
    void status(){
        String text = 
        """
        Prazo: %s
        Tipo da Tarefa: %s
        Tempo de Realização: %s
        Tarefa Entrege? %b
        Nota da Tarefa: %.2f
        Materia da Tarefa: %s
        Recebeu Nota? %b
        Fez a Tarefa? %b
        """;
        System.out.printf(text,this.prazo,this.tipoTarefa,this.tempoTarefa,this.entrega,this.nota,
        this.materiaTarefa,this.recebeNota,this.tarefaFeita);
    }
    void  entregar(){
            if(tarefaFeita == true){
                    entrega = true;
            }
            else{
                    entrega = false;
            }

    }
    void receberNota(){
            if(entrega == true){
                    this.recebeNota = true;
            }
            else{
                    this.recebeNota = false;
            }
    }
    void fazerTarefa(){
            this.tarefaFeita = true;
    }
}
