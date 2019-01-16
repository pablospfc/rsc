<?php 
/**
 * @package Initio
 */
?>
<div class="post-info">
	<span><?php printf(esc_attr( get_the_date())); ?> </span>
	<span class="separator"> - </span>
	<?php $categories = get_the_category();
	$separator = ' , ';
	$output = '';
	if ( ! empty( $categories ) ) {
    	foreach( $categories as $category ) {
        	$output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" title="' . esc_attr( sprintf( __( 'View all posts in %s', 'initio' ), $category->name ) ) . '">' . 	esc_html( $category->name ) . '</a>' . $separator;
    }
    	echo trim( $output, $separator );
	} ?>
	<span class="separator-1"> - </span>
	<span><?php esc_html_e('by ','initio'); printf( the_author_posts_link() ); ?> </span>
	<span class="separator"> - </span>
	<span><a href="<?php comments_link(); ?>"><?php comments_number( __('No Comments','initio'), __('1 Comment','initio'), __('% Comments','initio')); ?></a></span>
</div>