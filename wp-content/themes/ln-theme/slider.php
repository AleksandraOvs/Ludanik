<?php
/*
    Template name: Slider-swiper
*/
?>



<?php get_header(); ?>
<section>
        <article class="post-content">
<?php the_content(); ?>
    <!-- контейнер слайдера -->
<div class="swiper-container slider-one">
<!-- враппер -->
<div class="swiper-wrapper">
<!-- слайды -->
<div class="swiper-slide">
    <img src="<?php echo get_stylesheet_directory_uri();?>/images/001.webp" alt="" class="swiper-slide__img">
</div>
<div class="swiper-slide">
    <img src="<?php echo get_stylesheet_directory_uri();?>/images/002.webp" alt="" class="swiper-slide__img">
</div>
<div class="swiper-slide">
    <img src="<?php echo get_stylesheet_directory_uri();?>/images/the_wall.webp" alt="" class="swiper-slide__img">
</div>
...
</div>
<!-- кнопки пагинации -->
<div class="swiper-pagination"></div>
</div>
</article>
</section>

<?php get_footer(); ?>