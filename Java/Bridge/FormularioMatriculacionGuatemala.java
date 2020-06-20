public class FormularioMatriculacionGuatemala extends 
  FormularioMatriculacion 
{ 
  public FormularioMatriculacionGuatemala(FormularioImpl 
    implementacion) 
  {
    super(implementacion); 
  }
 
  protected boolean controlZona(String matricula) 
  { 
    return matricula.length() == 6; 
  } 
}
