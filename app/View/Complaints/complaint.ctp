<body style="background-color:#eeeeee">

<?php
if ( $this->Session->read('promp') ) {
	echo $this->Session->read('promp');
	unset($_SESSION['promp']); 
}

?>
<br/>
<div class="container"><br/>
	<?php
		if ( $this->Session->read('failed') ) {
				echo $this->Session->read('failed');
				echo "Please click this link to verify your account ".$this->Html->link('verify',array('controller' => 'users', 'action' => 'verifyinfo',$current_user['User']['id']));
				unset($_SESSION['failed']); 
		}

	?>
	<div class="container"><br/>
	
	<div id="map-canvas" style="background-color:#222"><br/><br/><br/><br/><br/><br/><br/><br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<?php 
			echo $this->Html->image('loading.gif',array('height'=>'75px'));
		?>
     </div>
		
		<?php
			$data = array();

			foreach ($subjects as $subject){
				
				$data[$subject['Subject']['id']] = $subject['Subject']['subject'];
			}
			if($current_user){
				$id = $current_user['User']['id'];
			}else {
				$id = 0;
			} 
		?>

		<?php

			$locations =['arayat, pampanga','angeles, pampanga','mabalacat, pampanga','magalang, pampanga','porac, pampanga','candaba, pampanga','sanfernando, pampanga'];

			$local = array();

			foreach ($locations as $location){
				
				$local[$location] = $location;
			}
	   ?>
		
	<br/>
	<div class="container">
		<div class="col-lg-12"></div>
				<div class="col-md-5">
					<div class="panel panel-success">
      					<div class="panel-heading"><h1 id="green">Google Map Icon Descriptions</h1></div>
      					<div class="panel-body">      						
      						<img src="/img/denriconmaplogo.png">Department of Environment and Natural Resources
      						<hr>
      						<img src="/img/denriconmap.png"> Barangay Informations
      					</div>
   					</div>
				</div>
			<?php if($current_user['User']['verified'] == 1): ?>
				<div class="col-md-6">
					<div class="panel panel-success">
						<div class="panel-heading"><h1 id="green">DENR COMPLAINT FORMS</h1></div>
						<div class="panel-body">
							<?php echo $this->Form->create('Complaint', array('type' => 'file')); ?>
							<?php
								echo $this->Form->input('user_id',array('value'=>$id ,'type'=>'hidden'));
								echo "<b>Types of Management Services</b>";
								echo $this->Form->select('subject_id',$data,array('style'=>'height:30px','class'=>'form-control'));
								echo $this->Form->input('Picture.image', array('type' => 'file','style'=>''));
								echo "<br>";
								echo "<b>Incident Location</b>";
								echo $this->Form->select('location_id',$local,array('style'=>'height:30px','class'=>'form-control'));
								echo "<br>";

								$options = array('high' => 'High','medium' => 'Medium','low' => 'Low');
								echo $this->Form->radio('risk',$options,array('separator'=>'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'));
								echo "<br>";
								echo $this->Form->input('message',array('class'=>'form-control'));
							?>
							<div style="text-align:right; margin-top:10px;">
								<?php echo $this->Form->submit('Submit',array('class'=>'btn btn-default')); ?>
								<br/>
							</div>
						</div>
					</div>
				</div>
			<?php endif; ?>
			<?php if($current_user['User']['verified'] == 0): ?>
				<div class="col-md-6">
					<div class="panel panel-success">
						<div class="panel-heading"><h1 id="green">DENR COMPLAINT FORMS</h1></div>
						<div class="panel-body">
							<?php
								echo "<p class='alert alert-warning alert-dismissible' role='alert'>"."Note: In order to post your complaint you need to verify your number ".$this->Html->link('verify',array('controller' => 'users', 'action' => 'verifyinfo',$current_user['User']['id']))."</p>"."<br/>";
								echo $this->Form->input('user_id',array('value'=>$id ,'type'=>'hidden', 'disabled' => 'disabled'));
								echo "<b>Types of Management Services</b>";
								echo $this->Form->select('subject_id',$data,array('style'=>'height:30px','class'=>'form-control', 'disabled' => 'disabled'));
								echo $this->Form->input('Picture.image', array('type' => 'file','style'=>'', 'disabled' => 'disabled'));
								echo "<br>";
								echo "<b>Incident Location</b>";
								echo $this->Form->select('location_id',$local,array('style'=>'height:30px','class'=>'form-control', 'disabled' => 'disabled'));
								echo "<br>";

								$options = array('high' => 'High','medium' => 'Medium','low' => 'Low');
								echo $this->Form->radio('risk',$options,array('separator'=>'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', 'disabled' => 'disabled'));
								echo "<br>";
								echo $this->Form->input('message',array('class'=>'form-control', 'disabled' => 'disabled'));
							?>
							<div style="text-align:right; margin-top:10px;">
								<?php echo $this->Form->submit('Submit',array('class'=>'btn btn-default', 'disabled' => 'disabled')); ?>
								<br/>
							</div>
						</div>
					</div>
				</div>

			<?php endif; ?>
	</div>
</div>
</div>
