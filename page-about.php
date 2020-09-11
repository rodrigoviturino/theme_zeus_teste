<?php
/* Template Name: Page About us*/
get_header();
?>
<?php if(have_posts() ) : while( have_posts() ) : the_post(); ?>
<main class="pageAbout">

    <section class="pageAbout__intro-interna overlay">
        <div class="container">
            <?php get_template_part( 'template-parts/about/page', 'teste' ); ?>
        </div>
    </section>

    <section class="pageAbout__about">
        <div class="container">
            <?php get_template_part( 'template-parts/home/page', 'about' ); ?>

            <div class="row mt-80">
               <div class="col-md-6">
                   <p>Donec mollis purus auctor egestas vestibulum. Ut ut pellentesque quam. Curabitur sed tempor augue. Etiam finibus lectus tempor nisi aliquet, at ultricies felis mollis. Aenean porta metus et sapien posuere, eget efficitur elit dapibus. Duis placerat vitae odio at cursus. Phasellus tempus a dui quis lacinia. Ut eget tellus urna. Pellentesque tincidunt tortor quis leo tincidunt lobortis. Pellentesque ac velit congue, scelerisque velit at, dapibus enim. </p>
                   <p>Donec mollis purus auctor egestas vestibulum. Ut ut pellentesque quam. Curabitur sed tempor augue. Etiam finibus lectus tempor nisi aliquet, at ultricies felis mollis. Aenean porta metus et sapien posuere, eget efficitur elit dapibus. Duis placerat vitae odio at cursus. Phasellus tempus a dui quis lacinia. Ut eget tellus urna. Pellentesque tincidunt tortor quis leo tincidunt lobortis. Pellentesque ac velit congue, scelerisque velit at, dapibus enim. </p>
               </div>

               <div class="col-md-6">
                   <div class="abt-img overlay">
                        <img src="<?= get_template_directory_uri(); ?> /assets/images/img-about.jpg" class="img-fluid">
                   </div>
               </div>
            </div>
        </div>
    </section>

    <section class="differentials overlay">
        <div class="container">
            <?php get_template_part( 'template-parts/home/page', 'differentials' ); ?>
        </div>
    </section>

    <section class="pageAbout__porcents">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2>21%</h2>
                    <span>charges dropped</span>
                </div>

                <div class="col-md-3">
                    <h2>82%</h2>
                    <span>countersuit filed</span>
                </div>

                <div class="col-md-3">
                    <h2>57%</h2>
                    <span>cases dismissed</span>
                </div>

                <div class="col-md-3">
                    <h2>77%</h2>
                    <span>cases won</span>
                </div>

            </div>
        </div>
    </section>

    <section class="newsletter overlay">
        <div class="container">
            <?php get_template_part( 'template-parts/home/page', 'newsletter' ); ?>
        </div>
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

<?php endwhile; else: endif; ?>

<?php get_footer(); ?>