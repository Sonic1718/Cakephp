<?php

	   		$html = "
	   			<div style='text-align:center;'>
	   			            Republic of the Philippines<br>
					Department of Environment and Natural Resources<br>
					          NATIONAL CAPITAL REGION<br>
					         Land Management Division<br>
					2nd Floor, L & S Bldg. 1515 Roxas boulevard<br>
	   							    Ermita, Manila
	   			</div><br><br>

	   			<div style='text-align:center;'>Note: <i>This application must be submitted in duplicate, otherwise it will not be accepted.</i></div>

	   			<br><div style='text-align:center; font-size:20px;'>INSULAR GOVERNMENT PROPERTY SALES APPLICATION</div>

	   			<br><div>Application No. <u>_________________</u></div><br>

	   			<ol>
	   			   <li>
	   			       I HEREBY make application to purchase for agricultural, residential, commercial,
					   industrial, charitable, educational or religious purpose under the provisions of Chapter V,
					   IX, X or XI of Commonwealth Act No. 141 (Public Land Act), as amended; the following
					   tract of public land (if the land is a subdivision or cadastral lot, mention the lot and survey
					   number), Lot .<u>".$result['Landin']['lot']."</u> Block No. <u>".$result['Landin']['block']."</u> Psd-<u>".$result['Landin']['psd']."</u>,
					   Phase<u>".['phase']."</u> situated in the Barangay of <u>".$result['Landin']['barangay']."</u>, Municipality of
					   <u>".$result['Landin']['municipality']."</u>, Province of Metro Manila, Island of Luzon, Philippines and containing an
					   area of <u>".$result['Landin']['area']."</u>square meters sketch of which is drawn on the back hereof.<br><br>
	   			   </li>
	   			   <li>
	   			        My name is <u>".$result['Landin']['name']."</u>, my age is <u>".$result['Landin']['age']."</u> years, my
						birthplace is <u>".$result['Landin']['birthplace']."</u>, the date of my birth is
						<u>".$result['Landin']['birth-date']."</u>. I am a citizen of the Philippines and my post office
						address is <u>".$result['Landin']['post-address']."</u>, I am (married, single)
						and the name of my wife/husband is <u>".$result['Landin']['spouse-name']."</u>, who is a
						citizen of the Philippines. (If the applicant a married woman, a written consent of her
						husband should be attached to her application).<br><br>
	   			   </li>
	   			   <li>
	   			   		I have been upon and examined the land applied for and it contains no improvement or
						indication of occupation or settlement, except as follows:
						<u>".$result['Landin']['land-applied']."</u> and to the best of my knowledge and belief,
						it is neither timber nor mineral land and contains no valuable deposit of guano, coal or
						salt.<br><br>
	   			   </li>
	   			   <li>
					    This application is made in good faith for my exclusive benefit and use and not, either
						directly or indirectly for the benefit or use of any other person, corporation, association or
						partnership, but for the actual purpose of using the land solely for residential purposes,
						for which I shall invest the sum of
						<u>".$result['Landin']['investment-fee']."</u>(P<u>".$result['Landin']['total-investment']."</u>).<br><br>
	   			   </li>
	   			   <li>
						Then land applied for is/is not mortgage with the <u>".$result['Landin']['not-mortgage']."</u>
						copy of the Deed of Mortgage of which is hereto attached.<br><br>
	   			   </li>
	   			   <li>
						The said lot is/is not tenanted by or leased to anybody, copy of the agreement of the
						tenants or lease of which is hereto attached.<br><br>
	   			   </li>
	   			   <li>
						I agree to conform to future delimitation, classification, survey or re-survey of the land
						herein applied for and I shall before patent/deed of conveyance/deed of sale is issued to
						me accept such portion or portions as may be assigned to me by the Director of Lands
						as a result of such new delimitation classification, survey or re-survey.<br><br>
	   			   </li>
	   			   <li>
						I agree that a strip of forty meters wide starting from bank on each side of any river or
						stream that may be found on the land shall be demarcated and preserved as permanent
						timber land be planted exclusively to trees of known economic value, and I shall not
						make any clearing thereon or utilized the same for ordinary farming purposes even after
						patent shall have been issued to me. (NOTE: Not applicable if Land applied for is for
						residential, industrial or commercial purposes).<br><br>
	   			   </li>
	   			   <li>
						I understand that this application conveys no right to occupy the land prior to the award
						of the land to me; that the land is of the public domain and that any and all rights I may
						have respect thereto by virtue of continuous occupation and cultivation are hereby
						relinquished to the Government.<br><br>
	   			   </li>
	   			   <li>
						I have read or someone has read to me, and I understand the provision of the Public
						Land Act relating to the entering and granting through purchase of land of the public
						domain of the Philippines and I will faithfully and honestly endeavor to comply with all the
						requirements of the law on the subject or sale.<br><br>
	   			   </li>
	   			   <li>
	   			   	    I am <u>".$result['Landin']['position']."</u> a member, stockholder, officer, representative,
					    attorney, agent, employee or bondholder of the following corporations, association or
					    partnership which are engaged in agriculture and are holders of agricultural public lands
					    in the Philippines (give the name of the corporation, association or partnership, their
					    places of business and the amount of public land held by
					    them:<u>".$result['Landin']['corporation-name']."</u>
					    . The said corporation, association or partnership has under its control a total area of
					    <u>".$result['Landin']['total-hectare']."</u> hectare of public land by virtue of its ________________________.<br><br>
	   			   </li>
	   			   <li>
	   			   		I understand that any applicant who willfully and knowingly submits false statement or
						execute false affidavit in connection with this application shall be deemed guilty of
						perjury and shall be punished accordingly and that any person who; not being qualified
						to apply for public land, files an application or induces/permits another to file it in his
						behalf shall be punished by a fine of not more than five thousand pesos and by
						imprisonment for not more than five years or both and in addition thereto his application
						shall be rejected or cancelled and all amounts paid on account thereof forfeited to the
						Government, and he shall not be entitled to apply for any public land in the Philippines.<br><br>
	   			   </li>
	   			</ol><br><br><br>

	   			    																				<div style='text-align:right;'>_____________________________</div>
 																									<div style='text-align:right;'>Signature of Applicant&nbsp;&nbsp;&nbsp;&nbsp;</div>
 																									<div style='text-align:right;'>TIN: <u>".$result['Landin']['tin']."</u></div>

 			   <br><br><br><br>
 			   <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 			   <div style='text-align:center; font-size:19px;'><u>A</u> <u>F</u> <u>F</u> <u>I</u> <u>D</u> <u>A</u> <u>V</u> <u>I</u> <u>T</u></div>																		
			   

			   <div>
			   		Republic of the Philippines)<br>
					Province of <u>".$result['Landin']['province']."</u>)S. S.<br>
					Municipality of <u>".$result['Landin']['municipality']."</u>)<br><br>
				</div>

				<div style='text-indent:50px;'>
									I, <u>".$result['Landin']['your-name']."</u> the person making this
					application first having duly sworn upon both depose and say: That I have read or someone
					has read to me and I thoroughly understand the foregoing application; that I have and this
					affidavit in the presence of the officer who administered the oath; and that each and every
					statement in the application is true and correct. SO HELP ME GOD.
				</div><br><br><br>
			       
			       																					<div style='text-align:right;'><u>".$result['Landin']['applicant-name']."</u></div>
 																									<div style='text-align:right;'>Applicant&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>

 				<br><br><br><div style='text-indent:50px;'>
 									Before me, at the place aforesaid, on this <u>".$result['Landin']['day']."</u> day of <u>".$result['Landin']['month']."</u>, 20<u>".$result['Landin']['years']."</u> personally
					appeared <u>".$result['Landin']['person-appeared']."</u>, known to be the person whose name appears in the foregoing
					application and who subscribed and sworn to this affidavit. He/She exhibited to me his/her Res.
					Cert. No. <u>".$result['Landin']['certificate-no']."</u> Issued at <u>".$result['Landin']['issued-at']."</u> on the <u>".$result['Landin']['issued-day']."</u> day of
					<u>".$result['Landin']['issued-month']."</u>, 19<u>".$result['Landin']['issued-year']."</u> which shown him/her on the date of said certificate to be
					<u>".$result['Landin']['certificate-old']."</u>years old.
 				</div>

 																									<br><br><br><br><br>					
 				    																			    <div style='text-align:right;'>___________________________________________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
 																									<div style='text-align:right;'>Officer authorized to administered oath&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>

	   		";

$paper_size='';
$mpdf=new mPDF('utf-8');
$mpdf->AddPage($paper_size);
$mpdf->WriteHTML($html);
$mpdf->Output();
exit;
?>