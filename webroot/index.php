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

require dirname(__DIR__) . '/config/paths.php';
require QUICKAPPS_CORE . 'config/bootstrap.php';

use Cake\Network\Request;
use Cake\Network\Response;
use Cake\Routing\DispatcherFactory;

$dispatcher = DispatcherFactory::create();
$dispatcher->dispatch(
	Request::createFromGlobals(),
	new Response()
);
