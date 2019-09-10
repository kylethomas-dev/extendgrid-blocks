<?php 
/**
 * Block Name: Accordion
 *
 * This is the template that displays the accordion loop block.
 */
$uid = $block['id'];

?>

<div class="<?php echo $uid; ?>">
    
<?php if( have_rows('add_accordion') ): ?>
    
    <?php
    $titlealign = get_field('accordion_title_alignment');
    $titlebgcolour = get_field('accordion_title_background_colour');
    $titlecolour = get_field('accordion_title_colour');
    $titlebgcolourhover = get_field('accordion_title_hover_background_colour');
    $titlecolourhover = get_field('accordion_title_hover_colour');
    $titlesize = get_field('accordion_title_size');
    $contentbgcolour = get_field('accordion_content_background_colour');
    $contentcolour = get_field('accordion_content_colour');
    $contentsize = get_field('accordion_content_size');
    ?>
    
    <style>
        .accordion-title {
            background-color: <?php echo $titlebgcolour; ?>;
            color: <?php echo $titlecolour; ?>;
        }
    </style>

	<?php while( have_rows('add_accordion') ): the_row(); 

		// vars
		$title = get_sub_field('accordion_title');
		$content = get_sub_field('accordion_content');

		?>

<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <div class="mb-0 accordion-title <?php echo $titlealign; ?>">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          <?php echo $title; ?>
        </button>
      </div>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
          <?php echo $content; ?>
      </div>
    </div>
  </div>
</div>

	<?php endwhile; ?>

<?php endif; ?>
    
</div>