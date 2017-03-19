<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title('');?>
</title>
<link rel="shortcut icon" href="https://julianpetersphotography.de/wp-content/uploads/2014/12/favicon.ico" type="image/x-icon">
<link rel="icon" href="https://julianpetersphotography.de/wp-content/uploads/2014/12/favicon.ico" type="image/x-icon">
<?php wp_head(); ?>
    <link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet">
      <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div id="body-container">
 <div id="navigationtop">
<div class="navbar navbar-default">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="https://julianpetersphotography.de"><img src="https://julianpetersphotography.de/wp-content/uploads/2014/12/logo-50.png" class="headerlogo" width=30 height=30></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="navli"><a class="page-scroll" href="https://julianpetersphotography.de/#collections">Collections</a></li>
            <li class="navli"><a class="page-scroll" href="https://julianpetersphotography.de/#map">Map</a></li>
            <li class="navli"><a class="page-scroll" href="https://julianpetersphotography.de/#photostream">Photostream</a></li>
        </ul>
      <?php get_search_form(); ?>
    </div>
</div></div></div>
<div id="content">
