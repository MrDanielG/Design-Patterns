<?php
namespace State;

require_once 'PedidoEnRealizacion.class.php';
require_once 'Producto.class.php';
require_once 'ListaProducto.class.php';
require_once 'Outils.class.php';

class Pedido
{
    /**
     * @var ListaProducto
     */
    protected $productos;
    /**
     * 
     * @var EstadoPedido
     */
    protected $estadoPedido;

    public function __construct()
    {
        $this->productos = new ListaProducto();
        $this->estadoPedido = new PedidoEnRealizacion($this);
    }

    /**
     * 
     * @param Producto $producto
     */
    public function agregaProducto(Producto $producto)
    {
        $this->estadoPedido->agregaProducto($producto);
    }

    /**
     * 
     * @param Producto $producto
     */
    public function eliminaProducto(Producto $producto)
    {
        $this->estadoPedido->eliminaProducto($producto);
    }

    public function borra()
    {
        $this->estadoPedido->borra();
    }

    public function estadoSiguiente()
    {
        $this->estadoPedido = $this->estadoPedido->estadoSiguiente();
    }

    /**
     * @return ListaProducto
     */
    public function getProductos()
    {
        return $this->productos;
    }

    public function visualiza()
    {
        \Outils::println('Contenido del pedido');
        foreach ($this->productos as $producto) {
            $producto->visualiza();
        }
        \Outils::println();
    }
}

?>
