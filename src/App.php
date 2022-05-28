<?php
/**
 * App class.
 *
 * @package   Backdrop
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2019-2022. Benjamin Lu
 * @link      https://github.com/benlumia007/backdrop-proxies
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 */

namespace Benlumia007\Backdrop\Proxies;

/**
 * App static proxy class.
 *
 * @since  1.0.0
 * @access public
 */
class App extends Proxy {

	/**
	 * Returns the name of the accessor for object registered in the container.
	 *
	 * @since  1.0.0
	 * @access protected
	 * @return string
	 */
	protected static function accessor() {

		return 'app';
	}
}