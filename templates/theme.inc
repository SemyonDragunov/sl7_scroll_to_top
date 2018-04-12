<?php

/**
 * @author Semyon Dragunov <sam.dragunov@gmail.com>
 * https://github.com/SemyonDragunov
 */

function template_preprocess_sl7_scroll_to_top__default(&$variables) {
  $settings = variable_get('sl7_scroll_to_top_theme_settings');
  $variables['side'] = $settings['side'];
  $variables['style'] = (!empty($settings['style'])) ? $settings['style'] : '';
}

function theme_sl7_scroll_to_top__default(&$variables) {
  $output =  '<div id="scroll-to-top" data-style="' . $variables['style'] . '" data-side="' . $variables['side'] . '">';
  $output .= '</div>';

  return $output;
}