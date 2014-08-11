<?php
/**
 * Licensed under The GPL-3.0 License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @since	 2.0.0
 * @author	 Christopher Castro <chris@quickapps.es>
 * @link	 http://www.quickappscms.org
 * @license	 http://opensource.org/licenses/gpl-3.0.html GPL-3.0 License
 */

/**
 * For built-in server
 */
if (php_sapi_name() === 'cli-server') {
	$_SERVER['PHP_SELF'] = '/' . basename(__FILE__);

	$url = parse_url(urldecode($_SERVER['REQUEST_URI']));
	$file = __DIR__ . $url['path'];
	if (strpos($url['path'], '..') === false && strpos($url['path'], '.') !== false && is_file($file)) {
		return false;
	}
}

/**
 * Full path to your website directory, WITHOUT a trailing DIRECTORY_SEPARATOR. In other words, the directory 
 * which holds your site's "webroot" directory.
 *
 * You should never change this.
 */
define('SITE_ROOT', dirname(__DIR__));

/**
 * Path to the "src" directory where QuickApps CMS core resides, WITH a trailing DIRECTORY_SEPARATOR.
 *
 * You can change this when your QuickApps CMS core is in a different location.
 * Useful on a shared core installation. 
 */
define('QUICKAPPS_PATH', SITE_ROOT . '/vendor/quickapps/cms/src/');

require QUICKAPPS_PATH . 'Config/bootstrap.php';

use Cake\Network\Request;
use Cake\Network\Response;
use Cake\Routing\DispatcherFactory;

$dispatcher = DispatcherFactory::create();
$dispatcher->dispatch(
	Request::createFromGlobals(),
	new Response()
);
