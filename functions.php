<?php
add_image_size('my_cat_thumb',600,400);
function my_get_taxonomy_image_url($catID, $size=false){
    global $_wp_additional_image_sizes;

    if (function_exists('z_taxonomy_image_url') && z_taxonomy_image_url($catID) !== false) {
        $img_url = z_taxonomy_image_url($catID);
        if(empty($img_url)) return false;

        $name = substr( $img_url, 0, strrpos( $img_url, '.' ) );
        $ext = substr ($img_url, strrpos( $img_url, '.' ) + 1 );

        if(is_array($size)){
            //$size is array of width and height of a predefined image size
            $name .= '-' . $size[0] . 'x' . $size[1];
        }
        elseif($_wp_additional_image_sizes[$size]){
            //$size is a string of the id of a predefined image size
            $name .= '-' . $_wp_additional_image_sizes[$size]['width'] . 'x' . $_wp_additional_image_sizes[$size]['height'];
        }

        //returns new image url
        return $name . '.' . $ext;
    }
}

function is_category_level($depth){
$current_category = get_query_var('cat');
$my_category  = get_categories('include='.$current_category);
$cat_depth=0;

 if ($my_category[0]->category_parent == 0){
 	$cat_depth = 0;
 	} else {

 while( $my_category[0]->category_parent != 0 ) {
  $my_category = get_categories('include='.$my_category[0]->category_parent);
  $cat_depth++;
  }
  }
  if ($cat_depth == intval($depth)) { return true; }
  return null;
}








add_theme_support('post-thumbnails');add_theme_support( 'custom-header' );
define('DB_CHARSET', 'utf8');
function add_image_responsive_class($content) {
   global $post;
   $pattern ="/<img(.*?)class=\"(.*?)\"(.*?)>/i";
   $replacement = '<img$1class="$2 img-responsive"$3>';
   $content = preg_replace($pattern, $replacement, $content);
   return $content;
}
add_filter('the_content', 'add_image_responsive_class');
remove_filter('term_description','wpautop');

// Bootstrap pagination function

function wp_bs_pagination($pages = '', $range = 4)

{

     $showitems = ($range * 2) + 1;



     global $paged;

     if(empty($paged)) $paged = 1;



     if($pages == '')

     {

         global $wp_query;

		 $pages = $wp_query->max_num_pages;

         if(!$pages)

         {

             $pages = 1;

         }

     }



     if(1 != $pages)

     {

        echo '<div class="text-center">';
        echo '<nav><ul class="pagination"><li class="disabled hidden-xs"><span><span aria-hidden="true">Page '.$paged.' of '.$pages.'</span></span></li>';

         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link(1)."' aria-label='First'>&laquo;<span class='hidden-xs'> First</span></a></li>";

         if($paged > 1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged - 1)."' aria-label='Previous'>&lsaquo;<span class='hidden-xs'> Previous</span></a></li>";



         for ($i=1; $i <= $pages; $i++)

         {

             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))

             {

                 echo ($paged == $i)? "<li class=\"active\"><span>".$i." <span class=\"sr-only\">(current)</span></span>

    </li>":"<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>";

             }

         }



         if ($paged < $pages && $showitems < $pages) echo "<li><a href=\"".get_pagenum_link($paged + 1)."\"  aria-label='Next'><span class='hidden-xs'>Next </span>&rsaquo;</a></li>";

         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($pages)."' aria-label='Last'><span class='hidden-xs'>Last </span>&raquo;</a></li>";

         echo "</ul></nav>";
         echo "</div>";
     }

}
function twelve_posts_on_homepage( $query ) {
    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'posts_per_page', 12 );
    }
}
add_action( 'pre_get_posts', 'twelve_posts_on_homepage' );
?>
