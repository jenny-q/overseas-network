<?php get_header(); ?> 

<section class="container-fluid text-center travel care__hero hp__section" style="background:  linear-gradient(rgba(0, 0, 0, -0.7), rgba(0, 0, 0, 0.7)), url(<?php the_field('background_image') ;?>);">
    <div class="row">
        <div class="col-md-12">
            <img src="<?php the_field('logo') ;?>" class="img-fluid materials"/>
        </div>
    </div>
</section>




<section class="container-fluid material__tab">
    <h2 class="h3 callout">INTERNATIONAL
MARKETING MATERIALS</h2>
    <h2 class="h3 callout">Download your assets below:</h2>
    
            <?php 
                    $IntlMaterials  = new WP_Query(array(
                        'posts_per_page' => -1,
                        'post_type' => 'carefree_supt_intl'
                    ));

                    while($IntlMaterials -> have_posts()) {
                        $IntlMaterials->the_post(); ?>
                        <div class="row material__row">
                        <div class="col-md-4 event__single">
                            <div class="carefree__image" style="background: url(<?php the_field('tab_image') ;?>)">
                                <div class="hotel__copy">
                                    <h2 class="h5 m-0"><?php the_field('title') ;?></h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                        <ul class="nav nav-pills language" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="badge active" id="english-tab" data-toggle="tab" href="#english" role="tab" aria-controls="english" aria-selected="true">ENGLISH</a>
                            </li>
                            <li class="nav-item">
                                <a class="badge" id="french-tab" data-toggle="tab" href="#french" role="tab" aria-controls="french" aria-selected="false">FRANÇAIS</a>
                            </li>
                            <li class="nav-item">
                                <a class="badge" id="portuguese-tab" data-toggle="tab" href="#portuguese" role="tab" aria-controls="portuguese" aria-selected="false">PORTUGUÊS</a>
                            </li>
                            <li class="nav-item">
                                <a class="badge" id="spanish-tab" data-toggle="tab" href="#spanish" role="tab" aria-controls="spanish" aria-selected="false">ESPAÑOL</a>
                            </li>
                        </ul>

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="english" role="tabpanel" aria-labelledby="english-tab">
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

                            <div class="tab-pane fade" id="french" role="tabpanel" aria-labelledby="french-tab">
                            <div class="stack">
                                    <a href="<?php the_field('instructions_fr') ;?>" class="btn btn-sm btn-primary materials__btn <?php the_field('class') ;?>"><h2 class="h5 m-0"><?php the_field('instructions_text_fr') ;?></h2></a>
                                </div>
                                <div class="stack">
                                    <a href="<?php the_field('pdf_fr') ;?>" class="btn btn-sm btn-primary materials__btn <?php the_field('class') ;?>"><h2 class="h5 m-0"><?php the_field('pdf_text_fr') ;?></h2></a>  
                                    <a href="<?php the_field('jpg_fr') ;?>" class="btn btn-sm btn-primary materials__btn <?php the_field('class') ;?>"><h2 class="h5 m-0"><?php the_field('jpg_text_fr') ;?></h2></a>  
                                    <a href="<?php the_field('assets_fr') ;?>" class="btn btn-sm btn-primary materials__btn <?php the_field('class') ;?>"><h2 class="h5 m-0"><?php the_field('assets_text_fr') ;?></h2></a>  
                                </div>
                                <div class="stack">
                                    <a href="<?php the_field('social_media_1_fr') ;?>" class="btn btn-sm btn-primary materials__btn <?php the_field('class') ;?>"><h2 class="h5 m-0"><?php the_field('social_media_1_text_fr') ;?></h2></a> 
                                    <a href="<?php the_field('social_media_2_fr') ;?>" class="btn btn-sm btn-primary materials__btn <?php the_field('class') ;?>"><h2 class="h5 m-0"><?php the_field('social_media_2_text_fr') ;?></h2></a>
                                    <a href="<?php the_field('social_media_3_fr') ;?>" class="btn btn-sm btn-primary materials__btn <?php the_field('class') ;?>"><h2 class="h5 m-0"><?php the_field('social_media_3_text_fr') ;?></h2></a>  
                                </div>
                            </div>

                            <div class="tab-pane fade" id="portuguese" role="tabpanel" aria-labelledby="portuguese-tab">
                                <div class="stack">
                                    <a href="<?php the_field('instructions_por') ;?>" class="btn btn-sm btn-primary materials__btn <?php the_field('class') ;?>"><h2 class="h5 m-0"><?php the_field('instructions_text_por') ;?></h2></a>
                                </div>
                                <div class="stack">
                                    <a href="<?php the_field('pdf_por') ;?>" class="btn btn-sm btn-primary materials__btn <?php the_field('class') ;?>"><h2 class="h5 m-0"><?php the_field('pdf_text_por') ;?></h2></a>  
                                    <a href="<?php the_field('jpg_por') ;?>" class="btn btn-sm btn-primary materials__btn <?php the_field('class') ;?>"><h2 class="h5 m-0"><?php the_field('jpg_text_por') ;?></h2></a>  
                                    <a href="<?php the_field('assets_por') ;?>" class="btn btn-sm btn-primary materials__btn <?php the_field('class') ;?>"><h2 class="h5 m-0"><?php the_field('assets_text_por') ;?></h2></a>  
                                </div>
                                <div class="stack">
                                    <a href="<?php the_field('social_media_1_por') ;?>" class="btn btn-sm btn-primary materials__btn <?php the_field('class') ;?>"><h2 class="h5 m-0"><?php the_field('social_media_1_text_por') ;?></h2></a> 
                                    <a href="<?php the_field('social_media_2_por') ;?>" class="btn btn-sm btn-primary materials__btn <?php the_field('class') ;?>"><h2 class="h5 m-0"><?php the_field('social_media_2_text_por') ;?></h2></a>
                                    <a href="<?php the_field('social_media_3_por') ;?>" class="btn btn-sm btn-primary materials__btn <?php the_field('class') ;?>"><h2 class="h5 m-0"><?php the_field('social_media_3_text_por') ;?></h2></a>  
                                </div>
                            </div>

                            <div class="tab-pane fade" id="spanish" role="tabpanel" aria-labelledby="spanish-tab">
                                <div class="stack">
                                    <a href="<?php the_field('instructions_spa') ;?>" class="btn btn-sm btn-primary materials__btn <?php the_field('class') ;?>"><h2 class="h5 m-0"><?php the_field('instructions_text_spa') ;?></h2></a>
                                </div>
                                <div class="stack">
                                    <a href="<?php the_field('pdf_spa') ;?>" class="btn btn-sm btn-primary materials__btn <?php the_field('class') ;?>"><h2 class="h5 m-0"><?php the_field('pdf_text_spa') ;?></h2></a>  
                                    <a href="<?php the_field('jpg_spa') ;?>" class="btn btn-sm btn-primary materials__btn <?php the_field('class') ;?>"><h2 class="h5 m-0"><?php the_field('jpg_text_spa') ;?></h2></a>  
                                    <a href="<?php the_field('assets_spa') ;?>" class="btn btn-sm btn-primary materials__btn <?php the_field('class') ;?>"><h2 class="h5 m-0"><?php the_field('assets_text_spa') ;?></h2></a>  
                                </div>
                                <div class="stack">
                                    <a href="<?php the_field('social_media_1_spa') ;?>" class="btn btn-sm btn-primary materials__btn <?php the_field('class') ;?>"><h2 class="h5 m-0"><?php the_field('social_media_1_text_spa') ;?></h2></a> 
                                    <a href="<?php the_field('social_media_2_spa') ;?>" class="btn btn-sm btn-primary materials__btn <?php the_field('class') ;?>"><h2 class="h5 m-0"><?php the_field('social_media_2_text_spa') ;?></h2></a>
                                    <a href="<?php the_field('social_media_3_spa') ;?>" class="btn btn-sm btn-primary materials__btn <?php the_field('class') ;?>"><h2 class="h5 m-0"><?php the_field('social_media_3_text_spa') ;?></h2></a>  
                                </div>
                            </div>
                        
                        </div>



                        </div>

                        </div>
                    <?php } wp_reset_query();?>

             
        
        
        <div class="row">
        <div class="col-md-12">
                <h2 class="h3 text-center travelsurvey"><?php the_field('travel_survey_header') ;?></h2>
                <p class="text-center travelsurveytext"><?php the_field('travel_survey_subheader') ;?></p>
                 <div class="row survey intl">
                     <div class="col-md-4">
                        <a href="<?php the_field('infographic_url') ;?>">
                            <div class="travel" style="background: url(<?php the_field('infographic_image') ;?>)">
                                <div class="hotel__copy">
                                    <h2 class="h5 m-0"><?php the_field('infographic_text') ;?></h2>
                                </div>
                            </div>
                        </a>
                     </div>
                     <div class="col-md-4">
                        <a href="<?php the_field('results_pdf_url') ;?>">
                            <div class="travel" style="background: url(<?php the_field('results_pdf_img') ;?>)">
                                <div class="hotel__copy">
                                    <h2 class="h5 m-0"><?php the_field('results_text') ;?></h2>
                                </div>
                            </div>
                            </a>
                     </div>
                     <div class="col-md-4">
                        <a href="<?php the_field('url_field3') ;?>">
                            <div class="travel" style="background: url(<?php the_field('image_field_3') ;?>)">
                                <div class="hotel__copy">
                                    <h2 class="h5 m-0"><?php the_field('name_field_3') ;?></h2>
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