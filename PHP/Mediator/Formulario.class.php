<?php
namespace Mediator;

require_once 'Control.class.php';

class Formulario
{
    /**
     * @var "Lista de Control"
     */
    protected $controles = array();
    /**
     * @var "Lista de Control"
     */
    protected $controlesCoprestatario = array();
    /**
     * @var PopupMenu
     */
    protected $menuCoprestatario;
    /**
     * @var Boton
     */
    protected $botonOK;
    /**
     * @var boolean
     */
    protected $enCurso = true;

    /**
     *
     * @param Control $control            
     */
    public function agregaControl(Control $control)
    {
        $this->controles[] = $control;
        $control->setDirector($this);
    }

    /**
     * @param Control $control            
     */
    public function agregaControlCoprestatario(Control $control)
    {
        $this->controlesCoprestatario[] = $control;
        $control->setDirector($this);
    }

    /**
     * @param PopupMenu $menuCoprestatario            
     */
    public function setMenuCoprestatario(PopupMenu $menuCoprestatario)
    {
        $this->menuCoprestatario = $menuCoprestatario;
    }

    /**
     *
     * @param Boton $botonOK            
     */
    public function setBotonOK(Boton $botonOK)
    {
        $this->botonOK = $botonOK;
    }

    /**
     *
     * @param Control $control            
     */
    public function controlModificado(Control $control)
    {
        if ($control == $this->menuCoprestatario)
        {
            if ($control->getValor() === 'con coprestatario')
            {
                foreach ($this->controlesCoprestatario as $elementoCoprestatario)
                    $elementoCoprestatario->informa();
            }
        }
        if ($control === $this->botonOK)
        {
            $this->enCurso = false;
        }
    }

    public function informa()
    {
        while (true)
        {
            foreach ($this->controles as $control)
            {
                $control->informa();
                if (! $this->enCurso)
                    return;
            }
        }
    }
}

?>
