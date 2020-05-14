<?php get_header(); ?> 

    <section class="container-fluid text-center travel event__hero hp__section" style="background:linear-gradient(rgba(0, 0, 0, -0.7), rgba(0, 0, 0, 0.7)), url(<?php the_field('background_image') ;?>);">
        <h2 class="travel__hdr event" ><?php the_field('title') ;?></h2>
        <p class="travel__copy "><?php the_field('copy') ;?></p>
    </section>

    <section  class="container travel__section concierge">
        <?php the_field('concierge_list') ;?>
    </section>

<?php get_footer(); ?>