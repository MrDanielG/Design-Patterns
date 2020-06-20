<?php
namespace TemplateMethod;

require_once 'Pedido.class.php';

class PedidoMexico extends Pedido
{
    protected function calculaIVA()
    {
        $this->importeIVA = $this->importeConIVA * 0.196;
    }
}


?>
