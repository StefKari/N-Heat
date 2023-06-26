<?php /* Template Name: Kontakt */ ?>
<?php get_header(); ?>

<?php


if (have_rows('contact_info')) :
    while (have_rows('contact_info')) : the_row();
        $link = get_sub_field('link_ka_mapama');?>

        <div class="contact-map">
            <iframe src="<?= $link ?>" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><?php
    endwhile;
endif; ?>
<div class="conatct-wrapper">
    <div class="container">
        <?php if (have_rows('contact_info')) : ?>
            <?php while (have_rows('contact_info')) : the_row();

                // Get sub field values.
                $adresa = get_sub_field('adresa');
                $telefon = get_sub_field('telefon');
                $email = get_sub_field('email');

            ?>
                <div class="office">
                    <ul class="info-contact">
                        <li>
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/asset2.png'; ?>">
                            <a target="_blank" href="<?= $link; ?>"><?= $adresa; ?></a>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/asset1.png'; ?>">
                            <a href="tel:<?= $telefon ?>"><?= $telefon; ?></a>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/asset3.png'; ?>">
                            <a href="mailto:<?= $email ?>"><?= $email; ?></a>
                        </li>
                    </ul>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

        <div class="contact-form">
            <div class="contact-form-first-block">
                <h2>Kontaktirajte nas</h2>
                <p>Za sve dodatne informacije stojimo vam na raspolaganju. Sva pitanja možete postaviti direktno na sajtu kako biste odgovore i željene infromacije dobili u što kraćem roku.</p>
                <img src="<?php echo get_template_directory_uri() . '/assets/img/n-heat-logo.png'; ?>">
            </div>
            <div class="form">
                <?php echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
            </div>
        </div>
        <div class="world-image">
            <!-- <img src="<?php echo get_template_directory_uri() . '/assets/img/map.png'; ?>"> -->
        </div>
    </div>





    <?php get_footer(); ?>