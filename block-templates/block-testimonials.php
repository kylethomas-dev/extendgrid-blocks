<?php
/**
 * Block Name: Testimonials
 *
 * This is the template that displays the testimonials loop block.
 */

$argType = get_field( 'loop_argument_type' );
if( $argType == "Count" ) :
  $args = array(
    'orderby' => 'title',
    'post_type' => 'testimonial',
    'posts_per_page' => get_field( 'testimonial_count' )
  );
else:
  $testimonials = get_field( 'select_testimonials' );
  $args = array(
    'orderby' => 'title',
    'post_type' => 'testimonial',
    'post__in' => $testimonials
  );
endif;

$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>

<!-- Layout -->
<?php if( get_field('testimonials_select_layout') == 'Single Column' ): ?>
<!-- Rows -->
<?php if( get_field('testimonials_select_layout_type') == 'Rows' ): ?>

<?php if( get_field('testimonials_background_type') == 'Image' ): ?>
<section style="background-image: url('<?php the_field( 'testimonials_background_image' ); ?>'); color:<?php the_field( 'testimonials_font_colour' ); ?>" class="section-testimonial" id="heroBanner">
    <?php endif; ?>
    <?php if( get_field('testimonials_background_type') == 'Colour' ): ?>
    <section style="background-color: <?php the_field( 'testimonials_background_colour' ); ?>; color:<?php the_field( 'testimonials_font_colour' ); ?>" class="section-testimonial" id="heroBanner">
        <?php endif; ?>

        <div class="text-center">

            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-uppercase font-700 font-italic">
                        <?php echo get_field( 'testimonial_section_header' ); ?>
                    </h2>
                </div>
            </div>

            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?php echo get_field( 'testimonial_content', get_the_ID() ); ?>
                    </p>
                    <p class="text-bold font-italic">
                        <?php echo get_field( 'testimonial_full_name', get_the_ID() ); ?>
                        <?php echo get_field( 'testimonial_date', get_the_ID() ); ?>
                    </p>
                    <?php $testimonial_featured_image = get_field( 'testimonial_featured_image', get_the_ID() ); ?>
                    <?php if ( $testimonial_featured_image ) { ?>
                    <img class="testimonial-fi" src="<?php echo $testimonial_featured_image['url']; ?>" alt="<?php echo $testimonial_featured_image['alt']; ?>" />
                    <?php } ?>
                </div>
            </div>

            <?php endwhile; ?>

        </div>
    </section>

    <?php endif; ?>
    <!-- /Rows -->

    <!-- Slider -->
    <?php if( get_field('testimonials_select_layout_type') == 'Slider' ): ?>

    <?php if( get_field('testimonials_background_type') == 'Image' ): ?>
    <section style="background-image: url('<?php the_field( 'testimonials_background_image' ); ?>'); color:<?php the_field( 'testimonials_font_colour' ); ?>" class="section-testimonial" id="heroBanner">
        <?php endif; ?>
        <?php if( get_field('testimonials_background_type') == 'Colour' ): ?>
        <section style="background-color: <?php the_field( 'testimonials_background_colour' ); ?>; color:<?php the_field( 'testimonials_font_colour' ); ?>" class="section-testimonial" id="heroBanner">
            <?php endif; ?>

            <div class="text-center">

                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-uppercase font-700 font-italic">
                            <?php echo get_field( 'testimonial_section_header' ); ?>
                        </h2>
                    </div>
                </div>

                <?php $count=0; ?>

                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">

                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                        <?php $testid = uniqid(); ?>

                        <div class="carousel-item<?php if($count==0){echo ' active';} ?>" data-slide-number="<?php echo $testid; ?>">

                            <p>
                                <?php echo get_field( 'testimonial_content', get_the_ID() ); ?>
                            </p>
                            <p class="text-bold font-italic">
                                <?php echo get_field( 'testimonial_full_name', get_the_ID() ); ?>
                                <?php echo get_field( 'testimonial_date', get_the_ID() ); ?>
                            </p>
                            <?php $testimonial_featured_image = get_field( 'testimonial_featured_image', get_the_ID() ); ?>
                            <?php if ( $testimonial_featured_image ) { ?>
                            <img class="testimonial-fi" src="<?php echo $testimonial_featured_image['url']; ?>" alt="<?php echo $testimonial_featured_image['alt']; ?>" />
                            <?php } ?>

                        </div>

                        <?php
                $count++;
                endwhile; ?>

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
        </section>

        <?php endif; ?>
        <!-- /Slider -->

        <?php endif; ?>
        <!-- /Layout -->

        <!-- Layout -->
        <?php if( get_field('testimonials_select_layout') == 'Two Columns' ): ?>

        <?php if( get_field('testimonials_background_type') == 'Image' ): ?>
        <section style="background-image: url('<?php the_field( 'testimonials_background_image' ); ?>'); color:<?php the_field( 'testimonials_font_colour' ); ?>" class="section-testimonial" id="heroBanner">
            <?php endif; ?>
            <?php if( get_field('testimonials_background_type') == 'Colour' ): ?>
            <section style="background-color: <?php the_field( 'testimonials_background_colour' ); ?>; color:<?php the_field( 'testimonials_font_colour' ); ?>" class="section-testimonial" id="heroBanner">
                <?php endif; ?>

                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-uppercase font-700 font-italic text-center pb-4">
                                <?php echo get_field( 'testimonial_section_header' ); ?>
                            </h2>
                        </div>
                    </div>

                    <div class="row">

                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                        <div class="col-md-6">
                            <div class="card testimonial-card rounded-0">
                                <div class="card-body font-300">
                                    <p>
                                        <?php echo get_field( 'testimonial_content', get_the_ID() ); ?>
                                    </p>
                                </div>
                            </div>

                            <?php $testimonial_featured_image = get_field( 'testimonial_featured_image', get_the_ID() ); ?>
                            <?php if ( $testimonial_featured_image ) { ?>
                            <img class="testimonial-fi pt-2 pb-2" src="<?php echo $testimonial_featured_image['url']; ?>" alt="<?php echo $testimonial_featured_image['alt']; ?>" />
                            <?php } ?>
                            <p class="text-bold font-italic">
                                <?php echo get_field( 'testimonial_full_name', get_the_ID() ); ?>
                                <?php echo get_field( 'testimonial_date', get_the_ID() ); ?>
                            </p>
                        </div>

                        <?php endwhile; ?>

                    </div>

            </section>

            <?php endif; ?>
            <!-- /Layout -->

            <?php endif; ?>
