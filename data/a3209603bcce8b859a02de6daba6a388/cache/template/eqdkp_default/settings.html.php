<?php
if ($this->security()) {
// IF S_NO_HEADER_FOOTER
if ($this->_data['.'][0]['S_NO_HEADER_FOOTER']) { 
echo '
	<script language="JavaScript" type="text/javascript">
//<![CDATA[
$(document).ready(function(){
	$("#register").validate({
		rules: {
			username: {
				required: true,
				minlength: 2,
				remote: {
					type: "POST",
					url: "' . ((isset($this->_data['.'][0]['VALIDTAELNK_PREFIX'])) ? $this->_data['.'][0]['VALIDTAELNK_PREFIX'] : '') . 'register.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&ajax=1' . ((isset($this->_data['.'][0]['AJAXEXTENSION_USER'])) ? $this->_data['.'][0]['AJAXEXTENSION_USER'] : '') . '"
				}
			},
			user_email: {
				required: true,
				email: true,
				minlength: 2,
				remote: {
					type: "POST",
					url: "' . ((isset($this->_data['.'][0]['VALIDTAELNK_PREFIX'])) ? $this->_data['.'][0]['VALIDTAELNK_PREFIX'] : '') . 'register.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&ajax=1' . ((isset($this->_data['.'][0]['AJAXEXTENSION_MAIL'])) ? $this->_data['.'][0]['AJAXEXTENSION_MAIL'] : '') . '"
				}
			},
			user_email2: {
				required: true,
				email: true,
				equalTo: "#useremail"
			},
			user_alimit: {
				required: true,
				number: true
			},
			user_climit: {
				required: true,
				number: true
			},
			user_elimit: {
				required: true,
				number: true
			},
			user_ilimit: {
				required: true,
				number: true
			},
			user_nlimit: {
				required: true,
				number: true
			},
			user_rlimit: {
				required: true,
				number: true
			},
		},
		onkeyup: false,
		messages: {
			username: {
				required: "' . ((isset($this->_data['.'][0]['L_fv_required_username'])) ? $this->_data['.'][0]['L_fv_required_username'] : (($this->lang('fv_required_username')) ? $this->lang('fv_required_username') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'fv_required_username'))) . '         }')) . '",
				minlength: jQuery.format("' . ((isset($this->_data['.'][0]['L_fv_username_toshort'])) ? $this->_data['.'][0]['L_fv_username_toshort'] : (($this->lang('fv_username_toshort')) ? $this->lang('fv_username_toshort') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'fv_username_toshort'))) . '         }')) . '"),
				remote: jQuery.format("' . ((isset($this->_data['.'][0]['L_fv_username_alreadyuse'])) ? $this->_data['.'][0]['L_fv_username_alreadyuse'] : (($this->lang('fv_username_alreadyuse')) ? $this->lang('fv_username_alreadyuse') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'fv_username_alreadyuse'))) . '         }')) . '")
			},
			user_email: {
				required: "' . ((isset($this->_data['.'][0]['L_fv_required_email'])) ? $this->_data['.'][0]['L_fv_required_email'] : (($this->lang('fv_required_email')) ? $this->lang('fv_required_email') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'fv_required_email'))) . '         }')) . '",
				minlength: "' . ((isset($this->_data['.'][0]['L_fv_email_notvalid'])) ? $this->_data['.'][0]['L_fv_email_notvalid'] : (($this->lang('fv_email_notvalid')) ? $this->lang('fv_email_notvalid') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'fv_email_notvalid'))) . '         }')) . '",
				remote: jQuery.format("' . ((isset($this->_data['.'][0]['L_fv_email_alreadyuse'])) ? $this->_data['.'][0]['L_fv_email_alreadyuse'] : (($this->lang('fv_email_alreadyuse')) ? $this->lang('fv_email_alreadyuse') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'fv_email_alreadyuse'))) . '         }')) . '")
			},
			user_alimit: \'' . ((isset($this->_data['.'][0]['L_fv_required_number'])) ? $this->_data['.'][0]['L_fv_required_number'] : (($this->lang('fv_required_number')) ? $this->lang('fv_required_number') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'fv_required_number'))) . '         }')) . '\',
			user_climit: \'' . ((isset($this->_data['.'][0]['L_fv_required_number'])) ? $this->_data['.'][0]['L_fv_required_number'] : (($this->lang('fv_required_number')) ? $this->lang('fv_required_number') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'fv_required_number'))) . '         }')) . '\',
			user_elimit: \'' . ((isset($this->_data['.'][0]['L_fv_required_number'])) ? $this->_data['.'][0]['L_fv_required_number'] : (($this->lang('fv_required_number')) ? $this->lang('fv_required_number') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'fv_required_number'))) . '         }')) . '\',
			user_ilimit: \'' . ((isset($this->_data['.'][0]['L_fv_required_number'])) ? $this->_data['.'][0]['L_fv_required_number'] : (($this->lang('fv_required_number')) ? $this->lang('fv_required_number') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'fv_required_number'))) . '         }')) . '\',
			user_nlimit: \'' . ((isset($this->_data['.'][0]['L_fv_required_number'])) ? $this->_data['.'][0]['L_fv_required_number'] : (($this->lang('fv_required_number')) ? $this->lang('fv_required_number') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'fv_required_number'))) . '         }')) . '\',
			user_rlimit: \'' . ((isset($this->_data['.'][0]['L_fv_required_number'])) ? $this->_data['.'][0]['L_fv_required_number'] : (($this->lang('fv_required_number')) ? $this->lang('fv_required_number') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'fv_required_number'))) . '         }')) . '\',
			first_name: \'' . ((isset($this->_data['.'][0]['L_fv_required'])) ? $this->_data['.'][0]['L_fv_required'] : (($this->lang('fv_required')) ? $this->lang('fv_required') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'fv_required'))) . '         }')) . '\',
			country: \'' . ((isset($this->_data['.'][0]['L_fv_required'])) ? $this->_data['.'][0]['L_fv_required'] : (($this->lang('fv_required')) ? $this->lang('fv_required') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'fv_required'))) . '         }')) . '\',
			gender: \'' . ((isset($this->_data['.'][0]['L_fv_required'])) ? $this->_data['.'][0]['L_fv_required'] : (($this->lang('fv_required')) ? $this->lang('fv_required') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'fv_required'))) . '         }')) . '\',
			user_password1: \'' . ((isset($this->_data['.'][0]['L_fv_required_password'])) ? $this->_data['.'][0]['L_fv_required_password'] : (($this->lang('fv_required_password')) ? $this->lang('fv_required_password') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'fv_required_password'))) . '         }')) . '\',
			user_password2: \'' . ((isset($this->_data['.'][0]['L_fv_required_password_repeat'])) ? $this->_data['.'][0]['L_fv_required_password_repeat'] : (($this->lang('fv_required_password_repeat')) ? $this->lang('fv_required_password_repeat') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'fv_required_password_repeat'))) . '         }')) . '\',
			recaptcha_response_field: \'' . ((isset($this->_data['.'][0]['L_fv_recaptcha'])) ? $this->_data['.'][0]['L_fv_recaptcha'] : (($this->lang('fv_recaptcha')) ? $this->lang('fv_recaptcha') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'fv_recaptcha'))) . '         }')) . '\',
			user_email2: \'' . ((isset($this->_data['.'][0]['L_fv_required_email2'])) ? $this->_data['.'][0]['L_fv_required_email2'] : (($this->lang('fv_required_email2')) ? $this->lang('fv_required_email2') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'fv_required_email2'))) . '         }')) . '\'
		},
		invalidHandler: function(form, validator) {
			var errors = validator.numberOfInvalids();
			if (errors) {
				var invalidPanels = $(validator.invalidElements()).closest(".ui-tabs-panel", form);
				if (invalidPanels.size() > 0) {
					$.each($.unique(invalidPanels.get()), function(){
						$(this).siblings(".ui-tabs-nav")
						.find("a[href=\'#" + this.id + "\']").parent().not(".ui-tabs-selected")
						.addClass("ui-state-error")
						.show("pulsate",{times: 3});
					});
				}
			}
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).removeClass(errorClass);
			if(element.id != \'\'){
				$(element.form).find("label[for=" + element.id + "]").hide();
				$(element.form).find("label[for=" + element.id + "]").removeClass(errorClass);
			}
			var $panel = $(element).closest(".ui-tabs-panel", element.form);
			if ($panel.size() > 0) {
				var removeerror = true;
				$panel.find("." + errorClass).each(function(index) {
					if($(this).text()){
						removeerror = false;
					}
				});
				if (removeerror === true && $panel.find("." + errorClass + ":visible").length === 0) {
					$panel.siblings(".ui-tabs-nav").find("a[href=\'#" + $panel[0].id + "\']")
					.parent().removeClass("ui-state-error");
				}
			}
		},
		ignore: ".ignore_validation"
	});

	';// IF S_SETTING_ADMIN
if ($this->_data['.'][0]['S_SETTING_ADMIN']) { 
echo '
	$(\'.changepermcolor\').change(function() {

		if($(this).prop(\'checked\')){
			$(\'#span_\'+this.id).removeClass("negative");
			$(\'#span_\'+this.id).addClass(\'positive\');
		}else{
			$(\'#span_\'+this.id).addClass("negative");
			$(\'#span_\'+this.id).removeClass(\'positive\');
		}
	});

	var user_perms = new Array(\'\'';// BEGIN user_permissions
$_user_permissions_count = (isset($this->_data['user_permissions.'])) ?  sizeof($this->_data['user_permissions.']) : 0;
if ($_user_permissions_count) {
for ($_user_permissions_i = 0; $_user_permissions_i < $_user_permissions_count; $_user_permissions_i++)
{
echo ',\'' . ((isset($this->_data['user_permissions.'][$_user_permissions_i]['NAME'])) ? $this->_data['user_permissions.'][$_user_permissions_i]['NAME'] : '') . '\'';}}
// END user_permissions
echo ');
	var group_perms = new Array();
	';// BEGIN group_permissions
$_group_permissions_count = (isset($this->_data['group_permissions.'])) ?  sizeof($this->_data['group_permissions.']) : 0;
if ($_group_permissions_count) {
for ($_group_permissions_i = 0; $_group_permissions_i < $_group_permissions_count; $_group_permissions_i++)
{
echo '
	group_perms[' . ((isset($this->_data['group_permissions.'][$_group_permissions_i]['KEY'])) ? $this->_data['group_permissions.'][$_group_permissions_i]['KEY'] : '') . '] = new Array(\'\'';// BEGIN group_permission_row
$_group_permission_row_count = (isset($this->_data['group_permissions.'][$_group_permissions_i]['group_permission_row.'])) ? sizeof($this->_data['group_permissions.'][$_group_permissions_i]['group_permission_row.']) : 0;
if ($_group_permission_row_count) {
for ($_group_permission_row_i = 0; $_group_permission_row_i < $_group_permission_row_count; $_group_permission_row_i++)
{
echo ',\'' . ((isset($this->_data['group_permissions.'][$_group_permissions_i]['group_permission_row.'][$_group_permission_row_i]['NAME'])) ? $this->_data['group_permissions.'][$_group_permissions_i]['group_permission_row.'][$_group_permission_row_i]['NAME'] : '') . '\'';}}
// END group_permission_row
echo ');
	';}}
// END group_permissions
echo '
	$("#dw_user_groups")
		.multiselect()
		.bind("multiselectclick multiselectcheckall multiselectuncheckall", function( event, ui ){
			var checkedValues = $.map($(this).multiselect("getChecked"), function( input ){
				return input.value;
			});
			reset_permissions();
			set_user_permissions();
			$.each(checkedValues, function(index, value) {
				set_group_permissions(value);
			});
		})
		.triggerHandler("multiselectclick"); // trigger above logic when page first loads

	function reset_permissions(){
		$(\'.changepermcolor\').removeAttr("checked");
		$(\'.changepermcolor\').removeAttr("disabled");
		$(\'.perm_text\').removeClass("positive");
		$(\'.perm_text\').addClass("negative");
	}

	function set_user_permissions(){
		$.each(user_perms, function(index, value) {
			if (value != ""){
				$(\'#span_cb_\'+value).removeClass(\'negative\');
				$(\'#span_cb_\'+value).addClass(\'positive\');
				$(\'#cb_\'+value).attr(\'checked\', "checked");
			}
		});
	}

	function set_group_permissions(groupid){
		$.each(group_perms[groupid], function(index, value) {
			if (value != ""){
				$(\'#span_cb_\'+value).removeClass(\'negative\');
				$(\'#span_cb_\'+value).addClass(\'positive\');
				$(\'#cb_\'+value).attr(\'checked\', "checked");
				$(\'#cb_\'+value).attr(\'disabled\', "disabled");
			}
		});
	}
	';// ENDIF
}
echo '

	// possible fix for double-click problem
	// http://forum.jquery.com/topic/validate-plugin-and-remote-have-to-submit-twice
	$.ajaxSetup ({
		async: false
	});
});
//]]>
</script>

<form method="post" action="' . ((isset($this->_data['.'][0]['ACTION'])) ? $this->_data['.'][0]['ACTION'] : '') . '" name="register" id="register">
<div class="content">
	<div id="usersettings_tabs">

		<ul>
			';// BEGIN tabs
$_tabs_count = (isset($this->_data['tabs.'])) ?  sizeof($this->_data['tabs.']) : 0;
if ($_tabs_count) {
for ($_tabs_i = 0; $_tabs_i < $_tabs_count; $_tabs_i++)
{
echo ' <li><a href=\'#fragment-' . ((isset($this->_data['tabs.'][$_tabs_i]['ID'])) ? $this->_data['tabs.'][$_tabs_i]['ID'] : '') . '\'><span>' . ((isset($this->_data['tabs.'][$_tabs_i]['NAME'])) ? $this->_data['tabs.'][$_tabs_i]['NAME'] : '') . '</span></a></li>';}}
// END tabs
// BEGIN plugin_settings_row
$_plugin_settings_row_count = (isset($this->_data['plugin_settings_row.'])) ?  sizeof($this->_data['plugin_settings_row.']) : 0;
if ($_plugin_settings_row_count) {
for ($_plugin_settings_row_i = 0; $_plugin_settings_row_i < $_plugin_settings_row_count; $_plugin_settings_row_i++)
{
echo '<li><a href=\'#' . ((isset($this->_data['plugin_settings_row.'][$_plugin_settings_row_i]['KEY'])) ? $this->_data['plugin_settings_row.'][$_plugin_settings_row_i]['KEY'] : '') . '\'><img src="' . ((isset($this->_data['plugin_settings_row.'][$_plugin_settings_row_i]['ICON'])) ? $this->_data['plugin_settings_row.'][$_plugin_settings_row_i]['ICON'] : '') . '" alt="Icon" />' . ((isset($this->_data['plugin_settings_row.'][$_plugin_settings_row_i]['PLUGIN'])) ? $this->_data['plugin_settings_row.'][$_plugin_settings_row_i]['PLUGIN'] : '') . '</a></li>';}}
// END plugin_settings_row
// IF S_SETTING_ADMIN
if ($this->_data['.'][0]['S_SETTING_ADMIN']) { 
echo '
			<li><a href=\'#permissions\'>' . ((isset($this->_data['.'][0]['L_permissions'])) ? $this->_data['.'][0]['L_permissions'] : (($this->lang('permissions')) ? $this->lang('permissions') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'permissions'))) . '         }')) . '</a></li>
			<li><a href=\'#members\'>' . ((isset($this->_data['.'][0]['L_associated_members'])) ? $this->_data['.'][0]['L_associated_members'] : (($this->lang('associated_members')) ? $this->lang('associated_members') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'associated_members'))) . '         }')) . '</a></li>
			';// ENDIF
}
echo '
		</ul>

		<input type="hidden" name="old_username" value="' . ((isset($this->_data['.'][0]['USERNAME'])) ? $this->_data['.'][0]['USERNAME'] : '') . '" />
		<input type="hidden" name="user_id[]" value="' . ((isset($this->_data['.'][0]['USER_ID'])) ? $this->_data['.'][0]['USER_ID'] : '') . '" />

		';// BEGIN tabs
$_tabs_count = (isset($this->_data['tabs.'])) ?  sizeof($this->_data['tabs.']) : 0;
if ($_tabs_count) {
for ($_tabs_i = 0; $_tabs_i < $_tabs_count; $_tabs_i++)
{
echo '
		<div id="fragment-' . ((isset($this->_data['tabs.'][$_tabs_i]['ID'])) ? $this->_data['tabs.'][$_tabs_i]['ID'] : '') . '">
			';// BEGIN fieldset
$_fieldset_count = (isset($this->_data['tabs.'][$_tabs_i]['fieldset.'])) ? sizeof($this->_data['tabs.'][$_tabs_i]['fieldset.']) : 0;
if ($_fieldset_count) {
for ($_fieldset_i = 0; $_fieldset_i < $_fieldset_count; $_fieldset_i++)
{
// IF tabs.fieldset.INFO
if ($this->_data['tabs.'][$_tabs_i]['fieldset.'][$_fieldset_i]['INFO']) { 
echo '
			<div class="bluebox roundbox">
				<div class="icon_info">' . ((isset($this->_data['tabs.'][$_tabs_i]['fieldset.'][$_fieldset_i]['INFO'])) ? $this->_data['tabs.'][$_tabs_i]['fieldset.'][$_fieldset_i]['INFO'] : '') . '</div>
			</div>

			';// ENDIF
}
echo '

			<fieldset class="settings">
				<legend>' . ((isset($this->_data['tabs.'][$_tabs_i]['fieldset.'][$_fieldset_i]['NAME'])) ? $this->_data['tabs.'][$_tabs_i]['fieldset.'][$_fieldset_i]['NAME'] : '') . '</legend>

				';// BEGIN field
$_field_count = (isset($this->_data['tabs.'][$_tabs_i]['fieldset.'][$_fieldset_i]['field.'])) ? sizeof($this->_data['tabs.'][$_tabs_i]['fieldset.'][$_fieldset_i]['field.']) : 0;
if ($_field_count) {
for ($_field_i = 0; $_field_i < $_field_count; $_field_i++)
{
echo '
				<dl>
					<dt><label>' . ((isset($this->_data['tabs.'][$_tabs_i]['fieldset.'][$_fieldset_i]['field.'][$_field_i]['NAME'])) ? $this->_data['tabs.'][$_tabs_i]['fieldset.'][$_fieldset_i]['field.'][$_field_i]['NAME'] : '') . '</label><br /><span>' . ((isset($this->_data['tabs.'][$_tabs_i]['fieldset.'][$_fieldset_i]['field.'][$_field_i]['HELP'])) ? $this->_data['tabs.'][$_tabs_i]['fieldset.'][$_fieldset_i]['field.'][$_field_i]['HELP'] : '') . '</span></dt>
					<dd>' . ((isset($this->_data['tabs.'][$_tabs_i]['fieldset.'][$_fieldset_i]['field.'][$_field_i]['FIELD'])) ? $this->_data['tabs.'][$_tabs_i]['fieldset.'][$_fieldset_i]['field.'][$_field_i]['FIELD'] : '') . '' . ((isset($this->_data['tabs.'][$_tabs_i]['fieldset.'][$_fieldset_i]['field.'][$_field_i]['TEXT'])) ? $this->_data['tabs.'][$_tabs_i]['fieldset.'][$_fieldset_i]['field.'][$_field_i]['TEXT'] : '') . '</dd>
				</dl>
				';}}
// END field
echo '
			</fieldset>
			';}}
// END fieldset
echo '
		</div>
		';}}
// END tabs
// BEGIN plugin_usersettings_div
$_plugin_usersettings_div_count = (isset($this->_data['plugin_usersettings_div.'])) ?  sizeof($this->_data['plugin_usersettings_div.']) : 0;
if ($_plugin_usersettings_div_count) {
for ($_plugin_usersettings_div_i = 0; $_plugin_usersettings_div_i < $_plugin_usersettings_div_count; $_plugin_usersettings_div_i++)
{
echo '
		<div id="' . ((isset($this->_data['plugin_usersettings_div.'][$_plugin_usersettings_div_i]['KEY'])) ? $this->_data['plugin_usersettings_div.'][$_plugin_usersettings_div_i]['KEY'] : '') . '">
			<fieldset class="settings">
				';// BEGIN plugin_usersettings
$_plugin_usersettings_count = (isset($this->_data['plugin_usersettings_div.'][$_plugin_usersettings_div_i]['plugin_usersettings.'])) ? sizeof($this->_data['plugin_usersettings_div.'][$_plugin_usersettings_div_i]['plugin_usersettings.']) : 0;
if ($_plugin_usersettings_count) {
for ($_plugin_usersettings_i = 0; $_plugin_usersettings_i < $_plugin_usersettings_count; $_plugin_usersettings_i++)
{
// IF plugin_usersettings_div.plugin_usersettings.S_TH
if ($this->_data['plugin_usersettings_div.'][$_plugin_usersettings_div_i]['plugin_usersettings.'][$_plugin_usersettings_i]['S_TH']) { 
echo '
						</fieldset><fieldset class="settings">
						<legend>' . ((isset($this->_data['plugin_usersettings_div.'][$_plugin_usersettings_div_i]['plugin_usersettings.'][$_plugin_usersettings_i]['NAME'])) ? $this->_data['plugin_usersettings_div.'][$_plugin_usersettings_div_i]['plugin_usersettings.'][$_plugin_usersettings_i]['NAME'] : '') . '</legend>
					';// ELSE
} else {
echo '
						<dl>
							<dt>
								<label>' . ((isset($this->_data['plugin_usersettings_div.'][$_plugin_usersettings_div_i]['plugin_usersettings.'][$_plugin_usersettings_i]['NAME'])) ? $this->_data['plugin_usersettings_div.'][$_plugin_usersettings_div_i]['plugin_usersettings.'][$_plugin_usersettings_i]['NAME'] : '') . '</label><br /><span>' . ((isset($this->_data['plugin_usersettings_div.'][$_plugin_usersettings_div_i]['plugin_usersettings.'][$_plugin_usersettings_i]['HELP'])) ? $this->_data['plugin_usersettings_div.'][$_plugin_usersettings_div_i]['plugin_usersettings.'][$_plugin_usersettings_i]['HELP'] : '') . '</span>
							</dt>
							<dd>' . ((isset($this->_data['plugin_usersettings_div.'][$_plugin_usersettings_div_i]['plugin_usersettings.'][$_plugin_usersettings_i]['FIELD'])) ? $this->_data['plugin_usersettings_div.'][$_plugin_usersettings_div_i]['plugin_usersettings.'][$_plugin_usersettings_i]['FIELD'] : '') . '</dd>
						</dl>
					';// ENDIF
}
}}
// END plugin_usersettings
echo '
			</fieldset>
		</div>
		';}}
// END plugin_usersettings_div
// IF S_SETTING_ADMIN
if ($this->_data['.'][0]['S_SETTING_ADMIN']) { 
echo '
		<div id="permissions">
			<div class="bluebox roundbox">
				<div class="icon_info"><input type="checkbox" checked="checked" disabled="disabled" />' . ((isset($this->_data['.'][0]['L_s_group_note'])) ? $this->_data['.'][0]['L_s_group_note'] : (($this->lang('s_group_note')) ? $this->lang('s_group_note') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 's_group_note'))) . '         }')) . '</div>
			</div>
			<fieldset class="settings">
				<legend>' . ((isset($this->_data['.'][0]['L_account_enabled'])) ? $this->_data['.'][0]['L_account_enabled'] : (($this->lang('account_enabled')) ? $this->lang('account_enabled') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'account_enabled'))) . '         }')) . '</legend>

				<dl>
					<dt><label>' . ((isset($this->_data['.'][0]['L_account_enabled'])) ? $this->_data['.'][0]['L_account_enabled'] : (($this->lang('account_enabled')) ? $this->lang('account_enabled') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'account_enabled'))) . '         }')) . '</label></dt>
					<dd>' . ((isset($this->_data['.'][0]['ACTIVE_RADIO'])) ? $this->_data['.'][0]['ACTIVE_RADIO'] : '') . '</dd>
				</dl>

			</fieldset>
			<fieldset class="settings">
				<legend>' . ((isset($this->_data['.'][0]['L_user_groups'])) ? $this->_data['.'][0]['L_user_groups'] : (($this->lang('user_groups')) ? $this->lang('user_groups') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'user_groups'))) . '         }')) . '</legend>

				<dl>
					<dt><label>' . ((isset($this->_data['.'][0]['L_user_groups'])) ? $this->_data['.'][0]['L_user_groups'] : (($this->lang('user_groups')) ? $this->lang('user_groups') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'user_groups'))) . '         }')) . '</label></dt>
					<dd>' . ((isset($this->_data['.'][0]['USER_GROUP_SELECT'])) ? $this->_data['.'][0]['USER_GROUP_SELECT'] : '') . '</dd>
				</dl>

			</fieldset>

						<div id="permission_tabs">
				<ul>
					<li><a href=\'#user_perms\'><span>' . ((isset($this->_data['.'][0]['L_user_permissions'])) ? $this->_data['.'][0]['L_user_permissions'] : (($this->lang('user_permissions')) ? $this->lang('user_permissions') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'user_permissions'))) . '         }')) . '</span></a></li>
					<li><a href=\'#admin_perms\'><span><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'global/admin_flag.png" alt="admin"/>' . ((isset($this->_data['.'][0]['L_admin_permissions'])) ? $this->_data['.'][0]['L_admin_permissions'] : (($this->lang('admin_permissions')) ? $this->lang('admin_permissions') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'admin_permissions'))) . '         }')) . '</span></a></li>
				</ul>

				<div id="user_perms">
					';// BEGIN u_permissions_row
$_u_permissions_row_count = (isset($this->_data['u_permissions_row.'])) ?  sizeof($this->_data['u_permissions_row.']) : 0;
if ($_u_permissions_row_count) {
for ($_u_permissions_row_i = 0; $_u_permissions_row_i < $_u_permissions_row_count; $_u_permissions_row_i++)
{
echo '
					<fieldset class="settings mediumsettings">
						<legend>' . ((isset($this->_data['u_permissions_row.'][$_u_permissions_row_i]['GROUP'])) ? $this->_data['u_permissions_row.'][$_u_permissions_row_i]['GROUP'] : '') . '</legend>
						';// BEGIN check_group
$_check_group_count = (isset($this->_data['u_permissions_row.'][$_u_permissions_row_i]['check_group.'])) ? sizeof($this->_data['u_permissions_row.'][$_u_permissions_row_i]['check_group.']) : 0;
if ($_check_group_count) {
for ($_check_group_i = 0; $_check_group_i < $_check_group_count; $_check_group_i++)
{
// IF not u_permissions_row.check_group.S_SUPERADMIN_PERM
if (! $this->_data['u_permissions_row.'][$_u_permissions_row_i]['check_group.'][$_check_group_i]['S_SUPERADMIN_PERM']) { 
echo '
						<div class="permissions">
							<label>
								';// IF u_permissions_row.check_group.S_IS_GROUP
if ($this->_data['u_permissions_row.'][$_u_permissions_row_i]['check_group.'][$_check_group_i]['S_IS_GROUP']) { 
echo '
								<input type="checkbox" name="' . ((isset($this->_data['u_permissions_row.'][$_u_permissions_row_i]['check_group.'][$_check_group_i]['CBNAME'])) ? $this->_data['u_permissions_row.'][$_u_permissions_row_i]['check_group.'][$_check_group_i]['CBNAME'] : '') . '" value="Y" ' . ((isset($this->_data['u_permissions_row.'][$_u_permissions_row_i]['check_group.'][$_check_group_i]['CBCHECKED'])) ? $this->_data['u_permissions_row.'][$_u_permissions_row_i]['check_group.'][$_check_group_i]['CBCHECKED'] : '') . ' disabled="disabled" class="changepermcolor" id="cb_' . ((isset($this->_data['u_permissions_row.'][$_u_permissions_row_i]['check_group.'][$_check_group_i]['CBNAME'])) ? $this->_data['u_permissions_row.'][$_u_permissions_row_i]['check_group.'][$_check_group_i]['CBNAME'] : '') . '" />
								';// ELSE
} else {
echo '
								<input type="checkbox" name="' . ((isset($this->_data['u_permissions_row.'][$_u_permissions_row_i]['check_group.'][$_check_group_i]['CBNAME'])) ? $this->_data['u_permissions_row.'][$_u_permissions_row_i]['check_group.'][$_check_group_i]['CBNAME'] : '') . '" value="Y" ' . ((isset($this->_data['u_permissions_row.'][$_u_permissions_row_i]['check_group.'][$_check_group_i]['CBCHECKED'])) ? $this->_data['u_permissions_row.'][$_u_permissions_row_i]['check_group.'][$_check_group_i]['CBCHECKED'] : '') . ' class="changepermcolor" id="cb_' . ((isset($this->_data['u_permissions_row.'][$_u_permissions_row_i]['check_group.'][$_check_group_i]['CBNAME'])) ? $this->_data['u_permissions_row.'][$_u_permissions_row_i]['check_group.'][$_check_group_i]['CBNAME'] : '') . '"/>
								';// ENDIF
}
echo '
								<span id="span_cb_' . ((isset($this->_data['u_permissions_row.'][$_u_permissions_row_i]['check_group.'][$_check_group_i]['CBNAME'])) ? $this->_data['u_permissions_row.'][$_u_permissions_row_i]['check_group.'][$_check_group_i]['CBNAME'] : '') . '" class="perm_text ' . ((isset($this->_data['u_permissions_row.'][$_u_permissions_row_i]['check_group.'][$_check_group_i]['CLASS'])) ? $this->_data['u_permissions_row.'][$_u_permissions_row_i]['check_group.'][$_check_group_i]['CLASS'] : '') . '">' . ((isset($this->_data['u_permissions_row.'][$_u_permissions_row_i]['check_group.'][$_check_group_i]['TEXT'])) ? $this->_data['u_permissions_row.'][$_u_permissions_row_i]['check_group.'][$_check_group_i]['TEXT'] : '') . '</span>
							</label>
						</div>
						';// ENDIF
}
}}
// END check_group
echo '
					</fieldset>
					';}}
// END u_permissions_row
echo '
				</div>

				<div id="admin_perms">
					';// BEGIN a_permissions_row
$_a_permissions_row_count = (isset($this->_data['a_permissions_row.'])) ?  sizeof($this->_data['a_permissions_row.']) : 0;
if ($_a_permissions_row_count) {
for ($_a_permissions_row_i = 0; $_a_permissions_row_i < $_a_permissions_row_count; $_a_permissions_row_i++)
{
echo '
					<fieldset class="settings mediumsettings">
						<legend>' . ((isset($this->_data['a_permissions_row.'][$_a_permissions_row_i]['GROUP'])) ? $this->_data['a_permissions_row.'][$_a_permissions_row_i]['GROUP'] : '') . '</legend>
						';// BEGIN check_group
$_check_group_count = (isset($this->_data['a_permissions_row.'][$_a_permissions_row_i]['check_group.'])) ? sizeof($this->_data['a_permissions_row.'][$_a_permissions_row_i]['check_group.']) : 0;
if ($_check_group_count) {
for ($_check_group_i = 0; $_check_group_i < $_check_group_count; $_check_group_i++)
{
echo '
						<div class="permissions">
							<label>
								';// IF a_permissions_row.check_group.S_IS_GROUP
if ($this->_data['a_permissions_row.'][$_a_permissions_row_i]['check_group.'][$_check_group_i]['S_IS_GROUP']) { 
echo '
								<input type="checkbox" name="' . ((isset($this->_data['a_permissions_row.'][$_a_permissions_row_i]['check_group.'][$_check_group_i]['CBNAME'])) ? $this->_data['a_permissions_row.'][$_a_permissions_row_i]['check_group.'][$_check_group_i]['CBNAME'] : '') . '" value="Y" ' . ((isset($this->_data['a_permissions_row.'][$_a_permissions_row_i]['check_group.'][$_check_group_i]['CBCHECKED'])) ? $this->_data['a_permissions_row.'][$_a_permissions_row_i]['check_group.'][$_check_group_i]['CBCHECKED'] : '') . ' disabled="disabled" class="changepermcolor" id="cb_' . ((isset($this->_data['a_permissions_row.'][$_a_permissions_row_i]['check_group.'][$_check_group_i]['CBNAME'])) ? $this->_data['a_permissions_row.'][$_a_permissions_row_i]['check_group.'][$_check_group_i]['CBNAME'] : '') . '" />
								';// ELSE
} else {
echo '
								<input type="checkbox" name="' . ((isset($this->_data['a_permissions_row.'][$_a_permissions_row_i]['check_group.'][$_check_group_i]['CBNAME'])) ? $this->_data['a_permissions_row.'][$_a_permissions_row_i]['check_group.'][$_check_group_i]['CBNAME'] : '') . '" value="Y" ' . ((isset($this->_data['a_permissions_row.'][$_a_permissions_row_i]['check_group.'][$_check_group_i]['CBCHECKED'])) ? $this->_data['a_permissions_row.'][$_a_permissions_row_i]['check_group.'][$_check_group_i]['CBCHECKED'] : '') . ' class="changepermcolor" id="cb_' . ((isset($this->_data['a_permissions_row.'][$_a_permissions_row_i]['check_group.'][$_check_group_i]['CBNAME'])) ? $this->_data['a_permissions_row.'][$_a_permissions_row_i]['check_group.'][$_check_group_i]['CBNAME'] : '') . '"/>
								';// ENDIF
}
echo '
								<span id="span_cb_' . ((isset($this->_data['a_permissions_row.'][$_a_permissions_row_i]['check_group.'][$_check_group_i]['CBNAME'])) ? $this->_data['a_permissions_row.'][$_a_permissions_row_i]['check_group.'][$_check_group_i]['CBNAME'] : '') . '" class="perm_text ' . ((isset($this->_data['a_permissions_row.'][$_a_permissions_row_i]['check_group.'][$_check_group_i]['CLASS'])) ? $this->_data['a_permissions_row.'][$_a_permissions_row_i]['check_group.'][$_check_group_i]['CLASS'] : '') . '">' . ((isset($this->_data['a_permissions_row.'][$_a_permissions_row_i]['check_group.'][$_check_group_i]['TEXT'])) ? $this->_data['a_permissions_row.'][$_a_permissions_row_i]['check_group.'][$_check_group_i]['TEXT'] : '') . '</span>
							</label>
						</div>
						';}}
// END check_group
echo '
					</fieldset>
					';}}
// END a_permissions_row
echo '
				</div>

			</div>

		</div>

		';// IF S_MU_TABLE
if ($this->_data['.'][0]['S_MU_TABLE']) { 
echo '
		<div id="members">
			<fieldset class="settings">
				<legend>' . ((isset($this->_data['.'][0]['L_associated_members'])) ? $this->_data['.'][0]['L_associated_members'] : (($this->lang('associated_members')) ? $this->lang('associated_members') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'associated_members'))) . '         }')) . '</legend>

				<dl>
					<dt>
						<label>' . ((isset($this->_data['.'][0]['L_associated_members'])) ? $this->_data['.'][0]['L_associated_members'] : (($this->lang('associated_members')) ? $this->lang('associated_members') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'associated_members'))) . '         }')) . '</label><br />
					</dt>
					<dd>
						' . ((isset($this->_data['.'][0]['JS_CONNECTIONS'])) ? $this->_data['.'][0]['JS_CONNECTIONS'] : '') . ' ' . ((isset($this->_data['.'][0]['FV_MEMBER_ID'])) ? $this->_data['.'][0]['FV_MEMBER_ID'] : '') . '
					</dd>
				</dl>
			</fieldset>
		</div>
		';// ENDIF
}
// ENDIF
}
echo '
	</div>
		<div class="contentFooter">
			<input type="submit" name="submit" value="' . ((isset($this->_data['.'][0]['L_uc_connectme'])) ? $this->_data['.'][0]['L_uc_connectme'] : (($this->lang('uc_connectme')) ? $this->lang('uc_connectme') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'uc_connectme'))) . '         }')) . '" class="mainoption bi_ok" />
			<input type="reset" name="reset" value="' . ((isset($this->_data['.'][0]['L_reset'])) ? $this->_data['.'][0]['L_reset'] : (($this->lang('reset')) ? $this->lang('reset') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'reset'))) . '         }')) . '" class="liteoption bi_reset" />
			';// IF S_SETTING_ADMIN
if ($this->_data['.'][0]['S_SETTING_ADMIN']) { 
echo '
			<input type="submit" name="" value="' . ((isset($this->_data['.'][0]['L_back'])) ? $this->_data['.'][0]['L_back'] : (($this->lang('back')) ? $this->lang('back') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'back'))) . '         }')) . '" class="mainoption bi_back" />
			';// IF not S_PROTECT_USER
if (! $this->_data['.'][0]['S_PROTECT_USER']) { 
echo '
			<input type="button" name="del" value="' . ((isset($this->_data['.'][0]['L_delete'])) ? $this->_data['.'][0]['L_delete'] : (($this->lang('delete')) ? $this->lang('delete') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'delete'))) . '         }')) . '" class="liteoption bi_delete ignore_validation" onclick="delete_warning(' . ((isset($this->_data['.'][0]['USER_ID'])) ? $this->_data['.'][0]['USER_ID'] : '') . ');" id="delete123_button" />
			';// ENDIF
}
// ENDIF
}
echo '
		</div>
	</div>

	' . ((isset($this->_data['.'][0]['HIDDEN_FIELDS'])) ? $this->_data['.'][0]['HIDDEN_FIELDS'] : '') . '
	' . ((isset($this->_data['.'][0]['CSRF_TOKEN'])) ? $this->_data['.'][0]['CSRF_TOKEN'] : '') . '
</form>
';// IF S_SETTING_ADMIN
if ($this->_data['.'][0]['S_SETTING_ADMIN']) { 
echo '' . ((isset($this->_data['.'][0]['JS_TAB_SELECT'])) ? $this->_data['.'][0]['JS_TAB_SELECT'] : '') . '';// ENDIF
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
								<script language="JavaScript" type="text/javascript">
//<![CDATA[
$(document).ready(function(){
	$("#register").validate({
		rules: {
			username: {
				required: true,
				minlength: 2,
				remote: {
					type: "POST",
					url: "' . ((isset($this->_data['.'][0]['VALIDTAELNK_PREFIX'])) ? $this->_data['.'][0]['VALIDTAELNK_PREFIX'] : '') . 'register.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&ajax=1' . ((isset($this->_data['.'][0]['AJAXEXTENSION_USER'])) ? $this->_data['.'][0]['AJAXEXTENSION_USER'] : '') . '"
				}
			},
			user_email: {
				required: true,
				email: true,
				minlength: 2,
				remote: {
					type: "POST",
					url: "' . ((isset($this->_data['.'][0]['VALIDTAELNK_PREFIX'])) ? $this->_data['.'][0]['VALIDTAELNK_PREFIX'] : '') . 'register.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&ajax=1' . ((isset($this->_data['.'][0]['AJAXEXTENSION_MAIL'])) ? $this->_data['.'][0]['AJAXEXTENSION_MAIL'] : '') . '"
				}
			},
			user_email2: {
				required: true,
				email: true,
				equalTo: "#useremail"
			},
			user_alimit: {
				required: true,
				number: true
			},
			user_climit: {
				required: true,
				number: true
			},
			user_elimit: {
				required: true,
				number: true
			},
			user_ilimit: {
				required: true,
				number: true
			},
			user_nlimit: {
				required: true,
				number: true
			},
			user_rlimit: {
				required: true,
				number: true
			},
		},
		onkeyup: false,
		messages: {
			username: {
				required: "' . ((isset($this->_data['.'][0]['L_fv_required_username'])) ? $this->_data['.'][0]['L_fv_required_username'] : (($this->lang('fv_required_username')) ? $this->lang('fv_required_username') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'fv_required_username'))) . '         }')) . '",
				minlength: jQuery.format("' . ((isset($this->_data['.'][0]['L_fv_username_toshort'])) ? $this->_data['.'][0]['L_fv_username_toshort'] : (($this->lang('fv_username_toshort')) ? $this->lang('fv_username_toshort') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'fv_username_toshort'))) . '         }')) . '"),
				remote: jQuery.format("' . ((isset($this->_data['.'][0]['L_fv_username_alreadyuse'])) ? $this->_data['.'][0]['L_fv_username_alreadyuse'] : (($this->lang('fv_username_alreadyuse')) ? $this->lang('fv_username_alreadyuse') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'fv_username_alreadyuse'))) . '         }')) . '")
			},
			user_email: {
				required: "' . ((isset($this->_data['.'][0]['L_fv_required_email'])) ? $this->_data['.'][0]['L_fv_required_email'] : (($this->lang('fv_required_email')) ? $this->lang('fv_required_email') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'fv_required_email'))) . '         }')) . '",
				minlength: "' . ((isset($this->_data['.'][0]['L_fv_email_notvalid'])) ? $this->_data['.'][0]['L_fv_email_notvalid'] : (($this->lang('fv_email_notvalid')) ? $this->lang('fv_email_notvalid') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'fv_email_notvalid'))) . '         }')) . '",
				remote: jQuery.format("' . ((isset($this->_data['.'][0]['L_fv_email_alreadyuse'])) ? $this->_data['.'][0]['L_fv_email_alreadyuse'] : (($this->lang('fv_email_alreadyuse')) ? $this->lang('fv_email_alreadyuse') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'fv_email_alreadyuse'))) . '         }')) . '")
			},
			user_alimit: \'' . ((isset($this->_data['.'][0]['L_fv_required_number'])) ? $this->_data['.'][0]['L_fv_required_number'] : (($this->lang('fv_required_number')) ? $this->lang('fv_required_number') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'fv_required_number'))) . '         }')) . '\',
			user_climit: \'' . ((isset($this->_data['.'][0]['L_fv_required_number'])) ? $this->_data['.'][0]['L_fv_required_number'] : (($this->lang('fv_required_number')) ? $this->lang('fv_required_number') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'fv_required_number'))) . '         }')) . '\',
			user_elimit: \'' . ((isset($this->_data['.'][0]['L_fv_required_number'])) ? $this->_data['.'][0]['L_fv_required_number'] : (($this->lang('fv_required_number')) ? $this->lang('fv_required_number') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'fv_required_number'))) . '         }')) . '\',
			user_ilimit: \'' . ((isset($this->_data['.'][0]['L_fv_required_number'])) ? $this->_data['.'][0]['L_fv_required_number'] : (($this->lang('fv_required_number')) ? $this->lang('fv_required_number') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'fv_required_number'))) . '         }')) . '\',
			user_nlimit: \'' . ((isset($this->_data['.'][0]['L_fv_required_number'])) ? $this->_data['.'][0]['L_fv_required_number'] : (($this->lang('fv_required_number')) ? $this->lang('fv_required_number') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'fv_required_number'))) . '         }')) . '\',
			user_rlimit: \'' . ((isset($this->_data['.'][0]['L_fv_required_number'])) ? $this->_data['.'][0]['L_fv_required_number'] : (($this->lang('fv_required_number')) ? $this->lang('fv_required_number') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'fv_required_number'))) . '         }')) . '\',
			first_name: \'' . ((isset($this->_data['.'][0]['L_fv_required'])) ? $this->_data['.'][0]['L_fv_required'] : (($this->lang('fv_required')) ? $this->lang('fv_required') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'fv_required'))) . '         }')) . '\',
			country: \'' . ((isset($this->_data['.'][0]['L_fv_required'])) ? $this->_data['.'][0]['L_fv_required'] : (($this->lang('fv_required')) ? $this->lang('fv_required') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'fv_required'))) . '         }')) . '\',
			gender: \'' . ((isset($this->_data['.'][0]['L_fv_required'])) ? $this->_data['.'][0]['L_fv_required'] : (($this->lang('fv_required')) ? $this->lang('fv_required') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'fv_required'))) . '         }')) . '\',
			user_password1: \'' . ((isset($this->_data['.'][0]['L_fv_required_password'])) ? $this->_data['.'][0]['L_fv_required_password'] : (($this->lang('fv_required_password')) ? $this->lang('fv_required_password') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'fv_required_password'))) . '         }')) . '\',
			user_password2: \'' . ((isset($this->_data['.'][0]['L_fv_required_password_repeat'])) ? $this->_data['.'][0]['L_fv_required_password_repeat'] : (($this->lang('fv_required_password_repeat')) ? $this->lang('fv_required_password_repeat') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'fv_required_password_repeat'))) . '         }')) . '\',
			recaptcha_response_field: \'' . ((isset($this->_data['.'][0]['L_fv_recaptcha'])) ? $this->_data['.'][0]['L_fv_recaptcha'] : (($this->lang('fv_recaptcha')) ? $this->lang('fv_recaptcha') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'fv_recaptcha'))) . '         }')) . '\',
			user_email2: \'' . ((isset($this->_data['.'][0]['L_fv_required_email2'])) ? $this->_data['.'][0]['L_fv_required_email2'] : (($this->lang('fv_required_email2')) ? $this->lang('fv_required_email2') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'fv_required_email2'))) . '         }')) . '\'
		},
		invalidHandler: function(form, validator) {
			var errors = validator.numberOfInvalids();
			if (errors) {
				var invalidPanels = $(validator.invalidElements()).closest(".ui-tabs-panel", form);
				if (invalidPanels.size() > 0) {
					$.each($.unique(invalidPanels.get()), function(){
						$(this).siblings(".ui-tabs-nav")
						.find("a[href=\'#" + this.id + "\']").parent().not(".ui-tabs-selected")
						.addClass("ui-state-error")
						.show("pulsate",{times: 3});
					});
				}
			}
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).removeClass(errorClass);
			if(element.id != \'\'){
				$(element.form).find("label[for=" + element.id + "]").hide();
				$(element.form).find("label[for=" + element.id + "]").removeClass(errorClass);
			}
			var $panel = $(element).closest(".ui-tabs-panel", element.form);
			if ($panel.size() > 0) {
				var removeerror = true;
				$panel.find("." + errorClass).each(function(index) {
					if($(this).text()){
						removeerror = false;
					}
				});
				if (removeerror === true && $panel.find("." + errorClass + ":visible").length === 0) {
					$panel.siblings(".ui-tabs-nav").find("a[href=\'#" + $panel[0].id + "\']")
					.parent().removeClass("ui-state-error");
				}
			}
		},
		ignore: ".ignore_validation"
	});

	';// IF S_SETTING_ADMIN
if ($this->_data['.'][0]['S_SETTING_ADMIN']) { 
echo '
	$(\'.changepermcolor\').change(function() {

		if($(this).prop(\'checked\')){
			$(\'#span_\'+this.id).removeClass("negative");
			$(\'#span_\'+this.id).addClass(\'positive\');
		}else{
			$(\'#span_\'+this.id).addClass("negative");
			$(\'#span_\'+this.id).removeClass(\'positive\');
		}
	});

	var user_perms = new Array(\'\'';// BEGIN user_permissions
$_user_permissions_count = (isset($this->_data['user_permissions.'])) ?  sizeof($this->_data['user_permissions.']) : 0;
if ($_user_permissions_count) {
for ($_user_permissions_i = 0; $_user_permissions_i < $_user_permissions_count; $_user_permissions_i++)
{
echo ',\'' . ((isset($this->_data['user_permissions.'][$_user_permissions_i]['NAME'])) ? $this->_data['user_permissions.'][$_user_permissions_i]['NAME'] : '') . '\'';}}
// END user_permissions
echo ');
	var group_perms = new Array();
	';// BEGIN group_permissions
$_group_permissions_count = (isset($this->_data['group_permissions.'])) ?  sizeof($this->_data['group_permissions.']) : 0;
if ($_group_permissions_count) {
for ($_group_permissions_i = 0; $_group_permissions_i < $_group_permissions_count; $_group_permissions_i++)
{
echo '
	group_perms[' . ((isset($this->_data['group_permissions.'][$_group_permissions_i]['KEY'])) ? $this->_data['group_permissions.'][$_group_permissions_i]['KEY'] : '') . '] = new Array(\'\'';// BEGIN group_permission_row
$_group_permission_row_count = (isset($this->_data['group_permissions.'][$_group_permissions_i]['group_permission_row.'])) ? sizeof($this->_data['group_permissions.'][$_group_permissions_i]['group_permission_row.']) : 0;
if ($_group_permission_row_count) {
for ($_group_permission_row_i = 0; $_group_permission_row_i < $_group_permission_row_count; $_group_permission_row_i++)
{
echo ',\'' . ((isset($this->_data['group_permissions.'][$_group_permissions_i]['group_permission_row.'][$_group_permission_row_i]['NAME'])) ? $this->_data['group_permissions.'][$_group_permissions_i]['group_permission_row.'][$_group_permission_row_i]['NAME'] : '') . '\'';}}
// END group_permission_row
echo ');
	';}}
// END group_permissions
echo '
	$("#dw_user_groups")
		.multiselect()
		.bind("multiselectclick multiselectcheckall multiselectuncheckall", function( event, ui ){
			var checkedValues = $.map($(this).multiselect("getChecked"), function( input ){
				return input.value;
			});
			reset_permissions();
			set_user_permissions();
			$.each(checkedValues, function(index, value) {
				set_group_permissions(value);
			});
		})
		.triggerHandler("multiselectclick"); // trigger above logic when page first loads

	function reset_permissions(){
		$(\'.changepermcolor\').removeAttr("checked");
		$(\'.changepermcolor\').removeAttr("disabled");
		$(\'.perm_text\').removeClass("positive");
		$(\'.perm_text\').addClass("negative");
	}

	function set_user_permissions(){
		$.each(user_perms, function(index, value) {
			if (value != ""){
				$(\'#span_cb_\'+value).removeClass(\'negative\');
				$(\'#span_cb_\'+value).addClass(\'positive\');
				$(\'#cb_\'+value).attr(\'checked\', "checked");
			}
		});
	}

	function set_group_permissions(groupid){
		$.each(group_perms[groupid], function(index, value) {
			if (value != ""){
				$(\'#span_cb_\'+value).removeClass(\'negative\');
				$(\'#span_cb_\'+value).addClass(\'positive\');
				$(\'#cb_\'+value).attr(\'checked\', "checked");
				$(\'#cb_\'+value).attr(\'disabled\', "disabled");
			}
		});
	}
	';// ENDIF
}
echo '

	// possible fix for double-click problem
	// http://forum.jquery.com/topic/validate-plugin-and-remote-have-to-submit-twice
	$.ajaxSetup ({
		async: false
	});
});
//]]>
</script>

<form method="post" action="' . ((isset($this->_data['.'][0]['ACTION'])) ? $this->_data['.'][0]['ACTION'] : '') . '" name="register" id="register">
<div class="content">
	<div id="usersettings_tabs">

		<ul>
			';// BEGIN tabs
$_tabs_count = (isset($this->_data['tabs.'])) ?  sizeof($this->_data['tabs.']) : 0;
if ($_tabs_count) {
for ($_tabs_i = 0; $_tabs_i < $_tabs_count; $_tabs_i++)
{
echo ' <li><a href=\'#fragment-' . ((isset($this->_data['tabs.'][$_tabs_i]['ID'])) ? $this->_data['tabs.'][$_tabs_i]['ID'] : '') . '\'><span>' . ((isset($this->_data['tabs.'][$_tabs_i]['NAME'])) ? $this->_data['tabs.'][$_tabs_i]['NAME'] : '') . '</span></a></li>';}}
// END tabs
// BEGIN plugin_settings_row
$_plugin_settings_row_count = (isset($this->_data['plugin_settings_row.'])) ?  sizeof($this->_data['plugin_settings_row.']) : 0;
if ($_plugin_settings_row_count) {
for ($_plugin_settings_row_i = 0; $_plugin_settings_row_i < $_plugin_settings_row_count; $_plugin_settings_row_i++)
{
echo '<li><a href=\'#' . ((isset($this->_data['plugin_settings_row.'][$_plugin_settings_row_i]['KEY'])) ? $this->_data['plugin_settings_row.'][$_plugin_settings_row_i]['KEY'] : '') . '\'><img src="' . ((isset($this->_data['plugin_settings_row.'][$_plugin_settings_row_i]['ICON'])) ? $this->_data['plugin_settings_row.'][$_plugin_settings_row_i]['ICON'] : '') . '" alt="Icon" />' . ((isset($this->_data['plugin_settings_row.'][$_plugin_settings_row_i]['PLUGIN'])) ? $this->_data['plugin_settings_row.'][$_plugin_settings_row_i]['PLUGIN'] : '') . '</a></li>';}}
// END plugin_settings_row
// IF S_SETTING_ADMIN
if ($this->_data['.'][0]['S_SETTING_ADMIN']) { 
echo '
			<li><a href=\'#permissions\'>' . ((isset($this->_data['.'][0]['L_permissions'])) ? $this->_data['.'][0]['L_permissions'] : (($this->lang('permissions')) ? $this->lang('permissions') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'permissions'))) . '         }')) . '</a></li>
			<li><a href=\'#members\'>' . ((isset($this->_data['.'][0]['L_associated_members'])) ? $this->_data['.'][0]['L_associated_members'] : (($this->lang('associated_members')) ? $this->lang('associated_members') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'associated_members'))) . '         }')) . '</a></li>
			';// ENDIF
}
echo '
		</ul>

		<input type="hidden" name="old_username" value="' . ((isset($this->_data['.'][0]['USERNAME'])) ? $this->_data['.'][0]['USERNAME'] : '') . '" />
		<input type="hidden" name="user_id[]" value="' . ((isset($this->_data['.'][0]['USER_ID'])) ? $this->_data['.'][0]['USER_ID'] : '') . '" />

		';// BEGIN tabs
$_tabs_count = (isset($this->_data['tabs.'])) ?  sizeof($this->_data['tabs.']) : 0;
if ($_tabs_count) {
for ($_tabs_i = 0; $_tabs_i < $_tabs_count; $_tabs_i++)
{
echo '
		<div id="fragment-' . ((isset($this->_data['tabs.'][$_tabs_i]['ID'])) ? $this->_data['tabs.'][$_tabs_i]['ID'] : '') . '">
			';// BEGIN fieldset
$_fieldset_count = (isset($this->_data['tabs.'][$_tabs_i]['fieldset.'])) ? sizeof($this->_data['tabs.'][$_tabs_i]['fieldset.']) : 0;
if ($_fieldset_count) {
for ($_fieldset_i = 0; $_fieldset_i < $_fieldset_count; $_fieldset_i++)
{
// IF tabs.fieldset.INFO
if ($this->_data['tabs.'][$_tabs_i]['fieldset.'][$_fieldset_i]['INFO']) { 
echo '
			<div class="bluebox roundbox">
				<div class="icon_info">' . ((isset($this->_data['tabs.'][$_tabs_i]['fieldset.'][$_fieldset_i]['INFO'])) ? $this->_data['tabs.'][$_tabs_i]['fieldset.'][$_fieldset_i]['INFO'] : '') . '</div>
			</div>

			';// ENDIF
}
echo '

			<fieldset class="settings">
				<legend>' . ((isset($this->_data['tabs.'][$_tabs_i]['fieldset.'][$_fieldset_i]['NAME'])) ? $this->_data['tabs.'][$_tabs_i]['fieldset.'][$_fieldset_i]['NAME'] : '') . '</legend>

				';// BEGIN field
$_field_count = (isset($this->_data['tabs.'][$_tabs_i]['fieldset.'][$_fieldset_i]['field.'])) ? sizeof($this->_data['tabs.'][$_tabs_i]['fieldset.'][$_fieldset_i]['field.']) : 0;
if ($_field_count) {
for ($_field_i = 0; $_field_i < $_field_count; $_field_i++)
{
echo '
				<dl>
					<dt><label>' . ((isset($this->_data['tabs.'][$_tabs_i]['fieldset.'][$_fieldset_i]['field.'][$_field_i]['NAME'])) ? $this->_data['tabs.'][$_tabs_i]['fieldset.'][$_fieldset_i]['field.'][$_field_i]['NAME'] : '') . '</label><br /><span>' . ((isset($this->_data['tabs.'][$_tabs_i]['fieldset.'][$_fieldset_i]['field.'][$_field_i]['HELP'])) ? $this->_data['tabs.'][$_tabs_i]['fieldset.'][$_fieldset_i]['field.'][$_field_i]['HELP'] : '') . '</span></dt>
					<dd>' . ((isset($this->_data['tabs.'][$_tabs_i]['fieldset.'][$_fieldset_i]['field.'][$_field_i]['FIELD'])) ? $this->_data['tabs.'][$_tabs_i]['fieldset.'][$_fieldset_i]['field.'][$_field_i]['FIELD'] : '') . '' . ((isset($this->_data['tabs.'][$_tabs_i]['fieldset.'][$_fieldset_i]['field.'][$_field_i]['TEXT'])) ? $this->_data['tabs.'][$_tabs_i]['fieldset.'][$_fieldset_i]['field.'][$_field_i]['TEXT'] : '') . '</dd>
				</dl>
				';}}
// END field
echo '
			</fieldset>
			';}}
// END fieldset
echo '
		</div>
		';}}
// END tabs
// BEGIN plugin_usersettings_div
$_plugin_usersettings_div_count = (isset($this->_data['plugin_usersettings_div.'])) ?  sizeof($this->_data['plugin_usersettings_div.']) : 0;
if ($_plugin_usersettings_div_count) {
for ($_plugin_usersettings_div_i = 0; $_plugin_usersettings_div_i < $_plugin_usersettings_div_count; $_plugin_usersettings_div_i++)
{
echo '
		<div id="' . ((isset($this->_data['plugin_usersettings_div.'][$_plugin_usersettings_div_i]['KEY'])) ? $this->_data['plugin_usersettings_div.'][$_plugin_usersettings_div_i]['KEY'] : '') . '">
			<fieldset class="settings">
				';// BEGIN plugin_usersettings
$_plugin_usersettings_count = (isset($this->_data['plugin_usersettings_div.'][$_plugin_usersettings_div_i]['plugin_usersettings.'])) ? sizeof($this->_data['plugin_usersettings_div.'][$_plugin_usersettings_div_i]['plugin_usersettings.']) : 0;
if ($_plugin_usersettings_count) {
for ($_plugin_usersettings_i = 0; $_plugin_usersettings_i < $_plugin_usersettings_count; $_plugin_usersettings_i++)
{
// IF plugin_usersettings_div.plugin_usersettings.S_TH
if ($this->_data['plugin_usersettings_div.'][$_plugin_usersettings_div_i]['plugin_usersettings.'][$_plugin_usersettings_i]['S_TH']) { 
echo '
						</fieldset><fieldset class="settings">
						<legend>' . ((isset($this->_data['plugin_usersettings_div.'][$_plugin_usersettings_div_i]['plugin_usersettings.'][$_plugin_usersettings_i]['NAME'])) ? $this->_data['plugin_usersettings_div.'][$_plugin_usersettings_div_i]['plugin_usersettings.'][$_plugin_usersettings_i]['NAME'] : '') . '</legend>
					';// ELSE
} else {
echo '
						<dl>
							<dt>
								<label>' . ((isset($this->_data['plugin_usersettings_div.'][$_plugin_usersettings_div_i]['plugin_usersettings.'][$_plugin_usersettings_i]['NAME'])) ? $this->_data['plugin_usersettings_div.'][$_plugin_usersettings_div_i]['plugin_usersettings.'][$_plugin_usersettings_i]['NAME'] : '') . '</label><br /><span>' . ((isset($this->_data['plugin_usersettings_div.'][$_plugin_usersettings_div_i]['plugin_usersettings.'][$_plugin_usersettings_i]['HELP'])) ? $this->_data['plugin_usersettings_div.'][$_plugin_usersettings_div_i]['plugin_usersettings.'][$_plugin_usersettings_i]['HELP'] : '') . '</span>
							</dt>
							<dd>' . ((isset($this->_data['plugin_usersettings_div.'][$_plugin_usersettings_div_i]['plugin_usersettings.'][$_plugin_usersettings_i]['FIELD'])) ? $this->_data['plugin_usersettings_div.'][$_plugin_usersettings_div_i]['plugin_usersettings.'][$_plugin_usersettings_i]['FIELD'] : '') . '</dd>
						</dl>
					';// ENDIF
}
}}
// END plugin_usersettings
echo '
			</fieldset>
		</div>
		';}}
// END plugin_usersettings_div
// IF S_SETTING_ADMIN
if ($this->_data['.'][0]['S_SETTING_ADMIN']) { 
echo '
		<div id="permissions">
			<div class="bluebox roundbox">
				<div class="icon_info"><input type="checkbox" checked="checked" disabled="disabled" />' . ((isset($this->_data['.'][0]['L_s_group_note'])) ? $this->_data['.'][0]['L_s_group_note'] : (($this->lang('s_group_note')) ? $this->lang('s_group_note') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 's_group_note'))) . '         }')) . '</div>
			</div>
			<fieldset class="settings">
				<legend>' . ((isset($this->_data['.'][0]['L_account_enabled'])) ? $this->_data['.'][0]['L_account_enabled'] : (($this->lang('account_enabled')) ? $this->lang('account_enabled') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'account_enabled'))) . '         }')) . '</legend>

				<dl>
					<dt><label>' . ((isset($this->_data['.'][0]['L_account_enabled'])) ? $this->_data['.'][0]['L_account_enabled'] : (($this->lang('account_enabled')) ? $this->lang('account_enabled') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'account_enabled'))) . '         }')) . '</label></dt>
					<dd>' . ((isset($this->_data['.'][0]['ACTIVE_RADIO'])) ? $this->_data['.'][0]['ACTIVE_RADIO'] : '') . '</dd>
				</dl>

			</fieldset>
			<fieldset class="settings">
				<legend>' . ((isset($this->_data['.'][0]['L_user_groups'])) ? $this->_data['.'][0]['L_user_groups'] : (($this->lang('user_groups')) ? $this->lang('user_groups') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'user_groups'))) . '         }')) . '</legend>

				<dl>
					<dt><label>' . ((isset($this->_data['.'][0]['L_user_groups'])) ? $this->_data['.'][0]['L_user_groups'] : (($this->lang('user_groups')) ? $this->lang('user_groups') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'user_groups'))) . '         }')) . '</label></dt>
					<dd>' . ((isset($this->_data['.'][0]['USER_GROUP_SELECT'])) ? $this->_data['.'][0]['USER_GROUP_SELECT'] : '') . '</dd>
				</dl>

			</fieldset>

						<div id="permission_tabs">
				<ul>
					<li><a href=\'#user_perms\'><span>' . ((isset($this->_data['.'][0]['L_user_permissions'])) ? $this->_data['.'][0]['L_user_permissions'] : (($this->lang('user_permissions')) ? $this->lang('user_permissions') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'user_permissions'))) . '         }')) . '</span></a></li>
					<li><a href=\'#admin_perms\'><span><img src="' . ((isset($this->_data['.'][0]['EQDKP_IMAGE_PATH'])) ? $this->_data['.'][0]['EQDKP_IMAGE_PATH'] : '') . 'global/admin_flag.png" alt="admin"/>' . ((isset($this->_data['.'][0]['L_admin_permissions'])) ? $this->_data['.'][0]['L_admin_permissions'] : (($this->lang('admin_permissions')) ? $this->lang('admin_permissions') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'admin_permissions'))) . '         }')) . '</span></a></li>
				</ul>

				<div id="user_perms">
					';// BEGIN u_permissions_row
$_u_permissions_row_count = (isset($this->_data['u_permissions_row.'])) ?  sizeof($this->_data['u_permissions_row.']) : 0;
if ($_u_permissions_row_count) {
for ($_u_permissions_row_i = 0; $_u_permissions_row_i < $_u_permissions_row_count; $_u_permissions_row_i++)
{
echo '
					<fieldset class="settings mediumsettings">
						<legend>' . ((isset($this->_data['u_permissions_row.'][$_u_permissions_row_i]['GROUP'])) ? $this->_data['u_permissions_row.'][$_u_permissions_row_i]['GROUP'] : '') . '</legend>
						';// BEGIN check_group
$_check_group_count = (isset($this->_data['u_permissions_row.'][$_u_permissions_row_i]['check_group.'])) ? sizeof($this->_data['u_permissions_row.'][$_u_permissions_row_i]['check_group.']) : 0;
if ($_check_group_count) {
for ($_check_group_i = 0; $_check_group_i < $_check_group_count; $_check_group_i++)
{
// IF not u_permissions_row.check_group.S_SUPERADMIN_PERM
if (! $this->_data['u_permissions_row.'][$_u_permissions_row_i]['check_group.'][$_check_group_i]['S_SUPERADMIN_PERM']) { 
echo '
						<div class="permissions">
							<label>
								';// IF u_permissions_row.check_group.S_IS_GROUP
if ($this->_data['u_permissions_row.'][$_u_permissions_row_i]['check_group.'][$_check_group_i]['S_IS_GROUP']) { 
echo '
								<input type="checkbox" name="' . ((isset($this->_data['u_permissions_row.'][$_u_permissions_row_i]['check_group.'][$_check_group_i]['CBNAME'])) ? $this->_data['u_permissions_row.'][$_u_permissions_row_i]['check_group.'][$_check_group_i]['CBNAME'] : '') . '" value="Y" ' . ((isset($this->_data['u_permissions_row.'][$_u_permissions_row_i]['check_group.'][$_check_group_i]['CBCHECKED'])) ? $this->_data['u_permissions_row.'][$_u_permissions_row_i]['check_group.'][$_check_group_i]['CBCHECKED'] : '') . ' disabled="disabled" class="changepermcolor" id="cb_' . ((isset($this->_data['u_permissions_row.'][$_u_permissions_row_i]['check_group.'][$_check_group_i]['CBNAME'])) ? $this->_data['u_permissions_row.'][$_u_permissions_row_i]['check_group.'][$_check_group_i]['CBNAME'] : '') . '" />
								';// ELSE
} else {
echo '
								<input type="checkbox" name="' . ((isset($this->_data['u_permissions_row.'][$_u_permissions_row_i]['check_group.'][$_check_group_i]['CBNAME'])) ? $this->_data['u_permissions_row.'][$_u_permissions_row_i]['check_group.'][$_check_group_i]['CBNAME'] : '') . '" value="Y" ' . ((isset($this->_data['u_permissions_row.'][$_u_permissions_row_i]['check_group.'][$_check_group_i]['CBCHECKED'])) ? $this->_data['u_permissions_row.'][$_u_permissions_row_i]['check_group.'][$_check_group_i]['CBCHECKED'] : '') . ' class="changepermcolor" id="cb_' . ((isset($this->_data['u_permissions_row.'][$_u_permissions_row_i]['check_group.'][$_check_group_i]['CBNAME'])) ? $this->_data['u_permissions_row.'][$_u_permissions_row_i]['check_group.'][$_check_group_i]['CBNAME'] : '') . '"/>
								';// ENDIF
}
echo '
								<span id="span_cb_' . ((isset($this->_data['u_permissions_row.'][$_u_permissions_row_i]['check_group.'][$_check_group_i]['CBNAME'])) ? $this->_data['u_permissions_row.'][$_u_permissions_row_i]['check_group.'][$_check_group_i]['CBNAME'] : '') . '" class="perm_text ' . ((isset($this->_data['u_permissions_row.'][$_u_permissions_row_i]['check_group.'][$_check_group_i]['CLASS'])) ? $this->_data['u_permissions_row.'][$_u_permissions_row_i]['check_group.'][$_check_group_i]['CLASS'] : '') . '">' . ((isset($this->_data['u_permissions_row.'][$_u_permissions_row_i]['check_group.'][$_check_group_i]['TEXT'])) ? $this->_data['u_permissions_row.'][$_u_permissions_row_i]['check_group.'][$_check_group_i]['TEXT'] : '') . '</span>
							</label>
						</div>
						';// ENDIF
}
}}
// END check_group
echo '
					</fieldset>
					';}}
// END u_permissions_row
echo '
				</div>

				<div id="admin_perms">
					';// BEGIN a_permissions_row
$_a_permissions_row_count = (isset($this->_data['a_permissions_row.'])) ?  sizeof($this->_data['a_permissions_row.']) : 0;
if ($_a_permissions_row_count) {
for ($_a_permissions_row_i = 0; $_a_permissions_row_i < $_a_permissions_row_count; $_a_permissions_row_i++)
{
echo '
					<fieldset class="settings mediumsettings">
						<legend>' . ((isset($this->_data['a_permissions_row.'][$_a_permissions_row_i]['GROUP'])) ? $this->_data['a_permissions_row.'][$_a_permissions_row_i]['GROUP'] : '') . '</legend>
						';// BEGIN check_group
$_check_group_count = (isset($this->_data['a_permissions_row.'][$_a_permissions_row_i]['check_group.'])) ? sizeof($this->_data['a_permissions_row.'][$_a_permissions_row_i]['check_group.']) : 0;
if ($_check_group_count) {
for ($_check_group_i = 0; $_check_group_i < $_check_group_count; $_check_group_i++)
{
echo '
						<div class="permissions">
							<label>
								';// IF a_permissions_row.check_group.S_IS_GROUP
if ($this->_data['a_permissions_row.'][$_a_permissions_row_i]['check_group.'][$_check_group_i]['S_IS_GROUP']) { 
echo '
								<input type="checkbox" name="' . ((isset($this->_data['a_permissions_row.'][$_a_permissions_row_i]['check_group.'][$_check_group_i]['CBNAME'])) ? $this->_data['a_permissions_row.'][$_a_permissions_row_i]['check_group.'][$_check_group_i]['CBNAME'] : '') . '" value="Y" ' . ((isset($this->_data['a_permissions_row.'][$_a_permissions_row_i]['check_group.'][$_check_group_i]['CBCHECKED'])) ? $this->_data['a_permissions_row.'][$_a_permissions_row_i]['check_group.'][$_check_group_i]['CBCHECKED'] : '') . ' disabled="disabled" class="changepermcolor" id="cb_' . ((isset($this->_data['a_permissions_row.'][$_a_permissions_row_i]['check_group.'][$_check_group_i]['CBNAME'])) ? $this->_data['a_permissions_row.'][$_a_permissions_row_i]['check_group.'][$_check_group_i]['CBNAME'] : '') . '" />
								';// ELSE
} else {
echo '
								<input type="checkbox" name="' . ((isset($this->_data['a_permissions_row.'][$_a_permissions_row_i]['check_group.'][$_check_group_i]['CBNAME'])) ? $this->_data['a_permissions_row.'][$_a_permissions_row_i]['check_group.'][$_check_group_i]['CBNAME'] : '') . '" value="Y" ' . ((isset($this->_data['a_permissions_row.'][$_a_permissions_row_i]['check_group.'][$_check_group_i]['CBCHECKED'])) ? $this->_data['a_permissions_row.'][$_a_permissions_row_i]['check_group.'][$_check_group_i]['CBCHECKED'] : '') . ' class="changepermcolor" id="cb_' . ((isset($this->_data['a_permissions_row.'][$_a_permissions_row_i]['check_group.'][$_check_group_i]['CBNAME'])) ? $this->_data['a_permissions_row.'][$_a_permissions_row_i]['check_group.'][$_check_group_i]['CBNAME'] : '') . '"/>
								';// ENDIF
}
echo '
								<span id="span_cb_' . ((isset($this->_data['a_permissions_row.'][$_a_permissions_row_i]['check_group.'][$_check_group_i]['CBNAME'])) ? $this->_data['a_permissions_row.'][$_a_permissions_row_i]['check_group.'][$_check_group_i]['CBNAME'] : '') . '" class="perm_text ' . ((isset($this->_data['a_permissions_row.'][$_a_permissions_row_i]['check_group.'][$_check_group_i]['CLASS'])) ? $this->_data['a_permissions_row.'][$_a_permissions_row_i]['check_group.'][$_check_group_i]['CLASS'] : '') . '">' . ((isset($this->_data['a_permissions_row.'][$_a_permissions_row_i]['check_group.'][$_check_group_i]['TEXT'])) ? $this->_data['a_permissions_row.'][$_a_permissions_row_i]['check_group.'][$_check_group_i]['TEXT'] : '') . '</span>
							</label>
						</div>
						';}}
// END check_group
echo '
					</fieldset>
					';}}
// END a_permissions_row
echo '
				</div>

			</div>

		</div>

		';// IF S_MU_TABLE
if ($this->_data['.'][0]['S_MU_TABLE']) { 
echo '
		<div id="members">
			<fieldset class="settings">
				<legend>' . ((isset($this->_data['.'][0]['L_associated_members'])) ? $this->_data['.'][0]['L_associated_members'] : (($this->lang('associated_members')) ? $this->lang('associated_members') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'associated_members'))) . '         }')) . '</legend>

				<dl>
					<dt>
						<label>' . ((isset($this->_data['.'][0]['L_associated_members'])) ? $this->_data['.'][0]['L_associated_members'] : (($this->lang('associated_members')) ? $this->lang('associated_members') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'associated_members'))) . '         }')) . '</label><br />
					</dt>
					<dd>
						' . ((isset($this->_data['.'][0]['JS_CONNECTIONS'])) ? $this->_data['.'][0]['JS_CONNECTIONS'] : '') . ' ' . ((isset($this->_data['.'][0]['FV_MEMBER_ID'])) ? $this->_data['.'][0]['FV_MEMBER_ID'] : '') . '
					</dd>
				</dl>
			</fieldset>
		</div>
		';// ENDIF
}
// ENDIF
}
echo '
	</div>
		<div class="contentFooter">
			<input type="submit" name="submit" value="' . ((isset($this->_data['.'][0]['L_uc_connectme'])) ? $this->_data['.'][0]['L_uc_connectme'] : (($this->lang('uc_connectme')) ? $this->lang('uc_connectme') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'uc_connectme'))) . '         }')) . '" class="mainoption bi_ok" />
			<input type="reset" name="reset" value="' . ((isset($this->_data['.'][0]['L_reset'])) ? $this->_data['.'][0]['L_reset'] : (($this->lang('reset')) ? $this->lang('reset') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'reset'))) . '         }')) . '" class="liteoption bi_reset" />
			';// IF S_SETTING_ADMIN
if ($this->_data['.'][0]['S_SETTING_ADMIN']) { 
echo '
			<input type="submit" name="" value="' . ((isset($this->_data['.'][0]['L_back'])) ? $this->_data['.'][0]['L_back'] : (($this->lang('back')) ? $this->lang('back') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'back'))) . '         }')) . '" class="mainoption bi_back" />
			';// IF not S_PROTECT_USER
if (! $this->_data['.'][0]['S_PROTECT_USER']) { 
echo '
			<input type="button" name="del" value="' . ((isset($this->_data['.'][0]['L_delete'])) ? $this->_data['.'][0]['L_delete'] : (($this->lang('delete')) ? $this->lang('delete') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'delete'))) . '         }')) . '" class="liteoption bi_delete ignore_validation" onclick="delete_warning(' . ((isset($this->_data['.'][0]['USER_ID'])) ? $this->_data['.'][0]['USER_ID'] : '') . ');" id="delete123_button" />
			';// ENDIF
}
// ENDIF
}
echo '
		</div>
	</div>

	' . ((isset($this->_data['.'][0]['HIDDEN_FIELDS'])) ? $this->_data['.'][0]['HIDDEN_FIELDS'] : '') . '
	' . ((isset($this->_data['.'][0]['CSRF_TOKEN'])) ? $this->_data['.'][0]['CSRF_TOKEN'] : '') . '
</form>
';// IF S_SETTING_ADMIN
if ($this->_data['.'][0]['S_SETTING_ADMIN']) { 
echo '' . ((isset($this->_data['.'][0]['JS_TAB_SELECT'])) ? $this->_data['.'][0]['JS_TAB_SELECT'] : '') . '';// ENDIF
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