<br><br><br>
<div class="col-lg-12">
 <h1>Application Forms</h1>
 <div class="row">
 	  <div class="col-lg-4">
 	    <div class="panel panel-info">
    	  <div class="panel-heading">Land Management Services</div>
    	  <div class="panel-body">
    	  	<ol>
    	  	    <li><a href="/admin/posts/landAgri">Agricultural, Foreshore, Reclaimed Land or Miscellaneous Lease Application</a></li>
		  	    <li><a href="/admin/posts/landInsular">Insular Government Property Sales Application</a></li>
		  	    <li><a href="/admin/posts/landMis">Miscellaneous Sales Application</a></li>
		  	    <li><a href="/admin/posts/landRes">Residential Free Patent Application</a></li>
		  	    <li><a href="/admin/posts/landCons">Application for Permit and Acceptance of Conditions</a></li>
    	  	</ol>
    	  </div>
    	</div>
 	  </div>
 	  
 	  <div class="col-lg-4">
 	    <div class="panel panel-info">
    	  <div class="panel-heading">Forest Management Services</div>
    	  <div class="panel-body">
    	  	<ol>
    	  	    <li><a href="/admin/posts/forestChains">Application Form for Registration of Chainsaw</a></li>
		  		<li><a href="/admin/posts/forestWoods">Application to operate a Wood Processing Plant</a></li>
		  		<li><a href="/admin/posts/forestLumbs">Application for Registration as Imported/Dealer of Imported Wood Materials</a></li>
		  		<li><a href="/admin/posts/forestDealers">Application for Certificate of Registration as Lumber Dealer</a></li>
		  		<li><a href="/admin/posts/forestCerts">List of Requirements for Certificate of Registration as Lumber Dealer</a></li>
		  		<li><a href="/admin/posts/forestSups">List of Requirements in securing Lumber Supply Contract (LSC)</a></li>
		  		<li><a href="/admin/posts/forestPlants">List of Requirements in the issuance of Wood Processing Plants (WPPs)</a></li>
    	  	</ol>
    	  </div>
    	</div>
 	  </div>
 	  
 	  <div class="col-lg-4">
 	    <div class="panel panel-info">
    	  <div class="panel-heading">Protected Areas, Wildlife and Coastal Z0ne Management Services</div>
    	  <div class="panel-body">
          <ol>
    	  	<!--<li><a href="#">Certification of Wildlife Registration (CWR)</a></li>-->
		  	<li><a href="/admin/posts/wildlifeFarms">Wildlife Farm Permit (WFP)</a></li>
		  	<li><a href="/admin/posts/wildlifeLocals">Local Transport Permit (LTP)</a></li>
		  	<li><a href="/admin/posts/wildlifeExports">Wildlife Export Certification (WEC)</a></li>
		  	<li><a href="/admin/posts/wildlifeImports">Wildlife Import Certification (WIC)</a></li>
		  	<li><a href="/admin/posts/wildlifeReexports">Wildlife Re-export Certification (WREC)</a></li>
		  	<!--<li><a href="#">Gratuitous Permit (GP)</a></li>-->
		  	<li><a href="/admin/posts/wildlifeSpecials">Wildlife Special USe Permit (WSUP)</a></li>
		  	<!--<li><a href="#">Clearance to Operate (CO)</a></li>-->
        </ol>
    	  </div>
    	</div>
 	  </div>
 </div>
</div>
<h1>Add Application </h1>
 <div class="row">
   <div class="col-lg-4">

     <?php
        //pr($this->request->data);
      $data = [1=>'Land Management',2=>'Forest Management',3=>'Wildlife Management'];
      echo $this->Form->create('Application',array('type' => 'file'));
      echo $this->Form->input('Application.pdf_file',array('type'=>'file','class'=>'form-control','label'=>'PDF'));
      echo $this->Form->input('application',array('options'=>$data,'empty'=>'Select','class'=>'form-control'));
      echo "<br>";
      echo $this->Form->submit('Add',array('class'=>'btn btn-primary btn-sm'));
      echo $this->Form->end();
     ?>
  </div>
</div>
<br>
<br>
<br>
<br>
