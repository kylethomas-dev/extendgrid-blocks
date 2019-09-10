<?php $team_featured_image = get_field( 'team_member_featured_image', get_the_ID() ); ?>
<?php if ( $team_featured_image ) { ?>
<img class="img-fluid <?php the_field('team_image_layout'); ?>" src="<?php echo $team_featured_image['url']; ?>" alt="<?php echo $team_featured_image['alt']; ?>" />
<?php } ?>
<p class="pt-3 <?php the_field('team_text_alignment'); ?>">
    <span class="font-500">
        <?php echo get_field( 'team_member_name', get_the_ID() ); ?></span><br />
    <span class="font-400">
        <?php echo get_field( 'team_member_position', get_the_ID() ); ?></span>
</p>
<?php if( get_field('team_profile_buttons') ): ?>
<div class="<?php the_field('team_profile_button_alignment'); ?>">
    <a class="btn <?php the_field('team_profile_button_radius'); ?>" style="background-color:<?php the_field( 'team_profile_button_colour' ); ?>; color:<?php the_field( 'team_profile_button_font_colour' ); ?>" href="<?php the_permalink(); ?>"><?php the_field('team_profile_button_text'); ?></a>
</div>
<?php endif; ?>
