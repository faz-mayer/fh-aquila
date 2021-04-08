<?php
/**
 * Template for displaying Adress in single-infothek_adres.php.
 *
 * @package Aquila
 * 
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 <div class="entry-content">
  <?php // the_content();?>
           
  <section class="card-adresses-container">
      <!-- questions -->
      <div>
        <h3 class="adress-chapter"><?php the_field('rubrik-hilfetelefon'); ?></h3>
      </div>
      <div class="section-adress-duo">              
          <!-- single item -->
          <article class="adress-item">
            <?php 
              $link = get_field('hilfetelefon-link-1');
              $link_target ='_blank';
            ?>
            <a href="<?php echo esc_url( $link ); ?>" target="<?php echo esc_attr( $link_target ); ?>">         
              <div class="blog-adress">
                  <div class="post-thumnail">
                    <?php 
                      $image = get_field('hilfetelefon-image-1');
                      if( !empty( $image ) ): ?>
                          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                  </div>
                  <div class="adress-info">
                          <div class="post-title">
                              <h4><?php the_field('hilfetelefon-orga-1'); ?></h4>
                          </div>
                          <div class="post-content">
                              <p class="adress-para"><?php the_field('hilfetelefon-infotext-1'); ?></p>
                          </div>                             
                  </div>
              </div>
            </a>
          </article>
          <!-- end of single item -->
          <!-- single item -->
          <article class="adress-item">
            <?php 
              $link = get_field('hilfetelefon-link-2');
              $link_target ='_blank';
            ?>
             <a href="<?php echo esc_url( $link ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
              <div class="blog-adress">
                  <div class="post-thumnail">
                    <?php 
                      $image = get_field('hilfetelefon-image-2');
                      if( !empty( $image ) ): ?>
                          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                      <?php endif; ?>
                  </div>
                  <div class="adress-info">
                          <div class="post-title">
                              <h4><?php the_field('hilfetelefon-orga-2'); ?></h4>
                          </div>
                          <div class="post-content">
                              <p class="adress-para"><?php the_field('hilfetelefon-infotext-2'); ?></p>
                          </div>                             
                  </div>
              </div>
            </a>
          </article>
          <!-- end of single item -->
        
      </div> 

      <div>
        <h3 class="adress-chapter"><?php the_field('rubrik-gewalt'); ?></h3>
      </div>
      <div class="section-adress-duo">           
          <article class="adress-item">
            <?php 
              $link = get_field('gewalt-link');
              $link_target ='_blank';
            ?>
            <a href="<?php echo esc_url( $link ); ?>" target="<?php echo esc_attr( $link_target ); ?>">         
              <div class="blog-adress">
                  <div class="post-thumnail">
                    <?php 
                      $image = get_field('gewalt-image');
                      if( !empty( $image ) ): ?>
                          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                  </div>
                  <div class="adress-info">
                          <div class="post-title">
                              <h4><?php the_field('gewalt-orga'); ?></h4>
                          </div>
                          <div class="post-content">
                              <p class="adress-para"><?php the_field('gewalt-infotext'); ?></p>
                          </div>                             
                  </div>
              </div>
            </a>
          </article>
         
      </div>

      <div>
        <h3 class="adress-chapter"><?php the_field('rubrik-belaest-arbeitsplatz'); ?></h3>
      </div>
      <div class="section-adress-duo">           
          <article class="adress-item">
            <?php 
              $link = get_field('belaest-arbeitsplatz-link');
              $link_target ='_blank';
            ?>
            <a href="<?php echo esc_url( $link ); ?>" target="<?php echo esc_attr( $link_target ); ?>">         
              <div class="blog-adress">
                  <div class="post-thumnail">
                    <?php 
                      $image = get_field('belaest-arbeitsplatz-image');
                      if( !empty( $image ) ): ?>
                          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                  </div>
                  <div class="adress-info">
                          <div class="post-title">
                              <h4><?php the_field('belaest-arbeitsplatz-orga'); ?></h4>
                          </div>
                          <div class="post-content">
                              <p class="adress-para"><?php the_field('belaest-arbeitsplatz-infotext'); ?></p>
                          </div>                             
                  </div>
              </div>
            </a>
          </article>
         
      </div>

      <div>
        <h3 class="adress-chapter"><?php the_field('rubrik-missbrauch-ki'); ?></h3>
      </div>
      <div class="section-adress-duo">                    
          <article class="adress-item">
            <?php 
              $link = get_field('misbra-ki-link-1');
              $link_target ='_blank';
            ?>
            <a href="<?php echo esc_url( $link ); ?>" target="<?php echo esc_attr( $link_target ); ?>">         
              <div class="blog-adress">
                  <div class="post-thumnail">
                    <?php 
                      $image = get_field('misbra-ki-image-1');
                      if( !empty( $image ) ): ?>
                          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                  </div>
                  <div class="adress-info">
                          <div class="post-title">
                              <h4><?php the_field('misbra-ki-orga-1'); ?></h4>
                          </div>
                          <div class="post-content">
                              <p class="adress-para"><?php the_field('misbra-ki-infotext-1'); ?></p>
                          </div>                             
                  </div>
              </div>
            </a>
          </article>
          <article class="adress-item">
            <?php 
              $link = get_field('misbra-ki-link-2');
              $link_target ='_blank';
            ?>
             <a href="<?php echo esc_url( $link ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
              <div class="blog-adress">
                  <div class="post-thumnail">
                    <?php 
                      $image = get_field('misbra-ki-image-2');
                      if( !empty( $image ) ): ?>
                          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                      <?php endif; ?>
                  </div>
                  <div class="adress-info">
                          <div class="post-title">
                              <h4><?php the_field('misbra-ki-orga-2'); ?></h4>
                          </div>
                          <div class="post-content">
                              <p class="adress-para"><?php the_field('misbra-ki-infotext-2'); ?></p>
                          </div>                             
                  </div>
              </div>
            </a>
          </article>         
      </div> 
      
      <div>
       <h3 class="adress-chapter"><?php the_field('rubrik-haeusl-gewalt'); ?></h3>
      </div>
      <div class="section-adress-duo">                    
          <article class="adress-item">
            <?php 
              $link = get_field('haeusl-gewalt-link-1');
              $link_target ='_blank';
            ?>
            <a href="<?php echo esc_url( $link ); ?>" target="<?php echo esc_attr( $link_target ); ?>">         
              <div class="blog-adress">
                  <div class="post-thumnail">
                    <?php 
                      $image = get_field('haeusl-gewalt-image-1');
                      if( !empty( $image ) ): ?>
                          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                  </div>
                  <div class="adress-info">
                          <div class="post-title">
                              <h4><?php the_field('haeusl-gewalt-orga-1'); ?></h4>
                          </div>
                          <div class="post-content">
                              <p class="adress-para"><?php the_field('haeusl-gewalt-infotext-1'); ?></p>
                          </div>                             
                  </div>
              </div>
            </a>
          </article>
          <article class="adress-item">
            <?php 
              $link = get_field('haeusl-gewalt-link-2');
              $link_target ='_blank';
            ?>
             <a href="<?php echo esc_url( $link ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
              <div class="blog-adress">
                  <div class="post-thumnail">
                    <?php 
                      $image = get_field('haeusl-gewalt-image-2');
                      if( !empty( $image ) ): ?>
                          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                      <?php endif; ?>
                  </div>
                  <div class="adress-info">
                          <div class="post-title">
                              <h4><?php the_field('haeusl-gewalt-orga-2'); ?></h4>
                          </div>
                          <div class="post-content">
                              <p class="adress-para"><?php the_field('haeusl-gewalt-infotext-2'); ?></p>
                          </div>                             
                  </div>
              </div>
            </a>
          </article>         
      </div> 
      
      <div>
         <h3 class="adress-chapter"><?php the_field('rubrik-wohnungsnot'); ?></h3>
      </div>
       <div class="section-adress-duo">                    
          <article class="adress-item">
            <?php 
              $link = get_field('wohnungsnot-link-1');
              $link_target ='_blank';
            ?>
            <a href="<?php echo esc_url( $link ); ?>" target="<?php echo esc_attr( $link_target ); ?>">         
              <div class="blog-adress">
                  <div class="post-thumnail">
                    <?php 
                      $image = get_field('wohnungsnot-image-1');
                      if( !empty( $image ) ): ?>
                          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                  </div>
                  <div class="adress-info">
                          <div class="post-title">
                              <h4><?php the_field('wohnungsnot-orga-1'); ?></h4>
                          </div>
                          <div class="post-content">
                              <p class="adress-para"><?php the_field('wohnungsnot-infotext-1'); ?></p>
                          </div>                             
                  </div>
              </div>
            </a>
          </article>
          <article class="adress-item">
            <?php 
              $link = get_field('wohnungsnot-link-2');
              $link_target ='_blank';
            ?>
             <a href="<?php echo esc_url( $link ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
              <div class="blog-adress">
                  <div class="post-thumnail">
                    <?php 
                      $image = get_field('wohnungsnot-image-2');
                      if( !empty( $image ) ): ?>
                          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                      <?php endif; ?>
                  </div>
                  <div class="adress-info">
                          <div class="post-title">
                              <h4><?php the_field('wohnungsnot-orga-2'); ?></h4>
                          </div>
                          <div class="post-content">
                              <p class="adress-para"><?php the_field('wohnungsnot-infotext-2'); ?></p>
                          </div>                             
                  </div>
              </div>
            </a>
          </article>         
      </div> 

      <div>
        <h3 class="adress-chapter"><?php the_field('rubrik-prostituierte'); ?></h3>

      </div>
      <div class="section-adress-duo">              
         
          <article class="adress-item">
            <?php 
              $link = get_field('prostituirte-link-1');
              $link_target ='_blank';
            ?>
            <a href="<?php echo esc_url( $link ); ?>" target="<?php echo esc_attr( $link_target ); ?>">         
              <div class="blog-adress">
                  <div class="post-thumnail">
                    <?php 
                      $image = get_field('prostituirte-image-1');
                      if( !empty( $image ) ): ?>
                          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                  </div>
                  <div class="adress-info">
                          <div class="post-title">
                              <h4><?php the_field('prostituirte-orga-1'); ?></h4>
                          </div>
                          <div class="post-content">
                              <p class="adress-para"><?php the_field('prostituirte-infotext-1'); ?></p>
                          </div>                             
                  </div>
              </div>
            </a>
          </article>
         
      </div>
      <div>
         <h3 class="adress-chapter"><?php the_field('rubrik-menschenhandel'); ?></h3>
      </div>
      <div class="section-adress-duo">              
         
          <article class="adress-item">
            <?php 
              $link = get_field('menschenhandel-link-1');
              $link_target ='_blank';
            ?>
            <a href="<?php echo esc_url( $link ); ?>" target="<?php echo esc_attr( $link_target ); ?>">         
              <div class="blog-adress">
                  <div class="post-thumnail">
                    <?php 
                      $image = get_field('menschenhandel-image-1');
                      if( !empty( $image ) ): ?>
                          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                  </div>
                  <div class="adress-info">
                          <div class="post-title">
                              <h4><?php the_field('menschenhandel-orga-1'); ?></h4>
                          </div>
                          <div class="post-content">
                              <p class="adress-para"><?php the_field('menschenhandel-infotext-1'); ?></p>
                          </div>                             
                  </div>
              </div>
            </a>
          </article>
         
      </div>

      <div>
        <h3 class="adress-chapter"><?php the_field('rubrik-suchtberatung'); ?></h3>
      </div>
      <div class="section-adress-duo">              
         
          <article class="adress-item">
            <?php 
              $link = get_field('suchtberatung-link-1');
              $link_target ='_blank';
            ?>
            <a href="<?php echo esc_url( $link ); ?>" target="<?php echo esc_attr( $link_target ); ?>">         
              <div class="blog-adress">
                  <div class="post-thumnail">
                    <?php 
                      $image = get_field('suchtberatung-image-1');
                      if( !empty( $image ) ): ?>
                          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                  </div>
                  <div class="adress-info">
                          <div class="post-title">
                              <h4><?php the_field('suchtberatung-orga-1'); ?></h4>
                          </div>
                          <div class="post-content">
                              <p class="adress-para"><?php the_field('suchtberatung-infotext-1'); ?></p>
                          </div>                             
                  </div>
              </div>
            </a>
          </article>
         
      </div>

      <div>
        <h3 class="adress-chapter"><?php the_field('rubrik-frau-gesundheit'); ?></h3>
      </div>
      <div class="section-adress-duo">                    
            <article class="adress-item">
              <?php 
                $link = get_field('frau-gesundheit-link-1');
                $link_target ='_blank';
              ?>
              <a href="<?php echo esc_url( $link ); ?>" target="<?php echo esc_attr( $link_target ); ?>">         
                <div class="blog-adress">
                    <div class="post-thumnail">
                      <?php 
                        $image = get_field('frau-gesundheit-image-1');
                        if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                      <?php endif; ?>
                    </div>
                    <div class="adress-info">
                            <div class="post-title">
                                <h4><?php the_field('frau-gesundheit-orga-1'); ?></h4>
                            </div>
                            <div class="post-content">
                                <p class="adress-para"><?php the_field('frau-gesundheit-infotext-1'); ?></p>
                            </div>                             
                    </div>
                </div>
              </a>
            </article>
            <article class="adress-item">
              <?php 
                $link = get_field('frau-gesundheit-link-2');
                $link_target ='_blank';
              ?>
              <a href="<?php echo esc_url( $link ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                <div class="blog-adress">
                    <div class="post-thumnail">
                      <?php 
                        $image = get_field('frau-gesundheit-image-2');
                        if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="adress-info">
                            <div class="post-title">
                                <h4><?php the_field('frau-gesundheit-orga-2'); ?></h4>
                            </div>
                            <div class="post-content">
                                <p class="adress-para"><?php the_field('frau-gesundheit-infotext-2'); ?></p>
                            </div>                             
                    </div>
                </div>
              </a>
            </article>         
      </div> 
                        
      <div>
        <h3 class="adress-chapter"><?php the_field('rubrik-sexualitaet'); ?></h3>
      </div>
      <div class="section-adress-duo">              
         
          <article class="adress-item">
            <?php 
              $link = get_field('sexualitaet-link-1');
              $link_target ='_blank';
            ?>
            <a href="<?php echo esc_url( $link ); ?>" target="<?php echo esc_attr( $link_target ); ?>">         
              <div class="blog-adress">
                  <div class="post-thumnail">
                    <?php 
                      $image = get_field('sexualitaet-image-1');
                      if( !empty( $image ) ): ?>
                          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                  </div>
                  <div class="adress-info">
                          <div class="post-title">
                              <h4><?php the_field('sexualitaet-orga-1'); ?></h4>
                          </div>
                          <div class="post-content">
                              <p class="adress-para"><?php the_field('sexualitaet-infotext-1'); ?></p>
                          </div>                             
                  </div>
              </div>
            </a>
          </article>
         
      </div>
     
      <div>
        <h3 class="adress-chapter"><?php the_field('rubrik-lebenskrisen'); ?></h3>
      </div>
      <div class="section-adress-duo">              
         
          <article class="adress-item">
            <?php 
              $link = get_field('lebenskrisen-link-1');
              $link_target ='_blank';
            ?>
            <a href="<?php echo esc_url( $link ); ?>" target="<?php echo esc_attr( $link_target ); ?>">         
              <div class="blog-adress">
                  <div class="post-thumnail">
                    <?php 
                      $image = get_field('lebenskrisen-image-1');
                      if( !empty( $image ) ): ?>
                          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                  </div>
                  <div class="adress-info">
                          <div class="post-title">
                              <h4><?php the_field('lebenskrisen-orga-1'); ?></h4>
                          </div>
                          <div class="post-content">
                              <p class="adress-para"><?php the_field('lebenskrisen-infotext-1'); ?></p>
                          </div>                             
                  </div>
              </div>
            </a>
          </article>
         
      </div>
     
      <div>
        <h3 class="adress-chapter"><?php the_field('rubrik-erwerbslos'); ?></h3>
      </div>
      <div class="section-adress-duo">              
         
          <article class="adress-item">
            <?php 
              $link = get_field('erwerbslos-link-1');
              $link_target ='_blank';
            ?>
            <a href="<?php echo esc_url( $link ); ?>" target="<?php echo esc_attr( $link_target ); ?>">         
              <div class="blog-adress">
                  <div class="post-thumnail">
                    <?php 
                      $image = get_field('erwerbslos-image-1');
                      if( !empty( $image ) ): ?>
                          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                  </div>
                  <div class="adress-info">
                          <div class="post-title">
                              <h4><?php the_field('erwerbslos-orga-1'); ?></h4>
                          </div>
                          <div class="post-content">
                              <p class="adress-para"><?php the_field('erwerbslos-infotext-1'); ?></p>
                          </div>                             
                  </div>
              </div>
            </a>
          </article>
         
      </div>
      
       <div>
        <h3 class="adress-chapter"><?php the_field('rubrik-gebaerden'); ?></h3>
      </div>
      <div class="section-adress-single">           
          <article class="adress-item">
            <?php 
              $link = get_field('gebaerden-link');
              $link_target ='_blank';
            ?>
            <a href="<?php echo esc_url( $link ); ?>" target="<?php echo esc_attr( $link_target ); ?>">         
              <div class="blog-adress">
                  <div class="post-thumnail">
                    <?php 
                      $image = get_field('gebaerden-image');
                      if( !empty( $image ) ): ?>
                          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                  </div>
                  <div class="adress-info">
                          <div class="post-title">
                              <h4><?php the_field('gebaerden-orga'); ?></h4>
                          </div>
                          <div class="post-content">
                              <p class="adress-para"><?php the_field('gebaerden-infotext'); ?></p>
                          </div>                             
                  </div>
              </div>
            </a>
          </article>
         
      </div>
      
  </section>
                
 </div><!-- .entry-content -->

    
 
</article><!-- #post-## -->
