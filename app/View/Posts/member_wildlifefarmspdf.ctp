<?php

$html = "

	<div style='text-align:center; padding-top:15px; margin-left:10px; font-size:15px;'>
					<br>
					<b>Department of Environment and Natural Resources<br>
						Region <u>".$result['Wildlifefarm']['region']."</u></b>
				</div>
				<br>
				<br>
				<div style='text-align:center; font-size:16px;'>
					<p><b>WILDLIFE FARM PERMIT</b></p>
				</div>
				<br>
				<br>
				<div style='text-align:right; font-size:15px;'>
					<p><u>".$result['Wildlifefarm']['exact-date']."</u></p>
				</div>
				<div style='float:right; font-size:15px; margin-right:60px; margin-top:-12px;'>
					<p>(Date)</p>
				</div>
				<br>
				<div style='float:left; font-size:15px; margin-left:50px;'>
					<p>The Director, Protected Areas and Wildlife Bureau/<br>
					The Regional Executive Director
					</p>
				</div>
				<br>
				<br>
				<br>
				<div style='font-size:15px; margin-left:50px;'>
					<p>________________________</p>
				</div>
				<div style='font-size:15px; margin-left:50px; margin-top:-10px;'>
					<p>________________________</p>
				</div>
				<div style='font-size:15px; margin-left:50px; margin-top:-10px;'>
					<p>________________________</p>
				</div>
				
				<div style='font-size:15px; margin-left:50px;'>
					<p>Sir:</p>	
				</div>
				<div style='font-size:15px; margin-left:50px; text-indent:40px;'>
					In accordance with R.A. 9147 otherwise known as the Wildlife Resources
					Conservation and Protection Act and other pertinent wildlife rules and regulations
					with which I shall familiarize myself and to which strict compliance of same is 
					hereby promised,
				</div>
				<br>
				<div style='margin-left:60px;'>
					<ol>
						<li>
							I, <u>".$result['Wildlifefarm']['name']."</u> have the honor to apply for the above permit.
						</li>
						<br>
						<li>
							I am <u>".$result['Wildlifefarm']['age']."</u> years of age, citizen of <u id='citizenship'></u>, by birth
							(if by naturalization, submit papers for verification)
						</li>
						<br>
						<li>
							My occupation/profession is <u>".$result['Wildlifefarm']['work']."</u>.
						</li>
						<br>
						<li>
							I am single/married and the name of my spouse/wife is <u>".$result['Wildlifefarm']['spouse']."</u>.
						</li>
						<br>
						<li>
							I am a member/not a member of a sportsmen and/or game club and/or scientific
							or conservation society. State name/s of organization/s, if a member:
							<u>".$result['Wildlifefarm']['organization-name']."</u>.
						</li>
						<br>
						<li>
							I intend to collect/breed the following wildlife:
						</li>
						<div style='float:left; font-size:15px;'>
							<p>Kind/Species</p>
						</div>
						<div style='float:left; margin-left:250px; font-size:15px;'>
							<p>No.</p>
						</div>
						<br>
						<br>
						<div style='float:left; font-size:15px;'>
							<p><u>".$result['Wildlifefarm']['kind-species']."</u></p>	
						</div>
						<div style='float:right; font-size:15px; margin-right:240px;'>
							<p><u>".$result['Wildlifefarm']['kind-species-no']."</u></p>	
						</div>
						<br>
						<br>
						<li>
							Wildlife species to be collected under this permit shall be taken by means of:
						</li>
						<div>
							<p><u>".$result['Wildlifefarm']['collection-techniques']."</u></p>
						</div>
						<div style='font-size:15px; margin-top:-12px; text-indent:30px;'>
							<p>(Indicate collection technique/s to be used)</p>
						</div>
						<br>
						<li>
							In case of collection, the names of my authorized trappers/collectors are:
							<u>".$result['Wildlifefarm']['authorized-name']."</u>.
						</li>
						<br>
						<li>
							I understand that the information stated in this application are true and correct
							and any omission of facts herein shall cause the disapproval of this application
							and/or cancellation of the permit that may be issued to me.
						</li>
						<br>
						<li>
							I understand that the filing of this application conveys no right to take, collect or possess any wildlife until a permit is issued to me by the DENR;
						</li>
						<br>
						<li>
							The application fee in the amount of P <u id='application-fee'></u> made payable to the Director
							of PAWB/RED with official Receipt No. <u id='receipt-no'></u> dated <u id='date-enclosed'></u> is herewith enclosed. Non-approval or non-issuance of the permit does not entitle me
							to a refund of the fee.
						</li>
						<br>
																<div style='text-align:right; margin-right:30px;'>
																	<p>______________________________</p>
																</div>
																<div style='text-align:right; margin-right:80px; margin-top:-10px;'>
																	<p>(Signature of Applicant)</p>
																</div>
																<br>
																<div style='text-align:right; margin-right:60px;'>
																	<p><u>".$result['Wildlifefarm']['address']."</u></p>
																</div>
																<div style='text-align:right; margin-right:120px; margin-top:-10px;'>
																	<p>(Address)</p>
																</div>
					</ol>
				</div>
			</div>	
				<br>
				<br>
				<div style='font-size:15px; margin-left:50px;'>
					<p>REPUBLIC OF THE PHILIPPINES(<br>
					PROVINCE OF <u>".$result['Wildlifefarm']['province']."</u>:</p>
				</div>
				<div style='font-size:15px; margin-left:50px; margin-top:-10px;'>
					<p>CITY OF <u>".$result['Wildlifefarm']['municipality']."</u>)</p>
				</div>
				<br>
				<br>
				<div style='font-size:15px; margin-left:50px; text-indent:50px;'>
					<p>
						SUBSCRIBED AND SWORN to before me this <u>".$result['Wildlifefarm']['day']."</u> day of <u>".$result['Wildlifefarm']['month']."</u>
						20<u>".$result['Wildlifefarm']['year']."</u>, applicant exhibiting to me his/her Community Tax Certificate No. <u>".$result['Wildlifefarm']['tax-cert-no']."</u>,
						issued at <u>".$result['Wildlifefarm']['issued-at']."</u> on <u>".$result['Wildlifefarm']['issued-on']."</u> 20<u id='issued-year'></u>.
					</p>
				</div>
				<br>
				<br>
													<div style='font-size:15px; text-align:right; margin-right:110px;'>
														<p><u>".$result['Wildlifefarm']['officer-name']."</u></p>
													</div>
													<div style='font-size:15px; text-align:right; margin-right:50px; margin-top:-12px;'>
														<p>(Officer authorized to administer oath)</p>
													</div>
													<div style='font-size:15px; text-align:right; margin-right:84px; margin-top:-14px;'>
														<p>Printed Name & Signature</p>
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