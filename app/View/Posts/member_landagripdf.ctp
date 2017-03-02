<?php

$html = "DENR Form No.
						<br><div style='text-align:center; font-size:13px;'>
						               Republic of the Philippines<br>
							    Department of Environment and Natural Resources<br><br>
						            AGRICULTURAL, FORESHORE, RECLAIMED LAND<br> 
						              OR MISCELLANEOUS LEASE APPLICATION
			            </div>

			            <div style='text-align:right;'><span>Entry No. <u>".$result['Landagri']['id']."</u></span></div><br>

			        <ol>
			          <li>The undersigned hereby makes application under the provisions of Chapters VI and IX of
                          Commonwealth Act 141, as amended, to lease for a period of <u>".$result['Landagri']['period']."</u> years the tract of
                          land as described as follows:<br>
                          <u>".$result['Landagri']['tract']."</u><br>
                          situated in the Barrio of <u>".$result['Landagri']['barrio']."</u>, Municipality of <u>".$result['Landagri']['municipality']."</u> Province of
                          <u>".$result['Landagri']['provice']."</u>, Philippines, containing an area of <u>".$result['Landagri']['area']."</u>, the shape and
                          dimension of said tract being indicated in the sketch drawn on the back of the application.<br><br>
                      </li>
                      <li>
                          My name is <u>".$result['Landagri']['name']."</u>, my age is <u>".$result['Landagri']['age']."</u> years; the place of my birth is
                          <u>".$result['Landagri']['birth-place']."</u>, I am a citizen of <u>".$result['Landagri']['citizen']."</u> and my post office address is
                          <u>".$result['Landagri']['post-address']."</u>; I am married, single, and the name of my wife/husband is
                          <u>".$result['Landagri']['spouse']."</u> who is a citizen of <u>".$result['Landagri']['spouce-citizen']."</u> I am not employed in the government service. (If a
                          government employee, he should attach to this application permission in writing of the head of
                          the Department under which he is working). I possess funds and personal property as follows.
                          With which I expect to put into beneficial use the land applied for within the period fixed by law:<br>
                          <u>".$result['Landagri']['beneficials']."</u> - (If the applicant is a
                          corporation or association, attach a certified copy of the articles of incorporation or copartnership
                          and evidence of its having been authorized to transact business in the Philippines.)<br><br>
                      </li>

                      <li>
                          I have examined the land applied for, and it contains no improvement or indication of
						  occupation and settlement, except as follows:
						  <u>".$result['Landagri']['applied']."</u> and to the best of my knowledge and belief, it is
						  neither timber nor mineral land and contains no guano or any deposit of salts or coal.
						  The following improvements are proposed to be made on the land applied for, the same to be
						  used solely for <u>".$result['Landagri']['purposed']."</u> purposes. (State kind and approximate value of proposed
						  improvements, such as houses, warehouses, factories, wharves, docks, piers, etc. (If the land will
						  be devoted for agricultural purposes, state the crop to be raised.) <u>".$result['Landagri']['kinds-of-purposed']."</u><br><br>
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
                          I a <u>".$result['Landagri']['your-position']."</u> a member, stockholder, officer, representative, attorney, agent, employee or
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
 
 $paper_size = '';

$mpdf=new mPDF('utf-8');
$mpdf->AddPage($paper_size);
$mpdf->debug = true;
$mpdf->WriteHTML($html);
$mpdf->Output();
exit;
?>