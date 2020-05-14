<?php get_header();?>

<div class="container-fluid default d-none">
    <div class="row">
        <div class="col-md-12">
            <h2>Blog</h2>
        </div>
    </div>
</div>

<div class="container-fluid default blog">
    <div class="row">
        <div class="col-md-8">
            <?php
                while (have_posts()) {
                    the_post(); ?>

                    <div class="row blog__row">
                        <div class="col-md-12 blog__details">
                        	<div class="img-fluid blog__img">
                                <?php the_post_thumbnail(); ?>
                            </div>
                             <div class="blog__info">
                                <h2 class="h4"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                    <p>Posted by <?php the_author_posts_link(); ?> on <?php the_time('n.j.y');?> in <?php echo get_the_category_list(', '); ?></p>
                                    <div class="content">
                                        <?php the_excerpt(); ?>
                                        <a class="btn btn-primary btn-sm" href="<?php the_permalink(); ?>">Continue Reading</a>
                                    </div>
                             </div>
                            
                        </div>
                    </div>

                <?php }
                echo paginate_links();
            ?>
        </div>

        <div class="col-md-4 blog__sidebar">
            <div class="recent__posts">
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
            
                <div class="archive__list">
                    <h4 class="blog__hdr h5">
                    Archives
                    </h4>
                    <ul class="unstyled-list">
                        <?php wp_get_archives( array( 'type' => 'monthly', 'limit' => 12 ) ); ?>
                    </ul>
                </div>         

                <div class="cat__list"> 
                    <ul class="unstyled-list">
                        <?php wp_list_categories( array(
                            'orderby' => 'name'
                        ) ); ?> 
                    </ul>
                </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>