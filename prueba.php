<?php

	require __DIR__.'/vendor/autoload.php';
	use Spipu\Html2Pdf\Html2Pdf;
	$content=$_POST['txt-content'];

$html2pdf = new Html2Pdf();
$html2pdf->writeHTML($content);
$html2pdf->output();


 ?>