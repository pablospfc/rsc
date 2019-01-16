<?php
/**
 * @package Initio
 */
$initio_theme_options = initio_get_options( 'initio_theme_options' );
$blog_bg_image = $initio_theme_options['blog_bg_image'];
$blog_cat = $initio_theme_options['blog_cat'];
$num_posts = $initio_theme_options['num_posts'];

wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/js/owl.carousel.js', array( 'jquery' ),'', false);
$initio_fromblog_query = new WP_Query(
	array(
		'posts_per_page' => $num_posts,
		'cat' 	=> $blog_cat
	)
);

if ($blog_bg_image != '') { ?>
	<div class="from-blog" style="background: url(<?php echo esc_url($blog_bg_image); ?>) 50% 0 no-repeat fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;"> 
<?php } else { ?>
	<div class="from-blog">
<?php } ?>
	<div id="from-blog-wrap">
		<div>
		<h2 class="boxtitle wow bounceInLeft" data-wow-delay="0.1s"><?php echo esc_html($initio_theme_options['blog_section_title']); ?></h2>
			<div id="owl-wrap" class="owl-carousel">
			<?php while ( $initio_fromblog_query->have_posts() ): $initio_fromblog_query->the_post(); ?>
				<div <?php post_class('item'); ?>>
					<div class="owl-image imgLiquidFill imgLiquid">
						<?php if ( has_post_thumbnail() ) { ?>
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
						<?php } else { ?>
							<img class="attachment-full wp-post-image rs-slide-image" width="1024" height="500" alt="<?php esc_attr('Slide', 'initio'); ?>" src="<?php echo esc_url(get_template_directory_uri().'/images/assets/slide.jpg'); ?>">
						<?php } ?>
					</div>
					<div class="text-holder">
						<a class="post-title" href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
						<?php get_template_part('owlpost','info'); ?>
						<?php the_excerpt(); ?>
						<a class="blog-read-more" href="<?php the_permalink(); ?>"><?php esc_html_e('Read More', 'initio'); ?></a>
					</div>
				</div>
			<?php endwhile; wp_reset_postdata(); ?>
			</div>
		</div>
	</div>
</div>
<?php wp_enqueue_script( 'initio-fromblog', get_template_directory_uri() .'/js/fromblog.js' , array( 'jquery' ), '', true ); ?>
