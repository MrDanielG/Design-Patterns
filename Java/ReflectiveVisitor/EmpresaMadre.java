import java.util.ArrayList;  
import java.util.List; 
 
public class EmpresaMadre extends Empresa 
{ 
    protected List<Empresa> filiales = new ArrayList<Empresa>(); 
 
    public EmpresaMadre(String nombre, String email, String 
     direccion)
    {
      super(nombre, email, direccion); 
    }
 
    public List<Empresa> getFiliales() {
        return filiales; 
    } 
 
    public boolean agregaFilial(Empresa filial) 
    { 
        return filiales.add(filial); 
    } 
}
