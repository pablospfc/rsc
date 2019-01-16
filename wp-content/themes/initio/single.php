<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Initio
 */
$initio_theme_options = initio_get_options( 'initio_theme_options' );
get_header(); ?>
	<div id="main" class="<?php echo esc_attr($initio_theme_options['layout_settings']);?>">
	<?php
		// Start the Loop.
		while ( have_posts() ) : the_post();

			get_template_part( 'content', 'single');
		
		endwhile;
	?>
	</div><!--main-->
<?php if ($initio_theme_options['social_section_on'] == '1') {
	get_template_part( 'social', 'section' );	
}
get_footer(); ?>