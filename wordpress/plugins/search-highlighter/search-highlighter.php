<?php
/*
Plugin Name: Search Highlighter
Description: 検索キーワードをハイライトします。
Version: 1.0
Author: Miri
Author URI: https://www.resume.id/miri_o
*/

class SearchHighlighter {
    public function __construct() {
        add_filter('the_title', array($this, 'highlight_keywords'));
        add_filter('get_the_excerpt', array($this, 'highlight_keywords'));
    }

    public function highlight_keywords($text) {
        if (is_search()) {
            $keys = explode(' ', get_search_query());
            foreach ($keys as $key) {
                // ムサラボにおける黄色でハイライトします
                $text = str_replace($key, '<span style="background: #fdd001">'.$key.'</span>', $text);
            }
        }
        return $text;
    }
}

$searchHighlighter = new SearchHighlighter();
