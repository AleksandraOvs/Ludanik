<?php
/*
Template name: About Page
*/
?>
<?php get_header(); ?>
      <!-- Content -->
    <section>
        <article class="post-content about-page">
            <div class="about-page__section">
                <div class="about-page__section__photo">
                    <?php echo the_post_thumbnail('full'); ?>
                    <ul class="about-page__section__photo__list-files">
                        <li class="list-files__item"><a href="" >curriculum vitae</a></li>
                        <li class="list-files__item"><a href="" >reference: The German Embassy</a></li>
                    </ul>
                </div>
                <div class="about-page__section__content">
                    <h2 class="about-page__heading"><?php the_title(); ?></h2>
                    <ul class="about-page__section__content__description">
                        <li>Public Art / Installation Artist</li>
                        <li>Costume / Perfomance Creator</li>
                        <li>Set Designer</li>
                    </ul>
                    <p class="about-page__section__content__paragraph">
                    Tatyana Ludanik studied graphic design at Moscow Art and Industry Institute, where she acquired the necessary toolkit of skills to visualize her ideas. Further studies of theatre design at the British High School of Art and Design provided Tatyana with deeper understanding of post dramatic theatre and immersive art, these insights inspire her to create works that stimulate sensory experiences of a viewer. In her artistic career Tatyana also functions as a manager and producer of her own projects, the roles that she had been prepared for while studying Economics as her Bachelor’s degree at Lomonosov Moscow State University.
                    </p>

                    <p class="about-page__section__content__paragraph">
                    Tatyana works in different media. The scale and scope of her projects vary from large-size public art objects in city central parks, installations, video art to costume performances and set design. The geography of her recent projects is impressive — Tatyana has created public art in Gorky Park, Skolkovo Industrial Park (Moscow, Russia), installations for permanent collection of Slava Polunin (Le Moulin Jaune, France) and The German Embassy (Goethe-Institut, Russia). She produced a number of interactive installations for ARMA, Mutabor, costume performances for New Holland, Gorky Park, Aviapark, etc. As a set designer, Tatyana collaborated with international festival in Norway (Barents Spektakel 2019, Kirkenes) and Russia (Yuri Bashmet International Art Festival, Sochi 2019, 2020).
                    </p>
                </div>
            </div>
        </article>
    </section>

<?php get_footer(); ?>
