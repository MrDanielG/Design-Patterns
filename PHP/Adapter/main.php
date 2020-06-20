<?php

namespace Adapter;

require_once 'Outils.class.php';
require_once 'DocumentoHtml.class.php';
require_once 'DocumentoPdf.class.php';

$documento1 = new DocumentoHtml();
$documento1->setContenido('Hello');
$documento1->dibuja();

\Outils::println(); 

$documento2 = new DocumentoPdf();
$documento2->setContenido('Buenos dias');
$documento2->dibuja();

?>
