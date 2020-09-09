<?php get_header(); ?>
    <?php if(have_posts() ) : while( have_posts() ) : the_post(); ?>
        <div class="container">
            <h1><?php the_title(); ?></h1>
            <p><?php the_content(); ?></p>
        </div>
    <?php endwhile; else : ?>
        <p><?php _e("Desculpe, nenhum post encontrado!"); ?></p>
    <?php endif; get_footer(); ?>