import java.util.*; 
public abstract class EmisorAbstracto 
 <TMensaje extends MensajeAbstracto, 
    TReceptor extends ReceptorAbstracto<TMensaje>> 
{ 
    protected List<TReceptor> registro = new ArrayList<TReceptor>(); 
 
    public void agrega(TReceptor receptor) 
    { 
        registro.add(receptor); 
    } 
 
    public void envioMultiple(TMensaje mensaje) 
    { 
        for (TReceptor receptor: registro) 
            receptor.recibe(mensaje); 
    } 
}
