<?php

if (!defined('ABSPATH')) {
    exit;
}

if ($query->have_posts()) {
?>
    <div class="row">
        <?php
        while ($query->have_posts()) {
            $query->the_post();

        ?>
            <div class="col-md-4">
                <div class="item">

                    <?php
                    if (has_post_thumbnail()) { ?>
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                    <?php }
                    ?>
                    <h4><?php the_title(); ?></h4>
                    <?php $post_content = get_the_content(); ?>

                    <div class="cta-button">
                        <a class="btn-blue small" href="<?php the_permalink(); ?>">Više informacija</a>
                    </div>
                </div>
            </div>

        <?php
        }

        ?>
    </div>

<?php
} else {
    echo "<div class='no-result'>Trenutno nema proizvoda.</div> </div>
</div>";
}
?>


<div class="pagination">

    <?php
    /* example code for using the wp_pagenavi plugin */
    if (function_exists('wp_pagenavi')) {
        echo "<br />";
        wp_pagenavi(array('query' => $query));
    }
    ?>
</div>
</div>
</div>

