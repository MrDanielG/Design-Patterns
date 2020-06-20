public class EmpresaSinFilial extends Empresa 
{ 
    public boolean agregaFilial(Empresa filial) 
    { 
        return false; 
    } 
 
    public double calculaCostoMantenimiento() 
    { 
        return nVehiculos * costoUnitarioVehiculo; 
    } 
}
