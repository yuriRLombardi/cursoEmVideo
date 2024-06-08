/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package exerciorepita;

import javax.swing.JOptionPane;
/**
 *
 * Feito por: Yuri
 * Data:07/06/24
 * Modificação: 08/06/24
 */
public class ExercioRepita {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        int n,s=0,tot=0,totPar=0,totImpar=0,acima100=0;
        do{
            n = Integer.parseInt(JOptionPane.showInputDialog(null,"<html>Informe um número<br><em>(valor 0 interrompe)</em></html>","Entrada de Dados",JOptionPane.INFORMATION_MESSAGE));
            s += n;
            if(n != 0){
                tot++;
                if(n > 100){
                    acima100++;  
                }
                if(n % 2 == 0){
                    totPar++;
                }
                else{
                    totImpar++;
                }
            }
        }while(n != 0);
        JOptionPane.showMessageDialog(
                null,"<html>"
                        + "Resultado final<hr>"
                        +"<br>Total de Valores: "+tot+""
                        +"<br>Total de Pares: "+totPar+""
                        +"<br>Total de Impares: "+totImpar+""
                        +"<br>Acima de 100: "+acima100+""
                        +"<br>Média dos Valores: "+(s/tot)+""
                + "</html>","Resultado Final",
                JOptionPane.INFORMATION_MESSAGE);
    }
    
}
