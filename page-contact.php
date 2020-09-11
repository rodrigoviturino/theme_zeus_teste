<?php
/* Template Name: Page Contact */
get_header();
?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

  <main class="pageContact">

    <section class="intro-interna overlay">
      <div class="container">
        <?php get_template_part( 'template-parts/intro','interna'); ?>
      </div>
    </section>

    <section class="pageContact__form">
      <div class="container">
        <?php get_template_part("template-parts/contact/block", "form"); ?>
      </div>
    </section>

  </main>

<?php endwhile; else : endif; ?>

<?php get_footer(); ?>