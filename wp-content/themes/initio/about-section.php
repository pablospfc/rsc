<?php
/**
 * @package Initio
 */
$initio_theme_options = initio_get_options( 'initio_theme_options' );
$about_bg_image = $initio_theme_options['about_bg_image'];

if ($about_bg_image != '') { ?>
	<div class="about" style="background: url(<?php echo esc_url($about_bg_image); ?>) 50% 0 no-repeat fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;"> 
<?php } else { ?>
	<div class="about">
<?php } ?>
	<div id="about-wrap">
		<div>
			<?php $page = array();
			$about_page = $initio_theme_options['about_page'];
			if ( 'page-none-selected' != $about_page ) {
				$page[] = $about_page;
			} 
			
			$args = array(
				'posts_per_page' => 1,
				'post_type' => 'page',
				'post__in' => $page,
				'orderby' => 'post__in'
			);
			
			$initio_about_query = new WP_Query( $args );
			
			if ( $initio_about_query->have_posts() ) :
				while ( $initio_about_query->have_posts() ) : $initio_about_query->the_post();
					the_title( sprintf( '<h2 class="boxtitle wow bounceInLeft" data-wow-delay="0.1s"><a href="%s" rel="bookmark">', esc_url( get_permalink()) ), '</a></h2>' ); ?>
					<p class="text wow bounceInRight" data-wow-delay="0.2s"><?php the_excerpt(); ?></p>
				<?php 
				endwhile;
			else : ?>
					<h2 class="boxtitle wow bounceInLeft" data-wow-delay="0.1s"><?php bloginfo('name'); ?></h2>
				<?php
			endif; wp_reset_postdata(); ?>	
		</div>
	</div>
</div>