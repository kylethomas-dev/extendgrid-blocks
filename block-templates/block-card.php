<?php
/**
 * Block Name: Card
 *
 * This is the template that displays the testimonials loop block.
 */

$uid = $block['id'];

  $args = array(
    'orderby' => 'title',
    'posts_per_page' => '-1',
  );

$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>

        <?php if( get_field('card_counter') == '1' ): ?>
        <div class="row">
            <?php if ( have_rows('card_column_1') ) : ?>
            <?php while ( have_rows('card_column_1') ) : the_row(); ?>
            <div class="col-md-12">
                <div class="card <?php the_field('card_radius'); ?>">
                    <h4 class="card-title pt-3 pb-3 <?php the_sub_field('card_header_alignment'); ?>" style="background-color:<?php the_sub_field('card_header_background_colour'); ?>; color: <?php the_sub_field('card_header_font_colour'); ?>"><?php the_sub_field( 'card_title' ); ?></h4>
                    <?php $card_image = get_sub_field('card_image'); ?>
                    <?php if ( $card_image ) { ?>
                    <img class="img-fluid card-img-top" src="<?php echo $card_image['url']; ?>" alt="<?php echo $card_image['alt']; ?>" />
                    <?php } ?>
                    <div class="card-body">
                        <p class="card-text"><?php the_sub_field( 'card_content' ); ?></p>
                        <div class="<?php the_sub_field('card_button_alignment'); ?>">
                            <a href="#" class="card-link btn <?php the_field('card_button_radius'); ?>" style="background-color:<?php the_sub_field('card_button_colour'); ?>; color: <?php the_sub_field('card_button_text_colour'); ?>"><?php the_sub_field('card_button_text'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php else : ?>
            <?php // no rows found ?>
            <?php endif; ?>
        </div>
        <?php endif; ?>

        <?php if( get_field('card_counter') == '2' ): ?>
        <div class="row">
            <?php if ( have_rows( 'card_column_1' ) ) : ?>
            <?php while ( have_rows( 'card_column_1' ) ) : the_row(); ?>
            <div class="col-md-6">
                <div class="card <?php the_field('card_radius'); ?>">
                    <h4 class="card-title pt-3 pb-3 <?php the_sub_field('card_header_alignment'); ?>" style="background-color:<?php the_sub_field('card_header_background_colour'); ?>; color: <?php the_sub_field('card_header_font_colour'); ?>"><?php the_sub_field( 'card_title' ); ?></h4>
                    <?php $card_image = get_sub_field('card_image'); ?>
                    <?php if ( $card_image ) { ?>
                    <img class="img-fluid card-img-top" src="<?php echo $card_image['url']; ?>" alt="<?php echo $card_image['alt']; ?>" />
                    <?php } ?>
                    <div class="card-body">
                        <p class="card-text"><?php the_sub_field( 'card_content' ); ?></p>
                        <div class="<?php the_sub_field('card_button_alignment'); ?>">
                            <a href="#" class="card-link btn <?php the_field('card_button_radius'); ?>" style="background-color:<?php the_sub_field('card_button_colour'); ?>; color: <?php the_sub_field('card_button_text_colour'); ?>"><?php the_sub_field('card_button_text'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php else : ?>
            <?php // no rows found ?>
            <?php endif; ?>

            <?php if ( have_rows( 'card_column_2' ) ) : ?>
            <?php while ( have_rows( 'card_column_2' ) ) : the_row(); ?>
            <div class="col-md-6">
                <div class="card <?php the_field('card_radius'); ?>">
                    <h4 class="card-title pt-3 pb-3 <?php the_sub_field('card_header_alignment'); ?>" style="background-color:<?php the_sub_field('card_header_background_colour'); ?>; color: <?php the_sub_field('card_header_font_colour'); ?>"><?php the_sub_field( 'card_title' ); ?></h4>
                    <?php $card_image = get_sub_field('card_image'); ?>
                    <?php if ( $card_image ) { ?>
                    <img class="img-fluid card-img-top" src="<?php echo $card_image['url']; ?>" alt="<?php echo $card_image['alt']; ?>" />
                    <?php } ?>
                    <div class="card-body">
                        <p class="card-text"><?php the_sub_field( 'card_content' ); ?></p>
                        <div class="<?php the_sub_field('card_button_alignment'); ?>">
                            <a href="#" class="card-link btn <?php the_field('card_button_radius'); ?>" style="background-color:<?php the_sub_field('card_button_colour'); ?>; color: <?php the_sub_field('card_button_text_colour'); ?>"><?php the_sub_field('card_button_text'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php else : ?>
            <?php // no rows found ?>
            <?php endif; ?>
        </div>
        <?php endif; ?>

        <?php if( get_field('card_counter') == '3' ): ?>
        <div class="row">
            <?php if ( have_rows( 'card_column_1' ) ) : ?>
            <?php while ( have_rows( 'card_column_1' ) ) : the_row(); ?>
            <div class="col-md-4">
                <div class="card <?php the_field('card_radius'); ?>">
                    <h4 class="card-title pt-3 pb-3 <?php the_sub_field('card_header_alignment'); ?>" style="background-color:<?php the_sub_field('card_header_background_colour'); ?>; color: <?php the_sub_field('card_header_font_colour'); ?>"><?php the_sub_field( 'card_title' ); ?></h4>
                    <?php $card_image = get_sub_field('card_image'); ?>
                    <?php if ( $card_image ) { ?>
                    <img class="img-fluid card-img-top" src="<?php echo $card_image['url']; ?>" alt="<?php echo $card_image['alt']; ?>" />
                    <?php } ?>
                    <div class="card-body">
                        <p class="card-text"><?php the_sub_field( 'card_content' ); ?></p>
                        <div class="<?php the_sub_field('card_button_alignment'); ?>">
                            <a href="#" class="card-link btn <?php the_field('card_button_radius'); ?>" style="background-color:<?php the_sub_field('card_button_colour'); ?>; color: <?php the_sub_field('card_button_text_colour'); ?>"><?php the_sub_field('card_button_text'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php else : ?>
            <?php // no rows found ?>
            <?php endif; ?>

            <?php if ( have_rows( 'card_column_2' ) ) : ?>
            <?php while ( have_rows( 'card_column_2' ) ) : the_row(); ?>
            <div class="col-md-4">
                <div class="card <?php the_field('card_radius'); ?>">
                    <h4 class="card-title pt-3 pb-3 <?php the_sub_field('card_header_alignment'); ?>" style="background-color:<?php the_sub_field('card_header_background_colour'); ?>; color: <?php the_sub_field('card_header_font_colour'); ?>"><?php the_sub_field( 'card_title' ); ?></h4>

                    <?php $card_image = get_sub_field('card_image'); ?>
                    <?php if ( $card_image ) { ?>
                    <img class="img-fluid card-img-top" src="<?php echo $card_image['url']; ?>" alt="<?php echo $card_image['alt']; ?>" />
                    <?php } ?>
                    <div class="card-body">
                        <p class="card-text"><?php the_sub_field( 'card_content' ); ?></p>
                        <div class="<?php the_sub_field('card_button_alignment'); ?>">
                            <a href="#" class="card-link btn <?php the_field('card_button_radius'); ?>" style="background-color:<?php the_sub_field('card_button_colour'); ?>; color: <?php the_sub_field('card_button_text_colour'); ?>"><?php the_sub_field('card_button_text'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php else : ?>
            <?php // no rows found ?>
            <?php endif; ?>

            <?php if ( have_rows( 'card_column_3' ) ) : ?>
            <?php while ( have_rows( 'card_column_3' ) ) : the_row(); ?>
            <div class="col-md-4">
                <div class="card <?php the_field('card_radius'); ?>">
                    <h4 class="card-title pt-3 pb-3 <?php the_sub_field('card_header_alignment'); ?>" style="background-color:<?php the_sub_field('card_header_background_colour'); ?>; color: <?php the_sub_field('card_header_font_colour'); ?>"><?php the_sub_field( 'card_title' ); ?></h4>
                    <?php $card_image = get_sub_field('card_image'); ?>
                    <?php if ( $card_image ) { ?>
                    <img class="img-fluid card-img-top" src="<?php echo $card_image['url']; ?>" alt="<?php echo $card_image['alt']; ?>" />
                    <?php } ?>
                    <div class="card-body">
                        <p class="card-text"><?php the_sub_field( 'card_content' ); ?></p>
                        <div class="<?php the_sub_field('card_button_alignment'); ?>">
                            <a href="#" class="card-link btn <?php the_field('card_button_radius'); ?>" style="background-color:<?php the_sub_field('card_button_colour'); ?>; color: <?php the_sub_field('card_button_text_colour'); ?>"><?php the_sub_field('card_button_text'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php else : ?>
            <?php // no rows found ?>
            <?php endif; ?>
        </div>
        <?php endif; ?>

        <?php if( get_field('card_counter') == '4' ): ?>
        <div class="row">
            <?php if ( have_rows( 'card_column_1' ) ) : ?>
            <?php while ( have_rows( 'card_column_1' ) ) : the_row(); ?>
            <div class="col-md-3">
                <div class="card <?php the_field('card_radius'); ?>">
                    <h4 class="card-title pt-3 pb-3 <?php the_sub_field('card_header_alignment'); ?>" style="background-color:<?php the_sub_field('card_header_background_colour'); ?>; color: <?php the_sub_field('card_header_font_colour'); ?>"><?php the_sub_field( 'card_title' ); ?></h4>
                    <?php $card_image = get_sub_field('card_image'); ?>
                    <?php if ( $card_image ) { ?>
                    <img class="img-fluid card-img-top" src="<?php echo $card_image['url']; ?>" alt="<?php echo $card_image['alt']; ?>" />
                    <?php } ?>
                    <div class="card-body">
                        <p class="card-text"><?php the_sub_field( 'card_content' ); ?></p>
                        <div class="<?php the_sub_field('card_button_alignment'); ?>">
                            <a href="#" class="card-link btn <?php the_field('card_button_radius'); ?>" style="background-color:<?php the_sub_field('card_button_colour'); ?>; color: <?php the_sub_field('card_button_text_colour'); ?>"><?php the_sub_field('card_button_text'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php else : ?>
            <?php // no rows found ?>
            <?php endif; ?>

            <?php if ( have_rows( 'card_column_2' ) ) : ?>
            <?php while ( have_rows( 'card_column_2' ) ) : the_row(); ?>
            <div class="col-md-3">
                <div class="card <?php the_field('card_radius'); ?>">
                    <h4 class="card-title pt-3 pb-3 <?php the_sub_field('card_header_alignment'); ?>" style="background-color:<?php the_sub_field('card_header_background_colour'); ?>; color: <?php the_sub_field('card_header_font_colour'); ?>"><?php the_sub_field( 'card_title' ); ?></h4>
                    <?php $card_image = get_sub_field('card_image'); ?>
                    <?php if ( $card_image ) { ?>
                    <img class="img-fluid card-img-top" src="<?php echo $card_image['url']; ?>" alt="<?php echo $card_image['alt']; ?>" />
                    <?php } ?>
                    <div class="card-body">
                        <p class="card-text"><?php the_sub_field( 'card_content' ); ?></p>
                        <div class="<?php the_sub_field('card_button_alignment'); ?>">
                            <a href="#" class="card-link btn <?php the_field('card_button_radius'); ?>" style="background-color:<?php the_sub_field('card_button_colour'); ?>; color: <?php the_sub_field('card_button_text_colour'); ?>"><?php the_sub_field('card_button_text'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php else : ?>
            <?php // no rows found ?>
            <?php endif; ?>

            <?php if ( have_rows( 'card_column_3' ) ) : ?>
            <?php while ( have_rows( 'card_column_3' ) ) : the_row(); ?>
            <div class="col-md-3">
                <div class="card <?php the_field('card_radius'); ?>">
                    <h4 class="card-title pt-3 pb-3 <?php the_sub_field('card_header_alignment'); ?>" style="background-color:<?php the_sub_field('card_header_background_colour'); ?>; color: <?php the_sub_field('card_header_font_colour'); ?>"><?php the_sub_field( 'card_title' ); ?></h4>
                    <?php $card_image = get_sub_field('card_image'); ?>
                    <?php if ( $card_image ) { ?>
                    <img class="img-fluid card-img-top" src="<?php echo $card_image['url']; ?>" alt="<?php echo $card_image['alt']; ?>" />
                    <?php } ?>
                    <div class="card-body">
                        <p class="card-text"><?php the_sub_field( 'card_content' ); ?></p>
                        <div class="<?php the_sub_field('card_button_alignment'); ?>">
                            <a href="#" class="card-link btn <?php the_field('card_button_radius'); ?>" style="background-color:<?php the_sub_field('card_button_colour'); ?>; color: <?php the_sub_field('card_button_text_colour'); ?>"><?php the_sub_field('card_button_text'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php else : ?>
            <?php // no rows found ?>
            <?php endif; ?>

            <?php if ( have_rows( 'card_column_4' ) ) : ?>
            <?php while ( have_rows( 'card_column_4' ) ) : the_row(); ?>
            <div class="col-md-3">
                <div class="card <?php the_field('card_radius'); ?>">
                    <h4 class="card-title pt-3 pb-3 <?php the_sub_field('card_header_alignment'); ?>" style="background-color:<?php the_sub_field('card_header_background_colour'); ?>; color: <?php the_sub_field('card_header_font_colour'); ?>"><?php the_sub_field( 'card_title' ); ?></h4>
                    <?php $card_image = get_sub_field('card_image'); ?>
                    <?php if ( $card_image ) { ?>
                    <img class="img-fluid card-img-top" src="<?php echo $card_image['url']; ?>" alt="<?php echo $card_image['alt']; ?>" />
                    <?php } ?>
                    <div class="card-body">
                        <p class="card-text"><?php the_sub_field( 'card_content' ); ?></p>
                        <div class="<?php the_sub_field('card_button_alignment'); ?>">
                            <a href="#" class="card-link btn <?php the_field('card_button_radius'); ?>" style="background-color:<?php the_sub_field('card_button_colour'); ?>; color: <?php the_sub_field('card_button_text_colour'); ?>"><?php the_sub_field('card_button_text'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php else : ?>
            <?php // no rows found ?>
            <?php endif; ?>

        </div>
        <?php endif; ?>
        
<!-- /Layout -->

<?php endif; ?>
