<?php
if ($this->security()) {
// IF S_NO_HEADER_FOOTER
if ($this->_data['.'][0]['S_NO_HEADER_FOOTER']) { 
echo '
	<form method="post" action="' . ((isset($this->_data['.'][0]['ACTION'])) ? $this->_data['.'][0]['ACTION'] : '') . '" name="post">
<table width="100%" border="0" cellspacing="1" cellpadding="4" class="colorswitch hoverrows">
	<tr>
		<th colspan="7">' . ((isset($this->_data['.'][0]['L_apa_manager'])) ? $this->_data['.'][0]['L_apa_manager'] : (($this->lang('apa_manager')) ? $this->lang('apa_manager') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'apa_manager'))) . '         }')) . '</th>
	</tr>
	<tr>
		<th colspan="3">' . ((isset($this->_data['.'][0]['L_action'])) ? $this->_data['.'][0]['L_action'] : (($this->lang('action')) ? $this->lang('action') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'action'))) . '         }')) . '</th>
		<th width="300" class="nowrap">' . ((isset($this->_data['.'][0]['L_apa_type'])) ? $this->_data['.'][0]['L_apa_type'] : (($this->lang('apa_type')) ? $this->lang('apa_type') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'apa_type'))) . '         }')) . '</th>
		<th width="150" class="nowrap">' . ((isset($this->_data['.'][0]['L_name'])) ? $this->_data['.'][0]['L_name'] : (($this->lang('name')) ? $this->lang('name') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'name'))) . '         }')) . '</th>
		<th width="80" class="nowrap">' . ((isset($this->_data['.'][0]['L_apa_exectime'])) ? $this->_data['.'][0]['L_apa_exectime'] : (($this->lang('apa_exectime')) ? $this->lang('apa_exectime') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'apa_exectime'))) . '         }')) . '</th>
		<th>' . ((isset($this->_data['.'][0]['L_apa_pools'])) ? $this->_data['.'][0]['L_apa_pools'] : (($this->lang('apa_pools')) ? $this->lang('apa_pools') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'apa_pools'))) . '         }')) . '</th>
	</tr>
	';// BEGIN apa_row
$_apa_row_count = (isset($this->_data['apa_row.'])) ?  sizeof($this->_data['apa_row.']) : 0;
if ($_apa_row_count) {
for ($_apa_row_i = 0; $_apa_row_i < $_apa_row_count; $_apa_row_i++)
{
echo '
	<tr>
		<td width="20"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'glyphs/edit.png" alt="' . ((isset($this->_data['apa_row.'][$_apa_row_i]['ID'])) ? $this->_data['apa_row.'][$_apa_row_i]['ID'] : '') . '" class="apa_edit hand" title="' . ((isset($this->_data['.'][0]['L_edit'])) ? $this->_data['.'][0]['L_edit'] : (($this->lang('edit')) ? $this->lang('edit') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'edit'))) . '         }')) . '" /></td>
		<td width="20"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'global/delete.png" alt="' . ((isset($this->_data['apa_row.'][$_apa_row_i]['ID'])) ? $this->_data['apa_row.'][$_apa_row_i]['ID'] : '') . '" class="apa_del hand" title="' . ((isset($this->_data['.'][0]['L_delete'])) ? $this->_data['.'][0]['L_delete'] : (($this->lang('delete')) ? $this->lang('delete') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'delete'))) . '         }')) . '" /></td>
		<td width="20"><a href="manage_auto_points.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&amp;recalc=true&amp;id=' . ((isset($this->_data['apa_row.'][$_apa_row_i]['ID'])) ? $this->_data['apa_row.'][$_apa_row_i]['ID'] : '') . '" title="' . ((isset($this->_data['.'][0]['L_apa_recalculate'])) ? $this->_data['.'][0]['L_apa_recalculate'] : (($this->lang('apa_recalculate')) ? $this->lang('apa_recalculate') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'apa_recalculate'))) . '         }')) . '"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'glyphs/recalculate.png" alt="" /></a></td>
		<td>' . ((isset($this->_data['apa_row.'][$_apa_row_i]['TYPE'])) ? $this->_data['apa_row.'][$_apa_row_i]['TYPE'] : '') . '</td>
		<td>' . ((isset($this->_data['apa_row.'][$_apa_row_i]['NAME'])) ? $this->_data['apa_row.'][$_apa_row_i]['NAME'] : '') . '</td>
		<td>' . ((isset($this->_data['apa_row.'][$_apa_row_i]['EXECTIME'])) ? $this->_data['apa_row.'][$_apa_row_i]['EXECTIME'] : '') . '</td>
		<td>' . ((isset($this->_data['apa_row.'][$_apa_row_i]['POOLS'])) ? $this->_data['apa_row.'][$_apa_row_i]['POOLS'] : '') . '</td>
	</tr>
	';}}
// END apa_row
echo '
	<tr>
		<th colspan="9"><input type="button" id="add_apa" value="' . ((isset($this->_data['.'][0]['L_APA_ADD'])) ? $this->_data['.'][0]['L_APA_ADD'] : (($this->lang('APA_ADD')) ? $this->lang('APA_ADD') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'APA_ADD'))) . '         }')) . '" class="mainoption bi_new" /> ' . ((isset($this->_data['.'][0]['TYPE_DD'])) ? $this->_data['.'][0]['TYPE_DD'] : '') . '</th>
	</tr>
</table>
<table width="100%" border="0" cellspacing="1" cellpadding="4" class="colorswitch hoverrows">
	<tr>
		<th colspan="5">' . ((isset($this->_data['.'][0]['L_apa_calc_funcs'])) ? $this->_data['.'][0]['L_apa_calc_funcs'] : (($this->lang('apa_calc_funcs')) ? $this->lang('apa_calc_funcs') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'apa_calc_funcs'))) . '         }')) . '</th>
	</tr>
	<tr>
		<th colspan="2">' . ((isset($this->_data['.'][0]['L_action'])) ? $this->_data['.'][0]['L_action'] : (($this->lang('action')) ? $this->lang('action') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'action'))) . '         }')) . '</th>
		<th width="200">' . ((isset($this->_data['.'][0]['L_apa_func_name'])) ? $this->_data['.'][0]['L_apa_func_name'] : (($this->lang('apa_func_name')) ? $this->lang('apa_func_name') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'apa_func_name'))) . '         }')) . '</th>
		<th width="300">' . ((isset($this->_data['.'][0]['L_apa_func_used'])) ? $this->_data['.'][0]['L_apa_func_used'] : (($this->lang('apa_func_used')) ? $this->lang('apa_func_used') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'apa_func_used'))) . '         }')) . '</th>
		<th>call function(100, now-2weeks, now, 14)</th>
	</tr>
	';// BEGIN func_row
$_func_row_count = (isset($this->_data['func_row.'])) ?  sizeof($this->_data['func_row.']) : 0;
if ($_func_row_count) {
for ($_func_row_i = 0; $_func_row_i < $_func_row_count; $_func_row_i++)
{
echo '
	<tr>
		<td width="20"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'glyphs/edit.png" alt="' . ((isset($this->_data['func_row.'][$_func_row_i]['NAME'])) ? $this->_data['func_row.'][$_func_row_i]['NAME'] : '') . '" class="func_edit hand" title="' . ((isset($this->_data['.'][0]['L_edit'])) ? $this->_data['.'][0]['L_edit'] : (($this->lang('edit')) ? $this->lang('edit') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'edit'))) . '         }')) . '" /></td>
		<td width="20"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'global/delete.png" alt="' . ((isset($this->_data['func_row.'][$_func_row_i]['NAME'])) ? $this->_data['func_row.'][$_func_row_i]['NAME'] : '') . '" class="func_del hand" title="' . ((isset($this->_data['.'][0]['L_delete'])) ? $this->_data['.'][0]['L_delete'] : (($this->lang('delete')) ? $this->lang('delete') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'delete'))) . '         }')) . '"';// IF func_row.NODEL
if ($this->_data['func_row.'][$_func_row_i]['NODEL']) { 
echo ' style="display:none;"';// ENDIF
}
echo ' /></td>
		<td>' . ((isset($this->_data['func_row.'][$_func_row_i]['NAME'])) ? $this->_data['func_row.'][$_func_row_i]['NAME'] : '') . '</td>
		<td>' . ((isset($this->_data['func_row.'][$_func_row_i]['USED'])) ? $this->_data['func_row.'][$_func_row_i]['USED'] : '') . '</td>
		<td>' . ((isset($this->_data['func_row.'][$_func_row_i]['EXPL'])) ? $this->_data['func_row.'][$_func_row_i]['EXPL'] : '') . '</td>
	</tr>
	';}}
// END func_row
echo '
	<tr>
		<th colspan="5">
			<input type="button" id="add_func" value="' . ((isset($this->_data['.'][0]['L_apa_add_func'])) ? $this->_data['.'][0]['L_apa_add_func'] : (($this->lang('apa_add_func')) ? $this->lang('apa_add_func') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'apa_add_func'))) . '         }')) . '" class="mainoption bi_new" />
		</th>
	</tr>
</table>
' . ((isset($this->_data['.'][0]['CSRF_TOKEN'])) ? $this->_data['.'][0]['CSRF_TOKEN'] : '') . '
</form>
';// ELSE
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
								<form method="post" action="' . ((isset($this->_data['.'][0]['ACTION'])) ? $this->_data['.'][0]['ACTION'] : '') . '" name="post">
<table width="100%" border="0" cellspacing="1" cellpadding="4" class="colorswitch hoverrows">
	<tr>
		<th colspan="7">' . ((isset($this->_data['.'][0]['L_apa_manager'])) ? $this->_data['.'][0]['L_apa_manager'] : (($this->lang('apa_manager')) ? $this->lang('apa_manager') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'apa_manager'))) . '         }')) . '</th>
	</tr>
	<tr>
		<th colspan="3">' . ((isset($this->_data['.'][0]['L_action'])) ? $this->_data['.'][0]['L_action'] : (($this->lang('action')) ? $this->lang('action') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'action'))) . '         }')) . '</th>
		<th width="300" class="nowrap">' . ((isset($this->_data['.'][0]['L_apa_type'])) ? $this->_data['.'][0]['L_apa_type'] : (($this->lang('apa_type')) ? $this->lang('apa_type') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'apa_type'))) . '         }')) . '</th>
		<th width="150" class="nowrap">' . ((isset($this->_data['.'][0]['L_name'])) ? $this->_data['.'][0]['L_name'] : (($this->lang('name')) ? $this->lang('name') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'name'))) . '         }')) . '</th>
		<th width="80" class="nowrap">' . ((isset($this->_data['.'][0]['L_apa_exectime'])) ? $this->_data['.'][0]['L_apa_exectime'] : (($this->lang('apa_exectime')) ? $this->lang('apa_exectime') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'apa_exectime'))) . '         }')) . '</th>
		<th>' . ((isset($this->_data['.'][0]['L_apa_pools'])) ? $this->_data['.'][0]['L_apa_pools'] : (($this->lang('apa_pools')) ? $this->lang('apa_pools') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'apa_pools'))) . '         }')) . '</th>
	</tr>
	';// BEGIN apa_row
$_apa_row_count = (isset($this->_data['apa_row.'])) ?  sizeof($this->_data['apa_row.']) : 0;
if ($_apa_row_count) {
for ($_apa_row_i = 0; $_apa_row_i < $_apa_row_count; $_apa_row_i++)
{
echo '
	<tr>
		<td width="20"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'glyphs/edit.png" alt="' . ((isset($this->_data['apa_row.'][$_apa_row_i]['ID'])) ? $this->_data['apa_row.'][$_apa_row_i]['ID'] : '') . '" class="apa_edit hand" title="' . ((isset($this->_data['.'][0]['L_edit'])) ? $this->_data['.'][0]['L_edit'] : (($this->lang('edit')) ? $this->lang('edit') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'edit'))) . '         }')) . '" /></td>
		<td width="20"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'global/delete.png" alt="' . ((isset($this->_data['apa_row.'][$_apa_row_i]['ID'])) ? $this->_data['apa_row.'][$_apa_row_i]['ID'] : '') . '" class="apa_del hand" title="' . ((isset($this->_data['.'][0]['L_delete'])) ? $this->_data['.'][0]['L_delete'] : (($this->lang('delete')) ? $this->lang('delete') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'delete'))) . '         }')) . '" /></td>
		<td width="20"><a href="manage_auto_points.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&amp;recalc=true&amp;id=' . ((isset($this->_data['apa_row.'][$_apa_row_i]['ID'])) ? $this->_data['apa_row.'][$_apa_row_i]['ID'] : '') . '" title="' . ((isset($this->_data['.'][0]['L_apa_recalculate'])) ? $this->_data['.'][0]['L_apa_recalculate'] : (($this->lang('apa_recalculate')) ? $this->lang('apa_recalculate') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'apa_recalculate'))) . '         }')) . '"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'glyphs/recalculate.png" alt="" /></a></td>
		<td>' . ((isset($this->_data['apa_row.'][$_apa_row_i]['TYPE'])) ? $this->_data['apa_row.'][$_apa_row_i]['TYPE'] : '') . '</td>
		<td>' . ((isset($this->_data['apa_row.'][$_apa_row_i]['NAME'])) ? $this->_data['apa_row.'][$_apa_row_i]['NAME'] : '') . '</td>
		<td>' . ((isset($this->_data['apa_row.'][$_apa_row_i]['EXECTIME'])) ? $this->_data['apa_row.'][$_apa_row_i]['EXECTIME'] : '') . '</td>
		<td>' . ((isset($this->_data['apa_row.'][$_apa_row_i]['POOLS'])) ? $this->_data['apa_row.'][$_apa_row_i]['POOLS'] : '') . '</td>
	</tr>
	';}}
// END apa_row
echo '
	<tr>
		<th colspan="9"><input type="button" id="add_apa" value="' . ((isset($this->_data['.'][0]['L_APA_ADD'])) ? $this->_data['.'][0]['L_APA_ADD'] : (($this->lang('APA_ADD')) ? $this->lang('APA_ADD') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'APA_ADD'))) . '         }')) . '" class="mainoption bi_new" /> ' . ((isset($this->_data['.'][0]['TYPE_DD'])) ? $this->_data['.'][0]['TYPE_DD'] : '') . '</th>
	</tr>
</table>
<table width="100%" border="0" cellspacing="1" cellpadding="4" class="colorswitch hoverrows">
	<tr>
		<th colspan="5">' . ((isset($this->_data['.'][0]['L_apa_calc_funcs'])) ? $this->_data['.'][0]['L_apa_calc_funcs'] : (($this->lang('apa_calc_funcs')) ? $this->lang('apa_calc_funcs') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'apa_calc_funcs'))) . '         }')) . '</th>
	</tr>
	<tr>
		<th colspan="2">' . ((isset($this->_data['.'][0]['L_action'])) ? $this->_data['.'][0]['L_action'] : (($this->lang('action')) ? $this->lang('action') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'action'))) . '         }')) . '</th>
		<th width="200">' . ((isset($this->_data['.'][0]['L_apa_func_name'])) ? $this->_data['.'][0]['L_apa_func_name'] : (($this->lang('apa_func_name')) ? $this->lang('apa_func_name') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'apa_func_name'))) . '         }')) . '</th>
		<th width="300">' . ((isset($this->_data['.'][0]['L_apa_func_used'])) ? $this->_data['.'][0]['L_apa_func_used'] : (($this->lang('apa_func_used')) ? $this->lang('apa_func_used') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'apa_func_used'))) . '         }')) . '</th>
		<th>call function(100, now-2weeks, now, 14)</th>
	</tr>
	';// BEGIN func_row
$_func_row_count = (isset($this->_data['func_row.'])) ?  sizeof($this->_data['func_row.']) : 0;
if ($_func_row_count) {
for ($_func_row_i = 0; $_func_row_i < $_func_row_count; $_func_row_i++)
{
echo '
	<tr>
		<td width="20"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'glyphs/edit.png" alt="' . ((isset($this->_data['func_row.'][$_func_row_i]['NAME'])) ? $this->_data['func_row.'][$_func_row_i]['NAME'] : '') . '" class="func_edit hand" title="' . ((isset($this->_data['.'][0]['L_edit'])) ? $this->_data['.'][0]['L_edit'] : (($this->lang('edit')) ? $this->lang('edit') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'edit'))) . '         }')) . '" /></td>
		<td width="20"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'global/delete.png" alt="' . ((isset($this->_data['func_row.'][$_func_row_i]['NAME'])) ? $this->_data['func_row.'][$_func_row_i]['NAME'] : '') . '" class="func_del hand" title="' . ((isset($this->_data['.'][0]['L_delete'])) ? $this->_data['.'][0]['L_delete'] : (($this->lang('delete')) ? $this->lang('delete') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'delete'))) . '         }')) . '"';// IF func_row.NODEL
if ($this->_data['func_row.'][$_func_row_i]['NODEL']) { 
echo ' style="display:none;"';// ENDIF
}
echo ' /></td>
		<td>' . ((isset($this->_data['func_row.'][$_func_row_i]['NAME'])) ? $this->_data['func_row.'][$_func_row_i]['NAME'] : '') . '</td>
		<td>' . ((isset($this->_data['func_row.'][$_func_row_i]['USED'])) ? $this->_data['func_row.'][$_func_row_i]['USED'] : '') . '</td>
		<td>' . ((isset($this->_data['func_row.'][$_func_row_i]['EXPL'])) ? $this->_data['func_row.'][$_func_row_i]['EXPL'] : '') . '</td>
	</tr>
	';}}
// END func_row
echo '
	<tr>
		<th colspan="5">
			<input type="button" id="add_func" value="' . ((isset($this->_data['.'][0]['L_apa_add_func'])) ? $this->_data['.'][0]['L_apa_add_func'] : (($this->lang('apa_add_func')) ? $this->lang('apa_add_func') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'apa_add_func'))) . '         }')) . '" class="mainoption bi_new" />
		</th>
	</tr>
</table>
' . ((isset($this->_data['.'][0]['CSRF_TOKEN'])) ? $this->_data['.'][0]['CSRF_TOKEN'] : '') . '
</form>
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