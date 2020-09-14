<?php
/** Template Name: Page News */
  get_header(); 
?>

    <section class="pageAbout__intro-interna overlay">
        <div class="container">
            <?php get_template_part( 'template-parts/about/page', 'teste' ); ?>
        </div>
    </section>

    <section class="pageNews__pageContent">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <?php get_template_part("template-parts/news/page", "destaque-topo"); ?>
                </div>
                <div class="col-xl-4">
                    <?php get_template_part("template-parts/news/page", "sidebar"); ?>
                </div>
            </div>
        </div>
    </section>

<?php  get_footer(); ?>