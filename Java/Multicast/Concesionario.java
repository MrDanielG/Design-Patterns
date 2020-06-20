public class Concesionario 
{ 
    public static void main(String[] args) 
    { 
        DireccionGeneral direccionGeneral = new 
          DireccionGeneral(); 
        DireccionComercial direccionComercial = new 
          DireccionComercial(); 
        Comercial comercial1 = new Comercial("Pablo"); 
        Comercial comercial2 = new Comercial("Enrique"); 
        Administrativo administrativo = new Administrativo( 
         "Juan"); 
        direccionGeneral.agregaReceptorGeneral(comercial1); 
        direccionGeneral.agregaReceptorGeneral(comercial2); 
        direccionGeneral.agregaReceptorGeneral(administrativo); 
        direccionGeneral.enviaMensajes(); 
        direccionComercial.agregaReceptorComercial(comercial1.getReceptorComercial()); 
        direccionComercial.agregaReceptorComercial(comercial2.getReceptorComercial()); 
        direccionComercial.enviaMensajes(); 
    } 
}
