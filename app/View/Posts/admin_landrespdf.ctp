<?php

$html ="
	   			<div style='position: absolute; left:120px; right: 0; top: 40px; bottom: 0;'>
						<img src='/img/DENR.png' style='width: 100px; height: 90px; margin: 0; float:left;' />
				</div>
				<div style='text-align:center;'>
	   			            Republic of the Philippines<br>
					Department of Environment and Natural Resources<br>
					          <b>NATIONAL CAPITAL REGION<br></b>
				</div><br><br>

				<div style='text-align:center; font-size:18px;'><b>APPLICATION FOR RESIDENTIAL FREE PATENT</b></div>

				<div style='margin-bottom:10px;'>
					<br>
					<div style='float:left; width:400px; font-size:16px;'>Application No. : ______________________________</div>
					<div style='float:left;'>Entry No. : __________________</div>
				</div>
				
				<div style='font-size:16px;'>Name of Applicant:  <u>".$result['Landre']['name']."</u></div>
				<div style='font-size:16px;'>Mailing Address of Applicant: <u>".$result['Landre']['address']."</u></div>
				
				<div style='font-size:16px;'>
					<div style='float:left; width:250px;'>Citizenship: <u>".$result['Landre']['citizenship']."</u></div><div style='float:left; width:250px;'>Civil Status: <u>".$result['Landre']['civil-status']."</u></div><div style='float:left; width:150px;'>Sex: <u>".$result['Landre']['sex']."</u></div>		
				</div>

				<div style='font-size:16px;'>
					<div style='float:left; width:200px;'>Age: <u>".$result['Landre']['age']."</u></div>
					<div style='float:left;'>If MINOR, name of legal guardian <u>".$result['Landre']['guardian']."</u></div>
				</div>
				<div style='font-size:16px;'>
					<div style='float:left; width:300px;'>Date of Birth: <u>".$result['Landre']['birth-date']."</u></div>
					<div style='float:left;'>Place of Birth: <u>".$result['Landre']['birth-place']."</u></div>
				</div>
				<div style='font-size:16px;'>Name of Spouse: <u>".$result['Landre']['spouse']."</u></div>
				<div style='font-size:16px;'>Contact Nos: <u>".$result['Landre']['contact']."</u></div>
				<div style='float:left; font-size:16px;'>Location of residential land applied for:</div><br>
				<div>
					<div style='float:left; width:200px; font-size:16px;'><i>No./Street <br><u>".$result['Landre']['street']."</u></i></div>
					<div style='float:left; width:200px; font-size:16px;'><i>Barangay <br><u>".$result['Landre']['barangay']."</u></i></div>
					<div style='float:left; width:200px; font-size:16px;'><i>Municipality/City <br><u>".$result['Landre']['municipality']."</u></i></div>
				</div>
				<br><div style='float:left; font-size:16px;'>Description of residential land applied for:</div><br>
				<div>
					<div style='float:left; width:140px; font-size:16px;'><i>Lot # <br><u>".$result['Landre']['lot']."</u></i></div>
					<div style='float:left; width:140px; font-size:16px;'><i>Block # <br><u>".$result['Landre']['block']."</u></i></div>
					<div style='float:left; width:140px; font-size:16px;'><i>Survey # <br><u>".$result['Landre']['survey']."</u></i></div>
					<div style='float:left; width:140px; font-size:16px;'><i>Area (Sq.M.) <br><u>".$result['Landre']['area']."</u></i></div>
				</div>
				<br>
				<div style='font-size:16px;'> Applicant’s predecessor-in-interest (if Any) : <u>".$result['Landre']['predecessor-in-interest']."</u></div>
				<br>
				<div style='font-size:16px;'>Date of entry by applicant or predecessor-in-interest upon the residential land applied for: (on or about) <u>".$result['Landre']['date-entry']."</u></div>
				<br>
				<div style='font-size:16px; text-indent:80px;'>I declare, under the penalties of perjury, that my total land holdings are not more than 12 hectares and that this application has been made in good faith and to the best of my knowledge all information contained herein are true and correct.</div>

																		<br>
																		<div style='text-indent:460px;'><u>".$result['Landre']['applicant-name']."</u></div>
 																		<div style='text-indent:430px;'>Applicant's Name and Signature</div>
 																		<br><div style='text-indent:430px; font-size:11px;'>CTC/I.D. No. : <u>".$result['Landre']['ctc-id']."</u></div>
 																		<div style='text-indent:430px; font-size:11px;'>Issued On : <u>".$result['Landre']['issued-on']."</u></div>
 																		<div style='text-indent:430px; font-size:11px;'>Issued At : <u>".$result['Landre']['issued-at']."</u></div>

 				<br><div style='font-size:16px; text-indent:50px;'>SUBSCRIBED &nbsp;&nbsp;&nbsp; AND &nbsp;&nbsp;&nbsp; SWORN &nbsp;&nbsp;&nbsp;TO &nbsp;&nbsp;&nbsp;before &nbsp;&nbsp;&nbsp; me this <u>".$result['Landre']['day']."</u> day of <u>".$result['Landre']['month']."</u> at <u>".$result['Landre']['years']."</u>.</div>

 																		<br>
 																		<div style='text-align:right;'>__________________________________________</div>
 																		<div style='text-indent:460px;'>Office Authorized to <p style='text-indent:472px; margin-top:-8;'>Administer Oath</p></div>

 				
 				<div style='font-size:10px;'>This form is not for sale.
 				<br>
                    This form must be accomplished in five (5) copies.</div>
				
	   		";


$paper_size='';
$mpdf=new mPDF('utf-8');
$mpdf->AddPage($paper_size);
$mpdf->WriteHTML($html);
$mpdf->Output();
exit;
?>