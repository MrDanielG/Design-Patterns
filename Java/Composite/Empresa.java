public abstract class Empresa 
{ 
    protected static double costoUnitarioVehiculo = 5.0; 
    protected int nVehiculos; 
 
    public void agregaVehiculo() 
    { 
        nVehiculos = nVehiculos + 1; 
    } 
 
    public abstract double calculaCostoMantenimiento(); 
 
    public abstract boolean agregaFilial(Empresa filial); 
}
