<?php
if(isset($model)){
	echo $model;
}
?>


<!-- For Wildlife -->
<?php if ( $this->params['pass'][0] == 1 ) { ?>
<div class="col-lg-12">
	<div class="container"><br>

		<div class="col-lg-12">
			<h3> Wildlife Farm Permit (WFP) </h3>
		</div>
		<div class="col-lg-4">
			<div class="form-group">
				<br>
				<?= $this->Form->create('Wildlifefarm'); ?>
			 	<?= $this->Form->input('idform',array('type'=>'hidden','value'=>1)) ?>
				<br>Application Information
				<?= $this->Form->input('region',array('class'=>'form-control')); ?>
				<?= $this->Form->input('exact-date',array('class'=>'form-control')); ?>
				<br>1.
				<?= $this->Form->input('name',array('class'=>'form-control')); ?>
				<br>2.
				<?= $this->Form->input('age',array('class'=>'form-control')); ?>
				<?= $this->Form->input('citizenship',array('class'=>'form-control')); ?>
				<br>3.
				<?= $this->Form->input('work',array('class'=>'form-control')); ?>
				<br>4.
				<?= $this->Form->input('spouse',array('class'=>'form-control')); ?>
				<?= $this->Form->input('organization-name',array('class'=>'form-control')); ?>
				<br>6.
				<?= $this->Form->input('kind-species',array('class'=>'form-control')); ?>
				<?= $this->Form->input('kind-species-no',array('class'=>'form-control')); ?>
				<br>7.
				<?= $this->Form->input('collection-techniques',array('class'=>'form-control')); ?>
				<br>8.
				<?= $this->Form->input('authorized-name',array('class'=>'form-control')); ?>
				<br>11.
				<?= $this->Form->input('application-fee',array('class'=>'form-control')); ?>
				<?= $this->Form->input('receipt-no',array('class'=>'form-control')); ?>
				<?= $this->Form->input('date-enclosed',array('class'=>'form-control')); ?>
				<br>
				<?= $this->Form->input('address',array('class'=>'form-control')); ?>
				<?= $this->Form->input('province',array('class'=>'form-control')); ?>
				<?= $this->Form->input('municipality',array('class'=>'form-control')); ?>
				<?= $this->Form->input('day',array('class'=>'form-control')); ?>
				<?= $this->Form->input('month',array('class'=>'form-control')); ?>
				<?= $this->Form->input('year',array('class'=>'form-control')); ?>
				<?= $this->Form->input('tax-cert-no',array('class'=>'form-control')); ?>
				<?= $this->Form->input('issued-at',array('class'=>'form-control')); ?>
				<?= $this->Form->input('issued-on',array('class'=>'form-control')); ?>
				<?= $this->Form->input('issued-year',array('class'=>'form-control')); ?>
				<?= $this->Form->input('officer-name',array('class'=>'form-control')); ?>
				<br>
				<?= $this->Form->submit('Submit',array('class'=>'btn btn-default')); ?>
				<?= $this->Form->end(); ?>
			</div>
		</div>

		<div class="col-lg-8">

		
			<div class="col-lg-12" style="border:1px solid #AAA;">
				<div style='text-align:center; padding-top:15px; margin-left:10px; font-size:15px;'>
					<br>
					<b>Department of Environment and Natural Resources<br>
						Region <u id='region'></u></b>
				</div>
				<br>
				<br>
				<div style='text-align:center; font-size:16px;'>
					<p><b>WILDLIFE FARM PERMIT</b></p>
				</div>
				<br>
				<br>
				<div style='text-align:right; font-size:15px;'>
					<p><u id='exact-date'></u></p>
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
							I, <u id='name'></u> have the honor to apply for the above permit.
						</li>
						<br>
						<li>
							I am <u id='age'></u> years of age, citizen of <u id='citizenship'></u>, by birth
							(if by naturalization, submit papers for verification)
						</li>
						<br>
						<li>
							My occupation/profession is <u id='work'></u>.
						</li>
						<br>
						<li>
							I am single/married and the name of my spouse/wife is <u id='spouse'></u>.
						</li>
						<br>
						<li>
							I am a member/not a member of a sportsmen and/or game club and/or scientific
							or conservation society. State name/s of organization/s, if a member:
							<u id='organization-name'></u>.
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
							<p><u id='kind-species'></u></p>	
						</div>
						<div style='float:right; font-size:15px; margin-right:240px;'>
							<p><u id='kind-species-no'></u></p>	
						</div>
						<br>
						<br>
						<li>
							Wildlife species to be collected under this permit shall be taken by means of:
						</li>
						<div>
							<p><u id='collection-techniques'></u></p>
						</div>
						<div style='font-size:15px; margin-top:-12px; text-indent:30px;'>
							<p>(Indicate collection technique/s to be used)</p>
						</div>
						<br>
						<li>
							In case of collection, the names of my authorized trappers/collectors are:
							<u id='authorized-name'></u>.
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
																	<p><u id='address'></u></p>
																</div>
																<div style='text-align:right; margin-right:120px; margin-top:-10px;'>
																	<p>(Address)</p>
																</div>
					</ol>
				</div>
			</div>
			<div class="col-lg-12" style="border:1px solid #AAA; margin-top:40px;">
				<br>
				<br>
				<div style='font-size:15px; margin-left:50px;'>
					<p>REPUBLIC OF THE PHILIPPINES(<br>
					PROVINCE OF <u id='province'></u>:</p>
				</div>
				<div style='font-size:15px; margin-left:50px; margin-top:-10px;'>
					<p>CITY OF <u id='municipality'></u>)</p>
				</div>
				<br>
				<br>
				<div style='font-size:15px; margin-left:50px; text-indent:50px;'>
					<p>
						SUBSCRIBED AND SWORN to before me this <u id='day'></u> day of <u id='month'></u>
						20<u id='year'></u>, applicant exhibiting to me his/her Community Tax Certificate No. <u id='tax-cert-no'></u>,
						issued at <u id='issued-at'></u> on <u id='issued-on'></u> 20<u id='issued-year'></u>.
					</p>
				</div>
				<br>
				<br>
													<div style='font-size:15px; text-align:right; margin-right:110px;'>
														<p><u id='officer-name'></u></p>
													</div>
													<div style='font-size:15px; text-align:right; margin-right:50px; margin-top:-12px;'>
														<p>(Officer authorized to administer oath)</p>
													</div>
													<div style='font-size:15px; text-align:right; margin-right:84px; margin-top:-14px;'>
														<p>Printed Name & Signature</p>
													</div>
			</div>	

			<script type="text/javascript">
			   			$(document).ready(function(){

			   				$('#WildlifefarmRegion').keyup(function(){
	   							$('#region').text($(this).val());
	   						});

							$('#WildlifefarmRegion').focusout(function(){
		 						$('#region').text($(this).val());
		   					});

							$('#WildlifefarmExact-date').keyup(function(){
	   							$('#exact-date').text($(this).val());
	   						});

							$('#WildlifefarmExact-date').focusout(function(){
		 						$('#exact-date').text($(this).val());
		   					});	

		   					$('#WildlifefarmName').keyup(function(){
	   							$('#name').text($(this).val());
	   						});

							$('#WildlifefarmName').focusout(function(){
		 						$('#name').text($(this).val());
		   					});	

		   					$('#WildlifefarmAge').keyup(function(){
	   							$('#age').text($(this).val());
	   						});

							$('#WildlifefarmAge').focusout(function(){
		 						$('#age').text($(this).val());
		   					});	

		   					$('#WildlifefarmCitizenship').keyup(function(){
	   							$('#citizenship').text($(this).val());
	   						});

							$('#WildlifefarmCitizenship').focusout(function(){
		 						$('#citizenship').text($(this).val());
		   					});  

		   					$('#WildlifefarmWork').keyup(function(){
	   							$('#work').text($(this).val());
	   						});

							$('#WildlifefarmWork').focusout(function(){
		 						$('#work').text($(this).val());
		   					}); 

		   					$('#WildlifefarmSpouse').keyup(function(){
	   							$('#spouse').text($(this).val());
	   						});

							$('#WildlifefarmSpouse').focusout(function(){
		 						$('#spouse').text($(this).val());
		   					});	

		   					$('#WildlifefarmOrganization-name').keyup(function(){
	   							$('#organization-name').text($(this).val());
	   						});

							$('#WildlifefarmOrganization-name').focusout(function(){
		 						$('#organization-name').text($(this).val());
		   					});	

		   					$('#WildlifefarmKind-species').keyup(function(){
	   							$('#kind-species').text($(this).val());
	   						});

							$('#WildlifefarmKind-species').focusout(function(){
		 						$('#kind-species').text($(this).val());
		   					});	

		   					$('#WildlifefarmKind-species-no').keyup(function(){
	   							$('#kind-species-no').text($(this).val());
	   						});

							$('#WildlifefarmKind-species-no').focusout(function(){
		 						$('#kind-species-no').text($(this).val());
		   					});	

		   					$('#WildlifefarmCollection-techniques').keyup(function(){
	   							$('#collection-techniques').text($(this).val());
	   						});

							$('#WildlifefarmCollection-techniques').focusout(function(){
		 						$('#collection-techniques').text($(this).val());
		   					});			
							
							$('#WildlifefarmAuthorized-name').keyup(function(){
	   							$('#authorized-name').text($(this).val());
	   						});

							$('#WildlifefarmAuthorized-name').focusout(function(){
		 						$('#authorized-name').text($(this).val());
		   					});	

		   					$('#WildlifefarmApplication-fee').keyup(function(){
	   							$('#application-fee').text($(this).val());
	   						});

							$('#WildlifefarmApplication-fee').focusout(function(){
		 						$('#application-fee').text($(this).val());
		   					});			
							
							$('#WildlifefarmReceipt-no').keyup(function(){
	   							$('#receipt-no').text($(this).val());
	   						});

							$('#WildlifefarmReceipt-no').focusout(function(){
		 						$('#receipt-no').text($(this).val());
		   					});	

		   					$('#WildlifefarmDate-enclosed').keyup(function(){
	   							$('#date-enclosed').text($(this).val());
	   						});

							$('#WildlifefarmDate-enclosed').focusout(function(){
		 						$('#date-enclosed').text($(this).val());
		   					});	

		   					$('#WildlifefarmAddress').keyup(function(){
	   							$('#address').text($(this).val());
	   						});

							$('#WildlifefarmAddress').focusout(function(){
		 						$('#address').text($(this).val());
		   					});	

		   					$('#WildlifefarmProvince').keyup(function(){
	   							$('#province').text($(this).val());
	   						});

							$('#WildlifefarmProvince').focusout(function(){
		 						$('#province').text($(this).val());
		   					});	

		   					$('#WildlifefarmMunicipality').keyup(function(){
	   							$('#municipality').text($(this).val());
	   						});

							$('#WildlifefarmMunicipality').focusout(function(){
		 						$('#municipality').text($(this).val());
		   					});	

		   					$('#WildlifefarmDay').keyup(function(){
	   							$('#day').text($(this).val());
	   						});

							$('#WildlifefarmDay').focusout(function(){
		 						$('#day').text($(this).val());
		   					});	

		   					$('#WildlifefarmMonth').keyup(function(){
	   							$('#month').text($(this).val());
	   						});

							$('#WildlifefarmMonth').focusout(function(){
		 						$('#month').text($(this).val());
		   					});	

		   					$('#WildlifefarmYear').keyup(function(){
	   							$('#year').text($(this).val());
	   						});

							$('#WildlifefarmYear').focusout(function(){
		 						$('#year').text($(this).val());
		   					});	

		   					$('#WildlifefarmTax-cert-no').keyup(function(){
	   							$('#tax-cert-no').text($(this).val());
	   						});

							$('#WildlifefarmTax-cert-no').focusout(function(){
		 						$('#tax-cert-no').text($(this).val());
		   					});					
							
							$('#WildlifefarmIssued-at').keyup(function(){
	   							$('#issued-at').text($(this).val());
	   						});

							$('#WildlifefarmIssued-at').focusout(function(){
		 						$('#issued-at').text($(this).val());
		   					});	

		   					$('#WildlifefarmIssued-on').keyup(function(){
	   							$('#issued-on').text($(this).val());
	   						});

							$('#WildlifefarmIssued-on').focusout(function(){
		 						$('#issued-on').text($(this).val());
		   					});	

		   					$('#WildlifefarmIssued-year').keyup(function(){
	   							$('#issued-year').text($(this).val());
	   						});

							$('#WildlifefarmIssued-year').focusout(function(){
		 						$('#issued-year').text($(this).val());
		   					});		

		   					$('#WildlifefarmOfficer-name').keyup(function(){
	   							$('#officer-name').text($(this).val());
	   						});

							$('#WildlifefarmOfficer-name').focusout(function(){
		 						$('#officer-name').text($(this).val());
		   					});		

			  			 });
   			  </script>







		</div>
	</div>	
</div>
<?php } ?>




<?php if ( $this->params['pass'][0] == 2 ) { ?>
<div class="col-lg-12">
	<div class="container"><br>
		<div class="col-lg-12">
			<h3> Local Transport Permit (LTP) </h3>
		</div>
		<div class="col-lg-4">
			<div class="form-group">
				<br>
				<?= $this->Form->create('Wildlifelocal'); ?>
			 	<?= $this->Form->input('idform',array('type'=>'hidden','value'=>2)) ?>
				<br>Application Information
				<?= $this->Form->input('region',array('class'=>'form-control')); ?>
				<?= $this->Form->input('permit-no',array('class'=>'form-control')); ?>
				<?= $this->Form->input('name',array('class'=>'form-control')); ?>
				<?= $this->Form->input('address',array('class'=>'form-control')); ?>
				<?= $this->Form->input('transport-to',array('class'=>'form-control')); ?>
				<?= $this->Form->input('transport-purposes',array('class'=>'form-control')); ?>
				<?= $this->Form->input('transported-by',array('class'=>'form-control')); ?>
				<?= $this->Form->input('transport-fee',array('class'=>'form-control')); ?>
				<?= $this->Form->input('paid',array('class'=>'form-control')); ?>
				<?= $this->Form->input('receipt-no',array('class'=>'form-control')); ?>
				<?= $this->Form->input('receipt-date',array('class'=>'form-control')); ?>
				<?= $this->Form->input('denr-officer',array('class'=>'form-control')); ?>
				<br>
				<?= $this->Form->submit('Submit',array('class'=>'btn btn-default')); ?>
				<?= $this->Form->end(); ?>
			</div>
		</div>

		<div class="col-lg-8">
			<div class="col-lg-12" style="border:1px solid #AAA;">
				<div style='text-align:center; padding-top:15px; margin-left:10px; font-size:15px;'>
					<br>
					<p>
						<b>Republic of the Philippines</b><br>
						<b>Department of Environment and Natural Resources</b>
					</p>
				</div>
				<div style='text-align:center; margin-top:5px; font-size:15px;'>
					<p><u id='region'></u></p>
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
					<p>Permit No. <u id='permit-no'></u></p>
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
					<p><u id='name'></u></p>
				</div>
				<div style='float:left; margin-top:-10px; font-size:15px;'>
					<p>&nbsp;&nbsp;of&nbsp;<u id='address'></u></p>
				</div>
				<br>
				<br>
				<div style='text-indent:70px; margin-top:-10px; font-size:15px;'>
					<p>is authorized to transport to <u id='transport-to'></u>. </p>
				</div>
				<div style='text-indent:70px; margin-top:-10px; font-size:15px;'>
					<p>the following for <u id='transport-purposes'></u> purposes.</p>
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
					<u id='transported-by'></u>
					and have been inspected, verified and found in accordance<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					with existing wildlife laws, rules and
					regulations.</p>
				</div>
				<div style='text-indent:110px; font-size:15px;'>
					<p>Local transport fee in the amount of P <u id='transport-fee'></u><br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;was paid under <u id='paid-by'></u>
					Official &nbsp;&nbsp;&nbsp; Receipt &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No.&nbsp;&nbsp;&nbsp;<u id='receipt-no'></u><br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;dated <u id='receipt-date'></u>.</p>
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
																<p><u id='denr-officer'></u></p>
															</div>
															<div style='text-align:right; margin-top:-10px; font-size:15px;'>
																<p>DENR REGIONAL OFFICE/PENRO/CENRO</p>
															</div>
			</div>

			<script type="text/javascript">
			   	$(document).ready(function(){

			   		$('#WildlifelocalRegion').keyup(function(){
	   					$('#region').text($(this).val());
	   				});

					$('#WildlifelocalRegion').focusout(function(){
		 				$('#region').text($(this).val());
		   			});

					$('#WildlifelocalPermit-no').keyup(function(){
	   					$('#permit-no').text($(this).val());
	   				});

					$('#WildlifelocalPermit-no').focusout(function(){
		 				$('#permit-no').text($(this).val());
		   			});

					$('#WildlifelocalName').keyup(function(){
	   					$('#name').text($(this).val());
	   				});

					$('#WildlifelocalName').focusout(function(){
		 				$('#name').text($(this).val());
		   			});

					$('#WildlifelocalAddress').keyup(function(){
	   					$('#address').text($(this).val());
	   				});

					$('#WildlifelocalAddress').focusout(function(){
		 				$('#address').text($(this).val());
		   			});

					$('#WildlifelocalTransport-to').keyup(function(){
	   					$('#transport-to').text($(this).val());
	   				});

					$('#WildlifelocalTransport-to').focusout(function(){
		 				$('#transport-to').text($(this).val());
		   			});

		   			$('#WildlifelocalTransport-purposes').keyup(function(){
	   					$('#transport-purposes').text($(this).val());
	   				});

					$('#WildlifelocalTransport-purposes').focusout(function(){
		 				$('#transport-purposes').text($(this).val());
		   			});

		   			$('#WildlifelocalTransported-by').keyup(function(){
	   					$('#transported-by').text($(this).val());
	   				});

					$('#WildlifelocalTransported-by').focusout(function(){
		 				$('#transported-by').text($(this).val());
		   			});

		   			$('#WildlifelocalTransport-fee').keyup(function(){
	   					$('#transport-fee').text($(this).val());
	   				});

					$('#WildlifelocalTransport-fee').focusout(function(){
		 				$('#transport-fee').text($(this).val());
		   			});

		   			$('#WildlifelocalPaid').keyup(function(){
	   					$('#paid').text($(this).val());
	   				});

					$('#WildlifelocalPaid').focusout(function(){
		 				$('#paid').text($(this).val());
		   			});

		   			$('#WildlifelocalReceipt-no').keyup(function(){
	   					$('#receipt-no').text($(this).val());
	   				});

					$('#WildlifelocalReceipt-no').focusout(function(){
		 				$('#receipt-no').text($(this).val());
		   			});

		   			$('#WildlifelocalReceipt-date').keyup(function(){
	   					$('#receipt-date').text($(this).val());
	   				});

					$('#WildlifelocalReceipt-date').focusout(function(){
		 				$('#receipt-date').text($(this).val());
		   			});

		   			$('#WildlifelocalDenr-officer').keyup(function(){
	   					$('#denr-officer').text($(this).val());
	   				});

					$('#WildlifelocalDenr-officer').focusout(function(){
		 				$('#denr-officer').text($(this).val());
		   			});

				});
   			</script>

	</div>
</div>


</div>
<?php } ?>

<?php if ( $this->params['pass'][0] == 3 ) { ?>
<div class="col-lg-12">
	<div class="container"><br>
		<div class="col-lg-12">
			<h3> Wildlife Export Certification (WEC) </h3>
		</div>
		<div class="col-lg-4">
			<div class="form-group">
				<br>
				<?= $this->Form->create('Wildlifeexport'); ?>
			 	<?= $this->Form->input('idform',array('type'=>'hidden','value'=>3)) ?>
				<br>Application Information
				<?= $this->Form->input('region',array('class'=>'form-control')); ?>
				<?= $this->Form->input('permit-no',array('class'=>'form-control')); ?>
				<?= $this->Form->input('name',array('class'=>'form-control')); ?>
				<?= $this->Form->input('address',array('class'=>'form-control')); ?>
				<?= $this->Form->input('transport-to',array('class'=>'form-control')); ?>
				<?= $this->Form->input('transport-purposes',array('class'=>'form-control')); ?>
				<?= $this->Form->input('transported-by',array('class'=>'form-control')); ?>
				<?= $this->Form->input('transport-fee',array('class'=>'form-control')); ?>
				<?= $this->Form->input('paid',array('class'=>'form-control')); ?>
				<?= $this->Form->input('receipt-no',array('class'=>'form-control')); ?>
				<?= $this->Form->input('receipt-date',array('class'=>'form-control')); ?>
				<?= $this->Form->input('denr-officer',array('class'=>'form-control')); ?>
				<br>
				<?= $this->Form->submit('Submit',array('class'=>'btn btn-default')); ?>
				<?= $this->Form->end(); ?>
			</div>
		</div>

		<div class="col-lg-8">
			<div class="col-lg-12" style="border:1px solid #AAA;">
				<div style='text-align:center; padding-top:15px; margin-left:10px; font-size:15px;'>
					<br>
					<p>
						<b>Republic of the Philippines</b><br>
						<b>Department of Environment and Natural Resources</b>
					</p>
				</div>
				<div style='text-align:center; margin-top:5px; font-size:15px;'>
					<p><u id='region'></u></p>
				</div>
				<div style='text-align:center; margin-top:-12px; font-size:15px;'>
					<p>(Region)</p>
				</div>
				<br>
				<br>
				<div style='text-indent: 40px; font-size:15px;'>
					<p>Wildlife Export</p><br>
				</div>
				<br>
				<div style='text-indent: 40px; margin-top:-50px; font-size:15px;'>
					<p>Permit No. <u id='permit-no'></u></p>
				</div>
				<br>
				<div style='text-align:center; font-size:15px;'>
					<p><b>WILDLIFE EXPORT CERTIFICATION</b></p>
				</div>
				<br>
				<br>
				<div style='text-indent:90px; font-size:15px;'>
					<p>Pursuant&nbsp;&nbsp; to &nbsp;&nbsp;&nbsp; Republic &nbsp;&nbsp; Act &nbsp; 9147 &nbsp; dated &nbsp; July &nbsp;&nbsp;30&nbsp;&nbsp; 2001,&nbsp;&nbsp; Mr/Ms.</p>
				</div>
				<div style='float:left; text-indent:70px; margin-top:-10px; font-size:15px;'>
					<p><u id='name'></u></p>
				</div>
				<div style='float:left; margin-top:-10px; font-size:15px;'>
					<p>&nbsp;&nbsp;of&nbsp;<u id='address'></u></p>
				</div>
				<br>
				<br>
				<div style='text-indent:70px; margin-top:-10px; font-size:15px;'>
					<p>is authorized to transport to <u id='transport-to'></u>. </p>
				</div>
				<div style='text-indent:70px; margin-top:-10px; font-size:15px;'>
					<p>the following for <u id='transport-purposes'></u> purposes.</p>
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
					<u id='transported-by'></u>
					and have been inspected, verified and found in accordance<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					with existing wildlife laws, rules and
					regulations.</p>
				</div>
				<div style='text-indent:110px; font-size:15px;'>
					<p>Local transport fee in the amount of P <u id='transport-fee'></u><br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;was paid under <u id='paid-by'></u>
					Official &nbsp;&nbsp;&nbsp; Receipt &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No.&nbsp;&nbsp;&nbsp;<u id='receipt-no'></u><br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;dated <u id='receipt-date'></u>.</p>
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
																<p><u id='denr-officer'></u></p>
															</div>
															<div style='text-align:right; margin-top:-10px; font-size:15px;'>
																<p>DENR REGIONAL OFFICE/PENRO/CENRO</p>
															</div>
			</div>

			<script type="text/javascript">
			   	$(document).ready(function(){

			   		$('#WildlifeexportRegion').keyup(function(){
	   					$('#region').text($(this).val());
	   				});

					$('#WildlifeexportRegion').focusout(function(){
		 				$('#region').text($(this).val());
		   			});

					$('#WildlifeexportPermit-no').keyup(function(){
	   					$('#permit-no').text($(this).val());
	   				});

					$('#WildlifeexportPermit-no').focusout(function(){
		 				$('#permit-no').text($(this).val());
		   			});

					$('#WildlifeexportName').keyup(function(){
	   					$('#name').text($(this).val());
	   				});

					$('#WildlifeexportName').focusout(function(){
		 				$('#name').text($(this).val());
		   			});

					$('#WildlifeexportAddress').keyup(function(){
	   					$('#address').text($(this).val());
	   				});

					$('#WildlifeexportAddress').focusout(function(){
		 				$('#address').text($(this).val());
		   			});

					$('#WildlifeexportTransport-to').keyup(function(){
	   					$('#transport-to').text($(this).val());
	   				});

					$('#WildlifeexportTransport-to').focusout(function(){
		 				$('#transport-to').text($(this).val());
		   			});

		   			$('#WildlifeexportTransport-purposes').keyup(function(){
	   					$('#transport-purposes').text($(this).val());
	   				});

					$('#WildlifeexportTransport-purposes').focusout(function(){
		 				$('#transport-purposes').text($(this).val());
		   			});

		   			$('#WildlifeexportTransported-by').keyup(function(){
	   					$('#transported-by').text($(this).val());
	   				});

					$('#WildlifeexportTransported-by').focusout(function(){
		 				$('#transported-by').text($(this).val());
		   			});

		   			$('#WildlifeexportTransport-fee').keyup(function(){
	   					$('#transport-fee').text($(this).val());
	   				});

					$('#WildlifeexportTransport-fee').focusout(function(){
		 				$('#transport-fee').text($(this).val());
		   			});

		   			$('#WildlifeexportPaid').keyup(function(){
	   					$('#paid').text($(this).val());
	   				});

					$('#WildlifeexportPaid').focusout(function(){
		 				$('#paid').text($(this).val());
		   			});

		   			$('#WildlifeexportReceipt-no').keyup(function(){
	   					$('#receipt-no').text($(this).val());
	   				});

					$('#WildlifeexportReceipt-no').focusout(function(){
		 				$('#receipt-no').text($(this).val());
		   			});

		   			$('#WildlifeexportReceipt-date').keyup(function(){
	   					$('#receipt-date').text($(this).val());
	   				});

					$('#WildlifeexportReceipt-date').focusout(function(){
		 				$('#receipt-date').text($(this).val());
		   			});

		   			$('#WildlifeexportDenr-officer').keyup(function(){
	   					$('#denr-officer').text($(this).val());
	   				});

					$('#WildlifeexportDenr-officer').focusout(function(){
		 				$('#denr-officer').text($(this).val());
		   			});

				});
   			</script>

	</div>
</div>


</div>


<?php } ?>

<?php if ( $this->params['pass'][0] == 4 ) { ?>
<div class="col-lg-12">
	<div class="container"><br>
		<div class="col-lg-12">
			<h3> Wildlife Import Certification (WIC) </h3>
		</div>
		<div class="col-lg-4">
			<div class="form-group">
				<br>
				<?= $this->Form->create('Wildlifeimport'); ?>
			 	<?= $this->Form->input('idform',array('type'=>'hidden','value'=>4)) ?>
				<br>Application Information
				<?= $this->Form->input('region',array('class'=>'form-control')); ?>
				<?= $this->Form->input('permit-no',array('class'=>'form-control')); ?>
				<?= $this->Form->input('name',array('class'=>'form-control')); ?>
				<?= $this->Form->input('address',array('class'=>'form-control')); ?>
				<?= $this->Form->input('transport-to',array('class'=>'form-control')); ?>
				<?= $this->Form->input('transport-purposes',array('class'=>'form-control')); ?>
				<?= $this->Form->input('transported-by',array('class'=>'form-control')); ?>
				<?= $this->Form->input('transport-fee',array('class'=>'form-control')); ?>
				<?= $this->Form->input('paid',array('class'=>'form-control')); ?>
				<?= $this->Form->input('receipt-no',array('class'=>'form-control')); ?>
				<?= $this->Form->input('receipt-date',array('class'=>'form-control')); ?>
				<?= $this->Form->input('denr-officer',array('class'=>'form-control')); ?>
				<br>
				<?= $this->Form->submit('Submit',array('class'=>'btn btn-default')); ?>
				<?= $this->Form->end(); ?>
			</div>
		</div>

		<div class="col-lg-8">
			<div class="col-lg-12" style="border:1px solid #AAA;">
				<div style='text-align:center; padding-top:15px; margin-left:10px; font-size:15px;'>
					<br>
					<p>
						<b>Republic of the Philippines</b><br>
						<b>Department of Environment and Natural Resources</b>
					</p>
				</div>
				<div style='text-align:center; margin-top:5px; font-size:15px;'>
					<p><u id='region'></u></p>
				</div>
				<div style='text-align:center; margin-top:-12px; font-size:15px;'>
					<p>(Region)</p>
				</div>
				<br>
				<br>
				<div style='text-indent: 40px; font-size:15px;'>
					<p>Wildlife Import</p><br>
				</div>
				<br>
				<div style='text-indent: 40px; margin-top:-50px; font-size:15px;'>
					<p>Permit No. <u id='permit-no'></u></p>
				</div>
				<br>
				<div style='text-align:center; font-size:15px;'>
					<p><b>WILDLIFE IMPORT CERTIFICATION</b></p>
				</div>
				<br>
				<br>
				<div style='text-indent:90px; font-size:15px;'>
					<p>Pursuant&nbsp;&nbsp; to &nbsp;&nbsp;&nbsp; Republic &nbsp;&nbsp; Act &nbsp; 9147 &nbsp; dated &nbsp; July &nbsp;&nbsp;30&nbsp;&nbsp; 2001,&nbsp;&nbsp; Mr/Ms.</p>
				</div>
				<div style='float:left; text-indent:70px; margin-top:-10px; font-size:15px;'>
					<p><u id='name'></u></p>
				</div>
				<div style='float:left; margin-top:-10px; font-size:15px;'>
					<p>&nbsp;&nbsp;of&nbsp;<u id='address'></u></p>
				</div>
				<br>
				<br>
				<div style='text-indent:70px; margin-top:-10px; font-size:15px;'>
					<p>is authorized to transport to <u id='transport-to'></u>. </p>
				</div>
				<div style='text-indent:70px; margin-top:-10px; font-size:15px;'>
					<p>the following for <u id='transport-purposes'></u> purposes.</p>
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
					<u id='transported-by'></u>
					and have been inspected, verified and found in accordance<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					with existing wildlife laws, rules and
					regulations.</p>
				</div>
				<div style='text-indent:110px; font-size:15px;'>
					<p>Local transport fee in the amount of P <u id='transport-fee'></u><br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;was paid under <u id='paid-by'></u>
					Official &nbsp;&nbsp;&nbsp; Receipt &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No.&nbsp;&nbsp;&nbsp;<u id='receipt-no'></u><br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;dated <u id='receipt-date'></u>.</p>
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
																<p><u id='denr-officer'></u></p>
															</div>
															<div style='text-align:right; margin-top:-10px; font-size:15px;'>
																<p>DENR REGIONAL OFFICE/PENRO/CENRO</p>
															</div>
			</div>

			<script type="text/javascript">
			   	$(document).ready(function(){

			   		$('#WildlifeimportRegion').keyup(function(){
	   					$('#region').text($(this).val());
	   				});

					$('#WildlifeimportRegion').focusout(function(){
		 				$('#region').text($(this).val());
		   			});

					$('#WildlifeimportPermit-no').keyup(function(){
	   					$('#permit-no').text($(this).val());
	   				});

					$('#WildlifeimportPermit-no').focusout(function(){
		 				$('#permit-no').text($(this).val());
		   			});

					$('#WildlifeimportName').keyup(function(){
	   					$('#name').text($(this).val());
	   				});

					$('#WildlifeimportName').focusout(function(){
		 				$('#name').text($(this).val());
		   			});

					$('#WildlifeimportAddress').keyup(function(){
	   					$('#address').text($(this).val());
	   				});

					$('#WildlifeimportAddress').focusout(function(){
		 				$('#address').text($(this).val());
		   			});

					$('#WildlifeimportTransport-to').keyup(function(){
	   					$('#transport-to').text($(this).val());
	   				});

					$('#WildlifeimportTransport-to').focusout(function(){
		 				$('#transport-to').text($(this).val());
		   			});

		   			$('#WildlifeimportTransport-purposes').keyup(function(){
	   					$('#transport-purposes').text($(this).val());
	   				});

					$('#WildlifeimportTransport-purposes').focusout(function(){
		 				$('#transport-purposes').text($(this).val());
		   			});

		   			$('#WildlifeimportTransported-by').keyup(function(){
	   					$('#transported-by').text($(this).val());
	   				});

					$('#WildlifeimportTransported-by').focusout(function(){
		 				$('#transported-by').text($(this).val());
		   			});

		   			$('#WildlifeimportTransport-fee').keyup(function(){
	   					$('#transport-fee').text($(this).val());
	   				});

					$('#WildlifeimportTransport-fee').focusout(function(){
		 				$('#transport-fee').text($(this).val());
		   			});

		   			$('#WildlifeimportPaid').keyup(function(){
	   					$('#paid').text($(this).val());
	   				});

					$('#WildlifeimportPaid').focusout(function(){
		 				$('#paid').text($(this).val());
		   			});

		   			$('#WildlifeimportReceipt-no').keyup(function(){
	   					$('#receipt-no').text($(this).val());
	   				});

					$('#WildlifeimportReceipt-no').focusout(function(){
		 				$('#receipt-no').text($(this).val());
		   			});

		   			$('#WildlifeimportReceipt-date').keyup(function(){
	   					$('#receipt-date').text($(this).val());
	   				});

					$('#WildlifeimportReceipt-date').focusout(function(){
		 				$('#receipt-date').text($(this).val());
		   			});

		   			$('#WildlifeimportDenr-officer').keyup(function(){
	   					$('#denr-officer').text($(this).val());
	   				});

					$('#WildlifeimportDenr-officer').focusout(function(){
		 				$('#denr-officer').text($(this).val());
		   			});

				});
   			</script>

	</div>
</div>


</div>


<?php } ?>

<?php if ( $this->params['pass'][0] == 5 ) { ?>
<div class="col-lg-12">
	<div class="container"><br>
		<div class="col-lg-12">
			<h3> Wildlife Re-export Certification (WREC) </h3>
		</div>
		<div class="col-lg-4">
			<div class="form-group">
				<br>
				<?= $this->Form->create('Wildlifereexport'); ?>
			 	<?= $this->Form->input('idform',array('type'=>'hidden','value'=>5)) ?>
				<br>Application Information
				<?= $this->Form->input('region',array('class'=>'form-control')); ?>
				<?= $this->Form->input('permit-no',array('class'=>'form-control')); ?>
				<?= $this->Form->input('name',array('class'=>'form-control')); ?>
				<?= $this->Form->input('address',array('class'=>'form-control')); ?>
				<?= $this->Form->input('transport-to',array('class'=>'form-control')); ?>
				<?= $this->Form->input('transport-purposes',array('class'=>'form-control')); ?>
				<?= $this->Form->input('transported-by',array('class'=>'form-control')); ?>
				<?= $this->Form->input('transport-fee',array('class'=>'form-control')); ?>
				<?= $this->Form->input('paid',array('class'=>'form-control')); ?>
				<?= $this->Form->input('receipt-no',array('class'=>'form-control')); ?>
				<?= $this->Form->input('receipt-date',array('class'=>'form-control')); ?>
				<?= $this->Form->input('denr-officer',array('class'=>'form-control')); ?>
				<br>
				<?= $this->Form->submit('Submit',array('class'=>'btn btn-default')); ?>
				<?= $this->Form->end(); ?>
			</div>
		</div>

		<div class="col-lg-8">
			<div class="col-lg-12" style="border:1px solid #AAA;">
				<div style='text-align:center; padding-top:15px; margin-left:10px; font-size:15px;'>
					<br>
					<p>
						<b>Republic of the Philippines</b><br>
						<b>Department of Environment and Natural Resources</b>
					</p>
				</div>
				<div style='text-align:center; margin-top:5px; font-size:15px;'>
					<p><u id='region'></u></p>
				</div>
				<div style='text-align:center; margin-top:-12px; font-size:15px;'>
					<p>(Region)</p>
				</div>
				<br>
				<br>
				<div style='text-indent: 40px; font-size:15px;'>
					<p>Wildlife Re-export</p><br>
				</div>
				<br>
				<div style='text-indent: 40px; margin-top:-50px; font-size:15px;'>
					<p>Permit No. <u id='permit-no'></u></p>
				</div>
				<br>
				<div style='text-align:center; font-size:15px;'>
					<p><b>WILDLIFE RE-EXPORT CERTIFICATION</b></p>
				</div>
				<br>
				<br>
				<div style='text-indent:90px; font-size:15px;'>
					<p>Pursuant&nbsp;&nbsp; to &nbsp;&nbsp;&nbsp; Republic &nbsp;&nbsp; Act &nbsp; 9147 &nbsp; dated &nbsp; July &nbsp;&nbsp;30&nbsp;&nbsp; 2001,&nbsp;&nbsp; Mr/Ms.</p>
				</div>
				<div style='float:left; text-indent:70px; margin-top:-10px; font-size:15px;'>
					<p><u id='name'></u></p>
				</div>
				<div style='float:left; margin-top:-10px; font-size:15px;'>
					<p>&nbsp;&nbsp;of&nbsp;<u id='address'></u></p>
				</div>
				<br>
				<br>
				<div style='text-indent:70px; margin-top:-10px; font-size:15px;'>
					<p>is authorized to transport to <u id='transport-to'></u>. </p>
				</div>
				<div style='text-indent:70px; margin-top:-10px; font-size:15px;'>
					<p>the following for <u id='transport-purposes'></u> purposes.</p>
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
					<u id='transported-by'></u>
					and have been inspected, verified and found in accordance<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					with existing wildlife laws, rules and
					regulations.</p>
				</div>
				<div style='text-indent:110px; font-size:15px;'>
					<p>Local transport fee in the amount of P <u id='transport-fee'></u><br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;was paid under <u id='paid-by'></u>
					Official &nbsp;&nbsp;&nbsp; Receipt &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No.&nbsp;&nbsp;&nbsp;<u id='receipt-no'></u><br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;dated <u id='receipt-date'></u>.</p>
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
																<p><u id='denr-officer'></u></p>
															</div>
															<div style='text-align:right; margin-top:-10px; font-size:15px;'>
																<p>DENR REGIONAL OFFICE/PENRO/CENRO</p>
															</div>
			</div>

			<script type="text/javascript">
			   	$(document).ready(function(){

			   		$('#WildlifereexportRegion').keyup(function(){
	   					$('#region').text($(this).val());
	   				});

					$('#WildlifereexportRegion').focusout(function(){
		 				$('#region').text($(this).val());
		   			});

					$('#WildlifereexportPermit-no').keyup(function(){
	   					$('#permit-no').text($(this).val());
	   				});

					$('#WildlifereexportPermit-no').focusout(function(){
		 				$('#permit-no').text($(this).val());
		   			});

					$('#WildlifereexportName').keyup(function(){
	   					$('#name').text($(this).val());
	   				});

					$('#WildlifereexportName').focusout(function(){
		 				$('#name').text($(this).val());
		   			});

					$('#WildlifereexportAddress').keyup(function(){
	   					$('#address').text($(this).val());
	   				});

					$('#WildlifereexportAddress').focusout(function(){
		 				$('#address').text($(this).val());
		   			});

					$('#WildlifereexportTransport-to').keyup(function(){
	   					$('#transport-to').text($(this).val());
	   				});

					$('#WildlifereexportTransport-to').focusout(function(){
		 				$('#transport-to').text($(this).val());
		   			});

		   			$('#WildlifereexportTransport-purposes').keyup(function(){
	   					$('#transport-purposes').text($(this).val());
	   				});

					$('#WildlifereexportTransport-purposes').focusout(function(){
		 				$('#transport-purposes').text($(this).val());
		   			});

		   			$('#WildlifereexportTransported-by').keyup(function(){
	   					$('#transported-by').text($(this).val());
	   				});

					$('#WildlifereexportTransported-by').focusout(function(){
		 				$('#transported-by').text($(this).val());
		   			});

		   			$('#WildlifereexportTransport-fee').keyup(function(){
	   					$('#transport-fee').text($(this).val());
	   				});

					$('#WildlifereexportTransport-fee').focusout(function(){
		 				$('#transport-fee').text($(this).val());
		   			});

		   			$('#WildlifereexportPaid').keyup(function(){
	   					$('#paid').text($(this).val());
	   				});

					$('#WildlifereexportPaid').focusout(function(){
		 				$('#paid').text($(this).val());
		   			});

		   			$('#WildlifereexportReceipt-no').keyup(function(){
	   					$('#receipt-no').text($(this).val());
	   				});

					$('#WildlifereexportReceipt-no').focusout(function(){
		 				$('#receipt-no').text($(this).val());
		   			});

		   			$('#WildlifereexportReceipt-date').keyup(function(){
	   					$('#receipt-date').text($(this).val());
	   				});

					$('#WildlifereexportReceipt-date').focusout(function(){
		 				$('#receipt-date').text($(this).val());
		   			});

		   			$('#WildlifereexportDenr-officer').keyup(function(){
	   					$('#denr-officer').text($(this).val());
	   				});

					$('#WildlifereexportDenr-officer').focusout(function(){
		 				$('#denr-officer').text($(this).val());
		   			});

				});
   			</script>

	</div>
</div>


</div>
<?php } ?>

<?php if ( $this->params['pass'][0] == 6 ) { ?>
<div class="col-lg-12">
	<div class="container"><br>
		<div class="col-lg-12">
			<h3> Wildlife Special Use Permit (WSUP) </h3>
		</div>
		<div class="col-lg-4">
			<div class="form-group">
				<br>
				<?= $this->Form->create('Wildlifereexport'); ?>
			 	<?= $this->Form->input('idform',array('type'=>'hidden','value'=>6)) ?>
				<br>Application Information
				<?= $this->Form->input('region',array('class'=>'form-control')); ?>
				<?= $this->Form->input('permit-no',array('class'=>'form-control')); ?>
				<?= $this->Form->input('name',array('class'=>'form-control')); ?>
				<?= $this->Form->input('address',array('class'=>'form-control')); ?>
				<?= $this->Form->input('transport-to',array('class'=>'form-control')); ?>
				<?= $this->Form->input('transport-purposes',array('class'=>'form-control')); ?>
				<?= $this->Form->input('transported-by',array('class'=>'form-control')); ?>
				<?= $this->Form->input('transport-fee',array('class'=>'form-control')); ?>
				<?= $this->Form->input('paid',array('class'=>'form-control')); ?>
				<?= $this->Form->input('receipt-no',array('class'=>'form-control')); ?>
				<?= $this->Form->input('receipt-date',array('class'=>'form-control')); ?>
				<?= $this->Form->input('denr-officer',array('class'=>'form-control')); ?>
				<br>
				<?= $this->Form->submit('Submit',array('class'=>'btn btn-default')); ?>
				<?= $this->Form->end(); ?>
			</div>
		</div>

		<div class="col-lg-8">
			<div class="col-lg-12" style="border:1px solid #AAA;">
				<div style='text-align:center; padding-top:15px; margin-left:10px; font-size:15px;'>
					<br>
					<p>
						<b>Republic of the Philippines</b><br>
						<b>Department of Environment and Natural Resources</b>
					</p>
				</div>
				<div style='text-align:center; margin-top:5px; font-size:15px;'>
					<p><u id='region'></u></p>
				</div>
				<div style='text-align:center; margin-top:-12px; font-size:15px;'>
					<p>(Region)</p>
				</div>
				<br>
				<br>
				<div style='text-indent: 40px; font-size:15px;'>
					<p>Wildlife Special Use</p><br>
				</div>
				<br>
				<div style='text-indent: 40px; margin-top:-50px; font-size:15px;'>
					<p>Permit No. <u id='permit-no'></u></p>
				</div>
				<br>
				<div style='text-align:center; font-size:15px;'>
					<p><b>WILDLIFE SPECIAL USE PERMIT</b></p>
				</div>
				<br>
				<br>
				<div style='text-indent:90px; font-size:15px;'>
					<p>Pursuant&nbsp;&nbsp; to &nbsp;&nbsp;&nbsp; Republic &nbsp;&nbsp; Act &nbsp; 9147 &nbsp; dated &nbsp; July &nbsp;&nbsp;30&nbsp;&nbsp; 2001,&nbsp;&nbsp; Mr/Ms.</p>
				</div>
				<div style='float:left; text-indent:70px; margin-top:-10px; font-size:15px;'>
					<p><u id='name'></u></p>
				</div>
				<div style='float:left; margin-top:-10px; font-size:15px;'>
					<p>&nbsp;&nbsp;of&nbsp;<u id='address'></u></p>
				</div>
				<br>
				<br>
				<div style='text-indent:70px; margin-top:-10px; font-size:15px;'>
					<p>is authorized to transport to <u id='transport-to'></u>. </p>
				</div>
				<div style='text-indent:70px; margin-top:-10px; font-size:15px;'>
					<p>the following for <u id='transport-purposes'></u> purposes.</p>
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
					<u id='transported-by'></u>
					and have been inspected, verified and found in accordance<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					with existing wildlife laws, rules and
					regulations.</p>
				</div>
				<div style='text-indent:110px; font-size:15px;'>
					<p>Local transport fee in the amount of P <u id='transport-fee'></u><br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;was paid under <u id='paid-by'></u>
					Official &nbsp;&nbsp;&nbsp; Receipt &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No.&nbsp;&nbsp;&nbsp;<u id='receipt-no'></u><br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;dated <u id='receipt-date'></u>.</p>
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
																<p><u id='denr-officer'></u></p>
															</div>
															<div style='text-align:right; margin-top:-10px; font-size:15px;'>
																<p>DENR REGIONAL OFFICE/PENRO/CENRO</p>
															</div>
			</div>

			<script type="text/javascript">
			   	$(document).ready(function(){

			   		$('#WildlifespecialRegion').keyup(function(){
	   					$('#region').text($(this).val());
	   				});

					$('#WildlifespecialRegion').focusout(function(){
		 				$('#region').text($(this).val());
		   			});

					$('#WildlifespecialPermit-no').keyup(function(){
	   					$('#permit-no').text($(this).val());
	   				});

					$('#WildlifespecialPermit-no').focusout(function(){
		 				$('#permit-no').text($(this).val());
		   			});

					$('#WildlifespecialName').keyup(function(){
	   					$('#name').text($(this).val());
	   				});

					$('#WildlifespecialName').focusout(function(){
		 				$('#name').text($(this).val());
		   			});

					$('#WildlifespecialAddress').keyup(function(){
	   					$('#address').text($(this).val());
	   				});

					$('#WildlifespecialAddress').focusout(function(){
		 				$('#address').text($(this).val());
		   			});

					$('#WildlifespecialTransport-to').keyup(function(){
	   					$('#transport-to').text($(this).val());
	   				});

					$('#WildlifespecialTransport-to').focusout(function(){
		 				$('#transport-to').text($(this).val());
		   			});

		   			$('#WildlifespecialTransport-purposes').keyup(function(){
	   					$('#transport-purposes').text($(this).val());
	   				});

					$('#WildlifespecialTransport-purposes').focusout(function(){
		 				$('#transport-purposes').text($(this).val());
		   			});

		   			$('#WildlifespecialTransported-by').keyup(function(){
	   					$('#transported-by').text($(this).val());
	   				});

					$('#WildlifespecialTransported-by').focusout(function(){
		 				$('#transported-by').text($(this).val());
		   			});

		   			$('#WildlifespecialTransport-fee').keyup(function(){
	   					$('#transport-fee').text($(this).val());
	   				});

					$('#WildlifespecialTransport-fee').focusout(function(){
		 				$('#transport-fee').text($(this).val());
		   			});

		   			$('#WildlifespecialPaid').keyup(function(){
	   					$('#paid').text($(this).val());
	   				});

					$('#WildlifespecialPaid').focusout(function(){
		 				$('#paid').text($(this).val());
		   			});

		   			$('#WildlifespecialReceipt-no').keyup(function(){
	   					$('#receipt-no').text($(this).val());
	   				});

					$('#WildlifespecialReceipt-no').focusout(function(){
		 				$('#receipt-no').text($(this).val());
		   			});

		   			$('#WildlifespecialReceipt-date').keyup(function(){
	   					$('#receipt-date').text($(this).val());
	   				});

					$('#WildlifespecialReceipt-date').focusout(function(){
		 				$('#receipt-date').text($(this).val());
		   			});

		   			$('#WildlifespecialDenr-officer').keyup(function(){
	   					$('#denr-officer').text($(this).val());
	   				});

					$('#WildlifespecialDenr-officer').focusout(function(){
		 				$('#denr-officer').text($(this).val());
		   			});

				});
   			</script>

	</div>
</div>


</div>


<?php } ?>
