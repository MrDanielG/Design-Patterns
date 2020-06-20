public class FormularioMatriculacionMexico extends 
  FormularioMatriculacion 
{ 
  public FormularioMatriculacionMexico(FormularioImpl 
    implementacion)  
  {
    super(implementacion); 
  }
 
  protected boolean controlZona(String matricula) 
  { 
    return matricula.length() == 7; 
  } 
}
