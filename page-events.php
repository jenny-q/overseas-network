<?php get_header(); ?> 

<section class="container-fluid text-center travel event__hero hp__section" style="background:url(<?php the_field('background_image') ;?>);">
    <h2 class="travel__hdr event"><?php the_field('title') ;?></h2>
    <p class="travel__copy "><?php the_field('copy') ;?></p>
</section>

<section class="container text-center event__logos text-center">
    <div class="row">
        <?php 
            $eventLogos  = new WP_Query(array(
                'posts_per_page' => -1,
                'post_type' => 'event_logos'
            ));

            while($eventLogos -> have_posts()) {
                $eventLogos->the_post(); ?>
                <div class="col-md-2 event__logo--container">
                    <img src="<?php the_field('event_logo') ;?>" class="img-fluid">
                </div>    
        <?php }  wp_reset_query(); ?>
    </div>
</section>

<section class="container-fluid hp__section" style="background:linear-gradient(rgba(0, 0, 0, -0.7), rgba(0, 0, 0, 0.7)), url(<?php the_field('section_background_image') ;?>);">
    <h2 class="h1"><?php the_field('section_title') ;?></h2>
    <ul class="unstyled-list">
    <?php the_field('section_copy') ;?>
    </ul>
</section>

<section class="container-fluid events">
    <div class="row">

        <?php 
            $eventCases  = new WP_Query(array(
                'posts_per_page' => -1,
                'post_type' => 'event_cases'
            ));

            while($eventCases -> have_posts()) {
                $eventCases->the_post(); ?>
            <div class="col-md-4 event__single" style="background: url(<?php the_field('event_image_background') ;?>)">
                <a href="<?php the_permalink(); ?>" >
                    <div class="overlay"></div>
                    <div class="events__copy">
                        <h2 class="h4"><?php the_field('event_name') ;?></h2>
                        <p><?php the_field('event_category') ;?></p>
                    </div>
                </a>
            </div>
            

        <?php } wp_reset_query(); ?>

        </div>
    </section>

<?php get_footer(); ?>