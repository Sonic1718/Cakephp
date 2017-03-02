<?php

$html = $table;
 
$paper_size = '';

$mpdf=new mPDF('utf-8');
$mpdf->AddPage($paper_size);
$mpdf->debug = true;
$mpdf->WriteHTML($html);
$mpdf->Output();
exit;
?>