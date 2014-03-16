<?php
/**
 * Index
 *
 * The Front Controller for handling every request
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
// for built-in server
if (php_sapi_name() === 'cli-server') {
	$_SERVER['PHP_SELF'] = '/' . basename(__FILE__);

	$url = urldecode($_SERVER['REQUEST_URI']);
	$file = __DIR__ . $url;
	if (strpos($url, '..') === false && strpos($url, '.') !== false && is_file($file)) {
		return false;
	}
}

/**
 * The full path to the directory which holds "App", WITHOUT a trailing DS.
 */
define('SITE_ROOT', dirname(__DIR__));

/**
 * Path Composer's vendor directory.
 * There is where quickapps & cakephp must be located.
 */
define('VENDOR_INCLUDE_PATH', SITE_ROOT . '/vendor');


/**
 * Path to the QuickApps directory.
 */
define('QUICKAPPS_CORE_INCLUDE_PATH', VENDOR_INCLUDE_PATH . '/quickapps/cms/src');

require QUICKAPPS_CORE_INCLUDE_PATH . '/Config/bootstrap.php';
use Cake\Core\Configure;
use Cake\Network\Request;
use Cake\Network\Response;
use Cake\Routing\Dispatcher;

$Dispatcher = new Dispatcher();
$Dispatcher->dispatch(
	Request::createFromGlobals(),
	new Response()
);
