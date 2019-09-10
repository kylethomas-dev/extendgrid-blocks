<?php
/**
 * Block Name: SOcial Share
 *
 * This is the template that displays the social share loop block.
 */

  $args = array(
    'orderby' => 'title',
    'posts_per_page' => '-1',
  );

$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>

<?php global $wp; ?>

<div class="col-md-12">
    <div class="'row">

        <?php if( get_field('social_button_style') == 'icon' ): ?>

        <?php if ( get_field( 'social_share_twitter' ) == 1 ) { ?>
        <a href="https://twitter.com/intent/tweet?url=<?php echo home_url( $wp->request ) ?>" target="_blank" class="btn btn-twitter <?php the_field( 'social_button_size' ); ?>">
            <i class="fab fa-twitter"></i></a>
        <?php } ?>
        <?php if ( get_field( 'social_share_facebook' ) == 1 ) { ?>
        <a href="https://www.facebook.com/sharer.php?u=<?php echo home_url( $wp->request ) ?>" target="_blank" class="btn btn-facebook <?php the_field( 'social_button_size' ); ?>">
            <i class="fab fa-facebook"></i></a>
        <?php } ?>
        <?php if ( get_field( 'social_share_pinterest' ) == 1 ) { ?>
        <a href="https://pinterest.com/pin/create/bookmarklet/?url=<?php echo home_url( $wp->request ) ?>" target="_blank" class="btn btn-pinterest <?php the_field( 'social_button_size' ); ?>">
            <i class="fab fa-pinterest"></i></a>
        <?php } ?>
        <?php if ( get_field( 'social_share_linkedin' ) == 1 ) { ?>
        <a href="https://www.linkedin.com/shareArticle?url=<?php echo home_url( $wp->request ) ?>" target="_blank" class="btn btn-linkedin <?php the_field( 'social_button_size' ); ?>">
            <i class="fab fa-linkedin"></i></a>
        <?php } ?>
        <?php if ( get_field( 'social_share_tumblr' ) == 1 ) { ?>
        <a href="https://www.tumblr.com/share/link?url=<?php echo home_url( $wp->request ) ?>" target="_blank" class="btn btn-tumblr <?php the_field( 'social_button_size' ); ?>">
            <i class="fab fa-tumblr"></i></a>
        <?php } ?>
        <?php if ( get_field( 'social_share_reddit' ) == 1 ) { ?>
        <a href="https://reddit.com/submit?url=<?php echo home_url( $wp->request ) ?>" target="_blank" class="btn btn-reddit <?php the_field( 'social_button_size' ); ?>">
            <i class="fab fa-reddit-alien"></i></a>
        <?php } ?>

        <?php endif; ?>

        <?php if( get_field('social_button_style') == 'icon_text' ): ?>

        <?php if ( get_field( 'social_share_twitter' ) == 1 ) { ?>
        <a href="https://twitter.com/intent/tweet?url=<?php echo home_url( $wp->request ) ?>" target="_blank" class="btn btn-twitter <?php the_field( 'social_button_size' ); ?>">
            <i class="fab fa-twitter"></i>&nbsp;Twitter</a>
        <?php } ?>
        <?php if ( get_field( 'social_share_facebook' ) == 1 ) { ?>
        <a href="https://www.facebook.com/sharer.php?u=<?php echo home_url( $wp->request ) ?>" target="_blank" class="btn btn-facebook <?php the_field( 'social_button_size' ); ?>">
            <i class="fab fa-facebook"></i>&nbsp;Facebook</a>
        <?php } ?>
        <?php if ( get_field( 'social_share_pinterest' ) == 1 ) { ?>
        <a href="https://pinterest.com/pin/create/bookmarklet/?url=<?php echo home_url( $wp->request ) ?>" target="_blank" class="btn btn-pinterest <?php the_field( 'social_button_size' ); ?>">
            <i class="fab fa-pinterest"></i>&nbsp;Pinterest</a>
        <?php } ?>
        <?php if ( get_field( 'social_share_linkedin' ) == 1 ) { ?>
        <a href="https://www.linkedin.com/shareArticle?url=<?php echo home_url( $wp->request ) ?>" target="_blank" class="btn btn-linkedin <?php the_field( 'social_button_size' ); ?>">
            <i class="fab fa-linkedin"></i>&nbsp;LinkedIn</a>
        <?php } ?>
        <?php if ( get_field( 'social_share_tumblr' ) == 1 ) { ?>
        <a href="https://www.tumblr.com/share/link?url=<?php echo home_url( $wp->request ) ?>" target="_blank" class="btn btn-tumblr <?php the_field( 'social_button_size' ); ?>">
            <i class="fab fa-tumblr"></i>&nbsp;Tumblr</a>
        <?php } ?>
        <?php if ( get_field( 'social_share_reddit' ) == 1 ) { ?>
        <a href="https://reddit.com/submit?url=<?php echo home_url( $wp->request ) ?>" target="_blank" class="btn btn-reddit <?php the_field( 'social_button_size' ); ?>">
            <i class="fab fa-reddit-alien"></i>&nbsp;Reddit</a>
        <?php } ?>

        <?php endif; ?>

        <?php if( get_field('social_button_style') == 'icon_share_text' ): ?>

        <?php if ( get_field( 'social_share_twitter' ) == 1 ) { ?>
        <a href="https://twitter.com/intent/tweet?url=<?php echo home_url( $wp->request ) ?>" target="_blank" class="btn btn-twitter <?php the_field( 'social_button_size' ); ?>">
            <i class="fab fa-twitter"></i>&nbsp;Share on Twitter</a>
        <?php } ?>
        <?php if ( get_field( 'social_share_facebook' ) == 1 ) { ?>
        <a href="https://www.facebook.com/sharer.php?u=<?php echo home_url( $wp->request ) ?>" target="_blank" class="btn btn-facebook <?php the_field( 'social_button_size' ); ?>">
            <i class="fab fa-facebook"></i>&nbsp;Share on Facebook</a>
        <?php } ?>
        <?php if ( get_field( 'social_share_pinterest' ) == 1 ) { ?>
        <a href="https://pinterest.com/pin/create/bookmarklet/?url=<?php echo home_url( $wp->request ) ?>" target="_blank" class="btn btn-pinterest <?php the_field( 'social_button_size' ); ?>">
            <i class="fab fa-pinterest"></i>&nbsp;Share on Pinterest</a>
        <?php } ?>
        <?php if ( get_field( 'social_share_linkedin' ) == 1 ) { ?>
        <a href="https://www.linkedin.com/shareArticle?url=<?php echo home_url( $wp->request ) ?>" target="_blank" class="btn btn-linkedin <?php the_field( 'social_button_size' ); ?>">
            <i class="fab fa-linkedin"></i>&nbsp;Share on LinkedIn</a>
        <?php } ?>
        <?php if ( get_field( 'social_share_tumblr' ) == 1 ) { ?>
        <a href="https://www.tumblr.com/share/link?url=<?php echo home_url( $wp->request ) ?>" target="_blank" class="btn btn-tumblr <?php the_field( 'social_button_size' ); ?>">
            <i class="fab fa-tumblr"></i>&nbsp;Share on Tumblr</a>
        <?php } ?>
        <?php if ( get_field( 'social_share_reddit' ) == 1 ) { ?>
        <a href="https://reddit.com/submit?url=<?php echo home_url( $wp->request ) ?>" target="_blank" class="btn btn-reddit <?php the_field( 'social_button_size' ); ?>">
            <i class="fab fa-reddit-alien"></i>&nbsp;Share on Reddit</a>
        <?php } ?>

        <?php endif; ?>

    </div>
</div>
</div>

<?php endif; ?>
