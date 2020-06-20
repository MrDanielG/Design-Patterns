<?php
namespace Builder;

require_once 'ConstructorDocumentacionVehiculo.class.php';
require_once 'DocumentacionHtml.class.php';

class ConstructorDocumentacionVehiculoHtml extends ConstructorDocumentacionVehiculo
{

    public function __construct()
    {
        $this->documentacion = new DocumentacionHtml();
    }

    public function construyeSolicitudPedido($nombreCliente)
    {
        $documento = "<HTML>Solicitud de pedido Cliente : $nombreCliente</HTML>";
        $this->documentacion->agregaDocumento($documento);
    }

    public function construyeSolicitudEmplacamiento($nombreSolicitante)
    {
        $documento = '<HTML>Solicitud de emplacamiento ' ."Solicitante : $nombreSolicitante</HTML>";
        $this->documentacion->agregaDocumento($documento);
    }
}

?>
