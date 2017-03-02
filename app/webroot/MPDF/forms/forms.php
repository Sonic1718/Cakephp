<?php

//print_r($_POST['data']['Page']['period']);

$paper_size = '';

if ($_GET['form']=='land') {

       if ( $_GET['id'] == 1 ) {

       		
			$html = "DENR Form No.
						<br><div style='text-align:center; font-size:13px;'>
						               Republic of the Philippines<br>
							    Department of Environment and Natural Resources<br><br>
						            AGRICULTURAL, FORESHORE, RECLAIMED LAND<br> 
						              OR MISCELLANEOUS LEASE APPLICATION
			            </div>

			            <div style='text-align:right;'><span>Entry No. <u>".$_POST['data']['Page']['entry']."</u></span></div><br>

			        <ol>
			          <li>The undersigned hereby makes application under the provisions of Chapters VI and IX of
                          Commonwealth Act 141, as amended, to lease for a period of <u>".$_POST['data']['Page']['period']."</u> years the tract of
                          land as described as follows:<br>
                          <u> ".$_POST['data']['Page']['tract']." </u><br>
                          situated in the Barrio of <u>".$_POST['data']['Page']['barrio']."</u>, Municipality of <u>".$_POST['data']['Page']['municipality']."</u> Province of
                          <u>".$_POST['data']['Page']['povince']."</u>, Philippines, containing an area of <u>".$_POST['data']['Page']['area']."</u>, the shape and
                          dimension of said tract being indicated in the sketch drawn on the back of the application.<br><br>
                      </li>
                      <li>
                          My name is <u>".$_POST['data']['Page']['name']."</u>, my age is <u>".$_POST['data']['Page']['age']."</u> years; the place of my birth is
                          <u>".$_POST['data']['Page']['birth-place']."</u>, I am a citizen of <u>".$_POST['data']['Page']['citizen']."</u> and my post office address is
                          <u>".$_POST['data']['Page']['post-address']."</u>; I am married, single, and the name of my wife/husband is
                          <u>".$_POST['data']['Page']['spouse']."</u> who is a citizen of <u>".$_POST['data']['Page']['spouse-citizen']."</u> I am not employed in the government service. (If a
                          government employee, he should attach to this application permission in writing of the head of
                          the Department under which he is working). I possess funds and personal property as follows.
                          With which I expect to put into beneficial use the land applied for within the period fixed by law:<br>
                          <u>".$_POST['data']['Page']['beneficial']."</u> - (If the applicant is a
                          corporation or association, attach a certified copy of the articles of incorporation or copartnership
                          and evidence of its having been authorized to transact business in the Philippines.)<br><br>
                      </li>

                      <li>
                          I have examined the land applied for, and it contains no improvement or indication of
						  occupation and settlement, except as follows:
						  <u>".$_POST['data']['Page']['applied']."</u> and to the best of my knowledge and belief, it is
						  neither timber nor mineral land and contains no guano or any deposit of salts or coal.
						  The following improvements are proposed to be made on the land applied for, the same to be
						  used solely for <u>".$_POST['data']['Page']['purposed']."</u> purposes. (State kind and approximate value of proposed
						  improvements, such as houses, warehouses, factories, wharves, docks, piers, etc. (If the land will
						  be devoted for agricultural purposes, state the crop to be raised.) <u>".$_POST['data']['Page']['kinds-of-purposed']."</u><br><br>
                      </li>

                      <li>
                          This application is made in good faith for the exclusive benefit of the applicant and not either
						  directly or indirectly, for the benefit of any other person, corporation, association or
						  partnership, and for the actual purpose of using the land for the object specified in this
						  application and for no other purposes. I will not sell, assign, transfer, sublet or in any manner
						  encumber the land of the right or rights that I may acquire, without the approval of the
						  Secretary of Environment and Natural Resources first had been obtained as provided in Section
						  40 of Commonwealth Act 141, as amended.<br><br>
                      </li>

                      <li>
                          I agree to defray all expenses that might be incurred in the survey of the land the applied for, in
						  advertisement of this application and other legal and necessary expenses and to deposit on
						  account thereof such amount as the Regional Executive Director may require, and to conform to
						  delimitation, classification, survey of the land herein applied for.<br><br>
                      </li>

                      <li>
                          That I agree that a strip forty meters wide starting from the bank on each of any river or stream
						  that may be found on the land I applied for, shall be demarcated and preserved as permanent
						  timberland to be painted exclusively to trees of known economic value, and that I shall not
						  make any clearing thereon or utilize the same for ordinary farming purpose even after patent
						  shall have been issued to me or a contract of lease shall have been executed in my favor. (Note:
						  Not applicable if land applied for is for residential, industrial or commercial purposes)<br><br>
                      </li>

                      <li>
                          I a <u>".$_POST['data']['Page']['your-position']."</u> a member, stockholder, officer, representative, attorney, agent, employee or
						  bondholder of the following corporations, associations or partnerships which are engaged in
						  agriculture and are holders of agricultural public lands in the Philippines.<br><br>
                      </li>

                      <li>
                          I understand that this application conveys no right to me to enter upon, occupy, cultivate, or
						  make clearings on the land until the same has been finally approved and a lease contract
						  executed, and that any lease applicant who shall lawfully and knowingly submit false statements
						  or execute false affidavits in connection with the foregoing application shall be deemed guilty of
						  perjury and punished by a fine of not more than two thousand pesos and by imprisonment for
						  not more than five years, and in addition thereto his application shall be cancelled and all
						  amounts paid on account thereof forfeited to the government, and he shall not be entitled to
						  apply for any public land in the Philippines.<br><br>
                      </li>
			        </ol>

			       
 					<div style='text-align:right;'>_____________________________</div>
 					<div style='text-align:right;'>Signature of Applicant&nbsp;&nbsp;&nbsp;&nbsp;</div>
			       

			";

		}//end of land form 1

	   if ( $_GET['id'] == 2 ) {

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
					   number), Lot .<u>".$_POST['data']['Page']['lot']."</u> Block No. <u>".$_POST['data']['Page']['block']."</u> Psd-<u>".$_POST['data']['Page']['psd']."</u>,
					   Phase<u>".$_POST['data']['Page']['phase']."</u> situated in the Barangay of <u>".$_POST['data']['Page']['barangay']."</u>, Municipality of
					   <u>".$_POST['data']['Page']['municipality']."</u>, Province of Metro Manila, Island of Luzon, Philippines and containing an
					   area of <u>".$_POST['data']['Page']['area']."</u>square meters sketch of which is drawn on the back hereof.<br><br>
	   			   </li>
	   			   <li>
	   			        My name is <u>".$_POST['data']['Page']['name']."</u>, my age is <u>".$_POST['data']['Page']['age']."</u> years, my
						birthplace is <u>".$_POST['data']['Page']['birthplace']."</u>, the date of my birth is
						<u>".$_POST['data']['Page']['birth-date']."</u>. I am a citizen of the Philippines and my post office
						address is <u>".$_POST['data']['Page']['post-address']."</u>, I am (married, single)
						and the name of my wife/husband is <u>".$_POST['data']['Page']['spouse-name']."</u>, who is a
						citizen of the Philippines. (If the applicant a married woman, a written consent of her
						husband should be attached to her application).<br><br>
	   			   </li>
	   			   <li>
	   			   		I have been upon and examined the land applied for and it contains no improvement or
						indication of occupation or settlement, except as follows:
						<u>".$_POST['data']['Page']['land-applied']."</u> and to the best of my knowledge and belief,
						it is neither timber nor mineral land and contains no valuable deposit of guano, coal or
						salt.<br><br>
	   			   </li>
	   			   <li>
					    This application is made in good faith for my exclusive benefit and use and not, either
						directly or indirectly for the benefit or use of any other person, corporation, association or
						partnership, but for the actual purpose of using the land solely for residential purposes,
						for which I shall invest the sum of
						<u>".$_POST['data']['Page']['investment-fee']."</u>(P<u>".$_POST['data']['Page']['total-investment']."</u>).<br><br>
	   			   </li>
	   			   <li>
						Then land applied for is/is not mortgage with the <u>".$_POST['data']['Page']['not-mortgage']."</u>
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
	   			   	    I am <u>".$_POST['data']['Page']['position']."</u> a member, stockholder, officer, representative,
					    attorney, agent, employee or bondholder of the following corporations, association or
					    partnership which are engaged in agriculture and are holders of agricultural public lands
					    in the Philippines (give the name of the corporation, association or partnership, their
					    places of business and the amount of public land held by
					    them:<u>".$_POST['data']['Page']['corporation-name']."</u>
					    . The said corporation, association or partnership has under its control a total area of
					    <u>".$_POST['data']['Page']['total-hectare']."</u> hectare of public land by virtue of its ________________________.<br><br>
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
 																									<div style='text-align:right;'>TIN: <u>".$_POST['data']['Page']['tin']."</u></div>

 			   <br><br><br><br><br><br><br><br><br><br><div style='text-align:center; font-size:19px;'><u>A</u> <u>F</u> <u>F</u> <u>I</u> <u>D</u> <u>A</u> <u>V</u> <u>I</u> <u>T</u></div>																		
			   

			   <div>
			   		Republic of the Philippines)<br>
					Province of <u>".$_POST['data']['Page']['province']."</u>)S. S.<br>
					Municipality of <u>".$_POST['data']['Page']['municipality']."</u>)<br><br>
				</div>

				<div style='text-indent:50px;'>
									I, <u>".$_POST['data']['Page']['your-name']."</u> the person making this
					application first having duly sworn upon both depose and say: That I have read or someone
					has read to me and I thoroughly understand the foregoing application; that I have and this
					affidavit in the presence of the officer who administered the oath; and that each and every
					statement in the application is true and correct. SO HELP ME GOD.
				</div><br><br><br>
			       
			       																					<div style='text-align:right;'><u>".$_POST['data']['Page']['applicant-name']."</u></div>
 																									<div style='text-align:right;'>Applicant&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>

 				<br><br><br><div style='text-indent:50px;'>
 									Before me, at the place aforesaid, on this <u>".$_POST['data']['Page']['day']."</u> day of <u>".$_POST['data']['Page']['month']."</u>, 20<u>".$_POST['data']['Page']['years']."</u> personally
					appeared <u>".$_POST['data']['Page']['person-appeared']."</u>, known to be the person whose name appears in the foregoing
					application and who subscribed and sworn to this affidavit. He/She exhibited to me his/her Res.
					Cert. No. <u>".$_POST['data']['Page']['certificate-no']."</u> Issued at <u>".$_POST['data']['Page']['issued-at']."</u> on the <u>".$_POST['data']['Page']['issued-day']."</u> day of
					<u>".$_POST['data']['Page']['issued-month']."</u>, 19<u>".$_POST['data']['Page']['issued-year']."</u> which shown him/her on the date of said certificate to be
					<u>".$_POST['data']['Page']['certificate-old']."</u>years old.
 				</div>

 																									<br><br><br><br><br>					
 				    																			    <div style='text-align:right;'>___________________________________________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
 																									<div style='text-align:right;'>Officer authorized to administered oath&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>


	   		";

	   }//end of land form 2

	   if ( $_GET['id'] == 3 ) {

	   		$html = "
	   			<div style='text-align:center;'>
	   			            Republic of the Philippines<br>
					Department of Environment and Natural Resources<br>
					          NATIONAL CAPITAL REGION<br>
					         Land Management Division<br>
					2nd Floor, L & S Bldg. 1515 Roxas boulevard<br>
	   							    Ermita, Manila
	   			</div><br><br>

	   			<div style='text-align:center;'>Note: This application must be submitted in duplicate, otherwise it will not be accepted.</div>

	   			<br><div style='text-align:center; font-size:18px;'>MISCELLANEOUS SALES APPLICATION</div>

	   			<br><div>Application No. <u>_________________</u></div><br>

	   			<ol>
	   			   <li>
	   			       I HEREBY make application to purchase for agricultural, residential, commercial,
					   industrial, charitable, educational or religious purpose under the provisions of Chapter V,
					   IX, X or XI of Commonwealth Act No. 141 (Public Land Act), as amended; the following
					   tract of public land (if the land is a subdivision or cadastral lot, mention the lot and survey
					   number), Lot .<u>".$_POST['data']['Page']['lot']."</u> Block No. <u>".$_POST['data']['Page']['block']."</u> Psd-<u>".$_POST['data']['Page']['psd']."</u>,
					   Phase<u>".$_POST['data']['Page']['phase']."</u> situated in the Barangay of <u>".$_POST['data']['Page']['barangay']."</u>, Municipality of
					   <u>".$_POST['data']['Page']['municipality']."</u>, Province of Metro Manila, Island of Luzon, Philippines and containing an
					   area of <u>".$_POST['data']['Page']['area']."</u> square meters sketch of which is drawn on the back hereof.<br><br>
	   			   </li>
	   			   <li>
	   			        My name is <u>".$_POST['data']['Page']['name']."</u>, my age is <u>".$_POST['data']['Page']['age']."</u> years, my
						birthplace is <u>".$_POST['data']['Page']['birthplace']."</u>, the date of my birth is
						<u>".$_POST['data']['Page']['birth-date']."</u>. I am a citizen of the Philippines and my post office
						address is <u>".$_POST['data']['Page']['post-address']."</u>, I am (married, single)
						and the name of my wife/husband is <u>".$_POST['data']['Page']['spouse-name']."</u>, who is a
						citizen of the Philippines. (If the applicant a married woman, a written consent of her
						husband should be attached to her application).<br><br>
	   			   </li>
	   			   <li>
	   			   		I have been upon and examined the land applied for and it contains no improvement or
						indication of occupation or settlement, except as follows:
						<u>".$_POST['data']['Page']['land-applied']."</u> and to the best of my knowledge and belief,
						it is neither timber nor mineral land and contains no valuable deposit of guano, coal or
						salt.<br><br>
	   			   </li>
	   			   <li>
					    This application is made in good faith for my exclusive benefit and use and not, either
						directly or indirectly for the benefit or use of any other person, corporation, association or
						partnership, but for the actual purpose of using the land solely for residential purposes,
						for which I shall invest the sum of
						<u>".$_POST['data']['Page']['investment-fee']."</u>(P<u>".$_POST['data']['Page']['total-investment']."</u>).<br><br>
	   			   </li>
	   			   <li>
						Then land applied for is/is not mortgage with the <u>".$_POST['data']['Page']['not-mortgage']."</u>
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
	   			   	    I am <u>".$_POST['data']['Page']['position']."</u> a member, stockholder, officer, representative,
					    attorney, agent, employee or bondholder of the following corporations, association or
					    partnership which are engaged in agriculture and are holders of agricultural public lands
					    in the Philippines (give the name of the corporation, association or partnership, their
					    places of business and the amount of public land held by
					    them:<u>".$_POST['data']['Page']['corporation-name']."</u>
					    . The said corporation, association or partnership has under its control a total area of
					    <u>".$_POST['data']['Page']['total-hectare']."</u> hectare of public land by virtue of its <u>".$_POST['data']['Page']['land-virtue']."</u>.<br><br>
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
 																									<div style='text-align:right;'>TIN: <u>".$_POST['data']['Page']['tin']."</u></div>
 				<br><br><br><br>
 			   <br><br><br><br><br><br><br><br><br><br><div style='text-align:center; font-size:19px;'><u>A</u> <u>F</u> <u>F</u> <u>I</u> <u>D</u> <u>A</u> <u>V</u> <u>I</u> <u>T</u></div>																		
			  	
			  <div>
			   		Republic of the Philippines)<br>
					Province of <u>".$_POST['data']['Page']['province']."</u>)S. S.<br>
					Municipality of <u>".$_POST['data']['Page']['municipality']."</u>)<br><br>
				</div>

				<div style='text-indent:50px;'>
									I, <u>".$_POST['data']['Page']['your-name']."</u> the person making this
					application first having duly sworn upon both depose and say: That I have read or someone
					has read to me and I thoroughly understand the foregoing application; that I have and this
					affidavit in the presence of the officer who administered the oath; and that each and every
					statement in the application is true and correct. SO HELP ME GOD.
				</div><br><br><br>
			       
			       																					<div style='text-align:right;'><u>".$_POST['data']['Page']['applicant-name']."</u></div>
 																									<div style='text-align:right;'>Applicant&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>

 				<br><br><br><div style='text-indent:50px;'>
 									Before me, at the place aforesaid, on this <u>".$_POST['data']['Page']['day']."</u> day of <u>".$_POST['data']['Page']['month']."</u>, 20<u>".$_POST['data']['Page']['years']."</u> personally
					appeared <u>".$_POST['data']['Page']['person-appeared']."</u>, known to be the person whose name appears in the foregoing
					application and who subscribed and sworn to this affidavit. He/She exhibited to me his/her Res.
					Cert. No. <u>".$_POST['data']['Page']['certificate-no']."</u> Issued at <u>".$_POST['data']['Page']['issued-at']."</u> on the <u>".$_POST['data']['Page']['issued-day']."</u> day of
					<u>".$_POST['data']['Page']['issued-month']."</u>, <u>".$_POST['data']['Page']['issued-year']."</u> which shown him/her on the date of said certificate to be
					<u>".$_POST['data']['Page']['certificate-old']."</u>years old.
 				</div>

 																									<br><br><br><br><br>					
 				    																			    <div style='text-align:right;'>___________________________________________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
 																									<div style='text-align:right;'>Officer authorized to administered oath&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>

 

	   		";

	   }//end of land form 3

	   if ( $_GET['id'] == 4 ) {

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
				
				<div style='font-size:16px;'>Name of Applicant:  <u>".$_POST['data']['Page']['name']."</u></div>
				<div style='font-size:16px;'>Mailing Address of Applicant: <u>".$_POST['data']['Page']['address']."</u></div>
				
				<div style='font-size:16px;'>
					<div style='float:left; width:250px;'>Citizenship: <u>".$_POST['data']['Page']['citizenship']."</u></div><div style='float:left; width:250px;'>Civil Status: <u>".$_POST['data']['Page']['civil-status']."</u></div><div style='float:left; width:150px;'>Sex: <u>".$_POST['data']['Page']['sex']."</u></div>		
				</div>

				<div style='font-size:16px;'>
					<div style='float:left; width:200px;'>Age: <u>".$_POST['data']['Page']['age']."</u></div>
					<div style='float:left;'>If MINOR, name of legal guardian <u>".$_POST['data']['Page']['guardian']."</u></div>
				</div>
				<div style='font-size:16px;'>
					<div style='float:left; width:300px;'>Date of Birth: <u>".$_POST['data']['Page']['birth-date']."</u></div>
					<div style='float:left;'>Place of Birth: <u>".$_POST['data']['Page']['birth-place']."</u></div>
				</div>
				<div style='font-size:16px;'>Name of Spouse: <u>".$_POST['data']['Page']['spouse']."</u></div>
				<div style='font-size:16px;'>Contact Nos: <u>".$_POST['data']['Page']['contact']."</u></div>
				<div style='float:left; font-size:16px;'>Location of residential land applied for:</div><br>
				<div>
					<div style='float:left; width:200px; font-size:16px;'><i>No./Street <br><u>".$_POST['data']['Page']['street']."</u></i></div>
					<div style='float:left; width:200px; font-size:16px;'><i>Barangay <br><u>".$_POST['data']['Page']['barangay']."</u></i></div>
					<div style='float:left; width:200px; font-size:16px;'><i>Municipality/City <br><u>".$_POST['data']['Page']['municipality']."</u></i></div>
				</div>
				<br><div style='float:left; font-size:16px;'>Description of residential land applied for:</div><br>
				<div>
					<div style='float:left; width:140px; font-size:16px;'><i>Lot # <br><u>".$_POST['data']['Page']['lot']."</u></i></div>
					<div style='float:left; width:140px; font-size:16px;'><i>Block # <br><u>".$_POST['data']['Page']['block']."</u></i></div>
					<div style='float:left; width:140px; font-size:16px;'><i>Survey # <br><u>".$_POST['data']['Page']['survey']."</u></i></div>
					<div style='float:left; width:140px; font-size:16px;'><i>Area (Sq.M.) <br><u>".$_POST['data']['Page']['area']."</u></i></div>
				</div>
				<br>
				<div style='font-size:16px;'> Applicant’s predecessor-in-interest (if Any) : <u>".$_POST['data']['Page']['predecessor-in-interest']."</u></div>
				<br>
				<div style='font-size:16px;'>Date of entry by applicant or predecessor-in-interest upon the residential land applied for: (on or about) <u>".$_POST['data']['Page']['date-entry']."</u></div>
				<br>
				<div style='font-size:16px; text-indent:80px;'>I declare, under the penalties of perjury, that my total land holdings are not more than 12 hectares and that this application has been made in good faith and to the best of my knowledge all information contained herein are true and correct.</div>

																		<br>
																		<div style='text-indent:460px;'><u>".$_POST['data']['Page']['applicant-name']."</u></div>
 																		<div style='text-indent:430px;'>Applicant's Name and Signature</div>
 																		<br><div style='text-indent:430px; font-size:11px;'>CTC/I.D. No. : <u>".$_POST['data']['Page']['ctc-id']."</u></div>
 																		<div style='text-indent:430px; font-size:11px;'>Issued On : <u>".$_POST['data']['Page']['issued-on']."</u></div>
 																		<div style='text-indent:430px; font-size:11px;'>Issued At : <u>".$_POST['data']['Page']['issued-at']."</u></div>

 				<br><div style='font-size:16px; text-indent:50px;'>SUBSCRIBED &nbsp;&nbsp;&nbsp; AND &nbsp;&nbsp;&nbsp; SWORN &nbsp;&nbsp;&nbsp;TO &nbsp;&nbsp;&nbsp;before &nbsp;&nbsp;&nbsp; me this <u>".$_POST['data']['Page']['day']."</u> day of <u>".$_POST['data']['Page']['month']."</u> at <u>".$_POST['data']['Page']['years']."</u>.</div>

 																		<br>
 																		<div style='text-align:right;'>__________________________________________</div>
 																		<div style='text-indent:460px;'>Office Authorized to <p style='text-indent:472px; margin-top:-8;'>Administer Oath</p></div>

 				
 				<div style='font-size:10px;'>This form is not for sale.
 				<br>
                    This form must be accomplished in five (5) copies.</div>
				
	   		";

	   		

	   }//end of land form 4

	   if ( $_GET['id'] == 5 ) {

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
						 for <u>".$_POST['data']['Page']['purposes']."</u> purposes the tract of Land located in the Barrio of <u>".$_POST['data']['Page']['barrio']."</u> Municipality of <u>".$_POST['data']['Page']['municipality']."</u> 
						 Province of<u>".$_POST['data']['Page']['province']."</u> containing approximately an area of <u>".$_POST['data']['Page']['area']."</u> square meters,
						 bounded as follows:<br><br>
					     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(If the land corresponds to a lot in a cadastre or subdivision, mention the lot number as well as the
						 number of the cadastre or subdivision)<br><br>The land is covered by my Revocable Permit Application No. <u>".$_POST['data']['Page']['permit-no']."</u> I shall use the land for <u>".$_POST['data']['Page']['use-of-land']."</u>.
					</li><br><br>
					
					<li style='font-size:12px;'>I make this application for my exclusive benefit and not for the benefit of any other person; and I shall not
						lease or sublease the land applied for and/or the improvements thereon to any other person nor shall
						allow such other person to derive benefits therefrom either directly or indirectly.
					</li><br><br>
					
					<li style='font-size:12px;'>
					To show that I possess the qualifications required by law, the following statements of facts is submitted.
					</li><br><br>
					
					<li style='font-size:12px;'>
					My name Is <u>".$_POST['data']['Page']['name']."</u>, my age is <u>".$_POST['data']['Page']['age']."</u> years; I was born in
					<u>".$_POST['data']['Page']['birthplace']."</u>; and employed in <u>".$_POST['data']['Page']['employed-in']."</u> I am a
					citizen of <u>".$_POST['data']['Page']['citizen']."</u>, my post office address is <u>".$_POST['data']['Page']['post-address']."</u>; I am
					married/single and the name of my wife/husband is <u>".$_POST['data']['Page']['spouse']."</u>; who is a citizen of
					<u>".$_POST['data']['Page']['spouse-citizen']."</u>;
					</li><br><br>
					
					<li style='font-size:12px;'>
						I am <u>".$_POST['data']['Page']['name']."</u>; holder of <u>".$_POST['data']['Page']['title-holder']."</u>other applications for public
						land. They are as follows: <u>".$_POST['data']['Page']['land']."</u>.
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
 																				<br><div style='text-indent:430px; font-size:12px;'>Address : <u>".$_POST['data']['Page']['address']."</u></div>
 																				    <div style='text-indent:420px; font-size:12px;'>Tax Payer acct. No. <u>".$_POST['data']['Page']['tax-acct-no']."</u></div>
 				
 				<br>
 				<div>
 				WITNESSES:<br>
 				<ol>
 					<li><u>".$_POST['data']['Page']['witness-name']."</u> Address: <u>".$_POST['data']['Page']['address']."</u></li>
 					<li><u>".$_POST['data']['Page']['witness-name']."</u> Address: <u>".$_POST['data']['Page']['address']."</u></li>
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
	   	
	   }//end of land form 5

}//end land

if ($_GET['form']=='forest') {

       if ( $_GET['id'] == 1 ) {

       		
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
						<p>Type: (<u>".$_POST['data']['Page']['new']."</u>) NEW</p>
					</div>
					<div style='margin-top:-30px; text-indent:120px;'>
						<p> (<u>".$_POST['data']['Page']['renew']."</u>) RENEWAL</p>
					</div>
					

																					<div style='text-indent:500px;'>
																						<p>DATE: <u>".$_POST['data']['Page']['exact-date']."</u></p>
																					</div>

					
					<div style='text-indent:80px; margin-top:-20px;'>
						<p>The RED / CENTRO concerned:</p>
					</div>
					<div style='margin-top:-30px; text-indent:80px;'>
						<p><u>".$_POST['data']['Page']['red-concerned']."</u></p>
					</div>
					<div style='margin-top:-30px; text-indent:80px;'>
						<p><u>".$_POST['data']['Page']['centro-concerned']."</u></p>
					</div>

					
					<div style='text-indent:80px; margin-top:-15px;'>
						<p>Sir:</p>
					</div>

					<div style='text-indent:120px; margin-top:-20px;'>
						<p>I / We <u>".$_POST['data']['Page']['name']."</u>, with address at <u>".$_POST['data']['Page']['address']."</u> and
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						telephone no. <u>".$_POST['data']['Page']['contact-no']."</u> hereby applies for ( Please check appropriate box ) :
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
																			<p><u>".$_POST['data']['Page']['applicant-name']."</u></p>
																		</div>
																		<div style='text-indent:320px; margin-top:-30px;'>
																			<p>Signature over Printed Name of Applicant</p>
																		</div>
			";

		}//end of forest form 1

	   if ( $_GET['id'] == 2 ) {

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
					<div style='text-indent:40px;'><p>NEW OR RENEWAL (State which) <u>".$_POST['data']['Page']['type']."</u></p></div>
					<div style='text-indent:40px; margin-top:-30px;'><p>PLACE AND DATE: <u>".$_POST['data']['Page']['place-date']."</u></p></div>
					<div style='text-indent:40px; font-size:14px; margin-top:-30px;'><p>Telephone Number/E-mail address (if, there is) <u>".$_POST['data']['Page']['contact-email']."</u></p></div>

					<div style='text-indent:40px; font-size:14px; margin-top:-16px;'><p>(Make your writing legible. Fill all spaces properly to avoid delay)</p></div>

					<div style='text-indent:140px; margin-top:-16px;'><p><b>APPLICATION TO OPERATE A WOOD PROCESSING PLANT</b></p></div>
					<div style='text-indent:200px; margin-top:-30px;'><p><u>".$_POST['data']['Page']['type-of-processing-plant']."</u></p></div>
					<div style='text-indent:250px; margin-top:-30px;'><p>(Type of processing plant)</p></div>

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
								I, <u>".$_POST['data']['Page']['name']."</u> of legal age , citizen of the Philippines and
								residents of <u>".$_POST['data']['Page']['address']."</u> hereby apply for Permit to operate 
								<u>".$_POST['data']['Page']['permit-operate']."</u>
							</li>
							<br>
							<li>
								The Trade name of the plant is <u>".$_POST['data']['Page']['plant-name']."</u> located at
								 <u>".$_POST['data']['Page']['plant-location']."</u>.
							</li>
							<br>
							<li>
								I am the owner of the said plant and I am not a holder of Timber License Agreement
								No.<u>".$_POST['data']['Page']['timber-license-agreement-no']."</u> granted by the Director of Forest Management Bureau.
							</li>
							<br>
							<li>
								That the actual daily rated capacity of the re-sawmill based on an eight hour shift is
								<u>".$_POST['data']['Page']['re-sawmill']."</u>.		
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
										The total capital invested of this plant is <u>".$_POST['data']['Page']['capital-investment']."</u> and the total number of
										personnel employed is <u>".$_POST['data']['Page']['total-employed']."</u>.
									</li>
									<br>
									<li>
										The <u>".$_POST['data']['Page']['name-plant']."</u> to be sawn in the plant will be obtained from legitimate suppliers
										by purchased. In this case of the latter applicant must submit together with this
										application, the original contract duly notarize with the suppliers stating the volume of
										<u>".$_POST['data']['Page']['plant-supplied']."</u> to be supplied as enumerated hereunder.
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
										Permit No. <u>".$_POST['data']['Page']['permit-no-sawmill']."</u> dated <u>".$_POST['data']['Page']['operate-sawmill-date']."</u> to operate this
										sawmill was granted by the Regional Executive Director of DENR-National Capital Region
										during the last fiscal year <u>".$_POST['data']['Page']['year-operated']."</u>.
									</li>
									<li>
										Should this application be accepted, I obligate myself to comply faithfully with all the
										terms and conditions of my permit and with all rules and regulations and instructions issued in
										connection with RA. 460 and MAO 50 with amendment.
									</li>
									<li>
										I shall dispose the lumber produce under the permit applied for in
										<u>".$_POST['data']['Page']['permit-applied-for']."</u>. (For alien retailer they must submit permit to engage in retail business)
									</li>
									<li>
										To show good faith in filing this application, I am enclosing herewith the require Oath
										Fee of P 36.00 and Application Fee of P 600.00, Permit Fee P<u>".$_POST['data']['Page']['permit-fee']."</u>and Bond
										Deposit of P12,000 in cash or P <u>".$_POST['data']['Page']['cash-bond-fee']."</u> in surety (only surety bonds posted by the
										bonding companies acceptable to the DENR maybe considered).
									</li>
									<li>
										. I understand that the making of this application and/or my voluntary remittance of the fees in
										advance do not authorize me to operate the <u>".$_POST['data']['Page']['machine-type']."</u>l without the permit applied
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
																			<p><u>".$_POST['data']['Page']['applicant-address']."</u></p>
																		</div>
																		<div style='text-indent:380px; margin-top:-34px;'>
																			<p>Address</p>
																		</div>
																		<br><br><br><br><br>

									<div style='text-indent:220px; font-size:19px;'><u>A F F I D A V I T</u></div>
									<br><br>
									<div style='text-indent:2px;'>
										Republic of the Philippines<br>
										(<u>".$_POST['data']['Page']['municipality']."</u>) S.S
									</div>
									<br><br>
									<div style='text-indent:40px;'>
										I, <u>".$_POST['data']['Page']['applicant-name']."</u>, the applicant, first having been solemnly sworn upon my
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
										BEFORE ME, at the City indicated in this <u>".$_POST['data']['Page']['day']."</u> day of <u>".$_POST['data']['Page']['month']."</u> 201<u>".$_POST['data']['Page']['year']."</u>,
										personally appeared the same person whose name and signature with his/her Community Tax
										Certificate No. <u>".$_POST['data']['Page']['tax-cert-no']."</u> ISSUED ON <u>".$_POST['data']['Page']['issued-on']."</u> ISSUED AT <u>".$_POST['data']['Page']['issued-at']."</u> with
										Tax Identification (TIN) No. <u>".$_POST['data']['Page']['tin-no']."</u>.
									</div>																		
			  						
			  															<div style='text-indent:320px;'>
																			<p><u>".$_POST['data']['Page']['team-leader']."</u></p>
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

	   }//end of forest form 2

	   if ( $_GET['id'] == 3) {

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
					<div style='text-indent:40px;'><p>NEW OR RENEWAL (State which) <u>".$_POST['data']['Page']['type']."</u></p></div>
					<div style='text-indent:40px; margin-top:-30px;'><p>PLACE AND DATE: <u>".$_POST['data']['Page']['place-date']."</u></p></div>
					<div style='text-indent:40px; font-size:14px; margin-top:-30px;'><p>Telephone Number/E-mail address (if, there is) <u>".$_POST['data']['Page']['contact-email']."</u></p></div>

					<div style='text-indent:40px; font-size:14px; margin-top:-16px;'><p>(Make your writing legible. Fill all spaces properly to avoid delay)</p></div>

					<div style='text-indent:140px; margin-top:-16px;'><p><b>Application for Registration as Imported/Dealer of<br>
					 Imported Wood Materials</b></p></div>
					
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
								I, <u>".$_POST['data']['Page']['name']."</u> of legal age , citizen of the Philippines and
								residents of <u>".$_POST['data']['Page']['address']."</u> hereby apply for Permit to operate 
								<u>".$_POST['data']['Page']['permit-operate']."</u>
							</li>
							<br>
							<li>
								The Trade name of the plant is <u>".$_POST['data']['Page']['plant-name']."</u> located at
								 <u>".$_POST['data']['Page']['plant-location']."</u>.
							</li>
							<br>
							<li>
								I am the owner of the said plant and I am not a holder of Timber License Agreement
								No.<u>".$_POST['data']['Page']['timber-license-agreement-no']."</u> granted by the Director of Forest Management Bureau.
							</li>
							<br>
							<li>
								That the actual daily rated capacity of the re-sawmill based on an eight hour shift is
								<u>".$_POST['data']['Page']['re-sawmill']."</u>.		
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
										The total capital invested of this plant is <u>".$_POST['data']['Page']['capital-investment']."</u> and the total number of
										personnel employed is <u>".$_POST['data']['Page']['total-employed']."</u>.
									</li>
									<br>
									<li>
										The <u>".$_POST['data']['Page']['name-plant']."</u> to be sawn in the plant will be obtained from legitimate suppliers
										by purchased. In this case of the latter applicant must submit together with this
										application, the original contract duly notarize with the suppliers stating the volume of
										<u>".$_POST['data']['Page']['plant-supplied']."</u> to be supplied as enumerated hereunder.
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
										Permit No. <u>".$_POST['data']['Page']['permit-no-sawmill']."</u> dated <u>".$_POST['data']['Page']['operate-sawmill-date']."</u> to operate this
										sawmill was granted by the Regional Executive Director of DENR-National Capital Region
										during the last fiscal year <u>".$_POST['data']['Page']['year-operated']."</u>.
									</li>
									<li>
										Should this application be accepted, I obligate myself to comply faithfully with all the
										terms and conditions of my permit and with all rules and regulations and instructions issued in
										connection with RA. 460 and MAO 50 with amendment.
									</li>
									<li>
										I shall dispose the lumber produce under the permit applied for in
										<u>".$_POST['data']['Page']['permit-applied-for']."</u>. (For alien retailer they must submit permit to engage in retail business)
									</li>
									<li>
										To show good faith in filing this application, I am enclosing herewith the require Oath
										Fee of P 36.00 and Application Fee of P 600.00, Permit Fee P<u>".$_POST['data']['Page']['permit-fee']."</u>and Bond
										Deposit of P12,000 in cash or P <u>".$_POST['data']['Page']['cash-bond-fee']."</u> in surety (only surety bonds posted by the
										bonding companies acceptable to the DENR maybe considered).
									</li>
									<li>
										. I understand that the making of this application and/or my voluntary remittance of the fees in
										advance do not authorize me to operate the <u>".$_POST['data']['Page']['machine-type']."</u>l without the permit applied
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
																			<p><u>".$_POST['data']['Page']['applicant-address']."</u></p>
																		</div>
																		<div style='text-indent:380px; margin-top:-34px;'>
																			<p>Address</p>
																		</div>
																		<br><br><br><br><br>

									<div style='text-indent:220px; font-size:19px;'><u>A F F I D A V I T</u></div>
									<br><br>
									<div style='text-indent:2px;'>
										Republic of the Philippines<br>
										(<u>".$_POST['data']['Page']['municipality']."</u>) S.S
									</div>
									<br><br>
									<div style='text-indent:40px;'>
										I, <u>".$_POST['data']['Page']['applicant-name']."</u>, the applicant, first having been solemnly sworn upon my
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
										BEFORE ME, at the City indicated in this <u>".$_POST['data']['Page']['day']."</u> day of <u>".$_POST['data']['Page']['month']."</u> 201<u>".$_POST['data']['Page']['year']."</u>,
										personally appeared the same person whose name and signature with his/her Community Tax
										Certificate No. <u>".$_POST['data']['Page']['tax-cert-no']."</u> ISSUED ON <u>".$_POST['data']['Page']['issued-on']."</u> ISSUED AT <u>".$_POST['data']['Page']['issued-at']."</u> with
										Tax Identification (TIN) No. <u>".$_POST['data']['Page']['tin-no']."</u>.
									</div>																		
			  						
			  															<div style='text-indent:320px;'>
																			<p><u>".$_POST['data']['Page']['team-leader']."</u></p>
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
	   	
	   }//end of forest 3

	   if ( $_GET['id'] == 4) {

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
					<div style='text-indent:40px;'><p>NEW OR RENEWAL (State which) <u>".$_POST['data']['Page']['type']."</u></p></div>
					<div style='text-indent:40px; margin-top:-30px;'><p>PLACE AND DATE: <u>".$_POST['data']['Page']['place-date']."</u></p></div>
					<div style='text-indent:40px; font-size:14px; margin-top:-30px;'><p>Telephone Number/E-mail address (if, there is) <u>".$_POST['data']['Page']['contact-email']."</u></p></div>

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
								I, <u>".$_POST['data']['Page']['name']."</u> of legal age , citizen of the Philippines and
								residents of <u>".$_POST['data']['Page']['address']."</u> hereby apply for Permit to operate 
								<u>".$_POST['data']['Page']['permit-operate']."</u>
							</li>
							<br>
							<li>
								The Trade name of the plant is <u>".$_POST['data']['Page']['plant-name']."</u> located at
								 <u>".$_POST['data']['Page']['plant-location']."</u>.
							</li>
							<br>
							<li>
								I am the owner of the said plant and I am not a holder of Timber License Agreement
								No.<u>".$_POST['data']['Page']['timber-license-agreement-no']."</u> granted by the Director of Forest Management Bureau.
							</li>
							<br>
							<li>
								That the actual daily rated capacity of the re-sawmill based on an eight hour shift is
								<u>".$_POST['data']['Page']['re-sawmill']."</u>.		
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
										The total capital invested of this plant is <u>".$_POST['data']['Page']['capital-investment']."</u> and the total number of
										personnel employed is <u>".$_POST['data']['Page']['total-employed']."</u>.
									</li>
									<br>
									<li>
										The <u>".$_POST['data']['Page']['name-plant']."</u> to be sawn in the plant will be obtained from legitimate suppliers
										by purchased. In this case of the latter applicant must submit together with this
										application, the original contract duly notarize with the suppliers stating the volume of
										<u>".$_POST['data']['Page']['plant-supplied']."</u> to be supplied as enumerated hereunder.
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
										Permit No. <u>".$_POST['data']['Page']['permit-no-sawmill']."</u> dated <u>".$_POST['data']['Page']['operate-sawmill-date']."</u> to operate this
										sawmill was granted by the Regional Executive Director of DENR-National Capital Region
										during the last fiscal year <u>".$_POST['data']['Page']['year-operated']."</u>.
									</li>
									<li>
										Should this application be accepted, I obligate myself to comply faithfully with all the
										terms and conditions of my permit and with all rules and regulations and instructions issued in
										connection with RA. 460 and MAO 50 with amendment.
									</li>
									<li>
										I shall dispose the lumber produce under the permit applied for in
										<u>".$_POST['data']['Page']['permit-applied-for']."</u>. (For alien retailer they must submit permit to engage in retail business)
									</li>
									<li>
										To show good faith in filing this application, I am enclosing herewith the require Oath
										Fee of P 36.00 and Application Fee of P 600.00, Permit Fee P<u>".$_POST['data']['Page']['permit-fee']."</u>and Bond
										Deposit of P12,000 in cash or P <u>".$_POST['data']['Page']['cash-bond-fee']."</u> in surety (only surety bonds posted by the
										bonding companies acceptable to the DENR maybe considered).
									</li>
									<li>
										. I understand that the making of this application and/or my voluntary remittance of the fees in
										advance do not authorize me to operate the <u>".$_POST['data']['Page']['machine-type']."</u>l without the permit applied
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
																			<p><u>".$_POST['data']['Page']['applicant-address']."</u></p>
																		</div>
																		<div style='text-indent:380px; margin-top:-34px;'>
																			<p>Address</p>
																		</div>
																		<br><br><br><br><br>

									<div style='text-indent:220px; font-size:19px;'><u>A F F I D A V I T</u></div>
									<br><br>
									<div style='text-indent:2px;'>
										Republic of the Philippines<br>
										(<u>".$_POST['data']['Page']['municipality']."</u>) S.S
									</div>
									<br><br>
									<div style='text-indent:40px;'>
										I, <u>".$_POST['data']['Page']['applicant-name']."</u>, the applicant, first having been solemnly sworn upon my
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
										BEFORE ME, at the City indicated in this <u>".$_POST['data']['Page']['day']."</u> day of <u>".$_POST['data']['Page']['month']."</u> 201<u>".$_POST['data']['Page']['year']."</u>,
										personally appeared the same person whose name and signature with his/her Community Tax
										Certificate No. <u>".$_POST['data']['Page']['tax-cert-no']."</u> ISSUED ON <u>".$_POST['data']['Page']['issued-on']."</u> ISSUED AT <u>".$_POST['data']['Page']['issued-at']."</u> with
										Tax Identification (TIN) No. <u>".$_POST['data']['Page']['tin-no']."</u>.
									</div>																		
			  						
			  															<div style='text-indent:320px;'>
																			<p><u>".$_POST['data']['Page']['team-leader']."</u></p>
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
	   	
	   }//end of forest 4

	   if ( $_GET['id'] == 5) {


	   		$html = "
	   			<br><br>
	   			<div style='text-align:center; font-size:18px;'>
	   				<p><b>List for Requirements for</b></p>
	   			</div>
	   			<div style='text-align:center; margin-top:-40px;'>____________________________________</div>
	   			<div style='text-align:center; font-size:18px; margin-top:-20px;'>
	   				<p><b>Certificate of Registration as Lumber Dealer</b></p>
	   			</div>
	   			<div style='text-align:center; margin-top:-40px;'>_____________________________________________________________</div>
	   			<div style='text-align:center; margin-top:6px;'>___________________________________________________________________________________________</div>
	   			<br>
	   			<div style='text-indent:40px;'><u>".$_POST['data']['Page']['establishment']."</u></div>
	   			<div style='text-indent:40px; margin-top:-16px;'>
	   				<p>(Name of establishment)</p>
				</div>
				<br>
				<div style='text-indent:40px; margin-top:-20px;'><u>".$_POST['data']['Page']['address']."</u></div>
				<div style='text-indent:80px; margin-top:-18px;'>
					<p>(Address)</p>
				</div>
				<br>
				<div style='text-indent:44px; margin-top:-30px;'>
					<p>New applicant <u>".$_POST['data']['Page']['name']."</u></p>
				</div>

				<div style='text-indent:40px;'>
					<p>______________________&nbsp;&nbsp;  1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lumber Supply Contract</p>
				</div>
				<div style='text-indent:280px; margin-top:-34px;'>
					<p>Supplier : <u>".$_POST['data']['Page']['supplier']."</u></p>
				</div>
				<div style='text-indent:280px; margin-top:-34px;'>
					<p style='margin-top:14px;'>WPPP : <u>".$_POST['data']['Page']['wppp']."</u></p>
				</div>
				<div style='text-indent:280px; margin-top:-34px;'>
					<p style='margin-top:14px;'>Volume/Duration :<u>".$_POST['data']['Page']['volume/duration']."</u></p>
				</div>

				<div style='text-indent:40px; margin-top:-20px;'>
					<p>_____________________&nbsp;&nbsp; 2.&nbsp;&nbsp;&nbsp;&nbsp; Fees:</p>
				</div>
				<div style='text-indent:280px; margin-top:-30px;'>
					<p>Oath . . . . . . . . . . . &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;P 36.00</p>
				</div>
				<div style='text-indent:280px; margin-top:-40px;'>
					<p>Application . . . . . . . . . .&nbsp;&nbsp;&nbsp; P 600.00</p>
				</div>
				<div style='text-indent:280px; margin-top:-34px;'>
					<p>Permit/Registration . . . . &nbsp;P 480.00</p>
				</div>
				<div style='text-indent:280px; margin-top:-34px;'>
					<p><b>TOTAL &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P 1,116.00</b></p>
				</div>
				<div style='text-indent:240px; margin-top:-50px;'><p><b>_____________________________________________</b></p></div>

				<div style='text-indent:40px; margin-top:-20px;'>
					<p>_____________________&nbsp;&nbsp; 3.&nbsp;&nbsp;&nbsp;&nbsp; ( ) Forestry Bond&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp; or &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;( ) Cash Bond</p>
				</div>
				<div style='text-indent:240px; margin-top:-36px;'>
					<p>Amount (P) 2,000.00 Amount (P) 1,000.00</p>
				</div>

				<div style='text-indent:40px; margin-top:-20px;'>
					<p>______________________&nbsp;&nbsp;4. &nbsp;&nbsp;&nbsp;Two (2) pictures of the establishment including the lumberyard</p>
				</div>

				<div style='text-indent:40px; margin-top:-20px;'>
					<p>______________________&nbsp;&nbsp;5. &nbsp;&nbsp;&nbsp;Mayor’s Permit for the current year (machine copy)</p>
				</div>

				<div style='text-indent:40px; margin-top:-20px;'>
					<p>______________________&nbsp;&nbsp;6. &nbsp;&nbsp;&nbsp;BIR Income Tax Return for the previous year ending 
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(machine copy)</p>
				</div>

				<div style='text-indent:40px; margin-top:-20px;'>
					<p>______________________&nbsp;&nbsp;7. &nbsp;&nbsp;&nbsp;Annual Business Plan</p>
				</div>

				<div style='text-indent:40px; margin-top:-20px;'>
					<p>______________________&nbsp;&nbsp;8. &nbsp;&nbsp;&nbsp;Business Trade Name or Security and Exchange Commission<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Article of Incorporation (machine copy)</p>
				</div>

				<div style='text-indent:40px; margin-top:-20px;'>
					<p>______________________&nbsp;&nbsp;9. &nbsp;&nbsp;&nbsp;List of Employees</p>
				</div>

				<div style='text-indent:40px; margin-top:-20px;'>
					<p>______________________&nbsp;&nbsp;10. &nbsp;&nbsp;&nbsp;Documentary stamps ( 3 pcs.)</p>
				</div>


	   		";

	   	
	   }//end of forest 5

	   if ( $_GET['id'] == 6) {

	   		$html = "
	   			<br>
	   			<br>
	   			<div style='font-size:16px; text-align:center;'>
	   				<p><b>List of Requirements in Securing Lumber Supply Contract (LSC)</b></p>
	   			</div>
	   			<br>
	   			<div style='text-indent:20px; font-size:18px;'>
	   				<p><u>".$_POST['data']['Page']['name']."</u><br>&nbsp;&nbsp;&nbsp;&nbsp;(Name of Applicant)</p>
	   			</div>
	   			
	   			<div style='text-indent:20px; font-size:18px;'>
	   				<p><u>".$_POST['data']['Page']['address']."</u><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
	   	
	   }//end of forest 6

	   if ( $_GET['id'] == 7) {

	   		$html = "

	   			<br><br><br>
	   			<div style='font-size:14px; text-align:center;'>
	   				<p><b>LIST OF REQUIREMENTS IN THE ISSUANCE OF WOOD PROCESSING PLANT (WPP’s )</b></p>
	   			</div>
	   			<div style='text-align:center; margin-top:-50px;'>
	   				<p>______________________________________________________________________________________________</p>
	   			</div>
	   			<div style='text-align:center; margin-top:-50px;'>
	   				<p>_______________________________________________________________________________________________</p>
	   			</div>

	   			<div style='text-indent:-28px;'>
	   				<p><u>".$_POST['data']['Page']['establishment']."</u><br>(Name of establishment)</p>
	   			</div>

	   			<div style='text-indent:-28px;'>
	   				<p><u>".$_POST['data']['Page']['address']."</u><br>(Address)</p>
	   			</div>

	   			<div style='text-indent:-28px;'>
	   				<p><u>".$_POST['data']['Page']['name']."</u><br>(Applicant Name)</p>
	   			</div>

	   			<div style='text-indent:-28px;'>
	   				<p>WOOD PROCESSING PLANTS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	   				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ( ) NEW&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	   				&nbsp; ( ) RENEWAL</p>
	   			</div>

	   			<div style='text-indent:-28px;'>
	   				<p>____________________1. &nbsp;&nbsp;&nbsp;&nbsp; Fees:</p>
	   			</div>
	   			<div style='text-indent:240px; margin-top:-30px;'>
					<p>Oath . . . . . . . . . . . &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;P 36.00</p>
				</div>
				<div style='text-indent:240px; margin-top:-40px;'>
					<p>Application . . . . . . . . . .&nbsp;&nbsp;&nbsp; P 600.00</p>
				</div>
				<div style='text-indent:240px; margin-top:-34px;'>
					<p>Permit/Registration . . . . &nbsp;P 2,700 / 3 years/ below 24<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cu.m. DRC </p>
				</div>
				<div style='text-indent:240px; margin-top:-34px;'>
					<p>TOTAL . . . . . . . . . . . . . .</p>
				</div>

				<div style='text-indent:-28px; margin-top:-20px;'>
					<p>____________________2. &nbsp;&nbsp;&nbsp;&nbsp( ) Forestry Bond<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 Amount (P) ________ </p>
				</div>

				<div style='text-indent:-28px; margin-top:-20px;'>
					<p>____________________3.&nbsp;&nbsp;&nbsp;&nbsp; Sworn Statement of the Applicant declaring the source of wood
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					materials, supported by Certified document such as but not
 					limited to
 					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 					&nbsp;supply contacts or other appropriate proof of
 					availability and 
 					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 					legitimacy	of wood source
 					</p>
				</div>

				<div style='text-indent:-28px; margin-top:-20px;'>
					<p>____________________4.&nbsp;&nbsp;&nbsp;&nbsp; Copy of Articles of Incorporation or Corporation, as the case	maybe,
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					issued by SEC/Domestic Trade Inc. (DTI) for single
 					Proprietorship.
 					</p>
				</div>

				<div style='text-indent:-28px; margin-top:-20px;'>
					<p>____________________5.&nbsp;&nbsp;&nbsp;&nbsp;
					For individual persons, documents reflecting proof of Filipino
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Citizenship such as Birth Certificate or Certificate Naturalization.
					</p>
				</div>

				<div style='text-indent:-28px; margin-top:-20px;'>
					<p>____________________6.&nbsp;&nbsp;&nbsp;&nbsp;
					Environmental Compliance Certificate or Certificate of Non- Coverage 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					as the case maybe, issued by EMB pursuant to DAO 96-37/Permit to
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Operate Air Pollution Source and Control Installations. 
					</p>
				</div>

				<div style='text-indent:-28px; margin-top:-20px;'>
					<p>____________________7.&nbsp;&nbsp;&nbsp;&nbsp; Copy of Previous Permit</p>
				</div>
														<br>
														<div style='text-indent:-320px; margin-top:-20px;'>
															<p><u>".$_POST['data']['Page']['forest-officer']."</u></p>
														</div>
														<div style='text-indent:-326px; margin-top:-30px;'>
															<p>Forest Officer/Action</p>
														</div>


	   		";
	   	
	   }//end of forest 7
}//end forest

if ($_GET['form']=='wildlife') {

	if ( $_GET['id'] == 1 ) {

		$html"

			<div style='text-align:center; padding-top:15px; margin-left:10px; font-size:15px;'>
					<br>
					<b>Department of Environment and Natural Resources<br>
						Region <u>".$_POST['data']['Page']['region']."</u></b>
				</div>
				<br>
				<br>
				<div style='text-align:center; font-size:16px;'>
					<p><b>WILDLIFE FARM PERMIT</b></p>
				</div>
				<br>
				<br>
				<div style='text-align:left; font-size:15px;'>
					<p><u>".$_POST['data']['Page']['exact-date']."</u></p>
				</div>
				<div style='float:left; font-size:15px; margin-top:-12px;'>
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
							I, <u>".$_POST['data']['Page']['name']."</u> have the honor to apply for the above permit.
						</li>
						<br>
						<li>
							I am <u>".$_POST['data']['Page']['age']."</u> years of age, citizen of <u id='citizenship'></u>, by birth
							(if by naturalization, submit papers for verification)
						</li>
						<br>
						<li>
							My occupation/profession is <u>".$_POST['data']['Page']['work']."</u>.
						</li>
						<br>
						<li>
							I am single/married and the name of my spouse/wife is <u>".$_POST['data']['Page']['spouse']."</u>.
						</li>
						<br>
						<li>
							I am a member/not a member of a sportsmen and/or game club and/or scientific
							or conservation society. State name/s of organization/s, if a member:
							<u>".$_POST['data']['Page']['organization-name']."</u>.
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
							<p><u>".$_POST['data']['Page']['kind-species']."</u></p>	
						</div>
						<div style='float:right; font-size:15px; margin-right:240px;'>
							<p><u>".$_POST['data']['Page']['kind-species-no']."</u></p>	
						</div>
						<br>
						<br>
						<li>
							Wildlife species to be collected under this permit shall be taken by means of:
						</li>
						<div>
							<p><u>".$_POST['data']['Page']['collection-techniques']."</u></p>
						</div>
						<div style='font-size:15px; margin-top:-12px; text-indent:30px;'>
							<p>(Indicate collection technique/s to be used)</p>
						</div>
						<br>
						<li>
							In case of collection, the names of my authorized trappers/collectors are:
							<u>".$_POST['data']['Page']['authorized-name']."</u>.
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
																	<p><u>".$_POST['data']['Page']['address']."</u></p>
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
					PROVINCE OF <u>".$_POST['data']['Page']['province']."</u>:</p>
				</div>
				<div style='font-size:15px; margin-left:50px; margin-top:-10px;'>
					<p>CITY OF <u>".$_POST['data']['Page']['municipality']."</u>)</p>
				</div>
				<br>
				<br>
				<div style='font-size:15px; margin-left:50px; text-indent:50px;'>
					<p>
						SUBSCRIBED AND SWORN to before me this <u>".$_POST['data']['Page']['day']."</u> day of <u>".$_POST['data']['Page']['month']."</u>
						20<u>".$_POST['data']['Page']['year']."</u>, applicant exhibiting to me his/her Community Tax Certificate No. <u>".$_POST['data']['Page']['tax-cert-no']."</u>,
						issued at <u>".$_POST['data']['Page']['issued-at']."</u> on <u>".$_POST['data']['Page']['issued-on']."</u> 20<u id='issued-year'></u>.
					</p>
				</div>
				<br>
				<br>
													<div style='font-size:15px; text-align:right; margin-right:110px;'>
														<p><u>".$_POST['data']['Page']['officer-name']."</u></p>
													</div>
													<div style='font-size:15px; text-align:right; margin-right:50px; margin-top:-12px;'>
														<p>(Officer authorized to administer oath)</p>
													</div>
													<div style='font-size:15px; text-align:right; margin-right:84px; margin-top:-14px;'>
														<p>Printed Name & Signature</p>
													</div>
			</div>















		";
	}

}//end wildlife






//==============================================================
//==============================================================
//==============================================================

require("/../mpdf.php");
$mpdf=new mPDF('utf-8');
$mpdf->AddPage($paper_size);
$mpdf->WriteHTML($html);
$mpdf->Output();
exit;

//==============================================================
//==============================================================
//==============================================================


?>