<?php

$html = "
	   			<br>
	   			<br>
	   			<div style='font-size:16px; text-align:center;'>
	   				<p><b>List of Requirements in Securing Lumber Supply Contract (LSC)</b></p>
	   			</div>
	   			<br>
	   			<div style='text-indent:20px; font-size:18px;'>
	   				<p><u>".$result['Forestsup']['name']."</u><br>&nbsp;&nbsp;&nbsp;&nbsp;(Name of Applicant)</p>
	   			</div>
	   			
	   			<div style='text-indent:20px; font-size:18px;'>
	   				<p><u>".$result['Forestsup']['address']."</u><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	   				(Address)</p>
	   			</div>

	   			<div style='font-size:18px; text-indent:60px;'>
	   				<p>________________&nbsp;&nbsp; 1.&nbsp;&nbsp;&nbsp; Letter request.</p>
	   			</div>

	   			<div style='font-size:18px; text-indent:60px; margin-top:-40px;'>
	   				<p>________________&nbsp;&nbsp; 2.&nbsp;&nbsp;&nbsp; Copies of LSC duly notarized.</p>
	   			</div>

	   			<div style='font-size:18px; text-indent:60px; margin-top:-40px;'>
	   				<p>________________&nbsp;&nbsp; 3.&nbsp;&nbsp;&nbsp;  DTI if not Lumber Dealer permittee.</p>
	   			</div>

	   			<div style='font-size:18px; text-indent:60px; margin-top:-40px;'>
	   				<p>________________&nbsp;&nbsp; 4.&nbsp;&nbsp;&nbsp;   Certificate of Registration as Lumber Dealer.</p>
	   			</div>

	   			<div style='font-size:18px; text-indent:60px; margin-top:-40px;'>
	   				<p>________________&nbsp;&nbsp; 5.&nbsp;&nbsp;&nbsp;  Documentary stamp (1 pc.)</p>
	   			</div>



	   		";

$paper_size='';
$mpdf=new mPDF('utf-8');
$mpdf->AddPage($paper_size);
$mpdf->WriteHTML($html);
$mpdf->Output();
exit;
?>