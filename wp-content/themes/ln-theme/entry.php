<section class="section__post-content">

<ul class="posts__query">
<?php
while( have_posts() ): the_post();
?>
    <li class="posts__query__item">
        <a href="<?php the_permalink(); ?>" class="posts__query__item__inner">
            <?php the_post_thumbnail('instal-thumb'); ?></a>
        
        <h3><?php the_title(); ?></h3>
        <p><?php the_tags( '' ); ?></p>

    </li>
<?php
wp_reset_query();
endwhile;
?>
</ul>
<div class="pagination">

                  <?php
                  echo paginate_links(
	                  array(
		                    'prev_text' => '<span class="paginaion__arrow-prev"></span>',
		                    'next_text' => '<span class="paginaion__arrow-next"></span>',
                            'show_all' => true,
                      //'type' => 'list',
	                  )
                  );
                  ?>
              </div>
</section>  