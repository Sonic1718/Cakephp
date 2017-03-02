<?php

$html = "

					<div style='position: absolute; left:100px; right:60px; top: 80px; bottom: 0;'>
						<img src='/img/DENR_Logo.png' style='width: 74px; height: 80px; margin-right:-20px; float:left;' />
					</div>
					<div style='text-align:center; font-size:16px; margin-top:-20px;'>
		   			    <p style='font-size:14px;'>Republic of the Philippines</p>
					</div>
					<div style='text-align:center; margin-top:-32px;'><p><b>Department of Environment and Natural</b></p></div>
					<div style='text-align:center; margin-top:-32px;'><p><b>Resources</b></p></div>
					<div style='text-align:center; margin-top:-32px;'><p><b>NATIONAL CAPITAL REGION</b></p></div>
					<div style='text-align:center; margin-top:-32px; font-size:14px;'><p><b>North Production Nursery, North Avenue, Dil., Q.C.</b></p></div>

					<div style='text-indent:40px; font-size:14px;'><p>Appl. Fee: ______________________</p></div>
					<div style='text-indent:40px; font-size:14px; margin-top:-30px;'><p>Reg. Fee: ______________________</p></div>
					<div style='text-indent:40px; font-size:14px; margin-top:-30px;'><p>Permit Fee: ______________________</p></div>
					<div style='text-indent:40px; font-size:14px; margin-top:-30px;'><p>Oath Fee: ______________________</p></div>
					<div>
						<div style='float:left; width:200px; text-indent:40px; font-size:14px; margin-top:-30px;'><p>Bond Deposit: _________</p></div>
						<div style='float:left; width:200px; text-indent:40px; font-size:14px; margin-top:-30px;'><p>(Cash Bond) ___________</p></div>                   
					</div>
					<div style='text-indent:40px;'><p>NEW OR RENEWAL (State which) <u>".$result['Forestdealer']['type']."</u></p></div>
					<div style='text-indent:40px; margin-top:-30px;'><p>PLACE AND DATE: <u>".$result['Forestdealer']['place-date']."</u></p></div>
					<div style='text-indent:40px; font-size:14px; margin-top:-30px;'><p>Telephone Number/E-mail address (if, there is) ".$result['Forestdealer']['contact-email']."</p></div>

					<div style='text-indent:40px; font-size:14px; margin-top:-16px;'><p>(Make your writing legible. Fill all spaces properly to avoid delay)</p></div>

					<div style='text-indent:140px; margin-top:-16px;'><p><b>Application for Certificate of Registration as Lumber Dealer</b></p></div>
					
					<div style='text-indent:40px; margin-top:-16px;'>
						<p>THE REGIONAL EXECUTIVE DIRECTOR</p><br>
						<p style='margin-top:-36px;'>THRU: THE Regional Technical Director, FMS</p><br>
					</div>
					<div style='text-indent:80px; font-size:14px; margin-top:-54px;'>
						<p>The Chief, FULED<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						   DENR-NCR, Quezon City
						</p>
					</div>

					<div style='text-indent:40px; margin-top:-20px;'><p><b>Sir/ Madam:</b></p></div>
					<div style='text-indent:-40px; margin-top:-20px;'>
						<ol>
							<li>
								I, <u>".$result['Forestdealer']['name']."</u> of legal age , citizen of the Philippines and
								residents of <u>".$result['Forestdealer']['address']."</u> hereby apply for Permit to operate 
								<u>".$result['Forestdealer']['permit-operate']."</u>
							</li>
							<br>
							<li>
								The Trade name of the plant is <u>".$result['Forestdealer']['plant-name']."</u> located at
								 <u>".$result['Forestdealer']['plant-location']."</u>.
							</li>
							<br>
							<li>
								I am the owner of the said plant and I am not a holder of Timber License Agreement
								No.<u>".$result['Forestdealer']['timber-license-agreement-no']."</u> granted by the Director of Forest Management Bureau.
							</li>
							<br>
							<li>
								That the actual daily rated capacity of the re-sawmill based on an eight hour shift is
								<u>".$result['Forestdealer']['re-sawmill']."</u>.		
							</li>
							<br>
							<li>
								The principal machineries employed in the re-sawmill and their corresponding value are
								shown below (submit if a second hand property, the deed of sale with original invoices of
								the original owners; and if under contract, submit copy of the lease contract together with
								the original sales invoice of the owner. They will be verified and returned, provided
								Photostat will be supplied).							
							</li>
						</ol>
								<table style='border:1px solid black; width:80%;'>
									<tr>
										<th>Kind of Machineries</th>
										<th>Type</th>
										<th>Make</th>
										<th>Size</th>
										<th>Value</th>
										<th>Remarks</th>
									</tr>
									<tr>
										<td>Data1</td>
										<td>Data2</td>
										<td>Data3</td>
										<td>Data4</td>
										<td>Data5</td>
										<td>Data6</td>
									</tr>
									<tr>
										<td>Data1</td>
										<td>Data2</td>
										<td>Data3</td>
										<td>Data4</td>
										<td>Data5</td>
										<td>Data6</td>
									</tr>
									<tr>
										<td>Data1</td>
										<td>Data2</td>
										<td>Data3</td>
										<td>Data4</td>
										<td>Data5</td>
										<td>Data6</td>
									</tr><tr>
										<td>Data1</td>
										<td>Data2</td>
										<td>Data3</td>
										<td>Data4</td>
										<td>Data5</td>
										<td>Data6</td>
									</tr><tr>
										<td>Data1</td>
										<td>Data2</td>
										<td>Data3</td>
										<td>Data4</td>
										<td>Data5</td>
										<td>Data6</td>
									</tr>
									<tr>
										<td>Data1</td>
										<td>Data2</td>
										<td>Data3</td>
										<td>Data4</td>
										<td>Data5</td>
										<td>Data6</td>
									</tr>
								</table>
							
								<ol start='6'>
									<li>
										Attached hereto is the description list of other requirements with evidences of ownership
										and improvements and their corresponding values (include on the list carriage, building,
										machine shops, planning mill, dry kiln, factory shop, lumberyard, docks etc).
									</li>
									<br>
									<li>
										The total capital invested of this plant is <u>".$result['Forestdealer']['capital-investment']."</u> and the total number of
										personnel employed is <u>".$result['Forestdealer']['total-employed']."</u>.
									</li>
									<br>
									<li>
										The <u>".$result['Forestdealer']['name-plant']."</u> to be sawn in the plant will be obtained from legitimate suppliers
										by purchased. In this case of the latter applicant must submit together with this
										application, the original contract duly notarize with the suppliers stating the volume of
										<u>".$result['Forestdealer']['plant-supplied']."</u> to be supplied as enumerated hereunder.
									</li>
								</ol>
								<table style='border:1px solid black; width:100%;'>
									<tr>
										<th>O.T. LTC No. or Private Wood Land Reg. No</th>
										<th>Name of License or Registrant</th>
										<th>Location of mun. of province</th>
										<th>Vol. of lumber to be supplied (cu.m./bd.ft)</th>
										<th>Authorized allowable cut in cu.m.</th>
									</tr>
									<tr>
										<td>Data1</td>
										<td>Data2</td>
										<td>Data3</td>
										<td>Data4</td>
										<td>Data5</td>
									</tr>
									<tr>
										<td>Data1</td>
										<td>Data2</td>
										<td>Data3</td>
										<td>Data4</td>
										<td>Data5</td>
									</tr>
									<tr>
										<td>Data1</td>
										<td>Data2</td>
										<td>Data3</td>
										<td>Data4</td>
										<td>Data5</td>
									</tr>
								</table>
							
								<ol>
									<li>
										Permit No. <u>".$result['Forestdealer']['permit-no-sawmill']."</u> dated <u>".$result['Forestdealer']['operate-sawmill-date']."</u> to operate this
										sawmill was granted by the Regional Executive Director of DENR-National Capital Region
										during the last fiscal year <u>".$result['Forestdealer']['year-operated']."</u>.
									</li>
									<li>
										Should this application be accepted, I obligate myself to comply faithfully with all the
										terms and conditions of my permit and with all rules and regulations and instructions issued in
										connection with RA. 460 and MAO 50 with amendment.
									</li>
									<li>
										I shall dispose the lumber produce under the permit applied for in
										<u>".$result['Forestdealer']['permit-applied-for']."</u>. (For alien retailer they must submit permit to engage in retail business)
									</li>
									<li>
										To show good faith in filing this application, I am enclosing herewith the require Oath
										Fee of P 36.00 and Application Fee of P 600.00, Permit Fee P<u>".$result['Forestdealer']['permit-fee']."</u> and Bond
										Deposit of P12,000 in cash or P <u>".$result['Forestdealer']['cash-bond-fee']."</u> in surety (only surety bonds posted by the
										bonding companies acceptable to the DENR maybe considered).
									</li>
									<li>
										. I understand that the making of this application and/or my voluntary remittance of the fees in
										advance do not authorize me to operate the <u>".$result['Forestdealer']['machine-type']."</u> without the permit applied
										for actually issued to me.
									</li>
									<li>
										. I finally understand that the making of false statement on the application shall be considered
										sufficient for disapproval and that any false statement or material omission of the facts
										intentionally done, altering, changing or modifying the consideration of any of the conditions
										mentioned in said application may cause the cancellation of the license/permit, if already
										issued, without prejudice on the part of the government to cause the prosecution of the
										guilty party.
									</li>
								</ol>

																		<div style='text-indent:320px;'>
																			<p>________________________________</p>
																		</div>
																		<div style='text-indent:340px; margin-top:-30px;'>
																			<p>Signature of Applicant</p>
																		</div>
																		<div style='text-indent:320px; margin-top:-20px;'>
																			<p><u>".$result['Forestdealer']['applicant-address']."</u></p>
																		</div>
																		<div style='text-indent:380px; margin-top:-34px;'>
																			<p>Address</p>
																		</div>
																		<br><br><br><br><br>

									<div style='text-indent:220px; font-size:19px;'><u>A F F I D A V I T</u></div>
									<br><br>
									<div style='text-indent:2px;'>
										Republic of the Philippines<br>
										(<u>".$result['Forestdealer']['municipality']."</u>) S.S
									</div>
									<br><br>
									<div style='text-indent:40px;'>
										I, <u>".$result['Forestdealer']['applicant-name']."</u>, the applicant, first having been solemnly sworn upon my
										oath, depose and say, that I have thoroughly read the foregoing application, and each and every
										statement in said application is true and correct to the best of my knowledge and belief. 
									</div>

																		<div style='text-indent:320px;'>
																			<p>________________________________</p>
																		</div>
																		<div style='text-indent:340px; margin-top:-30px;'>
																			<p>Signature of Applicant</p>
																		</div>

									<div style='text-indent:40px;'>
										BEFORE ME, at the City indicated in this <u>".$result['Forestdealer']['day']."</u> day of ".$result['Forestdealer']['month']." 20".$result['Forestdealer']['year'].",
										personally appeared the same person whose name and signature with his/her Community Tax
										Certificate No. <u>".$result['Forestdealer']['tax-cert-no']."</u> ISSUED ON <u>".$result['Forestdealer']['issued-on']."</u> ISSUED AT <u>".$result['Forestdealer']['issued-at']."</u> with
										Tax Identification (TIN) No. <u>".$result['Forestdealer']['tin-no']."</u>.
									</div>																		
			  						
			  															<div style='text-indent:320px;'>
																			<p><u>".$result['Forestdealer']['team-leader']."</u></p>
																		</div>
																		<div style='text-indent:380px; margin-top:-30px;'>
																			<p>Team Leader</p>
																		</div>
																		<div style='text-indent:300px; margin-top:-30px;'>
																			<p>Officer Authorized to Administer Oath</p>
																		</div>

									<br>
									<div>
										Affix Doc. Stamp<br>
									</div>
									<div>
										C/Forms/elz/02
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