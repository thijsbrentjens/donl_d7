<?php
/**
 * @file
 * features_settings_ckeditor.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function features_settings_ckeditor_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}
