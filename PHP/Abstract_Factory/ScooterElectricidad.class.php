<?php
namespace AbstractFactory;

require_once 'Scooter.class.php';
require_once 'Outils.class.php';

class ScooterElectricidad extends Scooter
{

    /**
     *
     * @param string $modelo            
     * @param string $color            
     * @param int $potencia            
     */
    public function __construct($modelo, $color, $potencia)
    {
        parent::__construct($modelo, $color, $potencia);
    }

    public function visualizaCaracteristicas()
    {
        $txt = "Scooter eléctrico de modelo : $this->modelo" .
                 ", de color : $this->color" .
                 ", de potencia : $this->potencia";
        \Outils::println($txt);
    }
}

?>
