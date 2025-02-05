<?php
function my_setup()
{
  add_theme_support('post-thumbnails');
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
  add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
}

add_action("after_setup_theme", "my_setup");
?>
<?php
function my_script_init()
{
  wp_enqueue_style("googlefonts", "https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Noto+Sans+JP:wght@100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" , array(), null);
  wp_enqueue_style("my", get_template_directory_uri() . "/assets/css/style.css",  array(), filemtime(get_theme_file_path("/assets/css/style.css")), "all");
}

add_action("wp_enqueue_scripts", "my_script_init");
?>
<?php
/**
 * アーカイブタイトル書き換え
 */
function my_archive_title($title)
{

  if (is_category()) { // カテゴリーアーカイブの場合
    $title = single_cat_title('', false);
  } elseif (is_tag()) { // タグアーカイブの場合
    $title = single_tag_title('', false);
  } elseif (is_post_type_archive()) { // 投稿タイプのアーカイブの場合
    $title = post_type_archive_title('', false);
  } elseif (is_tax()) { // タームアーカイブの場合
    $title = single_term_title('', false);
  } elseif (is_author()) { // 作者アーカイブの場合
    $title = get_the_author();
  } elseif (is_date()) { // 日付アーカイブの場合
    $title = '';
    if (get_query_var('year')) {
      $title .= get_query_var('year') . '年';
    }
    if (get_query_var('monthnum')) {
      $title .= get_query_var('monthnum') . '月';
    }
    if (get_query_var('day')) {
      $title .= get_query_var('day') . '日';
    }
  }
  return $title;
};
add_filter('get_the_archive_title', 'my_archive_title');


/**
 * カテゴリー名とリンクを取得
 */
function my_the_post_category($anchor = true)
{
  $category = get_the_category();
  if ($category[0]) {
    if ($anchor) {
      echo '<a href="' . get_category_link($category[0]->term_id) . '">' . $category[0]->cat_name . '</a>';
    }
    echo $category[0]->cat_name;
  }
}

/**
 * タグ取得
 */

function my_get_post_tags($id = 0)
{
  global $post;

  //引数が渡されなければ投稿IDを見るように表示
  if (0 === $id) {
    $id = $post->ID;
  }

  //タグ一覧を取得
  $tags = get_the_tags($id);

  if ($tags) {
    foreach ($tags as $tag) {
      echo '<div class="entry-tag-item"><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></div><!-- /entry-tag-item -->';
    }
  }
}

/**
 * 検索結果から固定ページを除外する
 */
function my_posts_search($search, $wp_query)
{

  // 検索結果ページ・メインクエリ・管理画面以外の3つの条件が揃った場合
  if ($wp_query->is_search() && $wp_query->is_main_query() && !is_admin()) {

    // 検索結果を投稿タイプに絞る
    $search .= " AND post_type = 'post' ";

    return $search;
  }

  return $search;
}

add_filter('posts_search', 'my_posts_search', 10, 2);

// 標準投稿アーカイブを有効にする。
add_filter('register_post_type_args', function ($args, $post_type) {
  if ('post' == $post_type) {
    global $wp_rewrite;
    $archive_slug = 'all'; //URLスラッグ
    $args['label'] = '投稿だよ'; //管理画面左ナビに「投稿」の代わりに表示される
    $args['has_archive'] = $archive_slug;
    $archive_slug = $wp_rewrite->root . $archive_slug;
    $feeds = '(' . trim(implode('|', $wp_rewrite->feeds)) . ')';
    add_rewrite_rule("{$archive_slug}/?$", "index.php?post_type={$post_type}", 'top');
    add_rewrite_rule("{$archive_slug}/feed/{$feeds}/?$", "index.php?post_type={$post_type}" . '&feed=$matches[1]', 'top');
    add_rewrite_rule("{$archive_slug}/{$feeds}/?$", "index.php?post_type={$post_type}" . '&feed=$matches[1]', 'top');
    add_rewrite_rule("{$archive_slug}/{$wp_rewrite->pagination_base}/([0-9]{1,})/?$", "index.php?post_type={$post_type}" . '&paged=$matches[1]', 'top');
  }
  return $args;
}, 10, 2);



//-----------------------------------------------------------
// description for archive(お知らせ/製品紹介/お客様の声) 
//-----------------------------------------------------------
add_filter('admin_init', 'setting_description_for_archive');
function setting_description_for_archive()
{
  $post_types = [
    'post' => 'すべての記事',
  ];
  foreach ($post_types as $key => $val) {
    add_settings_field($key . '_description', $val . 'ディスクリプション', 'set_archive_description_form', 'writing', 'default', [$key]);
    register_setting('writing', $key . '_description');
  }
}
function set_archive_description_form($args)
{
  $key = $args[0] . '_description';
  $val = get_option($key);
  $tmp = '<textarea name="' . $key . '" id="' . $key . '" rows="8" cols="80" class="regular-text">';
  $tmp .= esc_html($val);
  $tmp .= '</textarea>';
  echo $tmp;
}

?>