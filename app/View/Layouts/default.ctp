<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="/css/bootstrap.min.css" rel="stylesheet" />
      <link href="/css/custom.css" rel="stylesheet" />
      <link href="/css/style.css" rel="stylesheet" />
      <link rel="stylesheet" href="/css/font-awesome.min.css">
      <script type="text/javascript" src="/js/jquery.js"></script>
  </head>
<body>
  <div class="col-lg-12" id="head"><!-- header -->
    <div class="container">
      <div class="col-lg-4" style="margin-top:10px;">
        <a href="/"><img src="/image/denr.png" height="100px" width="360px"></a><br>
      </div>
      <div class="col-lg-8">
         <div class="row">
          <nav class="navbar navbar-right">
              <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                 </div>
                 
                  <div class="container">
                      <div style="text-align:right">
                          <?php if($logged_in): ?>
                           <div class="dropdown">
                              <span id="welcome">Welcome  </span>
				
                                <?php if($current_user['User']['picture'] == 'empty') { ?>
                                          <img src="/img/user.png" height="30px" width="40px">
                                <?php }else { ?>
                                          <img src="<?php echo "/img/".$current_user['User']['picture']; ?>" style="height:30px;width:40px;">
                                <?php } ?>
                            <a data-toggle="dropdown" href="#"><span style="color: #A5A5A5;"><?php echo " ".$current_user['User']['username']; ?><b class="caret"></b></span></a>
                              <ul class="dropdown-menu" role="menu">
                                <li><?php echo $this->Html->link('Profile Picture',array(
                                      'controller'=>'users',
                                      'action'=>'profile',
                                       $current_user['User']['id'] )); ?></li>
                                <li><?php echo $this->Html->link('Update Info',array(
                                      'controller'=>'users',
                                      'action'=>'info',
                                       $current_user['User']['id'] )); ?></li>
                                <li role="presentation" class="divider"></li>
                                <li><?php echo $this->Html->link('Logout',array('controller'=>'users','action'=>'logout')); ?></li>
                              </ul>
                          </div>
                          <?php else: ?>
                            <?php echo $this->Html->link('Register /',array('controller'=>'users','action'=>'register'),array('id'=>'reg')); ?>
                            <?php echo $this->Html->link('Login',array('controller'=>'users','action'=>'login'),array('id'=>'reg')); ?>
                          <?php endif; ?>
                      </div>
                 
                   
               </div><!-- /.container-fluid -->
          </nav>  
         </div>
        <div class="row navbar-right" style="margin-top:-20px;">
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right side-nav" id="menus">
                    <li><?php echo $this->Html->link('Home','/'); ?> </li>
                    <li><?php echo $this->Html->link('Complaints','/Complaints/complaint'); ?> </li>
                    <li><?php echo $this->Html->link('Application Forms','/Pages/applications'); ?> </li>
                    <li><?php echo $this->Html->link('Forums','/Posts/forum'); ?> </li>
                    <li><?php echo $this->Html->link('Contact Us','/Pages/contact'); ?> </li>
                    <li><?php echo $this->Html->link('FaQs','/Pages/faqs');?></li>
            </ul>
          </div>  
        </div>
      </div>
    </div>
  </div><!-- end of head -->     



  <?php echo $this->Session->flash(); ?>
  <?php echo $this->fetch('content'); ?>
    
    <!--Footer-->
    <div class="col-lg-12">
      <br>
      <br>
      <div class="row lightBrown">
        <div class="container">
          <div class="col-lg-3"><br><br>
            <ul class="social-icon list-inline" id="apilinks">
            <li><a href="https://www.facebook.com/DENROfficial"><i class="fa fa-facebook-square fa-2x"></i></a></li>
            <li><a href="https://twitter.com/denr_official"><i class="fa fa-twitter fa-2x"></i></a></li>
            <li><a href="https://www.youtube.com/watch?v=U4Nvfcvk5HI"><i class="fa fa-youtube fa-2x"></i></a></li>
            <li><a href="https://www.linkedin.com/title/manager-denr"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
            <li><a href="https://plus.google.com/share?url=https%3A%2F%2Fwww.google.com%2Fmaps%2Fd%2Fviewer%3Fmid%3DzZF9aMIJhaaU.kRCsjhr-ajQA%26hl%3Den_US%26usp%3Dsharing"><i class="fa fa-google-plus-square fa-2x"></i></a></li>
            </ul>
            <ul class="list-unstyled" id="apilinks">
              <li><?php echo $this->Html->link('Home','/'); ?> </li>
              <li><?php echo $this->Html->link('Complaints','/Complaints/complaint'); ?> </li>
              <li><?php echo $this->Html->link('Application Forms','/Pages/applications'); ?> </li>
              <li><?php echo $this->Html->link('Forums','/Posts/forum'); ?> </li>
              <li><?php echo $this->Html->link('Contact Us','/Pages/contact'); ?> </li>
              <li><?php echo $this->Html->link('FaQs','/Pages/faqs');?></li>
            </ul>
          </div>

          <div class="col-lg-9"><br>
            <div class="col-lg-offset-1"><br>
               <h3 style="color:#FFF;">Address: 4th Floor Melvi Building, San Fernando, 2000, Pampanga<br>
                       Phone:(045) 961 5203
                       </h3>
            </div>
          </div>
          <br>
        </div>
        <br>
      </div>
      <div class="row footerBrown">
        <div class="container"><br>
          <div class="col-lg-6">
            <p style="color:#FFF;">DENR (Department of Environment and Natural Resource)</p>
          </div>
          <div class="col-lg-6">
          </div>
        </div>
      </div>
    </div>
      
    <!--end Footer-->

  <!-- javascript -->
  <script src="/js/jquery.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script> <script src="/js/script.js"></script>
  <script src="/js/bootstrap.min.js"></script>

  <!-- File Button -->
    <script>
    $(document).on('change', '.btn-file :file', function() {
      var input = $(this),
      numFiles = input.get(0).files ? input.get(0).files.length : 1,
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
      input.trigger('fileselect', [numFiles, label]);
    });

    $(document).ready( function() {
        $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
            
            var input = $(this).parents('.input-group').find(':text'),
                log = numFiles > 1 ? numFiles + ' files selected' : label;
            
            if( input.length ) {
                input.val(log);
            } else {
                if( log ) alert(log);
            }
            
        });
    });
  </script>
  <!-- setFlash Message -->
  <script>
    $(document).ready(function() {
      $("#panel1").fadeIn().fadeIn().fadeOut();
    }); 
  </script>

  <script>
    $(document).ready(function() {
      $(function() {
        $("#file").change(function() {
          var reader = new FileReader();
          reader.onload = function(e) {
            $('#preview').attr("style","height:100px;width:100px;");
            $('#preview').attr('src',e.taget.result);
          }
            reader.readAsDataURL(this.files[0]);
        });
      });
    }); 
  </script>
</body>
</html>   
