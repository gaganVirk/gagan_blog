<?php
/**
 *Recommended way to include parent theme styles.
 *(Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
 */  
function blog_writing_style() {
    $parent_style = 'bloge-style';
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/framework/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style(
        'blog-writing',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'bootstrap', $parent_style ),
        wp_get_theme()->get('Version') );
}
add_action( 'wp_enqueue_scripts', 'blog_writing_style');

/**
 *  Default Theme options
 *
 * @since bloge 1.0.0
 *
 * @param null
 * @return array $bloge_theme_layout
 *
 */
if ( !function_exists('bloge_default_theme_options') ) :
    function bloge_default_theme_options() {

        $default_theme_options = array(
            'site_layout'                        => 'full-width-wrapper',
            /*feature section options*/
            'bloge-feature-cat'                  => 0,
            'bloge-promo-cat'                    => 0,
            'bloge-footer-copyright'             => esc_html__('&copy; All Right Reserved','blog-writing'),
            'bloge-layout'                       => 'right-sidebar',
            'bloge-font-family-url'              => esc_url('//fonts.googleapis.com/css?family=Merriweather', 'blog-writing'),
            'bloge-font-family-name'             => esc_html__('Merriweather, serif','blog-writing'),

            'bloge-heading-font-family-url'      => esc_url('//fonts.googleapis.com/css?family=Oswald', 'blog-writing'),
            'bloge-heading-font-family-name'     => esc_html__('Oswald, serif','blog-writing'),
            
            'bloge-footer-totop'                 => 1,
            'bloge-read-more-text'               => esc_html__('Continue Reading','blog-writing'),
            'bloge-header-social'                => 0,
            'bloge-header-search'                => 0,
            'bloge-header-top-enable'            => 0,
            'bloge-header-date'                  => 0,
            'bloge-sticky-sidebar-option'        => 1,
            'bloge-slider-read-more'             => esc_html__('Read More','blog-writing'),
            'bloge-exclude-slider-category'      => '',
            'bloge-blog-pagination-type-options' => 'numeric',
);
        return apply_filters( 'bloge_default_theme_options', $default_theme_options );
    }
endif;