<?php get_header();

    while (have_posts()) {
        the_post(); ?>

        <div class="container-fluid default">
            <div class="row">
                <div class="col-md-12">
                    <h2><?php the_title(); ?></h2>
                </div>
            </div>
        </div>
        <div class="container-fluid default">
            <div class="row">
                <div class="col-md-12">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>

        <?php }

get_footer(); ?>