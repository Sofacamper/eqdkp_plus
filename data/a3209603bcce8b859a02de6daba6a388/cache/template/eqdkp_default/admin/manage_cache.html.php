<?php
if ($this->security()) {
// IF S_NO_HEADER_FOOTER
if ($this->_data['.'][0]['S_NO_HEADER_FOOTER']) { 
echo '
	<form method="post" action="' . ((isset($this->_data['.'][0]['ACTION'])) ? $this->_data['.'][0]['ACTION'] : '') . '" name="post">
<fieldset class="settings">
	<legend>' . ((isset($this->_data['.'][0]['L_pdc_settings'])) ? $this->_data['.'][0]['L_pdc_settings'] : (($this->lang('pdc_settings')) ? $this->lang('pdc_settings') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_settings'))) . '         }')) . '</legend>
	<dl>
		<dt>
			<label>' . ((isset($this->_data['.'][0]['L_pdc_cache_select_text'])) ? $this->_data['.'][0]['L_pdc_cache_select_text'] : (($this->lang('pdc_cache_select_text')) ? $this->lang('pdc_cache_select_text') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_cache_select_text'))) . '         }')) . '</label><br />
			<span>' . ((isset($this->_data['.'][0]['L_pdc_cache_select_info'])) ? $this->_data['.'][0]['L_pdc_cache_select_info'] : (($this->lang('pdc_cache_select_info')) ? $this->lang('pdc_cache_select_info') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_cache_select_info'))) . '         }')) . '</span>
		</dt>
		<dd>
			<label>
				<select name="cache_selection" class="input" id="cache_select">
					';// BEGIN cache_selection_row
$_cache_selection_row_count = (isset($this->_data['cache_selection_row.'])) ?  sizeof($this->_data['cache_selection_row.']) : 0;
if ($_cache_selection_row_count) {
for ($_cache_selection_row_i = 0; $_cache_selection_row_i < $_cache_selection_row_count; $_cache_selection_row_i++)
{
echo '
					<option value="' . ((isset($this->_data['cache_selection_row.'][$_cache_selection_row_i]['VALUE'])) ? $this->_data['cache_selection_row.'][$_cache_selection_row_i]['VALUE'] : '') . '"' . ((isset($this->_data['cache_selection_row.'][$_cache_selection_row_i]['SELECTED'])) ? $this->_data['cache_selection_row.'][$_cache_selection_row_i]['SELECTED'] : '') . '>' . ((isset($this->_data['cache_selection_row.'][$_cache_selection_row_i]['OPTION'])) ? $this->_data['cache_selection_row.'][$_cache_selection_row_i]['OPTION'] : '') . '</option>
					';}}
// END cache_selection_row
echo '
				</select>
			</label>
		</dd>
	</dl>
	<div id="all_cache_divs">
	<div id="div_cache_none" style="display:' . ((isset($this->_data['.'][0]['DIV_CACHE_NONE_VISIBLE'])) ? $this->_data['.'][0]['DIV_CACHE_NONE_VISIBLE'] : '') . '">
		<div class="errorbox roundbox">
			<div class="icon_false">' . ((isset($this->_data['.'][0]['L_pdc_cache_info_none'])) ? $this->_data['.'][0]['L_pdc_cache_info_none'] : (($this->lang('pdc_cache_info_none')) ? $this->lang('pdc_cache_info_none') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_cache_info_none'))) . '         }')) . '</div>
		</div>
	</div>

	<div id="div_cache_file" style="display:' . ((isset($this->_data['.'][0]['DIV_CACHE_FILE_VISIBLE'])) ? $this->_data['.'][0]['DIV_CACHE_FILE_VISIBLE'] : '') . '">
		<div class="bluebox roundbox">
			<div class="icon_info">' . ((isset($this->_data['.'][0]['L_pdc_cache_info_file'])) ? $this->_data['.'][0]['L_pdc_cache_info_file'] : (($this->lang('pdc_cache_info_file')) ? $this->lang('pdc_cache_info_file') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_cache_info_file'))) . '         }')) . '</div>
		</div>
		<br />
		<dl>
			<dt><label>' . ((isset($this->_data['.'][0]['L_pdc_dttl_text'])) ? $this->_data['.'][0]['L_pdc_dttl_text'] : (($this->lang('pdc_dttl_text')) ? $this->lang('pdc_dttl_text') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_dttl_text'))) . '         }')) . '</label><br /><span>' . ((isset($this->_data['.'][0]['L_pdc_dttl_help'])) ? $this->_data['.'][0]['L_pdc_dttl_help'] : (($this->lang('pdc_dttl_help')) ? $this->lang('pdc_dttl_help') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_dttl_help'))) . '         }')) . '</span></dt>
			<dd><label><input type=\'text\' name=\'cache_file[dttl]\' size=\'32\' value="' . ((isset($this->_data['.'][0]['V_CACHE_FILE_DTTL'])) ? $this->_data['.'][0]['V_CACHE_FILE_DTTL'] : '') . '" class=\'input\' /></label></dd>
		</dl>
		<dl>
			<dt><label>' . ((isset($this->_data['.'][0]['L_pdc_globalprefix'])) ? $this->_data['.'][0]['L_pdc_globalprefix'] : (($this->lang('pdc_globalprefix')) ? $this->lang('pdc_globalprefix') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_globalprefix'))) . '         }')) . '</label><br /><span>' . ((isset($this->_data['.'][0]['L_pdc_globalprefix_help'])) ? $this->_data['.'][0]['L_pdc_globalprefix_help'] : (($this->lang('pdc_globalprefix_help')) ? $this->lang('pdc_globalprefix_help') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_globalprefix_help'))) . '         }')) . '</span></dt>
			<dd><label><input type=\'text\' name=\'cache_file[prefix]\' size=\'32\' value="' . ((isset($this->_data['.'][0]['V_CACHE_FILE_PREFIX'])) ? $this->_data['.'][0]['V_CACHE_FILE_PREFIX'] : '') . '" class=\'input\' /></label></dd>
		</dl>
	</div>

	<div id="div_cache_xcache" style="display:' . ((isset($this->_data['.'][0]['DIV_CACHE_XCACHE_VISIBLE'])) ? $this->_data['.'][0]['DIV_CACHE_XCACHE_VISIBLE'] : '') . '">
		<div class="bluebox roundbox">
			<div class="icon_info">' . ((isset($this->_data['.'][0]['L_pdc_cache_info_xcache'])) ? $this->_data['.'][0]['L_pdc_cache_info_xcache'] : (($this->lang('pdc_cache_info_xcache')) ? $this->lang('pdc_cache_info_xcache') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_cache_info_xcache'))) . '         }')) . '</div>
		</div>
		<br />
		<dl>
			<dt><label>' . ((isset($this->_data['.'][0]['L_pdc_dttl_text'])) ? $this->_data['.'][0]['L_pdc_dttl_text'] : (($this->lang('pdc_dttl_text')) ? $this->lang('pdc_dttl_text') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_dttl_text'))) . '         }')) . '</label><br /><span>' . ((isset($this->_data['.'][0]['L_pdc_dttl_help'])) ? $this->_data['.'][0]['L_pdc_dttl_help'] : (($this->lang('pdc_dttl_help')) ? $this->lang('pdc_dttl_help') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_dttl_help'))) . '         }')) . '</span></dt>
			<dd><label><input type=\'text\' name=\'cache_xcache[dttl]\' size=\'32\' value="' . ((isset($this->_data['.'][0]['V_CACHE_XCACHE_DTTL'])) ? $this->_data['.'][0]['V_CACHE_XCACHE_DTTL'] : '') . '" class=\'input\' /></label></dd>
		</dl>
		<dl>
			<dt><label>' . ((isset($this->_data['.'][0]['L_pdc_globalprefix'])) ? $this->_data['.'][0]['L_pdc_globalprefix'] : (($this->lang('pdc_globalprefix')) ? $this->lang('pdc_globalprefix') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_globalprefix'))) . '         }')) . '</label><br /><span>' . ((isset($this->_data['.'][0]['L_pdc_globalprefix_help'])) ? $this->_data['.'][0]['L_pdc_globalprefix_help'] : (($this->lang('pdc_globalprefix_help')) ? $this->lang('pdc_globalprefix_help') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_globalprefix_help'))) . '         }')) . '</span></dt>
			<dd><label><input type=\'text\' name=\'cache_xcache[prefix]\' size=\'32\' value="' . ((isset($this->_data['.'][0]['V_CACHE_XCACHE_PREFIX'])) ? $this->_data['.'][0]['V_CACHE_XCACHE_PREFIX'] : '') . '" class=\'input\' /></label></dd>
		</dl>
	</div>
	<div id="div_cache_apc" style="display:' . ((isset($this->_data['.'][0]['DIV_CACHE_APC_VISIBLE'])) ? $this->_data['.'][0]['DIV_CACHE_APC_VISIBLE'] : '') . '">
		<div class="bluebox roundbox">
			<div class="icon_info">' . ((isset($this->_data['.'][0]['L_pdc_cache_info_apc'])) ? $this->_data['.'][0]['L_pdc_cache_info_apc'] : (($this->lang('pdc_cache_info_apc')) ? $this->lang('pdc_cache_info_apc') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_cache_info_apc'))) . '         }')) . '</div>
		</div>
		<br />
		<dl>
			<dt><label>' . ((isset($this->_data['.'][0]['L_pdc_dttl_text'])) ? $this->_data['.'][0]['L_pdc_dttl_text'] : (($this->lang('pdc_dttl_text')) ? $this->lang('pdc_dttl_text') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_dttl_text'))) . '         }')) . '</label><br /><span>' . ((isset($this->_data['.'][0]['L_pdc_dttl_help'])) ? $this->_data['.'][0]['L_pdc_dttl_help'] : (($this->lang('pdc_dttl_help')) ? $this->lang('pdc_dttl_help') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_dttl_help'))) . '         }')) . '</span></dt>
			<dd><label><input type=\'text\' name=\'cache_apc[dttl]\' size=\'32\' value="' . ((isset($this->_data['.'][0]['V_CACHE_APC_DTTL'])) ? $this->_data['.'][0]['V_CACHE_APC_DTTL'] : '') . '" class=\'input\' /></label></dd>
		</dl>
		<dl>
			<dt><label>' . ((isset($this->_data['.'][0]['L_pdc_globalprefix'])) ? $this->_data['.'][0]['L_pdc_globalprefix'] : (($this->lang('pdc_globalprefix')) ? $this->lang('pdc_globalprefix') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_globalprefix'))) . '         }')) . '</label><br /><span>' . ((isset($this->_data['.'][0]['L_pdc_globalprefix_help'])) ? $this->_data['.'][0]['L_pdc_globalprefix_help'] : (($this->lang('pdc_globalprefix_help')) ? $this->lang('pdc_globalprefix_help') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_globalprefix_help'))) . '         }')) . '</span></dt>
			<dd><label><input type=\'text\' name=\'cache_apc[prefix]\' size=\'32\' value="' . ((isset($this->_data['.'][0]['V_CACHE_APC_PREFIX'])) ? $this->_data['.'][0]['V_CACHE_APC_PREFIX'] : '') . '" class=\'input\' /></label></dd>
		</dl>
	</div>
	<div id="div_cache_memcache" style="display:' . ((isset($this->_data['.'][0]['DIV_CACHE_MEMCACHE_VISIBLE'])) ? $this->_data['.'][0]['DIV_CACHE_MEMCACHE_VISIBLE'] : '') . '">
		<div class="bluebox roundbox">
			<div class="icon_info">' . ((isset($this->_data['.'][0]['L_pdc_cache_info_memcache'])) ? $this->_data['.'][0]['L_pdc_cache_info_memcache'] : (($this->lang('pdc_cache_info_memcache')) ? $this->lang('pdc_cache_info_memcache') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_cache_info_memcache'))) . '         }')) . '</div>
		</div>
		<br />
		<dl>
			<dt><label>' . ((isset($this->_data['.'][0]['L_pdc_dttl_text'])) ? $this->_data['.'][0]['L_pdc_dttl_text'] : (($this->lang('pdc_dttl_text')) ? $this->lang('pdc_dttl_text') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_dttl_text'))) . '         }')) . '</label><br /><span>' . ((isset($this->_data['.'][0]['L_pdc_dttl_help'])) ? $this->_data['.'][0]['L_pdc_dttl_help'] : (($this->lang('pdc_dttl_help')) ? $this->lang('pdc_dttl_help') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_dttl_help'))) . '         }')) . '</span></dt>
			<dd><label><input type=\'text\' name=\'cache_memcache[dttl]\' size=\'32\' value="' . ((isset($this->_data['.'][0]['V_CACHE_MEMCACHE_DTTL'])) ? $this->_data['.'][0]['V_CACHE_MEMCACHE_DTTL'] : '') . '" class=\'input\' /></label></dd>
		</dl>
		<dl>
			<dt><label>' . ((isset($this->_data['.'][0]['L_pdc_globalprefix'])) ? $this->_data['.'][0]['L_pdc_globalprefix'] : (($this->lang('pdc_globalprefix')) ? $this->lang('pdc_globalprefix') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_globalprefix'))) . '         }')) . '</label><br /><span>' . ((isset($this->_data['.'][0]['L_pdc_globalprefix_help'])) ? $this->_data['.'][0]['L_pdc_globalprefix_help'] : (($this->lang('pdc_globalprefix_help')) ? $this->lang('pdc_globalprefix_help') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_globalprefix_help'))) . '         }')) . '</span></dt>
			<dd><label><input type=\'text\' name=\'cache_memcache[prefix]\' size=\'32\' value="' . ((isset($this->_data['.'][0]['V_CACHE_MEMCACHE_PREFIX'])) ? $this->_data['.'][0]['V_CACHE_MEMCACHE_PREFIX'] : '') . '" class=\'input\' /></label></dd>
		</dl>
		<dl>
			<dt><label>' . ((isset($this->_data['.'][0]['L_pdc_memcache_server_text'])) ? $this->_data['.'][0]['L_pdc_memcache_server_text'] : (($this->lang('pdc_memcache_server_text')) ? $this->lang('pdc_memcache_server_text') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_memcache_server_text'))) . '         }')) . '</label><br /><span>' . ((isset($this->_data['.'][0]['L_pdc_memcache_server_help'])) ? $this->_data['.'][0]['L_pdc_memcache_server_help'] : (($this->lang('pdc_memcache_server_help')) ? $this->lang('pdc_memcache_server_help') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_memcache_server_help'))) . '         }')) . '</span></dt>
			<dd><label><input type=\'text\' name=\'cache_memcache[server]\' size=\'32\' value="' . ((isset($this->_data['.'][0]['V_CACHE_MEMCACHE_SERVER'])) ? $this->_data['.'][0]['V_CACHE_MEMCACHE_SERVER'] : '') . '" class=\'input\' /></label></dd>
		</dl>
		<dl>
			<dt><label>' . ((isset($this->_data['.'][0]['L_pdc_memcache_port_text'])) ? $this->_data['.'][0]['L_pdc_memcache_port_text'] : (($this->lang('pdc_memcache_port_text')) ? $this->lang('pdc_memcache_port_text') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_memcache_port_text'))) . '         }')) . '</label><br /><span>' . ((isset($this->_data['.'][0]['pdc_memcache_port_help'])) ? $this->_data['.'][0]['pdc_memcache_port_help'] : '') . '</span></dt>
			<dd><label><input type=\'text\' name=\'cache_memcache[port]\' size=\'32\' value="' . ((isset($this->_data['.'][0]['V_CACHE_MEMCACHE_PORT'])) ? $this->_data['.'][0]['V_CACHE_MEMCACHE_PORT'] : '') . '" class=\'input\' /></label></dd>
		</dl>
	</div>
	</div>
	<br />
	<div align=\'center\'>
		<input type="submit" name="cache_save" value="' . ((isset($this->_data['.'][0]['L_save'])) ? $this->_data['.'][0]['L_save'] : (($this->lang('save')) ? $this->lang('save') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'save'))) . '         }')) . '" class="mainoption bi_ok" />
	</div>
</fieldset>

';// IF PDC_CACHE_ENABLED
if ($this->_data['.'][0]['PDC_CACHE_ENABLED']) { 
echo '
<fieldset class="settings">
	<legend>' . ((isset($this->_data['.'][0]['L_pdc_table'])) ? $this->_data['.'][0]['L_pdc_table'] : (($this->lang('pdc_table')) ? $this->lang('pdc_table') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_table'))) . '         }')) . '</legend>
	<div class="bluebox roundbox">
		<div class="icon_info">' . ((isset($this->_data['.'][0]['L_CACHE_TABLE_INFO'])) ? $this->_data['.'][0]['L_CACHE_TABLE_INFO'] : (($this->lang('CACHE_TABLE_INFO')) ? $this->lang('CACHE_TABLE_INFO') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CACHE_TABLE_INFO'))) . '         }')) . '</div>
	</div>
	<br />
	<table width="100%" border="0" cellspacing="1" cellpadding="2" class="colorswitch hoverrows">
		<tr>
			<th>' . ((isset($this->_data['.'][0]['L_pdc_globalprefix'])) ? $this->_data['.'][0]['L_pdc_globalprefix'] : (($this->lang('pdc_globalprefix')) ? $this->lang('pdc_globalprefix') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_globalprefix'))) . '         }')) . '</th>
			<th>' . ((isset($this->_data['.'][0]['L_pdc_entity'])) ? $this->_data['.'][0]['L_pdc_entity'] : (($this->lang('pdc_entity')) ? $this->lang('pdc_entity') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_entity'))) . '         }')) . '</th>
			<th>' . ((isset($this->_data['.'][0]['L_pdc_status'])) ? $this->_data['.'][0]['L_pdc_status'] : (($this->lang('pdc_status')) ? $this->lang('pdc_status') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_status'))) . '         }')) . '</th>
		</tr>
		';// BEGIN cache_entity_list_row
$_cache_entity_list_row_count = (isset($this->_data['cache_entity_list_row.'])) ?  sizeof($this->_data['cache_entity_list_row.']) : 0;
if ($_cache_entity_list_row_count) {
for ($_cache_entity_list_row_i = 0; $_cache_entity_list_row_i < $_cache_entity_list_row_count; $_cache_entity_list_row_i++)
{
echo '
		<tr>
			<td>' . ((isset($this->_data['cache_entity_list_row.'][$_cache_entity_list_row_i]['GLOBAL_PREFIX'])) ? $this->_data['cache_entity_list_row.'][$_cache_entity_list_row_i]['GLOBAL_PREFIX'] : '') . '</td>
			<td>' . ((isset($this->_data['cache_entity_list_row.'][$_cache_entity_list_row_i]['KEY'])) ? $this->_data['cache_entity_list_row.'][$_cache_entity_list_row_i]['KEY'] : '') . '</td>
			<td>' . ((isset($this->_data['cache_entity_list_row.'][$_cache_entity_list_row_i]['EXPIRED'])) ? $this->_data['cache_entity_list_row.'][$_cache_entity_list_row_i]['EXPIRED'] : '') . '</td>
		</tr>
		';}}
// END cache_entity_list_row
echo '
	</table>
	<br />
	<div align=\'center\'>
		<input type="submit" name="cache_clear" value="' . ((isset($this->_data['.'][0]['L_pdc_clear'])) ? $this->_data['.'][0]['L_pdc_clear'] : (($this->lang('pdc_clear')) ? $this->lang('pdc_clear') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_clear'))) . '         }')) . '" class="mainoption bi_delete" />
		<input type="submit" name="cache_cleanup" value="' . ((isset($this->_data['.'][0]['L_pdc_cleanup'])) ? $this->_data['.'][0]['L_pdc_cleanup'] : (($this->lang('pdc_cleanup')) ? $this->lang('pdc_cleanup') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_cleanup'))) . '         }')) . '" class="mainoption bi_reset" />
	</div>
</fieldset>
';// ENDIF
}
echo '
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
<fieldset class="settings">
	<legend>' . ((isset($this->_data['.'][0]['L_pdc_settings'])) ? $this->_data['.'][0]['L_pdc_settings'] : (($this->lang('pdc_settings')) ? $this->lang('pdc_settings') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_settings'))) . '         }')) . '</legend>
	<dl>
		<dt>
			<label>' . ((isset($this->_data['.'][0]['L_pdc_cache_select_text'])) ? $this->_data['.'][0]['L_pdc_cache_select_text'] : (($this->lang('pdc_cache_select_text')) ? $this->lang('pdc_cache_select_text') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_cache_select_text'))) . '         }')) . '</label><br />
			<span>' . ((isset($this->_data['.'][0]['L_pdc_cache_select_info'])) ? $this->_data['.'][0]['L_pdc_cache_select_info'] : (($this->lang('pdc_cache_select_info')) ? $this->lang('pdc_cache_select_info') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_cache_select_info'))) . '         }')) . '</span>
		</dt>
		<dd>
			<label>
				<select name="cache_selection" class="input" id="cache_select">
					';// BEGIN cache_selection_row
$_cache_selection_row_count = (isset($this->_data['cache_selection_row.'])) ?  sizeof($this->_data['cache_selection_row.']) : 0;
if ($_cache_selection_row_count) {
for ($_cache_selection_row_i = 0; $_cache_selection_row_i < $_cache_selection_row_count; $_cache_selection_row_i++)
{
echo '
					<option value="' . ((isset($this->_data['cache_selection_row.'][$_cache_selection_row_i]['VALUE'])) ? $this->_data['cache_selection_row.'][$_cache_selection_row_i]['VALUE'] : '') . '"' . ((isset($this->_data['cache_selection_row.'][$_cache_selection_row_i]['SELECTED'])) ? $this->_data['cache_selection_row.'][$_cache_selection_row_i]['SELECTED'] : '') . '>' . ((isset($this->_data['cache_selection_row.'][$_cache_selection_row_i]['OPTION'])) ? $this->_data['cache_selection_row.'][$_cache_selection_row_i]['OPTION'] : '') . '</option>
					';}}
// END cache_selection_row
echo '
				</select>
			</label>
		</dd>
	</dl>
	<div id="all_cache_divs">
	<div id="div_cache_none" style="display:' . ((isset($this->_data['.'][0]['DIV_CACHE_NONE_VISIBLE'])) ? $this->_data['.'][0]['DIV_CACHE_NONE_VISIBLE'] : '') . '">
		<div class="errorbox roundbox">
			<div class="icon_false">' . ((isset($this->_data['.'][0]['L_pdc_cache_info_none'])) ? $this->_data['.'][0]['L_pdc_cache_info_none'] : (($this->lang('pdc_cache_info_none')) ? $this->lang('pdc_cache_info_none') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_cache_info_none'))) . '         }')) . '</div>
		</div>
	</div>

	<div id="div_cache_file" style="display:' . ((isset($this->_data['.'][0]['DIV_CACHE_FILE_VISIBLE'])) ? $this->_data['.'][0]['DIV_CACHE_FILE_VISIBLE'] : '') . '">
		<div class="bluebox roundbox">
			<div class="icon_info">' . ((isset($this->_data['.'][0]['L_pdc_cache_info_file'])) ? $this->_data['.'][0]['L_pdc_cache_info_file'] : (($this->lang('pdc_cache_info_file')) ? $this->lang('pdc_cache_info_file') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_cache_info_file'))) . '         }')) . '</div>
		</div>
		<br />
		<dl>
			<dt><label>' . ((isset($this->_data['.'][0]['L_pdc_dttl_text'])) ? $this->_data['.'][0]['L_pdc_dttl_text'] : (($this->lang('pdc_dttl_text')) ? $this->lang('pdc_dttl_text') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_dttl_text'))) . '         }')) . '</label><br /><span>' . ((isset($this->_data['.'][0]['L_pdc_dttl_help'])) ? $this->_data['.'][0]['L_pdc_dttl_help'] : (($this->lang('pdc_dttl_help')) ? $this->lang('pdc_dttl_help') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_dttl_help'))) . '         }')) . '</span></dt>
			<dd><label><input type=\'text\' name=\'cache_file[dttl]\' size=\'32\' value="' . ((isset($this->_data['.'][0]['V_CACHE_FILE_DTTL'])) ? $this->_data['.'][0]['V_CACHE_FILE_DTTL'] : '') . '" class=\'input\' /></label></dd>
		</dl>
		<dl>
			<dt><label>' . ((isset($this->_data['.'][0]['L_pdc_globalprefix'])) ? $this->_data['.'][0]['L_pdc_globalprefix'] : (($this->lang('pdc_globalprefix')) ? $this->lang('pdc_globalprefix') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_globalprefix'))) . '         }')) . '</label><br /><span>' . ((isset($this->_data['.'][0]['L_pdc_globalprefix_help'])) ? $this->_data['.'][0]['L_pdc_globalprefix_help'] : (($this->lang('pdc_globalprefix_help')) ? $this->lang('pdc_globalprefix_help') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_globalprefix_help'))) . '         }')) . '</span></dt>
			<dd><label><input type=\'text\' name=\'cache_file[prefix]\' size=\'32\' value="' . ((isset($this->_data['.'][0]['V_CACHE_FILE_PREFIX'])) ? $this->_data['.'][0]['V_CACHE_FILE_PREFIX'] : '') . '" class=\'input\' /></label></dd>
		</dl>
	</div>

	<div id="div_cache_xcache" style="display:' . ((isset($this->_data['.'][0]['DIV_CACHE_XCACHE_VISIBLE'])) ? $this->_data['.'][0]['DIV_CACHE_XCACHE_VISIBLE'] : '') . '">
		<div class="bluebox roundbox">
			<div class="icon_info">' . ((isset($this->_data['.'][0]['L_pdc_cache_info_xcache'])) ? $this->_data['.'][0]['L_pdc_cache_info_xcache'] : (($this->lang('pdc_cache_info_xcache')) ? $this->lang('pdc_cache_info_xcache') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_cache_info_xcache'))) . '         }')) . '</div>
		</div>
		<br />
		<dl>
			<dt><label>' . ((isset($this->_data['.'][0]['L_pdc_dttl_text'])) ? $this->_data['.'][0]['L_pdc_dttl_text'] : (($this->lang('pdc_dttl_text')) ? $this->lang('pdc_dttl_text') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_dttl_text'))) . '         }')) . '</label><br /><span>' . ((isset($this->_data['.'][0]['L_pdc_dttl_help'])) ? $this->_data['.'][0]['L_pdc_dttl_help'] : (($this->lang('pdc_dttl_help')) ? $this->lang('pdc_dttl_help') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_dttl_help'))) . '         }')) . '</span></dt>
			<dd><label><input type=\'text\' name=\'cache_xcache[dttl]\' size=\'32\' value="' . ((isset($this->_data['.'][0]['V_CACHE_XCACHE_DTTL'])) ? $this->_data['.'][0]['V_CACHE_XCACHE_DTTL'] : '') . '" class=\'input\' /></label></dd>
		</dl>
		<dl>
			<dt><label>' . ((isset($this->_data['.'][0]['L_pdc_globalprefix'])) ? $this->_data['.'][0]['L_pdc_globalprefix'] : (($this->lang('pdc_globalprefix')) ? $this->lang('pdc_globalprefix') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_globalprefix'))) . '         }')) . '</label><br /><span>' . ((isset($this->_data['.'][0]['L_pdc_globalprefix_help'])) ? $this->_data['.'][0]['L_pdc_globalprefix_help'] : (($this->lang('pdc_globalprefix_help')) ? $this->lang('pdc_globalprefix_help') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_globalprefix_help'))) . '         }')) . '</span></dt>
			<dd><label><input type=\'text\' name=\'cache_xcache[prefix]\' size=\'32\' value="' . ((isset($this->_data['.'][0]['V_CACHE_XCACHE_PREFIX'])) ? $this->_data['.'][0]['V_CACHE_XCACHE_PREFIX'] : '') . '" class=\'input\' /></label></dd>
		</dl>
	</div>
	<div id="div_cache_apc" style="display:' . ((isset($this->_data['.'][0]['DIV_CACHE_APC_VISIBLE'])) ? $this->_data['.'][0]['DIV_CACHE_APC_VISIBLE'] : '') . '">
		<div class="bluebox roundbox">
			<div class="icon_info">' . ((isset($this->_data['.'][0]['L_pdc_cache_info_apc'])) ? $this->_data['.'][0]['L_pdc_cache_info_apc'] : (($this->lang('pdc_cache_info_apc')) ? $this->lang('pdc_cache_info_apc') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_cache_info_apc'))) . '         }')) . '</div>
		</div>
		<br />
		<dl>
			<dt><label>' . ((isset($this->_data['.'][0]['L_pdc_dttl_text'])) ? $this->_data['.'][0]['L_pdc_dttl_text'] : (($this->lang('pdc_dttl_text')) ? $this->lang('pdc_dttl_text') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_dttl_text'))) . '         }')) . '</label><br /><span>' . ((isset($this->_data['.'][0]['L_pdc_dttl_help'])) ? $this->_data['.'][0]['L_pdc_dttl_help'] : (($this->lang('pdc_dttl_help')) ? $this->lang('pdc_dttl_help') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_dttl_help'))) . '         }')) . '</span></dt>
			<dd><label><input type=\'text\' name=\'cache_apc[dttl]\' size=\'32\' value="' . ((isset($this->_data['.'][0]['V_CACHE_APC_DTTL'])) ? $this->_data['.'][0]['V_CACHE_APC_DTTL'] : '') . '" class=\'input\' /></label></dd>
		</dl>
		<dl>
			<dt><label>' . ((isset($this->_data['.'][0]['L_pdc_globalprefix'])) ? $this->_data['.'][0]['L_pdc_globalprefix'] : (($this->lang('pdc_globalprefix')) ? $this->lang('pdc_globalprefix') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_globalprefix'))) . '         }')) . '</label><br /><span>' . ((isset($this->_data['.'][0]['L_pdc_globalprefix_help'])) ? $this->_data['.'][0]['L_pdc_globalprefix_help'] : (($this->lang('pdc_globalprefix_help')) ? $this->lang('pdc_globalprefix_help') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_globalprefix_help'))) . '         }')) . '</span></dt>
			<dd><label><input type=\'text\' name=\'cache_apc[prefix]\' size=\'32\' value="' . ((isset($this->_data['.'][0]['V_CACHE_APC_PREFIX'])) ? $this->_data['.'][0]['V_CACHE_APC_PREFIX'] : '') . '" class=\'input\' /></label></dd>
		</dl>
	</div>
	<div id="div_cache_memcache" style="display:' . ((isset($this->_data['.'][0]['DIV_CACHE_MEMCACHE_VISIBLE'])) ? $this->_data['.'][0]['DIV_CACHE_MEMCACHE_VISIBLE'] : '') . '">
		<div class="bluebox roundbox">
			<div class="icon_info">' . ((isset($this->_data['.'][0]['L_pdc_cache_info_memcache'])) ? $this->_data['.'][0]['L_pdc_cache_info_memcache'] : (($this->lang('pdc_cache_info_memcache')) ? $this->lang('pdc_cache_info_memcache') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_cache_info_memcache'))) . '         }')) . '</div>
		</div>
		<br />
		<dl>
			<dt><label>' . ((isset($this->_data['.'][0]['L_pdc_dttl_text'])) ? $this->_data['.'][0]['L_pdc_dttl_text'] : (($this->lang('pdc_dttl_text')) ? $this->lang('pdc_dttl_text') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_dttl_text'))) . '         }')) . '</label><br /><span>' . ((isset($this->_data['.'][0]['L_pdc_dttl_help'])) ? $this->_data['.'][0]['L_pdc_dttl_help'] : (($this->lang('pdc_dttl_help')) ? $this->lang('pdc_dttl_help') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_dttl_help'))) . '         }')) . '</span></dt>
			<dd><label><input type=\'text\' name=\'cache_memcache[dttl]\' size=\'32\' value="' . ((isset($this->_data['.'][0]['V_CACHE_MEMCACHE_DTTL'])) ? $this->_data['.'][0]['V_CACHE_MEMCACHE_DTTL'] : '') . '" class=\'input\' /></label></dd>
		</dl>
		<dl>
			<dt><label>' . ((isset($this->_data['.'][0]['L_pdc_globalprefix'])) ? $this->_data['.'][0]['L_pdc_globalprefix'] : (($this->lang('pdc_globalprefix')) ? $this->lang('pdc_globalprefix') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_globalprefix'))) . '         }')) . '</label><br /><span>' . ((isset($this->_data['.'][0]['L_pdc_globalprefix_help'])) ? $this->_data['.'][0]['L_pdc_globalprefix_help'] : (($this->lang('pdc_globalprefix_help')) ? $this->lang('pdc_globalprefix_help') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_globalprefix_help'))) . '         }')) . '</span></dt>
			<dd><label><input type=\'text\' name=\'cache_memcache[prefix]\' size=\'32\' value="' . ((isset($this->_data['.'][0]['V_CACHE_MEMCACHE_PREFIX'])) ? $this->_data['.'][0]['V_CACHE_MEMCACHE_PREFIX'] : '') . '" class=\'input\' /></label></dd>
		</dl>
		<dl>
			<dt><label>' . ((isset($this->_data['.'][0]['L_pdc_memcache_server_text'])) ? $this->_data['.'][0]['L_pdc_memcache_server_text'] : (($this->lang('pdc_memcache_server_text')) ? $this->lang('pdc_memcache_server_text') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_memcache_server_text'))) . '         }')) . '</label><br /><span>' . ((isset($this->_data['.'][0]['L_pdc_memcache_server_help'])) ? $this->_data['.'][0]['L_pdc_memcache_server_help'] : (($this->lang('pdc_memcache_server_help')) ? $this->lang('pdc_memcache_server_help') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_memcache_server_help'))) . '         }')) . '</span></dt>
			<dd><label><input type=\'text\' name=\'cache_memcache[server]\' size=\'32\' value="' . ((isset($this->_data['.'][0]['V_CACHE_MEMCACHE_SERVER'])) ? $this->_data['.'][0]['V_CACHE_MEMCACHE_SERVER'] : '') . '" class=\'input\' /></label></dd>
		</dl>
		<dl>
			<dt><label>' . ((isset($this->_data['.'][0]['L_pdc_memcache_port_text'])) ? $this->_data['.'][0]['L_pdc_memcache_port_text'] : (($this->lang('pdc_memcache_port_text')) ? $this->lang('pdc_memcache_port_text') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_memcache_port_text'))) . '         }')) . '</label><br /><span>' . ((isset($this->_data['.'][0]['pdc_memcache_port_help'])) ? $this->_data['.'][0]['pdc_memcache_port_help'] : '') . '</span></dt>
			<dd><label><input type=\'text\' name=\'cache_memcache[port]\' size=\'32\' value="' . ((isset($this->_data['.'][0]['V_CACHE_MEMCACHE_PORT'])) ? $this->_data['.'][0]['V_CACHE_MEMCACHE_PORT'] : '') . '" class=\'input\' /></label></dd>
		</dl>
	</div>
	</div>
	<br />
	<div align=\'center\'>
		<input type="submit" name="cache_save" value="' . ((isset($this->_data['.'][0]['L_save'])) ? $this->_data['.'][0]['L_save'] : (($this->lang('save')) ? $this->lang('save') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'save'))) . '         }')) . '" class="mainoption bi_ok" />
	</div>
</fieldset>

';// IF PDC_CACHE_ENABLED
if ($this->_data['.'][0]['PDC_CACHE_ENABLED']) { 
echo '
<fieldset class="settings">
	<legend>' . ((isset($this->_data['.'][0]['L_pdc_table'])) ? $this->_data['.'][0]['L_pdc_table'] : (($this->lang('pdc_table')) ? $this->lang('pdc_table') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_table'))) . '         }')) . '</legend>
	<div class="bluebox roundbox">
		<div class="icon_info">' . ((isset($this->_data['.'][0]['L_CACHE_TABLE_INFO'])) ? $this->_data['.'][0]['L_CACHE_TABLE_INFO'] : (($this->lang('CACHE_TABLE_INFO')) ? $this->lang('CACHE_TABLE_INFO') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CACHE_TABLE_INFO'))) . '         }')) . '</div>
	</div>
	<br />
	<table width="100%" border="0" cellspacing="1" cellpadding="2" class="colorswitch hoverrows">
		<tr>
			<th>' . ((isset($this->_data['.'][0]['L_pdc_globalprefix'])) ? $this->_data['.'][0]['L_pdc_globalprefix'] : (($this->lang('pdc_globalprefix')) ? $this->lang('pdc_globalprefix') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_globalprefix'))) . '         }')) . '</th>
			<th>' . ((isset($this->_data['.'][0]['L_pdc_entity'])) ? $this->_data['.'][0]['L_pdc_entity'] : (($this->lang('pdc_entity')) ? $this->lang('pdc_entity') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_entity'))) . '         }')) . '</th>
			<th>' . ((isset($this->_data['.'][0]['L_pdc_status'])) ? $this->_data['.'][0]['L_pdc_status'] : (($this->lang('pdc_status')) ? $this->lang('pdc_status') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_status'))) . '         }')) . '</th>
		</tr>
		';// BEGIN cache_entity_list_row
$_cache_entity_list_row_count = (isset($this->_data['cache_entity_list_row.'])) ?  sizeof($this->_data['cache_entity_list_row.']) : 0;
if ($_cache_entity_list_row_count) {
for ($_cache_entity_list_row_i = 0; $_cache_entity_list_row_i < $_cache_entity_list_row_count; $_cache_entity_list_row_i++)
{
echo '
		<tr>
			<td>' . ((isset($this->_data['cache_entity_list_row.'][$_cache_entity_list_row_i]['GLOBAL_PREFIX'])) ? $this->_data['cache_entity_list_row.'][$_cache_entity_list_row_i]['GLOBAL_PREFIX'] : '') . '</td>
			<td>' . ((isset($this->_data['cache_entity_list_row.'][$_cache_entity_list_row_i]['KEY'])) ? $this->_data['cache_entity_list_row.'][$_cache_entity_list_row_i]['KEY'] : '') . '</td>
			<td>' . ((isset($this->_data['cache_entity_list_row.'][$_cache_entity_list_row_i]['EXPIRED'])) ? $this->_data['cache_entity_list_row.'][$_cache_entity_list_row_i]['EXPIRED'] : '') . '</td>
		</tr>
		';}}
// END cache_entity_list_row
echo '
	</table>
	<br />
	<div align=\'center\'>
		<input type="submit" name="cache_clear" value="' . ((isset($this->_data['.'][0]['L_pdc_clear'])) ? $this->_data['.'][0]['L_pdc_clear'] : (($this->lang('pdc_clear')) ? $this->lang('pdc_clear') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_clear'))) . '         }')) . '" class="mainoption bi_delete" />
		<input type="submit" name="cache_cleanup" value="' . ((isset($this->_data['.'][0]['L_pdc_cleanup'])) ? $this->_data['.'][0]['L_pdc_cleanup'] : (($this->lang('pdc_cleanup')) ? $this->lang('pdc_cleanup') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'pdc_cleanup'))) . '         }')) . '" class="mainoption bi_reset" />
	</div>
</fieldset>
';// ENDIF
}
echo '
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