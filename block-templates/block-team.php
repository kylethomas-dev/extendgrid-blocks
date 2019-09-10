<?php
/**
 * Block Name: Team
 *
 * This is the template that displays the testimonials loop block.
 */
$uid = $block['id']; 
$className = 'eg_posts_block';
if( !empty($block['className']) ) {
   $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) { 
   $className .= ' align' . $block['align'];
}
?>

<style type="text/css">
    .<?php echo $uid;?> .acfb_post {
        background: <?php the_field('block_team_background_colour');?>;
        color: <?php the_field('block_team_font_colour');?>;
    }

</style>

<div class="<?php echo $uid; ?> <?php echo esc_attr($className); ?>">

    <?php
$eg_posts_layout = get_field('team_select_layout');
$eg_number_of_posts = get_field('team_count');
$eg_column_count = get_field('team_column_count');
?>

    <?php
    if ($eg_column_count == 1) {
    $eg_grid_col = "col-md-12";
} elseif ($eg_column_count == 2) {
    $eg_grid_col = "col-md-6";
} 
elseif ($eg_column_count == 3) {
    $eg_grid_col = "col-md-4";
}
elseif ($eg_column_count == 4) {
$eg_grid_col = "col-md-3";
} else {} ?>

    <?php
$args = array(
	'post_type' => 'team',
	'post_status' => 'publish',
	'posts_per_page' => $eg_number_of_posts, 
);


// the query
$the_query = new WP_Query( $args ); ?>

    <?php if ( $the_query->have_posts() ) : ?>

    <div class="row acfb_post_<?php echo $eg_posts_layout; ?>">

        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

        <div class="<?php echo $eg_grid_col; ?>">

            <?php
			if($eg_posts_layout == 'list'){

				include( 'loop-templates/team-list.php' );

			} elseif ($eg_posts_layout == 'grid') {

				include( 'loop-templates/team-grid.php' );

			}
			?>

        </div>
        <?php endwhile; ?>

    </div>

    <?php wp_reset_postdata(); ?>

    <?php else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>

</div>
