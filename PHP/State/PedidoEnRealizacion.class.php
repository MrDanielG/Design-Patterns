<?php
namespace State;

require_once 'Pedido.class.php';
require_once 'Producto.class.php';
require_once 'EstadoPedido.class.php';
require_once 'PedidoValidado.class.php';

class PedidoEnRealizacion extends EstadoPedido
{
    /**
     * 
     * @param Pedido $pedido
     */
    public function __construct(Pedido $pedido)
    {
        parent::__construct($pedido);
    }

    public function agregaProducto(Producto $producto)
    {
        $this->pedido->getProductos()->add($producto);
    }

    public function borra()
    {
        $this->pedido->getProductos()->clear();
    }

    public function eliminaProducto(Producto $producto)
    {
        $this->pedido->getProductos()->remove(producto);
    }

    public function estadoSiguiente()
    {
        return new PedidoValidado($this->pedido);
    }
}

?>
