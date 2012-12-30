<?php
if ($this->security()) {
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<!--

	This website is powered by EQDKP-PLUS Gamers CMS :: Licensed under Creative Commons by-nc-sa 3.0
	Copyright © 2006-2012 by EQDKP-PLUS Dev Team :: Plugins are copyright of their authors
	Visit the project website at http://eqdkp-plus.eu for more information

	//-->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  ' . ((isset($this->_data['.'][0]['META'])) ? $this->_data['.'][0]['META'] : '') . '
  <title>EQdkp Plus ' . ((isset($this->_data['.'][0]['L_MMODE'])) ? $this->_data['.'][0]['L_MMODE'] : (($this->lang('MMODE')) ? $this->lang('MMODE') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'MMODE'))) . '         }')) . '</title>
  <style type="text/css">
  ';// INCLUDE maintenance.css
$this->assign_from_include('maintenance.css');
echo '

  		.debug_show {
			position:relative;
			display:inline;
		}
		.debug_hide {
			position:relative;
			display:none;
		}
  </style>
</head>

<body>

<div id="hdr" align="center">
  <table width="100%" border="0" cellspacing="1" cellpadding="2" class="header">
    <tr>
      <td width="100%">
        <center>
  	      <img src="../templates/maintenance/images/logo.png" alt="EQdkp Plus" class="absmiddle" />
        ' . ((isset($this->_data['.'][0]['L_MMODE'])) ? $this->_data['.'][0]['L_MMODE'] : (($this->lang('MMODE')) ? $this->lang('MMODE') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'MMODE'))) . '         }')) . '
        </center>
      </td>
    </tr>
  </table>
  ';// IF not S_HIDE_BREADCRUMP
if (! $this->_data['.'][0]['S_HIDE_BREADCRUMP']) { 
echo '
    <table width="100%" border="0" cellspacing="1" cellpadding="2" class="breadcrumb">
    <tr>
      <td width="100%"><div style="float:left">
      &nbsp; <a href="' . ((isset($this->_data['.'][0]['U_ACP'])) ? $this->_data['.'][0]['U_ACP'] : '') . '"><img src="../templates/maintenance/images/home.png" alt="Home" class="absmiddle" border="0"/> ' . ((isset($this->_data['.'][0]['L_ADMIN_PANEL'])) ? $this->_data['.'][0]['L_ADMIN_PANEL'] : (($this->lang('ADMIN_PANEL')) ? $this->lang('ADMIN_PANEL') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADMIN_PANEL'))) . '         }')) . '</a> &raquo; <a href="' . ((isset($this->_data['.'][0]['U_MMODE'])) ? $this->_data['.'][0]['U_MMODE'] : '') . '">' . ((isset($this->_data['.'][0]['L_MMODE'])) ? $this->_data['.'][0]['L_MMODE'] : (($this->lang('MMODE')) ? $this->lang('MMODE') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'MMODE'))) . '         }')) . '</a>';// BEGIN breadcrumps
$_breadcrumps_count = (isset($this->_data['breadcrumps.'])) ?  sizeof($this->_data['breadcrumps.']) : 0;
if ($_breadcrumps_count) {
for ($_breadcrumps_i = 0; $_breadcrumps_i < $_breadcrumps_count; $_breadcrumps_i++)
{
echo ' &raquo; ' . ((isset($this->_data['breadcrumps.'][$_breadcrumps_i]['BREADCRUMP'])) ? $this->_data['breadcrumps.'][$_breadcrumps_i]['BREADCRUMP'] : '') . ' ';}}
// END breadcrumps
echo '</div><div style="float:right">';// IF S_MMODE_ACTIVE
if ($this->_data['.'][0]['S_MMODE_ACTIVE']) { 
echo '<a href="task_manager.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&amp;disable=true"><img src="../templates/maintenance/images/disable.png" alt="Disable" class="absmiddle" border="0"/>' . ((isset($this->_data['.'][0]['L_DEACTIVATE_MMODE'])) ? $this->_data['.'][0]['L_DEACTIVATE_MMODE'] : (($this->lang('DEACTIVATE_MMODE')) ? $this->lang('DEACTIVATE_MMODE') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DEACTIVATE_MMODE'))) . '         }')) . '</a>';// ENDIF
}
echo '</div> </td>
    </tr>
  </table>
	<div class="breadcrumb_shadow"></div>
  ';// ENDIF
}
echo '
</div>
<br />
';// IF not S_MMODE_ACTIVE
if (! $this->_data['.'][0]['S_MMODE_ACTIVE']) { 
echo '

<div id="layer">
<div id="inner_layer">
<form action="task_manager.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '" method="post" name="post">
' . ((isset($this->_data['.'][0]['L_ACTIVATE_INFO'])) ? $this->_data['.'][0]['L_ACTIVATE_INFO'] : (($this->lang('ACTIVATE_INFO')) ? $this->lang('ACTIVATE_INFO') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ACTIVATE_INFO'))) . '         }')) . '
<input type="text" name="maintenance_message" value="' . ((isset($this->_data['.'][0]['MAINTENANCE_MESSAGE'])) ? $this->_data['.'][0]['MAINTENANCE_MESSAGE'] : '') . '" style="width:98%" /><br /><br />

<input type="submit" value="' . ((isset($this->_data['.'][0]['L_ACTIVATE_MMODE'])) ? $this->_data['.'][0]['L_ACTIVATE_MMODE'] : (($this->lang('ACTIVATE_MMODE')) ? $this->lang('ACTIVATE_MMODE') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ACTIVATE_MMODE'))) . '         }')) . '" name="activate" class="mainoption" /> <input type="submit" value="' . ((isset($this->_data['.'][0]['L_LEAVE_MMODE'])) ? $this->_data['.'][0]['L_LEAVE_MMODE'] : (($this->lang('LEAVE_MMODE')) ? $this->lang('LEAVE_MMODE') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'LEAVE_MMODE'))) . '         }')) . '" name="leave" class="mainoption" />
</form>
</div>
</div>
<script type="text/javascript">
document.post.maintenance_message.focus();
</script>
';// ENDIF
}
// IF S_SPLASH
if ($this->_data['.'][0]['S_SPLASH']) { 
echo '
<div id="layer">
<div id="inner_layer">
	<p><strong>' . ((isset($this->_data['.'][0]['L_SPLASH_WELCOME'])) ? $this->_data['.'][0]['L_SPLASH_WELCOME'] : (($this->lang('SPLASH_WELCOME')) ? $this->lang('SPLASH_WELCOME') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SPLASH_WELCOME'))) . '         }')) . '</strong></p>
	<p>' . ((isset($this->_data['.'][0]['L_SPLASH_DESC'])) ? $this->_data['.'][0]['L_SPLASH_DESC'] : (($this->lang('SPLASH_DESC')) ? $this->lang('SPLASH_DESC') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SPLASH_DESC'))) . '         }')) . '</p>
	<p>
		<table>
			<tr>
				<td><img src="../images/admin/admin_index/support_tour.png" border="0" /></td>
				<td>' . ((isset($this->_data['.'][0]['L_SPLASH_NEW'])) ? $this->_data['.'][0]['L_SPLASH_NEW'] : (($this->lang('SPLASH_NEW')) ? $this->lang('SPLASH_NEW') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SPLASH_NEW'))) . '         }')) . ' <br /> <strong><a href="task_manager.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&start_tour=true">' . ((isset($this->_data['.'][0]['L_TOUR_START'])) ? $this->_data['.'][0]['L_TOUR_START'] : (($this->lang('TOUR_START')) ? $this->lang('TOUR_START') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'TOUR_START'))) . '         }')) . '</a></strong></td>
			</tr>
		</table>
	</p>
	<input type="button" value="' . ((isset($this->_data['.'][0]['L_TOUR_START'])) ? $this->_data['.'][0]['L_TOUR_START'] : (($this->lang('TOUR_START')) ? $this->lang('TOUR_START') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'TOUR_START'))) . '         }')) . '" class="mainoption" onclick="window.location=\'task_manager.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&start_tour=true\'" />
	<input type="button" value="' . ((isset($this->_data['.'][0]['L_JUMP_TOUR'])) ? $this->_data['.'][0]['L_JUMP_TOUR'] : (($this->lang('JUMP_TOUR')) ? $this->lang('JUMP_TOUR') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'JUMP_TOUR'))) . '         }')) . '" class="mainoption" onclick="window.location=\'task_manager.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&no_tour=true\'" />
	<input type="button" value="' . ((isset($this->_data['.'][0]['L_06_IMPORT'])) ? $this->_data['.'][0]['L_06_IMPORT'] : (($this->lang('06_IMPORT')) ? $this->lang('06_IMPORT') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', '06_IMPORT'))) . '         }')) . '" class="mainoption" onclick="window.location=\'' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&type=import\'" />
	<input type="button" value="' . ((isset($this->_data['.'][0]['L_GUILD_IMPORT'])) ? $this->_data['.'][0]['L_GUILD_IMPORT'] : (($this->lang('GUILD_IMPORT')) ? $this->lang('GUILD_IMPORT') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'GUILD_IMPORT'))) . '         }')) . ' *" class="mainoption" onclick="window.location=\'task_manager.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&guild_import=true\'" /> <br />' . ((isset($this->_data['.'][0]['L_GUILD_IMPORT_INFO'])) ? $this->_data['.'][0]['L_GUILD_IMPORT_INFO'] : (($this->lang('GUILD_IMPORT_INFO')) ? $this->lang('GUILD_IMPORT_INFO') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'GUILD_IMPORT_INFO'))) . '         }')) . '
</div>
</div>
';// ENDIF
}
// IF NO_LEAVE
if ($this->_data['.'][0]['NO_LEAVE']) { 
echo '
<div id="layer">
<div id="inner_layer">
<form action="task_manager.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '" method="post" name="no_leave">
' . ((isset($this->_data['.'][0]['L_NO_LEAVE'])) ? $this->_data['.'][0]['L_NO_LEAVE'] : (($this->lang('NO_LEAVE')) ? $this->lang('NO_LEAVE') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NO_LEAVE'))) . '         }')) . '
<br />
<br />
<input type="submit" name="no_leave_accept" value="' . ((isset($this->_data['.'][0]['L_NO_LEAVE_ACCEPT'])) ? $this->_data['.'][0]['L_NO_LEAVE_ACCEPT'] : (($this->lang('NO_LEAVE_ACCEPT')) ? $this->lang('NO_LEAVE_ACCEPT') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NO_LEAVE_ACCEPT'))) . '         }')) . '" style="width:95%" class="mainoption" />
</form>
</div>
</div>
<script language="javascript">
document.post.no_leave_accept.focus();
</script>
';// ENDIF
}
echo '

<div id="cont" align="center">
<div class="contentWrapper">
	<div class="bluebox roundbox">
		<div class="icon_info">' . ((isset($this->_data['.'][0]['L_MMODE_INFO'])) ? $this->_data['.'][0]['L_MMODE_INFO'] : (($this->lang('MMODE_INFO')) ? $this->lang('MMODE_INFO') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'MMODE_INFO'))) . '         }')) . '</div>
	</div>
</div>

  <ul class="tabnav">
	';// BEGIN task_types
$_task_types_count = (isset($this->_data['task_types.'])) ?  sizeof($this->_data['task_types.']) : 0;
if ($_task_types_count) {
for ($_task_types_i = 0; $_task_types_i < $_task_types_count; $_task_types_i++)
{
echo '
	<li><a href="task_manager.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&amp;type=' . ((isset($this->_data['task_types.'][$_task_types_i]['TYPE'])) ? $this->_data['task_types.'][$_task_types_i]['TYPE'] : '') . '" ' . ((isset($this->_data['task_types.'][$_task_types_i]['ACTIVE'])) ? $this->_data['task_types.'][$_task_types_i]['ACTIVE'] : '') . '>' . ((isset($this->_data['task_types.'][$_task_types_i]['L_TYPE'])) ? $this->_data['task_types.'][$_task_types_i]['L_TYPE'] : '') . '</a></li>
	';}}
// END task_types
echo '
  </ul>
<br />
<div class="contentWrapper">
';// IF S_PFH_ERROR
if ($this->_data['.'][0]['S_PFH_ERROR']) { 
echo '
<div class="errorbox roundbox">
	<div class="false">
		<strong>' . ((isset($this->_data['.'][0]['L_pfh_ERROR'])) ? $this->_data['.'][0]['L_pfh_ERROR'] : (($this->lang('pfh_ERROR')) ? $this->lang('pfh_ERROR') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pfh_ERROR'))) . '         }')) . '</strong>
		<ul>
			';// BEGIN pfh_errors
$_pfh_errors_count = (isset($this->_data['pfh_errors.'])) ?  sizeof($this->_data['pfh_errors.']) : 0;
if ($_pfh_errors_count) {
for ($_pfh_errors_i = 0; $_pfh_errors_i < $_pfh_errors_count; $_pfh_errors_i++)
{
echo '
			<li>' . ((isset($this->_data['pfh_errors.'][$_pfh_errors_i]['PFH_ERROR'])) ? $this->_data['pfh_errors.'][$_pfh_errors_i]['PFH_ERROR'] : '') . '</li>
			';}}
// END pfh_errors
echo '
		</ul>
	</div>
</div>
<br />
';// ENDIF
}
// IF S_NEC_TASKS
if ($this->_data['.'][0]['S_NEC_TASKS']) { 
echo '
<div class="errorbox roundbox">
	<div class="false">' . ((isset($this->_data['.'][0]['L_NEC_TASK'])) ? $this->_data['.'][0]['L_NEC_TASK'] : (($this->lang('NEC_TASK')) ? $this->lang('NEC_TASK') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NEC_TASK'))) . '         }')) . '</div>
</div>
<br />
';// ENDIF
}
// IF S_NO_NEC_TASKS
if ($this->_data['.'][0]['S_NO_NEC_TASKS']) { 
echo '
<div class="greenbox roundbox">
	<div class="icon_ok">' . ((isset($this->_data['.'][0]['L_NO_NEC_TASK'])) ? $this->_data['.'][0]['L_NO_NEC_TASK'] : (($this->lang('NO_NEC_TASK')) ? $this->lang('NO_NEC_TASK') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NO_NEC_TASK'))) . '         }')) . '</div>
</div>
<br />
';// ENDIF
}
echo '
<div id="container">
';// IF not S_HIDE_TASK_TABLE
if (! $this->_data['.'][0]['S_HIDE_TASK_TABLE']) { 
echo '
<table width=\'100%\' border=\'1\' cellpadding="2" cellspacing="1" class="task_table colorswitch hoverrows">
  <tr>
  	<th width=\'20\'>&nbsp;</th>
    <th width=\'20%\'>' . ((isset($this->_data['.'][0]['L_NAME'])) ? $this->_data['.'][0]['L_NAME'] : (($this->lang('NAME')) ? $this->lang('NAME') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NAME'))) . '         }')) . '</th>
	<th width=\'45%\'>' . ((isset($this->_data['.'][0]['L_DESCRIPTION'])) ? $this->_data['.'][0]['L_DESCRIPTION'] : (($this->lang('DESCRIPTION')) ? $this->lang('DESCRIPTION') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DESCRIPTION'))) . '         }')) . '</th>
	<th width=\'10%\'>' . ((isset($this->_data['.'][0]['L_VERSION'])) ? $this->_data['.'][0]['L_VERSION'] : (($this->lang('VERSION')) ? $this->lang('VERSION') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'VERSION'))) . '         }')) . '</th>
	<th width=\'10%\'>' . ((isset($this->_data['.'][0]['L_AUTHOR'])) ? $this->_data['.'][0]['L_AUTHOR'] : (($this->lang('AUTHOR')) ? $this->lang('AUTHOR') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'AUTHOR'))) . '         }')) . '</th>
	<th width=\'15%\'>' . ((isset($this->_data['.'][0]['L_CLICK_ME'])) ? $this->_data['.'][0]['L_CLICK_ME'] : (($this->lang('CLICK_ME')) ? $this->lang('CLICK_ME') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CLICK_ME'))) . '         }')) . '</th>
  </tr>
  ';// BEGIN tasks_list
$_tasks_list_count = (isset($this->_data['tasks_list.'])) ?  sizeof($this->_data['tasks_list.']) : 0;
if ($_tasks_list_count) {
for ($_tasks_list_i = 0; $_tasks_list_i < $_tasks_list_count; $_tasks_list_i++)
{
echo '
  <tr>
    <th colspan="6" class="th_sub">' . ((isset($this->_data['tasks_list.'][$_tasks_list_i]['L_TASKS'])) ? $this->_data['tasks_list.'][$_tasks_list_i]['L_TASKS'] : '') . '</th>
  </tr>

  ';// BEGIN spec_task_list
$_spec_task_list_count = (isset($this->_data['tasks_list.'][$_tasks_list_i]['spec_task_list.'])) ? sizeof($this->_data['tasks_list.'][$_tasks_list_i]['spec_task_list.']) : 0;
if ($_spec_task_list_count) {
for ($_spec_task_list_i = 0; $_spec_task_list_i < $_spec_task_list_count; $_spec_task_list_i++)
{
echo '
  <tr>
  	<td width="20" class="nowrap">' . ((isset($this->_data['tasks_list.'][$_tasks_list_i]['spec_task_list.'][$_spec_task_list_i]['STATUS'])) ? $this->_data['tasks_list.'][$_tasks_list_i]['spec_task_list.'][$_spec_task_list_i]['STATUS'] : '') . '</td>
	<td>' . ((isset($this->_data['tasks_list.'][$_tasks_list_i]['spec_task_list.'][$_spec_task_list_i]['NAME'])) ? $this->_data['tasks_list.'][$_tasks_list_i]['spec_task_list.'][$_spec_task_list_i]['NAME'] : '') . '</td>
	<td>' . ((isset($this->_data['tasks_list.'][$_tasks_list_i]['spec_task_list.'][$_spec_task_list_i]['DESCRIPTION'])) ? $this->_data['tasks_list.'][$_tasks_list_i]['spec_task_list.'][$_spec_task_list_i]['DESCRIPTION'] : '') . '</td>
	<td>' . ((isset($this->_data['tasks_list.'][$_tasks_list_i]['spec_task_list.'][$_spec_task_list_i]['VERSION'])) ? $this->_data['tasks_list.'][$_tasks_list_i]['spec_task_list.'][$_spec_task_list_i]['VERSION'] : '') . '</td>
	<td>' . ((isset($this->_data['tasks_list.'][$_tasks_list_i]['spec_task_list.'][$_spec_task_list_i]['AUTHOR'])) ? $this->_data['tasks_list.'][$_tasks_list_i]['spec_task_list.'][$_spec_task_list_i]['AUTHOR'] : '') . '</td>
	<td class="nowrap">';// IF not tasks_list.spec_task_list.S_NOT_APPLICABLE
if (! $this->_data['tasks_list.'][$_tasks_list_i]['spec_task_list.'][$_spec_task_list_i]['S_NOT_APPLICABLE']) { 
echo '<a href="' . ((isset($this->_data['tasks_list.'][$_tasks_list_i]['spec_task_list.'][$_spec_task_list_i]['LINK'])) ? $this->_data['tasks_list.'][$_tasks_list_i]['spec_task_list.'][$_spec_task_list_i]['LINK'] : '') . '">' . ((isset($this->_data['.'][0]['L_CLICK_ME'])) ? $this->_data['.'][0]['L_CLICK_ME'] : (($this->lang('CLICK_ME')) ? $this->lang('CLICK_ME') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CLICK_ME'))) . '         }')) . '</a>';// ENDIF
}
echo '</td>
  </tr>
  ';}}
// END spec_task_list
}}
// END tasks_list
// IF UPDATE_ALL
if ($this->_data['.'][0]['UPDATE_ALL']) { 
echo '
  <tr>
	<th colspan=\'6\'>
	  <form method=\'post\' action=\'task.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&amp;update_all=1&amp;task=' . ((isset($this->_data['.'][0]['UPDATE_ALL'])) ? $this->_data['.'][0]['UPDATE_ALL'] : '') . '\'>
		<input type=\'submit\' name=\'start_sql_update\' value=\'' . ((isset($this->_data['.'][0]['L_UPDATE_ALL'])) ? $this->_data['.'][0]['L_UPDATE_ALL'] : (($this->lang('UPDATE_ALL')) ? $this->lang('UPDATE_ALL') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'UPDATE_ALL'))) . '         }')) . '\' class=\'mainoption\' />
	  </form>
	</th>
  </tr>
';// ENDIF
}
echo '
</table>
';// ENDIF
}
echo '
</div>
</div>
</div>
<br />
<div id="ftr" align="center">
	<script type="text/javascript" language="javascript">
		function debug_show_me(id) {

            for(var i=1; i<=' . ((isset($this->_data['.'][0]['MAX_ID'])) ? $this->_data['.'][0]['MAX_ID'] : '') . '; i++) {
            	var container = document.getElementById(\'debug_\'+i);
            	if(i != id) {
            		container.className = \'debug_hide\';
            	} else {
								if (container.className == \'debug_show\'){
            			container.className = \'debug_hide\';
								} else {
									container.className = \'debug_show\';
								}
            	}
            }
        }
    </script>
    ';// IF not S_HIDE_DEBUG
if (! $this->_data['.'][0]['S_HIDE_DEBUG']) { 
echo '
		<ul class="tabnav">
		';// BEGIN debug_types
$_debug_types_count = (isset($this->_data['debug_types.'])) ?  sizeof($this->_data['debug_types.']) : 0;
if ($_debug_types_count) {
for ($_debug_types_i = 0; $_debug_types_i < $_debug_types_count; $_debug_types_i++)
{
echo '
		<li><a href="javascript:debug_show_me(\'' . ((isset($this->_data['debug_types.'][$_debug_types_i]['ID'])) ? $this->_data['debug_types.'][$_debug_types_i]['ID'] : '') . '\')">' . ((isset($this->_data['debug_types.'][$_debug_types_i]['TYPE'])) ? $this->_data['debug_types.'][$_debug_types_i]['TYPE'] : '') . ' ' . ((isset($this->_data['.'][0]['L_CLICK'])) ? $this->_data['.'][0]['L_CLICK'] : (($this->lang('CLICK')) ? $this->lang('CLICK') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CLICK'))) . '         }')) . '</a></li>
		';}}
// END debug_types
echo '
		</ul>

		';// BEGIN debug_types
$_debug_types_count = (isset($this->_data['debug_types.'])) ?  sizeof($this->_data['debug_types.']) : 0;
if ($_debug_types_count) {
for ($_debug_types_i = 0; $_debug_types_i < $_debug_types_count; $_debug_types_i++)
{
echo '
	  	<div id=\'debug_' . ((isset($this->_data['debug_types.'][$_debug_types_i]['ID'])) ? $this->_data['debug_types.'][$_debug_types_i]['ID'] : '') . '\' class=\'debug_hide\'>
			<table border=\'1\' cellspacing=\'0\' cellpadding=\'1\' class="task_table">
	  			<tr>
	  				<th>' . ((isset($this->_data['debug_types.'][$_debug_types_i]['TYPE'])) ? $this->_data['debug_types.'][$_debug_types_i]['TYPE'] : '') . '</th>
	  			</tr>
				';// BEGIN debug_messages
$_debug_messages_count = (isset($this->_data['debug_types.'][$_debug_types_i]['debug_messages.'])) ? sizeof($this->_data['debug_types.'][$_debug_types_i]['debug_messages.']) : 0;
if ($_debug_messages_count) {
for ($_debug_messages_i = 0; $_debug_messages_i < $_debug_messages_count; $_debug_messages_i++)
{
echo '
	  			<tr class="' . ((isset($this->_data['debug_types.'][$_debug_types_i]['debug_messages.'][$_debug_messages_i]['ROW_CLASS'])) ? $this->_data['debug_types.'][$_debug_types_i]['debug_messages.'][$_debug_messages_i]['ROW_CLASS'] : '') . '">
					<td>' . ((isset($this->_data['debug_types.'][$_debug_types_i]['debug_messages.'][$_debug_messages_i]['MESSAGE'])) ? $this->_data['debug_types.'][$_debug_types_i]['debug_messages.'][$_debug_messages_i]['MESSAGE'] : '') . '</td>
				</tr>
	  		';}}
// END debug_messages
echo '
	  	</table>
			</div>
	  ';}}
// END debug_types
// ENDIF
}
echo '
  <!--
      If you use this software and find it to be useful, we ask that you
      retain the copyright notice below.  While not required for free use,
      it will help build interest in the EQdkp-Plus project.
  //-->
  <div class="copyright" ';// IF S_HIDE_DEBUG
if ($this->_data['.'][0]['S_HIDE_DEBUG']) { 
echo 'style="border-top:1px solid #000;"';// ENDIF
}
echo '>
    <a href="http://www.eqdkp-plus.com" target="_new">EQDKP Plus</a> &copy; 2006 - ' . ((isset($this->_data['.'][0]['TYEAR'])) ? $this->_data['.'][0]['TYEAR'] : '') . ' by EQDKP Plus Developer Team
  </div>
</div>

</body>
</html>';
}
?>