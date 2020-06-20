<?php
namespace FactoryMethod;

abstract class Cliente
{
    
    /**
     * @var "Lista de Pedido"
     */
    protected $pedidos = array();
    
    /**
     * @param double $cantidad            
     * @return Pedido
     */
    protected abstract function creaPedido($cantidad);

    /**
     * @param double $cantidad            
     */
    public function nuevoPedido($cantidad)
    {
        $pedido = $this->creaPedido($cantidad);
        if ($pedido->valida())
        {
            $pedido->paga();
            $this->pedidos[] = $pedido;
        }
    }
}

?>