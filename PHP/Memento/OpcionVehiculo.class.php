<?php
namespace Memento;

require_once 'Outils.class.php';

class OpcionVehiculo
{
    /**
     * 
     * @var string
     */
    protected $nombre;
    /**
     * @var ListaOpcionVehiculo
     */
    protected $opcionesIncompatibles;

    /**
     * 
     * @param string $nombre
     */
    public function __construct($nombre)
    {
        $this->nombre = $nombre;
        $this->opcionesIncompatibles = new ListaOpcionVehiculo();
    }

    /**
     * 
     * @param OpcionVehiculo $opcionIncompatible
     */
    public function agregaOpcionIncompatible(OpcionVehiculo
            $opcionIncompatible)
    {
        if (!$this->opcionesIncompatibles
              ->contains($optionIncompatible))
        {
            $this->opcionesIncompatibles
             ->add($opcionIncompatible);
            $opcionIncompatible->agregaOpcionIncompatible($this);
        }
    }

    /**
     * @return ListaOpcionVehiculo
     */
    public function getOpcionesIncompatibles()
    {
        return $this->opcionesIncompatibles;
    }

    /**
     * @return void
     */
    public function visualiza()
    {
        \Outils::println("opcion : $this->nombre");
    }
}


?>
