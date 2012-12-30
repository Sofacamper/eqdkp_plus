<?php
if ($this->security()) {
// IF ARMORY == 1
if ($this->_data['.'][0]['ARMORY'] == 1) { 
echo '
	<div class="row1">
		<div style="max-width:1140px;">
			<table width="100%" cellspacing="0" cellpadding="1" border="0">
				<tr>
					<td><div id="profile">
							<div id="profile_charicon">
								<img border=\'0\' src="' . ((isset($this->_data['.'][0]['CHARDATA_ICON'])) ? $this->_data['.'][0]['CHARDATA_ICON'] : '') . '" alt="" />
							</div>
							<div class="floatLeft">
								<div id="profile_charname">
									<a target="_blank" href="' . ((isset($this->_data['.'][0]['bnetlinks:profil'])) ? $this->_data['.'][0]['bnetlinks:profil'] : '') . '">' . ((isset($this->_data['.'][0]['CHARDATA_NAME'])) ? $this->_data['.'][0]['CHARDATA_NAME'] : '') . '</a>
								</div>
								<div id="profile_titel_guild">
									' . ((isset($this->_data['.'][0]['CHARDATA_TITLE'])) ? $this->_data['.'][0]['CHARDATA_TITLE'] : '') . '
									<br />
									<span class="profile_guild"><a target="_blank" href="' . ((isset($this->_data['.'][0]['bnetlinks:guild'])) ? $this->_data['.'][0]['bnetlinks:guild'] : '') . '">' . ((isset($this->_data['.'][0]['CHARDATA_GUILDNAME'])) ? $this->_data['.'][0]['CHARDATA_GUILDNAME'] : '') . '</a> @ ' . ((isset($this->_data['.'][0]['CHARDATA_GUILDREALM'])) ? $this->_data['.'][0]['CHARDATA_GUILDREALM'] : '') . '</span>
								</div>
								<div class="clear"></div>
								<div id="profile_charinfos">
									' . ((isset($this->_data['.'][0]['L_level'])) ? $this->_data['.'][0]['L_level'] : (($this->lang('level')) ? $this->lang('level') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'level'))) . '         }')) . ' ' . ((isset($this->_data['.'][0]['DATA_LEVEL'])) ? $this->_data['.'][0]['DATA_LEVEL'] : '') . ', ' . ((isset($this->_data['.'][0]['DATA_RACENAME'])) ? $this->_data['.'][0]['DATA_RACENAME'] : '') . ', ' . ((isset($this->_data['.'][0]['DATA_CLASSNAME'])) ? $this->_data['.'][0]['DATA_CLASSNAME'] : '') . ', ' . ((isset($this->_data['.'][0]['CHARDATA_POINTS'])) ? $this->_data['.'][0]['CHARDATA_POINTS'] : '') . ' <img src="' . ((isset($this->_data['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_data['.'][0]['EQDKP_ROOT_PATH'] : '') . 'games/wow/profiles/achievements.png" alt="" />
								</div>
							</div>
							<div>
								<div class="profile_itemlevel">
									<div class="profile_itemlevel_avg">' . ((isset($this->_data['.'][0]['itemlevel:averageItemLevel'])) ? $this->_data['.'][0]['itemlevel:averageItemLevel'] : '') . '</div>
									<div class="profile_itemlevel_txt">
										<div class="profile_itemlevel_avgtxt">' . ((isset($this->_data['.'][0]['L_avg_itemlevel'])) ? $this->_data['.'][0]['L_avg_itemlevel'] : (($this->glang('avg_itemlevel', false, true)) ? $this->glang('avg_itemlevel') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'avg_itemlevel'))) . '         }')) . '</div>
										<div class="profile_itemlevel_eq">(' . ((isset($this->_data['.'][0]['itemlevel:averageItemLevelEquipped'])) ? $this->_data['.'][0]['itemlevel:averageItemLevelEquipped'] : '') . ' ' . ((isset($this->_data['.'][0]['L_avg_itemlevel_equiped'])) ? $this->_data['.'][0]['L_avg_itemlevel_equiped'] : (($this->glang('avg_itemlevel_equiped', false, true)) ? $this->glang('avg_itemlevel_equiped') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'avg_itemlevel_equiped'))) . '         }')) . ')</div>
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div>
					</td>
				</tr>
				<tr class="row1" >
					<td valign="top" align="center">
						<table border="0" align="left" width="100%">
							<tr valign="top">
								<td  width="27"> &nbsp;</td>
								<td style="background: #1e130d url(' . ((isset($this->_data['.'][0]['CHARACTER_IMG'])) ? $this->_data['.'][0]['CHARACTER_IMG'] : '') . ') center top no-repeat;">
									<table border="0" style="min-width: 450px;" width="100%">
										<tr style="height:479px;">
											<td valign="top" width="50" >
												<ul id="wow_icons_left">
													';// BEGIN itemicons_left
$_itemicons_left_count = (isset($this->_data['itemicons_left.'])) ?  sizeof($this->_data['itemicons_left.']) : 0;
if ($_itemicons_left_count) {
for ($_itemicons_left_i = 0; $_itemicons_left_i < $_itemicons_left_count; $_itemicons_left_i++)
{
echo '
													<li>' . ((isset($this->_data['itemicons_left.'][$_itemicons_left_i]['SLOTS'])) ? $this->_data['itemicons_left.'][$_itemicons_left_i]['SLOTS'] : '') . '</li>
													';}}
// END itemicons_left
echo '
												</ul>
											</td>
											<td width="100%" valign="top" align="center" class="nowrap">
												<br />
											</td>
											<td valign="top" width="50" >
												<ul id="wow_icons_right">
													';// BEGIN itemicons_right
$_itemicons_right_count = (isset($this->_data['itemicons_right.'])) ?  sizeof($this->_data['itemicons_right.']) : 0;
if ($_itemicons_right_count) {
for ($_itemicons_right_i = 0; $_itemicons_right_i < $_itemicons_right_count; $_itemicons_right_i++)
{
echo '
													<li>' . ((isset($this->_data['itemicons_right.'][$_itemicons_right_i]['SLOTS'])) ? $this->_data['itemicons_right.'][$_itemicons_right_i]['SLOTS'] : '') . '</li>
													';}}
// END itemicons_right
echo '
												</ul>
											</td>
										</tr>
										<tr>
											<td colspan="3" align="center" >
												<ul id=\'wow_icons_bottom\'>
													';// BEGIN itemicons_bottom
$_itemicons_bottom_count = (isset($this->_data['itemicons_bottom.'])) ?  sizeof($this->_data['itemicons_bottom.']) : 0;
if ($_itemicons_bottom_count) {
for ($_itemicons_bottom_i = 0; $_itemicons_bottom_i < $_itemicons_bottom_count; $_itemicons_bottom_i++)
{
echo '
													<li>' . ((isset($this->_data['itemicons_bottom.'][$_itemicons_bottom_i]['SLOTS'])) ? $this->_data['itemicons_bottom.'][$_itemicons_bottom_i]['SLOTS'] : '') . '</li>
													';}}
// END itemicons_bottom
echo '
												</ul>
												' . ((isset($this->_data['.'][0]['itemicons:bottom'])) ? $this->_data['.'][0]['itemicons:bottom'] : '') . '
											</td>
										</tr>
									</table>
								</td>
								<td width="400">
									<div class="healthpowerbar">
										<ul>
											<li class="health"><span class="name">' . ((isset($this->_data['.'][0]['L_health'])) ? $this->_data['.'][0]['L_health'] : (($this->glang('health', false, true)) ? $this->glang('health') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'health'))) . '         }')) . '</span><span class="value">' . ((isset($this->_data['.'][0]['HEALTH_VALUE'])) ? $this->_data['.'][0]['HEALTH_VALUE'] : '') . '</span></li>
											<li class="' . ((isset($this->_data['.'][0]['POWER_TYPE'])) ? $this->_data['.'][0]['POWER_TYPE'] : '') . '"><span class="name">' . ((isset($this->_data['.'][0]['POWER_NAME'])) ? $this->_data['.'][0]['POWER_NAME'] : '') . '</span><span class="value">' . ((isset($this->_data['.'][0]['POWER_VALUE'])) ? $this->_data['.'][0]['POWER_VALUE'] : '') . '</span></li>
										</ul>
									</div>
									<table width="100%" border="0">
										<tr valign="top" >
											<td width="100%">
												<table border="0" cellspacing="0" cellpadding="2" width="100%" >
													<tr>
														<th align="center" ><a target="_blank" href="' . ((isset($this->_data['.'][0]['bnetlinks:talents'])) ? $this->_data['.'][0]['bnetlinks:talents'] : '') . '">' . ((isset($this->_data['.'][0]['L_skills'])) ? $this->_data['.'][0]['L_skills'] : (($this->glang('skills', false, true)) ? $this->glang('skills') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'skills'))) . '         }')) . '</a></th>
													</tr>
													<tr class="row2">
														<td>
															<div id=\'talent_tabs\'>
																<ul>
																	';// BEGIN talents
$_talents_count = (isset($this->_data['talents.'])) ?  sizeof($this->_data['talents.']) : 0;
if ($_talents_count) {
for ($_talents_i = 0; $_talents_i < $_talents_count; $_talents_i++)
{
echo '
																	<li>
																		<a href=\'#talenttab-' . ((isset($this->_data['talents.'][$_talents_i]['ID'])) ? $this->_data['talents.'][$_talents_i]['ID'] : '') . '\'>
																			<span class="talenttab_icon"><img class="icon-frame" src="' . ((isset($this->_data['talents.'][$_talents_i]['ICON'])) ? $this->_data['talents.'][$_talents_i]['ICON'] : '') . '" alt=""/></span>
																			<span class="talenttab_name">' . ((isset($this->_data['talents.'][$_talents_i]['NAME'])) ? $this->_data['talents.'][$_talents_i]['NAME'] : '') . '</span>
																			';// IF talents.SELECTED
if ($this->_data['talents.'][$_talents_i]['SELECTED']) { 
echo '<span class="talenttab_select"><img src="games/wow/profiles/talents/talents-check.gif" width="15" height="11" alt="" /></span>';// ENDIF
}
echo '
																		</a>
																	</li>
																	';}}
// END talents
echo '
																</ul>
																';// BEGIN talents
$_talents_count = (isset($this->_data['talents.'])) ?  sizeof($this->_data['talents.']) : 0;
if ($_talents_count) {
for ($_talents_i = 0; $_talents_i < $_talents_count; $_talents_i++)
{
echo '
																<div id="talenttab-' . ((isset($this->_data['talents.'][$_talents_i]['ID'])) ? $this->_data['talents.'][$_talents_i]['ID'] : '') . '">
																	<table border="0" width="100%" cellspacing="0" cellpadding="0" id="talents_' . ((isset($this->_data['talents.'][$_talents_i]['ID'])) ? $this->_data['talents.'][$_talents_i]['ID'] : '') . '">
																		<tr>
																			<td width="70%">
																				<table border="0" width="100%" cellspacing="0" cellpadding="0">
																					';// BEGIN special
$_special_count = (isset($this->_data['talents.'][$_talents_i]['special.'])) ? sizeof($this->_data['talents.'][$_talents_i]['special.']) : 0;
if ($_special_count) {
for ($_special_i = 0; $_special_i < $_special_count; $_special_i++)
{
echo '
																					<tr ';// IF talents.special.DESCRIPTION
if ($this->_data['talents.'][$_talents_i]['special.'][$_special_i]['DESCRIPTION']) { 
echo ' class="coretip" data-coretip="' . ((isset($this->_data['talents.'][$_talents_i]['special.'][$_special_i]['DESCRIPTION'])) ? $this->_data['talents.'][$_talents_i]['special.'][$_special_i]['DESCRIPTION'] : '') . '" ';// ENDIF
}
echo '>
																						<td class="absmiddle" width="34" align="center">' . ((isset($this->_data['talents.'][$_talents_i]['special.'][$_special_i]['ICON'])) ? $this->_data['talents.'][$_talents_i]['special.'][$_special_i]['ICON'] : '') . '</td>
																						<td class="absmiddle">' . ((isset($this->_data['talents.'][$_talents_i]['special.'][$_special_i]['NAME'])) ? $this->_data['talents.'][$_talents_i]['special.'][$_special_i]['NAME'] : '') . '</td>
																					</tr>
																					';}}
// END special
echo '
																				</table>
																			</td>
																			<td width="30%">
																			<table border="0" width="100%" cellspacing="0" cellpadding="0">
																					<tr height="24px">
																						<td colspan="3">' . ((isset($this->_data['.'][0]['L_major_glyphs'])) ? $this->_data['.'][0]['L_major_glyphs'] : (($this->glang('major_glyphs', false, true)) ? $this->glang('major_glyphs') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'major_glyphs'))) . '         }')) . '</td>
																					</tr>
																					<tr height="24px">
																						';// BEGIN glyphs_major
$_glyphs_major_count = (isset($this->_data['talents.'][$_talents_i]['glyphs_major.'])) ? sizeof($this->_data['talents.'][$_talents_i]['glyphs_major.']) : 0;
if ($_glyphs_major_count) {
for ($_glyphs_major_i = 0; $_glyphs_major_i < $_glyphs_major_count; $_glyphs_major_i++)
{
echo '
																						<td width="34" align="center" ';// IF talents.glyphs_major.NAME
if ($this->_data['talents.'][$_talents_i]['glyphs_major.'][$_glyphs_major_i]['NAME']) { 
echo ' class="coretip absmiddle" data-coretip="' . ((isset($this->_data['talents.'][$_talents_i]['glyphs_major.'][$_glyphs_major_i]['NAME'])) ? $this->_data['talents.'][$_talents_i]['glyphs_major.'][$_glyphs_major_i]['NAME'] : '') . '" ';// ELSE
} else {
echo 'class="absmiddle"';// ENDIF
}
echo '>' . ((isset($this->_data['talents.'][$_talents_i]['glyphs_major.'][$_glyphs_major_i]['ICON'])) ? $this->_data['talents.'][$_talents_i]['glyphs_major.'][$_glyphs_major_i]['ICON'] : '') . '</td>
																						';}}
// END glyphs_major
echo '
																					</tr>
																					<tr height="30px">
																						<td colspan="3"></td>
																					</tr>
																					<tr height="24px">
																						<td colspan="3">' . ((isset($this->_data['.'][0]['L_minor_glyphs'])) ? $this->_data['.'][0]['L_minor_glyphs'] : (($this->glang('minor_glyphs', false, true)) ? $this->glang('minor_glyphs') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'minor_glyphs'))) . '         }')) . '</td>
																					</tr>
																					<tr height="24px">
																						';// BEGIN glyphs_minor
$_glyphs_minor_count = (isset($this->_data['talents.'][$_talents_i]['glyphs_minor.'])) ? sizeof($this->_data['talents.'][$_talents_i]['glyphs_minor.']) : 0;
if ($_glyphs_minor_count) {
for ($_glyphs_minor_i = 0; $_glyphs_minor_i < $_glyphs_minor_count; $_glyphs_minor_i++)
{
echo '
																						<td width="34" align="center" ';// IF talents.glyphs_minor.NAME
if ($this->_data['talents.'][$_talents_i]['glyphs_minor.'][$_glyphs_minor_i]['NAME']) { 
echo ' class="coretip absmiddle" data-coretip="' . ((isset($this->_data['talents.'][$_talents_i]['glyphs_minor.'][$_glyphs_minor_i]['NAME'])) ? $this->_data['talents.'][$_talents_i]['glyphs_minor.'][$_glyphs_minor_i]['NAME'] : '') . '" ';// ELSE
} else {
echo 'class="absmiddle"';// ENDIF
}
echo '>' . ((isset($this->_data['talents.'][$_talents_i]['glyphs_minor.'][$_glyphs_minor_i]['ICON'])) ? $this->_data['talents.'][$_talents_i]['glyphs_minor.'][$_glyphs_minor_i]['ICON'] : '') . '</td>
																						';}}
// END glyphs_minor
echo '
																					</tr>
																				</table>
																			</td>
																		</tr>
																	</table>
																</div>
																';}}
// END talents
echo '
															</div>
														</td>
													</tr>
												</table>
											</td>
										</tr>
										<tr>
											<td>
												<table border="0" width="100%" cellspacing="0" cellpadding="2" >
													<tr>
														<th colspan="2" align="center" ><a target="_blank" href="' . ((isset($this->_data['.'][0]['bnetlinks:profession'])) ? $this->_data['.'][0]['bnetlinks:profession'] : '') . '">' . ((isset($this->_data['.'][0]['L_uc_prof_professions'])) ? $this->_data['.'][0]['L_uc_prof_professions'] : (($this->glang('uc_prof_professions', false, true)) ? $this->glang('uc_prof_professions') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'uc_prof_professions'))) . '         }')) . '</a></th>
													</tr>
													';// BEGIN professions
$_professions_count = (isset($this->_data['professions.'])) ?  sizeof($this->_data['professions.']) : 0;
if ($_professions_count) {
for ($_professions_i = 0; $_professions_i < $_professions_count; $_professions_i++)
{
echo '
													<tr class="row2 profession-row">
														<td>
															<span class="profession-icon icon-frame frame-14"><img src="' . ((isset($this->_data['professions.'][$_professions_i]['ICON'])) ? $this->_data['professions.'][$_professions_i]['ICON'] : '') . '" alt="" /></span><span class="profession-name">' . ((isset($this->_data['professions.'][$_professions_i]['NAME'])) ? $this->_data['professions.'][$_professions_i]['NAME'] : '') . '</span>
														</td>
														<td>
															' . ((isset($this->_data['professions.'][$_professions_i]['BAR'])) ? $this->_data['professions.'][$_professions_i]['BAR'] : '') . '
														</td>
													</tr>
													';}}
// END professions
echo '
												</table>
											</td>
										</tr>
										<tr>
											<td>
												<table border="0" width="100%" cellspacing="0" cellpadding="2" >
													<tr>
														<th>
															<div class="floatLeft" style="line-height: 25px;">
																<a target="_blank" href="' . ((isset($this->_data['.'][0]['bnetlinks:profil'])) ? $this->_data['.'][0]['bnetlinks:profil'] : '') . '">' . ((isset($this->_data['.'][0]['L_values'])) ? $this->_data['.'][0]['L_values'] : (($this->glang('values', false, true)) ? $this->glang('values') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'values'))) . '         }')) . '</a>
															</div>
															<div class="floatRight" style="width: 70%">
																<select id="char_infos" style="width: 100%; ">
																	';// BEGIN charattribute_group
$_charattribute_group_count = (isset($this->_data['charattribute_group.'])) ?  sizeof($this->_data['charattribute_group.']) : 0;
if ($_charattribute_group_count) {
for ($_charattribute_group_i = 0; $_charattribute_group_i < $_charattribute_group_count; $_charattribute_group_i++)
{
echo '
																	<option value="' . ((isset($this->_data['charattribute_group.'][$_charattribute_group_i]['ID'])) ? $this->_data['charattribute_group.'][$_charattribute_group_i]['ID'] : '') . '">' . ((isset($this->_data['charattribute_group.'][$_charattribute_group_i]['NAME'])) ? $this->_data['charattribute_group.'][$_charattribute_group_i]['NAME'] : '') . '</option>
																	';}}
// END charattribute_group
echo '
																	<option value="all">' . ((isset($this->_data['.'][0]['L_all'])) ? $this->_data['.'][0]['L_all'] : (($this->glang('all', false, true)) ? $this->glang('all') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'all'))) . '         }')) . '</option>
																</select>
															</div>
														</th>
													</tr>
													<tr class="row2" valign="top" >
														<td width="100%">
															
															<div id="boxes">
																';// BEGIN charattribute_group
$_charattribute_group_count = (isset($this->_data['charattribute_group.'])) ?  sizeof($this->_data['charattribute_group.']) : 0;
if ($_charattribute_group_count) {
for ($_charattribute_group_i = 0; $_charattribute_group_i < $_charattribute_group_count; $_charattribute_group_i++)
{
echo '
																<div id=\'' . ((isset($this->_data['charattribute_group.'][$_charattribute_group_i]['ID'])) ? $this->_data['charattribute_group.'][$_charattribute_group_i]['ID'] : '') . '\'>
																	<table width=\'100%\' cellspacing=\'0\' cellpadding=\'2\' class=\'colorswitch hoverrows\'>
																	';// BEGIN charattributes
$_charattributes_count = (isset($this->_data['charattribute_group.'][$_charattribute_group_i]['charattributes.'])) ? sizeof($this->_data['charattribute_group.'][$_charattribute_group_i]['charattributes.']) : 0;
if ($_charattributes_count) {
for ($_charattributes_i = 0; $_charattributes_i < $_charattributes_count; $_charattributes_i++)
{
echo '
																		<tr>
																			<td width=\'170\'>' . ((isset($this->_data['charattribute_group.'][$_charattribute_group_i]['charattributes.'][$_charattributes_i]['NAME'])) ? $this->_data['charattribute_group.'][$_charattribute_group_i]['charattributes.'][$_charattributes_i]['NAME'] : '') . '</td>
																			<td>' . ((isset($this->_data['charattribute_group.'][$_charattribute_group_i]['charattributes.'][$_charattributes_i]['VALUE'])) ? $this->_data['charattribute_group.'][$_charattribute_group_i]['charattributes.'][$_charattributes_i]['VALUE'] : '') . '</td>
																		</tr>
																	';}}
// END charattributes
echo '
																	</table>
																</div>
																';}}
// END charattribute_group
echo '
															</div>
														</td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
								</td>
							</tr>
					 	</table>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<br />

	<table width="100%" border="0" cellspacing="1" cellpadding="1" class="borderless">
		<tr>
			<td valign="top" width="95%">
				<div id=\'char1_tabs\'>
					<ul>
						<li><a href=\'#char1tabs-1\'><span>' . ((isset($this->_data['.'][0]['L_uc_bosskills'])) ? $this->_data['.'][0]['L_uc_bosskills'] : (($this->glang('uc_bosskills', false, true)) ? $this->glang('uc_bosskills') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'uc_bosskills'))) . '         }')) . '</span></a></li>
						<li><a href=\'#char1tabs-2\'><span>' . ((isset($this->_data['.'][0]['L_uc_achievements'])) ? $this->_data['.'][0]['L_uc_achievements'] : (($this->glang('uc_achievements', false, true)) ? $this->glang('uc_achievements') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'uc_achievements'))) . '         }')) . '</span></a></li>
						<li><a href=\'#char1tabs-3\'><span>' . ((isset($this->_data['.'][0]['L_char_news'])) ? $this->_data['.'][0]['L_char_news'] : (($this->glang('char_news', false, true)) ? $this->glang('char_news') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'char_news'))) . '         }')) . '</span></a></li>
						';// IF S_ADMIN
if ($this->_data['.'][0]['S_ADMIN']) { 
echo '<li><a href=\'#char1tabs-4\'><span><img src="images/global/admin_flag.png" alt="" /> ' . ((isset($this->_data['.'][0]['L_tab_notes'])) ? $this->_data['.'][0]['L_tab_notes'] : (($this->lang('tab_notes')) ? $this->lang('tab_notes') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'tab_notes'))) . '         }')) . '</span></a></li>';// ENDIF
}
echo '
					</ul>

					<div id="char1tabs-1">
						<div class="tab-content">
							<div id=\'achievement_tabs\'>
								<ul>
									';// BEGIN bossprogress_cat
$_bossprogress_cat_count = (isset($this->_data['bossprogress_cat.'])) ?  sizeof($this->_data['bossprogress_cat.']) : 0;
if ($_bossprogress_cat_count) {
for ($_bossprogress_cat_i = 0; $_bossprogress_cat_i < $_bossprogress_cat_count; $_bossprogress_cat_i++)
{
echo '
									<li><a href=\'#achievementtab-' . ((isset($this->_data['bossprogress_cat.'][$_bossprogress_cat_i]['ID'])) ? $this->_data['bossprogress_cat.'][$_bossprogress_cat_i]['ID'] : '') . '\'><span>' . ((isset($this->_data['bossprogress_cat.'][$_bossprogress_cat_i]['NAME'])) ? $this->_data['bossprogress_cat.'][$_bossprogress_cat_i]['NAME'] : '') . '</span></a></li>
									';}}
// END bossprogress_cat
echo '
								</ul>

								';// BEGIN bossprogress_cat
$_bossprogress_cat_count = (isset($this->_data['bossprogress_cat.'])) ?  sizeof($this->_data['bossprogress_cat.']) : 0;
if ($_bossprogress_cat_count) {
for ($_bossprogress_cat_i = 0; $_bossprogress_cat_i < $_bossprogress_cat_count; $_bossprogress_cat_i++)
{
echo '
								<div id="achievementtab-' . ((isset($this->_data['bossprogress_cat.'][$_bossprogress_cat_i]['ID'])) ? $this->_data['bossprogress_cat.'][$_bossprogress_cat_i]['ID'] : '') . '">
									<table border="0" width="100%" cellspacing="0" cellpadding="2" class="colorswitch">
									';// BEGIN bossprogress_val
$_bossprogress_val_count = (isset($this->_data['bossprogress_cat.'][$_bossprogress_cat_i]['bossprogress_val.'])) ? sizeof($this->_data['bossprogress_cat.'][$_bossprogress_cat_i]['bossprogress_val.']) : 0;
if ($_bossprogress_val_count) {
for ($_bossprogress_val_i = 0; $_bossprogress_val_i < $_bossprogress_val_count; $_bossprogress_val_i++)
{
echo '
										<tr>
											<td width="470">
												<table border="0" width="400">
													<tr>
														<td class="raideventicon id' . ((isset($this->_data['bossprogress_cat.'][$_bossprogress_cat_i]['bossprogress_val.'][$_bossprogress_val_i]['ID'])) ? $this->_data['bossprogress_cat.'][$_bossprogress_cat_i]['bossprogress_val.'][$_bossprogress_val_i]['ID'] : '') . '">
														</td>
														<td align="center" class="nowrap">
															<b>' . ((isset($this->_data['bossprogress_cat.'][$_bossprogress_cat_i]['bossprogress_val.'][$_bossprogress_val_i]['NAME'])) ? $this->_data['bossprogress_cat.'][$_bossprogress_cat_i]['bossprogress_val.'][$_bossprogress_val_i]['NAME'] : '') . '</b>
															<hr />' . ((isset($this->_data['bossprogress_cat.'][$_bossprogress_cat_i]['bossprogress_val.'][$_bossprogress_val_i]['RUNS'])) ? $this->_data['bossprogress_cat.'][$_bossprogress_cat_i]['bossprogress_val.'][$_bossprogress_val_i]['RUNS'] : '') . '
														</td>
													</tr>
												</table>
											</td>
											<td width="250">' . ((isset($this->_data['bossprogress_cat.'][$_bossprogress_cat_i]['bossprogress_val.'][$_bossprogress_val_i]['BARS'])) ? $this->_data['bossprogress_cat.'][$_bossprogress_cat_i]['bossprogress_val.'][$_bossprogress_val_i]['BARS'] : '') . '</td>
										</tr>
										';}}
// END bossprogress_val
echo '
									</table>
								</div>
								';}}
// END bossprogress_cat
echo '
							</div>
						</div>
					</div>

					<div id="char1tabs-2">
						<div class="tab-content">
							';// BEGIN achievements
$_achievements_count = (isset($this->_data['achievements.'])) ?  sizeof($this->_data['achievements.']) : 0;
if ($_achievements_count) {
for ($_achievements_i = 0; $_achievements_i < $_achievements_count; $_achievements_i++)
{
echo '
							<div id="bar_' . ((isset($this->_data['achievements.'][$_achievements_i]['ID'])) ? $this->_data['achievements.'][$_achievements_i]['ID'] : '') . '" onclick="window.open(\'' . ((isset($this->_data['achievements.'][$_achievements_i]['LINK'])) ? $this->_data['achievements.'][$_achievements_i]['LINK'] : '') . '\', \'_blank\')">
								' . ((isset($this->_data['achievements.'][$_achievements_i]['NAME'])) ? $this->_data['achievements.'][$_achievements_i]['NAME'] : '') . '
								' . ((isset($this->_data['achievements.'][$_achievements_i]['BAR'])) ? $this->_data['achievements.'][$_achievements_i]['BAR'] : '') . '
							</div>
							';}}
// END achievements
echo '

							<div class="clear"></div>
							<h2>' . ((isset($this->_data['.'][0]['L_latest_guildachievs'])) ? $this->_data['.'][0]['L_latest_guildachievs'] : (($this->glang('latest_guildachievs', false, true)) ? $this->glang('latest_guildachievs') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'latest_guildachievs'))) . '         }')) . '</h2>
							<table width="100%" class="colorswitch hoverrows" cellspacing="0" cellpadding="6">
							';// BEGIN latestachievements
$_latestachievements_count = (isset($this->_data['latestachievements.'])) ?  sizeof($this->_data['latestachievements.']) : 0;
if ($_latestachievements_count) {
for ($_latestachievements_i = 0; $_latestachievements_i < $_latestachievements_count; $_latestachievements_i++)
{
echo '
							<tr>
								<td width="25">' . ((isset($this->_data['latestachievements.'][$_latestachievements_i]['ICON'])) ? $this->_data['latestachievements.'][$_latestachievements_i]['ICON'] : '') . '
								</td>
								<td>' . ((isset($this->_data['latestachievements.'][$_latestachievements_i]['NAME'])) ? $this->_data['latestachievements.'][$_latestachievements_i]['NAME'] : '') . ' &nbsp;&nbsp;&nbsp; ' . ((isset($this->_data['latestachievements.'][$_latestachievements_i]['DESC'])) ? $this->_data['latestachievements.'][$_latestachievements_i]['DESC'] : '') . '
								</td>
								<td width="60" class="nowrap">' . ((isset($this->_data['latestachievements.'][$_latestachievements_i]['POINTS'])) ? $this->_data['latestachievements.'][$_latestachievements_i]['POINTS'] : '') . ' <img src="games/wow/profiles/achievements.png" class="absmiddle" alt="AchievementPoints" />
								</td>
								<td width="30" class="nowrap">' . ((isset($this->_data['latestachievements.'][$_latestachievements_i]['DATE'])) ? $this->_data['latestachievements.'][$_latestachievements_i]['DATE'] : '') . '
								</td>
							</tr>
							';}}
// END latestachievements
echo '
							</table>
						</div>
					</div>

					<div id="char1tabs-3">
						<div class="tab-content">
							<table width=\'100%\' border=\'0\' cellspacing=\'1\' cellpadding=\'2\' class=\'colorswitch\'>
								<tr>
									<th  align=\'center\' colspan=\'4\' class=\'nowrap\'>' . ((isset($this->_data['.'][0]['L_charnewsfeed'])) ? $this->_data['.'][0]['L_charnewsfeed'] : (($this->glang('charnewsfeed', false, true)) ? $this->glang('charnewsfeed') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'charnewsfeed'))) . '         }')) . '</th>
								</tr>
								';// BEGIN charfeed
$_charfeed_count = (isset($this->_data['charfeed.'])) ?  sizeof($this->_data['charfeed.']) : 0;
if ($_charfeed_count) {
for ($_charfeed_i = 0; $_charfeed_i < $_charfeed_count; $_charfeed_i++)
{
echo '
								<tr style=\'height:28;\' align=\'center\'>
									<td width=\'28\' height=\'28\'><img src=\'' . ((isset($this->_data['charfeed.'][$_charfeed_i]['ICON'])) ? $this->_data['charfeed.'][$_charfeed_i]['ICON'] : '') . '\' alt=\'feedicon\' /></td>
									<td align=\'left\'>' . ((isset($this->_data['charfeed.'][$_charfeed_i]['TEXT'])) ? $this->_data['charfeed.'][$_charfeed_i]['TEXT'] : '') . '</td>
									<td width=\'120\' align=\'center\'>' . ((isset($this->_data['charfeed.'][$_charfeed_i]['DATE'])) ? $this->_data['charfeed.'][$_charfeed_i]['DATE'] : '') . '</td>
								</tr>
								';}}
// END charfeed
echo '
							</table>
						</div>
					</div>

					';// IF S_ADMIN
if ($this->_data['.'][0]['S_ADMIN']) { 
echo '
					<div id="char1tabs-4">
						<div class="tab-content">
							<table width="100%" border="0" cellspacing="0" cellpadding="1">
								<tr class="row1" >
									<td align="left" width="40%" class="nowrap">
										' . ((isset($this->_data['.'][0]['NOTES'])) ? $this->_data['.'][0]['NOTES'] : '') . '
									</td>
								</tr>
							</table>
						</div>
					</div>
					';// ENDIF
}
echo '
				</div>
			</td>
		</tr>
	</table>
	<br />
	<br />
';// ELSE
} else {
echo '
<div class="row1">
	<table width="100%" cellspacing="0" cellpadding="1" border="0" style="max-width:1140px;">
		<tr>
			<td><div id="profile">
					<div id="profile_charicon">
						<img border=\'0\' src="' . ((isset($this->_data['.'][0]['CHARDATA_ICON'])) ? $this->_data['.'][0]['CHARDATA_ICON'] : '') . '" alt="" />
					</div>
					<div class="floatLeft">
						<div id="profile_charname">
							' . ((isset($this->_data['.'][0]['DATA_NAME'])) ? $this->_data['.'][0]['DATA_NAME'] : '') . '
						</div>
						<div id="profile_titel_guild">
							' . ((isset($this->_data['.'][0]['CHARDATA_TITLE'])) ? $this->_data['.'][0]['CHARDATA_TITLE'] : '') . '
							<br />
							<span class="profile_guild"><a target="_blank" href="' . ((isset($this->_data['.'][0]['bnetlinks:guild'])) ? $this->_data['.'][0]['bnetlinks:guild'] : '') . '">' . ((isset($this->_data['.'][0]['DATA_GUILDTAG'])) ? $this->_data['.'][0]['DATA_GUILDTAG'] : '') . '</a> @ ' . ((isset($this->_data['.'][0]['CHARDATA_GUILDREALM'])) ? $this->_data['.'][0]['CHARDATA_GUILDREALM'] : '') . '</span>
						</div>
						<div class="clear"></div>
						<div id="profile_charinfos">
							' . ((isset($this->_data['.'][0]['L_level'])) ? $this->_data['.'][0]['L_level'] : (($this->lang('level')) ? $this->lang('level') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'level'))) . '         }')) . ' ' . ((isset($this->_data['.'][0]['DATA_LEVEL'])) ? $this->_data['.'][0]['DATA_LEVEL'] : '') . ', ' . ((isset($this->_data['.'][0]['DATA_RACENAME'])) ? $this->_data['.'][0]['DATA_RACENAME'] : '') . ', ' . ((isset($this->_data['.'][0]['DATA_CLASSNAME'])) ? $this->_data['.'][0]['DATA_CLASSNAME'] : '') . ', ' . ((isset($this->_data['.'][0]['CHARDATA_POINTS'])) ? $this->_data['.'][0]['CHARDATA_POINTS'] : '') . ' <img src="' . ((isset($this->_data['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_data['.'][0]['EQDKP_ROOT_PATH'] : '') . 'games/wow/profiles/achievements.png" alt="" />
						</div>
					</div>
					<div>
					</div>
					<div class="clear"></div>
				</div>
			</td>
		</tr>

		<tr class="row1" >
			<td valign="top" align="center">

				<table border="0" align="left" width="100%" style="height: 550px;">
					<tr valign="top">
						<td  width="27"> &nbsp;</td>
						<td style="background: #1e130d url(' . ((isset($this->_data['.'][0]['CHARACTER_IMG'])) ? $this->_data['.'][0]['CHARACTER_IMG'] : '') . ') center top no-repeat;"></td>
						<td width="400">

							<div class="healthpowerbar">
								<ul>
									<li class="health"><span class="name">' . ((isset($this->_data['.'][0]['L_health'])) ? $this->_data['.'][0]['L_health'] : (($this->glang('health', false, true)) ? $this->glang('health') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'health'))) . '         }')) . '</span><span class="value">' . ((isset($this->_data['.'][0]['DATA_HEALTH_BAR'])) ? $this->_data['.'][0]['DATA_HEALTH_BAR'] : '') . '</span></li>
									<li class="' . ((isset($this->_data['.'][0]['DATA_SECOND_NAME'])) ? $this->_data['.'][0]['DATA_SECOND_NAME'] : '') . '"><span class="name">' . ((isset($this->_data['.'][0]['POWER_BAR_NAME'])) ? $this->_data['.'][0]['POWER_BAR_NAME'] : '') . '</span><span class="value">' . ((isset($this->_data['.'][0]['DATA_SECOND_BAR'])) ? $this->_data['.'][0]['DATA_SECOND_BAR'] : '') . '</span></li>
								</ul>
							</div>

							<table width="100%" border="0">
								<tr valign="top" >
									<td width="100%">
									</td>
								</tr>
								<tr>
									<td>
										<table border="0" width="100%" cellspacing="0" cellpadding="2" >
											<tr>
												<th colspan="2" align="center" >' . ((isset($this->_data['.'][0]['L_uc_prof_professions'])) ? $this->_data['.'][0]['L_uc_prof_professions'] : (($this->glang('uc_prof_professions', false, true)) ? $this->glang('uc_prof_professions') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'uc_prof_professions'))) . '         }')) . '</th>
											</tr>
											';// BEGIN professions
$_professions_count = (isset($this->_data['professions.'])) ?  sizeof($this->_data['professions.']) : 0;
if ($_professions_count) {
for ($_professions_i = 0; $_professions_i < $_professions_count; $_professions_i++)
{
echo '
											<tr class="row2 profession-row">
												<td>
													<span class="profession-icon icon-frame frame-14"><img src="' . ((isset($this->_data['professions.'][$_professions_i]['ICON'])) ? $this->_data['professions.'][$_professions_i]['ICON'] : '') . '" alt="" /></span><span class="profession-name">' . ((isset($this->_data['professions.'][$_professions_i]['NAME'])) ? $this->_data['professions.'][$_professions_i]['NAME'] : '') . '</span>
												</td>
												<td>
													' . ((isset($this->_data['professions.'][$_professions_i]['BAR'])) ? $this->_data['professions.'][$_professions_i]['BAR'] : '') . '
												</td>
											</tr>
											';}}
// END professions
echo '
										</table>
									</td>
								</tr>
							</table>
							<br/>
							<div class="errorbox roundbox">
								<div class="icon_noconnection">
									' . ((isset($this->_data['.'][0]['ERRORMSG_BNET'])) ? $this->_data['.'][0]['ERRORMSG_BNET'] : '') . '
								</div>
							</div>
							';// IF NO_SERVER_SET
if ($this->_data['.'][0]['NO_SERVER_SET']) { 
echo '
							<div class="errorbox roundbox">
								<div class="icon_false">
									' . ((isset($this->_data['.'][0]['L_no_realm'])) ? $this->_data['.'][0]['L_no_realm'] : (($this->glang('no_realm', false, true)) ? $this->glang('no_realm') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'no_realm'))) . '         }')) . '
								</div>
							</div>
							';// ENDIF
}
echo '
						</td>
					</tr>
			 	</table>
			</td>
		</tr>
	</table>
	</div>
';// ENDIF
}
echo '

<table width="100%" border="0" cellspacing="1" cellpadding="2" class="borderless colorswitch">
	<tr>
		<th align="center" colspan="9">' . ((isset($this->_data['.'][0]['L_DKP_NAME'])) ? $this->_data['.'][0]['L_DKP_NAME'] : (($this->lang('DKP_NAME')) ? $this->lang('DKP_NAME') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DKP_NAME'))) . '         }')) . '</th>
	</tr>
	' . ((isset($this->_data['.'][0]['MEMBER_POINTS'])) ? $this->_data['.'][0]['MEMBER_POINTS'] : '') . '
</table>
<br />

<div id=\'profile_information\'>
	<ul>
		';// IF CUSTOM_FIELDS
if ($this->_data['.'][0]['CUSTOM_FIELDS']) { 
echo '<li><a href=\'#fragment-2-0\'><span>' . ((isset($this->_data['.'][0]['L_tab_customfields'])) ? $this->_data['.'][0]['L_tab_customfields'] : (($this->lang('tab_customfields')) ? $this->lang('tab_customfields') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'tab_customfields'))) . '         }')) . '</span></a></li>';// ENDIF
}
echo '
		<li><a href=\'#fragment-2-1\'><span>' . ((isset($this->_data['.'][0]['L_tab_raids'])) ? $this->_data['.'][0]['L_tab_raids'] : (($this->lang('tab_raids')) ? $this->lang('tab_raids') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'tab_raids'))) . '         }')) . '</span></a></li>
		<li><a href=\'#fragment-2-2\'><span>' . ((isset($this->_data['.'][0]['L_tab_items'])) ? $this->_data['.'][0]['L_tab_items'] : (($this->lang('tab_items')) ? $this->lang('tab_items') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'tab_items'))) . '         }')) . '</span></a></li>
		<li><a href=\'#fragment-2-3\'><span>' . ((isset($this->_data['.'][0]['L_tab_adjustments'])) ? $this->_data['.'][0]['L_tab_adjustments'] : (($this->lang('tab_adjustments')) ? $this->lang('tab_adjustments') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'tab_adjustments'))) . '         }')) . '</span></a></li>
		<li><a href=\'#fragment-2-4\'><span>' . ((isset($this->_data['.'][0]['L_tab_attendance'])) ? $this->_data['.'][0]['L_tab_attendance'] : (($this->lang('tab_attendance')) ? $this->lang('tab_attendance') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'tab_attendance'))) . '         }')) . '</span></a></li>
	</ul>

	';echo '<!-- ALL PROFILE FIELDS TABLE -->';// IF CUSTOM_FIELDS
if ($this->_data['.'][0]['CUSTOM_FIELDS']) { 
echo '
	<div id="fragment-2-0">
		<fieldset class="settings mediumsettings">
			';// BEGIN pfield_custom
$_pfield_custom_count = (isset($this->_data['pfield_custom.'])) ?  sizeof($this->_data['pfield_custom.']) : 0;
if ($_pfield_custom_count) {
for ($_pfield_custom_i = 0; $_pfield_custom_i < $_pfield_custom_count; $_pfield_custom_i++)
{
echo '
			<dl>
				<dt><label>' . ((isset($this->_data['pfield_custom.'][$_pfield_custom_i]['NAME'])) ? $this->_data['pfield_custom.'][$_pfield_custom_i]['NAME'] : '') . '</label></dt>
				<dd>' . ((isset($this->_data['pfield_custom.'][$_pfield_custom_i]['VALUE'])) ? $this->_data['pfield_custom.'][$_pfield_custom_i]['VALUE'] : '') . '</dd>
			</dl>
			';}}
// END pfield_custom
echo '
		</fieldset>
	</div>
	';// ENDIF
}
echo '<!-- RAIDS TABLE -->';echo '
	<div id="fragment-2-1">
		<table width="100%" border="0" cellspacing="1" cellpadding="2" class="borderless">
		<tr>
			<th align="center" colspan="5">' . ((isset($this->_data['.'][0]['L_raid_attendance_history'])) ? $this->_data['.'][0]['L_raid_attendance_history'] : (($this->lang('raid_attendance_history')) ? $this->lang('raid_attendance_history') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raid_attendance_history'))) . '         }')) . '</th>
		</tr>
		<tr>
			<td align="center" class="menu">' . ((isset($this->_data['.'][0]['RAID_PAGINATION'])) ? $this->_data['.'][0]['RAID_PAGINATION'] : '') . '</td>
		</tr>
		</table>
		<table width="100%" border="0" cellspacing="1" cellpadding="2" class="colorswitch">
		' . ((isset($this->_data['.'][0]['RAID_OUT'])) ? $this->_data['.'][0]['RAID_OUT'] : '') . '
		</table>
		<table width="100%" border="0" cellspacing="1" cellpadding="2" class="borderless">
		<tr>
			<td align="center" class="menu">' . ((isset($this->_data['.'][0]['RAID_PAGINATION'])) ? $this->_data['.'][0]['RAID_PAGINATION'] : '') . '</td>
		</tr>
		</table>
	</div>

	';echo '<!-- ITEMS TABLE -->';echo '
	<div id="fragment-2-2">
		<table width="100%" border="0" cellspacing="1" cellpadding="2" class="borderless">
		<tr>
			<th align="center" colspan="5">' . ((isset($this->_data['.'][0]['L_item_purchase_history'])) ? $this->_data['.'][0]['L_item_purchase_history'] : (($this->lang('item_purchase_history')) ? $this->lang('item_purchase_history') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'item_purchase_history'))) . '         }')) . '</th>
		</tr>
		<tr>
			<td align="center" class="menu">' . ((isset($this->_data['.'][0]['ITEM_PAGINATION'])) ? $this->_data['.'][0]['ITEM_PAGINATION'] : '') . '</td>
		</tr>
		</table>
		<table width="100%" border="0" cellspacing="1" cellpadding="2" class="colorswitch">
		' . ((isset($this->_data['.'][0]['ITEM_OUT'])) ? $this->_data['.'][0]['ITEM_OUT'] : '') . '
		</table>
		<table width="100%" border="0" cellspacing="1" cellpadding="2" class="borderless">
		<tr>
			<td align="center" class="menu">' . ((isset($this->_data['.'][0]['ITEM_PAGINATION'])) ? $this->_data['.'][0]['ITEM_PAGINATION'] : '') . '</td>
			</tr>
		</table>
	</div>

	';echo '<!-- ADJUSTMENTS TABLE-->';echo '
	<div id="fragment-2-3">
		<table width="100%" border="0" cellspacing="1" cellpadding="2">
			<tr>
				<th align="center" colspan="4">' . ((isset($this->_data['.'][0]['L_individual_adjustment_history'])) ? $this->_data['.'][0]['L_individual_adjustment_history'] : (($this->lang('individual_adjustment_history')) ? $this->lang('individual_adjustment_history') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'individual_adjustment_history'))) . '         }')) . '</th>
			</tr>
			<tr>
				<td align="center" class="menu">' . ((isset($this->_data['.'][0]['ADJUSTMENT_PAGINATION'])) ? $this->_data['.'][0]['ADJUSTMENT_PAGINATION'] : '') . '</td>
			</tr>
		</table>
		<table width="100%" border="0" cellspacing="1" cellpadding="2" class="colorswitch">
		' . ((isset($this->_data['.'][0]['ADJUSTMENT_OUT'])) ? $this->_data['.'][0]['ADJUSTMENT_OUT'] : '') . '
		</table>
	</div>

	';echo '<!-- ATTENDANCE -->';echo '
	<div id="fragment-2-4">
		<table width="100%" border="0" cellspacing="1" cellpadding="2" class="colorswitch">
		' . ((isset($this->_data['.'][0]['EVENT_ATT_OUT'])) ? $this->_data['.'][0]['EVENT_ATT_OUT'] : '') . '
		</table>
	</div>
</div>
<br />
' . ((isset($this->_data['.'][0]['COMMENT'])) ? $this->_data['.'][0]['COMMENT'] : '') . '';
}
?>