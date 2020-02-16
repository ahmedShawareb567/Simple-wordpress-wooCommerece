<?php get_header();?>
<section class="productsSec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <?php
		$args = array(
			'pagename' => 'shop',
			'posts_per_page' => 8
			);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) {
			while ( $loop->have_posts() ) : $loop->the_post();?>
        
            <?php the_content();?>
			<?php endwhile;
		} else {
			echo __( 'No products found' );
		}
		wp_reset_postdata();
	?>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>