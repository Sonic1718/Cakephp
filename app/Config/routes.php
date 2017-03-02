<?php

Router::connect('/', array('controller' => 'pages', 'action' => 'index'));
// for PDFs


CakePlugin::routes();

require CAKE . 'Config' . DS . 'routes.php';
