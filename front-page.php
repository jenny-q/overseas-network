<?php get_header(); ?> 

<section class="container-fluid text-center hp__video">
    <video autoplay muted loop id="hpHeroVideo">
        <source src="<?php the_field('background_video') ;?>" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    <div class="gradientHero">
        <h2>
        <?php the_field('hero_title') ;?>
        </h2>
    </div>
</section>

<?php 
    $count = 0;
    $homeSection  = new WP_Query(array(
        'posts_per_page' => -1,
        'post_type' => 'home'
    ));

    while($homeSection -> have_posts()) {
        $count++;
        $homeSection->the_post(); ?>
        <section class="container-fluid hp__section hp_<?php echo $count; ?>">
            <h2 class="h1"><?php the_title(); ?></h2>
            <?php the_content(); ?>
            <?php if( get_field('button_link') ): ?>
                <a href="<?php the_field('button_link') ;?>" class="btn btn-sm btn-primary hp"><?php the_field('button_name') ;?></a>
            <?php endif; ?>
        </section>
        <style>
            .hp_<?php echo $count; ?> {
                background: linear-gradient(rgba(0, 0, 0, -0.7), rgba(0, 0, 0, 0.7)), url(<?php the_field('background_image') ;?>);
            }
            @media (max-width: 500px) {
                .hp_<?php echo $count; ?> {
                    background: linear-gradient(rgba(0, 0, 0, -0.7), rgba(0, 0, 0, 0.7)), url(<?php the_field('mobile_image') ;?>);
                }
            }
        </style>
    <?php } wp_reset_query(); ?>


    <section class="container text-center hp__brands">
        <h2 class="test"><?php the_field('press_header') ;?></h2>
        <div class="row">
            <?php 
            $homeArticles  = new WP_Query(array(
                'posts_per_page' => -1,
                'post_type' => 'Seen_In'
            ));

            while($homeArticles -> have_posts()) {
                $homeArticles->the_post(); ?>

                
                        <div class="col-md-2 hp__logos">

                            <a href="<?php the_field('as_seen_in_url') ;?>" target="_blank">
                                <img src="<?php the_field('article_logo') ;?>" class="img-fluid">
                            </a>
                        </div>
                    

            <?php } wp_reset_query(); ?>
        </div>
    </section>

<?php get_footer(); ?>