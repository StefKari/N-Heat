<?php
$img = get_field('footer_logo', 'option');
?>

<section class="footer section fp-auto-height">

    <div class="container">
        <div class="row">
            <div class="col-md-3 col-12">
                <div class="footer-logo">
                    <a class="logo-brand" href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php echo esc_url($img['url']); ?>" class="footer-img" alt="N-Heat logo">
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-6">
                <h3>Društvene mreže</h3>
                <div class="footer-social-menu">
                    <?php if (have_rows('footer_social_menu', 'option')) : while (have_rows('footer_social_menu', 'option')) : the_row(); ?>
                            <?php
                            $socialName = get_sub_field('footer_social_name', 'option');
                            $socialIcon = get_sub_field('footer_social_icon', 'option');
                            $socialUrl = get_sub_field('footer_social_url', 'option'); ?>

                            <a href="<?php echo $socialUrl ?>">
                                <img src="<?php echo esc_url($socialIcon['url']) ?>" alt="icon social N-Heat" style="color:green" />
                            </a>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>

            <div class="col-md-4 col-6">
                <h3>Kontakt</h3>
                <?php if (have_rows('footer_contact', 'option')) : while (have_rows('footer_contact', 'option')) : the_row(); ?>
                        <?php
                        $icon = get_sub_field('contact_icon', 'option');
                        $address = get_sub_field('contact_adress', 'option');
                        $telephone = trim(get_sub_field('contact_telephone', 'option'));
                        $email = trim(get_sub_field('contact_email', 'option')); ?>

                        <div class="contact-icon">
                            <img src="<?php echo esc_url($icon['url']) ?>" alt="icon contact N-Heat" />
                        </div>
                        <p class="address"><?php echo "Adresa: " . $address ?></p>
                        <p class="telephone"> <a href="tel:<?php echo $telephone ?>"> <?php echo "Broj telefona: " . $telephone ?></a>
                        <p class="telephone"><a href="mailto:<?php echo $email ?>"> <?php echo "Email: " . $email ?></a>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

    </div>
    </div>

</section>
<div class="footer-copyright">
    <div class="container">
        <p>
            All right reserved by: <span> <a href="#">N-Heat</a> </span> <?php echo date("Y");  ?>
        </p>
    </div>
</div>
</div>
<script src="<?php echo get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js' ?>"></script>
<script src="<?php echo get_template_directory_uri() . '/assets/js/bootstrap.js' ?>"></script>
<script src="<?php echo get_template_directory_uri() . '/assets/js/fullpage.extensions.min.js' ?>"></script>
<script src="<?php echo get_template_directory_uri() . '/assets/js/search-filter-build.min.js' ?>"></script>
<script src="<?php echo get_template_directory_uri() . '/assets/js/jquery.countup.min.js' ?>"></script>
<script src="<?php echo get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js' ?>"></script>
<script src="<?php echo get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js' ?>"></script>
<script src="<?php echo get_template_directory_uri() . '/assets/js/scrolloverflow.js' ?>"></script>
<script src="<?php echo get_template_directory_uri() . '/assets/js/fullpage.js' ?>"></script>
<script src="<?php echo get_template_directory_uri() . '/assets/js/bootstrap.bundle.js' ?>"></script>
<script src="<?php echo get_template_directory_uri() . '/assets/js/tiny-slider.js' ?>"></script>
<script src="<?php echo get_template_directory_uri() . '/assets/js/jquery.fancybox.js' ?>"></script>
<script src="<?php echo get_template_directory_uri() . '/assets/js/index.js' ?>"></script>
<script src="<?php echo get_template_directory_uri() . '/assets/js/main.js' ?>"></script>


<?php wp_footer(); ?>

</body>

</html>