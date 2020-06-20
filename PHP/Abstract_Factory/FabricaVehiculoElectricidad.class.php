<?php
namespace AbstractFactory;

require_once 'FabricaVehiculo.class.php';
require_once 'AutomovilElectricidad.class.php';
require_once 'ScooterElectricidad.class.php';

class FabricaVehiculoElectricidad implements FabricaVehiculo
{

    /**
     *
     * @param string $modelo            
     * @param string $color            
     * @param int $potencia            
     * @param double $espacio            
     * @return Automovil
     */
    public function creaAutomovil($modelo, $color, $potencia, 
            $espacio)
    {
        return new AutomovilElectricidad($modelo, $color, 
                $potencia, $espacio);
    }

    /**
     *
     * @param string $modelo            
     * @param string $color            
     * @param int $potencia            
     * @return Scooter
     */
    public function creaScooter($modelo, $color, $potencia)
    {
        return new ScooterElectricidad($modelo, $color, 
                $potencia);
    }
}

?>
