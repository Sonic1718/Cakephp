<?php

$html = "
					<style>
					@page {
						margin:0px;
					}
					</style>
					<div style='position: absolute; left:50px; right: 0; top: 20px; bottom: 0;'>
						<img src='/img/DENR_Logo.png' style='width: 105px; height: 105px; margin: 0; float:left;' />
						<div style='float:left;padding-top:15px; margin-left:10px; font-size:15px;'>
							<b>Department of Environment and Natural Resources<br>
							National Capital Region</b>
						</div>
					</div>
					<br><br><br><br><br>
					<div style='height:14px; width:100%; position:absolute; background-color:#7C2F2F; left:0px; top:140px;'></div>
					<br>
					<div style='text-align:center;'><i><u style='font-size:18px;'>APPLICATION<u></i></div>
					<br>
					<div style='text-indent:80px;'>
						<p>Application No. _________________</p>
					</div>
					
					<div style='margin-top:-30px; text-indent:80px;'>
						<p>Type: <u>".$result['Forestchain']['new']."</u> NEW</p>
					</div>
					<div style='margin-top:-30px; text-indent:120px;'>
						<p> <u>".$result['Forestchain']['renewal']."</u> RENEWAL</p>
					</div>
					

																					<div style='text-indent:500px;'>
																						<p>DATE: <u>".$result['Forestchain']['exact-date']."</u></p>
																					</div>

					
					<div style='text-indent:80px; margin-top:-20px;'>
						<p>The RED / CENTRO concerned:</p>
					</div>
					<div style='margin-top:-30px; text-indent:80px;'>
						<p><u>".$result['Forestchain']['red-concerned']."</u></p>
					</div>
					<div style='margin-top:-30px; text-indent:80px;'>
						<p><u>".$result['Forestchain']['centro-concerned']."</u></p>
					</div>

					
					<div style='text-indent:80px; margin-top:-15px;'>
						<p>Sir:</p>
					</div>

					<div style='text-indent:120px; margin-top:-20px;'>
						<p>I / We <u>".$result['Forestchain']['name']."</u>, with address at <u>".$result['Forestchain']['address']."</u> and
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						telephone no. <u>".$result['Forestchain']['contact-no']."</u> hereby applies for ( Please check appropriate box ) :
						</p>
					</div>

					<div style='text-indent:120px; margin-top:-10px;'>
						<p>( ) Certificate of Registration of Chainsaw (new)</p>
					</div>
					<div style='text-indent:120px; margin-top:-30px;'><p>( ) Permit to Import Chainsaw</p></div>
					<div style='text-indent:120px; margin-top:-30px;'><p>( ) Permit to Manufacture</p></div>
					<div style='text-indent:120px; margin-top:-30px;'><p>( ) Permit to purchase, sell , re-sell, distribute or transfer of ownership of chainsaw</div>

					<div style='text-indent:80px; margin-top:-20px;'>
						<p>The requirements called for under my /our application are attached for your evaluation.</p>
					</div>

					<div style='text-indent:80px; margin-top:-20px;'>
						<p>I/We understand that the filling of this application does not convey the authority to the 
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;undersigned to purchase, import , assemble, manufacture, sell, re-sell,
						distribute or use &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the chainsaw/s subject of application until such time that a Permit
						or Certificate of &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;Registration is issued by DENR.</p>
					</div>

					<div style='text-indent:80px; margin-top:-20px;'>
						<p>I / We further understand that any false statement, misinterpretation and/or
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;misdeclaration stated herein shall be a ground for denial and /or revocation of
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;registration without prejudice to the filling of appropriate legal action.
						</p>
					</div>

																		<div style='text-indent:420px;'><p>Very truly yours,</p></div>

																		<div style='text-indent:320px;'>
																			<p><u>".$result['Forestchain']['applicant-name']."</u></p>
																		</div>
																		<div style='text-indent:320px; margin-top:-30px;'>
																			<p>Signature over Printed Name of Applicant</p>
																		</div>
			";

$paper_size='';
$mpdf=new mPDF('utf-8');
$mpdf->AddPage($paper_size);
$mpdf->WriteHTML($html);
$mpdf->Output();
exit;
?>