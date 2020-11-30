<?php
// カスタムヘッダー画像を設置する
$custom_header_defaults = array(
		'default-image'          => get_bloginfo('template_url').'/images/sample_logo.png',
		'width'                  => 220,
		'height'                 => 250,
		'header-text'            => false,	//ヘッダー画像上にテキストをかぶせる
);
add_theme_support( 'custom-header', $custom_header_defaults );