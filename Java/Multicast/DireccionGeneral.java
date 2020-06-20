import java.util.*; 
public class DireccionGeneral 
{ 
    protected EmisorGeneral emisorGeneral = new EmisorGeneral(); 
 
    public void enviaMensajes() 
    { 
        List<String> contenido = new ArrayList<>(); 
        contenido.add("Informacion general"); 
        contenido.add("Informacion especifica"); 
        MensajeGeneral mensaje = new MensajeGeneral(contenido); 
        emisorGeneral.envioMultiple(mensaje); 
    } 
 
    public void agregaReceptorGeneral(Empleado receptor) 
    { 
        emisorGeneral.agrega(receptor); 
    } 
}
