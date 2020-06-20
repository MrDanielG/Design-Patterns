<?php
namespace AbstractFactory;

abstract class Automovil
{
    /**
     * 
     * @var string
     */
    protected $modelo;
    /**
     * 
     * @var string
     */
    protected $color;
    /**
     * 
     * @var int
     */
    protected $potencia;
    /**
     * 
     * @var double
     */
    protected $espacio;
    
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
        $this->modelo = $modelo;
        $this->color = $color;
        $this->potencia = $potencia;
        $this->espacio = $espacio;
    }

    public abstract function visualizaCaracteristicas();
}

?>
