package com.mycompany.idiomasistema;


import java.util.Locale;


/*
 *
 * Feito por Yuri
 * Data: 01/05/24
 */
public class IdiomaSistema {
    public static void main(String args[]) {
        Locale loc = Locale.getDefault();
        System.out.print("O idioma do sistema é ");
        System.out.println (loc.getDisplayLanguage());
    }
}