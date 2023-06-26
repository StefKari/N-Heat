<?php /* Template Name: Standard Page */ ?>
<?php get_header(); ?>

<div class="standard-wrapper">
    <h1><?php the_title(); ?></h1>
    <div class="standard-grid">
        <?php if (have_rows('standard_page')) : ?>
            <?php while (have_rows('standard_page')) : the_row();

                // Get sub field values.
                $subTitle = get_sub_field('standard_title');
                $text = get_sub_field('standard_text');
                $image = get_sub_field('standard_image');

            ?>
                <div class="standard-photo">
                    <img src="<?php echo $image['url'] ?>">
                </div>
                <div class="standard-text">
                    <h3><?php echo $subTitle; ?></h3>
                    <?php echo $text; ?>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>
    </div>

    <div class="usluge-kontakt">
        <a href="/kontakt/">Kontaktirajte nas</a>
    </div>
</div>





<?php get_footer(); ?>