<?php
function e_comme_get_social_block(){
    $theme_data = e_comme_get_theme_var();
    $open_new_tab = ($theme_data['social_link_open_in_new_tab'])?'target="_blank"':'';
    ?>
        <ul class="ec-social">
        	<?php if(!empty($theme_data['social_link_facebook'])): ?>
            <li><a href="<?php echo esc_url($theme_data['social_link_facebook']); ?>"  <?php echo esc_attr($open_new_tab); ?>><i class="fa fa-facebook icon"></i></a></li>
            <?php endif; ?>
            <?php if(!empty($theme_data['social_link_google'])): ?>
            <li><a href="<?php echo esc_url($theme_data['social_link_google']); ?>"  <?php echo esc_attr($open_new_tab); ?>><i class="fa fa-google-plus icon"></i></a></li>
            <?php endif; ?>
            <?php if(!empty($theme_data['social_link_twitter'])): ?>
            <li><a href="<?php echo esc_url($theme_data['social_link_twitter']); ?>"  <?php echo esc_attr($open_new_tab); ?>><i class="fa fa-twitter icon"></i></a></li>
            <?php endif; ?>
            <?php if(!empty($theme_data['social_link_youtube'])): ?>
            <li><a href="<?php echo esc_url($theme_data['social_link_youtube']); ?>"  <?php echo esc_attr($open_new_tab); ?>><i class="fa fa-youtube icon"></i></a></li>
            <?php endif; ?>
            <?php if(!empty($theme_data['social_link_linkedin'])): ?>
            <li><a href="<?php echo esc_url($theme_data['social_link_linkedin']); ?>"  <?php echo esc_attr($open_new_tab); ?>><i class="fa fa-linkedin icon"></i></a></li>
            <?php endif; ?>
        </ul>    
    <?php
}

function e_comme_excerpt_more($more) {
    return '';
}
add_filter('excerpt_more', 'e_comme_excerpt_more');


function e_comme_comment( $comment, $args, $depth ){
    $GLOBALS['comment'] = $comment;
    //get theme data
    global $comment_data;
    //translations
    $leave_reply = $comment_data['translation_reply_to_coment'] ? $comment_data['translation_reply_to_coment'] :__('Reply','e-comme'); ?>
    <div class="col-xs-12 comment-detail">
        <div class="col-xs-2 comments-pics">
        <?php echo get_avatar($comment,$size = '80'); ?>
        </div>
        <div class="col-xs-10 comments-text">
            <h3>
                <?php comment_author();?> 
                <span> 
                    <?php 
                        if ( ('d M  y') == get_option( 'date_format' ) ) : ?>
                    <?php comment_date('F j, Y');?>
                    <?php else : ?>
                    <?php comment_date(); ?>
                    <?php endif; ?>
                    <?php _e('at','e-comme');?>&nbsp;<?php comment_time('g:i a'); ?>
                 </span>
             </h3>  
             <p><?php comment_text() ; ?></p>
            <?php comment_reply_link(array_merge( $args, array('reply_text' => $leave_reply,'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
            <?php if ( $comment->comment_approved == '0' ) : ?>
            <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'e-comme' ); ?></em>
            <br/>
            <?php endif; ?>
        </div>
    </div>                              
    <?php
}


/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */

function e_comme_body_classes( $classes ) {
    // Adds a class of group-blog to blogs with more than 1 published author.
    if ( is_multi_author() ) {
        $classes[] = 'group-blog';
    }

    // Adds a class of hfeed to non-singular pages.
    if ( ! is_singular() ) {
        $classes[] = 'hfeed';
    }

    return $classes;
}
add_filter( 'body_class', 'e_comme_body_classes' );


/**
 * Jetpack setup function.
 *
 * See: https://jetpack.me/support/infinite-scroll/
 * See: https://jetpack.me/support/responsive-videos/
 */
function e_comme_jetpack_setup() {
    // Add theme support for Infinite Scroll.
    add_theme_support( 'infinite-scroll', array(
        'container' => 'main',
        'render'    => 'e_comme_infinite_scroll_render',
        'footer'    => 'page',
    ) );

    // Add theme support for Responsive Videos.
    add_theme_support( 'jetpack-responsive-videos' );
}
add_action( 'after_setup_theme', 'e_comme_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function e_comme_infinite_scroll_render() {
    while ( have_posts() ) {
        the_post();
        if ( is_search() ) :
            get_template_part( 'template-parts/content', 'search' );
        else :
            get_template_part( 'template-parts/content', get_post_format() );
        endif;
    }
}

function e_comme_is_woocommerce_activated() {
    return class_exists( 'woocommerce' ) ? true : false;
}

?>