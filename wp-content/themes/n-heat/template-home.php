<?php /* Template Name: Home */ ?>
<?php get_header(); ?>

<div id="fullpage" class="fullpage-wrapper">
    <!-- Home slider -->
    <section class="banner-section fp-section">
        <div class="home-slider">
            <?php if (have_rows('slider_repeater')) : while (have_rows('slider_repeater')) : the_row(); ?>
                    <?php
                    $slide_image = get_sub_field('slider_image');
                    $slide_image_mob = get_sub_field('slider_img_mob');
                    $slide_title = get_sub_field('slider_title');
                    $slide_sub_title = get_sub_field('slider_description');
                    $slide_button = get_sub_field('slider_link');
                    ?>
                    <div class="slider-holder" style="background-image: url(<?php echo esc_url($slide_image['url']); ?>);" data-small-src="<?php echo esc_url($slide_image_mob['url']); ?>" data-lrg-src="<?php echo esc_url($slide_image['url']); ?>">
                        <div class="container">
                            <div class="banner-content">
                                <h1><?php echo $slide_title ?></h1>
                                <?php echo $slide_sub_title ?>
                                <?php if ($slide_button) { ?>
                                    <a href="<?php echo esc_url($slide_button['url']); ?>" class="button btn-blue"><?php echo $slide_button['title']; ?></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <!-- End loop. -->
                <?php endwhile;
                reset_rows(); ?>
                <!-- No value. -->
            <?php else : ?>
                <!-- Do something... -->
            <?php endif; ?>
        </div>
    </section>

    <!-- END Home slider -->

    <?php
    $block_image = get_field('block_image');
    $block_title = get_field('main_title');
    $block_description = get_field('short_description');
    $block_link = get_field('block_link');
    ?>
    <section class="fp-section video-block" id="section2">
        <?php $mp4 = get_field('mp4_video');
        $video_image = get_field('poster_image');
        if ($mp4) : ?>
            <video id="video" width="100%" height="auto" poster="<?php echo esc_url($video_image['url']); ?>" loop muted playsinline data-autoplay>
                <source id="video_src" src="<?php echo esc_attr($mp4['url']); ?>" type="video/mp4">
                <!-- <div class="content">
                    <div class="play"></div>
                    <h1></h1>
                    <p> </p>
                </div> -->
            </video>
        <?php endif; ?>
    </section>

    <!-- About block Home Page -->
    <section class="fp-section about-block" id="section3">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-left">
                        <div class="about-description">
                            <h2><?php echo $block_title ?></h2>
                            <?php echo $block_description ?>
                        </div>
                        <?php if ($block_link) { ?>
                            <a href="<?php echo esc_url($block_link['url']); ?>" class="button btn-blue"><?php echo $block_link['title']; ?></a>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-right">
                        <img src="<?php echo esc_url($block_image['url']); ?>;" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End about block Home Page -->


    <?php


    $product = array(
        'post_type'         => 'products',
        'posts_per_page'    => -1,
        'post_status'       => 'publish',
        'orderby'           => 'date',
        'order'             => 'DESC',
    );

    $products = new WP_Query($product);
    ?>
    <section class="product-block fp-section">
        <div class="container fp-bg">
            <div class="text-line">
                <div class="text-title"></div>
                <div class="divider"></div>
            </div>
            <div class="block-content">
                <div class="block-title">
                    <h3>Izdvajamo iz ponude</h3>
                </div>
                <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
            </div>

            <?php
            $featured_posts = get_field('izdvajamo_iz_ponude');
            if ($featured_posts) : ?>
                <div class="product-slider">
                    <?php foreach ($featured_posts as $post) :

                        // Setup this post for WP functions (variable must be named $post).
                        setup_postdata($post); ?>
                        <div class="col-6">
                            <div class="product-post">
                                <div class="post-item">
                                    <a href="<?php the_permalink(); ?>" rel="bookmark"> <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="image" class=" zoom-in"></a>
                                </div>
                                <div class="post-content">
                                    <p>
                                        <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                                    </p>

                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <?php
                // Reset the global post object so that the rest of the page works correctly.
                wp_reset_postdata(); ?>
            <?php endif; ?>


        </div>
    </section>


    <?php get_footer(); ?>