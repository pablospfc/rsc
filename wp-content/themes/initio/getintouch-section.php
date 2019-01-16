<?php
/**
 * @package Initio
 */
$initio_theme_options = initio_get_options( 'initio_theme_options' );
$getin_bg_image = $initio_theme_options['getin_bg_image'];

if ($getin_bg_image != '') { ?>
	<div class="get-in-touch" style="background: url(<?php echo esc_url($getin_bg_image); ?>) 50% 0 no-repeat fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;"> 
<?php } else { ?>
	<div class="get-in-touch">
<?php } ?>
	<div id="get-in-touch-wrap">
		<div>
			<?php $page = array();
			$git_page = $initio_theme_options['getin_page'];
			if ( 'page-none-selected' != $git_page ) {
				$page[] = $git_page;
			} 
			
			$args = array(
				'posts_per_page' => 1,
				'post_type' => 'page',
				'post__in' => $page,
				'orderby' => 'post__in'
			);
			
			$initio_git_query = new WP_Query( $args );
			
			if ( $initio_git_query->have_posts() ) :
				while ( $initio_git_query->have_posts() ) : $initio_git_query->the_post();
					the_title( sprintf( '<h2 class="boxtitle wow bounceInLeft" data-wow-delay="0.1s"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
					<?php the_excerpt(); ?>
					<a href="<?php echo esc_url(get_permalink()); ?>" class="git-link"><?php echo esc_html($initio_theme_options['getin_button_text']); ?></a>
				<?php 
				endwhile;
			else : ?>
				<h2 class="boxtitle wow bounceInLeft" data-wow-delay="0.1s"><?php esc_html_e('Get In Touch with Us', 'initio'); ?></h2>
				<p class="text wow bounceInRight" data-wow-delay="0.2s"><?php esc_html_e('Get In Touch with Us', 'initio'); ?></p>
				<a href="<?php echo esc_url( home_url( '/' ) ) ?>" class="git-link"><?php echo esc_html($initio_theme_options['getin_button_text']); ?></a>
			<?php
			endif; wp_reset_postdata(); ?>			
			
		</div>
	</div>
</div>