/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package testefuncao01;

/**
 *
 * Feito por: Yuri
 * Data: 11/06/24
 */
public class TesteFuncao01 {

    /**
     * @param args the command line arguments
     */
    //Procedimento
    /*static void soma(int a,int b){
        int s = a+b;
        System.out.println("A soma é " + s);
    }*/
    //Função
    static int soma(int a,int b){
        int s = a+b;
        return s;
    }
    public static void main(String[] args) {
        // TODO code application logic here
        System.out.println("Começou o programa");
        int sm = soma(5,2);
        System.out.println("A soma vale "+sm);
    }
    
}
