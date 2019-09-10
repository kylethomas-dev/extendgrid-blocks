<div class="col-md-6">
    <?php if ( have_rows( 'block_menu_items_layout' ) ): ?>
    <?php while ( have_rows( 'block_menu_items_layout' ) ) : the_row(); ?>
    <?php if ( get_row_layout() == 'menu_items_title' ) : ?>

    <div class="menu-title">
        <<?php echo $eg_post_title_html_tag; ?>><?php the_title(); ?></<?php echo $eg_post_title_html_tag; ?>>
    </div>

    <?php elseif ( get_row_layout() == 'menu_items_price' ) : ?>

    <div class="menu-price">
        <?php if ( have_rows( 'menu_item_prices', get_the_ID() ) ) : ?>
        <?php while ( have_rows( 'menu_item_prices', get_the_ID() ) ) : the_row(); ?>
        <span class="menu-price-title">
            <?php the_sub_field( 'menu_item_price_title', get_the_ID() ); ?>
        </span>
        <span class="currency-symbol">
            <?php the_field( 'currency_symbol', 'option' ); ?></span>
        <?php the_sub_field( 'menu_item_price', get_the_ID() ); ?>
        <?php endwhile; ?>
        <?php else : ?>
        <?php // no rows found ?>
        <?php endif; ?>
    </div>

    <?php elseif ( get_row_layout() == 'menu_items_description' ) : ?>

    <?php if( get_field('menu_item_description', get_the_ID()) ): ?>
    <div class="menu-description">
        <?php echo get_field( 'menu_item_description', get_the_ID() ); ?>
    </div>
    <?php endif; ?>

    <?php elseif ( get_row_layout() == 'menu_items_attributes' ) : ?>

    <div class="product-attributes">
        <?php
            $terms = get_the_terms( $post->ID, 'menu_attributes' );
            if( $terms && ! is_wp_error( $terms ) ): 
            $menu_attributes = array();
            foreach ( $terms as $term ): ?>
        <div class="btn btn-product-attribute">
            <?php echo $term->name; ?>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <?php endif; ?>
    <?php endwhile; ?>
    <?php else: ?>
    <?php // no layouts found ?>
    <?php endif; ?>

</div>
