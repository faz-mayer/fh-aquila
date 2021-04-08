 <?php
/**
 * Template for decent archive content 
 *
 * @package Aquila
 */
 
$the_post_id   = get_the_ID();
$hide_title    = get_post_meta( $the_post_id, '_hide_page_title', true );
$heading_class = ( ! empty( $hide_title ) && 'yes' === $hide_title ) ? 'hide d-none' : '';

$has_post_thumbnail = get_the_post_thumbnail( $the_post_id );

?>
 
 
 <a href="<?php echo esc_url( get_the_permalink() ); ?>" class="btn btn-primary">
  <div class="post-thumnail">
    <?php
      if ( $has_post_thumbnail ) {
        the_post_custom_thumbnail(
          $the_post_id,
          'featured-thumbnail',
          [
            'sizes' => '(max-width: 480px) 480px, 315px',
            'class' => 'w-100faz',
          ]
        );
      } else {
      ?>
      <img src="<?php echo esc_url('/wp-content/uploads/2021/03/frauenhorizonte_fr.jpg'); ?>" class="w-100faz" alt="Frauenhorizonte Freiburg">
   
      <?php
      }
    ?>
  </div><!-- post-thumbnail -->
  <div class="post-info">
      
      <div class="post-title">
       <?php the_title( ); ?>
      </div>
      
      <div class="post-content">
       <?php 
        if (has_excerpt()) {
          aquila_the_excerpt( );
         } else {
          echo wp_trim_words(get_the_content(), 45, '...');
         }
       ?> 
      </div>
  </div><!-- post-info -->
</a>