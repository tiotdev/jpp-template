<?php get_header(); ?>
<?php
if(is_page('384')){
?>
<div id="collections"> <div class="container">
<h1 class="center toppad">Collections</h1><hr class="title_break center">
    <?php $taxonomy     = 'collections';
$number      = 24;
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
    <div class="col-lg-4 col-sm-6 col-xs-12 cardwrap"><div class="col-md-12 card eqhdiv">
      <div class="card-thumb"><a href="<?php echo get_category_link($cat->term_id); ?>"><div><img src="<?php echo my_get_taxonomy_image_url($cat->term_id,'my_cat_thumb'); ?>" width="800" class="img-responsive" /></div><span class="glyphicon glyphicon-camera"></span></a></div>
      <div class="card-inner"><a href="<?php echo get_category_link($cat->term_id); ?>"><h3><?php echo $cat->cat_name; ?></h3></a><p><?php
echo wp_trim_words( category_description($cat->term_id), 22, '...' );
?> </p>
      </div>
      <div class="col-md-12 stickbtn center"><a class="card-more" href="<?php echo get_category_link($cat->term_id); ?>">View collection</a></div>
    </div>   </div>
  <?php endforeach; ?>






</div>
</div></div>
<?php } else{ ?>
<div id="archive"><div class="container">
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
         <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
               <?php the_content(); ?>
      <?php endwhile; endif; ?>
</div></div>
      <?php } ?>
<footer class="text-center"><div class="footer-below"><div class="container"><div class="row"><div class="col-lg-12">Copyright &copy; Julian Peters <?php echo date("Y"); ?> | Webdesign by Julian Peters | <a href="https://julianpetersphotography.de/contact">Contact</a> | <a href="https://www.facebook.com/julianpetersphotography/" target="_blank">Facebook</a> | <a href="https://500px.com/julianpetersphotography" target="_blank">500px</a> | <a href="https://julianpetersphotography.de/feed/" target="_blank">RSS</a></div></div></div></div></footer><!--- Footer -->
  </div>   </div> <!-- end content --></div><!-- end body container -->
<?php get_footer(); ?>
