<div class="acfb_post_list_thumbnail">
    <?php the_post_thumbnail(); ?>
</div>
<div class="acfb_post_list_content">
    <?php
if( have_rows('acfb_post_list_elements') ):

while ( have_rows('acfb_post_list_elements') ) : the_row(); ?>

    <?php if( get_row_layout() == 'post_list_title' ): ?>
    <div class="acfb_post_title">
        <<?php echo $acfb_post_title_html_tag; ?>><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></<?php echo $acfb_post_title_html_tag; ?>>
    </div>
    <?php endif; ?>

    <?php if( get_row_layout() == 'post_list_meta_data' ): ?>
    <div class="acfb_post_meta">
        <span class="acfb_post_author"><?php the_author(); ?></span> -
        <span class="acfb_post_date"><?php the_time('F jS, Y') ?></span>
    </div>
    <?php endif; ?>

    <?php if( get_row_layout() == 'post_list_content' ): ?>
    <div class="acfb_post_excerpt">
        <?php echo egrid_excerpt($acfb_post_excerpt_length); ?>
    </div>
    <?php endif; ?>

    <?php if( get_row_layout() == 'post_list_read_more_button' ): ?>
    <div class="btn post-btn">
        <a href="<?php the_permalink(); ?>" class="acfb_post_btn">Read More</a>
    </div>
    <?php endif; ?>


    <?php
endwhile;
endif;
?>
</div>
