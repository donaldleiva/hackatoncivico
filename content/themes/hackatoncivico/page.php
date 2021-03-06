<?php global $eo_options;
get_header();
$cust_layout = get_post_meta($post->ID,'_eo_cust_post_layout',true);
$customimg = get_post_meta($post->ID,"_eo_cust_post_feat_img",true);
?>

<?php if ( is_home() || is_front_page() ) { ?>
<div id="top" class="main-background">
  <div class="main-logo-container">
	<img class="main-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/rsc/img/logo.png" alt="Hackatón Cívico" />
	<div class="slide-btns subscribe-btn">
		<a class="startnow scroll btn" href="inscripcion">INVOL&Uacute;CRATE</a>
	</div>
  </div>
</div>
<?php } ?>

<div class="container" id="maincnot">
<?php
$mod_idfs = array("high"=>'highlights',"caru"=>'carousel',"feat"=>'featurettes');
foreach ($mod_idfs as $mod_idf=>$fnam ) {
	if( !empty($eo_options[$mod_idf.'_also_disp']) & is_array($eo_options[$mod_idf.'_also_disp']) ) {
		//var_dump($eo_options[$mod_idf.'_also_disp']);
		if(array_key_exists($post->ID,$eo_options[$mod_idf.'_also_disp']) && $eo_options[$mod_idf.'_also_disp'][$post->ID] == "1") {
			eo_get_template_part( 'inc/modules/'.$fnam ); 
			wp_reset_query();
		}
	}
}
?>

	<div id="content" class="clearfix">
		<?php if($cust_layout && $cust_layout == "left-sidebar"  || !$cust_layout && $eo_options["main_layout"] == "left-sidebar" || $cust_layout == "default"  && $eo_options["main_layout"] == "left-sidebar" )	get_sidebar(); // sidebar main	?>
        <?php ($cust_layout && $cust_layout == "full" || !$cust_layout && $eo_options["main_layout"]=="full") ? $main_cols = 'col-sm-12' : $main_cols = eo_get_cols('main','',false) ?>
		<div id="main" class="<?php echo $main_cols ?>" role="main">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
					  <?php get_template_part( 'content-single', get_post_format() ); ?>		
					<?php comments_template('',true); ?>
					<?php endwhile; ?>			
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "bonestheme"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
				</div> <!-- end #main -->
			<?php if($cust_layout && $cust_layout == "right-sidebar"  || !$cust_layout  && $eo_options["main_layout"] == "right-sidebar" || $cust_layout == "default"  && $eo_options["main_layout"] == "right-sidebar" )	get_sidebar(); // sidebar main	?>
        </div> <!-- end #content -->
	</div><!-- maincnot -->
<?php get_footer(); ?>