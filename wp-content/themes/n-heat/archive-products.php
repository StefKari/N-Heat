<?php
/* Template Name: Archiveee */
get_header();


//  die('usao');
?>
<div class="container main-blog" style="padding-top: 200px;">
    <div class="row">
        <div class="col-md-4">
            <?php //echo do_shortcode('[searchandfilter id="171"]'); 
            ?>
            <?php echo do_shortcode('[searchandfilter id="94"]'); ?>
        </div>
        <div class="col-md-8">
            <?php //echo do_shortcode('[searchandfilter id="171" show="results"]'); 
            ?>
            <?php echo do_shortcode('[searchandfilter id="94" show="results"]'); ?>
        </div>


    <?php
    get_footer();

?>