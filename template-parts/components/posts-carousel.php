<?php
/**
 * Posts Carousel
 *
 * @package aquila
 */


$args = [
	'category_name' => 'aktuelles', 
	'posts_per_page'         => 3,
	'post_type'              => 'post',
	'update_post_meta_cache' => false,
	'update_post_term_cache' => false,
	'cat_name'   => 'aktuelles'
];

$post_query = new \WP_Query( $args );

 // Get the ID of a given category
 	$category_id = get_cat_ID( 'aktuelles' );
 // Get the URL of this category
 	$category_link = get_category_link( $category_id );

?>
	<!-- Print a link to this category -->
	<a href="<?php echo esc_url( $category_link ); ?>" title="Category Name"class="btn btn-aktuelles"><?php esc_html_e( 'Aktuelles', 'aquila' ); ?></a>

<div class="posts-carousel">
	<?php									
	if ( $post_query->have_posts() ) :
		while ( $post_query->have_posts() ) :
			$post_query->the_post();
			?>
			<div class="card">
				<?php
				if ( has_post_thumbnail() ) {
					the_post_custom_thumbnail(
						get_the_ID(),
						'featured-thumbnail',
						[
							'sizes' => '(max-width: 287px) 287px, 197px',
							'class' => 'w-100faz',
						]
					);
				} else {
					?>
					<img src="<?php echo esc_url('/wp-content/uploads/2021/03/frauenhorizonte_fr.jpg'); ?>" class="w-100faz" alt="Frauenhorizonte Freiburg"> 		
					<?php
				}
				?>
				<div class="card-body">
					<?php the_title( '<h3 class="card-title">', '</h3>' ); ?>
					<?php aquila_the_excerpt(); ?>
					<div class="btn-carousell">
						<a href="<?php echo esc_url( get_the_permalink() ); ?>" class="btn btn-carousel">
						<?php esc_html_e( 'Weiterlesen..', 'aquila' ); ?>
					</a>
					</div>
					
				</div>
			</div>
		<?php
		endwhile;
	endif;
	wp_reset_postdata();
	?>
</div>

