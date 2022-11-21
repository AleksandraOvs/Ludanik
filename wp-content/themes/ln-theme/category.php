<?php get_header(); ?>
        <?php
        if ( have_posts() ){
                get_template_part('entry');
        } else {
        ?>


	<p class="posts__notification">this section is still empty</p>
        <a class="posts__notification__link" href="<?php echo home_url(); ?>">Go to main page</a>

        <?php
        }
        ?>
<?php get_footer(); ?>