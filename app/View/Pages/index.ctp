<?php
if ( $this->Session->read('upload') ) {
	echo $this->Session->read('upload');
	unset($_SESSION['upload']); 
}
?>
<?php
if ( $this->Session->read('info') ) {
	echo $this->Session->read('info');
	unset($_SESSION['info']); 
}
?>
<body style="background-color:#eeeeee">
<!-- container -->



    <div class="col-lg-12 center">
      <h3><?php echo $this->Session->flash('auth')?></h3>
    </div>

    <!--Rotating image-->
     <div class="col-lg-12" id="rotator">
        <div class="container">
          <div class="col-lg-4">
            <br><h3 id="h3">The Philippine government <span id="green">responsible for governing</span> and supervising the exploration, <span id="green">development, utilization,</span> and conservation of <span id="green">the country's natural resources</span></h3>
            <br><div class="btn-group" role="group" aria-label="...">
              <button type="button" class="btn btn-default">Find Out More</button>
            </div>
          </div>
          <div class="col-lg-8">
            <div id="fader">
              <img src="/img/1.jpg" class="img-responsive" />
              <img src="/img/2.jpg" class="img-responsive" />
              <img src="/img/3.jpg" class="img-responsive" />
              <img src="/img/4.jpg" class="img-responsive" />
              <img src="/img/5.jpg" class="img-responsive" />
              <img src="/img/6.jpg" class="img-responsive" />
            </div>
          </div>
      </div>
   </div>
  <!--end of Rotating image-->

<!--CONTENT-->
<div class="col-lg-12" id="formApplicationLinks">
   <div class="container">
      <div class="col-lg-12"><br>
      		<div class="col-lg-4 col-md-4" >
					<div class="col-lg-12">
						<h2 id="content2"><strong>Facts & Trivia</strong></h2>
						<?php
						  foreach($fact as $fa) {
						?>
						<img src="/facts/<?= $fa['Facts']['image']; ?>" class="img-thumbnail" alt="Responsive image" style="height: 280px;">
						<br><br>
						<h5 id="date"><?= $this->Time->format('F jS, Y',$fa['Facts']['created']); ?></h5>
						<h4><?= $fa['Facts']['title']; ?></h4>
						<p><?= $this->Text->truncate($fa['Facts']['description'],400,array('ellipsis' => "<br><a href='/pages/fact/".$fa['Facts']['id']."'>Read More...</a>",'exact' => false)); ?></p>
						<?php } ?>
					</div>
			</div>

			<div class="col-lg-4 col-md-4" id="home">
					<div class="col-lg-12">
						<h2 id="content2"><strong>Announcements</strong></h2>
						<?php
						 foreach($announcement as $ann) {
						?>
						<img src="/announcements/<?= $ann['Announcements']['image']; ?>" class="img-thumbnail" alt="Responsive image" style="height: 280px;">
						<br><br>
						<h5 id="date"><?= $this->Time->format('F jS, Y',$ann['Announcements']['created']); ?></h5>
						<h4><?= $ann['Announcements']['title']; ?></h4>
						<p><?=  $this->Text->truncate($ann['Announcements']['description'],400,array('ellipsis' => "<br><a href='/pages/announcement/".$ann['Announcements']['id']."'>Read More...</a>",'exact' => false)); ?></p>
					    <?php } ?>
					</div>
			</div>

			<div class="col-lg-4 col-md-4" >
					<div class="col-lg-12">
						<h2 id="content2"><strong>News & Events</strong></h2>
						<?php
							foreach($news as $new) {
						?>
						<div class="row news-border">
							<div class="col-lg-5 col-sm-12">
							<img src="/news/<?= $new['News']['image'];?>" class="img-thumbnail img-responsive hidden-md hidden-sm hidden-xs" id="imageEvent" style="height: 120px;">
							<img src="image/event1.jpg" class="img-thumbnail img-responsive hidden-lg" >
							</div>
							<div class="col-lg-7 col-md-12 col-sm-12">
								<h5 id="date"><?= $this->Time->format('F jS, Y',$new['News']['created']); ?></h5>
								<p><?= $this->Text->truncate($new['News']['description'],120,array('ellipsis' => " <br><a href='/pages/news/".$new['News']['id']."'>Read More...</a>",'exact' => false));?></p>
							</div>	
						</div>
						<br>

						<?php  } ?>
						
					</div>
			</div>
      </div>
   </div>
</div>
<!-- END Content -->



