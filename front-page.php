<?php get_header(); ?>

<?php if( have_posts()) : while( have_posts()) : the_post();  ?>
    <section class="introducao overlay">
        <div class="container">
            <?php get_template_part( 'template-parts/home/page', 'intro' ); ?>
        </div>
    </section>

    <section class="about">
        <div class="container">
            <?php get_template_part( 'template-parts/home/page', 'about' ); ?>
        </div>
    </section>

    <section class="differentials overlay">
        <div class="container">
            <?php get_template_part( 'template-parts/home/page', 'differentials' ); ?>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <?php get_template_part( 'template-parts/home/page', 'services' ); ?>
        </div>
    </section>

    <section class="newsletter overlay">
        <div class="container">
            <?php get_template_part( 'template-parts/home/page', 'newsletter' ); ?>
        </div>
    </section>

    <section class="lawyers">
        <div class="container">
            <?php get_template_part( 'template-parts/home/page', 'lawyers' ); ?>
        </div>
    </section>

    <section class="testimony">
        <div class="container">
            <?php get_template_part( 'template-parts/home/page', 'testimony' ); ?>
        </div>
    </section>

    <section class="news">
        <div class="container">
            <?php get_template_part( 'template-parts/home/page', 'news' ); ?>
        </div>
    </section>

<?php endwhile; else: endif; ?>
<?php get_footer(); ?>
