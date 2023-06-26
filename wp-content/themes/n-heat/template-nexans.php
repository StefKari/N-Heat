<?php /* Template Name: Nexans */ ?>
<?php get_header(); ?>

<div class="nexans-wrapper">

    <div class="section-nexans">
        <?php the_post_thumbnail(); ?>
        <p>
            <?php the_content(); ?>
        </p>
    </div>
</div>

<?php get_footer(); ?>