<?php get_header(); ?>
      <!-- Content -->
      <section class="section">
        <article class="post-content">
          <?php 
          if (is_page('about-page')) :
          get_template_part('about-page');
          endif;
          ?>
<?php
            the_content();
?>			
        </article>
      </section>
<?php get_footer(); ?>

