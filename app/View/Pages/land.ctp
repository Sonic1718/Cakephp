<?php
if(isset($model)){
	echo $model;
}
?>

<!-- For Land -->
	<?php if ( $this->params['pass'][0] == 1 ) { ?>
		<div class="col-lg-12">
		  <div class="container"><br>
		   <?php
		    if ($this->Session->flash('good')) {
		    	$this->Session->flash('good');
		    }
		   ?>
		  <div class="col-lg-12">
		   <h3>Agricultural, Foreshore, Reclaimed Land or Miscellaneous Lease Application</h3>
		  </div>
		  <div class="col-lg-4">
			<div class="form-group">
			  <br>
			  <?= $this->Form->create('Landagri'); ?>
			  <br>1.
			  <?= $this->Form->input('period',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('tract',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('barrio',array('class'=>'form-control'));?>
			  <?= $this->Form->input('municipality',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('province',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('area',array('class'=>'form-control')); ?>
			  <br>2.
			  <?= $this->Form->input('name',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('age',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('birth-place',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('citizen',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('post-address',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('spouse',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('spouse-citizen',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('beneficial',array('class'=>'form-control')); ?>
			  <br>3.
			  <?= $this->Form->input('applied',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('purposed',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('kinds-of-purposed',array('class'=>'form-control')); ?>
			  <br>7.
			  <?= $this->Form->input('your-position',array('class'=>'form-control')); ?>
			  <br>
			  <?= $this->Form->submit('Submit',array('class'=>'btn btn-default')); ?>
			  <?= $this->Form->end(); ?>
		  	</div>
		   </div>
		   <div class='col-lg-8' style='border:1px solid #AAA;'>
                <br>
                DENR Form
						<br><div style='text-align:center; font-size:13px;'>
						               Republic of the Philippines<br>
							    Department of Environment and Natural Resources<br><br>
						            AGRICULTURAL, FORESHORE, RECLAIMED LAND<br> 
						              OR MISCELLANEOUS LEASE APPLICATION
			           		</div>

			            <div style='text-align:right;'><span>Entry No. <u> <?php echo $entryNo; ?></u></span></div><br>

			        <ol>
			          <li>The undersigned hereby makes application under the provisions of Chapters VI and IX of
                          Commonwealth Act 141, as amended, to lease for a period of <u id='period'></u> years the tract of
                          land as described as follows:<br>
                          <u id='tract'> </u><br>
                          situated in the Barrio of <u id='barrio'> </u>, Municipality of <u id='municipal'></u> Province of
                          <u id='provi'></u>, Philippines, containing an area of <u id='area'></u>, the shape and
                          dimension of said tract being indicated in the sketch drawn on the back of the application.<br><br>
                      </li>
                      <li>
                          My name is <u id='name'></u>, my age is <u id='age'></u> years; the place of my birth is
                          <u id='b-place'></u>, I am a citizen of <u id='citi'></u> and my post office address is
                          <u id='p-addres'></u>; I am married, single, and the name of my wife/husband is
                          <u id='spouse'></u> who is a citizen of <u id='spouse-c'></u> I am not employed in the government service. (If a
                          government employee, he should attach to this application permission in writing of the head of
                          the Department under which he is working). I possess funds and personal property as follows.
                          With which I expect to put into beneficial use the land applied for within the period fixed by law:<br>
                          <u id='bene'></u> - (If the applicant is a
                          corporation or association, attach a certified copy of the articles of incorporation or copartnership
                          and evidence of its having been authorized to transact business in the Philippines.)<br><br>
                      </li>

                      <li>
                          I have examined the land applied for, and it contains no improvement or indication of
						  occupation and settlement, except as follows:
						  <u id='applied'></u> and to the best of my knowledge and belief, it is
						  neither timber nor mineral land and contains no guano or any deposit of salts or coal.
						  The following improvements are proposed to be made on the land applied for, the same to be
						  used solely for <u id='purposed'></u> purposes. (State kind and approximate value of proposed
						  improvements, such as houses, warehouses, factories, wharves, docks, piers, etc. (If the land will
						  be devoted for agricultural purposes, state the crop to be raised.) <u id='kop'></u><br><br>
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
                          I a <u id='your-positon'></u> a member, stockholder, officer, representative, attorney, agent, employee or
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
 					<div style='text-align:right;'>Signature of Applicant&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>

 				    <script type="text/javascript">
   						$(document).ready(function(){
   							$('#LandagriPeriod').keyup(function(){
   								$('#period').text($(this).val());
   							});

  							$('#LandagriPeriod').focusout(function(){
   								$('#period').text($(this).val());
   							});

   							$('#LandagriTract').keyup(function(){
   								$('#tract').text($(this).val());
   							});

   							$('#LandagriTract').focusout(function(){
   								$('#tract').text($(this).val());
   							});

   							$('#LandagriBarrio').keyup(function(){
   								$('#barrio').text($(this).val());
   							});

   							$('#LandagriBarrio').focusout(function(){
   								$('#barrio').text($(this).val());
   							});

   							$('#LandagriMunicipality').keyup(function(){
   								$('#municipal').text($(this).val());
   							});

							$('#LandagriMunicipality').focusout(function(){
   								$('#municipal').text($(this).val());
   							});  

   							$('#LandagriProvince').keyup(function(){
   								$('#provi').text($(this).val());
   							});

   							$('#LandagriProvince').focusout(function(){
   								$('#provi').text($(this).val());
   							});

   							$('#LandagriArea').keyup(function(){
   								$('#area').text($(this).val());
   							});

   							$('#LandagriArea').focusout(function(){
   								$('#area').text($(this).val());
   							});

   							$('#LandagriName').keyup(function(){
   								$('#name').text($(this).val());
   							});

   							$('#LandagriName').focusout(function(){
   								$('#name').text($(this).val());
   							});

   							$('#LandagriAge').keyup(function(){
   								$('#age').text($(this).val());
   							});

   							$('#LandagriAge').focusout(function(){
   								$('#age').text($(this).val());
   							});

   							$('#LandagriBirth-place').keyup(function(){
   								$('#b-place').text($(this).val());
   							});

   							$('#LandagriBirth-place').focusout(function(){
   								$('#b-place').text($(this).val());
   							});

   							$('#LandagriCitizen').keyup(function(){
   								$('#citi').text($(this).val());
   							});

   							$('#LandagriCitizen').focusout(function(){
   								$('#citi').text($(this).val());
   							});

   							$('#LandagriPost-address').keyup(function(){
   								$('#p-addres').text($(this).val());
   							});

   							$('#LandagriPost-address').focusout(function(){
   								$('#p-addres').text($(this).val());
   							});

   							$('#LandagriSpouse').keyup(function(){
   								$('#spouse').text($(this).val());
   							});

   							$('#LandagriSpouse').focusout(function(){
   								$('#spouse').text($(this).val());
   							});

   							$('#LandagriSpouse-citizen').keyup(function(){
   								$('#spouse-c').text($(this).val());
   							});

   							$('#LandagriSpouse-citizen').focusout(function(){
   								$('#spouse-c').text($(this).val());
   							});

   							$('#LandagriBeneficial').keyup(function(){
   								$('#bene').text($(this).val());
   							});

   							$('#LandagriBeneficial').focusout(function(){
   								$('#bene').text($(this).val());
   							});

   							$('#LandagriApplied').keyup(function(){
   								$('#applied').text($(this).val());
   							});

   							$('#LandagriApplied').focusout(function(){
   								$('#applied').text($(this).val());
   							});

   							$('#LandagriPurposed').keyup(function(){
   								$('#purposed').text($(this).val());
   							});

   							$('#LandagriPurposed').focusout(function(){
   								$('#purposed').text($(this).val());
   							});

   							$('#LandagriKinds-of-purposed').keyup(function(){
   								$('#kop').text($(this).val());
   							});

   							$('LandagriKinds-of-purposed').focusout(function(){
   								$('#kop').text($(this).val());
   							});

   							$('LandagriYour-position').keyup(function(){
   								$('#your-positon').text($(this).val());
   							});
							   
							$('LandagriYour-position').focusout(function(){
   								$('#your-positon').text($(this).val());
   							});		
							   					
   						});
 				    </script>
			       <br>
			       <br>
			       <br>
 		   </div>
		  </div>
		  <br>
		  <br>
		  <br>
		  <br>
		</div>
	<?php } ?>

	<?php if ( $this->params['pass'][0] == 2 ) { ?>
		<div class="col-lg-12">
		  <div class="container"><br>
		  <div class="col-lg-12">
		   <h3>Insular Government Property Sales Application</h3>
		  </div>
		  <div class="col-lg-4">
			<div class="form-group">
			  <br>
			  <?= $this->Form->create('Landin'); ?> 
			  <?= $this->Form->input('idform',array('type'=>'hidden','value'=>2)) ?>
			  <br>1.
			  <?= $this->Form->input('lot',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('block',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('psd',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('phase',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('barangay',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('municipality',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('area',array('class'=>'form-control')); ?>
			  <br>2.
			  <?= $this->Form->input('name',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('age',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('birthplace',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('birth-date',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('post-address',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('spouse-name',array('class'=>'form-control')); ?>
			  <br>3.
			  <?= $this->Form->input('land-applied',array('class'=>'form-control')); ?>
			  <br>4.
			  <?= $this->Form->input('investment-fee',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('total-investment',array('class'=>'form-control')); ?>
			  <br>5.
			  <?= $this->Form->input('not-mortgage',array('class'=>'form-control')); ?>
			  <br>11.
			  <?= $this->Form->input('position',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('corporation-name',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('total-hectare',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('land-virtue',array('class'=>'form-control')); ?>
			  <br>Applicant Tin No.
			  <?= $this->Form->input('tin',array('class'=>'form-control')); ?>
			  <br>Affidavit Information
			  <?= $this->Form->input('province',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('municipalityy',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('your-name',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('applicant-name',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('day',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('month',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('years',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('person-appeared',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('certificate-no',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('issued-at',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('issued-day',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('issued-month',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('issued-year',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('certificate-old',array('class'=>'form-control')); ?>
			  <br>
			  <?= $this->Form->submit('Submit',array('class'=>'btn btn-default')); ?>
			  <?= $this->Form->end(); ?>
		  	</div>
		   </div>

		   <div class="col-lg-8" >
		    <div class="col-lg-12" style="border:1px solid #AAA;">
		      <div style='text-align:center;'><br>
	   			            Republic of the Philippines<br>
					Department of Environment and Natural Resources<br>
					          NATIONAL CAPITAL REGION<br>
					         Land Management Division<br>
					2nd Floor, L & S Bldg. 1515 Roxas boulevard<br>
	   							    Ermita, Manila
	   			</div><br><br>

	   			<div style='text-align:center;'>Note: <i>This application must be submitted in duplicate, otherwise it will not be accepted.</i></div>

	   			<br><div style='text-align:center; font-size:20px;'>INSULAR GOVERNMENT PROPERTY SALES APPLICATION</div>

	   			<br><div>Application No. <u></u></div><br>

	   			<ol>
	   			   <li>
	   			       I HEREBY make application to purchase for agricultural, residential, commercial,
					   industrial, charitable, educational or religious purpose under the provisions of Chapter V,
					   IX, X or XI of Commonwealth Act No. 141 (Public Land Act), as amended; the following
					   tract of public land (if the land is a subdivision or cadastral lot, mention the lot and survey
					   number), Lot .<u id='lot'></u> Block No. <u id='block'></u> Psd-<u id='psd'></u>,
					   Phase<u id='phase'></u> situated in the Barangay of <u id='barangay'></u>, Municipality of
					   <u id='municipal'></u>, Province of Metro Manila, Island of Luzon, Philippines and containing an
					   area of <u id='area'></u>square meters sketch of which is drawn on the back hereof.<br><br>
	   			   </li>
	   			   <li>
	   			        My name is <u id='name'></u>, my age is <u id='age'></u> years, my
						birthplace is <u id='birthplace'></u>, the date of my birth is
						<u id='birth-date'></u>. I am a citizen of the Philippines and my post office
						address is <u id='post-address'></u>, I am (married, single)
						and the name of my wife/husband is <u id='spouse'></u>, who is a
						citizen of the Philippines. (If the applicant a married woman, a written consent of her
						husband should be attached to her application).<br><br>
	   			   </li>
	   			   <li>
	   			   		I have been upon and examined the land applied for and it contains no improvement or
						indication of occupation or settlement, except as follows:
						<u id='applied'></u> and to the best of my knowledge and belief,
						it is neither timber nor mineral land and contains no valuable deposit of guano, coal or
						salt.<br><br>
	   			   </li>
	   			   <li>
					    This application is made in good faith for my exclusive benefit and use and not, either
						directly or indirectly for the benefit or use of any other person, corporation, association or
						partnership, but for the actual purpose of using the land solely for residential purposes,
						for which I shall invest the sum of
						<u id='investment-fee'></u>(P<u id='total-investment'></u>).<br><br>
	   			   </li>
	   			   <li>
						Then land applied for is/is not mortgage with the <u id='not-mortgage'></u>
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
	   			   	    I am <u id='position'></u> a member, stockholder, officer, representative,
					    attorney, agent, employee or bondholder of the following corporations, association or
					    partnership which are engaged in agriculture and are holders of agricultural public lands
					    in the Philippines (give the name of the corporation, association or partnership, their
					    places of business and the amount of public land held by
					    them:<u id='corporation-name'></u>
					    . The said corporation, association or partnership has under its control a total area of
					    <u id='total-hectare'></u> hectare of public land by virtue of its.<br><br>
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
 																									<div style='text-align:right;'>TIN: <u id='tin'></u></div>
 	            <br>
 	            <br>
 	            </div>
 	           <div class="col-lg-12" style="border:1px solid #AAA; margin-top:40px;">
 			   <br>
 			   <div style='text-align:center; font-size:19px;'><u>A</u> <u>F</u> <u>F</u> <u>I</u> <u>D</u> <u>A</u> <u>V</u> <u>I</u> <u>T</u></div>																		
			   
 			   <br>
			   <div>
			   		Republic of the Philippines)<br>
					Province of <u id='province'></u>)S. S.<br>
					Municipality of <u id='municipalityy'></u>)<br><br>
				</div>

				<div style='text-indent:50px;'>
									I, <u id='your-name'></u> the person making this
					application first having duly sworn upon both depose and say: That I have read or someone
					has read to me and I thoroughly understand the foregoing application; that I have and this
					affidavit in the presence of the officer who administered the oath; and that each and every
					statement in the application is true and correct. SO HELP ME GOD.
				</div><br><br><br>
			       
			       																					<div style='text-align:right;'><u id='applicant-name'></u></div>
 																									<div style='text-align:right;'>Applicant&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>

 				<br><br><br><div style='text-indent:50px;'>
 									Before me, at the place aforesaid, on this <u id='day'></u> day of <u id='month'></u>, 20<u id='years'></u> personally
					appeared <u id='person-appeared'></u>, known to be the person whose name appears in the foregoing
					application and who subscribed and sworn to this affidavit. He/She exhibited to me his/her Res.
					Cert. No. <u id='certificate-no'></u> Issued at <u id='issued-at'></u> on the <u id='issued-day'></u> day of
					<u id='issued-month'></u>, 19<u id='issued-year'></u> which shown him/her on the date of said certificate to be
					<u id='certificate-old'></u>years old.
 				</div>

 																									<br><br><br><br><br>					
 				    																			    <div style='text-align:right;'>___________________________________________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
 																									<div style='text-align:right;'>Officer authorized to administered oath&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
		   </div>																					
			   	<script type="text/javascript">
			   		$(document).ready(function(){
			   			
			   			$('#LandinLot').keyup(function(){
   							$('#lot').text($(this).val());
   						});

  						$('#LandinLot').focusout(function(){
   							$('#lot').text($(this).val());
   						});

   						$('#LandinBlock').keyup(function(){
   							$('#block').text($(this).val());
   						});

   						$('#LandinBlock').focusout(function(){
   							$('#block').text($(this).val());
   						});

						$('#LandinPsd').keyup(function(){
   							$('#psd').text($(this).val());
   						});

						$('#LandinPsd').focusout(function(){
	 						$('#psd').text($(this).val());
	   					});


	   					$('#LandinPhase').keyup(function(){
   							$('#phase').text($(this).val());
   						});

						$('#LandinPhase').focusout(function(){
	 						$('#phase').text($(this).val());
	   					});

	   					$('#LandinBarangay').keyup(function(){
   							$('#barangay').text($(this).val());
   						});

						$('#LandinBarangay').focusout(function(){
	 						$('#barangay').text($(this).val());
	   					});

	   					$('#LandinMunicipality').keyup(function(){
   							$('#municipal').text($(this).val());
   						});

						$('#LandinMunicipality').focusout(function(){
	 						$('#municipal').text($(this).val());
	   					});

	   					$('#LandinArea').keyup(function(){
   							$('#area').text($(this).val());
   						});

						$('#LandinArea').focusout(function(){
	 						$('#area').text($(this).val());
	   					});

	   					$('#LandinName').keyup(function(){
   							$('#name').text($(this).val());
   						});

						$('#LandinName').focusout(function(){
	 						$('#name').text($(this).val());
	   					});

	   					$('#LandinAge').keyup(function(){
   							$('#age').text($(this).val());
   						});

						$('#LandinAge').focusout(function(){
	 						$('#age').text($(this).val());
	   					});

	   					$('#LandinBirthplace').keyup(function(){
   							$('#birthplace').text($(this).val());
   						});

						$('#LandinBirthplace').focusout(function(){
	 						$('#birthplace').text($(this).val());
	   					});

	   					$('#LandinBirth-date').keyup(function(){
   							$('#birth-date').text($(this).val());
   						});

						$('#LandinBirth-date').focusout(function(){
	 						$('#birth-date').text($(this).val());
	   					});

	   					$('#LandinPost-address').keyup(function(){
   							$('post-address').text($(this).val());
   						});

						$('#LandinPost-address').focusout(function(){
	 						$('#post-address').text($(this).val());
	   					});

	   					$('#LandinSpouse-name').keyup(function(){
   							$('#spouse').text($(this).val());
   						});

						$('#LandinSpouse-name').focusout(function(){
	 						$('#spouse').text($(this).val());
	   					});

	   					$('#LandinLand-applied').keyup(function(){
   							$('#applied').text($(this).val());
   						});

						$('#LandinLand-applied').focusout(function(){
	 						$('#applied').text($(this).val());
	   					});

	   					$('#LandinInvestment-fee').keyup(function(){
   							$('#investment-fee').text($(this).val());
   						});

						$('#LandinInvestment-fee').focusout(function(){
	 						$('#investment-fee').text($(this).val());
	   					});

	   					$('#LandinTotal-investment').keyup(function(){
   							$('#total-investment').text($(this).val());
   						});

						$('#LandinTotal-investment').focusout(function(){
	 						$('#total-investment').text($(this).val());
	   					});

	   					$('#LandinNot-mortgage').keyup(function(){
   							$('#not-mortgage').text($(this).val());
   						});

						$('#LandinNot-mortgage').focusout(function(){
	 						$('#not-mortgage').text($(this).val());
	   					});

						$('#LandinPosition').keyup(function(){
   							$('#position').text($(this).val());
   						});

						$('#LandinPosition').focusout(function(){
	 						$('#position').text($(this).val());
	   					});

	   					$('#LandinCorporation-name').keyup(function(){
   							$('#corporation-name').text($(this).val());
   						});

						$('#LandinCorporation-name-name').focusout(function(){
	 						$('#corporation-name').text($(this).val());
	   					});

	   					$('#LandinTotal-hectare').keyup(function(){
   							$('#total-hectare').text($(this).val());
   						});

						$('#LandinTotal-hectare').focusout(function(){
	 						$('#total-hectare').text($(this).val());
	   					});

	   					$('#LandinLand-virtue').keyup(function(){
   							$('#land-virtue').text($(this).val());
   						});

						$('#LandinLand-virtue').focusout(function(){
	 						$('#land-virtue').text($(this).val());
	   					});

	   					$('#LandinTin').keyup(function(){
   							$('#tin').text($(this).val());
   						});

						$('#LandinTin').focusout(function(){
	 						$('#tin').text($(this).val());
	   					});

						$('#LandinProvince').keyup(function(){
   							$('#province').text($(this).val());
   						});

						$('#LandinProvince').focusout(function(){
	 						$('#province').text($(this).val());
	   					});

	   					$('#LandinMunicipality').keyup(function(){
   							$('#municapalityy').text($(this).val());
   						});

						$('#LandinMunicipality').focusout(function(){
	 						$('#municapalityy').text($(this).val());
	   					});

	   					$('#LandinYour-name').keyup(function(){
   							$('#your-name').text($(this).val());
   						});

						$('#LandinYour-name').focusout(function(){
	 						$('#your-name').text($(this).val());
	   					});

	   					$('#LandinApplicant-name').keyup(function(){
   							$('#applicant-name').text($(this).val());
   						});

						$('#LandinApplicant-name').focusout(function(){
	 						$('#applicant-name').text($(this).val());
	   					});

	   					$('#LandinDay').keyup(function(){
   							$('#day').text($(this).val());
   						});

						$('#LandinDay').focusout(function(){
	 						$('#day').text($(this).val());
	   					});

	   					$('#LandinMonth').keyup(function(){
   							$('#month').text($(this).val());
   						});

						$('#LandinMonth').focusout(function(){
	 						$('#month').text($(this).val());
	   					});

	   					$('#LandinYears').keyup(function(){
   							$('#years').text($(this).val());
   						});

						$('#LandinYears').focusout(function(){
	 						$('#years').text($(this).val());
	   					});

	   					$('#LandinPerson-appeared').keyup(function(){
   							$('#person-appeared').text($(this).val());
   						});

						$('#LandinPerson-appeared').focusout(function(){
	 						$('#person-appeared').text($(this).val());
	   					});

	   					$('#LandinCertificate-no').keyup(function(){
   							$('#certificate-no').text($(this).val());
   						});

						$('#LandinCertificate-no').focusout(function(){
	 						$('#certificate-no').text($(this).val());
	   					});

	   					$('#LandinIssued-at').keyup(function(){
   							$('#issued-at').text($(this).val());
   						});

						$('#LandinIssued-at').focusout(function(){
	 						$('#issued-at').text($(this).val());
	   					});

	   					$('#LandinIssued-day').keyup(function(){
   							$('#issued-day').text($(this).val());
   						});

						$('#LandinIssued-day').focusout(function(){
	 						$('#issued-day').text($(this).val());
	   					});

						$('#LandinIssued-month').keyup(function(){
   							$('#issued-month').text($(this).val());
   						});

						$('#LandinIssued-month').focusout(function(){
	 						$('#issued-month').text($(this).val());
	   					});

	   					$('#LandinIssued-year').keyup(function(){
   							$('#issued-year').text($(this).val());
   						});

						$('#LandinIssued-year').focusout(function(){
	 						$('#issued-year').text($(this).val());
	   					});

	   					$('#LandinCertificate-old').keyup(function(){
   							$('#certificate-old').text($(this).val());
   						});

						$('#LandinCertificate-old').focusout(function(){
	 						$('#certificate-old').text($(this).val());
	   					});
   						
   						


	   				});
   				</script>

		   </div>
		  </div>
		  <br>
		  <br>
		  <br>
		  <br>
		</div>
	<?php } ?>

	<?php if ( $this->params['pass'][0] == 3 ) { ?>
		<div class="col-lg-12">
		  <div class="container"><br>
		  <div class="col-lg-12">
		   <h3>Miscellaneous Sales Application</h3>
		  </div>
		  <div class="col-lg-4">
			<div class="form-group">
			  <br>
			  <?= $this->Form->create('Landmi'); ?> 
			  <?= $this->Form->input('idform',array('type'=>'hidden','value'=>3)) ?>
			  <br>1.
			  <?= $this->Form->input('lot',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('block',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('psd',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('phase',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('area',array('class'=>'form-control')); ?>
			  <br>2.
			  <?= $this->Form->input('name',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('age',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('birthplace',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('birth-date',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('post-address',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('spouse-name',array('class'=>'form-control')); ?>
			  <br>3.
			  <?= $this->Form->input('land-applied',array('class'=>'form-control')); ?>
			  <br>4.
			  <?= $this->Form->input('investment-fee',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('total-investment',array('class'=>'form-control')); ?>
			  <br>5.
			  <?= $this->Form->input('not-mortgage',array('class'=>'form-control')); ?>
			  <br>11.
			  <?= $this->Form->input('position',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('corporation-name',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('total-hectare',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('land-virtue',array('class'=>'form-control')); ?>
			  <br>TIN No. of Applicant
			  <?= $this->Form->input('tin',array('class'=>'form-control')); ?>
			  <br>Affidavit Information
			  <?= $this->Form->input('province',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('municipality',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('your-name',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('applicant-name',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('day',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('month',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('years',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('person-appeared',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('certificate-no',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('issued-at',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('issued-day',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('issued-month',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('issued-year',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('certificate-old',array('class'=>'form-control')); ?>
			  <br>
			  <?= $this->Form->submit('Submit',array('class'=>'btn btn-default')); ?>
			  <?= $this->Form->end(); ?>
		  	</div>
		   </div>

		   <div class="col-lg-8">
		   		<div class="col-lg-12" style="border:1px solid #AAA;">
		   			<div style='text-align:center;'><br>
	   			            Republic of the Philippines<br>
					Department of Environment and Natural Resources<br>
					          NATIONAL CAPITAL REGION<br>
					         Land Management Division<br>
					2nd Floor, L & S Bldg. 1515 Roxas boulevard<br>
	   							    Ermita, Manila
	   				</div><br><br>
	   				<div style='text-align:center;'>Note: This application must be submitted in duplicate, otherwise it will not be accepted.</div>

	   				<br>
	   				<div style='text-align:center; font-size:18px;'>MISCELLANEOUS SALES APPLICATION</div>

	   				<br>
	   				<div>Application No. <u>_________________</u></div><br>

	   				<ol>
	   			   <li>
	   			       I HEREBY make application to purchase for agricultural, residential, commercial,
					   industrial, charitable, educational or religious purpose under the provisions of Chapter V,
					   IX, X or XI of Commonwealth Act No. 141 (Public Land Act), as amended; the following
					   tract of public land (if the land is a subdivision or cadastral lot, mention the lot and survey
					   number), Lot .<u id='lot'></u> Block No. <u id='block'></u> Psd-<u id='psd'></u>,
					   Phase<u id='phase'></u> situated in the Barangay of <u id='barangay'></u>, Municipality of
					   <u id='municipality'></u>, Province of Metro Manila, Island of Luzon, Philippines and containing an
					   area of <u id='area'></u> square meters sketch of which is drawn on the back hereof.<br><br>
	   			   </li>
	   			   <li>
	   			        My name is <u id='name'></u>, my age is <u id='age'></u> years, my
						birthplace is <u id='birthplace'></u>, the date of my birth is
						<u id='birth-date'></u>. I am a citizen of the Philippines and my post office
						address is <u id='post-address'></u>, I am (married, single)
						and the name of my wife/husband is <u id='spouse-name'></u>, who is a
						citizen of the Philippines. (If the applicant a married woman, a written consent of her
						husband should be attached to her application).<br><br>
	   			   </li>
	   			   <li>
	   			   		I have been upon and examined the land applied for and it contains no improvement or
						indication of occupation or settlement, except as follows:
						<u id='land-applied'></u> and to the best of my knowledge and belief,
						it is neither timber nor mineral land and contains no valuable deposit of guano, coal or
						salt.<br><br>
	   			   </li>
	   			   <li>
					    This application is made in good faith for my exclusive benefit and use and not, either
						directly or indirectly for the benefit or use of any other person, corporation, association or
						partnership, but for the actual purpose of using the land solely for residential purposes,
						for which I shall invest the sum of
						<u id='investment-fee'></u>(P<u id='total-investment'></u>).<br><br>
	   			   </li>
	   			   <li>
						Then land applied for is/is not mortgage with the <u id='not-mortgage'></u>
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
	   			   	    I am <u id='position'></u> a member, stockholder, officer, representative,
					    attorney, agent, employee or bondholder of the following corporations, association or
					    partnership which are engaged in agriculture and are holders of agricultural public lands
					    in the Philippines (give the name of the corporation, association or partnership, their
					    places of business and the amount of public land held by
					    them:<u id='corporation-name'></u>
					    . The said corporation, association or partnership has under its control a total area of
					    <u id='total-hectare'></u> hectare of public land by virtue of its <u id='land-virtue'></u>.<br><br>
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
 																									<div style='text-align:right;'>TIN: <u id='tin'></u></div>

		   		</div>
		   		
		   		<div class="col-lg-12" style="border:1px solid #AAA; margin-top:40px;	">
		   			<br>
		   			<div style='text-align:center; font-size:19px;'><u>A</u> <u>F</u> <u>F</u> <u>I</u> <u>D</u> <u>A</u> <u>V</u> <u>I</u> <u>T</u></div>																		
			  		<br>
			  		<div>
			   		Republic of the Philippines)<br>
					Province of <u id='province'></u>)S. S.<br>
					Municipality of <u id='municipalityy'>"</u>)<br><br>
					</div>

					<div style='text-indent:50px;'>
									I, <u id='your-name'></u> the person making this
					application first having duly sworn upon both depose and say: That I have read or someone
					has read to me and I thoroughly understand the foregoing application; that I have and this
					affidavit in the presence of the officer who administered the oath; and that each and every
					statement in the application is true and correct. SO HELP ME GOD.
				</div><br><br><br>
			       
			       																					<div style='text-align:right;'><u id='applicant-name'></u></div>
 																									<div style='text-align:right;'>Applicant&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>

 				<br><br><br><div style='text-indent:50px;'>
 									Before me, at the place aforesaid, on this <u id='day'></u> day of <u id='month'></u>, 20<u id='years'></u> personally
					appeared <u id='person-appeared'></u>, known to be the person whose name appears in the foregoing
					application and who subscribed and sworn to this affidavit. He/She exhibited to me his/her Res.
					Cert. No. <u id='certificate-no'></u> Issued at <u id='issued-at'></u> on the <u id='issued-day'></u> day of
					<u id='issued-month'></u>, 19<u id='issued-year'></u> which shown him/her on the date of said certificate to be
					<u id='certificate-old'></u>years old.
 				</div>

 																									<br><br><br><br><br>					
 				    																			    <div style='text-align:right;'>___________________________________________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
 																									<div style='text-align:right;'>Officer authorized to administered oath&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
		   		</div>

		   		<script type="text/javascript">
			   		$(document).ready(function(){

			   			$('#LandmiLot').keyup(function(){
   							$('#lot').text($(this).val());
   						});

						$('#LandmiLot').focusout(function(){
	 						$('#lot').text($(this).val());
	   					});

	   					$('#LandmiBlock').keyup(function(){
   							$('#block').text($(this).val());
   						});

						$('#LandmiBlock').focusout(function(){
	 						$('#block').text($(this).val());
	   					});

						$('#LandmiPsd').keyup(function(){
   							$('#psd').text($(this).val());
   						});

						$('#LandmiPsd').focusout(function(){
	 						$('#psd').text($(this).val());
	   					});

	   					$('#LandmiPhase').keyup(function(){
   							$('#phase').text($(this).val());
   						});

						$('#LandmiPhase').focusout(function(){
	 						$('#phase').text($(this).val());
	   					});

	   					$('#LandmiBarangay').keyup(function(){
   							$('#barangay').text($(this).val());
   						});

						$('#LandmiBarangay').focusout(function(){
	 						$('#barangay').text($(this).val());
	   					});

	   					$('#LandmiMunicipality').keyup(function(){
   							$('#municipal').text($(this).val());
   						});

						$('#LandmiMunicipality').focusout(function(){
	 						$('#municipal').text($(this).val());
	   					});

	   					$('#LandmiArea').keyup(function(){
   							$('#area').text($(this).val());
   						});

						$('#LandmiArea').focusout(function(){
	 						$('#area').text($(this).val());
	   					});

	   					$('#LandmiName').keyup(function(){
   							$('#name').text($(this).val());
   						});

						$('#LandmiName').focusout(function(){
	 						$('#name').text($(this).val());
	   					});

	   					$('#LandmiAge').keyup(function(){
   							$('#age').text($(this).val());
   						});

						$('#LandmiAge').focusout(function(){
	 						$('#age').text($(this).val());
	   					});

	   					$('#LandmiBirthplace').keyup(function(){
   							$('#birthplace').text($(this).val());
   						});

						$('#LandmiBirthplace').focusout(function(){
	 						$('#birthplace').text($(this).val());
	   					});

	   					$('#LandmiBirth-date').keyup(function(){
   							$('#birth-date').text($(this).val());
   						});

						$('#LandmiBirth-date').focusout(function(){
	 						$('#birth-date').text($(this).val());
	   					});

	   					$('#LandmiPost-address').keyup(function(){
   							$('post-address').text($(this).val());
   						});

						$('#LandmiPost-address').focusout(function(){
	 						$('#post-address').text($(this).val());
	   					});

	   					$('#LandmiSpouse-name').keyup(function(){
   							$('#spouse-name').text($(this).val());
   						});

						$('#LandmiSpouse-name').focusout(function(){
	 						$('#spouseiname').text($(this).val());
	   					});

	   					$('#LandmiLand-applied').keyup(function(){
   							$('#land-applied').text($(this).val());
   						});

						$('#LandmiLand-applied').focusout(function(){
	 						$('#land-applied').text($(this).val());
	   					});

	   					$('#LandmiInvestment-fee').keyup(function(){
   							$('#investment-fee').text($(this).val());
   						});

						$('#LandmiInvestment-fee').focusout(function(){
	 						$('#investment-fee').text($(this).val());
	   					});

	   					$('#LandmiTotal-investment').keyup(function(){
   							$('#total-investment').text($(this).val());
   						});

						$('#LandmiTotal-investment').focusout(function(){
	 						$('#total-investment').text($(this).val());
	   					});

	   					$('#LandmiNot-mortgage').keyup(function(){
   							$('#not-mortgage').text($(this).val());
   						});

						$('#LandmiNot-mortgage').focusout(function(){
	 						$('#not-mortgage').text($(this).val());
	   					});

						$('#LandmiPosition').keyup(function(){
   							$('#position').text($(this).val());
   						});

						$('#LandmiPosition').focusout(function(){
	 						$('#position').text($(this).val());
	   					});

	   					$('#LandmiCorporation-name').keyup(function(){
   							$('#corporation-name').text($(this).val());
   						});

						$('#LandmiCorporation-name-name').focusout(function(){
	 						$('#corporation-name').text($(this).val());
	   					});

	   					$('#LandmiTotal-hectare').keyup(function(){
   							$('#total-hectare').text($(this).val());
   						});

						$('#LandmiTotal-hectare').focusout(function(){
	 						$('#total-hectare').text($(this).val());
	   					});

	   					$('#LandmiLand-virtue').keyup(function(){
   							$('#land-virtue').text($(this).val());
   						});

						$('#LandmiLand-virtue').focusout(function(){
	 						$('#land-virtue').text($(this).val());
	   					});

	   					$('#LandmiTin').keyup(function(){
   							$('#tin').text($(this).val());
   						});

						$('#LandmiTin').focusout(function(){
	 						$('#tin').text($(this).val());
	   					});

						$('#LandmiProvince').keyup(function(){
   							$('#province').text($(this).val());
   						});

						$('#LandmiProvince').focusout(function(){
	 						$('#province').text($(this).val());
	   					});

	   					$('#LandmiMunicipality').keyup(function(){
   							$('#municapalityy').text($(this).val());
   						});

						$('#LandmiMunicipality').focusout(function(){
	 						$('#municapalityy').text($(this).val());
	   					});

	   					$('#LandmiYour-name').keyup(function(){
   							$('#your-name').text($(this).val());
   						});

						$('#LandmiYour-name').focusout(function(){
	 						$('#your-name').text($(this).val());
	   					});

	   					$('#LandmiApplicant-name').keyup(function(){
   							$('#applicant-name').text($(this).val());
   						});

						$('#LandmiApplicant-name').focusout(function(){
	 						$('#applicant-name').text($(this).val());
	   					});

	   					$('#LandmiDay').keyup(function(){
   							$('#day').text($(this).val());
   						});

						$('#LandmiDay').focusout(function(){
	 						$('#day').text($(this).val());
	   					});

	   					$('#LandmiMonth').keyup(function(){
   							$('#month').text($(this).val());
   						});

						$('#LandmiMonth').focusout(function(){
	 						$('#month').text($(this).val());
	   					});

	   					$('#LandmiYears').keyup(function(){
   							$('#years').text($(this).val());
   						});

						$('#LandmiYears').focusout(function(){
	 						$('#years').text($(this).val());
	   					});

	   					$('#LandmiPerson-appeared').keyup(function(){
   							$('#person-appeared').text($(this).val());
   						});

						$('#LandmiPerson-appeared').focusout(function(){
	 						$('#person-appeared').text($(this).val());
	   					});

	   					$('#LandmiCertificate-no').keyup(function(){
   							$('#certificate-no').text($(this).val());
   						});

						$('#LandmiCertificate-no').focusout(function(){
	 						$('#certificate-no').text($(this).val());
	   					});

	   					$('#LandmiIssued-at').keyup(function(){
   							$('#issued-at').text($(this).val());
   						});

						$('#LandmiIssued-at').focusout(function(){
	 						$('#issued-at').text($(this).val());
	   					});

	   					$('#LandmiIssued-day').keyup(function(){
   							$('#issued-day').text($(this).val());
   						});

						$('#LandmiIssued-day').focusout(function(){
	 						$('#issued-day').text($(this).val());
	   					});

						$('#LandmiIssued-month').keyup(function(){
   							$('#issued-month').text($(this).val());
   						});

						$('#LandmiIssued-month').focusout(function(){
	 						$('#issued-month').text($(this).val());
	   					});

	   					$('#LandmiIssued-year').keyup(function(){
   							$('#issued-year').text($(this).val());
   						});

						$('#LandmiIssued-year').focusout(function(){
	 						$('#issued-year').text($(this).val());
	   					});

	   					$('#LandmiCertificate-old').keyup(function(){
   							$('#certificate-old').text($(this).val());
   						});

						$('#LandmiCertificate-old').focusout(function(){
	 						$('#certificate-old').text($(this).val());
	   					});

			   		});
   				</script>

		   </div>


		  </div>
		  <br>
		  <br>
		  <br>
		  <br>
		</div>
	<?php } ?>

	<?php if ( $this->params['pass'][0] == 4 ) { ?>
		<div class="col-lg-12">
		  <div class="container"><br>
		  <div class="col-lg-12">
		   <h3>Residential Free Patent Application</h3>
		  </div>
		  <div class="col-lg-4">
			<div class="form-group">
			  <br>
			  <?= $this->Form->create('Landre'); ?> 
			  <?= $this->Form->input('idform',array('type'=>'hidden','value'=>4)) ?>
			  <br>Name of Applicant
			  <?= $this->Form->input('name',array('class'=>'form-control')); ?>
			  <br>Mailing Address of Applicant
			  <?= $this->Form->input('address',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('citizenship',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('civil-status',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('sex',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('age',array('class'=>'form-control')); ?>
			  <br>Name of legal guardian
			  <?= $this->Form->input('guardian',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('birth-date',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('birth-place',array('class'=>'form-control')); ?>
			  <br>Name of your wife/husband
			  <?= $this->Form->input('spouse',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('contact',array('class'=>'form-control')); ?>
			  <br>Location of residential land applied for:
			  <?= $this->Form->input('street',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('barangay',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('municipality',array('class'=>'form-control')); ?>
			  <br>Description of residential land applied for:
			  <?= $this->Form->input('lot',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('block',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('survey',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('area',array('class'=>'form-control')); ?>
			  <br>Applicant’s predecessor-in-interest (if Any) :
			  <?= $this->Form->input('predecessor-in-interest',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('date-entry',array('class'=>'form-control')); ?>

			  <?= $this->Form->input('applicant-name',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('ctc-id',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('issued-on',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('issued-at',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('day',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('month',array('class'=>'form-control')); ?>
			  <?= $this->Form->input('years',array('class'=>'form-control')); ?>
			  <br>
			  <?= $this->Form->submit('Submit',array('class'=>'btn btn-default')); ?>
			  <?= $this->Form->end(); ?>
		  	</div>
		   </div>

		   <div class="col-lg-8">
		   		<br><br><br>
		   		<div class="col-lg-12" style="border:1px solid #AAA;">
		   			<div style='position: absolute; left:100px; right: 0; top: 25px; bottom: 0;'>
						<img src='/img/DENR.png' style='width: 100px; height: 90px; margin: 0; float:left;' />
					</div>
					<br><br>
					<div style='text-align:center;'>
		   			            Republic of the Philippines<br>
						Department of Environment and Natural Resources<br>
						          <b>NATIONAL CAPITAL REGION<br></b>
					</div>
					<br><br><br>

					<div style='text-align:center; font-size:18px;'><b>APPLICATION FOR RESIDENTIAL FREE PATENT</b></div>

					<div style='margin-bottom:10px;'>
						<br>
						<div style='float:left; width:400px; font-size:16px;'>Application No. : ______________________________</div>
						<div style='float:left;'>Entry No. : __________________</div>
					</div>
					<br>
					<div style='font-size:16px;'>Name of Applicant:  <u id='name'></u></div>
					<div style='font-size:16px;'>Mailing Address of Applicant: <u id='address'></u></div>
				
					<div style='font-size:16px;'>
						<div style='float:left; width:250px;'>Citizenship: <u id='citizenship'></u></div>
						<div style='float:left; width:250px;'>Civil Status: <u id='civil-status'></u></div>
						<div style='float:left; width:150px;'>Sex: <u id='sex'></u></div>		
					</div>

				<div style='font-size:16px;'>
						<div style='float:left; width:200px;'>Age: <u id='age'></u></div>
						<div style='float:left;'>If MINOR, name of legal guardian <u id='guardian'></u></div>
						<div style='font-size:16px;'>
							<div style='float:left; width:300px;'>Date of Birth: <u id='birth-date'></u></div>
							<div style='float:left;'>Place of Birth: <u id='birth-place'></u></div>
						</div>
						<br><br><br>
						<div style='font-size:16px;'>Name of Spouse: <u id='spouse'></u></div>
						<div style='font-size:16px;'>Contact Nos: <u id='contact'></u></div>
						<div style='float:left; font-size:16px;'>Location of residential land applied for:</div><br>
						<div>
							<div style='float:left; width:200px; font-size:16px;'><i>No./Street <br><u id='street'></u></i></div>
							<div style='float:left; width:200px; font-size:16px;'><i>Barangay <br><u id='barangay'></u></i></div>
							<div style='float:left; width:200px; font-size:16px;'><i>Municipality/City <br><u id='municipality'></u></i></div>
						</div>
						<br>
						<div style='float:left; font-size:16px;'>Description of residential land applied for:</div><br>
						<div>
							<div style='float:left; width:140px; font-size:16px;'><i>Lot # <br><u id='lot'></u></i></div>
							<div style='float:left; width:140px; font-size:16px;'><i>Block # <br><u id='block'></u></i></div>
							<div style='float:left; width:140px; font-size:16px;'><i>Survey # <br><u id='survey'></u></i></div>
							<div style='float:left; width:140px; font-size:16px;'><i>Area (Sq.M.) <br><u id='area'></u></i></div>
						</div>
						<br>
						<div style='font-size:16px;'> Applicant’s predecessor-in-interest (if Any) : <u id='predecessor-in-interest'></u></div>
						<br>
						<div style='font-size:16px;'>Date of entry by applicant or predecessor-in-interest upon the residential land applied for: (on or about) <u id='date-entry'></u></div>
						<br>
						<div style='font-size:16px; text-indent:80px;'>I declare, under the penalties of perjury, that my total land holdings are not more than 12 hectares and that this application has been made in good faith and to the best of my knowledge all information contained herein are true and correct.</div>

																			<br>
																			<div style='text-indent:460px;'><u id='applicant-name'></u></div>
	 																		<div style='text-indent:430px;'>Applicant's Name and Signature</div>
	 																		<br>
	 																		<div style='text-indent:430px; font-size:11px;'>CTC/I.D. No. : <u id='ctc-id'></u></div>
	 																		<div style='text-indent:430px; font-size:11px;'>Issued On : <u id='issued-on'></u></div>
	 																		<div style='text-indent:430px; font-size:11px;'>Issued At : <u id='issued-at'></u></div>

	 					<br>
	 					<div style='font-size:16px; text-indent:50px;'>SUBSCRIBED &nbsp;&nbsp;&nbsp; AND &nbsp;&nbsp;&nbsp; SWORN &nbsp;&nbsp;&nbsp;TO &nbsp;&nbsp;&nbsp;before &nbsp;&nbsp;&nbsp; me this <u id='day'></u> day of <u id='month'></u> at <u id='years'></u>.</div>

	 																		<br><br><br>
	 																		<div style='text-align:right;'>__________________________________________</div>
	 																		<div style='text-indent:460px;'>Office Authorized to <p style='text-indent:472px; margin-top:-8;'>Administer Oath</p></div>

	 				
		 				<br>
		 				<div style='font-size:10px;'>This form is not for sale.
			 				<br>
			                This form must be accomplished in five (5) copies.
		                </div>
		                <br><br>
			   	</div>

		   		</div>

		   		<script type="text/javascript">
			   		$(document).ready(function(){

			   			$('#LandreName').keyup(function(){
   							$('#name').text($(this).val());
   						});

						$('#LandreName').focusout(function(){
	 						$('#name').text($(this).val());
	   					});

	   					$('#LandreAddress').keyup(function(){
   							$('#address').text($(this).val());
   						});

						$('#LandreAddress').focusout(function(){
	 						$('#address').text($(this).val());
	   					});

	   					$('#LandreCitizenship').keyup(function(){
   							$('#citizenship').text($(this).val());
   						});

						$('#LandreCitizenship').focusout(function(){
	 						$('#citizenship').text($(this).val());
	   					});

	   					$('#LandreCivil-status').keyup(function(){
   							$('#civil-status').text($(this).val());
   						});

						$('#LandreCivil-status').focusout(function(){
	 						$('#civil-status').text($(this).val());
	   					});

	   					$('#LandreSex').keyup(function(){
   							$('#sex').text($(this).val());
   						});

						$('#LandreSex').focusout(function(){
	 						$('#sex').text($(this).val());
	   					});

	   					$('#LandreAge').keyup(function(){
   							$('#age').text($(this).val());
   						});

						$('#LandreAge').focusout(function(){
	 						$('#age').text($(this).val());
	   					});

	   					$('#LandreGuardian').keyup(function(){
   							$('#guardian').text($(this).val());
   						});

						$('#LandreGuardian').focusout(function(){
	 						$('#guardian').text($(this).val());
	   					});

	   					$('#LandreBirth-date').keyup(function(){
   							$('#birth-date').text($(this).val());
   						});

						$('#LandreBirth-date').focusout(function(){
	 						$('#birth-date').text($(this).val());
	   					});

	   					$('#LandreBirth-place').keyup(function(){
   							$('#birth-place').text($(this).val());
   						});

						$('#LandreBirth-place').focusout(function(){
	 						$('#birth-place').text($(this).val());
	   					});

	   					$('#LandreSpouse').keyup(function(){
   							$('#spouse').text($(this).val());
   						});

						$('#LandreSpouse').focusout(function(){
	 						$('#spouse').text($(this).val());
	   					});

	   					$('#LandreContact').keyup(function(){
   							$('#contact').text($(this).val());
   						});

						$('#LandreContact').focusout(function(){
	 						$('#contact').text($(this).val());
	   					});

						$('#LandreStreet').keyup(function(){
   							$('#street').text($(this).val());
   						});

						$('#LandreStreet').focusout(function(){
	 						$('#street').text($(this).val());
	   					});
	   					
						$('#LandreBarangay').keyup(function(){
   							$('#barangay').text($(this).val());
   						});

						$('#LandreBarangay').focusout(function(){
	 						$('#barangay').text($(this).val());
	   					});

	   					$('#LandreMunicipality').keyup(function(){
   							$('#municipality').text($(this).val());
   						});

						$('#LandreMunicipality').focusout(function(){
	 						$('#municipality').text($(this).val());
	   					});

	   					$('#LandreLot').keyup(function(){
   							$('#lot').text($(this).val());
   						});

						$('#LandreLot').focusout(function(){
	 						$('#lot').text($(this).val());
	   					});

	   					$('#LandreBlock').keyup(function(){
   							$('#block').text($(this).val());
   						});

						$('#LandreBlock').focusout(function(){
	 						$('#block').text($(this).val());
	   					});

	   					$('#LandreSurvey').keyup(function(){
   							$('#survey').text($(this).val());
   						});

						$('#LandreSurvey').focusout(function(){
	 						$('#survey').text($(this).val());
	   					});

	   					$('#LandreArea').keyup(function(){
   							$('#area').text($(this).val());
   						});

						$('#LandreArea').focusout(function(){
	 						$('#area').text($(this).val());
	   					});

	   					$('#LandrePredecessor-in-interest').keyup(function(){
   							$('#predecessor-in-interest').text($(this).val());
   						});

						$('#LandrePredecessor-in-interest').focusout(function(){
	 						$('#predecessor-in-interest').text($(this).val());
	   					});

	   					$('#LandreDate-entry').keyup(function(){
   							$('#date-entry').text($(this).val());
   						});

						$('#LandreDate-entry').focusout(function(){
	 						$('#date-entry').text($(this).val());
	   					});

	   					$('#LandreApplicant-name').keyup(function(){
   							$('#applicant-name').text($(this).val());
   						});

						$('#LandreApplicant-name').focusout(function(){
	 						$('#applicant-name').text($(this).val());
	   					});
	   					
						$('#LandreCtc-id').keyup(function(){
   							$('#ctc-id').text($(this).val());
   						});

						$('#LandreCtc-id').focusout(function(){
	 						$('#ctc-id').text($(this).val());
	   					});

	   					$('#LandreIssued-on').keyup(function(){
   							$('#issued-on').text($(this).val());
   						});

						$('#LandreIssued-on').focusout(function(){
	 						$('#issued-on').text($(this).val());
	   					});

	   					$('#LandreIssued-at').keyup(function(){
   							$('#issued-at').text($(this).val());
   						});

						$('#LandreIssued-at').focusout(function(){
	 						$('#issued-at').text($(this).val());
	   					});

						$('#LandreDay').keyup(function(){
   							$('#day').text($(this).val());
   						});

						$('#LandreDay').focusout(function(){
	 						$('#day').text($(this).val());
	   					});

	   					$('#LandreMonth').keyup(function(){
   							$('#month').text($(this).val());
   						});

						$('#LandreMonth').focusout(function(){
	 						$('#month').text($(this).val());
	   					});

						$('#LandreYears').keyup(function(){
   							$('#years').text($(this).val());
   						});

						$('#LandreYears').focusout(function(){
	 						$('#years').text($(this).val());
	   					});

			   		});
   				</script>



		  </div>
		  <br>
		  <br>
		  <br>
		  <br>
		</div>
	<?php } ?>

	<?php if ( $this->params['pass'][0] == 5 ) { ?>
		<div class="col-lg-12">
		  <div class="container"><br>
			  <div class="col-lg-12">
			   <h3>Application for Permit and Acceptance of Conditions</h3>
			  </div>
			  <div class="col-lg-4">
				  	<div class="form-group">
					  <br>
					  <?= $this->Form->create('Landcon'); ?> 
			  		  <?= $this->Form->input('idform',array('type'=>'hidden','value'=>5)) ?>
			  		  <br>1.
					  <?= $this->Form->input('purposes',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('barrio',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('municipality',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('province',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('area',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('permit-no',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('use-of-land',array('class'=>'form-control')); ?>
					  <br>4.
					  <?= $this->Form->input('your-name',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('age',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('birthplace',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('employed-in',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('citizen',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('post-address',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('spouse',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('spouse-citizen',array('class'=>'form-control')); ?>
					  <br>5.
					  <?= $this->Form->input('name',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('title-holder',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('land',array('class'=>'form-control')); ?>
					  <br>Applicant Tax No. and Address
					  <?= $this->Form->input('address',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('tax-acct-no',array('class'=>'form-control')); ?>
					  <br>Witnesses Information
					  <?= $this->Form->input('witness-name1',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('address1',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('witness-name2',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('address2',array('class'=>'form-control')); ?>

					  <?= $this->Form->input('day',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('month',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('year',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('your-address',array('class'=>'form-control')); ?>

					  <?= $this->Form->input('certificate-no',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('issued-on',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('issued-in',array('class'=>'form-control')); ?>
					  <br>
					  <?= $this->Form->submit('Submit',array('class'=>'btn btn-default')); ?>
					  <?= $this->Form->end(); ?>
				  	</div>
			   </div>

			   <div class="col-lg-8">
			   		<br><br>
			   		<div class="col-lg-12" style="border:1px solid #AAA;">
			   			<br><br><br>
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
								 for <u id='purposes'></u> purposes the tract of Land located in the Barrio of <u id='barrio'></u> Municipality of <u id='municipality'></u> 
								 Province of <u id='province'></u> containing approximately an area of <u id='area'></u> square meters,
								 bounded as follows:<br><br>
							     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(If the land corresponds to a lot in a cadastre or subdivision, mention the lot number as well as the
								 number of the cadastre or subdivision)<br><br>The land is covered by my Revocable Permit Application No. <u id='permit-no'></u> I shall use the land for <u id='use-of-land'></u>.
							</li><br>
							
							<li style='font-size:12px;'>I make this application for my exclusive benefit and not for the benefit of any other person; and I shall not
								lease or sublease the land applied for and/or the improvements thereon to any other person nor shall
								allow such other person to derive benefits therefrom either directly or indirectly.
							</li><br>
							
							<li style='font-size:12px;'>
							To show that I possess the qualifications required by law, the following statements of facts is submitted.
							</li><br>
							
							<li style='font-size:12px;'>
							My name Is <u id='your-name'></u>, my age is <u id='age'></u> years; I was born in
							<u id='birthplace'></u>; and employed in <u id='employed-in'></u> I am a
							citizen of <u id='citizen'></u>, my post office address is <u id='post-address'></u>; I am
							married/single and the name of my wife/husband is <u id='spouse'></u>; who is a citizen of
							<u id='spouse-citizen'></u>;
							</li><br>
							
							<li style='font-size:12px;'>
								I am <u id='name'></u>; holder of <u id='title-holder'></u>other applications for public
								land. They are as follows: <u id='land'></u>.
							</li><br>

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
		 																				<br><div style='text-indent:430px; font-size:12px;'>Address : <u id='address'></u></div>
		 																				    <div style='text-indent:420px; font-size:12px;'>Tax Payer acct. No. <u id='tax-acct-no'></u></div>
		 				
		 				<br>
		 				<div>
		 				WITNESSES:<br>
		 				<ol>
		 					<li><u id='witness-name1'></u> Address: <u id='address1'></u></li>
		 					<li><u id='witness-name2'></u> Address: <u id='address2'></u></li>
		 				</ol>
		 				Subscribe and sworn to before me this <u id='day'></u> day of <u id='month'></u> 20 <u id='years'></u> in <u id='your-address'></u>.
						Affiant exhibited to me his/her Res. Cert. No. <u id='certificate-no'></u> issued on <u id='issued-on'></u> in
						<u id='issued-in'></u>
		 				</div>

 																				<br><br><div style='text-align:right;'>____________________________________</div>
 																				<div style='text-indent:480px;'>Administering Officer</div>

			   		</div>

			   		<div class="col-lg-12" style="border:1px solid #AAA; margin-top:40px;">
			   			<br><br>
			   			<div style='text-align:center;'><u>CONDITIONS UNDER WHICH THIS PERMIT IS ISSUED</u></div>
 						<br>
 					
 					<ol>
 						<li style='font-size:13px;'>
 							This application is not made for the benefit of any person other than the applicant.
 						</li><br>

 						<li style='font-size:13px;'>
 							The Permit is to issued under the conditions prescribed by Administrative Order No. 9, as amended, and
							such additional conditions as the Minister of Natural Resources or the Director of Lands may deem
							necessary according to attending circumstances or to protect public interests, which special conditions shall
							be expressly stated in, and made a part of the permit.
 						</li><br>

 						<li style='font-size:13px;'>
 							The permittee shall occupy and use the land subject of the permit to the use fro which the permit is to
							issued within two months from the date of the permit upon the penalty of losing his right over the land
							through the cancellation of the permit, accompanied by the forfeiture of fees paid for failure to occupy and
							use the land within the period herewith allowed.
 						</li><br>

 						<li style='font-size:13px;'>
 							No building or structure shall be constructed or erected on the land without its plan and construction
							having been previously approved by the corresponding authorities in accordance with local ordinance,
							which building or structure shall be temporarily and easily removable at the expense of the permitee. In all
							cases even if the building or structure is temporary, the building therefore must first be secured.
 						</li><br>

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
 						</li><br>

 						<li style='font-size:13px;'>
 							Should the permit be cancelled by reason of the failure of the permittee to pay the permit fees, all
							improvements shall be forfeited to the Government.
 						</li><br>

 						<li style='font-size:13px;'>
 							Upon discovery, the permittee shall immediately notify in writing the Director of Lands of the existence in
							the land of any gold, silver, copper, or other substances containing minerals, guano, precious stones, coal or
							coal oil, and he/she not take or remove nor offer others to take remove from the place any quantity of the
							said project.
 						</li><br>

 						<li style='font-size:13px;'>
 							Two permit is subject to the favorable recommendations of the District Engineer, the General Manager of
							the Philippine Ports Authority, and further findings of the District Land Officer concerned, the said
							recommendation and findings are necessary but were not available and were therefore not considered at
							the time of the issuance of the permit.
 						</li><br>

 						<li style='font-size:13px;'>
 							Persons holdings licenses issued by the Bureau of Forest Development shall have rights –f way on the land
							and also the right out, collect and remove timber thereon.
 						</li><br>

 						<li style='font-size:13px;'>
 							Any timber growing on the land shall not be cut or disposed of for commercial purposes without license
							from the Bureau of Forest Development.
 						</li><br>

 						<li style='font-size:13px;'>
 							The land covered by the permit and/or any improvement that may be constructed thereon shall be used
							exclusively by the applicant himself. It case it is found out that the land/or improvements are used by any
							person other than the permittee without written consent or approval of the Director of Lands or of the
							Minister of Natural Resources, the permit shall be cancelled and the improvements on the land covered
							thereby, forfeited in favor of the Government.
 						</li>


 					</ol>
			   		</div>

			   		<script type="text/javascript">
			   			$(document).ready(function(){

				   			$('#LandconPurposes').keyup(function(){
	   							$('#purposes').text($(this).val());
	   						});

							$('#LandconPurposes').focusout(function(){
		 						$('#purposes').text($(this).val());
		   					});

		   					$('#LandconBarrio').keyup(function(){
	   							$('#barrio').text($(this).val());
	   						});

							$('#LandconBarrio').focusout(function(){
		 						$('#barrio').text($(this).val());
		   					});

		   					$('#LandconMunicipality').keyup(function(){
	   							$('#municipality').text($(this).val());
	   						});

							$('#LandconMunicipality').focusout(function(){
		 						$('#municipality').text($(this).val());
		   					});

		   					$('#LandconProvince').keyup(function(){
	   							$('#province').text($(this).val());
	   						});

							$('#LandconProvince').focusout(function(){
		 						$('#province').text($(this).val());
		   					});
		   					
							$('#LandconArea').keyup(function(){
	   							$('#area').text($(this).val());
	   						});

							$('#LandconArea').focusout(function(){
		 						$('#area').text($(this).val());
		   					});

		   					$('#LandconSpouse').keyup(function(){
	   							$('#spouse').text($(this).val());
	   						});

							$('#LandconSpouse').focusout(function(){
		 						$('#spouse').text($(this).val());
		   					});

		   					$('#LandconPermit-no').keyup(function(){
	   							$('#permit-no').text($(this).val());
	   						});

							$('#LandconPermit-no').focusout(function(){
		 						$('#permit-no').text($(this).val());
		   					});

		   					$('#LandconUse-of-land').keyup(function(){
	   							$('#use-of-land').text($(this).val());
	   						});

							$('#LandconUse-of-land').focusout(function(){
		 						$('#use-of-land').text($(this).val());
		   					});

		   					$('#LandconYour-name').keyup(function(){
	   							$('#your-name').text($(this).val());
	   						});

							$('#LandconYour-name').focusout(function(){
		 						$('#your-name').text($(this).val());
		   					});

		   					$('#LandconAge').keyup(function(){
	   							$('#age').text($(this).val());
	   						});

							$('#LandconAge').focusout(function(){
		 						$('#age').text($(this).val());
		   					});

		   					$('#LandconBirthplace').keyup(function(){
	   							$('#birthplace').text($(this).val());
	   						});

							$('#LandconBirthplace').focusout(function(){
		 						$('#birthplace').text($(this).val());
		   					});

		   					$('#LandconEmployed-in').keyup(function(){
	   							$('#employed-in').text($(this).val());
	   						});

							$('#LandconEmployed-in').focusout(function(){
		 						$('#employed-in').text($(this).val());
		   					});

		   					$('#LandconCitizen').keyup(function(){
	   							$('#citizen').text($(this).val());
	   						});

							$('#LandconCitizen').focusout(function(){
		 						$('#citizen').text($(this).val());
		   					});

		   					$('#LandconPost-address').keyup(function(){
	   							$('#post-address').text($(this).val());
	   						});

							$('#LandconPost-address').focusout(function(){
		 						$('#post-address').text($(this).val());
		   					});

		   					$('#LandconSpouse').keyup(function(){
	   							$('#spouse').text($(this).val());
	   						});

							$('#LandconSpouse').focusout(function(){
		 						$('#spouse').text($(this).val());
		   					});

		   					$('#LandconSpouse-citizen').keyup(function(){
	   							$('#spouse-citizen').text($(this).val());
	   						});

							$('#LandconSpouse-citizen').focusout(function(){
		 						$('#spouse-citizen').text($(this).val());
		   					});

		   					$('#LandconName').keyup(function(){
	   							$('#name').text($(this).val());
	   						});

							$('#LandconName').focusout(function(){
		 						$('#name').text($(this).val());
		   					});

		   					$('#LandconTitle-holder').keyup(function(){
	   							$('#title-holder').text($(this).val());
	   						});

							$('#LandconTitle-holder').focusout(function(){
		 						$('#title-holder').text($(this).val());
		   					});

		   					$('#LandconLand').keyup(function(){
	   							$('#land').text($(this).val());
	   						});

							$('#LandconLand').focusout(function(){
		 						$('#land').text($(this).val());
		   					});

		   					$('#LandconAddress').keyup(function(){
	   							$('#address').text($(this).val());
	   						});

							$('#LandconAddress').focusout(function(){
		 						$('#address').text($(this).val());
		   					});

		   					$('#LandconTax-acct-no').keyup(function(){
	   							$('#tax-acct-no').text($(this).val());
	   						});

							$('#LandconTax-acct-no').focusout(function(){
		 						$('#tax-acct-no').text($(this).val());
		   					});

		   					$('#LandconWitness-name1').keyup(function(){
	   							$('#witness-name1').text($(this).val());
	   						});

							$('#LandconWitness-name1').focusout(function(){
		 						$('#witness-name1').text($(this).val());
		   					});

		   					$('#LandconAddress1').keyup(function(){
	   							$('#address1').text($(this).val());
	   						});

							$('#LandconAddress1').focusout(function(){
		 						$('#address1').text($(this).val());
		   					});

		   					$('#LandconWitness-name2').keyup(function(){
	   							$('#witness-name2').text($(this).val());
	   						});

							$('#LandconWitness-name2').focusout(function(){
		 						$('#witness-name2').text($(this).val());
		   					});

		   					$('#LandconAddress2').keyup(function(){
	   							$('#address2').text($(this).val());
	   						});

							$('#LandconAddress2').focusout(function(){
		 						$('#address2').text($(this).val());
		   					});

							$('#LandconDay').keyup(function(){
	   							$('#day').text($(this).val());
	   						});

							$('#LandconDay').focusout(function(){
		 						$('#day').text($(this).val());
		   					});

		   					$('#LandconMonth').keyup(function(){
	   							$('#month').text($(this).val());
	   						});

							$('#LandconMonth').focusout(function(){
		 						$('#month').text($(this).val());
		   					});

		   					$('#LandconYear').keyup(function(){
	   							$('#year').text($(this).val());
	   						});

							$('#LandconYear').focusout(function(){
		 						$('#year').text($(this).val());
		   					});

		   					$('#LandconYour-address').keyup(function(){
	   							$('#your-address').text($(this).val());
	   						});

							$('#LandconYour-address').focusout(function(){
		 						$('#your-address').text($(this).val());
		   					});

		   					$('#LandconCertificate-no').keyup(function(){
	   							$('#certificate-no').text($(this).val());
	   						});

							$('#LandconCertificate-no').focusout(function(){
		 						$('#certificate-no').text($(this).val());
		   					});

		   					$('#LandconIssued-on').keyup(function(){
	   							$('#issued-on').text($(this).val());
	   						});

							$('#LandconIssued-on').focusout(function(){
		 						$('#issued-on').text($(this).val());
		   					});

		   					$('#LandconIssued-in').keyup(function(){
	   							$('#issued-in').text($(this).val());
	   						});

							$('#LandconIssued-in').focusout(function(){
		 						$('#issued-in').text($(this).val());
		   					});


		   				});
   					</script>


			   </div>

		  </div>
		  <br>
		  <br>
		  <br>
		  <br>
		</div>
	<?php } ?>

