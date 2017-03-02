<?php

$html ="
	   			<div style='position: absolute; left:100px; right: 0; top: 40px; bottom: 0;'>
						<img src='/img/DENR_Logo.png' style='width: 90px; height: 90px; margin: 0; float:left;' />
				</div>
				<div style='text-align:center; font-size:14px;'>
	   			            Republic of the Philippines<br>
					Department of Environment and Natural Resources<br>
					          <b>NATIONAL CAPITAL REGION<br></b>
					          2nd Flr. L. & S. Bldg. Ermita, Manila
				</div>

				<div style='font-size:14px; text-align:center;'><u>APPLICATION FOR PERMIT AND ACCEPTANCE OF CONDITIONS</u></div>
				<br>
				<ol>
					<li style='font-size:12px;'> I, the undersigned, hereby take application, pursuant to the provisions of Act No. 3077 and the Bureau of
						 Lands Administrative order No. 8, as amended, for a permit to temporarily or provisionally occupy and use
						 for <u>".$result['Landcon']['purposes']."</u> purposes the tract of Land located in the Barrio of <u>".$result['Landcon']['barrio']."</u> Municipality of <u>".$result['Landcon']['municipality']."</u> 
						 Province of<u>".$result['Landcon']['province']."</u> containing approximately an area of <u>".$result['Landcon']['area']."</u> square meters,
						 bounded as follows:<br><br>
					     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(If the land corresponds to a lot in a cadastre or subdivision, mention the lot number as well as the
						 number of the cadastre or subdivision)<br><br>The land is covered by my Revocable Permit Application No. <u>".$result['Landcon']['permit-no']."</u> I shall use the land for <u>".$result['Landcon']['use-of-land']."</u>.
					</li><br><br>
					
					<li style='font-size:12px;'>I make this application for my exclusive benefit and not for the benefit of any other person; and I shall not
						lease or sublease the land applied for and/or the improvements thereon to any other person nor shall
						allow such other person to derive benefits therefrom either directly or indirectly.
					</li><br><br>
					
					<li style='font-size:12px;'>
					To show that I possess the qualifications required by law, the following statements of facts is submitted.
					</li><br><br>
					
					<li style='font-size:12px;'>
					My name Is <u>".$result['Landcon']['name']."</u>, my age is <u>".$result['Landcon']['age']."</u> years; I was born in
					<u>".$result['Landcon']['birthplace']."</u>; and employed in <u>".$result['Landcon']['employed-in']."</u> I am a
					citizen of <u>".$result['Landcon']['citizen']."</u>, my post office address is <u>".$result['Landcon']['post-address']."</u>; I am
					married/single and the name of my wife/husband is <u>".$result['Landcon']['spouse']."</u>; who is a citizen of
					<u>".$result['Landcon']['spouse-citizen']."</u>;
					</li><br><br>
					
					<li style='font-size:12px;'>
						I am <u>".$result['Landcon']['name']."</u>; holder of <u>".$result['Landcon']['title-holder']."</u>other applications for public
						land. They are as follows: <u>".$result['Landcon']['land']."</u>.
					</li><br><br>

					<li style='font-size:12px;'>
						I have read the instruction and conditions specified in this application and hereby undertake to abide by
						then as well as the provisions of the aforesaid Administrative Order No. 8, as amended, under which the
						permit is to be issued and I promise to comply with all the laws and regulations governing the occupation
						and use of public lands. THIS APPLICATION MAY THEREFORE BE CONSIDERED AS MY ACCEPTANCE OF THE
						CONDITIONS PRESCRIBED BY EXISTING LAW, RULES AS WELL AS THOSE OTHERS WHICH TO PROTECT PUBLIC
						INTEREST, MAY BE PROPSED BY THE MINISTER OF NATURAL RESOURCES OR THE DIRECTOR OF LANDS AND
						EXPRESSLY STATED ON THE BACK HEREOF AND THE PERMIT TO BE ISSUED.
					</li>
				</ol>

																					<br><div style='text-align:right;'>____________________________________</div>
 																				<div style='text-indent:480px;'>Signature of Applicant</div>
 																				<br><div style='text-indent:430px; font-size:12px;'>Address : <u>".$result['Landcon']['address']."</u></div>
 																				    <div style='text-indent:420px; font-size:12px;'>Tax Payer acct. No. <u>".$result['Landcon']['tax-acct-no']."</u></div>
 				
 				<br>
 				<div>
 				WITNESSES:<br>
 				<ol>
 					<li><u>".$result['Landcon']['witness-name']."</u> Address: <u>".$result['Landcon']['address']."</u></li>
 					<li><u>".$result['Landcon']['witness-name']."</u> Address: <u>".$result['Landcon']['address']."</u></li>
 				</ol>
 				Subscribe and sworn to before me this ____ day of ___________________20__ in ______________.
				Affiant exhibited to me his/her Res. Cert. No. ___________________ issued on ______________ in
				_____________
 				</div>

 																				<br><br><div style='text-align:right;'>____________________________________</div>
 																				<div style='text-indent:480px;'>Administering Officer</div>

 				<br><br><br><br>
 				<div style='text-align:center;'><u>CONDITIONS UNDER WHICH THIS PERMIT IS ISSUED</u></div>
 				<br>
 				
 					<ol>
 						<li style='font-size:13px;'>
 							This application is not made for the benefit of any person other than the applicant.
 						</li><br><br>

 						<li style='font-size:13px;'>
 							The Permit is to issued under the conditions prescribed by Administrative Order No. 9, as amended, and
							such additional conditions as the Minister of Natural Resources or the Director of Lands may deem
							necessary according to attending circumstances or to protect public interests, which special conditions shall
							be expressly stated in, and made a part of the permit.
 						</li><br><br>

 						<li style='font-size:13px;'>
 							The permittee shall occupy and use the land subject of the permit to the use fro which the permit is to
							issued within two months from the date of the permit upon the penalty of losing his right over the land
							through the cancellation of the permit, accompanied by the forfeiture of fees paid for failure to occupy and
							use the land within the period herewith allowed.
 						</li><br><br>

 						<li style='font-size:13px;'>
 							No building or structure shall be constructed or erected on the land without its plan and construction
							having been previously approved by the corresponding authorities in accordance with local ordinance,
							which building or structure shall be temporarily and easily removable at the expense of the permitee. In all
							cases even if the building or structure is temporary, the building therefore must first be secured.
 						</li><br><br>

 						<li style='font-size:13px;'>
 							The permit is not transferable and neither the land nor the improvements thereon shall be leased,
							transferred, sold, conveyed, mortgaged, or in any manner encumbered or assigned without the written
							consent of the Minister of Natural Resources, the Assistant Secretary of the Director of Lands, as the case
							may be, which consent may be given only IF WHEN THE SAID PERMIT IS STILL SUBSISTING OR WHEN THE
							PERIOD WHEREOF HAS NOT YET EXPIRED, and after if has been found that the said transfer has not been
							made for the purposes of speculation and that all permit fees have been paid up to the date of approval. IN
							THE EVENT THAT THE PERMIT HAS ALREADY EXPIRED NO TRANSFER OR ASSIGNMENT SHALL BE ALLOWED
							BUT THE APPLICATION SHALL ONLY BE RECORDED IN THE NAME OF THE NEW APPLICANT WHO DESIRES TO
							SUCCEED THE ORIGINAL PERMITEE. In any case of the transfer or assignment, the transfer and the
							transferee shall be held jointly and severally liable for any arrears in the payment of the permit fees by the
							transferor.
 						</li><br><br>

 						<li style='font-size:13px;'>
 							Should the permit be cancelled by reason of the failure of the permittee to pay the permit fees, all
							improvements shall be forfeited to the Government.
 						</li><br><br>

 						<li style='font-size:13px;'>
 							Upon discovery, the permittee shall immediately notify in writing the Director of Lands of the existence in
							the land of any gold, silver, copper, or other substances containing minerals, guano, precious stones, coal or
							coal oil, and he/she not take or remove nor offer others to take remove from the place any quantity of the
							said project.
 						</li><br><br>

 						<li style='font-size:13px;'>
 							Two permit is subject to the favorable recommendations of the District Engineer, the General Manager of
							the Philippine Ports Authority, and further findings of the District Land Officer concerned, the said
							recommendation and findings are necessary but were not available and were therefore not considered at
							the time of the issuance of the permit.
 						</li><br><br>

 						<li style='font-size:13px;'>
 							Persons holdings licenses issued by the Bureau of Forest Development shall have rights –f way on the land
							and also the right out, collect and remove timber thereon.
 						</li><br><br>

 						<li style='font-size:13px;'>
 							Any timber growing on the land shall not be cut or disposed of for commercial purposes without license
							from the Bureau of Forest Development.
 						</li><br><br>

 						<li style='font-size:13px;'>
 							The land covered by the permit and/or any improvement that may be constructed thereon shall be used
							exclusively by the applicant himself. It case it is found out that the land/or improvements are used by any
							person other than the permittee without written consent or approval of the Director of Lands or of the
							Minister of Natural Resources, the permit shall be cancelled and the improvements on the land covered
							thereby, forfeited in favor of the Government.
 						</li>


 					</ol>
 				

	   		";

$paper_size='';
$mpdf=new mPDF('utf-8');
$mpdf->AddPage($paper_size);
$mpdf->WriteHTML($html);
$mpdf->Output();
exit;
?>