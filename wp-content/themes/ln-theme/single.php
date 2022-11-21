<?php get_header(); ?>
      <!-- Content -->
        <section class="section__post-content">
            <article class="post-content">
                <div class="post-content__title">
                    <h2 class="post-content__head"><?php the_title(); ?></h2>
                    <p><?php the_excerpt(); ?></p>
                </div>
                
                <?php the_content(); ?>
            </article>
        </section>
<?php get_footer(); ?>