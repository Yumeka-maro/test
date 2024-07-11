<?php
function add_custom_meta_and_resources()
{
    // ファビコン
    echo '<link rel="icon" type="image/svg+xml" href="' . get_theme_file_uri('assets/images/common/hitode-green.svg') . '">' . "\n";
    // Google Fonts
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
    echo '<link href="https://fonts.googleapis.com/css2?family=Gotu&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP&display=swap" rel="stylesheet">' . "\n";
    // Swiper CSS
    echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">' . "\n";
    // メインCSS
    echo '<link rel="stylesheet" href="' . get_theme_file_uri('assets/css/style.css') . '">' . "\n";
}
add_action('wp_head', 'add_custom_meta_and_resources');

function enqueue_custom_scripts()
{
    // GSAP
    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js', array(), null, true);
    wp_enqueue_script('scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js', array('gsap'), null, true);
    // Swiper
    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), null, true);
    // jQuery
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.js', array(), null, true);
    // jQuery plugin (inview)
    wp_enqueue_script('jquery-inview', get_theme_file_uri('assets/js/jquery.inview.min.js'), array('jquery'), null, true);
    // メインスクリプト
    wp_enqueue_script('main-script', get_theme_file_uri('assets/js/script.js'), array('jquery', 'jquery-inview'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

function my_setup()
{
    add_theme_support('post-thumbnails'); /* アイキャッチ */
    add_theme_support('automatic-feed-links'); /* RSSフィード */
    add_theme_support('title-tag'); /* タイトルタグ自動生成 */
    add_theme_support(
        'html5',
        array( /* HTML5のタグで出力 */
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )
    );
}
add_action('after_setup_theme', 'my_setup');


function getPostViews($postID)
{
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return '0 PV';
        // return '0 View';
    }
    return $count . ' PV';
    // return $count.'Views';
}

function setPostViews($postID)
{
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
