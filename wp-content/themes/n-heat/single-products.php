<?php get_header(); ?>
<div class="product-single">
    <div class="container">
        <div class="product-tax">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php $the_post_id = get_the_ID();
                    $product_terms = wp_get_post_terms($the_post_id, ['brendovi']);
                    foreach ($product_terms as $product_term) : ?>
                        <a href="<?php echo esc_url(get_term_link($product_term)) ?>">
                            <?php echo esc_html($product_term->name) ?>
                        </a> <span>>></span>
                    <?php endforeach; ?>
                    <p><?php the_title() ?></p>
        </div>
        <div class="product-wrapper">
            <div class="row">
                <div class="col-md-6">
                    <div class="product-gallery">
                        <?php
                        // *Repeater
                        // carousel_repeater
                        // *Sub-Fields
                        // carousel_image
                        // carousel_text
                        // check if the repeater field has rows of data
                        if (have_rows('carousel_repeater')) :
                            echo     '<div id="carouselExamplethumbs" class="carousel slide" data-ride="carousel">
	                        <div class="carousel-inner">';
                            // loop through the rows of data for the tab header
                            $i = 0; // Set the increment variable
                            while (have_rows('carousel_repeater')) : the_row();
                                $image = get_sub_field('carousel_image');
                                $text = get_sub_field('carousel_text');
                        ?>
                                <div class="carousel-item <?php if ($i == 0) echo 'active'; ?>">
                                    <a class="fancybox" href="<?php echo esc_url($image['url']); ?>" data-fancybox="galerija">
                                        <img class="d-block w-100" src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
                                    </a>

                                    <div class="carousel-caption d-block">
                                        <?php echo $text; ?>
                                    </div>
                                </div>
                            <?php $i++; // Increment the increment variable
                            endwhile; //End the loop
                            echo '</div>';
                            $i = 0; // Set the increment variable
                            echo '<ol class="carousel-indicators position-relative">';
                            // loop through the rows of data for the tab header
                            while (have_rows('carousel_repeater')) : the_row();
                                $image = get_sub_field('carousel_image');
                                $text = get_sub_field('carousel_text');
                            ?>
                                <li class="w-50 h-auto" style="text-indent:0" data-target="#carouselExamplethumbs" data-slide-to="<?php echo $i; ?>" class="<?php if ($i == 0) echo 'active'; ?>"><img class="w-100" src="<?php echo $image['url']; ?>" /></li>
                        <?php $i++; // Increment the increment variable
                            endwhile; //End the loop
                            echo '</ol>';
                            echo '<a class="carousel-control-prev" href="#carouselExamplethumbs" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                      </a>
                                      <a class="carousel-control-next" href="#carouselExamplethumbs" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                      </a>
                                </div>';
                        else :
                        // no rows found
                        endif; ?>
                    <?php endwhile;
                wp_reset_postdata();
            else : ?>
                    <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
                <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-content">
                        <?php
                        $product_title = get_field('product_title');
                        $product_sku = get_field('product_sku');
                        $product_description = get_field('product_description'); ?>
                        <h1><?php echo $product_title; ?></h1>
                        <?php if (!empty($product_sku)) : ?>
                            <h3><?php echo $product_sku; ?></h3>
                        <?php endif; ?>
                        <div class="product-description">
                            <?php echo $product_description; ?>
                        </div>
                        <?php if (have_rows('add_characteristic')) :
                            // loop through the rows of data for the tab header
                            while (have_rows('add_characteristic')) : the_row();
                                $icon_characteristic = get_sub_field('icon_characteristic');
                                $name_characteristic = get_sub_field('name_characteristic');
                                $value_characteristic = get_sub_field('value_characteristic');
                        ?>
                                <div class="product-characteristic">
                                    <div class="icon">
                                        <?php if ($icon_characteristic) : ?>
                                            <img src="<?php echo $icon_characteristic['url'] ?>" alt="<?php echo $icon_characteristic['title']; ?>">
                                        <?php endif; ?>
                                    </div>
                                    <div class="product-value">
                                        <p><?php echo $name_characteristic; ?></p>
                                        <p><?php echo $value_characteristic; ?></p>
                                    </div>
                                </div>
                        <?php endwhile;
                        endif; ?>
                    </div>

                    <div class="product-alert">
                        <div id="root">
                            <button id="n-heat-modal-opener">Upit za proizvod</button>
                        </div>
                        <div id="n-heat-modal-root">
                            <div class="n-heat-modal">
                                <h3>Upit za proizvod</h3>
                                <?php echo do_shortcode('[gravityform id="2" title="false" description="false"]'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

    </div>
    <nav class="single-accordion">
        <div class="container">
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <?php if (get_field('specification_tab')) : ?>
                    <button class="nav-item nav-link active" id="nav-profile-tab" data-toggle="tab" href="#nav-associate" role="tab" aria-controls="nav-profile" aria-selected="false">Specifikacije</button>
                <?php endif; ?>
                <?php if (get_field('description_tab')) : ?>
                    <button class="nav-item nav-link " id="nav-home-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-home" aria-selected="true">Opis</button>
                <?php endif; ?>

            </div>
        </div>

    </nav>
    <div class="tab-content" id="dvtabcontent">
        <div class="tab-pane fade  " id="nav-contact" role="tabpanel" aria- labelledby="nav-contact-tab">
            <div class="container"><?php the_field('description_tab') ?></div>
        </div>
        <div class="tab-pane fade show active" id="nav-associate" role="tabpanel" aria- labelledby="nav-associate-tab">
            <div class="container"><?php the_field('specification_tab') ?></div>
        </div>
    </div>
</div>

<script>
    //     window.addEventListener('load', setup);

    // const get = document.getElementById.bind(document);
    // const query = document.querySelector.bind(document);

    // function setup() {

    //     let modalRoot = get('n-heat-modal-root');
    //     let button = get('n-heat-modal-opener');
    //     let modal = query('.n-heat-modal');

    //     modalRoot.addEventListener('click', rootClick);
    //     button.addEventListener('click', openModal);

    //     function rootClick(e) {
    //         if (e.target.id == "n-heat-modal-root") {
    //             modalRoot.classList.remove('visible');
    //         }
    //     }

    //     function openModal() {
    //         modalRoot.classList.add('visible');
    //     }
    // }
</script>
<?php get_footer(); ?>