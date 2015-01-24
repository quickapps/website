<?php
/**
 * Licensed under The GPL-3.0 License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @since    2.0.0
 * @author   Christopher Castro <chris@quickapps.es>
 * @link     http://www.quickappscms.org
 * @license  http://opensource.org/licenses/gpl-3.0.html GPL-3.0 License
 */

/**
 * These defines should only be edited if you have QuickApps CMS installed in
 * a directory layout other than the way it is distributed.
 * When using custom settings be sure to use the DS and do not add a trailing DS.
 */

/**
 * Full path to your website directory, WITHOUT a trailing DIRECTORY_SEPARATOR.
 * In other words, the directory which holds your site's "webroot" directory.
 *
 * You should never change this.
 */
define('SITE_ROOT', dirname(__DIR__));

/**
 * Path to the "src" directory where QuickApps CMS core resides, WITH a trailing
 * DIRECTORY_SEPARATOR.
 *
 * You can change this when your QuickApps CMS core is in a different location.
 * Useful on a shared core installation. 
 */
define('QUICKAPPS_CORE', SITE_ROOT . '/vendor/quickapps/cms/');
