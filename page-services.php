<?php
/* Template Name: Page Service */
get_header();
?>

<?php if(have_posts()) : while(have_posts()): the_post(); ?>
  <main class="pageServices">

    <section class="intro-interna overlay">
      <div class="container">
        <?php get_template_part( 'template-parts/intro','interna'); ?>
      </div>
    </section>

    <section class="pageServices__cards">
      <div class="container">
        <?php get_template_part("template-parts/services/block","services"); ?>
      </div>
    </section>

    <section class="pageServices__porcents">
      <div class="container">
        <?php get_template_part("template-parts/services/block", "porcents"); ?>
      </div>
    </section>

    <section class="pageServices__price">
      <div class="container">
        <?php get_template_part("template-parts/services/block", "price"); ?>
      </div>
    </section>

    <section class="pageServices__clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="cliente">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/cliente1.png" alt="Logo Cliente 01">
                        <h3>Identity</h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cliente">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/cliente2.png" alt="Logo Cliente 02">
                        <h3>mounta</h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cliente">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/cliente3.png" alt="Logo Cliente 03">
                        <h3>globe</h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cliente">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/cliente4.png" alt="Logo Cliente 04">
                        <h3>circle</h3>
                    </div>
                </div>

            </div>
        </div>
    </section>

  </main>
<?php endwhile; else : endif; ?>

<?php get_footer(); ?>