<?php 
/**
 * @package Initio
 */
?>
<div class="content-posts-wrap">
	<div id="content-box">
		<div id="post-body">
			<div <?php post_class('post-single'); ?>>
				<h1 id="post-title" <?php post_class('entry-title'); ?>><?php the_title(); ?></h1>
			<?php 
			$initio_theme_options = initio_get_options( 'initio_theme_options' );
			if ($initio_theme_options['breadcrumbs'] == '1') { ?>
				<div class="breadcrumbs">
					<div class="breadcrumbs-wrap"> 
						<?php get_template_part( 'breadcrumbs'); ?>
					</div><!--breadcrumbs-wrap-->
				</div><!--breadcrumbs-->
			<?php } ?>
				<?php if ($initio_theme_options['post_info'] == 'above') { get_template_part('post','info');}

					if ( has_post_thumbnail() ) { 
 
						if ($initio_theme_options['featured_img_post'] == '1') {?>
							<div class="thumb-wrapper">
								<?php the_post_thumbnail('full'); ?>
							</div><!--thumb-wrapper-->
							<?php
						} 
					} 			
				?>
				<div id="article">
					<?php the_content(); 
					the_tags('<p class="post-tags"><span>'.esc_html__('Tags:','initio').'</span> ','','</p>');
					wp_link_pages( array(
						'before'      => '<div class="page-links"><span class="page-links-title">'.esc_html__('Pages:', 'initio') . '</span>',
						'after'       => '</div>',
						'link_before' => '<span>',
						'link_after'  => '</span>',
					) );
					
					//Displays navigation to next/previous post.
					if ( $initio_theme_options['post_navigation'] == 'below') { get_template_part('post','nav'); }
				
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template( '', true );
					} ?>
			
				</div><!--article-->
			</div><!--post-single-->
				<?php get_template_part('post','sidebar'); ?>
		</div><!--post-body-->
	</div><!--content-box-->
	<div class="sidebar-frame">
		<div class="sidebar">
			<?php get_sidebar(); ?>
		</div><!--sidebar-->
	</div><!--sidebar-frame-->
</div><!--content-posts-wrap-->