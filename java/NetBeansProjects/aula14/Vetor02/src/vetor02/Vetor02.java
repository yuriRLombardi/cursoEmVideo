/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package vetor02;

import java.util.Calendar;

/**
 *
 * Feito por: Yuri
 * Data: 10/06/24
 */
public class Vetor02 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        String mes[] = {"Jan","Fev","Mar","Abr","Mai","Jun","Jul","Ago","Set","Out","Nov","Dez"};
        String tot[] = {"31","28","31","30","31","30","31","31","30","31","30","31"};
        Calendar ano = Calendar.getInstance();
        if(ano.get(Calendar.YEAR)%4==0){
            tot[1] = "29";
            System.out.println("Esse atual ano é bissexto");
        }
        else System.out.println("Esse atual ano náo é bissexto");
        for(int i = 0; i < mes.length; i++){
            System.out.println("O mês "+mes[i]+" tem "+tot[i]+" dias ao todo.");
        }
    }
    
}
