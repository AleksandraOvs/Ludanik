<?php
/*
    Template name: Bio template
*/
?>
<?php get_header(); ?>
      <!-- Content -->
        <section class="section__post-content">
            <article class="post-content">
                <div class="post-content__title bio">
                    <h2 class="post-content__head"><?php the_title(); ?></h2>
                    <?php the_excerpt(); ?>
                </div>
                
                <?php the_content(); ?>
            </article>
        </section>
<?php get_footer(); ?>