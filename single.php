<?php get_header();

    while (have_posts()) {
        the_post(); ?>
        <section class="container-fluid text-center travel blog__bg hp__section" style="background:  linear-gradient(rgba(0, 0, 0, -0.7), rgba(0, 0, 0, 0.7)), url(<?php the_field('background_image') ;?>);">
        <h2 class="blog__hdr"><?php the_title(); ?></h2>
        </section>

        <div class="container default">
            <div class="row">

                <div class="col-md-12">
                    <h2 class="blog__title"><?php the_title(); ?></h2>
                    <p>Posted by <?php the_author_posts_link(); ?> on <?php the_time('n.j.y');?> in <?php echo get_the_category_list(', '); ?></p>
                    <?php the_content(); ?>
                </div>
                <div class="col-md-12 blog__sidebar">
                    <div class="row">
                        <div class="recent__posts col-md-10">
                            <h4 class="blog__hdr h5">
                                Recent Posts
                                </h4>
                            <ul class="unstyled-list recent__posts--list">
                                <?php
                                $recent_posts = wp_get_recent_posts(array(
                                    'numberposts' => 8, 
                                    'post_status' => 'publish' 
                                ));
                                foreach($recent_posts as $post) : ?>
                                    <li>
                                        <a href="<?php echo get_permalink($post['ID']) ?>">
                                            <?php echo get_the_post_thumbnail($post['ID'], 'full'); ?>
                                            <p class="slider-caption-class"><?php echo $post['post_title'] ?></p>
                                        </a>
                                    </li>
                                <?php endforeach; wp_reset_query(); ?>
                            </ul>
                        </div>
                
                        <div class="archive__list col-md-2">
                            <h4 class="blog__hdr h5">
                            Archives
                            </h4>
                            <ul class="unstyled-list">
                                <?php wp_get_archives( array( 'type' => 'monthly', 'limit' => 12 ) ); ?>
                            </ul>
                        </div>         

                        <div class="cat__list  col-md-12"> 
                            <ul class="unstyled-list">
                                <?php wp_list_categories( array(
                                    'orderby' => 'name'
                                ) ); ?> 
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <?php }

get_footer(); ?>