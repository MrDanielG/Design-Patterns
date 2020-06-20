<?php
namespace Command;

require_once 'Outils.class.php';
require_once 'Vehiculo.class.php';
require_once 'Catalogo.class.php';
require_once 'SolicitudRebaja.class.php';

$vehiculo1 = new Vehiculo('A01', 1, 1000.0);
$vehiculo2 = new Vehiculo('A11', 6, 2000.0);
$vehiculo3 = new Vehiculo('Z03', 2, 3000.0);

$catalogo = new Catalogo();
$catalogo->agrega($vehiculo1);
$catalogo->agrega($vehiculo2);
$catalogo->agrega($vehiculo3);

\Outils::println('Visualiza el catalogo inicial');
$catalogo->visualiza();
\Outils::println();

$solicitudRebaja = new SolicitudRebaja(10, 5, 0.1);
$catalogue->ejecutaSolicitudRebaja($solicitudRebaja);
\Outils::println(
        'Visualiza el catalogo despues de la ejecucion de la primera solicitud');
$catalogue->visualiza();
\Outils::println();

$solicitudRebaja2 = new SolicitudRebaja(10, 5, 0.5);
$catalogo->ejecutaSolicitudRebaja($solicitudRebaja2);
\Outils::println(
        'Visualiza el catalogo despues de la ejecucion de la segunda solicitud');
$catalogue->visualiza();
\Outils::println();

$catalogo->anulaSolicitudRebaja(1);
\Outils::println(
        'Visualiza el catalogo despues de la anulacion de la primera solicitud');
$catalogue->visualiza();
\Outils::println();

$catalogue->restableceSolicitudRebaja(1);
\Outils::println(
        'Visualiza el catalogo  despues de restablecer la primera solicitud');
$catalogue->visualiza();
\Outils::println();

?>
