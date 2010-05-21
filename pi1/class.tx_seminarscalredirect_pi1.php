<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2010 Oliver Klee <typo3-coding@oliverklee.de>
*  All rights reserved.
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * Plugin 'seminars/cal redirect' for the 'seminarscalredirect' extension.
 *
 * @author Oliver Klee <typo3-coding@oliverklee.de>
 *
 * @package TYPO3
 * @subpackage tx_seminarscalredirect
 */
class tx_seminarscalredirect_pi1 extends tslib_pibase {
	/**
	 * @var string
	 */
	public $prefixId = 'tx_seminarscalredirect_pi1';

	/**
	 * @var string
	 */
	public $scriptRelPath = 'pi1/class.tx_seminarscalredirect_pi1.php';

	/**
	 * @var string
	 */
	public $extKey = 'seminarscalredirect';

	/**
	 * @var boolean
	 */
	public $pi_USER_INT_obj = TRUE;

	/**
	 * Redirects.
	 *
	 * @return string an empty string
	 */
	function main() {
		return '';
	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/seminarscalredirect/pi1/class.tx_seminarscalredirect_pi1.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/seminarscalredirect/pi1/class.tx_seminarscalredirect_pi1.php']);
}
?>