<?php
namespace Prototype;

require_once 'Documentacion.class.php';

class DocumentacionCliente extends Documentacion
{
    /**
     * 
     * @param string $informacion
     */
    public function __construct($informacion)
    {
        $this->documentos = new \ArrayObject();
        $laDocumentacionEnBlanco = DocumentacionEnBlanco::Instancia();
        foreach ($laDocumentacionEnBlanco as $documento)
        {
            $copiaDocumento = $documento->duplica();
            $copiaDocumento->rellena($informacion);
            $this->documentos[] = $copiaDocumento;
        }
    }

    public function visualiza()
    {
        foreach ($this as $documento) {
            $documento->visualiza();
        }
    }

    public function imprime()
    {
        foreach ($this as $documento)
            $documento->imprime();
    }
}

?>
