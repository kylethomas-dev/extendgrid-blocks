<?php
/**
 * Block Name: Google Map
 *
 * This is the template that displays the Google Map loop block.
 */
$uid = $block['id'];

$address = get_field('google_map_address');
$height = get_field('google_map_height');

$filteredaddress = str_replace(",", "", str_replace(" ", "+", $address));

?>
<div class="<?php echo $uid; ?>">
<iframe frameborder="0" height="<?php echo $height; ?>px" src="https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=<?php echo $filteredaddress; ?>&z=14&output=embed"></iframe>
</div>