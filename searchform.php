<?php
/**
 * Search Form
 *
 * @package Aquila
 */
 ?>
<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ) ?>" class="search-form hide">
	<label>
		<span class="screen-reader-text"><?php echo esc_html__( 'Suche nach:', 'fh-under' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'suche...', 'placeholder', 'fh-under' ) ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr__( 'Search for:', 'fh-under' ); ?>" />
	</label>
	<button class="search-icon"><span class="material-icons fa fa-arrow-right"></span></button>
</form>
