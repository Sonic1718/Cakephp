<?php
if(isset($model)){
	echo $model;
	unset($model);
}
?>

<body style="background-color:#eeeeee">
<!-- container -->

<!-- Application Forms List -->
<div class="col-lg-12"><br>
    <div class='container'><br>
      <h1>Application Forms</h1>
      <br>
	<!--<h3>Note: Our Application are available during Office Hours, 8am to 5pm only..</h3>-->
      <br>      
      <!--  Land Management Services -->
      <div class="col-lg-4">
       <h4>Land Management Services</h4>
         <ol class="list-group">
		  <li><a href="/pages/land/1">Agricultural, Foreshore, Reclaimed Land or Miscellaneous Lease Application</a></li>
		  <li><a href="/pages/land/2">Insular Government Property Sales Application</a></li>
		  <li><a href="/pages/land/3">Miscellaneous Sales Application</a></li>
		  <li><a href="/pages/land/4">Residential Free Patent Application</a></li>
		  <li><a href="/pages/land/5">Application for Permit and Acceptance of Conditions</a></li>
		 <?php foreach ($Land as $land) { ?>
		 	<li><a href="/applications/<?= $land['Application']['pdf_file']; ?>" target="_blank"><?php echo str_replace('.pdf','',$land['Application']['pdf_file']); ?></a></li>
		 <?php } ?>
		 </ol>
      </div>
      
      <!-- Forest Management Services -->
      <div class="col-lg-4">
       <h4>Forest Management Services</h4>
       <ol class="list-group">
		  <li><a href="/pages/forest/1">Application Form for Registration of Chainsaw</a></li>
		  <li><a href="/pages/forest/2">Application to operate a Wood Processing Plant</a></li>
		  <li><a href="/pages/forest/3">Application for Registration as Imported/Dealer of Imported Wood Materials</a></li>
		  <li><a href="/pages/forest/4">Application for Certificate of Registration as Lumber Dealer</a></li>
		  <li><a href="/pages/forest/5">List of Requirements for Certificate of Registration as Lumber Dealer</a></li>
		  <li><a href="/pages/forest/6">List of Requirements in securing Lumber Supply Contract (LSC)</a></li>
		  <li><a href="/pages/forest/7">List of Requirements in the issuance of Wood Processing Plants (WPPs)</a></li>
		  <?php foreach ($Forest as $forest) { ?>
		 	<li><a href="/applications/<?= $forest['Application']['pdf_file']; ?>" target="_blank"><?php echo str_replace('.pdf','',$forest['Application']['pdf_file']); ?></a></li>
		 <?php } ?>
		</ol>
      </div>
      
      <!-- Protected Areas, Wildlife and Coastal Z0ne  Management Services -->
      <div class="col-lg-4">
       <h4>Protected Areas, Wildlife and Coastal Z0ne  Management Services</h4>
         <ol class="list-group">
		  <!--<li><a href="/pages/wildlife/1">Certification of Wildlife Registration (CWR)</a></li>-->
		  <li><a href="/pages/wildlife/1">Wildlife Farm Permit (WFP)</a></li>
		  <li><a href="/pages/wildlife/2">Local Transport Permit (LTP)</a></li>
		  <li><a href="/pages/wildlife/3">Wildlife Export Certification (WEC)</a></li>
		  <li><a href="/pages/wildlife/4">Wildlife Import Certification (WIC)</a></li>
		  <li><a href="/pages/wildlife/5">Wildlife Re-export Certification (WREC)</a></li>
		  <!--<li><a href="/pages/wildlife/7">Gratuitous Permit (GP)</a></li>-->
		  <li><a href="/pages/wildlife/6">Wildlife Special USe Permit (WSUP)</a></li>
		  <!--<li><a href="/pages/wildlife/9">Clearance to Operate (CO)</a></li>-->
		  <?php foreach ($Wild as $wildlife) { ?>
		 	<li><a href="/applications/<?= $wildlife['Application']['pdf_file']; ?>" target="_blank"><?php echo str_replace('.pdf','',$wildlife['Application']['pdf_file']); ?></a></li>
		 <?php } ?>
		 </ol>
      </div>
      <br>
    </div>
    <br>
 </div>
