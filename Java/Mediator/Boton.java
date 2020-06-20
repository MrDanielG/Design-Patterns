import java.util.*; 
public class Boton extends Control 
{ 
    Scanner reader = new Scanner(System.in); 
    
    public Boton(String nombre)
    {
        super(nombre);
    } 
 
    public void informa() 
    { 
        System.out.println("Deseas activar el boton " + nombre + " ?"); 
        String respuesta = reader.nextLine(); 
        if (respuesta.equals("si")) 
            this.modifica(); 
    } 
}
