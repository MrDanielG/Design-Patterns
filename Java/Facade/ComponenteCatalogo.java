import java.util.*; 
public class ComponenteCatalogo implements Catalogo 
{ 
    protected Object[] descripcionVehiculo =  
  { 
    "Corolla 5 puertas", 6000, "Compacto 3 puertas", 4000,  
    "Prius 5 puertas", 8000, "Break 5 puertas", 7000,  
    "Yaris 3 puertas", 9000, "Utilitario 3 puertas", 5000 
  }; 
 
    public List<String> buscaVehiculos(int precioMin, 
      int precioMax) 
    { 
        int indice, tamagno; 
        List<String> resultado = new ArrayList<String>(); 
        tamagno = descripcionVehiculo.length / 2; 
        for (indice = 0; indice < tamagno; indice++) 
        { 
            int precio = (Integer)descripcionVehiculo[2 * indice + 1]; 
            if ((precio >= precioMin) && (precio <= precioMax)) 
                resultado.add((String)descripcionVehiculo[2 * indice]); 
        } 
        return resultado; 
    } 
}
