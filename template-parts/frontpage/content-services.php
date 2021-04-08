<?php
/**
 * Template for services in front-page.php
 *
 * @package Aquila
 * 
 */

?>

<div class="services-container">
 <div class="service-container item-1 grid-start-card-container-first">
  <card-container class="item-start">
   <div class="post-title">
    <a href="<?php the_field('cta_1_link'); ?>"><?php the_field('cta_1_title'); ?>
     <br><span class="fa fa-phone"> </span> <?php the_field('cta_1_telefon'); ?></a>
   </div>
   <div class="post-content">
    <p class="para"><?php the_field('cta_1_text'); ?></p>
   </div>
  </card-container>
 </div>
 <div class="service-container item-2 grid-start-card-container-sec">
  <card-container class="item-start">
   <div class="post-title">
    <a href="<?php the_field('cta_2_link'); ?>"><?php the_field('cta_2_text'); ?></a>
   </div>

  </card-container>
 </div>
 <div class="service-container item-3 grid-start-card-container-third">
  <card-container class="item-start">
   <div class="post-title">
    <a href="<?php echo esc_url( the_field('cta_3_link') ); ?>"><?php the_field('cta_3_title'); ?>
    </a>
   </div>
  </card-container>

 </div>
 <div class="service-container item-4 grid-start-card-container-last">
  <card-container class="item-start">
   <button class="onlineberatung-pseudo-toggle">
     <a href="<?php the_field('cta_4_link'); ?>"><?php the_field('cta_4_title'); ?></a>
   </button>
   <div class="post-thumnail">
    <a href="<?php the_field('cta_4_link'); ?>">
     <img src="<?php $onlineBeratungImage = get_field(  'cta_4_image' ); echo  $onlineBeratungImage ?>">
    </a>
   </div>
  </card-container>
  <!-- End 4.card-container -->
 </div>
</div>