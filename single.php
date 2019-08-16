<?php
get_header();
$category = wp_get_post_categories(get_the_ID());
?>

    <section class="page-intro"
             style="background-image: url('<?php echo carbon_get_term_meta($category[0], 'crb_intro_single_bg'); ?>')">
        <h1 class="section__title"><?php the_title(); ?></h1>
    </section>
    <div class="news__item single">
        <div class="news__block">
            <header class="news__item-header"><img class="news__small-logo"
                                                   src="<?php echo get_template_directory_uri() ?>/site/assets/i/icons/small-logo.png"
                                                   alt="">
                <div class="news__item-data">
                    <h6 class="news__item-title">Prodinfo ONG</h6>
                    <img class="news__crown"
                         src="<?php echo get_template_directory_uri() ?>/site/assets/i/icons/crown.svg" alt=""
                         title="admin">
                    <div class="news__item-time"><span
                                class="news__item-date"><?php echo get_the_date('d M Y'); ?></span> <span>2 min</span>
                    </div>
                </div>
            </header>

			<?php if (have_posts()): ?>
				<?php the_post(); ?>
                <div class="news__item-text">
					<?php the_content(); ?>
                </div>

			<?php else: ?>
			<?php endif; ?>

            <div class="socials">
                <div class="socials__links"><a
                            href="<?php echo carbon_get_theme_option('crb_facebook'); ?>"><i
                                class="fab fa-facebook-f"></i></a><a
                            href="<?php echo carbon_get_theme_option('crb_twitter'); ?>"><i
                                class="fab fa-twitter"></i></a><a
                            href="<?php echo carbon_get_theme_option('crb_linkedin'); ?>"><i
                                class="fab fa-linkedin-in"></i></a><a id="js-show-address-string" href="#"><i
                                class="fas fa-link"></i></a></div>
                <div class="socials__category"><?php echo esc_html__('News', 'bs-prodinfo')
					?></div>
            </div>

            <div class="modal-link" id="js-modal-link">
                <header class="modal-link__header"><i
                            class="fas fa-link"></i><span><?php echo esc_html__('Keep link', 'bs-prodinfo')
						?></span></header>
                <textarea class="modal-link__content"></textarea>
                <div class="modal-link__buttons">
                    <button class="modal-link-close"><?php echo esc_html__('Clear', 'bs-prodinfo')
						?></button>
                    <button class="modal-link-copy"><?php echo esc_html__('Copy link', 'bs-prodinfo')
						?></button>
                </div>
            </div>
            <footer class="news__item-footer"><span class="news__show">13 <?php echo esc_html__( 'Write a comment', 'bs-prodinfo' )
             ?></span>
                <a class="news__comment-link" href="#">
                    <?php echo esc_html__( 'Write a comment', 'bs-prodinfo' ); ?>
                </a><span class="news__like"><span class="news__like-number"></span> <svg
                            xmlns="http://www.w3.org/2000/svg" width="19" viewBox="0 0 19 19" role="img"><path
                                d="M9.44985848,15.5291774 C9.43911371,15.5362849 9.42782916,15.5449227 9.41715267,15.5553324 L9.44985848,15.5291774 Z M9.44985848,15.5291774 L9.49370677,15.4941118 C9.15422701,15.7147757 10.2318883,15.0314406 10.7297038,14.6971183 C11.5633567,14.1372547 12.3827081,13.5410755 13.1475707,12.9201001 C14.3829188,11.9171478 15.3570936,10.9445466 15.9707237,10.0482572 C16.0768097,9.89330422 16.1713564,9.74160032 16.2509104,9.59910798 C17.0201658,8.17755699 17.2088969,6.78363112 16.7499013,5.65913129 C16.4604017,4.81092573 15.7231445,4.11008901 14.7401472,3.70936139 C13.1379564,3.11266008 11.0475663,3.84092251 9.89976068,5.36430396 L9.50799408,5.8842613 L9.10670536,5.37161711 C7.94954806,3.89335486 6.00516066,3.14638251 4.31830373,3.71958508 C3.36517186,4.00646284 2.65439601,4.72068063 2.23964629,5.77358234 C1.79050315,6.87166888 1.98214559,8.26476279 2.74015555,9.58185512 C2.94777753,9.93163559 3.23221417,10.3090129 3.5869453,10.7089994 C4.17752179,11.3749196 4.94653811,12.0862394 5.85617417,12.8273544 C7.11233096,13.8507929 9.65858244,15.6292133 9.58280954,15.555334 C9.53938013,15.5129899 9.48608859,15.5 9.50042471,15.5 C9.5105974,15.5 9.48275828,15.5074148 9.44985848,15.5291774 Z"></path></svg></span>
            </footer>
        </div>
    </div>
    <section class="last-posts">
        <header class="last-posts__header">
            <h4 class="last-posts__title"><?php echo esc_html__( 'Last Posts', 'bs-prodinfo' )
             ?></h4><a class="last-posts__link" href="#"><?php echo esc_html__( 'Show all', 'bs-prodinfo' )
              ?></a>
        </header>
        <div class="last-posts-content">
            <?php
               $last_posts = new WP_Query([
				   'posts_per_page' => 3,
                   'category_name' => 'news'
               ]);
            ?>
            <?php if($last_posts->have_posts()): ?>
                <?php while($last_posts->have_posts()): ?>
                    <?php $last_posts->the_post(); ?>
                    <div class="last-posts__item">
                        <?php the_post_thumbnail('full'); ?>
                        <div class="last-posts__text">
                            <h3><?php the_title(); ?></h3>
                            <footer class="news__item-footer">
                                <span class="news__show"><i class="fas fa-eye"></i> 13</span>
                                <a class="news__comment-link" href="#"><?php echo esc_html__( 'Write a comment', 'bs-prodinfo' )
                                 ?></a>
                                <span class="news__like"><span class="news__like-number"></span>
                                    <svg
                                            xmlns="http://www.w3.org/2000/svg" width="19" viewBox="0 0 19 19" role="img"><path
                                                d="M9.44985848,15.5291774 C9.43911371,15.5362849 9.42782916,15.5449227 9.41715267,15.5553324 L9.44985848,15.5291774 Z M9.44985848,15.5291774 L9.49370677,15.4941118 C9.15422701,15.7147757 10.2318883,15.0314406 10.7297038,14.6971183 C11.5633567,14.1372547 12.3827081,13.5410755 13.1475707,12.9201001 C14.3829188,11.9171478 15.3570936,10.9445466 15.9707237,10.0482572 C16.0768097,9.89330422 16.1713564,9.74160032 16.2509104,9.59910798 C17.0201658,8.17755699 17.2088969,6.78363112 16.7499013,5.65913129 C16.4604017,4.81092573 15.7231445,4.11008901 14.7401472,3.70936139 C13.1379564,3.11266008 11.0475663,3.84092251 9.89976068,5.36430396 L9.50799408,5.8842613 L9.10670536,5.37161711 C7.94954806,3.89335486 6.00516066,3.14638251 4.31830373,3.71958508 C3.36517186,4.00646284 2.65439601,4.72068063 2.23964629,5.77358234 C1.79050315,6.87166888 1.98214559,8.26476279 2.74015555,9.58185512 C2.94777753,9.93163559 3.23221417,10.3090129 3.5869453,10.7089994 C4.17752179,11.3749196 4.94653811,12.0862394 5.85617417,12.8273544 C7.11233096,13.8507929 9.65858244,15.6292133 9.58280954,15.555334 C9.53938013,15.5129899 9.48608859,15.5 9.50042471,15.5 C9.5105974,15.5 9.48275828,15.5074148 9.44985848,15.5291774 Z"></path></svg></span>
                            </footer>
                        </div>
                    </div>

                <?php endwhile; ?>
                <?php else: ?>
            <?php endif; ?>

        </div>
    </section>
    <div class="register">
        <p><a href="#"><?php echo esc_html__( 'Connect', 'bs-prodinfo' )
         ?> </a> <?php echo esc_html__( 'To show a comment', 'bs-prodinfo' )
          ?></p>
    </div>

<?php
get_footer();
