<?php
/**
 * Template for banner in front-page.php
 *
 * @package Aquila
 * 
 */

?>

<div class="slider page-banner">
 <div class="page-banner__bg-image" style="background-image: url(<?php $pageBannerImage = get_field('page_banner_background_image'); echo  $pageBannerImage['url'] ?>);">
 </div>
 <div class="page-banner__content page-banner__content">
  <p class="para-carousel"><?php the_field('page_banner_title'); ?>
  </p>
 </div>   
 <div class="scrim">
 </div>
</div>
</div>