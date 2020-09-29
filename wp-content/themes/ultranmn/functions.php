<?php

function my_setup()
{
    add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
    add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
    add_theme_support('title-tag'); // タイトルタグ自動生成
    add_theme_support('html5', array( //HTML5でマークアップ
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )
    );
}

add_action('after_setup_theme', 'my_setup');


function my_script_init()
{ 
    if(is_page()){
      wp_enqueue_style('page-css', get_template_directory_uri() . '/page.css', array(), '1.0.0', 'all');
      wp_enqueue_script('js', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.0', true);
    }
    
    wp_enqueue_style('css', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all');
    wp_enqueue_script('yubinbango','https://yubinbango.github.io/yubinbango/yubinbango.js',array(),false,true );
    // wp_enqueue_style('highlightjs', '//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.17.1/build/styles/tomorrow-night-eighties.min.css', array(), '9.17.1', 'all');
    // wp_enqueue_script('highlightjs', '//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.17.1/build/highlight.min.js', array( 'jquery' ), '9.17.1', true);
    //sns.jsを追記
    // if(is_single()){
    //     wp_enqueue_script('sns', get_template_directory_uri() . '/js/sns.js', array( 'jquery' ), '1.0.0', true);
    // }
    
}

add_action('wp_enqueue_scripts', 'my_script_init');


function select_values_set($tag){
    if($tag['name']!='your-region'){
      return $tag;
    }
    $region_id=-1;
    foreach($tag['raw_values'] as $option){
      $region_id++;
      $region_value[]=$region_id;
    }
    $tag['values']=$region_value;
    return $tag;
  }
add_filter('wpcf7_form_tag', 'select_values_set', 10);