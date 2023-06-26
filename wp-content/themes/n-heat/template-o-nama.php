<?php /* Template Name: O nama */ ?>
<?php get_header(); ?>

<div class="usluge-wrapper o-nama-wrapper">
    <h1><?php the_title(); ?></h1>
    <div class="o-nama-grid">
        <div class="usluge-content">
            <?php the_content(); ?>
        </div>
        <div class="usluge-photo">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/o-nama.jpg'; ?>">
        </div>

    </div>

    <div class="usluge-kontakt">
        <a href="/kontakt/">Kontaktirajte nas</a>
    </div>
</div>





<?php get_footer(); ?>