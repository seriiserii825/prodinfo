<?php
/**
 * Template Name: Главная
 */
get_header(); ?>
<div class="hidden">
    <svg width="0" height="0" class="hidden">
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" id="left-arrow">
            <path d="M88.6 121.3c.8.8 1.8 1.2 2.9 1.2s2.1-.4 2.9-1.2c1.6-1.6 1.6-4.2 0-5.8l-51-51 51-51c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8 0l-54 53.9c-1.6 1.6-1.6 4.2 0 5.8l54 53.9z"></path>
        </symbol>
    </svg>
    <svg width="0" height="0" class="hidden">
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" id="right-arrow">
            <path d="M40.4 121.3c-.8.8-1.8 1.2-2.9 1.2s-2.1-.4-2.9-1.2c-1.6-1.6-1.6-4.2 0-5.8l51-51-51-51c-1.6-1.6-1.6-4.2 0-5.8 1.6-1.6 4.2-1.6 5.8 0l53.9 53.9c1.6 1.6 1.6 4.2 0 5.8l-53.9 53.9z"></path>
        </symbol>
    </svg>
</div>
<div class="main-slider__wrap">
    <div class="main-slider__content">
        <h2><?php echo carbon_get_theme_option('crb_slider_title' . get_lang()); ?></h2>
        <h4><?php echo carbon_get_theme_option('crb_slider_subtitle' . get_lang()); ?></h4>
        <p><?php echo carbon_get_theme_option('crb_slider_text' . get_lang()); ?></p>
    </div>
    <div class="main-slider-arrows">
        <div class="slider-arrow slider-arrow--left">
            <svg class="left-arrow">
                <use xlink:href="#left-arrow"></use>
            </svg>
        </div>
        <div class="slider-arrow slider-arrow--right">
            <svg class="right-arrow">
                <use xlink:href="#right-arrow"></use>
            </svg>
        </div>
    </div>
    <div class="main-slider" id="js-main-slider">
		<?php $slider_images_id = carbon_get_theme_option('crb_slider'); ?>
		<?php foreach ($slider_images_id as $slide_id): ?>
			<?php $id = $slide_id['crb_slider_photo']; ?>
            <div class="main-slider__item"
                 style="background-image: url('<?php echo kama_thumb_src('w=1350 &h=600', $id); ?>')"></div>
		<?php endforeach; ?>
    </div>
</div>

<section class="section offers" id="js-offers">
    <header class="section__header">
        <h2 class="section__title"><?php echo carbon_get_theme_option('crb_offers_title' . get_lang()); ?></h2>
        <h4 class="section__subtitle"><?php echo carbon_get_theme_option('crb_offers_subtitle' . get_lang()); ?></h4>
        <p class="section__text"><?php echo carbon_get_theme_option('crb_offers_text' . get_lang()); ?></p>
    </header>
    <div class="container">
        <div class="offers__content">
			<?php $offers = carbon_get_theme_option('crb_offers'); ?>
			<?php foreach ($offers as $offer): ?>
                <div class="offers__item">
					<img src="<?php echo kama_thumb_src('w=100 &h=100', $offer['crb_offers_photo']); ?>" alt="">

                    <div class="offers__text">
                        <h3><?php echo $offer['crb_offers_item_title'.get_lang()]; ?></h3>
                        <p><?php echo $offer['crb_offers_item_text'.get_lang()]; ?></p>
                    </div>
                </div>
			<?php endforeach; ?>
        </div>
    </div>
</section>
<section class="section member dark"
         style="background-image: url('<?php echo get_template_directory_uri(); ?>/site/assets/i/members/members_bg.jpg')">
    <header class="section__header">
        <h2 class="section__title"><?php echo carbon_get_theme_option('crb_members_title'.get_lang()); ?></h2>
        <h4 class="section__subtitle"><?php echo carbon_get_theme_option('crb_members_text'.get_lang()); ?></h4>
    </header>
    <div class="container">
        <div class="member__content">
            <?php $members = carbon_get_theme_option('crb_members'); ?>
            <?php foreach($members as $member): ?>
                <div class="member__item">
                    <img src="<?php echo kama_thumb_src('w=120 &h=100', $member['crb_members_photo']); ?>" alt="">
                    <p class="member__text"><?php echo $member['crb_offers_item_title'.get_lang()]; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
        <a class="btn arrow" href="#"><?php echo carbon_get_theme_option('crb_members_button'.get_lang()); ?> →</a>
    </div>
</section>

<section class="section directions">
    <header class="section__header">
        <h2 class="section__title">Directiile de afaceri admise in cadru</h2>
        <h4 class="section__subtitle">A.O. Centrul de Informare și Documentare a Producătorilor</h4>
    </header>
    <div class="container">
        <div class="directions__content">
            <div class="directions__item"
                 style="background-image: url('<?php echo get_template_directory_uri(); ?>/site/assets/i/directions/1.jpg')">
                <div class="directions__center">
                    <h4>Agricultura</h4>
                    <picture>
                        <source type="image/webp"
                                srcset="<?php echo get_template_directory_uri(); ?>/site/assets/i/directions/1.webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/site/assets/i/directions/1.png" alt="">
                    </picture>
                </div>
            </div>
            <div class="directions__item"
                 style="background-image: url('<?php echo get_template_directory_uri(); ?>/site/assets/i/directions/2.jpg')">
                <div class="directions__center">
                    <h4>Zootehnie</h4>
                    <picture>
                        <source type="image/webp"
                                srcset="<?php echo get_template_directory_uri(); ?>/site/assets/i/directions/2.webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/site/assets/i/directions/2.png" alt="">
                    </picture>
                </div>
            </div>
            <div class="directions__item"
                 style="background-image: url('<?php echo get_template_directory_uri(); ?>/site/assets/i/directions/3.jpg')">
                <div class="directions__center">
                    <h4>Producere</h4>
                    <picture>
                        <source type="image/webp"
                                srcset="<?php echo get_template_directory_uri(); ?>/site/assets/i/directions/3.webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/site/assets/i/directions/3.png" alt="">
                    </picture>
                </div>
            </div>
            <div class="directions__item"
                 style="background-image: url('<?php echo get_template_directory_uri(); ?>/site/assets/i/directions/4.jpg')">
                <div class="directions__center">
                    <h4>Prestari servicii</h4>
                    <picture>
                        <source type="image/webp"
                                srcset="<?php echo get_template_directory_uri(); ?>/site/assets/i/directions/4.webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/site/assets/i/directions/4.png" alt="">
                    </picture>
                </div>
            </div>
            <div class="directions__item"
                 style="background-image: url('<?php echo get_template_directory_uri(); ?>/site/assets/i/directions/5.jpg')">
                <div class="directions__center">
                    <h4>Turism</h4>
                    <picture>
                        <source type="image/webp"
                                srcset="<?php echo get_template_directory_uri(); ?>/site/assets/i/directions/5.webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/site/assets/i/directions/5.png" alt="">
                    </picture>
                </div>
            </div>
        </div>
        <a class="btn arrow" href="#">Domenii de activitate admise →</a>
    </div>
</section>
<div class="idea">
    <div class="idea-slider" id="js-idea-slider">
        <div class="idea-slider__item"
             style="background-image: url('<?php echo get_template_directory_uri(); ?>/site/assets/i/idea/1.jpg')"></div>
        <div class="idea-slider__item"
             style="background-image: url('<?php echo get_template_directory_uri(); ?>/site/assets/i/idea/2.jpg')"></div>
        <div class="idea-slider__item"
             style="background-image: url('<?php echo get_template_directory_uri(); ?>/site/assets/i/idea/3.jpg')"></div>
    </div>
    <div class="idea__content">
        <h2>Idei de afaceri la cheie</h2>
        <p>Cele mai profitabile și accesibile idei pentru afacerea Dvs. 65% Finanțare nerambursabilă | Venit de la
            50.000€/an</p><a class="btn large" href="#">Detalii</a>
    </div>
</div>
<div class="partners">
    <div class="container">
        <h2>Partenerii nostrii:</h2>
        <div class="partners-slider-wrap">
            <div class="slider-arrow slider-arrow--left"><img
                        src="<?php echo get_template_directory_uri(); ?>/site/assets/i/svg/left-arrow.svg"></div>
            <div class="slider-arrow slider-arrow--right"><img
                        src="<?php echo get_template_directory_uri(); ?>/site/assets/i/svg/right-arrow.svg"></div>
            <div class="partners-slider" id="js-partners-slider">
                <div class="partners-slider__item">
                    <picture>
                        <source type="image/webp"
                                srcset="<?php echo get_template_directory_uri(); ?>/site/assets/i/partners/1.webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/site/assets/i/partners/1.jgp" alt="">
                    </picture>
                </div>
                <div class="partners-slider__item">
                    <picture>
                        <source type="image/webp"
                                srcset="<?php echo get_template_directory_uri(); ?>/site/assets/i/partners/2.webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/site/assets/i/partners/2.jgp" alt="">
                    </picture>
                </div>
                <div class="partners-slider__item">
                    <picture>
                        <source type="image/webp"
                                srcset="<?php echo get_template_directory_uri(); ?>/site/assets/i/partners/3.webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/site/assets/i/partners/3.jgp" alt="">
                    </picture>
                </div>
                <div class="partners-slider__item">
                    <picture>
                        <source type="image/webp"
                                srcset="<?php echo get_template_directory_uri(); ?>/site/assets/i/partners/1.webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/site/assets/i/partners/1.jgp" alt="">
                    </picture>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
