<?php
/**
 * Initio functions and definitions
 *
 * @package Initio
 */

function initio_ideal_slider() {
	global $post;
	$initio_theme_options = initio_get_options( 'initio_theme_options' );
	$slider_cat = $initio_theme_options['image_slider_cat'];
	$num_of_slides = $initio_theme_options['slider_num'];
	
	$initio_slider_query = new WP_Query(
		array(
			'posts_per_page' => $num_of_slides,
			'cat' 	=> $slider_cat
		)
	);?>
	<div class="clear"></div>
	<div id="slider">
		<?php while ( $initio_slider_query->have_posts() ): $initio_slider_query->the_post(); ?>
			<?php if ($slider_cat !='') { ?>
					<?php if ( has_post_thumbnail() ) { ?>
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
						<img src="<?php echo esc_url($image[0]); ?>" title="<?php the_title(); ?>" alt="<?php esc_html(the_excerpt()); ?>" link="<?php the_permalink(); ?>"/>
					<?php } ?>
			<?php } else { ?>
				<?php if ( has_post_thumbnail() ) { ?>
					
					<?php the_post_thumbnail('full'); ?>
				
				<?php } ?>
			<?php } ?>
		<?php endwhile; wp_reset_postdata(); ?>
	</div>
<?php }

function initio_unslider_slider() {
	global $post;
	$initio_theme_options = initio_get_options( 'initio_theme_options' );
	$slider_cat = $initio_theme_options['image_slider_cat'];
	$num_of_slides = $initio_theme_options['slider_num'];
	$button_text = $initio_theme_options['caption_button_text'];

	$initio_slider_query = new WP_Query(
		array(
			'posts_per_page' => $num_of_slides,
			'cat' 	=> $slider_cat
		)
	);?>
	<div class="clear"></div>
	<div class="banner">
		<ul>
		<?php while ( $initio_slider_query->have_posts() ): $initio_slider_query->the_post(); ?>
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
			<li style="background: url(<?php echo esc_url($image[0]); ?>) 50% 0 no-repeat;">
			<?php if ($initio_theme_options['captions_on'] == '1') { ?>	
				<div class="inner">
					<a class="post-title" href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
					<?php the_excerpt(); ?>
				</div>
				<?php if ($initio_theme_options['captions_button'] == '1') { ?>
					<a href="<?php the_permalink(); ?>" class="btn"><?php echo esc_html($button_text); ?></a>
				<?php }; ?>
			<?php }; ?>			
			</li>
		<?php endwhile; wp_reset_postdata(); ?>
		</ul>
	</div>
	<div class="clear"></div>

<?php 
}

function initio_localize_scripts_ideal(){
	$initio_theme_options = initio_get_options( 'initio_theme_options' );
	$animation_speed = $initio_theme_options['animation_speed'];
	$slideshow_speed = $initio_theme_options['slideshow_speed'];
	$slider_height = $initio_theme_options['slider_height'];
	$slider_effect = $initio_theme_options['image_slider_effect'];
		$datatoBePassed = array(
        	'slideshowSpeed' => $slideshow_speed,
        	'animationSpeed' => $animation_speed,
			'sliderHeight' => $slider_height,
			'sliderEffect' => $slider_effect,
    	);
	if ($initio_theme_options['captions_on'] == '1') {
		if (is_home() && ! is_paged()) {
			wp_enqueue_script( 'initio-slides-captions', get_template_directory_uri() .'/js/slides-captions.js' , array( 'jquery' ), '', true );
			wp_localize_script( 'initio-slides-captions', 'php_vars', $datatoBePassed );
		}
	}else{
		wp_enqueue_script( 'initio-ideal-slides', get_template_directory_uri() .'/js/ideal-slides.js' , array( 'jquery' ), '', true );
		wp_localize_script( 'initio-ideal-slides', 'php_vars', $datatoBePassed );
	}

	
}

function initio_localize_scripts_unslider(){
	wp_enqueue_script( 'initio-slides', get_template_directory_uri() .'/js/slides.js' , array( 'jquery' ), '', true );
	$initio_theme_options = initio_get_options( 'initio_theme_options' );
	$animation_speed = $initio_theme_options['animation_speed'];
	$slideshow_speed = $initio_theme_options['slideshow_speed'];
		$datatoBePassed = array(
        	'slideshowSpeed' => $slideshow_speed,
        	'animationSpeed' => $animation_speed,
    	);
	wp_localize_script( 'initio-slides', 'php_vars', $datatoBePassed );
}

add_action( 'wp_enqueue_scripts', 'initio_localize_scripts_unslider' );
add_action( 'wp_enqueue_scripts', 'initio_localize_scripts_ideal' );