<?php
 /*
 * Project:		EQdkp-Plus
 * License:		Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:		2011
 * Date:		$Date: 2012-11-30 20:35:42 +0100 (Fri, 30 Nov 2012) $
 * -----------------------------------------------------------------------
 * @author		$Author: hoofy_leon $
 * @copyright	2006-2011 EQdkp-Plus Developer Team
 * @link		http://eqdkp-plus.com
 * @package		eqdkp-plus
 * @version		$Rev: 12519 $
 *
 * $Id: update_104.class.php 12519 2012-11-30 19:35:42Z hoofy_leon $
 */

if ( !defined('EQDKP_INC') ){
  header('HTTP/1.0 404 Not Found');exit;
}

include_once(registry::get_const('root_path').'maintenance/includes/sql_update_task.class.php');

class update_104 extends sql_update_task {
	public $author		= 'Wallenium';
	public $version		= '1.0.4'; //new plus-version
	public $name		= '1.0.4 Update';

	public function __construct(){
		parent::__construct();

		$this->langs = array(
			'english' => array(
				'update_104'		=> 'EQdkp Plus 1.0.4 Update',
				'task01'			=> 'Add new permission for managing raid event confirmations',
			),
			'german' => array(
				'update_104'		=> 'EQdkp Plus 1.0.4 Update',
				'task01'			=> 'Füge ein neues Recht hinzu um die Raidevents besser verwalten zu können',
			),
		);

		$this->sqls = array(
			'task01' => "INSERT INTO __auth_options (auth_value, auth_default) VALUES ('a_cal_revent_conf','N');",
		);
	}
}

if(version_compare(PHP_VERSION, '5.3.0', '<')) registry::add_const('short_update_104', update_104::__shortcuts());
?>