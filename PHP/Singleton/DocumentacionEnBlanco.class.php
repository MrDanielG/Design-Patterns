<?php
namespace Prototype;

require_once 'Documentacion.class.php';

class DocumentacionEnBlanco extends Documentacion
{
    /**
     * @var DocumentacionEnBlanco
     */
    private static $_instancia = null;

    private function __construct()
    {
        $this->documentos = new \ArrayObject();
    }

    /**
     * 
     * @return DocumentacionEnBlanco
     */
    public static function Instancia()
    {
        if (!isset(DocumentacionEnBlanco::$_instancia))
        {
            DocumentacionEnBlanco::$_instancia = new DocumentacionEnBlanco();
        }
        return DocumentacionEnBlanco::$_instancia;
    }

    /**
     * 
     * @param Documento $doc
     */
    public function incluye(Documento $doc)
    {
        $this->documentos[] = $doc;
    }

    /**
     * 
     * @param Documento $doc
     */
    public function excluye(Documento $doc)
    {
        $indice = null;
        foreach ($this->documentos as $key => $value) {
            if ($doc === $value) {
                $indice = $key;
            }
        }
        if (isset($indice)) {
            $this->documentos->offsetUnset($indice);
        }
    }
}


?>
