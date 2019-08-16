<?php
/**
 * Template Name: Преимущества
 */
get_header();

$post_id = 14;
$title_before = carbon_get_theme_option('crb_benefce_title_before'.get_lang());
$site_title = carbon_get_post_meta($post_id, 'crb_advantages_title'.get_lang());
$title_after = carbon_get_theme_option('crb_benefce_title_after'.get_lang());

?>


<section class="page-intro" style="background-image: url('<?php echo carbon_get_post_meta($post_id, 'crb_advantage_bg'); ?>')">
	<h1 class="section__title"><?php echo $site_title; ?></h1>
</section>
<section class="advantage__description"><?php echo $title_before; ?> <span class="accent"><?php echo carbon_get_theme_option('crb_site_title'); ?></span> <?php echo $title_after; ?></section>
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
		<p><?php echo $title_before; ?> <span class="accent"> <?php echo $site_title; ?> </span> <?php echo $title_after; ?></p>
        <a class="btn" href="#"><?php echo carbon_get_theme_option('crb_benefce_button'.get_lang()); ?></a>
	</div>
</section>
<?php get_footer(); ?>
