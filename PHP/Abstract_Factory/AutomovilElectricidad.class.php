<?php
namespace AbstractFactory;

require_once 'Automovil.class.php';
require_once 'Outils.class.php';

class AutomovilElectricidad extends Automovil
{

    /**
     *
     * @param string $modelo            
     * @param string $color            
     * @param int $potencia            
     * @param double $espacio            
     */
    public function __construct($modelo, $color, $potencia, 
            $espacio)
    {
        parent::__construct($modelo, $color, $potencia, 
                $espacio);
    }

    public function visualizaCaracteristicas()
    {
        $txt = "Automovil eléctrico de modelo : $this->modelo"
                . ", de color : $this->color"
                . ", de potencia : $this->potencia"
                . ", de espacio : $this->espacio";
        \Outils::println($txt);
    }
}

?>
