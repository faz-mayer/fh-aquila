<?php
/**
 * The template for displaying search results pages.
 *
 * @package Aquila
 *
 * 
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="page-container">
				<div class="page-post-wrap">
					<?php
						if ( have_posts() ) : ?>

							<header class="entry-header text-center">
								<h1 class="page-title">
										<?php printf(
										/* translators: %s: Search query results */
										esc_html__( 'Suchergebnisse für: ', 'aquila' ) . '%s', '<span>' . esc_html( get_search_query() ) . '</span>' ); ?>
								</h1>
							</header><!-- .page-header -->
							<div class="entry">
								<div class="entry-content">
									<?php
									/* Start the Loop */
									while ( have_posts() ) : the_post();

										/**
											* Run the loop for the search to output the results.
											*/
										get_template_part( 'template-parts/content', 'search' );

									endwhile;

									the_posts_navigation();

									else :

									get_template_part( 'template-parts/content', 'none' );
								?>

								</div>
								
							</div>
							<?php
						endif; ?>

					
							

				</div><!-- page-post-wrap -->				
			</div><!-- page-container -->		
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
// get_sidebar();
get_footer();
