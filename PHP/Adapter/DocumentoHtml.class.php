<?php
namespace Adapter;

require_once 'Documento.class.php';
require_once 'Outils.class.php';

class DocumentoHtml implements Documento
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
    public function setContenido($contenido)
    {
        $this->contenido = $contenido;
    }

    public function dibuja()
    {
        \Outils::println(
                "Dibuja documento HTML : $this->contenido");
    }

    public function imprime()
    {
        \Outils::println(
                "Imprime documento HTML : $this->contenido");
    }
}

?>
