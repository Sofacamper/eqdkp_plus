<?php
if (!defined('EQDKP_INC')){
	die('You cannot access this file directly.');
}
$user_presets = array (
  'event_earned' => 
  array (
    0 => 'points',
    1 => 'earned',
    2 => 
    array (
      0 => '%member_id%',
      1 => '%dkp_id%',
      2 => '%event_id%',
      3 => '%with_twink%',
    ),
    3 => 
    array (
    ),
  ),
  'event_spent' => 
  array (
    0 => 'points',
    1 => 'spent',
    2 => 
    array (
      0 => '%member_id%',
      1 => '%dkp_id%',
      2 => '%event_id%',
      3 => 0,
      4 => '%with_twink%',
    ),
    3 => 
    array (
    ),
  ),
  'event_adjustment' => 
  array (
    0 => 'points',
    1 => 'adjustment',
    2 => 
    array (
      0 => '%member_id%',
      1 => '%dkp_id%',
      2 => '%event_id%',
      3 => '%with_twink%',
    ),
    3 => 
    array (
    ),
  ),
  'event_current' => 
  array (
    0 => 'points',
    1 => 'current',
    2 => 
    array (
      0 => '%member_id%',
      1 => '%dkp_id%',
      2 => '%event_id%',
      3 => 0,
      4 => '%with_twink%',
    ),
    3 => 
    array (
      0 => '%dkp_id%',
      1 => false,
      2 => false,
    ),
  ),
);
$user_presets_lang = array (
);

?>