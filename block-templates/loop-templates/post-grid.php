<?php

if( have_rows('acfb_post_grid_elements') ):

while ( have_rows('acfb_post_grid_elements') ) : the_row(); ?>

<?php if( get_row_layout() == 'post_grid_image' ): ?>
<div class="acfb_post_thumbnail">
    <?php the_post_thumbnail(); ?>
</div>
<?php endif; ?>

<?php if( get_row_layout() == 'post_grid_title' ): ?>
<div class="acfb_post_title">
    <<?php echo $acfb_post_title_html_tag; ?>><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></<?php echo $acfb_post_title_html_tag; ?>>
</div>
<?php endif; ?>

<?php if( get_row_layout() == 'post_grid_meta_data' ): ?>
<div class="acfb_post_meta">
    <span class="acfb_post_author"><?php the_author(); ?></span> -
    <span class="acfb_post_date"><?php the_time('F jS, Y') ?></span>
</div>
<?php endif; ?>

<?php if( get_row_layout() == 'post_grid_content' ): ?>
<div class="acfb_post_excerpt">
    <?php echo egrid_excerpt($egrid_post_excerpt_length); ?>
</div>
<?php endif; ?>

<?php if( get_row_layout() == 'post_grid_read_more_button' ): ?>
<div class="acfb_post_button">
    <a href="<?php the_permalink(); ?>" class="acfb_post_btn">Read More</a>
</div>
<?php endif; ?>


<?php
endwhile;
endif;
?>
