<?php
/**
 * 
 * Single infothek post template file.
 * 
 * Template Name: Featured Article
 * Template Post Type: post, page, infothek
 * 
 * @package Aquila
 */


get_header();

?>

	<div id="primary">
		<main id="main" class="site-main mt-5" role="main">
			<div class="post-container">

					<?php
						if ( have_posts() ) :
							?>
							<div class="post-wrap">
							<?php
							if ( is_home() && ! is_front_page() ) {
								?>
								<header class="mb-5">
									<h1 class="page-title screen-reader-text">
										<?php single_post_title(); ?>
									</h1>
								</header>
								<?php
							}

							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/content-adresse' );

							endwhile;
							?>

						<?php

						else :

							get_template_part( 'template-parts/content-none' );

							?>

							</div>
						<?php
						endif;

						?>
					<?php
					
					?>
					<div>
							<div class="prev-link inline-block "><p><?php previous_post_link(); ?></p></div>	
							<div class="next-link inline-block"><p><?php next_post_link(); ?></p></div>				
						</div>

					</button>
						
     <button class="btn-dark" >          
						<a href="<?php echo esc_url( get_post_type_archive_link( 'infothek' ) ); ?>">
							<i class="fa fa-home" aria-hidden="true"></i>
						<?php esc_html_e( 'Infothek', 'aquila' ); ?>
						</a>       
     </button>
				
			</div><!-- container -->
		</main>
	</div>

<?php
get_footer();

