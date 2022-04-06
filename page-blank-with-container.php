<?php
	/**
	 * Template Name: Blank with container
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package Widiyanata
	 */
	
	get_header();
	?>	
<div id="content" class="site-content container">
    <div id="primary" class="content-area">
        
        <main id="main" class="site-main">

            <div class="entry-content">
                <?php the_post(); ?>
                <?php the_content(); ?>
                <?php wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'widiyanata' ),
					'after'  => '</div>',
					) );
					?>
            </div>

        </main><!-- #main -->

    </div><!-- #primary -->
</div><!-- #content -->
<?php
get_footer();