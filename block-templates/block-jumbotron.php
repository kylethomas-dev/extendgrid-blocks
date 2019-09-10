<?php
/**
 * Block Name: Jumbotron
 *
 * This is the template that displays the jumbotron loop block.
 */

  $args = array(
    'orderby' => 'title',
    'posts_per_page' => '-1',
  );

$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>
<div class="<?php the_field('jumbotron_width'); ?>">
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron <?php the_field('jumbotron_border_radius'); ?>" style="color:<?php the_field('jumbotron_font_colour'); ?>; background-color:<?php the_field('jumbotron_background_colour'); ?>;">
                <?php if( get_field('jumbotron_title') ): ?>
                <h1 class="display-4"><?php the_field('jumbotron_title'); ?></h1>
                <?php endif; ?>
                <?php if( get_field('jumbotron_lead') ): ?>
                <h3 class="lead"><?php the_field('jumbotron_lead'); ?></h3>
                <?php endif; ?>
                <hr class="my-4">
                <?php if( get_field('jumbotron_content') ): ?>
                <?php the_field('jumbotron_content'); ?>
                <?php endif; ?>
                <?php if ( get_field( 'include_jumbotron_button' ) == 1 ) { ?>
                <div class="<?php the_field('jumbotron_button_alignment'); ?>">
                    <a class="btn btn-lg <?php the_field('jumbotron_button_radius'); ?>" style="color:<?php the_field('jumbotron_button_font_colour'); ?>; background-color:<?php the_field('jumbotron_button_colour'); ?>;" href="<?php the_field('jumbotron_button_url'); ?>" role="button"><?php the_field('jumbotron_button_text'); ?></a>
                </div>
                <?php } else {} ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
