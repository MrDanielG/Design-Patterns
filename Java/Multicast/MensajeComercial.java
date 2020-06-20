public class MensajeComercial extends MensajeAbstracto 
{ 
    protected String contenido; 
 
    public String getContenido()
    {
        return contenido;
    }
    public MensajeComercial(String contenido) 
    { 
        super();
        this.contenido = contenido; 
    } 
} 
 
