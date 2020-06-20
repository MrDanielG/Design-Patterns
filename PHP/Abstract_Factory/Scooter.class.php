<?php
namespace AbstractFactory;

abstract class Scooter
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
     * @param string $modelo           
     * @param string $color            
     * @param int $potencia            
     */
    public function __construct($modelo, $color, $potencia)
    {
        $this->modelo = $modelo;
        $this->color = $color;
        $this->potencia = $potencia;
    }

    public abstract function visualizaCaracteristicas();
}

?>
