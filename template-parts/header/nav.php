<?php
/**
 * Header Navigation template.
 *
 * @package Aquila
 */

$menu_class = \Aquila_Theme\Inc\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id( 'aquila-header-menu' );
$header_menus = wp_get_nav_menu_items( $header_menu_id );


?> 

<div class="site-branding">
	<?php
		if ( function_exists( 'the_custom_logo' ) ) {
			the_custom_logo();
		}
	?>
</div><!-- .site-branding -->
<?php
$flyImageGb = '/wp-content/themes/fh-aquila/assets/build/src/img/gb.png';
$flyImageEs = '/wp-content/themes/fh-aquila/assets/build/src/img/es.png';
$flyImageFr = '/wp-content/themes/fh-aquila/assets/build/src/img/fr.png';
$flyImageRu = '/wp-content/themes/fh-aquila/assets/build/src/img/ru.png';
$pdf = get_field('pdf-sprachen');
$socialsInsta = '/wp-content/themes/fh-aquila/assets/build/src/img/instagram.png';
$socialsFaceb = '/wp-content/themes/fh-aquila/assets/build/src/img/facebook.png';
$socialsYoutube = '/wp-content/themes/fh-aquila/assets/build/src/img/youtube.png';

?>
<div class="top">  
	<div class="top-nav">
	 <div class="contact-top">
			<a href="<?php echo esc_url( home_url( '/kontakt' ) ) ?>"  title="Kontakt Frauenhorizonte gegen sexuelle Gewalt e. V. Freiburg">  
					<?php printf(  __( 'Kontakt' ) ); ?> 
			</a>            
	 </div>
		<div class="selfielddropdown">
		<button data-toggle="selfielddropdown" class="button selfielddropdown-toggle" aria-haspopup="true"
				aria-expanded="false">
				<img src="<?php echo esc_url( $flyImageGb ); ?>"/>
				<img src="<?php echo esc_url( $flyImageEs ); ?>"/>
				<img src="<?php echo esc_url( $flyImageFr ); ?>"/>
				<img src="<?php echo esc_url( $flyImageRu ); ?>"/>
		</button>
		<div class="selfielddropdown-menu">				
			<a href="<?php echo esc_url($pdf); ?>" target="_blank"><img src="<?php echo esc_url( $flyImageGb ); ?>"/><?php esc_html_e( 'Welcome', 'aquila' ); ?></a>
			<a href="<?php echo esc_url($pdf); ?>" target="_blank"><img src="<?php echo esc_url( $flyImageEs ); ?>"/><?php esc_html_e( 'Bienvenido', 'aquila' ); ?></a>
			<a href="<?php echo esc_url($pdf); ?>" target="_blank"><img src="<?php echo esc_url( $flyImageFr ); ?>"/><?php esc_html_e( 'Bienvenue', 'aquila' ); ?></a>
			<a href="<?php echo esc_url($pdf); ?>" target="_blank"><img src="<?php echo esc_url( $flyImageRu ); ?>"/><?php esc_html_e( 'Добро пожаловат', 'aquila' ); ?></a>
		</div>
	</div>
	</div>
</div><!-- top -->

<div class="header-button-panel" id="header-button-panel">
  <!-- <?php // get_template_part( 'template-parts/header/menu', 'social' ); ?> -->
  <?php
    // $sidebar_layout = get_theme_mod( 'the_mx_sidebar_layout', 'overlay' );
    if( is_front_page() && is_active_sidebar( 'sidebar-1' ) /* && $sidebar_layout == 'overlay' */ ) { 
					?>
					
					<button class="sidebar-toggle" id="sidebar-button">
						<div class="social-media">
							<img src="<?php echo esc_url( $socialsInsta ); ?>"/>
							<img src="<?php echo esc_url( $socialsFaceb ); ?>"/>
							<img src="<?php echo esc_url( $socialsYoutube ); ?>"/>
							
						</div> 
					</button>
					<?php get_search_form(); ?>
					<button class="search-toggle">
						<span class="search"></span>
				</button>
				 <?php } ?> 
					
</div>

<nav id="site-navigation" class="main-navigation" role="navigation">
 <button class="main-navigation-nav-toggle" title="Toggle the navigation menu">
   <span></span>
 </button>
 <div class="menu-primary-menu-container">

  <?php
			if ( ! empty( $header_menus ) && is_array( $header_menus ) ) {
				?>
				<ul class="navbar-nav mr-auto">
					<?php
					foreach ( $header_menus as $menu_item ) {
						if ( ! $menu_item->menu_item_parent ) {

							$child_menu_items = $menu_class->get_child_menu_items( $header_menus, $menu_item->ID );
							$has_children = ! empty( $child_menu_items ) && is_array( $child_menu_items );
							$has_sub_menu_class = ! empty( $has_children ) ? 'has-submenu' : '';

							if ( ! $has_children ) {
								?>
								<li class="nav-item">
									<a class="nav-link" href="<?php echo esc_url( $menu_item->url ); ?>">
										<?php echo esc_html( $menu_item->title ); ?>
									</a>
								</li>
								<?php
							} else {
								?>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="<?php echo esc_url( $menu_item->url ); ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<?php echo esc_html( $menu_item->title ); ?>
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<?php
										foreach ( $child_menu_items as $child_menu_item ) {
											?>
											<a class="dropdown-item" href="<?php echo esc_url( $child_menu_item->url ); ?>">
												<?php echo esc_html( $child_menu_item->title ); ?>
											</a>
											<?php
										}
										?>
									</div>
								</li>
								<?php
							}
							?>
							<?php
						}
					}
					?>
				</ul>
				<?php
			}
			?>
			
  </div>
</nav><!-- #site-navigation -->
