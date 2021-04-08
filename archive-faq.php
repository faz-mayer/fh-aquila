<?php
/**
 * Archive faq template
 *
 * @package Aquila
 */

get_header();
?>
<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
   <div class="post-container">

    <!-- Post Area -->
    <section class="questions wrapper">
      
      <header class="text-center">
        <h1><?php post_type_archive_title(); ?></h1>  
      </header>
      
      <div class="section-center">        
         
         <?php
          while(have_posts()) {
           the_post(); 
            ?>

             <article class="question">
              <div class="question-title">
                <h3><?php the_title(); ?></h3>
                <button type="button" class="question-btn">
                    <span class="plus-icon">
                    <i class="plus"></i>
                    </span>
                    <span class="minus-icon">
                    <i class="minus"></i>
                    </span>
                </button>
                
              </div><!-- question-title -->
              <div class="question-text">
              <?php the_content(); ?>           
             </div>
             </article>
             
           <?php
          }
  
         echo paginate_links();
        ?>
       
      </div><!-- section-center -->
    </section>
    <!-- End Post Area -->
   </div>
    
  </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>

