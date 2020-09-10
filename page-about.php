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


</main>

<?php endwhile; else: endif; ?>

<?php get_footer(); ?>