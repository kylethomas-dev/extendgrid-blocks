<?php
/**
 * Block Name: Menu
 *
 * This is the template that displays the testimonials loop block.
 */
$uid = $block['id'];
$className = 'eg_menu_block';

  $args = array( 
    'orderby' => 'title',
    'post_type' => 'menu',
    'posts_per_page' => '-1',
  );

$the_query = new WP_Query( $args ); ?>

<?php
$eg_post_title_html_tag = get_field('block_menu_title_size');
?>

<?php if ( $the_query->have_posts() ) : ?>

<!-- Layout -->
<section class="<?php echo $uid; ?> <?php echo $className; ?>">
    
    <div class="container">

        <!-- Term Loop -->
        <?php if ( have_rows( 'block_menu_categories' ) ): ?>
        <?php while ( have_rows( 'block_menu_categories' ) ) : the_row(); ?>
        <?php if ( get_row_layout() == 'block_menu_category' ) : ?>
        <?php $block_menu_category_select_term = get_sub_field( 'block_menu_category_select' ); ?>
        <?php if ( $block_menu_category_select_term ): ?>
        <?php $menu_cat = $block_menu_category_select_term->name; ?>

        <?php
$args = array(
  'post_type' => 'menu',
    'tax_query' => array(
		array(
			'taxonomy' => 'menu_category',
			'field'    => 'slug',
			'terms'    => $menu_cat,
		),
	),
);
$query = new WP_Query( $args );


if ( $query->have_posts() ) { ?>

        <div class="row pb-3">
            <div class="col-md-12">
                <h3 class="text-uppercase text-center font-500">
                    <?php echo $menu_cat; ?>
                </h3>
            </div>
        </div>

        <div class="row pb-5">

            <?php while( $query->have_posts() ) : $query->the_post(); ?>

            <?php include( 'loop-templates/menu-list.php' ); ?>

            <?php endwhile; ?>

            <?php $counter++;
if ($counter % 2 == 0) 
echo '</div><div class="row">'; ?>

            <?php } ?>

        </div>

        <?php wp_reset_postdata();  ?>

        <?php endif; ?>
        <?php endif; ?>
        <?php endwhile; ?>
        <?php else: ?>
        <?php // no layouts found ?>
        <?php endif; ?>
        <!-- Term Loop -->


    </div>

</section>

<?php endif; ?>

<style type="text/css">
.<?php echo $uid; ?>.<?php echo $className; ?> {
    background-color: <?php the_field( 'block_menu_background_colour' ); ?>;
    color: <?php the_field( 'block_menu_font_colour' ); ?>;
    }  
</style>