import java.util.*; 
public class ZonaInformacion extends Control 
{ 
    Scanner reader = new Scanner(System.in); 
 
    public ZonaInformacion(String nombre) 
    {
        super(nombre);
    } 
 
    public void informa() 
    { 
        System.out.println("Informacion de: " + nombre); 
        setValor(reader.nextLine()); 
        this.modifica(); 
    } 
}
