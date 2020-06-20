<?php
namespace Mediator;

require_once 'Formulario.class.php';

abstract class Control
{
    /**
     * @var string
     */
    protected $valor = "";
    /**
     *
     * @var Formulario
     */
    protected $director;
    /**
     * @var string
     */
    protected $nombre;

    /**
     *
     * @param string $nombre            
     */
    public function __construct($nombre)
    {
        $this->setNombre($nombre);
    }

    /**
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     *
     * @param string $nombre            
     */
    protected function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     *
     * @return Formulario
     */
    protected function getDirector()
    {
        return $this->director;
    }

    /**
     *
     * @param Formulario $director            
     */
    public function setDirector(Formulario $director)
    {  
        $this->director = $director;
    }

    /**
     *
     * @return string
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     *
     * @param string $valor            
     */
    protected function setValor($valor)
    {
        $this->valor = $valor;
    }

    public abstract function informa();

    protected function modifica()
    {
        $this->getDirector()->controlModificado($this);
    }
}

?>
