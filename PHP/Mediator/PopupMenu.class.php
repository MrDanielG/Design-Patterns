<?php
namespace Mediator;

require_once 'Control.class.php';
require_once 'Outils.class.php';

class PopupMenu extends Control
{
    /**
     * @var "Lista de string"
     */
    protected $opciones = array();

    /**
     *
     * @param string $nombre            
     */
    public function __construct($nombre)
    {
        parent::__construct($nombre);
    }

    public function informa()
    {
        \Outils::println("Informacion de : $this->nombre");
        \Outils::println(
                '    Valor actual : ' . $this->getValor());
        \Outils::println('    Valores posibles :');
        for ($indice = 0; $indice < count($this->opciones); $indice ++)
        {
            \Outils::println(
                    "    - $indice) " . $this->opciones[$indice]);
        }
        $eleccion = \Outils::readln('Que elegiras tu ? : ');
        if (($eleccion >= 0) && ($eleccion < count($this->opciones)))
        {
            $cambio = ! ($this->getValor() ===
                     $this->opciones[$eleccion]);
            if ($cambio)
            {
                $this->setValor($this->opciones[$eleccion]);
                $this->modifica();
            }
        }
    }

    /**
     *
     * @param string $opcion            
     */
    public function agregaOpcion($opcion)
    {
        $this->opciones[] = $opcion;
    }
}

?>
