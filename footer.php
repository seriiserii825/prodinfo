<footer class="footer" style="background-image: url('<?php echo get_template_directory_uri(); ?>/site/assets/i/footer-bg.jpg')">
    <div class="container">
        <div class="footer-top">
            <div class="footer-contacts">
                <h2>Contacte</h2>
                <ul class="footer-list address">
                    <li class="address__item"><i class="fas fa-phone"></i><a href="tel:+37368365000"> +(373) 68365000</a></li>
                    <li class="address__item"><i class="fas fa-envelope"></i><a href="mailto:prodinfo.md@gmail.com">prodinfo.md@gmail.com</a></li>
                    <li class="address__item"><i class="fas fa-map-marker-alt"></i><a href="#"> Chifinau, bd. Mircea cel BatrTn 8/1</a></li>
                </ul>
            </div>
            <div class="footer-form">
                <div class="form-flex">
                    <div class="form-half">
                        <input type="text" name="field-name" required="required" placeholder="Numele/Prenumele*">
                    </div>
                    <div class="form-half">
                        <input type="text" name="field-email" required="required" placeholder="Email*">
                    </div>
                </div>
                <div class="form-full">
                    <textarea>Mesajul Dvs.</textarea>
                </div>
                <input class="btn" type="submit" value="Trimite">
            </div>
        </div>
        <div class="footer-bottom">
            <div class="map"><img src="<?php echo get_template_directory_uri(); ?>/site/assets/i/map.jpg"></div>
        </div>
    </div>
</footer><!--[if lt IE 9]>
<script src="assets/libs/html5shiv/es5-shim.min.js"></script>
<script src="assets/libs/html5shiv/html5shiv.min.js"></script>
<script src="assets/libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="assets/libs/html5shiv/respond.min.js"></script>
<!--<![endif]-->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
<!--<script src="<?php echo get_template_directory_uri(); ?>/site/assets/libs/jquery-easy-scroll/jquery.easeScroll.js"></script>-->
<!--<script src="<?php echo get_template_directory_uri(); ?>/site/assets/libs/slick/slick/slick.min.js"></script>-->
<!--<script src="<?php echo get_template_directory_uri(); ?>/site/assets/js/main.js"></script>-->
<?php wp_footer(); ?>
</body>
</html>
