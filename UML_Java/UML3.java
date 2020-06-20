/* (C) ASL, Grupo MOVIS */
class O1 {
   private int unAtributo;
   private int otroAtributo;
   private O2 vinculoO2;
   private O3 vinculoO3;
   public O1(O3 vinculoO3) {
       vinculoO2 = new O2(); /* se crea un vinculo de composición */
       this.vinculoO3 = vinculoO3; /* se crea un vinculo de agregación */
   }
   public void trabajoParaO1() {
       vinculoO2.trabajoParaO2(); /* un mensaje hacia O2 */
       vinculoO3.trabajoParaO3(); /* un mensaje hacia O3 */
   }
   public int otroMetodo(int a) {
       return a;
   }
   protected void finaliza() /* llamada de este método cuando el objeto se borra de la memoria */{
       System.out.println("aaahhhh... un Objeto O1 se muere ...");
   }
}
class O2 {
   private int unAtributo;
   private double otroAtributo;
   public O2() {}
   public void trabajoParaO2() {
        System.out.println("Soy una instancia de O2 " + "al servicio de todas las clases");
   }
   protected void finaliza(){
       System.out.println("aaahhhh... un Objeto O2 se muere ....");
   }
}
class O3 {
   public void trabajoParaO3() {
       System.out.println("Soy una instancia de O3 " + " al servicio de todas las clases");
   }
   protected void finaliza(){
       System.out.println("aaahhhh... un Objeto O3 se muere ....");
   }
}
public class UML3 {
     public static void main(String[] args) {
         O3[] losObjetos3 = new O3[10];
         for (int i=0; i<10; i++) {
             losObjetos3[i] = new O3();
             O1 unObjeto1 = new O1(losObjetos3[i]); 
             // Aquí se pasa la referencia del objeto O3 al objeto O1
             unObjeto1.trabajoParaO1();
             unObjeto1 = null; 
             /* Para esta instrucción, se busca deshacerse del objeto, unObjeto1,
			    pero esto no es necesario */
         }
     }
}
