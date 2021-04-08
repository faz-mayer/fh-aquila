<?php
/**
 * Footer template
 *
 * @package Aquila
 */
?>


<footer class="site-footer">
	<?php if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
		<aside class="footer-container">
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
		</aside>
	<?php } 
	?>

	<div class="site-info">
				<?php printf(
				/* translators: %1$s: Impressum %2$s: Datenschutz */
				esc_html__( '%1$s | %2$s', 'aquila' ),'<a href="/impressum-datenschutz">Impressum </a>', '<a href="/impressum-datenschutz/#datenschutz">Datenschutz</a>'); ?>
	</div>

</footer> 
</div>
</div>
<a class="scroll-link top-link" href="#masthead">
      <i class="fas fa-arrow-up"></i>
</a>
<?php wp_footer(); ?>
<!-- </footer> -->
</div><!-- box-shadow -->

</body>
</html>
