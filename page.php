<?php
/**
 * Page template
 *
 * @package Aquila
 */

get_header();

?>

 <div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
   <div class="page-container">
    <div class="page-post-wrap">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
       
      <header class="entry-header text-center">
         <h1 class="page-title"><?php the_title(); ?></h1>
      </header>       
       <div class="entry">
          <?php the_content(); ?>
       </div>

    <?php endwhile; endif; ?>
   </div>
   </div>  
  </main>             
 </div><!-- primary -->
<!--
 <div id="sidebar">
    <?php //get_sidebar(); ?>
 </div>
--><!-- sidebar -->  
 
<?php get_footer(); ?>