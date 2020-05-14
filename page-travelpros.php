<?php get_header(); ?> 

<section class="container-fluid text-center travel travel__hero hp__section" style="background:linear-gradient(rgba(0, 0, 0, -0.7), rgba(0, 0, 0, 0.7)), url(<?php the_field('background_image') ;?>);">
        <h2 class="travel__hdr"><?php the_field('hero_title') ;?></h2>
        <p class="travel__copy"><?php the_field('hero_subtitle') ;?></p>
        
    </section>


    <section  class="container travel__section recommendations">
        <h2 class="text-center callout-text"><?php the_field('recommendations_header') ;?></h2>
        <div id="travelRecommendations" class="carousel slide" data-ride="carousel"  data-interval="5000">

            <?php the_field('recommendations') ;?>

        </div>
    </section>


    <h2 class="text-center callout-text">We delight travel professionals</h2>

    <?php 
        $travelSections  = new WP_Query(array(
            'posts_per_page' => -1,
            'post_type' => 'travel_sections'
        ));

        while($travelSections -> have_posts()) {
            $travelSections->the_post(); ?>
            <section class="container-fluid travel__section">
                <div class="row">
                    <div class="col-md-6 image" style="background:  linear-gradient(rgba(0, 0, 0, -0.7), rgba(0, 0, 0, 0.7)), url(<?php the_field('background_image') ;?>);">
                    </div>
                    <div class="col-md-6 copy">
                        <h2 class="h4"><?php the_field('title') ;?></h2>
                            <ul class="list">
                                <?php the_field('copy') ;?>
                            </ul>
                    </div>
                </div>
            </section>
        <?php } ?>
    
<?php get_footer(); ?>