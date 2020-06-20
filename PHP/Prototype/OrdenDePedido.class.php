<?php
namespace Prototype;

require_once 'Documento.class.php';
require_once 'Outils.class.php';

class OrdenDePedido extends Documento
{
    public function visualiza()
    {
        \Outils::println(
                "Muestra el orden de pedido : $this->contenido");
    }

    public function imprime()
    {
        System.out.println(
                "Imprime el orden de pedido : $this->contenido");
    }
}

?>