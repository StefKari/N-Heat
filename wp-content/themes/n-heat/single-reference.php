<?php get_header();?>
<!-- Banner Projects -->
<?php
$service_image = get_field('baner_slika');
$service_title = get_field('baner_naslov');
$service_text = get_field('baner_tekst');
?>
<section class="hero-banner" style="background-image: url('<?php echo $service_image['url']?>')">
    <!-- <div class="container">
        <div class="block-title animation-fade-in-left">
            <div>
                <h2><?php echo $service_title; ?></h2>
            </div>
        </div>
    </div> -->
</section>

<!-- End Banner Projects -->

    <!-- Project block -->
    <section class="project">
        <div class="container">
            <!--<div class="title-line"><span>LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT</span></div>-->
            <div class="block-title">
                <div>
                    <h1><?php the_title();?></h1>
                    <p><?php the_content();?></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Project block -->
   <!-- Section gallery -->
 <?php
    $images = get_field('galerija_image');
    if( $images ): ?>
    <section class="banner-section no-bottom-margin banner-slider gallery-slider">
        <div class="gallery">

            <div class="project-single-slider">
                    <?php foreach( $images as $image ): ?>
                        <div>
                            <a href="<?php echo esc_url($image['url']); ?>">
                                <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']);?>" />
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            <ul class="controls" id="customize-controls" aria-label="Carousel Navigation" tabindex="0">
                <li class="prev" data-controls="prev" aria-controls="customize" tabindex="-1">
                    <i class="fal fa-chevron-left"></i>
                </li>
                <li class="next" data-controls="next" aria-controls="tns1" tabindex="-1">
                    <i class="fal fa-chevron-right"></i>
                </li>
                <li class="slider-counter">
                    <span class="current-slide"></span>/<span class="total"></span>
                </li>
            </ul>

        </div>
    <?php endif; ?>
    </section>
    <!-- End Section gallery -->

<?php get_footer();?>