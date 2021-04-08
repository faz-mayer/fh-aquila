<?php
/**
 * Content Page template
 *
 * @package aquila
 */

?>
	
<card-container class="blog-post">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php
		if ( ! is_home() ) {
					?>
			<div class="post-thumnail">
					<?php
					the_post_custom_thumbnail(
						$the_post_id,
						'featured-thumbnail',
						[
							'sizes' => '(max-width: 480px) 480px, 315px',
							'class' => 'attachment-featured-large size-featured-image'
						]
					)
					?>
			</div><!-- post-thumbnail -->
			<div class="post-info">
				<div class="post-author">
				</div>
			
				<div class="post-title">
						<header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header>
				</div><!-- post-title -->
					<?php
		}
		?>

		<div class="post-content">
			<?php
				aquila_the_excerpt( 200 );
			

			?>
		</div><!-- post-content -->

		<footer class="entry-footer">
			<?php edit_post_link( esc_html__( 'Edit', 'aquila' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-footer -->
		</div><!-- post-info -->
	</article><!-- #post-## -->
</card-container>
