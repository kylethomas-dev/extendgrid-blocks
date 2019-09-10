<?php 
$uid = $block['id'];

$className = 'eg_price_list_block';
if( !empty($block['className']) ) {
   $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
   $className .= ' align' . $block['align'];
}

?>
<div class="<?php echo $uid; ?> <?php echo esc_attr($className); ?>">
<style type="text/css">

.<?php echo $uid; ?> .eg_price_list_wrap .eg_price_list_item .eg_price_list_text .eg_price_list_header{
    color: <?php the_field('eg_price_list_title_&_price_color'); ?>;
    font-size: <?php the_field('eg_price_list_title_&_price_size'); ?>px;
}

.<?php echo $uid; ?> .eg_price_list_wrap .eg_price_list_item .eg_price_list_text .eg_price_list_header .eg_price_list_separator {
    border-bottom-style: <?php the_field('eg_price_list_separator_styles'); ?>;
    border-bottom-width: <?php the_field('eg_price_list_separator_size'); ?>px;
    border-bottom-color: <?php the_field('eg_price_list_separator_color'); ?>;

}

.<?php echo $uid; ?> .eg_price_list_wrap .eg_price_list_item .eg_price_list_text p.eg_price_list_description {
    color: <?php the_field('eg_price_list_description_color'); ?>;
    font-size: <?php the_field('eg_price_list_description_size'); ?>px;
}

</style>


<?php
$eg_image = '';
if(!get_field('eg_price_list_image')){
	$eg_image = plugin_dir_url( __FILE__ ) . '../img/placeholder-image.jpg';
} else{
	$eg_image = get_field('eg_price_list_image');
}
?>

<div class="eg_price_list_wrap">
<a href="<?php the_field('eg_price_list_link'); ?>" class="eg_price_list_item">	
	<div class="eg_price_list_image">
	<img src="<?php echo $eg_image; ?>" alt="<?php the_field('eg_price_list_image_alt'); ?>">
	</div>
	<div class="eg_price_list_text">
		<div class="eg_price_list_header">
			<span class="eg_price_list_title"><?php the_field('eg_price_list_title'); ?></span>
			<span class="eg_price_list_separator"></span>
			<span class="eg_price_list_price"><?php the_field('eg_price_list_price_prefix'); ?><?php the_field('eg_price_list_price'); ?></span>
		</div>
		<p class="eg_price_list_description"><?php the_field('eg_price_list_description'); ?></p>
	</div>
</a>
</div>

</div><!-- Uid -->