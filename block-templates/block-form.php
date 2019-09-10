<?php 
/**
 * Block Name: Form
 *
 * This is the template that displays the form loop block.
 */
$uid = $block['id'];

?>

<div class="<?php echo $uid; ?>">
<?php 
// vars
$post_id = get_field('select_form', false, false);
// check 
if( $post_id ): ?>
   <?php echo do_shortcode( '[extendgrid_form id="' . $post_id . '"]' ); ?>
<?php endif; ?>

</div>
