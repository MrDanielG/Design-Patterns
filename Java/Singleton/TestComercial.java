public class TestComercial 
{ 
  public static void main(String[] args) 
  { 
    // inicializaci�n del comercial en el sistema 
    Comercial elComercial = Comercial.Instance(); 
    elComercial.setNombre("Autos El Descuento"); 
    elComercial.setDireccion("Puebla"); 
    elComercial.setEmail("comercial@comerciantes.com");
// muestra el comercial del sistema 
    visualiza(); 
  } 
 
  public static void visualiza() 
  { 
    Comercial elComercial = Comercial.Instance(); 
    elComercial.visualiza(); 
  } 
}
