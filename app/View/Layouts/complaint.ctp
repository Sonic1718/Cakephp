<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="/css/bootstrap.min.css" rel="stylesheet" />
      <link href="/css/custom.css" rel="stylesheet" />
      <link href="/css/style.css" rel="stylesheet" />
      <link rel="stylesheet" href="/css/font-awesome.min.css">
      <style>
      #map-canvas {
        width: 1150px;
        height: 400px;
      }
      </style>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script src="/js/jquery.js"></script>
    <script type="text/javascript">
     
        function initialize()
        {
          var mapOpt = {
            center:new google.maps.LatLng(15.065194, 120.658122),
            zoom:10,
            mapTypeId:google.maps.MapTypeId.ROADMAP
            };
         
         var map=new google.maps.Map(document.getElementById("map-canvas"),mapOpt);


          var paths = [
              {lat:15.213864, lng:120.477885},
              {lat:15.240365, lng:120.523204},
              {lat:15.249640, lng:120.542430},
              {lat:15.264214, lng:120.579509},
              {lat:15.268188, lng:120.591868},
              {lat:15.261564, lng:120.601481},
              {lat:15.266201, lng:120.611781},
              {lat:15.261564, lng:120.626200},
              {lat:15.260239, lng:120.641993},
              {lat:15.272163, lng:120.657100},
              {lat:15.272825, lng:120.661906},
              {lat:15.259577, lng:120.690059},
              {lat:15.259577, lng:120.703105},
              {lat:15.262889, lng:120.705851},
              {lat:15.268188, lng:120.706538},
              {lat:15.272163, lng:120.711345},
              {lat:15.272825, lng:120.716838},
              {lat:15.270838, lng:120.723018},
              {lat:15.272163, lng:120.731257},
              {lat:15.264214, lng:120.746363},
              {lat:15.267526, lng:120.757350},
              {lat:15.266863, lng:120.773143},
              {lat:15.205250, lng:120.786876},
              {lat:15.212538, lng:120.804728},
              {lat:15.204587, lng:120.815715},
              {lat:15.208563, lng:120.823954},
              {lat:15.204587, lng:120.849360},
              {lat:15.168803, lng:120.867900},
              {lat:15.202599, lng:120.900859},
              {lat:15.216514, lng:120.925578},
              {lat:15.217839, lng:120.955790},
              {lat:15.186033, lng:120.955104},
              {lat:15.175430, lng:120.957164},
              {lat:15.161513, lng:120.944804},
              {lat:15.140967, lng:120.952357},
              {lat:15.135665, lng:120.967463},
              {lat:15.116442, lng:120.983256},
              {lat:15.106498, lng:120.977763},
              {lat:15.101858, lng:120.986003},
              {lat:15.080643, lng:120.970897},
              {lat:15.043512, lng:120.969523},
              {lat:15.034228, lng:120.937938},
              {lat:15.007701, lng:120.934504},
              {lat:14.997752, lng:120.920085},
              {lat:15.008364, lng:120.916652},
              {lat:15.003721, lng:120.899485},
              {lat:14.979843, lng:120.901545},
              {lat:14.975863, lng:120.883693},
              {lat:14.954636, lng:120.863093},
              {lat:14.939378, lng:120.842494},
              {lat:14.916820, lng:120.799922},
              {lat:14.919474, lng:120.748423},
              {lat:14.891605, lng:120.749110},
              {lat:14.851786, lng:120.731944},
              {lat:14.778102, lng:120.664653},
              {lat:14.902222, lng:120.601481},
              {lat:14.833865, lng:120.534877},
              {lat:14.864396, lng:120.504664},
              {lat:14.884969, lng:120.507411},
              {lat:14.900895, lng:120.499858},
              {lat:14.906203, lng:120.500544},
              {lat:14.916820, lng:120.495051},
              {lat:14.912838, lng:120.484752},
              {lat:14.923455, lng:120.476512},
              {lat:14.926772, lng:120.462779},
              {lat:14.964587, lng:120.444239},
              {lat:14.987140, lng:120.420207},
              {lat:15.040859, lng:120.422953},
              {lat:15.071361, lng:120.408534},
              {lat:15.106498, lng:120.365275},
              {lat:15.135665, lng:120.357035},
              {lat:15.166815, lng:120.367335},
              {lat:15.164164, lng:120.385188},
              {lat:15.179407, lng:120.399607},
              {lat:15.181395, lng:120.418147},
              {lat:15.201274, lng:120.440120},
              {lat:15.213864, lng:120.477885}
            ];

            var line = new google.maps.Polyline({
              path:paths,
              strokeColor:"#000000",
              strokeOpacity:0.8,
              strokeWeight:4
            });

            line.setMap(map);
        

            var jsonFile = [
                  {
                  "mun": "Mabalacat",
                  "person" : "Marino 'Boking Morales'",
                  "tit" : "Planning and Development Office",
                  "contact" : "(045) 332-9133",
                  "loc": "15.222485, 120.573488"
                  },
                  {
                  "mun": "Angeles",
                  "person" : "Francis G. Pangilinan",
                  "tit" : "Environment and Natural Resources",
                  "contact" : "0915-300-1862",
                  "loc": "15.145192, 120.588757"
                  },
                  {
                  "mun": "San Fernando",
                  "person" : "Edwin Santiago",
                  "tit" : "Composting / CENRO",
                  "contact" : "(045) 963-5022",
                  "loc": "15.059737, 120.655523"
                  },
                  {
                  "mun": "Arayat",
                  "person" : "Emmanual Bon Alejandro",
                  "tit" : "Planning and Development Office",
                  "contact" : "(045) 885-0020",
                  "loc": "15.164976, 120.780299"
                  },
                  {
                  "mun": "Candaba",
                  "person" : "Rene E. Maglague",
                  "tit" : "Planning and Development Office",
                  "contact" : "(045) 6870",
                  "loc": "15.105972, 120.873470"
                  },
                  {
                  "mun": "Porac",
                  "person" : "Condralito B. Dela Cruz",
                  "tit" : "Planning and Development Office",
                  "contact" : "(045)-329 2053, 3222",
                  "loc": "15.123994, 120.454042"
                  },
                  {
                  "mun": "Magalang",
                  "person" : "Romulo F. Pecson",
                  "tit" : "Planning and Development Office",
                  "contact" : "0905-262-7482",
                  "loc": "15.248398, 120.676964"
                  }
                ];

  


   var marker = [];
   var infowindow = new google.maps.InfoWindow;
   var location;



  <?php for ($x=0 ; $x<=6 ; $x++) { ?>

      location = jsonFile[<?php echo $x; ?>]['loc'].split(',');


       marker[<?php echo $x; ?>] = new google.maps.Marker({
             position: new google.maps.LatLng(location[0], location[1]),
                  map:map,
                title: jsonFile[<?php echo $x; ?>]['barangay'],
    icon: '/image/denricon.png'
       });

       google.maps.event.addDomListener(marker[<?php echo $x; ?>],'click',function(){
          infowindow.close();
          
          infowindow = new google.maps.InfoWindow({
              content: "<h4>Municipality: "+jsonFile[<?php echo $x; ?>]['mun']+"</h4>"+
                       "Mayor : "+jsonFile[<?php echo $x; ?>]['person']+
                       "<br>Title : "+jsonFile[<?php echo $x; ?>]['tit']+
                       "<br>Contact Number : "+jsonFile[<?php echo $x; ?>]['contact']
          });
    
          infowindow.open(map,marker[<?php echo $x; ?>]);
       });

 <?php } ?>










    //DENR LOGO
    var denr;

     denr = new google.maps.Marker({
             position: new google.maps.LatLng(15.064918, 120.658289),
                  map:map,
                title: 'DENR:',
                icon: '/image/DENR1.png'
       });

       google.maps.event.addDomListener(denr,'click',function(){
          infowindow.close();
          
          infowindow = new google.maps.InfoWindow({
              content: "<h4>DENR:</h4>Department of Environment and Natural Resources"
          });
    
          infowindow.open(map,denr);
       });

  }

     google.maps.event.addDomListener(window, 'load', initialize);
    
    </script>
  </head>
<body>
  <div class="col-lg-12" id="head"><!-- header -->
    <div class="container">
      <div class="col-lg-4">
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
                    <div style="text-align:right" id="login">
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
                  </div>
                </div>
                   
               </div><!-- /.container-fluid -->
          </nav>  
         </div>
        <div class="row" style="margin-top:-20px;">
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right side-nav" id="menus">
                    <li><?php echo $this->Html->link('Home','/'); ?> </li>
                    <li><?php echo $this->Html->link('Complaints','/Complaints/complaint'); ?> </li>
                    <li><?php echo $this->Html->link('Application Forms','/Pages/applications'); ?> </li>
                    <li><?php echo $this->Html->link('Forums','/Posts/forum'); ?> </li>
                    <li><?php echo $this->Html->link('Contact Us','/Pages/contact'); ?> </li>
                    <li><?php echo $this->Html->link('FaQs','/Pages/faqs'); ?></li>
            </ul>
          </div>  
        </div>
      </div>
    </div>
  </div><!-- end of head -->
<br/>

    <!--Rotating image-->
     
  <!--end of Rotating image-->

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
  <script src="/js/script.js"></script>
  <script src="/js/bootstrap.min.js"></script>
</body>
</html>   
