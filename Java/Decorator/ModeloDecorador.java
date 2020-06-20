public class ModeloDecorador extends Decorador 
{ 
    public ModeloDecorador(ComponenteGraficoVehiculo 
    componente) 
    {
      super(componente);
    } 
 
    protected void visualizaInformacionTecnica() 
    { 
        System.out.println("Informacion tecnica del modelo"); 
    } 
 
    public void visualiza() 
    { 
        super.visualiza(); 
        this.visualizaInformacionTecnica(); 
    } 
}
