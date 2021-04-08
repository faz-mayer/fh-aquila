<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Aquila
 */

get_header(); 
?>

<div id="primary" class="content-area">
 <main id="main" class="site-main" role="main">
  <div class="page-container">
   <div class="page-post-wrap">
     <section class="error-404 not-found">
   <header class="entry-header text-center">
    <h1 class="page-title"><?php esc_html_e( 'Oops! Leider konnte die Seite nicht gefunden werden.', 'fh-under' ); ?></h1>
   </header><!-- .page-header -->

   <div class="page-content">

    <p><?php esc_html_e( 'Scheint so hier gibt es nichts. Vielleicht aber bei den Links oder mit Hilfe von Suche ?', 'fh-under' ); ?></p>
    
    <?php
     get_search_form();

     the_widget( 'WP_Widget_Recent_Posts' );

    ?>

   </div><!-- .page-content -->
  </section><!-- .error-404 -->

   </div><!-- .page-post-wrap -->
  </div><!-- .page-container -->
 

 </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
