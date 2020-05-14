<?php get_header(); ?> 

<section class="container-fluid text-center travel care__hero hp__section" style="background:  linear-gradient(rgba(0, 0, 0, -0.7), rgba(0, 0, 0, 0.7)), url(<?php the_field('background_image') ;?>);">
    <div class="row">
        <div class="col-md-12">
            <img src="<?php the_field('logo') ;?>" class="img-fluid materials"/>
        </div>
    </div>
</section>




<section class="container-fluid material__tab">
    <h2 class="h3 callout">DOMESTIC
MARKETING MATERIALS</h2>
    <h2 class="h3 callout">Download your assets below:</h2>
    
            <?php 
                    $carefreeMaterials  = new WP_Query(array(
                        'posts_per_page' => -1,
                        'post_type' => 'carefree_support'
                    ));

                    while($carefreeMaterials -> have_posts()) {
                        $carefreeMaterials->the_post(); ?>
                        <div class="row material__row">
                        <div class="col-md-4 event__single">
                            <div class="carefree__image" style="background: url(<?php the_field('tab_image') ;?>)">
                                <div class="hotel__copy">
                                    <h2 class="h5 m-0"><?php the_field('title') ;?></h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="stack">
                                <a href="<?php the_field('instructions') ;?>" class="btn btn-sm btn-primary materials__btn <?php the_field('class') ;?>"><h2 class="h5 m-0"><?php the_field('instructions_text') ;?></h2></a>
                            </div>
                            <div class="stack">
                                <a href="<?php the_field('pdf') ;?>" class="btn btn-sm btn-primary materials__btn <?php the_field('class') ;?>"><h2 class="h5 m-0"><?php the_field('pdf_text') ;?></h2></a>  
                                <a href="<?php the_field('jpg') ;?>" class="btn btn-sm btn-primary materials__btn <?php the_field('class') ;?>"><h2 class="h5 m-0"><?php the_field('jpg_text') ;?></h2></a>  
                                <a href="<?php the_field('assets') ;?>" class="btn btn-sm btn-primary materials__btn <?php the_field('class') ;?>"><h2 class="h5 m-0"><?php the_field('assets_text') ;?></h2></a>  
                            </div>
                            <div class="stack">
                                <a href="<?php the_field('social_media_1') ;?>" class="btn btn-sm btn-primary materials__btn <?php the_field('class') ;?>"><h2 class="h5 m-0"><?php the_field('social_media_1_text') ;?></h2></a> 
                                <a href="<?php the_field('social_media_2') ;?>" class="btn btn-sm btn-primary materials__btn <?php the_field('class') ;?>"><h2 class="h5 m-0"><?php the_field('social_media_2_text') ;?></h2></a>
                                <a href="<?php the_field('social_media_3') ;?>" class="btn btn-sm btn-primary materials__btn <?php the_field('class') ;?>"><h2 class="h5 m-0"><?php the_field('social_media_3_text') ;?></h2></a>  
                            </div>
                            
                             
                        </div>

                        </div>
                    <?php } wp_reset_query();?>

             
        
        
        <div class="row">
        <div class="col-md-12">
                <h2 class="h3 text-center travelsurvey"><?php the_field('travel_survey_header') ;?></h2>
                <p class="text-center travelsurveytext"><?php the_field('travel_survey_subheader') ;?></p>
                 <div class="row survey">
                     <div class="col-md-6">
                        <a href="<?php the_field('infographic_url') ;?>">
                            <div class="travel" style="background: url(<?php the_field('infographic_image') ;?>)">
                                <div class="hotel__copy">
                                    <h2 class="h5 m-0"><?php the_field('infographic_text') ;?></h2>
                                </div>
                            </div>
                        </a>
                     </div>
                     <div class="col-md-6">
                        <a href="<?php the_field('results_pdf_url') ;?>">
                            <div class="travel" style="background: url(<?php the_field('results_pdf_img') ;?>)">
                                <div class="hotel__copy">
                                    <h2 class="h5 m-0"><?php the_field('results_text') ;?></h2>
                                </div>
                            </div>
                            </a>
                     </div>
                 </div>
             </div>
        </div>


        </div>
    </section>

<?php get_footer(); ?>