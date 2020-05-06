

<section class="container contact">
        <h2 class="h1 text-center">Experience the power of the network</h2>
        <div class="row">
            <div class="col-md-7 contact-form">
                <h2 class="h6">Contact Us</h2>
                <form class="hp__form">
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
            <div class="col-md-5 contact-on">
                <h2 class="h6">Our Office</h2>
                <ul class="unstyled-list">
                    <li>Miami Office: <a href="tel:+1-786-276-8686" class="footer__text--link">+1.786.276.8686</a>
                    </li>
                    <li>UK Office: <a href="tel:+44-203-608-4344" class="footer__text--link">+44.203.608.4344</a>
                    </li>
                    <li>FR Office: <a href="tel:+33-182-882-736" class="footer__text--link">+33.1.82.88.27.36</a>
                    </li>
                </ul>
                <address>
                    814 Ponce de Leon Blvd #400<br>
                    Coral Gables, FL 33134
                </address>
                <address>ox@overseasinternational.com</address>
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