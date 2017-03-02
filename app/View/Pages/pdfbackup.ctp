<?php
/*
	@$text = string
	@style = B-bold , U-underline , I-italic
	@fpdf = instance object from controller
	for custom input submited by user
*/
function Fstyle($text ,$style,$fpdf){
	$fpdf = $fpdf;
	$fpdf->SetFont('Arial',$style,12);
	$fpdf->write(6,$text);
	$fpdf->SetFont(NULL,NULL,NULL);
}

function multi($text,$top,$left,$fpdf){
	$fpdf->SetY($top);
	$fpdf->SetX($left);
	$fpdf->MultiCell(170, 6,$text);
}

/*
					type
	@text        =  string  = text of the input 
	@$fontFamily =  string  = example : Arial , Tahoma etc..
	@$fontStyle  =  string  = B-bold , U-underline , I-italic
	@$fontSize   =  Integer = font size of the text
	@$align      =  string  = alignment example : L=left , R=Right , C=Center , J=justifiy
	@$br         =  Integer = margin from buttom
	for development use
*/
function Ftitle($text,$fontFamily,$fontStyle,$fontSize,$align,$br,$fpdf){
	$fpdf = $fpdf;
	$fpdf->SetFont($fontFamily,$fontStyle,$fontSize);
	$fpdf->Cell(180,10,$text,0,0,$align);
	$fpdf->Ln($br);
	$fpdf->SetFont('Arial','',12);
}




//Ftitle default setting
$fontFamily = 'Arial';
$fontStyle  = '';
$fontSize   = 11;
$align      = 'C';
$br         = 5;


$fpdf->AddPage();


if ( $dept == 'land' ) {

	

    if ($formNo == 2) {

    	        
				Ftitle('Republic of the Philippines',$fontFamily,$fontStyle,$fontSize,$align,$br,$fpdf);
				Ftitle('Department of Environment and Natural Resources',$fontFamily,$fontStyle,$fontSize,$align,$br,$fpdf);
				Ftitle('NATIONAL CAPITAL REGION',$fontFamily,$fontStyle,14,$align,$br,$fpdf);
				Ftitle('Land Management Division',$fontFamily,$fontStyle,$fontSize,$align,$br,$fpdf);
				Ftitle('2nd Ermita, Manila Floor, L & S Bldg. 1515 Roxas boulevard',$fontFamily,$fontStyle,$fontSize,$align,$br,$fpdf);
				Ftitle('Ermita , Manila',$fontFamily,$fontStyle,$fontSize,$align,10,$fpdf);
				Ftitle('Note: This application must be submitted in duplicate, otherwise it will not be accepted',$fontFamily,'I',$fontSize,$align,10,$fpdf);
				Ftitle('INSULAR GOVERNMENT PROPERTY SALES APPLICATION',$fontFamily,$fontStyle,14,$align,10,$fpdf);
				
				$fpdf->write(6,'        Application No.');
				Fstyle('                                 ','U',$fpdf);

				$fpdf->Ln(10);

				$fpdf->write(6,'           1. I HEREBY make application to purchase for agricultural, residential, commercial,
								       industrial, charitable, educational or religious purpose under the provisions of Chapter V,
								       X or XI of Commonwealth Act No. 141 (Public Land Act), as amended; the following
								       tract of public land (if the land is a subdivision or cadastral lot, mention the lot and survey
								       number), Lot .');
				                Fstyle('                  ','U',$fpdf);
				                $fpdf->write(6,' Block No. ');
				                Fstyle('                ','U',$fpdf);
				                $fpdf->write(6,' Psd-');
				                Fstyle('                  ','U',$fpdf);
				                $fpdf->write(6,' Phase ');
				                Fstyle('                  ','U',$fpdf);
				                $fpdf->write(6,' situated       	        in the Barangay of ');
				                Fstyle('                  , ','U',$fpdf);
				                $fpdf->write(6,' Municipality of ');
				                Fstyle('                  ,','U',$fpdf);
				                $fpdf->write(6, ' Province of Metro Manila,                        Island of Luzon, Philippines and containing an area of ');
				                Fstyle('                  ,','U',$fpdf);
				                $fpdf->write(6,' square meters sketch                  of which is drawn on the back hereof. ');
    	
				                $fpdf->Ln(10);
 
				$fpdf->write(6,'          2. My name is '); Fstyle('                                                           ,','U',$fpdf); $fpdf->write(6,' my age is '); Fstyle('                         ,','U',$fpdf); $fpdf->write(6,' years, my
								      birthplace is '); Fstyle('                          ,','U',$fpdf); $fpdf->write(6,' the date of my birth is	'); Fstyle('                                              ,','U',$fpdf); $fpdf->write(6,' I am a                   citizen of the Philippines and my post officeaddress is '); Fstyle('                                 ,','U',$fpdf); $fpdf->write(6,' I am (married,   single) and the name of my wife/husband is '); Fstyle('                                                   ,','U',$fpdf); $fpdf->write(6,' who is a
								      citizen of the Philippines. (If the applicant a married woman, a written consent of her
								      husband should be attached to her application).');

								$fpdf->Ln(10);

				$fpdf->write(6,'          3. I have been upon and examined the land applied for and it contains no improvement or
								      indication of occupation or settlement, except as follows:'); Fstyle('                                          ,','U',$fpdf); $fpdf->write(6,' and to                the best of my knowledge and belief, it is neither timber nor mineral land and contains no                   valuable deposit of guano, coal or salt.');

								$fpdf->Ln(10);

				$fpdf->write(6,'          4. This application is made in good faith for my exclusive benefit and use and not, either
								    directly or indirectly for the benefit or use of any other person, corporation, association or
								    partnership, but for the actual purpose of using the land solely for residential purposes,
								    for which I shall invest the sum of
								    '); Fstyle('                                 ,','U',$fpdf); $fpdf->write(6,' (P '); Fstyle('                                 ,','U',$fpdf); $fpdf->write(6,').');

								$fpdf->Ln(10);

				$fpdf->write(6,'          5. Then land applied for is/is not mortgage with the '); Fstyle('                           ,','U',$fpdf); $fpdf->write(6,'copy of the Deed of                       Mortgage of which is hereto attached.');
								
								$fpdf->Ln(10);

				$fpdf->write(6,'          6. The said lot is/is not tenanted by or leased to anybody, copy of the agreement of the                          tenants or lease of which is hereto attached.');

								$fpdf->Ln(10);

				$fpdf->write(6,'          7. I agree to conform to future delimitation, classification, survey or re-survey of the land
								      herein applied for and I shall before patent/deed of conveyance/deed of sale is issued to
								      me accept such portion or portions as may be assigned to me by the Director of Lands
								      as a result of such new delimitation classification, survey or re-survey.');

								$fpdf->Ln(10);

				$fpdf->write(6,'          8. I agree that a strip of forty meters wide starting from bank on each side of any river or
									  	  stream that may be found on the land shall be demarcated and preserved as permanent
									  	  timber land be planted exclusively to trees of known economic value, and I shall not
									  	  make any clearing thereon or utilized the same for ordinary farming purposes even after
									  	  patent shall have been issued to me. (NOTE: Not applicable if Land applied for is for
									  	  residential, industrial or commercial purposes).');
								
								$fpdf->Ln(10);

				$fpdf->write(6,'          9. I understand that this application conveys no right to occupy the land prior to the award
										    of the land to me; that the land is of the public domain and that any and all rights I may
										    have respect thereto by virtue of continuous occupation and cultivation are hereby
										    relinquished to the Government');
				
								$fpdf->Ln(10);

				$fpdf->write(6,'        10. I have read or someone has read to me, and I understand the provision of the Public
										    Land Act relating to the entering and granting through purchase of land of the public
										    domain of the Philippines and I will faithfully and honestly endeavor to comply with all the
										    requirements of the law on the subject or sale');
							
								$fpdf->Ln(10);

				$fpdf->write(6,'        11. I am '); Fstyle('                                 ','U',$fpdf); $fpdf->write(6,' a member, stockholder, officer, representative,
										    attorney, agent, employee or bondholder of the following corporations, association or
										    partnership which are engaged in agriculture and are holders of agricultural public lands
										    in the Philippines (give the name of the corporation, association or partnership, their
										    places of business and the amount of public land held by
										    them: '); Fstyle('                                         ','U',$fpdf); $fpdf->write(6,'. The said corporation, association or partnership has                        under its control a total area of'); Fstyle('                              ,','U',$fpdf); $fpdf->write(6,' hectare of public land by virtue of                           its '); Fstyle('                                 ,','U',$fpdf); $fpdf->write(6,'.');
							
								$fpdf->Ln(10);

				$fpdf->write(6,'        12. I understand that any applicant who willfully and knowingly submits false statement or
											   execute false affidavit in connection with this application shall be deemed guilty of
											   perjury and shall be punished accordingly and that any person who; not being qualified
											   to apply for public land, files an application or induces/permits another to file it in his
											   behalf shall be punished by a fine of not more than five thousand pesos and by
											   imprisonment for not more than five years or both and in addition thereto his application
											   shall be rejected or cancelled and all amounts paid on account thereof forfeited to the
											   Government, and he shall not be entitled to apply for any public land in the Philippines.');

								$fpdf->Ln(20);

			
			Ftitle('                                     ',$fontFamily,'U',$fontSize,'R',$br,$fpdf);	
			Ftitle('Signature of Applicant',$fontFamily,$fontStyle,$fontSize,'R',9,$fpdf);
			Ftitle('                                                                                              TIN: ',$fontFamily,$fontStyle,$fontSize,$align,0,$fpdf) . Ftitle('                               ',$fontFamily,'U',$fontSize,'R',7,$fpdf);

			$fpdf->Ln(40);
			Ftitle('A F F I D A V I T',$fontFamily,"U",$fontSize,$align,0,$fpdf);

			$fpdf->Ln(18);
			$fpdf->write(6,'Republic of the Philippines)');
			$fpdf->Ln(5);
			$fpdf->write(6,'Province of '); Fstyle('                ,','U',$fpdf); $fpdf->write(6,')S. S.');
			$fpdf->Ln(5);
			$fpdf->write(6,'Municipality of '); Fstyle('                  ,','U',$fpdf); $fpdf->write(6,')');
			$fpdf->Ln(18);

			$fpdf->write(6,'          I, '); Fstyle('                              ,','U',$fpdf); $fpdf->write(6,' the person making this application first having duly sworn upon both depose and say: That I have read or someone has read to me and I thoroughly understand the foregoing application; that I have and this affidavit in the presence of the officer who administered the oath; and that each and every
statement in the application is true and correct. SO HELP ME GOD.');
			$fpdf->Ln(18);
			
			Ftitle('                                                      ',$fontFamily,'U',$fontSize,'R',$br,$fpdf);	
			Ftitle('Applicant                  ',$fontFamily,$fontStyle,$fontSize,'R',9,$fpdf);
			$fpdf->Ln(10);

			$fpdf->write(6, '          Before me, at the place aforesaid, on this '); Fstyle('           ','U',$fpdf); $fpdf->write(6,' day of '); Fstyle('                   ,','U',$fpdf); $fpdf->write(6, date('Y').' personally
appeared '); Fstyle('                              ,','U',$fpdf); $fpdf->write(6,' known to be the person whose name appears in the foregoing
application and who subscribed and sworn to this affidavit. He/She exhibited to me his/her Res.
Cert. No. '); Fstyle('                              ','U',$fpdf); $fpdf->write(6,' Issued at '); Fstyle('                              ','U',$fpdf); $fpdf->write(6,' on the '); Fstyle('             ,','U',$fpdf); $fpdf->write(6,' day of'); Fstyle('                        ','U',$fpdf); $fpdf->write(6,'19'); Fstyle('   ','U',$fpdf); $fpdf->write(6,' which shown him/her on the date of said certificate to be'); Fstyle('                              ','U',$fpdf); $fpdf->write(6,'years old.');


			$fpdf->Ln(10);
			Ftitle('                                                                         ',$fontFamily,'U',$fontSize,'R',$br,$fpdf);	
			Ftitle('Officer authorized to administered oath     ',$fontFamily,$fontStyle,$fontSize,'R',9,$fpdf);
			$fpdf->Ln(10);


    }// end-form 2

    if($formNo == 3) {


    			Ftitle('Republic of the Philippines',$fontFamily,$fontStyle,$fontSize,$align,$br,$fpdf);
				Ftitle('Department of Environment and Natural Resources',$fontFamily,$fontStyle,$fontSize,$align,$br,$fpdf);
				Ftitle('NATIONAL CAPITAL REGION',$fontFamily,$fontStyle,14,$align,$br,$fpdf);
				Ftitle('Land Management Division',$fontFamily,$fontStyle,$fontSize,$align,$br,$fpdf);
				Ftitle('2nd Floor, L & S Bldg. 1515 Roxas boulevard',$fontFamily,$fontStyle,$fontSize,$align,$br,$fpdf);
				Ftitle('Ermita , Manila',$fontFamily,$fontStyle,$fontSize,$align,10,$fpdf);
				Ftitle('Note: This application must be submitted in duplicate, otherwise it will not be accepted',$fontFamily,'I',$fontSize,$align,10,$fpdf);
				Ftitle('MISCELLANEOUS SALES APPLICATION',$fontFamily,$fontStyle,14,$align,10,$fpdf);

				$fpdf->write(6,'Application No.');
				Fstyle('                       ','U',$fpdf);

				$fpdf->Ln(10);

				$fpdf->write(6,'    1. I HEREBY make application to purchase for agricultural, residential, commercial,
								industrial, charitable, educational or religious purpose under the provisions of Chapter V,
								IX, X or XI of Commonwealth Act No. 141 (Public Land Act), as amended; the following
								tract of public land (if the land is a subdivision or cadastral lot, mention the lot and survey
								number), Lot .');
				                Fstyle('                  ','U',$fpdf);
				                $fpdf->write(6,' Block No. ');
				                Fstyle('                ','U',$fpdf);
				                $fpdf->write(6,' Psd-');
				                Fstyle('                  ','U',$fpdf);
				                $fpdf->write(6,' Phase ');
				                Fstyle('                  ','U',$fpdf);
				                $fpdf->write(6,' Metro                    Manila, Island of Luzon, Philippines and containing an area of ');
				                Fstyle('                  , ','U',$fpdf);
				                $fpdf->write(6,' square meters                 sketch of which is drawn on the back hereof. ');
				                
				                $fpdf->Ln(10);

				$fpdf->write(6,'    2. My name is '); Fstyle('                                                           ,','U',$fpdf); $fpdf->write(6,' my age is '); Fstyle('                         ,','U',$fpdf); $fpdf->write(6,' years, my
								birthplace is '); Fstyle('                                                            ,','U',$fpdf); $fpdf->write(6,' the date of my birth is
								'); Fstyle('                                              ,','U',$fpdf); $fpdf->write(6,' I am a citizen of the Philippines and my post office
								address is '); Fstyle('                                 ,','U',$fpdf); $fpdf->write(6,' I am (married, single)
								and the name of my wife/husband is '); Fstyle('                                                   ,','U',$fpdf); $fpdf->write(6,' who is a
								citizen of the Philippines. (If the applicant a married woman, a written consent of her
								husband should be attached to her application).');

								$fpdf->Ln(10);

				$fpdf->write(6,'    3. I have been upon and examined the land applied for and it contains no improvement or
								indication of occupation or settlement,      except        as         follows:
								'); Fstyle('                                                   ,','U',$fpdf); $fpdf->write(6,' and to the best of my knowledge and belief,
								it is neither timber nor mineral land and contains no valuable deposit of guano, coal or
								salt.');

								$fpdf->Ln(10);

				$fpdf->write(6,'   4. This application is made in good faith for my exclusive benefit and use and not, either
								directly or indirectly for the benefit or use of any other person, corporation, association or
								partnership, but for the actual purpose of using the land solely for residential purposes,
								for which I shall invest the sum of	'); Fstyle('                                 ,','U',$fpdf); $fpdf->write(6,' (P '); Fstyle('                                 ,','U',$fpdf); $fpdf->write(6,').');

								$fpdf->Ln(10);

				$fpdf->write(6,'   5. Then land applied for is/is not mortgage with the '); Fstyle('                              ,','U',$fpdf); $fpdf->write(6,'copy of the Deed of                    Mortgage of which is hereto attached.');
								
								$fpdf->Ln(10);

				$fpdf->write(6,'   6. The said lot is/is not tenanted by or leased to anybody, copy of the agreement of the
								tenants or lease of which is hereto attached.');

								$fpdf->Ln(10);

				$fpdf->write(6,'   7. I agree to conform to future classification, survey or re-survey of the land herein applied for and         shall before patent/deed of conveyance/deed of sale to me accept such portion or portions as            may be assigned to me by the Director of Lands as a result of such new delimitation.');

								$fpdf->Ln(10);

				$fpdf->write(6,'   8. I agree that a strip of forty meters wide starting from back on the east side of any river or stream        that may be found on the land shall be demarcated and preserved as permanent timber land be        planted exclusively to trees or know economic value, and I shall not make any clearing thereon          or utilized the same for ordinary farming purposes even after patent shall have been issued to           me. (NOTE: Not applicable if Land applied for is for residential, industrial or commercial                      purposes).');
								
								$fpdf->Ln(10);

				$fpdf->write(6,'   9. I understand that this application conveys no right to occupy the land prior to the award
							of the land to me; that the land is of the public domain and that any and all rights I may
							have respect thereto by virtue of continuous occupation and cultivation are hereby
							relinquished to the government.');
				
								$fpdf->Ln(10);

				$fpdf->write(6,'  10. I have read or somebody has read to me; and I understand the provision of the Public
								Land Act relating to the entering and granting through purchase of land of the public
								domain of the Philippines and I will faithfully and honestly endeavor to comply with all the
								requirements of the law on the subject or sale.');
							
								$fpdf->Ln(10);

				$fpdf->write(6,'  11. I am '); Fstyle('                                 ','U',$fpdf); $fpdf->write(6,' a member, stockholder, officer, representative, attorney, agent, 
								employee or bondholder of the following corporations, association or partnership which are
								engaged in agriculture and are holder of agricultural public lands in the Phils. (give the name of
								the corporation, association or partnership, their places of business and the amount of public
								land held by  '); Fstyle('                                                                                                                             ','U',$fpdf);
								$fpdf->write(6,'              the said corporation, association or partnership has under its control a total area of                             ');
								Fstyle('                                         ,','U',$fpdf); $fpdf->write(6,' hectare of public land by virtue of its '); Fstyle('                                 ,','U',$fpdf); $fpdf->write(6,'.');
							
								$fpdf->Ln(10);

				$fpdf->write(6,'  12. I understand that any applicant who willfully and knowingly submits false statement or
								execute false affidavit in connection with this application shall be deemed guilty of
								perjury and shall be punished accordingly and that any person who; not being qualified
								to apply for public land, files an application or induces/permits another to file it in his
								behalf shall be punished by a fine of not more than five thousand pesos and by
								imprisonment for not more than five years or both and in addition thereto his application
								shall be rejected or cancelled and all amounts paid on account thereof forfeited to the
								Government, and he shall not be entitled to apply for any public land in the Philippines.');

								$fpdf->Ln(30);

			Ftitle('                                     ',$fontFamily,'U',$fontSize,'R',$br,$fpdf);	
			Ftitle('Signature of Applicant',$fontFamily,$fontStyle,$fontSize,'R',9,$fpdf);
			Ftitle('                                                                                              TIN: ',$fontFamily,$fontStyle,$fontSize,$align,0,$fpdf) . Ftitle('                               ',$fontFamily,'U',$fontSize,'R',7,$fpdf);

			$fpdf->Ln(20);
			Ftitle('A F F I D A V I T',$fontFamily,"U",$fontSize,$align,0,$fpdf);

			$fpdf->Ln(18);
			$fpdf->write(6,'Republic of the Philippines)');
			$fpdf->Ln(5);
			$fpdf->write(6,'Province of '); Fstyle('                ,','U',$fpdf); $fpdf->write(6,')S. S.');
			$fpdf->Ln(5);
			$fpdf->write(6,'Municipality of '); Fstyle('                  ,','U',$fpdf); $fpdf->write(6,')');
			$fpdf->Ln(18);

			$fpdf->write(6,'          I, '); Fstyle('                              ,','U',$fpdf); $fpdf->write(6,' the person making this
application first having duly sworn upon both depose and say: That I have read or someone
has read to me and I thoroughly understand the foregoing application; that I have and this
affidavit in the presence of the officer who administered the oath; and that each and every
statement in the application is true and correct. SO HELP ME GOD.');
			$fpdf->Ln(18);
			
			Ftitle('                                                      ',$fontFamily,'U',$fontSize,'R',$br,$fpdf);	
			Ftitle('Applicant                  ',$fontFamily,$fontStyle,$fontSize,'R',9,$fpdf);
			$fpdf->Ln(10);

			$fpdf->write(6, 'Before me, at the place aforesaid, on this '); Fstyle('           ','U',$fpdf); $fpdf->write(6,' day of '); Fstyle('                   ,','U',$fpdf); $fpdf->write(6, date('Y').' personally
appeared '); Fstyle('                              ,','U',$fpdf); $fpdf->write(6,' known to be the person whose name appears in the foregoing
application and who subscribed and sworn to this affidavit. He/She exhibited to me his/her Res.
Cert. No. '); Fstyle('                              ','U',$fpdf); $fpdf->write(6,' Issued at '); Fstyle('                              ','U',$fpdf); $fpdf->write(6,' on the '); Fstyle('             ,','U',$fpdf); $fpdf->write(6,' day of
'); Fstyle('                        ','U',$fpdf); $fpdf->write(6,' 19'); Fstyle('   ','U',$fpdf); $fpdf->write(6,' which shown him/her on the date of said certificate to be
'); Fstyle('                              ','U',$fpdf); $fpdf->write(6,'years old.');


			$fpdf->Ln(10);
			Ftitle('                                                                         ',$fontFamily,'U',$fontSize,'R',$br,$fpdf);	
			Ftitle('Officer authorized to administered oath     ',$fontFamily,$fontStyle,$fontSize,'R',9,$fpdf);
			$fpdf->Ln(10);


    }// end-form 3
    
    if($formNo == 4) {

    		$fpdf->Image('img/DENR.png', 28,4, 33.78);

    		Ftitle('Republic of the Philippines',$fontFamily,$fontStyle,$fontSize,$align,$br,$fpdf);
			Ftitle('Department of Environment and Natural Resources',$fontFamily,$fontStyle,$fontSize,$align,$br,$fpdf);
			Ftitle('NATIONAL CAPITAL REGION',$fontFamily,$fontStyle,14,$align,$br,$fpdf);
			$fpdf->Ln(10);
			Ftitle('APPLICATION FOR RESIDENTIAL FREE PATENT',$fontFamily,$fontStyle,14,$align,$br,$fpdf);
			$fpdf->Ln(10);

			$fpdf->write(6,'          Application No.:');
			Fstyle('                                            ','U',$fpdf);
			$fpdf->write(6,'                                 Enrty No.');
			Fstyle('                          ','U',$fpdf);
			$fpdf->Ln(10);

			$fpdf->write(6,'          Name of Applicant:');
			Fstyle('                                                                                                                ','U',$fpdf);
			$fpdf->write(6,'                  Mailing Address of Applicant:');
			Fstyle('                                                                                                ','U',$fpdf);

			$fpdf->write(6,'                  Citizenship:');
			Fstyle('                                ','U',$fpdf);
			$fpdf->write(6,'  Civil Status:');
			Fstyle('                                ','U',$fpdf);
			$fpdf->write(6,'  Sex:');
			Fstyle('                             ','U',$fpdf);
			$fpdf->write(6,'                  Age:');
			Fstyle('                                ','U',$fpdf);
			$fpdf->write(6,'  IF MINOR, name of legal guardian');
			Fstyle('                                              ','U',$fpdf);
			$fpdf->write(6,'                  Date of Birth:');
			Fstyle('                                               ','U',$fpdf);
			$fpdf->write(6,'  Place of Birth:');
			Fstyle('                                                  ','U',$fpdf);
			$fpdf->write(6,'                  Name of Spouce:');
			Fstyle('                                                                                                                   ','U',$fpdf);
			$fpdf->write(6,'                 Contact Nos.:');
			Fstyle('                                                                                                                         ','U',$fpdf);
			$fpdf->write(6,'                 Location of residential land applied for:'); $fpdf->Ln(2);
			Ftitle('             No./Street                                     Barangay                                              Municipality/City',$fontFamily,'I',$fontSize,'L',$br,$fpdf);
			$fpdf->Ln(7);
			$fpdf->write(6,'           ');
			Fstyle('                                     ','U',$fpdf);
			$fpdf->write(6,'           ');
			Fstyle('                                      ','U',$fpdf);
			$fpdf->write(6,'              ');
			Fstyle('                                         ','U',$fpdf);  $fpdf->Ln(10);
			$fpdf->write(6,'          Description of residential land applied for:'); $fpdf->Ln(2);
			Ftitle('             Lot #                             Block #                            Survey #                           Area (Sq.M.)',$fontFamily,'I',$fontSize,'L',$br,$fpdf);
			$fpdf->Ln(7);
			$fpdf->write(6,'           ');
			Fstyle('                          ','U',$fpdf);
			$fpdf->write(6,'        ');
			Fstyle('                             ','U',$fpdf);
			$fpdf->write(6,'       ');
			Fstyle('                            ','U',$fpdf);
			$fpdf->write(6,'           ');
			Fstyle('                             ','U',$fpdf); $fpdf->Ln(10);
			$fpdf->write(6,'          Applicants predecessor-in-interest (if Any) : '); Fstyle('                                                                       ','U',$fpdf);
			$fpdf->Ln(10); $fpdf->write(6,'          Date of entry by applicant or predecessor-in-interest upon the residential land applied for: (on            or about) '); Fstyle('                                                          ','U',$fpdf); $fpdf->write(6,'.');
			$fpdf->Ln(10);
			$fpdf->write(6,'                        I declare, under the penalties of perjury, that my total land holdings are not more than          12 hectares and that this application has been made in good faith and to the best of my 
				      knowledge all information contained herein are true and correct.');

			$fpdf->Ln(25); $fpdf->write(6,'                                                                                                  '); Fstyle('                                                              ','U',$fpdf);
			$fpdf->write(6,'                                                                                                       Applicants Name and Signature');
			$fpdf->Ln(10); $fpdf->write(5,'                                                                                                   CTC/I.D. No. : '); Fstyle('                                      ','U',$fpdf);
			$fpdf->write(5,'                                                                                                   Issued On     : '); Fstyle('                                      ','U',$fpdf);
			$fpdf->write(5,'                                                                                                   Issued At      : '); Fstyle('                                      ','U',$fpdf);
			$fpdf->Ln(50); $fpdf->write(6,'                            ');
			$fpdf->Ln(30); $fpdf->write(6,'                           SUBSCRIBED           AND           SWORN      TO      before     me this '); Fstyle('                 ','U',$fpdf);
			$fpdf->write(6,'                day of  '); Fstyle('                                         ','U',$fpdf);
			$fpdf->write(6,' at '); Fstyle('                                                   ','U',$fpdf); $fpdf->write(6,' .');
			$fpdf->Ln(25); $fpdf->write(6,'                                                                                                   '); Fstyle('                                                           ','U',$fpdf);
			$fpdf->write(6,'                                                                                                                   Office Authorized to 
				                                                                                                                Administer Oath');
			$fpdf->Ln(20);  $fpdf->write(2,'           This form is not for sale');
			$fpdf->Ln(5); $fpdf->write(6,'		    					This form must be accomplished in five (5) copies.');

    }// end-form 4


    if($formNo == 5) {

    		$fpdf->Image('img/DENR_Logo.png', 28, 7 , 26);

    		Ftitle('Republic of the Philippines',$fontFamily,$fontStyle,$fontSize,$align,$br,$fpdf);
			Ftitle('Department of Environment and Natural Resources',$fontFamily,$fontStyle,$fontSize,$align,$br,$fpdf);
			Ftitle('NATIONAL CAPITAL REGION',$fontFamily,$fontStyle,14,$align,$br,$fpdf);
			Ftitle('2nd Flr. L. & S. Bldg. Ermita, Manila',$fontFamily,$fontStyle,$fontSize,$align,$br,$fpdf);
			$fpdf->Ln(10);
			Ftitle('APPLICATION FOR PERMIT AND ACCEPTANCE OF CONDITIONS',$fontFamily,"U",$fontSize,$align,0,$fpdf);

			$fpdf->Ln(20);

			$fpdf->write(4 ,'    1. I, the undersigned, hereby take application, pursuant to the provitions of Act No. 3077 and the 
								Bureau of Lands Administrative order No.8, as amended, for a permit to temporarily or                       provisionally occupy and use for    ');
				                Fstyle('                            ','U',$fpdf);
				                $fpdf->write(6,'purposes the tract of Land located in the             Barrio of  ','U',$fpdf);
				                Fstyle('                          ','U',$fpdf);
				                $fpdf->write(6,'  Municipality of  ','U',$fpdf);
				                Fstyle('                            ','U',$fpdf);
				                $fpdf->write(6,' Province of  ','U',$fpdf);
				                Fstyle('                              ','U',$fpdf);
				                $fpdf->write(6,'             containing approximately an area of   ','U',$fpdf);
				                Fstyle('                                   ','U',$fpdf);
				                $fpdf->write(6,'             square meters bounded as         follows:   ','U',$fpdf);
				                $fpdf->Ln(10);

				                $fpdf->write(6,'                        (If the land corresponds to a lot in a cadastre or subdivision, mention the lot number
				                						as well as the number of the cadastre or subdivision)','U',$fpdf);
    							$fpdf->Ln(10);
    							$fpdf->write(6,'        The land is covered by my Revocable Permit Application No.','U',$fpdf);
    							Fstyle('                        ','U',$fpdf);
    							$fpdf->write(6,'  I shall use the               land for ','U',$fpdf);
    							Fstyle('                                                                               .','U',$fpdf);
    							$fpdf->Ln(10);

    		$fpdf->write(4,'    2. I make this application for my exclusive benefit and not for the benefit of any other person; and 
    			 I shall not lease or sublease the land applied for and/or the improvements thereon to any other 
    			 person nor shall allow such other person to derive benefits therefrom either directly or                        indirectly.','U',$fpdf);

    		$fpdf->Ln(10);

    		$fpdf->write(4,'    3. To show that I possess the qualifications required by law, the following statements of facts is              submitted.','U',$fpdf);
    		$fpdf->Ln(10);

    		$fpdf->write(6,'    4. My name is  ','U',$fpdf);
    		Fstyle('                                    ','U',$fpdf);
    		$fpdf->write(6,'    my age is  ','U',$fpdf);
    		Fstyle('                 ','U',$fpdf);
    		$fpdf->write(6,'    years;    I was born in ','U',$fpdf);
    		Fstyle('                  ','U',$fpdf);
    		$fpdf->write(6,'        ; and employed in   ','U',$fpdf);
    		Fstyle('                                    ','U',$fpdf);
    		$fpdf->write(6,'      I am a citizen of  ','U',$fpdf);
    		Fstyle('                                    ','U',$fpdf);
    		$fpdf->write(6,' , my                post office address is  ','U',$fpdf);
    		Fstyle('                                    ','U',$fpdf);
    		$fpdf->write(6,'     , I am married/single and the name of my                  wife/husband is  ','U',$fpdf);
    		Fstyle('                                    ','U',$fpdf);
    		$fpdf->write(6,'     , who is a citizen of  ','U',$fpdf);
    		Fstyle('                                    ','U',$fpdf);
    		$fpdf->write(6,';','U',$fpdf);
    		$fpdf->Ln(10);

    		$fpdf->write(6,'    5. I am ','U',$fpdf); 
    		Fstyle('                                                ','U',$fpdf);
    		$fpdf->write(6,'    ; holder of ','U',$fpdf); 
    		Fstyle('                                                ','U',$fpdf);
    		$fpdf->write(6,' other                          applications for public land. They are as follows: ','U',$fpdf); 
    		Fstyle('                                                       ','U',$fpdf);
    		$fpdf->write(6,'','U',$fpdf);
    		$fpdf->Ln(10);

    		$fpdf->write(6,'    6. I have read the instruction and conditions specified in this application and hereby undertake to
    			abide by then as well as the provisions of the aforesaid Administrative Order No. 8, as                        amended, under which the permit is to be issued and I promise to comply with all the laws and 
    			regulations governing the occupation and use of public lands. THIS APPLICATION MAY                    THEREFORE BE CONSIDERED AS MY ACCEPTANCE OF THE CONDITIONS
    			PRESCRIBED BY EXISTING LAW, RULES AS WELL AS THOSE OTHERS WHICH TO                    PROTECT PUBLIC	INTEREST, MAY BE PROPSED BY THE MINISTER OF NATURAL 
    			RESOURCES OR THE DIRECTOR OF LANDS AND EXPRESSLY STATED ON THE BACK             HEREOF AND THE PERMIT TO BE ISSUED.  ','U',$fpdf);
    		$fpdf->Ln(20);
    		
    		Ftitle('                                     ',$fontFamily,'U',$fontSize,'R',$br,$fpdf);	
			Ftitle('(Signature of Applicant)',$fontFamily,$fontStyle,$fontSize,'R',9,$fpdf);
			$fpdf->write(5,'                                                                                       				          Address:','U',$fpdf);
    		Fstyle('                                    ','U',$fpdf);
    		$fpdf->write(6,'                                                                                       				          Tax Payer acct. No.','U',$fpdf);
    		Fstyle('                                    ','U',$fpdf);
    		$fpdf->Ln(10);
    
    		$fpdf->write(6,'      WITNESSES:','U',$fpdf);
    		$fpdf->Ln(5);
    		$fpdf->write(6,'            1.  ','U',$fpdf); Fstyle('                                             ','U',$fpdf); $fpdf->write(6,'  Address : '); Fstyle('                                                   ','U',$fpdf);
   			$fpdf->Ln(5); $fpdf->write(6,'            2.  ','U',$fpdf); Fstyle('                                             ','U',$fpdf); $fpdf->write(6,'  Address : '); Fstyle('                                                   ','U',$fpdf);
   			$fpdf->Ln(10); $fpdf->write(6,'                Subscribe and sworn to before me this '); Fstyle('         ','U',$fpdf); $fpdf->write(6,' day of '); Fstyle('                                   ','U',$fpdf); 
   			$fpdf->write(6,' 20 '); Fstyle('   ','U',$fpdf); $fpdf->write(6,' in '); Fstyle('          ','U',$fpdf);
   			$fpdf->write(6,'.                 Affiant exhibited to me his/her Res. Cert. No. '); Fstyle('                                   ','U',$fpdf);
   			$fpdf->write(6,' issued on '); Fstyle('                  ','U',$fpdf); $fpdf->write(6,'                  in '); Fstyle('                                                ','U',$fpdf); $fpdf->write(6,' .');
   			$fpdf->Ln(20); $fpdf->write(6,'                                                                                             '); Fstyle('                                                      ','U',$fpdf);
   			$fpdf->Ln(5); $fpdf->write(6,'                                                                                                       Administering Officer');
   			$fpdf->Ln(20); $fpdf->write(6,'              ');
   			$fpdf->Ln(20);
   			Ftitle('CONDITIONS UNDER WHICH THIS PERMIT IS ISSUED',$fontFamily,$fontStyle,$fontSize,'C',1,$fpdf);
   			Ftitle('                                                                                             ',$fontFamily,'U',$fontSize,'C',$br,$fpdf);	
   			$fpdf->Ln(10);

   			$fpdf->write(6,'            1. This application is not made for the benefit of any person other than the applicant.');
   			$fpdf->Ln(10); 
   			$fpdf->write(6,'            2. The Permit is to issued under the conditions prescribed by Administrative Order No. 9, as                   amended, and such additional conditions as the Minister of Natural Resources or the 
   				         Director of Lands may deem necessary according to attending circumstances or to protect                 public interests, which special conditions shall be expressly stated in, and made a part of                   the permit.');
   			$fpdf->Ln(10); 
   			$fpdf->write(6,'            3. The permittee shall occupy and use the land subject of the permit to the use fro which the                  permit is to issued within two months from the date of the permit upon the penalty of
   			          losing his right over the land through the cancellation of the permit, accompanied by the 
   			          forfeiture of fees paid for failure to occupy and use the land within the period herewith                         allowed.');
   			$fpdf->Ln(10); 
   			$fpdf->write(6,'            4. No building or structure shall be constructed or erected on the land without its plan and
   			          construction having been previously approved by the corresponding authorities in 
   			          accordance with local ordinance, which building or structure shall be temporarily and 
   			          easily removable at the expense of the permitee. In all cases even if the building or 
   			          structure is temporary, the building therefore must first be secured.');
   			$fpdf->Ln(20); 
   			$fpdf->write(6,'            5. The permit is not transferable and neither the land nor the improvements thereon shall be 
   				          leased, transferred, sold, conveyed, mortgaged, or in any manner encumbered or
   				          assigned without the written consent of the Minister of Natural Resources, the Assistant 
   				          Secretary of the Director of Lands, as the case may be, which consent may be given only                  IF WHEN THE SAID PERMIT IS STILL SUBSISTING OR WHEN THE PERIOD 
   				          WHERE OF HAS NOT YET EXPIRED, and after if has been found that the said transfer 
   				          has not been made for the purposes of speculation and that all permit fees have been                        paid up to the date of approval. IN THE EVENT THAT THE PERMIT HAS ALREADY
   				          EXPIRED NO TRANSFER OR ASSIGNMENT SHALL BE ALLOWED BUT THE 
   				          APPLICATION SHALL ONLY BE RECORDED IN THE NAME OF THE NEW 
   				          APPLICANT WHO DESIRES TO SUCCEED THE ORIGINAL PERMITEE. In any case of 
   				          the transfer or assignment, the transfer and the transferee shall be held jointly and 
   				          severally liable for any arrears in the payment of the permit fees by the transferor.');
   			$fpdf->Ln(10); 
   			$fpdf->write(6,'            6. Should the permit be cancelled by reason of the failure of the permittee to pay the permit 
   				         fees, all improvements shall be forfeited to the Government.');
   			$fpdf->Ln(10); 
   			$fpdf->write(6,'            7. Upon discovery, the permittee shall immediately notify in writing the Director of Lands of 
   				         the existence in the land of any gold, silver, copper, or other substances containing 
   				         minerals, guano, precious stones, coal or coal oil, and he/she not take or remove nor offer                 others to take remove from the place any quantity of the said project.');
   			$fpdf->Ln(10); 
   			$fpdf->write(6,'            8. Two permit is subject to the favorable recommendations of the District Engineer, the
   										   General Manager of the Philippine Ports Authority, and further findings of the District Land                 Officer concerned, the said recommendation and findings are necessary but were not 
   										   available and were therefore not considered at the time of the issuance of the permit.');
   			$fpdf->Ln(10); 
   			$fpdf->write(6,'            9. Persons holdings licenses issued by the Bureau of Forest Development shall have rights if                 way on the land and also the right out, collect and remove timber thereon.');
   			$fpdf->Ln(10); 
   			$fpdf->write(6,'           10. Any timber growing on the land shall not be cut or disposed of for commercial purposes                    without license from the Bureau of Forest Development.');
   			$fpdf->Ln(10); 
   			$fpdf->write(6,'           11. The land covered by the permit and/or any improvement that may be constructed thereon                 shall be used exclusively by the applicant himself. It case it is found out that the land/or 
   												 improvements are used by any person other than the permittee without written consent or 
   												 approval of the Director of Lands or of the Minister of Natural Resources, the permit shall 
   												 be cancelled and the improvements on the land covered thereby, forfeited in favor of the 
   												 Government.');




    }// end-form 5


}// end-land 


$fpdf->Output();
?>
