<?php /* Template Name: Reference */?>

<?php get_header(); ?>

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
                <h1><?php echo $service_title; ?></h1>
            </div>
        </div>
    </div> -->
</section>

<!-- End Banner Projects -->

  <!-- Slajder projekti u izgradnji -->
    
    <section class="new-project">
        <div class="container">

            <!-- Projekti new  -->
            <?php 
              
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args=array(
                'post_type'=>'reference',
                'posts_per_page' => 5,
                'order' => 'DESC',
                'paged'=> $paged
            );
            $wp_query = new WP_Query($args); ?>

            <?php if ($wp_query->have_posts() ):?>

            <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                <div class="heading">
                    <h2><?php echo "Reference: ";?><?php the_title();?></h2>
                    <hr class="line">
                </div>
                <div class="project-holder">
                    <!-- slika projekta -->
                    <div class="item-photo">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('full', array('class' => 'imageOffer')); ?>
                        <?php else : ?>
                            <img src="/wp-content/uploads/2024/09/no-image.png" class="imageOffer" alt="No Image Available">
                        <?php endif; ?>
                    </div>
                    <!-- End slika projekta -->
        
                    <div class="item-desc">
                        <div class="project-description">
                            <!-- <h3><?php the_title(); ?></h3> -->
                            <p><?php echo get_post_char_limit(get_the_content(), 120); ?></p>
                        </div>
    
                            <a href="<?php echo get_permalink();?>" class="btn-reference-all">Pogledaj referencu</a>
                    </div>
                </div>
                <?php endwhile;  ?>

                <!-- Paginacija -->
                <div class="pagination">
                    <?php 
                        echo paginate_links( array(
                            'total' => $wp_query->max_num_pages,
                            'current' => $paged,
                            'prev_text' => __('&laquo; Prethodna'),
                            'next_text' => __('Sledeća &raquo;')
                        ) );
                  
                wp_reset_query();
                else : ?>
                <li><?php esc_html_e( 'Reference trenutno nisu dostupne.' ); ?></li>
            <?php endif; ?>
            
        </div>
    </section>
	<!-- End projekti u izgradnji -->

   
<?php get_footer();?>
