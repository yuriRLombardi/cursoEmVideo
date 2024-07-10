/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package aula02;

/**
 *
 * Feito pór: Yuri
 * Data: 13/06/24
 */
public class Aula02 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        Caneta c1 = new Caneta();
        c1.cor = "Azul";
        c1.ponta = 0.5f;
        c1.tampar();
        c1.status();
        c1.rabiscar();
        System.out.println("");
        Caneta c2 = new Caneta();
        c2.modelo = "HostNet";
        c2.cor = "Preto";
        c2.destampar();
        c2.status();
        c2.rabiscar();
    }
    
}
