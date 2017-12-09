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
    <style>
    @media(min-width:767px) {
        .navbar {
          background:rgba(0, 0, 0, 0.2) !important;
            padding: 20px 0;
            -webkit-transition: background .5s ease-in-out,padding .5s ease-in-out;
            -moz-transition: background .5s ease-in-out,padding .5s ease-in-out;
            transition: background .5s ease-in-out,padding .5s ease-in-out;
        }

        .top-nav-collapse {
            padding: 0 !important;
            background: rgb(55, 90, 127) !important;
        }
    }
    #content {
        z-index:1;
      top:0px;
      padding-top: 0px;
    }
</style>
  </head>
  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
  <div id="body-container">
 <div id="navigationtop">
<div class="navbar navbar-default navbar-fixed-top">
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
    <li class="navli navli-active"><a class="page-scroll" href="https://julianpetersphotography.de">Julian Peters Photography</a></li>
            <li class="navli"><a class="page-scroll" href="https://julianpetersphotography.de/#collections">Collections</a></li>
            <li class="navli"><a class="page-scroll" href="https://julianpetersphotography.de/#map">Map</a></li>
            <li class="navli"><a class="page-scroll" href="https://julianpetersphotography.de/#photostream">Photostream</a></li>
        </ul>
      <?php get_search_form(); ?>
    </div>
</div></div></div>
<div id="content">

    <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="active item">
              <div class="fill" style="background-image:url('wp-content/uploads/bg-1.jpg');"></div>
              <div class="carousel-caption"><h1 class="center">Julian Peters Photography</h1>
                   <p class="center"><a class="btn btn-default" href="#collections" role="button">Browse Collections</a><a class="btn btn-primary" href="#about" role="button">Read More</a></p>                </div>
          </div>
                  <div class="item">
                <div class="fill" style="background-image:url('wp-content/uploads/bg-2.jpg');"></div>
                <div class="carousel-caption"><h1 class="center">Julian Peters Photography</h1>
                     <p class="center"><a class="btn btn-default" href="#map" role="button">See world map</a><a class="btn btn-primary" href="#about" role="button">Read More</a></p>                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('wp-content/uploads/bg-3.jpg');"></div>
                <div class="carousel-caption"><h1 class="center">Julian Peters Photography</h1>
                     <p class="center"><a class="btn btn-default" href="#photostream" role="button">Explore the Photostream</a><a class="btn btn-primary" href="#about" role="button">Read More</a></p>
                </div>
            </div>

        </div>
</div>
<div id="collections"> <div class="container">
<h2 class="center">New Collections</h2>
<hr class="title_break center">

    <?php $taxonomy     = 'collections';
$number      = 3;
$orderby      = 'ID';
$order      = 'DESC';
$show_count   = false;
$pad_counts   = false;
$hierarchical = true;
$title        = '';

$catargs = array(
  'taxonomy'     => $taxonomy,
  'number'     => $number,
  'orderby'      => $orderby,
  'order'      => $order,
  'show_count'   => $show_count,
  'pad_counts'   => $pad_counts,
  'hierarchical' => $hierarchical,
  'title_li'     => $title
);
?>



<div class="row">
  <?php global $post; foreach (get_categories( $catargs ) as $cat) : ?>
    <div class="col-lg-4 col-sm-6 col-xs-12 cardwrap"><div class="eqhdiv">
      <div class="card-thumb"><a href="<?php echo get_term_link($cat->term_id); ?>"><div><img src="<?php echo my_get_taxonomy_image_url($cat->term_id,'my_cat_thumb'); ?>" width="800" class="img-responsive" /></div><span class="glyphicon glyphicon-camera"></span></a></div>
      <div class="card"><div class="card-inner"><a href="<?php echo get_term_link($cat->term_id); ?>"><h3><?php echo $cat->cat_name; ?></h3></a><p><?php
echo wp_trim_words( category_description($cat->term_id), 22, '...' );
?> </p>
      </div>    </div>
      <a class="nohover" href="<?php echo get_term_link($cat->term_id); ?>"><div class="card-more center">View collection</div></a>
    </div>   </div>
  <?php endforeach; ?>
</div>
  <div class="loadmore"><p class="center"><a class="btn btn-primary" href="collections" role="button">Browse all collections</a></p></div>
</div></div>

<div id="about" class="aboutbg"> <div class="container">    <div class="col-md-6 center  col-md-offset-3">    <div class="aboutinner">
 <h2 class="center">About me</h2>
 <hr class="title_break whitebrk center">
<p class="lead center">Travel photographer from Gaggenau, Germany</p>
</div></div></div></div>

<div id="map" class="whitebg"><div class="container"><h2 class="center">Round the world</h2>
  <hr class="title_break whitebrk center">
<p class="lead">On this map you can see every place where I captured a great photo. A click on a camera-icon will show you the title of the photograph taken at this place, clicking on the title will directly take you to the photograph itself.</p></div>
<div align="center"><?php
echo do_shortcode('
  [osm_map_v3 map_center="24.436,8.68" zoom="2" width="100%" height="450" tagged_type="post" import="exif_m"  marker_name="mic_photo_icon.png" tagged_param="cluster" tagged_color="black" map_border="none"]
');
?> </div></div>

 <div id="categories"> <div class="container">
  <h2 class="center">Browse Categories</h2>
  <div class="row circles-row">
    <div class="col-lg-4 col-sm-4 col-xs-12">
        <a href="category/location"><i class="glyphicon glyphicon-globe cprime bigg"></i>
        <h3 class="cw center">Location</h3>
        </a>
    </div>
     <div class="col-lg-4 col-sm-4 col-xs-12">
        <a href="category/style"><i class="glyphicon glyphicon-pencil cprime bigg"></i>
        <h3 class="cw center">Style</h3>
        </a>
    </div>
     <div class="col-lg-4 col-sm-4 col-xs-12">
        <a href="category/topic"><i class="glyphicon glyphicon-camera cprime bigg"></i>
        <h3 class="cw center">Topic</h3>
        </a>
    </div>
  </div>


</div></div>

  <div id="photostream">
    <div class="container"><h2 class="center">Photostream</h2> <hr class="title_break center"></div>
    <div id="pstream" class="site-main ajax_posts row fullwidth">
      <?php /* Start the Loop */ while ( have_posts() ) : the_post(); ?>
        <div class="col-xs-4 col-sm-3 col-lg-2 blesscol thumbstream">
              <a href="<?php the_permalink(); ?>"><div class="postthumb">
              <img src="<?php echo $post->image->getThumbnailHref(array('w=320', 'h=320', 'zc=1', 'sw=1000', 'sh=1000', 'q=60','fltr[]=usm|60|0.5|25')) ?>" class="blessthumb img-responsive" title="<?php echo $post->post_title ?>" alt="<?php echo $post->post_title ?>" >
            </div>
            <span class="thumbtitle"><h4><?php echo $post->post_title ?></h4></span></a>
          </div>
        <?php endwhile; ?> </div>
        <?php
       echo do_shortcode('[ajax_load_more post_type="post" offset="12" posts_per_page="12" images_loaded="true" max_pages="15"]');
       ?>
   </div>



<br>
<!-- jQuery -->
<script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>

<!-- Scrolling Nav JavaScript -->
<script src="<?php bloginfo('template_url'); ?>/js/jquery.easing.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/scrolling-nav.js"></script>
<footer class="text-center"><div class="footer-below"><div class="container"><div class="row"><div class="col-lg-12">Copyright &copy; Julian Peters <?php echo date("Y"); ?> | Webdesign by Julian Peters | <a href="https://julianpetersphotography.de/contact">Contact</a> | <a href="https://www.facebook.com/julianpetersphotography/" target="_blank">Facebook</a> | <a href="https://500px.com/julianpetersphotography" target="_blank">500px</a> | <a href="https://julianpetersphotography.de/feed/" target="_blank">RSS</a></div></div></div></div></footer><!--- Footer -->
  </div>   </div> <!-- end content --></div><!-- end body container -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/load-more.js"></script>
  <!-- Script to Activate the Carousel -->
  <script>
$('.carousel').carousel();
  </script>



<?php get_footer(); ?>
