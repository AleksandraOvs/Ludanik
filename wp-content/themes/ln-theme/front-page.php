<?php get_header(); ?>
<section class="section">
        
        <?php
      $args = array(
        'order' => 'rand',
      );
      query_posts($args);
      if(have_posts() ): 
					if (is_sticky()){
                      ?>   
                      <?php
                      if(is_sticky(14)) {
                            ?>

                            <article class="post-content">
                            <a href="<?php the_permalink();?>"><img src="<?php echo get_stylesheet_directory_uri()?>/images/the_wall.webp" alt=""></a>
                            <?php
                           }else {
                             ?>
                            <a class="post-content__sticky" href="<?php the_permalink(); ?>"> <?php the_post_thumbnail( 'sticky-thumb' ); ?></a>
                            
                             </article>
                            <?php
                           }                      
					 } else{
                         get_template_part('entry');
					 }
				     endif;
				?>
       
</section>
<?php get_footer(); ?>