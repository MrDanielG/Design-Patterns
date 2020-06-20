public class EmpresaSinFilial extends Empresa 
{ 
    public EmpresaSinFilial(String nombre, String email, 
     String direccion) 
    {
      super(nombre, email, direccion); 
    }
 
    public boolean agregaFilial(Empresa filial) 
    { 
        return false; 
    } 
} 
 
