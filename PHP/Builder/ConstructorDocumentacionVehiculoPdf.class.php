<?php
namespace Builder;

require_once 'ConstructorDocumentacionVehiculo.class.php';
require_once 'DocumentacionPdf.class.php';

class ConstructorDocumentacionVehiculoPdf extends ConstructorDocumentacionVehiculo
{

    public function __construct()
    {
        $this->documentacion = new DocumentacionPdf();
    }

    public function construyeSolicitudPedido($nombreCliente)
    {
        $documento = 
            "<PDF>Solicitud de pedido Cliente : $nombreCliente</PDF>";
        $this->documentacion->agregaDocumento($documento);
    }

    public function construyeSolicitudEmplacamiento(
            $nombreSolicitante)
    {
        $documento = '<PDF>Solicitud de emplacamiento ' .
            "Solicitante : $nombreSolicitante</PDF>";
        $this->documentacion->agregaDocumento($documento);
    }
}

?>