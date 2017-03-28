<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Maquette avec Bootstrap</title>
    <link href="<?php echo $view->getThemePath(); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $view->getThemePath(); ?>/css.css" rel="stylesheet">
    <?php Loader::element('header_required'); ?>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
            <a href=""><img src="<?php echo $view->getThemePath();?>/logo.jpg"></a>
        </div>
        <div class="col-md-8" id="navbar">
            <?php
              $a=new GlobalArea('Menu');
              $a->display($c);
             ?>
        </div>
      </div>
    </div>
