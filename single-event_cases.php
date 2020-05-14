<?php get_header();

    while (have_posts()) {
        the_post(); ?>

        <div class="container-fluid default event_case">
            <div class="row">
                <div class="col-md-6 event__case--gallery">
                    <?php the_field('gallery') ;?>
                </div>
                <div class="col-md-6 ">
                    <div class="event__case--copy">
                        <h2><?php the_title(); ?></h2>
                        <p>Catergory <?php echo get_the_category_list(', '); ?></p>
                        <?php the_field('event_details') ;?>
                    </div>                    
                </div>
            </div>
        </div>


        <?php }

get_footer(); ?>