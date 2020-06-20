import java.util.*; 
public class Usuario 
{ 
    public static void main(String[] args) 
    { 
        Expresion expresionConsulta = null; 
        Scanner reader = new Scanner(System.in); 
        System.out.print("Introduce tu consulta: "); 
        String consulta = reader.nextLine(); 
        try 
        { 
            expresionConsulta = Expresion.analiza(consulta); 
        } 
        catch (Exception e) 
        { 
            System.out.println(e.getMessage()); 
            expresionConsulta = null; 
        } 
        if (expresionConsulta != null) 
        { 
            System.out.println( 
                "Introduce la descripcion de un vehiculo: "); 
            String descripcion = reader.nextLine(); 
            if (expresionConsulta.evalua(descripcion)) 
                System.out.println( 
                    "La descripcion responde a la consulta"); 
            else 
                System.out.println( 
                    "La descripcion no responde a la consulta"); 
        } 
    } 
}

//Introduce tu consulta: (rojo o gris) y reciente y diesel
//Introduce la descripcion de un vehiculo: 
//Este vehiculo rojo que funciona con diesel es reciente
//La descripcion responde a la consulta
