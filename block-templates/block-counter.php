<?php 
/**
 * Block Name: Counter
 *
 * This is the template that displays the counter block.
 */

$uid = $block['id'];

$className = 'acfb_counter_number_block';
if( !empty($block['className']) ) {
   $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
   $className .= ' align' . $block['align'];
}

?>
<div class="<?php echo $uid; ?> <?php echo esc_attr($className); ?>">
<style type="text/css">
.<?php echo $uid; ?> .acfb_counter_number_wrapper{
    color: <?php the_field('acfb_counter_number_color'); ?>;
    font-size: <?php the_field('acfb_counter_number_size'); ?>px;
}

.<?php echo $uid; ?> .acfb_counter .acfb_counter_title{
	color: <?php the_field('acfb_counter_number_title_color'); ?>;
    font-size: <?php the_field('acfb_counter_number_title_size'); ?>px;
}
</style>

<div class="acfb_counter">
<div class="acfb_counter_number_wrapper">
	<span class="acfb_counter_number_prefix"><?php the_field('acfb_counter_number_prefix'); ?></span>
	<span class="acfb_counter_number"><?php the_field('acfb_counter_number'); ?></span>
	<span class="acfb_counter_number_suffix"><?php the_field('acfb_counter_number_suffix'); ?></span>
</div>
<div class="acfb_counter_title"><?php the_field('acfb_counter_number_title'); ?></div>
</div>

</div><!-- Uid -->