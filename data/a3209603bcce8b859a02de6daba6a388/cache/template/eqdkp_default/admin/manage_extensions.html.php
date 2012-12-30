<?php
if ($this->security()) {
// IF S_NO_HEADER_FOOTER
if ($this->_data['.'][0]['S_NO_HEADER_FOOTER']) { 
echo '
	<script type="text/javascript">
//<![CDATA[
var totalSteps = 4;
function set_progress_bar_value(recentNumber, labeltext){
	percent = Math.round((recentNumber / totalSteps) * 100);
	$("#nl_progressbar").progressbar("destroy");

	$("#nl_progressbar").progressbar({
		value: percent
	});
	
	$("#nl_progressbar_label").html(labeltext);
}

function update_error(data){
	$("#lu_error").show();
	$("#lu_error_label").html("<b>' . ((isset($this->_data['.'][0]['L_liveupdate_step_error'])) ? $this->_data['.'][0]['L_liveupdate_step_error'] : (($this->lang('liveupdate_step_error')) ? $this->lang('liveupdate_step_error') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'liveupdate_step_error'))) . '         }')) . '</b>" + data);
	$("#lu_loading_img").hide();
}

function repo_update(cat, extensioncode){
	';// IF S_HIDE_UPDATEWARNING
if ($this->_data['.'][0]['S_HIDE_UPDATEWARNING']) { 
echo '
	repo_update_start(cat, extensioncode);
	';// ELSE
} else {
echo '
	if (cat != 2) {
		update_confirm(cat, extensioncode);
	} else {
		repo_update_start(cat, extensioncode);
	}
	';// ENDIF
}
echo '
}

function repo_update_start(cat, extensioncode){
	$("#lu_error").hide();
	$("#nl_progressbar").show();
	$("#lu_loading_img").show();

	repo_step1(cat, extensioncode, \'update\');
}

function repo_install(cat, extensioncode){
	
	$("#lu_error").hide();
	$("#nl_progressbar").show();
	$("#lu_loading_img").show();

	repo_step1(cat, extensioncode, \'install\');
}

function repo_step1(cat, extensioncode, mode){
	set_progress_bar_value(0, \'' . ((isset($this->_data['.'][0]['L_repo_step1'])) ? $this->_data['.'][0]['L_repo_step1'] : (($this->lang('repo_step1')) ? $this->lang('repo_step1') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'repo_step1'))) . '         }')) . '...\');
	$.get(\'manage_extensions.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&step=1&cat=\'+cat+\'&code=\'+extensioncode, function(data) {
		  if (data == \'true\'){
			repo_step2(cat, extensioncode, mode);
		  } else {
			update_error(data);
		  }
	});
}

function repo_step2(cat, extensioncode, mode){
	set_progress_bar_value(1, \'' . ((isset($this->_data['.'][0]['L_repo_step2'])) ? $this->_data['.'][0]['L_repo_step2'] : (($this->lang('repo_step2')) ? $this->lang('repo_step2') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'repo_step2'))) . '         }')) . '...\');
	$.get(\'manage_extensions.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&step=2&cat=\'+cat+\'&code=\'+extensioncode, function(data) {
		  if (data == \'true\'){
			repo_step3(cat, extensioncode, mode);
		  } else {
			update_error(data);
		  }
	});
}

function repo_step3(cat, extensioncode, mode){
	set_progress_bar_value(2, \'' . ((isset($this->_data['.'][0]['L_repo_step3'])) ? $this->_data['.'][0]['L_repo_step3'] : (($this->lang('repo_step3')) ? $this->lang('repo_step3') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'repo_step3'))) . '         }')) . '...\');
	$.get(\'manage_extensions.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&step=3&cat=\'+cat+\'&code=\'+extensioncode, function(data) {
		  if (data == \'true\'){
			repo_step4(cat, extensioncode, mode);
		  } else {
			update_error(data);
		  }
	});
}

function repo_step4(cat, extensioncode, mode){
	set_progress_bar_value(3, \'' . ((isset($this->_data['.'][0]['L_repo_step4'])) ? $this->_data['.'][0]['L_repo_step4'] : (($this->lang('repo_step4')) ? $this->lang('repo_step4') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'repo_step4'))) . '         }')) . '...\');
	$.get(\'manage_extensions.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&step=4&cat=\'+cat+\'&code=\'+extensioncode, function(data) {
		  if (data == \'true\'){
			repo_step5(cat, extensioncode, mode);
		  } else {
			update_error(data);
		  }
	});
}

function repo_step5(cat, extensioncode, mode){
	window.location=\'manage_extensions.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&mode=\'+mode+\'&cat=\'+cat+\'&code=\'+extensioncode+\'&link_hash=' . ((isset($this->_data['.'][0]['CSRF_MODE_TOKEN'])) ? $this->_data['.'][0]['CSRF_MODE_TOKEN'] : '') . '\';
	return;	
}

function hide_update_warning(status){
	var hide = (status) ? 1 : 0;
	$.get(\'manage_extensions.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&hide_update_warning=true&hide=\'+hide+\'&link_hash=' . ((isset($this->_data['.'][0]['CSRF_UPDATEWARNING_TOKEN'])) ? $this->_data['.'][0]['CSRF_UPDATEWARNING_TOKEN'] : '') . '\');
}
//]]>
</script>
';// IF not S_REQUIREMENTS
if (! $this->_data['.'][0]['S_REQUIREMENTS']) { 
echo '
<div class="errorbox roundbox">
	<div class="icon_false"><b>' . ((isset($this->_data['.'][0]['L_repo_requirements_failed'])) ? $this->_data['.'][0]['L_repo_requirements_failed'] : (($this->lang('repo_requirements_failed')) ? $this->lang('repo_requirements_failed') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'repo_requirements_failed'))) . '         }')) . '</b></div>
</div>
';// ENDIF
}
echo '

<div class="errorbox roundbox" id="lu_error" style="display:none;">
		<div class="icon_false"><span id="lu_error_label"></span></div>
</div>

<div id="nl_progressbar" style="display:none;">
	<span class="nl_progressbar_label"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'global/loading.gif" id="lu_loading_img" alt="Loading..." /> &nbsp;<span id="nl_progressbar_label">' . ((isset($this->_data['.'][0]['L_liveupdate'])) ? $this->_data['.'][0]['L_liveupdate'] : (($this->lang('liveupdate')) ? $this->lang('liveupdate') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'liveupdate'))) . '         }')) . '...</span></span>
</div>

<div id=\'plus_plugins_tab\'>

	<ul>
		<li><a href=\'#fragment-1\'><span>' . ((isset($this->_data['.'][0]['L_CATEGORY_1'])) ? $this->_data['.'][0]['L_CATEGORY_1'] : (($this->lang('CATEGORY_1')) ? $this->lang('CATEGORY_1') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CATEGORY_1'))) . '         }')) . '</span></a>' . ((isset($this->_data['.'][0]['BADGE_1'])) ? $this->_data['.'][0]['BADGE_1'] : '') . '</li>
		<li><a href=\'#fragment-2\'><span>' . ((isset($this->_data['.'][0]['L_CATEGORY_2'])) ? $this->_data['.'][0]['L_CATEGORY_2'] : (($this->lang('CATEGORY_2')) ? $this->lang('CATEGORY_2') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CATEGORY_2'))) . '         }')) . '</span></a>' . ((isset($this->_data['.'][0]['BADGE_2'])) ? $this->_data['.'][0]['BADGE_2'] : '') . '</li>
		<li><a href=\'#fragment-3\'><span>' . ((isset($this->_data['.'][0]['L_CATEGORY_3'])) ? $this->_data['.'][0]['L_CATEGORY_3'] : (($this->lang('CATEGORY_3')) ? $this->lang('CATEGORY_3') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CATEGORY_3'))) . '         }')) . '</span></a>' . ((isset($this->_data['.'][0]['BADGE_3'])) ? $this->_data['.'][0]['BADGE_3'] : '') . '</li>
		<li><a href=\'#fragment-7\'><span>' . ((isset($this->_data['.'][0]['L_CATEGORY_7'])) ? $this->_data['.'][0]['L_CATEGORY_7'] : (($this->lang('CATEGORY_7')) ? $this->lang('CATEGORY_7') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CATEGORY_7'))) . '         }')) . '</span></a>' . ((isset($this->_data['.'][0]['BADGE_7'])) ? $this->_data['.'][0]['BADGE_7'] : '') . '</li>
		<li><a href=\'#fragment-upload\'><span>' . ((isset($this->_data['.'][0]['L_pi_manualupload'])) ? $this->_data['.'][0]['L_pi_manualupload'] : (($this->lang('pi_manualupload')) ? $this->lang('pi_manualupload') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pi_manualupload'))) . '         }')) . '</span></a></li>
	</ul>

	<div id="fragment-1">
		<table width="100%" border="0" cellspacing="1" cellpadding="4" class="colorswitch">
		<tr>
			<th align="left" width="16">&nbsp;</th>
			<th align="left" class="nowrap" width="16">' . ((isset($this->_data['.'][0]['L_action'])) ? $this->_data['.'][0]['L_action'] : (($this->lang('action')) ? $this->lang('action') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'action'))) . '         }')) . '</th>
			<th align="left" class="nowrap">' . ((isset($this->_data['.'][0]['L_name'])) ? $this->_data['.'][0]['L_name'] : (($this->lang('name')) ? $this->lang('name') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'name'))) . '         }')) . '</th>
			<th align="left" class="nowrap" colspan="' . ((isset($this->_data['.'][0]['DEP_COUNT'])) ? $this->_data['.'][0]['DEP_COUNT'] : '') . '">' . ((isset($this->_data['.'][0]['L_plug_dep_title'])) ? $this->_data['.'][0]['L_plug_dep_title'] : (($this->lang('plug_dep_title')) ? $this->lang('plug_dep_title') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'plug_dep_title'))) . '         }')) . '</th>
			<th align="left" class="nowrap">' . ((isset($this->_data['.'][0]['L_version'])) ? $this->_data['.'][0]['L_version'] : (($this->lang('version')) ? $this->lang('version') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'version'))) . '         }')) . '</th>
			<th align="left" class="nowrap">' . ((isset($this->_data['.'][0]['L_portalplugin_author'])) ? $this->_data['.'][0]['L_portalplugin_author'] : (($this->lang('portalplugin_author')) ? $this->lang('portalplugin_author') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'portalplugin_author'))) . '         }')) . '</th>
			<th align="left" class="nowrap">' . ((isset($this->_data['.'][0]['L_description'])) ? $this->_data['.'][0]['L_description'] : (($this->lang('description')) ? $this->lang('description') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'description'))) . '         }')) . '</th>
			<th align="left" class="nowrap">' . ((isset($this->_data['.'][0]['L_infos'])) ? $this->_data['.'][0]['L_infos'] : (($this->lang('infos')) ? $this->lang('infos') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'infos'))) . '         }')) . '</th>
		</tr>
		';// BEGIN plugins_row_red
$_plugins_row_red_count = (isset($this->_data['plugins_row_red.'])) ?  sizeof($this->_data['plugins_row_red.']) : 0;
if ($_plugins_row_red_count) {
for ($_plugins_row_red_i = 0; $_plugins_row_red_i < $_plugins_row_red_count; $_plugins_row_red_i++)
{
echo '
		<tr>
			<td width="16" align="center" class="nowrap"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'admin/plugin_red.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_plugin'])) ? $this->_data['.'][0]['L_plugin'] : (($this->lang('plugin')) ? $this->lang('plugin') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'plugin'))) . '         }')) . '" /></td>
			<td class="nowrap">' . ((isset($this->_data['plugins_row_red.'][$_plugins_row_red_i]['ACTION_LINK'])) ? $this->_data['plugins_row_red.'][$_plugins_row_red_i]['ACTION_LINK'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['plugins_row_red.'][$_plugins_row_red_i]['NAME'])) ? $this->_data['plugins_row_red.'][$_plugins_row_red_i]['NAME'] : '') . '</td>
			';// BEGIN dep_row
$_dep_row_count = (isset($this->_data['plugins_row_red.'][$_plugins_row_red_i]['dep_row.'])) ? sizeof($this->_data['plugins_row_red.'][$_plugins_row_red_i]['dep_row.']) : 0;
if ($_dep_row_count) {
for ($_dep_row_i = 0; $_dep_row_i < $_dep_row_count; $_dep_row_i++)
{
echo '
			<td class="nowrap">' . ((isset($this->_data['plugins_row_red.'][$_plugins_row_red_i]['dep_row.'][$_dep_row_i]['DEPENDENCY_STATUS'])) ? $this->_data['plugins_row_red.'][$_plugins_row_red_i]['dep_row.'][$_dep_row_i]['DEPENDENCY_STATUS'] : '') . '</td>
			';}}
// END dep_row
echo '
			<td class="nowrap">' . ((isset($this->_data['plugins_row_red.'][$_plugins_row_red_i]['VERSION'])) ? $this->_data['plugins_row_red.'][$_plugins_row_red_i]['VERSION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['plugins_row_red.'][$_plugins_row_red_i]['CONTACT'])) ? $this->_data['plugins_row_red.'][$_plugins_row_red_i]['CONTACT'] : '') . '</td>
			<td>' . ((isset($this->_data['plugins_row_red.'][$_plugins_row_red_i]['DESCRIPTION'])) ? $this->_data['plugins_row_red.'][$_plugins_row_red_i]['DESCRIPTION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['plugins_row_red.'][$_plugins_row_red_i]['LONG_DESCRIPTION'])) ? $this->_data['plugins_row_red.'][$_plugins_row_red_i]['LONG_DESCRIPTION'] : '') . '  ' . ((isset($this->_data['plugins_row_red.'][$_plugins_row_red_i]['HOMEPAGE'])) ? $this->_data['plugins_row_red.'][$_plugins_row_red_i]['HOMEPAGE'] : '') . ' ' . ((isset($this->_data['plugins_row_red.'][$_plugins_row_red_i]['MANUAL'])) ? $this->_data['plugins_row_red.'][$_plugins_row_red_i]['MANUAL'] : '') . '</td>
		</tr>
		';}}
// END plugins_row_red
// BEGIN plugins_row_yellow
$_plugins_row_yellow_count = (isset($this->_data['plugins_row_yellow.'])) ?  sizeof($this->_data['plugins_row_yellow.']) : 0;
if ($_plugins_row_yellow_count) {
for ($_plugins_row_yellow_i = 0; $_plugins_row_yellow_i < $_plugins_row_yellow_count; $_plugins_row_yellow_i++)
{
echo '
		<tr>
			<td width="16" align="center" class="nowrap"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'admin/plugin_yellow.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_plugin'])) ? $this->_data['.'][0]['L_plugin'] : (($this->lang('plugin')) ? $this->lang('plugin') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'plugin'))) . '         }')) . '" /></td>
			<td class="nowrap">' . ((isset($this->_data['plugins_row_yellow.'][$_plugins_row_yellow_i]['ACTION_LINK'])) ? $this->_data['plugins_row_yellow.'][$_plugins_row_yellow_i]['ACTION_LINK'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['plugins_row_yellow.'][$_plugins_row_yellow_i]['NAME'])) ? $this->_data['plugins_row_yellow.'][$_plugins_row_yellow_i]['NAME'] : '') . '</td>
			';// BEGIN dep_row
$_dep_row_count = (isset($this->_data['plugins_row_yellow.'][$_plugins_row_yellow_i]['dep_row.'])) ? sizeof($this->_data['plugins_row_yellow.'][$_plugins_row_yellow_i]['dep_row.']) : 0;
if ($_dep_row_count) {
for ($_dep_row_i = 0; $_dep_row_i < $_dep_row_count; $_dep_row_i++)
{
echo '
			<td class="nowrap">' . ((isset($this->_data['plugins_row_yellow.'][$_plugins_row_yellow_i]['dep_row.'][$_dep_row_i]['DEPENDENCY_STATUS'])) ? $this->_data['plugins_row_yellow.'][$_plugins_row_yellow_i]['dep_row.'][$_dep_row_i]['DEPENDENCY_STATUS'] : '') . '</td>
			';}}
// END dep_row
echo '
			<td class="nowrap">' . ((isset($this->_data['plugins_row_yellow.'][$_plugins_row_yellow_i]['VERSION'])) ? $this->_data['plugins_row_yellow.'][$_plugins_row_yellow_i]['VERSION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['plugins_row_yellow.'][$_plugins_row_yellow_i]['CONTACT'])) ? $this->_data['plugins_row_yellow.'][$_plugins_row_yellow_i]['CONTACT'] : '') . '</td>
			<td>' . ((isset($this->_data['plugins_row_yellow.'][$_plugins_row_yellow_i]['DESCRIPTION'])) ? $this->_data['plugins_row_yellow.'][$_plugins_row_yellow_i]['DESCRIPTION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['plugins_row_yellow.'][$_plugins_row_yellow_i]['LONG_DESCRIPTION'])) ? $this->_data['plugins_row_yellow.'][$_plugins_row_yellow_i]['LONG_DESCRIPTION'] : '') . '  ' . ((isset($this->_data['plugins_row_yellow.'][$_plugins_row_yellow_i]['HOMEPAGE'])) ? $this->_data['plugins_row_yellow.'][$_plugins_row_yellow_i]['HOMEPAGE'] : '') . ' ' . ((isset($this->_data['plugins_row_yellow.'][$_plugins_row_yellow_i]['MANUAL'])) ? $this->_data['plugins_row_yellow.'][$_plugins_row_yellow_i]['MANUAL'] : '') . '</td>
		</tr>
		';}}
// END plugins_row_yellow
// BEGIN plugins_row_green
$_plugins_row_green_count = (isset($this->_data['plugins_row_green.'])) ?  sizeof($this->_data['plugins_row_green.']) : 0;
if ($_plugins_row_green_count) {
for ($_plugins_row_green_i = 0; $_plugins_row_green_i < $_plugins_row_green_count; $_plugins_row_green_i++)
{
echo '
		<tr>
			<td width="16" align="center" class="nowrap"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'admin/plugin.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_plugin'])) ? $this->_data['.'][0]['L_plugin'] : (($this->lang('plugin')) ? $this->lang('plugin') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'plugin'))) . '         }')) . '" /></td>
			<td class="nowrap">' . ((isset($this->_data['plugins_row_green.'][$_plugins_row_green_i]['ACTION_LINK'])) ? $this->_data['plugins_row_green.'][$_plugins_row_green_i]['ACTION_LINK'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['plugins_row_green.'][$_plugins_row_green_i]['NAME'])) ? $this->_data['plugins_row_green.'][$_plugins_row_green_i]['NAME'] : '') . '</td>
			';// BEGIN dep_row
$_dep_row_count = (isset($this->_data['plugins_row_green.'][$_plugins_row_green_i]['dep_row.'])) ? sizeof($this->_data['plugins_row_green.'][$_plugins_row_green_i]['dep_row.']) : 0;
if ($_dep_row_count) {
for ($_dep_row_i = 0; $_dep_row_i < $_dep_row_count; $_dep_row_i++)
{
echo '
			<td class="nowrap">' . ((isset($this->_data['plugins_row_green.'][$_plugins_row_green_i]['dep_row.'][$_dep_row_i]['DEPENDENCY_STATUS'])) ? $this->_data['plugins_row_green.'][$_plugins_row_green_i]['dep_row.'][$_dep_row_i]['DEPENDENCY_STATUS'] : '') . '</td>
			';}}
// END dep_row
echo '
			<td class="nowrap">' . ((isset($this->_data['plugins_row_green.'][$_plugins_row_green_i]['VERSION'])) ? $this->_data['plugins_row_green.'][$_plugins_row_green_i]['VERSION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['plugins_row_green.'][$_plugins_row_green_i]['CONTACT'])) ? $this->_data['plugins_row_green.'][$_plugins_row_green_i]['CONTACT'] : '') . '</td>
			<td>' . ((isset($this->_data['plugins_row_green.'][$_plugins_row_green_i]['DESCRIPTION'])) ? $this->_data['plugins_row_green.'][$_plugins_row_green_i]['DESCRIPTION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['plugins_row_green.'][$_plugins_row_green_i]['LONG_DESCRIPTION'])) ? $this->_data['plugins_row_green.'][$_plugins_row_green_i]['LONG_DESCRIPTION'] : '') . '  ' . ((isset($this->_data['plugins_row_green.'][$_plugins_row_green_i]['HOMEPAGE'])) ? $this->_data['plugins_row_green.'][$_plugins_row_green_i]['HOMEPAGE'] : '') . ' ' . ((isset($this->_data['plugins_row_green.'][$_plugins_row_green_i]['MANUAL'])) ? $this->_data['plugins_row_green.'][$_plugins_row_green_i]['MANUAL'] : '') . '</td>
		</tr>
		';}}
// END plugins_row_green
// BEGIN plugins_row_grey
$_plugins_row_grey_count = (isset($this->_data['plugins_row_grey.'])) ?  sizeof($this->_data['plugins_row_grey.']) : 0;
if ($_plugins_row_grey_count) {
for ($_plugins_row_grey_i = 0; $_plugins_row_grey_i < $_plugins_row_grey_count; $_plugins_row_grey_i++)
{
echo '
		<tr>
			<td width="16" align="center" class="nowrap"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'admin/plugin_off.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_plugin'])) ? $this->_data['.'][0]['L_plugin'] : (($this->lang('plugin')) ? $this->lang('plugin') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'plugin'))) . '         }')) . '" /></td>
			<td class="nowrap">' . ((isset($this->_data['plugins_row_grey.'][$_plugins_row_grey_i]['ACTION_LINK'])) ? $this->_data['plugins_row_grey.'][$_plugins_row_grey_i]['ACTION_LINK'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['plugins_row_grey.'][$_plugins_row_grey_i]['NAME'])) ? $this->_data['plugins_row_grey.'][$_plugins_row_grey_i]['NAME'] : '') . '</td>
			';// BEGIN dep_row
$_dep_row_count = (isset($this->_data['plugins_row_grey.'][$_plugins_row_grey_i]['dep_row.'])) ? sizeof($this->_data['plugins_row_grey.'][$_plugins_row_grey_i]['dep_row.']) : 0;
if ($_dep_row_count) {
for ($_dep_row_i = 0; $_dep_row_i < $_dep_row_count; $_dep_row_i++)
{
echo '
			<td class="nowrap">' . ((isset($this->_data['plugins_row_grey.'][$_plugins_row_grey_i]['dep_row.'][$_dep_row_i]['DEPENDENCY_STATUS'])) ? $this->_data['plugins_row_grey.'][$_plugins_row_grey_i]['dep_row.'][$_dep_row_i]['DEPENDENCY_STATUS'] : '') . '</td>
			';}}
// END dep_row
echo '
			<td class="nowrap">' . ((isset($this->_data['plugins_row_grey.'][$_plugins_row_grey_i]['VERSION'])) ? $this->_data['plugins_row_grey.'][$_plugins_row_grey_i]['VERSION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['plugins_row_grey.'][$_plugins_row_grey_i]['CONTACT'])) ? $this->_data['plugins_row_grey.'][$_plugins_row_grey_i]['CONTACT'] : '') . '</td>
			<td>' . ((isset($this->_data['plugins_row_grey.'][$_plugins_row_grey_i]['DESCRIPTION'])) ? $this->_data['plugins_row_grey.'][$_plugins_row_grey_i]['DESCRIPTION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['plugins_row_grey.'][$_plugins_row_grey_i]['LONG_DESCRIPTION'])) ? $this->_data['plugins_row_grey.'][$_plugins_row_grey_i]['LONG_DESCRIPTION'] : '') . '  ' . ((isset($this->_data['plugins_row_grey.'][$_plugins_row_grey_i]['HOMEPAGE'])) ? $this->_data['plugins_row_grey.'][$_plugins_row_grey_i]['HOMEPAGE'] : '') . ' ' . ((isset($this->_data['plugins_row_grey.'][$_plugins_row_grey_i]['MANUAL'])) ? $this->_data['plugins_row_grey.'][$_plugins_row_grey_i]['MANUAL'] : '') . '</td>
		</tr>
		';}}
// END plugins_row_grey
// BEGIN plugins_row_grey_repo
$_plugins_row_grey_repo_count = (isset($this->_data['plugins_row_grey_repo.'])) ?  sizeof($this->_data['plugins_row_grey_repo.']) : 0;
if ($_plugins_row_grey_repo_count) {
for ($_plugins_row_grey_repo_i = 0; $_plugins_row_grey_repo_i < $_plugins_row_grey_repo_count; $_plugins_row_grey_repo_i++)
{
echo '
		<tr>
			<td width="16" align="center" class="nowrap"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'admin/plugin_off.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_plugin'])) ? $this->_data['.'][0]['L_plugin'] : (($this->lang('plugin')) ? $this->lang('plugin') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'plugin'))) . '         }')) . '" /></td>
			<td class="nowrap">' . ((isset($this->_data['plugins_row_grey_repo.'][$_plugins_row_grey_repo_i]['ACTION_LINK'])) ? $this->_data['plugins_row_grey_repo.'][$_plugins_row_grey_repo_i]['ACTION_LINK'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['plugins_row_grey_repo.'][$_plugins_row_grey_repo_i]['NAME'])) ? $this->_data['plugins_row_grey_repo.'][$_plugins_row_grey_repo_i]['NAME'] : '') . '</td>
			';// BEGIN dep_row
$_dep_row_count = (isset($this->_data['plugins_row_grey_repo.'][$_plugins_row_grey_repo_i]['dep_row.'])) ? sizeof($this->_data['plugins_row_grey_repo.'][$_plugins_row_grey_repo_i]['dep_row.']) : 0;
if ($_dep_row_count) {
for ($_dep_row_i = 0; $_dep_row_i < $_dep_row_count; $_dep_row_i++)
{
echo '
			<td class="nowrap">' . ((isset($this->_data['plugins_row_grey_repo.'][$_plugins_row_grey_repo_i]['dep_row.'][$_dep_row_i]['DEPENDENCY_STATUS'])) ? $this->_data['plugins_row_grey_repo.'][$_plugins_row_grey_repo_i]['dep_row.'][$_dep_row_i]['DEPENDENCY_STATUS'] : '') . '</td>
			';}}
// END dep_row
echo '
			<td class="nowrap">' . ((isset($this->_data['plugins_row_grey_repo.'][$_plugins_row_grey_repo_i]['VERSION'])) ? $this->_data['plugins_row_grey_repo.'][$_plugins_row_grey_repo_i]['VERSION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['plugins_row_grey_repo.'][$_plugins_row_grey_repo_i]['CONTACT'])) ? $this->_data['plugins_row_grey_repo.'][$_plugins_row_grey_repo_i]['CONTACT'] : '') . '</td>
			<td>' . ((isset($this->_data['plugins_row_grey_repo.'][$_plugins_row_grey_repo_i]['DESCRIPTION'])) ? $this->_data['plugins_row_grey_repo.'][$_plugins_row_grey_repo_i]['DESCRIPTION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['plugins_row_grey_repo.'][$_plugins_row_grey_repo_i]['LONG_DESCRIPTION'])) ? $this->_data['plugins_row_grey_repo.'][$_plugins_row_grey_repo_i]['LONG_DESCRIPTION'] : '') . '  ' . ((isset($this->_data['plugins_row_grey_repo.'][$_plugins_row_grey_repo_i]['HOMEPAGE'])) ? $this->_data['plugins_row_grey_repo.'][$_plugins_row_grey_repo_i]['HOMEPAGE'] : '') . ' ' . ((isset($this->_data['plugins_row_grey_repo.'][$_plugins_row_grey_repo_i]['MANUAL'])) ? $this->_data['plugins_row_grey_repo.'][$_plugins_row_grey_repo_i]['MANUAL'] : '') . '</td>
		</tr>
		';}}
// END plugins_row_grey_repo
// BEGIN plugins_row_broken
$_plugins_row_broken_count = (isset($this->_data['plugins_row_broken.'])) ?  sizeof($this->_data['plugins_row_broken.']) : 0;
if ($_plugins_row_broken_count) {
for ($_plugins_row_broken_i = 0; $_plugins_row_broken_i < $_plugins_row_broken_count; $_plugins_row_broken_i++)
{
echo '
		<tr>
			 <td width="16" align="center" class="nowrap"></td>
			<td>';// IF plugins_row_broken.DELETE
if ($this->_data['plugins_row_broken.'][$_plugins_row_broken_i]['DELETE']) { 
echo '<a href="' . ((isset($this->_data['plugins_row_broken.'][$_plugins_row_broken_i]['DEL_LINK'])) ? $this->_data['plugins_row_broken.'][$_plugins_row_broken_i]['DEL_LINK'] : '') . '" title="' . ((isset($this->_data['.'][0]['L_delete_plugin'])) ? $this->_data['.'][0]['L_delete_plugin'] : (($this->lang('delete_plugin')) ? $this->lang('delete_plugin') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'delete_plugin'))) . '         }')) . '"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'false.png" width="20" height="20" alt="!" />&nbsp;' . ((isset($this->_data['.'][0]['L_delete'])) ? $this->_data['.'][0]['L_delete'] : (($this->lang('delete')) ? $this->lang('delete') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'delete'))) . '         }')) . '</a>';// ENDIF
}
echo '&nbsp;</td>
			<td colspan="20">' . ((isset($this->_data['plugins_row_broken.'][$_plugins_row_broken_i]['NAME'])) ? $this->_data['plugins_row_broken.'][$_plugins_row_broken_i]['NAME'] : '') . ': ' . ((isset($this->_data['.'][0]['L_broken_plugin'])) ? $this->_data['.'][0]['L_broken_plugin'] : (($this->lang('broken_plugin')) ? $this->lang('broken_plugin') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'broken_plugin'))) . '         }')) . '</td>
		</tr>
		';}}
// END plugins_row_broken
echo '
		</table>
	</div>

	<div id="fragment-2">
		<script type="text/javascript" language="javascript">

		var override = 0;
		function change_override(value){
			override = value;
		}

		function submit_form(){
			document.post.override.value = override;
			document.post.submit();
		}
		</script>
		<form method="post" action="' . ((isset($this->_data['.'][0]['ACTION'])) ? $this->_data['.'][0]['ACTION'] : '') . '&amp;cat=2&amp;mode=default_style" name="post">
		<input type="hidden" name="override" value="0" />
		<table width="100%" border="0" cellspacing="1" cellpadding="4" class="colorswitch hoverrows">
		  <tr>
			<th width="16" class="nowrap">&nbsp;</th>
			<th colspan="6" align="left" class="nowrap">' . ((isset($this->_data['.'][0]['L_action'])) ? $this->_data['.'][0]['L_action'] : (($this->lang('action')) ? $this->lang('action') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'action'))) . '         }')) . '</th>
			<th width="16" align="left" class="nowrap">&nbsp;</th>
			<th align="left" class="nowrap">' . ((isset($this->_data['.'][0]['L_name'])) ? $this->_data['.'][0]['L_name'] : (($this->lang('name')) ? $this->lang('name') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'name'))) . '         }')) . '</th>
			<th align="left" class="nowrap">' . ((isset($this->_data['.'][0]['L_template_files'])) ? $this->_data['.'][0]['L_template_files'] : (($this->lang('template_files')) ? $this->lang('template_files') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'template_files'))) . '         }')) . '</th>
			<th align="left" class="nowrap">' . ((isset($this->_data['.'][0]['L_users'])) ? $this->_data['.'][0]['L_users'] : (($this->lang('users')) ? $this->lang('users') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'users'))) . '         }')) . '</th>
			<th align="left" class="nowrap">' . ((isset($this->_data['.'][0]['L_version'])) ? $this->_data['.'][0]['L_version'] : (($this->lang('version')) ? $this->lang('version') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'version'))) . '         }')) . '</th>
			<th align="left" class="nowrap">' . ((isset($this->_data['.'][0]['L_portalplugin_author'])) ? $this->_data['.'][0]['L_portalplugin_author'] : (($this->lang('portalplugin_author')) ? $this->lang('portalplugin_author') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'portalplugin_author'))) . '         }')) . '</th>
			<th align="left" class="nowrap">' . ((isset($this->_data['.'][0]['L_preview'])) ? $this->_data['.'][0]['L_preview'] : (($this->lang('preview')) ? $this->lang('preview') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'preview'))) . '         }')) . '</th>
			</tr>
		  ';// BEGIN styles_row_red_local
$_styles_row_red_local_count = (isset($this->_data['styles_row_red_local.'])) ?  sizeof($this->_data['styles_row_red_local.']) : 0;
if ($_styles_row_red_local_count) {
for ($_styles_row_red_local_i = 0; $_styles_row_red_local_i < $_styles_row_red_local_count; $_styles_row_red_local_i++)
{
echo '
		  <tr>
		   <td width="16" align="center" class="nowrap"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'admin/plugin_red.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_plugin'])) ? $this->_data['.'][0]['L_plugin'] : (($this->lang('plugin')) ? $this->lang('plugin') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'plugin'))) . '         }')) . '" /></td>
			<td width="10" class="nowrap">' . ((isset($this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['ACTION_LINK'])) ? $this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['ACTION_LINK'] : '') . '</td>
			<td width="10" class="nowrap">';// IF not styles_row_red_local.S_DEFAULT
if (! $this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['S_DEFAULT']) { 
echo '
			  <a href="' . ((isset($this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['U_ENABLE'])) ? $this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['U_ENABLE'] : '') . '"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'glyphs/' . ((isset($this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['ENABLE'])) ? $this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['ENABLE'] : '') . '.png" width="16" height="16" title="' . ((isset($this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['L_ENABLE'])) ? $this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['L_ENABLE'] : '') . '" alt="' . ((isset($this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['L_ENABLE'])) ? $this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['L_ENABLE'] : '') . '" /></a>  
			  ';// ENDIF
}
echo '</td>
			<td width="10" class="nowrap"><a href="' . ((isset($this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['U_EDIT_STYLE'])) ? $this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['U_EDIT_STYLE'] : '') . '" title="' . ((isset($this->_data['.'][0]['L_edit_style'])) ? $this->_data['.'][0]['L_edit_style'] : (($this->lang('edit_style')) ? $this->lang('edit_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'edit_style'))) . '         }')) . '"><img src="' . ((isset($this->_data['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_data['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/glyphs/edit.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_edit_style'])) ? $this->_data['.'][0]['L_edit_style'] : (($this->lang('edit_style')) ? $this->lang('edit_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'edit_style'))) . '         }')) . '" /></a></td>
			<td width="10" class="nowrap"><a href="' . ((isset($this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['U_DOWNLOAD_STYLE'])) ? $this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['U_DOWNLOAD_STYLE'] : '') . '" title="' . ((isset($this->_data['.'][0]['L_download_style'])) ? $this->_data['.'][0]['L_download_style'] : (($this->lang('download_style')) ? $this->lang('download_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'download_style'))) . '         }')) . '"><img src="' . ((isset($this->_data['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_data['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/admin/manage_backup.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_download_style'])) ? $this->_data['.'][0]['L_download_style'] : (($this->lang('download_style')) ? $this->lang('download_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'download_style'))) . '         }')) . '" /></a></td>
			<td width="10" class="nowrap">';// IF not styles_row_red_local.S_DEFAULT
if (! $this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['S_DEFAULT']) { 
echo '
				<a href="javascript:style_delete_warning(' . ((isset($this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['ID'])) ? $this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['ID'] : '') . ')" title="' . ((isset($this->_data['.'][0]['L_delete_style'])) ? $this->_data['.'][0]['L_delete_style'] : (($this->lang('delete_style')) ? $this->lang('delete_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'delete_style'))) . '         }')) . '"><img src="' . ((isset($this->_data['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_data['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/global/delete.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_delete_style'])) ? $this->_data['.'][0]['L_delete_style'] : (($this->lang('delete_style')) ? $this->lang('delete_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'delete_style'))) . '         }')) . '" /></a>
				';// ENDIF
}
echo '</td>
			<td width="10" class="nowrap">
				<a href="javascript:style_reset_warning(' . ((isset($this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['ID'])) ? $this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['ID'] : '') . ')" title="' . ((isset($this->_data['.'][0]['L_reset_style'])) ? $this->_data['.'][0]['L_reset_style'] : (($this->lang('reset_style')) ? $this->lang('reset_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'reset_style'))) . '         }')) . '"><img src="' . ((isset($this->_data['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_data['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/global/update.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_reset_style'])) ? $this->_data['.'][0]['L_reset_style'] : (($this->lang('reset_style')) ? $this->lang('reset_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'reset_style'))) . '         }')) . '" /></a>
			</td>
			
			<td width="25" class="nowrap" align="center">';// IF not styles_row_red_local.S_DEACTIVATED
if (! $this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['S_DEACTIVATED']) { 
echo '<input type="radio" name="standard_style" ' . ((isset($this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['STANDARD'])) ? $this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['STANDARD'] : '') . ' value="' . ((isset($this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['ID'])) ? $this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['ID'] : '') . '" />';// ENDIF
}
echo '</td>
			';echo '<!-- name -->';echo '<td class="nowrap">';// IF styles_row_red_local.S_DEFAULT
if ($this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['S_DEFAULT']) { 
echo '<b>';// ENDIF
}
echo '<a href="' . ((isset($this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['U_EDIT_STYLE'])) ? $this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['U_EDIT_STYLE'] : '') . '">' . ((isset($this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['NAME'])) ? $this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['NAME'] : '') . '</a> ';// IF styles_row_red_local.S_DEFAULT
if ($this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['S_DEFAULT']) { 
echo ' * </b>';// ENDIF
}
echo '</td>

			<td class="nowrap">' . ((isset($this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['TEMPLATE'])) ? $this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['TEMPLATE'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['USERS'])) ? $this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['USERS'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['VERSION'])) ? $this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['VERSION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['AUTHOR'])) ? $this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['AUTHOR'] : '') . '</td>
			<td class="nowrap"><a href="javascript:style_preview(' . ((isset($this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['ID'])) ? $this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['ID'] : '') . ');">' . ((isset($this->_data['.'][0]['L_preview'])) ? $this->_data['.'][0]['L_preview'] : (($this->lang('preview')) ? $this->lang('preview') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'preview'))) . '         }')) . '</a></td>
			</tr>
		   ';}}
// END styles_row_red_local
// BEGIN styles_row_red
$_styles_row_red_count = (isset($this->_data['styles_row_red.'])) ?  sizeof($this->_data['styles_row_red.']) : 0;
if ($_styles_row_red_count) {
for ($_styles_row_red_i = 0; $_styles_row_red_i < $_styles_row_red_count; $_styles_row_red_i++)
{
echo '
		  <tr>
		   <td width="16" align="center" class="nowrap"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'admin/plugin_red.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_plugin'])) ? $this->_data['.'][0]['L_plugin'] : (($this->lang('plugin')) ? $this->lang('plugin') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'plugin'))) . '         }')) . '" /></td>
			<td width="10" class="nowrap">' . ((isset($this->_data['styles_row_red.'][$_styles_row_red_i]['ACTION_LINK'])) ? $this->_data['styles_row_red.'][$_styles_row_red_i]['ACTION_LINK'] : '') . '</td>
			<td width="10" class="nowrap">';// IF not styles_row_red.S_DEFAULT
if (! $this->_data['styles_row_red.'][$_styles_row_red_i]['S_DEFAULT']) { 
echo '
			  <a href="' . ((isset($this->_data['styles_row_red.'][$_styles_row_red_i]['U_ENABLE'])) ? $this->_data['styles_row_red.'][$_styles_row_red_i]['U_ENABLE'] : '') . '"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'glyphs/' . ((isset($this->_data['styles_row_red.'][$_styles_row_red_i]['ENABLE'])) ? $this->_data['styles_row_red.'][$_styles_row_red_i]['ENABLE'] : '') . '.png" width="16" height="16" title="' . ((isset($this->_data['styles_row_red.'][$_styles_row_red_i]['L_ENABLE'])) ? $this->_data['styles_row_red.'][$_styles_row_red_i]['L_ENABLE'] : '') . '" alt="' . ((isset($this->_data['styles_row_red.'][$_styles_row_red_i]['L_ENABLE'])) ? $this->_data['styles_row_red.'][$_styles_row_red_i]['L_ENABLE'] : '') . '" /></a>  
			  ';// ENDIF
}
echo '</td>
			<td width="10" class="nowrap"><a href="' . ((isset($this->_data['styles_row_red.'][$_styles_row_red_i]['U_EDIT_STYLE'])) ? $this->_data['styles_row_red.'][$_styles_row_red_i]['U_EDIT_STYLE'] : '') . '" title="' . ((isset($this->_data['.'][0]['L_edit_style'])) ? $this->_data['.'][0]['L_edit_style'] : (($this->lang('edit_style')) ? $this->lang('edit_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'edit_style'))) . '         }')) . '"><img src="' . ((isset($this->_data['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_data['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/glyphs/edit.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_edit_style'])) ? $this->_data['.'][0]['L_edit_style'] : (($this->lang('edit_style')) ? $this->lang('edit_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'edit_style'))) . '         }')) . '" /></a></td>
			<td width="10" class="nowrap"><a href="' . ((isset($this->_data['styles_row_red.'][$_styles_row_red_i]['U_DOWNLOAD_STYLE'])) ? $this->_data['styles_row_red.'][$_styles_row_red_i]['U_DOWNLOAD_STYLE'] : '') . '" title="' . ((isset($this->_data['.'][0]['L_download_style'])) ? $this->_data['.'][0]['L_download_style'] : (($this->lang('download_style')) ? $this->lang('download_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'download_style'))) . '         }')) . '"><img src="' . ((isset($this->_data['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_data['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/admin/manage_backup.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_download_style'])) ? $this->_data['.'][0]['L_download_style'] : (($this->lang('download_style')) ? $this->lang('download_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'download_style'))) . '         }')) . '" /></a></td>
			<td width="10" class="nowrap">';// IF not styles_row_red.S_DEFAULT
if (! $this->_data['styles_row_red.'][$_styles_row_red_i]['S_DEFAULT']) { 
echo '
				<a href="javascript:style_delete_warning(' . ((isset($this->_data['styles_row_red.'][$_styles_row_red_i]['ID'])) ? $this->_data['styles_row_red.'][$_styles_row_red_i]['ID'] : '') . ')" title="' . ((isset($this->_data['.'][0]['L_delete_style'])) ? $this->_data['.'][0]['L_delete_style'] : (($this->lang('delete_style')) ? $this->lang('delete_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'delete_style'))) . '         }')) . '"><img src="' . ((isset($this->_data['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_data['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/global/delete.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_delete_style'])) ? $this->_data['.'][0]['L_delete_style'] : (($this->lang('delete_style')) ? $this->lang('delete_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'delete_style'))) . '         }')) . '" /></a>
				';// ENDIF
}
echo '</td>
			<td width="10" class="nowrap">
				<a href="javascript:style_reset_warning(' . ((isset($this->_data['styles_row_red.'][$_styles_row_red_i]['ID'])) ? $this->_data['styles_row_red.'][$_styles_row_red_i]['ID'] : '') . ')" title="' . ((isset($this->_data['.'][0]['L_reset_style'])) ? $this->_data['.'][0]['L_reset_style'] : (($this->lang('reset_style')) ? $this->lang('reset_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'reset_style'))) . '         }')) . '"><img src="' . ((isset($this->_data['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_data['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/global/update.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_reset_style'])) ? $this->_data['.'][0]['L_reset_style'] : (($this->lang('reset_style')) ? $this->lang('reset_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'reset_style'))) . '         }')) . '" /></a>
			</td>
			
			<td width="25" class="nowrap" align="center">';// IF not styles_row_red.S_DEACTIVATED
if (! $this->_data['styles_row_red.'][$_styles_row_red_i]['S_DEACTIVATED']) { 
echo '<input type="radio" name="standard_style" ' . ((isset($this->_data['styles_row_red.'][$_styles_row_red_i]['STANDARD'])) ? $this->_data['styles_row_red.'][$_styles_row_red_i]['STANDARD'] : '') . ' value="' . ((isset($this->_data['styles_row_red.'][$_styles_row_red_i]['ID'])) ? $this->_data['styles_row_red.'][$_styles_row_red_i]['ID'] : '') . '" />';// ENDIF
}
echo '</td>
			';echo '<!-- name -->';echo '<td class="nowrap">';// IF styles_row_red.S_DEFAULT
if ($this->_data['styles_row_red.'][$_styles_row_red_i]['S_DEFAULT']) { 
echo '<b>';// ENDIF
}
echo '<a href="' . ((isset($this->_data['styles_row_red.'][$_styles_row_red_i]['U_EDIT_STYLE'])) ? $this->_data['styles_row_red.'][$_styles_row_red_i]['U_EDIT_STYLE'] : '') . '">' . ((isset($this->_data['styles_row_red.'][$_styles_row_red_i]['NAME'])) ? $this->_data['styles_row_red.'][$_styles_row_red_i]['NAME'] : '') . '</a> ';// IF styles_row_red.S_DEFAULT
if ($this->_data['styles_row_red.'][$_styles_row_red_i]['S_DEFAULT']) { 
echo ' * </b>';// ENDIF
}
echo '</td>

			<td class="nowrap">' . ((isset($this->_data['styles_row_red.'][$_styles_row_red_i]['TEMPLATE'])) ? $this->_data['styles_row_red.'][$_styles_row_red_i]['TEMPLATE'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['styles_row_red.'][$_styles_row_red_i]['USERS'])) ? $this->_data['styles_row_red.'][$_styles_row_red_i]['USERS'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['styles_row_red.'][$_styles_row_red_i]['VERSION'])) ? $this->_data['styles_row_red.'][$_styles_row_red_i]['VERSION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['styles_row_red.'][$_styles_row_red_i]['AUTHOR'])) ? $this->_data['styles_row_red.'][$_styles_row_red_i]['AUTHOR'] : '') . '</td>
			<td class="nowrap"><a href="javascript:style_preview(' . ((isset($this->_data['styles_row_red.'][$_styles_row_red_i]['ID'])) ? $this->_data['styles_row_red.'][$_styles_row_red_i]['ID'] : '') . ');">' . ((isset($this->_data['.'][0]['L_preview'])) ? $this->_data['.'][0]['L_preview'] : (($this->lang('preview')) ? $this->lang('preview') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'preview'))) . '         }')) . '</a></td>
			</tr>
		   ';}}
// END styles_row_red
// BEGIN styles_row_yellow
$_styles_row_yellow_count = (isset($this->_data['styles_row_yellow.'])) ?  sizeof($this->_data['styles_row_yellow.']) : 0;
if ($_styles_row_yellow_count) {
for ($_styles_row_yellow_i = 0; $_styles_row_yellow_i < $_styles_row_yellow_count; $_styles_row_yellow_i++)
{
echo '
		  <tr>
		   <td width="16" align="center" class="nowrap"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'admin/plugin_yellow.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_plugin'])) ? $this->_data['.'][0]['L_plugin'] : (($this->lang('plugin')) ? $this->lang('plugin') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'plugin'))) . '         }')) . '" /></td>
			<td width="10" class="nowrap">' . ((isset($this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['ACTION_LINK'])) ? $this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['ACTION_LINK'] : '') . '</td>
			<td width="10" class="nowrap">';// IF not styles_row_yellow.S_DEFAULT
if (! $this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['S_DEFAULT']) { 
echo '
			  <a href="' . ((isset($this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['U_ENABLE'])) ? $this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['U_ENABLE'] : '') . '"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'glyphs/' . ((isset($this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['ENABLE'])) ? $this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['ENABLE'] : '') . '.png" width="16" height="16" title="' . ((isset($this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['L_ENABLE'])) ? $this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['L_ENABLE'] : '') . '" alt="' . ((isset($this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['L_ENABLE'])) ? $this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['L_ENABLE'] : '') . '" /></a>  
			  ';// ENDIF
}
echo '</td>
			<td width="10" class="nowrap"><a href="' . ((isset($this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['U_EDIT_STYLE'])) ? $this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['U_EDIT_STYLE'] : '') . '" title="' . ((isset($this->_data['.'][0]['L_edit_style'])) ? $this->_data['.'][0]['L_edit_style'] : (($this->lang('edit_style')) ? $this->lang('edit_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'edit_style'))) . '         }')) . '"><img src="' . ((isset($this->_data['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_data['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/glyphs/edit.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_edit_style'])) ? $this->_data['.'][0]['L_edit_style'] : (($this->lang('edit_style')) ? $this->lang('edit_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'edit_style'))) . '         }')) . '" /></a></td>
			<td width="10" class="nowrap"><a href="' . ((isset($this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['U_DOWNLOAD_STYLE'])) ? $this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['U_DOWNLOAD_STYLE'] : '') . '" title="' . ((isset($this->_data['.'][0]['L_download_style'])) ? $this->_data['.'][0]['L_download_style'] : (($this->lang('download_style')) ? $this->lang('download_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'download_style'))) . '         }')) . '"><img src="' . ((isset($this->_data['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_data['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/admin/manage_backup.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_download_style'])) ? $this->_data['.'][0]['L_download_style'] : (($this->lang('download_style')) ? $this->lang('download_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'download_style'))) . '         }')) . '" /></a></td>
			<td width="10" class="nowrap">';// IF not styles_row_yellow.S_DEFAULT
if (! $this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['S_DEFAULT']) { 
echo '
				<a href="javascript:style_delete_warning(' . ((isset($this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['ID'])) ? $this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['ID'] : '') . ')" title="' . ((isset($this->_data['.'][0]['L_delete_style'])) ? $this->_data['.'][0]['L_delete_style'] : (($this->lang('delete_style')) ? $this->lang('delete_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'delete_style'))) . '         }')) . '"><img src="' . ((isset($this->_data['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_data['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/global/delete.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_delete_style'])) ? $this->_data['.'][0]['L_delete_style'] : (($this->lang('delete_style')) ? $this->lang('delete_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'delete_style'))) . '         }')) . '" /></a>
				';// ENDIF
}
echo '</td>
			<td width="10" class="nowrap">
				<a href="javascript:style_reset_warning(' . ((isset($this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['ID'])) ? $this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['ID'] : '') . ')" title="' . ((isset($this->_data['.'][0]['L_reset_style'])) ? $this->_data['.'][0]['L_reset_style'] : (($this->lang('reset_style')) ? $this->lang('reset_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'reset_style'))) . '         }')) . '"><img src="' . ((isset($this->_data['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_data['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/global/update.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_reset_style'])) ? $this->_data['.'][0]['L_reset_style'] : (($this->lang('reset_style')) ? $this->lang('reset_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'reset_style'))) . '         }')) . '" /></a>
			</td>
			
			<td width="25" class="nowrap" align="center">';// IF not styles_row_yellow.S_DEACTIVATED
if (! $this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['S_DEACTIVATED']) { 
echo '<input type="radio" name="standard_style" ' . ((isset($this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['STANDARD'])) ? $this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['STANDARD'] : '') . ' value="' . ((isset($this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['ID'])) ? $this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['ID'] : '') . '" />';// ENDIF
}
echo '</td>
			';echo '<!-- name -->';echo '<td class="nowrap">';// IF styles_row_yellow.S_DEFAULT
if ($this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['S_DEFAULT']) { 
echo '<b>';// ENDIF
}
echo '<a href="' . ((isset($this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['U_EDIT_STYLE'])) ? $this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['U_EDIT_STYLE'] : '') . '">' . ((isset($this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['NAME'])) ? $this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['NAME'] : '') . '</a> ';// IF styles_row_yellow.S_DEFAULT
if ($this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['S_DEFAULT']) { 
echo ' * </b>';// ENDIF
}
echo '</td>

			<td class="nowrap">' . ((isset($this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['TEMPLATE'])) ? $this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['TEMPLATE'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['USERS'])) ? $this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['USERS'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['VERSION'])) ? $this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['VERSION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['AUTHOR'])) ? $this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['AUTHOR'] : '') . '</td>
			<td class="nowrap"><a href="javascript:style_preview(' . ((isset($this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['ID'])) ? $this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['ID'] : '') . ');">' . ((isset($this->_data['.'][0]['L_preview'])) ? $this->_data['.'][0]['L_preview'] : (($this->lang('preview')) ? $this->lang('preview') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'preview'))) . '         }')) . '</a></td>
			</tr>
		   ';}}
// END styles_row_yellow
// BEGIN styles_row_green
$_styles_row_green_count = (isset($this->_data['styles_row_green.'])) ?  sizeof($this->_data['styles_row_green.']) : 0;
if ($_styles_row_green_count) {
for ($_styles_row_green_i = 0; $_styles_row_green_i < $_styles_row_green_count; $_styles_row_green_i++)
{
echo '
		  <tr>
		   <td width="16" align="center" class="nowrap"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'admin/plugin.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_plugin'])) ? $this->_data['.'][0]['L_plugin'] : (($this->lang('plugin')) ? $this->lang('plugin') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'plugin'))) . '         }')) . '" /></td>
			<td width="10" class="nowrap">' . ((isset($this->_data['styles_row_green.'][$_styles_row_green_i]['ACTION_LINK'])) ? $this->_data['styles_row_green.'][$_styles_row_green_i]['ACTION_LINK'] : '') . '</td>
			<td width="10" class="nowrap">';// IF not styles_row_green.S_DEFAULT
if (! $this->_data['styles_row_green.'][$_styles_row_green_i]['S_DEFAULT']) { 
echo '
			  <a href="' . ((isset($this->_data['styles_row_green.'][$_styles_row_green_i]['U_ENABLE'])) ? $this->_data['styles_row_green.'][$_styles_row_green_i]['U_ENABLE'] : '') . '"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'glyphs/' . ((isset($this->_data['styles_row_green.'][$_styles_row_green_i]['ENABLE'])) ? $this->_data['styles_row_green.'][$_styles_row_green_i]['ENABLE'] : '') . '.png" width="16" height="16" title="' . ((isset($this->_data['styles_row_green.'][$_styles_row_green_i]['L_ENABLE'])) ? $this->_data['styles_row_green.'][$_styles_row_green_i]['L_ENABLE'] : '') . '" alt="' . ((isset($this->_data['styles_row_green.'][$_styles_row_green_i]['L_ENABLE'])) ? $this->_data['styles_row_green.'][$_styles_row_green_i]['L_ENABLE'] : '') . '" /></a>  
			  ';// ENDIF
}
echo '</td>
			<td width="10" class="nowrap"><a href="' . ((isset($this->_data['styles_row_green.'][$_styles_row_green_i]['U_EDIT_STYLE'])) ? $this->_data['styles_row_green.'][$_styles_row_green_i]['U_EDIT_STYLE'] : '') . '" title="' . ((isset($this->_data['.'][0]['L_edit_style'])) ? $this->_data['.'][0]['L_edit_style'] : (($this->lang('edit_style')) ? $this->lang('edit_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'edit_style'))) . '         }')) . '"><img src="' . ((isset($this->_data['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_data['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/glyphs/edit.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_edit_style'])) ? $this->_data['.'][0]['L_edit_style'] : (($this->lang('edit_style')) ? $this->lang('edit_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'edit_style'))) . '         }')) . '" /></a></td>
			<td width="10" class="nowrap"><a href="' . ((isset($this->_data['styles_row_green.'][$_styles_row_green_i]['U_DOWNLOAD_STYLE'])) ? $this->_data['styles_row_green.'][$_styles_row_green_i]['U_DOWNLOAD_STYLE'] : '') . '" title="' . ((isset($this->_data['.'][0]['L_download_style'])) ? $this->_data['.'][0]['L_download_style'] : (($this->lang('download_style')) ? $this->lang('download_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'download_style'))) . '         }')) . '"><img src="' . ((isset($this->_data['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_data['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/admin/manage_backup.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_download_style'])) ? $this->_data['.'][0]['L_download_style'] : (($this->lang('download_style')) ? $this->lang('download_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'download_style'))) . '         }')) . '" /></a></td>
			<td width="10" class="nowrap">';// IF not styles_row_green.S_DEFAULT
if (! $this->_data['styles_row_green.'][$_styles_row_green_i]['S_DEFAULT']) { 
echo '
				<a href="javascript:style_delete_warning(' . ((isset($this->_data['styles_row_green.'][$_styles_row_green_i]['ID'])) ? $this->_data['styles_row_green.'][$_styles_row_green_i]['ID'] : '') . ')" title="' . ((isset($this->_data['.'][0]['L_delete_style'])) ? $this->_data['.'][0]['L_delete_style'] : (($this->lang('delete_style')) ? $this->lang('delete_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'delete_style'))) . '         }')) . '"><img src="' . ((isset($this->_data['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_data['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/global/delete.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_delete_style'])) ? $this->_data['.'][0]['L_delete_style'] : (($this->lang('delete_style')) ? $this->lang('delete_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'delete_style'))) . '         }')) . '" /></a>
				';// ENDIF
}
echo '</td>
			<td width="10" class="nowrap">
				<a href="javascript:style_reset_warning(' . ((isset($this->_data['styles_row_green.'][$_styles_row_green_i]['ID'])) ? $this->_data['styles_row_green.'][$_styles_row_green_i]['ID'] : '') . ')" title="' . ((isset($this->_data['.'][0]['L_reset_style'])) ? $this->_data['.'][0]['L_reset_style'] : (($this->lang('reset_style')) ? $this->lang('reset_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'reset_style'))) . '         }')) . '"><img src="' . ((isset($this->_data['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_data['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/global/update.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_reset_style'])) ? $this->_data['.'][0]['L_reset_style'] : (($this->lang('reset_style')) ? $this->lang('reset_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'reset_style'))) . '         }')) . '" /></a>
			</td>
			
			<td width="25" class="nowrap" align="center">';// IF not styles_row_green.S_DEACTIVATED
if (! $this->_data['styles_row_green.'][$_styles_row_green_i]['S_DEACTIVATED']) { 
echo '<input type="radio" name="standard_style" ' . ((isset($this->_data['styles_row_green.'][$_styles_row_green_i]['STANDARD'])) ? $this->_data['styles_row_green.'][$_styles_row_green_i]['STANDARD'] : '') . ' value="' . ((isset($this->_data['styles_row_green.'][$_styles_row_green_i]['ID'])) ? $this->_data['styles_row_green.'][$_styles_row_green_i]['ID'] : '') . '" />';// ENDIF
}
echo '</td>
			';echo '<!-- name -->';echo '<td class="nowrap">';// IF styles_row_green.S_DEFAULT
if ($this->_data['styles_row_green.'][$_styles_row_green_i]['S_DEFAULT']) { 
echo '<b>';// ENDIF
}
echo '<a href="' . ((isset($this->_data['styles_row_green.'][$_styles_row_green_i]['U_EDIT_STYLE'])) ? $this->_data['styles_row_green.'][$_styles_row_green_i]['U_EDIT_STYLE'] : '') . '">' . ((isset($this->_data['styles_row_green.'][$_styles_row_green_i]['NAME'])) ? $this->_data['styles_row_green.'][$_styles_row_green_i]['NAME'] : '') . '</a> ';// IF styles_row_green.S_DEFAULT
if ($this->_data['styles_row_green.'][$_styles_row_green_i]['S_DEFAULT']) { 
echo ' * </b>';// ENDIF
}
echo '</td>

			<td class="nowrap">' . ((isset($this->_data['styles_row_green.'][$_styles_row_green_i]['TEMPLATE'])) ? $this->_data['styles_row_green.'][$_styles_row_green_i]['TEMPLATE'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['styles_row_green.'][$_styles_row_green_i]['USERS'])) ? $this->_data['styles_row_green.'][$_styles_row_green_i]['USERS'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['styles_row_green.'][$_styles_row_green_i]['VERSION'])) ? $this->_data['styles_row_green.'][$_styles_row_green_i]['VERSION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['styles_row_green.'][$_styles_row_green_i]['AUTHOR'])) ? $this->_data['styles_row_green.'][$_styles_row_green_i]['AUTHOR'] : '') . '</td>
			<td class="nowrap"><a href="javascript:style_preview(' . ((isset($this->_data['styles_row_green.'][$_styles_row_green_i]['ID'])) ? $this->_data['styles_row_green.'][$_styles_row_green_i]['ID'] : '') . ');">' . ((isset($this->_data['.'][0]['L_preview'])) ? $this->_data['.'][0]['L_preview'] : (($this->lang('preview')) ? $this->lang('preview') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'preview'))) . '         }')) . '</a></td>
			</tr>
		   ';}}
// END styles_row_green
// BEGIN styles_row_grey
$_styles_row_grey_count = (isset($this->_data['styles_row_grey.'])) ?  sizeof($this->_data['styles_row_grey.']) : 0;
if ($_styles_row_grey_count) {
for ($_styles_row_grey_i = 0; $_styles_row_grey_i < $_styles_row_grey_count; $_styles_row_grey_i++)
{
echo '
		  <tr>
		   <td width="16" align="center" class="nowrap"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'admin/plugin_off.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_plugin'])) ? $this->_data['.'][0]['L_plugin'] : (($this->lang('plugin')) ? $this->lang('plugin') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'plugin'))) . '         }')) . '" /></td>
			<td width="10" class="nowrap">' . ((isset($this->_data['styles_row_grey.'][$_styles_row_grey_i]['ACTION_LINK'])) ? $this->_data['styles_row_grey.'][$_styles_row_grey_i]['ACTION_LINK'] : '') . '</td>
			<td width="10" class="nowrap"></td>
			<td width="10" class="nowrap"></td>
			<td width="10" class="nowrap"></td>
			<td width="10" class="nowrap"></td>
			<td width="10" class="nowrap"></td>			
			<td width="25" class="nowrap" align="center"></td>
			<td class="nowrap">' . ((isset($this->_data['styles_row_grey.'][$_styles_row_grey_i]['NAME'])) ? $this->_data['styles_row_grey.'][$_styles_row_grey_i]['NAME'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['styles_row_grey.'][$_styles_row_grey_i]['TEMPLATE'])) ? $this->_data['styles_row_grey.'][$_styles_row_grey_i]['TEMPLATE'] : '') . '</td>
			<td class="nowrap">0</td>
			<td class="nowrap">' . ((isset($this->_data['styles_row_grey.'][$_styles_row_grey_i]['VERSION'])) ? $this->_data['styles_row_grey.'][$_styles_row_grey_i]['VERSION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['styles_row_grey.'][$_styles_row_grey_i]['AUTHOR'])) ? $this->_data['styles_row_grey.'][$_styles_row_grey_i]['AUTHOR'] : '') . '</td>
			<td class="nowrap"></td>
			</tr>
		   ';}}
// END styles_row_grey
// BEGIN styles_row_grey_repo
$_styles_row_grey_repo_count = (isset($this->_data['styles_row_grey_repo.'])) ?  sizeof($this->_data['styles_row_grey_repo.']) : 0;
if ($_styles_row_grey_repo_count) {
for ($_styles_row_grey_repo_i = 0; $_styles_row_grey_repo_i < $_styles_row_grey_repo_count; $_styles_row_grey_repo_i++)
{
echo '
		  <tr>
		   <td width="16" align="center" class="nowrap"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'admin/plugin_off.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_plugin'])) ? $this->_data['.'][0]['L_plugin'] : (($this->lang('plugin')) ? $this->lang('plugin') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'plugin'))) . '         }')) . '" /></td>
			<td width="10" class="nowrap">' . ((isset($this->_data['styles_row_grey_repo.'][$_styles_row_grey_repo_i]['ACTION_LINK'])) ? $this->_data['styles_row_grey_repo.'][$_styles_row_grey_repo_i]['ACTION_LINK'] : '') . '</td>
			<td width="10" class="nowrap"></td>
			<td width="10" class="nowrap"></td>
			<td width="10" class="nowrap"></td>
			<td width="10" class="nowrap"></td>
			<td width="10" class="nowrap"></td>		
			<td width="25" class="nowrap">' . ((isset($this->_data['styles_row_grey_repo.'][$_styles_row_grey_repo_i]['NAME'])) ? $this->_data['styles_row_grey_repo.'][$_styles_row_grey_repo_i]['NAME'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['styles_row_grey_repo.'][$_styles_row_grey_repo_i]['TEMPLATE'])) ? $this->_data['styles_row_grey_repo.'][$_styles_row_grey_repo_i]['TEMPLATE'] : '') . '</td>
			<td class="nowrap">0</td>
			<td class="nowrap">' . ((isset($this->_data['styles_row_grey_repo.'][$_styles_row_grey_repo_i]['VERSION'])) ? $this->_data['styles_row_grey_repo.'][$_styles_row_grey_repo_i]['VERSION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['styles_row_grey_repo.'][$_styles_row_grey_repo_i]['AUTHOR'])) ? $this->_data['styles_row_grey_repo.'][$_styles_row_grey_repo_i]['AUTHOR'] : '') . '</td>
			<td class="nowrap"></td>
			</tr>
		   ';}}
// END styles_row_grey_repo
echo '
		  <tr>
			<th colspan="14" align="center"><input name="standard" type="button" id="standard" value="' . ((isset($this->_data['.'][0]['L_make_default_style'])) ? $this->_data['.'][0]['L_make_default_style'] : (($this->lang('make_default_style')) ? $this->lang('make_default_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'make_default_style'))) . '         }')) . '" class="mainoption bi_ok" onclick="style_default_info();" /> <input name="cache_reset" type="button" value="' . ((isset($this->_data['.'][0]['L_delete_template_cache'])) ? $this->_data['.'][0]['L_delete_template_cache'] : (($this->lang('delete_template_cache')) ? $this->lang('delete_template_cache') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'delete_template_cache'))) . '         }')) . '" class="liteoption bi_delete" onclick="window.location=\'manage_extensions.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&amp;cat=2&amp;mode=delete_cache&amp;link_hash=' . ((isset($this->_data['.'][0]['CSRF_MODE_TOKEN'])) ? $this->_data['.'][0]['CSRF_MODE_TOKEN'] : '') . '\'" /></th>
		  </tr>
		</table>
		' . ((isset($this->_data['.'][0]['CSRF_TOKEN'])) ? $this->_data['.'][0]['CSRF_TOKEN'] : '') . '
		</form>
	</div>

	<div id="fragment-3">
		<table width="100%" border="0" cellspacing="1" cellpadding="4" class="colorswitch">
		  <tr>
			<th align="left" width="16">&nbsp;</th>
			<th align="left" class="nowrap" width="16">' . ((isset($this->_data['.'][0]['L_action'])) ? $this->_data['.'][0]['L_action'] : (($this->lang('action')) ? $this->lang('action') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'action'))) . '         }')) . '</th>
			<th align="left" class="nowrap">' . ((isset($this->_data['.'][0]['L_name'])) ? $this->_data['.'][0]['L_name'] : (($this->lang('name')) ? $this->lang('name') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'name'))) . '         }')) . '</th>
			<th align="left" class="nowrap">' . ((isset($this->_data['.'][0]['L_version'])) ? $this->_data['.'][0]['L_version'] : (($this->lang('version')) ? $this->lang('version') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'version'))) . '         }')) . '</th>
			<th align="left" class="nowrap">' . ((isset($this->_data['.'][0]['L_contact'])) ? $this->_data['.'][0]['L_contact'] : (($this->lang('contact')) ? $this->lang('contact') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'contact'))) . '         }')) . '</th>
			<th align="left" class="nowrap">' . ((isset($this->_data['.'][0]['L_description'])) ? $this->_data['.'][0]['L_description'] : (($this->lang('description')) ? $this->lang('description') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'description'))) . '         }')) . '</th>
			<th align="left" class="nowrap">' . ((isset($this->_data['.'][0]['L_pi_rating'])) ? $this->_data['.'][0]['L_pi_rating'] : (($this->lang('pi_rating')) ? $this->lang('pi_rating') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pi_rating'))) . '         }')) . '</th>
		  </tr>
		  ';// BEGIN pm_row_red
$_pm_row_red_count = (isset($this->_data['pm_row_red.'])) ?  sizeof($this->_data['pm_row_red.']) : 0;
if ($_pm_row_red_count) {
for ($_pm_row_red_i = 0; $_pm_row_red_i < $_pm_row_red_count; $_pm_row_red_i++)
{
echo '
		  <tr>
			<td width="16" align="center" class="nowrap"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'admin/plugin_red.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_plugin'])) ? $this->_data['.'][0]['L_plugin'] : (($this->lang('plugin')) ? $this->lang('plugin') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'plugin'))) . '         }')) . '" /></td>
			<td class="nowrap">' . ((isset($this->_data['pm_row_red.'][$_pm_row_red_i]['ACTION_LINK'])) ? $this->_data['pm_row_red.'][$_pm_row_red_i]['ACTION_LINK'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['pm_row_red.'][$_pm_row_red_i]['NAME'])) ? $this->_data['pm_row_red.'][$_pm_row_red_i]['NAME'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['pm_row_red.'][$_pm_row_red_i]['VERSION'])) ? $this->_data['pm_row_red.'][$_pm_row_red_i]['VERSION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['pm_row_red.'][$_pm_row_red_i]['CONTACT'])) ? $this->_data['pm_row_red.'][$_pm_row_red_i]['CONTACT'] : '') . '</td>
			<td>' . ((isset($this->_data['pm_row_red.'][$_pm_row_red_i]['DESCRIPTION'])) ? $this->_data['pm_row_red.'][$_pm_row_red_i]['DESCRIPTION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['pm_row_red.'][$_pm_row_red_i]['RATING'])) ? $this->_data['pm_row_red.'][$_pm_row_red_i]['RATING'] : '') . '</td>
		  </tr>
		  ';}}
// END pm_row_red
// BEGIN pm_row_yellow
$_pm_row_yellow_count = (isset($this->_data['pm_row_yellow.'])) ?  sizeof($this->_data['pm_row_yellow.']) : 0;
if ($_pm_row_yellow_count) {
for ($_pm_row_yellow_i = 0; $_pm_row_yellow_i < $_pm_row_yellow_count; $_pm_row_yellow_i++)
{
echo '
		  <tr>
			<td width="16" align="center" class="nowrap"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'admin/plugin_yellow.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_plugin'])) ? $this->_data['.'][0]['L_plugin'] : (($this->lang('plugin')) ? $this->lang('plugin') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'plugin'))) . '         }')) . '" /></td>
			<td class="nowrap">' . ((isset($this->_data['pm_row_yellow.'][$_pm_row_yellow_i]['ACTION_LINK'])) ? $this->_data['pm_row_yellow.'][$_pm_row_yellow_i]['ACTION_LINK'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['pm_row_yellow.'][$_pm_row_yellow_i]['NAME'])) ? $this->_data['pm_row_yellow.'][$_pm_row_yellow_i]['NAME'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['pm_row_yellow.'][$_pm_row_yellow_i]['VERSION'])) ? $this->_data['pm_row_yellow.'][$_pm_row_yellow_i]['VERSION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['pm_row_yellow.'][$_pm_row_yellow_i]['CONTACT'])) ? $this->_data['pm_row_yellow.'][$_pm_row_yellow_i]['CONTACT'] : '') . '</td>
			<td>' . ((isset($this->_data['pm_row_yellow.'][$_pm_row_yellow_i]['DESCRIPTION'])) ? $this->_data['pm_row_yellow.'][$_pm_row_yellow_i]['DESCRIPTION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['pm_row_yellow.'][$_pm_row_yellow_i]['RATING'])) ? $this->_data['pm_row_yellow.'][$_pm_row_yellow_i]['RATING'] : '') . '</td>
		  </tr>
		  ';}}
// END pm_row_yellow
// BEGIN pm_row_green
$_pm_row_green_count = (isset($this->_data['pm_row_green.'])) ?  sizeof($this->_data['pm_row_green.']) : 0;
if ($_pm_row_green_count) {
for ($_pm_row_green_i = 0; $_pm_row_green_i < $_pm_row_green_count; $_pm_row_green_i++)
{
echo '
		  <tr>
			<td width="16" align="center" class="nowrap"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'admin/plugin.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_plugin'])) ? $this->_data['.'][0]['L_plugin'] : (($this->lang('plugin')) ? $this->lang('plugin') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'plugin'))) . '         }')) . '" /></td>
			<td class="nowrap">' . ((isset($this->_data['pm_row_green.'][$_pm_row_green_i]['ACTION_LINK'])) ? $this->_data['pm_row_green.'][$_pm_row_green_i]['ACTION_LINK'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['pm_row_green.'][$_pm_row_green_i]['NAME'])) ? $this->_data['pm_row_green.'][$_pm_row_green_i]['NAME'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['pm_row_green.'][$_pm_row_green_i]['VERSION'])) ? $this->_data['pm_row_green.'][$_pm_row_green_i]['VERSION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['pm_row_green.'][$_pm_row_green_i]['CONTACT'])) ? $this->_data['pm_row_green.'][$_pm_row_green_i]['CONTACT'] : '') . '</td>
			<td>' . ((isset($this->_data['pm_row_green.'][$_pm_row_green_i]['DESCRIPTION'])) ? $this->_data['pm_row_green.'][$_pm_row_green_i]['DESCRIPTION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['pm_row_green.'][$_pm_row_green_i]['RATING'])) ? $this->_data['pm_row_green.'][$_pm_row_green_i]['RATING'] : '') . '</td>
		  </tr>
		  ';}}
// END pm_row_green
// BEGIN pm_row_grey
$_pm_row_grey_count = (isset($this->_data['pm_row_grey.'])) ?  sizeof($this->_data['pm_row_grey.']) : 0;
if ($_pm_row_grey_count) {
for ($_pm_row_grey_i = 0; $_pm_row_grey_i < $_pm_row_grey_count; $_pm_row_grey_i++)
{
echo '
		  <tr>
			<td width="16" align="center" class="nowrap"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'admin/plugin_off.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_plugin'])) ? $this->_data['.'][0]['L_plugin'] : (($this->lang('plugin')) ? $this->lang('plugin') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'plugin'))) . '         }')) . '" /></td>
			<td class="nowrap">' . ((isset($this->_data['pm_row_grey.'][$_pm_row_grey_i]['ACTION_LINK'])) ? $this->_data['pm_row_grey.'][$_pm_row_grey_i]['ACTION_LINK'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['pm_row_grey.'][$_pm_row_grey_i]['NAME'])) ? $this->_data['pm_row_grey.'][$_pm_row_grey_i]['NAME'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['pm_row_grey.'][$_pm_row_grey_i]['VERSION'])) ? $this->_data['pm_row_grey.'][$_pm_row_grey_i]['VERSION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['pm_row_grey.'][$_pm_row_grey_i]['CONTACT'])) ? $this->_data['pm_row_grey.'][$_pm_row_grey_i]['CONTACT'] : '') . '</td>
			<td>' . ((isset($this->_data['pm_row_grey.'][$_pm_row_grey_i]['DESCRIPTION'])) ? $this->_data['pm_row_grey.'][$_pm_row_grey_i]['DESCRIPTION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['pm_row_grey.'][$_pm_row_grey_i]['RATING'])) ? $this->_data['pm_row_grey.'][$_pm_row_grey_i]['RATING'] : '') . '</td>
		  </tr>
		  ';}}
// END pm_row_grey
echo '
		</table>
	</div>

	<div id="fragment-7">
		<table width="100%" border="0" cellspacing="1" cellpadding="4" class="colorswitch">
		  <tr>
			<th align="left" width="16">&nbsp;</th>
			<th align="left" class="nowrap" width="16">' . ((isset($this->_data['.'][0]['L_action'])) ? $this->_data['.'][0]['L_action'] : (($this->lang('action')) ? $this->lang('action') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'action'))) . '         }')) . '</th>
			<th align="left" class="nowrap">' . ((isset($this->_data['.'][0]['L_name'])) ? $this->_data['.'][0]['L_name'] : (($this->lang('name')) ? $this->lang('name') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'name'))) . '         }')) . '</th>
			<th align="left" class="nowrap">' . ((isset($this->_data['.'][0]['L_version'])) ? $this->_data['.'][0]['L_version'] : (($this->lang('version')) ? $this->lang('version') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'version'))) . '         }')) . '</th>
			<th align="left" class="nowrap">' . ((isset($this->_data['.'][0]['L_contact'])) ? $this->_data['.'][0]['L_contact'] : (($this->lang('contact')) ? $this->lang('contact') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'contact'))) . '         }')) . '</th>
			<th align="left" class="nowrap">' . ((isset($this->_data['.'][0]['L_description'])) ? $this->_data['.'][0]['L_description'] : (($this->lang('description')) ? $this->lang('description') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'description'))) . '         }')) . '</th>
			<th align="left" class="nowrap">' . ((isset($this->_data['.'][0]['L_pi_rating'])) ? $this->_data['.'][0]['L_pi_rating'] : (($this->lang('pi_rating')) ? $this->lang('pi_rating') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pi_rating'))) . '         }')) . '</th>
		  </tr>
		  ';// BEGIN games_row_red
$_games_row_red_count = (isset($this->_data['games_row_red.'])) ?  sizeof($this->_data['games_row_red.']) : 0;
if ($_games_row_red_count) {
for ($_games_row_red_i = 0; $_games_row_red_i < $_games_row_red_count; $_games_row_red_i++)
{
echo '
		  <tr>
			<td width="16" align="center" class="nowrap"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'admin/plugin_red.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_plugin'])) ? $this->_data['.'][0]['L_plugin'] : (($this->lang('plugin')) ? $this->lang('plugin') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'plugin'))) . '         }')) . '" /></td>
			<td class="nowrap">' . ((isset($this->_data['games_row_red.'][$_games_row_red_i]['ACTION_LINK'])) ? $this->_data['games_row_red.'][$_games_row_red_i]['ACTION_LINK'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['games_row_red.'][$_games_row_red_i]['NAME'])) ? $this->_data['games_row_red.'][$_games_row_red_i]['NAME'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['games_row_red.'][$_games_row_red_i]['VERSION'])) ? $this->_data['games_row_red.'][$_games_row_red_i]['VERSION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['games_row_red.'][$_games_row_red_i]['CONTACT'])) ? $this->_data['games_row_red.'][$_games_row_red_i]['CONTACT'] : '') . '</td>
			<td>' . ((isset($this->_data['games_row_red.'][$_games_row_red_i]['DESCRIPTION'])) ? $this->_data['games_row_red.'][$_games_row_red_i]['DESCRIPTION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['games_row_red.'][$_games_row_red_i]['RATING'])) ? $this->_data['games_row_red.'][$_games_row_red_i]['RATING'] : '') . '</td>
		  </tr>
		  ';}}
// END games_row_red
// BEGIN games_row_yellow
$_games_row_yellow_count = (isset($this->_data['games_row_yellow.'])) ?  sizeof($this->_data['games_row_yellow.']) : 0;
if ($_games_row_yellow_count) {
for ($_games_row_yellow_i = 0; $_games_row_yellow_i < $_games_row_yellow_count; $_games_row_yellow_i++)
{
echo '
		  <tr>
			<td width="16" align="center" class="nowrap"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'admin/plugin_yellow.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_plugin'])) ? $this->_data['.'][0]['L_plugin'] : (($this->lang('plugin')) ? $this->lang('plugin') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'plugin'))) . '         }')) . '" /></td>
			<td class="nowrap">' . ((isset($this->_data['games_row_yellow.'][$_games_row_yellow_i]['ACTION_LINK'])) ? $this->_data['games_row_yellow.'][$_games_row_yellow_i]['ACTION_LINK'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['games_row_yellow.'][$_games_row_yellow_i]['NAME'])) ? $this->_data['games_row_yellow.'][$_games_row_yellow_i]['NAME'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['games_row_yellow.'][$_games_row_yellow_i]['VERSION'])) ? $this->_data['games_row_yellow.'][$_games_row_yellow_i]['VERSION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['games_row_yellow.'][$_games_row_yellow_i]['CONTACT'])) ? $this->_data['games_row_yellow.'][$_games_row_yellow_i]['CONTACT'] : '') . '</td>
			<td>' . ((isset($this->_data['games_row_yellow.'][$_games_row_yellow_i]['DESCRIPTION'])) ? $this->_data['games_row_yellow.'][$_games_row_yellow_i]['DESCRIPTION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['games_row_yellow.'][$_games_row_yellow_i]['RATING'])) ? $this->_data['games_row_yellow.'][$_games_row_yellow_i]['RATING'] : '') . '</td>
		  </tr>
		  ';}}
// END games_row_yellow
// BEGIN games_row_green
$_games_row_green_count = (isset($this->_data['games_row_green.'])) ?  sizeof($this->_data['games_row_green.']) : 0;
if ($_games_row_green_count) {
for ($_games_row_green_i = 0; $_games_row_green_i < $_games_row_green_count; $_games_row_green_i++)
{
echo '
		  <tr>
			<td width="16" align="center" class="nowrap"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'admin/plugin.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_plugin'])) ? $this->_data['.'][0]['L_plugin'] : (($this->lang('plugin')) ? $this->lang('plugin') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'plugin'))) . '         }')) . '" /></td>
			<td class="nowrap">' . ((isset($this->_data['games_row_green.'][$_games_row_green_i]['ACTION_LINK'])) ? $this->_data['games_row_green.'][$_games_row_green_i]['ACTION_LINK'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['games_row_green.'][$_games_row_green_i]['NAME'])) ? $this->_data['games_row_green.'][$_games_row_green_i]['NAME'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['games_row_green.'][$_games_row_green_i]['VERSION'])) ? $this->_data['games_row_green.'][$_games_row_green_i]['VERSION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['games_row_green.'][$_games_row_green_i]['CONTACT'])) ? $this->_data['games_row_green.'][$_games_row_green_i]['CONTACT'] : '') . '</td>
			<td>' . ((isset($this->_data['games_row_green.'][$_games_row_green_i]['DESCRIPTION'])) ? $this->_data['games_row_green.'][$_games_row_green_i]['DESCRIPTION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['games_row_green.'][$_games_row_green_i]['RATING'])) ? $this->_data['games_row_green.'][$_games_row_green_i]['RATING'] : '') . '</td>
		  </tr>
		  ';}}
// END games_row_green
// BEGIN games_row_grey
$_games_row_grey_count = (isset($this->_data['games_row_grey.'])) ?  sizeof($this->_data['games_row_grey.']) : 0;
if ($_games_row_grey_count) {
for ($_games_row_grey_i = 0; $_games_row_grey_i < $_games_row_grey_count; $_games_row_grey_i++)
{
echo '
		  <tr>
			<td width="16" align="center" class="nowrap"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'admin/plugin_off.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_plugin'])) ? $this->_data['.'][0]['L_plugin'] : (($this->lang('plugin')) ? $this->lang('plugin') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'plugin'))) . '         }')) . '" /></td>
			<td class="nowrap">' . ((isset($this->_data['games_row_grey.'][$_games_row_grey_i]['ACTION_LINK'])) ? $this->_data['games_row_grey.'][$_games_row_grey_i]['ACTION_LINK'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['games_row_grey.'][$_games_row_grey_i]['NAME'])) ? $this->_data['games_row_grey.'][$_games_row_grey_i]['NAME'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['games_row_grey.'][$_games_row_grey_i]['VERSION'])) ? $this->_data['games_row_grey.'][$_games_row_grey_i]['VERSION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['games_row_grey.'][$_games_row_grey_i]['CONTACT'])) ? $this->_data['games_row_grey.'][$_games_row_grey_i]['CONTACT'] : '') . '</td>
			<td>' . ((isset($this->_data['games_row_grey.'][$_games_row_grey_i]['DESCRIPTION'])) ? $this->_data['games_row_grey.'][$_games_row_grey_i]['DESCRIPTION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['games_row_grey.'][$_games_row_grey_i]['RATING'])) ? $this->_data['games_row_grey.'][$_games_row_grey_i]['RATING'] : '') . '</td>
		  </tr>
		  ';}}
// END games_row_grey
echo '
		  </table>
	</div>

	<div id="fragment-upload">
		<div class="roundbox bluebox">
			<div class="icon_info">' . ((isset($this->_data['.'][0]['L_pi_manualupload_info'])) ? $this->_data['.'][0]['L_pi_manualupload_info'] : (($this->lang('pi_manualupload_info')) ? $this->lang('pi_manualupload_info') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pi_manualupload_info'))) . '         }')) . '</div>
		</div>
		<br />
		<form enctype="multipart/form-data" action="' . ((isset($this->_data['.'][0]['ACTION'])) ? $this->_data['.'][0]['ACTION'] : '') . '" method="post">
			<fieldset class="settings">
				<legend>' . ((isset($this->_data['.'][0]['L_pi_manualupload'])) ? $this->_data['.'][0]['L_pi_manualupload'] : (($this->lang('pi_manualupload')) ? $this->lang('pi_manualupload') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pi_manualupload'))) . '         }')) . '</legend>
				<dl>
					<dt><label>' . ((isset($this->_data['.'][0]['L_pi_choose_file'])) ? $this->_data['.'][0]['L_pi_choose_file'] : (($this->lang('pi_choose_file')) ? $this->lang('pi_choose_file') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pi_choose_file'))) . '         }')) . '</label><br /><span></span></dt>
					<dd><input type="file" name="extension" class="input" style="width:90%" /></dd>
				</dl>
			</fieldset>
			<input type="submit" value="' . ((isset($this->_data['.'][0]['L_pi_upload_button'])) ? $this->_data['.'][0]['L_pi_upload_button'] : (($this->lang('pi_upload_button')) ? $this->lang('pi_upload_button') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pi_upload_button'))) . '         }')) . '" name="upload" class="mainoption bi_ok" />
			' . ((isset($this->_data['.'][0]['CSRF_TOKEN'])) ? $this->_data['.'][0]['CSRF_TOKEN'] : '') . '
		  </form>
	</div>
</div>
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
								<script type="text/javascript">
//<![CDATA[
var totalSteps = 4;
function set_progress_bar_value(recentNumber, labeltext){
	percent = Math.round((recentNumber / totalSteps) * 100);
	$("#nl_progressbar").progressbar("destroy");

	$("#nl_progressbar").progressbar({
		value: percent
	});
	
	$("#nl_progressbar_label").html(labeltext);
}

function update_error(data){
	$("#lu_error").show();
	$("#lu_error_label").html("<b>' . ((isset($this->_data['.'][0]['L_liveupdate_step_error'])) ? $this->_data['.'][0]['L_liveupdate_step_error'] : (($this->lang('liveupdate_step_error')) ? $this->lang('liveupdate_step_error') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'liveupdate_step_error'))) . '         }')) . '</b>" + data);
	$("#lu_loading_img").hide();
}

function repo_update(cat, extensioncode){
	';// IF S_HIDE_UPDATEWARNING
if ($this->_data['.'][0]['S_HIDE_UPDATEWARNING']) { 
echo '
	repo_update_start(cat, extensioncode);
	';// ELSE
} else {
echo '
	if (cat != 2) {
		update_confirm(cat, extensioncode);
	} else {
		repo_update_start(cat, extensioncode);
	}
	';// ENDIF
}
echo '
}

function repo_update_start(cat, extensioncode){
	$("#lu_error").hide();
	$("#nl_progressbar").show();
	$("#lu_loading_img").show();

	repo_step1(cat, extensioncode, \'update\');
}

function repo_install(cat, extensioncode){
	
	$("#lu_error").hide();
	$("#nl_progressbar").show();
	$("#lu_loading_img").show();

	repo_step1(cat, extensioncode, \'install\');
}

function repo_step1(cat, extensioncode, mode){
	set_progress_bar_value(0, \'' . ((isset($this->_data['.'][0]['L_repo_step1'])) ? $this->_data['.'][0]['L_repo_step1'] : (($this->lang('repo_step1')) ? $this->lang('repo_step1') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'repo_step1'))) . '         }')) . '...\');
	$.get(\'manage_extensions.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&step=1&cat=\'+cat+\'&code=\'+extensioncode, function(data) {
		  if (data == \'true\'){
			repo_step2(cat, extensioncode, mode);
		  } else {
			update_error(data);
		  }
	});
}

function repo_step2(cat, extensioncode, mode){
	set_progress_bar_value(1, \'' . ((isset($this->_data['.'][0]['L_repo_step2'])) ? $this->_data['.'][0]['L_repo_step2'] : (($this->lang('repo_step2')) ? $this->lang('repo_step2') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'repo_step2'))) . '         }')) . '...\');
	$.get(\'manage_extensions.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&step=2&cat=\'+cat+\'&code=\'+extensioncode, function(data) {
		  if (data == \'true\'){
			repo_step3(cat, extensioncode, mode);
		  } else {
			update_error(data);
		  }
	});
}

function repo_step3(cat, extensioncode, mode){
	set_progress_bar_value(2, \'' . ((isset($this->_data['.'][0]['L_repo_step3'])) ? $this->_data['.'][0]['L_repo_step3'] : (($this->lang('repo_step3')) ? $this->lang('repo_step3') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'repo_step3'))) . '         }')) . '...\');
	$.get(\'manage_extensions.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&step=3&cat=\'+cat+\'&code=\'+extensioncode, function(data) {
		  if (data == \'true\'){
			repo_step4(cat, extensioncode, mode);
		  } else {
			update_error(data);
		  }
	});
}

function repo_step4(cat, extensioncode, mode){
	set_progress_bar_value(3, \'' . ((isset($this->_data['.'][0]['L_repo_step4'])) ? $this->_data['.'][0]['L_repo_step4'] : (($this->lang('repo_step4')) ? $this->lang('repo_step4') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'repo_step4'))) . '         }')) . '...\');
	$.get(\'manage_extensions.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&step=4&cat=\'+cat+\'&code=\'+extensioncode, function(data) {
		  if (data == \'true\'){
			repo_step5(cat, extensioncode, mode);
		  } else {
			update_error(data);
		  }
	});
}

function repo_step5(cat, extensioncode, mode){
	window.location=\'manage_extensions.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&mode=\'+mode+\'&cat=\'+cat+\'&code=\'+extensioncode+\'&link_hash=' . ((isset($this->_data['.'][0]['CSRF_MODE_TOKEN'])) ? $this->_data['.'][0]['CSRF_MODE_TOKEN'] : '') . '\';
	return;	
}

function hide_update_warning(status){
	var hide = (status) ? 1 : 0;
	$.get(\'manage_extensions.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&hide_update_warning=true&hide=\'+hide+\'&link_hash=' . ((isset($this->_data['.'][0]['CSRF_UPDATEWARNING_TOKEN'])) ? $this->_data['.'][0]['CSRF_UPDATEWARNING_TOKEN'] : '') . '\');
}
//]]>
</script>
';// IF not S_REQUIREMENTS
if (! $this->_data['.'][0]['S_REQUIREMENTS']) { 
echo '
<div class="errorbox roundbox">
	<div class="icon_false"><b>' . ((isset($this->_data['.'][0]['L_repo_requirements_failed'])) ? $this->_data['.'][0]['L_repo_requirements_failed'] : (($this->lang('repo_requirements_failed')) ? $this->lang('repo_requirements_failed') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'repo_requirements_failed'))) . '         }')) . '</b></div>
</div>
';// ENDIF
}
echo '

<div class="errorbox roundbox" id="lu_error" style="display:none;">
		<div class="icon_false"><span id="lu_error_label"></span></div>
</div>

<div id="nl_progressbar" style="display:none;">
	<span class="nl_progressbar_label"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'global/loading.gif" id="lu_loading_img" alt="Loading..." /> &nbsp;<span id="nl_progressbar_label">' . ((isset($this->_data['.'][0]['L_liveupdate'])) ? $this->_data['.'][0]['L_liveupdate'] : (($this->lang('liveupdate')) ? $this->lang('liveupdate') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'liveupdate'))) . '         }')) . '...</span></span>
</div>

<div id=\'plus_plugins_tab\'>

	<ul>
		<li><a href=\'#fragment-1\'><span>' . ((isset($this->_data['.'][0]['L_CATEGORY_1'])) ? $this->_data['.'][0]['L_CATEGORY_1'] : (($this->lang('CATEGORY_1')) ? $this->lang('CATEGORY_1') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CATEGORY_1'))) . '         }')) . '</span></a>' . ((isset($this->_data['.'][0]['BADGE_1'])) ? $this->_data['.'][0]['BADGE_1'] : '') . '</li>
		<li><a href=\'#fragment-2\'><span>' . ((isset($this->_data['.'][0]['L_CATEGORY_2'])) ? $this->_data['.'][0]['L_CATEGORY_2'] : (($this->lang('CATEGORY_2')) ? $this->lang('CATEGORY_2') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CATEGORY_2'))) . '         }')) . '</span></a>' . ((isset($this->_data['.'][0]['BADGE_2'])) ? $this->_data['.'][0]['BADGE_2'] : '') . '</li>
		<li><a href=\'#fragment-3\'><span>' . ((isset($this->_data['.'][0]['L_CATEGORY_3'])) ? $this->_data['.'][0]['L_CATEGORY_3'] : (($this->lang('CATEGORY_3')) ? $this->lang('CATEGORY_3') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CATEGORY_3'))) . '         }')) . '</span></a>' . ((isset($this->_data['.'][0]['BADGE_3'])) ? $this->_data['.'][0]['BADGE_3'] : '') . '</li>
		<li><a href=\'#fragment-7\'><span>' . ((isset($this->_data['.'][0]['L_CATEGORY_7'])) ? $this->_data['.'][0]['L_CATEGORY_7'] : (($this->lang('CATEGORY_7')) ? $this->lang('CATEGORY_7') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CATEGORY_7'))) . '         }')) . '</span></a>' . ((isset($this->_data['.'][0]['BADGE_7'])) ? $this->_data['.'][0]['BADGE_7'] : '') . '</li>
		<li><a href=\'#fragment-upload\'><span>' . ((isset($this->_data['.'][0]['L_pi_manualupload'])) ? $this->_data['.'][0]['L_pi_manualupload'] : (($this->lang('pi_manualupload')) ? $this->lang('pi_manualupload') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pi_manualupload'))) . '         }')) . '</span></a></li>
	</ul>

	<div id="fragment-1">
		<table width="100%" border="0" cellspacing="1" cellpadding="4" class="colorswitch">
		<tr>
			<th align="left" width="16">&nbsp;</th>
			<th align="left" class="nowrap" width="16">' . ((isset($this->_data['.'][0]['L_action'])) ? $this->_data['.'][0]['L_action'] : (($this->lang('action')) ? $this->lang('action') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'action'))) . '         }')) . '</th>
			<th align="left" class="nowrap">' . ((isset($this->_data['.'][0]['L_name'])) ? $this->_data['.'][0]['L_name'] : (($this->lang('name')) ? $this->lang('name') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'name'))) . '         }')) . '</th>
			<th align="left" class="nowrap" colspan="' . ((isset($this->_data['.'][0]['DEP_COUNT'])) ? $this->_data['.'][0]['DEP_COUNT'] : '') . '">' . ((isset($this->_data['.'][0]['L_plug_dep_title'])) ? $this->_data['.'][0]['L_plug_dep_title'] : (($this->lang('plug_dep_title')) ? $this->lang('plug_dep_title') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'plug_dep_title'))) . '         }')) . '</th>
			<th align="left" class="nowrap">' . ((isset($this->_data['.'][0]['L_version'])) ? $this->_data['.'][0]['L_version'] : (($this->lang('version')) ? $this->lang('version') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'version'))) . '         }')) . '</th>
			<th align="left" class="nowrap">' . ((isset($this->_data['.'][0]['L_portalplugin_author'])) ? $this->_data['.'][0]['L_portalplugin_author'] : (($this->lang('portalplugin_author')) ? $this->lang('portalplugin_author') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'portalplugin_author'))) . '         }')) . '</th>
			<th align="left" class="nowrap">' . ((isset($this->_data['.'][0]['L_description'])) ? $this->_data['.'][0]['L_description'] : (($this->lang('description')) ? $this->lang('description') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'description'))) . '         }')) . '</th>
			<th align="left" class="nowrap">' . ((isset($this->_data['.'][0]['L_infos'])) ? $this->_data['.'][0]['L_infos'] : (($this->lang('infos')) ? $this->lang('infos') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'infos'))) . '         }')) . '</th>
		</tr>
		';// BEGIN plugins_row_red
$_plugins_row_red_count = (isset($this->_data['plugins_row_red.'])) ?  sizeof($this->_data['plugins_row_red.']) : 0;
if ($_plugins_row_red_count) {
for ($_plugins_row_red_i = 0; $_plugins_row_red_i < $_plugins_row_red_count; $_plugins_row_red_i++)
{
echo '
		<tr>
			<td width="16" align="center" class="nowrap"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'admin/plugin_red.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_plugin'])) ? $this->_data['.'][0]['L_plugin'] : (($this->lang('plugin')) ? $this->lang('plugin') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'plugin'))) . '         }')) . '" /></td>
			<td class="nowrap">' . ((isset($this->_data['plugins_row_red.'][$_plugins_row_red_i]['ACTION_LINK'])) ? $this->_data['plugins_row_red.'][$_plugins_row_red_i]['ACTION_LINK'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['plugins_row_red.'][$_plugins_row_red_i]['NAME'])) ? $this->_data['plugins_row_red.'][$_plugins_row_red_i]['NAME'] : '') . '</td>
			';// BEGIN dep_row
$_dep_row_count = (isset($this->_data['plugins_row_red.'][$_plugins_row_red_i]['dep_row.'])) ? sizeof($this->_data['plugins_row_red.'][$_plugins_row_red_i]['dep_row.']) : 0;
if ($_dep_row_count) {
for ($_dep_row_i = 0; $_dep_row_i < $_dep_row_count; $_dep_row_i++)
{
echo '
			<td class="nowrap">' . ((isset($this->_data['plugins_row_red.'][$_plugins_row_red_i]['dep_row.'][$_dep_row_i]['DEPENDENCY_STATUS'])) ? $this->_data['plugins_row_red.'][$_plugins_row_red_i]['dep_row.'][$_dep_row_i]['DEPENDENCY_STATUS'] : '') . '</td>
			';}}
// END dep_row
echo '
			<td class="nowrap">' . ((isset($this->_data['plugins_row_red.'][$_plugins_row_red_i]['VERSION'])) ? $this->_data['plugins_row_red.'][$_plugins_row_red_i]['VERSION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['plugins_row_red.'][$_plugins_row_red_i]['CONTACT'])) ? $this->_data['plugins_row_red.'][$_plugins_row_red_i]['CONTACT'] : '') . '</td>
			<td>' . ((isset($this->_data['plugins_row_red.'][$_plugins_row_red_i]['DESCRIPTION'])) ? $this->_data['plugins_row_red.'][$_plugins_row_red_i]['DESCRIPTION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['plugins_row_red.'][$_plugins_row_red_i]['LONG_DESCRIPTION'])) ? $this->_data['plugins_row_red.'][$_plugins_row_red_i]['LONG_DESCRIPTION'] : '') . '  ' . ((isset($this->_data['plugins_row_red.'][$_plugins_row_red_i]['HOMEPAGE'])) ? $this->_data['plugins_row_red.'][$_plugins_row_red_i]['HOMEPAGE'] : '') . ' ' . ((isset($this->_data['plugins_row_red.'][$_plugins_row_red_i]['MANUAL'])) ? $this->_data['plugins_row_red.'][$_plugins_row_red_i]['MANUAL'] : '') . '</td>
		</tr>
		';}}
// END plugins_row_red
// BEGIN plugins_row_yellow
$_plugins_row_yellow_count = (isset($this->_data['plugins_row_yellow.'])) ?  sizeof($this->_data['plugins_row_yellow.']) : 0;
if ($_plugins_row_yellow_count) {
for ($_plugins_row_yellow_i = 0; $_plugins_row_yellow_i < $_plugins_row_yellow_count; $_plugins_row_yellow_i++)
{
echo '
		<tr>
			<td width="16" align="center" class="nowrap"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'admin/plugin_yellow.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_plugin'])) ? $this->_data['.'][0]['L_plugin'] : (($this->lang('plugin')) ? $this->lang('plugin') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'plugin'))) . '         }')) . '" /></td>
			<td class="nowrap">' . ((isset($this->_data['plugins_row_yellow.'][$_plugins_row_yellow_i]['ACTION_LINK'])) ? $this->_data['plugins_row_yellow.'][$_plugins_row_yellow_i]['ACTION_LINK'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['plugins_row_yellow.'][$_plugins_row_yellow_i]['NAME'])) ? $this->_data['plugins_row_yellow.'][$_plugins_row_yellow_i]['NAME'] : '') . '</td>
			';// BEGIN dep_row
$_dep_row_count = (isset($this->_data['plugins_row_yellow.'][$_plugins_row_yellow_i]['dep_row.'])) ? sizeof($this->_data['plugins_row_yellow.'][$_plugins_row_yellow_i]['dep_row.']) : 0;
if ($_dep_row_count) {
for ($_dep_row_i = 0; $_dep_row_i < $_dep_row_count; $_dep_row_i++)
{
echo '
			<td class="nowrap">' . ((isset($this->_data['plugins_row_yellow.'][$_plugins_row_yellow_i]['dep_row.'][$_dep_row_i]['DEPENDENCY_STATUS'])) ? $this->_data['plugins_row_yellow.'][$_plugins_row_yellow_i]['dep_row.'][$_dep_row_i]['DEPENDENCY_STATUS'] : '') . '</td>
			';}}
// END dep_row
echo '
			<td class="nowrap">' . ((isset($this->_data['plugins_row_yellow.'][$_plugins_row_yellow_i]['VERSION'])) ? $this->_data['plugins_row_yellow.'][$_plugins_row_yellow_i]['VERSION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['plugins_row_yellow.'][$_plugins_row_yellow_i]['CONTACT'])) ? $this->_data['plugins_row_yellow.'][$_plugins_row_yellow_i]['CONTACT'] : '') . '</td>
			<td>' . ((isset($this->_data['plugins_row_yellow.'][$_plugins_row_yellow_i]['DESCRIPTION'])) ? $this->_data['plugins_row_yellow.'][$_plugins_row_yellow_i]['DESCRIPTION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['plugins_row_yellow.'][$_plugins_row_yellow_i]['LONG_DESCRIPTION'])) ? $this->_data['plugins_row_yellow.'][$_plugins_row_yellow_i]['LONG_DESCRIPTION'] : '') . '  ' . ((isset($this->_data['plugins_row_yellow.'][$_plugins_row_yellow_i]['HOMEPAGE'])) ? $this->_data['plugins_row_yellow.'][$_plugins_row_yellow_i]['HOMEPAGE'] : '') . ' ' . ((isset($this->_data['plugins_row_yellow.'][$_plugins_row_yellow_i]['MANUAL'])) ? $this->_data['plugins_row_yellow.'][$_plugins_row_yellow_i]['MANUAL'] : '') . '</td>
		</tr>
		';}}
// END plugins_row_yellow
// BEGIN plugins_row_green
$_plugins_row_green_count = (isset($this->_data['plugins_row_green.'])) ?  sizeof($this->_data['plugins_row_green.']) : 0;
if ($_plugins_row_green_count) {
for ($_plugins_row_green_i = 0; $_plugins_row_green_i < $_plugins_row_green_count; $_plugins_row_green_i++)
{
echo '
		<tr>
			<td width="16" align="center" class="nowrap"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'admin/plugin.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_plugin'])) ? $this->_data['.'][0]['L_plugin'] : (($this->lang('plugin')) ? $this->lang('plugin') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'plugin'))) . '         }')) . '" /></td>
			<td class="nowrap">' . ((isset($this->_data['plugins_row_green.'][$_plugins_row_green_i]['ACTION_LINK'])) ? $this->_data['plugins_row_green.'][$_plugins_row_green_i]['ACTION_LINK'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['plugins_row_green.'][$_plugins_row_green_i]['NAME'])) ? $this->_data['plugins_row_green.'][$_plugins_row_green_i]['NAME'] : '') . '</td>
			';// BEGIN dep_row
$_dep_row_count = (isset($this->_data['plugins_row_green.'][$_plugins_row_green_i]['dep_row.'])) ? sizeof($this->_data['plugins_row_green.'][$_plugins_row_green_i]['dep_row.']) : 0;
if ($_dep_row_count) {
for ($_dep_row_i = 0; $_dep_row_i < $_dep_row_count; $_dep_row_i++)
{
echo '
			<td class="nowrap">' . ((isset($this->_data['plugins_row_green.'][$_plugins_row_green_i]['dep_row.'][$_dep_row_i]['DEPENDENCY_STATUS'])) ? $this->_data['plugins_row_green.'][$_plugins_row_green_i]['dep_row.'][$_dep_row_i]['DEPENDENCY_STATUS'] : '') . '</td>
			';}}
// END dep_row
echo '
			<td class="nowrap">' . ((isset($this->_data['plugins_row_green.'][$_plugins_row_green_i]['VERSION'])) ? $this->_data['plugins_row_green.'][$_plugins_row_green_i]['VERSION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['plugins_row_green.'][$_plugins_row_green_i]['CONTACT'])) ? $this->_data['plugins_row_green.'][$_plugins_row_green_i]['CONTACT'] : '') . '</td>
			<td>' . ((isset($this->_data['plugins_row_green.'][$_plugins_row_green_i]['DESCRIPTION'])) ? $this->_data['plugins_row_green.'][$_plugins_row_green_i]['DESCRIPTION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['plugins_row_green.'][$_plugins_row_green_i]['LONG_DESCRIPTION'])) ? $this->_data['plugins_row_green.'][$_plugins_row_green_i]['LONG_DESCRIPTION'] : '') . '  ' . ((isset($this->_data['plugins_row_green.'][$_plugins_row_green_i]['HOMEPAGE'])) ? $this->_data['plugins_row_green.'][$_plugins_row_green_i]['HOMEPAGE'] : '') . ' ' . ((isset($this->_data['plugins_row_green.'][$_plugins_row_green_i]['MANUAL'])) ? $this->_data['plugins_row_green.'][$_plugins_row_green_i]['MANUAL'] : '') . '</td>
		</tr>
		';}}
// END plugins_row_green
// BEGIN plugins_row_grey
$_plugins_row_grey_count = (isset($this->_data['plugins_row_grey.'])) ?  sizeof($this->_data['plugins_row_grey.']) : 0;
if ($_plugins_row_grey_count) {
for ($_plugins_row_grey_i = 0; $_plugins_row_grey_i < $_plugins_row_grey_count; $_plugins_row_grey_i++)
{
echo '
		<tr>
			<td width="16" align="center" class="nowrap"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'admin/plugin_off.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_plugin'])) ? $this->_data['.'][0]['L_plugin'] : (($this->lang('plugin')) ? $this->lang('plugin') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'plugin'))) . '         }')) . '" /></td>
			<td class="nowrap">' . ((isset($this->_data['plugins_row_grey.'][$_plugins_row_grey_i]['ACTION_LINK'])) ? $this->_data['plugins_row_grey.'][$_plugins_row_grey_i]['ACTION_LINK'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['plugins_row_grey.'][$_plugins_row_grey_i]['NAME'])) ? $this->_data['plugins_row_grey.'][$_plugins_row_grey_i]['NAME'] : '') . '</td>
			';// BEGIN dep_row
$_dep_row_count = (isset($this->_data['plugins_row_grey.'][$_plugins_row_grey_i]['dep_row.'])) ? sizeof($this->_data['plugins_row_grey.'][$_plugins_row_grey_i]['dep_row.']) : 0;
if ($_dep_row_count) {
for ($_dep_row_i = 0; $_dep_row_i < $_dep_row_count; $_dep_row_i++)
{
echo '
			<td class="nowrap">' . ((isset($this->_data['plugins_row_grey.'][$_plugins_row_grey_i]['dep_row.'][$_dep_row_i]['DEPENDENCY_STATUS'])) ? $this->_data['plugins_row_grey.'][$_plugins_row_grey_i]['dep_row.'][$_dep_row_i]['DEPENDENCY_STATUS'] : '') . '</td>
			';}}
// END dep_row
echo '
			<td class="nowrap">' . ((isset($this->_data['plugins_row_grey.'][$_plugins_row_grey_i]['VERSION'])) ? $this->_data['plugins_row_grey.'][$_plugins_row_grey_i]['VERSION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['plugins_row_grey.'][$_plugins_row_grey_i]['CONTACT'])) ? $this->_data['plugins_row_grey.'][$_plugins_row_grey_i]['CONTACT'] : '') . '</td>
			<td>' . ((isset($this->_data['plugins_row_grey.'][$_plugins_row_grey_i]['DESCRIPTION'])) ? $this->_data['plugins_row_grey.'][$_plugins_row_grey_i]['DESCRIPTION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['plugins_row_grey.'][$_plugins_row_grey_i]['LONG_DESCRIPTION'])) ? $this->_data['plugins_row_grey.'][$_plugins_row_grey_i]['LONG_DESCRIPTION'] : '') . '  ' . ((isset($this->_data['plugins_row_grey.'][$_plugins_row_grey_i]['HOMEPAGE'])) ? $this->_data['plugins_row_grey.'][$_plugins_row_grey_i]['HOMEPAGE'] : '') . ' ' . ((isset($this->_data['plugins_row_grey.'][$_plugins_row_grey_i]['MANUAL'])) ? $this->_data['plugins_row_grey.'][$_plugins_row_grey_i]['MANUAL'] : '') . '</td>
		</tr>
		';}}
// END plugins_row_grey
// BEGIN plugins_row_grey_repo
$_plugins_row_grey_repo_count = (isset($this->_data['plugins_row_grey_repo.'])) ?  sizeof($this->_data['plugins_row_grey_repo.']) : 0;
if ($_plugins_row_grey_repo_count) {
for ($_plugins_row_grey_repo_i = 0; $_plugins_row_grey_repo_i < $_plugins_row_grey_repo_count; $_plugins_row_grey_repo_i++)
{
echo '
		<tr>
			<td width="16" align="center" class="nowrap"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'admin/plugin_off.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_plugin'])) ? $this->_data['.'][0]['L_plugin'] : (($this->lang('plugin')) ? $this->lang('plugin') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'plugin'))) . '         }')) . '" /></td>
			<td class="nowrap">' . ((isset($this->_data['plugins_row_grey_repo.'][$_plugins_row_grey_repo_i]['ACTION_LINK'])) ? $this->_data['plugins_row_grey_repo.'][$_plugins_row_grey_repo_i]['ACTION_LINK'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['plugins_row_grey_repo.'][$_plugins_row_grey_repo_i]['NAME'])) ? $this->_data['plugins_row_grey_repo.'][$_plugins_row_grey_repo_i]['NAME'] : '') . '</td>
			';// BEGIN dep_row
$_dep_row_count = (isset($this->_data['plugins_row_grey_repo.'][$_plugins_row_grey_repo_i]['dep_row.'])) ? sizeof($this->_data['plugins_row_grey_repo.'][$_plugins_row_grey_repo_i]['dep_row.']) : 0;
if ($_dep_row_count) {
for ($_dep_row_i = 0; $_dep_row_i < $_dep_row_count; $_dep_row_i++)
{
echo '
			<td class="nowrap">' . ((isset($this->_data['plugins_row_grey_repo.'][$_plugins_row_grey_repo_i]['dep_row.'][$_dep_row_i]['DEPENDENCY_STATUS'])) ? $this->_data['plugins_row_grey_repo.'][$_plugins_row_grey_repo_i]['dep_row.'][$_dep_row_i]['DEPENDENCY_STATUS'] : '') . '</td>
			';}}
// END dep_row
echo '
			<td class="nowrap">' . ((isset($this->_data['plugins_row_grey_repo.'][$_plugins_row_grey_repo_i]['VERSION'])) ? $this->_data['plugins_row_grey_repo.'][$_plugins_row_grey_repo_i]['VERSION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['plugins_row_grey_repo.'][$_plugins_row_grey_repo_i]['CONTACT'])) ? $this->_data['plugins_row_grey_repo.'][$_plugins_row_grey_repo_i]['CONTACT'] : '') . '</td>
			<td>' . ((isset($this->_data['plugins_row_grey_repo.'][$_plugins_row_grey_repo_i]['DESCRIPTION'])) ? $this->_data['plugins_row_grey_repo.'][$_plugins_row_grey_repo_i]['DESCRIPTION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['plugins_row_grey_repo.'][$_plugins_row_grey_repo_i]['LONG_DESCRIPTION'])) ? $this->_data['plugins_row_grey_repo.'][$_plugins_row_grey_repo_i]['LONG_DESCRIPTION'] : '') . '  ' . ((isset($this->_data['plugins_row_grey_repo.'][$_plugins_row_grey_repo_i]['HOMEPAGE'])) ? $this->_data['plugins_row_grey_repo.'][$_plugins_row_grey_repo_i]['HOMEPAGE'] : '') . ' ' . ((isset($this->_data['plugins_row_grey_repo.'][$_plugins_row_grey_repo_i]['MANUAL'])) ? $this->_data['plugins_row_grey_repo.'][$_plugins_row_grey_repo_i]['MANUAL'] : '') . '</td>
		</tr>
		';}}
// END plugins_row_grey_repo
// BEGIN plugins_row_broken
$_plugins_row_broken_count = (isset($this->_data['plugins_row_broken.'])) ?  sizeof($this->_data['plugins_row_broken.']) : 0;
if ($_plugins_row_broken_count) {
for ($_plugins_row_broken_i = 0; $_plugins_row_broken_i < $_plugins_row_broken_count; $_plugins_row_broken_i++)
{
echo '
		<tr>
			 <td width="16" align="center" class="nowrap"></td>
			<td>';// IF plugins_row_broken.DELETE
if ($this->_data['plugins_row_broken.'][$_plugins_row_broken_i]['DELETE']) { 
echo '<a href="' . ((isset($this->_data['plugins_row_broken.'][$_plugins_row_broken_i]['DEL_LINK'])) ? $this->_data['plugins_row_broken.'][$_plugins_row_broken_i]['DEL_LINK'] : '') . '" title="' . ((isset($this->_data['.'][0]['L_delete_plugin'])) ? $this->_data['.'][0]['L_delete_plugin'] : (($this->lang('delete_plugin')) ? $this->lang('delete_plugin') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'delete_plugin'))) . '         }')) . '"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'false.png" width="20" height="20" alt="!" />&nbsp;' . ((isset($this->_data['.'][0]['L_delete'])) ? $this->_data['.'][0]['L_delete'] : (($this->lang('delete')) ? $this->lang('delete') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'delete'))) . '         }')) . '</a>';// ENDIF
}
echo '&nbsp;</td>
			<td colspan="20">' . ((isset($this->_data['plugins_row_broken.'][$_plugins_row_broken_i]['NAME'])) ? $this->_data['plugins_row_broken.'][$_plugins_row_broken_i]['NAME'] : '') . ': ' . ((isset($this->_data['.'][0]['L_broken_plugin'])) ? $this->_data['.'][0]['L_broken_plugin'] : (($this->lang('broken_plugin')) ? $this->lang('broken_plugin') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'broken_plugin'))) . '         }')) . '</td>
		</tr>
		';}}
// END plugins_row_broken
echo '
		</table>
	</div>

	<div id="fragment-2">
		<script type="text/javascript" language="javascript">

		var override = 0;
		function change_override(value){
			override = value;
		}

		function submit_form(){
			document.post.override.value = override;
			document.post.submit();
		}
		</script>
		<form method="post" action="' . ((isset($this->_data['.'][0]['ACTION'])) ? $this->_data['.'][0]['ACTION'] : '') . '&amp;cat=2&amp;mode=default_style" name="post">
		<input type="hidden" name="override" value="0" />
		<table width="100%" border="0" cellspacing="1" cellpadding="4" class="colorswitch hoverrows">
		  <tr>
			<th width="16" class="nowrap">&nbsp;</th>
			<th colspan="6" align="left" class="nowrap">' . ((isset($this->_data['.'][0]['L_action'])) ? $this->_data['.'][0]['L_action'] : (($this->lang('action')) ? $this->lang('action') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'action'))) . '         }')) . '</th>
			<th width="16" align="left" class="nowrap">&nbsp;</th>
			<th align="left" class="nowrap">' . ((isset($this->_data['.'][0]['L_name'])) ? $this->_data['.'][0]['L_name'] : (($this->lang('name')) ? $this->lang('name') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'name'))) . '         }')) . '</th>
			<th align="left" class="nowrap">' . ((isset($this->_data['.'][0]['L_template_files'])) ? $this->_data['.'][0]['L_template_files'] : (($this->lang('template_files')) ? $this->lang('template_files') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'template_files'))) . '         }')) . '</th>
			<th align="left" class="nowrap">' . ((isset($this->_data['.'][0]['L_users'])) ? $this->_data['.'][0]['L_users'] : (($this->lang('users')) ? $this->lang('users') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'users'))) . '         }')) . '</th>
			<th align="left" class="nowrap">' . ((isset($this->_data['.'][0]['L_version'])) ? $this->_data['.'][0]['L_version'] : (($this->lang('version')) ? $this->lang('version') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'version'))) . '         }')) . '</th>
			<th align="left" class="nowrap">' . ((isset($this->_data['.'][0]['L_portalplugin_author'])) ? $this->_data['.'][0]['L_portalplugin_author'] : (($this->lang('portalplugin_author')) ? $this->lang('portalplugin_author') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'portalplugin_author'))) . '         }')) . '</th>
			<th align="left" class="nowrap">' . ((isset($this->_data['.'][0]['L_preview'])) ? $this->_data['.'][0]['L_preview'] : (($this->lang('preview')) ? $this->lang('preview') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'preview'))) . '         }')) . '</th>
			</tr>
		  ';// BEGIN styles_row_red_local
$_styles_row_red_local_count = (isset($this->_data['styles_row_red_local.'])) ?  sizeof($this->_data['styles_row_red_local.']) : 0;
if ($_styles_row_red_local_count) {
for ($_styles_row_red_local_i = 0; $_styles_row_red_local_i < $_styles_row_red_local_count; $_styles_row_red_local_i++)
{
echo '
		  <tr>
		   <td width="16" align="center" class="nowrap"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'admin/plugin_red.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_plugin'])) ? $this->_data['.'][0]['L_plugin'] : (($this->lang('plugin')) ? $this->lang('plugin') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'plugin'))) . '         }')) . '" /></td>
			<td width="10" class="nowrap">' . ((isset($this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['ACTION_LINK'])) ? $this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['ACTION_LINK'] : '') . '</td>
			<td width="10" class="nowrap">';// IF not styles_row_red_local.S_DEFAULT
if (! $this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['S_DEFAULT']) { 
echo '
			  <a href="' . ((isset($this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['U_ENABLE'])) ? $this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['U_ENABLE'] : '') . '"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'glyphs/' . ((isset($this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['ENABLE'])) ? $this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['ENABLE'] : '') . '.png" width="16" height="16" title="' . ((isset($this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['L_ENABLE'])) ? $this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['L_ENABLE'] : '') . '" alt="' . ((isset($this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['L_ENABLE'])) ? $this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['L_ENABLE'] : '') . '" /></a>  
			  ';// ENDIF
}
echo '</td>
			<td width="10" class="nowrap"><a href="' . ((isset($this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['U_EDIT_STYLE'])) ? $this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['U_EDIT_STYLE'] : '') . '" title="' . ((isset($this->_data['.'][0]['L_edit_style'])) ? $this->_data['.'][0]['L_edit_style'] : (($this->lang('edit_style')) ? $this->lang('edit_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'edit_style'))) . '         }')) . '"><img src="' . ((isset($this->_data['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_data['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/glyphs/edit.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_edit_style'])) ? $this->_data['.'][0]['L_edit_style'] : (($this->lang('edit_style')) ? $this->lang('edit_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'edit_style'))) . '         }')) . '" /></a></td>
			<td width="10" class="nowrap"><a href="' . ((isset($this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['U_DOWNLOAD_STYLE'])) ? $this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['U_DOWNLOAD_STYLE'] : '') . '" title="' . ((isset($this->_data['.'][0]['L_download_style'])) ? $this->_data['.'][0]['L_download_style'] : (($this->lang('download_style')) ? $this->lang('download_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'download_style'))) . '         }')) . '"><img src="' . ((isset($this->_data['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_data['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/admin/manage_backup.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_download_style'])) ? $this->_data['.'][0]['L_download_style'] : (($this->lang('download_style')) ? $this->lang('download_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'download_style'))) . '         }')) . '" /></a></td>
			<td width="10" class="nowrap">';// IF not styles_row_red_local.S_DEFAULT
if (! $this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['S_DEFAULT']) { 
echo '
				<a href="javascript:style_delete_warning(' . ((isset($this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['ID'])) ? $this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['ID'] : '') . ')" title="' . ((isset($this->_data['.'][0]['L_delete_style'])) ? $this->_data['.'][0]['L_delete_style'] : (($this->lang('delete_style')) ? $this->lang('delete_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'delete_style'))) . '         }')) . '"><img src="' . ((isset($this->_data['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_data['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/global/delete.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_delete_style'])) ? $this->_data['.'][0]['L_delete_style'] : (($this->lang('delete_style')) ? $this->lang('delete_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'delete_style'))) . '         }')) . '" /></a>
				';// ENDIF
}
echo '</td>
			<td width="10" class="nowrap">
				<a href="javascript:style_reset_warning(' . ((isset($this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['ID'])) ? $this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['ID'] : '') . ')" title="' . ((isset($this->_data['.'][0]['L_reset_style'])) ? $this->_data['.'][0]['L_reset_style'] : (($this->lang('reset_style')) ? $this->lang('reset_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'reset_style'))) . '         }')) . '"><img src="' . ((isset($this->_data['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_data['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/global/update.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_reset_style'])) ? $this->_data['.'][0]['L_reset_style'] : (($this->lang('reset_style')) ? $this->lang('reset_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'reset_style'))) . '         }')) . '" /></a>
			</td>
			
			<td width="25" class="nowrap" align="center">';// IF not styles_row_red_local.S_DEACTIVATED
if (! $this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['S_DEACTIVATED']) { 
echo '<input type="radio" name="standard_style" ' . ((isset($this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['STANDARD'])) ? $this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['STANDARD'] : '') . ' value="' . ((isset($this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['ID'])) ? $this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['ID'] : '') . '" />';// ENDIF
}
echo '</td>
			';echo '<!-- name -->';echo '<td class="nowrap">';// IF styles_row_red_local.S_DEFAULT
if ($this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['S_DEFAULT']) { 
echo '<b>';// ENDIF
}
echo '<a href="' . ((isset($this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['U_EDIT_STYLE'])) ? $this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['U_EDIT_STYLE'] : '') . '">' . ((isset($this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['NAME'])) ? $this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['NAME'] : '') . '</a> ';// IF styles_row_red_local.S_DEFAULT
if ($this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['S_DEFAULT']) { 
echo ' * </b>';// ENDIF
}
echo '</td>

			<td class="nowrap">' . ((isset($this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['TEMPLATE'])) ? $this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['TEMPLATE'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['USERS'])) ? $this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['USERS'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['VERSION'])) ? $this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['VERSION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['AUTHOR'])) ? $this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['AUTHOR'] : '') . '</td>
			<td class="nowrap"><a href="javascript:style_preview(' . ((isset($this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['ID'])) ? $this->_data['styles_row_red_local.'][$_styles_row_red_local_i]['ID'] : '') . ');">' . ((isset($this->_data['.'][0]['L_preview'])) ? $this->_data['.'][0]['L_preview'] : (($this->lang('preview')) ? $this->lang('preview') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'preview'))) . '         }')) . '</a></td>
			</tr>
		   ';}}
// END styles_row_red_local
// BEGIN styles_row_red
$_styles_row_red_count = (isset($this->_data['styles_row_red.'])) ?  sizeof($this->_data['styles_row_red.']) : 0;
if ($_styles_row_red_count) {
for ($_styles_row_red_i = 0; $_styles_row_red_i < $_styles_row_red_count; $_styles_row_red_i++)
{
echo '
		  <tr>
		   <td width="16" align="center" class="nowrap"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'admin/plugin_red.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_plugin'])) ? $this->_data['.'][0]['L_plugin'] : (($this->lang('plugin')) ? $this->lang('plugin') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'plugin'))) . '         }')) . '" /></td>
			<td width="10" class="nowrap">' . ((isset($this->_data['styles_row_red.'][$_styles_row_red_i]['ACTION_LINK'])) ? $this->_data['styles_row_red.'][$_styles_row_red_i]['ACTION_LINK'] : '') . '</td>
			<td width="10" class="nowrap">';// IF not styles_row_red.S_DEFAULT
if (! $this->_data['styles_row_red.'][$_styles_row_red_i]['S_DEFAULT']) { 
echo '
			  <a href="' . ((isset($this->_data['styles_row_red.'][$_styles_row_red_i]['U_ENABLE'])) ? $this->_data['styles_row_red.'][$_styles_row_red_i]['U_ENABLE'] : '') . '"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'glyphs/' . ((isset($this->_data['styles_row_red.'][$_styles_row_red_i]['ENABLE'])) ? $this->_data['styles_row_red.'][$_styles_row_red_i]['ENABLE'] : '') . '.png" width="16" height="16" title="' . ((isset($this->_data['styles_row_red.'][$_styles_row_red_i]['L_ENABLE'])) ? $this->_data['styles_row_red.'][$_styles_row_red_i]['L_ENABLE'] : '') . '" alt="' . ((isset($this->_data['styles_row_red.'][$_styles_row_red_i]['L_ENABLE'])) ? $this->_data['styles_row_red.'][$_styles_row_red_i]['L_ENABLE'] : '') . '" /></a>  
			  ';// ENDIF
}
echo '</td>
			<td width="10" class="nowrap"><a href="' . ((isset($this->_data['styles_row_red.'][$_styles_row_red_i]['U_EDIT_STYLE'])) ? $this->_data['styles_row_red.'][$_styles_row_red_i]['U_EDIT_STYLE'] : '') . '" title="' . ((isset($this->_data['.'][0]['L_edit_style'])) ? $this->_data['.'][0]['L_edit_style'] : (($this->lang('edit_style')) ? $this->lang('edit_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'edit_style'))) . '         }')) . '"><img src="' . ((isset($this->_data['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_data['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/glyphs/edit.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_edit_style'])) ? $this->_data['.'][0]['L_edit_style'] : (($this->lang('edit_style')) ? $this->lang('edit_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'edit_style'))) . '         }')) . '" /></a></td>
			<td width="10" class="nowrap"><a href="' . ((isset($this->_data['styles_row_red.'][$_styles_row_red_i]['U_DOWNLOAD_STYLE'])) ? $this->_data['styles_row_red.'][$_styles_row_red_i]['U_DOWNLOAD_STYLE'] : '') . '" title="' . ((isset($this->_data['.'][0]['L_download_style'])) ? $this->_data['.'][0]['L_download_style'] : (($this->lang('download_style')) ? $this->lang('download_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'download_style'))) . '         }')) . '"><img src="' . ((isset($this->_data['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_data['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/admin/manage_backup.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_download_style'])) ? $this->_data['.'][0]['L_download_style'] : (($this->lang('download_style')) ? $this->lang('download_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'download_style'))) . '         }')) . '" /></a></td>
			<td width="10" class="nowrap">';// IF not styles_row_red.S_DEFAULT
if (! $this->_data['styles_row_red.'][$_styles_row_red_i]['S_DEFAULT']) { 
echo '
				<a href="javascript:style_delete_warning(' . ((isset($this->_data['styles_row_red.'][$_styles_row_red_i]['ID'])) ? $this->_data['styles_row_red.'][$_styles_row_red_i]['ID'] : '') . ')" title="' . ((isset($this->_data['.'][0]['L_delete_style'])) ? $this->_data['.'][0]['L_delete_style'] : (($this->lang('delete_style')) ? $this->lang('delete_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'delete_style'))) . '         }')) . '"><img src="' . ((isset($this->_data['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_data['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/global/delete.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_delete_style'])) ? $this->_data['.'][0]['L_delete_style'] : (($this->lang('delete_style')) ? $this->lang('delete_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'delete_style'))) . '         }')) . '" /></a>
				';// ENDIF
}
echo '</td>
			<td width="10" class="nowrap">
				<a href="javascript:style_reset_warning(' . ((isset($this->_data['styles_row_red.'][$_styles_row_red_i]['ID'])) ? $this->_data['styles_row_red.'][$_styles_row_red_i]['ID'] : '') . ')" title="' . ((isset($this->_data['.'][0]['L_reset_style'])) ? $this->_data['.'][0]['L_reset_style'] : (($this->lang('reset_style')) ? $this->lang('reset_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'reset_style'))) . '         }')) . '"><img src="' . ((isset($this->_data['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_data['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/global/update.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_reset_style'])) ? $this->_data['.'][0]['L_reset_style'] : (($this->lang('reset_style')) ? $this->lang('reset_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'reset_style'))) . '         }')) . '" /></a>
			</td>
			
			<td width="25" class="nowrap" align="center">';// IF not styles_row_red.S_DEACTIVATED
if (! $this->_data['styles_row_red.'][$_styles_row_red_i]['S_DEACTIVATED']) { 
echo '<input type="radio" name="standard_style" ' . ((isset($this->_data['styles_row_red.'][$_styles_row_red_i]['STANDARD'])) ? $this->_data['styles_row_red.'][$_styles_row_red_i]['STANDARD'] : '') . ' value="' . ((isset($this->_data['styles_row_red.'][$_styles_row_red_i]['ID'])) ? $this->_data['styles_row_red.'][$_styles_row_red_i]['ID'] : '') . '" />';// ENDIF
}
echo '</td>
			';echo '<!-- name -->';echo '<td class="nowrap">';// IF styles_row_red.S_DEFAULT
if ($this->_data['styles_row_red.'][$_styles_row_red_i]['S_DEFAULT']) { 
echo '<b>';// ENDIF
}
echo '<a href="' . ((isset($this->_data['styles_row_red.'][$_styles_row_red_i]['U_EDIT_STYLE'])) ? $this->_data['styles_row_red.'][$_styles_row_red_i]['U_EDIT_STYLE'] : '') . '">' . ((isset($this->_data['styles_row_red.'][$_styles_row_red_i]['NAME'])) ? $this->_data['styles_row_red.'][$_styles_row_red_i]['NAME'] : '') . '</a> ';// IF styles_row_red.S_DEFAULT
if ($this->_data['styles_row_red.'][$_styles_row_red_i]['S_DEFAULT']) { 
echo ' * </b>';// ENDIF
}
echo '</td>

			<td class="nowrap">' . ((isset($this->_data['styles_row_red.'][$_styles_row_red_i]['TEMPLATE'])) ? $this->_data['styles_row_red.'][$_styles_row_red_i]['TEMPLATE'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['styles_row_red.'][$_styles_row_red_i]['USERS'])) ? $this->_data['styles_row_red.'][$_styles_row_red_i]['USERS'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['styles_row_red.'][$_styles_row_red_i]['VERSION'])) ? $this->_data['styles_row_red.'][$_styles_row_red_i]['VERSION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['styles_row_red.'][$_styles_row_red_i]['AUTHOR'])) ? $this->_data['styles_row_red.'][$_styles_row_red_i]['AUTHOR'] : '') . '</td>
			<td class="nowrap"><a href="javascript:style_preview(' . ((isset($this->_data['styles_row_red.'][$_styles_row_red_i]['ID'])) ? $this->_data['styles_row_red.'][$_styles_row_red_i]['ID'] : '') . ');">' . ((isset($this->_data['.'][0]['L_preview'])) ? $this->_data['.'][0]['L_preview'] : (($this->lang('preview')) ? $this->lang('preview') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'preview'))) . '         }')) . '</a></td>
			</tr>
		   ';}}
// END styles_row_red
// BEGIN styles_row_yellow
$_styles_row_yellow_count = (isset($this->_data['styles_row_yellow.'])) ?  sizeof($this->_data['styles_row_yellow.']) : 0;
if ($_styles_row_yellow_count) {
for ($_styles_row_yellow_i = 0; $_styles_row_yellow_i < $_styles_row_yellow_count; $_styles_row_yellow_i++)
{
echo '
		  <tr>
		   <td width="16" align="center" class="nowrap"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'admin/plugin_yellow.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_plugin'])) ? $this->_data['.'][0]['L_plugin'] : (($this->lang('plugin')) ? $this->lang('plugin') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'plugin'))) . '         }')) . '" /></td>
			<td width="10" class="nowrap">' . ((isset($this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['ACTION_LINK'])) ? $this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['ACTION_LINK'] : '') . '</td>
			<td width="10" class="nowrap">';// IF not styles_row_yellow.S_DEFAULT
if (! $this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['S_DEFAULT']) { 
echo '
			  <a href="' . ((isset($this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['U_ENABLE'])) ? $this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['U_ENABLE'] : '') . '"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'glyphs/' . ((isset($this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['ENABLE'])) ? $this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['ENABLE'] : '') . '.png" width="16" height="16" title="' . ((isset($this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['L_ENABLE'])) ? $this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['L_ENABLE'] : '') . '" alt="' . ((isset($this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['L_ENABLE'])) ? $this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['L_ENABLE'] : '') . '" /></a>  
			  ';// ENDIF
}
echo '</td>
			<td width="10" class="nowrap"><a href="' . ((isset($this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['U_EDIT_STYLE'])) ? $this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['U_EDIT_STYLE'] : '') . '" title="' . ((isset($this->_data['.'][0]['L_edit_style'])) ? $this->_data['.'][0]['L_edit_style'] : (($this->lang('edit_style')) ? $this->lang('edit_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'edit_style'))) . '         }')) . '"><img src="' . ((isset($this->_data['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_data['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/glyphs/edit.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_edit_style'])) ? $this->_data['.'][0]['L_edit_style'] : (($this->lang('edit_style')) ? $this->lang('edit_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'edit_style'))) . '         }')) . '" /></a></td>
			<td width="10" class="nowrap"><a href="' . ((isset($this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['U_DOWNLOAD_STYLE'])) ? $this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['U_DOWNLOAD_STYLE'] : '') . '" title="' . ((isset($this->_data['.'][0]['L_download_style'])) ? $this->_data['.'][0]['L_download_style'] : (($this->lang('download_style')) ? $this->lang('download_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'download_style'))) . '         }')) . '"><img src="' . ((isset($this->_data['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_data['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/admin/manage_backup.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_download_style'])) ? $this->_data['.'][0]['L_download_style'] : (($this->lang('download_style')) ? $this->lang('download_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'download_style'))) . '         }')) . '" /></a></td>
			<td width="10" class="nowrap">';// IF not styles_row_yellow.S_DEFAULT
if (! $this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['S_DEFAULT']) { 
echo '
				<a href="javascript:style_delete_warning(' . ((isset($this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['ID'])) ? $this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['ID'] : '') . ')" title="' . ((isset($this->_data['.'][0]['L_delete_style'])) ? $this->_data['.'][0]['L_delete_style'] : (($this->lang('delete_style')) ? $this->lang('delete_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'delete_style'))) . '         }')) . '"><img src="' . ((isset($this->_data['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_data['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/global/delete.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_delete_style'])) ? $this->_data['.'][0]['L_delete_style'] : (($this->lang('delete_style')) ? $this->lang('delete_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'delete_style'))) . '         }')) . '" /></a>
				';// ENDIF
}
echo '</td>
			<td width="10" class="nowrap">
				<a href="javascript:style_reset_warning(' . ((isset($this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['ID'])) ? $this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['ID'] : '') . ')" title="' . ((isset($this->_data['.'][0]['L_reset_style'])) ? $this->_data['.'][0]['L_reset_style'] : (($this->lang('reset_style')) ? $this->lang('reset_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'reset_style'))) . '         }')) . '"><img src="' . ((isset($this->_data['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_data['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/global/update.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_reset_style'])) ? $this->_data['.'][0]['L_reset_style'] : (($this->lang('reset_style')) ? $this->lang('reset_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'reset_style'))) . '         }')) . '" /></a>
			</td>
			
			<td width="25" class="nowrap" align="center">';// IF not styles_row_yellow.S_DEACTIVATED
if (! $this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['S_DEACTIVATED']) { 
echo '<input type="radio" name="standard_style" ' . ((isset($this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['STANDARD'])) ? $this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['STANDARD'] : '') . ' value="' . ((isset($this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['ID'])) ? $this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['ID'] : '') . '" />';// ENDIF
}
echo '</td>
			';echo '<!-- name -->';echo '<td class="nowrap">';// IF styles_row_yellow.S_DEFAULT
if ($this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['S_DEFAULT']) { 
echo '<b>';// ENDIF
}
echo '<a href="' . ((isset($this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['U_EDIT_STYLE'])) ? $this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['U_EDIT_STYLE'] : '') . '">' . ((isset($this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['NAME'])) ? $this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['NAME'] : '') . '</a> ';// IF styles_row_yellow.S_DEFAULT
if ($this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['S_DEFAULT']) { 
echo ' * </b>';// ENDIF
}
echo '</td>

			<td class="nowrap">' . ((isset($this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['TEMPLATE'])) ? $this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['TEMPLATE'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['USERS'])) ? $this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['USERS'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['VERSION'])) ? $this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['VERSION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['AUTHOR'])) ? $this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['AUTHOR'] : '') . '</td>
			<td class="nowrap"><a href="javascript:style_preview(' . ((isset($this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['ID'])) ? $this->_data['styles_row_yellow.'][$_styles_row_yellow_i]['ID'] : '') . ');">' . ((isset($this->_data['.'][0]['L_preview'])) ? $this->_data['.'][0]['L_preview'] : (($this->lang('preview')) ? $this->lang('preview') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'preview'))) . '         }')) . '</a></td>
			</tr>
		   ';}}
// END styles_row_yellow
// BEGIN styles_row_green
$_styles_row_green_count = (isset($this->_data['styles_row_green.'])) ?  sizeof($this->_data['styles_row_green.']) : 0;
if ($_styles_row_green_count) {
for ($_styles_row_green_i = 0; $_styles_row_green_i < $_styles_row_green_count; $_styles_row_green_i++)
{
echo '
		  <tr>
		   <td width="16" align="center" class="nowrap"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'admin/plugin.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_plugin'])) ? $this->_data['.'][0]['L_plugin'] : (($this->lang('plugin')) ? $this->lang('plugin') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'plugin'))) . '         }')) . '" /></td>
			<td width="10" class="nowrap">' . ((isset($this->_data['styles_row_green.'][$_styles_row_green_i]['ACTION_LINK'])) ? $this->_data['styles_row_green.'][$_styles_row_green_i]['ACTION_LINK'] : '') . '</td>
			<td width="10" class="nowrap">';// IF not styles_row_green.S_DEFAULT
if (! $this->_data['styles_row_green.'][$_styles_row_green_i]['S_DEFAULT']) { 
echo '
			  <a href="' . ((isset($this->_data['styles_row_green.'][$_styles_row_green_i]['U_ENABLE'])) ? $this->_data['styles_row_green.'][$_styles_row_green_i]['U_ENABLE'] : '') . '"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'glyphs/' . ((isset($this->_data['styles_row_green.'][$_styles_row_green_i]['ENABLE'])) ? $this->_data['styles_row_green.'][$_styles_row_green_i]['ENABLE'] : '') . '.png" width="16" height="16" title="' . ((isset($this->_data['styles_row_green.'][$_styles_row_green_i]['L_ENABLE'])) ? $this->_data['styles_row_green.'][$_styles_row_green_i]['L_ENABLE'] : '') . '" alt="' . ((isset($this->_data['styles_row_green.'][$_styles_row_green_i]['L_ENABLE'])) ? $this->_data['styles_row_green.'][$_styles_row_green_i]['L_ENABLE'] : '') . '" /></a>  
			  ';// ENDIF
}
echo '</td>
			<td width="10" class="nowrap"><a href="' . ((isset($this->_data['styles_row_green.'][$_styles_row_green_i]['U_EDIT_STYLE'])) ? $this->_data['styles_row_green.'][$_styles_row_green_i]['U_EDIT_STYLE'] : '') . '" title="' . ((isset($this->_data['.'][0]['L_edit_style'])) ? $this->_data['.'][0]['L_edit_style'] : (($this->lang('edit_style')) ? $this->lang('edit_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'edit_style'))) . '         }')) . '"><img src="' . ((isset($this->_data['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_data['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/glyphs/edit.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_edit_style'])) ? $this->_data['.'][0]['L_edit_style'] : (($this->lang('edit_style')) ? $this->lang('edit_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'edit_style'))) . '         }')) . '" /></a></td>
			<td width="10" class="nowrap"><a href="' . ((isset($this->_data['styles_row_green.'][$_styles_row_green_i]['U_DOWNLOAD_STYLE'])) ? $this->_data['styles_row_green.'][$_styles_row_green_i]['U_DOWNLOAD_STYLE'] : '') . '" title="' . ((isset($this->_data['.'][0]['L_download_style'])) ? $this->_data['.'][0]['L_download_style'] : (($this->lang('download_style')) ? $this->lang('download_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'download_style'))) . '         }')) . '"><img src="' . ((isset($this->_data['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_data['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/admin/manage_backup.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_download_style'])) ? $this->_data['.'][0]['L_download_style'] : (($this->lang('download_style')) ? $this->lang('download_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'download_style'))) . '         }')) . '" /></a></td>
			<td width="10" class="nowrap">';// IF not styles_row_green.S_DEFAULT
if (! $this->_data['styles_row_green.'][$_styles_row_green_i]['S_DEFAULT']) { 
echo '
				<a href="javascript:style_delete_warning(' . ((isset($this->_data['styles_row_green.'][$_styles_row_green_i]['ID'])) ? $this->_data['styles_row_green.'][$_styles_row_green_i]['ID'] : '') . ')" title="' . ((isset($this->_data['.'][0]['L_delete_style'])) ? $this->_data['.'][0]['L_delete_style'] : (($this->lang('delete_style')) ? $this->lang('delete_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'delete_style'))) . '         }')) . '"><img src="' . ((isset($this->_data['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_data['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/global/delete.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_delete_style'])) ? $this->_data['.'][0]['L_delete_style'] : (($this->lang('delete_style')) ? $this->lang('delete_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'delete_style'))) . '         }')) . '" /></a>
				';// ENDIF
}
echo '</td>
			<td width="10" class="nowrap">
				<a href="javascript:style_reset_warning(' . ((isset($this->_data['styles_row_green.'][$_styles_row_green_i]['ID'])) ? $this->_data['styles_row_green.'][$_styles_row_green_i]['ID'] : '') . ')" title="' . ((isset($this->_data['.'][0]['L_reset_style'])) ? $this->_data['.'][0]['L_reset_style'] : (($this->lang('reset_style')) ? $this->lang('reset_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'reset_style'))) . '         }')) . '"><img src="' . ((isset($this->_data['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_data['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/global/update.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_reset_style'])) ? $this->_data['.'][0]['L_reset_style'] : (($this->lang('reset_style')) ? $this->lang('reset_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'reset_style'))) . '         }')) . '" /></a>
			</td>
			
			<td width="25" class="nowrap" align="center">';// IF not styles_row_green.S_DEACTIVATED
if (! $this->_data['styles_row_green.'][$_styles_row_green_i]['S_DEACTIVATED']) { 
echo '<input type="radio" name="standard_style" ' . ((isset($this->_data['styles_row_green.'][$_styles_row_green_i]['STANDARD'])) ? $this->_data['styles_row_green.'][$_styles_row_green_i]['STANDARD'] : '') . ' value="' . ((isset($this->_data['styles_row_green.'][$_styles_row_green_i]['ID'])) ? $this->_data['styles_row_green.'][$_styles_row_green_i]['ID'] : '') . '" />';// ENDIF
}
echo '</td>
			';echo '<!-- name -->';echo '<td class="nowrap">';// IF styles_row_green.S_DEFAULT
if ($this->_data['styles_row_green.'][$_styles_row_green_i]['S_DEFAULT']) { 
echo '<b>';// ENDIF
}
echo '<a href="' . ((isset($this->_data['styles_row_green.'][$_styles_row_green_i]['U_EDIT_STYLE'])) ? $this->_data['styles_row_green.'][$_styles_row_green_i]['U_EDIT_STYLE'] : '') . '">' . ((isset($this->_data['styles_row_green.'][$_styles_row_green_i]['NAME'])) ? $this->_data['styles_row_green.'][$_styles_row_green_i]['NAME'] : '') . '</a> ';// IF styles_row_green.S_DEFAULT
if ($this->_data['styles_row_green.'][$_styles_row_green_i]['S_DEFAULT']) { 
echo ' * </b>';// ENDIF
}
echo '</td>

			<td class="nowrap">' . ((isset($this->_data['styles_row_green.'][$_styles_row_green_i]['TEMPLATE'])) ? $this->_data['styles_row_green.'][$_styles_row_green_i]['TEMPLATE'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['styles_row_green.'][$_styles_row_green_i]['USERS'])) ? $this->_data['styles_row_green.'][$_styles_row_green_i]['USERS'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['styles_row_green.'][$_styles_row_green_i]['VERSION'])) ? $this->_data['styles_row_green.'][$_styles_row_green_i]['VERSION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['styles_row_green.'][$_styles_row_green_i]['AUTHOR'])) ? $this->_data['styles_row_green.'][$_styles_row_green_i]['AUTHOR'] : '') . '</td>
			<td class="nowrap"><a href="javascript:style_preview(' . ((isset($this->_data['styles_row_green.'][$_styles_row_green_i]['ID'])) ? $this->_data['styles_row_green.'][$_styles_row_green_i]['ID'] : '') . ');">' . ((isset($this->_data['.'][0]['L_preview'])) ? $this->_data['.'][0]['L_preview'] : (($this->lang('preview')) ? $this->lang('preview') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'preview'))) . '         }')) . '</a></td>
			</tr>
		   ';}}
// END styles_row_green
// BEGIN styles_row_grey
$_styles_row_grey_count = (isset($this->_data['styles_row_grey.'])) ?  sizeof($this->_data['styles_row_grey.']) : 0;
if ($_styles_row_grey_count) {
for ($_styles_row_grey_i = 0; $_styles_row_grey_i < $_styles_row_grey_count; $_styles_row_grey_i++)
{
echo '
		  <tr>
		   <td width="16" align="center" class="nowrap"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'admin/plugin_off.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_plugin'])) ? $this->_data['.'][0]['L_plugin'] : (($this->lang('plugin')) ? $this->lang('plugin') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'plugin'))) . '         }')) . '" /></td>
			<td width="10" class="nowrap">' . ((isset($this->_data['styles_row_grey.'][$_styles_row_grey_i]['ACTION_LINK'])) ? $this->_data['styles_row_grey.'][$_styles_row_grey_i]['ACTION_LINK'] : '') . '</td>
			<td width="10" class="nowrap"></td>
			<td width="10" class="nowrap"></td>
			<td width="10" class="nowrap"></td>
			<td width="10" class="nowrap"></td>
			<td width="10" class="nowrap"></td>			
			<td width="25" class="nowrap" align="center"></td>
			<td class="nowrap">' . ((isset($this->_data['styles_row_grey.'][$_styles_row_grey_i]['NAME'])) ? $this->_data['styles_row_grey.'][$_styles_row_grey_i]['NAME'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['styles_row_grey.'][$_styles_row_grey_i]['TEMPLATE'])) ? $this->_data['styles_row_grey.'][$_styles_row_grey_i]['TEMPLATE'] : '') . '</td>
			<td class="nowrap">0</td>
			<td class="nowrap">' . ((isset($this->_data['styles_row_grey.'][$_styles_row_grey_i]['VERSION'])) ? $this->_data['styles_row_grey.'][$_styles_row_grey_i]['VERSION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['styles_row_grey.'][$_styles_row_grey_i]['AUTHOR'])) ? $this->_data['styles_row_grey.'][$_styles_row_grey_i]['AUTHOR'] : '') . '</td>
			<td class="nowrap"></td>
			</tr>
		   ';}}
// END styles_row_grey
// BEGIN styles_row_grey_repo
$_styles_row_grey_repo_count = (isset($this->_data['styles_row_grey_repo.'])) ?  sizeof($this->_data['styles_row_grey_repo.']) : 0;
if ($_styles_row_grey_repo_count) {
for ($_styles_row_grey_repo_i = 0; $_styles_row_grey_repo_i < $_styles_row_grey_repo_count; $_styles_row_grey_repo_i++)
{
echo '
		  <tr>
		   <td width="16" align="center" class="nowrap"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'admin/plugin_off.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_plugin'])) ? $this->_data['.'][0]['L_plugin'] : (($this->lang('plugin')) ? $this->lang('plugin') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'plugin'))) . '         }')) . '" /></td>
			<td width="10" class="nowrap">' . ((isset($this->_data['styles_row_grey_repo.'][$_styles_row_grey_repo_i]['ACTION_LINK'])) ? $this->_data['styles_row_grey_repo.'][$_styles_row_grey_repo_i]['ACTION_LINK'] : '') . '</td>
			<td width="10" class="nowrap"></td>
			<td width="10" class="nowrap"></td>
			<td width="10" class="nowrap"></td>
			<td width="10" class="nowrap"></td>
			<td width="10" class="nowrap"></td>		
			<td width="25" class="nowrap">' . ((isset($this->_data['styles_row_grey_repo.'][$_styles_row_grey_repo_i]['NAME'])) ? $this->_data['styles_row_grey_repo.'][$_styles_row_grey_repo_i]['NAME'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['styles_row_grey_repo.'][$_styles_row_grey_repo_i]['TEMPLATE'])) ? $this->_data['styles_row_grey_repo.'][$_styles_row_grey_repo_i]['TEMPLATE'] : '') . '</td>
			<td class="nowrap">0</td>
			<td class="nowrap">' . ((isset($this->_data['styles_row_grey_repo.'][$_styles_row_grey_repo_i]['VERSION'])) ? $this->_data['styles_row_grey_repo.'][$_styles_row_grey_repo_i]['VERSION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['styles_row_grey_repo.'][$_styles_row_grey_repo_i]['AUTHOR'])) ? $this->_data['styles_row_grey_repo.'][$_styles_row_grey_repo_i]['AUTHOR'] : '') . '</td>
			<td class="nowrap"></td>
			</tr>
		   ';}}
// END styles_row_grey_repo
echo '
		  <tr>
			<th colspan="14" align="center"><input name="standard" type="button" id="standard" value="' . ((isset($this->_data['.'][0]['L_make_default_style'])) ? $this->_data['.'][0]['L_make_default_style'] : (($this->lang('make_default_style')) ? $this->lang('make_default_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'make_default_style'))) . '         }')) . '" class="mainoption bi_ok" onclick="style_default_info();" /> <input name="cache_reset" type="button" value="' . ((isset($this->_data['.'][0]['L_delete_template_cache'])) ? $this->_data['.'][0]['L_delete_template_cache'] : (($this->lang('delete_template_cache')) ? $this->lang('delete_template_cache') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'delete_template_cache'))) . '         }')) . '" class="liteoption bi_delete" onclick="window.location=\'manage_extensions.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&amp;cat=2&amp;mode=delete_cache&amp;link_hash=' . ((isset($this->_data['.'][0]['CSRF_MODE_TOKEN'])) ? $this->_data['.'][0]['CSRF_MODE_TOKEN'] : '') . '\'" /></th>
		  </tr>
		</table>
		' . ((isset($this->_data['.'][0]['CSRF_TOKEN'])) ? $this->_data['.'][0]['CSRF_TOKEN'] : '') . '
		</form>
	</div>

	<div id="fragment-3">
		<table width="100%" border="0" cellspacing="1" cellpadding="4" class="colorswitch">
		  <tr>
			<th align="left" width="16">&nbsp;</th>
			<th align="left" class="nowrap" width="16">' . ((isset($this->_data['.'][0]['L_action'])) ? $this->_data['.'][0]['L_action'] : (($this->lang('action')) ? $this->lang('action') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'action'))) . '         }')) . '</th>
			<th align="left" class="nowrap">' . ((isset($this->_data['.'][0]['L_name'])) ? $this->_data['.'][0]['L_name'] : (($this->lang('name')) ? $this->lang('name') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'name'))) . '         }')) . '</th>
			<th align="left" class="nowrap">' . ((isset($this->_data['.'][0]['L_version'])) ? $this->_data['.'][0]['L_version'] : (($this->lang('version')) ? $this->lang('version') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'version'))) . '         }')) . '</th>
			<th align="left" class="nowrap">' . ((isset($this->_data['.'][0]['L_contact'])) ? $this->_data['.'][0]['L_contact'] : (($this->lang('contact')) ? $this->lang('contact') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'contact'))) . '         }')) . '</th>
			<th align="left" class="nowrap">' . ((isset($this->_data['.'][0]['L_description'])) ? $this->_data['.'][0]['L_description'] : (($this->lang('description')) ? $this->lang('description') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'description'))) . '         }')) . '</th>
			<th align="left" class="nowrap">' . ((isset($this->_data['.'][0]['L_pi_rating'])) ? $this->_data['.'][0]['L_pi_rating'] : (($this->lang('pi_rating')) ? $this->lang('pi_rating') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pi_rating'))) . '         }')) . '</th>
		  </tr>
		  ';// BEGIN pm_row_red
$_pm_row_red_count = (isset($this->_data['pm_row_red.'])) ?  sizeof($this->_data['pm_row_red.']) : 0;
if ($_pm_row_red_count) {
for ($_pm_row_red_i = 0; $_pm_row_red_i < $_pm_row_red_count; $_pm_row_red_i++)
{
echo '
		  <tr>
			<td width="16" align="center" class="nowrap"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'admin/plugin_red.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_plugin'])) ? $this->_data['.'][0]['L_plugin'] : (($this->lang('plugin')) ? $this->lang('plugin') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'plugin'))) . '         }')) . '" /></td>
			<td class="nowrap">' . ((isset($this->_data['pm_row_red.'][$_pm_row_red_i]['ACTION_LINK'])) ? $this->_data['pm_row_red.'][$_pm_row_red_i]['ACTION_LINK'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['pm_row_red.'][$_pm_row_red_i]['NAME'])) ? $this->_data['pm_row_red.'][$_pm_row_red_i]['NAME'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['pm_row_red.'][$_pm_row_red_i]['VERSION'])) ? $this->_data['pm_row_red.'][$_pm_row_red_i]['VERSION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['pm_row_red.'][$_pm_row_red_i]['CONTACT'])) ? $this->_data['pm_row_red.'][$_pm_row_red_i]['CONTACT'] : '') . '</td>
			<td>' . ((isset($this->_data['pm_row_red.'][$_pm_row_red_i]['DESCRIPTION'])) ? $this->_data['pm_row_red.'][$_pm_row_red_i]['DESCRIPTION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['pm_row_red.'][$_pm_row_red_i]['RATING'])) ? $this->_data['pm_row_red.'][$_pm_row_red_i]['RATING'] : '') . '</td>
		  </tr>
		  ';}}
// END pm_row_red
// BEGIN pm_row_yellow
$_pm_row_yellow_count = (isset($this->_data['pm_row_yellow.'])) ?  sizeof($this->_data['pm_row_yellow.']) : 0;
if ($_pm_row_yellow_count) {
for ($_pm_row_yellow_i = 0; $_pm_row_yellow_i < $_pm_row_yellow_count; $_pm_row_yellow_i++)
{
echo '
		  <tr>
			<td width="16" align="center" class="nowrap"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'admin/plugin_yellow.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_plugin'])) ? $this->_data['.'][0]['L_plugin'] : (($this->lang('plugin')) ? $this->lang('plugin') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'plugin'))) . '         }')) . '" /></td>
			<td class="nowrap">' . ((isset($this->_data['pm_row_yellow.'][$_pm_row_yellow_i]['ACTION_LINK'])) ? $this->_data['pm_row_yellow.'][$_pm_row_yellow_i]['ACTION_LINK'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['pm_row_yellow.'][$_pm_row_yellow_i]['NAME'])) ? $this->_data['pm_row_yellow.'][$_pm_row_yellow_i]['NAME'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['pm_row_yellow.'][$_pm_row_yellow_i]['VERSION'])) ? $this->_data['pm_row_yellow.'][$_pm_row_yellow_i]['VERSION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['pm_row_yellow.'][$_pm_row_yellow_i]['CONTACT'])) ? $this->_data['pm_row_yellow.'][$_pm_row_yellow_i]['CONTACT'] : '') . '</td>
			<td>' . ((isset($this->_data['pm_row_yellow.'][$_pm_row_yellow_i]['DESCRIPTION'])) ? $this->_data['pm_row_yellow.'][$_pm_row_yellow_i]['DESCRIPTION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['pm_row_yellow.'][$_pm_row_yellow_i]['RATING'])) ? $this->_data['pm_row_yellow.'][$_pm_row_yellow_i]['RATING'] : '') . '</td>
		  </tr>
		  ';}}
// END pm_row_yellow
// BEGIN pm_row_green
$_pm_row_green_count = (isset($this->_data['pm_row_green.'])) ?  sizeof($this->_data['pm_row_green.']) : 0;
if ($_pm_row_green_count) {
for ($_pm_row_green_i = 0; $_pm_row_green_i < $_pm_row_green_count; $_pm_row_green_i++)
{
echo '
		  <tr>
			<td width="16" align="center" class="nowrap"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'admin/plugin.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_plugin'])) ? $this->_data['.'][0]['L_plugin'] : (($this->lang('plugin')) ? $this->lang('plugin') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'plugin'))) . '         }')) . '" /></td>
			<td class="nowrap">' . ((isset($this->_data['pm_row_green.'][$_pm_row_green_i]['ACTION_LINK'])) ? $this->_data['pm_row_green.'][$_pm_row_green_i]['ACTION_LINK'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['pm_row_green.'][$_pm_row_green_i]['NAME'])) ? $this->_data['pm_row_green.'][$_pm_row_green_i]['NAME'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['pm_row_green.'][$_pm_row_green_i]['VERSION'])) ? $this->_data['pm_row_green.'][$_pm_row_green_i]['VERSION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['pm_row_green.'][$_pm_row_green_i]['CONTACT'])) ? $this->_data['pm_row_green.'][$_pm_row_green_i]['CONTACT'] : '') . '</td>
			<td>' . ((isset($this->_data['pm_row_green.'][$_pm_row_green_i]['DESCRIPTION'])) ? $this->_data['pm_row_green.'][$_pm_row_green_i]['DESCRIPTION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['pm_row_green.'][$_pm_row_green_i]['RATING'])) ? $this->_data['pm_row_green.'][$_pm_row_green_i]['RATING'] : '') . '</td>
		  </tr>
		  ';}}
// END pm_row_green
// BEGIN pm_row_grey
$_pm_row_grey_count = (isset($this->_data['pm_row_grey.'])) ?  sizeof($this->_data['pm_row_grey.']) : 0;
if ($_pm_row_grey_count) {
for ($_pm_row_grey_i = 0; $_pm_row_grey_i < $_pm_row_grey_count; $_pm_row_grey_i++)
{
echo '
		  <tr>
			<td width="16" align="center" class="nowrap"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'admin/plugin_off.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_plugin'])) ? $this->_data['.'][0]['L_plugin'] : (($this->lang('plugin')) ? $this->lang('plugin') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'plugin'))) . '         }')) . '" /></td>
			<td class="nowrap">' . ((isset($this->_data['pm_row_grey.'][$_pm_row_grey_i]['ACTION_LINK'])) ? $this->_data['pm_row_grey.'][$_pm_row_grey_i]['ACTION_LINK'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['pm_row_grey.'][$_pm_row_grey_i]['NAME'])) ? $this->_data['pm_row_grey.'][$_pm_row_grey_i]['NAME'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['pm_row_grey.'][$_pm_row_grey_i]['VERSION'])) ? $this->_data['pm_row_grey.'][$_pm_row_grey_i]['VERSION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['pm_row_grey.'][$_pm_row_grey_i]['CONTACT'])) ? $this->_data['pm_row_grey.'][$_pm_row_grey_i]['CONTACT'] : '') . '</td>
			<td>' . ((isset($this->_data['pm_row_grey.'][$_pm_row_grey_i]['DESCRIPTION'])) ? $this->_data['pm_row_grey.'][$_pm_row_grey_i]['DESCRIPTION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['pm_row_grey.'][$_pm_row_grey_i]['RATING'])) ? $this->_data['pm_row_grey.'][$_pm_row_grey_i]['RATING'] : '') . '</td>
		  </tr>
		  ';}}
// END pm_row_grey
echo '
		</table>
	</div>

	<div id="fragment-7">
		<table width="100%" border="0" cellspacing="1" cellpadding="4" class="colorswitch">
		  <tr>
			<th align="left" width="16">&nbsp;</th>
			<th align="left" class="nowrap" width="16">' . ((isset($this->_data['.'][0]['L_action'])) ? $this->_data['.'][0]['L_action'] : (($this->lang('action')) ? $this->lang('action') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'action'))) . '         }')) . '</th>
			<th align="left" class="nowrap">' . ((isset($this->_data['.'][0]['L_name'])) ? $this->_data['.'][0]['L_name'] : (($this->lang('name')) ? $this->lang('name') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'name'))) . '         }')) . '</th>
			<th align="left" class="nowrap">' . ((isset($this->_data['.'][0]['L_version'])) ? $this->_data['.'][0]['L_version'] : (($this->lang('version')) ? $this->lang('version') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'version'))) . '         }')) . '</th>
			<th align="left" class="nowrap">' . ((isset($this->_data['.'][0]['L_contact'])) ? $this->_data['.'][0]['L_contact'] : (($this->lang('contact')) ? $this->lang('contact') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'contact'))) . '         }')) . '</th>
			<th align="left" class="nowrap">' . ((isset($this->_data['.'][0]['L_description'])) ? $this->_data['.'][0]['L_description'] : (($this->lang('description')) ? $this->lang('description') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'description'))) . '         }')) . '</th>
			<th align="left" class="nowrap">' . ((isset($this->_data['.'][0]['L_pi_rating'])) ? $this->_data['.'][0]['L_pi_rating'] : (($this->lang('pi_rating')) ? $this->lang('pi_rating') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pi_rating'))) . '         }')) . '</th>
		  </tr>
		  ';// BEGIN games_row_red
$_games_row_red_count = (isset($this->_data['games_row_red.'])) ?  sizeof($this->_data['games_row_red.']) : 0;
if ($_games_row_red_count) {
for ($_games_row_red_i = 0; $_games_row_red_i < $_games_row_red_count; $_games_row_red_i++)
{
echo '
		  <tr>
			<td width="16" align="center" class="nowrap"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'admin/plugin_red.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_plugin'])) ? $this->_data['.'][0]['L_plugin'] : (($this->lang('plugin')) ? $this->lang('plugin') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'plugin'))) . '         }')) . '" /></td>
			<td class="nowrap">' . ((isset($this->_data['games_row_red.'][$_games_row_red_i]['ACTION_LINK'])) ? $this->_data['games_row_red.'][$_games_row_red_i]['ACTION_LINK'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['games_row_red.'][$_games_row_red_i]['NAME'])) ? $this->_data['games_row_red.'][$_games_row_red_i]['NAME'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['games_row_red.'][$_games_row_red_i]['VERSION'])) ? $this->_data['games_row_red.'][$_games_row_red_i]['VERSION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['games_row_red.'][$_games_row_red_i]['CONTACT'])) ? $this->_data['games_row_red.'][$_games_row_red_i]['CONTACT'] : '') . '</td>
			<td>' . ((isset($this->_data['games_row_red.'][$_games_row_red_i]['DESCRIPTION'])) ? $this->_data['games_row_red.'][$_games_row_red_i]['DESCRIPTION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['games_row_red.'][$_games_row_red_i]['RATING'])) ? $this->_data['games_row_red.'][$_games_row_red_i]['RATING'] : '') . '</td>
		  </tr>
		  ';}}
// END games_row_red
// BEGIN games_row_yellow
$_games_row_yellow_count = (isset($this->_data['games_row_yellow.'])) ?  sizeof($this->_data['games_row_yellow.']) : 0;
if ($_games_row_yellow_count) {
for ($_games_row_yellow_i = 0; $_games_row_yellow_i < $_games_row_yellow_count; $_games_row_yellow_i++)
{
echo '
		  <tr>
			<td width="16" align="center" class="nowrap"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'admin/plugin_yellow.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_plugin'])) ? $this->_data['.'][0]['L_plugin'] : (($this->lang('plugin')) ? $this->lang('plugin') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'plugin'))) . '         }')) . '" /></td>
			<td class="nowrap">' . ((isset($this->_data['games_row_yellow.'][$_games_row_yellow_i]['ACTION_LINK'])) ? $this->_data['games_row_yellow.'][$_games_row_yellow_i]['ACTION_LINK'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['games_row_yellow.'][$_games_row_yellow_i]['NAME'])) ? $this->_data['games_row_yellow.'][$_games_row_yellow_i]['NAME'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['games_row_yellow.'][$_games_row_yellow_i]['VERSION'])) ? $this->_data['games_row_yellow.'][$_games_row_yellow_i]['VERSION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['games_row_yellow.'][$_games_row_yellow_i]['CONTACT'])) ? $this->_data['games_row_yellow.'][$_games_row_yellow_i]['CONTACT'] : '') . '</td>
			<td>' . ((isset($this->_data['games_row_yellow.'][$_games_row_yellow_i]['DESCRIPTION'])) ? $this->_data['games_row_yellow.'][$_games_row_yellow_i]['DESCRIPTION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['games_row_yellow.'][$_games_row_yellow_i]['RATING'])) ? $this->_data['games_row_yellow.'][$_games_row_yellow_i]['RATING'] : '') . '</td>
		  </tr>
		  ';}}
// END games_row_yellow
// BEGIN games_row_green
$_games_row_green_count = (isset($this->_data['games_row_green.'])) ?  sizeof($this->_data['games_row_green.']) : 0;
if ($_games_row_green_count) {
for ($_games_row_green_i = 0; $_games_row_green_i < $_games_row_green_count; $_games_row_green_i++)
{
echo '
		  <tr>
			<td width="16" align="center" class="nowrap"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'admin/plugin.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_plugin'])) ? $this->_data['.'][0]['L_plugin'] : (($this->lang('plugin')) ? $this->lang('plugin') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'plugin'))) . '         }')) . '" /></td>
			<td class="nowrap">' . ((isset($this->_data['games_row_green.'][$_games_row_green_i]['ACTION_LINK'])) ? $this->_data['games_row_green.'][$_games_row_green_i]['ACTION_LINK'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['games_row_green.'][$_games_row_green_i]['NAME'])) ? $this->_data['games_row_green.'][$_games_row_green_i]['NAME'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['games_row_green.'][$_games_row_green_i]['VERSION'])) ? $this->_data['games_row_green.'][$_games_row_green_i]['VERSION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['games_row_green.'][$_games_row_green_i]['CONTACT'])) ? $this->_data['games_row_green.'][$_games_row_green_i]['CONTACT'] : '') . '</td>
			<td>' . ((isset($this->_data['games_row_green.'][$_games_row_green_i]['DESCRIPTION'])) ? $this->_data['games_row_green.'][$_games_row_green_i]['DESCRIPTION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['games_row_green.'][$_games_row_green_i]['RATING'])) ? $this->_data['games_row_green.'][$_games_row_green_i]['RATING'] : '') . '</td>
		  </tr>
		  ';}}
// END games_row_green
// BEGIN games_row_grey
$_games_row_grey_count = (isset($this->_data['games_row_grey.'])) ?  sizeof($this->_data['games_row_grey.']) : 0;
if ($_games_row_grey_count) {
for ($_games_row_grey_i = 0; $_games_row_grey_i < $_games_row_grey_count; $_games_row_grey_i++)
{
echo '
		  <tr>
			<td width="16" align="center" class="nowrap"><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'admin/plugin_off.png" width="16" height="16" alt="' . ((isset($this->_data['.'][0]['L_plugin'])) ? $this->_data['.'][0]['L_plugin'] : (($this->lang('plugin')) ? $this->lang('plugin') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'plugin'))) . '         }')) . '" /></td>
			<td class="nowrap">' . ((isset($this->_data['games_row_grey.'][$_games_row_grey_i]['ACTION_LINK'])) ? $this->_data['games_row_grey.'][$_games_row_grey_i]['ACTION_LINK'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['games_row_grey.'][$_games_row_grey_i]['NAME'])) ? $this->_data['games_row_grey.'][$_games_row_grey_i]['NAME'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['games_row_grey.'][$_games_row_grey_i]['VERSION'])) ? $this->_data['games_row_grey.'][$_games_row_grey_i]['VERSION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['games_row_grey.'][$_games_row_grey_i]['CONTACT'])) ? $this->_data['games_row_grey.'][$_games_row_grey_i]['CONTACT'] : '') . '</td>
			<td>' . ((isset($this->_data['games_row_grey.'][$_games_row_grey_i]['DESCRIPTION'])) ? $this->_data['games_row_grey.'][$_games_row_grey_i]['DESCRIPTION'] : '') . '</td>
			<td class="nowrap">' . ((isset($this->_data['games_row_grey.'][$_games_row_grey_i]['RATING'])) ? $this->_data['games_row_grey.'][$_games_row_grey_i]['RATING'] : '') . '</td>
		  </tr>
		  ';}}
// END games_row_grey
echo '
		  </table>
	</div>

	<div id="fragment-upload">
		<div class="roundbox bluebox">
			<div class="icon_info">' . ((isset($this->_data['.'][0]['L_pi_manualupload_info'])) ? $this->_data['.'][0]['L_pi_manualupload_info'] : (($this->lang('pi_manualupload_info')) ? $this->lang('pi_manualupload_info') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pi_manualupload_info'))) . '         }')) . '</div>
		</div>
		<br />
		<form enctype="multipart/form-data" action="' . ((isset($this->_data['.'][0]['ACTION'])) ? $this->_data['.'][0]['ACTION'] : '') . '" method="post">
			<fieldset class="settings">
				<legend>' . ((isset($this->_data['.'][0]['L_pi_manualupload'])) ? $this->_data['.'][0]['L_pi_manualupload'] : (($this->lang('pi_manualupload')) ? $this->lang('pi_manualupload') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pi_manualupload'))) . '         }')) . '</legend>
				<dl>
					<dt><label>' . ((isset($this->_data['.'][0]['L_pi_choose_file'])) ? $this->_data['.'][0]['L_pi_choose_file'] : (($this->lang('pi_choose_file')) ? $this->lang('pi_choose_file') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pi_choose_file'))) . '         }')) . '</label><br /><span></span></dt>
					<dd><input type="file" name="extension" class="input" style="width:90%" /></dd>
				</dl>
			</fieldset>
			<input type="submit" value="' . ((isset($this->_data['.'][0]['L_pi_upload_button'])) ? $this->_data['.'][0]['L_pi_upload_button'] : (($this->lang('pi_upload_button')) ? $this->lang('pi_upload_button') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pi_upload_button'))) . '         }')) . '" name="upload" class="mainoption bi_ok" />
			' . ((isset($this->_data['.'][0]['CSRF_TOKEN'])) ? $this->_data['.'][0]['CSRF_TOKEN'] : '') . '
		  </form>
	</div>
</div>
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