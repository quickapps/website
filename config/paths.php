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
 * These defines should only be edited if you have QuickAppsCMS installed in
 * a directory layout other than the way it is distributed.
 *
 * You can overwrite QuickAppsCMS's constants by redefining them in this file. This
 * is for advanced users only, those with a proper understanding of PHP and its
 * syntax.
 */

/**
 * Full path to your website directory, WITHOUT a trailing DIRECTORY_SEPARATOR.
 * In other words, the directory which holds your site's "webroot" directory.
 *
 * You should never change this.
 */
define('SITE_ROOT', dirname(__DIR__));

/**
 * Path to QuickAppsCMS core plugin which holds the "src" directory. WITH a trailing
 * DIRECTORY_SEPARATOR.
 *
 * You can change this when your QuickAppsCMS core plugin is in a different location.
 * Useful on a shared core installation.
 */
define('QUICKAPPS_CORE', SITE_ROOT . '/vendor/quickapps/cms/plugins/CMS/');
