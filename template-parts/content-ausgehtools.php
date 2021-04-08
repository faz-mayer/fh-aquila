<?php
/**
 * Template for displaying #ausgehtools in single-kampagne_ausgehtools.php.
 *
 * @package Aquila
 * 
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header  text-center mb-8">
		<?php if( has_post_thumbnail() ) { ?>
            <div class="ausgeh-postcard">
                <?php the_post_thumbnail( 'large' ); ?>
            </div>   
		<?php } ?>
	</header>
 
	<div class="entry-content">       
        <section class="questions wrapper">
            <header class="text-center">
                <h1><?php post_type_archive_title(); ?></h1>  
            </header>
            <div class="section-center">          
                <article class="question">              
                    <div class="question-title">
                    <h3><?php the_field('tool-1'); ?></h3>
                    <button type="button" class="question-btn">
                        <span class="plus-icon">
                        <i class="plus"></i>
                        </span>
                        <span class="minus-icon">
                        <i class="minus"></i>
                        </span>
                    </button>
                    </div>              
                    <div class="question-text">
                    <?php the_field('desc-1'); ?>
                    </div>
                </article>
                <article class="question">              
                    <div class="question-title">
                    <h3><?php the_field('tool-2'); ?></h3>
                    <button type="button" class="question-btn">
                        <span class="plus-icon">
                        <i class="plus"></i>
                        </span>
                        <span class="minus-icon">
                        <i class="minus"></i>
                        </span>
                    </button>
                    </div>              
                    <div class="question-text">
                    <?php the_field('desc-2'); ?>
                    </div>
                </article>
                <article class="question">              
                    <div class="question-title">
                    <h3><?php the_field('tool-3'); ?></h3>
                    <button type="button" class="question-btn">
                        <span class="plus-icon">
                        <i class="plus"></i>
                        </span>
                        <span class="minus-icon">
                        <i class="minus"></i>
                        </span>
                    </button>
                    </div>              
                    <div class="question-text">
                    <?php the_field('desc-3'); ?>
                    </div>
                </article>
                <article class="question">              
                    <div class="question-title">
                    <h3><?php the_field('tool-4'); ?></h3>
                    <button type="button" class="question-btn">
                        <span class="plus-icon">
                        <i class="plus"></i>
                        </span>
                        <span class="minus-icon">
                        <i class="minus"></i>
                        </span>
                    </button>
                    </div>              
                    <div class="question-text">
                    <?php the_field('desc-4'); ?>
                    </div>
                </article>
                <article class="question">              
                    <div class="question-title">
                    <h3><?php the_field('tool-5'); ?></h3>
                    <button type="button" class="question-btn">
                        <span class="plus-icon">
                        <i class="plus"></i>
                        </span>
                        <span class="minus-icon">
                        <i class="minus"></i>
                        </span>
                    </button>
                    </div>              
                    <div class="question-text">
                    <?php the_field('desc-5'); ?>
                    </div>
                </article>
                <article class="question">              
                    <div class="question-title">
                    <h3><?php the_field('tool-6'); ?></h3>
                    <button type="button" class="question-btn">
                        <span class="plus-icon">
                        <i class="plus"></i>
                        </span>
                        <span class="minus-icon">
                        <i class="minus"></i>
                        </span>
                    </button>
                    </div>              
                    <div class="question-text">
                    <?php the_field('desc-6'); ?>
                    </div>
                </article>
                <article class="question">              
                    <div class="question-title">
                    <h3><?php the_field('tool-7'); ?></h3>
                    <button type="button" class="question-btn">
                        <span class="plus-icon">
                        <i class="plus"></i>
                        </span>
                        <span class="minus-icon">
                        <i class="minus"></i>
                        </span>
                    </button>
                    </div>              
                    <div class="question-text">
                    <?php the_field('desc-7'); ?>
                    </div>
                </article>
                <article class="question">              
                    <div class="question-title">
                    <h3><?php the_field('tool-8'); ?></h3>
                    <button type="button" class="question-btn">
                        <span class="plus-icon">
                        <i class="plus"></i>
                        </span>
                        <span class="minus-icon">
                        <i class="minus"></i>
                        </span>
                    </button>
                    </div>              
                    <div class="question-text">
                    <?php the_field('desc-8'); ?>
                    </div>
                </article>
                <article class="question">              
                    <div class="question-title">
                    <h3><?php the_field('tool-9'); ?></h3>
                    <button type="button" class="question-btn">
                        <span class="plus-icon">
                        <i class="plus"></i>
                        </span>
                        <span class="minus-icon">
                        <i class="minus"></i>
                        </span>
                    </button>
                    </div>              
                    <div class="question-text">
                    <?php the_field('desc9'); ?>
                    </div>
                </article>
                <article class="question">              
                    <div class="question-title">
                    <h3><?php the_field('tool-10'); ?></h3>
                    <button type="button" class="question-btn">
                        <span class="plus-icon">
                        <i class="plus"></i>
                        </span>
                        <span class="minus-icon">
                        <i class="minus"></i>
                        </span>
                    </button>
                    </div>              
                    <div class="question-text">
                    <?php the_field('desc-10'); ?>
                    </div>
                </article>
                <article class="question">              
                    <div class="question-title">
                    <h3><?php the_field('tool-11'); ?></h3>
                    <button type="button" class="question-btn">
                        <span class="plus-icon">
                        <i class="plus"></i>
                        </span>
                        <span class="minus-icon">
                        <i class="minus"></i>
                        </span>
                    </button>
                    </div>              
                    <div class="question-text">
                    <?php the_field('desc-1'); ?>
                    </div>
                </article>
                <article class="question">              
                    <div class="question-title">
                    <h3><?php the_field('tool-12'); ?></h3>
                    <button type="button" class="question-btn">
                        <span class="plus-icon">
                        <i class="plus"></i>
                        </span>
                        <span class="minus-icon">
                        <i class="minus"></i>
                        </span>
                    </button>
                    </div>              
                    <div class="question-text">
                    <?php the_field('desc-12'); ?>
                    </div>
                </article>
                <article class="question">              
                    <div class="question-title">
                    <h3><?php the_field('tool-13'); ?></h3>
                    <button type="button" class="question-btn">
                        <span class="plus-icon">
                        <i class="plus"></i>
                        </span>
                        <span class="minus-icon">
                        <i class="minus"></i>
                        </span>
                    </button>
                    </div>              
                    <div class="question-text">
                    <?php the_field('desc-14'); ?>
                    </div>
                </article>
                 <article class="question">              
                    <div class="question-title">
                    <h3><?php the_field('tool-14'); ?></h3>
                    <button type="button" class="question-btn">
                        <span class="plus-icon">
                        <i class="plus"></i>
                        </span>
                        <span class="minus-icon">
                        <i class="minus"></i>
                        </span>
                    </button>
                    </div>              
                    <div class="question-text">
                    <?php the_field('desc-14'); ?>
                    </div>
                </article>
                 <article class="question">              
                    <div class="question-title">
                    <h3><?php the_field('tool-15'); ?></h3>
                    <button type="button" class="question-btn">
                        <span class="plus-icon">
                        <i class="plus"></i>
                        </span>
                        <span class="minus-icon">
                        <i class="minus"></i>
                        </span>
                    </button>
                    </div>              
                    <div class="question-text">
                    <?php the_field('desc-15'); ?>
                    </div>
                </article>
            
            </div>
            
    </div><!-- .entry-content -->

</article><!-- #post-## -->
