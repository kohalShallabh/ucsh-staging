<?php

// shortcode to show the module
function showmodule_shortcode($moduleid)
{
  extract(shortcode_atts(array('id' => '*'), $moduleid));
  return do_shortcode('[et_pb_section global_module="' . $id . '"][/et_pb_section]');
}
add_shortcode('showmodule', 'showmodule_shortcode');

// Display current year
function year_shortcode()
{
  $year = date_i18n('Y');
  return $year;
}
add_shortcode(
  'year',
  'year_shortcode'
);

/*For turning off the notification on login for the verification of an administrator email*/
add_filter('admin_email_check_interval', '__return_false');