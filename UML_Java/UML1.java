/* (C) ASL, Grupo MOVIS */
class O1 {
    private int unAtributo;      // private se indica por un signo - en el diagrama
    private int otroAtributo;
    public O1() {                // public se indica por un signo +
        }
    
    // Tambien sera posible escribir automaticamente metodos de acceso a atributos privados, como :
    // public void setUnAtributo(int unAtributo) y public int getUnAtributo()
    //    {return unAtributo ;} 
    public void trabajoParaO1() {
        System.out.println ("Estoy al servicio de todas las clases");
    }

    public static void unMetodoStatico() {
    // el metodo estatico se subraya en el diagrama
    }

    public int otroMetodo(int a) {
        return a;
    }
} 

public class UML1 {
    public static void main(String[] args) {
      O1 unObjeto = new O1();
       unObjeto.trabajoParaO1();
    }
}
