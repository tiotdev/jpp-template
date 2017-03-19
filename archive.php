<?php get_header(); ?>
<?php
if(is_category_level('0') OR is_category('86') OR is_category('1136') OR is_category('448') OR is_category('3') OR is_category('4')){
?>
  <div id="panel-parenttop">
    <div class="bg-blur bg-parentblur" style="background: url('<?php global $post; if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url(); else echo $post->image->getThumbnailHref(array('w=1200','fltr[]=usm|80|0.5|25')); ?>') top center; background-repeat:no-repeat;     background-size:cover; background-color:black;"></div>
      <div class="blur-overlay blur-parentoverlay">
        <div class="archive-caption container center">
          <h1 class="archive-h1 center"><?php single_cat_title(); if ( $paged < 2 ) { } else { echo (' - Page '); echo ($paged);} ?></h1><hr class="title_break center"><p class="lead archive-lead"><?php echo category_description(); ?></p>
        </div>
      </div>
    </div>


<?php
$parent = get_cat_id( single_cat_title("",false) );
$number      = 12;
$orderby      = 'ID';
$order      = 'DESC';
$show_count   = false;
$pad_counts   = false;
$hierarchical = true;
$title        = '';

$catargs = array(
'parent' => $parent,
'number'     => $number,
'orderby'      => $orderby,
'order'      => $order,
'show_count'   => $show_count,
'pad_counts'   => $pad_counts,
'hierarchical' => $hierarchical,
'title_li'     => $title
);
?>
<div class="container">
  <div class="row">
  <?php global $post; foreach (get_categories( $catargs ) as $cat) : ?>
    <div class="col-lg-4 col-sm-6 col-xs-12 cardwrap"><div class="eqhdiv">
      <div class="card-thumb"><a href="<?php echo get_category_link($cat->term_id); ?>"><div><img src="<?php echo my_get_taxonomy_image_url($cat->term_id,'my_cat_thumb'); ?>" width="800" class="img-responsive" /></div><span class="glyphicon glyphicon-camera"></span></a></div>
      <div class="card"><div class="card-inner"><a href="<?php echo get_category_link($cat->term_id); ?>"><h3><?php echo $cat->cat_name; ?></h3></a><p><?php
  echo wp_trim_words( category_description($cat->term_id), 22, '...' );
  ?> </p>
      </div>    </div>
      <a class="nohover" href="<?php echo get_category_link($cat->term_id); ?>"><div class="card-more center">View collection</div></a>
    </div>   </div>
  <?php endforeach; ?></div></div>
  <footer class="text-center"><div class="footer-below"><div class="container"><div class="row"><div class="col-lg-12">Copyright &copy; Julian Peters <?php echo date("Y"); ?> | Webdesign by Julian Peters | <a href="https://julianpetersphotography.de/contact">Contact</a> | <a href="https://www.facebook.com/julianpetersphotography/" target="_blank">Facebook</a> | <a href="https://500px.com/julianpetersphotography" target="_blank">500px</a> | <a href="https://julianpetersphotography.de/feed/" target="_blank">RSS</a></div></div></div></div></footer><!--- Footer --></div></div>
    </div>   </div> <!-- end content --></div><!-- end body container -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.7.9/jquery.fullPage.min.js"></script>
    <script>$(document).ready(function() {
        $('#fullpage').fullpage();
    });</script>
<?php } else{ ?>
<div id="fullpage">
  <div id="panel-top" class="section"><div class="bg-blur" style="background: url('<?php global $post; $cat_img_url= z_taxonomy_image_url(); if (!empty($cat_img_url)) echo z_taxonomy_image_url();  else echo $post->image->getThumbnailHref(array('w=1200','fltr[]=usm|80|0.5|25')); ?>') top center; background-repeat:no-repeat;     background-size:cover; background-color:black;"></div><div class="blur-overlay"><div class="archive-caption container center"><?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
  <?php /* If this is a category archive */ if (is_category()) { ?>
  <h1 class="archive-h1 center"><?php single_cat_title(); if ( $paged < 2 ) { } else { echo (' - Page '); echo ($paged);} ?></h1>
  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
  <h1 class="archive-h1 center">#<?php single_tag_title(); if ( $paged < 2 ) { } else { echo (' - Page '); echo ($paged);} ?></h1>
  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
  <h1 class="archive-h1 center">Archive for <?php the_time('F jS, Y'); if ( $paged < 2 ) { } else { echo (' - Page '); echo ($paged);} ?></h1>
  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
  <h1 class="archive-h1 center">Archive for <?php the_time('F, Y'); if ( $paged < 2 ) { } else { echo (' - Page '); echo ($paged);} ?></h1>
  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
  <h1 class="archive-h1 center">Archive for <?php the_time('Y'); if ( $paged < 2 ) { } else { echo (' - Page '); echo ($paged);} ?></h1>
  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
  <h1 class="archive-h1 center">Archives</h1>
  <?php /* If this is a paged archive */ } elseif ( is_tax('collections')) { ?>
  <h1 class="archive-h1 center"><?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
	echo $term->name; if ( $paged < 2 ) { } else { echo (' - Page '); echo ($paged);} ?></h1>
  <?php /* If this is a paged archive */ } else { ?>
  <h1 class="archive-h1 center">Else</h1>
  <?php } ?><hr class="title_break center" style=""><p class="lead archive-lead"><?php if (category_description( $category ) == '') : the_archive_title(''); else : echo category_description(); endif; ?> </p>
<a class="btn btn-primary" href="#<?php $i = 1; if ( have_posts() ) : while (have_posts() && $i < 2) : the_post(); global $post; $post_slug=$post->post_name; echo $post_slug; $i++; endwhile; endif; rewind_posts(); ?>" role="button">Scroll down for first photo</a>

</div>

  </div>


</div>
<?php if ( is_tax('collections')) { global $query_string;
query_posts( $query_string . '&order=ASC' ); }
        if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>
<div class="section">
  <div id="<?php global $post; $post_slug=$post->post_name; echo $post_slug; ?>" class="js-list-item archive-image" style="background: url('<?php echo $post->image->getThumbnailHref(array('w=1200', 'h=800', 'q=70','fltr[]=usm|70|0.5|25')) ?>') top center; background-repeat:no-repeat;     background-size:contain; background-color:black;">
  <div class="archive-details"><div class="container"><h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1><p><?php the_content(); ?>
  </p></div></div>

  </div>
</div>
        <?php endwhile;

        else: ?>
        <p>Sorry, no posts matched your criteria.</p>


      <?php endif; ?>        <div class="section prefoot"><br><br><br>

        <div class="extendedfooter">
    <div class="container center vcenter">
        <?php
if (function_exists("wp_bs_pagination"))
    {
         //wp_bs_pagination($the_query->max_num_pages);
         wp_bs_pagination();
}
?>         <a class="btn btn-primary center" href="#panel-top">Go to top</a>

   </div>   </div></div>

   <footer class="text-center archive-foot"><div class="footer-below"><div class="container"><div class="row"><div class="col-lg-12">Copyright &copy; Julian Peters <?php echo date("Y"); ?> | Webdesign by Julian Peters | <a href="https://julianpetersphotography.de/contact">Contact</a> | <a href="https://www.facebook.com/julianpetersphotography/" target="_blank">Facebook</a> | <a href="https://500px.com/julianpetersphotography" target="_blank">500px</a> | <a href="https://julianpetersphotography.de/feed/" target="_blank">RSS</a></div></div></div></div></footer><!--- Footer --></div></div>
     </div>   </div> <!-- end content --></div><!-- end body container -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.7.9/jquery.fullPage.min.js"></script>
     <script>$(document).ready(function() {
         $('#fullpage').fullpage();
     });</script>
        <?php } ?>



<?php get_footer(); ?>
