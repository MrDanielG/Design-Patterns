<?php
namespace Builder;

abstract class ConstructorDocumentacionVehiculo
{
    /**
     * 
     * @var Documentacion
     */
    protected $documentacion;
    
    /**
     *
     * @param string $nombreCliente            
     */
    public abstract function construyeSolicitudPedido($nombreCliente);

    /**
     *
     * @param string $nombreSolicitante            
     */
    public abstract function construyeSolicitudEmplacamiento($nombreSolicitante);

    /**
     *
     * @return Documentacion
     */
    public function resultado()
    {
        return $this->documentacion;
    }
}

?>
