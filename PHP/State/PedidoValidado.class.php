<?php
namespace State;

require_once 'Pedido.class.php';
require_once 'Producto.class.php';
require_once 'EstadoPedido.class.php';
require_once 'PedidoEntregado.class.php';

class PedidoValidado extends EstadoPedido
{
    /**
     * 
     * @param Pedido $pedido
     */
    public function __construct(Pedido $pedido)
    {
        parent::__construct($pedido);
    }
    
    public function agregaProducto(Producto $producto){}

    public function borra()
    {
        $this->pedido->getProductos()->clear();
    }

    public function eliminaProducto(Producto $producto){}

    public function estadoSiguiente()
    {
        return new PedidoEntregado($this->pedido);
    }
}


?>
