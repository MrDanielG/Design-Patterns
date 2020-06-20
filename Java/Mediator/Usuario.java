public class Usuario 
{ 
    public static void main(String[] args) 
    { 
        Formulario formulario = new Formulario(); 
        formulario.agregaControl(new ZonaInformacion("Nombre")); 
        formulario.agregaControl(new ZonaInformacion("Apellidos"));
        PopupMenu menu = new PopupMenu("Coprestatario");
        menu.agregaOpcion("sin coprestatario"); 
        menu.agregaOpcion("con coprestatario"); 
        formulario.agregaControl(menu); 
        formulario.setMenuCoprestatario(menu); 
        Boton boton = new Boton("OK"); 
        formulario.agregaControl(boton); 
        formulario.setBotonOK(boton); 
        formulario.agregaControlCoprestatario(new ZonaInformacion("Nombre del coprestatario")); 
        formulario.agregaControlCoprestatario(new ZonaInformacion("Apellidos del coprestatario")); 
        formulario.informa(); 
    } 
}

//Informacion de: Nombre
//Juan
//Informacion de: Apellidos
//Sanchez Lopez
//Informacion de: Coprestatario
//Valor actual: 
//- 0 )sin coprestatario
//- 1 )con coprestatario
//1
//Informacion de: Nombre del coprestatario
//Manuel
//Informacion de: Apellidos del coprestatario
//Perez Perez
//Deseas activar el boton OK ?
//si