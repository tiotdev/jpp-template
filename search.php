<?php get_header(); ?>
<div class="searchform"><h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1><br><br><form class="navbar-form pull-right" action="<?php echo home_url( '/' ); ?>" method="get">
				<label>
					<input type="search"
                placeholder="Search"
                value="" name="s"
                title="Search efter:">
				</label>
				<input type="submit" value="Search">
			</form>   </div>

<div class="container"><div class="row">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="col-lg-4 col-sm-6 col-xs-12 cardwrap"><div class="col-md-12 card eqhdiv">		<div class="card-thumb"><a href="<?php the_permalink(); ?>"><div><img src="<?php echo $post->image->getThumbnailHref(array('w=320', 'h=320', 'zc=1', 'sw=1000', 'sh=1000', 'q=60','fltr[]=usm|60|0.5|25')) ?>" width="800" class="img-responsive" /></div><span class="glyphicon glyphicon-camera"></span></a></div>
		<div class="card-inner"><a href="<?php the_permalink(); ?>"><h3><?php echo $post->post_title ?></a></h3></a>	</div>
			<div class="col-md-12 stickbtn center"><a class="card-more" href="<?php the_permalink(); ?>">View Photo</a></div>
		</div>   </div>

<?php endwhile;	else: ?><h2 class="center">No photos were found for this keyword</h2>	<?php endif; ?></div></div>



<footer class="text-center"><div class="footer-below"><div class="container"><div class="row"><div class="col-lg-12">Copyright &copy; Julian Peters <?php echo date("Y"); ?> | Webdesign by Julian Peters | <a href="https://julianpetersphotography.de/contact" target="_blank">Contact</a> | <a href="https://www.facebook.com/julianpetersphotography/" target="_blank">Facebook</a> | <a href="https://500px.com/julianpetersphotography" target="_blank">500px</a> | <a href="http://julianpetersphotography.de/feed/" target="_blank">RSS</a></div></div></div></div></footer><!--- Footer -->
										   </div>   </div> <!-- end content --></div><!-- end body container -->
<?php get_footer(); ?>
