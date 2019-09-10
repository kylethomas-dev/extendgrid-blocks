<?php 
/**
 * Block Name: Posts
 *
 * This is the template that displays the posts loop block.
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

<div class="<?php echo $uid; ?> <?php echo esc_attr($className); ?>">

<?php 
$acfb_posts_layout = get_field('acfb_posts_layout');
$acfb_number_of_posts = get_field('acfb_number_of_posts');
$acfb_posts_columns = get_field('acfb_posts_columns');
$acfb_post_excerpt_length = get_field('acfb_post_excerpt_length');
$acfb_post_title_html_tag = get_field('acfb_post_title_html_tag');
?>
<style type="text/css">
.<?php echo $uid; ?> .acfb_post {
	background: <?php the_field('acfb_post_background_color'); ?>;
}

<?php if( get_field('acfb_post_title_custom_styles') == '1' ): ?>
.<?php echo $uid; ?> .acfb_post .acfb_post_title a{
	color: <?php the_field('acfb_post_title_color'); ?> !important;
	font-size: <?php the_field('acfb_post_title_size'); ?>px;
	text-decoration: none;
}

.<?php echo $uid; ?> .acfb_post .acfb_post_title a:hover{
	color: <?php the_field('acfb_post_title_hover_color'); ?> !important;
}
<?php endif; ?>

<?php if( get_field('acfb_post_meta_custom_styles') == '1' ): ?>
.<?php echo $uid; ?> .acfb_post .acfb_post_meta{
	color: <?php the_field('acfb_post_meta_color'); ?>;
	font-size: <?php the_field('acfb_post_meta_size'); ?>px;
}
<?php endif; ?>

<?php if( get_field('acfb_post_excerpt_custom_styles') == '1' ): ?>
.<?php echo $uid; ?> .acfb_post .acfb_post_excerpt{
	color: <?php the_field('acfb_post_excerpt_color'); ?>;
	font-size: <?php the_field('acfb_post_excerpt_size'); ?>px;
}
<?php endif; ?>

<?php if( get_field('acfb_post_button_custom_styles') == '1' ): ?>
.<?php echo $uid; ?> .acfb_post .acfb_post_button a{
	background-color: <?php the_field('acfb_post_button_background_color'); ?>;
	color: <?php the_field('acfb_post_button_text_color'); ?> !important;
	font-size: <?php the_field('acfb_post_button_size'); ?>px;
	padding: 10px;
}

.<?php echo $uid; ?> .acfb_post .post-btn a:hover{
	background-color: <?php the_field('acfb_post_button_background_hover_color'); ?>;
	color: <?php the_field('acfb_post_button_text_hover_color'); ?> !important;
}
<?php endif; ?>
</style>


<?php

$acfb_grid_col = '';
if($acfb_posts_layout == 'grid'){
	$acfb_grid_col = "acfb_post_" . $acfb_posts_columns; 
}

$acfb_cat = get_field( 'acfb_category_filters' );

$acfb_cat_names = array();  
if(is_array($acfb_cat)){
foreach($acfb_cat as $catskey => $catsval){
	 $acfb_cat_names[] = $catsval;
}
}

$args = array(
	'post_type' => 'post',
	'post_status' => 'publish',
	'posts_per_page' => $acfb_number_of_posts, 
	'cat' => $acfb_cat_names,
);


// the query
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>

<div class="acfb_post_<?php echo $acfb_posts_layout; ?> <?php echo $acfb_grid_col; ?>">

	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

 	<?php 
 	$acfb_thumb = '';
 	if ( has_post_thumbnail() ){
 		$acfb_thumb = 'thumb';
 	} else{
		$acfb_thumb = 'no_thumb';
 	}
 	?>

		<div class="acfb_post <?php echo $acfb_thumb; ?>">

			<?php
			if($acfb_posts_layout == 'list'){

				include( 'loop-templates/post-list.php' );

			} elseif ($acfb_posts_layout == 'grid') {

				include( 'loop-templates/post-grid.php' );

			}
			?>

		</div>
	<?php endwhile; ?>

</div>

<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>



</div><!-- Uid -->