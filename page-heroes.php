<?php get_header(); ?> 

<section class="container-fluid text-center hp__section heroes" style="background:linear-gradient(rgba(0, 0, 0, -0.7), rgba(0, 0, 0, 0.7)), url(<?php the_field('background_image') ;?>);">

    <h2>
        <?php the_field('title') ;?>
    </h2>

</section>


<?php 
    $count = 0;
    $heroesSection  = new WP_Query(array(
        'posts_per_page' => -1,
        'post_type' => 'heroes'
    ));

    while($heroesSection -> have_posts()) {
        $count++;
        $heroesSection->the_post(); ?>
        
    <section class="container-fluid hp__section hero_<?php echo $count; ?>" >
        <h2 class="h1"><?php the_field('hero_name') ;?></h2>
        <ul class="unstyled-list">
            <li><?php the_field('hero_copy') ;?></li>
        </ul>
        
        </section>
        <style>
            .hero_<?php echo $count; ?> {
                background: linear-gradient(rgba(0, 0, 0, -0.7), rgba(0, 0, 0, 0.7)), url(<?php the_field('hero_background_image') ;?>);
            }
            @media (max-width: 500px) {
                .hero_<?php echo $count; ?> {
                    background: linear-gradient(rgba(0, 0, 0, -0.7), rgba(0, 0, 0, 0.7)), url(<?php the_field('mobile_image') ;?>);
                }
            }
        </style>
    <?php } wp_reset_query(); ?>


<?php get_footer(); ?>