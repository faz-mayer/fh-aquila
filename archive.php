<?php
/**
 * Archive template
 *
 * @package Aquila
 */

get_header();
?>
<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <!-- Post Area -->
    <section class="card-area-posts project-container">

      <header class="text-center">
        <h1><?php post_type_archive_title(); ?></h1>  
      </header>
      <div class class="wrapper">
        <div class="cards-container">
         
         <?php
  
          while(have_posts()) {
           the_post(); 
            ?>
             <div class="card-container">
          
               <?php
               get_template_part('template-parts/content-archive_types');               
               ?>
                
             </div><!-- card-container -->
           <?php
          }
  
          echo paginate_links();
        ?>

        </div><!-- cards-container -->
      </div><!-- wrapper -->
    </section>
    <!-- End Post Area -->
  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>

