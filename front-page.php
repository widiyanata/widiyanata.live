<?php

/**
 * Template Name: Frontpage New
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Widiyanata
 */

get_header();
?>
<div id="content" class="site-content container py-5 mt-4">
    <div id="primary" class="content-area">

        <main id="main" class="site-main">

            <!-- Header -->
            <div class="bootstore-header py-3 py-md-5 text-center">
                <h1 class="display-1"><?php bloginfo('name'); ?></h1>
                <p class="lead"><?php bloginfo('description'); ?></p>
            </div>

            <!-- Event -->
            <div id="events" class="">
                <div class="title-event">
                    <h3>EVENTS</h3>
                </div>
                <div class="row">
                    <div class="col-md-4 d-flex align-items-center">
                        <div class="meta-tgl p-3 m-3 border">
                            <img src="http://placehold.it/80" alt="">
                        </div>
                        <div class="event-text p-3">
                            <h3>Wisuda</h3>
                            <p>GSG Universitas Unila</p>
                            <small>30 Maret</small>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-center">
                        <div class="meta-tgl p-3 m-3 border">
                            <img src="http://placehold.it/80" alt="">
                        </div>
                        <div class="event-text p-3">
                            <h3>Wisuda</h3>
                            <p>GSG Universitas Unila</p>
                            <small>30 Maret</small>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-center">
                        <div class="meta-tgl p-3 m-3 border">
                            <img src="http://placehold.it/80" alt="">
                        </div>
                        <div class="event-text p-3">
                            <h3>Wisuda</h3>
                            <p>GSG Universitas Unila</p>
                            <small>30 Maret</small>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-center">
                        <div class="meta-tgl p-3 m-3 border">
                            <img src="http://placehold.it/80" alt="">
                        </div>
                        <div class="event-text p-3">
                            <h3>Wisuda</h3>
                            <p>GSG Universitas Unila</p>
                            <small>30 Maret</small>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Sticky Post -->
            <?php if (is_sticky() && is_home() && !is_paged()) : ?>
            <div class="row">
                <div class="col">
                    <?php
					$args = array(
					    'posts_per_page' => 2,
					    'post__in'  => get_option( 'sticky_posts' ),
					    'ignore_sticky_posts' => 2
					);
					$the_query = new WP_Query( $args );
					 if ( $the_query->have_posts() ) : 
					 while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="card horizontal mb-4">
                            <div class="row">
                                <!-- Featured Image-->
                                <?php if (has_post_thumbnail() )
								echo '<div class="card-img-left col-md-6 col-lg-4">' . get_the_post_thumbnail(null, 'medium') . '</div>';
								?>
                                <div class="col">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col-10">
                                                <?php widiyanata_category_badge(); ?>
                                            </div>
                                            <div class="col-2 text-end">
                                                <!-- Featured -->
                                                <div class="badge bg-danger"><span class=""><i class="fas fa-star"></i></i></span></div>
                                            </div>
                                        </div>
                                        <!-- Title -->
                                        <h2 class="blog-post-title">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_title(); ?>
                                            </a>
                                        </h2>
                                        <!-- Meta -->
                                        <?php if ( 'post' === get_post_type() ) : ?>
                                        <small class="text-secondary mb-2">
                                            <?php
										widiyanata_date();
										widiyanata_author();
										widiyanata_comments();
										widiyanata_edit();
										?>
                                        </small>
                                        <?php endif; ?>
                                        <!-- Excerpt & Read more -->
                                        <div class="card-text mt-auto">
                                            <?php the_excerpt(); ?> <a class="read-more" href="<?php the_permalink(); ?>"><?php _e('Read more »', 'widiyanata'); ?></a>
                                        </div>
                                        <!-- Tags -->
                                        <?php widiyanata_tags(); ?>
                                    </div>
                                </div>
                            </div>

                    </article>
                    <?php 
					endwhile; 
					endif;  
					 wp_reset_postdata();
					  ?>
                </div>
                <!-- col -->
            </div>
            <!-- row -->
            <?php endif; ?>
            <!-- Post List -->
            <?php
            $arg = array(
                'post_type'     =>  'post',
                'post_status'   =>  'publish',
                'orderby' => 'id',
                'order' => 'desc'
            );  
            $loop = new WP_Query($arg); 
            ?>
            <div class="row">
                <div class="col">
                    <!-- Grid Layout -->
                    <?php if ($loop->have_posts() ) : ?>
                    <?php while ($loop->have_posts() ) : $loop->the_post(); ?>
                    <?php if(is_sticky()) continue; //ignore sticky posts?>
                    <div class="card horizontal mb-4 p-3 shadow-sm border-0">
                        <div class="row">
                            <!-- Featured Image-->
                            <?php if (has_post_thumbnail() )
							echo '<div class="card-img-left-md col-lg-4">' . get_the_post_thumbnail(null, 'medium', array("class" => "rounded border")) . '</div>';
							?>
                            <div class="col">
                                <div class="card-body">
                                    <div class="mb-2">
                                        <?php widiyanata_category_badge(); ?>
                                    </div>
                                    <!-- Title -->
                                    <h2 class="blog-post-title">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h2>
                                    <!-- Meta -->
                                    <?php if ( 'post' === get_post_type() ) : ?>
                                    <small class="text-secondary mb-2">
                                        <?php
									widiyanata_date();
									widiyanata_author();
									widiyanata_comments();
									widiyanata_edit();
									?>
                                    </small>
                                    <?php endif; ?>
                                    <!-- Excerpt & Read more -->
                                    <div class="card-text mt-auto d-none">
                                        <?php the_excerpt(); ?> <a class="read-more" href="<?php the_permalink(); ?>"><?php _e('Read more »', 'widiyanata'); ?></a>
                                    </div>
                                    <!-- Tags -->
                                    <?php widiyanata_tags(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
    
                    <!-- Pagination -->
                    <div>
                        <?php widiyanata_pagination(); ?>
                    </div>
                    
                </div>
                <!-- col -->
                <?php get_sidebar(); ?>
            </div>
            <!-- row -->
        </main><!-- #main -->

    </div><!-- #primary -->
</div><!-- #content -->
<?php
get_footer();
