<?php



$html ="


<div style='text-align:center; padding-top:15px; margin-left:10px; font-size:15px;'>
					<br>
					<p>
						<b>Republic of the Philippines</b><br>
						<b>Department of Environment and Natural Resources</b>
					</p>
				</div>
				<div style='text-align:center; margin-top:5px; font-size:15px;'>
					<p><u>".$result['Wildlifeexport']['region']."</u></p>
				</div>
				<div style='text-align:center; margin-top:-12px; font-size:15px;'>
					<p>(Region)</p>
				</div>
				<br>
				<br>
				<div style='text-indent: 40px; font-size:15px;'>
					<p>Wildlife Transport</p><br>
				</div>
				<br>
				<div style='text-indent: 40px; margin-top:-50px; font-size:15px;'>
					<p>Permit No. <u>".$result['Wildlifeexport']['permit-no']."</u></p>
				</div>
				<br>
				<div style='text-align:center; font-size:15px;'>
					<p><b>LOCAL TRANSPORT PERMIT</b></p>
				</div>
				<br>
				<br>
				<div style='text-indent:90px; font-size:15px;'>
					<p>Pursuant&nbsp;&nbsp; to &nbsp;&nbsp;&nbsp; Republic &nbsp;&nbsp; Act &nbsp; 9147 &nbsp; dated &nbsp; July &nbsp;&nbsp;30&nbsp;&nbsp; 2001,&nbsp;&nbsp; Mr/Ms.</p>
				</div>
				<div style='float:left; text-indent:70px; margin-top:-10px; font-size:15px;'>
					<p><u>".$result['Wildlifeexport']['name']."</u></p>
				</div>
				<div style='float:left; margin-top:-10px; font-size:15px;'>
					<p>&nbsp;&nbsp;of&nbsp;<u>".$result['Wildlifeexport']['address']."</u></p>
				</div>
				<br>
				<br>
				<div style='text-indent:70px; margin-top:-10px; font-size:15px;'>
					<p>is authorized to transport to <u>".$result['Wildlifeexport']['transport-to']."</u>. </p>
				</div>
				<div style='text-indent:70px; margin-top:-10px; font-size:15px;'>
					<p>the following for <u>".$result['Wildlifeexport']['transport-purposes']."</u> purposes.</p>
				</div>
				<br>
				<div style='text-indent:70px; margin-top:-10px; font-size:15px;'>
					<p>x-x-x-x-x-x-x-x-x-x-x-x-x-x-x-x-x-x-x-x-x-x-x-x-x-x-x-x-x-x-x-x-x-x-x-x-x-x-x-x-x</p>
				</div>
				<div style='text-align:center; margin-top:-14px; font-size:15px;'>
					<p>Description (including parts,</p>
				</div>
				<div style='text-indent:90px; margin-top:-12px; font-size:15px;'>
					<p>Common/Scientific Name &nbsp;&nbsp;&nbsp;derivatives, marks, parts, &nbsp;&nbsp;&nbsp;Quantity</p>
				</div>
				<div style='text-align:center; margin-top:-12px; font-size:15px;'>
					<p>age and sex, if any)</p>
				</div>
				<br>
				<br>
				<br>
				<div style='text-indent:70px; margin-top:-20px; font-size:15px;'>
					<p>x-x-x-x-x-x-x-x-x-x-x-x-x-x-x-x-x-x-x-Nothing Follows-x-x-x-x-x-x-x-x-x-x-x-x-x</p>
				</div>
				<br>
				<div style='text-indent:110px; font-size:15px;'>
					<p>The above-mentioned specimens shall be transported by air/sea express on or before 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<u>".$result['Wildlifeexport']['transported-by']."</u>
					and have been inspected, verified and found in accordance<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					with existing wildlife laws, rules and
					regulations.</p>
				</div>
				<div style='text-indent:110px; font-size:15px;'>
					<p>Local transport fee in the amount of P <u>".$result['Wildlifeexport']['transport-fee']."</u><br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;was paid under <u>".$result['Wildlifeexport']['paid']."</u>
					Official &nbsp;&nbsp;&nbsp; Receipt &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No.&nbsp;&nbsp;&nbsp;<u>".$result['Wildlifeexport']['receipt-no']."</u><br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;dated <u>".$result['Wildlifeexport']['receipt-date']."</u>.</p>
				</div>
				<div style='text-indent:110px; font-size:15px;'>
					<p>This Permit is not valid without the dry seal of the signing officer or if it contains
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;erasure or alteration.</p>
				</div>
				<br>
				<br>
				<br>
															<div style='text-align:right; font-size:15px;'>
																<p><u>".$result['Wildlifeexport']['denr-officer']."</u></p>
															</div>
															<div style='text-align:right; margin-top:-10px; font-size:15px;'>
																<p>DENR REGIONAL OFFICE/PENRO/CENRO</p>
															</div>
			</div>
















";


$paper_size='';
$mpdf=new mPDF('utf-8');
$mpdf->AddPage($paper_size);
$mpdf->WriteHTML($html);
$mpdf->Output();
exit;
?>