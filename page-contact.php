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

    <section>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.228032892344!2d-46.56387608502082!3d-23.632003284647812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5cd176d7e907%3A0xdf3a78a761fbbf05!2sAv.%20Para%C3%ADso%2C%201000%20-%20Osvaldo%20Cruz%2C%20S%C3%A3o%20Caetano%20do%20Sul%20-%20SP%2C%2009560-000!5e0!3m2!1spt-BR!2sbr!4v1599886066927!5m2!1spt-BR!2sbr" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </section>

        <section class="pageAbout__clients">
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