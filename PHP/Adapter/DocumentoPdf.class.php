<?php
namespace Adapter;

require_once 'Documento.class.php';
require_once 'ComponentePdf.class.php';

class DocumentoPdf implements Documento
{
    /**
     * 
     * @var ComponentePdf
     */
    protected $herramientaPdf;

    public function __construct()
    {
        $this->herramientaPdf = new ComponentePdf();
    }

    /**
     *
     * @param string $contenu            
     */
    public function setContenido($contenido)
    {
        $this->herramientaPdf->pdfFijaContenido($contenido);
    }

    public function dibuja()
    {
        $this->herramientaPdf->pdfPreparaVisualizacion();
        $this->herramientaPdf->pdfRefresca();
        $this->herramientaPdf->pdfFinalizaVisualizacion();
    }

    public function imprime()
    {
        $this->herramientaPdf->pdfEnviaImpresora();
    }
}

?>
