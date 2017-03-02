<?php
if(isset($model)){
	echo $model;
}
?>

<!-- For Forest -->
<?php if ( $this->params['pass'][0] == 1 ) { ?>
 <div class="col-lg-12">
		  <div class="container"><br>
			  <div class="col-lg-12">
			   <h3> Application Form for Registration of Chainsaw </h3>
			  </div>
			  <div class="col-lg-4">
					<div class="form-group">
					  <br>
					  <?= $this->Form->create('Forestchain'); ?>
			 		  <?= $this->Form->input('idform',array('type'=>'hidden','value'=>1)) ?>
					  <br>Application Information
					  <?= $this->Form->input('new',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('renew',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('exact-date',array('class'=>'form-control')); ?>
					  <br>The RED / CENRO concerned :
					  <?= $this->Form->input('red-concerned',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('centro-concerned',array('class'=>'form-control')); ?>
					  <br>Applicant Information
					  <?= $this->Form->input('name',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('address',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('contact-no',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('applicant-name',array('class'=>'form-control')); ?>
					  <br>
					  <?= $this->Form->submit('Submit',array('class'=>'btn btn-default')); ?>
					  <?= $this->Form->end(); ?>

			  		</div>
			  </div>

			  <div class="col-lg-8">
			  	<div class="col-lg-12" style="border:1px solid #AAA;">
			  		<div style='position: absolute; left:50px; right: 0; top: 20px; bottom: 0;'>
						<img src='/img/DENR_Logo.png' style='width: 105px; height: 105px; margin: 0; float:left;' />
						<div style='float:left; padding-top:15px; margin-left:10px; font-size:15px;'>
							<b>Department of Environment and Natural Resources<br>
							National Capital Region</b>
						</div>
					</div>
					<br><br><br><br><br><br>
					<div class="row" style='height:14px; background-color:#7C2F2F; margin-top:10px;'></div>
					<br>
					<div style='text-align:center; font-size:18px;'><i><u>APPLICATION</u></i></div>
					<br>
					<div style='text-indent:80px;'>
						Application No. _______________
					</div>

					<div style='margin-top:-2px; text-indent:80px;'>
						Type: <u id='new'></u> NEW
					</div>
					<div style='margin-top:-2px; text-indent:120px;'>
						<u id='renew'></u> RENEWAL
					</div>

																					<div style='text-indent:500px;'>
																						DATE:<u id='exact-date'></u>
																					</div>

					<div style='text-indent:80px;'>
						The RED / CENTRO concerned:
					</div>
					<div style='text-indent:80px; margin-top:-2px;'>
						<u id='red-concerned'></u>
					</div>
					<div style='text-indent:80px; margin-top:-2px;'>
						<u id='centro-concerned'></u>
					</div>
					<br><br>
					<div style='text-indent:80px; margin-top:-15px;'>
						Sir:
					</div>
					<br>
					<div style='text-indent:120px; margin-top:-20px;'>
						I / We <u id='name'></u>, with address at <u id='address'></u> 
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						and telephone no. <u id='contact-no'></u> hereby applies for ( Please check appropriate box ) :
					</div>
					<br>
					<div style='text-indent:80px; margin-top:-2px;'>( ) Certificate of Registration of Chainsaw (new)</div>
					<div style='text-indent:80px; margin-top:-2px;'>( ) Permit to Import Chainsaw</div>
					<div style='text-indent:80px; margin-top:-2px;'>( ) Permit to Manufacture</div>
					<div style='text-indent:80px; margin-top:-2px;'>( ) Permit to purchase, sell , re-sell, distribute or transfer of ownership of chainsaw</div>
					<br>
					<div style='text-indent:80px;'>
						The requirements called for under my /our application are attached for your evaluation.
					</div>

					<div style='text-indent:80px;'>
						I/We understand that the filling of this application does not convey the authority to the 
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;undersigned to purchase, import , assemble, manufacture, sell, re-sell,
						distribute or use &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;the chainsaw/s subject of application until such time that a Permit
						or Certificate of &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;Registration is issued by DENR.
					</div>

					<div style='text-indent:80px;'>
						I / We further understand that any false statement, misinterpretation and/or
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;misdeclaration stated herein shall be a ground for denial and /or revocation of
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;registration without prejudice to the filling of appropriate legal action.
						
					</div>
																		<br>
																		<div style='text-indent:420px;'>Very truly yours,</div>
																		<br><br>
																		<div style='text-indent:320px; margin-top:-2px;'>
																			<u id='applicant-name'></u>
																		</div>
																		
																		<div style='text-indent:330px; margin-top:-10px;'>
																			Signature over Printed Name of Applicant
																		</div>
							
			  </div>

			  <script type="text/javascript">
			   			$(document).ready(function(){

			   				$('#ForestchainNew').keyup(function(){
	   							$('#new').text($(this).val());
	   						});

							$('#ForestchainNew').focusout(function(){
		 						$('#new').text($(this).val());
		   					});

							$('#ForestchainRenew').keyup(function(){
	   							$('#renew').text($(this).val());
	   						});

							$('#ForestchainRenew').focusout(function(){
		 						$('#renew').text($(this).val());
		   					});	

		   					$('#ForestchainExact-date').keyup(function(){
	   							$('#exact-date').text($(this).val());
	   						});

							$('#ForestchainExact-date').focusout(function(){
		 						$('#exact-date').text($(this).val());
		   					});	

		   					$('#ForestchainRed-concerned').keyup(function(){
	   							$('#red-concerned').text($(this).val());
	   						});

							$('#ForestchainRed-concerned').focusout(function(){
		 						$('#red-concerned').text($(this).val());
		   					});	

		   					$('#ForestchainCentro-concerned').keyup(function(){
	   							$('#centro-concerned').text($(this).val());
	   						});

							$('#ForestchainCentro-concerned').focusout(function(){
		 						$('#centro-concerned').text($(this).val());
		   					});  

		   					$('#ForestchainName').keyup(function(){
	   							$('#name').text($(this).val());
	   						});

							$('#ForestchainName').focusout(function(){
		 						$('#name').text($(this).val());
		   					}); 

		   					$('#ForestchainAddress').keyup(function(){
	   							$('#address').text($(this).val());
	   						});

							$('#ForestchainAddress').focusout(function(){
		 						$('#address').text($(this).val());
		   					});	

		   					$('#ForestchainContact-no').keyup(function(){
	   							$('#contact-no').text($(this).val());
	   						});

							$('#ForestchainContact-no').focusout(function(){
		 						$('#contact-no').text($(this).val());
		   					});	

		   					$('#ForestchainApplicant-name').keyup(function(){
	   							$('#applicant-name').text($(this).val());
	   						});

							$('#ForestchainApplicant-name').focusout(function(){
		 						$('#applicant-name').text($(this).val());
		   					});			



			  			 });
   			  </script>

		  </div>
		  <br>
		  <br>
		  <br>
		  <br>
		</div>
</div>
<?php } ?>

<?php if ( $this->params['pass'][0] == 2 ) { ?>
	<div class="col-lg-12">
		  <div class="container"><br>
			  <div class="col-lg-12">
			   <h3> Application to operate a Wood Processing Plant</h3>
			  </div>
			  <div class="col-lg-4">
					<div class="form-group">
					  <br>
					  <?= $this->Form->create('Forestwood'); ?>
			  		  <?= $this->Form->input('idform',array('type'=>'hidden','value'=>2)) ?>
					  <br>
					  <?= $this->Form->input('type',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('place-date',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('contact-email',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('type-of-processing-plant',array('class'=>'form-control')); ?>
					  <br><br>1.
					  <?= $this->Form->input('name',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('address',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('permit-operate',array('class'=>'form-control')); ?>
					  <br>2.
					  <?= $this->Form->input('plant-name',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('plant-location',array('class'=>'form-control')); ?>
					  <br>3.
					  <?= $this->Form->input('timber-license-agreement-no',array('class'=>'form-control')); ?>
					  <br>4.
					  <?= $this->Form->input('re-sawmill',array('class'=>'form-control')); ?>
					  <br>7.
					  <?= $this->Form->input('capital-investment',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('total-employed',array('class'=>'form-control')); ?>
					  <br>8.
					  <?= $this->Form->input('name-plant',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('plant-supplied',array('class'=>'form-control')); ?>
					  <br>9.
					  <?= $this->Form->input('permit-no-sawmill',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('operate-sawmill-date',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('year-operated',array('class'=>'form-control')); ?>
					  <br>11.
					  <?= $this->Form->input('permit-applied-for',array('class'=>'form-control')); ?>
					  <br>12.
					  <?= $this->Form->input('permit-fee',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('cash-bond-fee',array('class'=>'form-control')); ?>
					  <br>13.
					  <?= $this->Form->input('machine-type',array('class'=>'form-control')); ?>
					  <br>Applicant information
					  <?= $this->Form->input('applicant-address',array('class'=>'form-control')); ?>
					  <br>Affidavit information
					  <?= $this->Form->input('municipality',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('applicant-name',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('day',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('month',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('year',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('tax-cert-no',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('issued-on',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('issued-at',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('tin-no',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('team-leader',array('class'=>'form-control')); ?>
					  <br>
					  <?= $this->Form->submit('Submit',array('class'=>'btn btn-default')); ?>
					  <?= $this->Form->end(); ?>
			  		</div>
			   </div>

			   <div class="col-lg-8">
			   		<div class="col-lg-12" style="border:1px solid #AAA;">
			   			<div style='position: absolute; left:100px; right:60px; top: 30px; bottom: 0;'>
							<img src='/img/DENR_Logo.png' style='width: 74px; height: 80px; margin-right:-20px; float:left;' />
						</div>
						<div style='text-align:center; font-size:16px; margin-top:20px;'>
		   				    <p style='font-size:14px;'>Republic of the Philippines</p>
						</div>
						<div style='text-align:center; margin-top:-10px;'><p><b>Department of Environment and Natural</b>	</p></div>	
						<div style	='text-align:center; margin-top:-12px;'><p><b>Resources</b></p></div>	
						<div style='text-align:center; margin-top:-14px;'><p><b>NATIONAL CAPITAL REGION</b></p></div>	
						<div style='text-align:center; margin-top:-14px; font-size:14px;'><p><b>North Production Nursery, 	North Avenue, Dil., Q.C.</b></p></div>

						<div style='text-indent:80px; font-size:14px; margin-top:20px;'><p>Appl. Fee: ______________________</p></div>
						<div style='text-indent:80px; font-size:14px; margin-top:-10px;'><p>Reg. Fee: 	______________________</p></div>	
						<div style='text-indent:80px; font-size:14px; margin-top:-10px;'><p>Permit Fee	: 	______________________</p></div>	
						<div style='text-indent:80px; font-size:14px; margin-top:-10px;'><p>Oath Fee: 	______________________</p></div>	
						<div>	
							<div style='float:left; widt	h:200px; text-indent:80px; font-size:14px; margin-top:-10px;'><p>	Bond Deposit: _________</p></div>	
							<div style='float:left; widt	h:200px; text-indent:80px; font-size:14px; margin-top:-10px;'><p>	(	Cash Bond) ___________</p></div>                   
						</div>
						<br>
						<div style='text-indent:80px;'><p>NEW OR RENEWAL (State which) <u id='type'></u></p></div>
						<div style='text-indent:80px; margin-top:-10px;'><p>PLACE AND DATE: <u id='place-date'></u></p></div>
						<div style='text-indent:80px; font-size:14px; margin-top:-10px;'><p>Telephone Number/E-mail address (if, there is) <u id='contact-email'></u></p></div>
						
						<div style='text-indent:80px; font-size:14px; margin-top:16px;'><p>(Make your writing legible. Fill all spaces properly to avoid delay)</p></div>

						<div style='text-indent:140px; margin-top:6px;'><p><b>APPLICATION TO OPERATE A WOOD PROCESSING PLANT</b></p></div>
						<div style='text-indent:160px; margin-top:-6px;'><p><u id='type-of-processing-plant'></u></p></div>
						<div style='text-indent:250px; margin-top:-6px;'><p>(Type of processing plant)</p></div>

						<div style='text-indent:80px; margin-top:16px;'>
							<p>THE REGIONAL EXECUTIVE DIRECTOR</p><br>
							<p style='margin-top:-34px;'>THRU: THE Regional Technical Director, FMS</p><br>
						</div>
						<div style='text-indent:80px; font-size:14px; margin-top:-32px;'>
							<p>The Chief, FULED<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							   DENR-NCR, Quezon City
							</p>
						</div>
						<div style='text-indent:80px; margin-top:-5px;'><p><b>Sir/ Madam:</b></p></div>
						<div style='margin-top:-30px;'>
						<br>
						<ol>
							<li>
								I, <u id='name'></u> of legal age , citizen of the Philippines and
								residents of <u id='address'></u> hereby apply for Permit to operate 
								<u id='permit-operate'></u>
							</li>
							<br>
							<li>
								The Trade name of the plant is <u id='plant-name'></u> located at
								 <u id='plant-location'></u>.
							</li>
							<br>
							<li>
								I am the owner of the said plant and I am not a holder of Timber License Agreement
								No.<u id='timber-license-agreement-no'></u> granted by the Director of Forest Management Bureau.
							</li>
							<br>
							<li>
								That the actual daily rated capacity of the re-sawmill based on an eight hour shift is
								<u id='re-sawmill'></u>.		
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
						<br>
						<table border="1" align="center" style="width:500px;">
							<tr>
								<th>Kind of Machineries</th>
								<th>Type</th>
								<th>Make</th>
								<th>Size</th>
								<th>Value</th>
								<th>Remarks</th>
							</tr>
							<tr>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
							</tr>
							<tr>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
							</tr>
							<tr>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
							</tr>
							<tr>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
							</tr>
							<tr>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
							</tr>
							<tr>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
							</tr>
						</table>
						<br>
						<div style="margin-top:10px;">
							<ol start="6">
								<li>
									Attached hereto is the description list of other requirements with evidences of ownership
									and improvements and their corresponding values (include on the list carriage, building,
									machine shops, planning mill, dry kiln, factory shop, lumberyard, docks etc).
								</li>
								<br>
								<li>
									The total capital invested of this plant is <u id='capital-investment'></u> and the total number of
									personnel employed is <u id='total-employed'></u>.
								</li>
								<br>
								<li>
									The <u id='name-plant'></u> to be sawn in the plant will be obtained from legitimate suppliers
									by purchased. In this case of the latter applicant must submit together with this
									application, the original contract duly notarize with the suppliers stating the volume of
									<u id='plant-supplied'></u> to be supplied as enumerated hereunder.
								</li>
							</ol>
						</div>
			   		</div>
			   </div>

			   <div class="col-lg-12" style="border:1px solid #AAA; margin-top:40px;">
			   		<br>
			   		<br>
			   		<table border="1" align="center" style="width:500px;">
						<tr>
							<th>O.T. LTC No. or Private Wood Land Reg. No</th>
							<th>Name of License or Registrant</th>
							<th>Location of mun. of province</th>
							<th>Vol. of lumber to be supplied (cu.m./bd.ft)</th>
							<th>Authorized allowable cut in cu.m.</th>
						</tr>
						<tr>
							<td colspan="1">&nbsp;</td>
							<td colspan="1">&nbsp;</td>
							<td colspan="1">&nbsp;</td>
							<td colspan="1">&nbsp;</td>
							<td colspan="1">&nbsp;</td>
						</tr>
						<tr>
							<td colspan="1">&nbsp;</td>
							<td colspan="1">&nbsp;</td>
							<td colspan="1">&nbsp;</td>
							<td colspan="1">&nbsp;</td>
							<td colspan="1">&nbsp;</td>
						</tr>
						<tr>
							<td colspan="1">&nbsp;</td>
							<td colspan="1">&nbsp;</td>
							<td colspan="1">&nbsp;</td>
							<td colspan="1">&nbsp;</td>
							<td colspan="1">&nbsp;</td>
						</tr>
					</table>
					<br>
					<br>
					<ol start="9">
						<li>
							Permit No. <u id='permit-no-sawmill'></u> dated <u id='operate-sawmill-date'></u> to operate this
							sawmill was granted by the Regional Executive Director of DENR-Nation Capital Region
							during the last fiscal year <u id='year-operated'></u>.
						</li>
						<li>
							Should this application be accepted, I obligate myself to comply faithfully with all the
							terms and conditions of my permit and with all rules and regulations and instructions issued in
							connection with RA. 460 and MAO 50 with amendment.
						</li>
						<li>
							I shall dispose the lumber produce under the permit applied for in
							<u id='permit-applied-for'></u>. (For alien retailer they must submit permit to engage in retail business)
						</li>
						<li>
							To show good faith in filing this application, I am enclosing herewith the require Oath
							Fee of P 36.00 and Application Fee of P 600.00, Permit Fee P <u id='permit-fee'></u> and Bond
							Deposit of P12,000 in cash or P <u id='cash-bond-fee'></u> in surety (only surety bonds posted by the
							bonding companies acceptable to the DENR maybe considered).
						</li>
						<li>
							 I understand that the making of this application and/or my voluntary remittance of the fees in	advance do not authorize me to operate the <u id='machine-type'></u> without the permit applied	for actually issued to me.
						</li>
						<li>
							I finally understand that the making of false statement on the application shall be considered sufficient for disapproval and that any false statement or material omission of the facts intentionally done, altering, changing or modifying the consideration of any of the conditions mentioned in said application may cause the cancellation of the license/permit, if already issued, without prejudice on the part of the government to cause the prosecution of the guilty party.
						</li>
					</ol>

														<div style='text-indent:320px; margin-top:40px;'>
															<p>________________________________</p>
														</div>
														<div style='text-indent:380px; margin-top:-10px;'>
															<p>Signature of Applicant</p>
														</div>
														<div style='text-indent:320px; margin-top:24px;'>
															<p><u id='applicant-address'></u></p>
														</div>
														<div style='text-indent:420px; margin-top:-10px;'>
															<p>Address</p>
														</div>
														<br>

					<div style='text-indent:220px; font-size:19px;'><u><b>A F F I D A V I T</b></u></div>
					<br><br>
						<div style='text-indent:2px;'>
							Republic of the Philippines<br>
							(______________________) S.S
						</div>
						<br><br>
						<div style='text-indent:40px;'>
							I, <u id='applicant-name'></u>, the applicant, first having been solemnly sworn upon my
							oath, depose and say, that I have thoroughly read the foregoing application, and each and every	statement in said application is true and correct to the best of my knowledge and belief. 
						</div>
														<br><br>
														<div style='text-indent:320px;'>
															<p>______________________</p>
														</div>
														<div style='text-indent:340px; margin-top:-10px;'>
															<p>Signature of Applicant</p>
														</div>
														<br><br>
						<div style='text-indent:40px;'>
							BEFORE ME, at the City indicated in this <u id='day'></u> day of <u id='month'></u> 201<u id='year'></u>,
							personally appeared the same person whose name and signature with his/her Community Tax
							Certificate No. <u id='tax-cert-no'></u> ISSUED ON <u id='issued-on'></u> ISSUED AT <u id='issued-at'></u> with
							Tax Identification (TIN) No. <u id='tin-no'></u>.
						</div>																		
			  											<br><br>
														<div style='text-indent:320px;'>
															<p><u id='team-leader'></u></p>
														</div>
														<div style='text-indent:380px; margin-top:-10px;'>
															<p>Team Leader</p>
														</div>
														<div style='text-indent:300px; margin-top:-10px;'>
															<p>Officer Authorized to Administer Oath</p>
														</div>

						<br>
									<div>
										Affix Doc. Stamp<br>
									</div>
									<div>
										C/Forms/elz/02
									</div>

						<script type="text/javascript">
			   			$(document).ready(function(){

			   				$('#ForestwoodType').keyup(function(){
	   							$('#type').text($(this).val());
	   						});

							$('#ForestwoodType').focusout(function(){
		 						$('#type').text($(this).val());
		   					});

							$('#ForestwoodPlace-date').keyup(function(){
	   							$('#place-date').text($(this).val());
	   						});

							$('#ForestwoodPlace-date').focusout(function(){
		 						$('#place-date').text($(this).val());
		   					});	

		   					$('#ForestwoodContact-email').keyup(function(){
	   							$('#contact-email').text($(this).val());
	   						});

							$('#ForestwoodContact-email').focusout(function(){
		 						$('#contact-email').text($(this).val());
		   					});	

		   					$('#ForestwoodType-of-processing-plant').keyup(function(){
	   							$('#type-of-processing-plant').text($(this).val());
	   						});

							$('#ForestwoodType-of-processing-plant').focusout(function(){
		 						$('#type-of-processing-plant').text($(this).val());
		   					});	

		   					$('#ForestwoodName').keyup(function(){
	   							$('#name').text($(this).val());
	   						});

							$('#ForestwoodName').focusout(function(){
		 						$('#name').text($(this).val());
		   					});  

		   					$('#ForestwoodAddress').keyup(function(){
	   							$('#address').text($(this).val());
	   						});

							$('#ForestwoodAddress').focusout(function(){
		 						$('#address').text($(this).val());
		   					}); 

		   					$('#ForestwoodPermit-operate').keyup(function(){
	   							$('#permit-operate').text($(this).val());
	   						});

							$('#ForestwoodPermit-operate').focusout(function(){
		 						$('#permit-operate').text($(this).val());
		   					});	

		   					$('#ForestwoodPlant-name').keyup(function(){
	   							$('#plant-name').text($(this).val());
	   						});

							$('#ForestwoodPlant-name').focusout(function(){
		 						$('#plant-name').text($(this).val());
		   					});	

		   					$('#ForestwoodPlant-location').keyup(function(){
	   							$('#plant-location').text($(this).val());
	   						});

							$('#ForestwoodPlant-location').focusout(function(){
		 						$('#plant-location').text($(this).val());
		   					});	

		   					$('#ForestwoodTimber-license-agreement-no').keyup(function(){
	   							$('#timber-license-agreement-no').text($(this).val());
	   						});

							$('#ForestwoodTimber-license-agreement-no').focusout(function(){
		 						$('#timber-license-agreement-no').text($(this).val());
		   					});	

		   					$('#ForestwoodRe-sawmill').keyup(function(){
	   							$('#re-sawmill').text($(this).val());
	   						});

							$('#ForestwoodRe-sawmill').focusout(function(){
		 						$('#re-sawmill').text($(this).val());
		   					});			
							
							$('#ForestwoodCapital-investment').keyup(function(){
	   							$('#capital-investment').text($(this).val());
	   						});

							$('#ForestwoodCapital-investment').focusout(function(){
		 						$('#capital-investment').text($(this).val());
		   					});	

		   					$('#ForestwoodTotal-employed').keyup(function(){
	   							$('#total-employed').text($(this).val());
	   						});

							$('#ForestwoodTotal-employed').focusout(function(){
		 						$('#total-employed').text($(this).val());
		   					});			
							
							$('#ForestwoodName-plant').keyup(function(){
	   							$('#name-plant').text($(this).val());
	   						});

							$('#ForestwoodName-plant').focusout(function(){
		 						$('#name-plant').text($(this).val());
		   					});	

		   					$('#ForestwoodPlant-supplied').keyup(function(){
	   							$('#plant-supplied').text($(this).val());
	   						});

							$('#ForestwoodPlant-supplied').focusout(function(){
		 						$('#plant-supplied').text($(this).val());
		   					});	

		   					$('#ForestwoodPermit-no-sawmill').keyup(function(){
	   							$('#permit-no-sawmill').text($(this).val());
	   						});

							$('#ForestwoodPermit-no-sawmill').focusout(function(){
		 						$('#permit-no-sawmill').text($(this).val());
		   					});	

		   					$('#ForestwoodOperate-sawmill-date').keyup(function(){
	   							$('#operate-sawmill-date').text($(this).val());
	   						});

							$('#ForestwoodOperate-sawmill-date').focusout(function(){
		 						$('#operate-sawmill-date').text($(this).val());
		   					});	

		   					$('#ForestwoodYear-operated').keyup(function(){
	   							$('#year-operated').text($(this).val());
	   						});

							$('#ForestwoodYear-operated').focusout(function(){
		 						$('#year-operated').text($(this).val());
		   					});	

		   					$('#ForestwoodPermit-applied-for').keyup(function(){
	   							$('#permit-applied-for').text($(this).val());
	   						});

							$('#ForestwoodPermit-applied-for').focusout(function(){
		 						$('#permit-applied-for').text($(this).val());
		   					});	

		   					$('#ForestwoodPermit-fee').keyup(function(){
	   							$('#permit-fee').text($(this).val());
	   						});

							$('#ForestwoodPermit-fee').focusout(function(){
		 						$('#permit-fee').text($(this).val());
		   					});	

		   					$('#ForestwoodCash-bond-fee').keyup(function(){
	   							$('#cash-bond-fee').text($(this).val());
	   						});

							$('#ForestwoodCash-bond-fee').focusout(function(){
		 						$('#cash-bond-fee').text($(this).val());
		   					});	

		   					$('#ForestwoodMachine-type').keyup(function(){
	   							$('#machine-type').text($(this).val());
	   						});

							$('#ForestwoodMachine-type').focusout(function(){
		 						$('#machine-type').text($(this).val());
		   					});	

		   					$('#ForestwoodApplicant-address').keyup(function(){
	   							$('#applicant-address').text($(this).val());
	   						});

							$('#ForestwoodApplicant-address').focusout(function(){
		 						$('#applicant-address').text($(this).val());
		   					});	

		   					$('#ForestwoodMunicipality').keyup(function(){
	   							$('#municipality').text($(this).val());
	   						});

							$('#ForestwoodMunicipality').focusout(function(){
		 						$('#municipality').text($(this).val());
		   					});	


		   					$('#ForestwoodApplicant-name').keyup(function(){
	   							$('#applicant-name').text($(this).val());
	   						});

							$('#ForestwoodApplicant-name').focusout(function(){
		 						$('#applicant-name').text($(this).val());
		   					});	

		   					$('#ForestwoodDay').keyup(function(){
	   							$('#day').text($(this).val());
	   						});

							$('#ForestwoodDay').focusout(function(){
		 						$('#day').text($(this).val());
		   					});			
							
							$('#ForestwoodMonth').keyup(function(){
	   							$('#month').text($(this).val());
	   						});

							$('#ForestwoodMonth').focusout(function(){
		 						$('#month').text($(this).val());
		   					});	

		   					$('#ForestwoodYear').keyup(function(){
	   							$('#year').text($(this).val());
	   						});

							$('#ForestwoodYear').focusout(function(){
		 						$('#year').text($(this).val());
		   					});	

		   					$('#ForestwoodTax-cert-no').keyup(function(){
	   							$('#tax-cert-no').text($(this).val());
	   						});

							$('#ForestwoodTax-cert-no').focusout(function(){
		 						$('#tax-cert-no').text($(this).val());
		   					});		

		   					$('#ForestwoodIssued-on').keyup(function(){
	   							$('#issued-on').text($(this).val());
	   						});

							$('#ForestwoodIssued-on').focusout(function(){
		 						$('#issued-on').text($(this).val());
		   					});			
							
							$('#Forestwoodissued-at').keyup(function(){
	   							$('#issued-at').text($(this).val());
	   						});

							$('#Forestwoodissued-at').focusout(function(){
		 						$('#issued-at').text($(this).val());
		   					});	

		   					$('#ForestwoodTin-no').keyup(function(){
	   							$('#tin-no').text($(this).val());
	   						});

							$('#ForestwoodTin-no').focusout(function(){
		 						$('#tin-no').text($(this).val());
		   					});	

		   					$('#ForestwoodTeam-leader').keyup(function(){
	   							$('#team-leader').text($(this).val());
	   						});

							$('#ForestwoodTeam-leader').focusout(function(){
		 						$('#team-leader').text($(this).val());
		   					});		

			  			 });
   			  </script>

						<br>
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

<?php if ( $this->params['pass'][0] == 3 ) { ?>
	<div class="col-lg-12">
		  <div class="container"><br>
			  <div class="col-lg-12">
			   <h3>Application for Registration as Imported/Dealer of Imported Wood Materials</h3>
			  </div>
			  <div class="col-lg-4">
					<div class="form-group">
					  <br>
					  <?= $this->Form->create('Forestlumb'); ?>
			  		  <?= $this->Form->input('idform',array('type'=>'hidden','value'=>3)) ?>
					  <br>
					  <?= $this->Form->input('type',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('place-date',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('contact-email',array('class'=>'form-control')); ?>
					  <br><br>1.
					  <?= $this->Form->input('name',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('address',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('permit-operate',array('class'=>'form-control')); ?>
					  <br>2.
					  <?= $this->Form->input('plant-name',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('plant-location',array('class'=>'form-control')); ?>
					  <br>3.
					  <?= $this->Form->input('timber-license-agreement-no',array('class'=>'form-control')); ?>
					  <br>4.
					  <?= $this->Form->input('re-sawmill',array('class'=>'form-control')); ?>
					  <br>7.
					  <?= $this->Form->input('capital-investment',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('total-employed',array('class'=>'form-control')); ?>
					  <br>8.
					  <?= $this->Form->input('name-plant',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('plant-supplied',array('class'=>'form-control')); ?>
					  <br>9.
					  <?= $this->Form->input('permit-no-sawmill',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('operate-sawmill-date',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('year-operated',array('class'=>'form-control')); ?>
					  <br>11.
					  <?= $this->Form->input('permit-applied-for',array('class'=>'form-control')); ?>
					  <br>12.
					  <?= $this->Form->input('permit-fee',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('cash-bond-fee',array('class'=>'form-control')); ?>
					  <br>13.
					  <?= $this->Form->input('machine-type',array('class'=>'form-control')); ?>
					  <br>Applicant information
					  <?= $this->Form->input('applicant-address',array('class'=>'form-control')); ?>
					  <br>Affidavit information
					  <?= $this->Form->input('municipality',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('applicant-name',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('day',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('month',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('year',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('tax-cert-no',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('issued-on',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('issued-at',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('tin-no',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('team-leader',array('class'=>'form-control')); ?>
					  <br>
					  <?= $this->Form->submit('Submit',array('class'=>'btn btn-default')); ?>
					  <?= $this->Form->end(); ?>
			  		</div>
			   </div>
			   <div class="col-lg-8">
			   		<div class="col-lg-12" style="border:1px solid #AAA;">
			   			<div style='position: absolute; left:100px; right:60px; top: 30px; bottom: 0;'>
							<img src='/img/DENR_Logo.png' style='width: 74px; height: 80px; margin-right:-20px; float:left;' />
						</div>
						<div style='text-align:center; font-size:16px; margin-top:20px;'>
		   				    <p style='font-size:14px;'>Republic of the Philippines</p>
						</div>
						<div style='text-align:center; margin-top:-10px;'><p><b>Department of Environment and Natural</b>	</p></div>	
						<div style	='text-align:center; margin-top:-12px;'><p><b>Resources</b></p></div>	
						<div style='text-align:center; margin-top:-14px;'><p><b>NATIONAL CAPITAL REGION</b></p></div>	
						<div style='text-align:center; margin-top:-14px; font-size:14px;'><p><b>North Production Nursery, 	North Avenue, Dil., Q.C.</b></p></div>

						<div style='text-indent:80px; font-size:14px; margin-top:20px;'><p>Appl. Fee: ______________________</p></div>
						<div style='text-indent:80px; font-size:14px; margin-top:-10px;'><p>Reg. Fee: 	______________________</p></div>	
						<div style='text-indent:80px; font-size:14px; margin-top:-10px;'><p>Permit Fee	: 	______________________</p></div>	
						<div style='text-indent:80px; font-size:14px; margin-top:-10px;'><p>Oath Fee: 	______________________</p></div>	
						<div>	
							<div style='float:left; widt	h:200px; text-indent:80px; font-size:14px; margin-top:-10px;'><p>	Bond Deposit: _________</p></div>	
							<div style='float:left; widt	h:200px; text-indent:80px; font-size:14px; margin-top:-10px;'><p>	(	Cash Bond) ___________</p></div>                   
						</div>
						<br>
						<div style='text-indent:80px;'><p>NEW OR RENEWAL (State which) <u id='type'></u></p></div>
						<div style='text-indent:80px; margin-top:-10px;'><p>PLACE AND DATE: <u id='place-date'></u></p></div>
						<div style='text-indent:80px; font-size:14px; margin-top:-10px;'><p>Telephone Number/E-mail address (if, there is) <u id='contact-email'></u></p></div>
						
						<div style='text-indent:80px; font-size:14px; margin-top:16px;'><p>(Make your writing legible. Fill all spaces properly to avoid delay)</p></div>

						<div style='text-indent:140px; margin-top:6px;'><p><b>APPLICATION FOR REGISTRATION AS IMPORTER/DEALER OF<br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						IMPORTED WOOD MATERIALS</b></p></div>
						
						<div style='text-indent:80px; margin-top:16px;'>
							<p>THE REGIONAL EXECUTIVE DIRECTOR</p><br>
							<p style='margin-top:-34px;'>THRU: THE Regional Technical Director, FMS</p><br>
						</div>
						<div style='text-indent:80px; font-size:14px; margin-top:-32px;'>
							<p>The Chief, FULED<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							   DENR-NCR, Quezon City
							</p>
						</div>
						<div style='text-indent:80px; margin-top:-5px;'><p><b>Sir/ Madam:</b></p></div>
						<div style='margin-top:-30px;'>
						<br>
						<ol>
							<li>
								I, <u id='name'></u> of legal age , citizen of the Philippines and
								residents of <u id='address'></u> hereby apply for Permit to operate 
								<u id='permit-operate'></u>
							</li>
							<br>
							<li>
								The Trade name of the plant is <u id='plant-name'></u> located at
								 <u id='plant-location'></u>.
							</li>
							<br>
							<li>
								I am the owner of the said plant and I am not a holder of Timber License Agreement
								No.<u id='timber-license-agreement-no'></u> granted by the Director of Forest Management Bureau.
							</li>
							<br>
							<li>
								That the actual daily rated capacity of the re-sawmill based on an eight hour shift is
								<u id='re-sawmill'></u>.		
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
						<br>
						<table border="1" align="center" style="width:500px;">
							<tr>
								<th>Kind of Machineries</th>
								<th>Type</th>
								<th>Make</th>
								<th>Size</th>
								<th>Value</th>
								<th>Remarks</th>
							</tr>
							<tr>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
							</tr>
							<tr>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
							</tr>
							<tr>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
							</tr>
							<tr>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
							</tr>
							<tr>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
							</tr>
							<tr>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
							</tr>
						</table>
						<br>
						<div style="margin-top:10px;">
							<ol start="6">
								<li>
									Attached hereto is the description list of other requirements with evidences of ownership
									and improvements and their corresponding values (include on the list carriage, building,
									machine shops, planning mill, dry kiln, factory shop, lumberyard, docks etc).
								</li>
								<br>
								<li>
									The total capital invested of this plant is <u id='capital-investment'></u> and the total number of
									personnel employed is <u id='total-employed'></u>.
								</li>
								<br>
								<li>
									The <u id='name-plant'></u> to be sawn in the plant will be obtained from legitimate suppliers
									by purchased. In this case of the latter applicant must submit together with this
									application, the original contract duly notarize with the suppliers stating the volume of
									<u id='plant-supplied'></u> to be supplied as enumerated hereunder.
								</li>
							</ol>
						</div>
			   		</div>
			   </div>

			   <div class="col-lg-12" style="border:1px solid #AAA; margin-top:40px;">
			   		<br>
			   		<br>
			   		<table border="1" align="center" style="width:500px;">
						<tr>
							<th>O.T. LTC No. or Private Wood Land Reg. No</th>
							<th>Name of License or Registrant</th>
							<th>Location of mun. of province</th>
							<th>Vol. of lumber to be supplied (cu.m./bd.ft)</th>
							<th>Authorized allowable cut in cu.m.</th>
						</tr>
						<tr>
							<td colspan="1">&nbsp;</td>
							<td colspan="1">&nbsp;</td>
							<td colspan="1">&nbsp;</td>
							<td colspan="1">&nbsp;</td>
							<td colspan="1">&nbsp;</td>
						</tr>
						<tr>
							<td colspan="1">&nbsp;</td>
							<td colspan="1">&nbsp;</td>
							<td colspan="1">&nbsp;</td>
							<td colspan="1">&nbsp;</td>
							<td colspan="1">&nbsp;</td>
						</tr>
						<tr>
							<td colspan="1">&nbsp;</td>
							<td colspan="1">&nbsp;</td>
							<td colspan="1">&nbsp;</td>
							<td colspan="1">&nbsp;</td>
							<td colspan="1">&nbsp;</td>
						</tr>
					</table>
					<br>
					<br>
					<ol start="9">
						<li>
							Permit No. <u id='permit-no-sawmill'></u> dated <u id='operate-sawmill-date'></u> to operate this
							sawmill was granted by the Regional Executive Director of DENR-Nation Capital Region
							during the last fiscal year <u id='year-operated'></u>.
						</li>
						<li>
							Should this application be accepted, I obligate myself to comply faithfully with all the
							terms and conditions of my permit and with all rules and regulations and instructions issued in
							connection with RA. 460 and MAO 50 with amendment.
						</li>
						<li>
							I shall dispose the lumber produce under the permit applied for in
							<u id='permit-applied-for'></u>. (For alien retailer they must submit permit to engage in retail business)
						</li>
						<li>
							To show good faith in filing this application, I am enclosing herewith the require Oath
							Fee of P 36.00 and Application Fee of P 600.00, Permit Fee P <u id='permit-fee'></u> and Bond
							Deposit of P12,000 in cash or P <u id='cash-bond-fee'></u> in surety (only surety bonds posted by the
							bonding companies acceptable to the DENR maybe considered).
						</li>
						<li>
							 I understand that the making of this application and/or my voluntary remittance of the fees in	advance do not authorize me to operate the <u id='machine-type'></u> without the permit applied	for actually issued to me.
						</li>
						<li>
							I finally understand that the making of false statement on the application shall be considered sufficient for disapproval and that any false statement or material omission of the facts intentionally done, altering, changing or modifying the consideration of any of the conditions mentioned in said application may cause the cancellation of the license/permit, if already issued, without prejudice on the part of the government to cause the prosecution of the guilty party.
						</li>
					</ol>

														<div style='text-indent:320px; margin-top:40px;'>
															<p>________________________________</p>
														</div>
														<div style='text-indent:380px; margin-top:-10px;'>
															<p>Signature of Applicant</p>
														</div>
														<div style='text-indent:320px; margin-top:24px;'>
															<p><u id='applicant-address'></u></p>
														</div>
														<div style='text-indent:420px; margin-top:-10px;'>
															<p>Address</p>
														</div>
														<br>

					<div style='text-indent:220px; font-size:19px;'><u><b>A F F I D A V I T</b></u></div>
					<br><br>
						<div style='text-indent:2px;'>
							Republic of the Philippines<br>
							(______________________) S.S
						</div>
						<br><br>
						<div style='text-indent:40px;'>
							I, <u id='applicant-name'></u>, the applicant, first having been solemnly sworn upon my
							oath, depose and say, that I have thoroughly read the foregoing application, and each and every	statement in said application is true and correct to the best of my knowledge and belief. 
						</div>
														<br><br>
														<div style='text-indent:320px;'>
															<p>______________________</p>
														</div>
														<div style='text-indent:340px; margin-top:-10px;'>
															<p>Signature of Applicant</p>
														</div>
														<br><br>
						<div style='text-indent:40px;'>
							BEFORE ME, at the City indicated in this <u id='day'></u> day of <u id='month'></u> 201<u id='year'></u>,
							personally appeared the same person whose name and signature with his/her Community Tax
							Certificate No. <u id='tax-cert-no'></u> ISSUED ON <u id='issued-on'></u> ISSUED AT <u id='issued-at'></u> with
							Tax Identification (TIN) No. <u id='tin-no'></u>.
						</div>																		
			  											<br><br>
														<div style='text-indent:320px;'>
															<p><u id='team-leader'></u></p>
														</div>
														<div style='text-indent:380px; margin-top:-10px;'>
															<p>Team Leader</p>
														</div>
														<div style='text-indent:300px; margin-top:-10px;'>
															<p>Officer Authorized to Administer Oath</p>
														</div>

						<br>
									<div>
										Affix Doc. Stamp<br>
									</div>
									<div>
										C/Forms/elz/02
									</div>

					<script type="text/javascript">
			   			$(document).ready(function(){

			   				$('#ForestlumbType').keyup(function(){
	   							$('#type').text($(this).val());
	   						});

							$('#ForestlumbType').focusout(function(){
		 						$('#type').text($(this).val());
		   					});

							$('#ForestlumbPlace-date').keyup(function(){
	   							$('#place-date').text($(this).val());
	   						});

							$('#ForestlumbPlace-date').focusout(function(){
		 						$('#place-date').text($(this).val());
		   					});	

		   					$('#ForestlumbContact-email').keyup(function(){
	   							$('#contact-email').text($(this).val());
	   						});

							$('#ForestlumbContact-email').focusout(function(){
		 						$('#contact-email').text($(this).val());
		   					});	

		   					$('#ForestlumbType-of-processing-plant').keyup(function(){
	   							$('#type-of-processing-plant').text($(this).val());
	   						});

							$('#ForestlumbType-of-processing-plant').focusout(function(){
		 						$('#type-of-processing-plant').text($(this).val());
		   					});	

		   					$('#ForestlumbName').keyup(function(){
	   							$('#name').text($(this).val());
	   						});

							$('#ForestlumbName').focusout(function(){
		 						$('#name').text($(this).val());
		   					});  

		   					$('#ForestlumbAddress').keyup(function(){
	   							$('#address').text($(this).val());
	   						});

							$('#ForestlumbAddress').focusout(function(){
		 						$('#address').text($(this).val());
		   					}); 

		   					$('#ForestlumbPermit-operate').keyup(function(){
	   							$('#permit-operate').text($(this).val());
	   						});

							$('#ForestlumbPermit-operate').focusout(function(){
		 						$('#permit-operate').text($(this).val());
		   					});	

		   					$('#ForestlumbPlant-name').keyup(function(){
	   							$('#plant-name').text($(this).val());
	   						});

							$('#ForestlumbPlant-name').focusout(function(){
		 						$('#plant-name').text($(this).val());
		   					});	

		   					$('#ForestlumbPlant-location').keyup(function(){
	   							$('#plant-location').text($(this).val());
	   						});

							$('#ForestlumbPlant-location').focusout(function(){
		 						$('#plant-location').text($(this).val());
		   					});	

		   					$('#ForestlumbTimber-license-agreement-no').keyup(function(){
	   							$('#timber-license-agreement-no').text($(this).val());
	   						});

							$('#ForestlumbTimber-license-agreement-no').focusout(function(){
		 						$('#timber-license-agreement-no').text($(this).val());
		   					});	

		   					$('#ForestlumbRe-sawmill').keyup(function(){
	   							$('#re-sawmill').text($(this).val());
	   						});

							$('#ForestlumbRe-sawmill').focusout(function(){
		 						$('#re-sawmill').text($(this).val());
		   					});			
							
							$('#ForestlumbCapital-investment').keyup(function(){
	   							$('#capital-investment').text($(this).val());
	   						});

							$('#ForestlumbCapital-investment').focusout(function(){
		 						$('#capital-investment').text($(this).val());
		   					});	

		   					$('#ForestlumbTotal-employed').keyup(function(){
	   							$('#total-employed').text($(this).val());
	   						});

							$('#ForestlumbTotal-employed').focusout(function(){
		 						$('#total-employed').text($(this).val());
		   					});			
							
							$('#ForestlumbName-plant').keyup(function(){
	   							$('#name-plant').text($(this).val());
	   						});

							$('#ForestlumbName-plant').focusout(function(){
		 						$('#name-plant').text($(this).val());
		   					});	

		   					$('#ForestlumbPlant-supplied').keyup(function(){
	   							$('#plant-supplied').text($(this).val());
	   						});

							$('#ForestlumbPlant-supplied').focusout(function(){
		 						$('#plant-supplied').text($(this).val());
		   					});	

		   					$('#ForestlumbPermit-no-sawmill').keyup(function(){
	   							$('#permit-no-sawmill').text($(this).val());
	   						});

							$('#ForestlumbPermit-no-sawmill').focusout(function(){
		 						$('#permit-no-sawmill').text($(this).val());
		   					});	

		   					$('#ForestlumbOperate-sawmill-date').keyup(function(){
	   							$('#operate-sawmill-date').text($(this).val());
	   						});

							$('#ForestlumbOperate-sawmill-date').focusout(function(){
		 						$('#operate-sawmill-date').text($(this).val());
		   					});	

		   					$('#ForestlumbYear-operated').keyup(function(){
	   							$('#year-operated').text($(this).val());
	   						});

							$('#ForestlumbYear-operated').focusout(function(){
		 						$('#year-operated').text($(this).val());
		   					});	

		   					$('#ForestlumbPermit-applied-for').keyup(function(){
	   							$('#permit-applied-for').text($(this).val());
	   						});

							$('#ForestlumbPermit-applied-for').focusout(function(){
		 						$('#permit-applied-for').text($(this).val());
		   					});	

		   					$('#ForestlumbPermit-fee').keyup(function(){
	   							$('#permit-fee').text($(this).val());
	   						});

							$('#ForestlumbPermit-fee').focusout(function(){
		 						$('#permit-fee').text($(this).val());
		   					});	

		   					$('#ForestlumbCash-bond-fee').keyup(function(){
	   							$('#cash-bond-fee').text($(this).val());
	   						});

							$('#ForestlumbCash-bond-fee').focusout(function(){
		 						$('#cash-bond-fee').text($(this).val());
		   					});	

		   					$('#ForestlumbMachine-type').keyup(function(){
	   							$('#machine-type').text($(this).val());
	   						});

							$('#ForestlumbMachine-type').focusout(function(){
		 						$('#machine-type').text($(this).val());
		   					});	

		   					$('#ForestlumbApplicant-address').keyup(function(){
	   							$('#applicant-address').text($(this).val());
	   						});

							$('#ForestlumbApplicant-address').focusout(function(){
		 						$('#applicant-address').text($(this).val());
		   					});	

		   					$('#ForestlumbMunicipality').keyup(function(){
	   							$('#municipality').text($(this).val());
	   						});

							$('#ForestlumbMunicipality').focusout(function(){
		 						$('#municipality').text($(this).val());
		   					});	


		   					$('#ForestlumbApplicant-name').keyup(function(){
	   							$('#applicant-name').text($(this).val());
	   						});

							$('#ForestlumbApplicant-name').focusout(function(){
		 						$('#applicant-name').text($(this).val());
		   					});	

		   					$('#ForestlumbDay').keyup(function(){
	   							$('#day').text($(this).val());
	   						});

							$('#ForestlumbDay').focusout(function(){
		 						$('#day').text($(this).val());
		   					});			
							
							$('#ForestlumbMonth').keyup(function(){
	   							$('#month').text($(this).val());
	   						});

							$('#ForestlumbMonth').focusout(function(){
		 						$('#month').text($(this).val());
		   					});	

		   					$('#ForestlumbYear').keyup(function(){
	   							$('#year').text($(this).val());
	   						});

							$('#ForestlumbYear').focusout(function(){
		 						$('#year').text($(this).val());
		   					});	

		   					$('#ForestlumbTax-cert-no').keyup(function(){
	   							$('#tax-cert-no').text($(this).val());
	   						});

							$('#ForestlumbTax-cert-no').focusout(function(){
		 						$('#tax-cert-no').text($(this).val());
		   					});		

		   					$('#ForestlumbIssued-on').keyup(function(){
	   							$('#issued-on').text($(this).val());
	   						});

							$('#ForestlumbIssued-on').focusout(function(){
		 						$('#issued-on').text($(this).val());
		   					});			
							
							$('#Forestlumbissued-at').keyup(function(){
	   							$('#issued-at').text($(this).val());
	   						});

							$('#Forestlumbissued-at').focusout(function(){
		 						$('#issued-at').text($(this).val());
		   					});	

		   					$('#ForestlumbTin-no').keyup(function(){
	   							$('#tin-no').text($(this).val());
	   						});

							$('#ForestlumbTin-no').focusout(function(){
		 						$('#tin-no').text($(this).val());
		   					});	

		   					$('#ForestlumbTeam-leader').keyup(function(){
	   							$('#team-leader').text($(this).val());
	   						});

							$('#ForestlumbTeam-leader').focusout(function(){
		 						$('#team-leader').text($(this).val());
		   					});		

			  			 });
   			  </script>

						<br>
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

<?php if ( $this->params['pass'][0] == 4 ) { ?>
	<div class="col-lg-12">
		  <div class="container"><br>
			  <div class="col-lg-12">
			   <h3>Application for Certificate of Registration as Lumber Dealer</h3>
			  </div>
			  <div class="col-lg-4">
					<div class="form-group">
					  <br>
					  <?= $this->Form->create('Forestdealer'); ?>
			  		  <?= $this->Form->input('idform',array('type'=>'hidden','value'=>4)) ?>
					  <br>
					  <?= $this->Form->input('type',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('place-date',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('contact-email',array('class'=>'form-control')); ?>
					  <br><br>1.
					  <?= $this->Form->input('name',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('address',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('permit-operate',array('class'=>'form-control')); ?>
					  <br>2.
					  <?= $this->Form->input('plant-name',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('plant-location',array('class'=>'form-control')); ?>
					  <br>3.
					  <?= $this->Form->input('timber-license-agreement-no',array('class'=>'form-control')); ?>
					  <br>4.
					  <?= $this->Form->input('re-sawmill',array('class'=>'form-control')); ?>
					  <br>7.
					  <?= $this->Form->input('capital-investment',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('total-employed',array('class'=>'form-control')); ?>
					  <br>8.
					  <?= $this->Form->input('name-plant',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('plant-supplied',array('class'=>'form-control')); ?>
					  <br>9.
					  <?= $this->Form->input('permit-no-sawmill',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('operate-sawmill-date',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('year-operated',array('class'=>'form-control')); ?>
					  <br>11.
					  <?= $this->Form->input('permit-applied-for',array('class'=>'form-control')); ?>
					  <br>12.
					  <?= $this->Form->input('permit-fee',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('cash-bond-fee',array('class'=>'form-control')); ?>
					  <br>13.
					  <?= $this->Form->input('machine-type',array('class'=>'form-control')); ?>
					  <br>Applicant information
					  <?= $this->Form->input('applicant-address',array('class'=>'form-control')); ?>
					  <br>Affidavit information
					  <?= $this->Form->input('municipality',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('applicant-name',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('day',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('month',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('year',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('tax-cert-no',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('issued-on',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('issued-at',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('tin-no',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('team-leader',array('class'=>'form-control')); ?>
					  <br>
					  <?= $this->Form->submit('Submit',array('class'=>'btn btn-default')); ?>
					  <?= $this->Form->end(); ?>
			  		</div>
			   </div>
			   <div class="col-lg-8">
			   		<div class="col-lg-12" style="border:1px solid #AAA;">
			   			<div style='position: absolute; left:100px; right:60px; top: 30px; bottom: 0;'>
							<img src='/img/DENR_Logo.png' style='width: 74px; height: 80px; margin-right:-20px; float:left;' />
						</div>
						<div style='text-align:center; font-size:16px; margin-top:20px;'>
		   				    <p style='font-size:14px;'>Republic of the Philippines</p>
						</div>
						<div style='text-align:center; margin-top:-10px;'><p><b>Department of Environment and Natural</b>	</p></div>	
						<div style	='text-align:center; margin-top:-12px;'><p><b>Resources</b></p></div>	
						<div style='text-align:center; margin-top:-14px;'><p><b>NATIONAL CAPITAL REGION</b></p></div>	
						<div style='text-align:center; margin-top:-14px; font-size:14px;'><p><b>North Production Nursery, 	North Avenue, Dil., Q.C.</b></p></div>

						<div style='text-indent:80px; font-size:14px; margin-top:20px;'><p>Appl. Fee: ______________________</p></div>
						<div style='text-indent:80px; font-size:14px; margin-top:-10px;'><p>Reg. Fee: 	______________________</p></div>	
						<div style='text-indent:80px; font-size:14px; margin-top:-10px;'><p>Permit Fee	: 	______________________</p></div>	
						<div style='text-indent:80px; font-size:14px; margin-top:-10px;'><p>Oath Fee: 	______________________</p></div>	
						<div>	
							<div style='float:left; widt	h:200px; text-indent:80px; font-size:14px; margin-top:-10px;'><p>	Bond Deposit: _________</p></div>	
							<div style='float:left; widt	h:200px; text-indent:80px; font-size:14px; margin-top:-10px;'><p>	(	Cash Bond) ___________</p></div>                   
						</div>
						<br>
						<div style='text-indent:80px;'><p>NEW OR RENEWAL (State which) <u id='type'></u></p></div>
						<div style='text-indent:80px; margin-top:-10px;'><p>PLACE AND DATE: <u id='place-date'></u></p></div>
						<div style='text-indent:80px; font-size:14px; margin-top:-10px;'><p>Telephone Number/E-mail address (if, there is) <u id='contact-email'></u></p></div>
						
						<div style='text-indent:80px; font-size:14px; margin-top:16px;'><p>(Make your writing legible. Fill all spaces properly to avoid delay)</p></div>

						<div style='text-indent:140px; margin-top:6px;'><p><b>APPLICATION FOR REGISTRATION AS IMPORTER/DEALER OF<br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						IMPORTED WOOD MATERIALS</b></p></div>
						
						<div style='text-indent:80px; margin-top:16px;'>
							<p>THE REGIONAL EXECUTIVE DIRECTOR</p><br>
							<p style='margin-top:-34px;'>THRU: THE Regional Technical Director, FMS</p><br>
						</div>
						<div style='text-indent:80px; font-size:14px; margin-top:-32px;'>
							<p>The Chief, FULED<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							   DENR-NCR, Quezon City
							</p>
						</div>
						<div style='text-indent:80px; margin-top:-5px;'><p><b>Sir/ Madam:</b></p></div>
						<div style='margin-top:-30px;'>
						<br>
						<ol>
							<li>
								I, <u id='name'></u> of legal age , citizen of the Philippines and
								residents of <u id='address'></u> hereby apply for Permit to operate 
								<u id='permit-operate'></u>
							</li>
							<br>
							<li>
								The Trade name of the plant is <u id='plant-name'></u> located at
								 <u id='plant-location'></u>.
							</li>
							<br>
							<li>
								I am the owner of the said plant and I am not a holder of Timber License Agreement
								No.<u id='timber-license-agreement-no'></u> granted by the Director of Forest Management Bureau.
							</li>
							<br>
							<li>
								That the actual daily rated capacity of the re-sawmill based on an eight hour shift is
								<u id='re-sawmill'></u>.		
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
						<br>
						<table border="1" align="center" style="width:500px;">
							<tr>
								<th>Kind of Machineries</th>
								<th>Type</th>
								<th>Make</th>
								<th>Size</th>
								<th>Value</th>
								<th>Remarks</th>
							</tr>
							<tr>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
							</tr>
							<tr>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
							</tr>
							<tr>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
							</tr>
							<tr>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
							</tr>
							<tr>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
							</tr>
							<tr>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
								<td colspan="1">&nbsp;</td>
							</tr>
						</table>
						<br>
						<div style="margin-top:10px;">
							<ol start="6">
								<li>
									Attached hereto is the description list of other requirements with evidences of ownership
									and improvements and their corresponding values (include on the list carriage, building,
									machine shops, planning mill, dry kiln, factory shop, lumberyard, docks etc).
								</li>
								<br>
								<li>
									The total capital invested of this plant is <u id='capital-investment'></u> and the total number of
									personnel employed is <u id='total-employed'></u>.
								</li>
								<br>
								<li>
									The <u id='name-plant'></u> to be sawn in the plant will be obtained from legitimate suppliers
									by purchased. In this case of the latter applicant must submit together with this
									application, the original contract duly notarize with the suppliers stating the volume of
									<u id='plant-supplied'></u> to be supplied as enumerated hereunder.
								</li>
							</ol>
						</div>
			   		</div>
			   </div>

			   <div class="col-lg-12" style="border:1px solid #AAA; margin-top:40px;">
			   		<br>
			   		<br>
			   		<table border="1" align="center" style="width:500px;">
						<tr>
							<th>O.T. LTC No. or Private Wood Land Reg. No</th>
							<th>Name of License or Registrant</th>
							<th>Location of mun. of province</th>
							<th>Vol. of lumber to be supplied (cu.m./bd.ft)</th>
							<th>Authorized allowable cut in cu.m.</th>
						</tr>
						<tr>
							<td colspan="1">&nbsp;</td>
							<td colspan="1">&nbsp;</td>
							<td colspan="1">&nbsp;</td>
							<td colspan="1">&nbsp;</td>
							<td colspan="1">&nbsp;</td>
						</tr>
						<tr>
							<td colspan="1">&nbsp;</td>
							<td colspan="1">&nbsp;</td>
							<td colspan="1">&nbsp;</td>
							<td colspan="1">&nbsp;</td>
							<td colspan="1">&nbsp;</td>
						</tr>
						<tr>
							<td colspan="1">&nbsp;</td>
							<td colspan="1">&nbsp;</td>
							<td colspan="1">&nbsp;</td>
							<td colspan="1">&nbsp;</td>
							<td colspan="1">&nbsp;</td>
						</tr>
					</table>
					<br>
					<br>
					<ol start="9">
						<li>
							Permit No. <u id='permit-no-sawmill'></u> dated <u id='operate-sawmill-date'></u> to operate this
							sawmill was granted by the Regional Executive Director of DENR-Nation Capital Region
							during the last fiscal year <u id='year-operated'></u>.
						</li>
						<li>
							Should this application be accepted, I obligate myself to comply faithfully with all the
							terms and conditions of my permit and with all rules and regulations and instructions issued in
							connection with RA. 460 and MAO 50 with amendment.
						</li>
						<li>
							I shall dispose the lumber produce under the permit applied for in
							<u id='permit-applied-for'></u>. (For alien retailer they must submit permit to engage in retail business)
						</li>
						<li>
							To show good faith in filing this application, I am enclosing herewith the require Oath
							Fee of P 36.00 and Application Fee of P 600.00, Permit Fee P <u id='permit-fee'></u> and Bond
							Deposit of P12,000 in cash or P <u id='cash-bond-fee'></u> in surety (only surety bonds posted by the
							bonding companies acceptable to the DENR maybe considered).
						</li>
						<li>
							 I understand that the making of this application and/or my voluntary remittance of the fees in	advance do not authorize me to operate the <u id='machine-type'></u> without the permit applied	for actually issued to me.
						</li>
						<li>
							I finally understand that the making of false statement on the application shall be considered sufficient for disapproval and that any false statement or material omission of the facts intentionally done, altering, changing or modifying the consideration of any of the conditions mentioned in said application may cause the cancellation of the license/permit, if already issued, without prejudice on the part of the government to cause the prosecution of the guilty party.
						</li>
					</ol>

														<div style='text-indent:320px; margin-top:40px;'>
															<p>________________________________</p>
														</div>
														<div style='text-indent:380px; margin-top:-10px;'>
															<p>Signature of Applicant</p>
														</div>
														<div style='text-indent:320px; margin-top:24px;'>
															<p><u id='applicant-address'></u></p>
														</div>
														<div style='text-indent:420px; margin-top:-10px;'>
															<p>Address</p>
														</div>
														<br>

					<div style='text-indent:220px; font-size:19px;'><u><b>A F F I D A V I T</b></u></div>
					<br><br>
						<div style='text-indent:2px;'>
							Republic of the Philippines<br>
							(______________________) S.S
						</div>
						<br><br>
						<div style='text-indent:40px;'>
							I, <u id='applicant-name'></u>, the applicant, first having been solemnly sworn upon my
							oath, depose and say, that I have thoroughly read the foregoing application, and each and every	statement in said application is true and correct to the best of my knowledge and belief. 
						</div>
														<br><br>
														<div style='text-indent:320px;'>
															<p>______________________</p>
														</div>
														<div style='text-indent:340px; margin-top:-10px;'>
															<p>Signature of Applicant</p>
														</div>
														<br><br>
						<div style='text-indent:40px;'>
							BEFORE ME, at the City indicated in this <u id='day'></u> day of <u id='month'></u> 201<u id='year'></u>,
							personally appeared the same person whose name and signature with his/her Community Tax
							Certificate No. <u id='tax-cert-no'></u> ISSUED ON <u id='issued-on'></u> ISSUED AT <u id='issued-at'></u> with
							Tax Identification (TIN) No. <u id='tin-no'></u>.
						</div>																		
			  											<br><br>
														<div style='text-indent:320px;'>
															<p><u id='team-leader'></u></p>
														</div>
														<div style='text-indent:380px; margin-top:-10px;'>
															<p>Team Leader</p>
														</div>
														<div style='text-indent:300px; margin-top:-10px;'>
															<p>Officer Authorized to Administer Oath</p>
														</div>

						<br>
									<div>
										Affix Doc. Stamp<br>
									</div>
									<div>
										C/Forms/elz/02
									</div>

					<script type="text/javascript">
			   			$(document).ready(function(){

			   				$('#ForestdealerType').keyup(function(){
	   							$('#type').text($(this).val());
	   						});

							$('#ForestdealerType').focusout(function(){
		 						$('#type').text($(this).val());
		   					});

							$('#ForestdealerPlace-date').keyup(function(){
	   							$('#place-date').text($(this).val());
	   						});

							$('#ForestdealerPlace-date').focusout(function(){
		 						$('#place-date').text($(this).val());
		   					});	

		   					$('#ForestdealerContact-email').keyup(function(){
	   							$('#contact-email').text($(this).val());
	   						});

							$('#ForestdealerContact-email').focusout(function(){
		 						$('#contact-email').text($(this).val());
		   					});	

		   					$('#ForestdealerType-of-processing-plant').keyup(function(){
	   							$('#type-of-processing-plant').text($(this).val());
	   						});

							$('#ForestdealerType-of-processing-plant').focusout(function(){
		 						$('#type-of-processing-plant').text($(this).val());
		   					});	

		   					$('#ForestdealerName').keyup(function(){
	   							$('#name').text($(this).val());
	   						});

							$('#ForestdealerName').focusout(function(){
		 						$('#name').text($(this).val());
		   					});  

		   					$('#ForestdealerAddress').keyup(function(){
	   							$('#address').text($(this).val());
	   						});

							$('#ForestdealerAddress').focusout(function(){
		 						$('#address').text($(this).val());
		   					}); 

		   					$('#ForestdealerPermit-operate').keyup(function(){
	   							$('#permit-operate').text($(this).val());
	   						});

							$('#ForestdealerPermit-operate').focusout(function(){
		 						$('#permit-operate').text($(this).val());
		   					});	

		   					$('#ForestdealerPlant-name').keyup(function(){
	   							$('#plant-name').text($(this).val());
	   						});

							$('#ForestdealerPlant-name').focusout(function(){
		 						$('#plant-name').text($(this).val());
		   					});	

		   					$('#ForestdealerPlant-location').keyup(function(){
	   							$('#plant-location').text($(this).val());
	   						});

							$('#ForestdealerPlant-location').focusout(function(){
		 						$('#plant-location').text($(this).val());
		   					});	

		   					$('#ForestdealerTimber-license-agreement-no').keyup(function(){
	   							$('#timber-license-agreement-no').text($(this).val());
	   						});

							$('#ForestdealerTimber-license-agreement-no').focusout(function(){
		 						$('#timber-license-agreement-no').text($(this).val());
		   					});	

		   					$('#ForestdealerRe-sawmill').keyup(function(){
	   							$('#re-sawmill').text($(this).val());
	   						});

							$('#ForestdealerRe-sawmill').focusout(function(){
		 						$('#re-sawmill').text($(this).val());
		   					});			
							
							$('#ForestdealerCapital-investment').keyup(function(){
	   							$('#capital-investment').text($(this).val());
	   						});

							$('#ForestdealerCapital-investment').focusout(function(){
		 						$('#capital-investment').text($(this).val());
		   					});	

		   					$('#ForestdealerTotal-employed').keyup(function(){
	   							$('#total-employed').text($(this).val());
	   						});

							$('#ForestdealerTotal-employed').focusout(function(){
		 						$('#total-employed').text($(this).val());
		   					});			
							
							$('#ForestdealerName-plant').keyup(function(){
	   							$('#name-plant').text($(this).val());
	   						});

							$('#ForestdealerName-plant').focusout(function(){
		 						$('#name-plant').text($(this).val());
		   					});	

		   					$('#ForestdealerPlant-supplied').keyup(function(){
	   							$('#plant-supplied').text($(this).val());
	   						});

							$('#ForestdealerPlant-supplied').focusout(function(){
		 						$('#plant-supplied').text($(this).val());
		   					});	

		   					$('#ForestdealerPermit-no-sawmill').keyup(function(){
	   							$('#permit-no-sawmill').text($(this).val());
	   						});

							$('#ForestdealerPermit-no-sawmill').focusout(function(){
		 						$('#permit-no-sawmill').text($(this).val());
		   					});	

		   					$('#ForestdealerOperate-sawmill-date').keyup(function(){
	   							$('#operate-sawmill-date').text($(this).val());
	   						});

							$('#ForestdealerOperate-sawmill-date').focusout(function(){
		 						$('#operate-sawmill-date').text($(this).val());
		   					});	

		   					$('#ForestdealerYear-operated').keyup(function(){
	   							$('#year-operated').text($(this).val());
	   						});

							$('#ForestdealerYear-operated').focusout(function(){
		 						$('#year-operated').text($(this).val());
		   					});	

		   					$('#ForestdealerPermit-applied-for').keyup(function(){
	   							$('#permit-applied-for').text($(this).val());
	   						});

							$('#ForestdealerPermit-applied-for').focusout(function(){
		 						$('#permit-applied-for').text($(this).val());
		   					});	

		   					$('#ForestdealerPermit-fee').keyup(function(){
	   							$('#permit-fee').text($(this).val());
	   						});

							$('#ForestdealerPermit-fee').focusout(function(){
		 						$('#permit-fee').text($(this).val());
		   					});	

		   					$('#ForestdealerCash-bond-fee').keyup(function(){
	   							$('#cash-bond-fee').text($(this).val());
	   						});

							$('#ForestdealerCash-bond-fee').focusout(function(){
		 						$('#cash-bond-fee').text($(this).val());
		   					});	

		   					$('#ForestdealerMachine-type').keyup(function(){
	   							$('#machine-type').text($(this).val());
	   						});

							$('#ForestdealerMachine-type').focusout(function(){
		 						$('#machine-type').text($(this).val());
		   					});	

		   					$('#ForestdealerApplicant-address').keyup(function(){
	   							$('#applicant-address').text($(this).val());
	   						});

							$('#ForestdealerApplicant-address').focusout(function(){
		 						$('#applicant-address').text($(this).val());
		   					});	

		   					$('#ForestdealerMunicipality').keyup(function(){
	   							$('#municipality').text($(this).val());
	   						});

							$('#ForestdealerMunicipality').focusout(function(){
		 						$('#municipality').text($(this).val());
		   					});	


		   					$('#ForestdealerApplicant-name').keyup(function(){
	   							$('#applicant-name').text($(this).val());
	   						});

							$('#ForestdealerApplicant-name').focusout(function(){
		 						$('#applicant-name').text($(this).val());
		   					});	

		   					$('#ForestdealerDay').keyup(function(){
	   							$('#day').text($(this).val());
	   						});

							$('#ForestdealerDay').focusout(function(){
		 						$('#day').text($(this).val());
		   					});			
							
							$('#ForestdealerMonth').keyup(function(){
	   							$('#month').text($(this).val());
	   						});

							$('#ForestdealerMonth').focusout(function(){
		 						$('#month').text($(this).val());
		   					});	

		   					$('#ForestdealerYear').keyup(function(){
	   							$('#year').text($(this).val());
	   						});

							$('#ForestdealerYear').focusout(function(){
		 						$('#year').text($(this).val());
		   					});	

		   					$('#ForestdealerTax-cert-no').keyup(function(){
	   							$('#tax-cert-no').text($(this).val());
	   						});

							$('#ForestdealerTax-cert-no').focusout(function(){
		 						$('#tax-cert-no').text($(this).val());
		   					});		

		   					$('#ForestdealerIssued-on').keyup(function(){
	   							$('#issued-on').text($(this).val());
	   						});

							$('#ForestdealerIssued-on').focusout(function(){
		 						$('#issued-on').text($(this).val());
		   					});			
							
							$('#Forestdealerissued-at').keyup(function(){
	   							$('#issued-at').text($(this).val());
	   						});

							$('#Forestdealerissued-at').focusout(function(){
		 						$('#issued-at').text($(this).val());
		   					});	

		   					$('#ForestdealerTin-no').keyup(function(){
	   							$('#tin-no').text($(this).val());
	   						});

							$('#ForestdealerTin-no').focusout(function(){
		 						$('#tin-no').text($(this).val());
		   					});	

		   					$('#ForestdealerTeam-leader').keyup(function(){
	   							$('#team-leader').text($(this).val());
	   						});

							$('#ForestdealerTeam-leader').focusout(function(){
		 						$('#team-leader').text($(this).val());
		   					});		

			  			 });
   			  </script>

						<br>
						<br>
						<br>
			   			</div>
			   		</div>
			   	</div>
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
			   <h3>List of Requirements for Certificate of Registration as Lumber Dealer</h3>
			  </div>
			<div class="col-lg-4">
					<div class="form-group">
					  <br>
					  <?= $this->Form->create('Forestcert'); ?>
			  		  <?= $this->Form->input('idform',array('type'=>'hidden','value'=>5)) ?>
					  <br> 
					  <?= $this->Form->input('establishment',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('address',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('name',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('supplier',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('wppp',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('volume/duration',array('class'=>'form-control')); ?>
					  <br>
					  <?= $this->Form->submit('Submit',array('class'=>'btn btn-default')); ?>
					  <?= $this->Form->end(); ?>
			  		</div>
			</div>
			 <div class="col-lg-8">
			  	<div class="col-lg-12" style="border:1px solid #AAA;">
			  		<br><br>
			  		<br><br>
			  		<div style='text-align:center; font-size:18px;'>
	   				<p><b>List for Requirements for</b></p>
	   				</div>
	   				<div style='text-align:center; margin-top:-30px;'><b>____________________________</b></div>
	   				<div style='text-align:center; font-size:18px; margin-top:-4px;'>
	   					<p><b>Certificate of Registration as Lumber Dealer</b></p>
	   				</div>
	   				<div style='text-align:center; margin-top:-30px;'>_______________________________________________</div>
	   				<div style='text-align:center; margin-top:6px;'>__________________________________________________________________</div>
	   				<br>
	   				<div style='text-indent:40px;'><u id='establishment'></u></div>
	   				<div style='text-indent:40px; margin-top:-4px;'>
	   					<p>(Name of establishment)</p>
					</div>
					<br>
					<div style='text-indent:40px; margin-top:-20px;'><u id='address'></u></div>
					<div style='text-indent:80px; margin-top:-4px;'>
						<p>(Address)</p>
					</div>
					<br>
					<div style='text-indent:44px; margin-top:-10px;'>
						<p>New applicant <u id='name'></u></p>
					</div>

					<div style='text-indent:40px;'>
					<p>______________________&nbsp;&nbsp;  1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lumber Supply Contract</p>
					</div>
					<div style='text-indent:280px; margin-top:-10px;'>
						<p>Supplier : <u id='supplier'></u></p>
					</div>
					<div style='text-indent:280px; margin-top:-12px;'>
						<p style='margin-top:14px;'>WPPP : <u id='wppp'></u></p>
					</div>
					<div style='text-indent:280px; margin-top:-14px;'>
						<p style='margin-top:14px;'>Volume/Duration :<u id='volume/duration'></u></p>
					</div>

					<div style='text-indent:40px; margin-top:-10px;'>
					<p>_____________________&nbsp;&nbsp; 2.&nbsp;&nbsp;&nbsp;&nbsp; Fees:</p>
					</div>
					<div style='text-indent:280px; margin-top:-10px;'>
						<p>Oath . . . . . . . . . . . &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;P 36.00</p>
					</div>
					<div style='text-indent:280px; margin-top:-14px;'>
						<p>Application . . . . . . . . . .&nbsp;&nbsp;&nbsp; P 600.00</p>
					</div>
					<div style='text-indent:280px; margin-top:-14px;'>
						<p>Permit/Registration . . . . &nbsp;P 480.00</p>
					</div>
					<div style='text-indent:280px; margin-top:-14px;'>
						<p><b>TOTAL &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P 1,116.00</b></p>
					</div>
					<div style='text-indent:240px; margin-top:-26px;'><p><b>__________________________________</b></p></div>

					<div style='text-indent:40px; margin-top:-6px;'>
						<p>_____________________&nbsp;&nbsp; 3.&nbsp;&nbsp;&nbsp;&nbsp; ( ) Forestry Bond&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp; or &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;( ) Cash Bond</p>
					</div>
					<div style='text-indent:240px; margin-top:-12px;'>
						<p>Amount (P) 2,000.00 Amount (P) 1,000.00</p>
					</div>

					<div style='text-indent:40px; margin-top:-10px;'>
						<p>______________________&nbsp;&nbsp;4. &nbsp;&nbsp;&nbsp;Two (2) pictures of the establishment including the lumberyard</p>
					</div>

					<div style='text-indent:40px; margin-top:-10px;'>
						<p>______________________&nbsp;&nbsp;5. &nbsp;&nbsp;&nbsp;Mayor’s Permit for the current year (machine copy)</p>
					</div>

					<div style='text-indent:40px; margin-top:-10px;'>
						<p>______________________&nbsp;&nbsp;6. &nbsp;&nbsp;&nbsp;BIR Income Tax Return for the previous year ending 
						<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						(machine copy)</p>
					</div>

					<div style='text-indent:40px; margin-top:-10px;'>
						<p>______________________&nbsp;&nbsp;7. &nbsp;&nbsp;&nbsp;Annual Business Plan</p>
					</div>

					<div style='text-indent:40px; margin-top:-10px;'>
						<p>______________________&nbsp;&nbsp;8. &nbsp;&nbsp;&nbsp;Business Trade Name or Security and Exchange Commission<br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						Article of Incorporation (machine copy)</p>
					</div>

					<div style='text-indent:40px; margin-top:-10px;'>
						<p>______________________&nbsp;&nbsp;9. &nbsp;&nbsp;&nbsp;List of Employees</p>
					</div>
	
						<div style='text-indent:40px; margin-top:-10px;'>
							<p>______________________&nbsp;&nbsp;10. &nbsp;&nbsp;&nbsp;Documentary stamps ( 3 pcs.)</p>
					</div>


					<script type="text/javascript">
			   			$(document).ready(function(){

			   				$('#ForestcertEstablishment').keyup(function(){
	   							$('#establishment').text($(this).val());
	   						});

							$('#ForestcertEstablishment').focusout(function(){
		 						$('#establishment').text($(this).val());
		   					});

							$('#ForestcertAddress').keyup(function(){
	   							$('#address').text($(this).val());
	   						});

							$('#ForestcertAddress').focusout(function(){
		 						$('#address').text($(this).val());
		   					});	

		   					$('#ForestcertName').keyup(function(){
	   							$('#name').text($(this).val());
	   						});

							$('#ForestcertName').focusout(function(){
		 						$('#name').text($(this).val());
		   					});	

		   					$('#ForestcertSupplier').keyup(function(){
	   							$('#supplier').text($(this).val());
	   						});

							$('#ForestcertSupplier').focusout(function(){
		 						$('#supplier').text($(this).val());
		   					});	

		   					$('#ForestcertWppp').keyup(function(){
	   							$('#wppp').text($(this).val());
	   						});

							$('#ForestcertWppp').focusout(function(){
		 						$('#wppp').text($(this).val());
		   					});  

		   					$('#ForestcertVolume/duration').keyup(function(){
	   							$('#volume/duration').text($(this).val());
	   						});

							$('#ForestcertVolume/duration').focusout(function(){
		 						$('#volume/duration').text($(this).val());
		   					}); 


			  			 });
   			  </script>


					<br>
					<br>
					<br>
			  	</div>
			 </div>



		</div>
		  <br>
		  <br>
		  <br>
		  <br>
	</div>
<?php } ?>


<?php if ( $this->params['pass'][0] == 6 ) { ?>
	<div class="col-lg-12">
		  <div class="container"><br>
			  <div class="col-lg-12">
			   <h3>List of Requirements in securing Lumber Supply Contract (LSC)</h3>
			  </div>
			  <div class="col-lg-4">
					<div class="form-group">
					  <br>
					  <?= $this->Form->create('Forestsup'); ?>
			  		  <?= $this->Form->input('idform',array('type'=>'hidden','value'=>6)) ?>
					  <br>					   
					  <?= $this->Form->input('name',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('address',array('class'=>'form-control')); ?>
					  <br>
					  <?= $this->Form->submit('Submit',array('class'=>'btn btn-default')); ?>
					  <?= $this->Form->end(); ?>
			  		</div>
			   </div>
			    <div class="col-lg-8">
			  		<div class="col-lg-12" style="border:1px solid #AAA;">
			  			<br>
			  			<br>
			  			<br>
			  			<br>
			  			<div style='font-size:16px; text-align:center;'>
	   						<p><b>List of Requirements in Securing Lumber Supply Contract (LSC)</b></p>
	   					</div>
	   					<br>
	   					<div style='text-indent:20px; font-size:18px;'>
	   						<p><u id='name'></u><br>&nbsp;&nbsp;&nbsp;&nbsp;(Name of Applicant)</p>
	   					</div>

	   					<div style='text-indent:20px; font-size:18px;'>
	   						<p><u id='address'></u><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	   						(Address)</p>
	   					</div>
						<br>
						<br>
		   				<div style='font-size:18px; text-indent:60px;'>
		   					<p>________________&nbsp;&nbsp; 1.&nbsp;&nbsp;&nbsp; Letter request.</p>
		   				</div>
	
		   				<div style='font-size:18px; text-indent:60px; margin-top:-18px;'>
		   					<p>________________&nbsp;&nbsp; 2.&nbsp;&nbsp;&nbsp; Copies of LSC duly notarized.</p>
		   				</div>
	
		   				<div style='font-size:18px; text-indent:60px; margin-top:-18px;'>
		   					<p>________________&nbsp;&nbsp; 3.&nbsp;&nbsp;&nbsp;  DTI if not Lumber Dealer permittee.</p>
		   				</div>
	
		   				<div style='font-size:18px; text-indent:60px; margin-top:-18px;'>
		   					<p>________________&nbsp;&nbsp; 4.&nbsp;&nbsp;&nbsp;   Certificate of Registration as Lumber Dealer.</p>
	   					</div>

	   					<div style='font-size:18px; text-indent:60px; margin-top:-18px;'>
	   						<p>________________&nbsp;&nbsp; 5.&nbsp;&nbsp;&nbsp;  Documentary stamp (1 pc.)</p>
	   					</div>
	   					<br>
	   					<br>
	   					<br>
	   					<br>
	   					<br>
			  		</div>

			  		<script type="text/javascript">
			   			$(document).ready(function(){  

		   					$('#ForestsupName').keyup(function(){
	   							$('#name').text($(this).val());
	   						});

							$('#ForestsupName').focusout(function(){
		 						$('#name').text($(this).val());
		   					}); 

		   					$('#ForestsupAddress').keyup(function(){
	   							$('#address').text($(this).val());
	   						});

							$('#ForestsupAddress').focusout(function(){
		 						$('#address').text($(this).val());
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


<?php if ( $this->params['pass'][0] == 7 ) { ?>
	<div class="col-lg-12">
		  <div class="container"><br>
			  <div class="col-lg-12">
			   <h3>List of Requirements in the issuance of Wood Processing Plants (WPPs)</h3>
			  </div>
			  <div class="col-lg-4">
					<div class="form-group">
					  <br>
					  <?= $this->Form->create('Forestplant'); ?>
			  		  <?= $this->Form->input('idform',array('type'=>'hidden','value'=>7)) ?>
					  <br> 
					  <?= $this->Form->input('establishment',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('address',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('name',array('class'=>'form-control')); ?>
					  <?= $this->Form->input('forest-officer',array('class'=>'form-control')); ?>
					  <br>
					  <?= $this->Form->submit('Submit',array('class'=>'btn btn-default')); ?>
					  <?= $this->Form->end(); ?>
			  		</div>
			</div>
			<div class="col-lg-8">
			  	<div class="col-lg-12" style="border:1px solid #AAA;">
			  		<br><br><br><br><br>
	   				<div style='font-size:14px; text-align:center;'>
	   					<p><b>LIST OF REQUIREMENTS IN THE ISSUANCE OF WOOD PROCESSING PLANT (WPP’s )</b></p>
	   				</div>
	   				<div style='text-align:center; margin-top:-30px;'>
	   					<p>________________________________________________________________________</p>
	   				</div>
	   				<div style='text-align:center; margin-top:-26px;'>
	   					<p>___________________________________________________________________________</p>
	   				</div>
					<br>
		   			<div style='text-indent:40px;'>
		   				<p><u id='establishment'></u><br>
		   				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		   				(Name of establishment)</p>
	   				</div>

	   				<div style='text-indent:40px;'>
	   					<p><u id='address'></u><br>
	   					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	   					(Address)</p>
	   				</div>
	   				
	   				<div style='text-indent:40px;'>
	   					<p><u id='name'></u><br>
	   					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	   					(Name)</p>
	   				</div>

	   				<div style='text-indent:40px;'>
	   					<p>WOOD PROCESSING PLANTS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	   				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ( ) NEW&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	   				&nbsp; ( ) RENEWAL</p>
	   				</div>

	   				<div style='text-indent:40px;'>
	   					<p>____________________1. &nbsp;&nbsp;&nbsp;&nbsp; Fees:</p>
	   				</div>
	   				<div style='text-indent:240px; margin-top:-10px;'>
						<p>Oath . . . . . . . . . . . &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;P 36.00</p>
					</div>
					<div style='text-indent:240px; margin-top:-10px;'>
						<p>Application . . . . . . . . . .&nbsp;&nbsp;&nbsp; P 600.00</p>
					</div>
					<div style='text-indent:240px; margin-top:-10px;'>
						<p>Permit/Registration . . . . &nbsp;P 2,700 / 3 years/ below 24<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;cu.m. DRC </p>
					</div>
					<br>
					<div style='text-indent:240px; margin-top:-34px;'>
						<p>TOTAL . . . . . . . . . . . . . .</p>
					</div>

					<div style='text-indent:40px; margin-top:-8px;'>
					<p>____________________2. &nbsp;&nbsp;&nbsp;&nbsp( ) Forestry Bond<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Amount (P) ________ </p>
					</div>

					<div style='text-indent:40px; margin-top:-8px;'>
						<p>____________________3.&nbsp;&nbsp;&nbsp;&nbsp; Sworn Statement of the Applicant declaring the source of wood
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;
						materials, supported by Certified document such as but not
 						limited
 						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 						to supply contacts or other appropriate proof of availability and 
 						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 						&nbsp;legitimacy	of wood source
 						</p>
					</div>

					<div style='text-indent:40px; margin-top:-8px;'>
						<p>____________________4.&nbsp;&nbsp;&nbsp;&nbsp; Copy of Articles of Incorporation or Corporation, as the case	maybe,
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						issued by SEC/Domestic Trade Inc. (DTI) for single
 						Proprietorship.
 						</p>
					</div>

					<div style='text-indent:40px; margin-top:-8px;'>
						<p>____________________5.&nbsp;&nbsp;&nbsp;&nbsp;
						For individual persons, documents reflecting proof of Filipino
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						Citizenship such as Birth Certificate or Certificate Naturalization.
						</p>
					</div>

					<div style='text-indent:40px; margin-top:-8px;'>
						<p>____________________6.&nbsp;&nbsp;&nbsp;&nbsp;
						Environmental Compliance Certificate or Certificate of Non- Coverage 
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						as the case maybe, issued by EMB pursuant to DAO 96-37/Permit to
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						Operate Air Pollution Source and Control Installations. 
						</p>
					</div>

					<div style='text-indent:40px; margin-top:-8px;'>
						<p>____________________7.&nbsp;&nbsp;&nbsp;&nbsp; Copy of Previous Permit</p>
					</div>

														<br><br>
														<div style='text-indent:280px; margin-top:-20px;'>
															<p><u id='forest-officer'></u></p>
														</div>
														<div style='text-indent:310px; margin-top:-10px;'>
															<p>Forest Officer/Action</p>
														</div>


				<script type="text/javascript">
			   			$(document).ready(function(){

			   				$('#ForestplantEstablishment').keyup(function(){
	   							$('#establishment').text($(this).val());
	   						});

							$('#ForestplantEstablishment').focusout(function(){
		 						$('#establishment').text($(this).val());
		   					});

							$('#ForestplantAddress').keyup(function(){
	   							$('#address').text($(this).val());
	   						});

							$('#ForestplantAddress').focusout(function(){
		 						$('#address').text($(this).val());
		   					});	

		   					$('#ForestplantName').keyup(function(){
	   							$('#name').text($(this).val());
	   						});

							$('#ForestplantName').focusout(function(){
		 						$('#name').text($(this).val());
		   					});	

		   					$('#ForestplantForest-officer').keyup(function(){
	   							$('#forest-officer').text($(this).val());
	   						});

							$('#ForestplantForest-officer').focusout(function(){
		 						$('#forest-officer').text($(this).val());
		   					});	

			  			 });
   			  </script>

				<br>
				<br>
				<br>
				<br>
			  	</div>
			</div>




		</div>
		  <br>
		  <br>
		  <br>
		  <br>
	</div>
<?php } ?>