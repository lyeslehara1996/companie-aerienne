
<?php 
use Dompdf\Dompdf;
use Dompdf\Options;
require_once 'php/vendor/autoload.php' ; 

ob_start();
include "Carte_Embarquement_sans_header.php";
$html = ob_get_clean();
//ob_end_clean();

define('DOMPDF_ENABLE_PHP', true);

$options = new \Dompdf\Options();
$options->setIsPhpEnabled(true);
$dompdf = new Dompdf($options);
$dompdf->loadHtml($html);
//$dompdf->setPaper('a4','portrait');
$dompdf->setPaper('A4','landscape');

$dompdf->render();



$dompdf->stream('Carte_Embarquement.pdf');

 ?>