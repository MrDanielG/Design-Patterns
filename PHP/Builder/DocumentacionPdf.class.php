<?php
namespace Builder;

require_once 'Outils.class.php';
require_once 'Documentacion.class.php';

class DocumentacionPdf extends Documentacion
{

    /**
     *
     * @param string $documento            
     */
    public function agregaDocumento($documento)
    {
        if (\Outils::str_start_with($documento, '<PDF>'))
        {
            $this->contenido[] = $documento;
        }
    }

    public function imprime()
    {
        \Outils::println('Documentacion PDF');
        foreach ($this->contenido as $s)
        {
            \Outils::println($s);
        }
    }
}

?>
