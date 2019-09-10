<?php
/**
 * Block Name: Progress Bar
 *
 * This is the template that displays the testimonials loop block.
 */

  $args = array(
    'orderby' => 'title',
    'posts_per_page' => '-1',
  );

$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>

<section class="pt-3 pb-3">
    <div class="container">

        <div class="row">
            <div class="col-md-12">

                <div class="progress <?php if( get_field('bar_radius') == 'Square' ): ?>rounded-0<?php endif; ?>" style="background-color:<?php the_field( 'bar_background' ); ?>; height:<?php the_field('bar_height'); ?>px">
                    <div class="progress-bar <?php if ( get_field( 'bar_striped' ) == 1 ) { ?>progress-bar-striped<?php } ?> <?php if ( get_field( 'bar_animated' ) == 1 ) { ?>progress-bar-animated<?php } ?>" role="progressbar" style="background-color:<?php the_field( 'bar_colour' ); ?>; width:<?php the_field( 'bar_progress' ); ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <?php if ( get_field( 'bar_show_percentage' ) == 1 ) { ?>
                        <?php the_field( 'bar_progress' ); ?>%
                        <?php } else {  } ?>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

<?php endif; ?>
