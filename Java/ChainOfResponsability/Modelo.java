public class Modelo extends ObjetoBasico 
{ 
    protected String descripcion; 
    protected String nombre; 
 
    public Modelo(String nombre, String descripcion) 
    { 
        this.descripcion = descripcion; 
        this.nombre = nombre; 
    } 
 
    @Override
    protected String getDescripcion() 
    { 
        if (descripcion != null) 
            return "Modelo " + nombre + " : " + descripcion; 
        else 
           return null; 
    } 
}

