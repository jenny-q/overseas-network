

<section class="container contact">
        <h2 class="h1 text-center">Experience the power of the network</h2>
            <div class="row">
                    <?php 
                        $overseasFooter  = new WP_Query(array(
                            'posts_per_page' => 1,
                            'post_type' => 'custom_footer'
                        ));

                        while($overseasFooter -> have_posts()) {
                            $overseasFooter->the_post(); ?>
                                <div class="col-md-7 contact-form">
                                    <?php the_field('contact_form') ;?>
                                </div>
                                <div class="col-md-5 contact-on">
                                    <?php the_field('overseas_information') ;?>
                                </div>
                        <?php } ?>

                    
                <form class="hp__form d-none">
                    <div class="form-group">
                        <label for="exampleFormControlInput1" class="sr-only">Name</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2" class="sr-only">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write us a message!"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary hp">Submit</button>
                </form>
            </div>
            
        </div>
        
    </section>


    <footer>
        <nav class="navbar  navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('/privacy-policy') ?>">Privacy Policy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('/terms-of-use') ?>">Terms of Use</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="https://www.indeed.com/cmp/Overseas-Leisure-Group">Careers</a>
                    </li>
                </ul>
            </div>
        </nav>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>