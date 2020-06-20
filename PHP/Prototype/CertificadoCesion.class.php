<?php
namespace Prototype;

require_once 'Documento.class.php';
require_once 'Outils.class.php';

class CertificadoCesion extends Documento
{
    public function visualiza()
    {
        \Outils::println(
        "Muestra el certificado de cesion : $this->contenido");
    }

    public function imprime()
    {
        \Outils::println(
        "Imprime el certificado de cesion : $this->contenido");
    }
}

?>