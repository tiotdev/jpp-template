<?php get_header(); ?>
<?php global $post;
$src = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'large' ); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="headerimg single-image" style="background: url('<?php echo $post->image->getThumbnailHref(array('w=1500','fltr[]=usm|90|0.5|25')) ?>') top center; background-repeat:no-repeat;     background-size:contain; background-color:black; background-position: fixed;">
<div id="details" class="single-details"><div class="container"><h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1><p><?php the_content(); ?></p></div></div></div>

<div id="fullmap"><?php OSM_displayOpenStreetMapExt("100%", "350", "6", "Osmarender", "No", "mic_black_pinother_02.png", 37, 32, "","13","5");?></div>

<?php endwhile; endif; ?>
<?php if (get_adjacent_post(false, '', false)): // if there are older posts ?>
  <a class="left carousel-control" href="<?php echo get_permalink(get_adjacent_post(false,'',false)); ?>" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
<?php endif; ?>
<?php if (get_adjacent_post(true, '', false)): // if there are newer posts ?>
  <a class="right carousel-control" href="<?php echo get_permalink(get_adjacent_post(false,'',true)); ?>" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
<?php endif; ?>
    <div id="exif">
<div class="container">
<div class="row">
  <div class="col-md-6">
<h3>Post-Data</h3>
<table class="table table-condensed"><tbody><tr><td><strong>Categories:</strong></td><td><?php the_category(' '); ?></td></tr><tr><?php echo get_the_tag_list('<td><strong>Tags:</strong></td><td> ',' ','</td>'); ?></tr><tr><?php the_terms( $post->ID, 'collections', '<td><strong>Collections:</strong></td><td> ', ' ', '</td>' ); ?></tr>


  </tbody></table><p><a href="<?php echo $post->image->getThumbnailHref(array('w=1500','fltr[]=usm|90|0.5|25')) ?>">Download Photo</a></p>

</div><div id="osmmap" class="col-md-6"><h3>Exif-Data</h3>
<table class="table table-condensed"><tbody><tr><td><ul class="nolist"><?php yapb_exif('exif-list', ': ', '<strong>', '</strong>', '<div class="noshow">', '</div>') ?></ul></td><td><ul class="nolist"><?php yapb_exif('exif-list', '', '<div class="noshow">', '</div>', '<i>', '</i>') ?></ul></td></tr></tbody></table>

</div></div>
</div></div>
<div class="prev" style="display:none;"><?php previous_post_link('%link', 'Previous'); ?></div><div class="next" style="display:none;"><?php next_post_link('%link', 'Next'); ?></div>
<footer class="text-center"><div class="footer-below"><div class="container"><div class="row"><div class="col-lg-12">Copyright &copy; Julian Peters <?php echo date("Y"); ?> | Webdesign by Julian Peters | <a href="http://julianpetersphotography.de/contact">Contact</a> | <a href="https://www.facebook.com/julianpetersphotography/" target="_blank">Facebook</a> | <a href="https://500px.com/julianpetersphotography" target="_blank">500px</a> | <a href="http://julianpetersphotography.de/feed/" target="_blank">RSS</a></div></div></div></div></footer><!--- Footer -->
  </div>   </div> <!-- end content --></div><!-- end body container -->
<?php get_footer(); ?>
