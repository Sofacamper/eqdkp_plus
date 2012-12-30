<?php
 /*
 * Project:		EQdkp-Plus
 * License:		Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:		2009
 * Date:		$Date: 2012-11-17 14:15:58 +0100 (Sat, 17 Nov 2012) $
 * -----------------------------------------------------------------------
 * @author		$Author: godmod $
 * @copyright	2006-2011 EQdkp-Plus Developer Team
 * @link		http://eqdkp-plus.com
 * @package		eqdkp-plus
 * @version		$Rev: 12470 $
 * 
 * $Id: calevents_list.php 12470 2012-11-17 13:15:58Z godmod $
 */

if (!defined('EQDKP_INC')){
	die('Do not access this file directly.');
}

if (!class_exists('exchange_calevents_list')){
	class exchange_calevents_list extends gen_class{
		public static $shortcuts = array('user', 'config', 'pdh', 'time', 'pex'=>'plus_exchange', 'env'=>'environment');
		public $options		= array();

		public function get_calevents_list($params, $body){
			if ($this->user->check_auth('u_calendar_view', false)){
	
				//Input-Vars:
				// - raids_only 0/1(default: 1)
				// - number (default: 10)
				$blnRaidOnly = (isset($params['get']['raids_only']) && intval($params['get']['raids_only']) == 0) ? false : true;
				$intNumber = (intval($params['get']['number']) > 0) ?  intval($params['get']['number']) : 10;

				$arrRaidIDlist = $this->pdh->get('calendar_events', 'id_list', array($blnRaidOnly, $this->time->time));
				$arrRaidIDlist = $this->pdh->sort($arrRaidIDlist, 'calendar_events', 'date', 'asc');
				if (is_array($arrRaidIDlist)) {
					$arrRaidIDlist = array_slice($arrRaidIDlist, 0, $intNumber);
				}
				$out['events'] = array();
				if (is_array($arrRaidIDlist)){
					foreach ($arrRaidIDlist as $intRaidID){
						$eventextension	= $this->pdh->get('calendar_events', 'extension', array($intRaidID));
						$raidmode		= ((int)$this->pdh->get('calendar_events', 'calendartype', array($intRaidID)) == 1) ? true : false;
						$eventcolor		= $this->pdh->get('calendars', 'color', $this->pdh->get('calendar_events', 'calendar_id', array($intRaidID)));
						
						// fetch the attendees
						$attendees_raw = $this->pdh->get('calendar_raids_attendees', 'attendees', array($intRaidID));
						$attendees = array();
						if(is_array($attendees_raw)){
							foreach($attendees_raw as $attendeeid=>$attendeerow){
								$attendees[$attendeerow['signup_status']][$attendeeid] = $attendeerow;
							}
						}

						// Build the guest array
						$guests	= array();
						if(registry::register('config')->get('calendar_raid_guests') == 1){
							$guestarray = registry::register('plus_datahandler')->get('calendar_raids_guests', 'members', array($calid));
							if(is_array($guestarray)){
								foreach($guestarray as $guest_row){
									$guests[] = $guest_row['name'];
								}
							}
						}

						// fetch per raid data
						$raidcal_status = unserialize($this->config->get('calendar_raid_status'));
						$rstatusdata = array();
						if(is_array($raidcal_status)){
							foreach($raidcal_status as $raidcalstat_id){
								if($raidcalstat_id != 4){
									$actcount  = ((isset($attendees[$raidcalstat_id])) ? count($attendees[$raidcalstat_id]) : 0);
									if($raidcalstat_id == 0){
										$actcount += (is_array($guests) ? count($guests) : 0);
									}
									$rstatusdata['status'.$raidcalstat_id] = array(
										'id'	=> $raidcalstat_id,
										'name'	=> $this->user->lang(array('raidevent_raid_status', $raidcalstat_id)),
										'count'	=> $actcount,
									);
								}
							}
						}
						$rstatusdata['required'] = ((isset($eventextension['attendee_count'])) ? $eventextension['attendee_count'] : 0);
						
						$memberdata = $this->pdh->get('calendar_raids_attendees', 'myattendees', array($intRaidID, $this->user->data['user_id']));
						if($memberdata['member_id'] > 0){
							$memberstatus = $this->pdh->get('calendar_raids_attendees', 'status', array($intRaidID, $memberdata['member_id']));
						} else {
							$memberstatus = -1;
						}
					
						$arrRaids['event:'.$intRaidID] = array(
							'type'			=> ($raidmode) ? 'raid' : 'event',
							'title' 		=> $this->pdh->get('calendar_events', 'name', array($intRaidID)),
							'start'			=> $this->time->date('Y-m-d H:i', $this->pdh->get('calendar_events', 'time_start', array($intRaidID))),
							'start_timestamp'=> $this->pdh->get('calendar_events', 'time_start', array($intRaidID)),
							'end'			=> $this->time->date('Y-m-d H:i', $this->pdh->get('calendar_events', 'time_end', array($intRaidID))),
							'end_timestamp'	=> $this->pdh->get('calendar_events', 'time_end', array($intRaidID)),
							'allDay'		=> ($this->pdh->get('calendar_events', 'allday', array($intRaidID)) > 0) ? 1 : 0,
							'closed'		=> ($this->pdh->get('calendar_events', 'raidstatus', array($intRaidID)) == 1) ? 1 : 0,
							'eventid'		=> $intRaidID,						
							'url'			=> ($raidmode) ? 'calendar/viewcalraid.php?eventid='.$intRaidID : '',
							'icon'			=> ($eventextension['raid_eventid']) ? $this->pdh->get('event', 'icon', array($eventextension['raid_eventid'], true, true)) : '',
							'note'			=> $this->pdh->get('calendar_events', 'notes', array($intRaidID)),
							'raidleader'	=> ($eventextension['raidleader'] > 0) ? implode(', ', $this->pdh->aget('member', 'name', 0, array($eventextension['raidleader']))) : '',
							'raidstatus'	=> ($raidmode) ? $rstatusdata : '',
							'user_status'	=> ($raidmode) ? $memberstatus : '',
							'color'			=> '#'.$eventcolor,
							'calendar'		=> $this->pdh->get('calendar_events', 'calendar_id', array($intRaidID)),
							'calendar_name'	=> $this->pdh->get('calendar_events', 'calendar', array($intRaidID)),
							'icalfeed'		=> ($this->user->is_signedin()) ? $this->env->link.'exchange.php?out=icalfeed&module=calendar&key='.$this->user->data['exchange_key'] : '',
						);
					}
					$out['events'] = $arrRaids;
				}
				return $out;
			} else {
				return $this->pex->error('access denied');
			}

		}
	}
}
if(version_compare(PHP_VERSION, '5.3.0', '<')) registry::add_const('short_exchange_calevents_list', exchange_calevents_list::$shortcuts);
?>