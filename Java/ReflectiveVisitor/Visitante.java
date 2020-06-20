import java.lang.reflect.InvocationTargetException;  
import java.lang.reflect.Method;  
import java.util.ArrayList;  
import java.util.List;  
  
public abstract class Visitante {  
  
  public void iniciaVisita(Visitable visitable) {  
    int numMetodosEncontrados;  
    Method metodoAInvocar;  
    List<Class<?>> visitableClases = new ArrayList<Class<?>>();  
    List<Class<?>> visitableSuperClases;  
    visitableClases.add(visitable.getClass());  
   numMetodosEncontrados = 0;  
   metodoAInvocar = null;  
    do {  
      visitableSuperClases = new ArrayList<Class<?>>();  
      for (Class<?> visitableClase : visitableClases) {  
        Method metodo = null;  
        Class<?> visitadorClase = this.getClass();  
        while ((metodo == null) && (visitadorClase !=  
          Object.class)) {  
          try {  
            metodo =  
                visitadorClase.getDeclaredMethod("visita",  
                    new Class[] { visitableClase });  
          } catch (SecurityException e) {  
          } catch (NoSuchMethodException e) {  
          }  
          if (metodo == null)  
            visitadorClase = visitadorClase.getSuperclass();  
        }  
        if (metodo == null) {  
          Class<?> superClase = visitableClase.getSuperclass();  
          if ((superClase != null)  
              && (!visitableSuperClases.contains(superClase)))  
            visitableSuperClases.add(superClase);  
          for (Class<?> unaInterfaz : 
            visitableClase.getInterfaces())  
            if (!visitableSuperClases.contains(unaInterfaz))  
             visitableSuperClases.add(unaInterfaz);  
        } else {  
          numMetodosEncontrados++;  
          metodoAInvocar = metodo;  
        }  
      }  
      visitableClases = visitableSuperClases;  
    } while (visitableClases.size() > 0);  
    if (numMetodosEncontrados == 0)  
      System.out  
        .println("La llamada al metodo visita para la clase \""  
              + visitable.getClass().getSimpleName()  
              + "\" resulta imposible!");  
    else if (numMetodosEncontrados > 1)  
      System.out  
        .println("La llamada al metodo visita para la clase \""  
              + visitable.getClass().getSimpleName()  
              + "\" resulta ambigua!");  
    else  
      try {  
        metodoAInvocar.invoke(this, new Object[] 
          { visitable });  
      } catch (IllegalArgumentException e) {  
      } catch (IllegalAccessException e) {  
      } catch (InvocationTargetException e) {  
      }  
  }  
}
