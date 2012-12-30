<?php
if (!defined('EQDKP_INC')){
	die('You cannot access this file directly.');
}
$page_objects = array (
  'normal' => 
  array (
    'roster' => 
    array (
      'hptt_roster' => 
      array (
        'table_presets' => 
        array (
          0 => 
          array (
            'name' => 'wow_charicon',
            'sort' => false,
            'th_add' => 'width="52"',
            'td_add' => '',
          ),
          1 => 
          array (
            'name' => 'profile_guild',
            'sort' => true,
            'th_add' => 'width="160"',
            'td_add' => '',
          ),
          2 => 
          array (
            'name' => 'wow_achievementpoints',
            'sort' => true,
            'th_add' => 'width="160"',
            'td_add' => '',
          ),
        ),
      ),
    ),
    'quickdkp' => 
    array (
      'hptt_quickdkp_tooltip' => 
      array (
        'name' => 'hptt_quickdkp_tooltip',
        'table_main_sub' => '%event_id%',
        'table_subs' => 
        array (
          0 => '%event_id%',
          1 => '%member_id%',
          2 => '%dkp_id%',
        ),
        'page_ref' => 'listraids.php',
        'no_root' => true,
        'show_numbers' => false,
        'show_select_boxes' => false,
        'show_detail_twink' => false,
        'table_sort_col' => 0,
        'table_sort_dir' => 'desc',
        'table_presets' => 
        array (
          0 => 
          array (
            'name' => 'ename',
            'sort' => false,
            'th_add' => '',
            'td_add' => '',
          ),
          1 => 
          array (
            'name' => 'event_earned',
            'sort' => false,
            'th_add' => '',
            'td_add' => '',
          ),
          2 => 
          array (
            'name' => 'event_spent',
            'sort' => false,
            'th_add' => '',
            'td_add' => '',
          ),
          3 => 
          array (
            'name' => 'event_adjustment',
            'sort' => false,
            'th_add' => '',
            'td_add' => '',
          ),
          4 => 
          array (
            'name' => 'event_current',
            'sort' => false,
            'th_add' => '',
            'td_add' => '',
          ),
        ),
      ),
    ),
  ),
)
?>