<?php
/**
 * 
 * Single projekt-kampagne post template file.
 * 
 * Template Name: Featured Article
 * Template Post Type: post, page, projekt-kampagne
 * 
 * @package Aquila
 */


get_header();

?>

	<div id="primary">
		<main id="main" class="site-main" role="main">
			<div class="post-container">

				
    
    <?php
						if ( have_posts() ) :
							?>
							
							<?php

							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/content-ausgehtools' );

							endwhile;
							?>

						<?php

						else :

							get_template_part( 'template-parts/content-none' );

							?>

							
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
						<a href="<?php echo esc_url( get_post_type_archive_link( 'projekt-kampagne' ) ); ?>">
							<i class="fa fa-home" aria-hidden="true"></i>
							<?php esc_html_e( 'Projekte & Kampagnen', 'aquila' ); ?>
						</a>       
     </button>
				
			</div><!-- container -->
		</main>
	</div>

<?php
get_footer();

