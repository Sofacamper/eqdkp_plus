<?php
 /*
 * Project:		EQdkp-Plus
 * License:		Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:		2011
 * Date:		$Date: 2012-11-30 20:35:42 +0100 (Fr, 30. Nov 2012) $
 * -----------------------------------------------------------------------
 * @author		$Author: hoofy_leon $
 * @copyright	2006-2011 EQdkp-Plus Developer Team
 * @link		http://eqdkp-plus.com
 * @package		eqdkp-plus
 * @version		$Rev: 12519 $
 *
 * $Id: update_107.class.php 12519 2012-11-30 19:35:42Z hoofy_leon $
 */

if ( !defined('EQDKP_INC') ){
  header('HTTP/1.0 404 Not Found');exit;
}

include_once(registry::get_const('root_path').'maintenance/includes/sql_update_task.class.php');

class update_107 extends sql_update_task {
	public $author		= 'GodMod';
	public $version		= '1.0.7'; //new plus-version
	public $name		= '1.0.7 Update';

	public function __construct(){
		parent::__construct();

		$this->langs = array(
			'english' => array(
				'update_107'		=> 'EQdkp Plus 1.0.7 Update',
				'task01'			=> 'Alter item table',
			),
			'german' => array(
				'update_107'		=> 'EQdkp Plus 1.0.7 Update',
				'task01'			=> 'Verändere item Tabelle',
			),
		);

		$this->sqls = array(
			'task01' => "ALTER TABLE `__items`CHANGE COLUMN `item_value` `item_value` FLOAT(10,2) NULL DEFAULT NULL;",
		);
	}
}

if(version_compare(PHP_VERSION, '5.3.0', '<')) registry::add_const('short_update_107', update_107::__shortcuts());
?>