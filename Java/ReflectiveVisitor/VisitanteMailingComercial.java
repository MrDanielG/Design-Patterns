public class VisitanteMailingComercial extends Visitante 
    implements VisitanteEmpresa
{ 
    public void visita(EmpresaSinFilial empresa) 
    { 
        System.out.println("Envia un correo a " + empresa.getNombre() 
         + " direccion: " + empresa.getEmail() 
         + " Propuesta comercial para su empresa"); 
    } 
 
    public void visita(EmpresaMadre empresa) 
    { 
        System.out.println("Envia un correo a " + empresa.getNombre() 
         + " direccion: " + empresa.getEmail() 
         + " Propuesta comercial para su grupo"); 
        System.out.println("Impresion de un correo para " 
         + empresa.getNombre() + " direccion: " 
         + empresa.getDireccion() 
         + " Propuesta comercial para su grupo"); 
        for (Empresa filial: empresa.getFiliales()) 
            this.iniciaVisita(filial); 
    } 
}
