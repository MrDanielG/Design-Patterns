<?php
namespace TemplateMethod;

require_once 'Outils.class.php';

abstract class Pedido
{
    /**
     * 
     * @var double
     */
    protected $importeSinIVA;
    /**
     * 
     * @var double
     */
    protected $importeIVA;
    /**
     * 
     * @var double
     */
    protected $importeConIVA;

    /**
     * @return void
     */
    protected abstract function calculaIVA();

    public function calculaImporteIVA()
    {
        $this->calculaIVA();
        $this->importeConIVA = $this->importeSinIVA + $this->importeIVA;
    }

    /**
     * 
     * @param double $importeSinIVA
     */
    public function setImporteSinIVA($importeSinIVA)
    {
        $this->importeSinIVA = $importeSinIVA;
    }

    public function affiche()
    {
        \Outils::println("Pedido");
        \Outils::println('Importe sin IVA ' . 
                number_format($this->importeSinIVA, 2, ',', ' '));
        \Outils::println('Pedido con IVA ' .
                number_format($this->importeConIVA, 2, ',', ' '));
    }
}


?>
