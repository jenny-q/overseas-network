<?php get_header(); ?> 

<section class="container-fluid text-center travel care__hero hp__section" style="background:  linear-gradient(rgba(0, 0, 0, -0.7), rgba(0, 0, 0, 0.7)), url(<?php the_field('carefree_experience_background') ;?>);">
    <div class="row">
        <div class="col-md-6">
            <img src="<?php the_field('carefree_experience_logo') ;?>" class="img-fluid"/>
        </div>

        <div class="col-md-6 care__callout">
            <?php the_field('carefree_experience_copy') ;?>
        </div>
    </div>
</section>




<section class="container-fluid carefree">


    <ul class="nav nav-pills carefree__tabs" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link" id="hotels-tab" data-toggle="tab" href="#hotels" role="tab" aria-controls="hotels" aria-selected="true">Hotels</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" id="experiences-tab" data-toggle="tab" href="#experiences" role="tab" aria-controls="experiences" aria-selected="false">Experiences</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="support-tab" data-toggle="tab" href="#support" role="tab" aria-controls="support" aria-selected="false">Support</a>
    </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade  " id="hotels" role="tabpanel" aria-labelledby="hotels-tab">
            <div class="row">
                <div class="col-md-12"><h3>Featured Hotels</h3>
                <a href="" class="btn btn-primary btn-sm">Search All Hotels</a>
            </div>
    
                <?php 
                    $carefreeHotels  = new WP_Query(array(
                        'posts_per_page' => -1,
                        'post_type' => 'carefree_hotels'
                    ));

                    while($carefreeHotels -> have_posts()) {
                        $carefreeHotels->the_post(); ?>
                        <div class="col-md-3 event__single">
                            <div class="carefree__image" style="background: url(<?php the_field('hotel_image') ;?>)">
                            <span class="badge badge-warning carefree__badge"><?php the_field('hotel_label') ;?></span>
                                <div class="hotel__copy">
                                    <h2 class="h5 m-0"><?php the_field('hotel_name') ;?></h2>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

            </div>
        
        
        </div>

        <div class="tab-pane fade show active" id="experiences" role="tabpanel" aria-labelledby="experiences-tab">
        <div class="row">
                <div class="col-md-12"><h3>Featured Experiences</h3></div>
    
                <?php 
                    $carefreeExperience  = new WP_Query(array(
                        'posts_per_page' => -1,
                        'post_type' => 'carefree_experiences'
                    ));

                    while($carefreeExperience -> have_posts()) {
                        $carefreeExperience->the_post(); ?>
                        <div class="col-md-3 event__single">
                            <div class="carefree__image" style="background: url(<?php the_field('experience_image') ;?>)">
                            <span class="badge badge-warning carefree__badge"><?php the_field('experience_label') ;?></span>
                                <div class="hotel__copy">
                                    <h2 class="h5 m-0"><?php the_field('experience_name') ;?></h2>
                                    <h2 class="h5 m-0"><?php the_field('experience_label') ;?></h2>
                                </div>
                            </div>
                        </div>
                    <?php } wp_reset_query();?>

            </div>
        </div>

        <div class="tab-pane fade" id="support" role="tabpanel" aria-labelledby="support-tab">

        <section class="container-fluid text-center support care__hero hp__section">
            <h2><?php the_field('support_title') ;?></h2>
            <p><?php the_field('support_subtitle') ;?></p>
            <div class="row">
                <div class="col-md-6">
                    <a class="support__link" href="<?php the_field('domestic_link') ;?>" >
                        <div class="support__image" style="background:  linear-gradient(rgba(0, 0, 0, -0.7), rgba(0, 0, 0, 0.7)), url(<?php the_field('domestic_background_image'); ?>);">
                                <h3><?php the_field('domestic_title'); ?></h3>
                        </div>
                    </a>
                </div>

                <div class="col-md-6">
                    <a class="support__link" href="<?php the_field('international_link') ;?>" >
                        <div class="support__image" style="background:  linear-gradient(rgba(0, 0, 0, -0.7), rgba(0, 0, 0, 0.7)), url(<?php the_field('international_background') ;?>);">
                                <h3><?php the_field('international_title') ;?></h3>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        </div>

    </div>

        </div>
    </section>

<?php get_footer(); ?>