<?php
/**
 * Front page template
 *
 * @package aquila
 */


get_header();

?>
<div id="content" class="site-content">
  <?php
    get_template_part( 'template-parts/frontpage/content-banner' );
  ?>

 <div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
   <div class="frontpage-container">
    <?php
      get_template_part( 'template-parts/frontpage/content-services' );
    ?>

    <div class="aktuelles-container">
      <?php
      get_template_part( 'template-parts/components/posts-carousel' );
      ?>    
    </div><!-- aktuelles-container -->

   </div><!-- row frontpage-container End-->

    <?php
      get_template_part( 'template-parts/frontpage/content-donation' );
      ?>
   
  
    </main><!-- #main -->
 </div><!-- #primary -->
 
</div><!-- #content -->

<?php
get_sidebar();
get_footer();
