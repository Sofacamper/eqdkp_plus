<?php
if ($this->security()) {
// IF S_NO_HEADER_FOOTER
if ($this->_data['.'][0]['S_NO_HEADER_FOOTER']) { 
echo '
	<script type=\'text/javascript\'>
//<![CDATA[
	$(document).ready(function() {
		$(\'#calendar\').fullCalendar({
			allDayDefault: false,
			buttonText: {
				today: "' . ((isset($this->_data['.'][0]['L_calendar_today'])) ? $this->_data['.'][0]['L_calendar_today'] : (($this->lang('calendar_today')) ? $this->lang('calendar_today') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_today'))) . '         }')) . '",
				month: "' . ((isset($this->_data['.'][0]['L_calendar_month'])) ? $this->_data['.'][0]['L_calendar_month'] : (($this->lang('calendar_month')) ? $this->lang('calendar_month') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_month'))) . '         }')) . '",
				week: "' . ((isset($this->_data['.'][0]['L_calendar_week'])) ? $this->_data['.'][0]['L_calendar_week'] : (($this->lang('calendar_week')) ? $this->lang('calendar_week') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_week'))) . '         }')) . '",
				day: "' . ((isset($this->_data['.'][0]['L_calendar_day'])) ? $this->_data['.'][0]['L_calendar_day'] : (($this->lang('calendar_day')) ? $this->lang('calendar_day') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_day'))) . '         }')) . '"
			},
			allDayText: "' . ((isset($this->_data['.'][0]['calendar_allday'])) ? $this->_data['.'][0]['calendar_allday'] : '') . '",
			monthNames: ["' . ((isset($this->_data['.'][0]['monthnames:0'])) ? $this->_data['.'][0]['monthnames:0'] : '') . '","' . ((isset($this->_data['.'][0]['monthnames:1'])) ? $this->_data['.'][0]['monthnames:1'] : '') . '","' . ((isset($this->_data['.'][0]['monthnames:2'])) ? $this->_data['.'][0]['monthnames:2'] : '') . '","' . ((isset($this->_data['.'][0]['monthnames:3'])) ? $this->_data['.'][0]['monthnames:3'] : '') . '","' . ((isset($this->_data['.'][0]['monthnames:4'])) ? $this->_data['.'][0]['monthnames:4'] : '') . '","' . ((isset($this->_data['.'][0]['monthnames:5'])) ? $this->_data['.'][0]['monthnames:5'] : '') . '","' . ((isset($this->_data['.'][0]['monthnames:6'])) ? $this->_data['.'][0]['monthnames:6'] : '') . '","' . ((isset($this->_data['.'][0]['monthnames:7'])) ? $this->_data['.'][0]['monthnames:7'] : '') . '","' . ((isset($this->_data['.'][0]['monthnames:8'])) ? $this->_data['.'][0]['monthnames:8'] : '') . '","' . ((isset($this->_data['.'][0]['monthnames:9'])) ? $this->_data['.'][0]['monthnames:9'] : '') . '","' . ((isset($this->_data['.'][0]['monthnames:10'])) ? $this->_data['.'][0]['monthnames:10'] : '') . '","' . ((isset($this->_data['.'][0]['monthnames:11'])) ? $this->_data['.'][0]['monthnames:11'] : '') . '"],
			monthNamesShort: ["' . ((isset($this->_data['.'][0]['monthnames_short:0'])) ? $this->_data['.'][0]['monthnames_short:0'] : '') . '","' . ((isset($this->_data['.'][0]['monthnames_short:1'])) ? $this->_data['.'][0]['monthnames_short:1'] : '') . '","' . ((isset($this->_data['.'][0]['monthnames_short:2'])) ? $this->_data['.'][0]['monthnames_short:2'] : '') . '","' . ((isset($this->_data['.'][0]['monthnames_short:3'])) ? $this->_data['.'][0]['monthnames_short:3'] : '') . '","' . ((isset($this->_data['.'][0]['monthnames_short:4'])) ? $this->_data['.'][0]['monthnames_short:4'] : '') . '","' . ((isset($this->_data['.'][0]['monthnames_short:5'])) ? $this->_data['.'][0]['monthnames_short:5'] : '') . '","' . ((isset($this->_data['.'][0]['monthnames_short:6'])) ? $this->_data['.'][0]['monthnames_short:6'] : '') . '","' . ((isset($this->_data['.'][0]['monthnames_short:7'])) ? $this->_data['.'][0]['monthnames_short:7'] : '') . '","' . ((isset($this->_data['.'][0]['monthnames_short:8'])) ? $this->_data['.'][0]['monthnames_short:8'] : '') . '","' . ((isset($this->_data['.'][0]['monthnames_short:9'])) ? $this->_data['.'][0]['monthnames_short:9'] : '') . '","' . ((isset($this->_data['.'][0]['monthnames_short:10'])) ? $this->_data['.'][0]['monthnames_short:10'] : '') . '","' . ((isset($this->_data['.'][0]['monthnames_short:11'])) ? $this->_data['.'][0]['monthnames_short:11'] : '') . '"],
			dayNames: ["' . ((isset($this->_data['.'][0]['daynames:6'])) ? $this->_data['.'][0]['daynames:6'] : '') . '","' . ((isset($this->_data['.'][0]['daynames:0'])) ? $this->_data['.'][0]['daynames:0'] : '') . '","' . ((isset($this->_data['.'][0]['daynames:1'])) ? $this->_data['.'][0]['daynames:1'] : '') . '","' . ((isset($this->_data['.'][0]['daynames:2'])) ? $this->_data['.'][0]['daynames:2'] : '') . '","' . ((isset($this->_data['.'][0]['daynames:3'])) ? $this->_data['.'][0]['daynames:3'] : '') . '","' . ((isset($this->_data['.'][0]['daynames:4'])) ? $this->_data['.'][0]['daynames:4'] : '') . '","' . ((isset($this->_data['.'][0]['daynames:5'])) ? $this->_data['.'][0]['daynames:5'] : '') . '"],
			dayNamesShort: ["' . ((isset($this->_data['.'][0]['daynames_short:6'])) ? $this->_data['.'][0]['daynames_short:6'] : '') . '","' . ((isset($this->_data['.'][0]['daynames_short:0'])) ? $this->_data['.'][0]['daynames_short:0'] : '') . '","' . ((isset($this->_data['.'][0]['daynames_short:1'])) ? $this->_data['.'][0]['daynames_short:1'] : '') . '","' . ((isset($this->_data['.'][0]['daynames_short:2'])) ? $this->_data['.'][0]['daynames_short:2'] : '') . '","' . ((isset($this->_data['.'][0]['daynames_short:3'])) ? $this->_data['.'][0]['daynames_short:3'] : '') . '","' . ((isset($this->_data['.'][0]['daynames_short:4'])) ? $this->_data['.'][0]['daynames_short:4'] : '') . '","' . ((isset($this->_data['.'][0]['daynames_short:5'])) ? $this->_data['.'][0]['daynames_short:5'] : '') . '"],
			firstDay: ' . ((isset($this->_data['.'][0]['STARTDAY'])) ? $this->_data['.'][0]['STARTDAY'] : '') . ',

			// define the time formats
			axisFormat: \'H(:mm)\',
			columnFormat: {
				month: \'ddd\',		// Mo
				week: \'ddd d.M\',	// Do 16.12.
				day: \'dddd d.M\'		//Samstag, 13.12.
			},

			// The rest
			theme: true,
			header: {
				left: \'prev,next today\',
				center: \'title\',
				right: \'month,agendaWeek,agendaDay\'
			},
			timeFormat: {
				agenda: \'H:mm{ - H:mm}\',	// 5:00 - 6:30
				\'\': \'\'
			},
			dayClick: function(date, allDay, jsEvent, view) {
				if (allDay) {
					jQuery.FrameDialog.create({
						url: \'calendar/addevent.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&simple_head=true&timestamp=\'+(Date.parse(date)/1000),
						title: "' . ((isset($this->_data['.'][0]['L_calendar_win_add'])) ? $this->_data['.'][0]['L_calendar_win_add'] : (($this->lang('calendar_win_add')) ? $this->lang('calendar_win_add') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_win_add'))) . '         }')) . '",
						width: 900,
						height:700,
						modal: false,
						buttons: false,
						close: function(event, ui) { $(\'#calendar\').fullCalendar(\'refetchEvents\'); }
					});
					return false;
				}
			},
			eventRender: function(event, element) {
				if(event.icon){
					element.find(".fc-event-title").after($("<span class=\\"fc-event-icons\\"></span>").html("<img src=\'"+event.icon+"\' height=\'20px\' width=\'20px\' alt=\'\' class=\'absmiddle\' />"));
				}

				if(event.flag){
					element.find(".fc-event-title").after($("<span class=\\"fc-event-flag\\"></span>").html(event.flag));
				}

				if(event.closed){
					element.find(".fc-event-title").addClass("linethrough");
				}

				// onclick Event Tooltip
				if(!event.url){
					if(event.allDay){
						tmpttcontent = "<div class=\'calendartt_start\'>' . ((isset($this->_data['.'][0]['L_calendar_startdate'])) ? $this->_data['.'][0]['L_calendar_startdate'] : (($this->lang('calendar_startdate')) ? $this->lang('calendar_startdate') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_startdate'))) . '         }')) . ': "+$.fullCalendar.formatDate(event.start, \'dd.MM.yyyy\')+"</div>";
						if(($.fullCalendar.formatDate(event.end, \'dd\') != $.fullCalendar.formatDate(event.start, \'dd\')) || ($.fullCalendar.formatDate(event.end, \'MM\') != $.fullCalendar.formatDate(event.start, \'MM\'))){
							tmpttcontent += "<div class=\'calendartt_end\'>' . ((isset($this->_data['.'][0]['L_calendar_enddate'])) ? $this->_data['.'][0]['L_calendar_enddate'] : (($this->lang('calendar_enddate')) ? $this->lang('calendar_enddate') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_enddate'))) . '         }')) . ': "+$.fullCalendar.formatDate(event.end, \'dd.MM.yyyy\')+"</div>";
						}
						tmpttcontent += "<div class=\'calendartt_allday\'>' . ((isset($this->_data['.'][0]['L_calendar_allday'])) ? $this->_data['.'][0]['L_calendar_allday'] : (($this->lang('calendar_allday')) ? $this->lang('calendar_allday') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_allday'))) . '         }')) . '</div>";
					}else{
						tmpttcontent = "<div class=\'calendartt_start\'>' . ((isset($this->_data['.'][0]['L_calendar_startdate'])) ? $this->_data['.'][0]['L_calendar_startdate'] : (($this->lang('calendar_startdate')) ? $this->lang('calendar_startdate') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_startdate'))) . '         }')) . ': "+$.fullCalendar.formatDate(event.start, \'dd.MM.yyyy, H:mm\')+"</div>";
						tmpttcontent += "<div class=\'calendartt_end\'>' . ((isset($this->_data['.'][0]['L_calendar_enddate'])) ? $this->_data['.'][0]['L_calendar_enddate'] : (($this->lang('calendar_enddate')) ? $this->lang('calendar_enddate') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_enddate'))) . '         }')) . ': "+$.fullCalendar.formatDate(event.end, \'dd.MM.yyyy, H:mm\')+"</div>";
					}
					if(event.note){
						tmpttcontent += "<div class=\'calendartt_note\'>' . ((isset($this->_data['.'][0]['L_note'])) ? $this->_data['.'][0]['L_note'] : (($this->lang('note')) ? $this->lang('note') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'note'))) . '         }')) . ': "+event.note+"</div>";
					}
					element.qtip({
						content: tmpttcontent,
						position: {
							at: "bottom center",
							my: "top center"
						},
						style: {
							classes: \'ui-tooltip-shadow\',
							tip: {
								corner: true,
								width: 20
							},
							widget: true
						}
					});
				}else{
					tmpttcontent = \'\';
					tmpttcontent += (event.raidleader) ? "<div class=\'calendartt_raidleader\'>' . ((isset($this->_data['.'][0]['L_raidevent_raidleader'])) ? $this->_data['.'][0]['L_raidevent_raidleader'] : (($this->lang('raidevent_raidleader')) ? $this->lang('raidevent_raidleader') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raidevent_raidleader'))) . '         }')) . ': "+event.raidleader+"</div><br/>" : \'\';
					tmpttcontent = "<div class=\'calendartt_start\'>' . ((isset($this->_data['.'][0]['L_calendar_startdate'])) ? $this->_data['.'][0]['L_calendar_startdate'] : (($this->lang('calendar_startdate')) ? $this->lang('calendar_startdate') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_startdate'))) . '         }')) . ': "+$.fullCalendar.formatDate(event.start, \'dd.MM.yyyy, H:mm\')+"</div>";
					tmpttcontent += "<div class=\'calendartt_end\'>' . ((isset($this->_data['.'][0]['L_calendar_enddate'])) ? $this->_data['.'][0]['L_calendar_enddate'] : (($this->lang('calendar_enddate')) ? $this->lang('calendar_enddate') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_enddate'))) . '         }')) . ': "+$.fullCalendar.formatDate(event.end, \'dd.MM.yyyy, H:mm\')+"</div>";

					tmpttcontent += (event.rstatusdata) ? "<br/><div class=\'calendartt_raidcount\'>"+event.rstatusdata+"</div>" : \'\';

					tmpttcontent += (event.note) ? "<br/><div class=\'calendartt_note\'>' . ((isset($this->_data['.'][0]['L_note'])) ? $this->_data['.'][0]['L_note'] : (($this->lang('note')) ? $this->lang('note') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'note'))) . '         }')) . ': "+event.note+"</div>" : \'\';
					element.qtip({
						content: tmpttcontent,
						position: {
							at: "bottom center",
							my: "top center"
						},
						style: {
							classes: \'ui-tooltip-shadow\',
							tip: {
								corner: true,
								width: 20
							},
							widget: true
						}
					});
				}
			},
			eventResize: function(event,dayDelta,minuteDelta,revertFunc) {
				// Save after event-drop is finished, use ajax() cause of error callback
				$.ajax({
					type: "POST",
					url: \'calendar.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&link_hash=' . ((isset($this->_data['.'][0]['CSRF_RESIZE_TOKEN'])) ? $this->_data['.'][0]['CSRF_RESIZE_TOKEN'] : '') . '\',
					data: { "resize": true, "daydelta": dayDelta, "minutedelta": minuteDelta, "eventid": event.eventid },
					error: function(){
						revertFunc();
					},
					success: function(msg){
						$("#notify_container").notify("create", "success", msg);
					}
				});
			},
			eventDrop: function(event,dayDelta,minuteDelta,allDay,revertFunc) {
				// Save after event-drop is finished, use ajax() cause of error callback
				$.ajax({
					type: "POST",
					url: \'calendar.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&link_hash=' . ((isset($this->_data['.'][0]['CSRF_MOVE_TOKEN'])) ? $this->_data['.'][0]['CSRF_MOVE_TOKEN'] : '') . '\',
					data: { "move": true, "daydelta": dayDelta, "minutedelta": minuteDelta, "allday": allDay, "eventid": event.eventid },
					error: function(){
						revertFunc();
					},
					success: function(msg){
						$("#notify_container").notify("create", "success", msg);
					}
				});
			},
			loading: function(bool) {
				if (bool) $(\'#calendar_loading\').show();
				else $(\'#calendar_loading\').hide();
			},';// IF IS_OPERATOR
if ($this->_data['.'][0]['IS_OPERATOR']) { 
echo '
			eventMouseover: function(event, jsEvent, view) {
				var layer =	"<div id=\'events-layer\'><img class=\'hand\' height=\'16\' width=\'16\' src=\'images/global/edit.png\' alt=\'edit\' onClick=\'editEvent("+event.eventid+");\'>  <img class=\'hand\' height=\'16\' width=\'16\' src=\'images/global/delete.png\' alt=\'delete\' onClick=\'deleteEvent("+event.eventid+");\'></div>";
				$(this).append(layer);
			},
			eventMouseout: function(calEvent, domEvent) {
				$("#events-layer").remove();
			},';// ENDIF
}
echo '
			events: "calendar.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&json=true"
		});

		// add a new button to the calendar for the export
		addCalButton("left", "' . ((isset($this->_data['.'][0]['L_raideventlist_export_ical_button'])) ? $this->_data['.'][0]['L_raideventlist_export_ical_button'] : (($this->lang('raideventlist_export_ical_button')) ? $this->lang('raideventlist_export_ical_button') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raideventlist_export_ical_button'))) . '         }')) . '", "export_calendar");

		$("#export_calendar,#export_callist").qtip({
			content: {
				text: \'<img class="throbber" src="images/global/loading.gif" alt="Loading..." />\',
				ajax: {
					url: \'calendar.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&export_tooltip=true\'
				},
				title: {
					text: "' . ((isset($this->_data['.'][0]['L_calendar_export_head'])) ? $this->_data['.'][0]['L_calendar_export_head'] : (($this->lang('calendar_export_head')) ? $this->lang('calendar_export_head') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_export_head'))) . '         }')) . '",
					button: true
				}
			},
			position: {
				at: "bottom center",
				my: "top center"
			},
			style: {
				width: 500,
				tip: {
					corner: true,
					width: 20
				},
				widget: true
			},
			hide: false,
			show: {
				event: \'click\'
			}
		});

		$("#calendar_tab").tabs({
			fxSlide: true,
			fxFade: true,
			fxSpeed: \'normal\',
			selected: ($.cookie(\'eqdkpCalendarTabs\') || 0),
			select: function(e, ui) {
				$.cookie(\'eqdkpCalendarTabs\', ui.index, { expires: 30 });
			},
			show: function(event, ui) {
				$(\'#calendar\').fullCalendar(\'render\');
			}
		});

		$(\'[name="selected_ids[]"], #pdh_selectall1\').change( function() {
			if($(this).prop(\'checked\') == true && $(\'#raid_masssignin_panel\').is(\':hidden\')){
				$(\'#raid_masssignin_panel\').fadeIn(2000);
			}else{
				if($(\'#raid_masssignin_panel\').is(\':visible\') && $(\'[name="selected_ids[]"]\').filter(":checked").length == 0){
					$(\'#raid_masssignin_panel\').fadeOut("slow");
				}
			}
		});
	});

	function addCalButton(where, text, id) {
	    var my_button = \'<span class="fc-header-space"></span>\' +
	                    \'<span id="\' + id + \'" class="cal-button">\' + text +\'</span>\';
	    $("td.fc-header-" + where).append(my_button);
	    $("#" + id).button();
	}

	function editEvent(editid){
		jQuery.FrameDialog.create({
			url: \'calendar/addevent.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&simple_head=true&eventid=\'+editid,
			title: "' . ((isset($this->_data['.'][0]['L_calendar_win_edit'])) ? $this->_data['.'][0]['L_calendar_win_edit'] : (($this->lang('calendar_win_edit')) ? $this->lang('calendar_win_edit') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_win_edit'))) . '         }')) . '",
			width: 900,
			height:650,
			modal: false,
			buttons: false,
			close: function(event, ui) { $(\'#calendar\').fullCalendar(\'refetchEvents\'); }
		});
	}

	function deleteEvent(deleteid){
		$.get("calendar.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&checkrepeatable="+deleteid, function(data){
			if(data == \'true\'){
				var delclones_checked = \'\';
				$("#confirm_caleventdelete_all").dialog({
					resizable: false,
					height:200,
					width: 400,
					modal: true,
					buttons: {
						"' . ((isset($this->_data['.'][0]['L_delete'])) ? $this->_data['.'][0]['L_delete'] : (($this->lang('delete')) ? $this->lang('delete') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'delete'))) . '         }')) . '": function() {
							if($(\'#delete_all_clones\').prop(\'checked\')){
								delclones_checked = \'&delete_clones=true\';
							}
							$.post(\'calendar.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&link_hash=' . ((isset($this->_data['.'][0]['CSRF_DELETEID_TOKEN'])) ? $this->_data['.'][0]['CSRF_DELETEID_TOKEN'] : '') . '&deleteid=\'+deleteid+delclones_checked);
							$( this ).dialog( "close" );
							$(\'#calendar\').fullCalendar(\'refetchEvents\');
						},
						' . ((isset($this->_data['.'][0]['L_cancel'])) ? $this->_data['.'][0]['L_cancel'] : (($this->lang('cancel')) ? $this->lang('cancel') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'cancel'))) . '         }')) . ': function() {
							$( this ).dialog( "close" );
						}
					}
				});
			}else{
				$("#confirm_caleventdelete").dialog({
					resizable: false,
					height:180,
					modal: true,
					buttons: {
						"' . ((isset($this->_data['.'][0]['L_delete'])) ? $this->_data['.'][0]['L_delete'] : (($this->lang('delete')) ? $this->lang('delete') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'delete'))) . '         }')) . '": function() {
							$.post(\'calendar.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&link_hash=' . ((isset($this->_data['.'][0]['CSRF_DELETEID_TOKEN'])) ? $this->_data['.'][0]['CSRF_DELETEID_TOKEN'] : '') . '&deleteid=\'+deleteid);
							$( this ).dialog( "close" );
							$(\'#calendar\').fullCalendar(\'refetchEvents\');
						},
						' . ((isset($this->_data['.'][0]['L_cancel'])) ? $this->_data['.'][0]['L_cancel'] : (($this->lang('cancel')) ? $this->lang('cancel') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'cancel'))) . '         }')) . ': function() {
							$( this ).dialog( "close" );
						}
					}
				});
			}
		});
	}

//]]>
</script>
<div id="confirm_caleventdelete_all" style="display:none;" title="' . ((isset($this->_data['.'][0]['L_calendars_delete_title'])) ? $this->_data['.'][0]['L_calendars_delete_title'] : (($this->lang('calendars_delete_title')) ? $this->lang('calendars_delete_title') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendars_delete_title'))) . '         }')) . '">
	<p>
		<span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>
		' . ((isset($this->_data['.'][0]['L_calendars_delete_text'])) ? $this->_data['.'][0]['L_calendars_delete_text'] : (($this->lang('calendars_delete_text')) ? $this->lang('calendars_delete_text') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendars_delete_text'))) . '         }')) . '
	</p>
	<p>
		<input type="checkbox" name="deleteall" value="true" id="delete_all_clones" /> ' . ((isset($this->_data['.'][0]['L_calendars_deleteall_text'])) ? $this->_data['.'][0]['L_calendars_deleteall_text'] : (($this->lang('calendars_deleteall_text')) ? $this->lang('calendars_deleteall_text') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendars_deleteall_text'))) . '         }')) . '
	</p>
</div>
<div id="confirm_caleventdelete" style="display:none;" title="' . ((isset($this->_data['.'][0]['L_calendars_delete_title'])) ? $this->_data['.'][0]['L_calendars_delete_title'] : (($this->lang('calendars_delete_title')) ? $this->lang('calendars_delete_title') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendars_delete_title'))) . '         }')) . '">
	<p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>' . ((isset($this->_data['.'][0]['L_calendars_delete_text'])) ? $this->_data['.'][0]['L_calendars_delete_text'] : (($this->lang('calendars_delete_text')) ? $this->lang('calendars_delete_text') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendars_delete_text'))) . '         }')) . '</p>
</div>

<div id=\'calendar_tab\'>
	<ul>
		<li><a href=\'#fragment-calendar\'><span>' . ((isset($this->_data['.'][0]['L_calendar'])) ? $this->_data['.'][0]['L_calendar'] : (($this->lang('calendar')) ? $this->lang('calendar') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar'))) . '         }')) . '</span></a></li>
		<li><a href=\'#fragment-list\'><span>' . ((isset($this->_data['.'][0]['L_calendar_list'])) ? $this->_data['.'][0]['L_calendar_list'] : (($this->lang('calendar_list')) ? $this->lang('calendar_list') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_list'))) . '         }')) . '</span></a></li>
	</ul>

	<div id="fragment-calendar">
		<div id="calDialog"></div>
		<div id=\'calendar_loading\'><img src="' . ((isset($this->_data['.'][0]['TEMPLATE_PATH'])) ? $this->_data['.'][0]['TEMPLATE_PATH'] : '') . '/images/calendar_loading.gif" alt="loading" /> ' . ((isset($this->_data['.'][0]['L_lib_loading'])) ? $this->_data['.'][0]['L_lib_loading'] : (($this->lang('lib_loading')) ? $this->lang('lib_loading') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'lib_loading'))) . '         }')) . '</div>
		<div id=\'calendar\'></div>
	</div>

	<div id="fragment-list">
		<form name="masssignin" method="post" action="' . ((isset($this->_data['.'][0]['ACTION'])) ? $this->_data['.'][0]['ACTION'] : '') . '">
		<table width="100%" cellpadding="1" cellspacing="1" border="0">
			<tr>
				<th>
					<div class="calendar_export">
						<span id="export_callist"><img src="images/calendar/vcalendar_s.png" alt="iCal"/> ' . ((isset($this->_data['.'][0]['L_raideventlist_export_ical'])) ? $this->_data['.'][0]['L_raideventlist_export_ical'] : (($this->lang('raideventlist_export_ical')) ? $this->lang('raideventlist_export_ical') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raideventlist_export_ical'))) . '         }')) . '</span>
					</div>
				</th>
			</tr>
			<tr id="raid_masssignin_panel" style="display:none;">
				<td class="row1" colspan="10">
					<table cellpadding="1" cellspacing="2" border="0" width="100%">
						<tr>
							<td width="35%">' . ((isset($this->_data['.'][0]['L_raideventlist_masssignin'])) ? $this->_data['.'][0]['L_raideventlist_masssignin'] : (($this->lang('raideventlist_masssignin')) ? $this->lang('raideventlist_masssignin') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raideventlist_masssignin'))) . '         }')) . '</td>
							<td width="10%">' . ((isset($this->_data['.'][0]['DD_CHARS'])) ? $this->_data['.'][0]['DD_CHARS'] : '') . '</td>
							<td width="10%">' . ((isset($this->_data['.'][0]['DD_ROLES'])) ? $this->_data['.'][0]['DD_ROLES'] : '') . '</td>
							<td width="25%" align="right"><div class="rcal_comment_add">&nbsp;</div> ' . ((isset($this->_data['.'][0]['TXT_NOTE'])) ? $this->_data['.'][0]['TXT_NOTE'] : '') . '</td>
							<td width="10%">' . ((isset($this->_data['.'][0]['DD_STATUS'])) ? $this->_data['.'][0]['DD_STATUS'] : '') . '</td>
							<td width="10%"><input type="submit" name="mass_signin" value="' . ((isset($this->_data['.'][0]['L_raideventlist_masssignbttn'])) ? $this->_data['.'][0]['L_raideventlist_masssignbttn'] : (($this->lang('raideventlist_masssignbttn')) ? $this->lang('raideventlist_masssignbttn') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raideventlist_masssignbttn'))) . '         }')) . '" class="mainoption bi_ok" /></td>
						</tr>
					</table>

				</td>
			</tr>
			<tr>
				<td>
					<table width="100%" border="0" cellspacing="1" cellpadding="2" class="colorswitch">
						' . ((isset($this->_data['.'][0]['RAID_LIST'])) ? $this->_data['.'][0]['RAID_LIST'] : '') . '
					</table>
				</td>
			</tr>
		</table>
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
								<script type=\'text/javascript\'>
//<![CDATA[
	$(document).ready(function() {
		$(\'#calendar\').fullCalendar({
			allDayDefault: false,
			buttonText: {
				today: "' . ((isset($this->_data['.'][0]['L_calendar_today'])) ? $this->_data['.'][0]['L_calendar_today'] : (($this->lang('calendar_today')) ? $this->lang('calendar_today') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_today'))) . '         }')) . '",
				month: "' . ((isset($this->_data['.'][0]['L_calendar_month'])) ? $this->_data['.'][0]['L_calendar_month'] : (($this->lang('calendar_month')) ? $this->lang('calendar_month') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_month'))) . '         }')) . '",
				week: "' . ((isset($this->_data['.'][0]['L_calendar_week'])) ? $this->_data['.'][0]['L_calendar_week'] : (($this->lang('calendar_week')) ? $this->lang('calendar_week') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_week'))) . '         }')) . '",
				day: "' . ((isset($this->_data['.'][0]['L_calendar_day'])) ? $this->_data['.'][0]['L_calendar_day'] : (($this->lang('calendar_day')) ? $this->lang('calendar_day') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_day'))) . '         }')) . '"
			},
			allDayText: "' . ((isset($this->_data['.'][0]['calendar_allday'])) ? $this->_data['.'][0]['calendar_allday'] : '') . '",
			monthNames: ["' . ((isset($this->_data['.'][0]['monthnames:0'])) ? $this->_data['.'][0]['monthnames:0'] : '') . '","' . ((isset($this->_data['.'][0]['monthnames:1'])) ? $this->_data['.'][0]['monthnames:1'] : '') . '","' . ((isset($this->_data['.'][0]['monthnames:2'])) ? $this->_data['.'][0]['monthnames:2'] : '') . '","' . ((isset($this->_data['.'][0]['monthnames:3'])) ? $this->_data['.'][0]['monthnames:3'] : '') . '","' . ((isset($this->_data['.'][0]['monthnames:4'])) ? $this->_data['.'][0]['monthnames:4'] : '') . '","' . ((isset($this->_data['.'][0]['monthnames:5'])) ? $this->_data['.'][0]['monthnames:5'] : '') . '","' . ((isset($this->_data['.'][0]['monthnames:6'])) ? $this->_data['.'][0]['monthnames:6'] : '') . '","' . ((isset($this->_data['.'][0]['monthnames:7'])) ? $this->_data['.'][0]['monthnames:7'] : '') . '","' . ((isset($this->_data['.'][0]['monthnames:8'])) ? $this->_data['.'][0]['monthnames:8'] : '') . '","' . ((isset($this->_data['.'][0]['monthnames:9'])) ? $this->_data['.'][0]['monthnames:9'] : '') . '","' . ((isset($this->_data['.'][0]['monthnames:10'])) ? $this->_data['.'][0]['monthnames:10'] : '') . '","' . ((isset($this->_data['.'][0]['monthnames:11'])) ? $this->_data['.'][0]['monthnames:11'] : '') . '"],
			monthNamesShort: ["' . ((isset($this->_data['.'][0]['monthnames_short:0'])) ? $this->_data['.'][0]['monthnames_short:0'] : '') . '","' . ((isset($this->_data['.'][0]['monthnames_short:1'])) ? $this->_data['.'][0]['monthnames_short:1'] : '') . '","' . ((isset($this->_data['.'][0]['monthnames_short:2'])) ? $this->_data['.'][0]['monthnames_short:2'] : '') . '","' . ((isset($this->_data['.'][0]['monthnames_short:3'])) ? $this->_data['.'][0]['monthnames_short:3'] : '') . '","' . ((isset($this->_data['.'][0]['monthnames_short:4'])) ? $this->_data['.'][0]['monthnames_short:4'] : '') . '","' . ((isset($this->_data['.'][0]['monthnames_short:5'])) ? $this->_data['.'][0]['monthnames_short:5'] : '') . '","' . ((isset($this->_data['.'][0]['monthnames_short:6'])) ? $this->_data['.'][0]['monthnames_short:6'] : '') . '","' . ((isset($this->_data['.'][0]['monthnames_short:7'])) ? $this->_data['.'][0]['monthnames_short:7'] : '') . '","' . ((isset($this->_data['.'][0]['monthnames_short:8'])) ? $this->_data['.'][0]['monthnames_short:8'] : '') . '","' . ((isset($this->_data['.'][0]['monthnames_short:9'])) ? $this->_data['.'][0]['monthnames_short:9'] : '') . '","' . ((isset($this->_data['.'][0]['monthnames_short:10'])) ? $this->_data['.'][0]['monthnames_short:10'] : '') . '","' . ((isset($this->_data['.'][0]['monthnames_short:11'])) ? $this->_data['.'][0]['monthnames_short:11'] : '') . '"],
			dayNames: ["' . ((isset($this->_data['.'][0]['daynames:6'])) ? $this->_data['.'][0]['daynames:6'] : '') . '","' . ((isset($this->_data['.'][0]['daynames:0'])) ? $this->_data['.'][0]['daynames:0'] : '') . '","' . ((isset($this->_data['.'][0]['daynames:1'])) ? $this->_data['.'][0]['daynames:1'] : '') . '","' . ((isset($this->_data['.'][0]['daynames:2'])) ? $this->_data['.'][0]['daynames:2'] : '') . '","' . ((isset($this->_data['.'][0]['daynames:3'])) ? $this->_data['.'][0]['daynames:3'] : '') . '","' . ((isset($this->_data['.'][0]['daynames:4'])) ? $this->_data['.'][0]['daynames:4'] : '') . '","' . ((isset($this->_data['.'][0]['daynames:5'])) ? $this->_data['.'][0]['daynames:5'] : '') . '"],
			dayNamesShort: ["' . ((isset($this->_data['.'][0]['daynames_short:6'])) ? $this->_data['.'][0]['daynames_short:6'] : '') . '","' . ((isset($this->_data['.'][0]['daynames_short:0'])) ? $this->_data['.'][0]['daynames_short:0'] : '') . '","' . ((isset($this->_data['.'][0]['daynames_short:1'])) ? $this->_data['.'][0]['daynames_short:1'] : '') . '","' . ((isset($this->_data['.'][0]['daynames_short:2'])) ? $this->_data['.'][0]['daynames_short:2'] : '') . '","' . ((isset($this->_data['.'][0]['daynames_short:3'])) ? $this->_data['.'][0]['daynames_short:3'] : '') . '","' . ((isset($this->_data['.'][0]['daynames_short:4'])) ? $this->_data['.'][0]['daynames_short:4'] : '') . '","' . ((isset($this->_data['.'][0]['daynames_short:5'])) ? $this->_data['.'][0]['daynames_short:5'] : '') . '"],
			firstDay: ' . ((isset($this->_data['.'][0]['STARTDAY'])) ? $this->_data['.'][0]['STARTDAY'] : '') . ',

			// define the time formats
			axisFormat: \'H(:mm)\',
			columnFormat: {
				month: \'ddd\',		// Mo
				week: \'ddd d.M\',	// Do 16.12.
				day: \'dddd d.M\'		//Samstag, 13.12.
			},

			// The rest
			theme: true,
			header: {
				left: \'prev,next today\',
				center: \'title\',
				right: \'month,agendaWeek,agendaDay\'
			},
			timeFormat: {
				agenda: \'H:mm{ - H:mm}\',	// 5:00 - 6:30
				\'\': \'\'
			},
			dayClick: function(date, allDay, jsEvent, view) {
				if (allDay) {
					jQuery.FrameDialog.create({
						url: \'calendar/addevent.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&simple_head=true&timestamp=\'+(Date.parse(date)/1000),
						title: "' . ((isset($this->_data['.'][0]['L_calendar_win_add'])) ? $this->_data['.'][0]['L_calendar_win_add'] : (($this->lang('calendar_win_add')) ? $this->lang('calendar_win_add') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_win_add'))) . '         }')) . '",
						width: 900,
						height:700,
						modal: false,
						buttons: false,
						close: function(event, ui) { $(\'#calendar\').fullCalendar(\'refetchEvents\'); }
					});
					return false;
				}
			},
			eventRender: function(event, element) {
				if(event.icon){
					element.find(".fc-event-title").after($("<span class=\\"fc-event-icons\\"></span>").html("<img src=\'"+event.icon+"\' height=\'20px\' width=\'20px\' alt=\'\' class=\'absmiddle\' />"));
				}

				if(event.flag){
					element.find(".fc-event-title").after($("<span class=\\"fc-event-flag\\"></span>").html(event.flag));
				}

				if(event.closed){
					element.find(".fc-event-title").addClass("linethrough");
				}

				// onclick Event Tooltip
				if(!event.url){
					if(event.allDay){
						tmpttcontent = "<div class=\'calendartt_start\'>' . ((isset($this->_data['.'][0]['L_calendar_startdate'])) ? $this->_data['.'][0]['L_calendar_startdate'] : (($this->lang('calendar_startdate')) ? $this->lang('calendar_startdate') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_startdate'))) . '         }')) . ': "+$.fullCalendar.formatDate(event.start, \'dd.MM.yyyy\')+"</div>";
						if(($.fullCalendar.formatDate(event.end, \'dd\') != $.fullCalendar.formatDate(event.start, \'dd\')) || ($.fullCalendar.formatDate(event.end, \'MM\') != $.fullCalendar.formatDate(event.start, \'MM\'))){
							tmpttcontent += "<div class=\'calendartt_end\'>' . ((isset($this->_data['.'][0]['L_calendar_enddate'])) ? $this->_data['.'][0]['L_calendar_enddate'] : (($this->lang('calendar_enddate')) ? $this->lang('calendar_enddate') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_enddate'))) . '         }')) . ': "+$.fullCalendar.formatDate(event.end, \'dd.MM.yyyy\')+"</div>";
						}
						tmpttcontent += "<div class=\'calendartt_allday\'>' . ((isset($this->_data['.'][0]['L_calendar_allday'])) ? $this->_data['.'][0]['L_calendar_allday'] : (($this->lang('calendar_allday')) ? $this->lang('calendar_allday') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_allday'))) . '         }')) . '</div>";
					}else{
						tmpttcontent = "<div class=\'calendartt_start\'>' . ((isset($this->_data['.'][0]['L_calendar_startdate'])) ? $this->_data['.'][0]['L_calendar_startdate'] : (($this->lang('calendar_startdate')) ? $this->lang('calendar_startdate') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_startdate'))) . '         }')) . ': "+$.fullCalendar.formatDate(event.start, \'dd.MM.yyyy, H:mm\')+"</div>";
						tmpttcontent += "<div class=\'calendartt_end\'>' . ((isset($this->_data['.'][0]['L_calendar_enddate'])) ? $this->_data['.'][0]['L_calendar_enddate'] : (($this->lang('calendar_enddate')) ? $this->lang('calendar_enddate') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_enddate'))) . '         }')) . ': "+$.fullCalendar.formatDate(event.end, \'dd.MM.yyyy, H:mm\')+"</div>";
					}
					if(event.note){
						tmpttcontent += "<div class=\'calendartt_note\'>' . ((isset($this->_data['.'][0]['L_note'])) ? $this->_data['.'][0]['L_note'] : (($this->lang('note')) ? $this->lang('note') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'note'))) . '         }')) . ': "+event.note+"</div>";
					}
					element.qtip({
						content: tmpttcontent,
						position: {
							at: "bottom center",
							my: "top center"
						},
						style: {
							classes: \'ui-tooltip-shadow\',
							tip: {
								corner: true,
								width: 20
							},
							widget: true
						}
					});
				}else{
					tmpttcontent = \'\';
					tmpttcontent += (event.raidleader) ? "<div class=\'calendartt_raidleader\'>' . ((isset($this->_data['.'][0]['L_raidevent_raidleader'])) ? $this->_data['.'][0]['L_raidevent_raidleader'] : (($this->lang('raidevent_raidleader')) ? $this->lang('raidevent_raidleader') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raidevent_raidleader'))) . '         }')) . ': "+event.raidleader+"</div><br/>" : \'\';
					tmpttcontent = "<div class=\'calendartt_start\'>' . ((isset($this->_data['.'][0]['L_calendar_startdate'])) ? $this->_data['.'][0]['L_calendar_startdate'] : (($this->lang('calendar_startdate')) ? $this->lang('calendar_startdate') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_startdate'))) . '         }')) . ': "+$.fullCalendar.formatDate(event.start, \'dd.MM.yyyy, H:mm\')+"</div>";
					tmpttcontent += "<div class=\'calendartt_end\'>' . ((isset($this->_data['.'][0]['L_calendar_enddate'])) ? $this->_data['.'][0]['L_calendar_enddate'] : (($this->lang('calendar_enddate')) ? $this->lang('calendar_enddate') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_enddate'))) . '         }')) . ': "+$.fullCalendar.formatDate(event.end, \'dd.MM.yyyy, H:mm\')+"</div>";

					tmpttcontent += (event.rstatusdata) ? "<br/><div class=\'calendartt_raidcount\'>"+event.rstatusdata+"</div>" : \'\';

					tmpttcontent += (event.note) ? "<br/><div class=\'calendartt_note\'>' . ((isset($this->_data['.'][0]['L_note'])) ? $this->_data['.'][0]['L_note'] : (($this->lang('note')) ? $this->lang('note') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'note'))) . '         }')) . ': "+event.note+"</div>" : \'\';
					element.qtip({
						content: tmpttcontent,
						position: {
							at: "bottom center",
							my: "top center"
						},
						style: {
							classes: \'ui-tooltip-shadow\',
							tip: {
								corner: true,
								width: 20
							},
							widget: true
						}
					});
				}
			},
			eventResize: function(event,dayDelta,minuteDelta,revertFunc) {
				// Save after event-drop is finished, use ajax() cause of error callback
				$.ajax({
					type: "POST",
					url: \'calendar.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&link_hash=' . ((isset($this->_data['.'][0]['CSRF_RESIZE_TOKEN'])) ? $this->_data['.'][0]['CSRF_RESIZE_TOKEN'] : '') . '\',
					data: { "resize": true, "daydelta": dayDelta, "minutedelta": minuteDelta, "eventid": event.eventid },
					error: function(){
						revertFunc();
					},
					success: function(msg){
						$("#notify_container").notify("create", "success", msg);
					}
				});
			},
			eventDrop: function(event,dayDelta,minuteDelta,allDay,revertFunc) {
				// Save after event-drop is finished, use ajax() cause of error callback
				$.ajax({
					type: "POST",
					url: \'calendar.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&link_hash=' . ((isset($this->_data['.'][0]['CSRF_MOVE_TOKEN'])) ? $this->_data['.'][0]['CSRF_MOVE_TOKEN'] : '') . '\',
					data: { "move": true, "daydelta": dayDelta, "minutedelta": minuteDelta, "allday": allDay, "eventid": event.eventid },
					error: function(){
						revertFunc();
					},
					success: function(msg){
						$("#notify_container").notify("create", "success", msg);
					}
				});
			},
			loading: function(bool) {
				if (bool) $(\'#calendar_loading\').show();
				else $(\'#calendar_loading\').hide();
			},';// IF IS_OPERATOR
if ($this->_data['.'][0]['IS_OPERATOR']) { 
echo '
			eventMouseover: function(event, jsEvent, view) {
				var layer =	"<div id=\'events-layer\'><img class=\'hand\' height=\'16\' width=\'16\' src=\'images/global/edit.png\' alt=\'edit\' onClick=\'editEvent("+event.eventid+");\'>  <img class=\'hand\' height=\'16\' width=\'16\' src=\'images/global/delete.png\' alt=\'delete\' onClick=\'deleteEvent("+event.eventid+");\'></div>";
				$(this).append(layer);
			},
			eventMouseout: function(calEvent, domEvent) {
				$("#events-layer").remove();
			},';// ENDIF
}
echo '
			events: "calendar.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&json=true"
		});

		// add a new button to the calendar for the export
		addCalButton("left", "' . ((isset($this->_data['.'][0]['L_raideventlist_export_ical_button'])) ? $this->_data['.'][0]['L_raideventlist_export_ical_button'] : (($this->lang('raideventlist_export_ical_button')) ? $this->lang('raideventlist_export_ical_button') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raideventlist_export_ical_button'))) . '         }')) . '", "export_calendar");

		$("#export_calendar,#export_callist").qtip({
			content: {
				text: \'<img class="throbber" src="images/global/loading.gif" alt="Loading..." />\',
				ajax: {
					url: \'calendar.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&export_tooltip=true\'
				},
				title: {
					text: "' . ((isset($this->_data['.'][0]['L_calendar_export_head'])) ? $this->_data['.'][0]['L_calendar_export_head'] : (($this->lang('calendar_export_head')) ? $this->lang('calendar_export_head') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_export_head'))) . '         }')) . '",
					button: true
				}
			},
			position: {
				at: "bottom center",
				my: "top center"
			},
			style: {
				width: 500,
				tip: {
					corner: true,
					width: 20
				},
				widget: true
			},
			hide: false,
			show: {
				event: \'click\'
			}
		});

		$("#calendar_tab").tabs({
			fxSlide: true,
			fxFade: true,
			fxSpeed: \'normal\',
			selected: ($.cookie(\'eqdkpCalendarTabs\') || 0),
			select: function(e, ui) {
				$.cookie(\'eqdkpCalendarTabs\', ui.index, { expires: 30 });
			},
			show: function(event, ui) {
				$(\'#calendar\').fullCalendar(\'render\');
			}
		});

		$(\'[name="selected_ids[]"], #pdh_selectall1\').change( function() {
			if($(this).prop(\'checked\') == true && $(\'#raid_masssignin_panel\').is(\':hidden\')){
				$(\'#raid_masssignin_panel\').fadeIn(2000);
			}else{
				if($(\'#raid_masssignin_panel\').is(\':visible\') && $(\'[name="selected_ids[]"]\').filter(":checked").length == 0){
					$(\'#raid_masssignin_panel\').fadeOut("slow");
				}
			}
		});
	});

	function addCalButton(where, text, id) {
	    var my_button = \'<span class="fc-header-space"></span>\' +
	                    \'<span id="\' + id + \'" class="cal-button">\' + text +\'</span>\';
	    $("td.fc-header-" + where).append(my_button);
	    $("#" + id).button();
	}

	function editEvent(editid){
		jQuery.FrameDialog.create({
			url: \'calendar/addevent.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&simple_head=true&eventid=\'+editid,
			title: "' . ((isset($this->_data['.'][0]['L_calendar_win_edit'])) ? $this->_data['.'][0]['L_calendar_win_edit'] : (($this->lang('calendar_win_edit')) ? $this->lang('calendar_win_edit') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_win_edit'))) . '         }')) . '",
			width: 900,
			height:650,
			modal: false,
			buttons: false,
			close: function(event, ui) { $(\'#calendar\').fullCalendar(\'refetchEvents\'); }
		});
	}

	function deleteEvent(deleteid){
		$.get("calendar.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&checkrepeatable="+deleteid, function(data){
			if(data == \'true\'){
				var delclones_checked = \'\';
				$("#confirm_caleventdelete_all").dialog({
					resizable: false,
					height:200,
					width: 400,
					modal: true,
					buttons: {
						"' . ((isset($this->_data['.'][0]['L_delete'])) ? $this->_data['.'][0]['L_delete'] : (($this->lang('delete')) ? $this->lang('delete') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'delete'))) . '         }')) . '": function() {
							if($(\'#delete_all_clones\').prop(\'checked\')){
								delclones_checked = \'&delete_clones=true\';
							}
							$.post(\'calendar.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&link_hash=' . ((isset($this->_data['.'][0]['CSRF_DELETEID_TOKEN'])) ? $this->_data['.'][0]['CSRF_DELETEID_TOKEN'] : '') . '&deleteid=\'+deleteid+delclones_checked);
							$( this ).dialog( "close" );
							$(\'#calendar\').fullCalendar(\'refetchEvents\');
						},
						' . ((isset($this->_data['.'][0]['L_cancel'])) ? $this->_data['.'][0]['L_cancel'] : (($this->lang('cancel')) ? $this->lang('cancel') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'cancel'))) . '         }')) . ': function() {
							$( this ).dialog( "close" );
						}
					}
				});
			}else{
				$("#confirm_caleventdelete").dialog({
					resizable: false,
					height:180,
					modal: true,
					buttons: {
						"' . ((isset($this->_data['.'][0]['L_delete'])) ? $this->_data['.'][0]['L_delete'] : (($this->lang('delete')) ? $this->lang('delete') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'delete'))) . '         }')) . '": function() {
							$.post(\'calendar.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&link_hash=' . ((isset($this->_data['.'][0]['CSRF_DELETEID_TOKEN'])) ? $this->_data['.'][0]['CSRF_DELETEID_TOKEN'] : '') . '&deleteid=\'+deleteid);
							$( this ).dialog( "close" );
							$(\'#calendar\').fullCalendar(\'refetchEvents\');
						},
						' . ((isset($this->_data['.'][0]['L_cancel'])) ? $this->_data['.'][0]['L_cancel'] : (($this->lang('cancel')) ? $this->lang('cancel') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'cancel'))) . '         }')) . ': function() {
							$( this ).dialog( "close" );
						}
					}
				});
			}
		});
	}

//]]>
</script>
<div id="confirm_caleventdelete_all" style="display:none;" title="' . ((isset($this->_data['.'][0]['L_calendars_delete_title'])) ? $this->_data['.'][0]['L_calendars_delete_title'] : (($this->lang('calendars_delete_title')) ? $this->lang('calendars_delete_title') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendars_delete_title'))) . '         }')) . '">
	<p>
		<span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>
		' . ((isset($this->_data['.'][0]['L_calendars_delete_text'])) ? $this->_data['.'][0]['L_calendars_delete_text'] : (($this->lang('calendars_delete_text')) ? $this->lang('calendars_delete_text') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendars_delete_text'))) . '         }')) . '
	</p>
	<p>
		<input type="checkbox" name="deleteall" value="true" id="delete_all_clones" /> ' . ((isset($this->_data['.'][0]['L_calendars_deleteall_text'])) ? $this->_data['.'][0]['L_calendars_deleteall_text'] : (($this->lang('calendars_deleteall_text')) ? $this->lang('calendars_deleteall_text') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendars_deleteall_text'))) . '         }')) . '
	</p>
</div>
<div id="confirm_caleventdelete" style="display:none;" title="' . ((isset($this->_data['.'][0]['L_calendars_delete_title'])) ? $this->_data['.'][0]['L_calendars_delete_title'] : (($this->lang('calendars_delete_title')) ? $this->lang('calendars_delete_title') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendars_delete_title'))) . '         }')) . '">
	<p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>' . ((isset($this->_data['.'][0]['L_calendars_delete_text'])) ? $this->_data['.'][0]['L_calendars_delete_text'] : (($this->lang('calendars_delete_text')) ? $this->lang('calendars_delete_text') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendars_delete_text'))) . '         }')) . '</p>
</div>

<div id=\'calendar_tab\'>
	<ul>
		<li><a href=\'#fragment-calendar\'><span>' . ((isset($this->_data['.'][0]['L_calendar'])) ? $this->_data['.'][0]['L_calendar'] : (($this->lang('calendar')) ? $this->lang('calendar') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar'))) . '         }')) . '</span></a></li>
		<li><a href=\'#fragment-list\'><span>' . ((isset($this->_data['.'][0]['L_calendar_list'])) ? $this->_data['.'][0]['L_calendar_list'] : (($this->lang('calendar_list')) ? $this->lang('calendar_list') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_list'))) . '         }')) . '</span></a></li>
	</ul>

	<div id="fragment-calendar">
		<div id="calDialog"></div>
		<div id=\'calendar_loading\'><img src="' . ((isset($this->_data['.'][0]['TEMPLATE_PATH'])) ? $this->_data['.'][0]['TEMPLATE_PATH'] : '') . '/images/calendar_loading.gif" alt="loading" /> ' . ((isset($this->_data['.'][0]['L_lib_loading'])) ? $this->_data['.'][0]['L_lib_loading'] : (($this->lang('lib_loading')) ? $this->lang('lib_loading') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'lib_loading'))) . '         }')) . '</div>
		<div id=\'calendar\'></div>
	</div>

	<div id="fragment-list">
		<form name="masssignin" method="post" action="' . ((isset($this->_data['.'][0]['ACTION'])) ? $this->_data['.'][0]['ACTION'] : '') . '">
		<table width="100%" cellpadding="1" cellspacing="1" border="0">
			<tr>
				<th>
					<div class="calendar_export">
						<span id="export_callist"><img src="images/calendar/vcalendar_s.png" alt="iCal"/> ' . ((isset($this->_data['.'][0]['L_raideventlist_export_ical'])) ? $this->_data['.'][0]['L_raideventlist_export_ical'] : (($this->lang('raideventlist_export_ical')) ? $this->lang('raideventlist_export_ical') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raideventlist_export_ical'))) . '         }')) . '</span>
					</div>
				</th>
			</tr>
			<tr id="raid_masssignin_panel" style="display:none;">
				<td class="row1" colspan="10">
					<table cellpadding="1" cellspacing="2" border="0" width="100%">
						<tr>
							<td width="35%">' . ((isset($this->_data['.'][0]['L_raideventlist_masssignin'])) ? $this->_data['.'][0]['L_raideventlist_masssignin'] : (($this->lang('raideventlist_masssignin')) ? $this->lang('raideventlist_masssignin') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raideventlist_masssignin'))) . '         }')) . '</td>
							<td width="10%">' . ((isset($this->_data['.'][0]['DD_CHARS'])) ? $this->_data['.'][0]['DD_CHARS'] : '') . '</td>
							<td width="10%">' . ((isset($this->_data['.'][0]['DD_ROLES'])) ? $this->_data['.'][0]['DD_ROLES'] : '') . '</td>
							<td width="25%" align="right"><div class="rcal_comment_add">&nbsp;</div> ' . ((isset($this->_data['.'][0]['TXT_NOTE'])) ? $this->_data['.'][0]['TXT_NOTE'] : '') . '</td>
							<td width="10%">' . ((isset($this->_data['.'][0]['DD_STATUS'])) ? $this->_data['.'][0]['DD_STATUS'] : '') . '</td>
							<td width="10%"><input type="submit" name="mass_signin" value="' . ((isset($this->_data['.'][0]['L_raideventlist_masssignbttn'])) ? $this->_data['.'][0]['L_raideventlist_masssignbttn'] : (($this->lang('raideventlist_masssignbttn')) ? $this->lang('raideventlist_masssignbttn') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raideventlist_masssignbttn'))) . '         }')) . '" class="mainoption bi_ok" /></td>
						</tr>
					</table>

				</td>
			</tr>
			<tr>
				<td>
					<table width="100%" border="0" cellspacing="1" cellpadding="2" class="colorswitch">
						' . ((isset($this->_data['.'][0]['RAID_LIST'])) ? $this->_data['.'][0]['RAID_LIST'] : '') . '
					</table>
				</td>
			</tr>
		</table>
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