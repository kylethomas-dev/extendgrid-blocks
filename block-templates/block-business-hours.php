<?php
/**
 * Block Name: Business Hours
 *
 * This is the template that displays the background image loop block.
 */
?>
yo
<?php if ( have_rows( 'open_days' ) ): ?>
<?php while ( have_rows( 'open_days' ) ) : the_row(); ?>
<?php if ( get_row_layout() == 'monday' ) : ?>
<?php if ( get_sub_field( 'open_day_toggle' ) == 1 ) { 
			 // echo 'true'; 
			} else { 
			 // echo 'false'; 
			} ?>
<?php if ( have_rows( 'opening_hours_repeated' ) ) : ?>
<?php while ( have_rows( 'opening_hours_repeated' ) ) : the_row(); ?>
<?php the_sub_field( 'business_hours_open' ); ?>
<?php the_sub_field( 'business_hours_close' ); ?>
<?php endwhile; ?>
<?php else : ?>
<?php // no rows found ?>
<?php endif; ?>
<?php elseif ( get_row_layout() == 'Tuesday' ) : ?>
<?php if ( get_sub_field( 'open_day_toggle' ) == 1 ) { 
			 // echo 'true'; 
			} else { 
			 // echo 'false'; 
			} ?>
<?php if ( have_rows( 'opening_hours_repeated' ) ) : ?>
<?php while ( have_rows( 'opening_hours_repeated' ) ) : the_row(); ?>
<?php the_sub_field( 'business_hours_open' ); ?>
<?php the_sub_field( 'business_hours_close' ); ?>
<?php endwhile; ?>
<?php else : ?>
<?php // no rows found ?>
<?php endif; ?>
<?php endif; ?>
<?php endwhile; ?>
<?php else: ?>
<?php // no layouts found ?>
<?php endif; ?>
