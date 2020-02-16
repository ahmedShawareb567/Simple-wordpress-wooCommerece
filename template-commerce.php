<?php
/*
Template Name: template Page
*/
?>
<?php get_header();?>
<section class="checkoutAndCart">
    <div class="container">
    <?php the_title();?>
        <div class="row">
            <div class="col-12">
                <?php if(have_posts()): while(have_posts()): the_post();?>
                <?php the_content();?>
                <?php endwhile; else: endif;?>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>