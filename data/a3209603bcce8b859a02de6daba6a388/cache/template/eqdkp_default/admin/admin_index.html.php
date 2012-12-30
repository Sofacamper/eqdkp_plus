<?php
if ($this->security()) {
// IF S_NO_HEADER_FOOTER
if ($this->_data['.'][0]['S_NO_HEADER_FOOTER']) { 
// IF SHOW_PHP_WARNING
if ($this->_data['.'][0]['SHOW_PHP_WARNING']) { 
echo '
<div class="errorbox roundbox">
	<div class="icon_false">' . ((isset($this->_data['.'][0]['L_php_warning'])) ? $this->_data['.'][0]['L_php_warning'] : (($this->lang('php_warning')) ? $this->lang('php_warning') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'php_warning'))) . '         }')) . '</div>
</div>
<br />
';// ENDIF
}
// IF SHOW_BETA_WARNING
if ($this->_data['.'][0]['SHOW_BETA_WARNING']) { 
echo '
<div class="errorbox roundbox">
	<div class="icon_false">' . ((isset($this->_data['.'][0]['L_beta_warning'])) ? $this->_data['.'][0]['L_beta_warning'] : (($this->lang('beta_warning')) ? $this->lang('beta_warning') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'beta_warning'))) . '         }')) . '</div>
</div>
<br />
';// ENDIF
}
// IF SHOW_LIMITED_FUNCS
if ($this->_data['.'][0]['SHOW_LIMITED_FUNCS']) { 
// BEGIN lim_funcs
$_lim_funcs_count = (isset($this->_data['lim_funcs.'])) ?  sizeof($this->_data['lim_funcs.']) : 0;
if ($_lim_funcs_count) {
for ($_lim_funcs_i = 0; $_lim_funcs_i < $_lim_funcs_count; $_lim_funcs_i++)
{
echo '
<div class="errorbox roundbox">
	<div class="icon_false">' . ((isset($this->_data['lim_funcs.'][$_lim_funcs_i]['TEXT'])) ? $this->_data['lim_funcs.'][$_lim_funcs_i]['TEXT'] : '') . '</div>
</div>
<br />
';}}
// END lim_funcs
// ENDIF
}
echo '

<div id=\'admininfos_tabs\'>
  <ul>
    <li><a href=\'#fragment-1\'><span>' . ((isset($this->_data['.'][0]['L_adminc_news'])) ? $this->_data['.'][0]['L_adminc_news'] : (($this->lang('adminc_news')) ? $this->lang('adminc_news') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adminc_news'))) . '         }')) . '</span></a></li>
    <li><a href=\'#fragment-2\'><span>' . ((isset($this->_data['.'][0]['L_adminc_statistics'])) ? $this->_data['.'][0]['L_adminc_statistics'] : (($this->lang('adminc_statistics')) ? $this->lang('adminc_statistics') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adminc_statistics'))) . '         }')) . '</span></a></li>
    <li><a href=\'#fragment-3\'><span>' . ((isset($this->_data['.'][0]['L_adminc_server'])) ? $this->_data['.'][0]['L_adminc_server'] : (($this->lang('adminc_server')) ? $this->lang('adminc_server') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adminc_server'))) . '         }')) . '</span></a></li>
    <li><a href=\'#fragment-4\'><span>' . ((isset($this->_data['.'][0]['L_adminc_support'])) ? $this->_data['.'][0]['L_adminc_support'] : (($this->lang('adminc_support')) ? $this->lang('adminc_support') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adminc_support'))) . '         }')) . '</span></a></li>
  </ul>

  <div id="fragment-1">
    <table width="100%" align="center"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="50%">
          <table width="100%">
            <tr>
              <th>' . ((isset($this->_data['.'][0]['L_rssadmin_head1'])) ? $this->_data['.'][0]['L_rssadmin_head1'] : (($this->lang('rssadmin_head1')) ? $this->lang('rssadmin_head1') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'rssadmin_head1'))) . '         }')) . '</th>
            </tr>
            <tr>
              <td style="width:100%;"><div id="rss"><div id="notifications"></div></div></td>
            </tr>
          </table>
        </td>
        <td width="20"> </td>
        <td width="50%">
          <table width="100%">
            <tr>
              <th>' . ((isset($this->_data['.'][0]['L_rssadmin_head2'])) ? $this->_data['.'][0]['L_rssadmin_head2'] : (($this->lang('rssadmin_head2')) ? $this->lang('rssadmin_head2') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'rssadmin_head2'))) . '         }')) . ' <a href="http://twitter.com/EQdkpPlus" target="new" ><img src=\'../images/logos/twitter_icon_16.png\' alt=\'twitter\' /></a>
				<a href="http://www.facebook.com/pages/EQdkp-Plus/164694353225" target="new" ><img src=\'../images/logos/facebook_icon_16.png\' alt=\'facebook\' /></a></th>
            </tr>
            <tr>
              <td><div id="twitterfeed"></div></td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </div>

  <div id="fragment-2">
    <table width="100%" border="0" cellspacing="1" cellpadding="2">
      <tr>
        <th align="center" colspan="4">' . ((isset($this->_data['.'][0]['L_statistics'])) ? $this->_data['.'][0]['L_statistics'] : (($this->lang('statistics')) ? $this->lang('statistics') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'statistics'))) . '         }')) . '</th>
      </tr>
      <tr>
        <td class="row2" width="25%">' . ((isset($this->_data['.'][0]['L_liveupdate_installed_version'])) ? $this->_data['.'][0]['L_liveupdate_installed_version'] : (($this->lang('liveupdate_installed_version')) ? $this->lang('liveupdate_installed_version') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'liveupdate_installed_version'))) . '         }')) . ':</td>
        <td class="row1" width="25%">' . ((isset($this->_data['.'][0]['EQDKP_VERSION'])) ? $this->_data['.'][0]['EQDKP_VERSION'] : '') . '</td>
        <td class="row2" width="25%">' . ((isset($this->_data['.'][0]['L_number_of_members'])) ? $this->_data['.'][0]['L_number_of_members'] : (($this->lang('number_of_members')) ? $this->lang('number_of_members') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'number_of_members'))) . '         }')) . ':</td>
        <td class="row1" width="25%">' . ((isset($this->_data['.'][0]['NUMBER_OF_MEMBERS'])) ? $this->_data['.'][0]['NUMBER_OF_MEMBERS'] : '') . '</td>
      </tr>
      <tr>
        <td class="row2" width="25%">' . ((isset($this->_data['.'][0]['L_backup_system_data'])) ? $this->_data['.'][0]['L_backup_system_data'] : (($this->lang('backup_system_data')) ? $this->lang('backup_system_data') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'backup_system_data'))) . '         }')) . ':</td>
        <td class="row1" width="25%">' . ((isset($this->_data['.'][0]['DATA_FOLDER'])) ? $this->_data['.'][0]['DATA_FOLDER'] : '') . '</td>
        <td class="row2" width="25%">' . ((isset($this->_data['.'][0]['L_number_of_raids'])) ? $this->_data['.'][0]['L_number_of_raids'] : (($this->lang('number_of_raids')) ? $this->lang('number_of_raids') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'number_of_raids'))) . '         }')) . ':</td>
        <td class="row1" width="25%">' . ((isset($this->_data['.'][0]['NUMBER_OF_RAIDS'])) ? $this->_data['.'][0]['NUMBER_OF_RAIDS'] : '') . '</td>
      </tr>
      <tr>
        <td class="row2" width="25%">' . ((isset($this->_data['.'][0]['L_db_name'])) ? $this->_data['.'][0]['L_db_name'] : (($this->lang('db_name')) ? $this->lang('db_name') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'db_name'))) . '         }')) . ':</td>
        <td class="row1" width="25%">' . ((isset($this->_data['.'][0]['DATABASE_NAME'])) ? $this->_data['.'][0]['DATABASE_NAME'] : '') . '</td>
        <td class="row2" width="25%">' . ((isset($this->_data['.'][0]['L_raids_per_day'])) ? $this->_data['.'][0]['L_raids_per_day'] : (($this->lang('raids_per_day')) ? $this->lang('raids_per_day') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raids_per_day'))) . '         }')) . ':</td>
        <td class="row1" width="25%">' . ((isset($this->_data['.'][0]['RAIDS_PER_DAY'])) ? $this->_data['.'][0]['RAIDS_PER_DAY'] : '') . '</td>
      </tr>
      <tr>
        <td class="row2" width="25%">' . ((isset($this->_data['.'][0]['L_table_prefix'])) ? $this->_data['.'][0]['L_table_prefix'] : (($this->lang('table_prefix')) ? $this->lang('table_prefix') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'table_prefix'))) . '         }')) . ':</td>
        <td class="row1" width="25%">' . ((isset($this->_data['.'][0]['TABLE_PREFIX'])) ? $this->_data['.'][0]['TABLE_PREFIX'] : '') . '</td>
        <td class="row2" width="25%">' . ((isset($this->_data['.'][0]['L_number_of_items'])) ? $this->_data['.'][0]['L_number_of_items'] : (($this->lang('number_of_items')) ? $this->lang('number_of_items') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'number_of_items'))) . '         }')) . ':</td>
        <td class="row1" width="25%">' . ((isset($this->_data['.'][0]['NUMBER_OF_ITEMS'])) ? $this->_data['.'][0]['NUMBER_OF_ITEMS'] : '') . '</td>
      </tr>
	  <tr>
        <td class="row2" width="25%">' . ((isset($this->_data['.'][0]['L_database_size'])) ? $this->_data['.'][0]['L_database_size'] : (($this->lang('database_size')) ? $this->lang('database_size') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'database_size'))) . '         }')) . ':</td>
        <td class="row1" width="25%">' . ((isset($this->_data['.'][0]['DATABASE_SIZE'])) ? $this->_data['.'][0]['DATABASE_SIZE'] : '') . '</td>
        <td class="row2" width="25%">' . ((isset($this->_data['.'][0]['L_items_per_day'])) ? $this->_data['.'][0]['L_items_per_day'] : (($this->lang('items_per_day')) ? $this->lang('items_per_day') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'items_per_day'))) . '         }')) . ':</td>
        <td class="row1" width="25%">' . ((isset($this->_data['.'][0]['ITEMS_PER_DAY'])) ? $this->_data['.'][0]['ITEMS_PER_DAY'] : '') . '</td>
      </tr>
	  <tr>
        <td class="row2" width="25%">' . ((isset($this->_data['.'][0]['L_eqdkp_started'])) ? $this->_data['.'][0]['L_eqdkp_started'] : (($this->lang('eqdkp_started')) ? $this->lang('eqdkp_started') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'eqdkp_started'))) . '         }')) . ':</td>
        <td class="row1" width="25%">' . ((isset($this->_data['.'][0]['EQDKP_STARTED'])) ? $this->_data['.'][0]['EQDKP_STARTED'] : '') . '</td>
        <td class="row2" width="25%">' . ((isset($this->_data['.'][0]['L_number_of_logs'])) ? $this->_data['.'][0]['L_number_of_logs'] : (($this->lang('number_of_logs')) ? $this->lang('number_of_logs') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'number_of_logs'))) . '         }')) . ':</td>
        <td class="row1" width="25%">' . ((isset($this->_data['.'][0]['NUMBER_OF_LOGS'])) ? $this->_data['.'][0]['NUMBER_OF_LOGS'] : '') . '</td>
      </tr>
      <tr>
        <th align="center" colspan="4">&nbsp;</th>
      </tr>
    </table>
  </div>

  <div id="fragment-3">
    <table width="100%" border="0">
     <tr>
          <th>' . ((isset($this->_data['.'][0]['L_adminc_phpname'])) ? $this->_data['.'][0]['L_adminc_phpname'] : (($this->lang('adminc_phpname')) ? $this->lang('adminc_phpname') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adminc_phpname'))) . '         }')) . '</th>
          <th>' . ((isset($this->_data['.'][0]['L_adminc_phpvalue'])) ? $this->_data['.'][0]['L_adminc_phpvalue'] : (($this->lang('adminc_phpvalue')) ? $this->lang('adminc_phpvalue') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adminc_phpvalue'))) . '         }')) . '</th>
        </tr>
        <tr class="row1">
          <td>PHP Safe Mode</td>
          <td>' . ((isset($this->_data['.'][0]['SERVERINFO_SAFEMODE'])) ? $this->_data['.'][0]['SERVERINFO_SAFEMODE'] : '') . '</td>
        </tr>
        <tr class="row2">
          <td>Register Globals</td>
          <td>' . ((isset($this->_data['.'][0]['SERVERINFO_REGGLOBAL'])) ? $this->_data['.'][0]['SERVERINFO_REGGLOBAL'] : '') . '</td>
        </tr>
         <tr class="row1">
          <td>CURL</td>
          <td>' . ((isset($this->_data['.'][0]['SERVERINFO_CURL'])) ? $this->_data['.'][0]['SERVERINFO_CURL'] : '') . '</td>
        </tr>
         <tr class="row2">
          <td>Fopen</td>
          <td>' . ((isset($this->_data['.'][0]['SERVERINFO_FOPEN'])) ? $this->_data['.'][0]['SERVERINFO_FOPEN'] : '') . '</td>
        </tr>
         <tr class="row1">
          <td>PHP Version</td>
          <td>' . ((isset($this->_data['.'][0]['SERVERINFO_PHP'])) ? $this->_data['.'][0]['SERVERINFO_PHP'] : '') . ' <em>(<a href="info_php.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '">' . ((isset($this->_data['.'][0]['L_adminc_server'])) ? $this->_data['.'][0]['L_adminc_server'] : (($this->lang('adminc_server')) ? $this->lang('adminc_server') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adminc_server'))) . '         }')) . '</a>)</em></td>
        </tr>
        <tr class="row2">
          <td>Mysql Version</td>
          <td>' . ((isset($this->_data['.'][0]['SERVERINFO_MYSQL'])) ? $this->_data['.'][0]['SERVERINFO_MYSQL'] : '') . '</td>
        </tr>
        <tr>
        <td></td><td></td>
        </tr>
			</table>
  </div>

  <div id="fragment-4">
    ' . ((isset($this->_data['.'][0]['L_adminc_support_intro'])) ? $this->_data['.'][0]['L_adminc_support_intro'] : (($this->lang('adminc_support_intro')) ? $this->lang('adminc_support_intro') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adminc_support_intro'))) . '         }')) . '<br/><br/>
    <table width="100%" border="0">

      <tr>
      	<td><img src="../images/admin/admin_index/support_tour.png" alt="Tour" /></td>
      	<td>' . ((isset($this->_data['.'][0]['L_adminc_support_tour'])) ? $this->_data['.'][0]['L_adminc_support_tour'] : (($this->lang('adminc_support_tour')) ? $this->lang('adminc_support_tour') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adminc_support_tour'))) . '         }')) . '</td>
     	</tr>
      <tr>
        <td><img src="../images/admin/admin_index/support_wiki.png" alt="WIKI" /></td>
        <td>' . ((isset($this->_data['.'][0]['L_adminc_support_wiki'])) ? $this->_data['.'][0]['L_adminc_support_wiki'] : (($this->lang('adminc_support_wiki')) ? $this->lang('adminc_support_wiki') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adminc_support_wiki'))) . '         }')) . '</td>
      </tr>
       <tr>
        <td><img src="../images/admin/admin_index/support_bug.png" alt="Bugtracker" /></td>
        <td>' . ((isset($this->_data['.'][0]['L_adminc_support_bugtracker'])) ? $this->_data['.'][0]['L_adminc_support_bugtracker'] : (($this->lang('adminc_support_bugtracker')) ? $this->lang('adminc_support_bugtracker') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adminc_support_bugtracker'))) . '         }')) . '</td>
      </tr>
      <tr>
        <td><img src="../images/admin/admin_index/support_community.png" alt="Community" /></td>
        <td>' . ((isset($this->_data['.'][0]['L_adminc_support_forums'])) ? $this->_data['.'][0]['L_adminc_support_forums'] : (($this->lang('adminc_support_forums')) ? $this->lang('adminc_support_forums') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adminc_support_forums'))) . '         }')) . '</td>
      </tr>
    </table>
  </div>
</div>
<br/>
';// IF S_WHO_IS_ONLINE
if ($this->_data['.'][0]['S_WHO_IS_ONLINE']) { 
echo '
<table width="100%" border="0" cellspacing="1" cellpadding="2" class="colorswitch">
    <tr>
      <th align="center" colspan="6">' . ((isset($this->_data['.'][0]['L_who_online'])) ? $this->_data['.'][0]['L_who_online'] : (($this->lang('who_online')) ? $this->lang('who_online') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'who_online'))) . '         }')) . '</th>
    </tr>
    <tr>
      <th align="left" width="20%" class="nowrap">' . ((isset($this->_data['.'][0]['L_username'])) ? $this->_data['.'][0]['L_username'] : (($this->lang('username')) ? $this->lang('username') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'username'))) . '         }')) . '</th>
      <th align="left" width="20%" class="nowrap">' . ((isset($this->_data['.'][0]['L_logged_in'])) ? $this->_data['.'][0]['L_logged_in'] : (($this->lang('logged_in')) ? $this->lang('logged_in') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'logged_in'))) . '         }')) . '</th>
      <th align="left" width="20%" class="nowrap">' . ((isset($this->_data['.'][0]['L_last_update'])) ? $this->_data['.'][0]['L_last_update'] : (($this->lang('last_update')) ? $this->lang('last_update') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'last_update'))) . '         }')) . '</th>
      <th align="left" width="20%" class="nowrap">' . ((isset($this->_data['.'][0]['L_location'])) ? $this->_data['.'][0]['L_location'] : (($this->lang('location')) ? $this->lang('location') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'location'))) . '         }')) . '</th>
      <th align="left" width="20%" class="nowrap">' . ((isset($this->_data['.'][0]['L_ip_address'])) ? $this->_data['.'][0]['L_ip_address'] : (($this->lang('ip_address')) ? $this->lang('ip_address') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ip_address'))) . '         }')) . '</th>
      <th align="left" width="20%" class="nowrap">' . ((isset($this->_data['.'][0]['L_browser'])) ? $this->_data['.'][0]['L_browser'] : (($this->lang('browser')) ? $this->lang('browser') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'browser'))) . '         }')) . '</th>
    </tr>
    ';// BEGIN online_row
$_online_row_count = (isset($this->_data['online_row.'])) ?  sizeof($this->_data['online_row.']) : 0;
if ($_online_row_count) {
for ($_online_row_i = 0; $_online_row_i < $_online_row_count; $_online_row_i++)
{
echo '
    <tr>
      <td width="20%" class="nowrap">' . ((isset($this->_data['online_row.'][$_online_row_i]['USERNAME'])) ? $this->_data['online_row.'][$_online_row_i]['USERNAME'] : '') . '</td>
      <td width="20%" class="nowrap">' . ((isset($this->_data['online_row.'][$_online_row_i]['LOGIN'])) ? $this->_data['online_row.'][$_online_row_i]['LOGIN'] : '') . '</td>
      <td width="20%" class="nowrap">' . ((isset($this->_data['online_row.'][$_online_row_i]['LAST_UPDATE'])) ? $this->_data['online_row.'][$_online_row_i]['LAST_UPDATE'] : '') . '</td>
      <td width="20%" class="nowrap">' . ((isset($this->_data['online_row.'][$_online_row_i]['LOCATION'])) ? $this->_data['online_row.'][$_online_row_i]['LOCATION'] : '') . '</td>
      <td width="20%" class="nowrap"><span class="ip_resolver" title="' . ((isset($this->_data['online_row.'][$_online_row_i]['IP_ADDRESS'])) ? $this->_data['online_row.'][$_online_row_i]['IP_ADDRESS'] : '') . '">' . ((isset($this->_data['online_row.'][$_online_row_i]['IP_ADDRESS'])) ? $this->_data['online_row.'][$_online_row_i]['IP_ADDRESS'] : '') . '</span></td>
      <td width="20%" align="center" class="nowrap">' . ((isset($this->_data['online_row.'][$_online_row_i]['BROWSER'])) ? $this->_data['online_row.'][$_online_row_i]['BROWSER'] : '') . '</td>
    </tr>
    ';}}
// END online_row
echo '
    <tr>
      <th colspan="6" class="footer">' . ((isset($this->_data['.'][0]['ONLINE_FOOTCOUNT'])) ? $this->_data['.'][0]['ONLINE_FOOTCOUNT'] : '') . '</th>
    </tr>
  </table>
';// ENDIF
}
// IF S_LOGS
if ($this->_data['.'][0]['S_LOGS']) { 
echo '
<br />
<table width="100%" border="0" cellspacing="1" cellpadding="2" class="colorswitch">
  <tr>
    <th align="center" colspan="6">' . ((isset($this->_data['.'][0]['L_new_actions'])) ? $this->_data['.'][0]['L_new_actions'] : (($this->lang('new_actions')) ? $this->lang('new_actions') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'new_actions'))) . '         }')) . '</th>
  </tr>
  ' . ((isset($this->_data['.'][0]['LOGS_TABLE'])) ? $this->_data['.'][0]['LOGS_TABLE'] : '') . '  
</table>
';// ENDIF
}
// ELSE
} else {
echo '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="' . ((isset($this->_data['.'][0]['L_XML_LANG'])) ? $this->_data['.'][0]['L_XML_LANG'] : (($this->lang('XML_LANG')) ? $this->lang('XML_LANG') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'XML_LANG'))) . '         }')) . '" lang="' . ((isset($this->_data['.'][0]['L_XML_LANG'])) ? $this->_data['.'][0]['L_XML_LANG'] : (($this->lang('XML_LANG')) ? $this->lang('XML_LANG') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'XML_LANG'))) . '         }')) . '">
	<head>
	<!--

	This website is powered by EQDKP-PLUS Gamers CMS :: Licensed under Creative Commons by-nc-sa 3.0
	Copyright © 2006-2012 by EQDKP-PLUS Dev Team :: Plugins are copyright of their authors
	Visit the project website at http://eqdkp-plus.eu for more information

	//-->
		<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=9" /><![endif]-->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="' . ((isset($this->_data['.'][0]['META_KEYWORDS'])) ? $this->_data['.'][0]['META_KEYWORDS'] : '') . '" />
		<meta name="description" content="' . ((isset($this->_data['.'][0]['META_DESCRIPTION'])) ? $this->_data['.'][0]['META_DESCRIPTION'] : '') . '" />
		<meta name="author" content="' . ((isset($this->_data['.'][0]['GUILD_TAG'])) ? $this->_data['.'][0]['GUILD_TAG'] : '') . '" />
		' . ((isset($this->_data['.'][0]['META'])) ? $this->_data['.'][0]['META'] : '') . '
		<title>' . ((isset($this->_data['.'][0]['PAGE_TITLE'])) ? $this->_data['.'][0]['PAGE_TITLE'] : '') . '</title>
		' . ((isset($this->_data['.'][0]['CSS_FILES'])) ? $this->_data['.'][0]['CSS_FILES'] : '') . '
		' . ((isset($this->_data['.'][0]['JS_FILES'])) ? $this->_data['.'][0]['JS_FILES'] : '') . '
		<link rel="shortcut icon" href="' . ((isset($this->_data['.'][0]['TEMPLATE_PATH'])) ? $this->_data['.'][0]['TEMPLATE_PATH'] : '') . '/images/favicon.png" type="image/png" />
		<link rel="icon" href="' . ((isset($this->_data['.'][0]['TEMPLATE_PATH'])) ? $this->_data['.'][0]['TEMPLATE_PATH'] : '') . '/images/favicon.png" type="image/png" />
		' . ((isset($this->_data['.'][0]['RSS_FEEDS'])) ? $this->_data['.'][0]['RSS_FEEDS'] : '') . '
		<style type="text/css">
			' . ((isset($this->_data['.'][0]['CSS_CODE'])) ? $this->_data['.'][0]['CSS_CODE'] : '') . '
		</style>
		<script type="text/javascript">
			//<![CDATA[
			' . ((isset($this->_data['.'][0]['JS_CODE'])) ? $this->_data['.'][0]['JS_CODE'] : '') . '
			//]]>
		</script>
	</head>
	<body>
		<a name="top"></a>';echo '<!-- absolute top -->';echo '
		' . ((isset($this->_data['.'][0]['STATIC_HTMLCODE'])) ? $this->_data['.'][0]['STATIC_HTMLCODE'] : '') . '
		';// IF S_NORMAL_HEADER
if ($this->_data['.'][0]['S_NORMAL_HEADER']) { 
echo '
		
		<div id="wrapper" ';// IF T_PORTAL_WIDTH
if ($this->_data['.'][0]['T_PORTAL_WIDTH']) { 
echo 'class="fixed_width"';// ENDIF
}
echo '>
			<div id="personalArea">
				<div id="personalAreaLogin">
					';// IF not S_LOGGED_IN
if (! $this->_data['.'][0]['S_LOGGED_IN']) { 
echo '
					<form method="post" action="' . ((isset($this->_data['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_data['.'][0]['EQDKP_ROOT_PATH'] : '') . 'login.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '">
						<input name="username" size="20" maxlength="30" class="input username" id="loginarea_username" type="text" />
						<input name="password" size="20" maxlength="32" class="input password" id="loginarea_password" type="password" />
						<input type="checkbox" name="auto_login" title="' . ((isset($this->_data['.'][0]['L_remember_password'])) ? $this->_data['.'][0]['L_remember_password'] : (($this->lang('remember_password')) ? $this->lang('remember_password') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'remember_password'))) . '         }')) . '" class="absmiddle" />
						<input type="submit" class="mainoption bi_key" value="' . ((isset($this->_data['.'][0]['L_login'])) ? $this->_data['.'][0]['L_login'] : (($this->lang('login')) ? $this->lang('login') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'login'))) . '         }')) . '" name="login" /> ' . ((isset($this->_data['.'][0]['AUTH_LOGIN_BUTTON'])) ? $this->_data['.'][0]['AUTH_LOGIN_BUTTON'] : '') . '
						' . ((isset($this->_data['.'][0]['CSRF_TOKEN'])) ? $this->_data['.'][0]['CSRF_TOKEN'] : '') . '
					</form>
					
					';// ELSE
} else {
echo '
					<a href="' . ((isset($this->_data['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_data['.'][0]['EQDKP_ROOT_PATH'] : '') . 'settings.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'admin/manage_users.png" alt="user" class="absmiddle" /> ' . ((isset($this->_data['.'][0]['USER_NAME'])) ? $this->_data['.'][0]['USER_NAME'] : '') . '</a> 
					';// BEGIN user_notfications
$_user_notfications_count = (isset($this->_data['user_notfications.'])) ?  sizeof($this->_data['user_notfications.']) : 0;
if ($_user_notfications_count) {
for ($_user_notfications_i = 0; $_user_notfications_i < $_user_notfications_count; $_user_notfications_i++)
{
echo '
					&nbsp;&bull;&nbsp; ' . ((isset($this->_data['user_notifications.'][$_user_notifications_i]['MESSAGE'])) ? $this->_data['user_notifications.'][$_user_notifications_i]['MESSAGE'] : '') . '
					';}}
// END user_notfications
// IF S_ADMIN
if ($this->_data['.'][0]['S_ADMIN']) { 
echo '&nbsp;&bull;&nbsp; <a href="' . ((isset($this->_data['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_data['.'][0]['EQDKP_ROOT_PATH'] : '') . 'admin/index.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'admin/task_manager.png" class="absmiddle" alt="Admin" /> ' . ((isset($this->_data['.'][0]['L_menu_admin_panel'])) ? $this->_data['.'][0]['L_menu_admin_panel'] : (($this->lang('menu_admin_panel')) ? $this->lang('menu_admin_panel') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'menu_admin_panel'))) . '         }')) . '</a> ';// ENDIF
}
echo '
					&nbsp;&bull;&nbsp; <a href="' . ((isset($this->_data['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_data['.'][0]['EQDKP_ROOT_PATH'] : '') . 'login.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&amp;logout=true&amp;link_hash=' . ((isset($this->_data['.'][0]['CSRF_LOGOUT_TOKEN'])) ? $this->_data['.'][0]['CSRF_LOGOUT_TOKEN'] : '') . '"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'glyphs/logout.png" alt="user" class="absmiddle" /> ' . ((isset($this->_data['.'][0]['L_logout'])) ? $this->_data['.'][0]['L_logout'] : (($this->lang('logout')) ? $this->lang('logout') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'logout'))) . '         }')) . '</a>				
					';// ENDIF
}
// BEGIN personal_area_addition
$_personal_area_addition_count = (isset($this->_data['personal_area_addition.'])) ?  sizeof($this->_data['personal_area_addition.']) : 0;
if ($_personal_area_addition_count) {
for ($_personal_area_addition_i = 0; $_personal_area_addition_i < $_personal_area_addition_count; $_personal_area_addition_i++)
{
echo '
					&nbsp;&bull;&nbsp; ' . ((isset($this->_data['personal_area_addition.'][$_personal_area_addition_i]['TEXT'])) ? $this->_data['personal_area_addition.'][$_personal_area_addition_i]['TEXT'] : '') . '
					';}}
// END personal_area_addition
echo '
				</div>
				<div id="personalAreaTime">
					';// IF S_SEARCH
if ($this->_data['.'][0]['S_SEARCH']) { 
echo '
						<form method="post" action="' . ((isset($this->_data['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_data['.'][0]['EQDKP_ROOT_PATH'] : '') . 'search.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '" id="search_form">
							<input name="svalue" size="20" maxlength="30" class="input search" id="loginarea_search" type="text" value="' . ((isset($this->_data['.'][0]['L_search'])) ? $this->_data['.'][0]['L_search'] : (($this->lang('search')) ? $this->lang('search') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'search'))) . '         }')) . '..."/>
							<input type="submit" class="search_button" value="" title="' . ((isset($this->_data['.'][0]['L_search_do'])) ? $this->_data['.'][0]['L_search_do'] : (($this->lang('search_do')) ? $this->lang('search_do') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'search_do'))) . '         }')) . '" />
						</form>
					&nbsp; &bull; &nbsp;
					';// ENDIF
}
echo '
					<img src="' . ((isset($this->_data['.'][0]['TEMPLATE_PATH'])) ? $this->_data['.'][0]['TEMPLATE_PATH'] : '') . '/images/clock.png" alt="Clock" class="absmiddle" /> ' . ((isset($this->_data['.'][0]['USER_TIME'])) ? $this->_data['.'][0]['USER_TIME'] : '') . '
				</div>
				<div class="clear"></div>
			</div> ';echo '<!-- close personalArea -->';echo '
	
		<div id="header">
			<a name="header"></a>
			<div id="logoContainer" class="' . ((isset($this->_data['.'][0]['T_LOGO_POSITION'])) ? $this->_data['.'][0]['T_LOGO_POSITION'] : '') . '">
				<div id="logoArea">
					<img src="' . ((isset($this->_data['.'][0]['HEADER_LOGO'])) ? $this->_data['.'][0]['HEADER_LOGO'] : '') . '" alt="' . ((isset($this->_data['.'][0]['MAIN_TITLE'])) ? $this->_data['.'][0]['MAIN_TITLE'] : '') . '" id="mainlogo" />
				</div>';echo '<!-- close logoArea -->';echo '
				
				<div id="titles">
						<h1>' . ((isset($this->_data['.'][0]['MAIN_TITLE'])) ? $this->_data['.'][0]['MAIN_TITLE'] : '') . '</h1><br />
						<h2>' . ((isset($this->_data['.'][0]['SUB_TITLE'])) ? $this->_data['.'][0]['SUB_TITLE'] : '') . '</h2>
				</div>';echo '<!-- close titles-->';echo '
			
				<div class="clear noheight">&nbsp;</div>
			</div>
		</div> ';echo '<!-- close header-->';echo '
		
		<div id="mainmenu4">
			' . ((isset($this->_data['.'][0]['MAIN_MENU4'])) ? $this->_data['.'][0]['MAIN_MENU4'] : '') . '
			<div class="clear noheight">&nbsp;</div>
		</div>';echo '<!-- close mainmenu4 -->';echo '
		
		<div id="contentContainer">
			<a name="content"></a>
			';// IF S_IN_ADMIN
if ($this->_data['.'][0]['S_IN_ADMIN']) { 
echo '
			<div id="adminmenu">
				' . ((isset($this->_data['.'][0]['ADMIN_MENU'])) ? $this->_data['.'][0]['ADMIN_MENU'] : '') . '
			</div>
			';// ENDIF
}
echo '
		
			<div class="portal">
				<div class="columnContainer">
					';// IF FIRST_C
if ($this->_data['.'][0]['FIRST_C']) { 
echo '
					<div class="first column" style="';// IF T_COLUMN_LEFT_WIDTH
if ($this->_data['.'][0]['T_COLUMN_LEFT_WIDTH']) { 
echo 'min-width:' . ((isset($this->_data['.'][0]['T_COLUMN_LEFT_WIDTH'])) ? $this->_data['.'][0]['T_COLUMN_LEFT_WIDTH'] : '') . ';max-width:' . ((isset($this->_data['.'][0]['T_COLUMN_LEFT_WIDTH'])) ? $this->_data['.'][0]['T_COLUMN_LEFT_WIDTH'] : '') . ';';// ELSE
} else {
echo 'min-width: 180px;';// ENDIF
}
echo '">
						' . ((isset($this->_data['.'][0]['PORTAL_LEFT1'])) ? $this->_data['.'][0]['PORTAL_LEFT1'] : '') . '
						<div id="main_menu1" class="portalbox">
							<div class="portalbox_head">
								<span class="toggle_button active">&nbsp;</span>
								<span class="center">' . ((isset($this->_data['.'][0]['L_menu_eqdkp'])) ? $this->_data['.'][0]['L_menu_eqdkp'] : (($this->lang('menu_eqdkp')) ? $this->lang('menu_eqdkp') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'menu_eqdkp'))) . '         }')) . '</span>
							</div>
							<div class="portalbox_content">
							<div class="toggle_container">
								' . ((isset($this->_data['.'][0]['MAIN_MENU1'])) ? $this->_data['.'][0]['MAIN_MENU1'] : '') . '
							</div>
							</div>
						</div>
						
						<div id="main_menu2" class="portalbox">
							<div class="portalbox_head">
								<span class="toggle_button active">&nbsp;</span>
								<span class="center">' . ((isset($this->_data['.'][0]['L_menu_user'])) ? $this->_data['.'][0]['L_menu_user'] : (($this->lang('menu_user')) ? $this->lang('menu_user') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'menu_user'))) . '         }')) . '</span>
							</div>
							<div class="portalbox_content">
							<div class="toggle_container">
								' . ((isset($this->_data['.'][0]['MAIN_MENU2'])) ? $this->_data['.'][0]['MAIN_MENU2'] : '') . '
							</div>
							</div>
						</div>
						';// IF S_MAIN_MENU3
if ($this->_data['.'][0]['S_MAIN_MENU3']) { 
echo '
						<div id="main_menu3" class="portalbox">
							<div class="portalbox_head">
								<span class="toggle_button active">&nbsp;</span>
								<span class="center">' . ((isset($this->_data['.'][0]['L_menu_links_short'])) ? $this->_data['.'][0]['L_menu_links_short'] : (($this->lang('menu_links_short')) ? $this->lang('menu_links_short') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'menu_links_short'))) . '         }')) . '</span>
							</div>
							<div class="portalbox_content">
							<div class="toggle_container">
								' . ((isset($this->_data['.'][0]['MAIN_MENU3'])) ? $this->_data['.'][0]['MAIN_MENU3'] : '') . '
							</div>
							</div>
						</div>
						';// ENDIF
}
echo '
						' . ((isset($this->_data['.'][0]['PORTAL_LEFT2'])) ? $this->_data['.'][0]['PORTAL_LEFT2'] : '') . '
						
					</div> ';echo '<!-- close first column -->';// ENDIF
}
echo '
					
					<div class="second column ';// IF not THIRD_C
if (! $this->_data['.'][0]['THIRD_C']) { 
echo 'no_third_column';// ENDIF
}
echo '">
						<div class="columnInner">
							';// BEGIN global_warnings
$_global_warnings_count = (isset($this->_data['global_warnings.'])) ?  sizeof($this->_data['global_warnings.']) : 0;
if ($_global_warnings_count) {
for ($_global_warnings_i = 0; $_global_warnings_i < $_global_warnings_count; $_global_warnings_i++)
{
echo '
								<div class="' . ((isset($this->_data['global_warnings.'][$_global_warnings_i]['CLASS'])) ? $this->_data['global_warnings.'][$_global_warnings_i]['CLASS'] : '') . ' roundbox">
									<div class="' . ((isset($this->_data['global_warnings.'][$_global_warnings_i]['ICON'])) ? $this->_data['global_warnings.'][$_global_warnings_i]['ICON'] : '') . '">' . ((isset($this->_data['global_warnings.'][$_global_warnings_i]['MESSAGE'])) ? $this->_data['global_warnings.'][$_global_warnings_i]['MESSAGE'] : '') . '</div>
								</div>
								<br />
							';}}
// END global_warnings
echo '

							' . ((isset($this->_data['.'][0]['NEWS_TICKER_H'])) ? $this->_data['.'][0]['NEWS_TICKER_H'] : '') . '
							' . ((isset($this->_data['.'][0]['PORTAL_MIDDLE'])) ? $this->_data['.'][0]['PORTAL_MIDDLE'] : '') . '
							';// ENDIF
}
echo '
							<div id="contentBody" class="';// IF not S_NORMAL_HEADER
if (! $this->_data['.'][0]['S_NORMAL_HEADER']) { 
echo 'simpleHeader ';// ENDIF
}
// IF not S_NORMAL_FOOTER
if (! $this->_data['.'][0]['S_NORMAL_FOOTER']) { 
echo 'simpleFooter ';// ENDIF
}
echo '">
								';// IF SHOW_PHP_WARNING
if ($this->_data['.'][0]['SHOW_PHP_WARNING']) { 
echo '
<div class="errorbox roundbox">
	<div class="icon_false">' . ((isset($this->_data['.'][0]['L_php_warning'])) ? $this->_data['.'][0]['L_php_warning'] : (($this->lang('php_warning')) ? $this->lang('php_warning') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'php_warning'))) . '         }')) . '</div>
</div>
<br />
';// ENDIF
}
// IF SHOW_BETA_WARNING
if ($this->_data['.'][0]['SHOW_BETA_WARNING']) { 
echo '
<div class="errorbox roundbox">
	<div class="icon_false">' . ((isset($this->_data['.'][0]['L_beta_warning'])) ? $this->_data['.'][0]['L_beta_warning'] : (($this->lang('beta_warning')) ? $this->lang('beta_warning') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'beta_warning'))) . '         }')) . '</div>
</div>
<br />
';// ENDIF
}
// IF SHOW_LIMITED_FUNCS
if ($this->_data['.'][0]['SHOW_LIMITED_FUNCS']) { 
// BEGIN lim_funcs
$_lim_funcs_count = (isset($this->_data['lim_funcs.'])) ?  sizeof($this->_data['lim_funcs.']) : 0;
if ($_lim_funcs_count) {
for ($_lim_funcs_i = 0; $_lim_funcs_i < $_lim_funcs_count; $_lim_funcs_i++)
{
echo '
<div class="errorbox roundbox">
	<div class="icon_false">' . ((isset($this->_data['lim_funcs.'][$_lim_funcs_i]['TEXT'])) ? $this->_data['lim_funcs.'][$_lim_funcs_i]['TEXT'] : '') . '</div>
</div>
<br />
';}}
// END lim_funcs
// ENDIF
}
echo '

<div id=\'admininfos_tabs\'>
  <ul>
    <li><a href=\'#fragment-1\'><span>' . ((isset($this->_data['.'][0]['L_adminc_news'])) ? $this->_data['.'][0]['L_adminc_news'] : (($this->lang('adminc_news')) ? $this->lang('adminc_news') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adminc_news'))) . '         }')) . '</span></a></li>
    <li><a href=\'#fragment-2\'><span>' . ((isset($this->_data['.'][0]['L_adminc_statistics'])) ? $this->_data['.'][0]['L_adminc_statistics'] : (($this->lang('adminc_statistics')) ? $this->lang('adminc_statistics') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adminc_statistics'))) . '         }')) . '</span></a></li>
    <li><a href=\'#fragment-3\'><span>' . ((isset($this->_data['.'][0]['L_adminc_server'])) ? $this->_data['.'][0]['L_adminc_server'] : (($this->lang('adminc_server')) ? $this->lang('adminc_server') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adminc_server'))) . '         }')) . '</span></a></li>
    <li><a href=\'#fragment-4\'><span>' . ((isset($this->_data['.'][0]['L_adminc_support'])) ? $this->_data['.'][0]['L_adminc_support'] : (($this->lang('adminc_support')) ? $this->lang('adminc_support') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adminc_support'))) . '         }')) . '</span></a></li>
  </ul>

  <div id="fragment-1">
    <table width="100%" align="center"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="50%">
          <table width="100%">
            <tr>
              <th>' . ((isset($this->_data['.'][0]['L_rssadmin_head1'])) ? $this->_data['.'][0]['L_rssadmin_head1'] : (($this->lang('rssadmin_head1')) ? $this->lang('rssadmin_head1') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'rssadmin_head1'))) . '         }')) . '</th>
            </tr>
            <tr>
              <td style="width:100%;"><div id="rss"><div id="notifications"></div></div></td>
            </tr>
          </table>
        </td>
        <td width="20"> </td>
        <td width="50%">
          <table width="100%">
            <tr>
              <th>' . ((isset($this->_data['.'][0]['L_rssadmin_head2'])) ? $this->_data['.'][0]['L_rssadmin_head2'] : (($this->lang('rssadmin_head2')) ? $this->lang('rssadmin_head2') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'rssadmin_head2'))) . '         }')) . ' <a href="http://twitter.com/EQdkpPlus" target="new" ><img src=\'../images/logos/twitter_icon_16.png\' alt=\'twitter\' /></a>
				<a href="http://www.facebook.com/pages/EQdkp-Plus/164694353225" target="new" ><img src=\'../images/logos/facebook_icon_16.png\' alt=\'facebook\' /></a></th>
            </tr>
            <tr>
              <td><div id="twitterfeed"></div></td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </div>

  <div id="fragment-2">
    <table width="100%" border="0" cellspacing="1" cellpadding="2">
      <tr>
        <th align="center" colspan="4">' . ((isset($this->_data['.'][0]['L_statistics'])) ? $this->_data['.'][0]['L_statistics'] : (($this->lang('statistics')) ? $this->lang('statistics') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'statistics'))) . '         }')) . '</th>
      </tr>
      <tr>
        <td class="row2" width="25%">' . ((isset($this->_data['.'][0]['L_liveupdate_installed_version'])) ? $this->_data['.'][0]['L_liveupdate_installed_version'] : (($this->lang('liveupdate_installed_version')) ? $this->lang('liveupdate_installed_version') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'liveupdate_installed_version'))) . '         }')) . ':</td>
        <td class="row1" width="25%">' . ((isset($this->_data['.'][0]['EQDKP_VERSION'])) ? $this->_data['.'][0]['EQDKP_VERSION'] : '') . '</td>
        <td class="row2" width="25%">' . ((isset($this->_data['.'][0]['L_number_of_members'])) ? $this->_data['.'][0]['L_number_of_members'] : (($this->lang('number_of_members')) ? $this->lang('number_of_members') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'number_of_members'))) . '         }')) . ':</td>
        <td class="row1" width="25%">' . ((isset($this->_data['.'][0]['NUMBER_OF_MEMBERS'])) ? $this->_data['.'][0]['NUMBER_OF_MEMBERS'] : '') . '</td>
      </tr>
      <tr>
        <td class="row2" width="25%">' . ((isset($this->_data['.'][0]['L_backup_system_data'])) ? $this->_data['.'][0]['L_backup_system_data'] : (($this->lang('backup_system_data')) ? $this->lang('backup_system_data') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'backup_system_data'))) . '         }')) . ':</td>
        <td class="row1" width="25%">' . ((isset($this->_data['.'][0]['DATA_FOLDER'])) ? $this->_data['.'][0]['DATA_FOLDER'] : '') . '</td>
        <td class="row2" width="25%">' . ((isset($this->_data['.'][0]['L_number_of_raids'])) ? $this->_data['.'][0]['L_number_of_raids'] : (($this->lang('number_of_raids')) ? $this->lang('number_of_raids') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'number_of_raids'))) . '         }')) . ':</td>
        <td class="row1" width="25%">' . ((isset($this->_data['.'][0]['NUMBER_OF_RAIDS'])) ? $this->_data['.'][0]['NUMBER_OF_RAIDS'] : '') . '</td>
      </tr>
      <tr>
        <td class="row2" width="25%">' . ((isset($this->_data['.'][0]['L_db_name'])) ? $this->_data['.'][0]['L_db_name'] : (($this->lang('db_name')) ? $this->lang('db_name') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'db_name'))) . '         }')) . ':</td>
        <td class="row1" width="25%">' . ((isset($this->_data['.'][0]['DATABASE_NAME'])) ? $this->_data['.'][0]['DATABASE_NAME'] : '') . '</td>
        <td class="row2" width="25%">' . ((isset($this->_data['.'][0]['L_raids_per_day'])) ? $this->_data['.'][0]['L_raids_per_day'] : (($this->lang('raids_per_day')) ? $this->lang('raids_per_day') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raids_per_day'))) . '         }')) . ':</td>
        <td class="row1" width="25%">' . ((isset($this->_data['.'][0]['RAIDS_PER_DAY'])) ? $this->_data['.'][0]['RAIDS_PER_DAY'] : '') . '</td>
      </tr>
      <tr>
        <td class="row2" width="25%">' . ((isset($this->_data['.'][0]['L_table_prefix'])) ? $this->_data['.'][0]['L_table_prefix'] : (($this->lang('table_prefix')) ? $this->lang('table_prefix') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'table_prefix'))) . '         }')) . ':</td>
        <td class="row1" width="25%">' . ((isset($this->_data['.'][0]['TABLE_PREFIX'])) ? $this->_data['.'][0]['TABLE_PREFIX'] : '') . '</td>
        <td class="row2" width="25%">' . ((isset($this->_data['.'][0]['L_number_of_items'])) ? $this->_data['.'][0]['L_number_of_items'] : (($this->lang('number_of_items')) ? $this->lang('number_of_items') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'number_of_items'))) . '         }')) . ':</td>
        <td class="row1" width="25%">' . ((isset($this->_data['.'][0]['NUMBER_OF_ITEMS'])) ? $this->_data['.'][0]['NUMBER_OF_ITEMS'] : '') . '</td>
      </tr>
	  <tr>
        <td class="row2" width="25%">' . ((isset($this->_data['.'][0]['L_database_size'])) ? $this->_data['.'][0]['L_database_size'] : (($this->lang('database_size')) ? $this->lang('database_size') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'database_size'))) . '         }')) . ':</td>
        <td class="row1" width="25%">' . ((isset($this->_data['.'][0]['DATABASE_SIZE'])) ? $this->_data['.'][0]['DATABASE_SIZE'] : '') . '</td>
        <td class="row2" width="25%">' . ((isset($this->_data['.'][0]['L_items_per_day'])) ? $this->_data['.'][0]['L_items_per_day'] : (($this->lang('items_per_day')) ? $this->lang('items_per_day') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'items_per_day'))) . '         }')) . ':</td>
        <td class="row1" width="25%">' . ((isset($this->_data['.'][0]['ITEMS_PER_DAY'])) ? $this->_data['.'][0]['ITEMS_PER_DAY'] : '') . '</td>
      </tr>
	  <tr>
        <td class="row2" width="25%">' . ((isset($this->_data['.'][0]['L_eqdkp_started'])) ? $this->_data['.'][0]['L_eqdkp_started'] : (($this->lang('eqdkp_started')) ? $this->lang('eqdkp_started') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'eqdkp_started'))) . '         }')) . ':</td>
        <td class="row1" width="25%">' . ((isset($this->_data['.'][0]['EQDKP_STARTED'])) ? $this->_data['.'][0]['EQDKP_STARTED'] : '') . '</td>
        <td class="row2" width="25%">' . ((isset($this->_data['.'][0]['L_number_of_logs'])) ? $this->_data['.'][0]['L_number_of_logs'] : (($this->lang('number_of_logs')) ? $this->lang('number_of_logs') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'number_of_logs'))) . '         }')) . ':</td>
        <td class="row1" width="25%">' . ((isset($this->_data['.'][0]['NUMBER_OF_LOGS'])) ? $this->_data['.'][0]['NUMBER_OF_LOGS'] : '') . '</td>
      </tr>
      <tr>
        <th align="center" colspan="4">&nbsp;</th>
      </tr>
    </table>
  </div>

  <div id="fragment-3">
    <table width="100%" border="0">
     <tr>
          <th>' . ((isset($this->_data['.'][0]['L_adminc_phpname'])) ? $this->_data['.'][0]['L_adminc_phpname'] : (($this->lang('adminc_phpname')) ? $this->lang('adminc_phpname') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adminc_phpname'))) . '         }')) . '</th>
          <th>' . ((isset($this->_data['.'][0]['L_adminc_phpvalue'])) ? $this->_data['.'][0]['L_adminc_phpvalue'] : (($this->lang('adminc_phpvalue')) ? $this->lang('adminc_phpvalue') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adminc_phpvalue'))) . '         }')) . '</th>
        </tr>
        <tr class="row1">
          <td>PHP Safe Mode</td>
          <td>' . ((isset($this->_data['.'][0]['SERVERINFO_SAFEMODE'])) ? $this->_data['.'][0]['SERVERINFO_SAFEMODE'] : '') . '</td>
        </tr>
        <tr class="row2">
          <td>Register Globals</td>
          <td>' . ((isset($this->_data['.'][0]['SERVERINFO_REGGLOBAL'])) ? $this->_data['.'][0]['SERVERINFO_REGGLOBAL'] : '') . '</td>
        </tr>
         <tr class="row1">
          <td>CURL</td>
          <td>' . ((isset($this->_data['.'][0]['SERVERINFO_CURL'])) ? $this->_data['.'][0]['SERVERINFO_CURL'] : '') . '</td>
        </tr>
         <tr class="row2">
          <td>Fopen</td>
          <td>' . ((isset($this->_data['.'][0]['SERVERINFO_FOPEN'])) ? $this->_data['.'][0]['SERVERINFO_FOPEN'] : '') . '</td>
        </tr>
         <tr class="row1">
          <td>PHP Version</td>
          <td>' . ((isset($this->_data['.'][0]['SERVERINFO_PHP'])) ? $this->_data['.'][0]['SERVERINFO_PHP'] : '') . ' <em>(<a href="info_php.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '">' . ((isset($this->_data['.'][0]['L_adminc_server'])) ? $this->_data['.'][0]['L_adminc_server'] : (($this->lang('adminc_server')) ? $this->lang('adminc_server') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adminc_server'))) . '         }')) . '</a>)</em></td>
        </tr>
        <tr class="row2">
          <td>Mysql Version</td>
          <td>' . ((isset($this->_data['.'][0]['SERVERINFO_MYSQL'])) ? $this->_data['.'][0]['SERVERINFO_MYSQL'] : '') . '</td>
        </tr>
        <tr>
        <td></td><td></td>
        </tr>
			</table>
  </div>

  <div id="fragment-4">
    ' . ((isset($this->_data['.'][0]['L_adminc_support_intro'])) ? $this->_data['.'][0]['L_adminc_support_intro'] : (($this->lang('adminc_support_intro')) ? $this->lang('adminc_support_intro') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adminc_support_intro'))) . '         }')) . '<br/><br/>
    <table width="100%" border="0">

      <tr>
      	<td><img src="../images/admin/admin_index/support_tour.png" alt="Tour" /></td>
      	<td>' . ((isset($this->_data['.'][0]['L_adminc_support_tour'])) ? $this->_data['.'][0]['L_adminc_support_tour'] : (($this->lang('adminc_support_tour')) ? $this->lang('adminc_support_tour') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adminc_support_tour'))) . '         }')) . '</td>
     	</tr>
      <tr>
        <td><img src="../images/admin/admin_index/support_wiki.png" alt="WIKI" /></td>
        <td>' . ((isset($this->_data['.'][0]['L_adminc_support_wiki'])) ? $this->_data['.'][0]['L_adminc_support_wiki'] : (($this->lang('adminc_support_wiki')) ? $this->lang('adminc_support_wiki') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adminc_support_wiki'))) . '         }')) . '</td>
      </tr>
       <tr>
        <td><img src="../images/admin/admin_index/support_bug.png" alt="Bugtracker" /></td>
        <td>' . ((isset($this->_data['.'][0]['L_adminc_support_bugtracker'])) ? $this->_data['.'][0]['L_adminc_support_bugtracker'] : (($this->lang('adminc_support_bugtracker')) ? $this->lang('adminc_support_bugtracker') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adminc_support_bugtracker'))) . '         }')) . '</td>
      </tr>
      <tr>
        <td><img src="../images/admin/admin_index/support_community.png" alt="Community" /></td>
        <td>' . ((isset($this->_data['.'][0]['L_adminc_support_forums'])) ? $this->_data['.'][0]['L_adminc_support_forums'] : (($this->lang('adminc_support_forums')) ? $this->lang('adminc_support_forums') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adminc_support_forums'))) . '         }')) . '</td>
      </tr>
    </table>
  </div>
</div>
<br/>
';// IF S_WHO_IS_ONLINE
if ($this->_data['.'][0]['S_WHO_IS_ONLINE']) { 
echo '
<table width="100%" border="0" cellspacing="1" cellpadding="2" class="colorswitch">
    <tr>
      <th align="center" colspan="6">' . ((isset($this->_data['.'][0]['L_who_online'])) ? $this->_data['.'][0]['L_who_online'] : (($this->lang('who_online')) ? $this->lang('who_online') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'who_online'))) . '         }')) . '</th>
    </tr>
    <tr>
      <th align="left" width="20%" class="nowrap">' . ((isset($this->_data['.'][0]['L_username'])) ? $this->_data['.'][0]['L_username'] : (($this->lang('username')) ? $this->lang('username') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'username'))) . '         }')) . '</th>
      <th align="left" width="20%" class="nowrap">' . ((isset($this->_data['.'][0]['L_logged_in'])) ? $this->_data['.'][0]['L_logged_in'] : (($this->lang('logged_in')) ? $this->lang('logged_in') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'logged_in'))) . '         }')) . '</th>
      <th align="left" width="20%" class="nowrap">' . ((isset($this->_data['.'][0]['L_last_update'])) ? $this->_data['.'][0]['L_last_update'] : (($this->lang('last_update')) ? $this->lang('last_update') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'last_update'))) . '         }')) . '</th>
      <th align="left" width="20%" class="nowrap">' . ((isset($this->_data['.'][0]['L_location'])) ? $this->_data['.'][0]['L_location'] : (($this->lang('location')) ? $this->lang('location') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'location'))) . '         }')) . '</th>
      <th align="left" width="20%" class="nowrap">' . ((isset($this->_data['.'][0]['L_ip_address'])) ? $this->_data['.'][0]['L_ip_address'] : (($this->lang('ip_address')) ? $this->lang('ip_address') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ip_address'))) . '         }')) . '</th>
      <th align="left" width="20%" class="nowrap">' . ((isset($this->_data['.'][0]['L_browser'])) ? $this->_data['.'][0]['L_browser'] : (($this->lang('browser')) ? $this->lang('browser') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'browser'))) . '         }')) . '</th>
    </tr>
    ';// BEGIN online_row
$_online_row_count = (isset($this->_data['online_row.'])) ?  sizeof($this->_data['online_row.']) : 0;
if ($_online_row_count) {
for ($_online_row_i = 0; $_online_row_i < $_online_row_count; $_online_row_i++)
{
echo '
    <tr>
      <td width="20%" class="nowrap">' . ((isset($this->_data['online_row.'][$_online_row_i]['USERNAME'])) ? $this->_data['online_row.'][$_online_row_i]['USERNAME'] : '') . '</td>
      <td width="20%" class="nowrap">' . ((isset($this->_data['online_row.'][$_online_row_i]['LOGIN'])) ? $this->_data['online_row.'][$_online_row_i]['LOGIN'] : '') . '</td>
      <td width="20%" class="nowrap">' . ((isset($this->_data['online_row.'][$_online_row_i]['LAST_UPDATE'])) ? $this->_data['online_row.'][$_online_row_i]['LAST_UPDATE'] : '') . '</td>
      <td width="20%" class="nowrap">' . ((isset($this->_data['online_row.'][$_online_row_i]['LOCATION'])) ? $this->_data['online_row.'][$_online_row_i]['LOCATION'] : '') . '</td>
      <td width="20%" class="nowrap"><span class="ip_resolver" title="' . ((isset($this->_data['online_row.'][$_online_row_i]['IP_ADDRESS'])) ? $this->_data['online_row.'][$_online_row_i]['IP_ADDRESS'] : '') . '">' . ((isset($this->_data['online_row.'][$_online_row_i]['IP_ADDRESS'])) ? $this->_data['online_row.'][$_online_row_i]['IP_ADDRESS'] : '') . '</span></td>
      <td width="20%" align="center" class="nowrap">' . ((isset($this->_data['online_row.'][$_online_row_i]['BROWSER'])) ? $this->_data['online_row.'][$_online_row_i]['BROWSER'] : '') . '</td>
    </tr>
    ';}}
// END online_row
echo '
    <tr>
      <th colspan="6" class="footer">' . ((isset($this->_data['.'][0]['ONLINE_FOOTCOUNT'])) ? $this->_data['.'][0]['ONLINE_FOOTCOUNT'] : '') . '</th>
    </tr>
  </table>
';// ENDIF
}
// IF S_LOGS
if ($this->_data['.'][0]['S_LOGS']) { 
echo '
<br />
<table width="100%" border="0" cellspacing="1" cellpadding="2" class="colorswitch">
  <tr>
    <th align="center" colspan="6">' . ((isset($this->_data['.'][0]['L_new_actions'])) ? $this->_data['.'][0]['L_new_actions'] : (($this->lang('new_actions')) ? $this->lang('new_actions') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'new_actions'))) . '         }')) . '</th>
  </tr>
  ' . ((isset($this->_data['.'][0]['LOGS_TABLE'])) ? $this->_data['.'][0]['LOGS_TABLE'] : '') . '  
</table>
';// ENDIF
}
echo '
							</div>';echo '<!-- close contentBody -->';// IF S_NORMAL_FOOTER
if ($this->_data['.'][0]['S_NORMAL_FOOTER']) { 
echo '
							' . ((isset($this->_data['.'][0]['PORTAL_BOTTOM'])) ? $this->_data['.'][0]['PORTAL_BOTTOM'] : '') . '
							';// IF S_SHOW_QUERIES
if ($this->_data['.'][0]['S_SHOW_QUERIES']) { 
echo '<br />' . ((isset($this->_data['.'][0]['DEBUG_TABS'])) ? $this->_data['.'][0]['DEBUG_TABS'] : '') . '';// ENDIF
}
// IF S_SHOW_DEBUG
if ($this->_data['.'][0]['S_SHOW_DEBUG']) { 
echo '
							<br /><div class="center">
								<span class="copyright">SQL Querys: ' . ((isset($this->_data['.'][0]['EQDKP_QUERYCOUNT'])) ? $this->_data['.'][0]['EQDKP_QUERYCOUNT'] : '') . ' | in ' . ((isset($this->_data['.'][0]['EQDKP_RENDERTIME'])) ? $this->_data['.'][0]['EQDKP_RENDERTIME'] : '') . ' | ' . ((isset($this->_data['.'][0]['EQDKP_MEM_PEAK'])) ? $this->_data['.'][0]['EQDKP_MEM_PEAK'] : '') . ' |
									<a href="http://validator.w3.org/check/referer" target="_top">XHTML Validate</a>
								</span>
							</div>
							';// ENDIF
}
echo '
						</div>
					</div>';echo '<!-- close second column -->';// IF THIRD_C
if ($this->_data['.'][0]['THIRD_C']) { 
echo '
					<div class="third column" style="';// IF T_COLUMN_RIGHT_WIDTH
if ($this->_data['.'][0]['T_COLUMN_RIGHT_WIDTH']) { 
echo 'min-width:' . ((isset($this->_data['.'][0]['T_COLUMN_RIGHT_WIDTH'])) ? $this->_data['.'][0]['T_COLUMN_RIGHT_WIDTH'] : '') . ';max-width:' . ((isset($this->_data['.'][0]['T_COLUMN_RIGHT_WIDTH'])) ? $this->_data['.'][0]['T_COLUMN_RIGHT_WIDTH'] : '') . '';// ELSE
} else {
echo 'min-width: 180px;';// ENDIF
}
echo '">
						<div class="columnInner">
							' . ((isset($this->_data['.'][0]['PORTAL_RIGHT'])) ? $this->_data['.'][0]['PORTAL_RIGHT'] : '') . '
						
						</div>
					</div>
					';// ENDIF
}
echo '
				</div>
			</div>
		
		</div>
		<div id="footer">
			' . ((isset($this->_data['.'][0]['EQDKP_PLUS_COPYRIGHT'])) ? $this->_data['.'][0]['EQDKP_PLUS_COPYRIGHT'] : '') . '
		</div> ';echo '<!-- close footer -->';echo '
	</div>';echo '<!-- close wrapper -->';// ELSE
} else {
// IF S_SHOW_QUERIES
if ($this->_data['.'][0]['S_SHOW_QUERIES']) { 
echo '<br />' . ((isset($this->_data['.'][0]['DEBUG_TABS'])) ? $this->_data['.'][0]['DEBUG_TABS'] : '') . '';// ENDIF
}
// ENDIF
}
echo '
	<script type="text/javascript">
		' . ((isset($this->_data['.'][0]['JS_CODE_EOP'])) ? $this->_data['.'][0]['JS_CODE_EOP'] : '') . '
		' . ((isset($this->_data['.'][0]['JS_CODE_EOP2'])) ? $this->_data['.'][0]['JS_CODE_EOP2'] : '') . '
	</script>		
	<a name="bottom"></a>
	</body>
</html>
';// ENDIF
}

}
?>