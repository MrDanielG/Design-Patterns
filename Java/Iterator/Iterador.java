import java.util.List; 
public abstract class Iterador 
    <TElemento extends Elemento> 
{ 
    protected String palabraClaveConsulta; 
    protected int indice; 
    protected List<TElemento> contenido; 
 
    public void setPalabraClaveConsulta(String palabraClaveConsulta, 
        List<TElemento> contenido) 
    {
        this.palabraClaveConsulta = palabraClaveConsulta;
        this.contenido = contenido;
    }
 
    public void inicio() 
    { 
        indice = 0; 
        int tamagno = contenido.size(); 
        while ((indice < tamagno) && (!contenido.get(indice) 
           .palabraClaveValida(palabraClaveConsulta))) 
            indice++; 
    } 
 
    public void siguiente() 
    { 
        int tamagno = contenido.size(); 
        indice++; 
        while ((indice < tamagno) && (!contenido.get(indice) 
          .palabraClaveValida (palabraClaveConsulta))) 
          indice++; 
    } 
 
    public TElemento item() 
    { 
        if (indice < contenido.size()) 
            return contenido.get(indice); 
        else 
            return null; 
    } 
}
