<?php
namespace FactoryMethod;

require_once 'Outils.class.php';
require_once 'Pedido.class.php';

class PedidoCredito extends Pedido
{

    /**
     *
     * @param double $cantidad            
     */
    public function __construct($cantidad)
    {
        parent::__construct($cantidad);
    }

    public function paga()
    {
        \Outils::println(
                'El pago del pedido a credito de : ' .
                number_format($this->cantidad, 2, ',', ' ') . 
                ' se ha efectuado.');
    }

    public function valida()
    {
        return ($this->cantidad >= 1000.0) &&
                 ($this->cantidad <= 5000.0);
    }
}

?>
