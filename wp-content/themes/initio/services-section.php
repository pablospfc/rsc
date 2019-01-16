<?php
/**
 * @package Initio
 */
$initio_theme_options = initio_get_options( 'initio_theme_options' );
$services_bg_image = $initio_theme_options['services_bg_image'];

if ($services_bg_image !='') { ?>
	<div id="services" style="background: url(<?php echo esc_url($services_bg_image); ?>) 50% 0 no-repeat fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
<?php } else { ?>
	<div id="services">
<?php } ?>
	<div id="services-wrap">
			<div class="services-left">
				<h2 class="wow bounceInLeft" data-wow-delay="0.1s"><?php echo esc_attr($initio_theme_options['services_section_title']); ?></h2>
				<div class="row">
					<?php $pages = array();
					for ($count=1; $count <= 6; $count++) { 
						$service_page = $initio_theme_options['service_page_' . $count ];
							if ( 'page-none-selected' != $service_page ) {
								$pages[] = $service_page;
							}
					
					} 
				
					$args = array(
						'posts_per_page' => 6,
						'post_type' => 'page',
						'post__in' => $pages,
						'orderby' => 'post__in'
					);
				
					$initio_services_query = new WP_Query( $args );
				
					if ( $initio_services_query->have_posts() ) :
						$count = 1;
						while ( $initio_services_query->have_posts() ) : $initio_services_query->the_post();
						?>
							<div class="row-item row-item-<?php echo esc_html($count); ?>">
								<div class="service wow bounceIn" data-wow-delay="0.2s">
									<div class="service-head">
										<div class="circle">
											<i class="fa <?php echo esc_html($initio_theme_options['service_icon_' . $count ]); ?>"></i>
										</div>
										<?php the_title( sprintf( '<h3><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
									</div>
									<?php the_excerpt(); ?>
								</div><!--service-->
							</div><!--row-item-->

				<?php	$count++;
						endwhile;
					else : ?>
						<div class="row-item height200 row-item-1">
							<div class="service wow bounceIn" data-wow-delay="0.2s">
								<div class="service-head">
									<div class="circle">
										<i class="fa fa-anchor"></i>
									</div>
									<h3><?php esc_html_e('Easy to Use','initio');?></h3>
								</div>
								<p></p>
							</div>
						</div>
						<div class="row-item height200 row-item-2">
							<div class="service wow bounceIn" data-wow-delay="0.2s">
								<div class="service-head">
									<div class="circle">
										<i class="fa fa-cog"></i>
									</div>
									<h3><?php esc_html_e('Easy Theme Customizer','initio');?></h3>
								</div>
								<p></p>
							</div>
						</div>
						<div class="row-item height200 row-item-3">
							<div class="service wow bounceIn" data-wow-delay="0.2s">
								<div class="service-head">
									<div class="circle">
										<i class="fa fa-tachometer"></i>
									</div>
									<h3><?php esc_html_e('Great Performance','initio');?></h3>
								</div>
								<p></p>
							</div>
						</div>
						<div class="row-item height200 row-item-4">
							<div class="service wow bounceIn" data-wow-delay="0.2s">
								<div class="service-head">
									<div class="circle">
										<i class="fa fa-umbrella"></i>
									</div>
									<h3><?php esc_html_e('Very Well Documented','initio');?></h3>
								</div>
								<p></p>
							</div>
						</div>
						<div class="row-item height200 row-item-5">
							<div class="service wow bounceIn" data-wow-delay="0.2s">
								<div class="service-head">
									<div class="circle">
										<i class="fa fa-html5"></i>
									</div>
									<h3><?php esc_html_e('Clean Code','initio');?></h3>
								</div>
								<p></p>
							</div>
						</div>
						<div class="row-item height200 row-item-6">
							<div class="service wow bounceIn" data-wow-delay="0.2s">
								<div class="service-head">
									<div class="circle">
										<i class="fa fa-paper-plane"></i>
									</div>
									<h3><?php esc_html_e('24/7 Support','initio');?></h3>
								</div>
								<p></p>
							</div>
						</div>
					<?php 	
					endif; wp_reset_postdata(); ?>
				</div><!--row-->
			</div><!--services-left-->
			<div class="services-right">
				<img class="wow bounceIn" data-wow-delay="1.4s" src="<?php echo esc_url($initio_theme_options['services_image']); ?>" alt="<?php esc_attr_e('Services','initio');?>"/>
			</div><!--services-right-->
	</div><!--services-wrap-->
</div><!--services-->