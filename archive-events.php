<?php get_header();?>

<div class="container-fluid default">
    <div class="row">
        <div class="col-md-12">
            <h2><?php the_archive_title(); ?></h2>
            <p><?php the_archive_description(); ?>
        </div>
    </div>
</div>

<?php
    while (have_posts()) {
        the_post(); ?>

        <div class="container-fluid default">
            <div class="row">
                <div class="col-md-12">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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

<?php get_footer(); ?>