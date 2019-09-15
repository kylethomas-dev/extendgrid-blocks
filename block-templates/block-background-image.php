<?php
/**
 * Block Name: Background Image
 *
 * This is the template that displays the background image loop block.
 */

$uid = $block['id'];

?>

<div class="<?php echo $uid; ?>">

<style type="text/css">
.<?php echo $uid; ?> .background-image{
    background-image: url(<?php the_field('background_image_url'); ?>);
    height: <?php the_field('background_image_height'); ?>px;
    background-size: <?php the_field('background_image_position'); ?>;
    background-position: <?php the_field('background_image_position_width'); ?>% <?php the_field('background_image_position_height'); ?>%!important;
}
</style>

<?php if( get_field('click_event_type') == 'url' ): ?>
<?php $clickurl = get_field('click_event_url'); ?>
<a class="bg-url" href="<?php echo $clickurl; ?>">
    <?php endif; ?>
    <div class="background-image<?php if( get_field('background_image_parallax') ): ?> parallax<?php endif; ?>"></div>
    <?php if( get_field('click_event_type') == 'url' ): ?>
</a>
<?php endif; ?>
</div>

<script>
if ( document.body.classList.contains('block-editor-page') ) {
  $('.bg-url').removeAttr("href");
}
</script>
