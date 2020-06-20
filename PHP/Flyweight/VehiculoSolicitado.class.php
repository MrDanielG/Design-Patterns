<?php
namespace Flyweight;

require_once 'Outils.class.php';
require_once 'FabricaOpcion.class.php';

class VehiculoSolicitado
{
    /**
     * 
     * @var "Lista de OpcionVehiculo"
     */
    protected $opciones = array();
    /**
     * 
     * @var "Lista de int"
     */
    protected $precioDeVentaOpciones = array();
    
    /**
     *
     * @param string $nombre            
     * @param int $precioDeVenta            
     * @param FabricaOpcion $fabrica            
     */
    public function agregaOpciones($nombre, $precioDeVenta, FabricaOpcion $fabrica)
    {
        $this->opciones[] = $fabrica->getOpcion($nombre);
        $this->precioDeVentaOpciones[] = $precioDeVenta;
    }

    public function visualizaOpciones()
    {
        foreach ($this->opciones as $indice => $opcion)
        {
            $opcion->visualiza($this->precioDeVentaOpciones[$indice]);
            \Outils::println();
        }
    }
}

?>
