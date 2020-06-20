public class Vehiculo extends ObjetoBasico 
{ 
    protected String descripcion; 
 
    public Vehiculo(String descripcion) 
    { 
        this.descripcion = descripcion; 
    } 
 
    @Override
    protected String getDescripcion() 
    { 
        return descripcion; 
    } 
}
