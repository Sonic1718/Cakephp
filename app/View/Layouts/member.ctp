<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>Member | <?php echo $title_for_layout; ?></title>
    <?php
        echo $this->Html->script('jquery-1.11.3');
        echo $this->Html->css('bootstrap.min');
        echo $this->Html->css('admin');
    ?>
      <!-- jquery -->
    <script src="/js/jquery.js"></script>
</head>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">Administrator</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
                        <?php if($logged_in): ?>
                            <?php echo $current_user['User']['username']; ?>
                        <?php else: ?>
                            <?php echo $this->Html->link('Login',array('controller'=>'users','action'=>'login')); ?>
                         <?php endif; ?>
                      <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                       <li><?php echo $this->Html->link('Profile Picture',array(
                                      'controller'=>'users',
                                      'action'=>'profile',
                                       $current_user['User']['id'] )); ?></li>
                        <li><?php echo $this->Html->link('Update Info',array(
                                      'controller'=>'users',
                                      'action'=>'info',
                                       $current_user['User']['id'] )); ?></li>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> <?php echo $this->Html->link('Logout','/member/users/logout'); ?></a>
                        </li>
                    </ul>
                </li>
            </ul>
    <!-- Sidebar Menu Items -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                    <li><?php echo $this->Html->link(__('Home'), array('controller' => 'Posts', 'action' => 'index')); ?> </li>
                    <li><?php echo $this->Html->link(__('Users'), array('controller' => 'Users', 'action' => 'user')); ?></li>
                    <li><?php echo $this->Html->link(__('Complaints'), array('controller' => 'Complaints', 'action' => 'complaint')); ?> </li>
		    <li><?php echo $this->Html->link(__('Statistics'), array('controller' => 'Posts', 'action' => 'stats')); ?></li>
 		    <li><?php echo $this->Html->link(__('Application Forms'), array('controller' => 'Posts', 'action' => 'application')); ?> </li>
                    <li><?php echo $this->Html->link(__('Forums'), array('controller' => 'Posts', 'action' => 'forum')); ?> </li>
               </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
         <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <?php echo $this->Session->flash(); ?>

                        <?php echo $this->fetch('content'); ?>
                    </div>
                </div>
                <!-- end row -->

            </div>
            <!-- end container-fluid -->

        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

   
     <!-- Bootstrap -->
    <script src="/js/bootstrap.min.js"></script>
   <script>
        $(document).ready(function() {

            $("#panel1").hide().slideDown(1000);

        });
    </script>
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
</body>
</html>
