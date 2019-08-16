<?php
/**
 * Template Name: Преимущества
 */
get_header(); ?>

<section class="page-intro" style="background-image: url('../../assets/i/advantages/advantages_bg.jpg')">
	<h1 class="section__title">Care sun avantajele membrilor?</h1>
</section>
<section class="advantage__description">Fii Membru al <span class="accent">AO Centrul de Informare și Documentare a Producătorilor</span> și beneficiază de AVANTAJE</section>
<div class="advantage-content">
    <?php
        $advantages = new WP_Query([
            'post_type' => 'advantage',
            'posts_per_page' => -1
        ]);
    ?>
    <?php if($advantages->have_posts()): ?>
        <?php $i = 1; while($advantages->have_posts()): ?>
            <?php $advantages->the_post(); ?>
            <?php
                $section_class = '';
                if($i % 2 === 0){
                   $section_class = 'reverse';
                }else {
                    $section_class = 'dark';
                }
            ?>

            <section class="advantage__item <?php echo $section_class;?>">
                <h2 class="section__title"><?php the_title(); ?></h2>
                <div class="advantage__block">
                    <div class="advantage__img">
                        <?php the_post_thumbnail('full'); ?>
                    </div>
                    <div class="advantage__text">
                        <?php the_content(); ?>
                    </div>
                </div>
            </section>

        <?php $i++; endwhile; ?>
        <?php else: ?>
    <?php endif; ?>

</div>
<section class="benefice">
	<div class="benefice__content">
		<p>Fii Membru al <span class="accent"> AO Centrul de Informare și Documentare a Producătorilor </span> și beneficiază de AVANTAJE</p><a class="btn" href="#">Beneficiaza de avantaje</a>
	</div>
</section>
<?php get_footer(); ?>
