public abstract class Empleado implements ReceptorGeneral 
{ 
    protected String nombre; 
 
    public Empleado(String nombre) 
    { 
        super();
        this.nombre = nombre; 
    } 
 
    public void recibe(MensajeGeneral mensaje) 
    { 
        System.out.println("Nombre: " + nombre); 
        System.out.println("Mensaje: "); 
        for (String linea: mensaje.contenido) 
            System.out.println(linea); 
    } 
}
