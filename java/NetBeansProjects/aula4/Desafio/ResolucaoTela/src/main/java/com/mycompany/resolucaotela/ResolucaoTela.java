
package com.mycompany.resolucaotela;

import java.awt.Dimension;
import java.awt.Toolkit;

/**
 *
 * Feito por: Yuri
 * Data: 01/05/24
 */
public class ResolucaoTela {

    public static void main(String[] args) {
        Toolkit tk = Toolkit.getDefaultToolkit();
        Dimension d = tk.getScreenSize();
        System.out.println("A resolução do seu sistema é: " + d.width + " X " + d.height);
    }
}
