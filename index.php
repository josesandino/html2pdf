<?php
require './vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

if(isset($_POST['crear'])){
        // Recoger el contenido del otro fichero
        ob_start();
        require_once 'print_view.php';
        $html = ob_get_clean();

        $html2pdf = new Html2Pdf('P', 'A4', 'es', 'true', 'UTF-8');
        $html2pdf->writeHTML($html);
        $html2pdf->output('pdf_generated.pdf');
    }
?>

<form action="" method="POST">
    <input type="text" placeholder="Titulo" name="titulo">
    <input type="submit" value="Crear un pdf" name="crear">
</form>