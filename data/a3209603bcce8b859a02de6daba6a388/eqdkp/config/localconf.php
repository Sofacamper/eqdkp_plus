<?php
if (!defined('EQDKP_INC')){
	die('You cannot access this file directly.');
}
$localconf = array (
  'account_activation' => 0,
  'active_point_adj' => '0.00',
  'admin_email' => '5QBH1Ylm4FAg7Qm6AFOO53+XBYy+lMhu7mfsw6iNIV2KhdY=',
  'auth_method' => 'db',
  'calendar_addevent_mode' => 'raid',
  'calendar_addraid_deadline' => '1',
  'calendar_addraid_def_starttime' => '19:00',
  'calendar_addraid_duration' => '120',
  'calendar_addraid_use_def_start' => 1,
  'calendar_email_newraid' => 0,
  'calendar_email_openclose' => 1,
  'calendar_email_statuschange' => 1,
  'calendar_raid_allowstatuschange' => 0,
  'calendar_raid_autocaddchars' => 'a:0:{}',
  'calendar_raid_autoconfirm' => 'a:0:{}',
  'calendar_raid_classbreak' => '5',
  'calendar_raid_coloredclassnames' => 1,
  'calendar_raid_guests' => 1,
  'calendar_raid_notsigned_classsort' => 1,
  'calendar_raid_nsfilter' => 'a:4:{i:0;s:6:"twinks";i:1;s:8:"inactive";i:2;s:6:"hidden";i:3;s:7:"special";}',
  'calendar_raid_random' => 0,
  'calendar_raid_shownotes' => 'a:2:{i:0;s:1:"2";i:1;s:1:"3";}',
  'calendar_raid_shownotsigned' => 0,
  'calendar_raid_status' => 'a:5:{i:0;s:1:"0";i:1;s:1:"1";i:2;s:1:"2";i:3;s:1:"3";i:4;s:1:"4";}',
  'calendar_repeat_crondays' => '40',
  'cookie_domain' => '',
  'cookie_name' => 'eqdkp_57ddb1',
  'cookie_path' => '/',
  'custom_logo' => '',
  'default_alimit' => 100,
  'default_date_long' => 'j. F Y',
  'default_date_short' => 'd.m.y',
  'default_date_time' => 'H:i',
  'default_elimit' => 100,
  'default_game' => 'wow',
  'default_ilimit' => 100,
  'default_lang' => 'german',
  'default_locale' => 'de_DE',
  'default_nlimit' => 10,
  'default_rlimit' => 100,
  'default_style' => '1',
  'default_style_overwrite' => 1,
  'disable_embedly' => 0,
  'disable_registration' => 0,
  'dkp_name' => 'SK',
  'enable_gzip' => 1,
  'enable_newscategories' => 0,
  'eqdkp_layout' => 'normal',
  'eqdkp_start' => 1356882391,
  'eqdkpm_shownote' => 1,
  'failed_logins_inactivity' => 5,
  'game_language' => 'german',
  'game_version' => '5.0',
  'guildtag' => 'Envy',
  'hide_inactive' => 1,
  'inactive_period' => 60,
  'inactive_point_adj' => '0.00',
  'infotooltip_use' => 1,
  'itt_debug' => 0,
  'itt_default_icon' => 'inv_misc_questionmark',
  'itt_icon_ext' => '.jpg',
  'itt_icon_loc' => 'http://eu.media.blizzard.com/wow/icons/56/',
  'itt_langprio1' => 'de',
  'itt_langprio2' => 'en',
  'itt_langprio3' => 'fr',
  'itt_prio1' => 'armory',
  'itt_prio2' => 'wowhead',
  'itt_trash' => NULL,
  'lib_email_method' => 'mail',
  'lib_email_sender_name' => '',
  'lib_email_sendmail_path' => '',
  'lib_email_signature' => 0,
  'lib_email_signature_value' => '--
Gesendet von EQDKP-PLUS Envy
EQdkp Plus: http://envy-beta.linuxlounge.net/',
  'lib_email_smtp_auth' => 0,
  'lib_email_smtp_connmethod' => '',
  'lib_email_smtp_host' => '',
  'lib_email_smtp_port' => 25,
  'lib_email_smtp_pw' => '',
  'lib_email_smtp_user' => '',
  'lib_recaptcha_okey' => '6LdKQMUSAAAAAOFATjZq_IyMruO1jxQL-rSVNF-g',
  'lib_recaptcha_pkey' => '6LdKQMUSAAAAAC-pf92A4AVGjBOImTD9eIGr2WH7',
  'login_fb_appid' => '',
  'login_fb_appsecret' => '',
  'login_method' => 'a:2:{i:0;s:6:"openid";i:1;s:8:"facebook";}',
  'main_title' => 'Envy Raidplaner',
  'pdc' => 
  array (
    'mode' => 'file',
    'prefix' => 'eqdkp10_',
    'dttl' => 86400,
  ),
  'pk_attendance90' => '1',
  'pk_class_color' => 1,
  'pk_color_items' => 'a:2:{i:0;s:2:"34";i:1;s:2:"67";}',
  'pk_date_startday' => 'monday',
  'pk_debug' => '0',
  'pk_defaultgame' => NULL,
  'pk_defaultgamelang' => NULL,
  'pk_detail_twink' => 1,
  'pk_disable_username_change' => 0,
  'pk_disclaimer_address' => '',
  'pk_disclaimer_custom' => '',
  'pk_disclaimer_email' => '',
  'pk_disclaimer_irc' => '',
  'pk_disclaimer_messenger' => '',
  'pk_disclaimer_name' => '',
  'pk_disclaimer_show' => 0,
  'pk_enable_captcha' => 1,
  'pk_enable_comments' => 1,
  'pk_itemhistory_dia' => 1,
  'pk_itt_force_default' => NULL,
  'pk_known_task_count' => 9,
  'pk_lastraid' => '1',
  'pk_maintenance_mode' => 0,
  'pk_meta_description' => 'Envy Gilde auf WoW-Castle PvE',
  'pk_meta_keywords' => 'envy,gilde,entropy,wow,castle',
  'pk_newsloot_limit' => '0',
  'pk_oc_time' => '20:00',
  'pk_oc_time_type' => 'end',
  'pk_only_populated_channel' => 0,
  'pk_permanent_portal' => 'a:0:{}',
  'pk_portal_website' => '',
  'pk_round_activate' => 0,
  'pk_round_precision' => 0,
  'pk_show_twinks' => 1,
  'pk_sms_enable' => 0,
  'pk_sms_password' => '',
  'pk_sms_username' => '',
  'pk_ts3_banner' => 0,
  'pk_ts3_cache' => '30',
  'pk_ts3_cut_channel' => '',
  'pk_ts3_cut_names' => '',
  'pk_ts3_id' => '1',
  'pk_ts3_ip' => 'localhost',
  'pk_ts3_join' => 1,
  'pk_ts3_jointext' => 'Verbinden',
  'pk_ts3_legend' => 0,
  'pk_ts3_port' => '9987',
  'pk_ts3_stats' => 0,
  'pk_ts3_stats_install' => 0,
  'pk_ts3_stats_numchan' => 0,
  'pk_ts3_stats_showos' => 0,
  'pk_ts3_stats_uptime' => 0,
  'pk_ts3_stats_version' => 0,
  'pk_ts3_telnetport' => '10011',
  'pk_ts3_timeout' => '',
  'pk_ts3_useron' => 0,
  'pk_updatecheck' => 1,
  'plus_version' => '1.0.7',
  'pm_quickdkp_mdkps' => 'a:1:{i:0;i:2;}',
  'pm_quickdkp_tooltip' => 1,
  'pm_twitter_maxitems' => 3,
  'raidlogimport' => 
  array (
    'new_member_rank' => '1',
    'raidcount' => '0',
    'loottime' => '600',
    'attendence_begin' => '0',
    'attendence_end' => '0',
    'attendence_raid' => '0',
    'attendence_time' => '900',
    'event_boss' => '0',
    'adj_parse' => ': ',
    'bz_parse' => ',',
    'parser' => 'plus',
    'rli_upd_check' => '1',
    'use_dkp' => '1',
    'deactivate_adj' => '0',
    'ignore_dissed' => '',
    'member_miss_time' => '300',
    's_member_rank' => '0',
    'att_note_begin' => 'Anwesenheit Start',
    'att_note_end' => 'Anwesenheit Ende',
    'raid_note_time' => '0',
    'timedkp_handle' => '0',
    'member_display' => '2',
    'standby_raid' => '0',
    'standby_absolute' => '0',
    'standby_value' => '0',
    'standby_att' => '0',
    'standby_dkptype' => '0',
    'standby_raidnote' => 'Ersatzbank',
    'member_raid' => '50',
    'itempool_save' => '1',
    'del_dbl_times' => '0',
    'autocomplete' => '0',
    'diff_1' => ' (10)',
    'diff_2' => ' (25)',
    'diff_3' => ' HM (10)',
    'diff_4' => ' HM (25)',
    'dep_match' => '1',
  ),
  'server_path' => '/',
  'session_cleanup' => '0',
  'session_last_cleanup' => 1356882428,
  'session_length' => 3600,
  'shoutbox' => 
  array (
    'sb_use_users' => 1,
  ),
  'sort_menu1' => 'a:8:{s:32:"e6b102bd046c62ceb7604249d87e0df7";a:2:{s:4:"sort";i:0;s:4:"hide";N;}s:32:"54193562337cfc824e8ea2d79c09904a";a:2:{s:4:"sort";i:1;s:4:"hide";N;}s:32:"9dfc22859008eb0a92a20afabf5a7b32";a:2:{s:4:"sort";i:2;s:4:"hide";N;}s:32:"268f3f919a94c379e9b8ec147c4799a0";a:2:{s:4:"sort";i:3;s:4:"hide";N;}s:32:"6c4298cc62394cfe28ed5a6ab52888fa";a:2:{s:4:"sort";i:4;s:4:"hide";N;}s:32:"50d8cb46ce022263c862cf839b617f0b";a:2:{s:4:"sort";i:5;s:4:"hide";N;}s:32:"42500df250c8fdb9ff6d316515b25157";a:2:{s:4:"sort";i:6;s:4:"hide";N;}s:32:"446829091172dd8c40e3fe6e165a514a";a:2:{s:4:"sort";i:8;s:4:"hide";N;}}',
  'sort_menu2' => 'a:4:{s:32:"bb440d35d6365219ee86fc31b1f071fd";a:2:{s:4:"sort";i:0;s:4:"hide";N;}s:32:"3a8270dae2b17999b935edc868c22ceb";a:2:{s:4:"sort";i:1;s:4:"hide";N;}s:32:"def968f48f9a8de4bc35ef4a4dac2646";a:2:{s:4:"sort";i:2;s:4:"hide";N;}s:32:"ace854fe0ae1654494f1c204d1dc914a";a:2:{s:4:"sort";i:4;s:4:"hide";N;}}',
  'sort_menu4' => 'a:4:{s:32:"828e0013b8f3bc1bb22b4f57172b019d";a:2:{s:4:"sort";i:0;s:4:"hide";N;}s:32:"9dfc22859008eb0a92a20afabf5a7b32";a:2:{s:4:"sort";i:1;s:4:"hide";N;}s:32:"54193562337cfc824e8ea2d79c09904a";a:2:{s:4:"sort";i:2;s:4:"hide";N;}s:32:"b20ed7917891aa92b0e4ff1c1ea2080d";a:2:{s:4:"sort";i:4;s:4:"hide";N;}}',
  'sp_facebook_like' => 0,
  'sp_facebook_share' => 0,
  'sp_google_plusone' => 0,
  'sp_opengraph_tags' => 1,
  'sp_twitter_share' => 0,
  'sp_twitter_tweet' => 0,
  'special_members' => 'a:0:{}',
  'start_page' => 'viewnews.php',
  'sub_title' => 'Raidgilde auf WoW-Castle PvE',
  'thumbnail_defaultsize' => 500,
  'timezone' => 'Europe/Berlin',
  'uc_data_lang' => 'de_DE',
  'uc_faction' => 'alliance',
  'uc_import_guild' => NULL,
  'uc_importer_cache' => NULL,
  'uc_lockserver' => 0,
  'uc_server_loc' => 'eu',
  'uc_servername' => '',
  'uc_update_all' => NULL,
  'upload_allowed_extensions' => 'zip,rar,jpg,bmp,gif,png',
);
?>