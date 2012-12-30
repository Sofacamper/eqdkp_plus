<?php
 /*
 * Project:		EQdkp-Plus
 * License:		Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:		2009
 * Date:		$Date: 2012-12-15 10:48:40 +0100 (Sat, 15 Dec 2012) $
 * -----------------------------------------------------------------------
 * @author		$Author: godmod $
 * @copyright	2006-2011 EQdkp-Plus Developer Team
 * @link		http://eqdkp-plus.com
 * @package		eqdkp-plus
 * @version		$Rev: 12590 $
 * 
 * $Id: english.php 12590 2012-12-15 09:48:40Z godmod $
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}
$english_array =  array(
	'classes' => array(
		0	=> 'Unknown',
		1	=> 'Engineering',
		2	=> 'Science',
		3	=> 'Tactical',
	),
	'races' => array(
		//Federation
		'Unknown',
		'Human',
		'Vulcan',
		'Bajoran',
		'Bolian',
		'Benzite ',
		'Betazoid',
		'Andorian',
		'Saurian',
		'Tellarite',
		'Ferengi',
		'Pakled',
		'Caitian',
		'Rigelian',
		//Klingon Empire
		'Orion',
		'Gorn',
		'Nausicaan',
		'Lethean',
		'Ferasan',
		//Shared
		'Klingon',
		'Liberated Borg',
		'Alien',
		'Trill',
	),
	'factions' => array(
		'Federation',
		'Klingon Empire',
	),
	'lang' => array(
		'sto' => 'Star Trek Online',
	),
);

?>