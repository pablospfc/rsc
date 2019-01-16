<?php 
/**
 * @package Initio
 *
 *
 * Check for featured images 
 */ 
$initio_theme_options = initio_get_options( 'initio_theme_options' ); 

if ( $initio_theme_options['blog_content'] == 'excerpt') {
	if (has_post_format( 'gallery' )) {
	
		initio_gallery_post();
	
	} else {
		if ( has_post_thumbnail() ) { ?>
			<div class="image-holder">
				<div class="thumb-wrapper imgLiquidFill imgLiquid">
					<?php the_post_thumbnail('full'); ?>
				</div>
			</div>
		<?php 
		}

	} 
}

if ( $initio_theme_options['blog_content'] == 'excerpt') { ?>
	<div class = "text-holder">
		<a class="post-title" href="<?php esc_url(the_permalink()); ?>"><h2 <?php post_class('entry-title'); ?>><?php the_title(); ?></h2></a>
		<?php if ($initio_theme_options['post_info'] == 'above') { get_template_part('post','info');}	 
			the_excerpt(); 
			the_tags('<p class="post-tags"><span>'.esc_html__('Tagged:','initio').'</span> ','','</p>'); ?>
			<a class="post-button" href="<?php esc_url(the_permalink()); ?>"><?php esc_html_e('Read More','initio'); ?></a> 
	</div>
<?php } else { ?>
	<div class = "text-holder-full">
		<?php 			
			if (has_post_format( 'gallery' )) {
				initio_gallery_post();
			} else { 
				if (has_post_format( 'video' )) {
				} else {
					if ( has_post_thumbnail() ) { ?>
						<div class="thumb-wrapper">
							<?php the_post_thumbnail('full'); ?>
						</div><!--thumb-wrapper-->
					<?php 
					} 		
				}	
			}
			
			the_content( esc_html__( 'Continue Reading...', 'initio' ) ); ?> 
			<?php the_tags('<p class="post-tags"><span>'.esc_html__('Tagged:','initio').'</span> ','','</p>'); ?>
			<a class="post-button" href="<?php esc_url(the_permalink()); ?>"><?php esc_html_e('Read More','initio'); ?></a>
	</div>	
<?php } ?>
