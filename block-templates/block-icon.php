<?php
/**
 * Block Name: Icon
 *
 * This is the template that displays the posts loop block.
 */
$uid = $block['id'];

?>

<style type="text/css">
<?php if( get_field('icon_size') ): ?>
.<?php echo $uid; ?> .icon  {
	font-size: <?php the_field('icon_size'); ?>;
}
<?php endif; ?>
<?php if( get_field('icon_colour') ): ?>
.<?php echo $uid; ?> .icon  {
	color: <?php the_field('icon_colour'); ?>;
}
<?php endif; ?>
</style>

<div class="icon <?php echo $uid; ?>">
  <?php the_field('fontawesome_icon'); ?>
</div>
