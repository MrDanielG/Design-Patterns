<?php
namespace Adapter;

require_once 'Outils.class.php';

class ComponentePdf
{
    /**
     * 
     * @var string
     */
    protected $contenido;

    /**
     *
     * @param string $contenido            
     */
    public function pdfFijaContenido($contenido)
    {
        $this->contenido = $contenido;
    }

    public function pdfPreparaVisualizacion()
    {
        \Outils::println('Visualiza PDF : Inicio');
    }

    public function pdfRefresca()
    {
        \Outils::println(
                "Visualiza contenido del PDF : $this->contenido");
    }

    public function pdfFinalizaVisualizacion()
    {
        \Outils::println('Visualiza PDF : Fin');
    }

    public function pdfEnviaImpresora()
    {
        \Outils::println("Impresion PDF : $this->contenido");
    }
}

?>
