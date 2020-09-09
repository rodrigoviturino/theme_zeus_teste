<?php
/* Template Name: Page About */
get_header();
?>
<?php if(have_posts() ) : while( have_posts() ) : the_post(); ?>

    <section class="intro-interna overlay">
        <div class="container">
            <?php get_template_part( 'template-parts/about/page', 'teste' ); ?>
        </div>
    </section>

<?php endwhile; else: endif; ?>

<?php get_footer(); ?>