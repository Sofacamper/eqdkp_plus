<?php
if ($this->security()) {
// IF S_NO_HEADER_FOOTER
if ($this->_data['.'][0]['S_NO_HEADER_FOOTER']) { 
echo '
	<script type=\'text/javascript\'>
//<![CDATA[
$(document).ready(function() {

	$(\'#selectmode\').change(function() {
		if($(this).val() == \'raid\'){
			changeCalendars(\'1\');
			$(\'.raid\').show();
			$(\'.event\').hide();
			$(\'#eventsettings\').addClass(\'floatLeft\');
		}else{
			$(\'.raid\').hide();
			changeCalendars(\'2\');
			$(\'.event\').show();
			$(\'#eventsettings\').removeClass(\'floatLeft\');
		}
	});

	// switch the raid distri modes
	$(\'#cal_raidmodeselect\').change(function() {
		$(\'#raidmode_class\').hide();
		$(\'#raidmode_role\').hide();
		$(\'#raidmode_seperator\').hide();
		$(\'#attendees_summ\').attr(\'readonly\', true);
		$(\'#attendees_summ\').val(0);
		$(\'.attendees_count\').attr(\'disabled\', true);
		if($(this).val() == \'none\'){
			$(\'#attendees_summ\').val(\'' . ((isset($this->_data['.'][0]['ATTENDEE_COUNT'])) ? $this->_data['.'][0]['ATTENDEE_COUNT'] : '') . '\');
			$(\'#attendees_summ\').attr(\'readonly\', false);
		}else if($(this).val() == \'role\'){
			$(\'#raidmode_role\').show();
			$(\'#raidmode_seperator\').show();
			$(\'#raidmode_role\').find(\'.attendees_count\').attr(\'disabled\', false);
		}else{
			$(\'#raidmode_class\').show();
			$(\'#raidmode_seperator\').show();
			$(\'#raidmode_class\').find(\'.attendees_count\').attr(\'disabled\', false);
		}
	});

	$(\'.allday_cb\').change(function() {
		if($(this).prop(\'checked\') == true){
			$(\'#cal_startdate\').datetimepicker(\'disableTimepicker\');
			$(\'#cal_enddate\').datetimepicker(\'disableTimepicker\');
		}else{
			$(\'#cal_startdate\').datetimepicker(\'enableTimepicker\');
			$(\'#cal_enddate\').datetimepicker(\'enableTimepicker\');
		}
	});

	// the onpageload state
	if($(\'#selectmode\').val() != \'\'){
		$(\'#selectmode\').trigger(\'change\');
	}
	if($(\'#cal_raidmodeselect\').val() != \'class\'){
		$(\'#cal_raidmodeselect\').trigger(\'change\');
	}

	// calculate the attendee count summ
	$(document).on(\'change\', \'.attendees_count, #cal_raidmodeselect\', function(){
		attendeeCount();
	});

	// Load the raid template if selected
	$("#cal_raidtemplate").bind("change", function(e){
		$(".resettemplate_input").val(\'\');
		if($(this).val() > 0){
			$.getJSON("addevent.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&loadtemplate="+$(this).val(), function(data){
				$.each(data, function(i,item){
					//if(item.field == \'dw_raidleader\'){
						//$("#dw_raidleader").attr("value","3")
						//$("#dw_raidleader").multiselect("refresh");
						//}else{
						$("#"+item.field).val(item.value);
						//}
				});
				$(\'#cal_raidmodeselect\').trigger(\'change\');
			});
		}
	});

	// Delete templates
	$("#template_delbutton").bind("click", function(){
		if($("#cal_raidtemplate").val() > 0){
			$.post(\'addevent.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&deletetemplate=\'+$("#cal_raidtemplate").val(), function(data) {
				$(\'#cal_raidtemplate\').find(\'option\').remove();
				$(\'#cal_raidtemplate\').append(data);
			});
		}
	});

	// the manual form validation
	$(\'#submittheform\').click(function(){
		console.log(\'test\');
		if($(\'#selectmode\').val() == \'raid\'){
			if(($(\'input[name="raid_attendees_count"]\').val() < 1) || ($(\'input[name="raid_attendees_count"]\').val() == \'0\')){
				ModalAlert(\'' . ((isset($this->_data['.'][0]['L_raidevent_event_val_attnd'])) ? $this->_data['.'][0]['L_raidevent_event_val_attnd'] : (($this->lang('raidevent_event_val_attnd')) ? $this->lang('raidevent_event_val_attnd') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raidevent_event_val_attnd'))) . '         }')) . '\');
				return false;
			}
			if(($(\'input[name="raid_eventid"]\').val() == \'\') || ($(\'input[name="raid_eventid"]\').val() < 1)){
				ModalAlert(\'' . ((isset($this->_data['.'][0]['L_raidevent_event_val_name'])) ? $this->_data['.'][0]['L_raidevent_event_val_name'] : (($this->lang('raidevent_event_val_name')) ? $this->lang('raidevent_event_val_name') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raidevent_event_val_name'))) . '         }')) . '\');
				return false;
			}
		}else{
			var dv_eventname = $(\'input[name="eventname"]\').val();
			if(dv_eventname.length < 3){
				ModalAlert("' . ((isset($this->_data['.'][0]['L_raidevent_event_val_name'])) ? $this->_data['.'][0]['L_raidevent_event_val_name'] : (($this->lang('raidevent_event_val_name')) ? $this->lang('raidevent_event_val_name') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raidevent_event_val_name'))) . '         }')) . '");
				return false;
			}
			if($(\'input[name="calendar_id"]\').val() < 1){
				ModalAlert(\'' . ((isset($this->_data['.'][0]['L_raidevent_raid_val_eventid'])) ? $this->_data['.'][0]['L_raidevent_raid_val_eventid'] : (($this->lang('raidevent_raid_val_eventid')) ? $this->lang('raidevent_raid_val_eventid') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raidevent_raid_val_eventid'))) . '         }')) . '\');
				return false;
			}
		}
		$(\'#addeventform\').submit();
	});

	//Onload: Count attendees, e.g. required when editing an raid
	attendeeCount();
});

function changeCalendars(cal_mode){
	calendars		= ' . ((isset($this->_data['.'][0]['DR_CALENDAR_JSON'])) ? $this->_data['.'][0]['DR_CALENDAR_JSON'] : '') . ';
	selected_calid	= ' . ((isset($this->_data['.'][0]['DR_CALENDAR_CID'])) ? $this->_data['.'][0]['DR_CALENDAR_CID'] : '') . ';
	
	var cal_options = \'\';
	$.each(calendars, function() {
		if(this.type == cal_mode){
			cal_option_selected	= (selected_calid > 0 && this.id == selected_calid) ? \'selected="selected"\' : \'\';
			cal_options += \'<option value="\' + this.id + \'" \'+cal_option_selected+\'>\' + this.name + \'</option>\';
		}
	});
	$(\'#calendar_id\').html(cal_options);

	// check if a calendar is available for this mode
	if ($(\'#calendar_id option\').length == 0) {
		ModalAlert(\'' . ((isset($this->_data['.'][0]['L_raidevent_raid_val_addevent'])) ? $this->_data['.'][0]['L_raidevent_raid_val_addevent'] : (($this->lang('raidevent_raid_val_addevent')) ? $this->lang('raidevent_raid_val_addevent') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raidevent_raid_val_addevent'))) . '         }')) . '\');
	}
}

function ModalAlert(text){
	$( "<div></div>" ).dialog({
			height: 200,
			modal: true,
			title: \'' . ((isset($this->_data['.'][0]['L_raidevent_raid_errorhead'])) ? $this->_data['.'][0]['L_raidevent_raid_errorhead'] : (($this->lang('raidevent_raid_errorhead')) ? $this->lang('raidevent_raid_errorhead') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raidevent_raid_errorhead'))) . '         }')) . '\',
			buttons: { Ok: function() { $(this).dialog(\'close\'); } }
		}).html(\'<p class="confirmdialog"><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>\'+text+\'</p>\');
}

function attendeeCount(){
	var calcsumm = 0;
	$(\'.attendees_count\').each(function(index) {
		if(!$(this).attr("disabled")) {
			calcsumm += parseInt($(this).val());
		}
	});
	$(\'#attendees_summ\').val(calcsumm);
}
//]]>
</script>
<form method="post" action="' . ((isset($this->_data['.'][0]['ACTION'])) ? $this->_data['.'][0]['ACTION'] : '') . '" name="addeventform" id="addeventform">
	<input type="hidden" name="eventid" value="' . ((isset($this->_data['.'][0]['EVENT_ID'])) ? $this->_data['.'][0]['EVENT_ID'] : '') . '" />

	';// IF IS_CLONED
if ($this->_data['.'][0]['IS_CLONED']) { 
echo '
	<div class="bluebox roundbox">
		<div class="icon_repeating">
			' . ((isset($this->_data['.'][0]['L_calendar_event_clones_info'])) ? $this->_data['.'][0]['L_calendar_event_clones_info'] : (($this->lang('calendar_event_clones_info')) ? $this->lang('calendar_event_clones_info') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_event_clones_info'))) . '         }')) . '<br/>' . ((isset($this->_data['.'][0]['RADIO_EDITCLONES'])) ? $this->_data['.'][0]['RADIO_EDITCLONES'] : '') . '
		</div>
	</div>
	';// ENDIF
}
echo '

	<fieldset class="settings mediumsettings floatLeft" id="eventsettings" style="width: 470px;">
		<legend class="event">' . ((isset($this->_data['.'][0]['L_calendar_mode_event'])) ? $this->_data['.'][0]['L_calendar_mode_event'] : (($this->lang('calendar_mode_event')) ? $this->lang('calendar_mode_event') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_mode_event'))) . '         }')) . '</legend>
		<legend class="raid">' . ((isset($this->_data['.'][0]['L_calendar_mode_raid'])) ? $this->_data['.'][0]['L_calendar_mode_raid'] : (($this->lang('calendar_mode_raid')) ? $this->lang('calendar_mode_raid') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_mode_raid'))) . '         }')) . '</legend>

		<dl>
			<dt><label>' . ((isset($this->_data['.'][0]['L_calendar_mode'])) ? $this->_data['.'][0]['L_calendar_mode'] : (($this->lang('calendar_mode')) ? $this->lang('calendar_mode') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_mode'))) . '         }')) . '</label></dt>
			<dd>' . ((isset($this->_data['.'][0]['DR_CALENDARMODE'])) ? $this->_data['.'][0]['DR_CALENDARMODE'] : '') . '</dd>
		</dl>
		<dl class="raid">
			<dt><label>' . ((isset($this->_data['.'][0]['L_raidevent_template'])) ? $this->_data['.'][0]['L_raidevent_template'] : (($this->lang('raidevent_template')) ? $this->lang('raidevent_template') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raidevent_template'))) . '         }')) . '</label></dt>
			<dd>' . ((isset($this->_data['.'][0]['DR_TEMPLATE'])) ? $this->_data['.'][0]['DR_TEMPLATE'] : '') . ' <img src="../images/global/delete.png" alt="' . ((isset($this->_data['.'][0]['L_delete'])) ? $this->_data['.'][0]['L_delete'] : (($this->lang('delete')) ? $this->lang('delete') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'delete'))) . '         }')) . '" id="template_delbutton" /></dd>
		</dl>
		<hr />
		<dl>
			<dt><label>' . ((isset($this->_data['.'][0]['L_calendar'])) ? $this->_data['.'][0]['L_calendar'] : (($this->lang('calendar')) ? $this->lang('calendar') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar'))) . '         }')) . ':</label></dt>
			<dd>
				<select size="1" name="calendar_id" id="calendar_id" class="input">
					<option value=""></option>
				</select>
			</dd>
		</dl>
		<dl class="event">
			<dt><label>' . ((isset($this->_data['.'][0]['L_calendar_event_name'])) ? $this->_data['.'][0]['L_calendar_event_name'] : (($this->lang('calendar_event_name')) ? $this->lang('calendar_event_name') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_event_name'))) . '         }')) . ':</label></dt>
			<dd><input type="text" name="eventname" value="' . ((isset($this->_data['.'][0]['EVENTNAME'])) ? $this->_data['.'][0]['EVENTNAME'] : '') . '" class="input resettemplate_input {required:true, messages:{required:\'' . ((isset($this->_data['.'][0]['L_raidevent_event_val_name'])) ? $this->_data['.'][0]['L_raidevent_event_val_name'] : (($this->lang('raidevent_event_val_name')) ? $this->lang('raidevent_event_val_name') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raidevent_event_val_name'))) . '         }')) . '\'}" /></dd>
		</dl>
		<dl class="raid">
			<dt><label>' . ((isset($this->_data['.'][0]['L_raidevent_raidevent'])) ? $this->_data['.'][0]['L_raidevent_raidevent'] : (($this->lang('raidevent_raidevent')) ? $this->lang('raidevent_raidevent') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raidevent_raidevent'))) . '         }')) . ':</label></dt>
			<dd><span id="raidevent_dropdown">' . ((isset($this->_data['.'][0]['DR_EVENT'])) ? $this->_data['.'][0]['DR_EVENT'] : '') . '</span> <img src="../images/glyphs/add.png" alt="' . ((isset($this->_data['.'][0]['L_raidevent_raidevent_add'])) ? $this->_data['.'][0]['L_raidevent_raidevent_add'] : (($this->lang('raidevent_raidevent_add')) ? $this->lang('raidevent_raidevent_add') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raidevent_raidevent_add'))) . '         }')) . '" title="' . ((isset($this->_data['.'][0]['L_raidevent_raidevent_add'])) ? $this->_data['.'][0]['L_raidevent_raidevent_add'] : (($this->lang('raidevent_raidevent_add')) ? $this->lang('raidevent_raidevent_add') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raidevent_raidevent_add'))) . '         }')) . '" class="hand" onclick="AddEventDialog()" /></dd>
		</dl>
		<dl class="raid">
			<dt><label>' . ((isset($this->_data['.'][0]['L_raidevent_templatename'])) ? $this->_data['.'][0]['L_raidevent_templatename'] : (($this->lang('raidevent_templatename')) ? $this->lang('raidevent_templatename') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raidevent_templatename'))) . '         }')) . ':</label></dt>
			<dd><input type="text" name="templatename" value="' . ((isset($this->_data['.'][0]['TEMPLATE_NAME'])) ? $this->_data['.'][0]['TEMPLATE_NAME'] : '') . '" class="input resettemplate_input" id="name" /> ' . ((isset($this->_data['.'][0]['HELP_TEMPLATE'])) ? $this->_data['.'][0]['HELP_TEMPLATE'] : '') . '</dd>
		</dl>
		<dl class="raid">
			<dt><label>' . ((isset($this->_data['.'][0]['L_raidevent_value'])) ? $this->_data['.'][0]['L_raidevent_value'] : (($this->lang('raidevent_value')) ? $this->lang('raidevent_value') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raidevent_value'))) . '         }')) . ':</label></dt>
			<dd><input type="text" name="raid_value" size="8" maxlength="7" value="' . ((isset($this->_data['.'][0]['RAID_VALUE'])) ? $this->_data['.'][0]['RAID_VALUE'] : '') . '" class="input resettemplate_input" id="input_dkpvalue" /> ' . ((isset($this->_data['.'][0]['HELP_VALUE'])) ? $this->_data['.'][0]['HELP_VALUE'] : '') . '</dd>
		</dl>
		<dl class="raid">
			<dt><label>' . ((isset($this->_data['.'][0]['L_raidevent_raidleader'])) ? $this->_data['.'][0]['L_raidevent_raidleader'] : (($this->lang('raidevent_raidleader')) ? $this->lang('raidevent_raidleader') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raidevent_raidleader'))) . '         }')) . ':</label></dt>
			<dd>' . ((isset($this->_data['.'][0]['DR_RAIDLEADER'])) ? $this->_data['.'][0]['DR_RAIDLEADER'] : '') . '</dd>
		</dl>
		<dl>
			<dt><label><span id="startdate_title">' . ((isset($this->_data['.'][0]['L_calendar_startdate'])) ? $this->_data['.'][0]['L_calendar_startdate'] : (($this->lang('calendar_startdate')) ? $this->lang('calendar_startdate') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_startdate'))) . '         }')) . '</span>:</label></dt>
			<dd>' . ((isset($this->_data['.'][0]['JQ_DATE_START'])) ? $this->_data['.'][0]['JQ_DATE_START'] : '') . '</dd>
		</dl>
		<dl class="allday">
			<dt><label>' . ((isset($this->_data['.'][0]['L_calendar_enddate'])) ? $this->_data['.'][0]['L_calendar_enddate'] : (($this->lang('calendar_enddate')) ? $this->lang('calendar_enddate') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_enddate'))) . '         }')) . ':</label></dt>
			<dd>' . ((isset($this->_data['.'][0]['JQ_DATE_END'])) ? $this->_data['.'][0]['JQ_DATE_END'] : '') . '</dd>
		</dl>
		<dl class="raid">
			<dt><label>' . ((isset($this->_data['.'][0]['L_calendar_deadline'])) ? $this->_data['.'][0]['L_calendar_deadline'] : (($this->lang('calendar_deadline')) ? $this->lang('calendar_deadline') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_deadline'))) . '         }')) . ':</label></dt>
			<dd><input type="text" name="deadlinedate" id="deadlinedate" size="5" maxlength="255" value="' . ((isset($this->_data['.'][0]['DATE_DEADLINE'])) ? $this->_data['.'][0]['DATE_DEADLINE'] : '') . '" /> ' . ((isset($this->_data['.'][0]['L_calendar_deadline_entity'])) ? $this->_data['.'][0]['L_calendar_deadline_entity'] : (($this->lang('calendar_deadline_entity')) ? $this->lang('calendar_deadline_entity') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_deadline_entity'))) . '         }')) . '</dd>
		</dl>
		<dl>
			<dt><label>' . ((isset($this->_data['.'][0]['L_calendar_repeat'])) ? $this->_data['.'][0]['L_calendar_repeat'] : (($this->lang('calendar_repeat')) ? $this->lang('calendar_repeat') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_repeat'))) . '         }')) . ':</label></dt>
			<dd>' . ((isset($this->_data['.'][0]['DR_REPEAT'])) ? $this->_data['.'][0]['DR_REPEAT'] : '') . '</dd>
		</dl>
		<dl class="event">
			<dt><label>' . ((isset($this->_data['.'][0]['L_calendar_allday_event'])) ? $this->_data['.'][0]['L_calendar_allday_event'] : (($this->lang('calendar_allday_event')) ? $this->lang('calendar_allday_event') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_allday_event'))) . '         }')) . ':</label></dt>
			<dd>' . ((isset($this->_data['.'][0]['CB_ALLDAY'])) ? $this->_data['.'][0]['CB_ALLDAY'] : '') . '</dd>
		</dl>
		<dl>
			<dt><label>' . ((isset($this->_data['.'][0]['L_note'])) ? $this->_data['.'][0]['L_note'] : (($this->lang('note')) ? $this->lang('note') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'note'))) . '         }')) . ':</label></dt>
			<dd><textarea name="note" class="input resettemplate_input" id="input_note" rows="2" cols="32">' . ((isset($this->_data['.'][0]['NOTE'])) ? $this->_data['.'][0]['NOTE'] : '') . '</textarea></dd>
		</dl>

	</fieldset>

	<fieldset class="settings floatRight raid" style="width: 310px;">
		<legend>' . ((isset($this->_data['.'][0]['L_raidevent_attendees'])) ? $this->_data['.'][0]['L_raidevent_attendees'] : (($this->lang('raidevent_attendees')) ? $this->lang('raidevent_attendees') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raidevent_attendees'))) . '         }')) . '</legend>
		<dl>
			<dt><label><img src="../images/global/help.png" alt=""/> ' . ((isset($this->_data['.'][0]['L_calendar_distri'])) ? $this->_data['.'][0]['L_calendar_distri'] : (($this->lang('calendar_distri')) ? $this->lang('calendar_distri') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_distri'))) . '         }')) . ':</label></dt>
			<dd>' . ((isset($this->_data['.'][0]['DR_RAIDMODE'])) ? $this->_data['.'][0]['DR_RAIDMODE'] : '') . '</dd>
		</dl>
		<dl>
			<dt><label><img src="../images/calendar/summ.png" alt=""/> ' . ((isset($this->_data['.'][0]['L_raidevent_attendees'])) ? $this->_data['.'][0]['L_raidevent_attendees'] : (($this->lang('raidevent_attendees')) ? $this->lang('raidevent_attendees') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raidevent_attendees'))) . '         }')) . ':</label></dt>
			<dd><input type="text" size="3" maxlength="2" name="raid_attendees_count" value="' . ((isset($this->_data['.'][0]['ATTENDEES_COUNT'])) ? $this->_data['.'][0]['ATTENDEES_COUNT'] : '') . '" readonly="readonly" id="attendees_summ" /></dd>
		</dl>
		<div id="raidmode_class">
			<hr />
			';// BEGIN raid_classes
$_raid_classes_count = (isset($this->_data['raid_classes.'])) ?  sizeof($this->_data['raid_classes.']) : 0;
if ($_raid_classes_count) {
for ($_raid_classes_i = 0; $_raid_classes_i < $_raid_classes_count; $_raid_classes_i++)
{
echo '
			<dl>
				<dt><label class="class_' . ((isset($this->_data['raid_classes.'][$_raid_classes_i]['CLSSID'])) ? $this->_data['raid_classes.'][$_raid_classes_i]['CLSSID'] : '') . '">' . ((isset($this->_data['raid_classes.'][$_raid_classes_i]['ICON'])) ? $this->_data['raid_classes.'][$_raid_classes_i]['ICON'] : '') . ' ' . ((isset($this->_data['raid_classes.'][$_raid_classes_i]['LABEL'])) ? $this->_data['raid_classes.'][$_raid_classes_i]['LABEL'] : '') . ':</label></dt>
				<dd><input type="text" size="3" maxlength="2" name="' . ((isset($this->_data['raid_classes.'][$_raid_classes_i]['NAME'])) ? $this->_data['raid_classes.'][$_raid_classes_i]['NAME'] : '') . '" value="' . ((isset($this->_data['raid_classes.'][$_raid_classes_i]['COUNT'])) ? $this->_data['raid_classes.'][$_raid_classes_i]['COUNT'] : '') . '" class="attendees_count" id="inp_class_' . ((isset($this->_data['raid_classes.'][$_raid_classes_i]['CLSSID'])) ? $this->_data['raid_classes.'][$_raid_classes_i]['CLSSID'] : '') . '" ' . ((isset($this->_data['raid_classes.'][$_raid_classes_i]['DISABLED'])) ? $this->_data['raid_classes.'][$_raid_classes_i]['DISABLED'] : '') . ' /></dd>
			</dl>
			';}}
// END raid_classes
echo '
		</div>

		<div id="raidmode_role" style="display:none;">
			<hr />
			';// BEGIN raid_roles
$_raid_roles_count = (isset($this->_data['raid_roles.'])) ?  sizeof($this->_data['raid_roles.']) : 0;
if ($_raid_roles_count) {
for ($_raid_roles_i = 0; $_raid_roles_i < $_raid_roles_count; $_raid_roles_i++)
{
echo '
			<dl>
				<dt><label>' . ((isset($this->_data['raid_roles.'][$_raid_roles_i]['ICON'])) ? $this->_data['raid_roles.'][$_raid_roles_i]['ICON'] : '') . ' ' . ((isset($this->_data['raid_roles.'][$_raid_roles_i]['LABEL'])) ? $this->_data['raid_roles.'][$_raid_roles_i]['LABEL'] : '') . ':</label></dt>
				<dd><input type="text" size="3" maxlength="2" name="' . ((isset($this->_data['raid_roles.'][$_raid_roles_i]['NAME'])) ? $this->_data['raid_roles.'][$_raid_roles_i]['NAME'] : '') . '" value="' . ((isset($this->_data['raid_roles.'][$_raid_roles_i]['COUNT'])) ? $this->_data['raid_roles.'][$_raid_roles_i]['COUNT'] : '') . '" class="attendees_count" id="inp_role_' . ((isset($this->_data['raid_roles.'][$_raid_roles_i]['CLSSID'])) ? $this->_data['raid_roles.'][$_raid_roles_i]['CLSSID'] : '') . '" ' . ((isset($this->_data['raid_roles.'][$_raid_roles_i]['DISABLED'])) ? $this->_data['raid_roles.'][$_raid_roles_i]['DISABLED'] : '') . ' /></dd>
			</dl>
			';}}
// END raid_roles
echo '
		</div>
	</fieldset>
	<div class="clear"></div>

	';// IF IS_EDIT
if ($this->_data['.'][0]['IS_EDIT']) { 
echo '
		<input type="submit" name="upd" value="' . ((isset($this->_data['.'][0]['L_calendars_upd_button'])) ? $this->_data['.'][0]['L_calendars_upd_button'] : (($this->lang('calendars_upd_button')) ? $this->lang('calendars_upd_button') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendars_upd_button'))) . '         }')) . '" class="mainoption" />
		<input type="submit" name="addtemplate" value="' . ((isset($this->_data['.'][0]['L_raidevent_savetemplate'])) ? $this->_data['.'][0]['L_raidevent_savetemplate'] : (($this->lang('raidevent_savetemplate')) ? $this->lang('raidevent_savetemplate') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raidevent_savetemplate'))) . '         }')) . '" class="liteoption bi_archive raid" />
	';// ELSE
} else {
echo '
		<input type="hidden" name="addevent"/>
		<input type="submit" name="addevent" value="' . ((isset($this->_data['.'][0]['L_calendars_add_button'])) ? $this->_data['.'][0]['L_calendars_add_button'] : (($this->lang('calendars_add_button')) ? $this->lang('calendars_add_button') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendars_add_button'))) . '         }')) . '" class="mainoption bi_ok" id="submittheform"/>
		<input type="reset"  name="reset" value="' . ((isset($this->_data['.'][0]['L_reset'])) ? $this->_data['.'][0]['L_reset'] : (($this->lang('reset')) ? $this->lang('reset') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'reset'))) . '         }')) . '" class="liteoption bi_reset" />
		<input type="submit" name="addtemplate" value="' . ((isset($this->_data['.'][0]['L_raidevent_savetemplate'])) ? $this->_data['.'][0]['L_raidevent_savetemplate'] : (($this->lang('raidevent_savetemplate')) ? $this->lang('raidevent_savetemplate') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raidevent_savetemplate'))) . '         }')) . '" class="liteoption bi_archive raid" id="save_template" />
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
								<script type=\'text/javascript\'>
//<![CDATA[
$(document).ready(function() {

	$(\'#selectmode\').change(function() {
		if($(this).val() == \'raid\'){
			changeCalendars(\'1\');
			$(\'.raid\').show();
			$(\'.event\').hide();
			$(\'#eventsettings\').addClass(\'floatLeft\');
		}else{
			$(\'.raid\').hide();
			changeCalendars(\'2\');
			$(\'.event\').show();
			$(\'#eventsettings\').removeClass(\'floatLeft\');
		}
	});

	// switch the raid distri modes
	$(\'#cal_raidmodeselect\').change(function() {
		$(\'#raidmode_class\').hide();
		$(\'#raidmode_role\').hide();
		$(\'#raidmode_seperator\').hide();
		$(\'#attendees_summ\').attr(\'readonly\', true);
		$(\'#attendees_summ\').val(0);
		$(\'.attendees_count\').attr(\'disabled\', true);
		if($(this).val() == \'none\'){
			$(\'#attendees_summ\').val(\'' . ((isset($this->_data['.'][0]['ATTENDEE_COUNT'])) ? $this->_data['.'][0]['ATTENDEE_COUNT'] : '') . '\');
			$(\'#attendees_summ\').attr(\'readonly\', false);
		}else if($(this).val() == \'role\'){
			$(\'#raidmode_role\').show();
			$(\'#raidmode_seperator\').show();
			$(\'#raidmode_role\').find(\'.attendees_count\').attr(\'disabled\', false);
		}else{
			$(\'#raidmode_class\').show();
			$(\'#raidmode_seperator\').show();
			$(\'#raidmode_class\').find(\'.attendees_count\').attr(\'disabled\', false);
		}
	});

	$(\'.allday_cb\').change(function() {
		if($(this).prop(\'checked\') == true){
			$(\'#cal_startdate\').datetimepicker(\'disableTimepicker\');
			$(\'#cal_enddate\').datetimepicker(\'disableTimepicker\');
		}else{
			$(\'#cal_startdate\').datetimepicker(\'enableTimepicker\');
			$(\'#cal_enddate\').datetimepicker(\'enableTimepicker\');
		}
	});

	// the onpageload state
	if($(\'#selectmode\').val() != \'\'){
		$(\'#selectmode\').trigger(\'change\');
	}
	if($(\'#cal_raidmodeselect\').val() != \'class\'){
		$(\'#cal_raidmodeselect\').trigger(\'change\');
	}

	// calculate the attendee count summ
	$(document).on(\'change\', \'.attendees_count, #cal_raidmodeselect\', function(){
		attendeeCount();
	});

	// Load the raid template if selected
	$("#cal_raidtemplate").bind("change", function(e){
		$(".resettemplate_input").val(\'\');
		if($(this).val() > 0){
			$.getJSON("addevent.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&loadtemplate="+$(this).val(), function(data){
				$.each(data, function(i,item){
					//if(item.field == \'dw_raidleader\'){
						//$("#dw_raidleader").attr("value","3")
						//$("#dw_raidleader").multiselect("refresh");
						//}else{
						$("#"+item.field).val(item.value);
						//}
				});
				$(\'#cal_raidmodeselect\').trigger(\'change\');
			});
		}
	});

	// Delete templates
	$("#template_delbutton").bind("click", function(){
		if($("#cal_raidtemplate").val() > 0){
			$.post(\'addevent.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&deletetemplate=\'+$("#cal_raidtemplate").val(), function(data) {
				$(\'#cal_raidtemplate\').find(\'option\').remove();
				$(\'#cal_raidtemplate\').append(data);
			});
		}
	});

	// the manual form validation
	$(\'#submittheform\').click(function(){
		console.log(\'test\');
		if($(\'#selectmode\').val() == \'raid\'){
			if(($(\'input[name="raid_attendees_count"]\').val() < 1) || ($(\'input[name="raid_attendees_count"]\').val() == \'0\')){
				ModalAlert(\'' . ((isset($this->_data['.'][0]['L_raidevent_event_val_attnd'])) ? $this->_data['.'][0]['L_raidevent_event_val_attnd'] : (($this->lang('raidevent_event_val_attnd')) ? $this->lang('raidevent_event_val_attnd') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raidevent_event_val_attnd'))) . '         }')) . '\');
				return false;
			}
			if(($(\'input[name="raid_eventid"]\').val() == \'\') || ($(\'input[name="raid_eventid"]\').val() < 1)){
				ModalAlert(\'' . ((isset($this->_data['.'][0]['L_raidevent_event_val_name'])) ? $this->_data['.'][0]['L_raidevent_event_val_name'] : (($this->lang('raidevent_event_val_name')) ? $this->lang('raidevent_event_val_name') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raidevent_event_val_name'))) . '         }')) . '\');
				return false;
			}
		}else{
			var dv_eventname = $(\'input[name="eventname"]\').val();
			if(dv_eventname.length < 3){
				ModalAlert("' . ((isset($this->_data['.'][0]['L_raidevent_event_val_name'])) ? $this->_data['.'][0]['L_raidevent_event_val_name'] : (($this->lang('raidevent_event_val_name')) ? $this->lang('raidevent_event_val_name') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raidevent_event_val_name'))) . '         }')) . '");
				return false;
			}
			if($(\'input[name="calendar_id"]\').val() < 1){
				ModalAlert(\'' . ((isset($this->_data['.'][0]['L_raidevent_raid_val_eventid'])) ? $this->_data['.'][0]['L_raidevent_raid_val_eventid'] : (($this->lang('raidevent_raid_val_eventid')) ? $this->lang('raidevent_raid_val_eventid') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raidevent_raid_val_eventid'))) . '         }')) . '\');
				return false;
			}
		}
		$(\'#addeventform\').submit();
	});

	//Onload: Count attendees, e.g. required when editing an raid
	attendeeCount();
});

function changeCalendars(cal_mode){
	calendars		= ' . ((isset($this->_data['.'][0]['DR_CALENDAR_JSON'])) ? $this->_data['.'][0]['DR_CALENDAR_JSON'] : '') . ';
	selected_calid	= ' . ((isset($this->_data['.'][0]['DR_CALENDAR_CID'])) ? $this->_data['.'][0]['DR_CALENDAR_CID'] : '') . ';
	
	var cal_options = \'\';
	$.each(calendars, function() {
		if(this.type == cal_mode){
			cal_option_selected	= (selected_calid > 0 && this.id == selected_calid) ? \'selected="selected"\' : \'\';
			cal_options += \'<option value="\' + this.id + \'" \'+cal_option_selected+\'>\' + this.name + \'</option>\';
		}
	});
	$(\'#calendar_id\').html(cal_options);

	// check if a calendar is available for this mode
	if ($(\'#calendar_id option\').length == 0) {
		ModalAlert(\'' . ((isset($this->_data['.'][0]['L_raidevent_raid_val_addevent'])) ? $this->_data['.'][0]['L_raidevent_raid_val_addevent'] : (($this->lang('raidevent_raid_val_addevent')) ? $this->lang('raidevent_raid_val_addevent') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raidevent_raid_val_addevent'))) . '         }')) . '\');
	}
}

function ModalAlert(text){
	$( "<div></div>" ).dialog({
			height: 200,
			modal: true,
			title: \'' . ((isset($this->_data['.'][0]['L_raidevent_raid_errorhead'])) ? $this->_data['.'][0]['L_raidevent_raid_errorhead'] : (($this->lang('raidevent_raid_errorhead')) ? $this->lang('raidevent_raid_errorhead') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raidevent_raid_errorhead'))) . '         }')) . '\',
			buttons: { Ok: function() { $(this).dialog(\'close\'); } }
		}).html(\'<p class="confirmdialog"><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>\'+text+\'</p>\');
}

function attendeeCount(){
	var calcsumm = 0;
	$(\'.attendees_count\').each(function(index) {
		if(!$(this).attr("disabled")) {
			calcsumm += parseInt($(this).val());
		}
	});
	$(\'#attendees_summ\').val(calcsumm);
}
//]]>
</script>
<form method="post" action="' . ((isset($this->_data['.'][0]['ACTION'])) ? $this->_data['.'][0]['ACTION'] : '') . '" name="addeventform" id="addeventform">
	<input type="hidden" name="eventid" value="' . ((isset($this->_data['.'][0]['EVENT_ID'])) ? $this->_data['.'][0]['EVENT_ID'] : '') . '" />

	';// IF IS_CLONED
if ($this->_data['.'][0]['IS_CLONED']) { 
echo '
	<div class="bluebox roundbox">
		<div class="icon_repeating">
			' . ((isset($this->_data['.'][0]['L_calendar_event_clones_info'])) ? $this->_data['.'][0]['L_calendar_event_clones_info'] : (($this->lang('calendar_event_clones_info')) ? $this->lang('calendar_event_clones_info') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_event_clones_info'))) . '         }')) . '<br/>' . ((isset($this->_data['.'][0]['RADIO_EDITCLONES'])) ? $this->_data['.'][0]['RADIO_EDITCLONES'] : '') . '
		</div>
	</div>
	';// ENDIF
}
echo '

	<fieldset class="settings mediumsettings floatLeft" id="eventsettings" style="width: 470px;">
		<legend class="event">' . ((isset($this->_data['.'][0]['L_calendar_mode_event'])) ? $this->_data['.'][0]['L_calendar_mode_event'] : (($this->lang('calendar_mode_event')) ? $this->lang('calendar_mode_event') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_mode_event'))) . '         }')) . '</legend>
		<legend class="raid">' . ((isset($this->_data['.'][0]['L_calendar_mode_raid'])) ? $this->_data['.'][0]['L_calendar_mode_raid'] : (($this->lang('calendar_mode_raid')) ? $this->lang('calendar_mode_raid') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_mode_raid'))) . '         }')) . '</legend>

		<dl>
			<dt><label>' . ((isset($this->_data['.'][0]['L_calendar_mode'])) ? $this->_data['.'][0]['L_calendar_mode'] : (($this->lang('calendar_mode')) ? $this->lang('calendar_mode') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_mode'))) . '         }')) . '</label></dt>
			<dd>' . ((isset($this->_data['.'][0]['DR_CALENDARMODE'])) ? $this->_data['.'][0]['DR_CALENDARMODE'] : '') . '</dd>
		</dl>
		<dl class="raid">
			<dt><label>' . ((isset($this->_data['.'][0]['L_raidevent_template'])) ? $this->_data['.'][0]['L_raidevent_template'] : (($this->lang('raidevent_template')) ? $this->lang('raidevent_template') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raidevent_template'))) . '         }')) . '</label></dt>
			<dd>' . ((isset($this->_data['.'][0]['DR_TEMPLATE'])) ? $this->_data['.'][0]['DR_TEMPLATE'] : '') . ' <img src="../images/global/delete.png" alt="' . ((isset($this->_data['.'][0]['L_delete'])) ? $this->_data['.'][0]['L_delete'] : (($this->lang('delete')) ? $this->lang('delete') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'delete'))) . '         }')) . '" id="template_delbutton" /></dd>
		</dl>
		<hr />
		<dl>
			<dt><label>' . ((isset($this->_data['.'][0]['L_calendar'])) ? $this->_data['.'][0]['L_calendar'] : (($this->lang('calendar')) ? $this->lang('calendar') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar'))) . '         }')) . ':</label></dt>
			<dd>
				<select size="1" name="calendar_id" id="calendar_id" class="input">
					<option value=""></option>
				</select>
			</dd>
		</dl>
		<dl class="event">
			<dt><label>' . ((isset($this->_data['.'][0]['L_calendar_event_name'])) ? $this->_data['.'][0]['L_calendar_event_name'] : (($this->lang('calendar_event_name')) ? $this->lang('calendar_event_name') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_event_name'))) . '         }')) . ':</label></dt>
			<dd><input type="text" name="eventname" value="' . ((isset($this->_data['.'][0]['EVENTNAME'])) ? $this->_data['.'][0]['EVENTNAME'] : '') . '" class="input resettemplate_input {required:true, messages:{required:\'' . ((isset($this->_data['.'][0]['L_raidevent_event_val_name'])) ? $this->_data['.'][0]['L_raidevent_event_val_name'] : (($this->lang('raidevent_event_val_name')) ? $this->lang('raidevent_event_val_name') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raidevent_event_val_name'))) . '         }')) . '\'}" /></dd>
		</dl>
		<dl class="raid">
			<dt><label>' . ((isset($this->_data['.'][0]['L_raidevent_raidevent'])) ? $this->_data['.'][0]['L_raidevent_raidevent'] : (($this->lang('raidevent_raidevent')) ? $this->lang('raidevent_raidevent') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raidevent_raidevent'))) . '         }')) . ':</label></dt>
			<dd><span id="raidevent_dropdown">' . ((isset($this->_data['.'][0]['DR_EVENT'])) ? $this->_data['.'][0]['DR_EVENT'] : '') . '</span> <img src="../images/glyphs/add.png" alt="' . ((isset($this->_data['.'][0]['L_raidevent_raidevent_add'])) ? $this->_data['.'][0]['L_raidevent_raidevent_add'] : (($this->lang('raidevent_raidevent_add')) ? $this->lang('raidevent_raidevent_add') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raidevent_raidevent_add'))) . '         }')) . '" title="' . ((isset($this->_data['.'][0]['L_raidevent_raidevent_add'])) ? $this->_data['.'][0]['L_raidevent_raidevent_add'] : (($this->lang('raidevent_raidevent_add')) ? $this->lang('raidevent_raidevent_add') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raidevent_raidevent_add'))) . '         }')) . '" class="hand" onclick="AddEventDialog()" /></dd>
		</dl>
		<dl class="raid">
			<dt><label>' . ((isset($this->_data['.'][0]['L_raidevent_templatename'])) ? $this->_data['.'][0]['L_raidevent_templatename'] : (($this->lang('raidevent_templatename')) ? $this->lang('raidevent_templatename') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raidevent_templatename'))) . '         }')) . ':</label></dt>
			<dd><input type="text" name="templatename" value="' . ((isset($this->_data['.'][0]['TEMPLATE_NAME'])) ? $this->_data['.'][0]['TEMPLATE_NAME'] : '') . '" class="input resettemplate_input" id="name" /> ' . ((isset($this->_data['.'][0]['HELP_TEMPLATE'])) ? $this->_data['.'][0]['HELP_TEMPLATE'] : '') . '</dd>
		</dl>
		<dl class="raid">
			<dt><label>' . ((isset($this->_data['.'][0]['L_raidevent_value'])) ? $this->_data['.'][0]['L_raidevent_value'] : (($this->lang('raidevent_value')) ? $this->lang('raidevent_value') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raidevent_value'))) . '         }')) . ':</label></dt>
			<dd><input type="text" name="raid_value" size="8" maxlength="7" value="' . ((isset($this->_data['.'][0]['RAID_VALUE'])) ? $this->_data['.'][0]['RAID_VALUE'] : '') . '" class="input resettemplate_input" id="input_dkpvalue" /> ' . ((isset($this->_data['.'][0]['HELP_VALUE'])) ? $this->_data['.'][0]['HELP_VALUE'] : '') . '</dd>
		</dl>
		<dl class="raid">
			<dt><label>' . ((isset($this->_data['.'][0]['L_raidevent_raidleader'])) ? $this->_data['.'][0]['L_raidevent_raidleader'] : (($this->lang('raidevent_raidleader')) ? $this->lang('raidevent_raidleader') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raidevent_raidleader'))) . '         }')) . ':</label></dt>
			<dd>' . ((isset($this->_data['.'][0]['DR_RAIDLEADER'])) ? $this->_data['.'][0]['DR_RAIDLEADER'] : '') . '</dd>
		</dl>
		<dl>
			<dt><label><span id="startdate_title">' . ((isset($this->_data['.'][0]['L_calendar_startdate'])) ? $this->_data['.'][0]['L_calendar_startdate'] : (($this->lang('calendar_startdate')) ? $this->lang('calendar_startdate') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_startdate'))) . '         }')) . '</span>:</label></dt>
			<dd>' . ((isset($this->_data['.'][0]['JQ_DATE_START'])) ? $this->_data['.'][0]['JQ_DATE_START'] : '') . '</dd>
		</dl>
		<dl class="allday">
			<dt><label>' . ((isset($this->_data['.'][0]['L_calendar_enddate'])) ? $this->_data['.'][0]['L_calendar_enddate'] : (($this->lang('calendar_enddate')) ? $this->lang('calendar_enddate') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_enddate'))) . '         }')) . ':</label></dt>
			<dd>' . ((isset($this->_data['.'][0]['JQ_DATE_END'])) ? $this->_data['.'][0]['JQ_DATE_END'] : '') . '</dd>
		</dl>
		<dl class="raid">
			<dt><label>' . ((isset($this->_data['.'][0]['L_calendar_deadline'])) ? $this->_data['.'][0]['L_calendar_deadline'] : (($this->lang('calendar_deadline')) ? $this->lang('calendar_deadline') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_deadline'))) . '         }')) . ':</label></dt>
			<dd><input type="text" name="deadlinedate" id="deadlinedate" size="5" maxlength="255" value="' . ((isset($this->_data['.'][0]['DATE_DEADLINE'])) ? $this->_data['.'][0]['DATE_DEADLINE'] : '') . '" /> ' . ((isset($this->_data['.'][0]['L_calendar_deadline_entity'])) ? $this->_data['.'][0]['L_calendar_deadline_entity'] : (($this->lang('calendar_deadline_entity')) ? $this->lang('calendar_deadline_entity') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_deadline_entity'))) . '         }')) . '</dd>
		</dl>
		<dl>
			<dt><label>' . ((isset($this->_data['.'][0]['L_calendar_repeat'])) ? $this->_data['.'][0]['L_calendar_repeat'] : (($this->lang('calendar_repeat')) ? $this->lang('calendar_repeat') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_repeat'))) . '         }')) . ':</label></dt>
			<dd>' . ((isset($this->_data['.'][0]['DR_REPEAT'])) ? $this->_data['.'][0]['DR_REPEAT'] : '') . '</dd>
		</dl>
		<dl class="event">
			<dt><label>' . ((isset($this->_data['.'][0]['L_calendar_allday_event'])) ? $this->_data['.'][0]['L_calendar_allday_event'] : (($this->lang('calendar_allday_event')) ? $this->lang('calendar_allday_event') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_allday_event'))) . '         }')) . ':</label></dt>
			<dd>' . ((isset($this->_data['.'][0]['CB_ALLDAY'])) ? $this->_data['.'][0]['CB_ALLDAY'] : '') . '</dd>
		</dl>
		<dl>
			<dt><label>' . ((isset($this->_data['.'][0]['L_note'])) ? $this->_data['.'][0]['L_note'] : (($this->lang('note')) ? $this->lang('note') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'note'))) . '         }')) . ':</label></dt>
			<dd><textarea name="note" class="input resettemplate_input" id="input_note" rows="2" cols="32">' . ((isset($this->_data['.'][0]['NOTE'])) ? $this->_data['.'][0]['NOTE'] : '') . '</textarea></dd>
		</dl>

	</fieldset>

	<fieldset class="settings floatRight raid" style="width: 310px;">
		<legend>' . ((isset($this->_data['.'][0]['L_raidevent_attendees'])) ? $this->_data['.'][0]['L_raidevent_attendees'] : (($this->lang('raidevent_attendees')) ? $this->lang('raidevent_attendees') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raidevent_attendees'))) . '         }')) . '</legend>
		<dl>
			<dt><label><img src="../images/global/help.png" alt=""/> ' . ((isset($this->_data['.'][0]['L_calendar_distri'])) ? $this->_data['.'][0]['L_calendar_distri'] : (($this->lang('calendar_distri')) ? $this->lang('calendar_distri') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_distri'))) . '         }')) . ':</label></dt>
			<dd>' . ((isset($this->_data['.'][0]['DR_RAIDMODE'])) ? $this->_data['.'][0]['DR_RAIDMODE'] : '') . '</dd>
		</dl>
		<dl>
			<dt><label><img src="../images/calendar/summ.png" alt=""/> ' . ((isset($this->_data['.'][0]['L_raidevent_attendees'])) ? $this->_data['.'][0]['L_raidevent_attendees'] : (($this->lang('raidevent_attendees')) ? $this->lang('raidevent_attendees') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raidevent_attendees'))) . '         }')) . ':</label></dt>
			<dd><input type="text" size="3" maxlength="2" name="raid_attendees_count" value="' . ((isset($this->_data['.'][0]['ATTENDEES_COUNT'])) ? $this->_data['.'][0]['ATTENDEES_COUNT'] : '') . '" readonly="readonly" id="attendees_summ" /></dd>
		</dl>
		<div id="raidmode_class">
			<hr />
			';// BEGIN raid_classes
$_raid_classes_count = (isset($this->_data['raid_classes.'])) ?  sizeof($this->_data['raid_classes.']) : 0;
if ($_raid_classes_count) {
for ($_raid_classes_i = 0; $_raid_classes_i < $_raid_classes_count; $_raid_classes_i++)
{
echo '
			<dl>
				<dt><label class="class_' . ((isset($this->_data['raid_classes.'][$_raid_classes_i]['CLSSID'])) ? $this->_data['raid_classes.'][$_raid_classes_i]['CLSSID'] : '') . '">' . ((isset($this->_data['raid_classes.'][$_raid_classes_i]['ICON'])) ? $this->_data['raid_classes.'][$_raid_classes_i]['ICON'] : '') . ' ' . ((isset($this->_data['raid_classes.'][$_raid_classes_i]['LABEL'])) ? $this->_data['raid_classes.'][$_raid_classes_i]['LABEL'] : '') . ':</label></dt>
				<dd><input type="text" size="3" maxlength="2" name="' . ((isset($this->_data['raid_classes.'][$_raid_classes_i]['NAME'])) ? $this->_data['raid_classes.'][$_raid_classes_i]['NAME'] : '') . '" value="' . ((isset($this->_data['raid_classes.'][$_raid_classes_i]['COUNT'])) ? $this->_data['raid_classes.'][$_raid_classes_i]['COUNT'] : '') . '" class="attendees_count" id="inp_class_' . ((isset($this->_data['raid_classes.'][$_raid_classes_i]['CLSSID'])) ? $this->_data['raid_classes.'][$_raid_classes_i]['CLSSID'] : '') . '" ' . ((isset($this->_data['raid_classes.'][$_raid_classes_i]['DISABLED'])) ? $this->_data['raid_classes.'][$_raid_classes_i]['DISABLED'] : '') . ' /></dd>
			</dl>
			';}}
// END raid_classes
echo '
		</div>

		<div id="raidmode_role" style="display:none;">
			<hr />
			';// BEGIN raid_roles
$_raid_roles_count = (isset($this->_data['raid_roles.'])) ?  sizeof($this->_data['raid_roles.']) : 0;
if ($_raid_roles_count) {
for ($_raid_roles_i = 0; $_raid_roles_i < $_raid_roles_count; $_raid_roles_i++)
{
echo '
			<dl>
				<dt><label>' . ((isset($this->_data['raid_roles.'][$_raid_roles_i]['ICON'])) ? $this->_data['raid_roles.'][$_raid_roles_i]['ICON'] : '') . ' ' . ((isset($this->_data['raid_roles.'][$_raid_roles_i]['LABEL'])) ? $this->_data['raid_roles.'][$_raid_roles_i]['LABEL'] : '') . ':</label></dt>
				<dd><input type="text" size="3" maxlength="2" name="' . ((isset($this->_data['raid_roles.'][$_raid_roles_i]['NAME'])) ? $this->_data['raid_roles.'][$_raid_roles_i]['NAME'] : '') . '" value="' . ((isset($this->_data['raid_roles.'][$_raid_roles_i]['COUNT'])) ? $this->_data['raid_roles.'][$_raid_roles_i]['COUNT'] : '') . '" class="attendees_count" id="inp_role_' . ((isset($this->_data['raid_roles.'][$_raid_roles_i]['CLSSID'])) ? $this->_data['raid_roles.'][$_raid_roles_i]['CLSSID'] : '') . '" ' . ((isset($this->_data['raid_roles.'][$_raid_roles_i]['DISABLED'])) ? $this->_data['raid_roles.'][$_raid_roles_i]['DISABLED'] : '') . ' /></dd>
			</dl>
			';}}
// END raid_roles
echo '
		</div>
	</fieldset>
	<div class="clear"></div>

	';// IF IS_EDIT
if ($this->_data['.'][0]['IS_EDIT']) { 
echo '
		<input type="submit" name="upd" value="' . ((isset($this->_data['.'][0]['L_calendars_upd_button'])) ? $this->_data['.'][0]['L_calendars_upd_button'] : (($this->lang('calendars_upd_button')) ? $this->lang('calendars_upd_button') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendars_upd_button'))) . '         }')) . '" class="mainoption" />
		<input type="submit" name="addtemplate" value="' . ((isset($this->_data['.'][0]['L_raidevent_savetemplate'])) ? $this->_data['.'][0]['L_raidevent_savetemplate'] : (($this->lang('raidevent_savetemplate')) ? $this->lang('raidevent_savetemplate') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raidevent_savetemplate'))) . '         }')) . '" class="liteoption bi_archive raid" />
	';// ELSE
} else {
echo '
		<input type="hidden" name="addevent"/>
		<input type="submit" name="addevent" value="' . ((isset($this->_data['.'][0]['L_calendars_add_button'])) ? $this->_data['.'][0]['L_calendars_add_button'] : (($this->lang('calendars_add_button')) ? $this->lang('calendars_add_button') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendars_add_button'))) . '         }')) . '" class="mainoption bi_ok" id="submittheform"/>
		<input type="reset"  name="reset" value="' . ((isset($this->_data['.'][0]['L_reset'])) ? $this->_data['.'][0]['L_reset'] : (($this->lang('reset')) ? $this->lang('reset') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'reset'))) . '         }')) . '" class="liteoption bi_reset" />
		<input type="submit" name="addtemplate" value="' . ((isset($this->_data['.'][0]['L_raidevent_savetemplate'])) ? $this->_data['.'][0]['L_raidevent_savetemplate'] : (($this->lang('raidevent_savetemplate')) ? $this->lang('raidevent_savetemplate') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raidevent_savetemplate'))) . '         }')) . '" class="liteoption bi_archive raid" id="save_template" />
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