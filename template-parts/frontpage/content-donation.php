<?php
/**
 * Template for donation call in front-page.php
 *
 * @package Aquila
 * 
 */

?>

<div class="spenden-container">
 <div class="spenden-content">
   <div class="spende-quote">
     <h4><?php the_field('spende-text'); ?></h4>
     
   </div>
 </div>
 <div class="spenden-button">
   <div class="spende-button">
     <button class="onlineberatung-pseudo-toggle btn-spende">         
        <a href="<?php echo esc_url( the_field('spendenbutton-link') ); ?>"><?php the_field('spendenbutton-text'); ?></a>
     </button>
   </div>
   
 </div>
</div>