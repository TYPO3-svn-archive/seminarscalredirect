<?php

########################################################################
# Extension Manager/Repository config file for ext "seminarscalredirect".
#
# Auto generated 21-05-2010 11:55
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'seminars/cal redirect',
	'description' => 'This extension creates a redirect from cal to onetimeaccount/seminars.',
	'category' => 'plugin',
	'author' => 'Oliver Klee',
	'author_email' => 'typo3-coding@oliverklee.de',
	'shy' => '',
	'dependencies' => 'cal,cal_ts_service,oelib,onetimeaccount,seminars',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => 'oliverklee.de',
	'version' => '0.1.0',
	'constraints' => array(
		'depends' => array(
			'php' => '5.2.0-0.0.0',
			'typo3' => '4.3.0-0.0.0',
			'cal' => '',
			'cal_ts_service' => '',
			'oelib' => '0.7.0-',
			'onetimeaccount' => '0.7.0-',
			'seminars' => '0.9.0-',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:7:{s:9:"ChangeLog";s:4:"ac59";s:16:"ext_autoload.php";s:4:"1cbb";s:12:"ext_icon.gif";s:4:"1bdc";s:17:"ext_localconf.php";s:4:"6cde";s:14:"ext_tables.php";s:4:"885a";s:16:"locallang_db.xml";s:4:"6519";s:40:"pi1/class.tx_seminarscalredirect_pi1.php";s:4:"905e";}',
	'suggests' => array(
	),
);

?>