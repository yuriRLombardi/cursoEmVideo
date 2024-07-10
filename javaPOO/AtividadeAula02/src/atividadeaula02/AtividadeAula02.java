/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package atividadeaula02;

/**
 *
 * Feito pór: Yuri
 * Data: 13/06/24
 */
public class AtividadeAula02 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        Gato g1 = new Gato();
        g1.nomeGato = "Lia";
        g1.corDoPelo = "Preto";
        g1.corDosOlhos = "Verde";
        g1.tamanho = 1.2f;
        g1.pelagem = "Macio e Peludo";
        g1.dormir();
        g1.ronronar();
        g1.status();
        g1.miar();
        g1.andar();
        g1.pular();
        System.out.println("");
        Gato g2 = new Gato();
        g2.nomeGato = "Black";
        g2.corDoPelo = "Preto";
        g2.corDosOlhos = "Verde";
        g2.tamanho = 1.0f;
        g2.pelagem = "Macio, mas não peludo";
        g2.acordar();
        g2.ronronar();
        g2.status();
        g2.miar();
        g2.andar();
        g2.pular();
        System.out.println("");
        TarefaEscolar t1 = new TarefaEscolar();
        t1.prazo = "20 de janeiro";
        t1.tipoTarefa = "Pesquisa";
        t1.tempoTarefa = "2 horas";
        t1.nota = 4.0f;
        t1.materiaTarefa = "Biologia";
        t1.entregar();
        t1.receberNota();
        t1.status();
        System.out.println("");
        TarefaEscolar t2 = new TarefaEscolar();
        t2.prazo = "24 de maio";
        t2.tipoTarefa = "Escrever Texto";
        t2.tempoTarefa = "1 horas";
        t2.nota = 5.0f;
        t2.materiaTarefa = "Portugues";
        t2.fazerTarefa();
        t2.entregar();
        t2.receberNota();
        t2.status();
    }
    
}
