<footer class="footer"
        style="background-image: url('<?php echo get_template_directory_uri(); ?>/site/assets/i/footer-bg.jpg')">
    <div class="container">
        <div class="footer-top">
            <div class="footer-contacts">
                <h2><?php echo esc_html__( 'Contacts', 'bs-prodinfo' )
                 ?></h2>

				<?php
				$phone = carbon_get_theme_option('crb_phone');
				$phoneClear = clear_phone($phone);
				$mail = carbon_get_theme_option('crb_mail');
				$address = carbon_get_theme_option('crb_address' . get_lang());
				?>
                <ul class="footer-list address">
                    <li class="address__item"><i class="fas fa-phone"></i><a
                                href="tel:<?php echo $phoneClear; ?>"> <?php echo $phone; ?></a></li>
                    <li class="address__item"><i class="fas fa-envelope"></i><a
                                href="mailto:<?php echo $mail; ?>"><?php echo $mail; ?></a></li>
                    <li class="address__item"><i class="fas fa-map-marker-alt"></i><a
                                href="#"><?php echo $address; ?></a></li>
                </ul>
            </div>
            <div class="footer-form">
                <?php if(get_lang() == '_ru'): ?>
					<?php echo do_shortcode('[contact-form-7 id="61" title="Форма rus"]'); ?>
                <?php elseif(get_lang() == '_ro'): ?>
	                <?php echo do_shortcode('[contact-form-7 id="108" title="Form rom"]'); ?>
                    <?php else: ?>
						<?php echo do_shortcode('[contact-form-7 id="107" title="Form en"]'); ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="map" id="js-map">
                <?php if(!dynamic_sidebar('map')): ?>
                    <h4 style="color: red;">Место для карты из виджетов</h4>
                <?php endif; ?>
<!--                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2718.9683105615345!2d28.88903931582926!3d47.04085263487987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1zbXVuLiBDaGnImWluxIN1LCBiZC4gTWlyY2VhIGNlbCBCxIN0csOubiA4LzE!5e0!3m2!1sru!2s!4v1566307613754!5m2!1sru!2s" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>-->
            </div>
        </div>
    </div>
</footer>
<div class="footer-buttons">
    <a target="_blank" class="footer-buttons__phone" href="tel:<?php echo $phoneClear; ?>"><i class="fas fa-phone"></i></a>
    <a target="_blank" class="footer-buttons__facebook" href="<?php echo carbon_get_theme_option('crb_facebook'); ?>"><i class="fab fa-facebook-square"></i></a>
</div>
<a target="_blank" href="https://www.messenger.com/t/prodinfo.md" class="messenger">
    <img src="<?php echo get_template_directory_uri().'/site/assets/i/MESSENGER.png'; ?>" alt="">
</a>
<a href="#" id="js-up" class="up"><img src="<?php echo get_template_directory_uri().'/site/assets/i/svg/up-arrow.svg'; ?>" alt=""></a>
<!--[if lt IE 9]>
<script src="assets/libs/html5shiv/es5-shim.min.js"></script>
<script src="assets/libs/html5shiv/html5shiv.min.js"></script>
<script src="assets/libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="assets/libs/html5shiv/respond.min.js"></script>
<!--<![endif]-->
<?php wp_footer(); ?>
<!--<script>-->
<!--	var map;-->
<!--	function initMap() {-->
<!--		map = new google.maps.Map(document.getElementById('js-map'), {-->
<!--			center: {lat: -34.397, lng: 150.644},-->
<!--			zoom: 8-->
<!--		});-->
<!--	}-->
<!--</script>-->
<!--<script src="--><?php //echo get_template_directory_uri().'/site/assets/js/google-maps.js' ?><!--"></script>-->
<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCYGGatEVfbeHxEj0Z7cNBsmP4-nQ-KIek&callback=initMap"-->
</body>
</html>

