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

//特定の投稿ビュー数を表示
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

//特定の投稿ビュー数を更新
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

//カスタム投稿設定
function redirect_custom_post_type_single()
{
    if (is_singular('custom_post_type')) {
        wp_redirect(get_post_type_archive_link('custom_post_type'));
        exit;
    }
}
add_action('template_redirect', 'redirect_custom_post_type_single');


//投稿ページ投稿数指定
function change_posts_per_page($query)
{
    if (is_admin() || !$query->is_main_query())
        return;

    if ($query->is_post_type_archive('voice')) {
        $query->set('posts_per_page', '6');
    }

    if ($query->is_post_type_archive('campaign')) {
        $query->set('posts_per_page', '4');
    }
}
add_action('pre_get_posts', 'change_posts_per_page');


//管理画面エディター削除
function remove_editor_from_voice()
{
    remove_post_type_support('voice', 'editor');
    remove_post_type_support('campaign', 'editor');
}

add_action('init', 'remove_editor_from_voice', 10);



function change_post_menu_label()
{
    global $menu;
    global $submenu;
    $menu[5][0] = 'ブログ'; // メインメニューの名前を変更
    $submenu['edit.php'][5][0] = 'ブログ'; // サブメニューの「投稿一覧」を変更
    $submenu['edit.php'][10][0] = '新規ブログ'; // サブメニューの「新規追加」を変更
    echo '';
}

function change_post_object_label()
{
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'ブログ';
    $labels->singular_name = 'ブログ';
    $labels->add_new = '追加';
    $labels->add_new_item = '新規ブログ';
    $labels->edit_item = 'ブログを編集';
    $labels->new_item = '新しいブログ';
    $labels->view_item = 'ブログを見る';
    $labels->search_items = 'ブログを検索';
    $labels->not_found = 'ブログが見つかりませんでした';
    $labels->not_found_in_trash = 'ゴミ箱にブログはありません';
}

add_action('admin_menu', 'change_post_menu_label');
add_action('init', 'change_post_object_label');

// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
    return false;
}

//メタタグ追加
function add_meta_tags() {
    if (is_single() || is_page()) {
        global $post;
        $meta_description = get_post_meta($post->ID, 'meta_description', true);
        $meta_keywords = get_post_meta($post->ID, 'meta_keywords', true);
        if ($meta_description) {
            echo '<meta name="description" content="' . esc_attr($meta_description) . '">' . "\n";
        }
        if ($meta_keywords) {
            echo '<meta name="keywords" content="' . esc_attr($meta_keywords) . '">' . "\n";
        }
    }
}
add_action('wp_head', 'add_meta_tags');



//ぱんくずタイトル書き換え
function my_bcn_breadcrumb_title($title, $this_type, $this_id) {
    if (is_singular('post')) :
    $title = 'ブログ詳細';
    endif;
    return $title;
};
add_filter('bcn_breadcrumb_title', 'my_bcn_breadcrumb_title', 10, 3);


//エディタで自動生成されるpタグとbrタグを解除
// function disable_output()
// {
//     remove_filter('the_content', 'wpautop');  // 本文欄
//     // remove_filter('the_title', 'wpautop');  // タイトル蘭
//     // remove_filter('comment_text', 'wpautop');  // コメント欄
//     // remove_filter('the_excerpt', 'wpautop');  // 抜粋欄
// }
// add_action('init', 'disable_output');

//サンクスページ遷移
add_action('wp_footer', 'add_origin_thanks_page');

function add_origin_thanks_page() {
    echo <<<EOC
<script>
document.addEventListener('wpcf7mailsent', function(event) {
    location = 'http://diving.local/contact/thanks';
}, false);
</script>
EOC;
}

//サンクスメッセージ非表示
function cf7_remove_thank_you_message() {
    ?>
<script>
document.addEventListener('wpcf7mailsent', function(event) {
  var thankYouMessage = event.target.querySelector('.wpcf7-response-output');
  if (thankYouMessage) {
    thankYouMessage.style.display = 'none';
  }
}, false);
</script>
<?php
}
add_action('wp_footer', 'cf7_remove_thank_you_message');

//404が表示されたときにbodyタグに特定のクラス追加
function add_404_body_class($classes) {
    if (is_404()) {
        $classes[] = 'page-404';
    }
    return $classes;
}
add_filter('body_class', 'add_404_body_class');


function custom_monthly_archives_link($link_html) {
    // リンクのテキスト部分から年を取り除き、月だけを表示
    $link_html = preg_replace('/\d{4}年(\d{1,2})月/', '$1月', $link_html);
    return $link_html;
}
add_filter('get_archives_link', 'custom_monthly_archives_link');



?>