public class Usuario 
{ 
    public static void main(String[] args) 
    { 
        FormularioMatriculacionGuatemala formulario1 = new FormularioMatriculacionGuatemala(new FormHtmlImpl()); 
        formulario1.visualiza(); 
        if (formulario1.administraZona()) 
            formulario1.generaDocumento(); 
        System.out.println(); 
        FormularioMatriculacionMexico formulario2 = new FormularioMatriculacionMexico(new FormAppletImpl()); 
        formulario2.visualiza(); 
        if (formulario2.administraZona()) 
            formulario2.generaDocumento(); 
    } 
}
