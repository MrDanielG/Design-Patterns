public class CatalogoVehiculo extends Catalogo<Vehiculo, IteradorVehiculo> 
{ 
    public CatalogoVehiculo() 
    { 
       contenido.add(new Vehiculo("vehiculo economico")); 
       contenido.add(new Vehiculo("pequegno vehiculo economico"));
       contenido.add(new Vehiculo("vehiculo de gran calidad")); 
    } 
 
    protected IteradorVehiculo creaIterador() 
    { 
        return new IteradorVehiculo(); 
    } 
}
