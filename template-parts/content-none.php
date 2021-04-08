<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * @package aquila
 */

?>

<section class="no-result not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Leider nichts gefunden', 'aquila' ); ?></h1>
	</header>

	<div class="page-content">
		<?php
			if ( is_home() && current_user_can( 'publish_posts' ) ) {
			?>
				<p>
					<?php
						printf(
								wp_kses(
										__( 'Möchtest du deinen ersten Post schreiben? <a href="%s">Get started here</a>', 'aquila' ),
									[
											'a' => [
													'href' => []
											]
									]
								),
								esc_url( admin_url( 'post-new.php' ) )
						)
					?>
				</p>
			<?php
			} elseif ( is_search() ) {
				?>
				<p><?php esc_html_e( 'Sorry but nothing matched your search item. Please try again with some different keywords', 'aquila'  ); ?></p>
				<?php
				get_search_form();
			} else {
				?>
				<p><?php esc_html_e( 'It seems that we cannot find what you are looking for . Perhaps search can help', 'aquila'  ); ?></p>
				<?php
				get_search_form();
			}
		?>
	</div>
</section>
