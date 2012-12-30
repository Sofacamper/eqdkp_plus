<?php
 /*
 * Project:		EQdkp-Plus
 * License:		Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:		2011
 * Date:		$Date: 2012-12-19 21:48:13 +0100 (Wed, 19 Dec 2012) $
 * -----------------------------------------------------------------------
 * @author		$Author: godmod $
 * @copyright	2006-2011 EQdkp-Plus Developer Team
 * @link		http://eqdkp-plus.com
 * @package		eqdkp-plus
 * @version		$Rev: 12647 $
 * 
 * $Id: english.php 12647 2012-12-19 20:48:13Z godmod $
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}
$english_array =  array(
	'classes' => array(
		0	=> 'Unknown',
		1	=> 'Admin',
		2	=> 'Combat',
		3	=> 'ISD',
		4	=> 'Resource',
		5	=> 'Services'
	),

	'races' => array(
		'Unknown',
		'Standard'
	),
	'factions' => array(
		'Amarr',
		'Caldari',
		'Gallente',
		'Minmatar'
	),
	'lang' => array(
		'eveonline' => 'EVE Online',
	),
);

?>