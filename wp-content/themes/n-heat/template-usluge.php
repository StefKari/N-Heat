<?php /* Template Name: Usluge */ ?>
<?php get_header(); ?>

<div class="usluge-wrapper">
    <div class="usluge-photo">
        <img src="<?php echo get_template_directory_uri() . '/assets/img/usluge.jpg'; ?>">
    </div>
    <div class="usluge-grid">
        <div class="usluge-grid-block">
            <h3>Projektovanje</h3>
            <img src="<?php echo get_template_directory_uri() . '/assets/img/montaza.png'; ?>">
        </div>
        <div class="usluge-grid-block">
            <h3>Izvođenje radova</h3>
            <img src="<?php echo get_template_directory_uri() . '/assets/img/servis.png'; ?>">
        </div>
        <div class="usluge-grid-block">
            <h3>Tehnička podrška</h3>
            <img src="<?php echo get_template_directory_uri() . '/assets/img/popravke.png'; ?>">
        </div>
    </div>
    <div class="usluge-content">
        <?php the_content(); ?>
    </div>
    <div class="usluge-kontakt">
        <a href="/kontakt/">Kontaktirajte nas</a>
    </div>
</div>





<?php get_footer(); ?>