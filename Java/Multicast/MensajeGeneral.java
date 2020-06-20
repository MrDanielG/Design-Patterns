import java.util.*; 
public class MensajeGeneral extends MensajeAbstracto 
{ 
    protected List<String> contenido; 

    public List<String> getContenido()
    {
      return contenido;
    } 
 
    public MensajeGeneral(List<String> contenido) 
    { 
        super();
        this.contenido = contenido; 
    } 
} 
 
