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
public class Gato {
    String nomeGato;
    String corDoPelo;
    String corDosOlhos;
    float tamanho;
    String pelagem;
    boolean acortado;
    boolean ronronar;
    void status(){
        String text = 
        """
        Nome do Gato: %s
        Cor do pelo: %s
        Cor dos olhos: %s
        Tamanho: %.2f
        Pelagem do Gato: %s
        Esta acordado? %b
        Esta ronronado? %b
        """;
        System.out.printf(text,this.nomeGato,this.corDoPelo,this.corDosOlhos,this.tamanho,
        this.pelagem,this.acortado,this.ronronar);
    }
    void andar(){
            if(acortado == true){
                System.out.println("Estou andando");
            }
            else{
                System.out.println("Não posso andar, Estou dormindo");
            }
    }
    void pular(){ 
            if(acortado == true){
                System.out.println("Estou pulando");
            }
            else{
                    System.out.println("Não posso pular, Estou dormindo");
            }
    }
    void miar(){
            if(acortado == true){
                    System.out.println("Estou miando");
            }
            else{
                    System.out.println("Não posso Miar, Estou dormindo");
            }
    }
    void ronronar(){
       ronronar = true;
    }
    void paraRonronar(){
       ronronar = false;
    }
    void acordar(){
       acortado = true;
    }
    void dormir(){
       acortado = false;
    }

}
