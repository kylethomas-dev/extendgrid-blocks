<?php 
/**
 * Block Name: Alert
 *
 * This is the template that displays the posts loop block.
 */
$uid = $block['id'];

?>

<div class="<?php echo $uid; ?>">

<style type="text/css">
<?php if( get_field('eg_alert_background_colour') ): ?>
.<?php echo $uid; ?> .alert  {
	background-color: <?php the_field('eg_alert_background_colour'); ?>;
}
<?php endif; ?>
    
<?php if( get_field('eg_alert_font_colour') ): ?>
.<?php echo $uid; ?> .alert  {
	color: <?php the_field('eg_alert_font_colour'); ?>;
}
<?php endif; ?>
    
<?php if( get_field('eg_alert_font_size') ): ?>
.<?php echo $uid; ?> .alert  {
    font-size: <?php the_field('eg_alert_font_size'); ?>px;
}
<?php endif; ?>       
    
</style>    
    
<div class="alert <?php echo $uid; ?>" role="alert">
  <?php the_field('eg_alert_content'); ?>
</div>

</div>