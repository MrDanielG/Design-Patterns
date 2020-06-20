import java.util.*; 
public class EmpresaMadre extends Empresa 
{ 
    protected List<Empresa> filiales = 
      new ArrayList<Empresa>(); 
 
    public boolean agregaFilial(Empresa filial) 
    { 
        return filiales.add(filial); 
    } 
 
    public double calculaCostoMantenimiento() 
    { 
        double costo = 0.0; 
        for (Empresa filial: filiales) 
            costo = costo + filial.calculaCostoMantenimiento(); 
        return costo + nVehiculos * costoUnitarioVehiculo; 
    } 
}
