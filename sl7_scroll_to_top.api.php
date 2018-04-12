<?php 

/**
 * Implements hook_sl7_scroll_to_top_theme().
 * 
 * Инициирование типа дизайна кнопки.
 * 
 * title - Название.
 * theme - Шаблон описанный в hook_theme.
 * settings - Не обязательно. Форма с настройками. По Form API, но единственный аргумент $default_value,
 * в нём передаются параметры по умолчанию.
 * @see sl7_scroll_to_top_theme_default_settings().
 * img - Ихображение для превью.
 * js - JavaScript файл.
 * css - CSS файл.
 */
function hook_sl7_scroll_to_top_theme() {
	$path = drupal_get_path('module', 'sl7_scroll_to_top');
	
	$themes['sl7_default'] = array(
		'title' => 'Стандартный',
		'theme' => 'sl7_scroll_to_top__default',
		'settings' => 'sl7_scroll_to_top_theme_default_settings',
		'js' => $path . '/js/sl7_scroll_to_top.js',
		'css' => $path . '/css/sl7_scroll_to_top__default.css',
		'img' => $path . '/img/sl7_scroll_to_top__default.png',
	);
	
	return $themes;
}